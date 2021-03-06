<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<div id="work" class="section content-container white">
            		<div class="wrapper">
						<?php get_template_part( 'content', get_post_format() ); ?>
						<?php twentythirteen_post_nav(); ?>
					</div>
				</div>
				<?php comments_template(); ?>


			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>