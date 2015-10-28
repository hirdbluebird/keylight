$(window).load(function(){
	$('.globalpreloader').fadeOut();
	$('body').removeClass('loading');
	var navigation = responsiveNav("#mainnav", {
        insert: "before",
        animate: false
      });

	var windowWidth = $(window).width();

	if(windowWidth <= 768) {
		$('#mainnav ul li a').click(function(){
			navigation.toggle();
		})
	}
	
	/* Portfolio 1 */
	if($('.gallery').length) {
	 $(".gallery").carouFredSel({
	 	width: "100%",
	 	responsive: true,
		scroll: 1,
		items: {
			visible: {
				min: 1,
				max: 4
			},
			width: 300,
			height: 'variable'
		},
		prev: '#portfolioprev',
		next: '#portfolionext',
		pagination  : "#gallerynav",
		auto: false,
		swipe       : {
            onTouch : true,
            onMouse : true,
            options : {
            	excludedElements: ''
            }
        }
	 });
	 $('.gallery .item a').each(function() {
		$('span.hover', this).remove();
		var data_desctitle = $(this).attr("data-title");
		var data_desccaption = $(this).attr("data-caption").replace(/(<([^>]+)>)/ig,"");

		$(this).prepend('<span class="hover"><span class="heading"><span class="headingcont">'+data_desctitle+'<span class="description">'+data_desccaption+'</span></span></span></span>');
	});	
	}

	if($('#quotecarousel').length) {
	 $("#quotecarousel").carouFredSel({
	 	responsive: true,
		scroll: 1,
		items: {
			width: 300
		},
		auto: false,
		pagination  : "#quotecarouselnav",
		swipe       : {
            onTouch : true,
            onMouse : true,
            options : {
            	excludedElements: ''
            }
        }
	 });
	}
	if($('#singleportfoliocarousel').length) {
	 $("#singleportfoliocarousel").carouFredSel({
	 	responsive: true,
		scroll: 1,
		items: {
			visible: {
				min: 1,
				max: 1
			},
			width: 300,
			height: 'variable'
		},
		auto: false,
		pagination  : "#singleportfoliocarouselnav",
		swipe       : {
            onTouch : true,
            onMouse : true,
            options : {
            	excludedElements: ''
            }
        },
        prev: '#singleportfolioprev',
		next: '#singleportfolionext'
	 });
	}
	
});


