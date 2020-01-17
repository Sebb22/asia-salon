import 'jarallax/dist/jarallax';

var app = {
  elements: [],
  baseUrl:
    "http://localhost/asia-salon/",
  jsonUrl: "wp-admin/admin-ajax.php",

  init: function () {
    console.log('init');
    // setting foreach jarallax element a different speed
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

    // listening click on '#search-logo'
    if (!app.elements.$searchLogo) {
      app.elements.$searchLogo = document.querySelector(".fa-search-plus");
      app.elements.$searchLogo.addEventListener('click', app.displaySearchForm);
    }

    app.elements.$adminBarCustomize = document.querySelector("#wp-admin-bar-customize");
    if (!app.elements.$adminBarCustomize) {
      try {
        app.handleWpCustomize();
      }
      catch (e) {
      }
    }


  },

  displaySearchForm: function () {
    event.preventDefault();
    var target = event.currentTarget;
    if (target.className === "fa fa-search-plus") {
      target.classList.remove('fa-search-plus');
      target.classList.add('fa-times');
      app.elements.$navElement = document.querySelectorAll('.main-nav__list__item:not(.is-search-form-toggler)');
      for (let index = 0; index < app.elements.$navElement.length; index++) {
        const element = app.elements.$navElement[index];
        element.style.display = 'none';
        document.querySelector('.is-search-form').style.display = 'block';
      }
    } else if (target.className === "fa fa-times") {
      target.classList.remove('fa-times');
      target.classList.add('fa-search-plus');
      app.elements.$navElement = document.querySelectorAll('.main-nav__list__item:not(.is-search-form-toggler)');
      for (let index = 0; index < app.elements.$navElement.length; index++) {
        const element = app.elements.$navElement[index];
        element.style.display = 'block';
        document.querySelector('.is-search-form').style.display = 'none';
      }
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
      // app.elements.$header.style = "";
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
    event.preventDefault();
    document.querySelector('body').classList.add('menu-visible');

    // listening click on '.ui-button'
    if (!app.elements.$closeMenu) {
      app.elements.$closeMenu = document.querySelector('.close-menu');
      app.elements.$closeMenu.addEventListener('click', app.handleCloseMenu);
    }
  },

  handleWpCustomize: function () {
    wp.customize('asia_header_color', function (value) {
      value.bind(function (newval) {
        document.querySelector('.header').style.background = newval;
        document.querySelector('.menu').style.background = newval;
      });
    });

    wp.customize('asia_footer_color', function (value) {
      value.bind(function (newval) {
        document.querySelector('.footer').style.background = newval;
      });
    });

    wp.customize('asia_title_color', function (value) {
      value.bind(function (newval) {
        document.querySelector('.banner__title').style.color = newval;
        document.querySelector('.banner__detail').style.background = newval;
      });
    });

    wp.customize('asia_aside_color', function (value) {
      value.bind(function (newval) {
        document.querySelector('.aside').style.background = newval;
      });
    });

    wp.customize('asia_background_color', function (value) {
      value.bind(function (newval) {
        document.querySelector('html').style.background = newval;
      });
    });
  }
}

$(app.init);  