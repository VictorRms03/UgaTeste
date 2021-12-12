<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UGATeste - Teste Vocacional</title>
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/templatemo-video-catalog.css">
</head>

<body>
    <div class="tm-page-wrap mx-auto">
        <div class="position-relative">
            <div class="position-absolute tm-site-header">
                <div class="container-fluid position-relative">
                    <div class="row">
                        <div class="col-7 col-md-4">
                            <a href="index.html" class="text-center tm-logo-container rounded">
                                <i class="fas tm-site-logo mb-3"></i>
                                <h1 class="tm-site-name">UGATeste</h1>
                            </a>
                        </div>
                        <div class="col-5 col-md-8 ml-auto mr-0">
                            <div class="tm-site-nav">
                                <nav class="navbar navbar-expand-lg mr-0 ml-auto" id="tm-main-nav">
                                    <button class="navbar-toggler tm-bg-black py-2 px-3 mr-0 ml-auto collapsed" type="button"
                                        data-toggle="collapse" data-target="#navbar-nav" aria-controls="navbar-nav"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                        <span>
                                            <i class="fas fa-bars tm-menu-closed-icon"></i>
                                            <i class="fas fa-times tm-menu-opened-icon"></i>
                                        </span>
                                    </button>
                                    <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                                        <ul class="navbar-nav text-uppercase">
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="preteste.html">Teste Vocacional</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="index.html">Vídeos</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="about.html">About</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="contact.html">Quem somos nós</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-welcome-container tm-fixed-header tm-fixed-header-4">
            </div>

            <div id="tm-fixed-header-bg"></div>
        </div>
            
            
        </div>

        <div class="container-fluid">
            <div id="content" class="mx-auto tm-content-container">

        <?php
        if (isset($_POST['UmA'])){
            $UmA = $_POST['UmA'];
            $UmB = $_POST['UmB'];
            $UmC = $_POST['UmC'];
            $UmD = $_POST['UmD'];
            $DoisA = $_POST['DoisA'];
            $DoisB = $_POST['DoisB'];
            $DoisC = $_POST['DoisC'];
            $DoisD = $_POST['DoisD'];
            $TresA = $_POST['TresA'];
            $TresB = $_POST['TresB'];
            $TresC = $_POST['TresC'];
            $TresD = $_POST['TresD'];
            $QuatroA = $_POST['QuatroA'];
            $QuatroB = $_POST['QuatroB'];
            $QuatroC = $_POST['QuatroC'];
            $QuatroD = $_POST['QuatroD'];
            $CincoA = $_POST['CincoA'];
            $CincoB = $_POST['CincoB'];
            $CincoC = $_POST['CincoC'];
            $CincoD = $_POST['CincoD'];
            $SeisA = $_POST['SeisA'];
            $SeisB = $_POST['SeisB'];
            $SeisC = $_POST['SeisC'];
            $SeisD = $_POST['SeisD'];
            $SeteA = $_POST['SeteA'];
            $SeteB = $_POST['SeteB'];
            $SeteC = $_POST['SeteC'];
            $SeteD = $_POST['SeteD'];
            $OitoA = $_POST['OitoA'];
            $OitoB = $_POST['OitoB'];
            $OitoC = $_POST['OitoC'];
            $OitoD = $_POST['OitoD'];
            $NoveA = $_POST['NoveA'];
            $NoveB = $_POST['NoveB'];
            $NoveC = $_POST['NoveC'];
            $NoveD = $_POST['NoveD'];
            $DezA = $_POST['DezA'];
            $DezB = $_POST['DezB'];
            $DezC = $_POST['DezC'];
            $DezD = $_POST['DezD'];
            $OnzeA = $_POST['OnzeA'];
            $OnzeB = $_POST['OnzeB'];
            $OnzeC = $_POST['OnzeC'];
            $OnzeD = $_POST['OnzeD'];
            $DozeA = $_POST['DozeA'];
            $DozeB = $_POST['DozeB'];
            $DozeC = $_POST['DozeC'];
            $DozeD = $_POST['DozeD'];
            $TrezeA = $_POST['TrezeA'];
            $TrezeB = $_POST['TrezeB'];
            $TrezeC = $_POST['TrezeC'];
            $TrezeD = $_POST['TrezeD'];
            $CatorzeA = $_POST['CatorzeA'];
            $CatorzeB = $_POST['CatorzeB'];
            $CatorzeC = $_POST['CatorzeC'];
            $CatorzeD = $_POST['CatorzeD'];
            $QuinzeA = $_POST['QuinzeA'];
            $QuinzeB = $_POST['QuinzeB'];
            $QuinzeC = $_POST['QuinzeC'];
            $QuinzeD = $_POST['QuinzeD'];
            $DezesseisA = $_POST['DezesseisA'];
            $DezesseisB = $_POST['DezesseisB'];
            $DezesseisC = $_POST['DezesseisC'];
            $DezesseisD = $_POST['DezesseisD'];
            $DezesseteA = $_POST['DezesseteA'];
            $DezesseteB = $_POST['DezesseteB'];
            $DezesseteC = $_POST['DezesseteC'];
            $DezesseteD = $_POST['DezesseteD'];
            $DezoitoA = $_POST['DezoitoA'];
            $DezoitoB = $_POST['DezoitoB'];
            $DezoitoC = $_POST['DezoitoC'];
            $DezoitoD = $_POST['DezoitoD'];
            $DezenoveA = $_POST['DezenoveA'];
            $DezenoveB = $_POST['DezenoveB'];
            $DezenoveC = $_POST['DezenoveC'];
            $DezenoveD = $_POST['DezenoveD'];
            $VinteA = $_POST['VinteA'];
            $VinteB = $_POST['VinteB'];
            $VinteC = $_POST['VinteC'];
            $VinteD = $_POST['VinteD'];    
            }

            $SomaA = $UmA + $DoisA + $TresA + $QuatroA + $CincoA + $SeisA + $SeteA + $OitoA + $NoveA + $DezA + $OnzeA + $DozeA + $TrezeA + $CatorzeA + $QuinzeA + $DezesseisA + $DezesseteA + $DezoitoA + $DezenoveA + $VinteA;
            $SomaB = $UmB + $DoisB + $TresB + $QuatroB + $CincoB + $SeisB + $SeteB + $OitoB + $NoveB + $DezB + $OnzeB + $DozeB + $TrezeB + $CatorzeB + $QuinzeB + $DezesseisB + $DezesseteB + $DezoitoB + $DezenoveB + $VinteB;
            $SomaC = $UmC + $DoisC + $TresC + $QuatroC + $CincoC + $SeisC + $SeteC + $OitoC + $NoveC + $DezC + $OnzeC + $DozeC + $TrezeC + $CatorzeC + $QuinzeC + $DezesseisC + $DezesseteC + $DezoitoC + $DezenoveC + $VinteC;
            $SomaD = $UmD + $DoisD + $TresD + $QuatroD + $CincoD + $SeisD + $SeteD + $OitoD + $NoveD + $DezD + $OnzeD + $DozeD + $TrezeD + $CatorzeD + $QuinzeD + $DezesseisD + $DezesseteD + $DezoitoD + $DezenoveD + $VinteD;

            if(($SomaA >= $SomaB) && ($SomaA >= $SomaC) && ($SomaA >= $SomaD)){
                echo "<h3><b><center>Atleta // Criativo</center></b></h3> <br>";
                echo "<h4>Esse tipo de vocação está relacionado a pessoas que gostam mais de  ação e de coisas novas onde as mesmas despõem de boa disposição física e também uma boa expressão corporal.</h4> <br>";
                echo "<h4><center>Carreiras mais apropriadas:</center></h4> <br>";
                echo "<h5><center>Esportista</center></h5> <br>";
                echo "<h5><center>Anestesista</center></h5> <br>";
                echo "<h5><center>Artista plástico</center></h5> <br>";
                echo "<h5><center>Ator</center></h5> <br>";
                echo "<h5><center>Cineasta</center></h5> <br>";
                echo "<h5><center>Chefe de cozinha</center></h5> <br>";
                echo "<h5><center>Cirurgião</center></h5> <br>";
                echo "<h5><center>Coreógrafo</center></h5> <br>";
                echo "<h5><center>Dançarino</center></h5> <br>";
                echo "<h5><center>Dermatologista</center></h5> <br>";
                echo "<h5><center>Estilista</center></h5> <br>";
                echo "<h5><center>Fotografo</center></h5> <br>";
                echo "<h5><center>Guia de turismo</center></h5> <br>";
                echo "<h5><center>Instrumentador</center></h5> <br>";
                echo "<h5><center>Cirúrgico</center></h5> <br>";
                echo "<h5><center>Instrutor de voo</center></h5> <br>";
                echo "<h5><center>Jornalista</center></h5> <br>";
                echo "<h5><center>Médico clinico</center></h5> <br>";
                echo "<h5><center>Músico</center></h5> <br>";
                echo "<h5><center>Paisagista</center></h5> <br>";
                echo "<h5><center>Personal trainer</center></h5> <br>";
                echo "<h5><center>Personal stylist</center></h5> <br>";
                echo "<h5><center>Piloto</center></h5> <br>";
                echo "<h5><center>Publicitário</center></h5> <br>";
                echo "<h5><center>Relações públicas</center></h5> <br>";
                echo "<h5><center>Roteirista</center></h5> <br>";
            }

            if(($SomaB > $SomaA) && ($SomaB >= $SomaC) && ($SomaB >= $SomaD)){
                echo "<h3><b><center>Capitão // Comandante</center></b></h3> <br>";
                echo "<h4>Esse tipo de vocação por sua vez, está relacionada a pessoas que gostam de lidar com analises e planejamentos além de trabalharem duro e optarem por profissões que lhe trazem mais possibilidades de crescimento e status.</h4> <br>";
                echo "<h4><center>Carreiras mais apropriadas:</center></h4> <br>";
                echo "<h5><center>Administração / Administrador de empresas</center></h5> <br>";
                echo "<h5><center>Advogado</center></h5> <br>";
                echo "<h5><center>Assistente Social</center></h5> <br>";
                echo "<h5><center>Bibliotecário</center></h5> <br>";
                echo "<h5><center>Delegado</center></h5> <br>";
                echo "<h5><center>Engenheiro mecânico / químico</center></h5> <br>";
                echo "<h5><center>Juiz de direito</center></h5> <br>";
                echo "<h5><center>Pastor / Padre / Rabino</center></h5> <br>";
                echo "<h5><center>Policial</center></h5> <br>";
                echo "<h5><center>Promotor Público</center></h5> <br>";
                echo "<h5><center>Defensor Público</center></h5> <br>";
            }

            if(($SomaC > $SomaA) && ($SomaC > $SomaB) && ($SomaC >= $SomaD)){
                echo "<h3><b><center>Sociável // Comunicativo</center></b></h3> <br>";
                echo "<h4>Esse tipo de vocação é para pessoas que possuem grande entusiasmo e grande habilidade em relações humanas as quais voltam seus esforços para o desenvolvimento de seus colegas e alunos.</h4> <br>";
                echo "<h4><center>Carreiras mais apropriadas:</center></h4> <br>";
                echo "<h5><center>Artista plástico</center></h5> <br>";
                echo "<h5><center>Dramaturgo</center></h5> <br>";
                echo "<h5><center>Educador</center></h5> <br>";
                echo "<h5><center>Escritor</center></h5> <br>";
                echo "<h5><center>Filosofo</center></h5> <br>";
                echo "<h5><center>Jornalista</center></h5> <br>";
                echo "<h5><center>Pedagogo</center></h5> <br>";
                echo "<h5><center>Professor</center></h5> <br>";
                echo "<h5><center>Psicólogo</center></h5> <br>";
                echo "<h5><center>Psiquiatra</center></h5> <br>";
                echo "<h5><center>Sociólogo</center></h5> <br>";
                echo "<h5><center>Terapeuta ocupacional</center></h5> <br>";
                echo "<h5><center>Tradutor</center></h5> <br>";
            }

            if(($SomaD > $SomaA) && ($SomaD > $SomaB) && ($SomaD > $SomaC)){
                echo "<h3><b><center>Cientista // Pesquisador</center></b></h3> <br>";
                echo "<h4>Esse tipo de vocação está voltado para pessoas que costumam focar seus interesses em pesquisas em grandes áreas de conhecimento e apresentam uma grande capacidade no analise e na correção de problemas.</h4> <br>";
                echo "<h4><center>Carreiras mais apropriadas:</center></h4> <br>";
                echo "<h5><center>Analista de sistemas</center></h5> <br>";
                echo "<h5><center>Antropólogo</center></h5> <br>";
                echo "<h5><center>Arquiteto</center></h5> <br>";
                echo "<h5><center>Astrônomo</center></h5> <br>";
                echo "<h5><center>Criador de software</center></h5> <br>";
                echo "<h5><center>Designer industrial</center></h5> <br>";
                echo "<h5><center>Economista</center></h5> <br>";
                echo "<h5><center>Engenheiro</center></h5> <br>";
                echo "<h5><center>Físico</center></h5> <br>";
                echo "<h5><center>Lider de uma corporação (CEO)</center></h5> <br>";
                echo "<h5><center>Matemático</center></h5> <br>";
                echo "<h5><center>Militar</center></h5> <br>";
                echo "<h5><center>Oceanógrafo</center></h5> <br>";
                echo "<h5><center>Pesquisador</center></h5> <br>";
                echo "<h5><center>Químico</center></h5> <br>";
                echo "<h5><center>Maestro</center></h5> <br>";
                echo "<h5><center>Urbanista</center></h5> <br>";
                echo "<h5><center>Zoólogo</center></h5> <br>";
            }
        ?>

        
        <div class="row mt-5 pt-3">
                    <div class="col-xl-6 col-lg-12 mb-4">
                        <div class="tm-bg-gray p-5 h-100">
                            <img src="img/logo/imgrodape.png" class="imgrodape">
                            
                            </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-4">
                        <div class="p-5 tm-bg-gray">
                            <h3 class="tm-text-primary mb-4">Vestibulares</h3>
                            <ul class="list-unstyled tm-footer-links">
                                <li><a href="https://enem.inep.gov.br/participante/#!/">Enem</a></li>
                                <li><a href="https://www.fuvest.br/vestibular-da-usp/">Fuvest</a></li>
                                <li><a href="https://www.comvest.unicamp.br/">Convest</a></li>
                                <li><a href="https://www.vunesp.com.br/">Vunesp</a></li>
                            </ul>    
                        </div>                        
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 mb-4">
                        <div class="p-5 tm-bg-gray h-100">
                            <h3 class="tm-text-primary mb-4">Outras Páginas</h3>
                            <ul class="list-unstyled tm-footer-links">
                                <li><a href="index.html">Vídeos</a></li>
                                <li><a href="teste.html">Teste Vocacional</a></li>
                                <li><a href="about.html">Sobre nós</a></li>
                                <li><a href="contact.html">Quem somos nós</a></li>
                            </ul>
                        </div>                        
                    </div>
                </div>

                <footer class="row pt-5">
                    <div class="col-12">
                        <p class="text-right">TCC Teste Vocacional 3º ETIM
                    </div>
                </footer>
            </div>
        </div>

    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        function setVideoSize() {
            const vidWidth = 1920;
            const vidHeight = 1080;
            let windowWidth = window.innerWidth;
            let newVidWidth = windowWidth;
            let newVidHeight = windowWidth * vidHeight / vidWidth;
            let marginLeft = 0;
            let marginTop = 0;

            if (newVidHeight < 500) {
                newVidHeight = 500;
                newVidWidth = newVidHeight * vidWidth / vidHeight;
            }

            if(newVidWidth > windowWidth) {
                marginLeft = -((newVidWidth - windowWidth) / 2);
            }

            if(newVidHeight > 720) {
                marginTop = -((newVidHeight - $('#tm-video-container').height()) / 2);
            }

            const tmVideo = $('#tm-video');

            tmVideo.css('width', newVidWidth);
            tmVideo.css('height', newVidHeight);
            tmVideo.css('margin-left', marginLeft);
            tmVideo.css('margin-top', marginTop);
        }

        $(document).ready(function () {
            

            setVideoSize();

            
            let timeout;
            window.onresize = function () {
                clearTimeout(timeout);
                timeout = setTimeout(setVideoSize, 100);
            };

                
            const btn = $("#tm-video-control-button");

            btn.on("click", function (e) {
                const video = document.getElementById("tm-video");
                $(this).removeClass();

                if (video.paused) {
                    video.play();
                    $(this).addClass("fas fa-pause");
                } else {
                    video.pause();
                    $(this).addClass("fas fa-play");
                }
            });
        })
    </script>
</body>

</html>