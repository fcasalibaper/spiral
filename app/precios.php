<!DOCTYPE html>
<head>
  <?php include("includes/head.inc.html"); ?>
</head>

<body>
  <div class="cFull">
    <!-- header -->
    <?php include("includes/header.inc.php"); ?>

    <section class="section hero hero--mp" style="overflow:hidden">
      <div class="container col-xs-12">
        <div class="col-xs-12 col-sm-6">
          <hgroup>
            <h2>
              Contamos con <b>precios adaptados</b>
              al tamaño de tu negocio.
              </br>
            </h2>
            <small>
              Nuestro objetivo es <b>crecer juntos</b>, por eso cada mes se adapta según la facturación de tu últimos 30 días.
            </small>
          </hgroup>

          <div class="btns hidden-xs">
            <a href="login.php" class="btn btn--filled btn--filled--blue"><span>Probar gratis</span></a>
            <p>30 días, sin tarjeta de crédito</p>
          </div>
        </div>

        <div class="col-xs-12 col-sm-6 hero__prices">
          <div class="hero__card">
            <figure class="hidden-xs">
              <img class="hero__prices__img--dots" src="images/dot-pattern.png" />
              <img class="hero__prices__img--oval hero__prices__img--oval--1" src="images/oval.png" />
              <img class="hero__prices__img--oval hero__prices__img--oval--2" src="images/oval.png" />
            </figure>
            <div class="hero__card__wrapper">
              <ul class="hero__card__tabs col-xs-12">
                <li class="col-xs-6 active" rel="mensual">Pago mensual</li>
                <li class="col-xs-6" rel="anual">Pago anual <span>20% OFF</span></li>
              </ul>
              <div class="hero__card__content">
                <div id="mensual" class="hero__card__element active">
                  <h4>Ventas / mes</h4>
                  <ul>
                    <li><span>0 a 15 ventas</span><span><b>$650</b> / mes</span></li>
                    <li><span>16 a 100 ventas</span><span><b>$1.300</b> / mes</span></li>
                    <li><span>101 a 500 ventas</span><span><b>$1.900</b> / mes</span></li>
                    <li><span>501 a 1.000 ventas</span><span><b>$2.800</b> / mes</span></li>
                    <li><span>Más de 1.000 ventas</span><span><b>$3.400</b> / mes</span></li>
                  </ul>
                </div>
                <div id="anual" class="hero__card__element">
                  <h4>Ventas / año</h4>
                  <ul>
                    <li><span>0 a 15 ventas</span><span><b>$520</b> / año</span></li>
                    <li><span>16 a 100 ventas</span><span><b>$1.040</b> / año</span></li>
                    <li><span>101 a 500 ventas</span><span><b>$1.520</b> / año</span></li>
                    <li><span>501 a 1.000 ventas</span><span><b>$2.240</b> / año</span></li>
                    <li><span>Más de 1.000 ventas</span><span><b>$2.720</b> / año</span></li>
                  </ul>
                </div>
              </div>
              <div class="hero__card__footer">
                <span>Los precios están expresados en pesos argentinos y no incluyen IVA</span>
                <img src="images/mp-logo.png" alt="Mercado libre" />
              </div>
            </div>
          </div>
        </div>

        <div class="btns col-xs-12 visible-xs">
          <a href="login.php" class="btn btn--filled btn--filled--blue"><span>Probar gratis</span></a>
          <p>30 días, sin tarjeta de crédito</p>
        </div>
      </div>
    </section>

    <?php include("includes/footer.inc.php"); ?>
  </div>
  <!-- footer -->
  <?php include("includes/scripts.inc.html"); ?>
</body>

</html>