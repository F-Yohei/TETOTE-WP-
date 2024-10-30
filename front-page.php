<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: TOP page
*/
?>
<!-- main -->
<main class="l-main">
    <article>
        <!-- main visual -->
        <div id="js-mv" class="p-home-mv">
            <h1 class="p-home-mv__catch">BECOME A<br>CHALLENGER.</h1>
            <h2 class="p-home-mv__subCatch">君の挑戦が、意思が、未来を変える</h2>
            <div class="p-home-mv__blog">
                <a href=".//blog">
                    <p class="p-home-mv__blogText">2024年度働きやすさランキング一位を取得しました！！
                        <span class="p-home-mv__nextWrapper"><span class="p-home-mv__next u-pc">VIEW MORE<span
                                    class="p-home-mv__arrow u-pc"></span></span></span>
                    </p>
                </a>
            </div>
            <div id="splide1" class="splide" aria-label="carousel">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <figure>
                                <picture>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/fv01.jpg"
                                        alt="" width="1440px" height="822px" />
                                </picture>
                            </figure>
                        </li>
                        <li class="splide__slide">
                            <figure>
                                <picture>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/fv02.jpg"
                                        alt="" width="1440px" height="822px" />
                                </picture>
                            </figure>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /main visual -->
        <!-- splide -->
        <section class="p-home-introduction splide-slider l-section">
            <div class="p-home-introduction__inner">
                <div id="splide2" class="splide" aria-label="">
                    <div class="p-home-introduction__track splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <figure>
                                    <picture>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/home_slide_img01.jpg"
                                            width="271" height="210" loading="lazy" alt="" />
                                    </picture>
                                </figure>
                            </li>
                            <li class="splide__slide">
                                <figure>
                                    <picture>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/home_slide_img02.jpg"
                                            loading="lazy" alt="" />
                                    </picture>
                                </figure>
                            </li>
                            <li class="splide__slide">
                                <figure>
                                    <picture>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/home_slide_img03.jpg"
                                            loading="lazy" alt="" />
                                    </picture>
                                </figure>
                            </li>
                        </ul>
                        <div class="p-home-introduction__textWrapper">
                            <p class="p-home-introduction__text">後悔しないキャリアを作る、</p>
                            <p class="p-home-introduction__text">それこそが、我々の使命だ</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- splide -->
        <!-- p-home-subCatch -->
        <div class="p-home-subCatch l-section">
            <div class="l-inner">
                <div class="p-home-subCatch__bg">
                    <div class="p-home-subCatch__container">
                        <p class="p-home-subCatch__text">「人手不足」<br>
                            今の日本が抱えるこの社会課題に挑み、<br>
                            企業と個人の可能性を最大限に引き出す。<br>
                            それが私達の役目。</p>
                        <p class="p-home-subCatch__text -bottom">単につなぐだけじゃない。<br>
                            「手と手」を取り合っていけるような、<br>
                            持続可能な社会を、一緒に作りませんか？</p>
                    </div>
                </div>
                <!-- もっと見るボタン -->
                <div class="c-button">
                    <a href=".//details">VIEW MORE</a>
                </div>
            </div>
        </div>
        <!-- /p-home-subCatch -->
        <!-- p-home-staff -->
        <section class="p-home-staff l-section">
            <div class="p-home-staff__inner l-inner">
                <div class="p-home-staff__desc">
                    <div class="p-home-staff__title">
                        <h2 class="l-section__title -staff"><span>人</span>を知る</h2>
                        <p class="l-section__description">
                            TETOTEの社員がどういった信念を持って働いているのか、<br>
                            一日のスケジュールや仕事内容などを紹介します。
                        </p>
                    </div>
                </div>
                <div id="splide3" class="splide p-home-staff__slider" aria-label="">
                    <div class="p-home-staff__track splide__track">
                        <ul class="p-home-staff__list splide__list">
                            <li class="p-home-staff__item splide__slide">
                                <div class="p-home-staff__img">
                                    <figure>
                                        <picture>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/syain_img01.jpg"
                                                loading="lazy" alt="" />
                                        </picture>
                                    </figure>
                                    <div class="p-home-staff__textBox">
                                        <div class="p-home-staff__comment">
                                            <p>「あなたが担当で良かった」</p>
                                            <p>この一言が、最高のやりがい</p>
                                        </div>
                                        <div class="p-home-staff__content">
                                            <p class="p-home-staff__title">
                                                <span>コンサルタント</span>
                                                <span>2011年入社</span>
                                            </p>
                                            <h3 class="p-home-staff__name">西村 優</h3>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="p-home-staff__item splide__slide">
                                <div class="p-home-staff__img">
                                    <figure>
                                        <picture>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/syain_img02.jpg"
                                                loading="lazy" alt="" />
                                        </picture>
                                    </figure>
                                    <div class="p-home-staff__textBox">
                                        <div class="p-home-staff__comment">
                                            <p>全力で考えぬける環境</p>
                                            <p>試練の数だけ強くなれました</p>
                                        </div>
                                        <div class="p-home-staff__content">
                                            <p class="p-home-staff__title">
                                                <span>コンサルタント</span>
                                                <span>2015年入社</span>
                                            </p>
                                            <h3 class="p-home-staff__name">橋本 拓也</h3>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="p-home-staff__item splide__slide">
                                <div class="p-home-staff__img">
                                    <figure>
                                        <picture>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/syain_img03.jpg"
                                                loading="lazy" alt="" />
                                        </picture>
                                    </figure>
                                    <div class="p-home-staff__textBox">
                                        <div class="p-home-staff__comment">
                                            <p>お客様も知らない課題を</p>
                                            <p>一緒に探し出す醍醐味</p>
                                        </div>
                                        <div class="p-home-staff__content">
                                            <p class="p-home-staff__title">
                                                <span>ソリューション営業</span>
                                                <span>2017年入社</span>
                                            </p>
                                            <h3 class="p-home-staff__name">青木 美月</h3>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="p-home-staff__item splide__slide">
                                <div class="p-home-staff__img">
                                    <figure>
                                        <picture>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/syain_img04.jpg"
                                                loading="lazy" alt="" />
                                        </picture>
                                    </figure>
                                    <div class="p-home-staff__textBox">
                                        <div class="p-home-staff__comment">
                                            <p>「あなたが担当で良かった」</p>
                                            <p>この一言が、最高のやりがい</p>
                                        </div>
                                        <div class="p-home-staff__content">
                                            <p class="p-home-staff__title">
                                                <span>コンサルタント</span>
                                                <span>2004年入社</span>
                                            </p>
                                            <h3 class="p-home-staff__name">佐々木 健</h3>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- 矢印を追加 -->
                        <div class="splide__arrows">
                            <button class="splide__arrow splide__arrow--prev button prev"><span
                                    class="arrow -prev"></span></button>
                            <button class="splide__arrow splide__arrow--next button next"><span
                                    class="arrow"></span></button></button>
                        </div>
                    </div>
                </div>
                <!-- もっと見るボタン -->
                <div class="c-button">
                    <a href=".//staff">VIEW MORE</a>
                </div>
            </div>
        </section>
        <!-- /p-home-staff -->
        <!-- p-home-benefits -->
        <section class="p-home-benefit l-section">
            <div class="p-home-benefit__inne l-inner">
                <div class="p-home-benefit__desc">
                    <div class="p-home-benefit__title">
                        <h2 class="l-section__title -benefit"><span>制度・環境</span>を知る</h2>
                        <p class="l-section__description -benefit">当社では働く従業員とそのご家族が健やかに過ごせるよう、多様な研修、福利厚生を提供しています。</p>
                    </div>
                </div>
                <div class="p-home-benefit__container">
                    <div class="p-card -traning">
                        <a href=".//career" class="p-card__link -traning">
                            <figure class="p-card__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/benefits_img01.png"
                                    alt="" width="" height="" loading="lazy" decoding="async">
                            </figure>
                            <span class="p-home-benefit__circle c-circle -benefits">
                                <span class="p-home-benefit__arrow c-arrow"></span>
                            </span>
                        </a>
                        <div class="p-card__body">
                            <h3 class="p-card__title">研修制度とキャリアパス</h3>
                            <p class="p-card__text">個々の目標に合わせたキャリアパスを支える、豊富な研修メニューで、あなた自身の成長を強力にサポートします。</p>
                        </div>
                    </div>
                    <div class="p-card -employee">
                        <a href=".//benefits" class="p-card__link -employee">
                            <figure class="p-card__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/benefits_img02.png"
                                    alt="" width="" height="" loading="lazy" decoding="async">
                            </figure>
                            <span class="p-home-benefit__circle c-circle -benefits">
                                <span class="p-home-benefit__arrow c-arrow"></span>
                            </span>
                        </a>
                        <div class="p-card__body">
                            <h3 class="p-card__title">福利厚生</h3>
                            <p class="p-card__text">TETOTEの福利厚生制度は、従業員の健康と幸福を重視し、働きやすい環境を提供することを目的としています。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /p-home-benefits -->
        <!-- p-home-blog -->
        <section class="p-home-blog l-section">
            <div class="l-inner">
                <div class="p-home-benefit__desc">
                    <div class="p-home-benefit__title">
                        <h2 class="l-section__title -blog">採用ブログ</h2>
                        <p class="l-section__description -blog">採用情報やイベント情報、社員の紹介など、
                            日々の現場の様子をご紹介します。</p>
                    </div>
                </div>
                <div class="p-home-blog__list">
                    <?php
                    $args = array(
                        'post_type' => 'blog',
                        'posts_per_page' => 8,
                    );
                    $the_query = new WP_Query($args);
                    ?>
                    <?php if ($the_query->have_posts()): ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="p-home-blog__item">
                        <a href="<?php the_permalink(); ?>" class="p-home-blog__link">
                            <div class="p-home-blog__media">
                                <div class="p-home-blog__body">
                                    <p class="p-home-blog__head"><?php echo CFS()->get('category'); ?></p>
                                    <p class="p-home-blog__txt"><?php echo CFS()->get('title'); ?></p>
                                    <p class="p-home-blog__day"><?php echo the_time('Y.m.d'); ?></p>
                                </div>
                                <figure class="p-home-blog__img">
                                    <?php if (has_post_thumbnail()) :
                                                the_post_thumbnail(array(156, 180)); ?>
                                    <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png"
                                        alt="アイキャッチ画像がありません" />
                                    <?php endif; ?>
                                </figure>
                            </div>
                        </a>
                    </div>
                    <?php endwhile; ?>
                    <?php else: ?>
                    <!-- ここに投稿がない場合の記述 -->
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
            <a href=".//blog" class="p-home-blog__more">
                <span class="p-home-blog__circle c-circle -blog">
                    <span class="p-home-blog__arrow c-arrow -blog"></span>
                </span>
                VIEW MORE
            </a>
            </div>
        </section>
        <!-- p-home-recruit -->
        <section class="p-home-recruit l-section">
            <div class="l-inner">
                <div class="p-home-recruit__wrapper">
                    <div class="p-home-recruit__desc">
                        <div class="p-home-recruit__title">
                            <h2 class="l-section__title -recruit">採用情報</h2>
                            <p class="l-section__description -recruit">募集要項（職種、業務内容、応募条件、選考フロー）とよくある質問・会社概要などをまとめています。
                            </p>
                        </div>
                    </div>
                    <ul class="p-home-recruit__list">
                        <ul class="p-home-recruit__innerList">
                            <li class="p-home-recruit__item">
                                <a href=".//details" class="p-home-recruit__link">募集要項</a>
                            </li>
                            <li class="p-home-recruit__item">
                                <a href=".//faq" class="p-home-recruit__link">よくある質問</a>
                            </li>
                        </ul>
                        <li class="p-home-recruit__item -row">
                            <a href=".//about-us" class="p-home-recruit__link -company">会社概要</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- /p-home-recruit -->
    </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>