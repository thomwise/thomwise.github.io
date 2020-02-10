<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); 
      $bgImage = get_the_post_thumbnail_url();
    ?>
</head>
<body style="background-image: url(<?php echo $bgImage; ?>);">
    <header>
        <img src="<?php echo get_theme_file_uri('/img/logo.png'); ?>" alt="Thom Wise Logo" class="logo">
        <div class="menu-btn">
            <span class="menu-btn__burger"></span>
        </div>
        <nav class="nav">
            <?php 
                wp_nav_menu(array(
                'theme_location' => 'headerMenuLocation'
                ));
            ?>
        </nav>
    </header>