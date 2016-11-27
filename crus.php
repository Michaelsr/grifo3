<?php
	mysql_connect('localhost','root','');
	mysql_select_db("grifo");

	$opt=$_REQUEST["opt"];

	if($opt=="add"){
		$nom=$_REQUEST["nom"];
		$dni=$_REQUEST["dni"];
		$cel=$_REQUEST["cell"];
		$dir=$_REQUEST["placa"];


		

		mysql_query("INSERT INTO cliente values('','$nom','$dni','$cel','$dir')");
		echo "Los datos del trabajdor se ingresaron perfectamente";
	}
	
	if($opt=="del"){
		$id=$_REQUEST["id"];
		mysql_query("DELETE FROM cliente WHERE id=$id");
		echo "se  elimino al cliente";
	}

	if($opt=="edit"){
		$nom=$_REQUEST["nom"];
		$dni=$_REQUEST["dni"];
		$cel=$_REQUEST["cell"];
		$dir=$_REQUEST["placa"];

		mysql_query("UPDATE cliente SET nom='$nom',dni='$dni',cell='$cell',placa='$dir' WHERE id=$id");
		echo "Registro actualizado satistactoriamente";
	}

?>