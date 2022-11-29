<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar P L-O-D</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
        <span class="fs-4">Licuadoras Y Ollas D &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
      </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="btn btn-outline-info" href="">Estadisticas</a>
        </li>&nbsp;&nbsp;
        <li class="nav-item">
          <a class="btn btn-outline-info" href="Ventas.php">Ventas</a>
        </li>&nbsp;&nbsp;
        <li class="nav-item">
          <a class="btn btn-outline-info" href="Productos.php">Productos</a>
        </li>&nbsp;&nbsp;
        <li class="nav-item">
          <a class="btn btn-info" href="Agregar Producto.php">Agregar Productos</a>
        </li>&nbsp;&nbsp;
        <li class="nav-item">
          <a class="btn btn-outline-info" href="Eliminar Producto.php">Eliminar Producto</a>
        </li>&nbsp;&nbsp;
        <li class="nav-item">
          <a class="btn btn-outline-info" href="Editar Productos.php">Editar Productos</a>
        </li>&nbsp;&nbsp;		  
        <li class="nav-item">
          <a class="btn btn-outline-info" href="Cotizacion.php">Cotizar</a>
        </li>
    </div>
  </div>
</nav>
		

	
	
    <body>
<p>&nbsp;</p>
          <form id="form1" name="form1" method="post" action="">
            <h1 align="center" class="Estilo6"><strong><em>Sistema De Informacion Manejo De Inventario</em></strong></h1>
            <h3 align="center" class="Estilo6"><strong><em>L-O-D: Registro De Productos Que Ingresan Al Inventario </em></strong></h3>
            <h3 align="center" class="Estilo6"><em>Medellin - Antioquia</em></h3>
            <p align="center" class="Estilo6"><br />
              * * * * BIENVENIDO * * * *</p>
			  
            <p align="center" class="Estilo6">&nbsp;</p>
            <p align="center" class="Estilo6">Digita Id Del Producto A Cotizar O Escriba El Nombre Del Producto Para Buscarlo</p>
			  
            <table width="100%" border="0" align="center" bordercolor="#99FFFF">
              <tr>
<td width="20%">
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="floatingInput" placeholder="Nombre Del Producto" name="NombreP" maxlength="80" required="required">
  <label for="floatingInput">Nombre Del Producto</label>
</div>
</td>
<td width="20%">
<div class="form-floating mb-3">
  <input type="number" class="form-control" id="floatingInput" placeholder="Cantidad De Producto Ingresado" name="Cantidad" maxlength="4" required="required">
  <label for="floatingInput">Cantidad De Producto Ingresado</label>
</div>
</td>
<td width="15%">
<div class="form-floating mb-3">
  <input type="number" class="form-control" id="floatingInput" placeholder="Valor Con El Que Ingresa" name="ValorI" maxlength="7" required="required">
  <label for="floatingInput">Valor Con El Que Ingresa</label>
</div>
</td>				  
<td width="17%">
<div class="form-floating mb-3">
  <input type="number" class="form-control" id="floatingInput" placeholder="Valor Con El Que Se Vendera" name="ValorV" maxlength="7" required="required">
  <label for="floatingInput">Valor Con El Que Se Vendera</label>
</div>
</td>				  				  
<td width="20%">
<div class="form-floating mb-3">
  <input type="number" class="form-control" id="floatingInput" placeholder="Porcentaje De Descuento Si Aplica" name="Descuento" maxlength="3" required="required">
  <label for="floatingInput">Porcentaje De Descuento Si Aplica</label>
</div>
				  </td></tr></table>				  				  
  

            <p align="center" class="Estilo8"></p>
            <p align="center" class="Estilo5">
              <label>
              <input type="submit" name="Submit" class="btn btn-info btn-outline btn-lg" value="Registrar Producto" />
              </label>
</p>
            <p class="Estilo5">&nbsp;</p>
				  <span class="Estilo5"></form>
				
	<?php

