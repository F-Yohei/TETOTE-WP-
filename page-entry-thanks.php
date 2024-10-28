<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: entry-thanks page
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
        <!-- section-entry-thanks -->
        <section class="p-entry-thanks">
            <div class="l-container">
                <div class="p-entry-thanks__wrapper">
                    <div class="p-entry-thanks__top">
                        <h2 id="apply" class="l-section__subTitle">送信ありがとうございました。</h2>
                        <p class="p-entry-thanks__attention">3営業日以内に人事担当者より連絡させていただきます。</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /section-entry-thanks -->
        <div class="u-background"></div>
    </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>