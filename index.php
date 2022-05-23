<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" type="text/css">
    <link rel="stylesheet" href="home.css" type="text/css">
    <!--MapBox references-->
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.8.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.8.1/mapbox-gl.css' rel='stylesheet' />
    <title>Document</title>
</head>
<body>
    <?php
    include_once "header.php";
    ?>
    
    <div class="intent">
        <div class="intent_home_div" id="above_about_us_div">
            <hr>
            <nav id="above_about_us_nav">
                <div id="intent_above_about_us_div">
                    <span>
                        <p><h1>MANUTENÇÃO,
                             REVISÃO E INSTALAMOS EM SUA CASA OU APARTAMENTO</h1></p>
                        <p>Com a Gasotec você pode confiar,
                             afinal trazemos os nossos serviços com qualidade
                              e comprometimento a você cliente</p>
                    </span>
                </div>
            </nav>
        </div>
    <div class="intent_home_div intent_home_blue_div" id="intent_about_us_div">
            <hr>
            <nav>
                <div id="about_us_img_div">
                    <span>
                        <img id="about_us_main_img" src="Img\Home Page\about_us_main_img.jpeg">
                    </span>
                </div>
                <div id="about_us_text_div">
                    <span id="about_us_text_span">
                        <p id="about_us_title_text"><h1>Sobre nós</h1></p>
                        <p id="about_us_general_text">Somos a Gasotec, uma empresa especializada em atender o cliente,
                        </br> 
                        nós fazemos a sua manutenção, e vendemos a você a melhor oferta que puder encontrar</p>
                    </span>
                </div>
            </nav>
            <hr>
        </div>
        <div class="intent_home_div" id="above_services_div">
            <nav>
                <div class="services_block_div">
                    <span class="services_span">
                        <p class="tittle" id="tittle_instalation"><h1>INSTALAÇÃO</h1></p>
                        <p>Está sofrendo com o inverno?
                            Precisa de nossos serviços de instalação?
                             Não se preocupe, com a GasoTec a qualidade é garantida 
                              e o atendimento é super rápido.
                               Basta enviar seus dados pelo nosso formulário e enviar uma mensagem a nós e
                                retornamos em instantes. 
                                 Agende já e venha ser um dos nossos clientes</p>
                        <button class="services_button"> Agende Agora </button>
                    </span>
                </div>
                <div class="services_block_div" id="services_block_maintenance_div">
                    <span class="services_span">
                        <p class="tittle" id="tittle_maintenance"><h1>MANUTENÇÃO</h1></p>
                        <p>A instalação de outra empresa ficou ruim? Precisa arrumar a bagunça deles?
                             Ou então quer previnir que seu aquecedor apresente defeitos,
                              faça agora sua manutenção ou nos chame para aplicarmos uma revisão em seu produto,
                               seja ele qual for, com a GasoTec você pode confiar</p>
                        <button class="services_button" id="services_maintenance_button"> Agende Agora </button>
                    </span>
                </div>
                <div class="services_block_div">
                    <span class="services_span">
                        <p class="tittle" id="tittle_group_instalation"><h1>INSTAÇÃO CONJUNTA</h1></p>
                        <p>Condomínio passando com água gelada? Edifício novo sem instalação de aquecedor?
                             Não importa o seu problema, com a GasoTec você pode confiar.
                              Temos nosso pacote específico para você síndico ou condômino,
                               com a instalação conjunta dos apartamentos,
                                oferecemos um desconto que cabe no seu bolso</p>
                        <button class="services_button"> Agende Agora </button>
                    </span>
                </div>
            </nav>
        </div>
        <div class="intent_home_div intent_home_blue_div" id="intent_services_div">
            <hr>
            <nav>
                <div class="services_samesize_img_div">
                    <span>
                        <img class="services_samesize_img" src="img\Home Page\services_product_img.jpeg">
                    </span>
                </div>
                <div class="services_samesize_img_div">
                    <span>
                        <img class="services_samesize_img" src="img\Home Page\services_howto_img.png">
                    </span>
                </div>
                <div class="services_samesize_img_div">
                    <span>
                        <img class="services_samesize_img" src="img\Home Page\services_forgot_img.jpeg">
                    </span>
                </div>
            </nav>
            <hr>
        </div>
        <div class="intent_home_div" id="place_div">
        <div id='map' style='width: 400px; height: 300px;'></div>
        <script>
            mapboxgl.accessToken = 'pk.eyJ1IjoiZ3VzdGF2b2ZlbGljaWFubyIsImEiOiJjbDNqMmlqMm8xOGRlM2N3MTcwd2F3b2htIn0.H_PaNyIR8VHO5RuUuLyusw';
            var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11'
            });
        </script>
        </div>
    </div>

    <?php
    include_once "footer.php"; 
    ?>
</body>
</html>