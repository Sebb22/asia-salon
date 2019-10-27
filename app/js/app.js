import 'jarallax/dist/jarallax';

var app = {
  elements: [],
  init: function () {
    console.log('init');

    jarallax(document.querySelectorAll('.jarallax'), {
      speed: 20
    });

    // targetting scroll event to set header's position to absolute
    if (!app.elements.$body) {
      app.elements.$wrapper = document.querySelector("body");      
      window.onscroll = app.handleScrollOnWrapper;
    }
  },

  handleScrollOnWrapper: function () {
    app.elements.$header = document.querySelector('.header');

    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      app.elements.$header.style.position = 'fixed';
      app.elements.$header.style.height = '12vh';
      document.querySelector('.social-nav').style.display = "none";
      document.querySelector('.logo').style.padding = "0.3em";
      document.querySelector('.logo').style.marginBottom = "1em";
      document.querySelector('.banner').style.paddingTop = "11em";
      document.querySelector('.logo__title').style.fontSize = "3rem";
      document.querySelector('.logo__subtitle').style.lineHeight = "0";
    } else {
      app.elements.$header.style = "";
      document.querySelector('.social-nav').style = "";
      document.querySelector('.logo').style = "";
      document.querySelector('.banner').style = "";
      document.querySelector('.logo__title').style = "";
      document.querySelector('.logo__subtitle').style = "";
      
    }
  },


};

$(app.init);  