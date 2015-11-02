<?php
/*
 * Template Name: Keylight
 * Description: Keylight theme without sidebar
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>



				<div id="header" class="container-group header" style="background-image: url(<?php if ( get_field('background_greating', get_the_ID()) != '' ) { the_field('background_greating', get_the_ID()); } ?>)">
		            <div id="start" class="section subheader-container">
		                <div class="wrapper centered">
		                    <div>
		                        <h1 class="big"><?php if ( get_field('title', get_the_ID()) != '' ) { the_field('title', get_the_ID()); } ?></h1>
		                        <h2><?php if ( get_field('sub_title', get_the_ID()) != '' ) { the_field('sub_title', get_the_ID()); } ?></h2>
		                        <a href="#knobs" class="scrollto down"></a>
		                    </div>
		                </div> <!-- .wrapper -->
		            </div> <!-- .content-container -->

		            <div class="content-container color1">
		                <div id="knobs" class="wrapper center-text padding">
		                    <div class="row knobs center-text">
		                        <div class="third">
		                            <div class="center-text">
		                                <div class="knobcontainer">
		                                    <input type="text" id="projectsknob" value="<?php if ( get_field('number_project', get_the_ID()) != '' ) { the_field('number_project', get_the_ID()); } ?>" class="knob" data-readonly="true" data-width="290" data-height="290" data-min="0" data-max="54" data-skin="tron" data-thickness=".1" data-fgColor="#ffffff">
		                                    <span class="knobtitle">Projects</span>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="third">
		                            <div class="center-text">
		                                <div class="knobcontainer">
		                                    <input type="text" id="clientsknob" value="<?php if ( get_field('number_clients', get_the_ID()) != '' ) { the_field('number_clients', get_the_ID()); } ?>" class="knob" data-readonly="true" data-width="290" data-height="290" data-min="0" data-max="34" data-skin="tron" data-thickness=".1" data-fgColor="#ffffff">
		                                    <span class="knobtitle">Clients</span>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="third">
		                            <div class="center-text">
		                                <div class="knobcontainer">
		                                    <input type="text" id="hoursknob" value="<?php if ( get_field('number_hours', get_the_ID()) != '' ) { the_field('number_hours', get_the_ID()); } ?>" class="knob" data-readonly="true" data-width="290" data-height="290" data-min="0" data-max="465" data-skin="tron" data-thickness=".1" data-fgColor="#ffffff">
		                                    <span class="knobtitle">Hours</span>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <p class="bigger width70 center mb40"><?php if ( get_field('benefits_text', get_the_ID()) != '' ) { the_field('benefits_text', get_the_ID()); } ?></p>
		                    <a href="#work" class="scrollto btn borderonly"><?php if ( get_field('benefits_button', get_the_ID()) != '' ) { the_field('benefits_button', get_the_ID()); } ?></a>
		                </div>
		            </div> <!-- .content-container -->
		        </div>


		        <div id="work" class="section content-container white">
		            <div class="wrapper">
		                <h2 class="title center-text padding-small"><?php if ( get_field('work_title', get_the_ID()) != '' ) { the_field('work_title', get_the_ID()); } ?></h2>
		            </div> <!-- .wrapper -->
		            <div class="gallerycont">
		                <!-- <div id="gallerynav" class="carousel-pagination gallery-nav inverse"></div> -->
		                <div class="gallery clearfix">
		                  <div data-id="id-11" class="item print"><a href="<?php if ( get_field('work_image', get_the_ID()) != '' ) { the_field('work_image', get_the_ID()); } ?>" data-lightbox-gallery="gallery1" data-title="<?php if ( get_field('work_item_title', get_the_ID()) != '' ) { the_field('work_item_title', get_the_ID()); } ?>" data-caption="<?php if ( get_field('work_item_description', get_the_ID()) != '' ) { the_field('work_item_description', get_the_ID()); } ?>"><img src="<?php if ( get_field('work_thumbnail', get_the_ID()) != '' ) { the_field('work_thumbnail', get_the_ID()); } ?>"></a></div>

		                  <div data-id="id-7" class="item web"><a href="<?php if ( get_field('work_image', get_the_ID()) != '' ) { the_field('work_image', get_the_ID()); } ?>" data-lightbox-gallery="gallery1" data-title="<?php if ( get_field('work_item_title', get_the_ID()) != '' ) { the_field('work_item_title', get_the_ID()); } ?>" data-caption="<?php if ( get_field('work_item_description', get_the_ID()) != '' ) { the_field('work_item_description', get_the_ID()); } ?>"><img src="<?php if ( get_field('work_thumbnail', get_the_ID()) != '' ) { the_field('work_thumbnail', get_the_ID()); } ?>"></a></div>

		                  <div data-id="id-8" class="item web"><a href="<?php if ( get_field('work_image', get_the_ID()) != '' ) { the_field('work_image', get_the_ID()); } ?>" data-lightbox-gallery="gallery1" data-title="<?php if ( get_field('work_item_title', get_the_ID()) != '' ) { the_field('work_item_title', get_the_ID()); } ?>" data-caption="<?php if ( get_field('work_item_description', get_the_ID()) != '' ) { the_field('work_item_description', get_the_ID()); } ?>"><img src="<?php if ( get_field('work_thumbnail', get_the_ID()) != '' ) { the_field('work_thumbnail', get_the_ID()); } ?>"></a></div>

		                  <div data-id="id-9" class="item print"><a href="<?php if ( get_field('work_image', get_the_ID()) != '' ) { the_field('work_image', get_the_ID()); } ?>" data-lightbox-gallery="gallery1" data-title="<?php if ( get_field('work_item_title', get_the_ID()) != '' ) { the_field('work_item_title', get_the_ID()); } ?>" data-caption="<?php if ( get_field('work_item_description', get_the_ID()) != '' ) { the_field('work_item_description', get_the_ID()); } ?>" data-options="width: 500" ><img src="<?php if ( get_field('work_thumbnail', get_the_ID()) != '' ) { the_field('work_thumbnail', get_the_ID()); } ?>"></a></div>
		                  
		                  <div data-id="id-6" class="item web"><a href="<?php if ( get_field('work_image', get_the_ID()) != '' ) { the_field('work_image', get_the_ID()); } ?>" data-lightbox-gallery="gallery1" data-title="<?php if ( get_field('work_item_title', get_the_ID()) != '' ) { the_field('work_item_title', get_the_ID()); } ?>" data-caption="<?php if ( get_field('work_item_description', get_the_ID()) != '' ) { the_field('work_item_description', get_the_ID()); } ?>"><img src="<?php if ( get_field('work_thumbnail', get_the_ID()) != '' ) { the_field('work_thumbnail', get_the_ID()); } ?>"></a></div>

		                  <div data-id="id-13" class="item print"><a href="<?php if ( get_field('work_image', get_the_ID()) != '' ) { the_field('work_image', get_the_ID()); } ?>" data-lightbox-gallery="gallery1" data-title="<?php if ( get_field('work_item_title', get_the_ID()) != '' ) { the_field('work_item_title', get_the_ID()); } ?>" data-caption="<?php if ( get_field('work_item_description', get_the_ID()) != '' ) { the_field('work_item_description', get_the_ID()); } ?>"><img src="<?php if ( get_field('work_thumbnail', get_the_ID()) != '' ) { the_field('work_thumbnail', get_the_ID()); } ?>"></a></div>

		                  <div data-id="id-5" class="item web"><a href="<?php if ( get_field('work_image', get_the_ID()) != '' ) { the_field('work_image', get_the_ID()); } ?>" data-lightbox-gallery="gallery1" data-title="<?php if ( get_field('work_item_title', get_the_ID()) != '' ) { the_field('work_item_title', get_the_ID()); } ?>" data-caption="<?php if ( get_field('work_item_description', get_the_ID()) != '' ) { the_field('work_item_description', get_the_ID()); } ?>"><img src="<?php if ( get_field('work_thumbnail', get_the_ID()) != '' ) { the_field('work_thumbnail', get_the_ID()); } ?>"></a></div>
		                  
		                  <div data-id="id-10" class="item print"><a href="<?php if ( get_field('work_image', get_the_ID()) != '' ) { the_field('work_image', get_the_ID()); } ?>" data-lightbox-gallery="gallery1" data-title="<?php if ( get_field('work_item_title', get_the_ID()) != '' ) { the_field('work_item_title', get_the_ID()); } ?>" data-caption="<?php if ( get_field('work_item_description', get_the_ID()) != '' ) { the_field('work_item_description', get_the_ID()); } ?>"><img src="<?php if ( get_field('work_thumbnail', get_the_ID()) != '' ) { the_field('work_thumbnail', get_the_ID()); } ?>"></a></div>
		                </div>
		                <a href="#" class="nav prev color2" id="portfolioprev">prev</a>
		                <a href="#" class="nav next color2" id="portfolionext">next</a>
		            </div>
		            <div class="wrapper padding-tiny">
		                <div class="center-text">
		                    <p class="bigger width70 center mb40"><?php if ( get_field('work_text', get_the_ID()) != '' ) { the_field('work_text', get_the_ID()); } ?></p>
		                        <a href="#contact" class="btn scrolltoslow mb50 color1"><?php if ( get_field('work_button', get_the_ID()) != '' ) { the_field('work_button', get_the_ID()); } ?></a>
		                </div>
		            </div>
		        </div> <!-- .content-container -->

		        <div id="quote" class="container-group" style="background-image: url(<?php the_field('quotes-background'); ?>)">
		            <div class="content-container">
		                <div class="wrapper padding-large center-text">
		                    <p class="quote center width70"><?php the_field('quotes-text', get_the_ID()) ?></p>
		                    <a href="#pricing" class="scrollto btn color1"><?php the_field('quotes-button', get_the_ID()) ?></a>
		                </div> <!-- .wrapper -->
		            </div> <!-- .content-container -->
		            <?php echo var_dump( get_field('quote_1', get_the_ID())); ?>
		            <div id="us" class="section content-container color2">
		                <div class="wrapper padding">
		                    <div id="tabs" class="tabs width70">
		                        <ul>
		                            <li><a href="#tabs-1" title=""><?php if ( get_field('tab-1', get_the_ID()) != '' ) { the_field('tab-1', get_the_ID()); } ?></a></li>
		                            <li><a href="#tabs-2" title=""><?php if ( get_field('tab-2', get_the_ID()) != '' ) { the_field('tab-2', get_the_ID()); } ?></a></li>
		                            <li><a href="#tabs-3" title=""><?php if ( get_field('tab-3', get_the_ID()) != '' ) { the_field('tab-3', get_the_ID()); } ?></a></li>
		                        </ul>

		                        <div id="tabs_container" class="clearfix">
		                            <div id="tabs-1">
		                                    <p class="bigger"><?php if ( get_field('tab-1-text', get_the_ID()) != '' ) { the_field('tab-1-text', get_the_ID()); } ?></p>
		                                    <hr class="width30 center">
		                                    <p class="bigger"><a href="#" class="dashed bold"></a></p>
		                            </div>
		                            <div id="tabs-2">
		                                    <p class="bigger"><?php if ( get_field('tab-2-text', get_the_ID()) != '' ) { the_field('tab-2-text', get_the_ID()); } ?></p>
		                        
		                            </div>
		                            <div id="tabs-3">
		                                    <p class="bigger"><?php if ( get_field('tab-3-text', get_the_ID()) != '' ) { the_field('tab-3-text', get_the_ID()); } ?></p><p><?php if ( get_field('tab-3-subtext', get_the_ID()) != '' ) { the_field('tab-3-subtext', get_the_ID()); } ?></p>
		                            </div>
		                        </div><!--End tabs container-->
		                    </div><!--End tabs-->

		                </div> <!-- .wrapper -->
		            </div> <!-- .content-container -->
		        </div>

		        <div class="content-container color1 solid">
		            <div class="wrapper padding">
		                <div class="row row-table">
		                    <div class="half">
		                        <div class="table-d center-text-mt">
		                            <img src="img/icons/paperplane.png" alt="" class="table-cell-d mr-td-30">
		                            <p class="bigger table-cell-d">I don't know a lot about everything, but I do know a lot about the part of everything that I know.<br><a href="#" class="btn mt20 small borderonly">Small button</a></p>
		                        </div>
		                    </div>
		                    <div class="half">
		                        <div class="table-d center-text-mt">
		                            <img src="img/icons/moleskine.png" alt="" class="table-cell-d mr-td-30">
		                            <p class="bigger table-cell-d">I don't know a lot about everything, but I do know a lot about the part of everything that I know.<br><a href="#" class="btn mt20 small borderonly">Small button</a></p>
		                        </div>
		                    </div>
		                </div>
		            </div> <!-- .wrapper -->
		        </div> <!-- .content-container -->

		        <div class="content-container grey solid">
		            <div class="wrapper padding-small">
		                <h2 class="title center-text"><?php if ( get_field('employee-title', get_the_ID()) != '') { the_field('employee-title', get_the_ID()); } ?></h2>
		                <div class="row">
		                    <div class="third">
		                        <div class="about">
		                            <a class="circle">
		                                <span class="overlay"><span class="inner"><span class="text"><?php if ( get_field('employee-position', get_the_ID()) != '') { the_field('employee-position', get_the_ID()); } ?></span></span></span>
		                                <img src="<?php if ( get_field('employee-image', get_the_ID()) != '') { the_field('employee-image', get_the_ID()); } ?>">
		                            </a>
		                            <h3><?php if ( get_field('employee-name', get_the_ID()) != '') { the_field('employee-name', get_the_ID()); } ?></h3>
		                            <div class="social">
		                                <a href="#" class="rotate"><img src="img/icons/picons/32/social-042_dribbble.png" alt=""></a>
		                                <a href="#" class="rotate"><img src="img/icons/picons/32/social-043_twitter.png" alt=""></a>
		                                <a href="#" class="rotate"><img src="img/icons/picons/32/social-046_facebook.png" alt=""></a>
		                            </div>
		                            <p><?php if ( get_field('employee-comment', get_the_ID()) != '') { the_field('employee-comment', get_the_ID()); } ?></p>
		                        </div>
		                    </div>
		                    <div class="third">
		                        <div class="about">
		                            <a class="circle">
		                                <span class="overlay"><span class="inner"><span class="text"><?php if ( get_field('employee-position', get_the_ID()) != '') { the_field('employee-position', get_the_ID()); } ?></span></span></span>
		                                <img src="<?php if ( get_field('employee-image', get_the_ID()) != '') { the_field('employee-image', get_the_ID()); } ?>">
		                            </a>
		                            <h3><?php if ( get_field('employee-name', get_the_ID()) != '') { the_field('employee-name', get_the_ID()); } ?></h3>
		                            <div class="social">
		                                <a href="#" class="rotate"><img src="img/icons/picons/32/social-042_dribbble.png" alt=""></a>
		                                <a href="#" class="rotate"><img src="img/icons/picons/32/social-043_twitter.png" alt=""></a>
		                                <a href="#" class="rotate"><img src="img/icons/picons/32/social-046_facebook.png" alt=""></a>
		                            </div>
		                            <p><?php if ( get_field('employee-comment', get_the_ID()) != '') { the_field('employee-comment', get_the_ID()); } ?></p>
		                        </div>
		                    </div>
		                    <div class="third">
		                        <div class="about">
		                            <a class="circle">
		                                <span class="overlay"><span class="inner"><span class="text"><?php if ( get_field('employee-position', get_the_ID()) != '') { the_field('employee-position', get_the_ID()); } ?></span></span></span>
		                                <img src="<?php if ( get_field('employee-image', get_the_ID()) != '') { the_field('employee-image', get_the_ID()); } ?>">
		                            </a>
		                            <h3><?php if ( get_field('employee-name', get_the_ID()) != '') { the_field('employee-name', get_the_ID()); } ?></h3>
		                            <div class="social">
		                                <a href="#" class="rotate"><img src="img/icons/picons/32/social-042_dribbble.png" alt=""></a>
		                                <a href="#" class="rotate"><img src="img/icons/picons/32/social-043_twitter.png" alt=""></a>
		                                <a href="#" class="rotate"><img src="img/icons/picons/32/social-046_facebook.png" alt=""></a>
		                            </div>
		                            <p><?php if ( get_field('employee-comment', get_the_ID()) != '') { the_field('employee-comment', get_the_ID()); } ?></p>
		                        </div>
		                    </div>
		                </div>
		            </div> <!-- .wrapper -->
		        </div> <!-- .content-container -->

		        <div id="quote2" class="container-group" style="background-image: url(img/samples/background-3.jpg)">
		            <div class="content-container">
		                <div class="wrapper padding-large center-text">
		                    <div id="quotecarousel" class="carousel-single">
		                        <div><p class="quote center width70"><?php if ( get_field('quotes-text', get_the_ID()) != '') { the_field('quotes-text', get_the_ID()); } ?></p></div>
		                        <div><p class="quote center width70"><?php if ( get_field('quotes-text', get_the_ID()) != '') { the_field('quotes-text', get_the_ID()); } ?></p></div>
		                        <div><p class="quote center width70"><?php if ( get_field('quotes-text', get_the_ID()) != '') { the_field('quotes-text', get_the_ID()); } ?></p></div>
		                    </div>
		                    <div id="quotecarouselnav" class="carousel-pagination carousel-single-nav"></div>
		                </div> <!-- .wrapper -->
		            </div> <!-- .content-container -->      
		        </div>

		        <div id="products" class="section content-container grey relative narrow-carousel">
		            <div class="wrapper padding center-text">
		                <div class="container">
		                    <div id="singleportfoliocarousel" class="carousel-single">
		                        <div class="box">
		                            <div class="img"><img src="<?php if ( get_sub_field('carousel-image', get_the_ID()) != '') { the_sub_field('carousel-image', get_the_ID()); } ?>" alt=""></div>
		                            <div class="inner clearfix">
		                                <h2 class="right-text-d lead"><?php if ( get_sub_field('carousel-title', get_the_ID()) != '') { the_sub_field('carousel-title', get_the_ID()); } ?></h2>
		                                <p class="bigger"><?php if ( get_sub_field('carousel-text', get_the_ID()) !='') { the_sub_field('carousel-text', get_the_ID()); } ?></p>
		                            </div>
		                        </div>
		                        <div class="box">
		                            <div class="img"><img src="<?php if ( get_sub_field('carousel-image', get_the_ID()) != '') { the_sub_field('carousel-image', get_the_ID()); } ?>" alt=""></div>
		                            <div class="inner clearfix">
		                                <h2 class="right-text-d lead"><?php if ( get_sub_field('carousel-title', get_the_ID()) != '') { the_sub_field('carousel-title', get_the_ID()); } ?></h2>
		                                <p class="bigger"><?php if ( get_sub_field('carousel-text', get_the_ID()) !='') { the_sub_field('carousel-text', get_the_ID()); } ?></p>
		                            </div>
		                        </div>
		                        <div class="box">
		                            <div class="img"><img src="<?php if ( get_sub_field('carousel-image', get_the_ID()) != '') { the_sub_field('carousel-image', get_the_ID()); } ?>" alt=""></div>
		                            <div class="inner clearfix">
		                                <h2 class="right-text-d lead"><?php if ( get_sub_field('carousel-title', get_the_ID()) != '') { the_sub_field('carousel-title', get_the_ID()); } ?></h2>
		                                <p class="bigger"><?php if ( get_sub_field('carousel-text', get_the_ID()) !='') { the_sub_field('carousel-text', get_the_ID()); } ?></p>
		                            </div>
		                        </div>
		                    </div>
		                    <a href="#" class="nav prev" id="singleportfolioprev"></a>
		                    <a href="#" class="nav next" id="singleportfolionext"></a>
		                    <div id="singleportfoliocarouselnav" class="carousel-pagination carousel-single-nav inverse"></div>
		                </div>
		            </div> <!-- .wrapper -->
		        </div> <!-- .content-container -->

		        <div id="pricing" class="section container-group" style="background-image: url(img/samples/background-3.jpg)">
		            <div class="content-container color2">
		                <div class="wrapper padding-large center-text">
		                    <div class="row">
		                        <div class="third">
		                            <div class="pricingbox">
		                                <span class="name">Basic</span>
		                                <p class="price color1">Free</p>
		                                <ul>
		                                    <li>Free ice cream</li>
		                                    <li>3.5 hour support</li>
		                                    <li>Free consultation</li>
		                                    <li>20GB of online storage</li>
		                                    <li>a lot more...</li>
		                                </ul>
		                                <a href="#" class="btn color1">Sign up</a>
		                            </div>
		                        </div>
		                        <div class="third">
		                            <div class="pricingbox">
		                                <span class="name">Standart</span>
		                                <p class="price color2">$19,99</p>
		                                <ul>
		                                    <li>Free ice cream</li>
		                                    <li>3.5 hour support</li>
		                                    <li>Free consultation</li>
		                                    <li>20GB of online storage</li>
		                                    <li>a lot more...</li>
		                                </ul>
		                                <a href="#" class="btn color1">Sign up</a>
		                            </div>
		                        </div>
		                        <div class="third">
		                            <div class="pricingbox">
		                                <span class="name">Advanced</span>
		                                <p class="price color2">$39.99</p>
		                                <ul>
		                                    <li>Free ice cream</li>
		                                    <li>3.5 hour support</li>
		                                    <li>Free consultation</li>
		                                    <li>20GB of online storage</li>
		                                    <li>a lot more...</li>
		                                </ul>
		                                <a href="#" class="btn color1">Sign up</a>
		                            </div>
		                        </div>
		                    </div>
		                    <p class="bigger width70 center">We also offer customized pricing for enterprises. Please <a href="#contact" class="scrollto">contact us</a> and we’ll prepare you an offer.</p>
		                </div> <!-- .wrapper -->
		            </div> <!-- .content-container -->      
		        </div>


		        <div id="contact" class="footer section content-container color2 solid">
		            <div class="wrapper padding-small">
		                <h2 class="container title">I'm going to make him an offer he can't refuse.</h2>
		                <?php if ( get_field('user-form', get_the_ID()) != '' ) { the_field('user-form', get_the_ID()); } ?>
		            </div>
		        </div>
				<?php the_content(); ?>
			
				<?php //comments_template(); ?>
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>