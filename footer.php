<!-- footer -->
<footer class="l-footer">
    <section class="l-footer-recruit l-section">
        <div class="">
            <div class="l-footer-recruit__wrapper">
                <div class="l-footer-recruit__descWrapper">
                    <div class="l-footer-recruit__descInner">
                        <p class="l-footer-recruit__descText">
                            わたしたちと一緒に働く仲間を募集中です。<br>
                            少数精鋭のチームで、<br>あなたも会社も一緒に成長していきましょう。
                        </p>
                        <div class="c-button -entry">
                            <a href="<?php echo esc_url(home_url('entry')); ?>" class="-entry">ENTRY</a>
                        </div>
                    </div>
                </div>
                <figure class="l-footer-recruit__img js-parallax-img">
                    <picture>
                        <img srcset="<?php echo get_template_directory_uri(); ?>/assets/images/home/home_bg.jpg"
                            media="(min-width: 769px)" type="image/jpg">
                    </picture>
                </figure>
            </div>
        </div>
    </section>
    <div class="l-container l-footer__container">
        <div class="l-footer__detail">
            <div class="l-footer__navWrapper">
                <nav class="l-footer__nav">
                    <ul class="l-footer__navList">
                        <li class="l-footer__navItem">
                            <a href="<?php echo esc_url(home_url('')); ?>" class="l-footer__navLink">ホーム</a>
                        </li>
                        <li class="l-footer__navItem">
                            <a href="<?php echo esc_url(home_url('about-us')); ?>"
                                class="l-footer__navLink">TETOTEについて</a>
                        </li>
                        <li class="l-footer__navItem">
                            <a href="<?php echo esc_url(home_url('staff')); ?>" class="l-footer__navLink">人を知る</a>
                        </li>
                        <li class="l-footer__navItem">
                            <a href="<?php echo esc_url(home_url('career')); ?>"
                                class="l-footer__navLink">研修制度とキャリアパス</a>
                        </li>
                        <li class="l-footer__navItem">
                            <a href="<?php echo esc_url(home_url('benefits')); ?>" class="l-footer__navLink">福利厚生</a>
                        </li>
                        <li class="l-footer__navItem">
                            <a href="<?php echo esc_url(home_url('blog')); ?>" class="l-footer__navLink">採用ブログ</a>
                        </li>
                        <li class="l-footer__navItem">
                            <a href="<?php echo esc_url(home_url('details')); ?>" class="l-footer__navLink">募集要項</a>
                        </li>
                        <li class="l-footer__navItem">
                            <a href="<?php echo esc_url(home_url('faq')); ?>" class="l-footer__navLink">よくある質問</a>
                        </li>
                        <li class="l-footer__navItem">
                            <a href="<?php echo esc_url(home_url('about-us')); ?>" class="l-footer__navLink">会社概要</a>
                        </li>
                    </ul>
                </nav>
                <ul class="l-footer__snsList">
                    <li class="l-footer__snsItem">
                        <a href="<?php echo esc_url(home_url('')); ?>" class="l-footer__snsLink">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/facebook.svg"
                                alt="Facebookのアイコン" width="" height="" loading="lazy" decoding="async">
                        </a>
                    </li>
                    <li class="l-footer__snsItem">
                        <a href="<?php echo esc_url(home_url('')); ?>" class="l-footer__snsLink">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/twitter.svg"
                                alt="Twitterのアイコン" width="" height="" loading="lazy" decoding="async">
                        </a>
                    </li>
                    <li class="l-footer__snsItem">
                        <a href="<?php echo esc_url(home_url('')); ?>" class="l-footer__snsLink">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/youtube.svg"
                                alt="YouTubeのアイコン" width="" height="" loading="lazy" decoding="async">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="l-footer__logo">
                <a href="<?php echo esc_url(home_url('')); ?>" class="l-footer__logoLink">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/footer_logo.svg"
                        alt="TETOTE株式会社">
                </a>
                <div class="l-footer__policy">
                    <a href="<?php echo esc_url(home_url('')); ?>" class="l-footer__policyLink">© 2024 TETOTE All Right
                        Reserved.</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /footer -->
<?php wp_footer(); ?>
</body>

</html>