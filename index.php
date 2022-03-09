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
        <div class="carousel slide carousel-fade" data-ride="carousel" id="carouselExampleIndicators">
            <ol class="carousel-indicators">
                <li class="active" data-slide-to="0" data-target="#carouselExampleIndicators"></li>
                <li data-slide-to="1" data-target="#carouselExampleIndicators"></li>
                <li data-slide-to="2" data-target="#carouselExampleIndicators"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img alt="First slide" class="d-block w-100" src="img/background3.jpg">
                </div>
                <div class="carousel-item">
                    <img alt="Second slide" class="d-block w-100" src="img/background2.jpg">
                </div>
                <div class="carousel-item">
                    <img alt="Third slide" class="d-block w-100" src="img/background1.jpg">
                </div>
            </div><a class="carousel-control-prev" data-slide="prev" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" data-slide="next" href="#carouselExampleIndicators" role="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
        </div>

        <section class="mx-5 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card" ">
                            <div class="card-body cartas">
                                <div class="text-center">
                                    <i class="fa-solid fa-clock fa-3x rounded" style="color: #c9a050;"></i>
                                </div>
                                <h5 class="card-title text-center p-4" style="color: #c9a050;">Abertura</h5>
                                <p class="card-text text-secondary text-center"> De Terça a Domingo das 10H00 às 13H00 e das 14H00 às 18H00 Segunda: Fechado</p>
                            </div>
                        </div>					
                    </div>
                    <div class="col-lg-4">
                        <div class="card" ">
                            <div class="card-body cartas">
                                <div class="text-center">
                                    <i class="fa-solid fa-building-columns fa-3x rounded" style="color: #c9a050;"></i>
                                </div>
                                <h5 class="card-title text-center p-4" style="color: #c9a050;">Exposições a decorrer</h5>
                                <p class="card-text text-secondary text-center"> De Terça a Domingo das 10H00 às 13H00 e das 14H00 às 18H00 Segunda: Fechado</p>
                            </div>
                        </div>					
                    </div>
                    <div class="col-lg-4">
                        <div class="card" ">
                            <div class="card-body cartas">
                                <div class="text-center">
                                    <i class="fa-regular fa-calendar fa-3x rounded" style="color: #c9a050;"></i>
                                </div>
                                <h5 class="card-title text-center p-4" style="color: #c9a050;">Eventos</h5>
                                <p class="card-text text-secondary text-center"> De Terça a Domingo das 10H00 às 13H00 e das 14H00 às 18H00 Segunda: Fechado</p>
                            </div>
                        </div>					
                    </div>												
                </div>
            </div>	
        </section>



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
        </script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
        </script> 
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
        </script>

        <footer>

        </footer>
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
        </body>
    </html>
