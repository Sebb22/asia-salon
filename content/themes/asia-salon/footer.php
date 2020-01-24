</main>
<?php if (get_theme_mod('asia_footer_color')) : ?>
  <?php $color = get_theme_mod('asia_footer_color'); ?>
  <footer class="footer" style="background-color:<?= $color; ?>">
  <?php endif; ?>
  <nav class="footer-nav">
    <ul class="footer-nav__list">
      <li class="footer-nav__list__item">
        <a href="<?= home_url('plan-du-site'); ?>">Plan du site</a>
      </li>
      <li class="footer-nav__list__item">
        <a href="<?= home_url('les-mentions-legales'); ?>">Mentions légales</a>
      </li>
      <li class="footer-nav__list__item">
        <a href="<?= home_url('contact'); ?>">Contact</a>
      </li>
    </ul>
  </nav>
  <nav class="footer__social-nav">
    <ul class="footer__social-nav__list ">
      <li class="footer__social-nav__list__item "><a href="https://fr-fr.facebook.com/camco60/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
      </li>
      <!-- <li class="footer__social-nav__list__item "><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
      </li> -->
      <li class="footer__social-nav__list__item "><a href="https://www.instagram.com/camco_60/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      </li>
    </ul>
  </nav>
  <div class="footer-copyright"> &copy;2019 Salon-de-l'Asie</div>
  </footer>

  </div>

  <?php if (get_theme_mod('asia_header_color')) : ?>
    <?php $color = get_theme_mod('asia_header_color'); ?>
    <div class="menu" style="background-color:<?= $color; ?>">
    <?php endif; ?>
    <a href="#" class="ui-button close-menu">
      <i class="fa fa-times" aria-hidden="true"></i>
    </a>
    <nav class="menu__main-nav">
      <ul class="menu__main-nav__list">
        <li class="menu__main-nav__list__item">
        <div class="logo is-modal">
          <a href="<?= home_url(); ?>">
            <!-- <h2 class="logo__title">Salon de l'Asie </br>de Compiegne</h2>
            <p class="logo__subtitle">Le salon des cultures asiatiques</p> -->
          </a>
        </div>
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
        <li class="main-nav__list__item">
          <?= get_search_form(); ?>
        </li>
      </ul>
    </nav>
    </div>

    <script src="js/app.js"></script>
    <?php wp_footer(); ?>
    </body>

    </html>