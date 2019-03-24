<?php
/**
 * Template Name: Services
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blackandwhite
 */

$services_heading = get_field('services_heading');
$main_content_1 = get_field('main_content_1');
$main_content_2 = get_field('main_content_2');
$thumbnail_url	= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
$services_side_heading = get_field('services_side_heading');
get_header();
?>

    <!-- Hero section-->
    <section class="container my-3">
        <div class="row">
            <div class="col">
                <?php if (has_post_thumbnail() ): ?>
                    <div class="services-bg my-3" style="background: url('<?php echo $thumbnail_url; ?>')"></div>
                <?php endif; ?>
                <h3 class="my-4"><?php echo $services_heading; ?></h3>
                <hr/>
                <div class="row">
                    <div class="col-md-6">
                        <?php echo $main_content_1; ?>
                    </div>
                    <div class="col-md-6">
                        <?php echo $main_content_2; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 list-div">
                <div class="grey-box">
                    <div class="services mt-3">
                        <h3 class="services__title text-center my-3"><?php echo $services_side_heading; ?></h3>
                        <?php wp_nav_menu(array(
                                'theme_location' => 'services-menu',
                                'menu_class' => 'services-list',
                        ));?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero section-->

<?php
//get_sidebar();
get_footer();
