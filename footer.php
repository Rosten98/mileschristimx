<footer>
    <div class="container">
        <!-- El parametro es igual al id del widget creado en functions.php -->
        <?php dynamic_sidebar('footer'); ?>
        
        <div class="row align-items-center">
            <div class="col-3">
                Second menu
            </div>
            <div class="col-6">
                <img class="logo" src="<?php echo get_template_directory_uri()?>/assets/img/logo-blanco-mc.png" alt="Logo de Miles Christi">
            </div>
            <div class="col-3">
            <nav>
                <?php 
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer',
                            'menu_class'    => 'menu-footer',
                            'container_class' => 'container-menu',
                        )
                    ); 
                ?>
            </nav>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer() ?>

</body>
</html>