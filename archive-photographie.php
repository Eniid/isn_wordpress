

<?php get_header() ?>
<div class="preview_article_contener_contener">
    <div class="preview_article_contener">
        <?php 
        $photograpgies = new WP_Query( [ 'post_type' => 'photographie' ] );
            if ( $photograpgies->have_posts() ): while ( $photograpgies->have_posts() ): $photograpgies->the_post();
                ?>
            <article class="preview_article" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');"> 
                <div class="preview_article_content">

                        <h2 class="preview_article_title"><a href="<?php the_permalink(); ?>"  title="Voir le projet <?= get_the_title(); ?>""><?php the_title(); ?></a></h2>
                        <p><?php the_excerpt(); ?></p>

                </div>
            </article><?php
        endwhile; endif; ?>
    </div>
</div>


    <?php get_footer() ?>
</body>
</html>