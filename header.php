<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head() ?>
</head>
<body>

<header class="main-header">
<?php
$custom_logo_id = get_theme_mod('custom_logo');
$image = wp_get_attachment_image_src($custom_logo_id, 'full');
?>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-3">
                <img class="logo" src="<?php echo $image[0];?>" alt="Logo de Miles Christi">
            </div>
            <div class="col-9">
                <nav>
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'top_menu',
                            'menu_class'    => 'menu-principal',
                            'container_class' => 'container-menu',
                        )
                    ); 
                    ?>
                </nav>
            </div>
        </div>
    </div>
</header>
    
