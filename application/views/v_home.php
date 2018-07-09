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
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>mdl/material.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap-select/css/bootstrap-select.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>bootstrap/css/bootstrap.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_PLUGINS?>datetimepicker/css/bootstrap-material-datetimepicker.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>metric.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>index.css?v=<?php echo time();?>">
    <link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
</head>
<body>
    <div class="js-header">
        <div class="js-header--container">
            <div class="js-header--left">
                <img class="logo-one" src="<?php echo RUTA_IMG?>logo/logo-hpe-negro.png">
                <img class="logo-two" src="<?php echo RUTA_IMG?>logo/logo-hpe-blanco.png">
            </div>
            <div class="js-header--right">
                <img class="logo-one" src="<?php echo RUTA_IMG?>logo/logo-aruba-negro.png">
                <img class="logo-two" src="<?php echo RUTA_IMG?>logo/logo-aruba-blanco.png">
            </div>
        </div>
    </div>
    <section id="principal">
        <div class="video">
            <video autoplay loop muted>
                <source src="<?php echo RUTA_VIDEO?>video.mp4" type="">
            </video>
        </div>
        <!-- <div class="js-fondo"></div> -->
        <div class="js-container">
            <div class="js-home js-height js-flex">
                <div class="js-contenido">
                    <img src="<?php echo RUTA_IMG?>logo/southafrica.png">
                    <h2>Make it possible with HPE</h2>
                    <p>September 6th to 14th, 2018</p>
                    <div class="js-contenido__buttons">
                        <a href="#register" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect link js-button">REGISTER HERE</a>
                        <a href="#agenda" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect link js-button js-button--default">HOME</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="visa" class="js-section">
        <div class="js-container">
            <h2 class="js-title">VISA INFORMATION</h2>
            <div class="js-information">
                <p>A passport is required for international trips. A valid passport is a government requirement and immigration officials will deny entry to travelers without one.</p>
                <strong>A valid passport must meet these specifications:</strong>
                <ul>
                    <li>Have a valid expiration date more than 6 months from the trip return date</li>
                    <li>Is in good condition and is not frayed or torn</li>
                    <li>Have a minimum of 2 blank pages for Immigration stamps</li>
                </ul>
                <p>These requirements are for a Passport holder from United States of America. If the trip includes connection points through additional countries or you hold a passport from another country, <a href="https://www.us-immigration.com/?referrer=bing-cpc-52871152-us%20visa%20application~118322938440$m=bb-b$g=4199004321-11466653020&utm_source=bing&utm_medium=cpc&utm_campaign=Visa%20-%20SRCH&utm_term=us%20visa%20application&utm_content=%2Bus%20%2Bvisa%20%2Bapplication" target="_blank">click here</a> to visit the American Immigration Center website to verify the passport or visa requirements.</p>
            </div>
        </div>
    </section>
    <section id="register" class="js-section js-white">
        <div class="js-container">
            <div class="js-title">
                <h2>REGISTER</h2>
            </div>
            <div class="panel-group" id="accordion" role="tablist">
                <div class="js-card panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Business info</a>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="js-input">
                                        <label for="text">First Name</label>
                                        <input type="text" id="firstname" onkeypress="return soloLetras(event);" maxlength="50">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="js-input">
                                        <label for="text">Middle Name</label>
                                        <input type="text" id="middlename" onkeypress="return soloLetras(event);" maxlength="50">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="js-input">
                                        <label for="text">Last Name</label>
                                        <input type="text" id="lastname" onkeypress="return soloLetras(event);" maxlength="50">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="js-input">
                                        <label for="text">Company</label>
                                        <input type="text" id="company" >
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="js-input">
                                        <label for="text">Job Title</label>
                                        <input type="text" id="job" >
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="js-input">
                                        <label for="text">Mobile Phone Number</label>
                                        <input type="text" id="mobile" >
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="js-input">
                                        <label for="text">Email</label>
                                        <input type="text" id="email" >
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="js-input">
                                        <label for="text">City</label>
                                        <input type="text" id="city" >
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="js-input">
                                        <label for="text">Country</label>
                                        <input type="text" id="country" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-card panel panel-default">
                    <div class="panel-heading" id="headingTwo">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Personal info</a>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xs col-sm-6 col-md-4">
                                    <div class="js-input">
                                        <label for="text">Passport Number</label>
                                        <input type="text" id="passport" >
                                    </div>
                                </div>
                                <div class="col-xs col-sm-6 col-md-4">
                                    <div class="js-input js-date js-flex">
                                        <input class="js-disabled" type="text" id="issuedate" name="issuedate" maxlength="10" placeholder="Issue date" value="" style="pointer-events: none">
                                        <div class="js-icon">
                                            <button type="button" class="mdl-button mdl-js-button mdl-button--icon">
                                                <i class="mdi mdi-date_range"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs col-sm-6 col-md-4">
                                    <div class="js-input js-date js-flex">
                                        <input class="js-disabled" type="text" id="expiredate" name="expiredate" maxlength="10" placeholder="Expire date" value="" style="pointer-events: none">
                                        <div class="js-icon">
                                            <button type="button" class="mdl-button mdl-js-button mdl-button--icon">
                                                <i class="mdi mdi-date_range"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs col-sm-6 col-md-4">
                                    <div class=" js-input">
                                        <label for="text">Passport Issuing Country</label>
                                        <input type="text" id="issuecountry" >
                                    </div>
                                </div>
                                <div class="col-xs col-sm-6 col-md-4">
                                    <div class="js-input js-select">
                                        <select name="gender" id="gender" title="Gender"> 
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs col-sm-6 col-md-4">
                                    <div class="js-input js-date js-flex">
                                        <input class="js-disabled" type="text" id="birthdate" name="birthdate" maxlength="10" placeholder="Date of birth" value="" style="pointer-events: none">
                                        <div class="js-icon">
                                            <button type="button" class="mdl-button mdl-js-button mdl-button--icon">
                                                <i class="mdi mdi-date_range"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs col-sm-6 col-md-4">
                                     <div class=" js-input">
                                        <label for="text">Nationality</label>
                                        <input type="text" id="nationality" >
                                    </div>
                                </div>
                                <div class="col-xs col-sm-6 col-md-4">
                                    <div class=" js-input">
                                        <label for="text">Country of Residence</label>
                                        <input type="text" id="residence" >
                                    </div>
                                </div>
                                <div class="col-xs col-sm-6 col-md-4">
                                    <div class="js-input">
                                        <label>Do you require a visa invitation letter?</label>
                                        </br>
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
                                          <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
                                          <span class="mdl-radio__label">Yes</span>
                                        </label>
                                        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
                                          <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
                                          <span class="mdl-radio__label">No</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-xs col-sm-6 col-md-4">
                                    <div class="js-input js-select">
                                        <select name="seating" id="seating" title="Seating Preference"> 
                                            <option value="Aisle">Aisle</option>
                                            <option value="Window">Window</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs col-sm-6 col-md-4">
                                    <div class="js-input js-select">
                                        <select name="shirt" id="shirt" title="Shirt or T-Shirt Size"> 
                                            <option value="Small">Small</option>
                                            <option value="Medium">Medium</option>
                                            <option value="Large">Large</option>
                                            <option value="X-Large">X-Large</option>
                                            <option value="XX-Large">XX-Large</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="js-card panel panel-default">
                    <div class="panel-heading " id="headingFour">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Emergency Contact</a>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="js-input">
                                        <label for="text">Contact Name</label>
                                        <input type="text" id="contact" >
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="js-input">
                                        <label for="text">Contact Phone Number</label>
                                        <input type="text" id="phone" >
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="js-input">
                                        <label for="text">Their relationship to you</label>
                                        <input type="text" id="relationship" >
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="js-input">
                                        <label for="text">Additional Specifications (i.e.: Special diet, extra leg room needed, etc)</label>
                                        <input type="text" id="specifications" >
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
            <div class="js-section--button text-right">
                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button" onclick="sendInformation()">Send</button>
            </div>
            <div id="confirmation" class="js-confirmation">
                <h2>Congratulations!</h2>
                <p>We have received all your information to manage your prize. Shortly we will contact you for more details.</p>
                <p>Prepare suitcases and enjoy the adventure!</p>
            </div>
        </div>
    </section>
    <footer class="js-section">
        <div class="js-container text-center">
            <p>&copy;Copyright 2018 Hewlett Packard Enterprice Development LP</p>
        </div>
    </footer>
    <script src="<?php echo RUTA_JS?>jquery-3.2.1.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jquery-1.11.2.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap/js/bootstrap.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/bootstrap-select.min.js?v=<?php echo time();?>"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-dropdown/2.0.3/jquery.dropdown.min.js"></script>
    <script src="<?php echo RUTA_PLUGINS?>bootstrap-select/js/i18n/defaults-es_ES.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>mdl/material.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>moment/moment.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>datetimepicker/js/bootstrap-material-datetimepicker.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_PLUGINS?>toaster/toastr.min.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jsmenu.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>jsindex.js?v=<?php echo time();?>"></script>
    <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
    <script type="text/javascript">
        initButtonCalendarDays('issuedate');
        initButtonCalendarDays('expiredate');
        initButtonCalendarDays('birthdate');
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
            $('select').selectpicker('mobile');
        } else {
            $('select').selectpicker();
        }
        // $(window).load(function() {
        //     var URLactual = window.location;
        //     if(URLactual['href'] != 'http://www.marketinghpe.com/microsite/ecb/'){
        //         location.href = 'http://www.marketinghpe.com/microsite/ecb/home';
        //     }
        // }); 
    </script>
</body>
</html>