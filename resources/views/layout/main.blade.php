<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/imgs/icons/icon-logo.svg" type="image/x-icon">

        <title>@yield('title')</title>

        <!-- Fonts Google -->

        <link rel="preconnect" href="https://fonts.googleapis.com">

        <!-- Styles -->

        <link rel="stylesheet" href="/css/main.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- JavaScript -->

        <script src="/js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4ClPipBUdRQ+yhWlf0nMKU9ZXmrWQ+VwGvGZl5sG4giQnDqf5aMJbB/+6" crossorigin="anonymous"></script>

    </head>
    <body>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom shadow" id="header">
      <div class="col-md-3 mb-2 mb-md-0">
      <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
        <img src="/imgs/logo.png" alt="" width="120" height="120" class="img-fluid" id="logo-header">
        <div class="d-flex align-items-center">
            <div id="barra"></div>
            <p class="mb-0 mx-2">Open Academy</p>
        </div>
        </a>
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0" id="nav-header">
        <li><a href="/" class="nav-link px-2 link-dark">Inicio</a></li>
        <li><a href="/#blog" class="nav-link px-2 link-dark">Blog</a></li>
        <li><a href="/#assessments" class="nav-link px-2 link-dark">Avaliações</a></li>
        <li><a href="/#faq" class="nav-link px-2 link-dark">Ajuda</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <a href="/Login"><button type="button" class="btn" id="btn-acess">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
          </svg>Acesso</button></a>
      </div>
    </header>
        @yield('content')
    <a href="#header" class="position-fixed bottom-0 end-0 m-2"><button type="button" class="btn" id="btn-back">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5"/>
      </svg>
    </button></a>
    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3" id="nav-footer">
            <li class="nav-item"><a href="/" class="nav-link px-2 text-body-secondary">Inicio</a></li>
            <li class="nav-item"><a href="/#blog" class="nav-link px-2 text-body-secondary">Blog</a></li>
            <li class="nav-item"><a href="/#assessments" class="nav-link px-2 text-body-secondary">Avaliações</a></li>
            <li class="nav-item"><a href="/#faq" class="nav-link px-2 text-body-secondary">Ajuda</a></li>
        </ul>
        <p class="text-center text-body-secondary">© 2024 Banco Santander (Brasil) S.A. </br> CNPJ: 90.400.888/0001-42
        Av. Presidente Juscelino Kubitscheck 2041/2235 – Vila Olímpia – São Paulo/SP.</p>
      </footer>

    </body>
</html>