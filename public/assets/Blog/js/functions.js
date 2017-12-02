$(document).ready(function() {
	
	"use strict";
	
	// Carousel
	$("#carousel .content").jCarouselLite({
		auto: 0,
		scroll: 1,
		speed: 500,
		visible: 4,
		start: 0,
		circular: true,
		btnPrev: "#previous_button",
		btnNext: "#next_button"
	});
	
	// Back to Top
	var $ele = $('#BackToTop');
    $(window).scroll(function() {
        $(this).scrollTop() >= 200 ? $ele.show(10).animate({
            right: '25px'
        }, 10) : $ele.animate({
            right: '-80px'
        }, 10)
    });
    $ele.click(function(e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 400)
    })
	
	// fp-slider
	jQuery('.fp-slides').cycle({
	  fx: 'fade',
	  timeout: 6000,
	  delay: 0,
	  speed: 500,
	  next: '.fp-next',
	  prev: '.fp-prev',
	  pager: '.fp-pager',
	  continuous: 0,
	  sync: 1,
	  pause: 1,
	  pauseOnPagerHover: 1,
	  cleartype: true,
	  cleartypeNoBg: true
	});
	
	// Preloader
	$(window).load(function() {
		$('.load-container').fadeOut();
		$('.loader-mask').delay(450).fadeOut('600');
	});
	
	// Theia Sticky Sidebar
	$('.left-sidebar').theiaStickySidebar({
        "additionalMarginTop": "13"
    });
	
	$('#main-wrapper').theiaStickySidebar({
        "additionalMarginTop": "5"
    });
	
	$('#sidebar-wrapper').theiaStickySidebar({
        "additionalMarginTop": "10"
    });
	
})
