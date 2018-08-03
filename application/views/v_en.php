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
                            <option value="Inglés">English</option>
                            <option value="Español">Espa&ntilde;ol</option>
                            <option value="Portugués">Portugu&ecirc;s</option>
                        </select>
                    </div>
                    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NFMTTDF"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
                </div>
                <div class="js-title">
                    <h1>Welcome to <br><strong>Cloud Configurator</strong></h1>
                    <p>Complete these questions and discover the perfect SAP solution according to your business needs.</p>
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
                        <h2>I <strong>WANT...</strong></h2>
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
                                                    <button id="ERP" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="selectConfigurator(this.id, 'ERP')">Select</button>
                                                </div>
                                            </div>
                                            <div class="js-card-content">
                                                <p><strong>Digitally innovate</strong> my processes to improve the competitiveness, efficiency and reputation of my brand and more.</p>
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
                                                    <button id="CRM" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="selectConfigurator(this.id, 'CRM')">Select</button>
                                                </div>
                                            </div>
                                            <div class="js-card-content">
                                                <p>Have tools for an <strong>advanced management of my clients</strong> to deliver the best experience, anticipate their needs and provide an excellent service.</p>
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
                                                    <h2>HR</h2>
                                                    <p>Cloud</p>
                                                    <button id="HR" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="selectConfigurator(this.id, 'HR')">Select</button>
                                                </div>
                                            </div>
                                            <div class="js-card-content">
                                                <p><strong>Modernize the management</strong> of my workforce, align them with business goals, innovate their learning and compensate them adequately.</p>
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
                            <h2>How can we help you in your role as responsible for <span id="title-configurator"></span>&#63;</h2>
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
                                                <p>As responsible for the financial integration of my company <strong>I want to have visibility in real time.</strong></p>
                                            </div>
                                        </div>
                                        <div class="js-card--large__button">
                                            <button id="buttonCard1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="ayudaCard(this.id,'As responsible for the financial integration of my company I want to have visibility in real time.')">Select</button>
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
                                                <p>As responsible for the operational processes <strong>I want to achieve greater efficiency.</strong></p>
                                            </div>
                                        </div>
                                        <div class="js-card--large__button">
                                            <button id="buttonCard2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="ayudaCard(this.id,'As responsible for the operational processes I want to achieve greater efficiency.')">Select</button>
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
                                                <p>As responsible for the growth of the company <strong>I want to achieve maximum profitability.</strong></p>
                                            </div>
                                        </div>
                                        <div class="js-card--large__button">
                                            <button id="buttonCard3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="ayudaCard(this.id,'As responsible for the growth of the company I want to achieve maximum profitability.')">Select</button>
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
                                                <p>As sales manager <strong>I want to improve my sales process.</strong></p>
                                            </div>
                                        </div>
                                        <div class="js-card--large__button">
                                            <button id="buttonCard4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="ayudaCard(this.id,'As sales manager I want to improve my sales process.')">Select</button>
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
                                                <p>As responsible for services <strong> I want to improve our customer support processes.</strong></p>
                                            </div>
                                        </div>
                                        <div class="js-card--large__button">
                                            <button id="buttonCard5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="ayudaCard(this.id,'As responsible for services I want to improve our customer support processes.')">Select</button>
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
                                                <p>As an online sales manager <strong>I want to create unique and simplified shopping experiences.</strong></p>
                                            </div>
                                        </div>
                                        <div class="js-card--large__button">
                                            <button id="buttonCard6" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="ayudaCard(this.id,'As an online sales manager I want to create unique and simplified shopping experiences.')">Select</button>
                                        </div>
                                        <div class="js-card--menu"><span>3/3</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="js-carousel--HR" class="js-carousel js-5cards js-nav-none">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="js-card--large js-card--large__HR js-card--large__flex">
                                        <div class="js-card--large__content">
                                            <div class="js-card--large__content-imagen">
                                                <img src="<?php echo RUTA_IMG?>cards/person1.png">
                                            </div>
                                            <div class="js-card--large__content-text">
                                                <p>I want to consolidate and optimize the core HR processes.</p>
                                            </div>
                                        </div>
                                        <div class="js-card--large__button">
                                            <button id="buttonCard7" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="ayudaCard(this.id,'I want to consolidate and optimize the core HR processes.')">Select</button>
                                        </div>
                                        <div class="js-card--menu"><span>1/8</span></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="js-card--large js-card--large__HR js-card--large__flex">
                                        <div class="js-card--large__content">
                                            <div class="js-card--large__content-imagen">
                                                <img src="<?php echo RUTA_IMG?>cards/person2.png">
                                            </div>
                                            <div class="js-card--large__content-text">
                                                <p>I want to align the goals of the company with the reward to my employees.</p>
                                            </div>
                                        </div>
                                        <div class="js-card--large__button">
                                            <button id="buttonCard8" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="ayudaCard(this.id,'I want to align the goals of the company with the reward to my employees.')">Select</button>
                                        </div>
                                        <div class="js-card--menu"><span>2/8</span></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="js-card--large js-card--large__HR js-card--large__flex">
                                        <div class="js-card--large__content">
                                            <div class="js-card--large__content-imagen">
                                                <img src="<?php echo RUTA_IMG?>cards/person3.png">
                                            </div>
                                            <div class="js-card--large__content-text">
                                                <p>I want to develop my employees in a simple and collaborative way.</p>
                                            </div>
                                        </div>
                                        <div class="js-card--large__button">
                                            <button id="buttonCard9" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="ayudaCard(this.id,'I want to develop my employees in a simple and collaborative way.')">Select</button>
                                        </div>
                                        <div class="js-card--menu"><span>3/8</span></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="js-card--large js-card--large__HR js-card--large__flex">
                                        <div class="js-card--large__content">
                                            <div class="js-card--large__content-imagen">
                                                <img src="<?php echo RUTA_IMG?>cards/person4.png">
                                            </div>
                                            <div class="js-card--large__content-text">
                                                <p>I want to retain the best talent with an attractive compensation plan.</p>
                                            </div>
                                        </div>
                                        <div class="js-card--large__button">
                                            <button id="buttonCard10" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="ayudaCard(this.id,'I want to retain the best talent with an attractive compensation plan.')">Select</button>
                                        </div>
                                        <div class="js-card--menu"><span>4/8</span></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="js-card--large js-card--large__HR js-card--large__flex">
                                        <div class="js-card--large__content">
                                            <div class="js-card--large__content-imagen">
                                                <img src="<?php echo RUTA_IMG?>cards/person1.png">
                                            </div>
                                            <div class="js-card--large__content-text">
                                                <p>I want to plan the development and succession of my best talents.</p>
                                            </div>
                                        </div>
                                        <div class="js-card--large__button">
                                            <button id="buttonCard11" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="ayudaCard(this.id,'I want to plan the development and succession of my best talents.')">Select</button>
                                        </div>
                                        <div class="js-card--menu"><span>5/8</span></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="js-card--large js-card--large__HR js-card--large__flex">
                                        <div class="js-card--large__content">
                                            <div class="js-card--large__content-imagen">
                                                <img src="<?php echo RUTA_IMG?>cards/person2.png">
                                            </div>
                                            <div class="js-card--large__content-text">
                                                <p>I want to centralize and streamline my talent acquisition and hiring processes.</p>
                                            </div>
                                        </div>
                                        <div class="js-card--large__button">
                                            <button id="buttonCard12" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="ayudaCard(this.id,'I want to centralize and streamline my talent acquisition and hiring processes.')">Select</button>
                                        </div>
                                        <div class="js-card--menu"><span>6/8</span></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="js-card--large js-card--large__HR js-card--large__flex">
                                        <div class="js-card--large__content">
                                            <div class="js-card--large__content-imagen">
                                                <img src="<?php echo RUTA_IMG?>cards/person3.png">
                                            </div>
                                            <div class="js-card--large__content-text">
                                                <p>I want to increase the efficiency of the HR function by accessing a set of ready-to-use analytics.</p>
                                            </div>
                                        </div>
                                        <div class="js-card--large__button">
                                            <button id="buttonCard13" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="ayudaCard(this.id,'I want to increase the efficiency of the HR function by accessing a set of ready-to-use analytics.')">Select</button>
                                        </div>
                                        <div class="js-card--menu"><span>7/8</span></div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="js-card--large js-card--large__HR js-card--large__flex">
                                        <div class="js-card--large__content">
                                            <div class="js-card--large__content-imagen">
                                                <img src="<?php echo RUTA_IMG?>cards/person4.png">
                                            </div>
                                            <div class="js-card--large__content-text">
                                                <p>I want to empower new employees to make a quick contribution to business goals.</p>
                                            </div>
                                        </div>
                                        <div class="js-card--large__button">
                                            <button id="buttonCard14" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="ayudaCard(this.id,'I want to empower new employees to make a quick contribution to business goals.')">Select</button>
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
                            <h2>What is the type and size of your company?</h2>
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
                                                        <small>Professional services</small>
                                                    </div>
                                                </div>
                                                <div class="js-card--large__button">
                                                    <button id="buttonCard15" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select js-button--toggle" onclick="tipoTamaño(this.id,'Professional services')">Select</button>
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
                                                        <small>Financial Services</small>
                                                    </div>
                                                </div>
                                                <div class="js-card--large__button">
                                                    <button id="buttonCard16" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select js-button--toggle" onclick="tipoTamaño(this.id,'Financial Services')">Select</button>
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
                                                        <small>Retail</small>
                                                    </div>
                                                </div>
                                                <div class="js-card--large__button">
                                                    <button id="buttonCard17" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select js-button--toggle" onclick="tipoTamaño(this.id,'Retail')">Select</button>
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
                                                        <small>Distribution</small>
                                                    </div>
                                                </div>
                                                <div class="js-card--large__button">
                                                    <button id="buttonCard18" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select js-button--toggle" onclick="tipoTamaño(this.id,'Distribution')">Select</button>
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
                                                        <small>Consumer products</small>
                                                    </div>
                                                </div>
                                                <div class="js-card--large__button">
                                                    <button id="buttonCard19" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select js-button--toggle" onclick="tipoTamaño(this.id,'Consumer products')">Select</button>
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
                                                        <small>Manufacturing</small>
                                                    </div>
                                                </div>
                                                <div class="js-card--large__button">
                                                    <button id="buttonCard20" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select js-button--toggle" onclick="tipoTamaño(this.id,'Manufacturing')">Select</button>
                                                </div>
                                                <div class="js-card--menu"><span>6/7</span></div>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="js-card--large js-card--large__flex">
                                                <div class="js-card--large__content">
                                                    <div class="js-card--large__content-imagen">
                                                        <img src="<?php echo RUTA_IMG?>cards/otra.png">
                                                    </div>
                                                    <div class="js-card--large__content-text" style="height: 79px;">
                                                        <div class="form-group">
                                                            <textarea class="form-control" id="idEspecificar" rows="3" placeholder="Specify"></textarea>
                                                        </div>
                                                    </div>
                                               </div>
                                               <div class="js-card--large__button">
                                                    <button id="buttonCardOtra" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select js-button--toggle" onclick="tipoTamaño(this.id,'Otras')">Select</button>
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
                                            <small>Number of employees</small>
                                        </div>
                                    </div>
                                    <div class="js-card--large__select">
                                        <button id="buttonMenos" class="mdl-button mdl-js-button mdl-button--icon" onclick="operar(this.id,1)"><i class="mdi mdi-remove"></i></button>
                                        <span id="textOperar">Select</span>
                                        <button id="buttonMas" class="mdl-button mdl-js-button mdl-button--icon" onclick="operar(this.id,2)"><i class="mdi mdi-add"></i></button>
                                    </div>
                                </div>
                                <div class="js-card--large">
                                    <div class="js-card--large__content">
                                        <div class="js-card--large__content-tipo">
                                            <img src="<?php echo RUTA_IMG?>cards/facturacion.png">
                                        </div>
                                        <div class="js-card--large__content-name">
                                            <small>Annual Billing in dollars</small>
                                        </div>
                                    </div>
                                    <div class="js-card--large__select">
                                        <div class="js-select js-facturacion">
                                            <select class="selectpicker" id="facturacion" name="facturacion" title="Select" onchange="selectFacturacion(this.id)">
                                                <option value="10 - 30 Millions">10 - 30 Millions</option>
                                                <option value="30 - 100 Millions">30 - 100 Millions</option>
                                                <option value="100 Millions to more">100 Millions to more</option>
                                                <option value="I have no information">I have no information</option>
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
                            <h2>What type of solution  would you like to evaluate?</h2>
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
                                                    <p>Implement in your current infrastructure or acquire one of the certified hardware options.</p>
                                                    <div class="js-card--large__icon">
                                                        <i class="mdi mdi-remove"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="js-card--large__button">
                                                <button id="buttonCard21" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="saveSolucion(this.id,'On Premise');buttonQuestion(2);buttonNext();">Select</button>
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
                                                        <small>Cloud</small>
                                                    </div>
                                                    <div class="js-card--large__icon">
                                                        <i class="mdi mdi-add"></i>
                                                    </div>
                                                </div>
                                                <div class="js-card-flip js-card-flip__back">
                                                    <p>Run software from the cloud along with your business information.</p>
                                                    <div class="js-card--large__icon">
                                                        <i class="mdi mdi-remove"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="js-card--large__button">
                                                <button id="buttonCard22" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="saveSolucion(this.id,'Cloud');buttonQuestion(2);buttonNext();">Select</button>
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
                                                        <small>Hybrid</small>
                                                    </div>
                                                    <div class="js-card--large__icon">
                                                        <i class="mdi mdi-add"></i>
                                                    </div>
                                                </div>
                                                <div class="js-card-flip js-card-flip__back">
                                                    <p>Combine both options where sensitive information can remain in your local IT and the remaining information in the cloud.</p>
                                                    <div class="js-card--large__icon">
                                                        <i class="mdi mdi-remove"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="js-card--large__button">
                                                <button id="buttonCard23" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="saveSolucion(this.id,'Hybrid');buttonQuestion(2);buttonNext();">Select</button>
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
                            <h2>Complete this form to get in touch and provide you more details</h2>
                        </div>
                        <div class="js-card__flex">
                            <div class="js-card-confirmacion">
                                <h2>I <strong>WANT</strong></h2>
                                <div class="js-contenedor-respuestas"> 
                                    <div class="col-xs-12 p-0">
                                        <div class="js-respuestas">
                                            <ul>
                                                <li id="ayuda"></li>
                                            </ul>
                                            <button id="window2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="EditQuestion(this.id)">Edit</button>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 p-0">
                                        <div class="js-respuestas">
                                            <ul>
                                                <li id="industria">Retail</li>
                                            </ul>
                                            <button id="window3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="EditQuestion(this.id)">Edit</button>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 p-0">
                                        <div class="js-respuestas">
                                            <ul>
                                                <li id="tamanio">1 - 50</li>
                                            </ul>
                                            <button id="window3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="EditQuestion(this.id)">Edit</button>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 p-0">
                                        <div class="js-respuestas">
                                            <ul>
                                                <li id="factura">1-3 Millones de D&oacute;lares</li>
                                            </ul>
                                            <button id="window3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="EditQuestion(this.id)">Edit</button>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 p-0">
                                        <div class="js-respuestas">
                                            <ul>
                                                <li id="infraestructura">Local</li>
                                            </ul>
                                            <button id="window4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="EditQuestion(this.id)">Edit</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 p-0 text-right m-t-10">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button--confirmar" onclick="ConfirmarRespuestas()">Confirm answers</button>
                                </div>
                            </div>
                            <form class="js-formulario js-disabled text-left">
                                <div class="js-datos">
                                    <div class="js-datos__personal">
                                        <p><i class="mdi mdi-arrow_downward"></i>Enter your data here</p>
                                    </div>
                                    <div class="js-datos__separacion">
                                        <p>o</p>
                                    </div>
                                    <div class="js-datos__linkedin">
                                        <a class="button-linkedin" href="<?php  echo "https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id={$client_id}&redirect_uri={$redirect_uri}&state={$csrf_token}&scope={$scopes}"; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i>connect via LinkedIn</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="js-input">
                                        <input type="text" class="form-control" id="nombre_completo" maxlength="50" onkeypress="return soloLetras(event);" onchange="validarCampos()" placeholder="Full name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="js-input">
                                        <input type="text" class="form-control NEGRO_FONDO" id="cargo" maxlength="50" onkeypress="return soloLetras(event);"  onchange="validarCampos()" placeholder="Title">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="js-input">
                                        <input type="text" class="form-control" id="empresa" maxlength="50" onchange="validarCampos()" placeholder="Company">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="js-input">
                                        <input type="text" class="form-control" id="telefono" onchange="validarCampos()" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="js-input">
                                        <input type="email" class="form-control" id="email" maxlength="50" aria-describedby="emailHelp" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="js-select js-standar">
                                        <select class="selectpicker" id="relacion" name="relacion" title="Relationship with SAP">
                                            <option value="Customer">Customer</option>
                                            <option value="Potential Customer">Potential Customer</option>
                                            <option value="Consultant">Consultant</option>
                                            <option value="SAP employee">SAP employee</option>
                                            <option value="Student">Student</option>
                                            <option value="Partner">Partner</option>
                                            <option value="Potential Partner">Potential Partner</option>
                                            <option value="Press/Analyst">Press/Analyst</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="js-select js-standar">
                                        <select class="selectpicker" id="pais" name="pais" title="Country">
                                            <option value="Argentina">Argentina</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Chile">Chile</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="USA">USA</option>
                                            <option value="Venezuela">Venezuela</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 js-checkbox js-terminos">
                                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
                                        <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input">
                                        <span class="mdl-checkbox__label" style="">I have read and agree to the <a href="http://www.sap-latam.com/configurators/cloud/public/pdf/SAP_Privacy_Statement_CloudConfig_En.pdf" target="_blank">SAP terms and conditions</a></span>
                                    </label>
                                </div>
                                <div class="col-xs-12 text-right m-t-25">
                                    <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button--confirmar button-confirmar" onclick="solicitarEstimacion();">Send information</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="js-window6 opacity-done">
                    <div class="js-container">
                        <div class="js-agradecimiento">
                            <h2>Thanks for your interest</h2>
                            <p>A SAP representative will contact you to help you transform your business for the future.</p>
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
                    <a href="https://z1.liveper.sn/api/account/81933160/route/campaign/194741814/engagement/250005114" target="_blank"><img src="<?php echo RUTA_IMG?>/logo/chat.png"><label>Chat with us</label></a>
                </div>
            </div>
        </section> 
        <div class="modal fade" id="ModalPoliticas" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="mdl-card js-modal">
                        <div class="mdl-card__title">
                            <h2>SAP Marketing Consent Statement</h2>
                        </div>
                        <div class="mdl-card__supporting-text p-t-0">
                            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect js-label" for="checkbox-3" id="label-check3">
                                <input type="checkbox" id="checkbox-3" class="mdl-checkbox__input" checked>
                                <span class="mdl-checkbox__label">Would you like to receive additional information on SAP products and services along with information related to this inquiry? ...By checking this box, you agree that your contact details will be used by SAP Marketing in accordance with the <a href="http://www.sap-latam.com/configurators/cloud/public/pdf/SAP_Consent_Statement_Jan_18.pdf" target="_blank">SAP Marketing Consent Statement</a>.</span>
                            </label>
                            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect js-label" for="checkbox-2" id="label-check4">
                                <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input" checked>
                                <span class="mdl-checkbox__label">I agree that SAP may share the information I have provided hereunder with the SAP group in order that that they also may send additional marketing-related communications to me.</span>
                            </label>
                            <p>How would you like to receive these communications&#63;</p>
                            <div class="js-contact-label">
                                <div class="js-input-label">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="c-email">
                                        <input type="radio" id="c-email" class="mdl-radio__button" name="options" value="1">
                                        <span class="mdl-radio__label">By Email</span>
                                    </label>
                                </div>
                                <div class="js-input-label">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="c-telefono">
                                        <input type="radio" id="c-telefono" class="mdl-radio__button" name="options" value="2">
                                        <span class="mdl-radio__label">By Phone</span>
                                    </label>
                                </div>
                                <div class="js-input-label">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="c-ambos">
                                        <input type="radio" id="c-ambos" class="mdl-radio__button" name="options" value="3" checked>
                                        <span class="mdl-radio__label">Both</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mdl-card__actions text-right">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-default" onclick="closePoliticas()">Close</button>
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button" onclick="acceptPoliticas()">Accept</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        <script src="<?php echo RUTA_JS?>jsindex_en.js?v=<?php echo time();?>"></script>
        <script type="text/javascript">
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
                $('select').selectpicker('mobile');
            } else {
                $('select').selectpicker();
            }
            var confirmar = '';
             $(window).load(function(){
                // var URLactual = window.location;
                // if(URLactual['href'] != 'http://www.sap-latam.com/configurators/cloud/es'){
                //     location.href = 'http://www.sap-latam.com/configurators/cloud/es';
                // }
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