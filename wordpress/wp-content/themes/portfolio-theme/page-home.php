<?php 
/* 
   Template Name: Home-Page
   Template Post Type: page
*/
get_header();
?>

    <main class="home">
        <section>
            <h2>Hi! My name is </h2>
            <h1 class="home__name"><?php the_title(); ?> <span class="home__name--last">Wise</span>
            </h1>

            <h2>Web Developer,</h2>
            <h2>Designer & Programmer</h2>

        </section>
    </main>

<?php get_footer();?>