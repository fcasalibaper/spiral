<header class="section header">

  <div class="menu--hamburger visible-flex-xs">
    <div class="cont">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div class="container">
    <a href="/index.php" class="header__logo"><?php include("./images/logo-spiral.svg"); ?></a>
    
    <!-- / logo -->

    <div class="header__menu hidden-xs">
      <ul class="header__menu__list">
        <li rel="#funcionalidades">
          <a href="funcionalidades.php">
            Funcionalidades
          </a>
        </li>
        <li rel="#clientes">
          <a href="clientes.php">
            Clientes
          </a>
        </li>
        <li rel="#contacto">
          <a href="contacto.php">Contacto</a>
        </li>
      </ul>
      
      <ul class="header__menu__list__login">
        <!-- country selector -->
        <?php include("includes/countrySelector.inc.php"); ?>

        <a href="ingresar.php" class="btn btn--primary btn--ingresar">
          <span>Ingresar</span>
          <i class="icon icon-login-arrow"></i>
        </a>
      </ul>
      <!-- Ingresar -->
    </div>
    <!-- / menu - desktop -->
    
    <ul class="header__menu__list__login visible-xs">
      <a href="ingresar.php" class="btn btn--primary btn--ingresar">
        <span>Entrar</span>
        <i class="icon icon-login-arrow"></i>
      </a>
    </ul>
    <!-- / btn entrar - mobile -->

    <div class="headerList__mobile visible-xs">


      <ul class="headerList__mobile__section headerList__mobile__section--first">
        <li><a href="funcionalidades.php">Funcionalidades</a></li>
        <li><a href="clientes.php">Clientes</a></li>
        <li><a href="contacto.php">Contacto</a></li>
      </ul>

      <aside class="separator"></aside>

      <ul class="headerList__mobile__section headerList__mobile__section--secondary">
        <li><a href="#">Sobre nosotros</a></li>
        <li><a href="terminos-y-condiciones.php">Términos y Condiciones</a></li>
        <li><a href="#">Políticas de Privacidad</a></li>
      </ul>

      <div class="separator"></div>

      <div class="socials visible-flex-xs">
        <a href="#">
          <i class="icon icon-linkedin"></i>
        </a>
        <a href="#">
          <i class="icon icon-yt"></i>
        </a>
        <a href="#">
          <i class="icon icon-insta"></i>
        </a>
      </div>
      
    </div>
    <!-- / menu - mobile -->


    
  </div>
</header>


