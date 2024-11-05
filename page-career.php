<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: career page
*/
?>
<!-- main -->
<main class="l-main">
    <article>
        <div id="js-top" class="p-hero">
            <div class="l-section__titleWrapper">
                <h1 class="l-section__title">CAREER</h1>
                <h2 class="l-section__title--secondary">研修制度とキャリアパス</h2>
                <h2 class="l-section__title--tertiary">キャリアパスを支える充実した、研修制度</h2>
            </div>
            <figure>
                <picture>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/career/career-fv.jpg" alt="">
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
                        <a href="<?php echo esc_url(home_url('career')); ?>" class="c-breadcrumbs__link"
                            aria-current="page">CAREER</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /breadcrumbs -->
        <!-- section-career -->
        <section class="p-career">
            <div class="l-container">
                <div class="p-career__inner">
                    <h2 class="l-section__subTitle -career">キャリアパスに沿った研修制度を用意</h2>
                    <p class="p-career__top">弊社では、コンサルタントのキャリアパスを、大きく4つのステージに分けています。</p>
                    <figure class="p-career__img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/career/tetote-carrer-path.jpg"
                            alt="" width="980px" height="734px" loading="lazy">
                    </figure>
                    <p class="p-career__text">TETOTE は、コンサルタントのキャリアパスを支えるために、以下の独自の研修制度を設けています。</p>
                    <ul class="p-career__list">
                        <li class="p-career__item">
                            <p class="p-career__head">1.ケーススタディ研修</p>
                            <p class="p-career__txt">TETOTE の過去のプロジェクト事例を基にしたケーススタディ研修を実施しています。<br>
                                この研修では、実際のプロジェクトで直面する課題を解決するために、分析力、問題解決能力、プレゼンテーション能力などを実践的に習得することができます。</p>
                        </li>
                        <li class="p-career__item">
                            <p class="p-career__head">2. クライアント対応研修</p>
                            <p class="p-career__txt">TETOTE は、クライアントとの信頼関係構築を重視しています。<br>
                                この研修では、クライアントとのコミュニケーションスキル、交渉スキル、プレゼンテーションスキルなどを習得し、クライアントの課題解決に貢献できるコンサルタントを育成します。</p>
                        </li>
                        <li class="p-career__item">
                            <p class="p-career__head">3. 専門知識研修</p>
                            <p class="p-career__txt">財務、会計、ITなど、コンサルタント業務に必要な専門知識を習得するための研修を実施しています。<br>
                                TETOTE は、幅広い分野の知識を持つコンサルタントを育成し、クライアントに最適なソリューションを提供できるようにしています。</p>
                        </li>
                        <li class="p-career__item">
                            <p class="p-career__head">4. マネジメント研修</p>
                            <p class="p-career__txt">プロジェクトマネジメント、リーダーシップ、チームビルディングなど、マネジメントスキルを習得するための研修を実施しています。<br>
                                TETOTE は、将来的にマネジメント層を担うコンサルタントを育成し、組織全体の成長を促進しています。</p>
                        </li>
                        <li class="p-career__item">
                            <p class="p-career__head">5. 外部研修</p>
                            <p class="p-career__txt">社外で実施される研修にも積極的に参加することができます。<br>
                                TETOTE は、最新の知識やスキルを習得し、常に成長し続けるコンサルタントを育成します。</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- /section-career -->
    </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>