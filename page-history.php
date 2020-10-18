<?php 
/*
Template Name: История
*/
?>

<?php
    get_header();
?>

<div class="aboutus">
    <div class="container">
        <h1 class="title">Наша история</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history_title'); ?> 
                </div>
                <div class="aboutus__text">
                <?php the_field('history_text'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                    $image = get_field('history_img');
                    if (!empty($image)): ?>
                    <img 
                        src='<?php echo $image['url'] ?>' 
                        alt='<?php echo $image['alt'] ?>' 
                        class='<?php the_field('history_img_class'); ?>'>
                    <?php endif;
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <?php
                    $image = get_field('history_img_second');
                    if (!empty($image)): ?>
                    <img
                        src='<?php echo $image['url'] ?>'
                        alt='<?php echo $image['alt'] ?>'
                        class='<?php the_field('history_img_class'); ?>'>
                    <?php endif;
                ?>
            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history_title_second'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history_text_second'); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history_title_third'); ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history_text_third'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                    $image = get_field('history_img_third');
                    if (!empty($image)): ?>
                    <img
                        src='<?php echo $image['url']; ?>'
                        alt='<?php echo $image['alt']; ?>'
                        class='<?php the_field('history_img_class'); ?>'
                    <?php endif;
                ?>
            </div>
        </div>
    </div>
</div>

<?php 
    get_footer();
?>