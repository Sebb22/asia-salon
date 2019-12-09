</main>

<footer class="footer">
  <nav class="footer-nav">
    <ul class="footer-nav__list">
      <li class="footer-nav__list__item">
        <a href="<?= home_url('plan-du-site'); ?>">Plan du site</a>
      </li>
      <li class="footer-nav__list__item">
        <a href="#">Mentions légales</a>
      </li>
      <li class="footer-nav__list__item">
        <a href="#">Contact</a>
      </li>
    </ul>
  </nav>
  <nav class="social-nav footer">
    <ul class="social-nav__list footer">
      <li class="social-nav__list__item footer"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
      </li>
      <li class="social-nav__list__item footer"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
      </li>
      <li class="social-nav__list__item footer"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      </li>
    </ul>
  </nav>
  <div class="footer-copyright"> &copy;2019 Salon-de-l'Asie</div>
</footer>
</div>

<div class="menu">
  <a href="#" class="ui-button close-menu">
    <i class="fa fa-times" aria-hidden="true"></i>
  </a>
  <nav class="menu__main-nav">
    <ul class="menu__main-nav__list">
      <li class="menu__main-nav__list__item">
        <a href="<?= home_url(); ?>">Accueil</a>
      </li>
      <li class="menu__main-nav__list__item">
        <a href="<?= home_url('les-articles/'); ?>">Articles</a>
      </li>
      <li class="menu__main-nav__list__item">
        <a href="<?= home_url('le-programme/'); ?>">Programme</a>
      </li>
      <li class="menu__main-nav__list__item">
        <a href="<?= home_url('les-exposants/'); ?>">Exposants</a>
      </li>
    </ul>
  </nav>
</div>

<script src="js/app.js"></script>
<?php wp_footer(); ?>
</body>

</html>