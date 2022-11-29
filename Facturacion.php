<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Facturacion L-O-D</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
  </head>
	<link rel="shortcut icon" href="html/images/favicon.bmp">
    

	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
	
    <style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:6;
}

-->

    </style>
<body>


	
	<div class="container py-3" >
	<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
  <div class="container-fluid">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>
        <span class="fs-4">Licuadoras Y Ollas D &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <div class="col-4 text-right">
        <a href="javascript:window.print()">Imprimir</a>
      </div>
    </div>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <div class="col-4 text-right">
        <a href="javascript:history.back()">VolverAtrás</a>
      </div>
    </div>
  </div>
</nav>
		

	
	
    <body>
<p>&nbsp;</p>


<?php
//Conexion Mysql Y Base De Datos
$mysqli = new mysqli('localhost', 'root', '', 'licuadoras_y_ollas_d2');
$mysqli->set_charset("utf8");
                  
				
              //consulta sql
			
              $Codigo = $_POST['Codigo'];
              $Nombre = $_POST['Nombre'];
              $Cantidad = $_POST['Cantidad'];
              $Valor = $_POST['Valor'];		
              $Descuento = $_POST['Descuento'];
              $Valordes = $_POST['Valordes'];		
              $ValorTotal = $_POST['ValorTotal'];
              $NombreC = $_POST['NombreC'];		
              $CC = $_POST['CC'];
              $Direccion = $_POST['Direccion'];		
              $Correo = $_POST['Correo'];
		
		      $TotalSD = ($Cantidad*$Valor);

              $Registro = $mysqli->query("INSERT INTO `ventas` (`IdVenta`, `IdUserV`, `IdProductoV`, `NombreCliente`, `Cedula`, `Correo`, `Direccion`, `Cantidad`, `ValorUnicoV`, `Descuento`, `ValorTotal`, `Ganancia`, `Fecha`, `Hora`) VALUES (NULL, '1', '$Codigo', '$NombreC', '$CC', '$Correo', '$Direccion', '$Cantidad', (SELECT productos.ValorVenta FROM `productos` WHERE productos.IdProducto = $Codigo), (SELECT productos.Descuento FROM `productos` WHERE productos.IdProducto = $Codigo), (((SELECT productos.ValorVenta FROM `productos` WHERE productos.IdProducto = $Codigo)*$Cantidad)-(((((SELECT productos.ValorVenta FROM `productos` WHERE productos.IdProducto = $Codigo)*$Cantidad)*(SELECT productos.Descuento FROM `productos` WHERE productos.IdProducto = $Codigo))/100))), (((SELECT productos.ValorVenta FROM `productos` WHERE productos.IdProducto = $Codigo)-((((SELECT productos.ValorVenta FROM `productos` WHERE productos.IdProducto = $Codigo)*(SELECT productos.Descuento FROM `productos` WHERE productos.IdProducto = $Codigo)/100)))-((SELECT productos.ValorIngreso FROM `productos` WHERE productos.IdProducto = $Codigo))))*$Cantidad, current_timestamp(), current_timestamp());");

              $Editar = $mysqli->query("UPDATE `productos` SET `Cantidad` = (SELECT productos.Cantidad FROM `productos` WHERE productos.IdProducto = $Codigo)-$Cantidad WHERE `productos`.`IdProducto` = $Codigo;");

  
    ?>


<header class="row">
  <div class="logoholder text-center" >
    <img src="assets/img/logo.png">
  </div><!--.logoholder-->

  <div class="me">
    <p>
      <strong>Sistema Web Licuadoras Y Ollas D</strong><br>
      Medellin - Antioquia<br>
      Colombia<br>
      
    </p>
  </div><!--.me-->

  <div class="info">
    <p>
      Web: <a href="">N/A</a><br>
      E-mail: <a href="mailto:licuadorasyollasd@gmail.com">licuadoras@gmail.com</a><br>
      Tel: 3203339697<br>
    </p>
  </div><!-- .info -->

  <div class="bank">
    <p>
      Factura Electronica<br>
      Nit: 12345678 <br>
      Licuadoras Y Ollas<br>
      L-O-D
    </p>
  </div><!--.bank-->

</header>


<div class="row section">

	<div class="col-2">
    <h1>Factura</h1>
  </div><!--.col-->

  <div class="col-2 text-right details">
    <p>
      Fecha Y Hora: <input type="text" class="datePicker" /><br>
      Numero De Factura: <input type="text" value="1234" /><br>
    </p>
  </div><!--.col-->
  
  
  
  <div class="col-2">
    

    <p class="client">
      <strong>Facturar a</strong><br>
      <?php echo"$NombreC"; ?><br>
      <?php echo"C.C: $CC"; ?><br>
	  <?php echo"E-Mail: $Correo"; ?><br>
	  <?php echo"Direccion: $Direccion"; ?>
    </p>
  </div><!--.col-->
  
  
  <div class="col-2">
   

    <p class="client">
      <strong>Tipo De Venta</strong><br>
      Prescencial<br>
    </p>
  </div><!--.col-->

  

</div><!--.row-->

<div class="row section" style="margin-top:-1rem">
<div class="col-1">
	<table style='width:100%'>
    <thead>
	<tr class="invoice_detail">
      <th width="25%" style="text-align">Vendedor</th>
       <th width="25%">Orden de compra </th>
      <th width="20%">Enviar por</th>
      <th width="30%">Términos y condiciones</th>
	 </tr> 
    </thead>
    <tbody>
	<tr class="invoice_detail">
      <td width="25%" style="text-align">Operario Uno</td>
       <td width="25%">#1234 </td>
      <td width="20%">*</td>
      <td width="30%">Pago al contado</td>
	 </tr>
	</tbody>
	</table>
</div>

</div><!--.row-->

<div class="invoicelist-body">
  <table>
    <thead>
      <th width="5%">Código</th>
      <th width="60%">Descripción</th>
      <th width="10%">Cantidad</th>
      <th width="15%">Precio</th>
      <th class="taxrelated">Iva</th>
      <th width="10%">Total</th>
    </thead>
    <tbody>
      <tr>
        <td width='5%'><a class="control removeRow" href="#">x</a> <span><?php echo"$Codigo"; ?></span></td>
        <td width='60%'><span><?php echo"$Nombre"; ?></span></td>
        <td class="amount"><input type="text" value="<?php echo"$Cantidad"; ?>"/></td>
        <td class="rate"><input type="text" value="<?php echo"$Valor"; ?>" /></td>
        <td class="tax taxrelated">0</td>
        <td class="sum"><?php echo"$TotalSD"; ?></td>
      </tr>
    </tbody>
  </table>
</div><!--.invoice-body-->

<div class="invoicelist-footer">
  <table>
    <tr class="taxrelated">
      <td>Descuento: </td>
      <td id="total_tax"><?php echo"$Descuento"; ?></td>
    </tr>
    <tr>
      <td><strong>Total:</strong></td>
      <td id="total_price"><?php echo"$ValorTotal"; ?></td>
    </tr>
  </table>
</div>

<div class="note" contenteditable>
  <h2>Nota:</h2>
</div><!--.note-->

<footer class="row">
  <div class="col-1 text-center">
    <p class="notaxrelated" contenteditable>El monto de la factura no incluye el impuesto sobre las ventas.</p>
    
  </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="assets/bower_components/jquery/dist/jquery.min.js"><\/script>')</script>
<script src="assets/js/main.js"></script>	  
			  
			  
			  
			  
	  
			  
			  
			  
				
	<?php

            
                //cerrar la conexión
            @mysqli_close ($mysqli);
				?>
                 

</html>




