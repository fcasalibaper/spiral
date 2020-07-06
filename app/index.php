<!DOCTYPE html>
<head>
  <?php include("includes/head.inc.html"); ?>
</head>

<body>
  <div class="cFull">
    <!-- header -->
    <?php include("includes/header.inc.php"); ?>

    <section class="section hero">
      <div class="container col-xs-12">
        <div class="col-xs-12 col-sm-6">
          <hgroup>
            <h2>
              Una plataforma <b>GRATUITA</b> para
              vendedores de Mercado Libre
              </br>
            </h2>
            <small>
              Brindamos <span>herramientas de análisis estratégico y gestión</span> para que alcances todos tus objetivos.
            </small>

            <div class="btns">
              <a href="ingresar.php" class="btn btn--filled btn--filled--blue"><span>Ingresar</span></a>
              <p class="hidden-xs">¡No lo dudes, es gratis!</p>
            </div>
          </hgroup>
        </div>
        <div class="col-sm-6 hero__img hidden-xs">
          <?php include("images/img-header-sinvideo.svg"); ?>
        </div>
        <div class="col-xs-12 hero__img visible-xs">
          <img class="people_working" src="images/img-header-sinvideo-mobile.png" />
          <img class="bg__mobile" src="images/home-bg-mobile.png" />
          
        </div>
      </div>
    </section>

    <?php include("includes/footer.inc.php"); ?>
  </div>
  <!-- footer -->
  <?php include("includes/scripts.inc.html"); ?>
</body>

</html>