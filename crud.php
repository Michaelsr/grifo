<?php
	mysql_connect('localhost','root','');
	mysql_select_db("grifo");

	$opt=$_REQUEST["opt"];

	if($opt=="add"){
		$nom=$_REQUEST["nombre"];
		$app=$_REQUEST["apellidop"];
		$apm=$_REQUEST["apellidom"];
		$dni=$_REQUEST["dni"];
		$cel=$_REQUEST["celular"];
		$dir=$_REQUEST["direccion"];
		$pus=$_REQUEST["puesto"];
		$hor=$_REQUEST["horario"];
		

		mysql_query("INSERT INTO trabajador values('','$nom','$app','$apm','$dni','$cel','$dir','$pus','$hor')");
		echo "Los datos del trabajdor se ingresaron perfectamente";
	}
	
	if($opt=="del"){
		$id=$_REQUEST["id"];
		mysql_query("DELETE FROM trabajador WHERE id=$id");
		echo "se  elimino al trabajador";
	}

	if($opt=="edit"){
		$nom=$_REQUEST["nombre"];
		$app=$_REQUEST["apellidop"];
		$apm=$_REQUEST["apellidom"];
		$dni=$_REQUEST["dni"];
		$cel=$_REQUEST["celular"];
		$dir=$_REQUEST["direccion"];
		$pus=$_REQUEST["puesto"];
		$hor=$_REQUEST["horario"];

		mysql_query("UPDATE trabajador SET nombre='$nom',apellidop='$app',apellidom='$apm',dni='$dni',celular='$cel',direccion='$dir',puesto='$pus',horario='$hor' WHERE id=$id");
		echo "Registro actualizado satistactoriamente";
	}

***********************************************************************************************

	$opt=$_REQUEST["opt"];

	if($opt=="add"){
		$idc=$_REQUEST["id_cliente"];
		$nom=$_REQUEST["nombre"];
		$dni=$_REQUEST["dni"];
		$cel=$_REQUEST["celular"];
		$des=$_REQUEST["descripcion"];
		$ruc=$_REQUEST["ruc"];
		

		mysql_query("INSERT INTO trabajador values('','$idc','$nom','$dni','$cel','$des','$ruc')");
		echo "Los datos del trabajdor se ingresaron perfectamente";
	}
	
	if($opt=="del"){
		$id=$_REQUEST["id"];
		mysql_query("DELETE FROM trabajador WHERE id=$id");
		echo "se  elimino al trabajador";
	}

	if($opt=="edit"){
		$idc=$_REQUEST["id_cliente"];
		$nom=$_REQUEST["nombre"];
		$dni=$_REQUEST["dni"];
		$cel=$_REQUEST["celular"];
		$des=$_REQUEST["descripcion"];
		$ruc=$_REQUEST["ruc"];

		mysql_query("UPDATE trabajador SET  id_cliente='$idc',nombre='$nom',dni='$dni',celular='$cel',descripcion='$des',ruc='$ruc' WHERE id=$id");
		echo "Registro actualizado satistactoriamente";
	}



?>

