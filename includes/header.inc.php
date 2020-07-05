<header class="section header">

  <div class="menu--hamburger visible-flex-xs">
    <div class="cont">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <div class="container">
    <a href="/index.php" class="header__logo">
      <?php include('images/logo-anticipo.svg'); ?>
    </a>
    <!-- / logo -->

    <div class="modalIngresar">
      <header class="modalIngresar__header">
        <div class="closeModal visible-flex-xs">
          <span><i class="icon icon-back"></i>Volver atrás</span>
        </div>

        <p>Bienvenido a <span>Anticipo.com.ar</span>
        <br/>
        para acceder ingrese sus datos</p>
      </header>

      <div class="modalIngresar__body">
        <form>
          <div class="form-row">
            <div class="col user">
              <input type="text" class="form-control" placeholder="usuario123" />
              <label for="">Usuario</label>
            </div>
          </div>
          <div class="form-row">
            <div class="col pass">
              <input type="password" class="form-control" placeholder="Contraseña" />
              <label for="">Contraseña</label>
            </div>
          </div>

          <button class="btn btn--primary btn--mobileFull">Ingresar</button>
        </form>
      </div>
    </div>
    <!-- modal ingresar -->

    <div class="overflow"></div>
    <!-- MODAL -->

    <div class="header__menu hidden-xs">
      <ul class="header__menu__list">
        <li rel="#anticipo">
          <a href="anticipo.php">
            Pedi tu anticipo
          </a>
        </li>
        <li rel="#faqs">
          <a href="faqs.php">
            Preguntas Frecuentes
          </a>
        </li>
        <li rel="#contacto">
          <a href="contacto.php">Contacto</a>
        </li>
      </ul>

      <span id="btnModalIngresar" class="btn btn--primary" style="display:none">
        Ingresar
      </span>
      <!-- Ingresar -->

      <div class="header__login__desktop hidden-xs">
        <figure>
          <img src="images/avatar@3x.png" alt="Avatar" />
        </figure>

        <span>
          user_01234
        </span>

        <ul class="popOver">
          <li><a href="micuenta.php#estadoCuenta">Estado de cuenta</a></li>
          <li><a href="micuenta.php#misDatos">Mis datos</a></li>
          <li><a href="micuenta.php#misAnticipos">Mi Anticipo</a></li>
          <li><a href="anticipo.php">Solicitar Anticipo</a></li>
          <li><a href="#">Cerrar sesión</a></li>
        </ul>
      </div>
      <!-- logueado -->
      
    </div>
    <!-- / menu - desktop -->

    <div class="headerList__mobile visible-xs">
      <a href="/index.php" class="header__logo">
        <?php include('images/logo-anticipo.svg'); ?>
      </a>
      <!-- / logo -->
      <span class="headerList__mobile__account">
        <figure>
          <?php include('images/user-circle-regular.svg'); ?>
        </figure>
        <span>Mi cuenta</span>

        <div class="close"></div>
      </span>

      <ul class="dropdown visible-xs">
        <li><a href="micuenta.php#estadoCuenta"><span><i class="icon icon-front"></i></span> Estado de cuenta</a></li>
        <li><a href="micuenta.php#misDatos"><span><i class="icon icon-front"></i></span> Mis datos</a></li>
        <li><a href="micuenta.php#misAnticipos"><span><i class="icon icon-front"></i></span> Mi Anticipo</a></li>
        <li><a href="anticipo.php"><span><i class="icon icon-front"></i></span> Solicitar Anticipo</a></li>
      </ul>

      <aside class="separator"></aside>

      <ul class="headerList__mobile__section headerList__mobile__section--first">
        <li><a href="anticipo.php">Pedí tu anticipo</a></li>
        <li><a href="faqs.php">Preguntas Frecuentes</a></li>
        <li><a href="contacto.php">Contacto</a></li>
      </ul>

      <aside class="separator"></aside>

      <ul class="headerList__mobile__section headerList__mobile__section--secondary">
        <li><a href="#">Sobre nosotros</a></li>
        <li><a href="terminos-y-condiciones.php">Términos y Condiciones</a></li>
        <li><a href="#">Políticas de Privacidad</a></li>
      </ul>

      <aside class="separator"></aside>

      <div class="socials">
        <ul class="links">
          <li>
            <a href="#">
              <i class="icon icon-fb-f"></i>
            </a>
          <li>
            <a href="#">
              <i class="icon icon-in"></i> 
            </a>
          </li>
          <li>
            <a href="#">
              <i class="icon icon-fb-m"></i>
            </a>
          </li>
        </ul>
      </div>
      
    </div>
    <!-- / menu - mobile -->

    
  </div>

  <div class="header__login__mobile">
    <figure>
      <img src="images/avatar@3x.png" alt="Avatar" />
    </figure>
  </div>
</header>



