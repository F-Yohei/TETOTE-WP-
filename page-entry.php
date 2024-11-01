<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: entry page
*/
?>
<!-- main -->
<main class="l-main">
    <article>
        <!-- breadcrumbs -->
        <nav class="c-breadcrumbs" aria-label="breadcrumb">
            <div class="l-container">
                <ul class="c-breadcrumbs__list">
                    <li class="c-breadcrumbs__item">
                        <a href="<?php echo esc_url(home_url('')); ?>" class="c-breadcrumbs__link">TOP</a>
                    </li>
                    <li class="c-breadcrumbs__item">
                        <a href="<?php echo esc_url(home_url('entry')); ?>" class="c-breadcrumbs__link"
                            aria-current="page">ENTRY</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /breadcrumbs -->
        <!-- section-entry -->
        <section class="p-entry">
            <div class="l-container">
                <div class="p-entry__wrapper">
                    <div class="p-entry__top">
                        <p class="p-entry__headTitle">ENTRY FORM</p>
                        <h2 id="apply" class="l-section__subTitle -entry"><span
                                class="p-entry__subTitle--color">新卒・中途採用</span>エントリーフォーム</h2>
                        <div class="p-entry__attentionBlock">
                            <p class="p-entry__attention -head">当社へ入社ご希望の方は、下記の送信フォームより送信して下さい。</p>
                            <p class="p-entry__attention">※は必須項目になります。</p>
                        </div>
                    </div>
                    <?php echo do_shortcode( '[contact-form-7 id="d017d33" title="エントリー"]' ); ?>
                </div>
            </div>
        </section>
        <!-- /section-entry -->
        <div class="u-background"></div>
    </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>