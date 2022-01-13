<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>


    <?php

        if ( have_posts() ) {
            // Start the Loop.
            while ( have_posts() ) :
                the_post();

                //get_template_part( 'template-parts/content/content', 'page' );
                get_template_part( 'pages'.'/'.get_the_title(), 'page' );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                }

            endwhile; // End the loop.
        } else {
            get_template_part( __DIR__.'/404.php', 'page' );
        }

    ?>


<?php
get_footer();
