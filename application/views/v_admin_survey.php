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
                    <table id="example" class="table table-bordered table-hover dt-responsive" cellspacing="0" width="100%">
                        <thead>
                            <tr class="tr-header-reporte">
                                <th class="text-left max-height">Nombre</th>
                                <th class="text-left max-height">The HPE and Aruba producs included in the promo were the most suitable.</th>
                                <th class="text-left max-height">Communications about the promo (announcement, monthly rankings and winners) were clear and transmitted by the most appropriate channels.</th>
                                <th class="text-left max-height">There was a good pre-trip organization.</th>
                                <th class="text-left max-height">There was a good organization during the trip.</th>
                                <th class="text-left max-height">The services provided at The Cape Milner Hotel were satisfactory.</th>
                                <th class="text-left max-height">The agenda organized during the stay at The Cape Milner Hotel fulfilled all expectations.</th>
                                <th class="text-left max-height">The services offered at Mabula Game Lodge were satisfactory.</th>
                                <th class="text-left max-height">The agenda organized during the stay at Mabula Game Lodge fulfilled all expectations.</th>
                                <th class="text-left max-height">The shuttle service was adequate (transfer times and driving style).</th>
                                <th class="text-left max-height">The tour guides were quite informed of the subject and were willing to answer all the questions.</th>
                                <th class="text-left max-height">The HPE team was aware of the well-being of all the attendees and was concerned about the correct conduct of all the activities.</th>
                                <th class="text-left max-height">The last trip to South Africa is better compared to other HPE incentives.</th>
                                <th class="text-left max-height">The last trip to South Africa is better than the incentives provided by other companies in the segment.</th>
                                <th class="text-left max-height">I would participate in a forthcoming incentive activity organized by HPE and Aruba</th>
                                <th class="text-left max-height">What aspects would you change/improve on the HPE Incentive Plan for the next few years?</th>
                                <th class="text-left max-height">Which destination would you recommend for a similar activity?</th>
                                <th class="text-left max-height">General comments about the HPE experience</th>
                                <th class="text-left max-height" style="display:none"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php echo $bodyTabla ?>
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
                    <div class="mdl-card__actions text-right">                         
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalBlankPasaporte" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="mdl-card">
                    <div class="mdl-card__supporting-text">
                        <img id="imgBlankDocumento" src="">
                    </div>
                    <div class="mdl-card__actions text-right">                         
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
                "order": [ 18, 'asc' ],
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