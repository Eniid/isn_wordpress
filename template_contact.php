<?php /* Template Name: Template page "contact" */ ?>


<?php get_header() ?>
<p>teste de la page! <3</p>

    <?php 
    if ( have_posts() ): while ( have_posts() ): the_post(); ?>
            <article>   
                <h2><?php the_title(); ?></h2>
                <div><?php the_excerpt(); ?></div>
                <a href="<?php the_permalink() ?>" class="post_link">Lire l'article <span class="sro"><?php the_title(); ?></span></a>
            </article>
    <?php endwhile; endif;?>


    <?php get_footer() ?>