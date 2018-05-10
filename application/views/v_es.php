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
                    <h1>Bienvenido a <br><strong>Cloud Configurator</strong></h1>
                    <p>Con esta herramienta podr&aacute; obtener r&aacute;pidamente una configuraci&oacute;n personalizada de las Ofertas SAP Cloud en funci&oacute;n a sus necesidades</p>
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
                <div class="js-window1" style="display: none;">
                    <div class="js-container">
                        <h2>YO <strong>QUIERO</strong></h2>
                        <div class="js-card__flex">
                            <div class="js-card" onclick="clickCard('BYD Configurator')">
                                <div class="js-card-imagen">
                                    <div class="js-card-flip js-card-flip__front">
                                        <img src="<?php echo RUTA_IMG?>cards/byd.png">
                                    </div>
                                    <div class="js-card-flip js-card-flip__back selected">
                                        <h2>BYD</h2>
                                        <p>Configurator</p>
                                    </div>
                                </div>
                                <div class="js-card-content">
                                    <p>Innovar digitalmente mis procesos para mejorar la competitividad, la reputaci&oacute;n de mi marca y m&aacute;s.</p>
                                </div>
                            </div>
                            <div class="js-card" onclick="clickCard('CRM Configurator')">
                                <div class="js-card-imagen">
                                    <div class="js-card-flip js-card-flip__front">
                                        <img src="<?php echo RUTA_IMG?>cards/crm.png">
                                    </div>
                                    <div class="js-card-flip js-card-flip__back">
                                        <h2>CRM</h2>
                                        <p>Configurator</p>
                                    </div>
                                </div>
                                <div class="js-card-content">
                                    <p>Contar con herramientas para una gestión avanzada de mis clientes por medio de marketing contextual y en tiempo real.</p>
                                </div>
                            </div>
                            <div class="js-card" onclick="clickCard('HR Configurator')">
                                <div class="js-card-imagen">
                                    <div class="js-card-flip js-card-flip__front">
                                        <img src="<?php echo RUTA_IMG?>cards/hr.png">
                                    </div>
                                    <div class="js-card-flip js-card-flip__back">
                                        <h2>HR</h2>
                                        <p>Configurator</p>
                                    </div>
                                </div>
                                <div class="js-card-content">
                                    <p>Modernizar la gesti&oacute;n de mi fuerza laboral, alinearlos con las metas del negocio, innovar su aprendizaje y compensarlos adecuadamente.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-window2" style="display: none;">
                    <div class="js-container">
                        <p class="js-question--title"><strong>/ BYD</strong> Configurator</p>
                        <div class="js-question--number">
                            <span>01/05</span>
                            <h2>¿Qu&eacute; tipo de ayuda requiere para su negocio&#63;</h2>
                        </div>
                        <div class="js-card__flex">
                            <div class="js-card--large">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-imagen">
                                        <img src="<?php echo RUTA_IMG?>cards/integracion.png">
                                    </div>
                                    <div class="js-card--large__content-text">
                                        <p>Lograr una <strong>integraci&oacute;n financiera</strong> que arroje informaci&oacute;n relevante en tiempo real</p>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-imagen">
                                        <img src="<?php echo RUTA_IMG?>cards/operativo.png">
                                    </div>
                                    <div class="js-card--large__content-text">
                                        <p>Evidenciar una <strong>Mejora en mis Procesos Operativos</strong></p>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-imagen">
                                        <img src="<?php echo RUTA_IMG?>cards/indicadores.png">
                                    </div>
                                    <div class="js-card--large__content-text">
                                        <p>Trabajar con una <strong>Mejor Visibilidad de los Indicadores</strong> de Crecimiento</p>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-imagen">
                                        <img src="<?php echo RUTA_IMG?>cards/otra.png">
                                    </div>
                                    <div class="js-card--large__content-text">
                                        <div class="form-group">
                                            <textarea class="form-control" id="idEspecificar" rows="4" placeholder="Especificar"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Seleccione</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-window3" style=" display: none">
                    <div class="js-container">
                        <p class="js-question--title"><strong>/ BYD</strong> Configurator</p>
                        <div class="js-question--number">
                            <span>02/05</span>
                            <h2>¿Cu&aacute;l es su tipo y tama&ntilde;o de empresa&#63;</h2>
                        </div>
                        <div class="js-card__flex">
                            <div class="js-card--large">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-tipo">
                                        <img src="<?php echo RUTA_IMG?>cards/servicios.png">
                                    </div>
                                    <div class="js-card--large__content-name">
                                        <small>Servicios Profesionales</small>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-tipo">
                                        <img src="<?php echo RUTA_IMG?>cards/retail.png">
                                    </div>
                                    <div class="js-card--large__content-name">
                                        <small>Retail</small>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-tipo">
                                        <img src="<?php echo RUTA_IMG?>cards/distribucion.png">
                                    </div>
                                    <div class="js-card--large__content-name">
                                        <small>Distribuci&oacute;n Mayorista</small>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-tipo">
                                        <img src="<?php echo RUTA_IMG?>cards/productos.png">
                                    </div>
                                    <div class="js-card--large__content-name">
                                        <small>Productos de consumo</small>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-tipo">
                                        <img src="<?php echo RUTA_IMG?>cards/manufactura.png">
                                    </div>
                                    <div class="js-card--large__content-name">
                                        <small>Procesos/Manufactura</small>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Seleccione</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-window4" style=" display: none">
                    <div class="js-container">
                        <p class="js-question--title"><strong>/ BYD</strong> Configurator</p>
                        <div class="js-question--number">
                            <span>03/05</span>
                            <h2>Identifique los retos m&aacute;s relevantes que enfrenta su empresa</h2>
                        </div>
                        <div class="js-card__flex">
                            <div class="js-card--large">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-imagen">
                                        <img src="<?php echo RUTA_IMG?>cards/integracion.png">
                                    </div>
                                    <div class="js-card--large__content-text">
                                        <p>Quiero que mi equipo colabore de forma m&aacute;s eficiente</p>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-imagen">
                                        <img src="<?php echo RUTA_IMG?>cards/operativo.png">
                                    </div>
                                    <div class="js-card--large__content-text">
                                        <p>Quiero conectar el front office con el back office</p>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-imagen">
                                        <img src="<?php echo RUTA_IMG?>cards/indicadores.png">
                                    </div>
                                    <div class="js-card--large__content-text">
                                        <p>Quiero gestionar las visitas en las instalaciones</p>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-imagen">
                                        <img src="<?php echo RUTA_IMG?>cards/indicadores.png">
                                    </div>
                                    <div class="js-card--large__content-text">
                                        <p>Quiero gestionar las visitas en las instalaciones</p>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-imagen">
                                        <img src="<?php echo RUTA_IMG?>cards/indicadores.png">
                                    </div>
                                    <div class="js-card--large__content-text">
                                        <p>Quiero gestionar las visitas en las instalaciones</p>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Seleccione</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-window5" style="display: none;">
                    <div class="js-container">
                        <p class="js-question--title"><strong>/ BYD</strong> Configurator</p>
                        <div class="js-question--number">
                            <span>04/05</span>
                            <h2>¿Que tipo de soluci&oacute;n le interesa evaluar&#63;</h2>
                        </div>
                        <div class="js-card__flex">
                            <div class="js-card--large">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-tipo">
                                        <img src="<?php echo RUTA_IMG?>cards/premise.png">
                                    </div>
                                    <div class="js-card--large__content-name">
                                        <small>On Premise</small>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-tipo">
                                        <img src="<?php echo RUTA_IMG?>cards/cloud.png">
                                    </div>
                                    <div class="js-card--large__content-name">
                                        <small>Cloud</small>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-tipo">
                                        <img src="<?php echo RUTA_IMG?>cards/hibrida.png">
                                    </div>
                                    <div class="js-card--large__content-name">
                                        <small>H&iacute;brida</small>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Seleccione</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-window6" style="display: none;">
                    <div class="js-container">
                        <p class="js-question--title"><strong>/ BYD</strong> Configurator</p>
                        <div class="js-question--number">
                            <span>05/05</span>
                            <h2>¿Qui&eacute;n recibir&aacute; la estimaci&oacute;n&#63;</h2>
                        </div>
                        <div class="js-card__flex">
                            <div class="js-card--large">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-tipo">
                                        <img src="<?php echo RUTA_IMG?>cards/premise.png">
                                    </div>
                                    <div class="js-card--large__content-name">
                                        <small>On Premise</small>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-tipo">
                                        <img src="<?php echo RUTA_IMG?>cards/cloud.png">
                                    </div>
                                    <div class="js-card--large__content-name">
                                        <small>Cloud</small>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Seleccione</button>
                                </div>
                            </div>
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
        <script src="<?php echo RUTA_JS?>jsindex_es.js?v=<?php echo time();?>"></script>
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