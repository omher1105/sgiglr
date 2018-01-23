<!DOCTYPE html>
<html>
<head>
    <title>Sing - Dashboard</title>
    <link href="<?php echo base_url() ?>/assets/sing/css/application.min.css" rel="stylesheet">
    <!-- as of IE9 cannot parse css files with more that 4K classes separating in two files -->
    <!--[if IE 9]>
        <link href="css/application-ie9-part2.css" rel="stylesheet">
    <![endif]-->
    <link rel="shortcut icon" href="img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
         chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
         https://code.google.com/p/chromium/issues/detail?id=332189
         */
    </script>
</head>
<body style="background-color: #ffffff;">
<!-- <div class="col-12">
		<div class="col-3 col-md-3" style="max-width: 10%;padding-left: 35px;">
			<img src="<?php echo base_url() ?>static/img/logoInei.png" width="100%">
		</div>
		<div class="col-3 col-md-3"></div>
		<div class="col-3 col-md-3"></div>
		<div class="col-3 col-md-3" style="max-width: 35%;" align="right">
			<img src="<?php echo base_url() ?>static/img/ods.png" width="100%">
		</div>
</div> -->
<nav class="navbar navbar-light bg-faded" role="navigation" style="background-color: rgba(0, 48, 86,1);">
    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapsing-navbar">
        &#9776;
    </button>

    <div class="collapse navbar-toggleable-xs" id="collapsing-navbar">   
    	<div style="max-width: 7.5%">
    		<a class="navbar-brand">
	        	<img src="<?php echo base_url() ?>static/img/logoInei.png" width="100%">
	        </a>
    	</div>
        

        
    </div>
    <div class="col-3 col-md-3" style="max-width: 13%;position: fixed;right: 0" align="right">
		<img src="<?php echo base_url() ?>static/img/ods.png" width="100%">
	</div>
</nav>
<main class="content" style="min-height: 0%;background-color: #ffffff;">
	<div class="row">
		<div class="col-6 col-md-6" style="max-width: 35%">
			<img src="<?php echo base_url() ?>static/img/logo.jpeg" width="100%">
		</div>
		<div class="col-6 col-md-6"  style="width: 60%;">
			<h1 style="font-size: 55px;font-weight: bold; color: #27335d;">Sistema de Gestión de Indicadores para la Gestión de Gobierno Locales y Regionales</h1>
			<br><br>
			<p style="font-size: 23px;" align="justify">
				Desde el año 2002 se han venido suscribiendo los denominados “Acuerdos de Gobernabilidad” previos a las elecciones regionales y nacionales con el fin de acordar compromisos entre los candidatos y la ciudadanía , para lograr determinados objetivos de política pública orientados al Desarrollo Humano Integral de nuestro país.
			</p>
			<div class="row">
				<div class="col-9 col-md-9" style="max-width: 100%">
					<img src="<?php echo base_url() ?>static/img/books.png" width="100%">
				</div>
				<div class="col-3 col-md-3" align="center" style="padding-top: 2em">
					<button class="btn btn-primary" style="font-size: 20px;height: 150px;width: 150px;border-radius: 50%;border: 1px solid #27335d;">
					INGRESAR 	
					<i class="glyphicon glyphicon-circle-arrow-right"></i>
					</button>
				</div>
			</div>
		</div>
	</div>
	
</main>
<div style="margin-bottom: 36px"></div>
<footer class="footer" style="line-height: 0.3;  background-color:rgba(0, 48, 86,1);color: #fff " align="center" >
	<br><br><br>
	<p >Instituto Nacional de Estadistica e Informatica</p>
	<p>Av. General Garzon 654-658 Jesús María</p>
	<p>Telefono: 203-2640</p>
	<br>
</footer>

<script src="<?php echo base_url() ?>/assets/sing/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url() ?>/assets/sing/vendor/jquery-pjax/jquery.pjax.js"></script>
<script src="<?php echo base_url() ?>/assets/sing/vendor/tether/dist/js/tether.js"></script>
<script src="<?php echo base_url() ?>/assets/sing/vendor/bootstrap/js/dist/util.js"></script>
<script src="<?php echo base_url() ?>/assets/sing/vendor/bootstrap/js/dist/collapse.js"></script>
<script src="<?php echo base_url() ?>/assets/sing/vendor/bootstrap/js/dist/dropdown.js"></script>
<script src="<?php echo base_url() ?>/assets/sing/vendor/bootstrap/js/dist/button.js"></script>
<script src="<?php echo base_url() ?>/assets/sing/vendor/bootstrap/js/dist/tooltip.js"></script>
<script src="<?php echo base_url() ?>/assets/sing/vendor/bootstrap/js/dist/alert.js"></script>
<script src="<?php echo base_url() ?>/assets/sing/vendor/slimScroll/jquery.slimscroll.js"></script>
<script src="<?php echo base_url() ?>/assets/sing/vendor/widgster/widgster.js"></script>
<script src="<?php echo base_url() ?>/assets/sing/vendor/pace.js/pace.js" data-pace-options='{ "target": ".content-wrap", "ghostTime": 1000 }'></script>
<script src="<?php echo base_url() ?>/assets/sing/vendor/jquery-touchswipe/jquery.touchSwipe.js"></script>
<script src="<?php echo base_url() ?>/assets/sing/js/bootstrap-fix/button.js"></script>

<!-- common app js -->
<script src="<?php echo base_url() ?>/assets/sing/js/settings.js"></script>
<script src="<?php echo base_url() ?>/assets/sing/js/app.js"></script>

<!-- page specific libs -->
<script id="test" src="<?php echo base_url() ?>/assets/sing/vendor/underscore/underscore.js"></script>
<script src="<?php echo base_url() ?>/assets/sing/vendor/jquery.sparkline/index.js"></script>
<script src="<?php echo base_url() ?>/assets/sing/vendor/jquery.sparkline/index.js"></script>
<script src="<?php echo base_url() ?>/assets/sing/vendor/d3/d3.min.js"></script>
<script src="<?php echo base_url() ?>/assets/sing/vendor/jQuery-Mapael/js/jquery.mapael.js"></script>
<script src="<?php echo base_url() ?>/assets/sing/vendor/jQuery-Mapael/js/maps/usa_states.js"></script>
<script src="<?php echo base_url() ?>/assets/sing/vendor/jQuery-Mapael/js/maps/world_countries.js"></script>
<script src="<?php echo base_url() ?>/assets/sing/vendor/bootstrap/js/dist/popover.js"></script>
<script src="<?php echo base_url() ?>/assets/sing/vendor/bootstrap_calendar/bootstrap_calendar/js/bootstrap_calendar.min.js"></script>
<script src="<?php echo base_url() ?>/assets/sing/vendor/jquery-animateNumber/jquery.animateNumber.min.js"></script>

<!-- page specific js -->
</body>
</html>