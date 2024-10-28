<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: single-blog page
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
                        <a href="<?php echo esc_url(home_url('blog')); ?>" class="c-breadcrumbs__link"
                            aria-current="page">BLOG</a>
                    </li>
                    <li class="c-breadcrumbs__item">
                        <a href="<?php the_permalink(); ?>" class="c-breadcrumbs__link"
                            aria-current="page"><?php echo CFS()->get('title'); ?></a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /breadcrumbs -->
        <!-- section-blog -->
        <section class="p-blog-detail">
            <div class="l-container">
                <div class="p-blog-detail__wrapper">
                    <div class="p-blog-detail__media">
                        <div class="p-blog-detail__body">
                            <div class="p-blog-detail__head">
                                <p class="p-blog-detail__index"><?php echo CFS()->get('category'); ?></p>
                                <p class="p-blog-detail__day"><?php echo the_time('Y.m.d'); ?></p>
                            </div>
                            <h1 class="p-blog-detail__txt"><?php echo CFS()->get('title'); ?></h1>
                            <div class="p-blog-detail__intro">
                                <figure class="p-blog-detail__img">
                                    <?php if (has_post_thumbnail()) :
                                        the_post_thumbnail(array(720, 411)); ?>
                                    <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png"
                                        alt="アイキャッチ画像がありません" />
                                    <?php endif; ?>
                                </figure>
                                <p class="p-blog-detail__introText"><?php echo CFS()->get('desc'); ?>
                                </p>
                            </div>
                            <div class="p-blog-detail__content">
                                <ul class="p-blog-detail__contentList">
                                    <?php
                                    $fields = $cfs->get('post');
                                    if (!empty($fields) && is_array($fields)) :
                                    ?>
                                    <?php foreach ($fields as $field) : ?>
                                    <li class="p-blog-detail__contentItem">
                                        <h2 class="p-blog-detail__contentTitle"><?php echo esc_html($field['title']); ?>
                                        </h2>
                                        <p class="p-blog-detail__contentText">
                                            <?php echo $field['content']; ?>
                                        </p>
                                    </li>
                                    <?php endforeach; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <nav class="p-blog-detail__nav">
            <ul class="p-blog-detail__navList">
                <?php
                // 現在の投稿 ID とカスタム投稿タイプを取得
                $current_post_id = get_the_ID();
                $post_type = 'blog';
                // 前の記事を取得
                $prev_post = get_posts(array(
                    'post_type' => $post_type,
                    'posts_per_page' => 1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'post__not_in' => array($current_post_id),
                    'date_query' => array(
                        array(
                            'before' => get_the_date('Y-m-d H:i:s', $current_post_id)
                        )
                    )
                ));
                ?>
                <li class="p-blog-detail__navItem">
                    <?php if (!empty($prev_post)) : ?>
                    <a href="<?php echo get_permalink($prev_post[0]->ID); ?>" class="p-blog-detail__navLink -prev">
                        <p class="p-blog-detail__navText"><?php echo esc_html(get_the_title($prev_post[0]->ID)); ?></p>
                        <p class="p-blog-detail__navDay"><?php echo get_the_date('Y.m.d', $prev_post[0]->ID); ?></p>
                    </a>
                    <?php else : ?>
                    <span class="p-blog-detail__navLink -prev p-blog-detail__navLink--empty">前の記事はありません</span>
                    <?php endif; ?>
                </li>
                <?php
                // 次の記事を取得
                $next_post = get_posts(array(
                    'post_type' => $post_type,
                    'posts_per_page' => 1,
                    'orderby' => 'date',
                    'order' => 'ASC',
                    'post__not_in' => array($current_post_id),
                    'date_query' => array(
                        array(
                            'after' => get_the_date('Y-m-d H:i:s', $current_post_id)
                        )
                    )
                ));
                ?>
                <li class="p-blog-detail__navItem">
                    <?php if (!empty($next_post)) : ?>
                    <a href="<?php echo get_permalink($next_post[0]->ID); ?>" class="p-blog-detail__navLink -next">
                        <p class="p-blog-detail__navText"><?php echo esc_html(get_the_title($next_post[0]->ID)); ?></p>
                        <p class="p-blog-detail__navDay"><?php echo get_the_date('Y.m.d', $next_post[0]->ID); ?></p>
                    </a>
                    <?php else : ?>
                    <span class="p-blog-detail__navLink -next p-blog-detail__navLink--empty">次の記事はありません</span>
                    <?php endif; ?>
                </li>
            </ul>
        </nav>
        <!-- /section-blog -->
    </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>