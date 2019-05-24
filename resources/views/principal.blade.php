<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SETA</title>

        <link rel="stylesheet" type="text/css" href="style.css">

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>

    <div class="navbar">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a class="brand" href="home">SETA - Sistema de Entregas de Trabalhos e Atividades</a>
                <div class="nav-collapse">
                    <ul class="nav">
                    <li class="activite"><a href="home">Home</a></li>
                    <li class="activite"><a href="alunos">Alunos</a></li>
                    <li class="activite"><a href="cursos">Cursos</a></li>
                    <li class="activite"><a href="professores">Professores</a></li>
                    <li class="activite"><a href="disciplinas">Disciplinas</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div>
    @yield('cabecalho')
    </div>

    <div>
    @yield('conteudo')
    </div>


    <footer>    
        <div class="bottom section-padding mt-3">
                <div class="container mt-4">
                    <div class="row t-4">
                        <div class="col-md-12 text-center mt-4">
                            <div class="copyright mt-4">
                                <p>© <span>2019 </span> <a href="http://www.gileduardo.com.br/" class="transition">Gil Eduardo de Andrade</a> | Todos os direitos reservados.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </footer>

<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    </body>
</html>
