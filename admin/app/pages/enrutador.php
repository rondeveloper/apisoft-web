<?php
if (isset($_GET["page"])) {
    $page = $_GET["page"];
    if (file_exists("app/pages/" . $page . '.php')) {
        include "app/pages/" . $page . '.php';
    }
} else {
    include "app/pages/usuario.php";
}
