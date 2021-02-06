<?php 
/**
* Template Name: Blog
*
* @package WordPress
*/

get_header(); ?>
This is BLOG PAGE
<main class='container'>
     <div class="row">
        <?php
        $args = array(
            'post_type' => 'post',
            'post_per_page' => -1, 
            'order'         => 'ASC',
            'orderby'       => 'title'
        );

        $productos = new WP_Query($args);

        if($productos->have_posts()){
            while($productos->have_posts()){
                $productos->the_post();
                ?>

                <div class="col-4">
                    <figure>
                        <?php the_post_thumbnail('large'); ?>
                    </figure>
                    <h4 class='my-3 text-center'>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title();?>
                        </a>
                    </h4>
                </div>

           <?php }
        }

        ?>
      </div>
</main>

<?php get_footer(); ?>