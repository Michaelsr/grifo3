<?php  
	mysql_connect('localhost','root','');
	mysql_select_db("grifo");
	$sql=mysql_query("SELECT * FROM cliente");
?>
<div class="row">
		<div class="col-sm-12">
			<table class="table table-striped table-bordered table-hover">
			<tr>
				<th>Nro.</th>
				<th>Nombres</th>
				<th>DNI</th>
				<th>cell</th>
				<th>placa</th>
				<th colspan="2">Opciones</th>
			</tr>
		<?php
			$i=0;
			while($rs=mysql_fetch_array($sql)){
		?>
				<tr>
					<td><?php echo ++$i; ?></td>
					<td><?php echo $rs['nom']; ?></td>
					<td><?php echo $rs['dni']; ?></td>
					<td><?php echo $rs['cell']; ?></td>
					<td><?php echo $rs['placa']; ?></td>
					<td><a href="#"><span class="glyphicon glyphicon-pencil" onclick="editar(<?php echo $rs['id']; ?>)"></span></a></td>
					<td><a href="#"><span class="glyphicon glyphicon-remove" onclick="eliminar(<?php echo $rs['id']; ?>)"></span></a></td>
				</tr>
				
		<?php } ?>
			</table>
		<p>Total registros encontrados: <?=$i?></p>
		</div>
</div>


<script>
	var eliminar=function(codigo){
		if(confirm("¿se va eliminar el registro?")){
			$.post("crus.php",{id:codigo,opt:"del"},function(data){
		      $('#mensaje').html(data).fadeIn('slow').fadeOut(4000);
		      $('#listar').load("listas.php").fadeIn('slow');
		    });
		}
		return false;		
	}

	var editar=function(codigo){
		$('#formulario').load("edis.php",{id:codigo}).slideDown('slow');
	}
	
</script>
