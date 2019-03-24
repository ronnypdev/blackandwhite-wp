<?php
/**
 * The template for displaying all pages
 *
 * Template Name: Work
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

$previous_button = get_field('previous_button');
$work_image_1 = get_field('work_image_1');
$work_heading_1 = get_field('work_heading_1');
$work_description_1 = get_field('work_description_1');
$work_content_1 = get_field('work_content_1');

$next_button = get_field('next_button');
$work_image_2 = get_field('work_image_2');
$work_heading_2 = get_field('work_heading_2');
$work_description_2 = get_field('work_description_2');
$work_content_2 = get_field('work_content_2');


get_header();
?>
    <!-- Hero section-->
    <section class="container my-3">
        <div class="row">
            <div class="col-md-6">
                <div class="work1" style="background: url('<?php echo $work_image_1; ?>');">
                    <button class="btn-ba prev"><?php echo $previous_button; ?></button>
                </div>
                <h3 class="my-4"><?php echo $work_heading_1; ?></h3>
                <h5 class="text-muted"><?php echo $work_description_1; ?></h5>
                <hr/>
                <?php echo $work_content_1; ?>
            </div>
            <div class="col-md-6">
                <div class="work2" style="background: url('<?php echo $work_image_2; ?>');">
                    <button class="btn-ba next"><?php echo $next_button; ?></button>
                </div>
                <h3 class="my-4"><?php echo $work_heading_2; ?></h3>
                <h5 class="text-muted"><?php echo $work_description_2; ?></h5>
                <hr/>
                <?php echo $work_content_2; ?>
            </div>
        </div>
    </section>
    <!-- End Hero section-->

<?php
get_footer();
