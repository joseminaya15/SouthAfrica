<!DOCTYPE html>
<html lang="en">
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
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>font-awesome.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>material-icons.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_FONTS?>metric.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>m-p.min.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>style.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>admin.css?v=<?php echo time();?>">
        <link rel="stylesheet"    href="<?php echo RUTA_CSS?>survey.css?v=<?php echo time();?>">
    </head>
    <body>
        <section class="js-section">
            <div class="js-fondo"></div>
            <div class="js-container">
                <div class="js-header--survey">
                    <div class="js-header--left">
                        <img src="<?php echo RUTA_IMG?>logo/logo-hpe-blanco.png">
                    </div>
                    <div class="js-header--right">
                        <img src="<?php echo RUTA_IMG?>logo/logo-aruba-blanco.png">
                    </div>
                </div>
                <div class="js-title__survey">
                    <img src="<?php echo RUTA_IMG?>logo/southafrica.png">
                    <h2>Make it possible with HPE</h2>
                    <p>Your feedback is very important to us, please fill out this survey so we can improve future events.</p>
                </div>
                <div class="js-card__encuesta">
                    <div class="title_survey">
                        <h2>On a scale of 1 to 5 where 1 is totally disagree and 5 is totally agreed, how much do you agree with the following propositions?</h2>
                    </div>
                    <div class="js-encuesta">
                        <div class="js-encuesta__title">
                            <p><strong>1.</strong> The HPE and Aruba producs included in the promo were the most suitable.</p>
                        </div>
                        <div class="js-encuesta__contenido">
                            <div id="pregunta1">
                                <div class="js-number">
                                    <button id="number1-1" data-number="1" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>1</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number1-2" data-number="2" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>2</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number1-3" data-number="3" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>3</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number1-4" data-number="4" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>4</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number1-5" data-number="5" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>5</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-encuesta">
                        <div class="js-encuesta__title">
                            <p><strong>2.</strong> Communications about the promo (announcement, monthly rankings and winners) were clear and transmitted by the most appropriate channels.</p>
                        </div>
                        <div class="js-encuesta__contenido">
                            <div id="pregunta2">
                                <div class="js-number">
                                    <button id="number2-1" data-number="1" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>1</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number2-2" data-number="2" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>2</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number2-3" data-number="3" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>3</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number2-4" data-number="4" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>4</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number2-5" data-number="5" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>5</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-encuesta">
                        <div class="js-encuesta__title">
                            <p><strong>3.</strong> There was a good pre-trip organization.</p>
                        </div>
                        <div class="js-encuesta__contenido">
                            <div id="pregunta3">
                                <div class="js-number">
                                    <button id="number3-1" data-number="1" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>1</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number3-2" data-number="2"  class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>2</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number3-3" data-number="3" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>3</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number3-4" data-number="4" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>4</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number3-5" data-number="5" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>5</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-encuesta">
                        <div class="js-encuesta__title">
                            <p><strong>4.</strong> There was a good organization during the trip.</p>
                        </div>
                        <div class="js-encuesta__contenido">
                            <div id="pregunta4">
                                <div class="js-number">
                                    <button id="number4-1" data-number="1" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>1</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number4-2" data-number="2" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>2</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number4-3" data-number="3" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>3</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number4-4" data-number="4" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>4</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number4-5" data-number="5" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>5</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-encuesta">
                        <div class="js-encuesta__title">
                            <p><strong>5.</strong> The services provided at The Cape Milner Hotel were satisfactory.</p>
                        </div>
                        <div class="js-encuesta__contenido">
                            <div id="pregunta5">
                                <div class="js-number">
                                    <button id="number5-1" data-number="1" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>1</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number5-2" data-number="2" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>2</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number5-3" data-number="3" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>3</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number5-4" data-number="4" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>4</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number5-5" data-number="5" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>5</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-encuesta">
                        <div class="js-encuesta__title">
                            <p><strong>6.</strong> The agenda organized during the stay at The Cape Milner Hotel fulfilled all expectations.</p>
                        </div>
                        <div class="js-encuesta__contenido">
                            <div id="pregunta6">
                                <div class="js-number">
                                    <button id="number6-1" data-number="1" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>1</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number6-2" data-number="2" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>2</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number6-3" data-number="3" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>3</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number6-4" data-number="4" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>4</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number6-5" data-number="5" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>5</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-encuesta">
                        <div class="js-encuesta__title">
                            <p><strong>7.</strong> The services offered at Mabula Game Lodge were satisfactory.</p>
                        </div>
                        <div class="js-encuesta__contenido">
                            <div id="pregunta7">
                                <div class="js-number">
                                    <button id="number7-1" data-number="1" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>1</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number7-2" data-number="2" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>2</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number7-3" data-number="3" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>3</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number7-4" data-number="4" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>4</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number7-5" data-number="5" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>5</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-encuesta">
                        <div class="js-encuesta__title">
                            <p><strong>8.</strong> The agenda organized during the stay at Mabula Game Lodge fulfilled all expectations.</p>
                        </div>
                        <div class="js-encuesta__contenido">
                            <div id="pregunta8">
                                <div class="js-number">
                                    <button id="number8-1" data-number="1" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>1</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number8-2" data-number="2" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>2</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number8-3" data-number="3" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>3</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number8-4" data-number="4" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>4</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number8-5" data-number="5" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>5</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-encuesta">
                        <div class="js-encuesta__title">
                            <p><strong>9.</strong> The shuttle service was adequate (transfer times and driving style).</p>
                        </div>
                        <div class="js-encuesta__contenido">
                            <div id="pregunta9">
                                <div class="js-number">
                                    <button id="number9-1" data-number="1" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>1</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number9-2" data-number="2" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>2</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number9-3" data-number="3" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>3</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number9-4" data-number="4" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>4</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number9-5" data-number="5" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>5</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-encuesta">
                        <div class="js-encuesta__title">
                            <p><strong>10.</strong> The tour guides were quite informed of the subject and were willing to answer all the questions.</p>
                        </div>
                        <div class="js-encuesta__contenido">
                            <div id="pregunta10">
                                <div class="js-number">
                                    <button id="number10-1" data-number="1" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>1</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number10-2" data-number="2" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>2</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number10-3" data-number="3" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>3</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number10-4" data-number="4" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>4</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number10-5" data-number="5" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>5</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-encuesta">
                        <div class="js-encuesta__title">
                            <p><strong>11.</strong> The HPE team was aware of the well-being of all the attendees and was concerned about the correct conduct of all the activities.</p>
                        </div>
                        <div class="js-encuesta__contenido">
                            <div id="pregunta11">
                                <div class="js-number">
                                    <button id="number11-1" data-number="1" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>1</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number11-2" data-number="2" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>2</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number11-3" data-number="3" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>3</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number11-4" data-number="4" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>4</span>
                                    </button>
                                </div>
                                <div class="js-number">
                                    <button id="number11-5" data-number="5" class="mdl-button mdl-js-button mdl-button--icon js-button--number" onclick="savePoint(this.id)">
                                        <span>5</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="title_survey">
                        <h2>Mark Yes or NO the following propositions according to your personal opinion.</h2>
                    </div>
                    <div class="js-encuesta">
                        <div class="js-encuesta__title">
                            <p><strong>12.</strong> The last trip to South Africa is better compared to other HPE incentives.</p>
                        </div>
                        <div class="js-encuesta__contenido">
                            <div id="pregunta12">
                                <div class="js-radio">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question12-1">
                                        <input type="radio" id="question12-1" class="mdl-radio__button" name="options12" value="Si">
                                        <span class="mdl-radio__label">Yes</span>
                                    </label>
                                </div>
                                <div class="js-radio">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question12-2">
                                        <input type="radio" id="question12-2" class="mdl-radio__button" name="options12" value="No">
                                        <span class="mdl-radio__label">No</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-encuesta">
                        <div class="js-encuesta__title">
                            <p><strong>13.</strong> The last trip to South Africa is better than the incentives provided by other companies in the segment.</p>
                        </div>
                        <div class="js-encuesta__contenido">
                            <div id="pregunta13">
                                <div class="js-radio">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question13-1">
                                        <input type="radio" id="question13-1" class="mdl-radio__button" name="options13" value="Si">
                                        <span class="mdl-radio__label">Yes</span>
                                    </label>
                                </div>
                                <div class="js-radio">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question13-2">
                                        <input type="radio" id="question13-2" class="mdl-radio__button" name="options13" value="No">
                                        <span class="mdl-radio__label">No</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-encuesta">
                        <div class="js-encuesta__title">
                            <p><strong>14.</strong> I would participate in a forthcoming incentive activity organized by HPE and Aruba</p>
                        </div>
                        <div class="js-encuesta__contenido">
                            <div id="pregunta14">
                                <div class="js-radio">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question14-1">
                                        <input type="radio" id="question14-1" class="mdl-radio__button" name="options14" value="Si">
                                        <span class="mdl-radio__label">Yes</span>
                                    </label>
                                </div>
                                <div class="js-radio">
                                    <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="question14-2">
                                        <input type="radio" id="question14-2" class="mdl-radio__button" name="options14" value="No">
                                        <span class="mdl-radio__label">No</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="js-encuesta">
                        <div class="js-encuesta__title">
                            <p><strong>15.</strong> What aspects would you change/improve on the HPE Incentive Plan for the next few years?</p>
                        </div>
                        <div class="js-encuesta__contenido">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <textarea class="mdl-textfield__input" type="text" id="aspect"></textarea>
                                <label class="mdl-textfield__label" for="aspect">Aspects</label>
                            </div>
                        </div>
                    </div>
                    <div class="js-encuesta">
                        <div class="js-encuesta__title">
                            <p><strong>16.</strong> Which destination would you recommend for a similar activity?</p>
                        </div>
                        <div class="js-encuesta__contenido">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <textarea class="mdl-textfield__input" type="text" id="destination"></textarea>
                                <label class="mdl-textfield__label" for="destination">Destination</label>
                            </div>
                        </div>
                    </div>
                    <div class="js-encuesta">
                        <div class="js-encuesta__title">
                            <p><strong>17.</strong> General comments about the HPE experience</p>
                        </div>
                        <div class="js-encuesta__contenido">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                <textarea class="mdl-textfield__input" type="text" id="comment"></textarea>
                                <label class="mdl-textfield__label" for="comment">General comments</label>
                            </div>
                        </div>
                    </div>
                    <div class="js-card__encuesta--actions">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" onclick="enviarEncuesta()">Send</button>
                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="ModalEncuesta" tabindex="-1" role="dialog" aria-labelledby="simpleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="mdl-card js-modal__survey">
                        <div class="mdl-card__title">
                            <h2> Muchas gracias por su participaci&oacute;n en el evento</h2>
                            <p>Esperamos que haya recogido la mejor experiencia. Ahora lo invitamos a realizar una pequeña encuesta</p>
                        </div>
                        <div class="mdl-card__supporting-text p-t-0">
                            <div class="col-xs-12 p-0">
                                <div class=" js-input">
                                    <label for="text">Ingrese su correo</label>
                                    <input type="text" id="correReserva" >
                                </div>
                            </div>
                        </div>
                        <div class="mdl-card__actions text-right">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect js-button" onclick="ingresarEncuesta()">Ingresar</button>
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
        <script src="<?php echo RUTA_JS?>Utils.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>login.js?v=<?php echo time();?>"></script>
        <script src="<?php echo RUTA_JS?>survey.js?v=<?php echo time();?>"></script>
    </body>
</html>