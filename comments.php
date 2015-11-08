<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>

<div id="comments" class="comments-area">
	<div class="content-container grey">
            <div class="wrapper">
                <div class="commentsarea" id="comments">
                    

					<?php if ( have_comments() ) : ?>
						<div class="block leavecommentarea">
                        	<h2 class="left width70"><?php
							printf( _nx( 'One comment', '%1$s comments', get_comments_number(), 'comments title', 'twentythirteen' ),
								number_format_i18n( get_comments_number() ), '' );
							?></h2>
                        	<a href="#leaveacomment" class="right btn color1 small m-width100 scrollto">Leave a comment</a>
                    	</div>
					

						<ul class="comment-list">
							<?php
								wp_list_comments( array(
									'style'       => 'ul',
									'short_ping'  => true,
									'avatar_size' => 74,
								) );
							?>
						</ul><!-- .comment-list -->

						<?php
							// Are there comments to navigate through?
							if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
						?>

						<nav class="navigation comment-navigation" role="navigation">
							<h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'twentythirteen' ); ?></h1>
							<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentythirteen' ) ); ?></div>
							<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentythirteen' ) ); ?></div>
						</nav><!-- .comment-navigation -->
						<?php endif; // Check for comment navigation ?>

						

						<?php if ( ! comments_open() && get_comments_number() ) : ?>
						<p class="no-comments"><?php _e( 'Comments are closed.' , 'twentythirteen' ); ?></p>
						<?php endif; ?>

						<h2 id="leaveacomment">Leave a Comment</h2>
						
					<?php endif; // have_comments() ?>

					<?php comment_form(); ?>

				</div><!-- #comments -->
	        </div>
    </div>
</div>