$(document).ready(function() { 
	
	var windowWidth = $(window).width();
	var windowHeight = $(window).height();
	
	/* Parallax effects */
	if(windowWidth >= 900) {
		$('#header').parallax("50%", 0.05);
		$('#quote').parallax("50%", 0.05);
		$('#quote2').parallax("50%", 0.05);
	}

	/* Go to top link */
	if($('.top').length) {
		$('.top').click(function(e) {
			 e.preventDefault();  
		     $(document).scrollTo(0,2000, {axis: 'y'});  
		  });
	}

	/* Fit Video */
	$(".video").fitVids();

	/* Dribble list */
	$.jribbble.getShotsByPlayerId('boyankostov', function (playerShots) {
	    var html = [];

	    $.each(playerShots.shots, function (i, shot) {
	        html.push('<a href="' + shot.url + '"><span class="hover"><span class="heading"><span class="headingcont">' + shot.title + '<span class="description">' + shot.player.name + '</span></span></span></span><img src="' + shot.image_url + '" ');
	        html.push('alt="' + shot.title + '"></a></li>');
	    });

	    $('#dribbble-list').html(html.join(''));
	}, {page: 1, per_page: 10});

	/* Gallery lightbox*/
	if($('.gallery a').length) {
		$('.gallery a').nivoLightbox();
	}
	if($('.lightbox').length) {
		$('.lightbox').nivoLightbox();
	}

	/* Map */
	if($('#themap').length) {
		
		var map;
		var MY_MAPTYPE_ID = 'custom_style';

		function initialize() {

		  var featureOpts = [
			  {
			    "featureType": "poi.park",
			    "stylers": [
			      { "lightness": 36 },
			      { "saturation": -100 }
			    ]
			  },{
			    "featureType": "poi.government",
			    "stylers": [
			      { "saturation": -100 }
			    ]
			  },{
			    "featureType": "poi.attraction",
			    "stylers": [
			      { "saturation": -100 }
			    ]
			  },{
			    "featureType": "poi.school",
			    "stylers": [
			      { "lightness": 29 },
			      { "saturation": -100 }
			    ]
			  },{
			    "featureType": "water"  },{
			    "featureType": "water",
			    "stylers": [
			      { "color": "#27ac80" }
			    ]
				}
  
			];

		  var mapOptions = {
		  	draggable: true,
		    zoom: 15,
		    center: new google.maps.LatLng(48.855, 2.341418),
		    scrollwheel: false,
		    mapTypeControlOptions: {
	          	mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
	          },
			mapTypeId: MY_MAPTYPE_ID
		  };
		  map = new google.maps.Map(document.getElementById('themap'),
		      mapOptions);

		  var styledMapOptions = {
		    name: 'Our offices'
		  };

		  var contentString = '<div id="content">'+
	      '<div id="siteNotice">'+
	      '</div>'+
	      '<h3 id="firstHeading" class="mt20">Our main office</h3>'+
	      '<div id="bodyContent">'+
	      '<p>1234, Paris, France<br>Unknown Str. 123<br>+111222333444</p>'+
	      '</div>'+
	      '</div>';

	    var infowindow = new google.maps.InfoWindow({
		      content: contentString
		  });

		  var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

			  map.mapTypes.set(MY_MAPTYPE_ID, customMapType);

			var myLatLng = new google.maps.LatLng(48.855, 2.341418);
			var marker = new google.maps.Marker({
		      position: myLatLng,
		      map: map,
		      title: 'Hello World!'
		  	});
		  	google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });

		}

		google.maps.event.addDomListener(window, 'load', initialize);

	}

	/* Knob area */
	function makeKnobs() {
		$(".knob").knob({
	        draw : function () {


	            // "tron" case
	            if(this.$.data('skin') == 'tron') {

	                var a = this.angle(this.cv)  // Angle
	                    , sa = this.startAngle          // Previous start angle
	                    , sat = this.startAngle         // Start angle
	                    , ea                            // Previous end angle
	                    , eat = sat + a                 // End angle
	                    , r = 1;

	                this.g.lineWidth = this.lineWidth;

	                this.o.cursor
	                    && (sat = eat - 0.3)
	                    && (eat = eat + 0.3);

	                if (this.o.displayPrevious) {
	                    ea = this.startAngle + this.angle(this.v);
	                    this.o.cursor
	                        && (sa = ea - 0.3)
	                        && (ea = ea + 0.3);
	                    this.g.beginPath();
	                    this.g.strokeStyle = this.pColor;
	                    this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false);
	                    this.g.stroke();
	                }

	                this.g.beginPath();
	                this.g.strokeStyle = r ? this.o.fgColor : this.fgColor ;
	                this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false);
	                this.g.stroke();

	                this.g.lineWidth = 2;
	                this.g.beginPath();
	                this.g.strokeStyle = this.o.fgColor;
	                this.g.arc( this.xy, this.xy, this.radius - this.lineWidth + 5 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false);
	                this.g.stroke();

	                return false;
	            }
	        }
	    });
	}

	if($(".knob").length && windowWidth <= 768 && !$('html').hasClass('lt-ie9')) {
		makeKnobs();
	}
	
	else if($(".knob").length && windowWidth >= 768 && !$('html').hasClass('lt-ie9')) {
		$('.knob').each(function() {
			$(this).attr('value', 0);
		});
		makeKnobs();
		$('#knobs').one('inview', function(event, isInView) {
			if (isInView) {
			  	$('.knob').each(function() {
					var self = $(this);
					$({value: 0}).animate({value: self.data('max')}, {
				      duration: 2000,
				      easing: 'swing',
				      step: function() {
				        self.val(Math.ceil(this.value)).trigger('change');
				      }
				    });
				});
			 }
		});
	}

	/* Textarea Autoresize */
	if($("textarea").length) {
		$('textarea').autosize();
	}

	/* Form */
	if($('.formvalidation').length) {
		$(".formvalidation").validate({
			invalidHandler: function(event, validator) {
		      // 'this' refers to the form
		      var errors = validator.numberOfInvalids();
		      if (errors) {
		        var message = errors == 1
		          ? 'You missed 1 field. It has been highlighted'
		          : 'You missed ' + errors + ' fields. They have been highlighted';
		        $("div.error").html(message);
		        $("div.error").fadeIn();
		      } else {
		        $("div.error").hide();
		      }
		    },
		    showErrors: false,
		    errorPlacement: function(error,element) {
			    return true;
			},
		    submitHandler: function(form) { 
		    	jQuery(form).ajaxSubmit({
		    		url: 'process.php', 
		    		success: function() {
		    			var message = 'Thank\'s for your message. We\'ll answer as soon as possible.';
				        $("div.error").html(message);
				        $("div.error").fadeIn();
		    		},
		    		error: function() {
		    			alert('Something`s wrong.');
		    		}
		    	});
		    }
	    
		});
	}

	/* Tabs */	
	if($("#tabs").length) {
		$('#tabs').easytabs({
	    	effect: 'scale',
	    	updateHash: false
	    });
	}
	if($(".tabbed").length) {
	    $('.tabbed').easytabs({
	    	effect: 'scale',
	    	updateHash: false
	    });
	}

	/* Navigation */
	var mainnav = $('.nav-container');
	var activeclass = 'active';
	

	mainnav.singlePageNav({
		offset: mainnav.outerHeight(),
		filter: ':not(.external)',
		currentClass: activeclass,
		speed: 1000
	});

	var nav_container = $('.nav-container');
	var nav_offset = nav_container.offset().top;

	function setNavTopOffset() {
		var windowWidth = $(window).width();
		var windowHeight = $(window).height();
		if(windowWidth > 768) {
				nav_container.css('top', windowHeight*0.11+'px');
		}
	}

	setNavTopOffset();

	function getSticky() {
		
		var scrolltop = $(window).scrollTop();
		var wholewindow = $(window).outerHeight();
		var wholedocument = $(document).outerHeight();

		if(scrolltop > nav_offset) {
			nav_container.addClass('fixed');
		}
		else {
			nav_container.removeClass('fixed');
		}

	}

	getSticky();

	$(window).scroll(function() {
		getSticky();
	})

	

	if($('.scrollto').length) {
		$('.scrollto').click(function() {
			$.scrollTo($(this).attr("href"), {duration: 1000});
			return false;
		})
	}
	if($('.scrolltoslow').length) {
		$('.scrolltoslow').click(function() {
			$.scrollTo($(this).attr("href"), {duration: 2000});
			return false;
		})
	}

	/* Waypoints on the arrowdown link - make it dissapear when we're not on #start */
	function arrowdown() {
		if(windowWidth >= 480) {
			$('#start').bind('inview', function(event, isInView, visiblePartX, visiblePartY) {
			  if (isInView) {
			    if (visiblePartY == 'bottom') {
			      $('a.down').fadeOut();
			    } 
			    else {
			      $('a.down').fadeIn();
			    } 
			  } 
			});
		}
	}
	arrowdown();

	/* Header height */
	function setHeaderHeight() {
		var window_height = $(window).height();
		$('.subheader-container .wrapper').css('height', (window_height)+'px' );
	}

	if(windowWidth > 480) {
		setHeaderHeight();
	}

	$(window).resize(function(){
		setHeaderHeight();
		if(windowWidth > 480) {
			
		}
		else {
			$('.subheader-container .wrapper').css('height', 'auto' );
		}
		arrowdown();
		setNavTopOffset();
	})

    $(function(){
        //setup client fixes
        $(".btn, .tabs ul li a")
            .fixClient({
                cls: "windows-only",
                os: "windows"
            })
            .fixClient({
                cls: "mac-only",
                os: "mac"
            })
            .fixClient({
                cls: "firefox-only",
                browser: "firefox"
            })
            .fixClient({
                cls: "webkit-only",
                browser: ["safari","chrome"]
            })
            .fixClient({
                cls: "ie-only",
                browser: "ie"
            })                    
    })
});

/* Data Slider */
if($("[data-slider]").length) {
	$("[data-slider]")
	.each(function () {
	  var input = $(this);
	  $("<span>").addClass("output").insertBefore($(this));
	})
	.bind("slider:ready slider:changed", function (event, data) {
	  $(this)
	    .prevAll(".output:first")
	      .html('<strong>$'+data.value+'</strong> budget');
	});
}