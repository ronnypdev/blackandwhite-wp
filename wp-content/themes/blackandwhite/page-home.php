<?php
/**
 *  Template Name: Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blackandwhite
 */



get_header();
?>


    <!-- Hero section-->
    <?php get_template_part('template-parts/content', 'hero'); ?>
    <!-- End Hero section-->

    <!-- Main content section-->
    <?php get_template_part('template-parts/content', 'main'); ?>
    <!-- End Main content-->


<?php
get_footer();
