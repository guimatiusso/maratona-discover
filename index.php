<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,700;1,100;1,400;1,700&display=swap" rel="stylesheet">

    <title>dev.finance$</title>
  </head>

  <body>
    <div class="container-fluid header">
        <div class="row justify-content-md-center mb-5">
            <div class="col-md-auto">
                <img src="./images/logo.svg" class="img-fluid" alt="Logo Dev Finance">
            </div>
        </div>
    </div>

    <main>
        <div>
            <div class="container balanco">
                <div class="row">
                    <h2 class="mb-3 sr-only">Balanço</h2>

                    <div class="card py-4 px-5 mb-4 mx-5" style="width: auto;">
                        <h3 class="fs-6 text">
                            <span>Entradas</span>
                            <img src="./images/income.svg" alt="Imagem de Entradas">
                        </h3>
                        <p class="fs-2 text lh-lg mt-3">R$ 5.000,00</p>
                    </div>
                    <div class="card py-4 px-5 mb-4 mx-5" style="width: auto;">
                        <h3 class="fs-6 text">
                            <span>Saídas</span>
                            <img src="./images/expense.svg" alt="Imagem de Saidas">
                        </h3>
                        <p class="fs-2 text lh-lg mt-3">R$ 2.000,00</p>
                    </div>
                    <div class="card total py-4 px-5 mb-4 mx-5" style="width: auto;">
                        <h3 class="fs-6 text">
                            <span>Total</span>
                            <img src="./images/total.svg" alt="Imagem de Total">
                        </h3>
                        <p class="fs-2 text lh-lg mt-3">R$ 3.000,00</p>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <div class="container transacoes">
                <h2 class="mt-5 mb-3 fw-normal sr-only">Transações</h2>

                <a href="#" class="btn btn-link text-decoration-none mb-3">+ Nova Transação</a>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="border-bottom py-3 px-4">Descrição</th>
                            <th scope="col" class="border-bottom py-3 px-4">Valor</th>
                            <th scope="col" class="border-bottom py-3 px-4">Data</th>
                            <th scope="col" class="border-bottom py-3 px-4"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="descricao">Luz</td>
                            <td class="negativo">- R$ 500,00</td>
                            <td class="data">23/01/2021</td>
                            <td>
                                <img src="./images/minus.svg" alt="Remover transação">
                            </td>
                        </tr>
                        <tr>
                            <td class="descricao">Criação de Website</td>
                            <td class="positivo">R$ 5.000,00</td>
                            <td class="data">24/01/2021</td>
                            <td>
                                <img src="./images/minus.svg" alt="Remover transação">
                            </td>
                        </tr>
                        <tr>
                            <td class="descricao">Aluguel</td>
                            <td class="negativo">- R$ 1.500,00</td>
                            <td class="data">26/01/2021</td>
                            <td>
                                <img src="./images/minus.svg" alt="Remover transação">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <footer class="text-center">
        <div class="container footer pt-5 pb-4">
            <p>dev.finance$</p>
        </div>        
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>