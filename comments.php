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

					<?php 
					$args = array(
						'class_submit' => 'btn color1 firefox-only',
						'comment_notes' => '',
						'label_submit'=>'Submit comment',
						'fields' => apply_filters(
							'comment_form_default_fields', array(
								'author' =>'<p class="comment-form-author">' . '<input id="author" placeholder="Your Name" name="author" type="text" value="' .
									esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />'.
									
									( $req ? '<span class="required">*</span>' : '' )  .
									'</p>'
									,
								'email'  => '<p class="comment-form-email">' . '<input id="email" placeholder="Your email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
									'" size="30"' . $aria_req . ' />'  .
									
									( $req ? '<span class="required">*</span>' : '' ) 
									 .
									'</p>'
							)
						),
						'comment_field' => '<p class="comment-form-comment">' .
							
							'<textarea id="comment" name="comment" placeholder="Express your thoughts, idea or write a feedback by clicking here & start an awesome comment" cols="45" rows="8" aria-required="true"></textarea>' .
							'</p>',
					    'comment_notes_after' => '',
					    'title_reply' => '<div class="crunchify-text"> <h5 id="leaveacomment">LEAVE A COMMENT</h5></div>'
					);
					?>

					<?php comment_form( $args ); ?>

				</div><!-- #comments -->
	        </div>
    </div>
</div>
