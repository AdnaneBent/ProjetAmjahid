	/* ===================================================================

	Author       	: Incognito Themes
	Template Name	: Torneo - Multi-Purpose HTML5 Theme
	Version      	: 1.0

	* ================================================================= */



	/* ===== LOADER OVERLAY ===== */

	 jQuery(function ($) {
	'use strict';

	jQuery(document).ready(function ($) {

		/* ===== jQuery Varibles ===== */

			mainSlider();
			contentSlider();
			testimonialSlider();
			testimonialSliderTwo();
			testimonialSliderThree();
			clientSlider();
			teamSlider();
			teamSingleSlider();
			blogSlider();
			productItemSlider();
			blogGridSlider();
			appGallerySlider();
			serviceSlider();
			serviceSliderTwo();
			simpleSlider();
			portfolioSlider();
			projectSlider() ;
			projectSliderTwo();
			portfolioLayoutSlider();
			productNavSlider();
			productSlider();
			parallaxEffect();
			parallaxBackground();

		/* ===== PRELOADER  ===== */

		      $("#loader-overlay").delay(500).fadeOut();
	        $(".loader").delay(1000).fadeOut("slow");

	        $(window).trigger("scroll");
	        $(window).trigger("resize");

	        if (window.location.hash){

	            var hash_offset = $(window.location.hash).offset().top;
	            $("html, body").animate({
	                scrollTop: hash_offset
	            });
	  }


		/* ===== COUNTERS  ===== */

		$('.counter').counterUp({
            delay: 20,
            time: 4000
    });

		/* ===== SKILLS BAR ===== */

    $('.skillbar').skillBars({
        from: 0,
        speed: 4000,
        interval: 100,
        decimals: 0
    });

		/* ===== PIE CHARTS  ===== */

		$(function() {
				$('.chart-01').easyPieChart({
					easing: 'easeOutBounce',
					barColor: '#212121',
					trackColor: '#eeeeee',
          scaleColor: false,
					scaleLength: 2,
					size: 150, //110
					animate:{
						duration:2000,
						enabled:true
					},
					onStep: function(from, to, percent) {
						$(this.el).find('.percent').text(Math.round(percent));
					}
				});

				$('.chart-02').easyPieChart({
					easing: 'easeOutCirc',
					barColor: '#ffffff',
					trackColor: '#212121',
          scaleColor: false,
					scaleLength: 2,
					size: 120, //110
					animate:{
						duration:2000,
						enabled:true
					},
					onStep: function(from, to, percent) {
						$(this.el).find('.percent').text(Math.round(percent));
					}
				});

				$('.chart-03').easyPieChart({
					easing: 'easeInQuad',
					barColor: '#BF0731',
					trackColor: '#212121',
          scaleColor: false,
					scaleLength: 2,
					size: 140, //110
					animate:{
						duration:2000,
						enabled:true
					},
					onStep: function(from, to, percent) {
						$(this.el).find('.percent').text(Math.round(percent));
					}
				});
		});


	/* ===== COUNTDOWN ===== */

	if ($('.countdown').length > 0) {
        $(".countdown").countdown({
            date: "21 dec 2018 12:00:00",
            format: "on"
        });

	}


	/* ===== SIDE MENU ===== */

	$(".menu-btn a").on('click', function () {
        $(".menu-overlay").fadeToggle(200);
        $(this).toggleClass('btn-open').toggleClass('btn-close');
    });


  /* ===== SLICK SLIDERS ===== */

	/* ~~~ Hero Half Slider ~~~ */
	function mainSlider(){
	$(".default-slider").slick({
        dots: true,
        infinite: true,
        centerMode: true,
				autoplay: true,
        autoplaySpeed: 7000,
        slidesToShow: 1,
        slidesToScroll: 1,
				centerPadding: '0',
				responsive: [
		    	{
				  breakpoint: 480,
				  settings: {
					arrows: false,
				  }
				}
  		]
      });
	}

	/* ~~~ Text Content Slider ~~~ */
	function contentSlider(){
	$(".text-content-slider").slick({
        dots: true,
        infinite: true,
        centerMode: true,
				autoplay: true,
        autoplaySpeed: 7000,
        slidesToShow: 1,
        slidesToScroll: 1,
				centerPadding: '0',
				responsive: [
		    	{
				  breakpoint: 480,
				  settings: {
					arrows: true,
				  }
				}
  		]
      });
	}

	/* ~~~ Testimonials Slider ~~~ */
	function testimonialSlider(){
	$(".testimonial").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3,
		centerPadding: '0',
		prevArrow: false,
    	nextArrow: false,
		responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
	});
	}

	/* ~~~ Testimonials Slider 2 ~~~ */
	function testimonialSliderTwo(){
		$(".testimonial-style-2").slick({
	        dots: false,
	        infinite: true,
	        centerMode: true,
	        slidesToShow: 2,
	        slidesToScroll: 2,
			centerPadding: '0',
	      responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2,
	        infinite: true,
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	  ]
		});
	}

	/* ~~~ Testimonial Slider 3 ~~~ */
	function testimonialSliderThree(){
	$(".testimonial-style-6").slick({
        dots: true,
        infinite: true,
        centerMode: true,
				autoplay: true,
        autoplaySpeed: 7000,
        slidesToShow: 1,
        slidesToScroll: 1,
				centerPadding: '0',
				responsive: [
		    	{
				  breakpoint: 480,
				  settings: {
					arrows: false,
				  }
				}
  		]
      });
	}

	/* ~~~ Client Slider ~~~ */
	function clientSlider() {
	$(".client-slider").slick({
		slidesToShow: 6,
        slidesToScroll: 1,
		autoplay: true,
        autoplaySpeed: 5000,
		dots:false,
		prevArrow: false,
    	nextArrow: false,
		responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
	});
	}

	/* ~~~ Service Slider ~~~ */
	function serviceSlider(){
	$(".service-slider").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 1,
        slidesToScroll: 1,
				centerPadding: '0',
      });
	}

	/* ~~~ Service Slider Two ~~~ */
	function serviceSliderTwo(){
	$(".service-slider-2").slick({
        dots: true,
        infinite: true,
        centerMode: true,
				autoplay: true,
        autoplaySpeed: 7000,
        slidesToShow: 1,
        slidesToScroll: 1,
				centerPadding: '0',
				responsive: [
		    	{
				  breakpoint: 480,
				  settings: {
					arrows: true,
				  }
				}
  		]
      });
	}

	/* ~~~ Simple Slider ~~~ */
	function simpleSlider(){
	$(".simple-slider").slick({
        dots: false,
        infinite: true,
        centerMode: true,
				autoplay: true,
        autoplaySpeed: 3000,
				fade: true,
        slidesToShow: 1,
        slidesToScroll: 1,
				centerPadding: '0',
				responsive: [
		    	{
				  breakpoint: 480,
				  settings: {
					arrows: true,
				  }
				}
  		]
    });
	}

	/* ~~~ Team Slider ~~~ */
	function teamSlider() {
	$(".team-slider").slick({
		slidesToShow: 4,
        slidesToScroll: 1,
		autoplay: true,
        autoplaySpeed: 5000,
		dots:true,
		prevArrow: false,
    	nextArrow: false,
		responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
	});
	}

	function teamSingleSlider(){
	$(".team-slider-single").slick({
        dots: true,
        infinite: true,
        centerMode: true,
		autoplay: true,
        autoplaySpeed: 5000,
        slidesToShow: 1,
        slidesToScroll: 1,
		centerPadding: '0'
      });
	}

	/* ~~~ Blog Slider ~~~ */
	function blogSlider() {
	$(".blog-slider").slick({
		slidesToShow: 3,
        slidesToScroll: 1,
		autoplay: true,
        autoplaySpeed: 5000,
		dots:true,
		prevArrow: false,
    	nextArrow: false,
		responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
	});
	}
	/* ~~~ Porfolio Slider ~~~ */
	function portfolioSlider() {
    $(".portfolio-slider").slick({
				dots: true,
        infinite: true,
        centerMode: true,
				autoplay: true,
        autoplaySpeed: 5000,
        slidesToShow: 1,
        slidesToScroll: 1,
				centerPadding: '0'
			});
	}

	/* ~~~ Single Project Slider ~~~ */
	function projectSlider() {
    $(".single-project-slider").slick({
				dots: false,
        infinite: true,
        centerMode: true,
				autoplay: true,
        autoplaySpeed: 5000,
        slidesToShow: 3,
        slidesToScroll: 1,
				centerPadding: '0'
			});
	}

	/* ~~~ Single Project Slider ~~~ */
	function projectSliderTwo() {
    $(".single-project-slider-02").slick({
				dots: false,
        centerMode: true,
				autoplay: true,
        autoplaySpeed: 5000,
        slidesToShow: 2,
				centerPadding: '60px'
			});
	}

	/* ~~~ Portfolio Layout Slider ~~~ */
	function portfolioLayoutSlider() {
    $(".portfolio-layout-slider").slick({
				dots: false,
        centerMode: true,
				autoplay: true,
        autoplaySpeed: 5000,
        slidesToShow: 3,
				centerPadding: '60px'
			});
	}

	/* ~~~ Blog Grid Slider ~~~ */
	function blogGridSlider() {
    $(".blog-grid-slider").slick({
				dots: false,
        infinite: true,
        centerMode: true,
				autoplay: true,
        autoplaySpeed: 5000,
        slidesToShow: 1,
        slidesToScroll: 1,
				centerPadding: '0'
		});
	}

	/* ~~~ App Screen Slider ~~~ */
	function appGallerySlider() {
    $(".app-gallery-slider").slick({
				dots: true,
        infinite: true,
        centerMode: true,
				autoplay: true,
        autoplaySpeed: 5000,
        slidesToShow: 4,
        slidesToScroll: 1,
				centerPadding: '0'
		});
	}

	/* ~~~ Product Slider ~~~ */
	function productItemSlider() {
	$('.single-product-item').not('#product-slider').slick({
      autoplay: true,
      arrows: true,
      dots: false,
      swipeToSlide: true,
      prevArrow: '<button type="button" class="slick-prev"><i class="ion-android-arrow-back"></i></button>',
      nextArrow: '<button type="button" class="slick-next"><i class="ion-android-arrow-forward"></i></button>',
    });
	}

	function productNavSlider() {
    $('#product-slide').slick({
      arrows: false,
      dots: false,
      infinite: true,
      touchMove: false,
      asNavFor: '#product-slider',
      vertical: true,
      verticalSwiping: true,
      slidesToShow: 3,
      focusOnSelect: true,
      responsive: [
        {
          breakpoint: 767,
          settings: {
            vertical: false,
            slidesToShow: 3,
          }
        },
      ],
    });
	}

	function productSlider() {
    $('#product-slider').slick({
      arrows: true,
      dots: false,
      swipeToSlide: true,
      asNavFor: '#product-slide',
      prevArrow: '<button type="button" class="slick-prev"><i class="ion-android-arrow-back"></i></button>',
      nextArrow: '<button type="button" class="slick-next"><i class="ion-android-arrow-forward"></i></button>',
    });
	}

	/* ===== ONE PAGE SCROLLER ===== */

	$('a.page-scroll').on('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top - 50
        }, 1000, 'easeInOutExpo');
        event.preventDefault();
  });

	/* ===== TYPE IT ===== */

	$('.type-it').typeIt({
		speed: 100,
		cursor:true,
		breakLines:false,
		lifeLike:true,
		startDelete:false,
		loop:true,
    strings: ['thinking', 'color', 'photography', 'art', 'typography']
  });

	$('.type-it-2').typeIt({
		speed: 100,
		cursor:true,
		breakLines:false,
		lifeLike:true,
		startDelete:false,
		loop:true,
    strings: ['design', 'development', 'apps', 'animation', 'marketing']
  });

  /* ===== FIT VIDEOS ===== */
	$(".fit-videos").fitVids();

  /* ===== PARALLAX EFFECTS===== */
	function parallaxEffect() {
    	$('.parallax-effect').parallax();
	}

	function parallaxBackground() {
		$('.parallax-bg').parallaxBackground();
	}

	/* ===== ANIMATE TEXT ===== */

    if ($('.rotate').length > 0) {
        $(".rotate").textrotator({
            animation: "dissolve", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
            separator: "|", //  You can define a new separator (|, &, * etc.) by yourself using this field.
            speed: 2000 // How many milliseconds until the next word show.
        });
    }

	/* ===== SEARCH OVERLAY ===== */

	  var wHeight = window.innerHeight;
	  //search bar middle alignment
	  $('#fullscreen-searchform').css('top', wHeight / 2);
	  //reform search bar
	  jQuery(window).resize(function() {
		wHeight = window.innerHeight;
		$('#fullscreen-searchform').css('top', wHeight / 2);
	  });
	  // Search
	  $('#search-button').on('click', function () {
	 	$("div.fullscreen-search-overlay").addClass("fullscreen-search-overlay-show");
	  });
	  $('a.fullscreen-close').on('click', function () {
		$("div.fullscreen-search-overlay").removeClass("fullscreen-search-overlay-show");
	  });

	/* ===== ACCORDIONS ===== */

    $('.accordion-style-01 .collapse').on('show.bs.collapse', function () {
        var id = $(this).attr('id');
        $('a[href="#' + id + '"]').closest('.panel-heading').addClass('active-accordion');
        $('a[href="#' + id + '"] .panel-title span').html('<i class="ion-android-remove"></i>');
    });

    $('.accordion-style-01 .collapse').on('hide.bs.collapse', function () {
        var id = $(this).attr('id');
        $('a[href="#' + id + '"]').closest('.panel-heading').removeClass('active-accordion');
        $('a[href="#' + id + '"] .panel-title span').html('<i class="ion-android-add"></i>');
    });

		$('.accordion-style-02 .collapse').on('show.bs.collapse', function () {
        var id = $(this).attr('id');
        $('a[href="#' + id + '"]').closest('.panel-heading').addClass('active-accordion');
        $('a[href="#' + id + '"] .panel-title span').html('<i class="ion-android-remove"></i>');
    });

    $('.accordion-style-02 .collapse').on('hide.bs.collapse', function () {
        var id = $(this).attr('id');
        $('a[href="#' + id + '"]').closest('.panel-heading').removeClass('active-accordion');
        $('a[href="#' + id + '"] .panel-title span').html('<i class="ion-android-add"></i>');
    });

    $('.accordion-style-03 .collapse').on('show.bs.collapse', function () {
        var id = $(this).attr('id');
        $('a[href="#' + id + '"]').closest('.panel-heading').addClass('active-accordion');
        $('a[href="#' + id + '"] .panel-title').find('i').addClass('ion-chevron-up').removeClass('ion-chevron-down');
    });

    $('.accordion-style-03 .collapse').on('hide.bs.collapse', function () {
        var id = $(this).attr('id');
        $('a[href="#' + id + '"]').closest('.panel-heading').removeClass('active-accordion');
        $('a[href="#' + id + '"] .panel-title').find('i').removeClass('ion-chevron-up').addClass('ion-chevron-down');
    });

    $('.accordion-style-04 .collapse').on('show.bs.collapse', function () {
        var id = $(this).attr('id');
        $('a[href="#' + id + '"]').closest('.panel-heading').addClass('active-accordion');
        $('a[href="#' + id + '"] .panel-title').find('i').addClass('ion-chevron-up').removeClass('ion-chevron-down');
    });

    $('.accordion-style-04 .collapse').on('hide.bs.collapse', function () {
        var id = $(this).attr('id');
        $('a[href="#' + id + '"]').closest('.panel-heading').removeClass('active-accordion');
        $('a[href="#' + id + '"] .panel-title').find('i').removeClass('ion-chevron-up').addClass('ion-chevron-down');
    });

		$('.accordion-style-05 .collapse').on('show.bs.collapse', function () {
        var id = $(this).attr('id');
        $('a[href="#' + id + '"]').closest('.panel-heading').addClass('active-accordion');
        $('a[href="#' + id + '"] .panel-title').find('i').addClass('ion-chevron-up').removeClass('ion-chevron-down');
    });

    $('.accordion-style-05 .collapse').on('hide.bs.collapse', function () {
        var id = $(this).attr('id');
        $('a[href="#' + id + '"]').closest('.panel-heading').removeClass('active-accordion');
        $('a[href="#' + id + '"] .panel-title').find('i').removeClass('ion-chevron-up').addClass('ion-chevron-down');
    });

  /* ===== CONTACT FORM ===== */

	$(function () {

    $('#contact-form').validator();

    $('#contact-form').on('submit', function (e) {

        if (!e.isDefaultPrevented()) {
            var url = "assets/php/contact.php";
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                    var messageAlert = data.class;
                    var messageText = data.message;

                    var alertBox = '<div class="' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    if (messageAlert && messageText) {
                        $('#contact-form').find('.messages').html(alertBox);
                        $('#contact-form')[0].reset();
                    }
                }
            });
            return false;
        }
    	});

			$('#contact-form-02').validator();

	    $('#contact-form-02').on('submit', function (e) {

	        if (!e.isDefaultPrevented()) {
	            var url = "assets/php/contact.php";
	            $.ajax({
	                type: "POST",
	                url: url,
	                data: $(this).serialize(),
	                success: function (data)
	                {
	                    var messageAlert = data.class;
	                    var messageText = data.message;

	                    var alertBox = '<div class="' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
	                    if (messageAlert && messageText) {
	                        $('#contact-form-02').find('.messages').html(alertBox);
	                        $('#contact-form-02')[0].reset();
	                    }
	                }
	            });
	            return false;
	        }
	    	});

				$('#contact-form-03').validator();

		    $('#contact-form-03').on('submit', function (e) {

		        if (!e.isDefaultPrevented()) {
		            var url = "assets/php/contact.php";
		            $.ajax({
		                type: "POST",
		                url: url,
		                data: $(this).serialize(),
		                success: function (data)
		                {
		                    var messageAlert = data.class;
		                    var messageText = data.message;

		                    var alertBox = '<div class="' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
		                    if (messageAlert && messageText) {
		                        $('#contact-form-03').find('.messages').html(alertBox);
		                        $('#contact-form-03')[0].reset();
		                    }
		                }
		            });
		            return false;
		        }
		    	});

					$('#contact-form-04').validator();

			    $('#contact-form-04').on('submit', function (e) {

			        if (!e.isDefaultPrevented()) {
			            var url = "assets/php/contact.php";
			            $.ajax({
			                type: "POST",
			                url: url,
			                data: $(this).serialize(),
			                success: function (data)
			                {
			                    var messageAlert = data.class;
			                    var messageText = data.message;

			                    var alertBox = '<div class="' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
			                    if (messageAlert && messageText) {
			                        $('#contact-form-04').find('.messages').html(alertBox);
			                        $('#contact-form-04')[0].reset();
			                    }
			                }
			            });
			            return false;
			        }
			    	});
	});

	/* ===== REVOLUTION SLIDER LANDING ===== */

	var revapi347,
	tpj=jQuery;

	tpj(document).ready(function() {
	if($("#rev_slider_347_1").revolution == undefined){
		revslider_showDoubleJqueryError("#rev_slider_347_1");
	}else{
			$("#rev_slider_347_1").show().revolution({
			sliderType:"hero",
			jsFileLocation:"revolution/js/",
			sliderLayout:"fullscreen",
			dottedOverlay:"none",
			delay:9000,
			responsiveLevels:[1240,1240,778,480],
			visibilityLevels:[1240,1240,778,480],
			gridwidth:[1240,1240,778,480],
			gridheight:[868,868,960,720],
			lazyType:"none",
			parallax: {
				type:"scroll",
				origo:"slidercenter",
				speed:1000,
				speedbg:0,
				speedls:2000,
				levels:[8,16,24,32,-8,-16,-24,-32,36,2,4,6,50,-30,-20,55],
			},
			shadow:0,
			spinner:"",
			autoHeight:"off",
			fullScreenAutoWidth:"off",
			fullScreenAlignForce:"off",
			fullScreenOffsetContainer: "",
			fullScreenOffset: "",
			disableProgressBar:"on",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				disableFocusListener:false,
			}
		});
	}

	/* ===== REVOLUTION SLIDER MAIN ===== */

	if(tpj("#rev_slider_1078_1").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider_1078_1");
				}else{
					$("#rev_slider_1078_1").show().revolution({
						sliderType:"standard",
						jsFileLocation:"revolution/js/",
						sliderLayout:"fullscreen",
						dottedOverlay:"none",
						delay:9000,
						navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
 							mouseScrollReverse:"default",
							onHoverStop:"off",
							touch:{
								touchenabled:"on",
								swipe_threshold: 75,
								swipe_min_touches: 1,
								swipe_direction: "horizontal",
								drag_block_vertical: false
							}
							,
							arrows: {
								style:"zeus",
								enable:true,
								hide_onmobile:true,
								hide_under:600,
								hide_onleave:true,
								hide_delay:200,
								hide_delay_mobile:1200,
								tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
								left: {
									h_align:"left",
									v_align:"center",
									h_offset:30,
									v_offset:0
								},
								right: {
									h_align:"right",
									v_align:"center",
									h_offset:30,
									v_offset:0
								}
							}
							,
							bullets: {
								enable:false,
								hide_onmobile:false,
								hide_under:600,
								style:"metis",
								hide_onleave:true,
								hide_delay:200,
								hide_delay_mobile:1200,
								direction:"horizontal",
								h_align:"center",
								v_align:"bottom",
								h_offset:0,
								v_offset:30,
								space:5,
								tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span>'
							}
						},
						viewPort: {
							enable:false,
							outof:"pause",
							visible_area:"80%",
							presize:false
						},
						responsiveLevels:[1240,1024,778,480],
						visibilityLevels:[1240,1024,778,480],
						gridwidth:[1240,1024,778,480],
						gridheight:[600,600,500,400],
						lazyType:"none",
						parallax: {
							type:"mouse",
							origo:"slidercenter",
							speed:2000,
							levels:[2,3,4,5,6,7,12,16,10,50,47,48,49,50,51,55],
							type:"mouse",
						},
						shadow:0,
						spinner:"off",
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,
						shuffle:"off",
						autoHeight:"off",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
					});
				}
	});

	/* ===== REVOLUTION SLIDER CORPORATE ===== */

	if(tpj("#rev_slider_1059_1").revolution == undefined){
                    revslider_showDoubleJqueryError("#rev_slider_1059_1");
                }else{
                    $("#rev_slider_1059_1").show().revolution({
                        sliderType:"standard",
						jsFileLocation:"revolution/js/",
                        sliderLayout:"fullscreen",
                        dottedOverlay:"none",
                        delay:9000,
                        navigation: {
                            keyboardNavigation:"off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation:"off",
                            mouseScrollReverse:"default",
                            onHoverStop:"off",
                            touch:{
                                touchenabled:"on",
                                swipe_threshold: 75,
                                swipe_min_touches: 50,
                                swipe_direction: "horizontal",
                                drag_block_vertical: false
                            }
                            ,
                            bullets: {
                                enable:true,
                                hide_onmobile:true,
                                hide_under:800,
                                style:"zeus",
                                hide_onleave:false,
                                direction:"horizontal",
                                h_align:"center",
                                v_align:"bottom",
                                h_offset:0,
                                v_offset:30,
                                space:5,
                                tmp:''
                            }
                        },
                        responsiveLevels:[1240,1024,778,480],
                        visibilityLevels:[1240,1024,778,480],
                        gridwidth:[1240,1024,778,480],
                        gridheight:[868,768,960,720],
                        lazyType:"none",
                        parallax: {
                            type:"scroll",
                            origo:"slidercenter",
                            speed:1000,
                            levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,100,55],
                            type:"scroll",
                        },
                        shadow:0,
                        spinner:"off",
                        stopLoop:"on",
                        stopAfterLoops:0,
                        stopAtSlide:1,
                        shuffle:"off",
                        autoHeight:"off",
                        fullScreenAutoWidth:"off",
                        fullScreenAlignForce:"off",
                        fullScreenOffsetContainer: "",
                        fullScreenOffset: "60px",
                        disableProgressBar:"on",
                        hideThumbsOnMobile:"off",
                        hideSliderAtLimit:0,
                        hideCaptionAtLimit:0,
                        hideAllCaptionAtLilmit:0,
                        debugMode:false,
                        fallbacks: {
                            simplifyAll:"off",
                            nextSlideOnWindowFocus:"off",
                            disableFocusListener:false,
                        }
                    });
  }

	/* ===== REVOLUTION SLIDER STARTUP ===== */

	if(tpj("#rev_slider_1163_1").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider_1163_1");
				}else{
					$("#rev_slider_1163_1").show().revolution({
						sliderType:"standard",
						jsFileLocation:"revolution/js/",
						sliderLayout:"fullscreen",
						dottedOverlay:"none",
						delay:9000,
						navigation: {
							onHoverStop:"off",
						},
						responsiveLevels:[1240,1024,778,480],
						visibilityLevels:[1240,1024,778,480],
						gridwidth:[1240,1024,778,480],
						gridheight:[1000,900,960,720],
						lazyType:"none",
						parallax: {
							type:"scroll",
							origo:"slidercenter",
							speed:400,
							levels:[5,10,15,20,25,30,50,60,-5,-10,-15,-20,-25,-30,-35,55],
							type:"scroll",
						},
						shadow:0,
						spinner:"off",
						stopLoop:"on",
						stopAfterLoops:0,
						stopAtSlide:1,
						shuffle:"off",
						autoHeight:"off",
						fullScreenAutoWidth:"off",
						fullScreenAlignForce:"off",
						fullScreenOffsetContainer: "",
						fullScreenOffset: "60px",
						disableProgressBar:"on",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
					});
	}

	/* ===== REVOLUTION SLIDER STUDIO ===== */

	if(tpj("#rev_slider_1174_1").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider_1174_1");
				}else{
					$("#rev_slider_1174_1").show().revolution({
						sliderType:"hero",
						jsFileLocation:"revolution/js/",
						sliderLayout:"fullscreen",
						dottedOverlay:"none",
						delay:9000,
						navigation: {
						},
						responsiveLevels:[1240,1024,778,480],
						visibilityLevels:[1240,1024,778,480],
						gridwidth:[1240,1024,778,480],
						gridheight:[868,768,960,720],
						lazyType:"none",
						parallax: {
							type:"scroll",
							origo:"slidercenter",
							speed:400,
							levels:[10,15,20,25,30,35,40,-10,-15,-20,-25,-30,-35,-40,-45,55],
							type:"scroll",
						},
						shadow:0,
						spinner:"off",
						autoHeight:"off",
						fullScreenAutoWidth:"off",
						fullScreenAlignForce:"off",
						fullScreenOffsetContainer: "",
						fullScreenOffset: "60px",
						disableProgressBar:"on",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							disableFocusListener:false,
						}
					});
	}

	/* ===== REVOLUTION SLIDER CREATIVE AGENCY ===== */

	if(tpj("#rev_slider_151_1").revolution == undefined){
		revslider_showDoubleJqueryError("#rev_slider_151_1");
	}else{
		$("#rev_slider_151_1").show().revolution({
			sliderType:"standard",
			jsFileLocation:"revolution/js/",
			sliderLayout:"fullscreen",
			dottedOverlay:"none",
			delay:9000,
			navigation: {
				keyboardNavigation:"off",
				keyboard_direction: "vertical",
				mouseScrollNavigation:"off",
				mouseScrollReverse:"default",
				onHoverStop:"off",
				touch:{
					touchenabled:"on",
					swipe_threshold: 75,
					swipe_min_touches: 1,
					swipe_direction: "horizontal",
					drag_block_vertical: false
				}
				,
				arrows: {
					style:"uranus",
					enable:true,
					hide_onmobile:false,
					hide_over:479,
					hide_onleave:false,
					tmp:'',
					left: {
						h_align:"left",
						v_align:"center",
						h_offset:0,
						v_offset:0
					},
					right: {
						h_align:"right",
						v_align:"center",
						h_offset:0,
						v_offset:0
					}
				}
			},
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1240,1024,778,480],
			gridheight:[868,768,960,720],
			lazyType:"none",
			scrolleffect: {
				blur:"on",
				maxblur:"20",
				on_slidebg:"on",
				direction:"top",
				multiplicator:"2",
				multiplicator_layers:"2",
				tilt:"10",
				disable_on_mobile:"off",
			},
			parallax: {
				type:"scroll",
				origo:"slidercenter",
				speed:400,
				levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
			},
			shadow:0,
			spinner:"",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
			fullScreenAutoWidth:"off",
			fullScreenAlignForce:"off",
			fullScreenOffsetContainer: "",
			fullScreenOffset: "60px",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
	}

	/* ===== REVOLUTION SLIDER CLASSIC ===== */

	if(tpj("#rev_slider_1061_1").revolution == undefined){
			revslider_showDoubleJqueryError("#rev_slider_1061_1");
	}else{
					$("#rev_slider_1061_1").show().revolution({
					sliderType:"standard",
					jsFileLocation:"revolution/js/",
					sliderLayout:"fullscreen",
					dottedOverlay:"none",
					delay:9000,
					navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
							mouseScrollReverse:"default",
							onHoverStop:"off",
							touch:{
									touchenabled:"on",
									swipe_threshold: 75,
									swipe_min_touches: 50,
									swipe_direction: "horizontal",
									drag_block_vertical: false
							}
							,
							tabs: {
									style:"metis",
									enable:true,
									width:250,
									height:40,
									min_width:249,
									wrapper_padding:0,
									wrapper_color:"",
									wrapper_opacity:"0",
									tmp:'<div class="tp-tab-wrapper"><div class="tp-tab-number">{{param1}}</div><div class="tp-tab-divider"></div><div class="tp-tab-title-mask"><div class="tp-tab-title">{{title}}</div></div></div>',
									visibleAmount: 5,
									hide_onmobile: true,
									hide_under:800,
									hide_onleave:false,
									hide_delay:200,
									direction:"vertical",
									span:true,
									position:"inner",
									space:0,
									h_align:"left",
									v_align:"center",
									h_offset:0,
									v_offset:0
							}
					},
					responsiveLevels:[1240,1024,778,480],
					visibilityLevels:[1240,1024,778,480],
					gridwidth:[1240,1024,778,480],
					gridheight:[868,768,960,720],
					lazyType:"none",
					parallax: {
							type:"3D",
							origo:"slidercenter",
							speed:1000,
							levels:[2,4,6,8,10,12,14,16,45,50,47,48,49,50,0,50],
							type:"3D",
							ddd_shadow:"off",
							ddd_bgfreeze:"on",
							ddd_overflow:"hidden",
							ddd_layer_overflow:"visible",
							ddd_z_correction:100,
					},
					spinner:"off",
					stopLoop:"on",
					stopAfterLoops:0,
					stopAtSlide:1,
					shuffle:"off",
					autoHeight:"off",
					fullScreenAutoWidth:"off",
					fullScreenAlignForce:"off",
					fullScreenOffsetContainer: "",
					fullScreenOffset: "60px",
					disableProgressBar:"on",
					hideThumbsOnMobile:"off",
					hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					debugMode:false,
					fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
					}
			});
	}

