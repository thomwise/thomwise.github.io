<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <img src="<?php echo get_theme_file_uri('/img/logo.png'); ?>" alt="Thom Wise Logo" class="logo">
        <div class="menu-btn">
            <span class="menu-btn__burger"></span>
        </div>
        <nav class="nav">
            <ul class="menu-nav">
                <li class="menu-nav__item active">
                    <a href="index.html" class="menu-nav__link">
                        Home
                    </a>
                </li>
                <li class="menu-nav__item">
                    <a href="about.html" class="menu-nav__link">
                        About Me
                    </a>
                </li>
                <li class="menu-nav__item">
                    <a href="projects.html" class="menu-nav__link">
                        My Projects
                    </a>
                </li>
                <li class="menu-nav__item">
                    <a href="contact.html" class="menu-nav__link">
                        Contact Me
                    </a>
                </li>
            </ul>
        </nav>
    </header>