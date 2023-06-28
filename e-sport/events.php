<?php /* Template Name: event-Template */ ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

</head>

<body class="player-body">

<?php wp_head() ?>
<?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
<?php echo get_header(); ?>


<div class="title"><h1><?php the_title(); ?></h1></div>

<div><p><?php the_content(); ?></p></div>




<section class="event-Row">
    <div class="event-img">
    <?php
    $imageID = get_field('event-1');
    $size = '50%';
    if ($imageID) {
        echo wp_get_attachment_image($imageID, $size);
    } ?>


    <p><?php echo get_field('costum-event-date'); ?></p>
    </div>

    <div class="event-img">
        <?php
        $imageID = get_field('event-2');
        $size = '50%';
        if ($imageID) {
            echo wp_get_attachment_image($imageID, $size);
        } ?>


        <p><?php echo get_field('costum-event-date2'); ?></p>
    </div>

</section>

<section class="event-Row">
    <div class="event-img">
        <?php
        $imageID = get_field('event-3');
        $size = '50%';
        if ($imageID) {
            echo wp_get_attachment_image($imageID, $size);
        } ?>


        <p><?php echo get_field('costum-event-date3'); ?></p>
    </div>

    <div class="event-img">
        <?php
        $imageID = get_field('event-4');
        $size = '50%';
        if ($imageID) {
            echo wp_get_attachment_image($imageID, $size);
        } ?>


        <p><?php echo get_field('costum-event-date4'); ?></p>
    </div>

</section>


<?php wp_head(); ?>
<?php wp_footer(); ?>



</body>

</html>