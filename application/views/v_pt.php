<!DOCTYPE html> 
<html>
    <head>
        <meta charset="ISO-8859-1">
        <meta http-equiv="X-UA-Compatible"  content="IE=edge">
        <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <meta name="description"            content="Proyecto de desarrollo de un producto wizard online que tenga un quiz y con una unica solucion que es SAP Cloud Configurator">
        <meta name="keywords"               content="SAP Cloud Configurator">
        <meta name="robots"                 content="Index,Follow">
        <meta name="date"                   content="May 7, 2018"/>
        <meta name="language"               content="es">
        <meta name="theme-color"            content="#000000">
        <title>SAP Cloud Configurator</title>
        <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/logo_favicon.png">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>owl-carousel/owl.theme.default.min.css">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>benton.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>animate.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
        <!--Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-NFMTTDF');</script>
        <!--End Google Tag Manager  (noscript) -->
    </head>
    <body>
        <section id="principal">
            <div id="home" class="js-window">
                <div class="js-header">
                    <img src="<?php echo RUTA_IMG?>logo/logo-sap__run.png">
                    <div class="js-idioma">
                        <select class="selectpicker" id="IdiomaHome"  name="Idioma" onchange="cambiarIdioma()">
                            <option value="Portugués">Portugu&ecirc;s</option>
                            <option value="Inglés">English</option>
                            <option value="Español">Espa&ntilde;ol</option>
                        </select>
                    </div>
                    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NFMTTDF"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
                </div>
                <div class="js-title">
                    <h1>Bem-vindo ao <br><strong>Cloud Configurator</strong></h1>
                    <p>Responda algumas perguntas e descubra a solu&ccedil;&atilde;o perfeita da SAP de acordo com suas necessidades de neg&oacute;cios.</p>
                </div>
                <div class="js-bar">
                    <div class="js-bar__children background-body3"></div>
                    <div class="js-bar__children background-body2"></div>
                    <div class="js-bar__children background-body1"></div>
                </div>
                <div class="js-fondo__imagen"></div>
                <div class="js-minilogo"><img src="<?php echo RUTA_IMG?>logo/minilogo-home.png"></div>
                <div class="js-button-next">
                    <div class="bgcolorblack left"></div>
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab down" onclick="buttonNext()">
                        <i class="mdi mdi-keyboard_arrow_down"></i>
                    </button>
                    <div class="bgcolorblack right"></div>
                </div>
            </div>
            <!-- TODOS LOS CARDS  -->
            <div id="configurator">
                <div class="js-header js-header--configurator">
                    <div class="js-header--logo">
                        <img src="<?php echo RUTA_IMG?>logo/logo_sap.svg">
                        <p>Cloud Configurator</p>
                    </div>
                    <div class="js-idioma">
                        <div class="js-wizard">
                            <div class="js-step">
                                <span id="step1">1</span>
                                <span id="step2">2</span>
                                <span id="step3">3</span>
                                <span id="step4">4</span>
                                <span id="step5">5</span>
                            </div>
                            <div class="js-progress"><span></span></div>
                        </div>
                        <div class="btn-group bootstrap-select">
                            
                        </div>
                        <div class="js-header__bgcolor">
                            <div class="js-header__bgcolor--bar"></div>
                            <div class="js-header__bgcolor--bar"></div>
                            <div class="js-header__bgcolor--bar"></div>
                        </div>
                    </div>
                </div>
                <div class="js-window1">
                    <div class="js-container">
                        <div class="js-question--number">
                            <span>01/05</span>
                        </div>
                        <h2>EU <strong>QUERO...</strong></h2>
                        <div class="js-card__flex">
                            <div id="js-carousel--configurator" class="js-carousel js-3cards">
                                <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="js-card">
                                            <div class="js-card-imagen">
                                                <div class="js-card-flip js-card-flip__front">
                                                    <img src="<?php echo RUTA_IMG?>cards/byd.png">
                                                </div>
                                                <div class="js-card-flip js-card-flip__back selected" id="btnpant1">
                                                    <h2>ERP</h2>
                                                    <p>Cloud</p>
                                                    <button id="ERP" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="selectConfigurator(this.id, 'ERP')">Selecionar</button>
                                                </div>
                                            </div>
                                            <div class="js-card-content">
                                                <p><strong>Inovar digitalmente</strong> os meus processos para melhorar a competitividade, a efici&ecirc;ncia e a reputa&ccedil;&atilde;o da minha marca e mais.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="js-card">
                                            <div class="js-card-imagen">
                                                <div class="js-card-flip js-card-flip__front">
                                                    <img src="<?php echo RUTA_IMG?>cards/crm.png">
                                                </div>
                                                <div class="js-card-flip js-card-flip__back" id="btnpant2">
                                                    <h2>CRM</h2>
                                                    <p>Cloud</p>
                                                    <button id="CRM" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="selectConfigurator(this.id, 'CRM')">Selecionar</button>
                                                </div>
                                            </div>
                                            <div class="js-card-content">
                                                <p>Contar com ferramentas para um <strong>gerenciamento avançado dos meus clientes</strong> para entregar uma melhor experi&ecirc;ncia, antecipar suas necessidades e fornecer um servi&ccedil;o de excel&ecirc;ncia.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="js-card">
                                            <div class="js-card-imagen">
                                                <div class="js-card-flip js-card-flip__front">
                                                    <img src="<?php echo RUTA_IMG?>cards/hr.png">
                                                </div>
                                                <div class="js-card-flip js-card-flip__back" id="btnpant3">
                                                    <h2>RH</h2>
                                                    <p>Cloud</p>
                                                    <button id="RH" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="selectConfigurator(this.id, 'RH')">Selecionar</button>
                                                </div>
                                            </div>
                                            <div class="js-card-content">
                                                <p><strong>Modernizar o gerenciamento</strong> da minha força de trabalho, alinhá-la com as metas do negócio, inovar sua aprendizagem e remunerá-la adequadamente.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-window2 opacity-done">
                    <div class="js-container">
                        <p class="js-question--title"><strong>/ ERP</strong> Cloud Configurator</p>
                        <div class="js-question--number">
                            <span>02/05</span>
                            <h2>Como podemos ajud&aacute;-lo em sua função como respons&aacute;vel pelo <span id="title-configurator"></span>&#63;</h2>
                        </div>
                        <div id="js-carousel--ERP" class="js-carousel js-cards js-nav-none">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="js-card--large js-card--large__ERP js-card--large__flex">
                                        <div class="js-card--large__content">
                                            <div class="js-card--large__content-imagen">
                                                <img src="<?php echo RUTA_IMG?>cards/person1.png">
                                            </div>
                                            <div class="js-card--large__content-text">
                                                <p>Como responsável da integração financeira da minha empresa, <strong>eu quero ter visibilidade em tempo real.</strong></p>
                                            </div>
                                        </div>
                                        <div class="js-card--large__button">
                                            <button id="buttonCard1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="ayudaCard(this.id,'Como responsável da integração financeira da minha empresa, eu quero ter visibilidade em tempo real.')">Selecione</button>
                                        </div>
                                        <div class="js-card--menu"><span>1/3</span></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="js-card--large js-card--large__ERP js-card--large__flex">
                                        <div class="js-card--large__content">
                                            <div class="js-card--large__content-imagen">
                                                <img src="<?php echo RUTA_IMG?>cards/person2.png">
                                            </div>
                                            <div class="js-card--large__content-text">
                                                <p>Como responsável dos processos operativos, <strong>quero atingir uma maior eficiência.</strong></p>
                                            </div>
                                        </div>
                                        <div class="js-card--large__button">
                                            <button id="buttonCard2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="ayudaCard(this.id,'Como responsável dos processos operativos, quero atingir uma maior eficiência.')">Selecione</button>
                                        </div>
                                        <div class="js-card--menu"><span>2/3</span></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="js-card--large js-card--large__ERP js-card--large__flex">
                                        <div class="js-card--large__content">
                                            <div class="js-card--large__content-imagen">
                                                <img src="<?php echo RUTA_IMG?>cards/person3.png">
                                            </div>
                                            <div class="js-card--large__content-text">
                                                <p>Como responsável pelo crescimento da empresa, <strong>quero obter a máxima rentabilidade.</strong></p>
                                            </div>
                                        </div>
                                        <div class="js-card--large__button">
                                            <button id="buttonCard3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="ayudaCard(this.id,'Como responsável pelo crescimento da empresa, quero obter a máxima rentabilidade.')">Selecione</button>
                                        </div>
                                        <div class="js-card--menu"><span>3/3</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="js-carousel--CRM" class="js-carousel js-cards js-nav-none">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="js-card--large js-card--large__CRM js-card--large__flex">
                                        <div class="js-card--large__content">
                                            <div class="js-card--large__content-imagen">
                                                <img src="<?php echo RUTA_IMG?>cards/person1.png">
                                            </div>
                                            <div class="js-card--large__content-text">
                                                <p>Como responsável de vendas, <strong>quero melhorar o meu processo de vendas.</strong></p>
                                            </div>
                                        </div>
                                        <div class="js-card--large__button">
                                            <button id="buttonCard4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="ayudaCard(this.id,'Como responsável de vendas, quero melhorar o meu processo de vendas.')">Selecione</button>
                                        </div>
                                        <div class="js-card--menu"><span>1/3</span></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="js-card--large js-card--large__CRM js-card--large__flex">
                                        <div class="js-card--large__content">
                                            <div class="js-card--large__content-imagen">
                                                <img src="<?php echo RUTA_IMG?>cards/person2.png">
                                            </div>
                                            <div class="js-card--large__content-text">
                                                <p>Como responsável de serviços, <strong>quero melhorar nossos processos de suporte ao cliente.</strong></p>
                                            </div>
                                        </div>
                                        <div class="js-card--large__button">
                                            <button id="buttonCard5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="ayudaCard(this.id,'Como responsável de serviços, quero melhorar nossos processos de suporte ao cliente.')">Selecione</button>
                                        </div>
                                        <div class="js-card--menu"><span>2/3</span></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="js-card--large js-card--large__CRM js-card--large__flex">
                                        <div class="js-card--large__content">
                                            <div class="js-card--large__content-imagen">
                                                <img src="<?php echo RUTA_IMG?>cards/person3.png">
                                            </div>
                                            <div class="js-card--large__content-text">
                                                <p>Como responsável de vendas, <strong>quero criar experiências de compra únicas e simplificadas.</strong></p>
                                            </div>
                                        </div>
                                        <div class="js-card--large__button">
                                            <button id="buttonCard6" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="ayudaCard(this.id,'Como responsável de vendas, quero criar experiências de compra únicas e simplificadas.')">Selecione</button>
                                        </div>
                                        <div class="js-card--menu"><span>3/3</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="js-carousel--HR" class="js-carousel js-5cards js-nav-none">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="js-card--large js-card--large__RH js-card--large__flex">
                                        <div class="js-card--large__content">
                                            <div class="js-card--large__content-imagen">
                                                <img src="<?php echo RUTA_IMG?>cards/person1.png">
                                            </div>
                                            <div class="js-card--large__content-text">
                                                <p>Quero consolidar e otimizar os processos centrais de RH.</p>
                                            </div>
                                        </div>
                                        <div class="js-card--large__button">
                                            <button id="buttonCard7" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="ayudaCard(this.id,'Quero consolidar e otimizar os processos centrais de RH.')">Selecione</button>
                                        </div>
                                        <div class="js-card--menu"><span>1/8</span></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="js-card--large js-card--large__RH js-card--large__flex">
                                        <div class="js-card--large__content">
                                            <div class="js-card--large__content-imagen">
                                                <img src="<?php echo RUTA_IMG?>cards/person2.png">
                                            </div>
                                            <div class="js-card--large__content-text">
                                                <p>Quero alinhar as metas da empresa com a recompensa aos meus colaboradores.</p>
                                            </div>
                                        </div>
                                        <div class="js-card--large__button">
                                            <button id="buttonCard8" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="ayudaCard(this.id,'Quero alinhar as metas da empresa com a recompensa aos meus colaboradores.')">Selecione</button>
                                        </div>
                                        <div class="js-card--menu"><span>2/8</span></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="js-card--large js-card--large__RH js-card--large__flex">
                                        <div class="js-card--large__content">
                                            <div class="js-card--large__content-imagen">
                                                <img src="<?php echo RUTA_IMG?>cards/person3.png">
                                            </div>
                                            <div class="js-card--large__content-text">
                                                <p>Quero desenvolver meus colaboradores de maneira simples e colaborativa.</p>
                                            </div>
                                        </div>
                                        <div class="js-card--large__button">
                                            <button id="buttonCard9" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="ayudaCard(this.id,'Quero desenvolver meus colaboradores de maneira simples e colaborativa.')">Selecione</button>
                                        </div>
                                        <div class="js-card--menu"><span>3/8</span></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="js-card--large js-card--large__RH js-card--large__flex">
                                        <div class="js-card--large__content">
                                            <div class="js-card--large__content-imagen">
                                                <img src="<?php echo RUTA_IMG?>cards/person4.png">
                                            </div>
                                            <div class="js-card--large__content-text">
                                                <p>Quero reter os melhores talentos com um plano atraente de remunerações.</p>
                                            </div>
                                        </div>
                                        <div class="js-card--large__button">
                                            <button id="buttonCard10" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="ayudaCard(this.id,'Quero reter os melhores talentos com um plano atraente de remunerações.')">Selecione</button>
                                        </div>
                                        <div class="js-card--menu"><span>4/8</span></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="js-card--large js-card--large__RH js-card--large__flex">
                                        <div class="js-card--large__content">
                                            <div class="js-card--large__content-imagen">
                                                <img src="<?php echo RUTA_IMG?>cards/person1.png">
                                            </div>
                                            <div class="js-card--large__content-text">
                                                <p>Quero planejar o desenvolvimento e a sucessão dos meus melhores talentos.</p>
                                            </div>
                                        </div>
                                        <div class="js-card--large__button">
                                            <button id="buttonCard11" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="ayudaCard(this.id,'Quero planejar o desenvolvimento e a sucessão dos meus melhores talentos.')">Selecione</button>
                                        </div>
                                        <div class="js-card--menu"><span>5/8</span></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="js-card--large js-card--large__RH js-card--large__flex">
                                        <div class="js-card--large__content">
                                            <div class="js-card--large__content-imagen">
                                                <img src="<?php echo RUTA_IMG?>cards/person2.png">
                                            </div>
                                            <div class="js-card--large__content-text">
                                                <p>Quero centralizar e agilizar meus processos de aquisição e contratação de talentos.</p>
                                            </div>
                                        </div>
                                        <div class="js-card--large__button">
                                            <button id="buttonCard12" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="ayudaCard(this.id,'Quero centralizar e agilizar meus processos de aquisição e contratação de talentos.')">Selecione</button>
                                        </div>
                                        <div class="js-card--menu"><span>6/8</span></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="js-card--large js-card--large__RH js-card--large__flex">
                                        <div class="js-card--large__content">
                                            <div class="js-card--large__content-imagen">
                                                <img src="<?php echo RUTA_IMG?>cards/person3.png">
                                            </div>
                                            <div class="js-card--large__content-text">
                                                <p>Quero aumentar a eficácia da função de RH através de um conjunto de análises prontas para usar.</p>
                                            </div>
                                        </div>
                                        <div class="js-card--large__button">
                                            <button id="buttonCard13" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="ayudaCard(this.id,'Quero aumentar a eficácia da função de RH através de um conjunto de análises prontas para usar.')">Selecione</button>
                                        </div>
                                        <div class="js-card--menu"><span>7/8</span></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="js-card--large js-card--large__RH js-card--large__flex">
                                        <div class="js-card--large__content">
                                            <div class="js-card--large__content-imagen">
                                                <img src="<?php echo RUTA_IMG?>cards/person4.png">
                                            </div>
                                            <div class="js-card--large__content-text">
                                                <p>Quero empoderar os novos colaboradores para obter uma contribuição rápida para as metas do negócio.</p>
                                            </div>
                                        </div>
                                        <div class="js-card--large__button">
                                            <button id="buttonCard14" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="ayudaCard(this.id,'Quero empoderar os novos colaboradores para obter uma contribuição rápida para as metas do negócio.')">Selecione</button>
                                        </div>
                                        <div class="js-card--menu"><span>8/8</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-window3 opacity-done">
                    <div class="js-container">
                        <p class="js-question--title"><strong>/ ERP</strong> Cloud Configurator</p>
                        <div class="js-question--number">
                            <span>03/05</span>
                            <h2>Qual &eacute; o tipo e tamanho da sua empresa&#63;</h2>
                        </div>
                        <div class="js-card__flex js-card__flex--relative">
                            <div class="js-card--tipo">
                                <div class="js-carousel js-5cards js-nav-toggle">
                                    <div class="owl-carousel owl-theme">
                                        <div class="item">
                                            <div class="js-card--large js-card--large__flex">
                                                <div class="js-card--large__content">
                                                    <div class="js-card--large__content-tipo">
                                                        <img src="<?php echo RUTA_IMG?>cards/servicios.png">
                                                    </div>
                                                    <div class="js-card--large__content-name">
                                                        <small>Serviços profissionais</small>
                                                    </div>
                                                </div>
                                                <div class="js-card--large__button">
                                                    <button id="buttonCard15" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select js-button--toggle" onclick="tipoTamaño(this.id,'Serviços profissionais')">Selecione</button>
                                                </div>
                                                <div class="js-card--menu"><span>1/7</span></div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="js-card--large js-card--large__flex">
                                                <div class="js-card--large__content">
                                                    <div class="js-card--large__content-tipo">
                                                        <img src="<?php echo RUTA_IMG?>cards/finance.png">
                                                    </div>
                                                    <div class="js-card--large__content-name">
                                                        <small>Serviços financeiros</small>
                                                    </div>
                                                </div>
                                                <div class="js-card--large__button">
                                                    <button id="buttonCard16" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select js-button--toggle" onclick="tipoTamaño(this.id,'Serviços financeiros')">Selecione</button>
                                                </div>
                                                <div class="js-card--menu"><span>2/7</span></div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="js-card--large js-card--large__flex">
                                                <div class="js-card--large__content">
                                                    <div class="js-card--large__content-tipo">
                                                        <img src="<?php echo RUTA_IMG?>cards/retail.png">
                                                    </div>
                                                    <div class="js-card--large__content-name">
                                                        <small>Varejo</small>
                                                    </div>
                                                </div>
                                                <div class="js-card--large__button">
                                                    <button id="buttonCard17" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select js-button--toggle" onclick="tipoTamaño(this.id,'Varejo')">Selecione</button>
                                                </div>
                                                <div class="js-card--menu"><span>3/7</span></div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="js-card--large js-card--large__flex">
                                                <div class="js-card--large__content">
                                                    <div class="js-card--large__content-tipo">
                                                        <img src="<?php echo RUTA_IMG?>cards/distribucion.png">
                                                    </div>
                                                    <div class="js-card--large__content-name">
                                                        <small>Distribuição atacadista</small>
                                                    </div>
                                                </div>
                                                <div class="js-card--large__button">
                                                    <button id="buttonCard18" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select js-button--toggle" onclick="tipoTamaño(this.id,'Distribuição atacadista')">Selecione</button>
                                                </div>
                                                <div class="js-card--menu"><span>4/7</span></div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="js-card--large js-card--large__flex">
                                                <div class="js-card--large__content">
                                                    <div class="js-card--large__content-tipo">
                                                        <img src="<?php echo RUTA_IMG?>cards/productos.png">
                                                    </div>
                                                    <div class="js-card--large__content-name">
                                                        <small>Bens de consumo</small>
                                                    </div>
                                                </div>
                                                <div class="js-card--large__button">
                                                    <button id="buttonCard19" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select js-button--toggle" onclick="tipoTamaño(this.id,'Bens de consumo')">Selecione</button>
                                                </div>
                                                <div class="js-card--menu"><span>5/7</span></div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="js-card--large js-card--large__flex">
                                                <div class="js-card--large__content">
                                                    <div class="js-card--large__content-tipo">
                                                        <img src="<?php echo RUTA_IMG?>cards/manufactura.png">
                                                    </div>
                                                    <div class="js-card--large__content-name">
                                                        <small>Manufatura</small>
                                                    </div>
                                                </div>
                                                <div class="js-card--large__button">
                                                    <button id="buttonCard20" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select js-button--toggle" onclick="tipoTamaño(this.id,'Manufatura')">Selecione</button>
                                                </div>
                                                <div class="js-card--menu"><span>6/7</span></div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="js-card--large js-card--large__flex">
                                                <div class="js-card--large__content">
                                                    <div class="js-card--large__content-imagen">
                                                        <!-- <img src="<?php echo RUTA_IMG?>cards/otra.png"> -->
                                                        <p>Outra</p>
                                                    </div>
                                                    <div class="js-card--large__content-text" style="height: 79px;">
                                                        <div class="form-group">
                                                            <textarea class="form-control" id="idEspecificar" rows="3" placeholder="Especificar"></textarea>
                                                        </div>
                                                    </div>
                                               </div>
                                               <div class="js-card--large__button">
                                                    <button id="buttonCardOtra" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select js-button--toggle" onclick="tipoTamaño(this.id,'Otras')">Selecione</button>
                                                </div>
                                                <div class="js-card--menu"><span>7/7</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="js-card--empresa opacity-done">
                                <div class="js-card--large">
                                    <div class="js-card--large__content">
                                        <div class="js-card--large__content-tipo">
                                            <img src="<?php echo RUTA_IMG?>cards/empleados.png">
                                        </div>
                                        <div class="js-card--large__content-name">
                                            <small>Número de colaboradores</small>
                                        </div>
                                    </div>
                                    <div class="js-card--large__select">
                                        <button id="buttonMenos" class="mdl-button mdl-js-button mdl-button--icon" onclick="operar(this.id,1)"><i class="mdi mdi-remove"></i></button>
                                        <span id="textOperar">Selecione</span>
                                        <button id="buttonMas" class="mdl-button mdl-js-button mdl-button--icon" onclick="operar(this.id,2)"><i class="mdi mdi-add"></i></button>
                                    </div>
                                </div>
                                <div class="js-card--large">
                                    <div class="js-card--large__content">
                                        <div class="js-card--large__content-tipo">
                                            <img src="<?php echo RUTA_IMG?>cards/facturacion.png">
                                        </div>
                                        <div class="js-card--large__content-name">
                                            <small>Faturamento anual em d&oacute;lares</small>
                                        </div>
                                    </div>
                                    <div class="js-card--large__select">
                                        <div class="js-select js-facturacion">
                                            <select class="selectpicker" id="facturacion" name="facturacion" title="Selecione" onchange="selectFacturacion(this.id)">
                                                <option value="10 - 30 Milhões">10 - 30 Milhões</option>
                                                <option value="30 - 100 Milhões">30 - 100 Milhões</option>
                                                <option value="100 Milhões para mais">100 Milhões para mais</option>
                                                <option value="Sem informação">Sem informação</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-window4 opacity-done">
                    <div class="js-container">
                        <p class="js-question--title"><strong>/ ERP</strong> Cloud Configurator</p>
                        <div class="js-question--number">
                            <span>04/05</span>
                            <h2>Que tipo de solução você gostaria de avaliar&#63;</h2>
                        </div>
                        <div class="js-card__flex">
                            <div class="js-carousel js-3cards">
                                <div class="owl-carousel owl-theme">
                                    <div class="item">
                                        <div class="js-card--large">
                                            <div class="js-card--large__content js-card--large__flip">
                                                <div class="js-card-flip js-card-flip__front">
                                                    <div class="js-card--large__content-tipo">
                                                        <img src="<?php echo RUTA_IMG?>cards/premise.png">
                                                    </div>
                                                    <div class="js-card--large__content-name">
                                                        <small>On Premise</small>
                                                    </div>
                                                    <div class="js-card--large__icon">
                                                        <i class="mdi mdi-add"></i>
                                                    </div>
                                                </div>
                                                <div class="js-card-flip js-card-flip__back">
                                                    <p>Implementar em sua atual infraestrutura ou adquirir uma das opções de hardware certificado.</p>
                                                    <div class="js-card--large__icon">
                                                        <i class="mdi mdi-remove"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="js-card--large__button">
                                                <button id="buttonCard21" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="saveSolucion(this.id,'On Premise');buttonQuestion(2);buttonNext();">Selecione</button>
                                            </div>
                                            <div class="js-card--menu"><span>1/3</span></div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="js-card--large">
                                            <div class="js-card--large__content js-card--large__flip">
                                                <div class="js-card-flip js-card-flip__front">
                                                    <div class="js-card--large__content-tipo">
                                                        <img src="<?php echo RUTA_IMG?>cards/cloud.png">
                                                    </div>
                                                    <div class="js-card--large__content-name">
                                                        <small>Nuvem</small>
                                                    </div>
                                                    <div class="js-card--large__icon">
                                                        <i class="mdi mdi-add"></i>
                                                    </div>
                                                </div>
                                                <div class="js-card-flip js-card-flip__back">
                                                    <p>Executar  o software na nuvem juntamente com suas informações empresariais.</p>
                                                    <div class="js-card--large__icon">
                                                        <i class="mdi mdi-remove"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="js-card--large__button">
                                                <button id="buttonCard22" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="saveSolucion(this.id,'Nuvem');buttonQuestion(2);buttonNext();">Selecione</button>
                                            </div>
                                            <div class="js-card--menu"><span>2/3</span></div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="js-card--large">
                                            <div class="js-card--large__content js-card--large__flip">
                                                <div class="js-card-flip js-card-flip__front">
                                                    <div class="js-card--large__content-tipo">
                                                        <img src="<?php echo RUTA_IMG?>cards/hibrida.png">
                                                    </div>
                                                    <div class="js-card--large__content-name">
                                                        <small>H&iacute;brida</small>
                                                    </div>
                                                    <div class="js-card--large__icon">
                                                        <i class="mdi mdi-add"></i>
                                                    </div>
                                                </div>
                                                <div class="js-card-flip js-card-flip__back">
                                                    <p>Combine as duas opções em que informações confidenciais podem permanecer em sua TI local e as informações restantes na nuvem.</p>
                                                    <div class="js-card--large__icon">
                                                        <i class="mdi mdi-remove"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="js-card--large__button">
                                                <button id="buttonCard23" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="saveSolucion(this.id,'Híbrida');buttonQuestion(2);buttonNext();">Selecione</button>
                                            </div>
                                            <div class="js-card--menu"><span>3/3</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-window5 opacity-done">
                    <div class="js-container">
                        <p class="js-question--title"><strong>/ ERP</strong> Cloud Configurator</p>
                        <div class="js-question--number">
                            <span>05/05</span>
                            <h2>Para receber mais detalhes, preencha o formul&aacute;rio que entraremos em contato com você.</h2>
                        </div>
                        <div class="js-card__flex">
                            <div class="js-card-confirmacion">
                                <h2>EU <strong>QUERO</strong></h2>
                                <div class="js-contenedor-respuestas"> 
                                    <div class="col-xs-12 p-0">
                                        <div class="js-respuestas">
                                            <ul>
                                                <li id="ayuda"></li>
                                            </ul>
                                            <button id="window2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="EditQuestion(this.id)">Editar</button>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 p-0">
                                        <div class="js-respuestas">
                                            <ul>
                                                <li id="industria">Retail</li>
                                            </ul>
                                            <button id="window3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="EditQuestion(this.id)">Editar</button>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 p-0">
                                        <div class="js-respuestas">
                                            <ul>
                                                <li id="tamanio">1 - 50</li>
                                            </ul>
                                            <button id="window3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="EditQuestion(this.id)">Editar</button>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 p-0">
                                        <div class="js-respuestas">
                                            <ul>
                                                <li id="factura">1-3 Milhões de D&oacute;lares</li>
                                            </ul>
                                            <button id="window3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="EditQuestion(this.id)">Editar</button>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 p-0">
                                        <div class="js-respuestas">
                                            <ul>
                                                <li id="infraestructura">Local</li>
                                            </ul>
                                            <button id="window4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="EditQuestion(this.id)">Editar</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 p-0 text-right m-t-10">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button--confirmar" onclick="ConfirmarRespuestas()">Confirmar respostas</button>
                                </div>
                            </div>
                            <form class="js-formulario js-disabled text-left">
                                <div class="js-datos">
                                    <div class="js-datos__personal">
                                        <p><i class="mdi mdi-arrow_downward"></i>Insira seus dados</p>
                                    </div>
                                    <div class="js-datos__separacion">
                                        <p>ou</p>
                                    </div>
                                    <div class="js-datos__linkedin">
                                        <a class="button-linkedin" href="<?php  echo "https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id={$client_id}&redirect_uri={$redirect_uri}&state={$csrf_token}&scope={$scopes}"; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i>conecte-se via LinkedIn</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="js-input">
                                        <input type="text" class="form-control" id="nombre_completo" maxlength="50" onkeypress="return soloLetras(event);" onchange="validarCampos()" placeholder="Nome Completo">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="js-input">
                                        <input type="text" class="form-control NEGRO_FONDO" id="cargo" maxlength="50" onkeypress="return soloLetras(event);"  onchange="validarCampos()" placeholder="Cargo">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="js-input">
                                        <input type="text" class="form-control" id="empresa" maxlength="50" onchange="validarCampos()" placeholder="Empresa">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="js-input">
                                        <input type="text" class="form-control" id="telefono" onchange="validarCampos()" placeholder="Telefone">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="js-input">
                                        <input type="email" class="form-control" id="email" maxlength="50" aria-describedby="emailHelp" placeholder="E-mail">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="js-select js-standar">
                                        <select class="selectpicker" id="relacion" name="relacion" title="Relacionamento com a SAP">
                                            <option value="Cliente">Cliente</option>
                                            <option value="Cliente potencial">Cliente potencial</option>
                                            <option value="Consultor">Consultor</option>
                                            <option value="Colaborador da SAP">Colaborador da SAP</option>
                                            <option value="Estudante">Estudante</option>
                                            <option value="Parceiro">Parceiro</option>
                                            <option value="Parceiro potencial">Parceiro potencial</option>
                                            <option value="Imprensa/Analista">Imprensa/Analista</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="js-select js-standar">
                                        <select class="selectpicker" id="pais" name="pais" title="País">
                                            <option value="Brasil">Brasil</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 js-checkbox js-terminos">
                                    <a href="http://www.sap-latam.com/configurators/cloud/public/pdf/SAP_Privacy_Statement_CloudConfig_Pt.pdf" target="_blank">termos e condi&ccedil;&otilde;es</a>
                                </div>
                                <div class="col-xs-12 js-checkbox js-terminos">
                                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect js-label" for="checkbox-3" id="label-check3">
                                        <input type="checkbox" id="checkbox-3" class="mdl-checkbox__input">
                                        <span class="mdl-checkbox__label">Deseja receber informações adicionais sobre os produtos e serviços da SAP, juntamente com as informações relacionadas a essa consulta? Ao marcar essa caixa, você concorda que seus detalhes de contato serão usados pela SAP Brazil de acordo com a <a href="http://www.sap-latam.com/configurators/cloud/public/pdf/SAP_Consent_Statement_Jan_18.pdf" target="_blank">Declaração de Consentimento de Marketing da SAP.</a></span>
                                    </label>
                                </div>
                                <div class="col-xs-12 js-checkbox js-terminos">
                                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect js-label" for="checkbox-2" id="label-check4">
                                        <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input">
                                        <span class="mdl-checkbox__label">Eu concordo que a SAP pode compartilhar as informações que forneci aqui com o <a href="https://www.sap.com/dam/site/corporate/legal/sap-legal-entities.pdf" target="_blank">Grupo SAP</a> para que elas também possam enviar comunicações adicionais relacionadas a marketing para mim.</span>
                                    </label>
                                </div>
                                <div class="col-xs-12 text-right m-t-10">
                                    <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button--confirmar button-confirmar" onclick="solicitarEstimacion();">Enviar informa&ccedil;&otilde;es</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="js-window6 opacity-done">
                    <div class="js-container">
                        <div class="js-agradecimiento">
                            <h2>Agradecemos o seu interesse.</h2>
                            <p>Um representante da SAP entrar&aacute; em contato com você para ajud&aacute;-lo a transformar o seu neg&oacute;cio para o futuro.</p>
                        </div>
                    </div>
                </div>
                <div class="js-button-next js-fixed--top">
                    <button id="prev" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab" onclick="buttonQuestion(1);">
                        <i class="mdi mdi-keyboard_arrow_up"></i>
                    </button>
                    <button id="next" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab" onclick="buttonQuestion(2);buttonNext();">
                        <i class="mdi mdi-keyboard_arrow_down"></i>
                    </button>
                </div>
                <div class="js-chat">
                    <a href="https://z1.liveper.sn/api/account/81933160/route/campaign/194741814/engagement/250005114" target="_blank"><img src="<?php echo RUTA_IMG?>/logo/chat.png"><label>Fale Conosco</label></a>
                </div>
            </div>
        </section> 
        <!-- <div class="modal fade" id="ModalPoliticas" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="mdl-card js-modal">
                        <div class="mdl-card__title">
                            <h2>SAP Marketing Consent Statement</h2>
                        </div>
                        <div class="mdl-card__supporting-text p-t-0">
                            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect js-label" for="checkbox-3" id="label-check3">
                                <input type="checkbox" id="checkbox-3" class="mdl-checkbox__input" checked>
                                <span class="mdl-checkbox__label">Deseja receber informações adicionais sobre os produtos e serviços da SAP, juntamente com as informações relacionadas a essa consulta? Ao marcar essa caixa, você concorda que seus detalhes de contato serão usados pela SAP Brazil de acordo com a <a href="http://www.sap-latam.com/configurators/cloud/public/pdf/SAP_Consent_Statement_Jan_18.pdf" target="_blank">Declaração de Consentimento de Marketing da SAP.</a></span>
                            </label>
                            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect js-label" for="checkbox-2" id="label-check4">
                                <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input" checked>
                                <span class="mdl-checkbox__label">Eu concordo com o compartilhamento das minhas informações com a SAP e outras áreas da SAP para que eu possa receber informações relacionadas a marketing.</span>
                            </label>
                            <p>Como você gostaria de receber essas comunicações&#63;</p>
                            <div class="js-contact-label">
                                <div class="js-input-label">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="c-email">
                                        <input type="radio" id="c-email" class="mdl-radio__button" name="options" value="1">
                                        <span class="mdl-radio__label">Por Email</span>
                                    </label>
                                </div>
                                <div class="js-input-label">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="c-telefono">
                                        <input type="radio" id="c-telefono" class="mdl-radio__button" name="options" value="2">
                                        <span class="mdl-radio__label">Por Telefone</span>
                                    </label>
                                </div>
                                <div class="js-input-label">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="c-ambos">
                                        <input type="radio" id="c-ambos" class="mdl-radio__button" name="options" value="3" checked>
                                        <span class="mdl-radio__label">Ambos</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mdl-card__actions text-right">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-default" onclick="closePoliticas()">Fechar</button>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button" onclick="acceptPoliticas()">Aceitar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>owl-carousel/owl.carousel.min.js"></script>
        <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jsmenu.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jsindex_pt.js?v=<?php echo time();?>"></script>
        <script type="text/javascript">
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
                $('select').selectpicker('mobile');
            } else {
                $('select').selectpicker();
            }
            var confirmar = '';
             $(window).load(function(){
                 if(<?php echo $pantalla1 ?> == 5) {
                    confirmar = 1;
                    var windowQestion = $('.js-window5');
                    homePage.css('display','none');
                    firstWindow.css('display','none');
                    $('.opacity-done').removeClass('animated fadeInDown fadeOutDown fadeInUp fadeOutUp');
                    windowQestion.addClass('animated fadeInUp');
                    //
                    $('.js-button-next').css('display','none');
                    $("#relacion").val('0');
                    $('.selectpicker').selectpicker('refresh');
                    $('#industria').text(<?php echo '"'.$Industria.'"' ?>);
                    $('#factura').text(<?php echo '"'.$Factura_anual.'"' ?>)
                    $('#tamanio').text(<?php echo '"'.$Tamanio.'"' ?>);
                    $('#ayuda').append(<?php echo '"'.$Prioridad.'"' ?>);
                    $('#infraestructura').text(<?php echo '"'.$Infraestructura.'"' ?>);
                    $('.js-card-confirmacion').addClass('js-disabled');
                    $('.js-formulario').removeClass('js-disabled');
                    //
                    $('#email').val("<?php echo $email_link ?>");
                    $('#nombre_completo').val("<?php echo $nombre_comple ?>");
                    if("<?php echo $comp ?>" == ''){
                     $('#empresa').css('border-color','red');
                    }
                    if("<?php echo $tit ?>" == ''){
                     $('#cargo').css('border-color','red');
                    }
                    $('#cargo').val("<?php echo $tit ?>");
                    $('#empresa').val("<?php echo $comp ?>");
                    $('#pais').val("<?php echo $pais_link ?>");
                    $('#telefono').css('border-color','red');
                    $('.js-step').find('span').addClass('active');
                 }
            });
        </script>
    </body>
</html>