<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <link href="resources/miestilo.css" rel="stylesheet">
	<title>imprimir</title>
</head>
<body>
<div class="panel panel-default" id="imprimir" >
  <div class="panel-body"> 
  <form role="form" action="crud.php" method="post" id="frm">   
                <h1>Factura</h1>
                <div class="form-group">
                    <label for="name">Nambre y apellidos</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="cell">celular</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="produc">producto</label>
                    <input type="text" class="form-control" >
            	</div>
            	   <div class="form-group">
                    <label for="produc">total</label>
                    <input type="text" class="form-control" >
            	</div >
            	   <div>
                    <label for="produc">subtotal</label>
                    <input type="text" class="form-control"  >
            	</div>
                <div class="form-group">
                    <label for="msg">descripcion</label>
                    <textarea id="text"></textarea>
                </div>
    <div class="button">
        <button type="submit">imprimir</button>
    </div>
</form>
 </div>
</div>
  <a id="atras" href="factura.php"><div class="col-sm-12" ><button type="button" class="btn btn-primary btn-lg">ATRAS</button></div></a>
</body>
</html>
