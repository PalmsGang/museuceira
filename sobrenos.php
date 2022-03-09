<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Merienda&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
        <link href="css/mycss.css" rel="stylesheet" type="text/css"/>
        <link href="fontawesome/css/all.css" rel="stylesheet">
        <title>Museu CEIRA</title>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light fixed">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="img/logo.png" style="width: 68px;"/></a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse mx-5" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php" style="color: #c9a050;font-size: 18px;">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobrenos.php" style="color: #c9a050;font-size: 18px;">Sobre nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: #c9a050;font-size: 18px;">Galeria</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactos.php" style="color: #c9a050;font-size: 18px;">Contactos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>  
        <section class="section-gap informacao">
            <div class="container" style="padding-top: 150px;">
                <div class="row d-flex justify-content-center">
                    <div class="menu-content pb-40 col-lg-8">
                        <div class="title text-center">
                            <h1 class="mb-10">Umas poucas palavras sobre o nosso museu</h1>
                        </div>
                    </div>
                </div>					
                <div class="single-info row mt-40">
                    <div class="col-lg-6 col-md-12 mt-120 text-center no-padding informacaoesq">
                        <div class="info-thumb">
                            <img src="img/teste2.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 no-padding info-rigth">
                        <div class="conteudoinformacao">
                            <h2 class="pb-30">O CEIRA</h2>
                            <p>
                                instalado no espaço do antigo lagar de azeite do Porto de Manes, pretende ser um espaço de partilha de memórias intergeracionais que homenageia proprietários, trabalhadores rurais, homens e mulheres, que contribuíram, com o seu esforço e dedicação quotidianos, para o desenvolvimento deste território.									
                            </p>
                            <br>
                            <p>
                                A exposição permanente do CEIRA leva o visitante a percorrer as diferentes fases do ciclo agrícola, nomeadamente o processo de cultivo dos cereais, a partir da seleção de um conjunto de peças adquiridas pela autarquia ao longo de vários anos permitindo, desta forma, a sua recuperação, preservação, investigação e divulgação junto de todos.									
                            </p>
                            <br>
                            <p>
                                As peças remetem-nos para uma prática de uma agricultura tradicional e também para as primeiras transformações tecnológicas ocorridas com maior intensidade a partir de meados do século XX, com o uso da maquinaria nas rotinas da lavoura. Faz-se referência às diversas operações agrícolas e respetivos instrumentos de trabalho que lhe estão associados, para que o visitante distinga as diferentes fases do ciclo: SEMENTEIRA, MONDA, CEIFA, ACARRETOS E DEBULHA.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="section-gap informacao">
            <div class="container" style="padding-top: 150px;">				
                <div class="single-info row mt-40">
                    <div class="col-lg-6 col-md-12 no-padding info-rigth">
                        <div class="conteudoinformacao">
                            <p>
                                Os ofícios complementares à lavoura também são aqui destacados, nomeadamente o de FERREIRO e o de CARPINTEIRO, responsáveis pelo fabrico de todo o tipo de alfaias agricolas, carros e acessórios, intervenientes nos diferentes momentos do calendário agrícola. A coleção possui também um conjunto significativo de peças associadas à atividade do QUEIJEIRO.									
                            </p>
                            <p>
                                Esta coleção possui assim um papel primordial na preservação da memória e da identidade do universo rural que os objetos expostos representam e testemunham.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 mt-120 text-center no-padding informacaoesq">
                        <div class="info-thumb">
                            <img src="img/background2.jpg" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br><br><br><br>




        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
        </script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
        </script> 
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
        </script>

        <footer>

        </footer>
    </body>
     <a href="#" class="back-to-top" style="display: inline;">
            <i class="fa fa-arrow-circle-up"></i>
        </a>
        <script type="text/javascript" src="js/jquery.js">
    <script>
        jQuery(document).ready(function () {
                var offset = 250;
        var duration = 300;
        jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() > offset) {
        jQuery('.back-to-top').fadeIn(duration);
        } else {
        jQuery('.back-to-top').fadeOut(duration);
        }
        });
        jQuery('.back-to-top').click(function (event) {
        file:///K|/My%20Udemy%20Courses/Start%20your%20own%20web%20design%20business/back%20to%20top.txt[1/16/2017 3:49:46 PM]
                event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
        })
                });
                </script>
</html>
