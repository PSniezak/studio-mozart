$(document).ready(function() {

  var lastScrollTop = 0,
      lastScrollTopLocation = 0,
      isMobile = false,
      lastHorPos = 0;

  // Mobile
  if (screen.height <= 860 || screen.width <= 768) {
    $('html').addClass('mobile');
    isMobile = true;

    $('#pricing').addClass('pricing0');
    $('#pricing').data('anchor', 'tarif0');

    $('#pricing .grid-4').each(function(index, value) {
      if (index != 0) {
        var newValue = index - 1;
        $('.pricing'+ newValue).after('<div data-anchor="tarif'+index+'" class="section pricing-multiple pricing' + index + '"><div class="grid-4">' + $(value).html() + '</div></div>');
      }
    });

    $('#pricing .grid-4:not(:first-child)').remove();
  }

  // Main Fullpage.js initialization
  $('#fullpage').fullpage({
		menu: '#header-desktop, #header-mobile',
		normalScrollElements: '.normal-scroll',
    animateAnchor: false,
		scrollOverflow: false,
		scrollOverflowReset: false,
		scrollOverflowOptions: null,
    paddingTop: '36px',
		controlArrows: true,
		verticalCentered: false,
		fixedElements: '#header-desktop, #header-mobile, #slideshows',
		lazyLoading: true,
    touchSensitivity: 30,
    normalScrollElementTouchThreshold: 15,

		onLeave: function(index, nextIndex, direction) {
      if (isMobile && (nextIndex == 2 || nextIndex == 8 || nextIndex == 9)) {
        $('.normal-scroll, #location, #questions, #displays').scrollTop(1);
      }
      if (isMobile) {
        $('#questions .helper').addClass('normal-scroll');
        $('#location .helper').addClass('normal-scroll');
      }
      // if ($('.fp-scroller, .iScrollIndicator')) {
      //   $('.fp-scroller, .iScrollIndicator').css('transform', 'translate(0px, 0px)');
      //
      //   if ($('.fp-section').find('.fp-scrollable').data('iscrollInstance')) {
      //     $('.fp-section').find('.fp-scrollable').data('iscrollInstance').y = 0;
      //   }
      // }

      // if (nextIndex == 5) {
      //   setTimeout(function() {
      //     $('#questions .columns .container').scrollTop(5);
      //   }, 700);
      // }
      // if (nextIndex == 6) {
      //   setTimeout(function() {
      //     $('#displays .container').scrollTop(5);
      //   }, 700);
      // }
    }
	});

  // Menu
  $('#header-mobile .menu-icon').on('click', function() {
    var $hamb = $(this).find('.hamb-menu');

    if ($hamb.hasClass('is-clicked')) {
      $hamb.removeClass('is-clicked');
      $('.header-mobile-menu').hide("slide", { direction: "down" }, 500);
    } else {
      $hamb.addClass('is-clicked');
      $('.header-mobile-menu').show("slide", { direction: "down" }, 500);
    }
  });
  $('#header-mobile a').on('click', function() {
    $('#header-mobile .menu-icon .hamb-menu').removeClass('is-clicked');
    $('.header-mobile-menu').hide("slide", { direction: "down" }, 500);
  });
  $('#header-mobile, #header-desktop').on('click', function() {
    if ($("#slideshows .slideshow").hasClass('slick-initialized')) {
      $('.slideshow.active').removeClass('active').fadeOut();
      $("#slideshows .close-button").fadeOut();
    }
  })

  // Location
  if (isMobile) {
    $('#location .helper').addClass('normal-scroll');

    $('#location').scroll(function() {
      var st = $(this).scrollTop();

      if (st > lastScrollTopLocation) {
        if($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
          $('#location .helper').removeClass('normal-scroll');
        }
      } else {
        if($(this).scrollTop() <= 0) {
          $('#location .helper').removeClass('normal-scroll');
        }
      }
      lastScrollTopLocation = st;
    });
  }
  $('#stud .studio-slider').slick({
    infinite: true,
    arrows: true,
    adaptiveHeight: true,
    slidesToShow: 1,
    prevArrow: '<button type="button" class="slick-arrow slick-prev"><img src="/img/arrow-left.png" alt="Previous slide"></button>',
    nextArrow: '<button type="button" class="slick-arrow slick-next"><img src="/img/arrow-right.png" alt="Next slide"></button>',
    lazyLoad: 'progressive'
  });

  // FAQ
  if (isMobile) {
    $('#questions .helper .columns .container').removeClass('normal-scroll');
    $('#questions .helper .columns-fixed .container').removeClass('normal-scroll');
    $('#questions .helper').addClass('normal-scroll');

    $('#questions').scroll(function(e) {
      var st = $(this).scrollTop();
      console.log('scroll')

      if (st > lastScrollTop) {
        if($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
          $('#questions .helper').removeClass('normal-scroll');
        }
      } else {
        if($(this).scrollTop() <= 0) {
          $('#questions .helper').removeClass('normal-scroll');
        }
      }
      lastScrollTop = st;
    });
  } else {
    $('#questions .helper .columns').scroll(function() {
      var st = $(this).scrollTop();
      if (st > lastScrollTop){
        if($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
          // $.fn.fullpage.moveSectionDown();
        }
      } else {
        if($(this).scrollTop() == 0) {
          // $.fn.fullpage.moveSectionUp();
        }
      }
      lastScrollTop = st;
    });
  }

  // Photographers
  // Overflowed
  if ($('#displays .container .item:last-child').offset().top + $('#displays .container .item:last-child').height() - $('#displays').offset().top > $(document).height()) {
    $('#displays .container').addClass('normal-scroll');

    $('#displays .container').scroll(function(e) {
      var st = $(this).scrollTop();
      if (st > lastScrollTop){
        if($(this).scrollTop() + $(this).innerHeight() >= $(this)[0].scrollHeight) {
          $.fn.fullpage.moveSectionDown();
        }
      } else {
        if($(this).scrollTop() == 0) {
          $.fn.fullpage.moveSectionUp();
        }
      }
      lastScrollTop = st;
    });
  }
  // Slideshows
  $('#displays .container .item').on('click', function() {
    var photographerId = $(this).data('id');

    if (!$("#slideshows .slideshow[data-id='" + photographerId+"']").hasClass('slick-initialized')) {
      if (isMobile) {
        $("#slideshows .slideshow[data-id='" + photographerId+"']").slick({
          infinite: false,
          arrows: false,
          adaptiveHeight: true,
          lazyLoad: 'progressive',
          vertical: true,
          verticalSwiping: true,
          zIndex: 25
        });
      } else {
        $("#slideshows .slideshow[data-id='" + photographerId+"']").slick({
          infinite: false,
          arrows: false,
          variableWidth: true,
          adaptiveHeight: true,
          lazyLoad: 'progressive'
        }).on("mousewheel", function (event) {
          event.preventDefault();
          if (event.deltaX > 0 || event.deltaY < 0) {
            if (event.deltaFactor * event.deltaY > 1) {
              $(this).slick("slickNext");
              event.preventDefault();
            }
          } else if (event.deltaX < 0 || event.deltaY > 0) {
            if (event.deltaFactor * event.deltaY > 1) {
              $(this).slick("slickPrev");
              event.preventDefault();
            }
          }
        });
      }
    }

    $("#slideshows .slideshow[data-id='" + photographerId+"']").addClass('active').fadeIn();
    $("#slideshows .close-button").fadeIn();
  });
  // Close event
  $('.close-button').on('click', function() {
    $('.slideshow.active').removeClass('active').fadeOut();
    $("#slideshows .close-button").fadeOut();
  });

  // Modal
  // Price generation
  $('.booking-trigger').on('click', function() {
    var value = $(this).siblings('.price').html();
    $('.remodal-form .price-container').val(value);
  });
  // Opened
  $(document).on('opened', '.remodal-form', function () {
    $.fn.fullpage.setAllowScrolling(false);
    $.fn.fullpage.setKeyboardScrolling(false);
  });
  // CLosing
  $(document).on('closing', '.remodal', function (e) {
    $.fn.fullpage.setAllowScrolling(true);
    $.fn.fullpage.setKeyboardScrolling(true);

    // Hash regeneration
    var hash = $('body').attr('class');
    window.location.hash = hash.replace("fp-viewing-", "");
  });
  // Form
  $('#booker').on('submit', function(e) {
    e.preventDefault();

    $.ajax({
      type: "POST",
      url: "/mailer.php",
      data: $("#booker").serialize(),
      success: function() {
        var inst = $('[data-remodal-id=confirmation]').remodal();
        inst.open();
      },
      error: function() {
        var inst = $('[data-remodal-id=erreur]').remodal();
        inst.open();
      }
    });
  });

});
