
<h2>Agregar nuevo cliente</h2>
<div class="panel panel-default" id="dio">
  <div class="panel-body">
  <form role="form" action="crud.php" method="post" id="frm">
    <div class="form-group">
      <label>Nombres</label>
      <input type="text" class="form-control" placeholder="Introduce tus nombres" name="nom" required>
    </div>
    <div class="form-group">
      <label>Número de DNI</label>
      <input type="number" class="form-control" placeholder="Introduce tu DNI" name="dni">
    </div>
    <div class="form-group">
      <label>cell</label>
      <input type="number" class="form-control" placeholder="Introduce tu celular" name="cell">
    </div>
    <div class="form-group">
      <label>placa</label>
      <input type="text" class="form-control" placeholder="Introduce la placa" name="placa">
    </div>
    <input type="hidden" name="opt" value="add">
    <button type="button" class="btn btn-success" id="guardar">Guardar cliente</button>
    <button type="button" class="btn btn-default" id="cerrar">Cerrar</button>
</form>
  </div>
</div>

<script>

   $('#cerrar').click(function(){
    $('#formulario').toggle( "explode");
  });

  $('#guardar').click(function(){
      $.post("crus.php", $("#frm").serialize(),function(data){
        $('#mensaje').html(data).fadeIn('slow').fadeOut(4000);
        $('#formulario').toggle( "explode");
        $('#listar').load("listas.php").fadeIn('slow');
      });
  });
</script>





