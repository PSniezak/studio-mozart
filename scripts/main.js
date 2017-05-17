$(document).ready(function() {

  // Main Fullpage.js initialization
  $('#fullpage').fullpage({
		menu: '#header-desktop, #header-mobile',
		normalScrollElements: '.normal-scroll',
		scrollOverflow: false,
		scrollOverflowReset: false,
		scrollOverflowOptions: null,
    paddingTop: '36px',
		controlArrows: true,
		verticalCentered: false,
		fixedElements: '#header-desktop, #header-mobile',
		lazyLoading: true,

		onLeave: function(index, nextIndex, direction) {
    },
		afterLoad: function(anchorLink, index) {
    },
		afterRender: function(){},
		afterResize: function(){},
		afterResponsive: function(isResponsive){},
		afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){},
		onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){}
	});

});
