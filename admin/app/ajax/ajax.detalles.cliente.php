<?php
include "../items/DB.php";
$codigo_cliente = $_GET['codigo_cliente'];
$consulta_select_cliente = "SELECT * FROM clientes WHERE `id_clientes`='$codigo_cliente'";
$resultado_consulta = mysqli_query($conexion, $consulta_select_cliente);
?>

<h4 class="alert-secondary text-center rounded mb-0 text-secondary">CLIENTE</h4>
<table class="table-sm table-striped table-light table-hover table-bordered">
  <thead>
    
    <tr>
    <th scope="col">Id Cliente</th>
      <th scope="col">Cliente</th>
      <th scope="col">Detalle</th>
      <th scope="col">Contenido Proyecto</th>
      <th scope="col">Detalle de Proyecto</th>
      <th scope="col">Contacto</th>
      <th scope="col">Fecha</th>
      
    </tr>
  </thead>
  <tbody>
    <?php

    while ($datos_cliente = mysqli_fetch_array($resultado_consulta)) {


    ?>
      <tr>
     
        <td class="text-center"><?php echo $datos_cliente['id_clientes']; ?></td>
        <td><?php echo $datos_cliente['cliente']; ?></td>
        <td><?php echo $datos_cliente['detalle']; ?></td>
        <td><?php echo $datos_cliente['contenido_proyecto']; ?></td>
        <td><?php echo $datos_cliente['detalle_de_proyecto']; ?></td>
        <td><?php echo $datos_cliente['contacto']; ?></td>
        <td><?php echo $datos_cliente['fecha']; ?></td>

      </tr>
    <?php 
    }
    ?>
  </tbody>
</table>
<?php
$consulta_select_proyecto = "SELECT * FROM proyectos WHERE `id_cliente`='$codigo_cliente'";
$resultado_consulta_proyecto = mysqli_query($conexion, $consulta_select_proyecto);


?>

<h4 class="alert-secondary text-center rounded mb-0 text-secondary">PROYECTO</h4>
<table class="table-sm table-striped table-light table-hover table-bordered ">
  <thead>
    <tr>
      
      <th scope="col">Id Proyecto</th>
      <th scope="col">Id Cliente</th>
      <th scope="col">Id Encargado</th>
      <th scope="col">Proyecto</th>
      <th scope="col">Presupuesto</th>
      <th scope="col">Duracion Desarrollo Proyecto</th>
      <th scope="col">Fecha Inicio</th>
      <th scope="col">Fecha Presentacion</th>
      <th scope="col">Fecha Entrega</th>
     
    </tr>
  </thead>
  <tbody>
    <?php
   
    while ($datos_proyecto = mysqli_fetch_array($resultado_consulta_proyecto)) {


    ?>
      <tr>
    
        <td class="text-center"><?php echo $datos_proyecto['id_proyecto']; ?></td>
        <td><?php echo $datos_proyecto['id_cliente']; ?></td>
        <td><?php echo $datos_proyecto['id_encargado']; ?></td>
        <td><?php echo $datos_proyecto['proyecto']; ?></td>
        <td><?php echo $datos_proyecto['presupuesto']; ?></td>
        <td><?php echo $datos_proyecto['duracion_desarrollo_proyecto']; ?></td>
        <td><?php echo $datos_proyecto['fecha_inicio']; ?></td>
        <td><?php echo $datos_proyecto['fecha_presentacion']; ?></td>
        <td><?php echo $datos_proyecto['fecha_entrega']; ?></td>       
      </tr>
    <?php 
    }
    ?>
  </tbody>
</table>
  <?php
$consulta_select_servicio = "SELECT * FROM servicios WHERE `id_cliente`='$codigo_cliente'";
$resultado_consulta_servicio = mysqli_query($conexion, $consulta_select_servicio);


?>

