<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css" type="text/css">
    <link rel="stylesheet" href="home.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <?php
    include_once "header.php";
    ?>
    
    <div class="intent">
        <div class="intent_home_div" id="above_about_us_div">

            //TODO
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
                        <button class="services_button"> Agende Agora </button>
                    </span>
                </div>
                <div class="services_block_div" id="services_block_maintenance_div">
                    <span class="services_span">
                        <p class="tittle" id="tittle_maintenance"><h1>MANUTENÇÃO</h1></p>
                        <p>aasasasaas</p>
                        <button class="services_button" id="services_maintenance_button"> Agende Agora </button>
                    </span>
                </div>
                <div class="services_block_div">
                    <span class="services_span">
                        <p class="tittle" id="tittle_group_instalation"><h1>INSTAÇÃO CONJUNTA</h1></p>
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
            //TODO
        </div>
    </div>

    <?php
    include_once "footer.php"; 
    ?>
</body>
</html>