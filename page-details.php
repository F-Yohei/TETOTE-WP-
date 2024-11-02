<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: details page
*/
?>
<!-- main -->
<main class="l-main">
    <article>
        <div id="js-top" class="p-hero -details">
            <div class="l-section__titleWrapper">
                <h1 class="l-section__title">DETAILS</h1>
                <h2 class="l-section__title--secondary">募集要項</h2>
                <h2 class="l-section__title--tertiary">TETOTEは幅広く仲間を募集しています。</h2>
            </div>
            <figure>
                <picture>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/details/details-fv.jpg"
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
                        <a href="<?php echo esc_url(home_url('details')); ?>" class="c-breadcrumbs__link"
                            aria-current="page">DETAILS</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /breadcrumbs -->
        <!-- section-details -->
        <section class="p-details">
            <div class="l-container">
                <h2 class="l-section__subTitle -details">あなたが輝ける場所が、ここにはある</h2>
                <p class="p-details__text">TETOTEでは、コンサルタントを中心に、様々な職種を募集しています。 </p>
                <nav class="p-details__nav c-nav u-pc">
                    <a href="#consul" class="p-details__navLink c-nav__link">コンサルタント</a>
                    <a href="#sales" class="p-details__navLink c-nav__link">ソリューション営業</a>
                    <a href="#engineer" class="p-details__navLink c-nav__link">システムエンジニア</a>
                </nav>
                <div class="p-details__tableContainer">
                    <h2 id="consul" class="l-section__subTitle -details">募集要項-コンサルタント</h2>
                    <table class="c-table">
                        <tr class="c-table__row">
                            <th class="c-table__head">職種名</th>
                            <td class="c-table__data">コンサルタント</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">雇用形態</th>
                            <td class="c-table__data">正社員</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">業務内容</th>
                            <td class="c-table__data">クライアントの課題解決のためのコンサルティング業務</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">就業時間</th>
                            <td class="c-table__data">9:00～18:00（フレックスタイム制）</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">給与</th>
                            <td class="c-table__data">年収500万円～（経験・能力による）</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">勤務地</th>
                            <td class="c-table__data">東京、大阪、名古屋</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">転勤の有無</th>
                            <td class="c-table__data">あり</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">休日休暇</th>
                            <td class="c-table__data">土日祝日、年末年始、夏季休暇</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">選考について</th>
                            <td class="c-table__data">書類選考、面接</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">採用人数</th>
                            <td class="c-table__data">若干名</td>
                        </tr>
                    </table>
                    <h2 id="sales" class="l-section__subTitle -details">募集要項-ソリューション営業</h2>
                    <table class="c-table">
                        <tr class="c-table__row">
                            <th class="c-table__head">職種名</th>
                            <td class="c-table__data">ソリューション営業</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">雇用形態</th>
                            <td class="c-table__data">正社員</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">業務内容</th>
                            <td class="c-table__data">顧客の課題解決のためのソリューション提案、販売</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">就業時間</th>
                            <td class="c-table__data">9:00～18:00（フレックスタイム制）</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">給与</th>
                            <td class="c-table__data">年収500万円～（経験・能力による）</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">勤務地</th>
                            <td class="c-table__data">東京、大阪、名古屋</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">転勤の有無</th>
                            <td class="c-table__data">あり</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">休日休暇</th>
                            <td class="c-table__data">土日祝日、年末年始、夏季休暇</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">選考について</th>
                            <td class="c-table__data">書類選考、面接</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">採用人数</th>
                            <td class="c-table__data">若干名</td>
                        </tr>
                    </table>
                    <h2 id="engineer" class="l-section__subTitle -details">募集要項-システムエンジニア</h2>
                    <table class="c-table">
                        <tr class="c-table__row">
                            <th class="c-table__head">職種名</th>
                            <td class="c-table__data">システムエンジニア</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">雇用形態</th>
                            <td class="c-table__data">正社員</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">業務内容</th>
                            <td class="c-table__data">システム開発、インフラ構築、データ分析など</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">就業時間</th>
                            <td class="c-table__data">9:00～18:00（フレックスタイム制）</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">給与</th>
                            <td class="c-table__data">年収500万円～（経験・能力による）</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">勤務地</th>
                            <td class="c-table__data">東京、大阪、名古屋</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">転勤の有無</th>
                            <td class="c-table__data">あり</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">休日休暇</th>
                            <td class="c-table__data">土日祝日、年末年始、夏季休暇</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">選考について</th>
                            <td class="c-table__data">書類選考、面接</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">採用人数</th>
                            <td class="c-table__data">若干名</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
        <!-- /section-sysetm -->
    </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>