<?php get_header() ?>


<?php 
    if ( have_posts() ): while ( have_posts() ): the_post(); ?>
            <section class="single_contner pages_contner">
                <div class="single_right right">
                        <h2><?php the_title(); ?></h2>
                        <div>
                        <?php the_content(); ?>
                        </div>
                </div>
                    <?php 
                        $images = get_field('gallerie_photo');
                        if( $images ): ?>
                                        <div class="signle_left left carouselle">
                                        <div>
                                <?php foreach( $images as $image ): ?>
                                        <a href="<?php echo esc_url($image['url']); ?>" target="_blank" rel="noopener">
                                            <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                        </a>
                                <?php endforeach; ?>
                                </div>
                </div>
                        <?php endif; ?>
            </section>

    <?php endwhile; endif;?>


    <?php get_footer() ?>
</body>
</html>