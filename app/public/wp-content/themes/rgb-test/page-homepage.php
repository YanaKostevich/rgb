<?php
get_header();
?>

<main id="primary" class="site-main">
    <section class="container">
        <div class="description">
            <article class="frontend-course">
                <p><img src="../../../wp-content/themes/rgb-test/img/globe.svg" alt="Кирил Касатонов">
                    <span>Вебинар</span>
                </p>
                <h2>Front-End</h2>
                <h3><span>с нуля</span> легкий старт в IT профессии.</h3>
                <h4>Узнайте какими <span> навыками должен обладать фронтенд разработчик в 2022 году </span> и как начать карьеру в востребованной профессии </h4>
            </article>
            <aside class="coaches-and-bonus">
                <secstion class="coach">
                    <div class="coach-avatar">
                        <img src="../../../wp-content/themes/rgb-test/img/coach.svg" alt="Кирил Касатонов">
                    </div>
                    <div class="coach-info">
                        <h5>Кирил <span> Касатонов</span></h5>
                        <p>6 лет коммерческого опыта с такими компаниями как Mercedes-Benz и другими крупными корпорациями</p>
                    </div>
                </secstion>
                <section class="registration-bonus">
                    <div class="bonus-icon">
                        <img src="../../../wp-content/themes/rgb-test/img/bonus.svg" alt="Іконка бонусу за реєстрацію">
                    </div>
                    <div class="bonus-info">
                        <h5>Бонус за регистрацию</h5>
                        <p>PDF-файл "5 преимуществ профессии фронтенд разработчика" </p>
                    </div>
                </section>
            </aside>
        </div>
        <div class="registration-form">
            <div class="form">
                <?php echo do_shortcode('[contact-form-7 id="3f5b791" title="Contact form 1"]') ?>
            </div>
        </div>
    </section>


</main>


<?php
get_sidebar();
get_footer();
