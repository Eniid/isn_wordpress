<?php get_header() ?>

<p>teste <3</p>
<?php 
            if ( have_posts() ): while ( have_posts() ): the_post(); ?>
            <article class="latest_articles_article_preview">   
            <div class="latest_articles_article_preview_text">
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                </div>  
            </article>
        <?php endwhile; endif;?>


<?php get_footer() ?>