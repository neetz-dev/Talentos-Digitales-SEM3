<?php
  $session = session();
  $nombre = $session->get('nombre');
  $perfil = $session->get('perfil_id');
?>

<!-- barra de navegacion --> 

<nav class="navbar navbar-expand-lg  bg-dark ">
  <div class="container-fluid">
  	<div class="navbar-header">
    <a class="navbar-brand me-auto barra  " href="<?php echo ('inicio')?>">
    	<!-- logo/marca de la empresa -->
    	<img src="<?php echo ('assets/img/logo_TD.png')?>" alt="marca" width="75" height="30" class="img-fluid"/>

    	<!-- logo/marca de la empresa -->
    </a>
</div>
    <button class="navbar-toggler bg-white" type="button  " data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>
    
    <!--If user is Admin-->
    <?php if($perfil == 1): ?>
      <button type="button" class="btn btn-primary active">Admin: <?= $nombre ?></button>

    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item ">
          <a class="nav-link active text-white " aria-current="page" href="quienes_somos">Quienes Somos</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white" href="acerca_de">acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="registrarse">registrarse</a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link text-white " href="login">login</a>
        </li>-->
        <li class="nav-item">
          <a class="nav-link text-white " href="<?php echo('logout'); ?>">Cerrar Sesión</a>
        </li>

        <!----------------------->


        <!--If user is Costumer-->
        <?php elseif($perfil == 2): ?>
          <button type="button" class="btn btn-dark active">Cliente: <?= $nombre ?></button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
            <li class="nav-item ">
              <a class="nav-link active text-white " aria-current="page" href="quienes_somos">Quienes Somos</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white" href="acerca_de">acerca de</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white " href="<?php echo('logout'); ?>">Cerrar Sesión</a>
            </li>


        <!----------------------->

        <!--Users not logged-->
          <?php else: ?>
          <button type="button" class="btn btn-secondary active">Visitante</button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
            <li class="nav-item ">
              <a class="nav-link active text-white " aria-current="page" href="quienes_somos">Quienes Somos</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link text-white" href="acerca_de">acerca de</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="registrarse">registrarse</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white " href="login">login</a>
            </li>

        <!----------------------->


        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Redes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://www.facebook.com/">Facebook</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="https://www.instagram.com/">instagram</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="https://twitter.com/home">Twitter</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="buscar">
        <input class="form-control me-2" type="search" placeholder="buscar" aria-label="Search">
        <button class="btn btn-outline-secondary" type="submit">Buscar</button>
      </form>

      <?php endif;?>

    </div>
  </div>
</nav>

<!-- barra de navegacion --> 