<?php
include 'variables.php';
?>
<header>
  <div class="dropdown header-modulos">
    <div class="empresa" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">APISOFT
    </div>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
      <?php
      if (isset($_GET['tog'])) {
      ?>
        <li>
          <a class="dropdown-item text-primary" href="<?= $_dominio ?>admin/index.php" type="button" class="btn btn-primary btn-lg px-5"><i class='bx bx-cog bx-flashing fs-3'></i> Administrador de Usuario </a>
        </li>
        <li>
          <a class="dropdown-item text-danger" href="#" onclick="cerrar_session()"><i class='bx bxs-exit bx-flashing fs-3'></i> CERRAR SESION</a>
        </li>
      <?php
      } else {
      ?>
        <li>
          <a class="dropdown-item text-primary" href="admin/login.php" type="button" class="btn btn-primary btn-lg px-5"><i class='bx bx-cog bx-flashing fs-3'></i> Administrador de Usuario </a>
        </li>
      <?php
      }
      ?>
    </ul>
    <div class="empresa-text">Implementacion<br />Tecnologia</div>

    <div> <input type="checkbox" id="check">
      <label for="check" class="checkbtn"><i class='bx bx-menu bx-md'></i></label>
      <ul class="modulos">
        <li><a href="index.php?page=access">Inicio</a></li>
        <li><a href="admin/nosotros.php">Nosotros</a></li>
        <li><a href="admin/servicios.php">Servicios</a></li>
        <li><a href="admin/portafolio.php">Portafolio</a></li>
        <li><a href="admin/contacto.php">Contactos</a></li>
      </ul>

    </div>
  </div>
</header>
<script>
        function cerrar_session() {
            fetch('<?= $_dominio ?>admin/app/ajax/ajax.app.cerrar.php')
                .then(response => response.text())
                .then(data => {
                    window.location = 'admin/login.php'
                })
        }
    </script>