//Conexion Mysql Y Base De Datos
$mysqli = new mysqli('localhost', 'root', '', 'licuadoras_y_ollas_d2');
$mysqli->set_charset("utf8");
                  
				
              //consulta sql
				  
			  if( isset($_POST['ValorI'])==0)
				 echo"<br>";
			  else 
			  {
              
              $NombreP = $_POST['NombreP'];
              $Cantidad = $_POST['Cantidad'];
              $ValorI = $_POST['ValorI'];
              $ValorV = $_POST['ValorV'];
              $Descuento = $_POST['Descuento'];				  
				  
              $Registro = $mysqli->query("INSERT INTO `productos` (`IdProducto`, `NombreProducto`, `Cantidad`, `ValorIngreso`, `Descuento`, `ValorVenta`) VALUES (NULL, '$NombreP', '$Cantidad', '$ValorI', '$Descuento', '$ValorV')");
				    
              if($Registro==FALSE)
              echo "<br /> * * * * Hay Errores En La Consulta Sql* * * * </p> <p align=center class=Estilo6>";
              else
              echo "<center> * * * * Se Muestran Los Detalles Con Que Ingresa El Producto $NombreP * * * * </center><p><p></span>";         
 ?>
								
          <form align="center" id="form1" name="form1" method="post" action="">		  

			  
<table width="70%" align="center" border="0" bordercolor="#99FFFF">
  <tbody>
    <tr>
	  <td width="10%"><div class="form-floating mb-3">
  <input type="text" class="form-control" name="Descuento" value="<?php echo"Codigo"; ?>" readonly="readonly">
  <label for="floatingInput">Id Producto</label>
</div></td>
      <td width="20%"><div class="form-floating mb-3">
  <input type="text" class="form-control" name="Codigo" value="<?php echo"$NombreP"; ?>" readonly="readonly">
  <label for="floatingInput">Nombre Producto</label>
</div></td>
      <td width="10%"><div class="form-floating mb-3">
  <input type="text" class="form-control" name="Nombre" value="<?php echo"$Cantidad"; ?>" readonly="readonly">
  <label for="floatingInput">Cantidad</label>
</div></td>
      <td width="11%"><div class="form-floating mb-3">
  <input type="text" class="form-control" name="Disponible" value="<?php echo"$ $ValorI"; ?>" readonly="readonly">
  <label for="floatingInput">Valor Ingreso</label>
</div></td>
      <td width="12%"><div class="form-floating mb-3">
  <input type="text" class="form-control" name="Cantidad" value="<?php echo"$ $ValorV"; ?>" readonly="readonly">
  <label for="floatingInput">Valor De Venta</label>
</div></td>
      <td width="9%"><div class="form-floating mb-3">
  <input type="text" class="form-control" name="Valor" value="<?php echo"$Descuento %"; ?>" readonly="readonly">
  <label for="floatingInput">Descuento</label>
</div></td>
    </tr>
  </tbody>
</table>
			  	</form> <?php } ?>
				
				
				
				
				
				
				
				
				
				
				
			
				
				
				
				
				
				
				
				
				
				<?php
				
				/*
				
              //consulta sql
              
              $Cantidad = $_POST['Cantidad'];
              $Codigo = $_POST['Codigo'];
              $sql = $mysqli->query("INSERT INTO `ventas` (`IdVenta`, `IdUserV`, `IdProductoV`, `NombreCliente`, `Cedula`, `Correo`, `Direccion`, `Cantidad`, `ValorUnicoV`, `Descuento`, `ValorTotal`, `Ganancia`, `Fecha`, `Hora`) VALUES (NULL, '1', '$Codigo', 'Comprador uno', '12345677', 'compradoruno@gmail.com', 'Gambita', '$Cantidad', (SELECT productos.ValorVenta FROM `productos` WHERE productos.IdProducto = $Codigo), (SELECT productos.Descuento FROM `productos` WHERE productos.IdProducto = $Codigo), (((SELECT productos.ValorVenta FROM `productos` WHERE productos.IdProducto = $Codigo)*$Cantidad)-(((((SELECT productos.ValorVenta FROM `productos` WHERE productos.IdProducto = $Codigo)*$Cantidad)*(SELECT productos.Descuento FROM `productos` WHERE productos.IdProducto = $Codigo))/100))), (((SELECT productos.ValorVenta FROM `productos` WHERE productos.IdProducto = $Codigo)-((((SELECT productos.ValorVenta FROM `productos` WHERE productos.IdProducto = $Codigo)*(SELECT productos.Descuento FROM `productos` WHERE productos.IdProducto = $Codigo)/100)))-((SELECT productos.ValorIngreso FROM `productos` WHERE productos.IdProducto = $Codigo))))*$Cantidad, current_timestamp(), current_timestamp());");

              $AM = $mysqli->query("UPDATE `productos` SET `Cantidad` = (SELECT productos.Cantidad FROM `productos` WHERE productos.IdProducto = $Codigo)-$Cantidad WHERE `productos`.`IdProducto` = $Codigo;");
			  
              if($sql==FALSE)
              echo "<br /> * * * * Hay Errores En La Consulta Sql* * * * </p><p align=center class=Estilo6>";
              else
              echo "<br /> * * * * Ha Sido Registrado El Codigo $Codigo * * * * </p> <p align=center class=Estilo6>";
              
*/
            
         
			//cerrar la conexión
            @mysqli_close ($mysqli);
				?>
                 

</html>




