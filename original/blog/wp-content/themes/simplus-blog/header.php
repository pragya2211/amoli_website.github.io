<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Simplus Blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>
		<link rel="shortcut icon" href="https://jewelsplanet.com/img/fevicon.png" type="image/x-icon">
		<link rel="stylesheet" href="https://jewelsplanet.com/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://jewelsplanet.com/css/style.css">
		<link rel="stylesheet" href="https://jewelsplanet.com/css/icon.css">
		<link rel="stylesheet" href="https://jewelsplanet.com/css/hover-min.css">
		<link rel="stylesheet" href="https://jewelsplanet.com/css/default.css">
		<link rel="stylesheet" href="https://jewelsplanet.com/css/custom-animation.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	</head>

	<body <?php body_class(); ?>>

		<?php
		if ( function_exists( 'wp_body_open' ) ) {
			wp_body_open();
		}
		?>

		<div id="page" class="site">

			<a class="skip-link screen-reader-text" href="#content">
				<?php esc_html_e( 'Skip to content', 'simplus-blog' ); ?>
			</a>

			
			<!-- JEWELSPLANET.COM-->

			<script type="text/javascript">
			  function centerModal() {
			    $(this).css('display', 'block');
			    var $dialog = $(this).find(".modal-dialog");
			    var offset = ($(window).height() - $dialog.height()) / 2;
			    // Center modal vertically in window
			    $dialog.css("margin-top", offset);
			  }

			  $('.modal').on('show.bs.modal', centerModal);
			  $(window).on("resize", function () {
			      $('.modal:visible').each(centerModal);
			  });
			</script>

			<script type="text/javascript">

			  new WOW().init();

			 $(window).scroll(function () {
			        if ($(this).scrollTop() > 50) {
			            $('#back-to-top').fadeIn();
			        } else {
			            $('#back-to-top').fadeOut();
			        }
			    });
			    // scroll body to 0px on click
			    $('#back-to-top').click(function () {
			        $('#back-to-top').tooltip('hide');
			        $('body,html').animate({
			            scrollTop: 0
			        }, 800);
			        return false;
			    });
			    $('#back-to-top');

			    $('.testimonial-slider').slick({
			    autoplay: true,
			    autoplaySpeed: 5000,
			    dots: false,
			    adaptiveHeight: true,
			    prevArrow: $('.prev'),
			    nextArrow: $('.next'),
			    slidesToShow: 3,
			    slidesToScroll: 1,
			    responsive: [
			    {
			      breakpoint: 1024,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 1,
			      }
			    },
			    {
			      breakpoint: 900,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 1
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
			 
			</script>

			<script type="text/javascript">
			   $(document).ready(function () {
			          $('.collapse.in').prev('.panel-heading').addClass('active');
			          $('#accordion, #bs-collapse')
			              .on('show.bs.collapse', function (a) {
			                  $(a.target).prev('.panel-heading').addClass('active');
			              })
			              .on('hide.bs.collapse', function (a) {
			                  $(a.target).prev('.panel-heading').removeClass('active');
			              });
			      });

			  $.fn.jQuerySimpleCounter = function( options ) {
			      var settings = $.extend({
			          start:  0,
			          end:    100,
			          easing: 'swing',
			          duration: 400,
			          complete: ''
			      }, options );

			      var thisElement = $(this);

			      $({count: settings.start}).animate({count: settings.end}, {
			      duration: settings.duration,
			      easing: settings.easing,
			      step: function() {
			        var mathCount = Math.ceil(this.count);
			        thisElement.text(mathCount);
			      },
			      complete: settings.complete
			    });
			  };

			$('#projectFacts').mouseenter(function () {
			$('#number1').jQuerySimpleCounter({end: 11500,duration: 3000});
			$('#number2').jQuerySimpleCounter({end: 6998,duration: 3000});
			$('#number3').jQuerySimpleCounter({end: 150,duration: 3000});
			$('#number4').jQuerySimpleCounter({end: 100,duration: 3000}); });


			     $('.about-me-img').hover(function(){
			            $('.authorWindowWrapper').stop().fadeIn('fast').find('p').addClass('trans');
			        }, function(){
			            $('.authorWindowWrapper').stop().fadeOut('fast').find('p').removeClass('trans');
			        });

			</script>

			<script type="text/javascript">
			function resize() {
			  var vheight = $(window).height() ;
			  var vwidth = $(window).width();
			  $('.fullheight').css({
			    'height': vheight,
			    'width': vwidth 
			  });
			};
			 
			function scrollDown() {
			  var vheight = $(window).height() - 66 ;
			  $('html, body').animate({
			    scrollTop: (Math.floor($(window).scrollTop() / vheight)+1) * vheight
			  }, 500);  
			};
			 
			$(document).ready(function(){
			  
			  $('.scroll-next').click(function(event){
			    scrollDown();
			    event.preventDefault();
			  });
			});
			</script>

			<div class="boxed">
			  <div class="flat-header-wrap">
			   <div class="header header-top">
			      <div class="container">
			        <div class="row">
			          <div class="col-md-12 col-lg-5">
			            <div id="logo" class="logo"> <a href="https://jewelsplanet.com" rel="home"> <img src="https://jewelsplanet.com/img/logo-new.png" alt="image"> </a> </div>
			            <!-- logo --> 
			          </div>
			          <!-- col-lg-3 -->
			           <div class="col-md-12 col-lg-7">
			            <ul class="flat-information">
			               <li class="phone">
			                <div class="icon"> <span class="icon-smartphone-one2"></span></div>
			                <div class="text">
			                  <span>Call Us Now</span> <a href="tel:9891224466">9891 22 44 66</a>
			                </div>
			              </li>
			              <li class="email">
			                <div class="icon">
			                 <span class="icon-location"></span>
			                </div>
			                <div class="text">
			                  <a href="https://goo.gl/maps/Knorh7Z3sbP4Hvgr6" target="blank">Shop No : 3&4, Bank Street, Karol Bagh, opp. P C Jeweller, New Delhi-110005.</a>
			                </div>
			              </li>
			             
			            </ul>
			            <!-- flat-information --> 
			          </div>
			          <!-- col-lg-9 --> 
			        </div>
			        
			        <!--mobile row start here -->
			        <!-- <div class="row">
			          <div class="col-md-5 col-lg-5">
			            <div id="logo" class="logo-new"> <a href="https://jewelsplanet.com" rel="home"> <img src="https://jewelsplanet.com/img/logo-new.png" alt="image"> </a> </div>
			            
			          </div>
			          <div class="col-md-7 col-lg-7">
			            <ul class="flat-information flat-information-new">
			              <li class="phone">
			                <div class="icon"> <span class="icon-smartphone-one2"></span></div>
			                <div class="text">
			                  <span>Call Us Now</span> <a href="tel:9891224466">9891 22 44 66</a>
			                </div>
			              </li>
			            </ul>
			          </div>
			        </div> -->
			        <!-- row --> 
			      </div>
			      <!-- container --> 
			    </div>
			    <!-- header-top -->
			    
			    <header id="header" class="header header-classic">
			      <div class="container">
			        <div class="sticky-details">
			          <div class="row">
			          <div class="col-md-5">
			            <div id="logo" class="logo"> <a href="https://jewelsplanet.com" rel="home"> <img src="https://jewelsplanet.com/img/logo-new.png" alt="image" class="logo-image"> </a> </div>
			            <!-- logo --> 
			          </div>
			          <!-- col-lg-3 -->
			          <div class="col-md-7">
			            <ul class="flat-information">
			             <li class="phone">
			                <div class="icon"> <span class="icon-smartphone-one2"></span></div>
			                <div class="text">
			                  <span>Call Us Now</span> <a href="tel:9891224466">9891 22 44 66</a>
			                </div>
			              </li>
			              <li class="email">
			                <div class="icon">
			                 <span class="icon-location"></span>
			                </div>
			                <div class="text">
			                  <a href="https://goo.gl/maps/Knorh7Z3sbP4Hvgr6" target="blank">Shop No : 3&4, Bank Street, Karol Bagh, opp. P C Jeweller, New Delhi-110005.</a>
			                </div>
			              </li>
			            </ul>
			            <!-- flat-information --> 
			          </div>
			          <!-- col-lg-9 --> 
			        </div>
			      </div>
			        <div class="row">
			          <div class="col-md-12">
			            <div class="nav-wrap">
			              <nav id="mainnav" class="mainnav">
			                <ul class="menu">
			                  <li class="active"><a href="https://jewelsplanet.com">Home</a></li>
			                  <li> <a href="https://jewelsplanet.com/about-jewels-planet.html">Who We Are</a>
			                    <ul class="submenu">
			                      <li><a href="https://jewelsplanet.com/about-jewels-planet.html">About Jewels Planet</a></li>
			                      <li><a href="https://jewelsplanet.com/vision-and-misson-jewels-planet.html">Vision & Mission</a></li>
			                      <li><a href="https://jewelsplanet.com/founder-message-jewels-planet.html">Founder's Message</a></li>
			                    </ul>
			                  </li>
			                  <li> <a href="https://jewelsplanet.com/services.html">Services</a> 
			                    <ul class="submenu">
			                      <li><a href="https://jewelsplanet.com/sell-your-gold-jewels-planet.html">Sell your Gold</a></li>
			                      <li><a href="https://jewelsplanet.com/sell-your-silver-jewels-planet.html">Sell your Silver</a></li>
			                      <li><a href="https://jewelsplanet.com/sell-your-diamond-jewels-planet.html">Sell your Diamonds</a></li>
			                      <li><a href="https://jewelsplanet.com/sell-your-coins-jewels-planet.html">Sell your Coins</a></li>
			                    </ul>
			                  </li>
			                 <li><a href="https://jewelsplanet.com/testimonials-jewels-planet.html">Happy Client's</a></li>
			                 
			                  <li><a href="https://jewelsplanet.com/jewels-planet-blog.html">Blog</a></li>
			                  <li><a href="https://jewelsplanet.com/faq.html">FAQs</a></li>
			                  <li><a href="https://jewelsplanet.com/contact-us.html">Contact Us</a></li>
			                </ul>
			              </nav>
			              <!-- mainnav -->
			              <ul class="menu-extra">
			                <li class="quote price"><a href="" data-toggle="modal" data-target="#modal3">REQUEST A CALL BACK</a></li>
			                <li class="quote number"><span class="icon-phone2"></span><a href="tel:9891224466">9891 22 44 66</a></li>
			              </ul>
			              <div class="btn-menu"> <span></span> </div>
			              <!-- mobile menu button --> 
			            </div>
			            <!-- nav-wrap --> 
			          </div>
			        </div>
			        <!-- row --> 
			      </div>
			      <!-- container --> 
			    </header>
			    <!-- header --> 
			  </div>
			  <!-- flat-header-wrap --> 
			</div>

			<!-- Request a Call Back Options -->
			<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content modal-content-three">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			        <div class="modal-title mx-auto text-center" id="myModalLabel"><img src="https://jewelsplanet.com/img/logo-new.png"></div>
			      </div>
			      <div class="modal-body">
			        <form class="popup-form" action="request-callback.php" method="POST">
			          <div class="fill-out-heading">Let Us Call You Back</div>
			            <input type="tel" name="number" placeholder="Enter Mobile No." pattern="[789][0-9]{9}">
			            <input type="submit" name="submit">
			            <p><strong>Your</strong> phone number is kept confidential and not shared with others.</p>
			        </form>

			      </div>
			    </div>
			  </div>
			</div>

			<div id="content" <?php simplus_blog_content_section_class(); ?>>
				<div class="row">
