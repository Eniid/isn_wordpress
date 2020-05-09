
<?php get_header() ?>

<main>
    <div class="cta">
        <div class="photo_contenaire"> 
            <a href="/html/photohraphie.html" class="index_button photo">photographie</a>
        </div>
        <div class="bibli_contenaire">
            <a href="/html/bibli.html" class="index_button bibli">bibliothèque</a>
        </div>
    </div>

    <div class="latest_articles">
        <div class="latest_articles_button">
            <a href="#">Articles récents</a>
        </div>
        <div class="latest_articles_content">

            <?php $loop = new WP_Query( array( 'post_type' => 'photographie', 'bibliotheque' => '10' ) ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <article class="latest_articles_article_preview" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');"> 
                <div class="latest_articles_article_preview_text">
                        <h2><a href="<?php the_permalink(); ?>"  title="Voir le projet <?= get_the_title(); ?>""><?php the_title(); ?></a></h2>
                </div>
            </article>
            <?php endwhile; wp_reset_query(); ?>
        </div>
        
    </div>
    


</main>


    <?php get_footer() ?>
