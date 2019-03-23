<?php

$quote = get_field('quote');
$citing = get_field('citing');
$content_heading_one = get_field('content_heading_one');
$content_article_one = get_field('content_article_one');
$read_more_one = get_field('read_more_one');

$content_heading_two = get_field('content_heading_two');
$content_article_two = get_field('content_article_two');
$read_more_two = get_field('read_more_two');

?>

<!-- Main content section-->
<section class="container py-2">
    <div class="row">
        <div class="col-md-4 info-sec">
            <h2><?php echo $content_heading_one; ?></h2>
            <hr/>
            <?php echo $content_article_one; ?>
            <button class="btn-ba"><?php echo $read_more_one; ?></button>
        </div>
        <div class="col-md-4 info-sec">
            <h2><?php echo $content_heading_two; ?></h2>
            <hr/>

            <?php echo $content_article_two; ?>
            <button class="btn-ba"><?php echo $read_more_two; ?></button>
        </div>
        <div class="col-md-4 info-sec">
            <blockquote><em><?php echo $quote; ?>.</em></blockquote>
            <p> <em class="citing"><?php echo $citing;?></em></p>
        </div>
    </div>
</section>
<!-- End Main content-->