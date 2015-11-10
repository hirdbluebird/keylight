<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>
        <div class="footer content-container color2 darken">
            <div class="wrapper padding-tiny">
                <div class="container">
                    <div class="half table-cell">
                        <p>I was made by <a href="#">Tardigrade Studio</a></p>
                    </div>
                    <div class="half table-cell right-text">
                        <?php if (have_rows('links')): ?>
                        <?php while (have_rows('links')): the_row(); ?>      
                        <a href="<?php the_sub_field('link') ?>" class="inline-block fadeout20 rotate ml15 mb5 mt5"><img src="<?php the_sub_field('image') ?>" alt=""></a>
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>


        <?php wp_footer(); ?>
    </body>
</html>