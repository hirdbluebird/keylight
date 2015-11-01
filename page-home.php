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

		        <div id="quote" class="container-group" style="background-image: url(img/samples/background-2.jpg)">
		            <div class="content-container">
		                <div class="wrapper padding-large center-text">
		                    <p class="quote center width70"><?php if ( get_field('quote_1', get_the_ID()) != '' ) { the_field('quote_1', get_the_ID()); } ?></p>
		                    <a href="#pricing" class="scrollto btn color1"><?php if ( get_field('quote_1', get_the_ID()) != '' ) { the_field('quote_1', get_the_ID()); } ?></a>
		                </div> <!-- .wrapper -->
		            </div> <!-- .content-container -->

		            <div id="us" class="section content-container color2">
		                <div class="wrapper padding">
		                    <div id="tabs" class="tabs width70">
		                        <ul>
		                            <li><a href="#tabs-1" title="">Our motto</a></li>
		                            <li><a href="#tabs-2" title="">The story</a></li>
		                            <li><a href="#tabs-3" title="">The office</a></li>
		                        </ul>

		                        <div id="tabs_container" class="clearfix">
		                            <div id="tabs-1">
		                                    <p class="bigger">No true fiasco ever began as a quest for mere adequacy. A motto of the British Special Air Force is: 'Those who risk, win.' A single green vine shoot is able to grow through cement. The Pacific Northwestern salmon beats itself bloody on it's quest to travel hundreds of miles upstream against the current, with a single purpose, sex of course, but also... life</p>
		                                    <hr class="width30 center">
		                                    <p class="bigger"><a href="#" class="dashed bold"></a></p>
		                            </div>
		                            <div id="tabs-2">
		                                    <p class="bigger">Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor.</p>
		                        
		                            </div>
		                            <div id="tabs-3">
		                                    <p class="bigger">Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem.</p><p> Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales.</p>
		                            </div>
		                        </div><!--End tabs container-->
		                    </div><!--End tabs-->

		                </div> <!-- .wrapper -->
		            </div> <!-- .content-container -->
		        </div>

				<?php the_content(); ?>
			

				<?php comments_template(); ?>
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>