<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: blog page
*/
?>
<!-- main -->
<main class="l-main">
    <article>
        <div id="js-top" class="p-hero">
            <div class="l-section__titleWrapper">
                <h1 class="l-section__title">BLOG</h1>
                <h2 class="l-section__title--secondary">採用ブログ</h2>
                <h2 class="l-section__title--tertiary">採用情報やイベント情報などをご紹介します。</h2>
            </div>
            <figure>
                <picture>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/blog-fv.jpg" alt="" />
                </picture>
            </figure>
        </div>
        <!-- breadcrumbs -->
        <nav class="c-breadcrumbs" aria-label="breadcrumb">
            <div class="l-container">
                <ul class="c-breadcrumbs__list">
                    <li class="c-breadcrumbs__item">
                        <a href="<?php echo esc_url(home_url('')); ?>" class="c-breadcrumbs__link">TOP</a>
                    </li>
                    <li class="c-breadcrumbs__item">
                        <a href="<?php echo esc_url(home_url('blog')); ?>" class="c-breadcrumbs__link"
                            aria-current="page">BLOG</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /breadcrumbs -->
        <!-- section-blog -->
        <section class="p-blog">
            <div class="l-container">
                <div class="p-blog__list">
                    <?php
                    $args = array(
                        'post_type' => 'blog',
                        'posts_per_page' => 8,
                    );
                    $the_query = new WP_Query($args);
                    ?>
                    <?php if ($the_query->have_posts()): ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <div class="p-blog__item">
                        <a href="<?php the_permalink(); ?>" class="p-blog__link">
                            <div class="p-blog__media">
                                <div class="p-blog__body">
                                    <p class="p-blog__head"><?php echo CFS()->get('category'); ?></p>
                                    <p class="p-blog__txt"><?php echo CFS()->get('title'); ?></p>
                                    <p class="p-blog__day"><?php echo the_time('Y.m.d'); ?></p>
                                </div>
                                <figure class="p-blog__img">
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
                </div>
                <!-- pagination -->
                <?php
                if (function_exists('pagination')) :
                    pagination($the_query->max_num_pages, $paged);
                endif;
                ?>
                <?php wp_reset_postdata(); ?>
                <!-- /pagination -->
            </div>
        </section>
        <!-- /section-blog -->
    </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>