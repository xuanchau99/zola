// Back to top
  var btn = $('.back-to-top');

  $(window).scroll(function() {
      if ($(window).scrollTop() > 100) {
          btn.fadeIn();
      } 
      else {
          btn.fadeOut();
      }
  });

  btn.on('click', function(e) {
      e.preventDefault();
      $('html, body').animate({scrollTop:0}, '100');
  });

// Sticky Header
  window.onscroll = function() { myFunction() };

  var header = document.getElementById('sticky-header');
  var sticky = header.offsetTop;

  function myFunction() {
    	if (window.pageYOffset > sticky) {
      	header.classList.add('sticky');
    	} 
    	else {
      	header.classList.remove('sticky');
    	}
  }

// Swiper home page
  var swiper = new Swiper('.swiper-container', {
     	slidesPerView: 1,
     	spaceBetween: 5,
      breakpoints: {
        // when window width is >= 320px
          600: {
              slidesPerView: 3,
              spaceBetween: 5
          },
      },
     	freeMode: true,
      loop: true,
      centeredSlides:true,
     	autoplay: {
     		delay: 2500,
      	disableOnInteraction: false,
    	},
    	pagination: {
      	el: '.swiper-pagination',
      	clickable: true,
    	}
  });

// Swiper category
  var swiper = new Swiper('.swiper-category', {
      slidesPerView: 1,
      spaceBetween: 5,
      breakpoints: {
        // when window width is >= 320px
          600: {
              slidesPerView: 2,
              spaceBetween: 5
          },
      },
      freeMode: true,
      loop: true,
      rightSlides: false,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      }
  });

// Show form search mobile
  $('#btn-search-mobile').click(function () {
      $('#btn-search-mobile').css("display", "none");
      $('#form-search-mobile').css("display", "inline");
  });