(function($) {

	'use strict';
	// Mean Menu
	$('.mean-menu').meanmenu({
		meanScreenWidth: "991"
	});
	
	// Header Sticky, Go To Top JS
	$(window).on('scroll', function() {
		// Header Sticky JS
		if ($(this).scrollTop() >150){  
			$('.navbar-area').addClass("is-sticky");
		}

		else{
			$('.navbar-area').removeClass("is-sticky");
		};

		// Go To Top JS
		var scrolled = $(window).scrollTop();
		if (scrolled > 300) $('.go-top').addClass('active');
		if (scrolled < 300) $('.go-top').removeClass('active');
	});

	// navbar-category-dropdown
    $(".navbar-category button").on('click', function() {
        if($(".navbar-area").hasClass("is-sticky")) {
            $(this).next(".navbar-category-dropdown").toggleClass("active");
        }
    })

	// Header Sticky, Go To Top JS
	$(window).on('scroll', function() {
		// Header Sticky JS

		if ($(this).scrollTop() >750){  
			$('.only-home-one-sticky').addClass("is-sticky");
		}
		else{
			$('.only-home-one-sticky').removeClass("is-sticky");
		};
	});

	// Hero Slider JS
	$('.hero-slider, .hero-slider-two').owlCarousel({
		items:1,
		loop: true,
		margin: 0,
		nav: true,
		dots: false,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		rtl: true,
		navText: [
			"<i class='ri-arrow-right-s-line'></i>",
			"<i class='ri-arrow-left-s-line'></i>",
		],
	});

	// Deals Product Slider JS
	$('.deals-products-slider').owlCarousel({
		items: 1,
		loop: true,
		margin: 24,
		nav: false,
		dots: true,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		rtl: true,
		responsive: {
			0: {
				items: 1,
			},
			414: {
				items: 1,
			},
			576: {
				items: 1,
			},
			768: {
				items: 2,
			},
			992: {
				items: 1,
			},
			1200: {
				items: 1,
			},
		},
	});

	// Best Product Slider JS
	$('.best-product-slider').owlCarousel({
		loop: true,
		margin: 24,
		nav: true,
		dots: false,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		rtl: true,
		navText: [
			"<i class='ri-arrow-right-s-line'></i>",
			"<i class='ri-arrow-left-s-line'></i>",
		],
		responsive: {
			0: {
				items: 1,
			},
			414: {
				items: 1,
			},
			576: {
				items: 2,
			},
			768: {
				items: 2,
			},
			992: {
				items: 4,
			},
			1200: {
				items: 4,
			},
		},
	});

	// Partner Slider JS
	$('.partner-slider').owlCarousel({
		loop: true,
		margin: 24,
		nav: false,
		dots: false,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		rtl: true,
		responsive: {
			0: {
				items: 2,
			},
			414: {
				items: 3,
			},
			576: {
				items: 3,
			},
			768: {
				items: 4,
			},
			992: {
				items: 5,
			},
			1200: {
				items: 6,
			},
		},
	});

	// Tabs JS
	$('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
	$('.tab ul.tabs li').on('click', function (g) {
		var tab = $(this).closest('.tab'), 
		index = $(this).closest('li').index();
		tab.find('ul.tabs > li').removeClass('current');
		$(this).closest('li').addClass('current');
		tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
		tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
		g.preventDefault();
	});

	// FAQ Accordion JS
	$('.accordion').find('.accordion-title').on('click', function(){
		// Adds Active Class
		$(this).toggleClass('active');
		// Expand or Collapse This Panel
		$(this).next().slideToggle('fast');
		// Hide The Other Panels
		$('.accordion-content').not($(this).next()).slideUp('fast');
		// Removes Active Class From Other Titles
		$('.accordion-title').not($(this)).removeClass('active');		
	});

	// Customer Slider JS
	$('.customer-slider').owlCarousel({
		items:1,
		loop: true,
		margin: 0,
		nav: false,
		dots: true,
		autoplay: true,
		smartSpeed: 1000,
		autoplayHoverPause: true,
		rtl: true,
		responsive: {
			0: {
				items: 1,
			},
			414: {
				items: 1,
			},
			576: {
				items: 2,
				margin: 20,
			},
			768: {
				items: 2,
				margin: 20,
			},
			992: {
				items: 1,
			},
			1200: {
				items: 1,
			},
		},
	});
	
	// Click Event JS
	$('.go-top').on('click', function() {
		$("html, body").animate({ scrollTop: "0" }, 50);
	});

	// Count Time JS
	function makeTimer() {
		var endTime = new Date("november  30, 2022 17:00:00 PDT");			
		var endTime = (Date.parse(endTime)) / 1000;
		var now = new Date();
		var now = (Date.parse(now) / 1000);
		var timeLeft = endTime - now;
		var days = Math.floor(timeLeft / 86400); 
		var hours = Math.floor((timeLeft - (days * 86400)) / 3600);
		var minutes = Math.floor((timeLeft - (days * 86400) - (hours * 3600 )) / 60);
		var seconds = Math.floor((timeLeft - (days * 86400) - (hours * 3600) - (minutes * 60)));
		if (hours < "10") { hours = "0" + hours; }
		if (minutes < "10") { minutes = "0" + minutes; }
		if (seconds < "10") { seconds = "0" + seconds; }
		$("#days, #days-p").html(days + "<span>روز</span>");
		$("#hours, #hours-p").html(hours + "<span>ساعت</span>");
		$("#minutes, #minutes-p").html(minutes + "<span>دقیقه</span>");
		$("#seconds, #seconds-p").html(seconds + "<span>ثانیه</span>");
	}
	setInterval(function() { makeTimer(); }, 300);

	// Preloader
	$(window).on('load', function() {
		$('.preloader').addClass('preloader-deactivate');
	}) 

	// Subscribe form JS
	$(".newsletter-form").validator().on("submit", function (event) {
		if (event.isDefaultPrevented()) {
		// handle the invalid form...
			formErrorSub();
			submitMSGSub(false, "ایمیل خود را به درستی وارد کنید.");
		} else {
			// everything looks good!
			event.preventDefault();
		}
	});
	function callbackFunction (resp) {
		if (resp.result === "success") {
			formSuccessSub();
		}
		else {
			formErrorSub();
		}
	}
	function formSuccessSub(){
		$(".newsletter-form")[0].reset();
		submitMSGSub(true, "با تشکر از اشتراک!");
		setTimeout(function() {
			$("#validator-newsletter").addClass('hide');
		}, 4000)
	}
	function formErrorSub(){
		$(".newsletter-form").addClass("animated shake");
		setTimeout(function() {
			$(".newsletter-form").removeClass("animated shake");
		}, 1000)
	}
	function submitMSGSub(valid, msg){
		if(valid){
			var msgClasses = "validation-success";
		} else {
			var msgClasses = "validation-danger";
		}
		$("#validator-newsletter, #validator-newsletter-2").removeClass().addClass(msgClasses).text(msg);
	}
	
	// AJAX MailChimp JS
	$(".newsletter-form").ajaxChimp({
		url: "https://Envy Theme.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9", // Your url MailChimp
		callback: callbackFunction
	});

	// WOW JS
	if($('.wow').length){
		var wow = new WOW({
			mobile: false
		});
		wow.init();
	}

	// Newsletter Modal
	$(document).ready(function(event){
		function loadPopup(event){
			if($(".popup-overlay").hasClass("popup-hide")){
				$(".popup-overlay").removeClass("popup-hide");
			}else{
				$(".popup-overlay").addClass("popup-show");
			}
		}
		setTimeout(loadPopup, 3500);
		
		$(".popup-close").click(function(e){
			$('.popup-overlay').addClass("popup-hide");
			e.preventDefault();
		})
	});

	// Input Plus & Minus Number JS
	$('.input-counter').each(function() {
		var spinner = jQuery(this),
		input = spinner.find('input[type="text"]'),
		btnUp = spinner.find('.plus-btn'),
		btnDown = spinner.find('.minus-btn'),
		min = input.attr('min'),
		max = input.attr('max');
		
		btnUp.on('click', function() {
			var oldValue = parseFloat(input.val());
			if (oldValue >= max) {
				var newVal = oldValue;
			} else {
				var newVal = oldValue + 1;
			}
			spinner.find("input").val(newVal);
			spinner.find("input").trigger("change");
		});
		btnDown.on('click', function() {
			var oldValue = parseFloat(input.val());
			if (oldValue <= min) {
				var newVal = oldValue;
			} else {
				var newVal = oldValue - 1;
			}
			spinner.find("input").val(newVal);
			spinner.find("input").trigger("change");
		});
	});

	// Range Slider JS
    $( "#range-slider").slider({
        range: true,
        min: 500,
        max: 10000,
        values: [500, 10000],
        slide: function( event, ui ) {
            $( "#price-amount" ).val( ui.values[ 0 ] + "تومان - " + ui.values[ 1 ] + "تومان" );
        }
    });
    $( "#price-amount" ).val( $( "#range-slider" ).slider( "values", 0 ) + "تومان - " +
    $( "#range-slider" ).slider( "values", 1 ) + "تومان");

	// Products Filter Options
	$(function(){
		$(".icon-view-three").on("click", function(e){
			e.preventDefault();
			document.getElementById("products-filter").classList.add('products-col-three')
			document.getElementById("products-filter").classList.remove('products-col-two', 'products-col-four', 'products-row-view');
		});
		
		$(".view-grid-switch").on("click", function(e){
			e.preventDefault();
			document.getElementById("products-filter").classList.add('products-row-view')
			document.getElementById("products-filter").classList.remove('products-col-two', 'products-col-three', 'products-col-four');
		});
	});

	// Language-switcher
    $(".language-option").each(function() {
        var each = $(this)
        each.find(".lang-name").html(each.find(".language-dropdown-menu a:nth-child(1)").text());
        var allOptions = $(".language-dropdown-menu").children('a');
        each.find(".language-dropdown-menu").on("click", "a", function() {
             allOptions.removeClass('selected');
             $(this).addClass('selected');
             $(this).closest(".language-option").find(".lang-name").html($(this).text());
        });
    })

})(jQuery);