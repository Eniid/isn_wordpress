<?php /* Template Name: Template page "contact" */ ?>

<?php get_header() ?>

    <?php 
    if ( have_posts() ): while ( have_posts() ): the_post(); ?>
            <section class="contact_contner pages_contner">
                <div class="contact_right right">
                        <h2>Nous Ecrire</h2>
                        <form action="">
                            <label for="name">Nom </label>
                            <input type="text" name="name" id="name" required>
                            <label for="mail">E-mail </label>
                            <input type="text" name="mail" id="mail" required>
                            <label for="message">Message </label>
                            <textarea name="message" id="message" cols="30" rows="10"></textarea>
                            <button class="contact_send-button pages_cta">Envoyer</button>
                        </form>
                </div>
                <div class="contact_left left">
                    <section>
                        <div class="social">
                            <p class="contact_e-mail"><img src="<?php bloginfo('template_url'); ?>/img/mail.svg" alt=""><?php the_field('e-mail'); ?></p>
                            <p class="contact_number"><img src="<?php bloginfo('template_url'); ?>/img/phone.svg" alt=""><?php the_field('telephone'); ?></p>
                            <p class="contact_fb"><a href="<?php the_field('page_fb'); ?>" target="_blank" rel="noopener"><img src="<?php bloginfo('template_url'); ?>/img/fb.svg" alt="">L'image sans nom</a></p>
                        </div>
                        <div>
                            <h3>Pourquoi nous contacter</h3>
                            <p><?php the_field('why'); ?></p>
                        </div>
                    </section>
                </div>
            </section>

    <?php endwhile; endif;?>


    <?php get_footer() ?>
</body>
</html>