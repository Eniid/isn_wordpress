<?php get_header() ?>


<?php 
        if ( have_posts() ): while ( have_posts() ): the_post(); ?>
                <article class="single_contner pages_contner">
                <div class="single_right right">
                                <div class="container">
                                        <div class="tip">partager</div>
                                        <div class="share-window">
                                                <div class="share-bar">
                                                        <div class="trigger"><a href="#"><i class="fab fa-facebook-f"><img src="<?php bloginfo('template_url'); ?>/img/fb_share.svg" alt="partager sur facebook"></i></a></div>
                                                        <div class="trigger"><a href="#"><i class="fab fa-twitter"><img src="<?php bloginfo('template_url'); ?>/img/twit_share.svg" alt="partager sur twitter"></i></a></div>
                                                </div>
                                        </div>
                                </div>

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
                </article>

        <?php endwhile; endif;?>
        <div class="scroll scroll_single">
        <p>scroller</p>
        <div class="scroll_bar">

        </div>
</div>

    <?php get_footer() ?>
</body>
</html>