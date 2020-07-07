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
              <a href="login.php" class="btn btn--filled btn--filled--blue"><span>Ingresar</span></a>
              <p class="hidden-xs">¡No lo dudes, es gratis!</p>
            </div>
          </hgroup>
        </div>

        <!-- SIN VIDEO -- comentar -->
        <div class="col-sm-6 hero__img hidden-xs">
          <?php include("images/img-header-sinvideo.svg"); ?>
        </div>
        <div class="col-xs-12 hero__img visible-xs">
          <img class="people_working" src="images/img-header-sinvideo-mobile.png" />
          <img class="bg__mobile" src="images/home-bg-mobile.png" />
        </div>

        <!-- CON VIDEO -- descomentar -->
        <!-- <div class="col-sm-6 hero__img video hidden-xs" style="position: relative; transform: translateY(33%);" rel="pAFae9yasG0">
          <?php include("images/home-video-img.svg"); ?>
        </div>
        <div class="col-xs-12 hero__img video visible-xs" rel="pAFae9yasG0">
          <img class="people_working" src="images/box-video.png" />
          <img class="bg__mobile" src="images/home-bg-mobile.png" />
        </div> -->
      </div>
    </section>

    <aside class="section info hidden-xs">
      <div class="container">
        <div class="col-xs-12 info__text">
          <p>
          Nuestro objetivo es que todo vendedor en Mercado Libre pueda <b>acceder a una herramienta que le permita optimizar y administrar su negocio</b>.
          </p>
          <a href="login.php" class="btn btn--filled btn--filled--blue">
            <span>Ingresar</span>
          </a>
        </div>
      </div>
    </aside>

    <section id="features" class="section features">
      <div class="container">
        <header>
          <h2>
            Conocé todas nuestras<br/>
            funcionalidades
          </h2>
        </header>
        <div class="features__wrapper">
          <div class="col-xs-12 col-sm-8 features__elements">
            <ul class="features__elements__list">
              <li>
                <i class="icon icon-eye"></i>
                <hgroup>
                  <h4>Sigue a la competencia</h4>
                  <p>Analiza qué y cuanto venden tus competidores.</p>
                </hgroup>
              </li>
              <li>
                <i class="icon icon-chat"></i>
                <hgroup>
                  <h4>Responde preguntas</h4>
                  <p>Comunicate a tiempo con tus clientes y mejora su experiencia de compra.</p>
                </hgroup>
              </li>
              <li>
                <i class="icon icon-bar-chart"></i>
                <hgroup>
                  <h4>Analizá el mercado</h4>
                  <p>Reconoce y aprovecha tendencias del consumo.</p>
                </hgroup>
              </li>
              <li>
                <i class="icon icon-tiendas"></i>
                <hgroup>
                  <h4>Métricas de mi negocio</h4>
                  <p>Analiza todos tus indicadores y toma las mejores decisiones.</p>
                </hgroup>
              </li>
              <li>
                <i class="icon icon-etiquetas"></i>
                <hgroup>
                  <h4>Publicar en catálogo</h4>
                  <p>No te quedes afuera y posicionate participando en catálogo.</p>
                </hgroup>
              </li>
              <li>
                <i class="icon icon-alertas"></i>
                <hgroup>
                  <h4>Notificaciones</h4>
                  <p>Enterate en el acto de todo lo que sucede en Mercado Libre y en tu negocio.</p>
                </hgroup>
              </li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-4 features__img hidden-xs">
            <img src="images/home-img.png"  />
          </div>
        </div>
      </div>
    </section>

    <section id="clients" class="section clients">
      <div class="container">
        <div class="col-xs-12 col-sm-6 clients__text">
          <h2>
            Estamos felices de tener la confianza de estos usuarios desde 2018.
          </h2>
        </div>
        <div class="col-xs-12 col-sm-5 clients__list">
          <h4>
            Algunos de nuestros clientes:
          </h4>
          <figure>
            <img src="images/fravega.jpg" alt="Frávega" />
            <img src="images/stanley-black-decker.png" alt="stanley black & decker" />
            <img src="images/mabe.png" alt="mabe" />
          </figure>
        </div>
      </div>
    </section>

    <section id="opiniones" class="section opiniones">
      <div class="container">
        <header>
          <i class="icon icon-heart"></i>
          <h2>
            Opiniones de algunos de nuestros clientes
          </h2>
        </header>

        <div class="opiniones__slider col-xs-12">
          <div class="wrapper">
            <div class="card">
              <div class="card__img">
                <img src="images/logo-fvg.png" alt="fravega" />
              </div>
              <p class="card__text">
                Spiral nos permite analizar a detalle la competencia y las tendencias del mercado. Gestión y análisis estratégico en un mismo lugar para nuestras dos tiendas oficiales.
              </p>
              <small>
                - @fravega
              </small>
            </div>

            <div class="card">
              <div class="card__img">
                <img src="images/logo-stanley.png" alt="stanley" />
              </div>
              <p class="card__text">
                Spiral es fundamental para la gestión y análisis de nuestras tiendas oficiales, como también para el seguimiento de los cientos de vendedores que comercializan nuestros productos en Mercado Libre.
              </p>
              <small>
                - @stanley black & decker
              </small>
            </div>

            <div class="card">
              <div class="card__img">
                <img src="images/mabe.png" alt="mabe" />
              </div>
              <p class="card__text">
                Spiral es una herramienta que nos ayuda mucho en la toma de decisiones como también la gestión del día a día.
              </p>
              <small>
                - @mabe
              </small>
            </div>
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