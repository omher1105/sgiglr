
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

<main class="row" class="row" style="max-width:100%;background-color: #ffffff;padding: 28px;">
	<div class="container">
		<h1 align="center" style="font-size: 40px;font-weight: bold; color: #27335d;">Sistema de Gestión de Indicadores para la Gestión de Gobierno Locales y Regionales</h1>
	</div>
	<hr>
	<div class="container" style="max-width:1553px">
		<div class="col-md-12">
			<div class="col-md-6" style="max-height: 100%">
			    <iframe style="border-radius: 10px;border:1px solid rgba(0, 48, 86,1)" width="600" height="600" src="<?php echo base_url()?>welcome/mapa" allowfullscreen></iframe>
			</div>
			<div class="col-md-6">
				<div class="col-md-12">
					<div class="col-md-3">
						<div style="max-width: 80%">
							<img src="<?php echo base_url()?>static/img/S_SDG_Icons-01-<?php echo $id ?>.png" width="100%">
						</div>
					</div>
					<div class="col-md-3">
						<h2><b><?php echo $dimensiones[0]['description'] ?></b></h2>
					</div>
				</div>

				<div class="col-md-6 form-group" style="margin-top: 20px">
					<label>Seleccione Departamento:</label>
					<select class="form-control"> 
						<option>Amazonas</option>
						<option>Ancash</option>
						<option>Apurimac</option>
						<option>Arequipa</option>
						<option>Ayacucho</option>
						<option>Cajamarca</option>
						<option>Callao</option>
						<option>Cusco</option>
						<option>Huancavelica</option>
						<option>Huanuco</option>
						<option>Ica</option>
						<option>Junin</option>
						<option>La Libertad</option>
						<option>Lambayeque</option>
						<option>Lima</option>
						<option>Loreto</option>
						<option>Madre De Dios</option>
						<option>Moquegua</option>
						<option>Pasco</option>
						<option>Piura</option>
						<option>Puno</option>
						<option>San Martin</option>
						<option>Tacna</option>
						<option>Tumbes</option>
						<option>Ucayali</option>
					</select>
				</div>
				<div class="col-md-12" style="margin-top: 20px">
					<table class="table">
						<thead>
							<tr>
								<th>AMBITO</th>
								<th>INDICADOR</th>
								<th>VALOR</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Nacional</td>
								<td>1.2.1</td>
								<td>25.00</td>
							</tr>
							<tr>
								<td>Departamento</td>
								<td>1.2.1</td>
								<td>15.00</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
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