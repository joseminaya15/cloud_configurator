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
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>bentonsans.css?v=<?php echo time();?>">
    	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>animate.css?v=<?php echo time();?>">
    	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
    	<link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
    </head>
    <body>
        <section id="principal">
            <div id="home" class="js-window">
                <div class="js-header">
                    <img src="<?php echo RUTA_IMG?>logo/logo-sap__run.png">
                    <div class="js-idioma">
                        <select class="selectpicker" id="IdiomaHome"  name="Idioma" onchange="cambiarIdioma()">
                            <option value="Español">Espa&ntilde;ol</option>
                            <option value="Inglés">English</option>
                            <option value="Portugués">Portugu&ecirc;s</option>
                        </select>
                    </div>
                </div>
                <div class="js-title">
                    <h1>Welcome to <br><strong>Cloud Configurator</strong></h1>
                    <p>With this tool you can quickly obtain a personalized configuration of the SAP Cloud Offers according to your needs</p>
                </div>
                <div class="js-bar">
                    <div class="js-bar__children background-body3"></div>
                    <div class="js-bar__children background-body2"></div>
                    <div class="js-bar__children background-body1"></div>
                </div>
                <div class="js-fondo__imagen"></div>
                <div class="js-minilogo"><img src="<?php echo RUTA_IMG?>logo/minilogo-home.png"></div>
                <div class="js-button-next">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab" onclick="buttonNext()">
                        <i class="mdi mdi-keyboard_arrow_down"></i>
                    </button>
                </div>
            </div>
            <!-- TODOS LOS CARDS  -->
            <div id="configurator">
                <div class="js-header">
                    <img src="<?php echo RUTA_IMG?>logo/logo-sap__run.png">
                </div>
                <div class="js-container">
                    <div class="js-window1">
                        <div class="js-contenido">
                            <h2>I <strong>WANT</strong></h2>
                            <div class="js-card">
                                <div class="js-card-flip">
                                    <div class="js-card-flip__front">
                                        <img src="<?php echo RUTA_IMG?>cards/byd.png">
                                    </div>
                                    <div class="js-card-flip__back">
                                        <h2>BYD</h2>
                                        <p>Configurator</p>
                                    </div>
                                </div>
                                <div class="js-card-content">
                                    <p>Digitally innovate my processes to improve competitiveness, the reputation of my brand and more.</p>
                                </div>
                            </div>
                            <div class="js-card">
                                <div class="js-card-flip">
                                    <div class="js-card-flip__front">
                                        <img src="<?php echo RUTA_IMG?>cards/crm.png">
                                    </div>
                                    <div class="js-card-flip__back">
                                        <h2>CRM</h2>
                                        <p>Configurator</p>
                                    </div>
                                </div>
                                <div class="js-card-content">
                                    <p>To have tools for an advanced management of my clients through contextual and real-time marketing.</p>
                                </div>
                            </div>
                            <div class="js-card">
                                <div class="js-card-flip">
                                    <div class="js-card-flip__front">
                                        <img src="<?php echo RUTA_IMG?>cards/hr.png">
                                    </div>
                                    <div class="js-card-flip__back">
                                        <h2>HR</h2>
                                        <p>Configurator</p>
                                    </div>
                                </div>
                                <div class="js-card-content">
                                    <p>Modernize the management of my workforce, align with business goals, innovate their learning and compensate them adequately.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-window2">
                        <div class="js-window2">
                            
                        </div>
                    </div>
                </div>
                <div class="js-button-next">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab" onclick="buttonNext()">
                        <i class="mdi mdi-keyboard_arrow_down"></i>
                    </button>
                </div>
            </div>
        </section> 

        <script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jsutils.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jsmenu.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>jsindex_en.js?v=<?php echo time();?>"></script>
        <script type="text/javascript">
            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
                $('select').selectpicker('mobile');
            } else {
                $('select').selectpicker();
            }
            $(window).load(function(){
            if(<?php echo $pantalla1 ?> == 5) {
                var formulario = $('#formulario');
                var homePage   = $('#home');
                $('.opacity-done').removeClass('animated fadeInRight fadeOutLeft fadeInLeft fadeOutRight');
                homePage.css("display","none");
                formulario.addClass('animated fadeInLeft');
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
                nameIndustria("<?php echo $idIndustria ?>");
            }
        });
        </script>
    </body>
</html>