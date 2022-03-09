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
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <title>Museu CEIRA</title>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light fixed">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="img/logo.png" style="width: 68px;"/></a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
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
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-40 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10" style="color: #c9a050;">Localização e Contactos </h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class=" row d-flex justify-content-between mx-4 pt-5">
                    <div class="mt-lg-5">
                        <a><strong>Munícipio de Arronches</strong></a><br>
                        <a>Rua Dr. Edmundo Curvelo</a><br>
                        <a>7340-029 Arronches</a><br>
                        <a href="tel:245009163" style="text-decoration: none; color: blue;"><strong style="color: black;">Telefone: </strong>245009163</a><br>
                        <a href="mailto:ceira@cm-arronches.pt" style="text-decoration: none; color: blue;"><strong style="color: black;">Email: </strong>ceira@cm-arronches.pt</a>
                        <br><br> 
                        <a><strong>Horário de funcionamento: </strong></a><br>
                        <a>De Terça a Domingo</a><br>
                        <a>Das 10H00 às 13H00 e das 14H00 às 18H00</a><br>
                        <a><strong>Encerra à Segunda Feira</strong></a>
                    </div>
                </div>
                <div class="col-sm pt-5 mx-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3095.4950913058556!2d-7.2882023234069555!3d39.11796392327179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd17a7b3b5cb9f83%3A0x467723f6c3652e21!2sCEIRA!5e0!3m2!1spt-PT!2spt!4v1646753205748!5m2!1spt-PT!2spt" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-40 col-lg-8 pt-5">
                <div class="form-signin col-sm-12 mx-auto formulario_registo">  
                    <form action="https://api.staticforms.xyz/submit" method="post">
                        <input type="hidden" name="accessKey" value="3fb3576f-9f5f-4ae2-9b35-72c736e00a90">
                        <input type="hidden" name="redirectTo" value="https://www.youtube.com/">
                        <p class="info_registo"> A fim de podermos responder da melhor forma possível ao seu email, agradecemos que preencha os campos abaixo.</p>
                        <div>
                            <label for="inputNome" class="label_registo">Nome *</label>
                            <input type="text" id="inputNome" name="name" class="name" required maxlength="25" minlength="2">
                            <div><br>
                                <div>
                                    <label for="inputEmail" class="label_registo">E-mail *</label>
                                    <input type="email" id="inputEmail" name="email" class="email" required maxlength="50">
                                </div><br>
                                <div><br>
                                    <label for="textAreaMensagem" class="label_registo">Mensagem *</label>
                                    <textarea rows="5" cols="45" value="" id="textAreaMensagem" name="message" class="mensagem" required maxlength="100"></textarea>
                                </div><br>
                                <div class="g-recaptcha" data-sitekey="6LdOasYeAAAAAGWUwp5XtDsp26uWkRDQs36TOCri"></div>
                                <button id="click" class="botao_continuar float-right mx-5" >Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>




        <br><br><br><br>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">
        </script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
        </script> 
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
        </script>

        <script>
            $(function(){
            $("button").on("click", function() {
            alert("O seu email foi enviado com sucesso");
            });
            });
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
