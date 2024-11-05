<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: about page
*/
?>
<!-- main -->
<main class="l-main">
    <article>
        <div id="js-top" class="p-hero">
            <div class="l-section__titleWrapper">
                <h1 class="l-section__title">ABOUT US</h1>
                <h2 class="l-section__title--secondary">TETOTEについて</h2>
                <h2 class="l-section__title--tertiary">私たちの理念を紹介をします。</h2>
            </div>
            <figure>
                <picture>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-us/about-fv.jpg" alt="">
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
                        <a href="<?php echo esc_url(home_url('about-us')); ?>" class="c-breadcrumbs__link"
                            aria-current="page">ABOUT US</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /breadcrumbs -->
        <!-- section-about -->
        <section class="p-about">
            <div class="l-container">
                <h2 class="l-section__subTitle">私達が大切にしていること</h2>
                <ul class="p-about__list">
                    <li class="p-about__item">
                        <div class="p-about__titleWrapper">
                            <p class="p-about__num">1</p>
                            <p class="p-about__title">飽くなき探求心で、革新を創り出す</p>
                        </div>
                        <p class="p-about__text">
                            100年を超える歴史を誇りながらも、常に挑戦し続ける気概を忘れずに、未来を切り開くソリューションを提供し続けます。変化を恐れず、最新技術やトレンドを積極的に研究し、お客様のニーズを超える価値を生み出すことに情熱を燃やしています。
                        </p>
                    </li>
                    <li class="p-about__item">
                        <div class="p-about__titleWrapper">
                            <p class="p-about__num">2</p>
                            <p class="p-about__title">デジタル技術の力で、未来を加速させる</p>
                        </div>
                        <p class="p-about__text">
                            ITコンサルタント会社として、業務効率化やイノベーション創出に貢献するために、デジタル技術を活用した最適なソリューションを提案します。自動化、データ分析、AIなどの技術を駆使し、お客様のビジネスを革新し、未来への飛躍を力強くサポートします。
                        </p>
                    </li>
                    <li class="p-about__item">
                        <div class="p-about__titleWrapper">
                            <p class="p-about__num">3</p>
                            <p class="p-about__title">人材こそが、未来への鍵</p>
                        </div>
                        <p class="p-about__text">
                            従業員一人ひとりが、高い専門性と人間性を兼ね備えた人材であることが、お客様への最高のサービスにつながると確信しています。個々の能力やキャリア目標に合わせた育成プログラムや、多様な経験を積む機会を提供することで、成長を支援します。
                        </p>
                    </li>
                    <li class="p-about__item">
                        <div class="p-about__titleWrapper">
                            <p class="p-about__num">4</p>
                            <p class="p-about__title">未経験者も歓迎！情熱と意欲があれば、誰でも活躍できる</p>
                        </div>
                        <p class="p-about__text">
                            IT業界未経験の方でも、熱意と向上心があれば、当社で活躍できるチャンスがあります。研修やOJTを通じて、必要な知識やスキルを丁寧に習得し、即戦力となる人材へと育成します。先輩社員によるサポート体制も充実しているので、安心してスキルアップを目指せます。
                        </p>
                    </li>
                    <li class="p-about__item">
                        <div class="p-about__titleWrapper">
                            <p class="p-about__num">5</p>
                            <p class="p-about__title">働きがいと充実感あふれる環境</p>
                        </div>
                        <p class="p-about__text">
                            ワークライフバランスを重視し、従業員が働きがいと充実感を感じられる環境づくりに積極的に取り組んでいます。充実した福利厚生制度や、多様な働き方を可能にする制度を導入し、個々のライフスタイルに合わせた働き方を支援します。
                        </p>
                    </li>
                </ul>
            </div>
        </section>
        <!-- /section-about -->
        <!-- section-messaege -->
        <section class="p-about-message">
            <div class="l-container">
                <h2 class="l-section__subTitle">代表メッセージ</h2>
                <div class="p-about-message__wrapper">
                    <div class="p-about-message__box--left">
                        <figure class="p-about-message__img u-pc">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-us/ceo.jpg"
                                alt="代表者写真" width="" height="" loading="lazy">
                        </figure>
                        <p class="p-about-message__heading">あなたがやりたいこと<br>
                            それを全力でサポートできる、<br>
                            それがTETOTEの強みです。</p>
                    </div>
                    <div class="p-about-message__box--right">
                        <p class="p-about-message__text ">
                            TETOTEは、ITコンサルティングとコンサル導入企業への営業を専門とする会社です。設立以来、私たちは「お客様の課題解決に真摯に取り組み、共に成長する」という理念を掲げ、お客様とパートナーと共に歩んできました。
                        </p>
                        <p class="p-about-message__text">
                            お客様のニーズを深く理解し、最適なソリューションを提供することで、数多くの課題解決を支援してきました。その結果、お客様との深い信頼関係を築き、共に成長することができています。</p>
                        <p class="p-about-message__text">
                            TETOTEは、個々の能力や個性を尊重し、多様な人材が活躍できる環境づくりに力を入れています。年齢、性別、国籍、経験などに関係なく、意欲と向上心のある人材を歓迎します。</p>
                        <p class="p-about-message__text">私たちと共に、未来を創造していきましょう。</p>
                        <figure>
                            <picture>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-us/ceo-name.svg"
                                    alt="田中浩二郎">
                            </picture>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <!-- /section-messaege -->
        <section class="p-about-business">
            <div class=" l-container">
                <h2 class="l-section__subTitle -business">事業紹介</h2>
                <p class="l-intro">TETOTEの主力事業である「コンサルティング」以外に、新規に取り組んでいる事業をいくつか<br class="u-pc">紹介させていただきます。</p>
                <div class="p-about-business__contentWrapper">
                    <div class="p-about-business__content">
                        <div class="p-about-business__body">
                            <p class="p-about-business__head">コンサルティング事業</p>
                            <p class="p-about-business__intro">お客様と伴走し、売上に直接貢献できる</p>
                            <p class="p-about-business__txt">
                                営業との連携で、人と組織の成長・変革に向けた計画立案・サービス実施、さらにフォローまで。コンサルタントとして一気通貫で携わります。</p>
                        </div>
                        <figure class="p-about-business__img">
                            <picture>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-us/consulting.jpg"
                                    alt="コンサルティング事業" loading="lazy">
                            </picture>
                        </figure>
                    </div>
                    <div class="p-about-business__content">
                        <div class="p-about-business__body">
                            <p class="p-about-business__head">ソリューション営業事業</p>
                            <p class="p-about-business__intro">お客様の課題を見つけ出し、必要な施策を提案する</p>
                            <p class="p-about-business__txt">お客様が抱える課題へ、ヒアリングベースで提案型営業を行い、コンサルタントとの連携で課題解決を目指します。</p>
                        </div>
                        <figure class="p-about-business__img">
                            <picture>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-us/solution-sales.jpg"
                                    alt="ソリューション営業事務" width="" height="" loading="lazy">
                            </picture>
                        </figure>
                    </div>
                    <div class="p-about-business__content">
                        <div class="p-about-business__body">
                            <p class="p-about-business__head">業務系システム開発事業</p>
                            <p class="p-about-business__intro">お客様の課題解決を強力にサポートする
                                システムを設計する</p>
                            <p class="p-about-business__txt">
                                基本設計書に従って開発とテストを実施し、本番稼働をサポート。企画から運用までの全工程を通じて包括的なアプローチで、安定した運用と迅速な対応を保証します。</p>
                        </div>
                        <figure class="p-about-business__img">
                            <picture>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about-us/desiner.jpg"
                                    alt="業務系システム開発事業" width="" height="" loading="lazy">
                            </picture>
                        </figure>
                    </div>
                </div>
            </div>
        </section>
        <!-- sec-company-info -->
        <section class="p-about-companyInfo">
            <div class="l-container">
                <div class="p-about-companyInfo__inner">
                    <h2 class="l-section__subTitle -company">会社概要</h2>
                    <table class="c-table">
                        <tr class="c-table__row">
                            <th class="c-table__head">会社名</th>
                            <td class="c-table__data">TETOTE株式会社</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">所在地</th>
                            <td class="c-table__data">〒100-0001 東京都千代田区千代田 1-1-1</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">代表者名</th>
                            <td class="c-table__data">田中 浩二郎 (代表取締役)</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">事業内容</th>
                            <td class="c-table__data -lh25">・ITコンサルティング<br>・コンサル導入企業への営業</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">電話番号</th>
                            <td class="c-table__data">03-1234-5678</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">ウェブサイトURL</th>
                            <td class="c-table__data">https://tetote.co.jp</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">メールアドレス</th>
                            <td class="c-table__data">tetote@tetote.co.jp</td>
                        </tr>
                        <tr class="c-table__row">
                            <th class="c-table__head">設立年月</th>
                            <td class="c-table__data">1923年4月1日</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
        <!-- /sec-company-info -->
        <!-- /section-about -->
    </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>