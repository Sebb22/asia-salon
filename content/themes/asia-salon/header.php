<!DOCTYPE html>
<?php if (get_theme_mod('asia_background_color')) : $color = get_theme_mod('asia_background_color'); ?>
  <html <?php language_attributes(); ?>style="background-color:<?= $color; ?>">
<?php endif; ?>

<head>
  <meta charset="<meta <?php bloginfo('charset'); ?>>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="descripiton" content="Le salon de l'Asie de Compiègne, c'est le 29 mars 2020, à Compiègne, au Manège de l'état-major. Au programme: arts martiaux, culture, gastronomie, rencontres, animations, démonstrations">
  <meta name="robots" content="index,follow">
  <title><?php bloginfo('title'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="wrapper">
    <?php if (get_theme_mod('asia_header_color')) : ?>
      <?php $headerColor = get_theme_mod('asia_header_color'); ?>
      <header class="header" style="background:<?= $headerColor; ?>">
      <?php endif; ?>
      <nav class="social-nav">
        <ul class="social-nav__list">
          <li class="social-nav__list__item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li class="social-nav__list__item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
          <li class="social-nav__list__item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
      </nav>
      <div class="header__main">
        <div class="logo">
          <a href="<?= home_url(); ?>">
            <h2 class="logo__title">Salon de l'Asie </br>de Compiegne</h2>
            <p class="logo__subtitle">Le salon des cultures asiatiques</p>
          </a>
        </div>

        <button class="menu-toggler" type="button">
          Menu <i class="fa fa-bars"></i>
        </button>

        <nav class="main-nav">
          <ul class="main-nav__list">
            <li class="main-nav__list__item">
              <a href="<?= home_url('les-articles/'); ?>">Articles</a>
            </li>
            <li class="main-nav__list__item">
              <a href="<?= home_url('le-programme/'); ?>">Programme</a>
            </li>
            <li class="main-nav__list__item">
              <a href="<?= home_url('les-exposants/'); ?>">Exposants</a>
            </li>
            <li class="main-nav__list__item">
              <i class="fa fa-search-plus" id="search-logo" aria-hidden="true"></i>
            </li>
          </ul>
        </nav>
      </div>
      </header>
      <main class="main">