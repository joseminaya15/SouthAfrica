<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"  content="IE=edge">
    <meta name="viewport"               content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <meta name="description"            content="HPE South Africa - September 6th-14th, 2018">
    <meta name="keywords"               content="HPE South Africa">
    <meta name="robots"                 content="Index,Follow">
    <meta name="date"                   content="July 23, 2018"/>
    <meta name="language"               content="es">
    <meta name="theme-color"            content="#000000">
    <title>HPE South Africa</title>
    <link rel="shortcut icon" href="<?php echo RUTA_IMG?>logo/favicon.ico">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>toaster/toastr.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>metric.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet"    href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.bootstrap.min.css">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>admin.css?v=<?php echo time();?>">
<body>
    <div class="js-header--admin js-fixed">
        <div class="js-header--left">
            <img src="<?php echo RUTA_IMG?>logo/logo-hpe-blanco.png">
        </div>
        <div class="js-header--right">
            <img src="<?php echo RUTA_IMG?>logo/logo-aruba-blanco.png">
        </div>
    </div>
    <section id="principal" class="js-section js-section--admin">
        <div id="content" class="js-container">
            <div class="col-xs-12 text-right p-0">
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button-logout" onclick="cerrarCesion()">Cerrar Sesión</button> 
            </div>
            <div class="mdl-card">
                <div class="table-responsive">
                    <table id="example" class="display nowrap table table-bordered table-hover dt-responsive" cellspacing="0" width="100%">
                        <thead>
                            <tr class="tr-header-reporte">
                                <th class="text-left">Nombre</th>
                                <th class="text-left">Empresa</th>
                                <th class="text-left">correo</th>
                                <th class="text-left">P&aacute;ginas en blanco</th>
                                <th class="text-center">Foto Pasaporte</th>
                                <th class="text-center">Fecha Registro</th>
                                <th class="text-left" style="display: none">Cargo</th>
                                <th class="text-center" style="display: none">Phone</th>
                                <th class="text-left" style="display: none">Ciudad</th>
                                <th class="text-left" style="display: none">Pa&iacute;s</th>
                                <th class="text-center" style="display: none">Nro Pasaporte</th>
                                <th class="text-center" style="display: none">Fecha Emisión</th>
                                <th class="text-center" style="display: none">Fecha Expiración</th>
                                <th class="text-left" style="display: none">País Emisor</th>
                                <th class="text-left" style="display: none">Género</th>
                                <th class="text-center" style="display: none">Fecha Cumpleaños</th>
                                <th class="text-left" style="display: none">Nacionalidad</th>
                                <th class="text-left" style="display: none">Ciudad Referencia</th>
                                <th class="text-left" style="display: none">Visa Invitation</th>
                                <th class="text-left" style="display: none">Asiento Preferencia</th>
                                <th class="text-left" style="display: none">Talla polo</th>
                                <th class="text-left" style="display: none">Nombre cont. Emergencia</th>
                                <th class="text-center" style="display: none">Teléfono emergéncia</th>
                                <th class="text-left" style="display: none">Relación</th>
                                <th class="text-left" style="display: none">Adicional</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php echo $html ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="modalPasaporte" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="mdl-card">
                    <div class="mdl-card__supporting-text">
                        <img id="imgDocumento" src="">
                    </div>
                    <div class="mdl-card__actions">                         
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button" data-dismiss="modal">Cerrar</button>
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
    <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.min.js?v=<?php echo time();?>"></script>
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable( {
                searching : false,
                responsive: true,
                dom: 'Bfrtip',
                aLengthMenu : [100],
                buttons: [
                    {
                        extend:'excel',
                        text: 'Exportar a Excel'
                    },
                    {
                        extend:'print',
                        text: 'Imprimir'
                    }
                ],
                language : {
                    info : "Mostrando _TOTAL_ registros",
                }
            });
        });
    </script>
</body>
</html>