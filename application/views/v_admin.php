<!DOCTYPE html>
<html>
<head>
	  <meta charset="ISO-8859-1">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="description"            content="Proyecto de desarrollo de un producto wizard online que tenga un quiz y con una unica solucion que es SAP Business One">
    <meta name="keywords"               content="SAP,producto wizard">
    <meta name="robots"                 content="Index,Follow">
    <meta name="date"                   content="January 25, 2018"/>
    <meta name="language"               content="es">
    <meta name="theme-color"            content="#000000">
	  <title>SAP Cloud Configurator</title>
    <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/logo_favicon.png">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>roboto.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet"    href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.bootstrap.min.css">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>index.css?v=<?php echo time();?>">
    <style type="text/css">
        body{
            overflow-y: scroll;
            background-color: #EDEDED;
        }
    </style>
<body>
    <section id="principal">
        <div id="content" class="mdl-container">
            <div class="header" style="opacity: 1;">
                <div class="header-left header-admin">
                    <img class="logo-header" src="<?php echo RUTA_IMG?>logo/logo_favicon.png">
                    <p>Cloud Configurator</p>
                </div>
                <div class="header-right admin">
                    <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect admin-logout m-r-25" onclick="cerrarCesion()">Logout</a>
                    <div class="background1"></div>
                    <div class="background2"></div>
                    <div class="background3"></div>
                </div>
            </div>
            <div id="table" class="mdl-card mdl-card-table contenido-admin">
                <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover dt-responsive" cellspacing="0" width="100%">
                        <thead>
                            <tr class="tr-header-reporte">
                                <th class="text-left">Client</th>
                                <th class="text-left">Company</th>
                                <th class="text-left">E-mail</th>
                                <th class="text-left">Phone</th>
                                <th class="text-left">Relationship</th>
                                <th class="text-left">Position</th>
                                <th class="text-left">Contacted</th>
                                <th class="text-left">Consent Statement</th>
                                <th class="text-left">Country</th>
                                <th class="text-left">Application date</th>
                                <th class="text-center" style="display: none">Product</th>
                                <th class="text-center" style="display: none">Industry</th>
                                <th class="text-center" style="display: none">Size</th>
                                <th class="text-center" style="display: none">Annual invoice</th>
                                <th class="text-center" style="display: none">How can we help?</th>
                                <th class="text-center" style="display: none">Solution</th>
                            </tr>
                        </thead>
                      <tbody>
                          <?php echo $html ?>  
                      </tbody>
                    </table>
                </div>
            </div>

            <div id="details" class="mdl-card mdl-card-table contenido-admin" style="display:none">
                <button class="mdl-button mdl-js-button mdl-button--icon" onclick="returnTable();">
                    <i class="fa fa-arrow-left"></i>
                </button>
                <div class="table-responsive">
                    <table id="tbDetails" class="table table-bordered table-hover dt-responsive" cellspacing="0" width="100%">
                        <thead>
                            <tr class="tr-header-reporte">
                                <th class="text-left"></th>
                                <th class="text-left">General marketing Email</th>
                                <th class="text-left">General marketing Phone</th>
                                <th class="text-left">Email Channel</th>
                                <th class="text-left">Phone Channel</th>
                                <th class="text-left">Share Data</th>
                                <th class="text-left">Share Data</th>
                            </tr>
                        </thead>
                      <tbody id="tbBody"> 
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript" src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
    <script type="text/javascript" src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
    <script type="text/javascript" src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
    <script type="text/javascript" src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
    <script type="text/javascript" src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
    <script type="text/javascript" src="<?php echo RUTA_PLUGINS?>toaster/toastr.js?v=<?php echo time();?>"></script>
    <script type="text/javascript" src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.5/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="<?php echo RUTA_JS?>login.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>admin.js?v=<?php echo time();?>"></script>
    <script type="text/javascript">
      $(document).ready(function() {
            $('#example').DataTable( {
                searching : false,
                dom: 'Bfrtip',
                order: [[9, "desc"]],
                language:{
                    "emptyTable": "No se encontraron registros",
                    "info" : "Mostrando _END_ de _TOTAL_ resultados",
                    "infoEmpty": "Showing from 0 to 0 events of 0",
                    "paginate": {
                        "first":    "Primero",
                        "last":     "Último",
                        "next":     "Siguiente",
                        "previous": "Anterior"
                    },
                },
                lengthMenu: [
                    [ 10, 25, 50, -1 ],
                    [ '10 resultados', '25 resultados', '50 resultados']
                ],
                buttons: [{
                        text: 'Mostrar 10 resultados',
                        extend: 'pageLength'
                    },
                    {
                        extend:'excel',
                        text: 'Exportar a Excel'
                    }
                ]
            });
          $('.buttons-excel').empty();
          $('.buttons-print').empty();
          $('.buttons-excel').append('<i class="fa fa-download"></i>');
          $('.buttons-print').append('<i class="fa fa-print"></i>');
      });
    </script>
</body>
</html>