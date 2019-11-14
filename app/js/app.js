import 'jarallax/dist/jarallax';

var app = {
  elements: [],
  init: function () {
    console.log('init');

    //trying to set foreach jarallax element a different speed
    if (!app.elements.$postImage) {
      app.elements.$postImage = document.querySelectorAll('.post__image');
      for (var value of app.elements.$postImage) {
        value.classList.add('jarallax');
        value.setAttribute('data-speed', app.getRandom(0.2, 10));
        jarallax(value);
      }
    }

    // listening click on '.ui-button'
    if (!app.elements.$menuToggler) {
      app.elements.$menuToggler = document.querySelector('.menu-toggler');
      app.elements.$menuToggler.addEventListener('click', app.handleToggleMenu);
    }

    if (!app.elements.$main) {
      app.elements.$main = document.querySelector('.main');
    }

    // targetting scroll event to set header's position to absolute
    if (!app.elements.$body) {
      app.elements.$wrapper = document.querySelector("body");
      window.onscroll = app.handleScrollOnWrapper;
    }
  },

  getRandom: function (min, max) {
    return Math.random() * (max - min + 1) + min;
  },

  handleCloseMenu: function () {
    document.querySelector('body').classList.remove('menu-visible');
  },

  handleScrollOnWrapper: function () {
    app.elements.$header = document.querySelector('.header');
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      app.elements.$header.style.top = "0";
      app.elements.$header.style.padding = "0";
      document.querySelector('.social-nav').style.display = "none";
      if (app.elements.$main || window.innerHeight > window.innerWidth) {
        app.elements.$main.style.paddingTop = "6em";
      }
      document.querySelector('.logo__subtitle').style.lineHeight = "0";
    } else {
      app.elements.$header.style = "";
      document.querySelector('.social-nav').style = "";
      document.querySelector('.logo').style = "";
      if (app.elements.$main) {
        app.elements.$main.style = "";
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