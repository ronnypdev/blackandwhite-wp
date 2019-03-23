<?php

$heading_one = get_field('heading_one');
$heading_two = get_field('heading_two');
$heading_three = get_field('heading_three');
$thumbnail_url	= wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

?>

<!-- Hero section-->
<section class="container my-3">
    <div class="row">
        <div class="col-md-9">
            <?php if (has_post_thumbnail()) :?>
                <div class="fish-bg" style="background: url('<?php echo $thumbnail_url?>')">
                    <h4><?php echo $heading_one; ?></h4>
                    <h4><?php echo $heading_two; ?></h4>
                    <h4><?php echo $heading_three; ?></h4>
                </div>
            <?php endif;?>
        </div>
        <div class="col-md-3 div-box">
            <div class="black-box"></div>
        </div>
    </div>
</section>
<!-- End Hero section-->