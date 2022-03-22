 <!-- <?php
session_start();
include "app/items/variables.php";
if (!isset($_SESSION['token-usuario'])) {
    header('Location: login.php');
    exit;
}
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/css/estilo.css">
    <link rel="shortcut icon" type="image/icon" href="assets/imagenes/salon-de-belleza-el-ayudante.png" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body id="body-pd">
    <!-- <header class="header shadow-sm" style="height: 48px;" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle" style="color: #ffad01"></i> </div>
        <div class="dropdown ">
            <div class="admin" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            </div>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item text-danger" href="#" onclick="cerrar_session()"><i class='bx bxs-exit bx-flashing fs-3'></i> CERRAR SESION</a></li>
            </ul>
        </div>
    </header>
     -->
    <div class="height-100">
        <?php
        include "app/items/DB.php";
        if (isset($_GET["page"])) {
            $page = $_GET["page"];
            if (file_exists("app/pages/" . $page . '.php')) {
                include "app/pages/" . $page . '.php';
            }
        } else {
            include "app/pages/usuario.php";
        }
        ?>
    </div>
    <script src="assets/js/script.js"></script>
    <script>
        function cerrar_session() {
            fetch('<?= $_dominio ?>sistema/app/ajax/ajax.app.cerrar.php')
                .then(response => response.text())
                .then(data => {
                    window.location = 'login.php'
                })
        }
    </script>
</body>

</html>