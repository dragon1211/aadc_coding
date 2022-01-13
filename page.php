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

                if(wp_get_post_parent_id(get_post()) > 0)
                    get_template_part( 'pages'.'/'.get_page_uri(), 'page' );
                else 
                    get_template_part( 'pages'.'/'.get_page_uri().'/'.'index', 'page' );

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
