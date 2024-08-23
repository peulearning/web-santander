<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/imgs/icons/icon-logo.svg" type="image/x-icon">

        <title>Aluno</title>

        <!-- Fonts Google -->

        <link rel="preconnect" href="https://fonts.googleapis.com">

        <!-- Styles -->

        <link rel="stylesheet" href="/css/dashboard.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    </head>
    <body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="active logo d-flex justify-content-center align-items-center" href="#">
                            <img src="/imgs/logo-icon.png" alt="" class="img-fluid">    
                            <span class="link-text">| Open Academy</span>
                            </a>
                        </li>
                        <li class="nav-item mt-2 mb-4">
                            <div class="active profile d-flex justify-content-center align-items-center" href="#">
                                <img src="/imgs/foto-profile-teste2.jpg" alt="" class="img-fluid">
                                <h4 class="link-text">{{ $nome }}</h4>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#" onclick="showSection('home')">
                            <i class="bi bi-house"></i> <span class="link-text">Inicio</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="showSection('courses')">
                                <i class="bi bi-book"></i> <span class="link-text">Cursos</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="showSection('configuracoes-da-conta')">
                                <i class="bi bi-gear"></i> <span class="link-text">Configurações</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="showSection('aulas')">
                                <i class="bi bi-camera-video"></i> <span class="link-text">Aulas</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="showSection('progresso-avaliacoes')">
                                <i class="bi bi-graph-up"></i> <span class="link-text">Progresso e Avaliações</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="showSection('certificacoes')">
                                <i class="bi bi-award"></i> <span class="link-text">Certificações</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="showSection('pagamentos')">
                                <i class="bi bi-credit-card"></i> <span class="link-text">Pagamentos</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" onclick="showSection('suporte-ajuda')">
                                <i class="bi bi-question-circle"></i> <span class="link-text">Suporte e Ajuda</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main content -->
            <main class="main-content">
                <!--Home-->
                <section id="home" class="content-section active">
        <!-- Mensagens de bem-vindo -->
                <div class="row">
                    <div class="col-md-8">
                        <section class="welc-dash w-100">
                            <div class="row">
                                <div class="col">
                                    <div class="clock-container text-center d-flex justify-content-start align-items-center">
                                        <i class="bi bi-calendar-fill"></i>
                                        <p id="clock" class="clock mt-3"></p>
                                    </div>
                                    <div class="welc-text">
                                        <h4>Bem-vindo, {{ $nome }}.</h4>
                                        <p>Bons estudos.</p>
                                    </div>
                                </div>
                                <div class="col d-flex justify-content-end">
                                    <img src="/imgs/calendar.png" class="img-fluid w-50 h-100">
                                </div>
                            </div>
                        </section>
                        <!-- Cursos ativos -->
                        <section class="courses-actives mt-3">
                            <h4>Cursos ativos</h4>
                            <!-- Card -->
                            <div class="card mt-4">
                                <img src="/imgs/img-course.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center">Curso 1</h5>
                                    <p class="card-text"><i class="bi bi-play"></i>45 vídeos</p>
                                </div>
                                    <a href="/Curso/1" class="d-flex justify-content-center"><button type="button" class="btn courses-actives-btn">Acessar</button></a>
                            </div>        
                        </section>
                    </div>
                    <div class="col-md-2 mt-10">
                        <!-- Painel de notificação -->
                        <div id="notification-panel">
                            <div id="notification-header">
                                <h2>Notificações</h2>
                            </div>
                            <ul id="notification-list">
                                <!-- Notificações serão adicionadas aqui -->
                            </ul>
                        </div>
                        <div class="col-md-2 mt-10">
                            <!-- Painel de informações rápidas -->
                            <div id="quick-info-panel">
                            <h2>Informações Rápidas</h2>
                            <ul>
                                <li>
                                <span class="icon"><i class="bi bi-mortarboard-fill"></i></span>
                                <span class="info">Cursos Concluídos: <strong>5</strong></span>
                                </li>
                                <li>
                                <span class="icon"><i class="bi bi-clock-history"></i></i></span>
                                <span class="info">Horas de Estudo: <strong>100</strong></span>
                                </li>
                                <li>
                                <span class="icon"><i class="bi bi-patch-check-fill"></i></span>
                                <span class="info">Certificados Obtidos: <strong>3</strong></span>
                                </li>
                            </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <!--Cursos-->
                <section id="courses" class="content-section">
                    <h2>Cursos</h2>
                </section>

                <section id="configuracoes-da-conta" class="content-section">
                    <h2>Configurações da Conta</h2>
                    
                </section>

                <section id="aulas" class="content-section">
                    <h2>Aulas</h2>
                    <!-- Conteúdo da seção -->
                </section>

                <section id="progresso-avaliacoes" class="content-section">
                    <h2>Progresso e Avaliações</h2>
                    <!-- Conteúdo da seção -->
                </section>

                <section id="certificacoes" class="content-section">
                    <h2>Certificações</h2>
                    <!-- Conteúdo da seção -->
                </section>

                <section id="pagamentos" class="content-section">
                    <h2>Pagamentos</h2>
                    <!-- Conteúdo da seção -->
                </section>

                <section id="suporte-ajuda" class="content-section">
                    <h2>Suporte e Ajuda</h2>
                    <!-- Conteúdo da seção -->
                </section>
            </main>
        </div>
    </div>
    <script src="/js/notification.js"></script>
    <script src="/js/clock.js"></script>
    <script src="/js/sideBar.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>