<h4 class="alert-secondary text-center rounded mb-0 text-secondary">SERVICIO</h4>
<table class="table-sm table-striped table-light table-hover table-bordered">
  <thead>
    <tr>
     
      <th scope="col">Id Servicio</th>
      <th scope="col">Id Programadores</th>
      <th scope="col">Id Proyecto</th>
      <th scope="col">Id Cliente</th>
      <th scope="col">Servicio</th>
      <th scope="col">Detalles</th>

    </tr>
  </thead>
  <tbody>
    <?php
    while ($datos_servicio = mysqli_fetch_array($resultado_consulta_servicio)) {
  

    ?>
      <tr>
       
        <td class="text-center"><?php echo $datos_servicio['id_servicio']; ?></td>
        <td><?php echo $datos_servicio['id_programadores']; ?></td>
        <td><?php echo $datos_servicio['id_proyecto']; ?></td>
        <td><?php echo $datos_servicio['id_cliente']; ?></td>
        <td><?php echo $datos_servicio['servicio']; ?></td>
        <td><?php echo $datos_servicio['detalles']; ?></td>
      </tr>
    <?php
    }
    ?>
  </tbody>
</table>

<?php
$consulta_select_cotizacion = "SELECT * FROM `cotizaciones` WHERE `id_cliente`='$codigo_cliente'";
$resultado_consulta_cotizacion = mysqli_query($conexion, $consulta_select_cotizacion);


?>

<h4 class="alert-secondary text-center rounded mb-0 text-secondary">COTIZACION</h4>
<table class="table-sm table-striped table-light table-hover table-bordered">
  <thead>
    <tr>
      
      <th scope="col">Id Cotizacion</th>
      <th scope="col">Id Cliente</th>
      <th scope="col">Cotizacion</th>
      <th scope="col">Nombre Empresa</th>
      <th scope="col">Items</th>
      <th scope="col">Descripciones</th>
      <th scope="col">Total Pago</th>
      <th scope="col">Propuesta</th>
    
    </tr>
  </thead>
  <tbody>
    <?php
   
    while ($datos_cotizacion = mysqli_fetch_array($resultado_consulta_cotizacion)) {
    ?>
      <tr>
        
        <td class="text-center"><?php echo $datos_cotizacion['id_cotizacion']; ?></td>
        <td><?php echo $datos_cotizacion['id_cliente']; ?></td>
        <td><?php echo $datos_cotizacion['cotizacion']; ?></td>
        <td><?php echo $datos_cotizacion['nombre_empresa']; ?></td>
        <td><?php echo $datos_cotizacion['items']; ?></td>
        <td><?php echo $datos_cotizacion['descripciones']; ?></td>
        <td><?php echo $datos_cotizacion['total_pago']; ?></td>
        <td><?php echo $datos_cotizacion['propuesta']; ?></td>
        
      </tr>
    <?php 
    }
    ?>
  </tbody>
</table>

<?php
$consulta_select_consulta_servicio = "SELECT * FROM `consulta_servicio` WHERE `id_cliente`='$codigo_cliente'";
$resultado_consulta_consulta_servicio = mysqli_query($conexion, $consulta_select_consulta_servicio);


?>

<h4 class="alert-secondary text-center rounded mb-0 text-secondary">CONSULTA SERVICIO</h4>
<table class="table-sm table-striped table-light table-hover table-bordered">
  <thead>
    <tr>
      
      <th scope="col">id_consulta_servicio</th>
      <th scope="col">id_servicio</th>
      <th scope="col">id_cliente</th>
      <th scope="col">id_proyecto</th>
      <th scope="col">id_programadores</th>
      <th scope="col">id_encargado</th>
      <th scope="col">observacion_costo_servicio</th>
      <th scope="col">estado</th>
    
    </tr>
  </thead>
  <tbody>
    <?php
   
    while ($datos_consulta_servicio = mysqli_fetch_array($resultado_consulta_consulta_servicio)) {
    ?>
      <tr>
        
        <td class="text-center"><?php echo $datos_consulta_servicio['id_consulta_servicio']; ?></td>
        <td><?php echo $datos_consulta_servicio['id_servicio']; ?></td>
        <td><?php echo $datos_consulta_servicio['id_cliente']; ?></td>
        <td><?php echo $datos_consulta_servicio['id_proyecto']; ?></td>
        <td><?php echo $datos_consulta_servicio['id_programadores']; ?></td>
        <td><?php echo $datos_consulta_servicio['id_encargado']; ?></td>
        <td><?php echo $datos_consulta_servicio['observacion_costo_servicio']; ?></td>
        <td><?php echo $datos_consulta_servicio['estado']; ?></td>
        
      </tr>
    <?php 
    }
    ?>
  </tbody>
</table>
