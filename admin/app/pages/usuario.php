<?php
  include "app/items/DB.php";
  if (isset($_POST['agregar-usuario'])) {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $consulta_insert_usuario = "INSERT INTO usuarios
    (`usuario`, `password`) 
    VALUES 
    ('$usuario', '$contrasena')";
     $resultado = mysqli_query($conexion, $consulta_insert_usuario);
    if ($resultado) {
  ?>
      <div class="alert alert-success mx-auto w-50 text-center alert-dismissible fade show" role="alert">
        <strong>EXITO!</strong> YA SE AGREGO CORRECTAMENTE
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php
    } else {
    ?>
      <div class='alert alert-danger'>
        HAY UN ERROR: <?= $consulta_insert_usuario . mysqli_error($conexion) ?>.
      </div>
    <?php
    }
  }
  if (isset($_POST['editar-usuario'])) {
    $id_usuario = $_POST['id-usuario'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $consulta_update_usuario = "UPDATE usuarios SET  
    `usuario`='$usuario', `password`='$contrasena'
    WHERE `id_usuario`='$id_usuario' LIMIT 1 ";
    $resultado = mysqli_query($conexion,$consulta_update_usuario);
    if ($resultado) {
    ?>
      <div class="alert alert-success mx-auto w-50 text-center alert-dismissible fade show" role="alert">
        <strong>EXITO!</strong> YA SE ACTUALIZO CORRECTAMENTE
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php
    } else {
    ?>
      <div class='alert alert-danger'>
        HAY UN ERROR: <?= $consulta_update_usuario . mysqli_error($conexion) ?>.
      </div>
  <?php
    }
  }
  if (isset($_POST['eliminar-usuario'])) {
    $id_usuario = $_POST['id-usuario'];
    $consulta_delete_usuario = "DELETE FROM usuarios WHERE `id_usuario`='$id_usuario' LIMIT 1 ";
    $resultado = mysqli_query($conexion,  $consulta_delete_usuario );
    if ($resultado) {
    ?>
      <div class="alert alert-success mx-auto w-50 text-center alert-dismissible fade show" role="alert">
        <strong>EXITO!</strong> YA SE ELIMINO CORRECTAMENTE
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php
    } else {
    ?>
      <div class='alert alert-danger'>
        HAY UN ERROR: <?=$consulta_delete_usuario  . mysqli_error($conexion) ?>.
      </div>
  <?php
    }
  }?>
<div class="d-flex justify-content-between">
    <h4 class="text-primary fw-bolder fs-2 my-0">Usuarios <i class='bx bx-user-check bx-flashing fs-3' ></i></h4>
    <button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="datos_modal_agregar()">
      Agregar Usuario
    </button>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">APISOFT</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="body_modal_agregar">
          
        </div>
      </div>
    </div>
  </div>
  <?php
 $consulta_select_usuario= "SELECT * FROM usuarios ORDER BY `id_usuario` ASC";
$resultado_consulta = mysqli_query($conexion, $consulta_select_usuario);
?>
<hr>
<table id="mytable" class="table table-striped table-light table-hover table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id Usuario</th>
      <th scope="col">Usuario</th>
      <th scope="col">Contrase&ntilde;a</th>
      <th>Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $contar = 1;
    while ($datos_array = mysqli_fetch_array($resultado_consulta)) {
    ?>
      <tr>
        <th scope="row"><?= $contar ?></th>
        <td class="text-center"><?php echo $datos_array['id_usuario']; ?></td>
        <td><?php echo $datos_array['usuario']; ?></td>
        <td><?php echo $datos_array['password']; ?></td>
        <td class="">
          <div class="d-flex ">
          <button onclick="mostrar_datos_modal_editar(<?php echo $datos_array['id_usuario']; ?>)" class="btn btn-outline-info" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-editar">
            <i class='bx bx-edit nav_icon'>Editar</i>
          </button>
          &nbsp;
          <button onclick="mostrar_datos_modal_eliminar(<?php echo $datos_array['id_usuario']; ?>)" class="btn btn-outline-danger" id="btn_editar" type="button" data-bs-toggle="modal" data-bs-target="#modal-eliminar">
            <i class='bx bx-trash nav_icon'>Eliminar</i>
          </button>
         </div>
        </td>
      </tr>
    <?php 
    $contar++;
    }
    ?>
  </tbody>
</table>
<div class="modal fade" id="modal-editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6" id="body_modal_editar"></div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6" id="body_modal_eliminar"></div>
    </div>
  </div>
</div>
<script>
    function mostrar_datos_modal_editar(id_usuario) {
      body_modal_editar = document.getElementById('body_modal_editar')
      fetch('<?=$_dominio?>admin/app/ajax/ajax.usuario.editar.php?codigo_usuario=' + id_usuario)
        .then(response => response.text())
        .then(data => {
          body_modal_editar.innerHTML = data
        })
    }

    function mostrar_datos_modal_eliminar(id_usuario) {
      body_modal_eliminar = document.getElementById('body_modal_eliminar')
      fetch('<?=$_dominio?>admin/app/ajax/ajax.usuario.eliminar.php?codigo_usuario=' + id_usuario)
        .then(response => response.text())
        .then(data => {
          body_modal_eliminar.innerHTML = data
        })
    }

    function datos_modal_agregar() {
      body_modal_agregar = document.getElementById('body_modal_agregar')
      fetch('<?=$_dominio?>admin/app/ajax/ajax.usuario.agregar.php')
        .then(response => response.text())
        .then(data => {
          body_modal_agregar.innerHTML = data
        })
    }
</script>
<script>
  $(document).ready(function() {
    $('#mytable').DataTable();
  });
</script>