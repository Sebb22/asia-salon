<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<meta <?php bloginfo('charset'); ?>>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="wrapper">
    <header class="header">
      <nav class="social-nav">
        <ul class="social-nav__list">
          <li class="social-nav__list__item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li class="social-nav__list__item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
          <li class="social-nav__list__item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
      </nav>
      <div class="header__main">
        <div class="logo">
          <a href="index.html">
            <h2 class="logo__title">Salon de l'Asie </br>de Compiègne</h2>
            <p class="logo__subtitle">Le salon des cultures asiatiques</p>
          </a>
        </div>

        <button class="menu-toggler" type="button">
          Menu <i class="fa fa-bars"></i>
        </button>

        <nav class="main-nav">
          <ul class="main-nav__list">
            <li class="main-nav__list__item">
              <a href="news.html">news</a>
            </li>
            <li class="main-nav__list__item">
              <a href="planning.html">animations</a>
            </li>
            <li class="main-nav__list__item">
              <a href="exhibitors.html">exposants</a>
            </li>
            <li class="main-nav__list__item">
              <a href="#">programme</a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <main class="main">