    <footer>
        <?php 
              wp_nav_menu(array(
                  'theme_location' => 'footerMenuLocation'
              ));
            ?>
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
        <p>&copy; Copyright 2020</p>
    </footer>
<?php wp_footer(); ?>
</body>
</html>