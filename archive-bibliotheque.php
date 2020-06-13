

<?php get_header() ?>

<div class="preview_article_contener_contener">
    <div class="preview_article_contener revers_scrool">

        <?php 
        $books = new WP_Query( [ 'post_type' => 'bibliotheque' ] );
            if ( $books->have_posts() ): while ( $books->have_posts() ): $books->the_post();
                ?>
                <a href="<?php the_permalink(); ?>"  title="Voir le projet <?= get_the_title(); ?>">
            <article class="preview_article" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');"> 
                <div class="preview_article_content">

                        <h2 class="preview_article_title"><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?></p>

                </div>
            </article>
        </a>
            <?php
        endwhile; endif; ?>
    </div>
</div>
<div class="scroll">
        <p>scroller</p>
        <div class="scroll_bar">

        </div>
</div>

    <?php get_footer() ?>
</body>
</html>