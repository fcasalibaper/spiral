<!DOCTYPE html>
<head>
  <?php include("includes/head.inc.html"); ?>
</head>

<body>
  <div class="cFull">
    <!-- header -->
    <?php include("includes/header.inc.php"); ?>

    <section class="section login hidden-xs">
      <div class="container">
        <header>
          <h3>Ingresar a Spiral</h3>
          <hgroup>
            <p>Estás iniciando sesión en: </p>
            <div class="countrySelector__wrapper countrySelector__wrapper--light">
              <?php include("includes/countrySelector.inc.php"); ?>
            </div>
          </hgroup>
        </header>

        <div class="login__wrapper">
          <div class="col-xs-12 col-sm-6 login__buttons">
            <a href="#" class="btn btn--meli">
              <img src="images/ml.png" alt="Ingresar con Mercado Libre" /> 
              <span>
                Ingresar con Mercado Libre
              </span>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 login__form">
            <form action="" class="forms">
              <div class="form-row col-xs-12">
                <label>¿Ya definiste tu email y contraseña?</label>
                <input type="email" placeholder="E-mail" />
                <input type="password" placeholder="Contraseña" />
              </div>

              <button href="#" type="submit" class="btn btn--fillled btn--filled--blue">
                Ingresar
              </button>

              <a href="#" class="btn btn--link">
                <span>
                  Olvide mi contraseña
                </span>
              </a>
            </form>
          </div>
        </div>

        <span class="login__bajada">
          El ingreso a la plataforma implica la aceptación de nuestros Términos y condiciones y Política de privacidad.
        </span>
      </div>
    </section>

    <section class="section hero visible-flex-xs" style="padding-bottom: 2rem">
      <div class="container col-xs-12">
        <div class="col-xs-12 col-sm-6">
          <hgroup>
            <h2>
              Para brindarte el <b>mejor servicio</b> te pedimos que por favor ingreses desde <b>tu computadora</b>
            </h2>
          </hgroup>
        </div>
        <div class="col-xs-12 hero__img">
          <img src="images/login-mobile.png" />
        </div>

        <div class="btns" style="width:100%">
          <a href="/" class="btn btn--filled btn--filled--blue"><span>Volver al inicio</span></a>
        </div>
      </div>
    </section>

    <?php include("includes/footer.inc.php"); ?>
  </div>
  <!-- footer -->
  <?php include("includes/scripts.inc.html"); ?>
</body>

</html>