<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blackandwhite
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'blackandwhite' ); ?></a>
    <!-- header -->
    <header class="p-3">
        <div class="container">
            <nav class="d-flex justify-content-between navbar navbar-expand-lg navbar-toggleable-md navbar-light bg-light main-nav"><a class="navbar-brand mt-2" href="index.html">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="Black + White logo icon"/></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <!-- List navigation-->
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="nav bw-nav">
                        <li class="nav-item"><a class="nav-link" href="index.html">home</a></li>
                        <li class="nav-item"><a class="nav-link" href="services.html">our services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">how we work</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">testimonials</a></li>
                        <li class="nav-item"><a class="nav-link" href="work.html">work samples</a></li>
                    </ul>
                </div>
                <!-- End list navigation-->
            </nav>
        </div>
    </header>
    <!--  # header-->

	<div id="content" class="site-content">
