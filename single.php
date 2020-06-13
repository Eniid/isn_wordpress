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
                        $images = get_field('gallerie-Photo');
                        if( $images ): ?>
                                        <div class="signle_left left carouselle revers_scrool">
                                        <div>
                                        <?php 
                        $video = get_field('video');
                        if( $video ): ?>
                                                <iframe width="200" height="150" src="<?php the_field('video'); ?>" frameborder="0" class="youtube" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        <?php endif; ?>
                                        <?php foreach( $images as $image ): ?>
                                        <a href="<?php echo esc_url($image['url']); ?>" target="_blank" rel="noopener">
                                                <img src="<?php echo esc_url($image['sizes']['medium']); ?>" class="lightbox_image" alt="<?php echo esc_attr($image['alt']); ?>" />
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
