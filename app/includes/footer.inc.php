<footer class="footer">
  <!-- info -->
  <div class="dudas__info">

    <div class="dudas__sides">
      <div class="dudas__sides--left">
        <img src="images/left-morph.png" />
      </div>
      <div class="dudas__sides--right">
        <img src="images/right-morph.png" />
      </div>
    </div>

    <div class="container">
      <div class="dudas__sides dudas__sides--container">
        <div class="dudas__sides--left">
          <?php include("images/points-01.svg"); ?>
        </div>
        <div class="dudas__sides--right">
          <?php include("images/points-02.svg"); ?>
        </div>
      </div>

      <hgroup>
        <h3><b>¿Te quedaron dudas?</b></h3>
        <p>Contactános por el medio que prefieras</p>
      </hgroup>

      <div class="dudas__info__btns">
        <a href="#" class="btn btn--primary btn--filled btn--filled--green"><i class="icon icon-whatsapp" ></i> <b>Chateá con nosotros</b></a>
        <a href="#" class="btn btn--outlined btn--outlined--green"><b>info@spiral.com</b></a>
      </div>
    </div>
  </div>

  <!-- links -->
  <div class="section footer__links">
    <div class="container">
      <div class="footer__links__container">
        <div class="logo">
          <a href="/"><?php include("./images/logo-spiral.svg"); ?></a>
          <span>info@spiral.com</span>
        </div>

        <div class="socials hidden-xs">
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
      <div class="footer__links__container">
        <div class="separator visible-xs"></div>
        <hgroup><h4>Nosotros</h4></hgroup>
        <ul class="footer__links--urls">
          <li>
            <a href="#"><span>Funcionalidades</span></a>
          </li>
          <li>
            <a href="terminos-y-condiciones.php"><span>Términos y Condiciones</span></a>
          </li>
          <li>
            <a href="politicas-de-privacidad.php"><span>Políticas de Privacidad</span></a>
          </li>
        </ul>
      </div>
      <div class="footer__links__container footer__links__container--last">

        <!-- country selector -->
        <?php include("includes/countrySelector.inc.php"); ?>

        <img src="images/ml-app.png" alt="Mercado Libre - aplicación certificada" />

      </div>
    </div>
  </div>

  <!-- copy -->
  <div class="section footer__copy">
    <div class="container">
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
      <span>© 2020 Spiral. Todos los derechos reservados</span>
    </div>
  </div>
</footer>