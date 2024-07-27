<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/imgs/icons/icon-logo.svg" type="image/x-icon">

        <title>Recuperação de senha</title>

        <!-- Fonts Google -->

        <link rel="preconnect" href="https://fonts.googleapis.com">

        <!-- Styles -->

        <link rel="stylesheet" href="/css/password-recovery.css">
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
    <section class="container-fluid d-flex justify-content-center align-items-center vh-100 px-5 py-5 bg-white row" id="login">
        <section id="section-form">
            <h3 id="title-pass-rec">Recuperação de senha</h3>
            <p id="sub-title-pass-rec">Coloque seu <b>email</b> no campo abaixo para prosseguir.</p>
            <form action="" class="">
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Email" id="input-email">
                </div>
                <div class="justify-content-center d-flex">
                   <input type="submit" value="Prosseguir" class="btn w-50" id="btn-proceed">
                </div>
            </form>
        </section>
    </section>
    </body>
</html>