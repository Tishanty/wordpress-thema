<?php /* Template Name: About-Us-Template */ ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

</head>
<body class="player-body">

<?php wp_head() ?>



<?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
<?php echo get_header(); ?>

<section class="two">

    <div class="title"><h1><?php the_title(); ?></h1></div>

    <div class="fee"><p><?php the_content(); ?></p></div>

    <img class="stock"
         src="https://images.pexels.com/photos/5337625/pexels-photo-5337625.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1\"
         alt="player one" width="40%">
</section>

<section class="one">


    <div class="aan">
        <?php
        $imageID = get_field('personal_id');
        $size = 'full';
        if ($imageID) {
            echo wp_get_attachment_image($imageID, $size);
        } ?>

        <p><?php echo get_field('custom-field-1'); ?><a href="#">profile</a></p>
    </div>


    <div class="aan">

        <?php
        $imageID = get_field('personal_id_2');
        $size = 'full';
        if ($imageID) {
            echo wp_get_attachment_image($imageID, $size);
        } ?>
        <p><?php echo get_field('custom-field-2'); ?><a href="#">profile</a></p>
    </div>


    <div class="aan">
        <?php
        $imageID = get_field('personal_id_3');
        $size = 'full';
        if ($imageID) {
            echo wp_get_attachment_image($imageID, $size);
        } ?>
        <p><?php echo get_field('custom-field-3'); ?><a href="#">profile</a></p>
    </div>


    <div class="aan">
        <?php
        $imageID = get_field('personal_id_4');
        $size = 'full';
        if ($imageID) {
            echo wp_get_attachment_image($imageID, $size);
        } ?>
        <p><?php echo get_field('custom-field-4'); ?><a href="#">profile</a></p>
    </div>


    <div class="aan">
        <?php
        $imageID = get_field('personal_id_5');
        $size = 'full';
        if ($imageID) {
            echo wp_get_attachment_image($imageID, $size);
        } ?>
        <p><?php echo get_field('custom-field-5'); ?><a href="#">profile</a></p>
    </div>


</section>


<?php wp_head(); ?>
<?php wp_footer(); ?>

</body>

</html>