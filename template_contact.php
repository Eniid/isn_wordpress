<?php /* Template Name: Template page "contact" */ ?>

<?php get_header() ?>

    <?php 
    if ( have_posts() ): while ( have_posts() ): the_post(); ?>
            <section class="contact_contner pages_contner">
                <div class="contact_right right">
                        <h2 role="heading" aria-level="2">Nous Ecrire</h2>
                        <?php echo do_shortcode( '[contact-form-7 id="157" title="Contact form 1"]' ); ?>
                </div>
                <div class="contact_left left">
                    <section itemscope itemtype="https://schema.org/Organization">
                        <div class="social">
                            <p class="contact_e-mail"><img src="<?php bloginfo('template_url'); ?>/img/mail.svg" alt=""><span itemprop="telephone"><?php the_field('e-mail'); ?></span></p>
                            <p class="contact_number"><img src="<?php bloginfo('template_url'); ?>/img/phone.svg" alt=""><span itemprop="telephone"><?php the_field('telephone'); ?></span></p>
                            <p class="contact_fb"><a href="<?php the_field('page_fb'); ?>" target="_blank" rel="noopener" aria-label="Voir la page facebook (nouvelle fenêtre)" itemprop="url"><img src="<?php bloginfo('template_url'); ?>/img/fb.svg" alt="">L'image sans nom</a></p>
                        </div>
                        <div>
                            <h3 role="heading" aria-level="3">Pourquoi contacter <span itemprop="name">L'image sans nom</span></h3>
                            <p><?php the_field('why'); ?></p>
                        </div>
                    </section>
                </div>
            </section>

    <?php endwhile; endif;?>


    <?php get_footer() ?>
