<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: staff page
*/
?>
<!-- main -->
<main class="l-main">
    <article>
        <div id="js-top" class="p-hero">
            <div class="l-section__titleWrapper">
                <h1 class="l-section__title">STAFF</h1>
                <h2 class="l-section__title--secondary">社員について</h2>
                <h2 class="l-section__title--tertiary">弊社社員のリアルな声を紹介しています。</h2>
            </div>
            <figure>
                <picture>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/staff/staff-fv.jpg" alt="" />
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
                        <a href="<?php echo esc_url(home_url('staff')); ?>" class="c-breadcrumbs__link"
                            aria-current="page">STAFF</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /breadcrumbs -->
        <!-- p-staff -->
        <section class="p-staff">
            <div class=" l-container">
                <div class="p-staff__content">
                    <div class="p-staff__wrapper">
                        <ul class="p-staff__list">
                            <?php
                            $args = array(
                                'post_type' => 'staff',
                                'posts_per_page' => 6,
                            );
                            $the_query = new WP_Query($args);
                            ?>
                            <?php if ($the_query->have_posts()): ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <li class="p-staff__item">
                                <a href="<?php the_permalink(); ?>" class="p-staff__link">
                                    <div class="p-staff__img">
                                        <figure>
                                            <picture>
                                                <?php if (has_post_thumbnail()) :
                                                            the_post_thumbnail('large'); ?>
                                                <?php else : ?>
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png"
                                                    alt="アイキャッチ画像がありません" />
                                                <?php endif; ?>
                                            </picture>
                                        </figure>
                                        <div class="p-staff__textBox">
                                            <div class="p-staff__comment">
                                                <p><?php echo CFS()->get('message-top'); ?></p>
                                                <p><?php echo CFS()->get('message-bottom'); ?></p>
                                            </div>
                                            <div class="p-staff__content">
                                                <p class="p-staff__title">
                                                    <span><?php echo CFS()->get('occupation'); ?></span>
                                                    <span
                                                        class="p-staff__title--pl"><?php echo CFS()->get('year'); ?></span>
                                                </p>
                                                <h3 class="p-staff__name"><?php echo CFS()->get('name'); ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <?php endwhile; ?>
                            <?php else: ?>
                            <!-- ここに投稿がない場合の記述 -->
                            <?php endif;
                            wp_reset_postdata(); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- p-staff -->
    </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>