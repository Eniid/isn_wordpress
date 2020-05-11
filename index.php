<?php get_header() ?>


<?php 
            if ( have_posts() ): while ( have_posts() ): the_post(); ?>
            <article class="latest_articles_article_preview">   
            <div class="latest_articles_article_preview_text">
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                </div>  
            </article>
        <?php endwhile; endif;?>

        <div class="pages_contner">
        <div class="right">
            <p>Il n'y a rien à voir ici. Vous êtes perdu ? </p>
            <a href="/" class="pages_cta">acceuil</a>
        </div>
        </div>



<?php get_footer() ?>