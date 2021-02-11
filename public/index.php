<?php
include __DIR__ . "/../layouts/cabecalho.php";
?>

    <main>
        <div class="container balanco">
            <h2 class="mb-3 sr-only">Balanço</h2>
            <div class="card py-4 px-5 mb-4 mx-5">
                <h3 class="fs-6 text">
                    <span>Entradas</span>
                    <img src="./images/income.svg" alt="Imagem de Entradas">
                </h3>
                <p class="fs-4 text lh-base mt-3" id="incomeDisplay">R$ 0,00</p>
            </div>
            <div class="card py-4 px-5 mb-4 mx-5">
                <h3 class="fs-6 text">
                    <span>Saídas</span>
                    <img src="./images/expense.svg" alt="Imagem de Saidas">
                </h3>
                <p class="fs-4 text lh-base mt-3" id="expenseDisplay">R$ 0,00</p>
            </div>
            <div class="card total py-4 px-5 mb-4 mx-5">
                <h3 class="fs-6 text">
                    <span>Total</span>
                    <img src="./images/total.svg" alt="Imagem de Total">
                </h3>
                <p class="fs-4 text lh-base mt-3" id="totalDisplay">R$ 0,00</p>
            </div>
        </div>

        <div class="container transacoes">
            <h2 class="mt-5 mb-3 fw-normal sr-only">Transações</h2>

            <!-- Button trigger modal -->
            <!-- onclick="modal.open()" -->
            <a type="button" class="btn btn-link text-decoration-none mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Nova Transação</a>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="py-3 px-4 border-0">Descrição</th>
                        <th scope="col" class="py-3 px-4 border-0">Valor</th>
                        <th scope="col" class="py-3 px-4 border-0">Data</th>
                        <th scope="col" class="py-3 px-4 border-0"></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="adicionarNovaTrasação" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h6>Nova Transação</h6>
                    <form action="" onsubmit="Form.submit(event)">
                        <div class="mb-3">
                            <label for="descricao" class="form-label sr-only">Descrição</label>
                            <input 
                                type="text" 
                                class="form-control" 
                                id="descricao" 
                                name="descricao" 
                                aria-describedby="Descrição da transação" 
                                placeholder="Descrição">
                        </div>
                        <div class="mb-3">
                            <label for="valor" class="form-label sr-only">Valor</label>
                            <input 
                                type="number" 
                                class="form-control" 
                                id="valor" 
                                name="valor" 
                                aria-describedby="Valor da transação" 
                                placeholder="0,00" 
                                step="0.01">
                            <div id="valorlHelp" class="form-text">Use o sinal - (negativo) para despesas e , (vírgula) para casas decimais.</div>
                        </div>
                        <div class="mb-3">
                            <label for="data" class="form-label sr-only">Data</label>
                            <input 
                                type="date" 
                                class="form-control" 
                                id="data" 
                                name="data" 
                                aria-describedby="Data da transação">
                        </div>
                        <div class="modal-footer justify-content-between">
                            <!-- onclick="modal.close()" -->
                            <a href="#" class="btn btn-link px-5 py-3 text-decoration-none shadow-none border border-2 border-danger" data-bs-dismiss="modal">Cancelar</a>
                            <button type="submit" class="btn btn-primary px-5 py-3 border-0 shadow-none">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
include __DIR__ . "/../layouts/rodape.php";
?>