import 'jarallax/dist/jarallax';

var app = {
  elements: [],
  init: function () {
    console.log('init');

    jarallax(document.querySelectorAll('.jarallax'), {
      speed: 20
    });

    // listening click on '.ui-button'
    if (!app.elements.$menuToggler) {
      app.elements.$menuToggler = document.querySelector('.menu-toggler');
      app.elements.$menuToggler.addEventListener('click', app.handleToggleMenu);
    }

    if (!app.elements.$banner) {
      app.elements.$banner = document.querySelector('.banner');
    }

    // targetting scroll event to set header's position to absolute
    if (!app.elements.$body) {
      app.elements.$wrapper = document.querySelector("body");
      window.onscroll = app.handleScrollOnWrapper;
    }
  },

  handleCloseMenu: function () {
    document.querySelector('body').classList.remove('menu-visible');
  },

  handleScrollOnWrapper: function () {
    app.elements.$header = document.querySelector('.header');
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      app.elements.$header.style.position = 'sticky';
      app.elements.$header.style.top = "0";
      document.querySelector('.social-nav').style.display = "none";
      if (app.elements.$banner) {
        app.elements.$banner.style.paddingTop = "11em";
      }

      document.querySelector('.logo__subtitle').style.lineHeight = "0";
    } else {
      app.elements.$header.style = "";
      document.querySelector('.social-nav').style = "";
      document.querySelector('.logo').style = "";
      if (app.elements.$banner) {
        app.elements.$banner.style = "";
      }
      document.querySelector('.logo__title').style = "";
      document.querySelector('.logo__subtitle').style = "";
    }
  },

  handleToggleMenu: function () {
    console.log('click!!!');
    event.preventDefault();

    document.querySelector('body').classList.add('menu-visible');

    // listening click on '.ui-button'
    if (!app.elements.$closeMenu) {
      app.elements.$closeMenu = document.querySelector('.close-menu');
      app.elements.$closeMenu.addEventListener('click', app.handleCloseMenu);
    }
  },
}


$(app.init);  