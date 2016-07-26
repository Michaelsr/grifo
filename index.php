<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LT Trabajadores</title>
	<link href="resources/css/bootstrap.min.css" rel="stylesheet">
	<link href="resources/miestilo.css" rel="stylesheet">
</head>
<body background="http://www.publicdomainpictures.net/pictures/40000/velka/raindrops-on-the-green-background.jpg">
<h1><u>Lista de Trabajadores</u></h1>
<div class="container">	
	
	<div class="row">
		<div class="col-sm-12" >
			<button type="button" class="btn btn-primary btn-lg" id="nuevo">Nuevo Trabajador</button>
		</div>
	</div>
	<div id="mensaje"></div>


	<div class="row">
		<div class="col-sm-6">
			<div id="formulario" style="display: none;"></div>
		</div>
	</div>



	<div class="row">
		<div class="col-sm-12">
			<div id="listar" style="display: none;"></div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		$('#listar').load("list.php").fadeIn('slow');
		$('#nuevo').click(function(){
			$('#formulario').load("add.php").slideDown('slow');
		});
	});
</script>

**************************************************************************
<h1><u>Lista de facturas</u></h1>
<div class="alamcen">
	
	<div class="row">
		<div class="col-sm-12" >
			<button type="button" class="btn btn-primary btn-lg" id="nuevo1">factura</button>
		</div>
	</div>
	<div id="mensaje1"></div>


	<div class="row">
		<div class="col-sm-6">
			<div id="formulario1" style="display: none;"></div>
		</div>
	</div>



	<div class="row">
		<div class="col-sm-12">
			<div id="listar1" style="display: none;"></div>
		</div>
	</div>

</div>
	<script src="resources/js/jquery.min.js"></script>
    <script src="resources/js/bootstrap.min.js"></script>
    <script type="text/javascript"></script>
</body>
</html>



<script>
 	$(document).ready(function(){
 		$('#listar1').load("list2.php").fadeIn('slow');
 		$('#nuevo1').click(function(){
			$('#formulario1').load("add2.php").slideDown('slow');
		});
});
</script>






