
<?php get_header() ?>

<main>
    <div class="cta">
        <div class="photo_contenaire"> 
            <a href="/html/photohraphie.html" class="index_button photo">photographie</a>
        </div>
        <div>
            <a href="/html/bibli.html" class="index_button bibli">bibliothèque</a>
        </div>
    </div>

    <div class="latest_articles">
        <div class="latest_articles_button">
            <a href="#">Articles récents</a>
        </div>
        <div class="latest_articles_content">

            <?php 
            if ( have_posts() ): while ( have_posts() ): the_post(); ?>
            <article class="latest_articles_article_preview">   
            <div class="latest_articles_article_preview_text">
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                </div>  
            </article>
            <?php endwhile; endif;?>
        </div>
        
    </div>
    


</main>


    <?php get_footer() ?>
