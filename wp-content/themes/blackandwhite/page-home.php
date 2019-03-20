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
    <section class="container my-3">
        <div class="row">
            <div class="col-md-9">
                <div class="fish-bg">
                    <h4>some slick phrase would go in here </h4>
                    <h4>to sum up what the business </h4>
                    <h4>actually does and stands for</h4>
                </div>
            </div>
            <div class="col-md-3 div-box">
                <div class="black-box"></div>
            </div>
        </div>
    </section>
    <!-- End Hero section-->
    <!-- Main content section-->
    <section class="container py-2">
        <div class="row">
            <div class="col-md-4 info-sec">
                <h2>services we offer</h2>
                <hr/>
                <p>
                    Donec odio arcu, faucibus vel, accumsan eu, cursus in, ipsum. Pellentesque blandit condimentum purus. Suspendisse commodo dui.</p>
                <p>Quisque a tellus. Vestibulum tincidunt lorem ac est. Vivamus augue quam, hendrerit at, porta ut, tristique ac, lacus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur fringilla eros ultrices justo. Nunc condimentum. Ut id dui in erat vulputate ultricies </p>
                <button class="btn-ba">read more</button>
            </div>
            <div class="col-md-4 info-sec">
                <h2>how we work</h2>
                <hr/>
                <p>
                    Donec odio arcu, faucibus vel, accumsan eu, cursus in, ipsum. Pellentesque blandit condimentum purus. Suspendisse commodo dui.</p>
                <p>Quisque a tellus. Vestibulum tincidunt lorem ac est. Vivamus augue quam, hendrerit at, porta ut, tristique ac, lacus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur fringilla eros ultrices justo. Nunc condimentum. Ut id dui in erat vulputate ultricies </p>
                <p>Cras orci odio, consequat vel, venenatis id, mollis a, lorem. Ut commodo accumsan sapien. </p>
                <button class="btn-ba">read more</button>
            </div>
            <div class="col-md-4 info-sec">
                <blockquote><em>
                        Clean, elegant typography
                        matched with sharp lines
                        and precise spacing leads
                        to a professional look
                        and feel.</em></blockquote>
                <p> <em class="citing">
                        Collis Ta’eed <br> Designer</em></p>
            </div>
        </div>
    </section>
    <!-- End Main content-->


<?php
get_footer();
