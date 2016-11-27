<?php  
  mysql_connect('localhost','root','');
  mysql_select_db("grifo");
  $id=$_REQUEST['id'];
  $sql=mysql_query("SELECT * FROM boletaf WHERE id=$id");
  $rs=mysql_fetch_array($sql);
?>
<h2>Lista de clientes</h2>
<div class="panel panel-default">
  <div class="panel-body">
  <form role="form" action="crud.php" method="post" id="frm">
    <div class="form-group">
      <label>nombres</label>
      <input type="text" class="form-control" name="nom" value="<?=$rs['nom']?>">
    </div>
    <div class="form-group">
      <label>Número de DNI</label>
      <input type="number" class="form-control" name="dni" value="<?=$rs['dni']?>">
    </div>
    <div class="form-group">
      <label>cell</label>
      <input type="number" class="form-control" name="cell" value="<?=$rs['cell']?>">
    </div>
    <div class="form-group">
      <label>placa</label>
      <input type="text" class="form-control" name="placa" value="<?=$rs['placa']?>">
    </div>
    <input type="hidden" name="opt" value="edit">
    <input type="hidden" name="id" value="<?=$id?>">
    <button type="button" class="btn btn-success" id="guardar">Actualizar</button>
    <button type="button" class="btn btn-default" id="cerrar">Cerrar</button>
</form>
  </div>
</div>


<script>

    $('#cerrar').click(function(){
    $('#formulario').slideUp('slow');
  });
  $('#guardar').click(function(){
    $.post( "crus.php", $("#frm").serialize(),function(data){
      $('#mensaje').html(data).fadeIn('slow').fadeOut(4000);
      $('#formulario').slideUp('slow');
      $('#listar').load("listas.php").fadeIn('slow');
    });
  });
</script>





