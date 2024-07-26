<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/imgs/icons/icon-logo.svg" type="image/x-icon">

        <title>Registro</title>

        <!-- Fonts Google -->

        <link rel="preconnect" href="https://fonts.googleapis.com">

        <!-- Styles -->

        <link rel="stylesheet" href="/css/registration.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4ClPipBUdRQ+yhWlf0nMKU9ZXmrWQ+VwGvGZl5sG4giQnDqf5aMJbB/+6" crossorigin="anonymous"></script>

    </head>
    <body>
        <a href="/" class="fixed-top pull-left m-2"><button type="button" class="btn" id="btn-back">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"></path>
            </svg>
        </button></a>
        <section class="container-fluid d-flex justify-content-center align-items-center vh-100 px-5 py-5 bg-white row">
            <section id="sect-reg">
                <h3 id="title-reg">Bem-vindo</h3>
                <p id="sub-title-reg">Faça seu registro para continuar</p>
                <form id="form-reg">
                    <div class="row" id="part-1">
                        <div class="col" id="colum-1">
                            <input type="text" name="" id="" class="form-control" placeholder="Nome">
                        </div>
                        <div class="col" id="colum-2">
                            <input type="text" name="" id="" class="form-control" placeholder="Sobrenome">
                        </div>
                    </div>
                    <div class="row mt-3" id="part-2">
                        <div class="col" id="colum-3">
                            <input type="email" name="" id="" class="form-control" placeholder="Email">
                            <label for=""></label>
                        </div>
                        <div class="col" id="colum-4">
                            <input type="tel" name="" id="" class="form-control" placeholder="Número de telefone">
                        </div>
                    </div>
                    <hr>
                    <div class="row" id="part-3">
                        <div class="col" id="colum-5">
                        <input type="password" class="form-control" placeholder="Senha" id="input-password">
                        </div>
                        <div class="col" id="colum-6">
                            <input type="password" class="form-control" placeholder="Confirme sua senha" id="input-password">
                        </div>
                    </div>
                    <div id="infor-pass-reg">
                        <p>Sua senha deve conter:</p>
                        <ul>
                            <li>Pelo menos 8 caracteres</li>
                            <li>Uma letra maiúscula (A-Z)</li>
                            <li>Uma letra minúscula (a-z)</li>
                            <li>Um número (0-9)</li>
                            <li>Um caractere especial (como !, @, #, $, etc.)</li>
                        </ul>
                    </div>
                    <div class="d-flex justify-content-center">
                    <input type="submit" value="Acessar" class="btn w-50" id="btn-reg">
                    </div>
                </form>
            </section>
            <section class="d-flex justify-content-center mt-3" id="msg-not-registration">
                <p>Caso já tenha acesso, <a href="/Login" id="btn-registration">ENTRAR</a></p>
            </section> 
        </section>
    </body>
</html>