/* ===== REVOLUTION SLIDER RESTAURANT ===== */

if(tpj("#rev_slider_1164_1").revolution == undefined){
	revslider_showDoubleJqueryError("#rev_slider_1164_1");
}else{
	$("#rev_slider_1164_1").show().revolution({
		sliderType:"standard",
		jsFileLocation:"revolution/js/",
		sliderLayout:"fullscreen",
		dottedOverlay:"none",
		delay:9000,
		navigation: {
			keyboardNavigation:"off",
			keyboard_direction: "horizontal",
			mouseScrollNavigation:"off",
			mouseScrollReverse:"default",
			onHoverStop:"off",
			touch:{
				touchenabled:"on",
				swipe_threshold: 75,
				swipe_min_touches: 1,
				swipe_direction: "horizontal",
				drag_block_vertical: false
			}
			,
			arrows: {
				style:"gyges",
				enable:true,
				hide_onmobile:false,
				hide_over:1199,
				hide_onleave:false,
				tmp:'',
				left: {
					h_align:"right",
					v_align:"bottom",
					h_offset:60,
					v_offset:20
				},
				right: {
					h_align:"right",
					v_align:"bottom",
					h_offset:20,
					v_offset:20
				}
			}
			,
			tabs: {
				style:"news-header",
				enable:true,
				width:350,
				height:50,
				min_width:350,
				wrapper_padding:5,
				wrapper_color:"transparent",
				wrapper_opacity:"0.05",
				tmp:'<div class="tp-tab-title">{{title}} <i style="float:right; margin-top:5px;" class="fa-icon-chevron-right"></i></div><div class="tp-tab-desc">{{param1}}</div>',
				visibleAmount: 3,
				hide_onmobile: true,
				hide_under:1200,
				hide_onleave:false,
				hide_delay:200,
				direction:"vertical",
				span:false,
				position:"inner",
				space:25,
				h_align:"right",
				v_align:"bottom",
				h_offset:43,
				v_offset:110
			}
		},
		responsiveLevels:[1240,1024,778,480],
		visibilityLevels:[1240,1024,778,480],
		gridwidth:[1240,1024,778,480],
		gridheight:[868,768,960,720],
		lazyType:"single",
		parallax: {
			type:"scroll",
			origo:"slidercenter",
			speed:400,
			levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
			type:"scroll",
		},
		shadow:0,
		spinner:"off",
		stopLoop:"on",
		stopAfterLoops:0,
		stopAtSlide:1,
		shuffle:"off",
		autoHeight:"off",
		fullScreenAutoWidth:"off",
		fullScreenAlignForce:"off",
		fullScreenOffsetContainer: ".header",
		fullScreenOffset: "60px",
		disableProgressBar:"on",
		hideThumbsOnMobile:"off",
		hideSliderAtLimit:0,
		hideCaptionAtLimit:0,
		hideAllCaptionAtLilmit:0,
		debugMode:false,
		fallbacks: {
			simplifyAll:"off",
			nextSlideOnWindowFocus:"off",
			disableFocusListener:false,
			}
		});
}

