<?php /* Template Name: Player-template */ ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

</head>


<body class="player-body">

<?php wp_head(); ?>

<?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
<?php get_header(); ?>
<div class="title"><h1><?php the_title(); ?></h1></div>
<section class="two">
<?php

$imageID = get_field('player_id');
$size = 'full';
if ($imageID) {
    echo wp_get_attachment_image($imageID, $size);
} ?>


<div class="aan">
    <p><?php echo get_field('costum-text-player-template'); ?></p>

</div>


<div class="fee">
    <p><?php echo get_field('costum-text-2-player-template'); ?></p>

</div>
</section>
</body>


</html>

<?php wp_footer(); ?>
