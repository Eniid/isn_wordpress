
<?php get_header() ?>

<main role="main">
    <div class="cta">
        <div class="photo_contenaire"> 
            <a href="<?php echo get_post_type_archive_link('photographie')?>" class="index_button photo">photographie</a>
        </div>
        <div class="bibli_contenaire">
            <a href="bibliotheque/" class="index_button bibli">bibliothèque</a>
        </div>
    </div>

    <div class="latest_articles">
    <input class="latest_articles_tcheck" type="checkbox" id="last">
    <label for="last" class="latest_articles_button"><span class="not_checked">Articles récents</span><span class="checked">close</span> </label>

        <div class="latest_articles_content">


        

            <?php $loop = new WP_Query( array( 'post_type' => array('photographie', 'bibliotheque'), 'posts_per_page'  => '10' ) ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <a href="<?php the_permalink(); ?>"  title="Voir le projet <?= get_the_title(); ?>">
                <article class="latest_articles_article_preview" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');"> 
                <div class="latest_articles_article_preview_text">
                        <h2 role="heading" aria-level="2"><?php the_title(); ?></h2>
                </div>
            </article>
            </a>
            <?php endwhile; wp_reset_query(); ?>
        </div>
        
    </div>
    


</main>


    <?php get_footer() ?>
