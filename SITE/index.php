<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Clínicas Ondontológica</title>
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    </head>
    <body>
        <?php 
        $arquivo = substr(strrchr(__FILE__, DIRECTORY_SEPARATOR), 1);
        include('cabecalho.php')
        
        ?>
        <div id="carouselSite" class="carousel slide mt-5" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
                <li data-target="#carouselSite" data-slide-to="1"></li>
                <li data-target="#carouselSite" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/img1.jpg" id="mg1" class="img-fluid d-block" Style="width:2000px;height:400px">
                    </div>  
                    <div class="carousel-item">
                        <img src="img/img2.jpg" id="mg2" class="img-fluid d-block" Style="width:2000px;height:400px">
                    </div>
                    <div class="carousel-item">
                        <img src="img/img3.jpg" id="mg3" class="img-fluid d-block" Style="width:2000px;height:400px">
                    </div>       
                </div>
                <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="sr-only">Proximo</span>
                </a>
            </div>
        </div>
        <div class="container mb-5">
            <div class="row">
                <div class="col-12 text-center my-5 p-2">
                    <h1 class="display-2">Venha Sorrir!</h1>
                    <h6 class="mt-4">Nossa clinica tem os mais diversos tipos de tratamentos odontologicos e Analises médicas para seu tratamento. A melhor equipe com os melhores profissionais de Divesas areas para cuidader do seu Sorriso e de sua Saude.</h6>
                    <br>
                </div>
            </div>
        </div>
        <div class="container-fluid mb-5 bg-dark text-light">
            <div class="row">
                <div class="col-12 text-center my-1 mt-5 p-2">
                    <h1 class="display-3">Quem Somos!</h1>
                    <h6 class="mt-4">A mais de 10 anos no mercado de Odontologia, Temos o orgulho de atender nossos pacientes com a melhor tecnoclogia e profissionais na aréa. Espaços reservados para analises médicas de alta precisão e rapides. Nosso orgulho esta no seu sorriso e bem estar!.</h6>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-12 text-center mb-5 p-2">
                    <img src="img/img4.png" class="img-thumbnail">
                </div>
                <div class="col-lg-6 col-sm-12 text-center mb-5 p-2">
                    <br>
                    <br>
                    <br>
                   <a class="display-4" href="#">Agende uma Visita!</a>
                </div>
            </div>
        </div>
        <?php include('rodape.php')?>
        
        <script src="node_modules/jquery/jquery.js"></script>
        <script src="node_modules/popper.js/dist/umd/popper.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    </body>
</html>
