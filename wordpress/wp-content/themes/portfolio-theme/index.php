<?php get_header(); ?>


  <main>
        <section style="background-image: url(<?php echo $bgImage; ?>);" class="home">
            <h2>Hi! My name is </h2>
            <h1 class="home__name">Thom <span class="home__name--last">Wise</span>
            </h1>

            <h2>Web Developer,</h2>
            <h2>Designer & Programmer</h2>

            <div class="social-icons">
                <a href="#!">
                    <i class="fab fa-facebook fa-2x"></i>
                </a>
                <a href="#!">
                    <i class="fab fa-instagram fa-2x"></i>
                </a>
                <a href="#!">
                    <i class="fab fa-linkedin fa-2x"></i>
                </a>
                <a href="#!">
                    <i class="fab fa-github fa-2x"></i>
                </a>
            </div>
        </section>
    </main>

<?php get_footer();?>