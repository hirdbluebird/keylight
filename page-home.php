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
		                                    <input type="text" id="projectsknob" value="54" class="knob" data-readonly="true" data-width="290" data-height="290" data-min="0" data-max="54" data-skin="tron" data-thickness=".1" data-fgColor="#ffffff">
		                                    <span class="knobtitle">Projects</span>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="third">
		                            <div class="center-text">
		                                <div class="knobcontainer">
		                                    <input type="text" id="clientsknob" value="34" class="knob" data-readonly="true" data-width="290" data-height="290" data-min="0" data-max="34" data-skin="tron" data-thickness=".1" data-fgColor="#ffffff">
		                                    <span class="knobtitle">Clients</span>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="third">
		                            <div class="center-text">
		                                <div class="knobcontainer">
		                                    <input type="text" id="hoursknob" value="465" class="knob" data-readonly="true" data-width="290" data-height="290" data-min="0" data-max="465" data-skin="tron" data-thickness=".1" data-fgColor="#ffffff">
		                                    <span class="knobtitle">Hours</span>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                    <p class="bigger width70 center mb40"><?php if ( get_field('knob-text', get_the_ID()) != '' ) { the_field('knob-text', get_the_ID()); } ?></p>
		                    <a href="#work" class="scrollto btn borderonly"><?php if ( get_field('knob-button', get_the_ID()) != '' ) { the_field('knob-button', get_the_ID()); } ?></a>
		                </div>
		            </div> <!-- .content-container -->
		        </div>


		        <div id="work" class="section content-container white">
				    <div class="wrapper">
				        <h2 class="title center-text padding-small"><?php if ( get_field('work-title', get_the_ID()) != '' ) { the_field('work-title', get_the_ID()); } ?></h2>
				    </div> <!-- .wrapper -->
				    <div class="gallerycont">
					    <div class="gallery clearfix">
					        <?php if( have_rows('work-slider') ): ?>
				            <?php while( have_rows('work-slider') ): the_row(); ?>

					             
				            <?php $image_attributes = wp_get_attachment_image_src( get_sub_field('work-thumbnails'), 'work-thumbnails-size'); // returns an array  ?>
				            <div data-id="<?php the_sub_field('work-item-id'); ?>" class="item print">
		                    	<a href="<?php the_sub_field('work-full-image'); ?>" data-lightbox-gallery="gallery1" 
			                    	   data-title="<?php the_sub_field('work-name'); ?>" 
	  		                    	   data-caption="<?php the_sub_field('work-description'); ?>">
				            		<img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" >
			            		</a>
			            	</div>
					        <?php endwhile; ?>
						    <?php endif; ?>
						</div>
		                <a href="#" class="nav prev color2" id="portfolioprev">prev</a>
		                <a href="#" class="nav next color2" id="portfolionext">next</a>
		            </div>

	                <div class="wrapper padding-tiny">
		                <div class="center-text">
		                    <p class="bigger width70 center mb40"><?php if ( get_field('work-text', get_the_ID()) != '' ) { the_field('work-text', get_the_ID()); } ?></p>
		                        <a href="#contact" class="btn scrolltoslow mb50 color1"><?php if ( get_field('work-button', get_the_ID()) != '' ) { the_field('work-button', get_the_ID()); } ?></a>
		                </div>
		            </div>
		        </div> <!-- .content-container -->
						            		


		        <div id="quote" class="container-group" style="background-image: url(<?php the_field('quotes-background', get_the_ID()) ?>)">
		            <div class="content-container">
		                <div class="wrapper padding-large center-text">
		                    <p class="quote center width70"><?php the_field('quotes-text', get_the_ID()) ?></p>
		                    <a href="#pricing" class="scrollto btn color1"><?php the_field('quotes-button', get_the_ID()) ?></a>
		                </div> <!-- .wrapper -->
		            </div> <!-- .content-container -->
		   
		            <div id="us" class="section content-container color2">
		                <div class="wrapper padding">

		                    <div id="tabs" class="tabs width70">
		                        <ul>
		                        	<?php if ( have_rows('togglable-tabs')) : ?>
		                    		<?php while ( have_rows('togglable-tabs')) : the_row(); ?>

		                            <li><a href="#tabs-<?php the_sub_field('quote-tab-id'); ?>" title=""><?php the_sub_field('quote-tab'); ?></a></li>
		                      		
		                      		<?php endwhile; ?>
		                      		<?php endif; ?>
		                        </ul>

		                        <div id="tabs_container" class="clearfix">
		                            <?php if ( have_rows('togglable-tabs')) : ?>
		                    		<?php while ( have_rows('togglable-tabs')) : the_row(); ?>
		                            <div id="tabs-<?php the_sub_field('quote-tab-id'); ?>">
		                                    <p class="bigger"><?php the_sub_field('quote-tab-text') ?></p><p><?php the_sub_field('quote-tab-subtext'); ?></p>
		                            </div>
		                            <?php endwhile; ?>
		                      		<?php endif; ?>
		                        </div>
		                    </div><!--End tabs-->

		                </div> <!-- .wrapper -->
		            </div> <!-- .content-container -->
		        </div>

		        <div class="content-container color1 solid">
		            <div class="wrapper padding">
		                <div class="row row-table">
		                    <div class="half">
		                        <div class="table-d center-text-mt">
		                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/paperplane.png" alt="" class="table-cell-d mr-td-30">
		                            <p class="bigger table-cell-d">I don't know a lot about everything, but I do know a lot about the part of everything that I know.<br><a href="#" class="btn mt20 small borderonly">Small button</a></p>
		                        </div>
		                    </div>
		                    <div class="half">
		                        <div class="table-d center-text-mt">
		                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/moleskine.png" alt="" class="table-cell-d mr-td-30">
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
		                	<?php if ( have_rows('employee-block')): ?>
		                	<?php while ( have_rows('employee-block')) : the_row(); ?>
		                    <div class="third">
		                        <div class="about">
		                            <a class="circle">
		                            	<?php $image_attributes = wp_get_attachment_image_src( get_sub_field('employee-image'), 'employee-position-size'); ?>
		                                <span class="overlay"><span class="inner"><span class="text"><?php the_sub_field('employee-position'); ?></span></span></span>
		                                <img src="<?php echo $image_attributes[0]; ?>" width="<?php echo $image_attributes[2]; ?>" height="<?php echo $image_attributes[1]; ?>" />
		                            </a>
		                            <h3><?php the_sub_field('employee-name'); ?></h3>
		                            <div class="social">
		                                <a href="#" class="rotate"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/picons/32/social-042_dribbble.png" alt=""></a>
		                                <a href="#" class="rotate"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/picons/32/social-043_twitter.png" alt=""></a>
		                                <a href="#" class="rotate"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/picons/32/social-046_facebook.png" alt=""></a>
		                            </div>
		                            <p><?php the_sub_field('employee-comment'); ?></p>
		                        </div>
		                    </div>
		                    <?php endwhile; ?>
		                	<?php endif; ?>
		                </div>
		            </div> <!-- .wrapper -->
		        </div> <!-- .content-container -->

		        <div id="quote2" class="container-group" style="background-image: url(<?php the_field('quotes-slider-background', get_the_ID()) ?>)">
		            <div class="content-container">
		                <div class="wrapper padding-large center-text">
		                    <div id="quotecarousel" class="carousel-single">
		                    	<?php if (have_rows('quotes-slider')): ?>
		                    	<?php while (have_rows('quotes-slider')): the_row(); ?>
		                        <div><p class="quote center width70"><?php the_sub_field('quotes-slider-text') ?></p></div>
		                     	<?php endwhile; ?>
		                     	<?php endif; ?>
		                    </div>
		                    <div id="quotecarouselnav" class="carousel-pagination carousel-single-nav"></div>
		                </div> <!-- .wrapper -->
		            </div> <!-- .content-container -->      
		        </div>

		        <div id="products" class="section content-container grey relative narrow-carousel">
		            <div class="wrapper padding center-text">
		                <div class="container">
		                    <div id="singleportfoliocarousel" class="carousel-single">
		                    	<?php if (have_rows('carousel')): ?>
		                    	<?php while (have_rows('carousel')): the_row(); ?>
		                        <div class="box">
		                            <div class="img"><img src="<?php the_sub_field('carousel-image') ?>" alt=""></div>
		                            <div class="inner clearfix">
		                                <h2 class="right-text-d lead"><?php the_sub_field('carousel-title') ?></h2>
		                                <p class="bigger"><?php the_sub_field('carousel-text') ?></p>
		                            </div>
		                        </div>
		                        <?php endwhile; ?>
		                     	<?php endif; ?>
		                    </div>
		                    <a href="#" class="nav prev" id="singleportfolioprev"></a>
		                    <a href="#" class="nav next" id="singleportfolionext"></a>
		                    <div id="singleportfoliocarouselnav" class="carousel-pagination carousel-single-nav inverse"></div>
		                </div>
		            </div> <!-- .wrapper -->
		        </div> <!-- .content-container -->

		        <div id="pricing" class="section container-group" style="background-image: url(<?php if (get_field('prices-background', get_the_ID()) !='') { the_field('prices-background', get_the_ID()); } ?>)">
		            <div class="content-container color2">
		                <div class="wrapper padding-large center-text">
		                    <div class="row">
		                    	<?php if (have_rows('prices-block')): ?>
		                    	<?php while (have_rows('prices-block')): the_row(); ?>
		                        <div class="third">
		                            <div class="pricingbox">
		                                <span class="name"><?php the_sub_field('tarif-name'); ?></span>
		                                <p class="price color1"><?php the_sub_field('dollar-price'); ?></p>
		                                <ul>
		                                	<?php if (have_rows('includes')): ?>
		                    				<?php while (have_rows('includes')): the_row(); ?>
		                                    <li><?php the_sub_field('tariff-includes') ?></li>
											<?php endwhile; ?>
											<?php endif; ?>
		                                </ul>
		                                <a href="#" class="btn color1"><?php the_sub_field('signup-button') ?></a>
		                            </div>
		                        </div>
		                        <?php endwhile; ?>
								<?php endif; ?>	
		                    </div>
		                    <p class="bigger width70 center">We also offer customized pricing for enterprises. Please <a href="#contact" class="scrollto">contact us</a> and we’ll prepare you an offer.</p>
		                </div> <!-- .wrapper -->
		            </div> <!-- .content-container -->      
		        </div>


		        <div id="blog" class="section content-container grey relative narrow-carousel">
		            <div class="wrapper padding-small">
		                <h2 class="center-text title">Latest from the blog</h2>

		                
		                <div class="row">

	                	<?php 
	                	$args = array( 'numberposts' => '4' ); 
	                	$recent_posts = wp_get_recent_posts( $args );
	           			foreach ($recent_posts as $recent) {
	                	?>
		                    <div class="half">
		                        <div class="blogitem">
		                            <header><h3><a href="blog-single.html"><?php echo $recent["post_title"]; ?></a></h3>
		                                <div class="comments"><?php echo $recent["comment_count"]; ?></div>
		                                <div class="meta">
		                                    <a href="#"><?php echo $recent["post_date"]; ?></a>
		                                    in <a href="#"><?php echo $recent["post_mime_type"]; ?></a>
		                                </div>
		                            </header>
		                            <div class="entry">
		                                <p><?php echo $recent["post_excerpt"]; ?></p>
		                            </div>
		                            <a href="<?php echo $recent["guid"]; ?>" class="btn color1 small">Read On</a>
		                        </div>
		                    </div>
		                <?php }; ?>

		            </div> <!-- .wrapper -->
		        </div> <!-- .content-container -->


		        <!-- <div id="themap" class="map"></div> -->

		        <?php $location = get_field('maps');

				if( !empty($location) ):
				?>
				<div  id="themap" class="acf-map map">
					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
				</div>
				<?php endif; ?>

				<?php the_content(); ?>
			
				<?php //comments_template(); ?>
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>