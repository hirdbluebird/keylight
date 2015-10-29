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
		                  <div data-id="id-11" class="item print"><a href="img/samples/portfolio/big/1.jpg" data-lightbox-gallery="gallery1" data-title="Item title" data-caption="Item Description"><img src="http://placehold.it/480x360"></a></div>

		                  <div data-id="id-7" class="item web"><a href="img/samples/portfolio/big/2.png" data-lightbox-gallery="gallery1" data-title="Item title" data-caption="Item Description"><img src="http://placehold.it/480x360"></a></div>

		                  <div data-id="id-8" class="item web"><a href="img/samples/portfolio/big/3.jpg" data-lightbox-gallery="gallery1" data-title="Item title" data-caption="Item Description"><img src="http://placehold.it/480x360"></a></div>

		                  <div data-id="id-9" class="item print"><a href="img/samples/portfolio/big/4.jpg" data-lightbox-gallery="gallery1" data-title="Item title" data-caption="Item Description" data-options="width: 500" ><img src="http://placehold.it/480x360"></a></div>
		                  
		                  <div data-id="id-6" class="item web"><a href="img/samples/portfolio/big/5.jpg" data-lightbox-gallery="gallery1" data-title="Item title" data-caption="Item Description"><img src="http://placehold.it/480x360"></a></div>

		                  <div data-id="id-13" class="item print"><a href="img/samples/portfolio/big/7.jpg" data-lightbox-gallery="gallery1" data-title="Item title" data-caption="Item Description"><img src="http://placehold.it/480x360"></a></div>

		                  <div data-id="id-5" class="item web"><a href="img/samples/portfolio/big/8.png" data-lightbox-gallery="gallery1" data-title="Item title" data-caption="Item Description"><img src="http://placehold.it/480x360"></a></div>
		                  
		                  <div data-id="id-10" class="item print"><a href="img/samples/portfolio/big/9.png" data-lightbox-gallery="gallery1" data-title="Item title" data-caption="Item Description"><img src="http://placehold.it/480x360"></a></div>
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


				<?php the_content(); ?>
			

				<?php comments_template(); ?>
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>