<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: single-staff page
*/
?>
<!-- main -->
<main class="l-main">
    <article>
        <div id="js-top" class="p-mv">
            <div class="p-staff-detail__item">
                <div class="p-staff-detail__img">
                    <figure class="p-staff-detail__fig">
                        <picture>
                            <?php if (has_post_thumbnail()) :
                the_post_thumbnail(array(286, 368)); ?>
                            <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png"
                                alt="アイキャッチ画像がありません">
                            <?php endif; ?>
                        </picture>
                    </figure>
                    <div class="p-staff-detail__textBox">
                        <div class="p-staff-detail__catchBlock">
                            <h2 class="p-staff-detail__catch"><?php echo CFS()->get('message-top'); ?></h2>
                            <p class="p-staff-detail__subCatch"><?php echo CFS()->get('message-bottom'); ?></p>
                        </div>
                        <div class="p-staff-detail__content">
                            <p class="p-staff-detail__title"><?php echo CFS()->get('occupation'); ?></p>
                            <h3 class="p-staff-detail__name">
                                <?php echo CFS()->get('name'); ?><span><?php echo CFS()->get('year'); ?></span></h3>
                            <p class="p-staff-detail__comment">
                                <?php echo CFS()->get('desc'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
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
                    <li class="c-breadcrumbs__item">
                        <a href="<?php the_permalink(); ?>" class="c-breadcrumbs__link"
                            aria-current="page"><?php echo CFS()->get('name'); ?></a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /breadcrumbs -->
        <!-- p-staff-detail -->
        <section class="p-staff-detail">
            <div class=" l-container">
                <div class="p-staff-detail__contentInner">
                    <div class="p-staff-detail__contentWrapper">
                        <ul class="p-staff-detail__contentList">
                            <?php
              $fields = $cfs->get('post');
              if (!empty($fields) && is_array($fields)) :
                $counter = 1;
              ?>
                            <?php foreach ($fields as $field) : ?>
                            <li id="item0<?php echo $counter; ?>"
                                class="p-staff-detail__contentItem js-block0<?php echo $counter; ?>">
                                <h2 class="p-staff-detail__contentTitle">
                                    <?php echo esc_html($field['title']); ?>

                                </h2>
                                <p class="p-staff-detail__text">
                                    <?php echo $field['content']; ?>
                                </p>
                            </li>
                            <?php $counter++; // カウンターをインクリメント 
                  ?>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <nav class="p-staff-detail__nav">
                        <p class="p-staff-detail__toc">目次</p>
                        <ul class="p-staff-detail__navList">
                            <li class="p-staff-detail__navItem">
                                <a href="#item01" class="p-staff-detail__link js-link01">・普段の業務内容について</a>
                            </li>
                            <li class="p-staff-detail__navItem">
                                <a href="#item02" class="p-staff-detail__link js-link02">・学生時代に力を入れたことは？</a>
                            </li>
                            <li class="p-staff-detail__navItem">
                                <a href="#item03" class="p-staff-detail__link js-link03">・TETOTEを志望した理由は？</a>
                            </li>
                            <li class="p-staff-detail__navItem">
                                <a href="#item04" class="p-staff-detail__link js-link04">・やりがいを感じる瞬間は？</a>
                            </li>
                            <li class="p-staff-detail__navItem">
                                <a href="#item05" class="p-staff-detail__link js-link05">・どんな人と一緒に働きたい？</a>
                            </li>
                            <li class="p-staff-detail__navItem">
                                <a href="#item06" class="p-staff-detail__link js-link06">・応募者へのメッセージ</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
        <!-- /p-staff-detail -->
        <!-- /p-staff-member -->
        <section class="p-staff-member u-pc">
            <div class="l-container">
                <h2 class="l-section__subTitle">その他のメンバー</h2>
                <ul class="p-staff-member__list">
                    <?php
          $args = array(
            'post_type' => 'staff',
            'post_status' => 'publish',  // 公開しているもの
            'orderby' => 'rand',  // ランダム順
            'posts_per_page' => 3,

          );
          $the_query = new WP_Query($args);
          ?>
                    <?php if ($the_query->have_posts()): ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <li class="p-staff-member__item">
                        <a href="<?php the_permalink(); ?>" class="p-staff-member__link">
                            <div class="p-staff-member__img">
                                <figure>
                                    <picture>
                                        <?php if (has_post_thumbnail()) :
                          the_post_thumbnail('large'); ?>
                                        <?php else : ?>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.png"
                                            alt="アイキャッチ画像がありません">
                                        <?php endif; ?>
                                    </picture>
                                </figure>
                                <div class="p-staff-member__textBox">
                                    <div class="p-staff-member__comment">
                                        <p><?php echo CFS()->get('message-top'); ?></p>
                                        <p><?php echo CFS()->get('message-bottom'); ?></p>
                                    </div>
                                    <div class="p-staff-member__content">
                                        <p class="p-staff-member__title">
                                            <span><?php echo CFS()->get('occupation'); ?></span>
                                            <span class="p-staff-member__title--pl"><?php echo CFS()->get('year'); ?>
                                            </span>
                                        </p>
                                        <h3 class="p-staff-member__name"><?php echo CFS()->get('name'); ?></h3>
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
        </section>
        <!-- /p-staff-member -->
    </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>