<!DOCTYPE html>
<head>
  <?php include("includes/head.inc.html"); ?>
</head>

<body>
  <div class="cFull">
    <!-- header -->
    <?php include("includes/header.inc.php"); ?>

    <section class="section login">
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
            <img class="box" src="images/box-message.png" />
            <div class="form-row col-xs-12 column xCenter">
              <span class="row yCenter" style="color: #44afe0">En unos instantes recibirás un correo con las instrucciones para recuperar tu contraseña</span>
            </div>

            <button href="/" type="submit" class="btn btn--fillled btn--filled--blue" style="max-width:335px">
              Volver a la home
            </button>
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