/* ===== YOUTUBE VIDEO BACKGROUND ===== */

	if(tpj("#rev_slider_1042_1").revolution == undefined){
		revslider_showDoubleJqueryError("#rev_slider_1042_1");
	}else{
			$("#rev_slider_1042_1").show().revolution({
			sliderType:"standard",
			jsFileLocation:"revolution/js/",
			sliderLayout:"fullwidth",
			dottedOverlay:"none",
			delay:9000,
			navigation: {
				onHoverStop:"off",
			},
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1240,1024,778,480],
			gridheight:[600,500,400,270],
			lazyType:"none",
			parallax: {
				type:"scroll",
				origo:"slidercenter",
				speed:2000,
				levels:[2,3,4,5,6,7,12,16,10,50,46,47,48,49,50,55],
				type:"scroll",
			},
			shadow:0,
			spinner:"off",
			stopLoop:"on",
			stopAfterLoops:0,
			stopAtSlide:1,
			shuffle:"off",
			autoHeight:"off",
			disableProgressBar:"on",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
	}

	/* ===== VIMEO VIDEO BACKGROUND ===== */

	if(tpj("#rev_slider_1040_1").revolution == undefined){
		revslider_showDoubleJqueryError("#rev_slider_1040_1");
	}else{
		$("#rev_slider_1040_1").show().revolution({
			sliderType:"standard",
			jsFileLocation:"revolution/js/",
			sliderLayout:"fullwidth",
			dottedOverlay:"none",
			delay:9000,
			navigation: {
				onHoverStop:"off",
			},
			responsiveLevels:[1240,1024,778,480],
			visibilityLevels:[1240,1024,778,480],
			gridwidth:[1240,1024,778,480],
			gridheight:[600,500,400,270],
			lazyType:"none",
			parallax: {
				type:"scroll",
				origo:"slidercenter",
				speed:2000,
				levels:[2,3,4,5,6,7,12,16,10,50,46,47,48,49,50,55],
				type:"scroll",
			},
			shadow:0,
			spinner:"off",
			stopLoop:"on",
			stopAfterLoops:0,
			stopAtSlide:1,
			shuffle:"off",
			autoHeight:"off",
			disableProgressBar:"on",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				nextSlideOnWindowFocus:"off",
				disableFocusListener:false,
			}
		});
	}

	/* ===== HTML5 VIDEO BACKGROUND ===== */

	if(tpj("#rev_slider_1071_1").revolution == undefined){
		revslider_showDoubleJqueryError("#rev_slider_1071_1");
	}else{
			$("#rev_slider_1071_1").show().revolution({
			sliderType:"hero",
			jsFileLocation:"revolution/js/",
			sliderLayout:"fullscreen",
			dottedOverlay:"none",
			delay:20000,
			navigation: {
			},
			responsiveLevels:[1240,1024,778,778],
			visibilityLevels:[1240,1024,778,778],
			gridwidth:[1240,1024,778,480],
			gridheight:[600,500,400,300],
			lazyType:"none",
			parallax: {
				type:"mouse",
				origo:"slidercenter",
				speed:2000,
				levels:[2,3,4,5,6,7,12,16,10,50,46,47,48,49,50,55],
				type:"mouse",
			},
			shadow:0,
			spinner:"off",
			autoHeight:"off",
			fullScreenAutoWidth:"off",
			fullScreenAlignForce:"off",
			fullScreenOffsetContainer: "",
			fullScreenOffset: "60px",
			disableProgressBar:"on",
			hideThumbsOnMobile:"off",
			hideSliderAtLimit:0,
			hideCaptionAtLimit:0,
			hideAllCaptionAtLilmit:0,
			debugMode:false,
			fallbacks: {
				simplifyAll:"off",
				disableFocusListener:false,
			}
		});
		}

		/* ===== REVOLUTION SLIDER CREATIVE PORTFOLIO ===== */

		if(tpj("#rev_slider_484_1").revolution == undefined){
				revslider_showDoubleJqueryError("#rev_slider_484_1");
		}else{
					$("#rev_slider_484_1").show().revolution({
						sliderType:"standard",
						jsFileLocation:"revolution/js/",
						sliderLayout:"fullscreen",
						dottedOverlay:"none",
						delay:9000,
						navigation: {
								keyboardNavigation:"off",
								keyboard_direction: "horizontal",
								mouseScrollNavigation:"off",
								mouseScrollReverse:"default",
								onHoverStop:"off",
								touch:{
										touchenabled:"on",
										swipe_threshold: 75,
										swipe_min_touches: 1,
										swipe_direction: "horizontal",
										drag_block_vertical: false
								}
						},
						responsiveLevels:[1240,1024,778,480],
						visibilityLevels:[1240,1024,778,480],
						gridwidth:[1240,1024,778,480],
						gridheight:[900,768,960,720],
						lazyType:"single",
						parallax: {
								type:"mouse",
								origo:"slidercenter",
								speed:300,
								levels:[2,4,6,8,10,12,14,16,18,20,22,24,49,50,51,55],
								type:"mouse",
						},
						shadow:0,
						spinner:"",
						stopLoop:"on",
						stopAfterLoops:0,
						stopAtSlide:1,
						shuffle:"off",
						autoHeight:"off",
						fullScreenAutoWidth:"off",
						fullScreenAlignForce:"off",
						fullScreenOffsetContainer: "",
						fullScreenOffset: "",
						disableProgressBar:"on",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
								simplifyAll:"off",
								nextSlideOnWindowFocus:"off",
								disableFocusListener:false,
						}
				});
		}

    /* ===== CBP PORTFOLIO ===== */

	 $(window).on('load', function(){

		 var wow = new WOW({
				offset: 100,
				mobile: false
			  }
			);
			wow.init();

		 /* ~~~ Blog Masonry ~~~ */
		if ($('#blogMasonry').length > 0) {

			$('#blogMasonry').masonry({
			   //options
			  itemSelector: '.blog-masonry-item',
			});
		}


		$('#portfolio-gallery').cubeportfolio({
			filters: '#portfolio-gallery-filter',
			layoutMode: 'grid',
			defaultFilter: '*',
			animationType: 'frontRow',
			gapHorizontal: 0,
			gapVertical: 0,
			gridAdjustment: '',
			mediaQueries: [{
				width: 1500,
				cols: 5
			}, {
				width: 1100,
				cols: 4
			}, {
				width: 800,
				cols: 3
			}, {
				width: 480,
				cols: 2
			}, {
				width: 320,
				cols: 1
			}],
			caption: 'overlayBottomAlong',
			displayType: 'bottomToTop',
			displayTypeSpeed: 300,

			// lightbox
			lightboxDelegate: '.cbp-lightbox',
			lightboxGallery: true,
			lightboxTitleSrc: 'data-title',
			lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>'
		});

		$('#js-grid-masonry-projects').cubeportfolio({
			filters: '#js-filters-masonry-projects',
			layoutMode: 'grid',
			defaultFilter: '*',
			animationType: 'foldLeft',
			gapHorizontal: 0,
			gapVertical: 0,
			gridAdjustment: '',
			mediaQueries: [{
				width: 1500,
				cols: 5
			}, {
				width: 1100,
				cols: 4
			}, {
				width: 800,
				cols: 3
			}, {
				width: 480,
				cols: 2
			}, {
				width: 320,
				cols: 1
			}],
			caption: 'zoom',
			displayType: 'fadeIn',
			displayTypeSpeed: 100,

			// lightbox
			lightboxDelegate: '.cbp-lightbox',
			lightboxGallery: true,
			lightboxTitleSrc: 'data-title',
			lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>'
		});

	});


	/* === MAGNIFIC POPUP === */

	$('.tr-modal-popup').magnificPopup({
			delegate: 'a',
			removalDelay: 500, //delay removal by X to allow out-animation
			callbacks: {
				beforeOpen: function() {
					 this.st.mainClass = this.st.el.attr('data-effect');
				}
			},
			midClick: true
		});

		$(document).on('click', '.popup-modal-close', function (e) {
        e.preventDefault();
        $.magnificPopup.close();
    });

		$('.magnific-lightbox').magnificPopup({
			type: 'image',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			fixedContentPos: false
			// other options
		});

		$('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
			disableOn: 700,
			type: 'iframe',
			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false
		});

	});

	/* ===== BACK TO TOP  ===== */

	$(window).on ('scroll', function(e) {
		if ($(this).scrollTop() >= 50) {
			$('#return-to-top').fadeIn(200);
		} else {
			$('#return-to-top').fadeOut(200);
		}
	});

	$('#return-to-top').on ('click', function(e) {
		$('body,html').animate({
			scrollTop : 0
		}, 500);
	});

	/* ===== RENGE SLIDER ===== */

	$('.range-slider').jRange({
  	from: 0,
    to: 100,
    step: 1,
    scale: [0,25,50,75,100],
    format: '%s',
    width: 262,
    showLabels: true,
    isRange : true
  });

	/* ===== FIXED FOOTER ===== */

	var $window = $(window);

	$('<div class="footer-height"></div>').insertAfter('#footer-fixed');

	$window.on('resize', function() {
        $('.footer-height').css('height', $('#footer-fixed').height());
      })
      .trigger('resize');

	  if ($('#footer-fixed').length) {

    }

	/* ===== GOOGLE MAPS  ===== */

		/* ~~~ Default Map ~~~ */
		if($("#myMap").length>0){var $latitude=42.008315,$longitude=-88.163807,$map_zoom=12,$marker_url="assets/images/pin.png",style=[{featureType:"all",elementType:"geometry.fill",stylers:[{weight:"2.00"}]},{featureType:"all",elementType:"geometry.stroke",stylers:[{color:"#9c9c9c"}]},{featureType:"all",elementType:"labels.text",stylers:[{visibility:"on"}]},{featureType:"landscape",elementType:"all",stylers:[{color:"#f2f2f2"}]},{featureType:"landscape",elementType:"geometry.fill",stylers:[{color:"#ffffff"}]},{featureType:"landscape.man_made",elementType:"geometry.fill",stylers:[{color:"#ffffff"}]},{featureType:"poi",elementType:"all",stylers:[{visibility:"on"}]},{featureType:"road",elementType:"all",stylers:[{saturation:-100},{lightness:45}]},{featureType:"road",elementType:"geometry.fill",stylers:[{color:"#eeeeee"}]},{featureType:"road",elementType:"labels.text.fill",stylers:[{color:"#7b7b7b"}]},{featureType:"road",elementType:"labels.text.stroke",stylers:[{color:"#ffffff"}]},{featureType:"road.highway",elementType:"all",stylers:[{visibility:"simplified"}]},{featureType:"road.arterial",elementType:"labels.icon",stylers:[{visibility:"on"}]},{featureType:"transit",elementType:"all",stylers:[{visibility:"on"}]},{featureType:"water",elementType:"all",stylers:[{color:"#46bcec"},{visibility:"on"}]},{featureType:"water",elementType:"geometry.fill",stylers:[{color:"#c8d7d4"}]},{featureType:"water",elementType:"labels.text.fill",stylers:[{color:"#070707"}]},{featureType:"water",elementType:"labels.text.stroke",stylers:[{color:"#ffffff"}]}],map_options={center:new google.maps.LatLng($latitude,$longitude),zoom:$map_zoom,panControl:!0,zoomControl:!0,mapTypeControl:!0,streetViewControl:!0,mapTypeId:google.maps.MapTypeId.ROADMAP,scrollwheel:!1,styles:style},map=new google.maps.Map(document.getElementById("myMap"),map_options),marker=new google.maps.Marker({position:new google.maps.LatLng($latitude,$longitude),map:map,visible:!0,icon:$marker_url}),contentString='<div id="mapcontent"><p>Grandy Studio</p></div>',infowindow=new google.maps.InfoWindow({maxWidth:320,content:contentString});google.maps.event.addListener(marker,"click",function(){infowindow.open(map,marker)})}

		/* ~~~ Dark Style Map ~~~ */
		if($("#map-style-2").length>0){var $latitude=42.008315,$longitude=-88.163807,$map_zoom=12,$marker_url="assets/images/pin.png",style=[{elementType:"geometry",stylers:[{color:"#212121"}]},{elementType:"labels.icon",stylers:[{visibility:"off"}]},{elementType:"labels.text.fill",stylers:[{color:"#757575"}]},{elementType:"labels.text.stroke",stylers:[{color:"#212121"}]},{featureType:"administrative",elementType:"geometry",stylers:[{color:"#757575"}]},{featureType:"administrative.country",elementType:"labels.text.fill",stylers:[{color:"#9e9e9e"}]},{featureType:"administrative.land_parcel",stylers:[{visibility:"off"}]},{featureType:"administrative.locality",elementType:"labels.text.fill",stylers:[{color:"#bdbdbd"}]},{featureType:"poi",elementType:"labels.text.fill",stylers:[{color:"#757575"}]},{featureType:"poi.park",elementType:"geometry",stylers:[{color:"#181818"}]},{featureType:"poi.park",elementType:"labels.text.fill",stylers:[{color:"#616161"}]},{featureType:"poi.park",elementType:"labels.text.stroke",stylers:[{color:"#1b1b1b"}]},{featureType:"road",elementType:"geometry.fill",stylers:[{color:"#2c2c2c"}]},{featureType:"road",elementType:"labels.text.fill",stylers:[{color:"#8a8a8a"}]},{featureType:"road.arterial",elementType:"geometry",stylers:[{color:"#373737"}]},{featureType:"road.highway",elementType:"geometry",stylers:[{color:"#3c3c3c"}]},{featureType:"road.highway.controlled_access",elementType:"geometry",stylers:[{color:"#4e4e4e"}]},{featureType:"road.local",elementType:"labels.text.fill",stylers:[{color:"#616161"}]},{featureType:"transit",elementType:"labels.text.fill",stylers:[{color:"#757575"}]},{featureType:"water",elementType:"geometry",stylers:[{color:"#000000"}]},{featureType:"water",elementType:"labels.text.fill",stylers:[{color:"#3d3d3d"}]}],map_options={center:new google.maps.LatLng($latitude,$longitude),zoom:$map_zoom,panControl:!0,zoomControl:!0,mapTypeControl:!0,streetViewControl:!0,mapTypeId:google.maps.MapTypeId.ROADMAP,scrollwheel:!1,styles:style},map=new google.maps.Map(document.getElementById("map-style-2"),map_options),marker=new google.maps.Marker({position:new google.maps.LatLng($latitude,$longitude),map:map,visible:!0,icon:$marker_url}),infowindow=new google.maps.InfoWindow({maxWidth:320,content:contentString});google.maps.event.addListener(marker,"click",function(){infowindow.open(map,marker)})}

		/* ~~~ Light Style Map ~~~ */
		if($("#map-style-3").length>0){var $latitude=42.008315,$longitude=-88.163807,$map_zoom=12,$marker_url="assets/images/pin.png",style=[{elementType:"geometry",stylers:[{color:"#f5f5f5"}]},{elementType:"labels.icon",stylers:[{visibility:"off"}]},{elementType:"labels.text.fill",stylers:[{color:"#616161"}]},{elementType:"labels.text.stroke",stylers:[{color:"#f5f5f5"}]},{featureType:"administrative.land_parcel",elementType:"labels.text.fill",stylers:[{color:"#bdbdbd"}]},{featureType:"poi",elementType:"geometry",stylers:[{color:"#eeeeee"}]},{featureType:"poi",elementType:"labels.text.fill",stylers:[{color:"#757575"}]},{featureType:"poi.park",elementType:"geometry",stylers:[{color:"#e5e5e5"}]},{featureType:"poi.park",elementType:"labels.text.fill",stylers:[{color:"#9e9e9e"}]},{featureType:"road",elementType:"geometry",stylers:[{color:"#ffffff"}]},{featureType:"road.arterial",elementType:"labels.text.fill",stylers:[{color:"#757575"}]},{featureType:"road.highway",elementType:"geometry",stylers:[{color:"#dadada"}]},{featureType:"road.highway",elementType:"labels.text.fill",stylers:[{color:"#616161"}]},{featureType:"road.local",elementType:"labels.text.fill",stylers:[{color:"#9e9e9e"}]},{featureType:"transit.line",elementType:"geometry",stylers:[{color:"#e5e5e5"}]},{featureType:"transit.station",elementType:"geometry",stylers:[{color:"#eeeeee"}]},{featureType:"water",elementType:"geometry",stylers:[{color:"#c9c9c9"}]},{featureType:"water",elementType:"labels.text.fill",stylers:[{color:"#9e9e9e"}]}],map_options={center:new google.maps.LatLng($latitude,$longitude),zoom:$map_zoom,panControl:!0,zoomControl:!0,mapTypeControl:!0,streetViewControl:!0,mapTypeId:google.maps.MapTypeId.ROADMAP,scrollwheel:!1,styles:style},map=new google.maps.Map(document.getElementById("map-style-3"),map_options),marker=new google.maps.Marker({position:new google.maps.LatLng($latitude,$longitude),map:map,visible:!0,icon:$marker_url}),infowindow=new google.maps.InfoWindow({maxWidth:320,content:contentString});google.maps.event.addListener(marker,"click",function(){infowindow.open(map,marker)})}


	});

/*End Jquery*/
