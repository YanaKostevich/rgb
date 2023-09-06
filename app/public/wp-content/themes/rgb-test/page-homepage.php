<?php
get_header();
?>

<main id="primary" class="site-main">
    <section class="container">
        <div class="description-form">
            <div class="description">
                <article class="frontend-course">
                    <p><img src="../../../wp-content/themes/rgb-test/img/globe.svg" alt="Кирил Касатонов">
                        <?php
                        $general_information = get_field('general_information');
                        if ($general_information) : ?>
                            <span><?php echo $general_information['webinar_txt']; ?></span>
                        <?php endif; ?>
                    </p>
                    <?php
                    $general_information = get_field('general_information');
                    if ($general_information) : ?>

                        <h2><?php echo $general_information['position']; ?></h2>
                        <h3><?php echo $general_information['start']; ?></h3>
                        <h4><?php echo $general_information['subtitle']; ?></h4>

                    <?php endif; ?>

                </article>
                <aside class="coaches-and-bonus">
                    <secstion class="coach">

                        <?php
                        $coach = get_field('coach');
                        if ($coach) : ?>
                            <div class="coach-avatar">
                                <img src="<?php echo esc_url($coach['coach_avatar']['url']); ?>" alt="<?php echo esc_attr($coach['coach_avatar']['alt']); ?>" />
                            </div>
                            <div class="coach-info">
                                <h5><?php echo $coach['coach_name']; ?></h5>
                                <p><?php echo $coach['coach_info']; ?></p>
                            </div>
                        <?php endif; ?>

                    </secstion>
                    <section class="registration-bonus">

                        <?php
                        $bonus = get_field('bonus');
                        if ($bonus) : ?>
                            <div class="bonus-icon">
                                <img src="<?php echo esc_url($bonus['bonus_icon']['url']); ?>" alt="<?php echo esc_attr($bonus['bonus_icon']['alt']); ?>" />
                            </div>
                            <div class="bonus-info">
                                <h5><?php echo $bonus['bonus_txt']; ?></h5>
                                <p><?php echo $bonus['bonus_info']; ?></p>
                            </div>
                        <?php endif; ?>

                    </section>
                </aside>
            </div>
            <div class="registration-form">
                <div class="form">
                    <?php echo do_shortcode('[contact-form-7 id="3f5b791" title="Contact form 1"]') ?>
                </div>
            </div>
        </div>


        <section class="icons-programming">
            <div class="icons-position">
                <article class="icons-1">
                    <img src="../../../wp-content/themes/rgb-test/img/icons-programming/1024px-HTML5_logo_and_wordmark.svg" alt="HTML">
                </article>
                <article class="icons-2">
                    <img src="../../../wp-content/themes/rgb-test/img/icons-programming/1452px-CSS3_logo_and_wordmark.svg" alt="CSS">
                </article>
                <article class="icons-3">
                    <img src="../../../wp-content/themes/rgb-test/img/icons-programming/javascript.svg" alt="JS">
                </article>
                <article class="icons-4">
                    <img src="../../../wp-content/themes/rgb-test/img/icons-programming/sublime-text.svg" alt="ST">
                </article>
                <article class="icons-5">
                    <img src="../../../wp-content/themes/rgb-test/img/icons-programming/Visual_Studio_Code_1.35_icon.svg" alt="VS">
                </article>
            </div>

        </section>
    </section>



</main>

<?php
get_sidebar();
get_footer();
