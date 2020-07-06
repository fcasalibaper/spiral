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
          <div class="col-xs-12 login__form withOutLine" style="padding-left: 0 !important;padding-right: 0 !important">
            <form action="" class="forms column xCenter">
              <div class="form-row col-xs-12 column xCenter">
                <label class="row yCenter" style="margin-bottom: 1.5rem">Recuperar contraseña</label>
                <span class="row yCenter">Ingresá tu email y te enviaremos un link para que recuperes tu contraseña.</span>
                <input type="email" placeholder="E-mail" style="max-width:335px" />
              </div>

              <button href="#" type="submit" class="btn btn--fillled btn--filled--blue" style="max-width:335px">
                Ingresar
              </button>
            </form>
          </div>
        </div>

      </div>
    </section>

    <?php include("includes/footer.inc.php"); ?>
  </div>
  <!-- footer -->
  <?php include("includes/scripts.inc.html"); ?>
</body>

</html>