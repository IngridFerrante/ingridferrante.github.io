<?php include 'header.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

        <!--CSS style-->
        <link rel="stylesheet" href="stylesheet.css?v=<?php echo time(); ?>">

        <!-- fontawesome-->
    <script src="https://kit.fontawesome.com/e73e3a7728.js" crossorigin="anonymous"></script>
</head>
<body>
    <section class="home">
        <video class="video-slide" src="videos/1.mp4" autoplay muted loop>
        </video>
        <div class="content">
            <h1>CASA NA <span>ITALIA</span></h1>
            <h2>CIDADANIA <span>ITALIANA</span></h2>
            <p>Prestamos assistência com o melhor valor e a maior transparência,
para o reconhecimento da cidadania italiana, na Itália.</p>
            <a href="pacotes.php">Pacotes </a>
        </div>
        <div class="media-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-whatsapp"></i></a>
        </div>
        <div class="slider-navigation">

        </div>

    </section>

    <div class="main-content">
        <h1>SUA CIDADANIA</h1>
        <h2>DE FORMA RAPIDA E SEGURA</h2>
        <p>Conte com a ajuda da nossa Equipe de Especialistas altamente capacitados e comece a planejar a sua nova
            vida como Cidadao Italiano. 
            Converse agora mesmo com a nossa equipe atraves do nosso WhatsApp.
        </p>
        <h1>SERVIÇOS</h1>

    </div>

    <div class="main-services">
        <div class="columns">
            <div class="column">
                <ul>
                <li><i class="fas fa-folder-open"> Documentação</li></i>
                <li><i class="fas fa-search"> Busca de certidões</li></i>
                <li><i class="fas fa-edit"> Solicitação de certidões</li></i>
                </ul>
</div>
                <div class="column">
                <ul>
                <li><img src="images/2.png" style="width: 100px;"> Validação de Documentos</li>
                <li><i class="fas fa-eraser"> Retificações</li></i>
                <li><i class="fas fa-globe-americas"> Tradução e Apostilamento</li></i>
                <li><i class="fas fa-comments"> Orientações gerais</li></i>
                </ul>
                </div>
            <div class="column">
                <ul>
                <li><i class="fas fa-users"> Arvore genealógica</li></i>
                <li><i class="fas fa-hands-helping"> Assistência no processo</li></i>
                <li><i class="fas fa-hand-point-up"> Declaração de Presença</li></i>
                <li><i class="fas fa-qrcode"> Códice Fiscale</li></i>
                </ul>
                </div>
                <div class="column">
                <li><i class="fas fa-file-contract"> Contrato de serviço e residência</li></i>
                <li><i class="fas fa-copyright"> Acompanhamento da NR</li></i>
                <li><i class="fas fa-signature"> Assinatura da cidadania</li></i>
                </ul>
                
            </div>
</div>
    </div>
   



    <script type="text/javascript">
    // javascript of responsive navigation menu
    const menuBtn = document.querySelector(".menu-btn");
    const navigation = document.querySelector(".navigation");

    menuBtn.addEventListener("click", () => {
        menuBtn.classList.toggle("active");
        navigation.classList.toggle("active");
    })

    </script>
</body>
</html>