<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: benefits page
*/
?>
<!-- main -->
<main class="l-main">
    <article>
        <div id="js-top" class="p-hero">
            <div class="l-section__titleWrapper">
                <h1 class="l-section__title">BENEFITS</h1>
                <h2 class="l-section__title--secondary">福利厚生について</h2>
                <h2 class="l-section__title--tertiary">充実した福利厚生制度を設けています。</h2>
            </div>
            <figure>
                <picture>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/benefits/benefits-fv.jpg"
                        alt="" />
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
                        <a href="<?php echo esc_url(home_url('benefits')); ?>" class="c-breadcrumbs__link"
                            aria-current="page">BENEFITS</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /breadcrumbs -->
        <!-- section-benefits-system -->
        <section class="p-benefits-system">
            <div class="l-container">
                <div class="p-benefits-sysetm__inner">
                    <h2 class="l-section__subTitle -voice">各種制度</h2>
                    <table class="c-table">
                        <tr class="c-table__row">
                            <th class="c-table__head">手当</th>
                            <td class="c-table__data -lh25">
                                ・通勤手当（上限月5万円）<br>
                                ・時間外割増手当<br>
                                ・役職手当<br>
                                ・退職金
                            </td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">制度</th>
                            <td class="c-table__data">財形貯蓄</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">保険</th>
                            <td class="c-table__data">社会保険完備</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">施設</th>
                            <td class="c-table__data -lh25">
                                ・社員向けジム<br>
                                ・社内託児所</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">休暇・休日</th>
                            <td class="c-table__data -lh25">
                                ・完全週休2日制<br>
                                ・年次有給休暇（初年度10日／年度途中入社は比例付与）<br>
                                ・年末年始休暇（12月29日～1月3日：6日間）<br>
                                ・夏季休暇（6月～9月中：5日間）<br>
                                ・慶弔休暇<br>
                                ・産前産後休暇<br>
                                ・リフレッシュ休暇（3年勤続で5日／以降5年勤続ごとに5日支給）</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
        <!-- /section-sysetm -->
        <!-- section-benefits-userVoice -->
        <section class="p-benefits-userVoice">
            <div class="l-container">
                <h2 class="l-section__subTitle -voice">制度利用者の声</h2>
                <div class="p-benefits-userVoice__wrapper">
                    <div class="p-benefits-userVoice__content">
                        <p class="p-benefits-userVoice__day">2013年入社</p>
                        <h3 class="p-benefits-userVoice__name">堀内 優</h3>
                        <p class="p-benefits-userVoice__text">資格取得のための費用を会社が負担してくれる制度を利用して、念願の応用技術者資格を取得できました。
                            <br>この制度は、自己啓発を支援してくれるので、とても助かります。今後は、さらにスキルアップを目指して、他の資格も取得していきたいと思っています。<br>
                            会社が成長を支援してくれるので、安心して仕事に取り組むことができます。
                        </p>
                    </div>
                    <div class="p-benefits-userVoice__content">
                        <p class="p-benefits-userVoice__day">2015年入社</p>
                        <h3 class="p-benefits-userVoice__name">神凪 理沙</h3>
                        <p class="p-benefits-userVoice__text">
                            出産後、育休を取得して、現在は短時間勤務で働いています。会社が育児に理解があるので、安心して仕事に集中できます。<br>
                            特に、社内託児所があるので、子供を預けながら安心して働けるのは助かります。また、短時間勤務制度も充実しているので、自分のペースで仕事復帰することができました。<br>
                            今後は、子供の成長に合わせて、勤務時間を調整しながら、長く働き続けたいと思っています。</p>
                    </div>
                </div>
                <figure class="p-benefits-userVoice__img">
                    <picture>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/benefits/benefits-user-voices.jpg"
                            alt="" width="980px" height="560px" loading="lazy">
                    </picture>
                </figure>
            </div>
        </section>
        <!-- /section-userVoice -->
    </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>