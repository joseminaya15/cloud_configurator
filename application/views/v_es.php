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
                    <p>Complete estas preguntas y descubra la soluci&oacute;n perfecta de SAP en funci&oacute;n a las necesidades de su negocio.</p>
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
                <div class="js-header js-header--configurator">
                    <img src="<?php echo RUTA_IMG?>logo/logo-sap__run.png">
                    <div class="js-header__bgcolor">
                        <div class="js-header__bgcolor--bar"></div>
                        <div class="js-header__bgcolor--bar"></div>
                        <div class="js-header__bgcolor--bar"></div>
                    </div>
                </div>
                <div class="js-window1">
                    <div class="js-container">
                        <h2>YO <strong>QUIERO</strong></h2>
                        <div class="js-card__flex">
                            <div class="js-card">
                                <div class="js-card-imagen">
                                    <div class="js-card-flip js-card-flip__front">
                                        <img src="<?php echo RUTA_IMG?>cards/byd.png">
                                    </div>
                                    <div class="js-card-flip js-card-flip__back selected">
                                        <h2>ERP</h2>
                                        <button id="ERP" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="selectConfigurator(this.id, 'BYD Configurator')">Seleccionar</button>
                                    </div>
                                </div>
                                <div class="js-card-content">
                                    <p>Innovar digitalmente mis procesos para mejorar la competitividad, la eficiencia y la reputaci&oaute;n de mi marca y m&aacute;s.</p>
                                </div>
                            </div>
                            <div class="js-card">
                                <div class="js-card-imagen">
                                    <div class="js-card-flip js-card-flip__front">
                                        <img src="<?php echo RUTA_IMG?>cards/crm.png">
                                    </div>
                                    <div class="js-card-flip js-card-flip__back">
                                        <h2>CRM</h2>
                                        <button id="CRM" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="selectConfigurator(this.id, 'CRM Configurator')">Seleccionar</button>
                                    </div>
                                </div>
                                <div class="js-card-content">
                                    <p>Contar con herramientas para una gesti&oacute;n avanzada de mis clientes para entregar la mejor experiencia, adelantarse a sus necesidades y brindar un servicio de excelencia.</p>
                                </div>
                            </div>
                            <div class="js-card">
                                <div class="js-card-imagen">
                                    <div class="js-card-flip js-card-flip__front">
                                        <img src="<?php echo RUTA_IMG?>cards/hr.png">
                                    </div>
                                    <div class="js-card-flip js-card-flip__back">
                                        <h2>HR</h2>
                                        <button id="HR" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="selectConfigurator(this.id, 'HR Configurator')">Seleccionar</button>
                                    </div>
                                </div>
                                <div class="js-card-content">
                                    <p>Modernizar la gesti&oacute;n de mi fuerza laboral, alinearlos con las metas del negocio, innovar su aprendizaje y compensarlos adecuadamente.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-window2 opacity-done">
                    <div class="js-container">
                        <p class="js-question--title"><strong>/ ERP</strong> Configurator</p>
                        <div class="js-question--number">
                            <span>01/05</span>
                            <h2>¿C&oacute;mo podemos ayudarle&#63;</h2>
                        </div>
                        <div class="js-card__flex">
                            <div class="js-card--large js-card--large__ERP">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-imagen">
                                        <img src="<?php echo RUTA_IMG?>cards/integracion.png">
                                    </div>
                                    <div class="js-card--large__content-text">
                                        <p>Como responsable de la integraci&oacute;n financiera de mi empresa quiero tener visibilidad en tiempo real.</p>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large js-card--large__ERP">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-imagen">
                                        <img src="<?php echo RUTA_IMG?>cards/integracion.png">
                                    </div>
                                    <div class="js-card--large__content-text">
                                        <p>Como responsable de los procesos operativos quiero alacanzar una mayor eficiencia</p>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large js-card--large__ERP">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-imagen">
                                        <img src="<?php echo RUTA_IMG?>cards/integracion.png">
                                    </div>
                                    <div class="js-card--large__content-text">
                                        <p>Como responsable del crecimiento de la empresa quiero lograr m&aacute;xima rentabilidad.</p>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large js-card--large__CRM">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-imagen">
                                        <img src="<?php echo RUTA_IMG?>cards/integracion.png">
                                    </div>
                                    <div class="js-card--large__content-text">
                                        <p>Como responsable de ventas quiero <strong>mejorar mi proceso de ventas</strong></p>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large js-card--large__CRM">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-imagen">
                                        <img src="<?php echo RUTA_IMG?>cards/integracion.png">
                                    </div>
                                    <div class="js-card--large__content-text">
                                        <p>Como responsable de servicios quiero <strong>mejorar nuestros procesos de soporte al cliente.</strong></p>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large js-card--large__CRM">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-imagen">
                                        <img src="<?php echo RUTA_IMG?>cards/integracion.png">
                                    </div>
                                    <div class="js-card--large__content-text">
                                        <p>Como responsable de ventas online quiero <strong>crear experiencias de compra &uacute;nicas e simplificadas</strong></p>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large js-card--large__HR js-card--large__flex">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-imagen">
                                        <img src="<?php echo RUTA_IMG?>cards/indicadores.png">
                                    </div>
                                    <div class="js-card--large__content-text">
                                        <p>Como responsable de HR quiero consolidar y optimizar los procesos centrales de RRHH.</p>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large js-card--large__HR js-card--large__flex">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-imagen">
                                        <img src="<?php echo RUTA_IMG?>cards/indicadores.png">
                                    </div>
                                    <div class="js-card--large__content-text">
                                        <p>Como responsable de HR quiero alinear las metas de la empresa con la recompensa de mis empleados.</p>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large js-card--large__HR js-card--large__flex">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-imagen">
                                        <img src="<?php echo RUTA_IMG?>cards/indicadores.png">
                                    </div>
                                    <div class="js-card--large__content-text">
                                        <p>Como responsable de HR quiero desarrollar a mis empleados de una manera simple y colaborativa.</p>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large js-card--large__HR js-card--large__flex">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-imagen">
                                        <img src="<?php echo RUTA_IMG?>cards/indicadores.png">
                                    </div>
                                    <div class="js-card--large__content-text">
                                        <p>Como responsable de HR quiero retener a los mejores talentos con un plan de compensaci&oacute;n atractivo.</p>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large js-card--large__HR js-card--large__flex">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-imagen">
                                        <img src="<?php echo RUTA_IMG?>cards/indicadores.png">
                                    </div>
                                    <div class="js-card--large__content-text">
                                        <p>Como responsable de HR quiero planificar el desarrollo y sucesi&oacute;n de mis mejores talentos</p>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large js-card--large__HR js-card--large__flex">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-imagen">
                                        <img src="<?php echo RUTA_IMG?>cards/indicadores.png">
                                    </div>
                                    <div class="js-card--large__content-text">
                                        <p>Como responsable de HR quiero centralizar y agilizar mis procesos de adquisici&oacute;n y contrataci&oacute;n de talentos.</p>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large js-card--large__HR js-card--large__flex">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-imagen">
                                        <img src="<?php echo RUTA_IMG?>cards/indicadores.png">
                                    </div>
                                    <div class="js-card--large__content-text">
                                        <p>Como responsable de HR quiero aumentar la eficacia de la funci&oacute;n de RRHH accediendo a un conjunto de anal&iacute;ticas listas para usar.</p>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large js-card--large__HR js-card--large__flex">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-imagen">
                                        <img src="<?php echo RUTA_IMG?>cards/indicadores.png">
                                    </div>
                                    <div class="js-card--large__content-text">
                                        <p>Como responsable de HR quiero empoderar a los nuevos empleados para lograr una contribuci&oacute;n r&aacute;pida a las metas del negocio.</p>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select">Seleccione</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-window3 opacity-done">
                    <div class="js-container">
                        <p class="js-question--title"><strong>/ ERP</strong> Configurator</p>
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
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-tipo">
                                        <img src="<?php echo RUTA_IMG?>cards/retail.png">
                                    </div>
                                    <div class="js-card--large__content-name">
                                        <small>Servicios Financieros</small>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-tipo">
                                        <img src="<?php echo RUTA_IMG?>cards/distribucion.png">
                                    </div>
                                    <div class="js-card--large__content-name">
                                        <small>Comercio Minorista</small>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-tipo">
                                        <img src="<?php echo RUTA_IMG?>cards/productos.png">
                                    </div>
                                    <div class="js-card--large__content-name">
                                        <small>Comercio Mayorista</small>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-tipo">
                                        <img src="<?php echo RUTA_IMG?>cards/manufactura.png">
                                    </div>
                                    <div class="js-card--large__content-name">
                                        <small>Productos de Consumo</small>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select">Seleccione</button>
                                </div>
                            </div>
                            <div class="js-card--large">
                                <div class="js-card--large__content">
                                    <div class="js-card--large__content-tipo">
                                        <img src="<?php echo RUTA_IMG?>cards/manufactura.png">
                                    </div>
                                    <div class="js-card--large__content-name">
                                        <small>Manufactura</small>
                                    </div>
                                </div>
                                <div class="js-card--large__button">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select">Seleccione</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-window4 opacity-done">
                    <div class="js-container">
                        <p class="js-question--title"><strong>/ ERP</strong> Configurator</p>
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
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="saveSolucion('On Premise')">Seleccione</button>
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
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="saveSolucion('Cloud')">Seleccione</button>
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
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button-select" onclick="saveSolucion('Híbrida')">Seleccione</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-window5 opacity-done">
                    <div class="js-container">
                        <p class="js-question--title"><strong>/ ERP</strong> Configurator</p>
                        <div class="js-question--number">
                            <span>05/05</span>
                            <!-- <h2>¿Qui&eacute;n recibir&aacute; la estimaci&oacute;n&#63;</h2> -->
                            <h2>Ingrese su informaci&oacute;n para recibir el resultado</h2>
                        </div>
                        <div class="js-card__flex">
                            <div class="js-card-confirmacion">
                                <h2>YO <strong>QUIERO</strong></h2>
                                <div class="contenedor-respuestas">
                                    <div class="col-xs-12 p-0">
                                        <div class="js-respuestas">
                                            <ul>
                                                <li id="industria">Retail</li>
                                            </ul>
                                            <button id="window1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="EditQuestion(this.id, 1)">Editar</button>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 p-0">
                                        <div class="js-respuestas">
                                            <ul>
                                                <li id="tamanio">1 - 50</li>
                                            </ul>
                                            <button id="window2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="EditQuestion(this.id, 2)">Editar</button>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 p-0">
                                        <div class="js-respuestas">
                                            <ul>
                                                <li id="factura">1-3 Millones de D&oacute;lares</li>
                                            </ul>
                                            <button id="window2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="EditQuestion(this.id, 2)">Editar</button>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 p-0">
                                        <div class="js-respuestas">
                                            <ul>
                                                <li id="infraestructura">Local</li>
                                            </ul>
                                            <button id="window4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="EditQuestion(this.id, 4)">Editar</button>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 p-0">
                                        <div class="js-respuestas">
                                            <ul>
                                                <li id="infraestructura">Local</li>
                                            </ul>
                                            <button id="window4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="EditQuestion(this.id, 4)">Editar</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 p-0 text-right m-t-10">
                                    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button--confirmar" onclick="ConfirmarRespuestas()">Confirmar respuestas</button>
                                </div>
                            </div>
                            <form class="js-formulario disabled text-left">
                                <div class="js-datos">
                                    <div class="js-datos__personal">
                                        <p><i class="mdi mdi-arrow_downward"></i>Introduzca aqu&iacute; sus datos</p>
                                    </div>
                                    <div class="js-datos__separacion">
                                        <p>o</p>
                                    </div>
                                    <div class="js-datos__linkedin">
                                        <a class="button-linkedin" href="<?php  echo "https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id={$client_id}&redirect_uri={$redirect_uri}&state={$csrf_token}&scope={$scopes}"; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i>Conéctese v&iacute;a LinkedIn</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="js-input">
                                        <input type="text" class="form-control" id="nombre_completo" maxlength="50" onkeypress="return soloLetras(event);" onchange="validarCampos()" placeholder="Nombre Completo">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="js-input">
                                        <input type="text" class="form-control NEGRO_FONDO" id="cargo" maxlength="50" onkeypress="return soloLetras(event);"  onchange="validarCampos()" placeholder="Cargo">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="js-input">
                                        <input type="text" class="form-control" id="empresa" maxlength="50" onkeypress="return soloLetras(event);" onchange="validarCampos()" placeholder="Empresa">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="js-input">
                                        <input type="text" class="form-control" id="telefono" onchange="validarCampos()" placeholder="Teléfono">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="js-input">
                                        <input type="email" class="form-control" id="email" maxlength="50" aria-describedby="emailHelp" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="js-select js-standar">
                                        <select class="selectpicker" id="relacion" name="relacion" title="Relación con SAP">
                                            <option value="Cliente">Cliente</option>
                                            <option value="Cliente potencial">Cliente potencial</option>
                                            <option value="Consultor">Consultor</option>
                                            <option value="Empleado SAP">Empleado SAP</option>
                                            <option value="Estudiante">Estudiante</option>
                                            <option value="Partner">Partner</option>
                                            <option value="Partner potencial">Partner potencial</option>
                                            <option value="Prensa/Analista">Prensa/Analista</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="js-input">
                                        <input type="text" class="form-control" id="pais" maxlength="100" onkeypress="return soloLetras(event);"  onchange="validarCampos()" placeholder="País">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <p class="js-contacto">Quiero ser contactado por un representante de ventas:</p>
                                    <div class="js-label">
                                        <div class="js-input-label">
                                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="c-email">
                                                <input type="radio" id="c-email" class="mdl-radio__button" name="options" value="1">
                                                <span class="mdl-radio__label">Por email</span>
                                            </label>
                                        </div>
                                        <div class="js-input-label">
                                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="c-telefono">
                                                <input type="radio" id="c-telefono" class="mdl-radio__button" name="options" value="2">
                                                <span class="mdl-radio__label">Por tel&eacute;fono</span>
                                            </label>
                                        </div>
                                        <div class="js-input-label">
                                            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="c-ambos">
                                                <input type="radio" id="c-ambos" class="mdl-radio__button" name="options" value="3">
                                                <span class="mdl-radio__label">Ambos</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 js-checkbox m-t-10">
                                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-1">
                                        <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input">
                                        <span class="mdl-checkbox__label f-s-14" style="">He le&iacute;do y acepto los <a class="FONDO_TERMINOS" href="https://www.sap.com/corporate/en/legal/terms-of-use.html" target="_blank" style="">Términos y condiciones de SAP</a></span>
                                    </label>
                                </div>
                                <div class="col-xs-12 text-right m-t-25">
                                    <button type="button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button--confirmar" onclick="solicitarEstimacion();">Enviar informaci&oacute;n</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="js-window6 opacity-done">
                    <div class="js-container">
                        <div class="js-agradecimiento">
                            <h2>Gracias por su inter&eacute;s</h2>
                            <p>Un representante de SAP se pondr&aacute; en contacto con Usted para ayudarlo a transformar su negocio de cara al futuro.</p>
                        </div>
                    </div>
                </div>
                <div class="js-button-next">
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab" onclick="buttonQuestion(1)">
                        <i class="mdi mdi-keyboard_arrow_up"></i>
                    </button>
                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab" onclick="buttonQuestion(2)">
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
            // $(window).load(function(){
            //     if(<?php echo $pantalla1 ?> == 5) {
            //         var formulario = $('#formulario');
            //         var homePage   = $('#home');
            //         $('.opacity-done').removeClass('animated fadeInRight fadeOutLeft fadeInLeft fadeOutRight');
            //         homePage.css("display","none");
            //         formulario.addClass('animated fadeInLeft');
            //         $('#email').val("<?php echo $email_link ?>");
            //         $('#nombre_completo').val("<?php echo $nombre_comple ?>");
            //         if("<?php echo $comp ?>" == ''){
            //             $('#empresa').css('border-color','red');
            //         }
            //         if("<?php echo $tit ?>" == ''){
            //             $('#cargo').css('border-color','red');
            //         }
            //         $('#cargo').val("<?php echo $tit ?>");
            //         $('#empresa').val("<?php echo $comp ?>");
            //         $('#pais').val("<?php echo $pais_link ?>");
            //         $('#telefono').css('border-color','red');
            //         nameIndustria("<?php echo $idIndustria ?>");
            //     }
            // });
        </script>
    </body>
</html>