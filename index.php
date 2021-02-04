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
    <div class="container-fluid header pt-4 px-0 pb-5">
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <h1>dev.finance$</h1>
            </div>
        </div>
    </div>

    <main>
        <div>
            <div class="container balanco">
                <h2 class="mb-3">Balanço</h2>

                <div class="card py-4 px-5 mb-4" style="width: auto;">
                    <h3 class="fs-6 text">Entradas</h3>
                    <p class="fs-2 text lh-lg mt-3">R$ 5.000,00</p>
                </div>
                <div class="card py-4 px-5 mb-4" style="width: auto;">
                    <h3 class="fs-6 text">Saídas</h3>
                    <p class="fs-2 text lh-lg mt-3">R$ 2.000,00</p>
                </div>
                <div class="card total py-4 px-5 mb-4" style="width: auto;">
                    <h3 class="fs-6 text">Total</h3>
                    <p class="fs-2 text lh-lg mt-3">R$ 3.000,00</p>
                </div>
            </div>
        </div>

        <div>
            <div class="container transacoes">
                <h2 class="mt-5 mb-3 fw-normal">Transações</h2>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="border-bottom py-3 px-4">Descrição</th>
                            <th scope="col" class="border-bottom py-3 px-4">Valor</th>
                            <th scope="col" class="border-bottom py-3 px-4">Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Luz</td>
                            <td>- R$ 500,00</td>
                            <td>23/01/2021</td>
                        </tr>
                        <tr>
                            <td>Criação de Website</td>
                            <td>R$ 5.000,00</td>
                            <td>24/01/2021</td>
                        </tr>
                        <tr>
                            <td>Aluguel</td>
                            <td>- R$ 1.500,00</td>
                            <td>26/01/2021</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <footer class="text-center">
        <div class="container footer">
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