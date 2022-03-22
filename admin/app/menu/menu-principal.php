<ul class="polished-sidebar-menu ml-0 pt-4 p-0 d-md-block">
    <input class="border-dark form-control d-block d-md-none mb-4" type="text" placeholder="Search" aria-label="Search" />
    <div class="nav_list" >
    
</div>

    <li>
        <a href="index.php?page=usuario" class=" <?= activeMenu('usuario') ?>"><span class="oi oi-person"></span> Usuarios</a>
    </li>
    <li >
        <a href="index.php?page=personales" class=" <?= activeMenu('personales') ?>"><span class="oi oi-people"></span> Personales</a>
    </li>
    <li class="">
        <a href="index.php?page=clientes" class=" <?= activeMenu('clientes') ?>"><span class="oi oi-aperture"></span> Clientes</a>
    </li>
    <li><a href="index.php?page=proyectos" class=" <?= activeMenu('proyectos') ?>"><span class="oi oi-project"></span>Proyectos</a></li>
    <li><a href="index.php?page=servicios" class=" <?= activeMenu('servicios') ?>"><span class="oi oi-list"></span>Servicios</a></li>
    <li><a href="index.php?page=planes" class=" <?= activeMenu('planes') ?>"><span class="oi oi-align-center"></span> Planes</a></li>
    <li><a href="index.php?page=seguimiento_personal" class=" <?= activeMenu('seguimiento_personal') ?>"><span class="oi oi-arrow-circle-right"></span> Seguimiento Personal</a></li>
    <li><a href="index.php?page=seguimiento_proyecto" class=" <?= activeMenu('seguimiento_proyecto') ?>"><span class="oi oi-arrow-thick-right"></span> Seguimiento Proyecto</a></li>
    <li><a href="index.php?page=cotizaciones" class=" <?= activeMenu('cotizaciones') ?>"><span class="oi oi-key"></span>Cotizaciones</a></li>
    <li><a href="index.php?page=consulta_servicio" class=" <?= activeMenu('consulta_servicio') ?>"><span class="oi oi-laptop"></span> Consulta Servicio</a></li> 
    <li><a href="index.php?page=consultas" class=" <?= activeMenu('consultas') ?>"><span class="oi oi-globe"></span> Consultas</a></li>
   
</ul>

<?php

function activeMenu($opcion_menu){
    if(isset($_GET['page']) && $opcion_menu==$_GET['page']){
        return "active text-info";
    }else{
        return " text-primary";
    }
}
