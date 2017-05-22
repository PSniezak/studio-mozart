$(document).ready(function() {

  var lastScrollTop = 0,
      isMobile = false;

  // Mobile
  if (screen.height < 768) {
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
    touchSensitivity: 15,
    normalScrollElementTouchThreshold: 15,

		onLeave: function(index, nextIndex, direction) {
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

  // Location
  if (isMobile) {
    $('#location .container').addClass('normal-scroll');

    $('#location .container').scroll(function() {
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

  // FAQ
  $('#questions .columns .container').scroll(function() {
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

  // Photographers
  // Overflowed
  if ($('#displays .container .item:last-child').offset().top + $('#displays .container .item:last-child').height() - $('#displays').offset().top > $(document).height()) {
    $('#displays .container').addClass('normal-scroll');

    $('#displays .container').scroll(function() {
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
      $("#slideshows .slideshow[data-id='" + photographerId+"']").slick({
        infinite: false,
        arrows: false,
        variableWidth: true,
        adaptiveHeight: true,
        lazyLoad: 'progressive'
      });
    }

    $("#slideshows .slideshow[data-id='" + photographerId+"']").addClass('active').fadeIn();
    $("#slideshows .close-button").fadeIn();
  });
  $('.close-button').on('click', function() {
    $('.slideshow.active').removeClass('active').fadeOut();
    $("#slideshows .close-button").fadeOut();
  });

});
