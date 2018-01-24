
<!DOCTYPE html>
<html>
<head>
    <title>ODS</title>
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

<nav class="navbar navbar-light bg-faded" role="navigation" style="background-color: rgba(0, 48, 86,1);">

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

<main class="container" class="row" style="max-width:100%;background-color: #ffffff;padding: 28px;">
	<div class="container">
		<h1 align="center" style="font-size: 40px;font-weight: bold; color: #27335d;">Sistema de Gestión de Indicadores para la Gestión de Gobierno Locales y Regionales</h1>
	</div>
	<section class="row" id="div_objetivos_ods" align="justify">

		<?php foreach($dimensiones as $dimension){?>
			<div class="col-md-12">
				<hr>
				<div class="col-md-2 col-xs-4">
					<h1><?php echo $dimension['description']?></h1>
					<!-- <div class="col-md-12"> -->
					
					<!-- </div>  -->
	     		</div>
	     		<div class="col-md-10"> 
	     			<div class="col-md-12" align="center">
			     		<?php foreach($objetivos as $objetivo){
								if($dimension['id'] == $objetivo['dimension']){?>
								<div class="col-md-2" style="max-width: 11%">
									<a href="<?php echo base_url()?>welcome/objetivo/<?php echo $objetivo['id']?>"><img src="<?php echo base_url()?>static/img/S_SDG_Icons-01-<?php echo $objetivo['id']?>.png" width="100%"></a>
								</div>
						<?php }} ?>
					</div>
				</div>
			</div>
		<?php } ?>

	</section>
</main>


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