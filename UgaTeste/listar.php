<?php
include("classe/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UGATeste - Faculdades</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
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
                                    <button class="navbar-toggler tm-bg-black py-2 px-3 mr-0 ml-auto collapsed"
                                        type="button" data-toggle="collapse" data-target="#navbar-nav"
                                        aria-controls="navbar-nav" aria-expanded="false" aria-label="Toggle navigation">
                                        <span>
                                            <i class="fas fa-bars tm-menu-closed-icon"></i>
                                            <i class="fas fa-times tm-menu-opened-icon"></i>
                                        </span>
                                    </button>
                                    <div class="collapse navbar-collapse tm-nav" id="navbar-nav">
                                        <ul class="navbar-nav text-uppercase">
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="preteste.html">Teste Vocacional<span
                                                        class="sr-only">(current)</span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="index.html">Vídeos</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="about.html">About</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link tm-nav-link" href="contact.html">Quem somos nós </a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tm-welcome-container tm-fixed-header tm-fixed-header-5">
                
            </div>

            <div id="tm-fixed-header-bg"></div> 
        </div>
        
        <div class="container-fluid px-0">
            <div class="mx-auto tm-content-container">
                <div class="row mt-3 mb-5 pb-3">
                    <div class="col-12">
                        <div class="mx-auto tm-about-text-container px-3">
                            <h2 class="tm-page-title mb-4 tm-text-primary">Lista de Faculdades</h2>
                            <hr>
                            <div class="corpo">
            
            <form method="post" action="listar.php" style="width:170px;" > 

            <!-- Filtration bar -->
            <div>
                <h4>Filtrar</h4>
                <select id="filter" name="filter" class="form-select" aria-label="Default select example">
                    <option value="" selected>TODOS</option>
                    <option value="where NO_CURSO = 'ABI - ARTES CÊNICAS' ">ABI - ARTES CÊNICAS</option>
                    <option value="where NO_CURSO = 'ABI - ARTES VISUAIS' ">ABI - ARTES VISUAIS</option>
                    <option value="where NO_CURSO = 'ABI - CICLO BÁSICO MATERIAIS/METALÚRGICA/NUCLEAR' ">ABI - CICLO BÁSICO MATERIAIS/METALÚRGICA/NUCLEAR</option>
                    <option value="where NO_CURSO = 'ABI - CIÊNCIA DA COMPUTAÇÃO' ">ABI - CIÊNCIA DA COMPUTAÇÃO</option>
                    <option value="where NO_CURSO = 'ABI - CIÊNCIAS BIOLÓGICAS' ">ABI - CIÊNCIAS BIOLÓGICAS</option>
                    <option value="where NO_CURSO = 'ABI - CIÊNCIAS BIOMÉDICAS' ">ABI - CIÊNCIAS BIOMÉDICAS</option>
                    <option value="where NO_CURSO = 'ABI - CIÊNCIAS DA NATUREZA' ">ABI - CIÊNCIAS DA NATUREZA</option>
                    <option value="where NO_CURSO = 'ABI - CIÊNCIAS EXATAS' ">ABI - CIÊNCIAS EXATAS</option>
                    <option value="where NO_CURSO = 'ABI - CIÊNCIAS SOCIAIS' ">ABI - CIÊNCIAS SOCIAIS</option>
                    <option value="where NO_CURSO = 'ABI - COMUNICAÇÃO SOCIAL' ">ABI - COMUNICAÇÃO SOCIAL</option>
                    <option value="where NO_CURSO = 'ABI - DANÇA' ">ABI - DANÇA</option>
                    <option value="where NO_CURSO = 'ABI - ECONOMIA EMPRESARIAL E CONTROLADORIA' ">ABI - ECONOMIA EMPRESARIAL E CONTROLADORIA</option>
                    <option value="where NO_CURSO = 'ABI - EDUCAÇÃO FÍSICA' ">ABI - EDUCAÇÃO FÍSICA</option>
                    <option value="where NO_CURSO = 'ABI - EDUCAÇÃO FÍSICA E ESPORTE' ">ABI - EDUCAÇÃO FÍSICA E ESPORTE</option>
                    <option value="where NO_CURSO = 'ABI - ENFERMAGEM' ">ABI - ENFERMAGEM</option>
                    <option value="where NO_CURSO = 'ABI - ENGENHARIA' ">ABI - ENGENHARIA</option>
                    <option value="where NO_CURSO = 'ABI - ENGENHARIA DE MINAS' ">ABI - ENGENHARIA DE MINAS</option>
                    <option value="where NO_CURSO = 'ABI - ENGENHARIA ELÉTRICA' ">ABI - ENGENHARIA ELÉTRICA</option>
                    <option value="where NO_CURSO = 'ABI - FILOSOFIA' ">ABI - FILOSOFIA</option>
                    <option value="where NO_CURSO = 'ABI - FÍSICA' ">ABI - FÍSICA</option>
                    <option value="where NO_CURSO = 'ABI - GEOGRAFIA' ">ABI - GEOGRAFIA</option>
                    <option value="where NO_CURSO = 'ABI - HISTÓRIA' ">ABI - HISTÓRIA</option>
                    <option value="where NO_CURSO = 'ABI - LETRAS' ">ABI - LETRAS</option>
                    <option value="where NO_CURSO = 'ABI - LETRAS - PORTUGUÊS - ESPANHOL' ">ABI - LETRAS - PORTUGUÊS - ESPANHOL</option>
                    <option value="where NO_CURSO = 'ABI - LETRAS - PORTUGUÊS - FRANCES' ">ABI - LETRAS - PORTUGUÊS - FRANCES</option>
                    <option value="where NO_CURSO = 'ABI - LETRAS - PORTUGUÊS - INGLES' ">ABI - LETRAS - PORTUGUÊS - INGLES</option>
                    <option value="where NO_CURSO = 'ABI - LETRAS ALEMÃO' ">ABI - LETRAS ALEMÃO</option>
                    <option value="where NO_CURSO = 'ABI - LETRAS ESPANHOL' ">ABI - LETRAS ESPANHOL</option>
                    <option value="where NO_CURSO = 'ABI - LETRAS FRANCÊS' ">ABI - LETRAS FRANCÊS</option>
                    <option value="where NO_CURSO = 'ABI - LETRAS INGLÊS' ">ABI - LETRAS INGLÊS</option>
                    <option value="where NO_CURSO = 'ABI - LETRAS ITALIANO' ">ABI - LETRAS ITALIANO</option>
                    <option value="where NO_CURSO = 'ABI - LETRAS LÍNGUA PORTUGUESA' ">ABI - LETRAS LÍNGUA PORTUGUESA</option>
                    <option value="where NO_CURSO = 'ABI - LETRAS PORTUGUÊS' ">ABI - LETRAS PORTUGUÊS</option>
                    <option value="where NO_CURSO = 'ABI - LETRAS VERNÁCULAS' ">ABI - LETRAS VERNÁCULAS</option>
                    <option value="where NO_CURSO = 'ABI - LETRAS VERNÁCULAS E LÍNGUA ESTRANGEIRA MODERNA' ">ABI - LETRAS VERNÁCULAS E LÍNGUA ESTRANGEIRA MODERNA</option>
                    <option value="where NO_CURSO = 'ABI - LÍNGUA ESTRANGEIRA' ">ABI - LÍNGUA ESTRANGEIRA</option>
                    <option value="where NO_CURSO = 'ABI - LÍNGUA ESTRANGEIRA MODERNA OU CLÁSSICA' ">ABI - LÍNGUA ESTRANGEIRA MODERNA OU CLÁSSICA</option>
                    <option value="where NO_CURSO = 'ABI - MATEMÁTICA' ">ABI - MATEMÁTICA</option>
                    <option value="where NO_CURSO = 'ABI - MATEMÁTICA APLICADA' ">ABI - MATEMÁTICA APLICADA</option>
                    <option value="where NO_CURSO = 'ABI - MATEMÁTICA APLICADA E COMPUTACIONAL' ">ABI - MATEMÁTICA APLICADA E COMPUTACIONAL</option>
                    <option value="where NO_CURSO = 'ABI - PSICOLOGIA' ">ABI - PSICOLOGIA</option>
                    <option value="where NO_CURSO = 'ABI - QUÍMICA' ">ABI - QUÍMICA</option>
                    <option value="where NO_CURSO = 'ABI - TEATRO' ">ABI - TEATRO</option>
                    <option value="where NO_CURSO = 'ADMINISTRAÇÃO' ">ADMINISTRAÇÃO</option>
                    <option value="where NO_CURSO = 'ADMINISTRAÇÃO DE EMPRESAS' ">ADMINISTRAÇÃO DE EMPRESAS</option>
                    <option value="where NO_CURSO = 'ADMINISTRAÇÃO EM SISTEMAS E SERVIÇOS DE SAÚDE' ">ADMINISTRAÇÃO EM SISTEMAS E SERVIÇOS DE SAÚDE</option>
                    <option value="where NO_CURSO = 'ADMINISTRAÇÃO PÚBLICA' ">ADMINISTRAÇÃO PÚBLICA</option>
                    <option value="where NO_CURSO = 'ADMINISTRAÇÃO PÚBLICA E SOCIAL' ">ADMINISTRAÇÃO PÚBLICA E SOCIAL</option>
                    <option value="where NO_CURSO = 'AGROECOLOGIA' ">AGROECOLOGIA</option>
                    <option value="where NO_CURSO = 'AGROINDÚSTRIA' ">AGROINDÚSTRIA</option>
                    <option value="where NO_CURSO = 'AGRONEGÓCIO' ">AGRONEGÓCIO</option>
                    <option value="where NO_CURSO = 'AGRONOMIA' ">AGRONOMIA</option>
                    <option value="where NO_CURSO = 'ALIMENTOS' ">ALIMENTOS</option>
                    <option value="where NO_CURSO = 'ANÁLISE E DESENVOLVIMENTO DE SISTEMAS' ">ANÁLISE E DESENVOLVIMENTO DE SISTEMAS</option>
                    <option value="where NO_CURSO = 'ANIMAÇÃO' ">ANIMAÇÃO</option>
                    <option value="where NO_CURSO = 'ANTROPOLOGIA' ">ANTROPOLOGIA</option>
                    <option value="where NO_CURSO = 'AQUACULTURA' ">AQUACULTURA</option>
                    <option value="where NO_CURSO = 'AQÜICULTURA' ">AQÜICULTURA</option>
                    <option value="where NO_CURSO = 'ARQUEOLOGIA' ">ARQUEOLOGIA</option>
                    <option value="where NO_CURSO = 'ARQUEOLOGIA E PRESERVAÇÃO PATRIMONIAL' ">ARQUEOLOGIA E PRESERVAÇÃO PATRIMONIAL</option>
                    <option value="where NO_CURSO = 'ARQUITETURA E URBANISMO' ">ARQUITETURA E URBANISMO</option>
                    <option value="where NO_CURSO = 'ARQUIVOLOGIA' ">ARQUIVOLOGIA</option>
                    <option value="where NO_CURSO = 'ARTE' ">ARTE</option>
                    <option value="where NO_CURSO = 'ARTES APLICADAS' ">ARTES APLICADAS</option>
                    <option value="where NO_CURSO = 'ARTES CÊNICAS' ">ARTES CÊNICAS</option>
                    <option value="where NO_CURSO = 'ARTES VISUAIS' ">ARTES VISUAIS</option>
                    <option value="where NO_CURSO = 'ARTES CÊNICAS - CENOGRAFIA' ">ARTES CÊNICAS - CENOGRAFIA</option>
                    <option value="where NO_CURSO = 'ARTES CÊNICAS - DIREÇÃO TEATRAL' ">ARTES CÊNICAS - DIREÇÃO TEATRAL</option>
                    <option value="where NO_CURSO = 'ARTES CÊNICAS - INDUMENTÁRIA' ">ARTES CÊNICAS - INDUMENTÁRIA</option>
                    <option value="where NO_CURSO = 'ARTES DO CORPO EM CENA' ">ARTES DO CORPO EM CENA</option>
                    <option value="where NO_CURSO = 'ARTES DO ESPETÁCULO' ">ARTES DO ESPETÁCULO</option>
                    <option value="where NO_CURSO = 'ARTES PLÁSTICAS' ">ARTES PLÁSTICAS</option>
                    <option value="where NO_CURSO = 'ARTES VISUAIS - ESCULTURA' ">ARTES VISUAIS - ESCULTURA</option>
                    <option value="where NO_CURSO = 'ASTRONOMIA' ">ASTRONOMIA</option>
                    <option value="where NO_CURSO = 'AUTOMAÇÃO INDUSTRIAL' ">AUTOMAÇÃO INDUSTRIAL</option>
                    <option value="where NO_CURSO = 'BIBLIOTECONOMIA' ">BIBLIOTECONOMIA</option>
                    <option value="where NO_CURSO = 'BIBLIOTECONOMIA E CIÊNCIA DA INFORMAÇÃO' ">BIBLIOTECONOMIA E CIÊNCIA DA INFORMAÇÃO</option>
                    <option value="where NO_CURSO = 'BIBLIOTECONOMIA E DOCUMENTAÇÃO' ">BIBLIOTECONOMIA E DOCUMENTAÇÃO</option>
                    <option value="where NO_CURSO = 'BIBLIOTECONOMIA E GESTÃO DE UNIDADES DE INFORMAÇÃO' ">BIBLIOTECONOMIA E GESTÃO DE UNIDADES DE INFORMAÇÃO</option>
                    <option value="where NO_CURSO = 'BIOLOGIA' ">BIOLOGIA</option>
                    <option value="where NO_CURSO = 'BIOMEDICINA' ">BIOMEDICINA</option>
                    <option value="where NO_CURSO = 'BIOQUÍMICA' ">BIOQUÍMICA</option>
                    <option value="where NO_CURSO = 'BIOTECNOLOGIA' ">BIOTECNOLOGIA</option>
                    <option value="where NO_CURSO = 'CAFEICULTURA' ">CAFEICULTURA</option>
                    <option value="where NO_CURSO = 'CENOGRAFIA E INDUMENTÁRIA' ">CENOGRAFIA E INDUMENTÁRIA</option>
                    <option value="where NO_CURSO = 'CIÊNCIA AMBIENTAL' ">CIÊNCIA AMBIENTAL</option>
                    <option value="where NO_CURSO = 'CIÊNCIA DA COMPUTAÇÃO' ">CIÊNCIA DA COMPUTAÇÃO</option>
                    <option value="where NO_CURSO = 'CIÊNCIA DA INFORMAÇÃO' ">CIÊNCIA DA INFORMAÇÃO</option>
                    <option value="where NO_CURSO = 'CIÊNCIA DE DADOS' ">CIÊNCIA DE DADOS</option>
                    <option value="where NO_CURSO = 'CIÊNCIA DE DADOS E INTELIGÊNCIA ARTIFICIAL' ">CIÊNCIA DE DADOS E INTELIGÊNCIA ARTIFICIAL</option>
                    <option value="where NO_CURSO = 'CIÊNCIA E TECNOLOGIA' ">CIÊNCIA E TECNOLOGIA</option>
                    <option value="where NO_CURSO = 'CIÊNCIA E TECNOLOGIA DE ALIMENTOS' ">CIÊNCIA E TECNOLOGIA DE ALIMENTOS</option>
                    <option value="where NO_CURSO = 'CIÊNCIA E TECNOLOGIA DE LATICÍNIOS' ">CIÊNCIA E TECNOLOGIA DE LATICÍNIOS</option>
                    <option value="where NO_CURSO = 'CIÊNCIA ECONÔMICA' ">CIÊNCIA ECONÔMICA</option>
                    <option value="where NO_CURSO = 'CIÊNCIA POLÍTICA' ">CIÊNCIA POLÍTICA</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS' ">CIÊNCIAS</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS AGRÁRIAS' ">CIÊNCIAS AGRÁRIAS</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS AGRÍCOLAS' ">CIÊNCIAS AGRÍCOLAS</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS AMBIENTAIS' ">CIÊNCIAS AMBIENTAIS</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS ATMOSFÉRICAS' ">CIÊNCIAS ATMOSFÉRICAS</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS ATUARIAIS' ">CIÊNCIAS ATUARIAIS</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS BIOLÓGICAS' ">CIÊNCIAS BIOLÓGICAS</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS BIOLÓGICAS - BIOTECNOLOGIA E PRODUÇÃO' ">CIÊNCIAS BIOLÓGICAS - BIOTECNOLOGIA E PRODUÇÃO</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS BIOLÓGICAS - ÊNFASE EM CIÊNCIAS AMBIENTAIS' ">CIÊNCIAS BIOLÓGICAS - ÊNFASE EM CIÊNCIAS AMBIENTAIS</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS BIOLÓGICAS - LICENCIATURA OU BACHARELADO' ">CIÊNCIAS BIOLÓGICAS - LICENCIATURA OU BACHARELADO</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS BIOLÓGICAS: BIOFÍSICA' ">CIÊNCIAS BIOLÓGICAS: BIOFÍSICA</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS BIOLÓGICAS: BIOTECNOLOGIA' ">CIÊNCIAS BIOLÓGICAS: BIOTECNOLOGIA</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS BIOLÓGICAS: MICROBIOLOGIA E IMUNOLOGIA' ">CIÊNCIAS BIOLÓGICAS: MICROBIOLOGIA E IMUNOLOGIA</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS BIOLÓGICAS: MODALIDADE MÉDICA' ">CIÊNCIAS BIOLÓGICAS: MODALIDADE MÉDICA</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS BIOMÉDICAS' ">CIÊNCIAS BIOMÉDICAS</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS CONTÁBEIS' ">CIÊNCIAS CONTÁBEIS</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS DA COMPUTAÇÃO' ">CIÊNCIAS DA COMPUTAÇÃO</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS DA NATUREZA' ">CIÊNCIAS DA NATUREZA</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS DA RELIGIÃO' ">CIÊNCIAS DA RELIGIÃO</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS DAS RELIGIÕES' ">CIÊNCIAS DAS RELIGIÕES</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS DE COMPUTAÇÃO' ">CIÊNCIAS DE COMPUTAÇÃO</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS DO CONSUMO' ">CIÊNCIAS DO CONSUMO</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS DO ESTADO' ">CIÊNCIAS DO ESTADO</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS DOS ALIMENTOS' ">CIÊNCIAS DOS ALIMENTOS</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS ECONÔMICAS' ">CIÊNCIAS ECONÔMICAS</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS EXATAS' ">CIÊNCIAS EXATAS</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS EXATAS E TECNOLÓGICAS' ">CIÊNCIAS EXATAS E TECNOLÓGICAS</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS FÍSICAS E BIOMOLECULARES' ">CIÊNCIAS FÍSICAS E BIOMOLECULARES</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS HUMANAS' ">CIÊNCIAS HUMANAS</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS IMOBILIÁRIAS' ">CIÊNCIAS IMOBILIÁRIAS</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS JURÍDICAS E SOCIAIS' ">CIÊNCIAS JURÍDICAS E SOCIAIS</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS MATEMÁTICAS E DA TERRA' ">CIÊNCIAS MATEMÁTICAS E DA TERRA</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS NATURAIS' ">CIÊNCIAS NATURAIS</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS NATURAIS E MATEMÁTICA - FÍSICA' ">CIÊNCIAS NATURAIS E MATEMÁTICA - FÍSICA</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS NATURAIS E MATEMÁTICA - MATEMÁTICA' ">CIÊNCIAS NATURAIS E MATEMÁTICA - MATEMÁTICA</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS NATURAIS E MATEMÁTICA - QUÍMICA' ">CIÊNCIAS NATURAIS E MATEMÁTICA - QUÍMICA</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS SOCIAIS' ">CIÊNCIAS SOCIAIS</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS SOCIAIS - CIÊNCIA POLÍTICA' ">CIÊNCIAS SOCIAIS - CIÊNCIA POLÍTICA</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS SOCIAIS - LICENCIATURA OU BACHARELADO' ">CIÊNCIAS SOCIAIS - LICENCIATURA OU BACHARELADO</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS SOCIAIS - POLÍTICAS PÚBLICAS' ">CIÊNCIAS SOCIAIS - POLÍTICAS PÚBLICAS</option>
                    <option value="where NO_CURSO = 'CIÊNCIAS SOCIOAMBIENTAIS' ">CIÊNCIAS SOCIOAMBIENTAIS</option>
                    <option value="where NO_CURSO = 'CINEMA' ">CINEMA</option>
                    <option value="where NO_CURSO = 'CINEMA DE ANIMAÇÃO' ">CINEMA DE ANIMAÇÃO</option>
                    <option value="where NO_CURSO = 'CINEMA E AUDIOVISUAL' ">CINEMA E AUDIOVISUAL</option>
                    <option value="where NO_CURSO = 'COMÉRCIO EXTERIOR' ">COMÉRCIO EXTERIOR</option>
                    <option value="where NO_CURSO = 'COMPOSIÇÃO DE INTERIOR' ">COMPOSIÇÃO DE INTERIOR</option>
                    <option value="where NO_CURSO = 'COMPOSIÇÃO PAISAGÍSTICA' ">COMPOSIÇÃO PAISAGÍSTICA</option>
                    <option value="where NO_CURSO = 'COMPUTAÇÃO' ">COMPUTAÇÃO</option>
                    <option value="where NO_CURSO = 'COMPUTAÇÃO E INFORMÁTICA' ">COMPUTAÇÃO E INFORMÁTICA</option>
                    <option value="where NO_CURSO = 'COMUNICAÇÃO EM MÍDIAS DIGITAIS' ">COMUNICAÇÃO EM MÍDIAS DIGITAIS</option>
                    <option value="where NO_CURSO = 'COMUNICAÇÃO INSTITUCIONAL' ">COMUNICAÇÃO INSTITUCIONAL</option>
                    <option value="where NO_CURSO = 'COMUNICAÇÃO ORGANIZACIONAL' ">COMUNICAÇÃO ORGANIZACIONAL</option>
                    <option value="where NO_CURSO = 'COMUNICAÇÃO SOCIAL' ">COMUNICAÇÃO SOCIAL</option>
                    <option value="where NO_CURSO = 'COMUNICAÇÃO SOCIAL - RADIALISMO' ">COMUNICAÇÃO SOCIAL - RADIALISMO</option>
                    <option value="where NO_CURSO = 'COMUNICAÇÃO SOCIAL - AUDIOVISUAL' ">COMUNICAÇÃO SOCIAL - AUDIOVISUAL</option>
                    <option value="where NO_CURSO = 'COMUNICAÇÃO SOCIAL - JORNALISMO' ">COMUNICAÇÃO SOCIAL - JORNALISMO</option>
                    <option value="where NO_CURSO = 'COMUNICAÇÃO SOCIAL - PRODUÇÃO EDITORIAL' ">COMUNICAÇÃO SOCIAL - PRODUÇÃO EDITORIAL</option>
                    <option value="where NO_CURSO = 'COMUNICAÇÃO SOCIAL - PUBLICIDADE E PROPAGANDA' ">COMUNICAÇÃO SOCIAL - PUBLICIDADE E PROPAGANDA</option>
                    <option value="where NO_CURSO = 'COMUNICAÇÃO SOCIAL - RÁDIO, TV E INTERNET' ">COMUNICAÇÃO SOCIAL - RÁDIO, TV E INTERNET</option>
                    <option value="where NO_CURSO = 'COMUNICAÇÃO SOCIAL - RELAÇÕES PÚBLICAS' ">COMUNICAÇÃO SOCIAL - RELAÇÕES PÚBLICAS</option>
                    <option value="where NO_CURSO = 'COMUNICAÇÃO SOCIAL COM HABILITAÇÃO EM EDITORAÇÃO' ">COMUNICAÇÃO SOCIAL COM HABILITAÇÃO EM EDITORAÇÃO</option>
                    <option value="where NO_CURSO = 'COMUNICAÇÃO SOCIAL COM HABILITAÇÃO EM PUBLICIDADE E PROPAGANDA' ">COMUNICAÇÃO SOCIAL COM HABILITAÇÃO EM PUBLICIDADE E PROPAGANDA</option>
                    <option value="where NO_CURSO = 'COMUNICAÇÃO VISUAL DESIGN' ">COMUNICAÇÃO VISUAL DESIGN</option>
                    <option value="where NO_CURSO = 'CONSERVAÇÃO E RESTAURAÇÃO' ">CONSERVAÇÃO E RESTAURAÇÃO</option>
                    <option value="where NO_CURSO = 'CONSERVAÇÃO E RESTAURAÇÃO DE BENS CULTURAIS MÓVEIS' ">CONSERVAÇÃO E RESTAURAÇÃO DE BENS CULTURAIS MÓVEIS</option>
                    <option value="where NO_CURSO = 'CONSERVAÇÃO E RESTAURO' ">CONSERVAÇÃO E RESTAURO</option>
                    <option value="where NO_CURSO = 'CONSTRUÇÃO DE EDIFÍCIOS' ">CONSTRUÇÃO DE EDIFÍCIOS</option>
                    <option value="where NO_CURSO = 'CONSTRUÇÃO NAVAL' ">CONSTRUÇÃO NAVAL</option>
                    <option value="where NO_CURSO = 'CONTROLADORIA E FINANÇAS' ">CONTROLADORIA E FINANÇAS</option>
                    <option value="where NO_CURSO = 'COOPERATIVISMO' ">COOPERATIVISMO</option>
                    <option value="where NO_CURSO = 'DANÇA' ">DANÇA</option>
                    <option value="where NO_CURSO = 'DECORAÇÃO' ">DECORAÇÃO</option>
                    <option value="where NO_CURSO = 'DEFESA E GESTÃO ESTRATÉGICA INTERNACIONAL' ">DEFESA E GESTÃO ESTRATÉGICA INTERNACIONAL</option>
                    <option value="where NO_CURSO = 'DESENHO E PLÁSTICA' ">DESENHO E PLÁSTICA</option>
                    <option value="where NO_CURSO = 'DESENHO INDUSTRIAL' ">DESENHO INDUSTRIAL</option>
                    <option value="where NO_CURSO = 'DESENHO INDUSTRIAL - PROJETO DE PRODUTO' ">DESENHO INDUSTRIAL - PROJETO DE PRODUTO</option>
                    <option value="where NO_CURSO = 'DESIGN' ">DESIGN</option>
                    <option value="where NO_CURSO = 'DESIGN - INDUSTRIAL' ">DESIGN - INDUSTRIAL</option>
                    <option value="where NO_CURSO = 'DESIGN - MODA' ">DESIGN - MODA</option>
                    <option value="where NO_CURSO = 'DESIGN DE AMBIENTES' ">DESIGN DE AMBIENTES</option>
                    <option value="where NO_CURSO = 'DESIGN DE INTERIORES' ">DESIGN DE INTERIORES</option>
                    <option value="where NO_CURSO = 'DESIGN DE MODA' ">DESIGN DE MODA</option>
                    <option value="where NO_CURSO = 'DESIGN DE PRODUTO' ">DESIGN DE PRODUTO</option>
                    <option value="where NO_CURSO = 'DESIGN DIGITAL' ">DESIGN DIGITAL</option>
                    <option value="where NO_CURSO = 'DESIGN GRÁFICO' ">DESIGN GRÁFICO</option>
                    <option value="where NO_CURSO = 'DESIGN VISUAL' ">DESIGN VISUAL</option>
                    <option value="where NO_CURSO = 'DIREÇÃO' ">DIREÇÃO</option>
                    <option value="where NO_CURSO = 'DIREÇÃO DE ARTE' ">DIREÇÃO DE ARTE</option>
                    <option value="where NO_CURSO = 'DIREITO' ">DIREITO</option>
                    <option value="where NO_CURSO = 'ECOLOGIA' ">ECOLOGIA</option>
                    <option value="where NO_CURSO = 'ECOLOGIA E ANÁLISE AMBIENTAL' ">ECOLOGIA E ANÁLISE AMBIENTAL</option>
                    <option value="where NO_CURSO = 'ECONOMIA ECOLÓGICA' ">ECONOMIA ECOLÓGICA</option>
                    <option value="where NO_CURSO = 'EDUCAÇÃO ARTÍSTICA - ARTES PLÁSTICAS' ">EDUCAÇÃO ARTÍSTICA - ARTES PLÁSTICAS</option>
                    <option value="where NO_CURSO = 'EDUCAÇÃO ARTÍSTICA - DESENHO' ">EDUCAÇÃO ARTÍSTICA - DESENHO</option>
                    <option value="where NO_CURSO = 'EDUCAÇÃO DO CAMPO' ">EDUCAÇÃO DO CAMPO</option>
                    <option value="where NO_CURSO = 'EDUCAÇÃO ESPECIAL' ">EDUCAÇÃO ESPECIAL</option>
                    <option value="where NO_CURSO = 'EDUCAÇÃO FÍSICA' ">EDUCAÇÃO FÍSICA</option>
                    <option value="where NO_CURSO = 'EDUCAÇÃO FÍSICA E SAÚDE' ">EDUCAÇÃO FÍSICA E SAÚDE</option>
                    <option value="where NO_CURSO = 'EDUCAÇÃO INFANTIL' ">EDUCAÇÃO INFANTIL</option>
                    <option value="where NO_CURSO = 'EDUCOMUNICAÇÃO' ">EDUCOMUNICAÇÃO</option>
                    <option value="where NO_CURSO = 'ELETROMECÂNICA' ">ELETROMECÂNICA</option>
                    <option value="where NO_CURSO = 'ELETRÔNICA INDUSTRIAL' ">ELETRÔNICA INDUSTRIAL</option>
                    <option value="where NO_CURSO = 'ENERGIAS RENOVÁVEIS' ">ENERGIAS RENOVÁVEIS</option>
                    <option value="where NO_CURSO = 'ENFERMAGEM' ">ENFERMAGEM</option>
                    <option value="where NO_CURSO = 'ENFERMAGEM E OBSTETRÍCIA' ">ENFERMAGEM E OBSTETRÍCIA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA AEROESPACIAL' ">ENGENHARIA AEROESPACIAL</option>
                    <option value="where NO_CURSO = 'ENGENHARIA AERONÁUTICA' ">ENGENHARIA AERONÁUTICA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA AGRÍCOLA' ">ENGENHARIA AGRÍCOLA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA AGRÍCOLA E AMBIENTAL' ">ENGENHARIA AGRÍCOLA E AMBIENTAL</option>
                    <option value="where NO_CURSO = 'ENGENHARIA AGROINDUSTRIAL AGROQUÍMICA' ">ENGENHARIA AGROINDUSTRIAL AGROQUÍMICA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA AGROINDUSTRIAL INDÚSTRIAS ALIMENTÍCIAS' ">ENGENHARIA AGROINDUSTRIAL INDÚSTRIAS ALIMENTÍCIAS</option>
                    <option value="where NO_CURSO = 'ENGENHARIA AGRONÔMICA' ">ENGENHARIA AGRONÔMICA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA AMBIENTAL' ">ENGENHARIA AMBIENTAL</option>
                    <option value="where NO_CURSO = 'ENGENHARIA AMBIENTAL E SANITÁRIA' ">ENGENHARIA AMBIENTAL E SANITÁRIA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA AUTOMOTIVA' ">ENGENHARIA AUTOMOTIVA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA BIOMÉDICA' ">ENGENHARIA BIOMÉDICA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA BIOQUÍMICA' ">ENGENHARIA BIOQUÍMICA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA CARTOGRÁFICA' ">ENGENHARIA CARTOGRÁFICA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA CARTOGRÁFICA E DE AGRIMENSURA' ">ENGENHARIA CARTOGRÁFICA E DE AGRIMENSURA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA CIVIL' ">ENGENHARIA CIVIL</option>
                    <option value="where NO_CURSO = 'ENGENHARIA CIVIL COSTEIRA E PORTUÁRIA' ">ENGENHARIA CIVIL COSTEIRA E PORTUÁRIA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA CIVIL DA MOBILIDADE' ">ENGENHARIA CIVIL DA MOBILIDADE</option>
                    <option value="where NO_CURSO = 'ENGENHARIA CIVIL DE INFRAESTRUTURA' ">ENGENHARIA CIVIL DE INFRAESTRUTURA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA CIVIL EMPRESARIAL' ">ENGENHARIA CIVIL EMPRESARIAL</option>
                    <option value="where NO_CURSO = 'ENGENHARIA COMPUTACIONAL' ">ENGENHARIA COMPUTACIONAL</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DA COMPUTAÇÃO' ">ENGENHARIA DA COMPUTAÇÃO</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DA MOBILIDADE' ">ENGENHARIA DA MOBILIDADE</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE AGRIMENSURA' ">ENGENHARIA DE AGRIMENSURA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE AGRIMENSURA E CARTOGRÁFICA' ">ENGENHARIA DE AGRIMENSURA E CARTOGRÁFICA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE AGRONEGÓCIOS' ">ENGENHARIA DE AGRONEGÓCIOS</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE ALIMENTOS' ">ENGENHARIA DE ALIMENTOS</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE AQUICULTURA' ">ENGENHARIA DE AQUICULTURA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE AUTOMAÇÃO' ">ENGENHARIA DE AUTOMAÇÃO</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE BIOPROCESSOS' ">ENGENHARIA DE BIOPROCESSOS</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE BIOPROCESSOS E BIOTECNOLOGIA' ">ENGENHARIA DE BIOPROCESSOS E BIOTECNOLOGIA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE BIOSSISTEMAS' ">ENGENHARIA DE BIOSSISTEMAS</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE BIOTECNOLOGIA' ">ENGENHARIA DE BIOTECNOLOGIA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE BIOTECNOLOGIA E BIOPROCESSOS' ">ENGENHARIA DE BIOTECNOLOGIA E BIOPROCESSOS</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE COMPUTAÇÃO' ">ENGENHARIA DE COMPUTAÇÃO</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE COMPUTAÇÃO E INFORMAÇÃO' ">ENGENHARIA DE COMPUTAÇÃO E INFORMAÇÃO</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE CONTROLE E AUTOMAÇÃO' ">ENGENHARIA DE CONTROLE E AUTOMAÇÃO</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE CONTROLE E AUTOMAÇÃO DE PROCESSOS' ">ENGENHARIA DE CONTROLE E AUTOMAÇÃO DE PROCESSOS</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE ENERGIA' ">ENGENHARIA DE ENERGIA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE ENERGIAS' ">ENGENHARIA DE ENERGIAS</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE ENERGIAS RENOVÁVEIS' ">ENGENHARIA DE ENERGIAS RENOVÁVEIS</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE MATERIAIS' ">ENGENHARIA DE MATERIAIS</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE MINAS' ">ENGENHARIA DE MINAS</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE MINAS E MEIO AMBIENTE' ">ENGENHARIA DE MINAS E MEIO AMBIENTE</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE PESCA' ">ENGENHARIA DE PESCA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE PETRÓLEO' ">ENGENHARIA DE PETRÓLEO</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE PRODUÇÃO' ">ENGENHARIA DE PRODUÇÃO</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE PRODUCAO - HABILITACAO MECANICA' ">ENGENHARIA DE PRODUCAO - HABILITACAO MECANICA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE PRODUÇÃO AGROINDUSTRIAL' ">ENGENHARIA DE PRODUÇÃO AGROINDUSTRIAL</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE PRODUÇÃO CIVIL' ">ENGENHARIA DE PRODUÇÃO CIVIL</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE PRODUÇÃO E SISTEMAS' ">ENGENHARIA DE PRODUÇÃO E SISTEMAS</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE PRODUÇÃO ELÉTRICA' ">ENGENHARIA DE PRODUÇÃO ELÉTRICA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE PRODUÇÃO MECÂNICA' ">ENGENHARIA DE PRODUÇÃO MECÂNICA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE RECURSOS HÍDRICOS E DO MEIO AMBIENTE' ">ENGENHARIA DE RECURSOS HÍDRICOS E DO MEIO AMBIENTE</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE SAÚDE E SEGURANÇA' ">ENGENHARIA DE SAÚDE E SEGURANÇA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE SISTEMAS' ">ENGENHARIA DE SISTEMAS</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE SOFTWARE' ">ENGENHARIA DE SOFTWARE</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE TELECOMUNICAÇÕES' ">ENGENHARIA DE TELECOMUNICAÇÕES</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE TRANSPORTE E LOGÍSTICA' ">ENGENHARIA DE TRANSPORTE E LOGÍSTICA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE TRANSPORTES' ">ENGENHARIA DE TRANSPORTES</option>
                    <option value="where NO_CURSO = 'ENGENHARIA DE TRANSPORTES E LOGÍSTICA' ">ENGENHARIA DE TRANSPORTES E LOGÍSTICA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA ELÉTRICA' ">ENGENHARIA ELÉTRICA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA ELÉTRICA - ELETRÔNICA' ">ENGENHARIA ELÉTRICA - ELETRÔNICA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA ELÉTRICA - ELETROTÉCNICA' ">ENGENHARIA ELÉTRICA - ELETROTÉCNICA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA ELÉTRICA - ENERGIA' ">ENGENHARIA ELÉTRICA - ENERGIA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA ELÉTRICA - ÊNFASE EM ELETRÔNICA' ">ENGENHARIA ELÉTRICA - ÊNFASE EM ELETRÔNICA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA ELÉTRICA - ÊNFASE EM SISTEMAS DE ENERGIA E AUTOMAÇÃO' ">ENGENHARIA ELÉTRICA - ÊNFASE EM SISTEMAS DE ENERGIA E AUTOMAÇÃO</option>
                    <option value="where NO_CURSO = 'ENGENHARIA ELÉTRICA - ROBÓTICA E AUTOMAÇÃO INDUSTRIAL' ">ENGENHARIA ELÉTRICA - ROBÓTICA E AUTOMAÇÃO INDUSTRIAL</option>
                    <option value="where NO_CURSO = 'ENGENHARIA ELÉTRICA - SISTEMAS DE POTÊNCIA' ">ENGENHARIA ELÉTRICA - SISTEMAS DE POTÊNCIA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA ELÉTRICA - SISTEMAS ELETRÔNICOS' ">ENGENHARIA ELÉTRICA - SISTEMAS ELETRÔNICOS</option>
                    <option value="where NO_CURSO = 'ENGENHARIA ELÉTRICA - TELECOMUNICAÇÕES' ">ENGENHARIA ELÉTRICA - TELECOMUNICAÇÕES</option>
                    <option value="where NO_CURSO = 'ENGENHARIA ELETRÔNICA' ">ENGENHARIA ELETRÔNICA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA ELETRÔNICA E DE TELECOMUNICAÇÕES' ">ENGENHARIA ELETRÔNICA E DE TELECOMUNICAÇÕES</option>
                    <option value="where NO_CURSO = 'ENGENHARIA FERROVIÁRIA E METROVIÁRIA' ">ENGENHARIA FERROVIÁRIA E METROVIÁRIA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA FÍSICA' ">ENGENHARIA FÍSICA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA FLORESTAL' ">ENGENHARIA FLORESTAL</option>
                    <option value="where NO_CURSO = 'ENGENHARIA GEOLÓGICA' ">ENGENHARIA GEOLÓGICA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA HÍDRICA' ">ENGENHARIA HÍDRICA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA INDUSTRIAL ELÉTRICA' ">ENGENHARIA INDUSTRIAL ELÉTRICA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA INDUSTRIAL MADEIREIRA' ">ENGENHARIA INDUSTRIAL MADEIREIRA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA INDUSTRIAL MECÂNICA' ">ENGENHARIA INDUSTRIAL MECÂNICA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA MATEMÁTICA' ">ENGENHARIA MATEMÁTICA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA MECÂNICA' ">ENGENHARIA MECÂNICA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA MECATRÔNICA' ">ENGENHARIA MECATRÔNICA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA METALÚRGICA' ">ENGENHARIA METALÚRGICA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA NAVAL' ">ENGENHARIA NAVAL</option>
                    <option value="where NO_CURSO = 'ENGENHARIA QUÍMICA' ">ENGENHARIA QUÍMICA</option>
                    <option value="where NO_CURSO = 'ENGENHARIA SANITARIA E AMBIENTAL' ">ENGENHARIA SANITARIA E AMBIENTAL</option>
                    <option value="where NO_CURSO = 'ENGENHARIA TÊXTIL' ">ENGENHARIA TÊXTIL</option>
                    <option value="where NO_CURSO = 'ENGENHARIA URBANA' ">ENGENHARIA URBANA</option>
                    <option value="where NO_CURSO = 'ENOLOGIA' ">ENOLOGIA</option>
                    <option value="where NO_CURSO = 'ESTATÍSTICA' ">ESTATÍSTICA</option>
                    <option value="where NO_CURSO = 'ESTATÍSTICA E CIÊNCIA DE DADOS' ">ESTATÍSTICA E CIÊNCIA DE DADOS</option>
                    <option value="where NO_CURSO = 'ESTÉTICA E COSMÉTICA' ">ESTÉTICA E COSMÉTICA</option>
                    <option value="where NO_CURSO = 'ESTÉTICA E TEORIA DO TEATRO' ">ESTÉTICA E TEORIA DO TEATRO</option>
                    <option value="where NO_CURSO = 'ESTUDO DE GÊNERO E DIVERSIDADE' ">ESTUDO DE GÊNERO E DIVERSIDADE</option>
                    <option value="where NO_CURSO = 'ESTUDOS DE MÍDIA' ">ESTUDOS DE MÍDIA</option>
                    <option value="where NO_CURSO = 'EVENTOS' ">EVENTOS</option>
                    <option value="where NO_CURSO = 'EXPRESSÃO GRÁFICA' ">EXPRESSÃO GRÁFICA</option>
                    <option value="where NO_CURSO = 'FABRICAÇÃO MECÂNICA' ">FABRICAÇÃO MECÂNICA</option>
                    <option value="where NO_CURSO = 'FARMÁCIA' ">FARMÁCIA</option>
                    <option value="where NO_CURSO = 'FILOSOFIA' ">FILOSOFIA</option>
                    <option value="where NO_CURSO = 'FINANÇAS' ">FINANÇAS</option>
                    <option value="where NO_CURSO = 'FÍSICA' ">FÍSICA</option>
                    <option value="where NO_CURSO = 'FÍSICA COMPUTACIONAL' ">FÍSICA COMPUTACIONAL</option>
                    <option value="where NO_CURSO = 'FÍSICA DE MATERIAIS' ">FÍSICA DE MATERIAIS</option>
                    <option value="where NO_CURSO = 'FÍSICA MÉDICA' ">FÍSICA MÉDICA</option>
                    <option value="where NO_CURSO = 'FISIOTERAPIA' ">FISIOTERAPIA</option>
                    <option value="where NO_CURSO = 'FONOAUDIOLOGIA' ">FONOAUDIOLOGIA</option>
                    <option value="where NO_CURSO = 'GASTRONOMIA' ">GASTRONOMIA</option>
                    <option value="where NO_CURSO = 'GEOGRAFIA' ">GEOGRAFIA</option>
                    <option value="where NO_CURSO = 'GEOGRAFIA - LICENCIATURA OU BACHARELADO' ">GEOGRAFIA - LICENCIATURA OU BACHARELADO</option>
                    <option value="where NO_CURSO = 'GEOLOGIA' ">GEOLOGIA</option>
                    <option value="where NO_CURSO = 'GEOPROCESSAMENTO' ">GEOPROCESSAMENTO</option>
                    <option value="where NO_CURSO = 'GERONTOLOGIA' ">GERONTOLOGIA</option>
                    <option value="where NO_CURSO = 'GESTÃO AMBIENTAL' ">GESTÃO AMBIENTAL</option>
                    <option value="where NO_CURSO = 'GESTÃO COMERCIAL' ">GESTÃO COMERCIAL</option>
                    <option value="where NO_CURSO = 'GESTÃO DA INFORMAÇÃO' ">GESTÃO DA INFORMAÇÃO</option>
                    <option value="where NO_CURSO = 'GESTÃO DA QUALIDADE' ">GESTÃO DA QUALIDADE</option>
                    <option value="where NO_CURSO = 'GESTÃO DA TECNOLOGIA DA INFORMAÇÃO' ">GESTÃO DA TECNOLOGIA DA INFORMAÇÃO</option>
                    <option value="where NO_CURSO = 'GESTÃO DE AGRONEGÓCIOS' ">GESTÃO DE AGRONEGÓCIOS</option>
                    <option value="where NO_CURSO = 'GESTÃO DE COOPERATIVAS' ">GESTÃO DE COOPERATIVAS</option>
                    <option value="where NO_CURSO = 'GESTÃO DE POLÍTICAS PÚBLICAS' ">GESTÃO DE POLÍTICAS PÚBLICAS</option>
                    <option value="where NO_CURSO = 'GESTÃO DE RECURSOS HUMANOS' ">GESTÃO DE RECURSOS HUMANOS</option>
                    <option value="where NO_CURSO = 'GESTÃO DE SERVIÇOS DE SAÚDE' ">GESTÃO DE SERVIÇOS DE SAÚDE</option>
                    <option value="where NO_CURSO = 'GESTÃO DE TURISMO' ">GESTÃO DE TURISMO</option>
                    <option value="where NO_CURSO = 'GESTÃO DESPORTIVA E DE LAZER' ">GESTÃO DESPORTIVA E DE LAZER</option>
                    <option value="where NO_CURSO = 'GESTÃO DO AGRONEGÓCIO' ">GESTÃO DO AGRONEGÓCIO</option>
                    <option value="where NO_CURSO = 'GESTÃO E ANÁLISE AMBIENTAL' ">GESTÃO E ANÁLISE AMBIENTAL</option>
                    <option value="where NO_CURSO = 'GESTÃO E EMPREENDEDORISMO' ">GESTÃO E EMPREENDEDORISMO</option>
                    <option value="where NO_CURSO = 'GESTÃO EM LOGÍSTICA' ">GESTÃO EM LOGÍSTICA</option>
                    <option value="where NO_CURSO = 'GESTÃO EM SAÚDE' ">GESTÃO EM SAÚDE</option>
                    <option value="where NO_CURSO = 'GESTÃO EM SAÚDE AMBIENTAL' ">GESTÃO EM SAÚDE AMBIENTAL</option>
                    <option value="where NO_CURSO = 'GESTÃO EMPREENDEDORA' ">GESTÃO EMPREENDEDORA</option>
                    <option value="where NO_CURSO = 'GESTÃO HOSPITALAR' ">GESTÃO HOSPITALAR</option>
                    <option value="where NO_CURSO = 'GESTÃO IMOBILIÁRIA' ">GESTÃO IMOBILIÁRIA</option>
                    <option value="where NO_CURSO = 'GESTÃO PÚBLICA' ">GESTÃO PÚBLICA</option>
                    <option value="where NO_CURSO = 'GESTÃO PÚBLICA PARA O DESENVOLVIMENTO ECONÔMICO E SOCIAL' ">GESTÃO PÚBLICA PARA O DESENVOLVIMENTO ECONÔMICO E SOCIAL</option>
                    <option value="where NO_CURSO = 'GRAVURA' ">GRAVURA</option>
                    <option value="where NO_CURSO = 'HISTÓRIA' ">HISTÓRIA</option>
                    <option value="where NO_CURSO = 'HISTÓRIA - LICENCIATURA OU BACHARELADO' ">HISTÓRIA - LICENCIATURA OU BACHARELADO</option>
                    <option value="where NO_CURSO = 'HISTÓRIA - MEMÓRIA E IMAGEM' ">HISTÓRIA - MEMÓRIA E IMAGEM</option>
                    <option value="where NO_CURSO = 'HISTÓRIA DA ARTE' ">HISTÓRIA DA ARTE</option>
                    <option value="where NO_CURSO = 'HOTELARIA' ">HOTELARIA</option>
                    <option value="where NO_CURSO = 'HUMANIDADES - BI/LI' ">HUMANIDADES - BI/LI</option>
                    <option value="where NO_CURSO = 'IMAGEM E SOM' ">IMAGEM E SOM</option>
                    <option value="where NO_CURSO = 'INFORMÁTICA' ">INFORMÁTICA</option>
                    <option value="where NO_CURSO = 'INFORMÁTICA BIOMÉDICA' ">INFORMÁTICA BIOMÉDICA</option>
                    <option value="where NO_CURSO = 'INFORMÁTICA EM SAÚDE' ">INFORMÁTICA EM SAÚDE</option>
                    <option value="where NO_CURSO = 'INTELIGÊNCIA ARTIFICIAL' ">INTELIGÊNCIA ARTIFICIAL</option>
                    <option value="where NO_CURSO = 'INTERDISCIPLINAR EM ARTES' ">INTERDISCIPLINAR EM ARTES</option>
                    <option value="where NO_CURSO = 'INTERDISCIPLINAR EM ARTES E SUAS TECNOLOGIAS' ">INTERDISCIPLINAR EM ARTES E SUAS TECNOLOGIAS</option>
                    <option value="where NO_CURSO = 'INTERDISCIPLINAR EM BIOSSISTEMAS' ">INTERDISCIPLINAR EM BIOSSISTEMAS</option>
                    <option value="where NO_CURSO = 'INTERDISCIPLINAR EM CIÊNCIA E ECONOMIA - BI/LI' ">INTERDISCIPLINAR EM CIÊNCIA E ECONOMIA - BI/LI</option>
                    <option value="where NO_CURSO = 'INTERDISCIPLINAR EM CIÊNCIA E TECNOLOGIA' ">INTERDISCIPLINAR EM CIÊNCIA E TECNOLOGIA</option>
                    <option value="where NO_CURSO = 'INTERDISCIPLINAR EM CIÊNCIA E TECNOLOGIA DO MAR - BI/LI' ">INTERDISCIPLINAR EM CIÊNCIA E TECNOLOGIA DO MAR - BI/LI</option>
                    <option value="where NO_CURSO = 'INTERDISCIPLINAR EM CIÊNCIA, TECNOLOGIA E INOVAÇÃO' ">INTERDISCIPLINAR EM CIÊNCIA, TECNOLOGIA E INOVAÇÃO</option>
                    <option value="where NO_CURSO = 'INTERDISCIPLINAR EM CIÊNCIAS' ">INTERDISCIPLINAR EM CIÊNCIAS</option>
                    <option value="where NO_CURSO = 'INTERDISCIPLINAR EM CIÊNCIAS DA NATUREZA E SUAS TECNOLOGIAS' ">INTERDISCIPLINAR EM CIÊNCIAS DA NATUREZA E SUAS TECNOLOGIAS</option>
                    <option value="where NO_CURSO = 'INTERDISCIPLINAR EM CIÊNCIAS E HUMANIDADES - BI/LI' ">INTERDISCIPLINAR EM CIÊNCIAS E HUMANIDADES - BI/LI</option>
                    <option value="where NO_CURSO = 'INTERDISCIPLINAR EM CIÊNCIAS HUMANAS - BI/LI' ">INTERDISCIPLINAR EM CIÊNCIAS HUMANAS - BI/LI</option>
                    <option value="where NO_CURSO = 'INTERDISCIPLINAR EM CIÊNCIAS HUMANAS E SOCIAIS E SUAS TECNOLOGIAS' ">INTERDISCIPLINAR EM CIÊNCIAS HUMANAS E SOCIAIS E SUAS TECNOLOGIAS</option>
                    <option value="where NO_CURSO = 'INTERDISCIPLINAR EM CIÊNCIAS NATURAIS E EXATAS' ">INTERDISCIPLINAR EM CIÊNCIAS NATURAIS E EXATAS</option>
                    <option value="where NO_CURSO = 'INTERDISCIPLINAR EM CIÊNCIAS NATURAIS E MATEMÁTICA' ">INTERDISCIPLINAR EM CIÊNCIAS NATURAIS E MATEMÁTICA</option>
                    <option value="where NO_CURSO = 'INTERDISCIPLINAR EM CULTURA, LINGUAGENS E TECNOLOGIAS APLICADAS' ">INTERDISCIPLINAR EM CULTURA, LINGUAGENS E TECNOLOGIAS APLICADAS</option>
                    <option value="where NO_CURSO = 'INTERDISCIPLINAR EM EDUCAÇÃO DO CAMPO: CIÊNCIAS DA NATUREZA' ">INTERDISCIPLINAR EM EDUCAÇÃO DO CAMPO: CIÊNCIAS DA NATUREZA</option>
                    <option value="where NO_CURSO = 'INTERDISCIPLINAR EM EDUCAÇÃO NO CAMPO' ">INTERDISCIPLINAR EM EDUCAÇÃO NO CAMPO</option>
                    <option value="where NO_CURSO = 'INTERDISCIPLINAR EM ENERGIA E SUSTENTABILIDADE' ">INTERDISCIPLINAR EM ENERGIA E SUSTENTABILIDADE</option>
                    <option value="where NO_CURSO = 'INTERDISCIPLINAR EM ESTUDOS AFRICANOS E AFRO-BRASILEIROS' ">INTERDISCIPLINAR EM ESTUDOS AFRICANOS E AFRO-BRASILEIROS</option>
                    <option value="where NO_CURSO = 'INTERDISCIPLINAR EM HUMANIDADES' ">INTERDISCIPLINAR EM HUMANIDADES</option>
                    <option value="where NO_CURSO = 'INTERDISCIPLINAR EM LINGUAGENS E CÓDIGOS E SUAS TECNOLOGIAS' ">INTERDISCIPLINAR EM LINGUAGENS E CÓDIGOS E SUAS TECNOLOGIAS</option>
                    <option value="where NO_CURSO = 'INTERDISCIPLINAR EM SAÚDE' ">INTERDISCIPLINAR EM SAÚDE</option>
                    <option value="where NO_CURSO = 'INTERDISCIPLINAR EM TECNOLOGIA DA INFORMAÇÃO - BI/LI' ">INTERDISCIPLINAR EM TECNOLOGIA DA INFORMAÇÃO - BI/LI</option>
                    <option value="where NO_CURSO = 'INTERPRETAÇÃO' ">INTERPRETAÇÃO</option>
                    <option value="where NO_CURSO = 'IRRIGAÇÃO E DRENAGEM' ">IRRIGAÇÃO E DRENAGEM</option>
                    <option value="where NO_CURSO = 'JOGOS DIGITAIS' ">JOGOS DIGITAIS</option>
                    <option value="where NO_CURSO = 'JORNALISMO' ">JORNALISMO</option>
                    <option value="where NO_CURSO = 'LATICÍNIOS' ">LATICÍNIOS</option>
                    <option value="where NO_CURSO = 'LAZER E TURISMO' ">LAZER E TURISMO</option>
                    <option value="where NO_CURSO = 'LETRAS' ">LETRAS</option>
                    <option value="where NO_CURSO = 'LETRAS - ESPANHOL' ">LETRAS - ESPANHOL</option>
                    <option value="where NO_CURSO = 'LETRAS - ESPANHOL E LITERATURA HISPÂNICA' ">LETRAS - ESPANHOL E LITERATURA HISPÂNICA</option>
                    <option value="where NO_CURSO = 'LETRAS - ESPANHOL E LITERATURAS DE LÍNGUA ESPANHOLA' ">LETRAS - ESPANHOL E LITERATURAS DE LÍNGUA ESPANHOLA</option>
                    <option value="where NO_CURSO = 'LETRAS - ESTUDOS LITERÁRIOS' ">LETRAS - ESTUDOS LITERÁRIOS</option>
                    <option value="where NO_CURSO = 'LETRAS - FRANCÊS' ">LETRAS - FRANCÊS</option>
                    <option value="where NO_CURSO = 'LETRAS - GREGO' ">LETRAS - GREGO</option>
                    <option value="where NO_CURSO = 'LETRAS - INGLÊS' ">LETRAS - INGLÊS</option>
                    <option value="where NO_CURSO = 'LETRAS - ITALIANO' ">LETRAS - ITALIANO</option>
                    <option value="where NO_CURSO = 'LETRAS - JAPONÊS' ">LETRAS - JAPONÊS</option>
                    <option value="where NO_CURSO = 'LETRAS - LATIM' ">LETRAS - LATIM</option>
                    <option value="where NO_CURSO = 'LETRAS - LETRAS CLÁSSICAS (GREGO E LATIM)' ">LETRAS - LETRAS CLÁSSICAS (GREGO E LATIM)</option>
                    <option value="where NO_CURSO = 'LETRAS - LIBRAS' ">LETRAS - LIBRAS</option>
                    <option value="where NO_CURSO = 'LETRAS - LIBRAS/LÍNGUA ESTRANGEIRA' ">LETRAS - LIBRAS/LÍNGUA ESTRANGEIRA</option>
                    <option value="where NO_CURSO = 'LETRAS - LíNGUA E LITERATURAS DE LíNGUA INGLESA' ">LETRAS - LíNGUA E LITERATURAS DE LíNGUA INGLESA</option>
                    <option value="where NO_CURSO = 'LETRAS - LINGUA ESPANHOLA' ">LETRAS - LINGUA ESPANHOLA</option>
                    <option value="where NO_CURSO = 'LETRAS - LÍNGUA ESTRANGEIRA' ">LETRAS - LÍNGUA ESTRANGEIRA</option>
                    <option value="where NO_CURSO = 'LETRAS - LÍNGUA INGLESA' ">LETRAS - LÍNGUA INGLESA</option>
                    <option value="where NO_CURSO = 'LETRAS - LÍNGUA INGLESA E SUAS LITERATURAS' ">LETRAS - LÍNGUA INGLESA E SUAS LITERATURAS</option>
                    <option value="where NO_CURSO = 'LETRAS - LÍNGUA PORTUGUESA' ">LETRAS - LÍNGUA PORTUGUESA</option>
                    <option value="where NO_CURSO = 'LETRAS - LÍNGUA PORTUGUESA COM DOMÍNIO DE LIBRAS' ">LETRAS - LÍNGUA PORTUGUESA COM DOMÍNIO DE LIBRAS</option>
                    <option value="where NO_CURSO = 'LETRAS - LÍNGUA PORTUGUESA E LÍNGUA FRANCESA' ">LETRAS - LÍNGUA PORTUGUESA E LÍNGUA FRANCESA</option>
                    <option value="where NO_CURSO = 'LETRAS - LÍNGUAS ADICIONAIS INGLÊS, ESPANHOL E RESPECTIVAS LITERATURAS' ">LETRAS - LÍNGUAS ADICIONAIS INGLÊS, ESPANHOL E RESPECTIVAS LITERATURAS</option>
                    <option value="where NO_CURSO = 'LETRAS - POLONÊS' ">LETRAS - POLONÊS</option>
                    <option value="where NO_CURSO = 'LETRAS - PORTUGUÊS' ">LETRAS - PORTUGUÊS</option>
                    <option value="where NO_CURSO = 'LETRAS - PORTUGUÊS E ALEMÃO' ">LETRAS - PORTUGUÊS E ALEMÃO</option>
                    <option value="where NO_CURSO = 'LETRAS - PORTUGUÊS E ÁRABE' ">LETRAS - PORTUGUÊS E ÁRABE</option>
                    <option value="where NO_CURSO = 'LETRAS - PORTUGUÊS E ESPANHOL' ">LETRAS - PORTUGUÊS E ESPANHOL</option>
                    <option value="where NO_CURSO = 'LETRAS - PORTUGUÊS E FRANCÊS' ">LETRAS - PORTUGUÊS E FRANCÊS</option>
                    <option value="where NO_CURSO = 'LETRAS - PORTUGUÊS E GREGO' ">LETRAS - PORTUGUÊS E GREGO</option>
                    <option value="where NO_CURSO = 'LETRAS - PORTUGUÊS E HEBRAICO' ">LETRAS - PORTUGUÊS E HEBRAICO</option>
                    <option value="where NO_CURSO = 'LETRAS - PORTUGUÊS E INGLÊS' ">LETRAS - PORTUGUÊS E INGLÊS</option>
                    <option value="where NO_CURSO = 'LETRAS - PORTUGUÊS E INGLÊS E RESPECTIVAS LITERATURAS' ">LETRAS - PORTUGUÊS E INGLÊS E RESPECTIVAS LITERATURAS</option>
                    <option value="where NO_CURSO = 'LETRAS - PORTUGUÊS E ITALIANO' ">LETRAS - PORTUGUÊS E ITALIANO</option>
                    <option value="where NO_CURSO = 'LETRAS - PORTUGUÊS E JAPONÊS' ">LETRAS - PORTUGUÊS E JAPONÊS</option>
                    <option value="where NO_CURSO = 'LETRAS - PORTUGUÊS E LATIM' ">LETRAS - PORTUGUÊS E LATIM</option>
                    <option value="where NO_CURSO = 'LETRAS - PORTUGUÊS E LITERATURAS' ">LETRAS - PORTUGUÊS E LITERATURAS</option>
                    <option value="where NO_CURSO = 'LETRAS - PORTUGUÊS E LITERATURAS DA LÍNGUA PORTUGUESA' ">LETRAS - PORTUGUÊS E LITERATURAS DA LÍNGUA PORTUGUESA</option>
                    <option value="where NO_CURSO = 'LETRAS - PORTUGUÊS E RUSSO' ">LETRAS - PORTUGUÊS E RUSSO</option>
                    <option value="where NO_CURSO = 'LETRAS - REDAÇÃO E REVISÃO DE TEXTOS' ">LETRAS - REDAÇÃO E REVISÃO DE TEXTOS</option>
                    <option value="where NO_CURSO = 'LETRAS - TRADUÇÃO' ">LETRAS - TRADUÇÃO</option>
                    <option value="where NO_CURSO = 'LETRAS - TRADUÇÃO ESPANHOL - PORTUGUÊS' ">LETRAS - TRADUÇÃO ESPANHOL - PORTUGUÊS</option>
                    <option value="where NO_CURSO = 'LETRAS - TRADUÇÃO INGLÊS - PORTUGUÊS' ">LETRAS - TRADUÇÃO INGLÊS - PORTUGUÊS</option>
                    <option value="where NO_CURSO = 'LETRAS PORTUGUÊS E ESPANHOL E RESPECTIVAS LITERATURAS' ">LETRAS PORTUGUÊS E ESPANHOL E RESPECTIVAS LITERATURAS</option>
                    <option value="where NO_CURSO = 'LETRAS PORTUGUÊS E FRANCÊS' ">LETRAS PORTUGUÊS E FRANCÊS</option>
                    <option value="where NO_CURSO = 'LETRAS PORTUGUÊS E INGLÊS' ">LETRAS PORTUGUÊS E INGLÊS</option>
                    <option value="where NO_CURSO = 'LETRAS VERNÁCULAS' ">LETRAS VERNÁCULAS</option>
                    <option value="where NO_CURSO = 'LETRAS: ESPANHOL' ">LETRAS: ESPANHOL</option>
                    <option value="where NO_CURSO = 'LETRAS: ESTUDOS LITERÁRIOS' ">LETRAS: ESTUDOS LITERÁRIOS</option>
                    <option value="where NO_CURSO = 'LETRAS: FRANCÊS' ">LETRAS: FRANCÊS</option>
                    <option value="where NO_CURSO = 'LETRAS: INGLÊS' ">LETRAS: INGLÊS</option>
                    <option value="where NO_CURSO = 'LETRAS: LIBRAS' ">LETRAS: LIBRAS</option>
                    <option value="where NO_CURSO = 'LETRAS: LINGUÍSTICA' ">LETRAS: LINGUÍSTICA</option>
                    <option value="where NO_CURSO = 'LETRAS: PORTUGUÊS' ">LETRAS: PORTUGUÊS</option>
                    <option value="where NO_CURSO = 'LETRAS: TRADUÇÃO E INTERPRETAÇÃO EM LIBRAS/PORTUGUÊS' ">LETRAS: TRADUÇÃO E INTERPRETAÇÃO EM LIBRAS/PORTUGUÊS</option>
                    <option value="where NO_CURSO = 'LÍNGUA E LITERATURAS DA LÍNGUA INGLESA' ">LÍNGUA E LITERATURAS DA LÍNGUA INGLESA</option>
                    <option value="where NO_CURSO = 'LÍNGUA PORTUGUESA E RESPECTIVAS LITERATURAS' ">LÍNGUA PORTUGUESA E RESPECTIVAS LITERATURAS</option>
                    <option value="where NO_CURSO = 'LINGUAGEM E COMUNICAÇÃO' ">LINGUAGEM E COMUNICAÇÃO</option>
                    <option value="where NO_CURSO = 'LÍNGUAS ESTRANGEIRAS APLICADAS ÀS NEGOCIAÇÕES INTERNACIONAIS' ">LÍNGUAS ESTRANGEIRAS APLICADAS ÀS NEGOCIAÇÕES INTERNACIONAIS</option>
                    <option value="where NO_CURSO = 'LINGUÍSTICA' ">LINGUÍSTICA</option>
                    <option value="where NO_CURSO = 'LOGÍSTICA' ">LOGÍSTICA</option>
                    <option value="where NO_CURSO = 'LUTERIA' ">LUTERIA</option>
                    <option value="where NO_CURSO = 'MANUTENÇÃO INDUSTRIAL' ">MANUTENÇÃO INDUSTRIAL</option>
                    <option value="where NO_CURSO = 'MARKETING' ">MARKETING</option>
                    <option value="where NO_CURSO = 'MATEMÁTICA' ">MATEMÁTICA</option>
                    <option value="where NO_CURSO = 'MATEMÁTICA - LICENCIATURA OU BACHARELADO' ">MATEMÁTICA - LICENCIATURA OU BACHARELADO</option>
                    <option value="where NO_CURSO = 'MATEMÁTICA APLICADA' ">MATEMÁTICA APLICADA</option> <!-- Pagina 290 -->
                    <option value="where NO_CURSO = 'MATEMÁTICA APLICADA A NEGÓCIOS' ">MATEMÁTICA APLICADA A NEGÓCIOS</option>
                    <option value="where NO_CURSO = 'MATEMÁTICA APLICADA E COMPUTAÇÃO CIENTÍFICA' ">MATEMÁTICA APLICADA E COMPUTAÇÃO CIENTÍFICA</option>
                    <option value="where NO_CURSO = 'MATEMÁTICA APLICADA E COMPUTACIONAL' ">MATEMÁTICA APLICADA E COMPUTACIONAL</option>
                    <option value="where NO_CURSO = 'MATEMÁTICA COMPUTACIONAL' ">MATEMÁTICA COMPUTACIONAL</option>
                    <option value="where NO_CURSO = 'MATEMÁTICA INDUSTRIAL' ">MATEMÁTICA INDUSTRIAL</option>
                    <option value="where NO_CURSO = 'MECÂNICA INDUSTRIAL' ">MECÂNICA INDUSTRIAL</option>
                    <option value="where NO_CURSO = 'MECATRÔNICA INDUSTRIAL' ">MECATRÔNICA INDUSTRIAL</option>
                    <option value="where NO_CURSO = 'MEDICINA' ">MEDICINA</option>
                    <option value="where NO_CURSO = 'MEDICINA VETERINÁRIA' ">MEDICINA VETERINÁRIA</option>
                    <option value="where NO_CURSO = 'METEOROLOGIA' ">METEOROLOGIA</option>
                    <option value="where NO_CURSO = 'MÍDIA E TECNOLOGIA' ">MÍDIA E TECNOLOGIA</option>
                    <option value="where NO_CURSO = 'MÍDIAS DIGITAIS' ">MÍDIAS DIGITAIS</option>
                    <option value="where NO_CURSO = 'MINERAÇÃO' ">MINERAÇÃO</option>
                    <option value="where NO_CURSO = 'MODA' ">MODA</option>
                    <option value="where NO_CURSO = 'MODA E DESIGN' ">MODA E DESIGN</option>
                    <option value="where NO_CURSO = 'MODA, DESIGN E ESTILISMO' ">MODA, DESIGN E ESTILISMO</option>
                    <option value="where NO_CURSO = 'MUSEOLOGIA' ">MUSEOLOGIA</option>
                    <option value="where NO_CURSO = 'MÚSICA' ">MÚSICA</option>
                    <option value="where NO_CURSO = 'MÚSICA - CANTO' ">MÚSICA - CANTO</option>
                    <option value="where NO_CURSO = 'MÚSICA - CIÊNCIAS MUSICAIS' ">MÚSICA - CIÊNCIAS MUSICAIS</option>
                    <option value="where NO_CURSO = 'MÚSICA - CLARINETE' ">MÚSICA - CLARINETE</option>
                    <option value="where NO_CURSO = 'MÚSICA - COMPOSIÇÃO' ">MÚSICA - COMPOSIÇÃO</option>
                    <option value="where NO_CURSO = 'MÚSICA - MÚSICA POPULAR BRASILEIRA' ">MÚSICA - MÚSICA POPULAR BRASILEIRA</option>
                    <option value="where NO_CURSO = 'MÚSICA - REGÊNCIA' ">MÚSICA - REGÊNCIA</option>
                    <option value="where NO_CURSO = 'MÚSICA - VIOLÃO' ">MÚSICA - VIOLÃO</option>
                    <option value="where NO_CURSO = 'MÚSICA - VIOLINO' ">MÚSICA - VIOLINO</option>
                    <option value="where NO_CURSO = 'MÚSICA POPULAR' ">MÚSICA POPULAR</option>
                    <option value="where NO_CURSO = 'MUSICOTERAPIA' ">MUSICOTERAPIA</option>
                    <option value="where NO_CURSO = 'NANOTECNOLOGIA' ">NANOTECNOLOGIA</option>
                    <option value="where NO_CURSO = 'NEGÓCIOS IMOBILIÁRIOS' ">NEGÓCIOS IMOBILIÁRIOS</option>
                    <option value="where NO_CURSO = 'NUTRIÇÃO' ">NUTRIÇÃO</option>
                    <option value="where NO_CURSO = 'NUTRIÇÃO E METABOLISMO' ">NUTRIÇÃO E METABOLISMO</option>
                    <option value="where NO_CURSO = 'OBSTETRÍCIA' ">OBSTETRÍCIA</option>
                    <option value="where NO_CURSO = 'OCEANOGRAFIA' ">OCEANOGRAFIA</option>
                    <option value="where NO_CURSO = 'ODONTOLOGIA' ">ODONTOLOGIA</option>
                    <option value="where NO_CURSO = 'PEDAGOGIA' ">PEDAGOGIA</option>
                    <option value="where NO_CURSO = 'PEDAGOGIA - EDUCAÇÃO DO CAMPO' ">PEDAGOGIA - EDUCAÇÃO DO CAMPO</option>
                    <option value="where NO_CURSO = 'PEDAGOGIA - EDUCAÇÃO INFANTIL E ANOS INICIAIS DO ENSINO FUNDAMENTAL' ">PEDAGOGIA - EDUCAÇÃO INFANTIL E ANOS INICIAIS DO ENSINO FUNDAMENTAL</option>
                    <option value="where NO_CURSO = 'PEDAGOGIA BILINGUE - LIBRAS/PORTUGUÊS' ">PEDAGOGIA BILINGUE - LIBRAS/PORTUGUÊS</option>
                    <option value="where NO_CURSO = 'PINTURA' ">PINTURA</option>
                    <option value="where NO_CURSO = 'POLÍTICA E GESTÃO CULTURAL' ">POLÍTICA E GESTÃO CULTURAL</option>
                    <option value="where NO_CURSO = 'POLÍTICAS PÚBLICAS' ">POLÍTICAS PÚBLICAS</option>
                    <option value="where NO_CURSO = 'PROCESSOS GERENCIAIS' ">PROCESSOS GERENCIAIS</option>
                    <option value="where NO_CURSO = 'PROCESSOS METALÚRGICOS' ">PROCESSOS METALÚRGICOS</option>
                    <option value="where NO_CURSO = 'PROCESSOS QUÍMICOS' ">PROCESSOS QUÍMICOS</option>
                    <option value="where NO_CURSO = 'PRODUÇÃO CÊNICA' ">PRODUÇÃO CÊNICA</option>
                    <option value="where NO_CURSO = 'PRODUÇÃO CULTURAL' ">PRODUÇÃO CULTURAL</option>
                    <option value="where NO_CURSO = 'PRODUÇÃO DE GRÃOS' ">PRODUÇÃO DE GRÃOS</option>
                    <option value="where NO_CURSO = 'PRODUÇÃO E POLÍTICA CULTURAL' ">PRODUÇÃO E POLÍTICA CULTURAL</option>
                    <option value="where NO_CURSO = 'PRODUÇÃO MULTIMÍDIA' ">PRODUÇÃO MULTIMÍDIA</option>
                    <option value="where NO_CURSO = 'PRODUÇÃO MUSICAL' ">PRODUÇÃO MUSICAL</option>
                    <option value="where NO_CURSO = 'PRODUÇÃO PUBLICITÁRIA' ">PRODUÇÃO PUBLICITÁRIA</option>
                    <option value="where NO_CURSO = 'PRODUÇÃO SUCROALCOOLEIRA' ">PRODUÇÃO SUCROALCOOLEIRA</option>
                    <option value="where NO_CURSO = 'PSICOLOGIA' ">PSICOLOGIA</option>
                    <option value="where NO_CURSO = 'PSICOLOGIA - FORMAÇÃO DE PSICÓLOGO' ">PSICOLOGIA - FORMAÇÃO DE PSICÓLOGO</option>
                    <option value="where NO_CURSO = 'PSICOPEDAGOGIA' ">PSICOPEDAGOGIA</option>
                    <option value="where NO_CURSO = 'PUBLICIDADE E PROPAGANDA' ">PUBLICIDADE E PROPAGANDA</option>
                    <option value="where NO_CURSO = 'QUÍMICA' ">QUÍMICA</option>
                    <option value="where NO_CURSO = 'QUÍMICA - ATRIBUIÇÔES TECNOLÓGICAS' ">QUÍMICA - ATRIBUIÇÔES TECNOLÓGICAS</option>
                    <option value="where NO_CURSO = 'QUÍMICA - LICENCIATURA OU BACHARELADO' ">QUÍMICA - LICENCIATURA OU BACHARELADO</option>
                    <option value="where NO_CURSO = 'QUÍMICA AMBIENTAL' ">QUÍMICA AMBIENTAL</option>
                    <option value="where NO_CURSO = 'QUÍMICA DE ALIMENTOS' ">QUÍMICA DE ALIMENTOS</option>
                    <option value="where NO_CURSO = 'QUÍMICA DO PETRÓLEO' ">QUÍMICA DO PETRÓLEO</option>
                    <option value="where NO_CURSO = 'QUÍMICA INDUSTRIAL' ">QUÍMICA INDUSTRIAL</option>
                    <option value="where NO_CURSO = 'QUÍMICA TECNOLÓGICA' ">QUÍMICA TECNOLÓGICA</option>
                    <option value="where NO_CURSO = 'QUÍMICA TECNOLÓGICA E INDUSTRIAL' ">QUÍMICA TECNOLÓGICA E INDUSTRIAL</option>
                    <option value="where NO_CURSO = 'RADIALISMO' ">RADIALISMO</option>
                    <option value="where NO_CURSO = 'RÁDIO, TV E INTERNET' ">RÁDIO, TV E INTERNET</option>
                    <option value="where NO_CURSO = 'RADIOLOGIA' ">RADIOLOGIA</option>
                    <option value="where NO_CURSO = 'REDES DE COMPUTADORES' ">REDES DE COMPUTADORES</option>
                    <option value="where NO_CURSO = 'RELAÇÕES ECONÔMICAS INTERNACIONAIS' ">RELAÇÕES ECONÔMICAS INTERNACIONAIS</option>
                    <option value="where NO_CURSO = 'RELAÇÕES INTERNACIONAIS' ">RELAÇÕES INTERNACIONAIS</option>
                    <option value="where NO_CURSO = 'RELAÇÕES PÚBLICAS' ">RELAÇÕES PÚBLICAS</option>
                    <option value="where NO_CURSO = 'SANEAMENTO AMBIENTAL' ">SANEAMENTO AMBIENTAL</option>
                    <option value="where NO_CURSO = 'SAÚDE COLETIVA' ">SAÚDE COLETIVA</option>
                    <option value="where NO_CURSO = 'SAÚDE PÚBLICA' ">SAÚDE PÚBLICA</option>
                    <option value="where NO_CURSO = 'SECRETARIADO' ">SECRETARIADO</option>
                    <option value="where NO_CURSO = 'SECRETARIADO EXECUTIVO' ">SECRETARIADO EXECUTIVO</option>
                    <option value="where NO_CURSO = 'SECRETARIADO EXECUTIVO - BILÍNGUE' ">SECRETARIADO EXECUTIVO - BILÍNGUE</option>
                    <option value="where NO_CURSO = 'SEGURANÇA NO TRABALHO' ">SEGURANÇA NO TRABALHO</option>
                    <option value="where NO_CURSO = 'SEGURANÇA PÚBLICA' ">SEGURANÇA PÚBLICA</option>
                    <option value="where NO_CURSO = 'SERVIÇO SOCIAL' ">SERVIÇO SOCIAL</option>
                    <option value="where NO_CURSO = 'SISTEMA DE INFORMAÇÃO' ">SISTEMA DE INFORMAÇÃO</option>
                    <option value="where NO_CURSO = 'SISTEMAS DE TELECOMUNICAÇÕES' ">SISTEMAS DE TELECOMUNICAÇÕES</option>
                    <option value="where NO_CURSO = 'SISTEMAS E MÍDIAS DIGITAIS' ">SISTEMAS E MÍDIAS DIGITAIS</option>
                    <option value="where NO_CURSO = 'SISTEMAS PARA INTERNET' ">SISTEMAS PARA INTERNET</option>
                    <option value="where NO_CURSO = 'SOCIOLOGIA' ">SOCIOLOGIA</option>
                    <option value="where NO_CURSO = 'SOM, IMAGEM E MOVIMENTO' ">SOM, IMAGEM E MOVIMENTO </option>
                    <option value="where NO_CURSO = 'SUPERIOR DO AUDIOVISUAL' ">SUPERIOR DO AUDIOVISUAL</option>
                    <option value="where NO_CURSO = 'TEATRO' ">TEATRO</option>
                    <option value="where NO_CURSO = 'TECNOLOGIA DA INFORMAÇÃO' ">TECNOLOGIA DA INFORMAÇÃO</option>
                    <option value="where NO_CURSO = 'TECNOLOGIAS DA INFORMAÇÃO E COMUNICAÇÃO' ">TECNOLOGIAS DA INFORMAÇÃO E COMUNICAÇÃO</option>
                    <option value="where NO_CURSO = 'TELEMÁTICA' ">TELEMÁTICA</option>
                    <option value="where NO_CURSO = 'TEORIA DA DANÇA' ">TEORIA DA DANÇA</option>
                    <option value="where NO_CURSO = 'TERAPIA OCUPACIONAL' ">TERAPIA OCUPACIONAL</option>
                    <option value="where NO_CURSO = 'TÊXTIL E MODA' ">TÊXTIL E MODA</option>
                    <option value="where NO_CURSO = 'TOXICOLOGIA AMBIENTAL' ">TOXICOLOGIA AMBIENTAL</option>
                    <option value="where NO_CURSO = 'TOXICOLOGIA ANALÍTICA' ">TOXICOLOGIA ANALÍTICA</option>
                    <option value="where NO_CURSO = 'TRADUÇÃO' ">TRADUÇÃO</option>
                    <option value="where NO_CURSO = 'TRADUÇÃO E INTERPRETAÇÃO EM LÍNGUA BRASILEIRA DE SINAIS - LIBRAS/LÍNGUA PORTUGUESA' ">TRADUÇÃO E INTERPRETAÇÃO EM LÍNGUA BRASILEIRA DE SINAIS - LIBRAS/LÍNGUA PORTUGUESA</option>
                    <option value="where NO_CURSO = 'TRANSPORTE TERRESTRE' ">TRANSPORTE TERRESTRE</option>
                    <option value="where NO_CURSO = 'TURISMO' ">TURISMO</option>
                    <option value="where NO_CURSO = 'TURISMO E NEGÓCIOS' ">TURISMO E NEGÓCIOS</option>
                    <option value="where NO_CURSO = 'TURISMO PATRIMONIAL E SOCIOAMBIENTAL' ">TURISMO PATRIMONIAL E SOCIOAMBIENTAL</option>
                    <option value="where NO_CURSO = 'VITICULTURA E ENOLOGIA' ">VITICULTURA E ENOLOGIA</option>
                    <option value="where NO_CURSO = 'ZOOTECNIA' ">ZOOTECNIA</option>
                </select>
            </div>   
            
            <button type="submit" class=" btn-primary btn-sm" style="border: none">Buscar</button>

            <?php

            //IF para só fazer o "$filter = $_POST['filter'];" apenas se alguma opção for selecionada
            if (isset($_POST['filter'])){
                $filter = $_POST['filter'];
            } else {
                $filter = "";
            }

            ?>  
        </form>
          
            <!-- FIM DA BARRA DE FILTRAGEM -->

<div>
            <?php

            //Receber o número da página
            $pagina_atual = filter_input(INPUT_GET,'pagina',FILTER_SANITIZE_NUMBER_INT);
            $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;

            //Setar a quantidade de itens por página
            if($filter != ""){
                $qnt_result_pg = 100;
            } else {
                $qnt_result_pg = 10;
            }

            //calcular o inicio visualização
            $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;

            //Listamento das informações do banco de dados
            $result_uf = "SELECT * FROM faculdades $filter LIMIT $inicio, $qnt_result_pg";
            $resultado_uf = mysqli_query($mysqli, $result_uf);
            while($row_uf = mysqli_fetch_assoc($resultado_uf)){
                echo "- Curso: " . $row_uf['NO_CURSO'] . " - " . $row_uf['DS_TURNO'] . "<br><br>";
                echo "- Grau de Formação: " . $row_uf['DS_GRAU'] ."<br><br>";
                echo "- Duração: " . $row_uf['QT_SEMESTRE'] . " Semestres" . "<br><br>";
                echo "- Faculdade: " . $row_uf['SG_IES'] . " - " . $row_uf['NO_IES'] . "<br><br>";
                echo "- Localização: " . "<br>" . "REGIÃO: " . $row_uf['DS_REGIAO'] . "<br>" . "UF: " . $row_uf['SG_UF_CAMPUS'] . "<br>" . "MUNICIPIO: " . $row_uf['NO_MUNICIPIO_CAMPUS'] . "<br><br>";
                echo "- Organização Academica: " . $row_uf['DS_ORGANIZACAO_ACADEMICA'] . "<br><br>";
                echo "- Categoria: " . $row_uf['DS_CATEGORIA_ADM'] . "<br><hr>";
            }
            
            //Paginação - somar a quantidade de faculdades
            $result_pg = "SELECT COUNT(CO_IES) AS num_result FROM faculdades $filter";
            $resultado_pg = mysqli_query($mysqli, $result_pg);
            $row_pg = mysqli_fetch_assoc($resultado_pg);
            //echo $row_pg['num_result'];
            
            //Quantidade de pagina
            $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

            //Limitar os links antes e depois
            $max_links = 2;
            echo "<a href='listar.php?pagina=1'>Primeira </a>";

            for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++)
            {
                if($pag_ant >= 1){
                    echo "<a href='listar.php?pagina=$pag_ant'>$pag_ant </a>"; 
                }
            }
            echo "$pagina ";

            for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++)
            {
                if($pag_dep <= $quantidade_pg){
                    echo "<a href='listar.php?pagina=$pag_dep'> $pag_dep</a>";
                }    
            }

            echo "<a href='listar.php?pagina=$quantidade_pg'> Última </a>";
            ?>
          </div>
    <hr>    
    </div></div>
        
        <div class="container-fluid tm-content-container mx-auto pt-5">
            
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
                            <li><a href="preteste.html">Teste Vocacional</a></li>
                            <li><a href="about.html">Sobre nós</a></li>
                            <li><a href="contact.html">Quem somos nós</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr>
            <footer class="row pt-5">
                <div class="col-12">
                    <p class="text-right">TCC Teste Vocacional 3º ETIM &copy;
                </div>
            </footer>
        </div>
    </div>

    



<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.min.js"></script>
<script>
    $(document).ready(function() {
        $('#filter').select2();
    });
</script> 

</body>
</html>