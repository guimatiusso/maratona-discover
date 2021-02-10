// const modal = {
//     open(){
//         //Abrir Modal
//         //Adicionar a class active ao modal
//         document
//             .querySelector('.modal')
//             .classList
//             .add('active')
//     },
//     close(){
//         //Fechar Modal
//         //Remover a classe active do modal
//         document
//             .querySelector('.modal')
//             .classList
//             .remove('active')
//     }
// }

const Storage = {
    get () {
        return JSON.parse(localStorage.getItem('dev.finance:trnasactions')) || []
    },

    set (transactions) {
        localStorage.setItem("dev.finances:transactions", JSON.stringify(transactions))
    }
}

const Transaction = {
    all: Storage.get(),

    add(transaction){
        Transaction.all.push(transaction)

        App.reload()
    },

    remove(index){
        Transaction.all.splice(index, 1)

        App.reload()
    },

    incomes(){
        //somar as entradas
        let entrada = 0;

        // acessando as transações,
        //para cada transação,
        Transaction.all.forEach(transaction => {
            //se for > 0
            if ( transaction.montante > 0) {
                //somar a uma variavel e retornar a variavel
                entrada += transaction.montante;
            }
        })

        return entrada
    },

    expenses(){
        //somar as saidas
        let saidas = 0;

        // acessando as transações,
        //para cada transação,
        Transaction.all.forEach(transaction => {
            //se for < 0
            if ( transaction.montante < 0) {
                //somar a uma variavel e retornar a variavel
                saidas += transaction.montante;
            }
        })

        return saidas
    },

    total(){
        //entradas - saidas

        return Transaction.incomes() + Transaction.expenses()
    }
}

const DOM = {
    transactionContainer: document.querySelector('.table tbody'),

    addtransaction (transaction, index){
        const tr = document.createElement('tr') //criação da tag tr no html
        tr.innerHTML = DOM.innerHTMLTransaction(transaction, index) //atribuindo o retorno da função innerHTMLTransaction p/ a const tr
        tr.dataset.index = index

        DOM.transactionContainer.appendChild(tr)
    },

    innerHTMLTransaction(transaction, index){

        const CSSclass = transaction.montante > 0 ? "positivo" : "negativo"

        const montante = Utils.formatCurrency(transaction.montante)

        const html = `
        <td class="border-0 descricao">${transaction.descricao}</td>
        <td class="border-0 ${CSSclass}">${montante}</td>
        <td class="border-0 data">${transaction.data}</td>
        <td class="border-0">
            <img onclick="Transaction.remove(${index})" src="./images/minus.svg" alt="Remover transação">
        </td>
        `

        return html
    },

    updateBalance() {
        document
            .getElementById('incomeDisplay')
            .innerHTML = Utils.formatCurrency(Transaction.incomes())
        document
            .getElementById('expenseDisplay')
            .innerHTML = Utils.formatCurrency(Transaction.expenses())
        document
            .getElementById('totalDisplay')
            .innerHTML = Utils.formatCurrency(Transaction.total())
    },

    clearTransactions(){
        DOM.transactionContainer.innerHTML = ""
    }
}

const Utils = {
    formatDate(data){
        const splittedDate = data.split("-")

        return `${splittedDate[2]}/${splittedDate[1]}/${splittedDate[0]}`
    },

    formatAmount(value){
        value = Number(value.replace(/\,\./g, "")) * 100

        return value
    },
    
    formatCurrency(value){
        const signal = Number(value) < 0 ? "-" : ""

        value = String(value).replace(/\D/g, "")

        value = Number(value) / 100

        value = value.toLocaleString("pt-br", {
            style: "currency",
            currency: "BRL"
        })

        return signal + value
    }
}

const Form = {
    descricao: document.querySelector('input#descricao'),
    montante: document.querySelector('input#valor'),
    data: document.querySelector('input#data'),

    getValues(){
        return {
            descricao: Form.descricao.value,
            montante: Form.montante.value,
            data: Form.data.value,
        }
    },

    formatValues(){
        let { descricao, montante, data} = Form.getValues()

        montante = Utils.formatAmount(montante)

        data = Utils.formatDate(data)

        return {
            descricao,
            montante,
            data
        }
    },

    validateFields() {
        const { descricao, montante, data} = Form.getValues()
        
        if (descricao.trim() === "" || 
            montante.trim() === "" || 
            data.trim() === "") {
                throw new Error("Por favor preencha todos os campos")
        }
    },

    clearFields() {
        Form.descricao.value = ""
        Form.montante.value = ""
        Form.data.value = ""
    },

    submit(event) {
        event.preventDefault()

        try {

            //verificar se todas as informações foram preenchidas
            Form.validateFields()
            //formatar os dados para salvar
            const transaction = Form.formatValues()
            //salvar
            Transaction.add(transaction)
            //apagar os dados do formulario
            Form.clearFields()
            //modal fecha
            // modal.close()
            //atualizar a aplicação
            App.reload() //no Transaction.add já tem um App.reload

        } catch (error) {
            console.log(error)
        }
    }
}

const App = {
    init() {
        Transaction.all.forEach((transaction, index) => {
            DOM.addtransaction(transaction, index)
        })

        DOM.updateBalance() 

        Storage.set(Transaction.all)
    },

    reload() {
        DOM.clearTransactions()
        App.init()
    },
}

App.init()