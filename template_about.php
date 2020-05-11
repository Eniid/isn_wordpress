<?php /* Template Name: Template page "about" */ ?>



<?php get_header() ?>

    <?php 
    if ( have_posts() ): while ( have_posts() ): the_post(); ?>
            <div class="about_contner pages_contner">
                <div class="about_right right">
                    <div>
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_field('add'); ?></p>
                        <a href="contacte/" class="about_contact-button pages_cta">Nous contacter</a>
                    </div>
                </div>
                <div class="about_left left">
                    <div>
                        <?php the_field('about'); ?>
                    </div>
                </div>
            </div>

    <?php endwhile; endif;?>


    <?php get_footer() ?>
</body>
</html>