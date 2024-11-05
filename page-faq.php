<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: faq page
*/
?>
<!-- main -->
<main class="l-main">
    <article>
        <div id="js-top" class="p-hero -faq">
            <div class="l-section__titleWrapper">
                <h1 class="l-section__title">FAQ</h1>
                <h2 class="l-section__title--secondary">よくある質問</h2>
                <h2 class="l-section__title--tertiary">皆様からよく頂くご質問にお答えします。</h2>
            </div>
            <figure>
                <picture>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/faq/faq-fv.jpg" alt="">
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
                        <a href="<?php echo esc_url(home_url('faq')); ?>" class="c-breadcrumbs__link"
                            aria-current="page">FAQ</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /breadcrumbs -->
        <!-- section-details -->
        <section class="p-faq">
            <div class="l-container">
                <nav class="p-faq__nav c-nav u-pc">
                    <a href="#apply" class="p-faq__navLink c-nav__link">応募・選考について</a>
                    <a href="#career" class="p-faq__navLink c-nav__link">キャリアについて</a>
                    <a href="#benefits" class="p-faq__navLink c-nav__link">福利厚生について</a>
                </nav>
                <div class="p-faq__container">
                    <h2 id="apply" class="l-section__subTitle -faq">応募・選考について</h2>
                    <ul class="p-faq__list">
                        <li class="p-faq__item">
                            <h2 class="p-faq__title close">応募資格はありますか？<span class="toggle"></span></h2>
                            <p class="p-faq__text">はい、当社では学歴や経験に関わらず、意欲的に業務に取り組める方を広く募集しています。詳細は募集要項をご確認ください。</p>
                        </li>
                        <li class="p-faq__item">
                            <h2 class="p-faq__title">応募方法は？<span class="toggle"></span></h2>
                            <p class="p-faq__text">弊社採用サイトからエントリーしてください。</p>
                        </li>
                        <li class="p-faq__item">
                            <h2 class="p-faq__title">選考フローは？<span class="toggle"></span></h2>
                            <p class="p-faq__text">書類選考、一次面接、最終面接という流れで進みます。場合によっては適性検査やスキルテストが実施されることもあります。</p>
                        </li>
                        <li class="p-faq__item">
                            <h2 class="p-faq__title">選考にかかる時間は？<span class="toggle"></span></h2>
                            <p class="p-faq__text">通常、応募から内定までに約2～4週間程度かかります。選考状況に応じて前後する場合もあります。</p>
                        </li>
                        <li class="p-faq__item">
                            <h2 class="p-faq__title">面接では何を聞かれますか？<span class="toggle"></span></h2>
                            <p class="p-faq__text">
                                面接では、これまでの経験やスキル、志望動機、入社後にやりたいことなどを中心に質問されます。また、コミュニケーション能力やチームワークについても確認します。</p>
                        </li>
                        <li class="p-faq__item">
                            <h2 class="p-faq__title">面接官はどんな人ですか？<span class="toggle"></span></h2>
                            <p class="p-faq__text">
                                面接では、これまでの経験やスキル、志望動機、入社後にやりたいことなどを中心に質問されます。また、コミュニケーション能力やチームワークについても確認します。</p>
                        </li>
                    </ul>
                    <h2 id="career" class="l-section__subTitle -faq">キャリア</h2>
                    <ul class="p-faq__list">
                        <li class="p-faq__item">
                            <h2 class="p-faq__title">自分の希望するキャリアパスに進むことはできますか？<span class="toggle"></span></h2>
                            <p class="p-faq__text">はい、個々のキャリアパスに応じた柔軟な昇進・昇格制度が整っています。定期的な評価やフィードバックを通じて、キャリアアップをサポートします。
                            </p>
                        </li>
                        <li class="p-faq__item">
                            <h2 class="p-faq__title">転勤はありますか？<span class="toggle"></span></h2>
                            <p class="p-faq__text">業務の必要に応じて、転勤が発生する場合があります。</p>
                        </li>
                        <li class="p-faq__item">
                            <h2 class="p-faq__title">転勤の希望は出せますか？<span class="toggle"></span></h2>
                            <p class="p-faq__text">はい、希望に基づく転勤の申請は可能です。状況に応じて検討されます。</p>
                        </li>
                        <li class="p-faq__item">
                            <h2 class="p-faq__title">ワークライフバランスは？<span class="toggle"></span></h2>
                            <p class="p-faq__text">当社ではワークライフバランスを重視し、柔軟な働き方を推奨しています。フレックスタイム制度やリモートワーク制度も導入しています。</p>
                        </li>
                        <li class="p-faq__item">
                            <h2 class="p-faq__title">具体的にはどのような制度がありますか？<span class="toggle"></span></h2>
                            <p class="p-faq__text">フレックスタイム制度、リモートワーク、時短勤務、産前産後休暇、育児休暇、介護休暇など、多様な働き方に対応できる制度があります。</p>
                        </li>
                        <li class="p-faq__item">
                            <h2 class="p-faq__title">育児休暇制度はありますか？<span class="toggle"></span></h2>
                            <p class="p-faq__text">はい、育児休暇制度を完備しています。男女問わず利用でき、仕事と家庭の両立を支援しています。</p>
                        </li>
                    </ul>
                    <h2 id="benefits" class="l-section__subTitle -faq">福利厚生について</h2>
                    <ul class="p-faq__list">
                        <li class="p-faq__item">
                            <h2 class="p-faq__title">どのような福利厚生制度がありますか？<span class="toggle"></span></h2>
                            <p class="p-faq__text">健康保険、厚生年金、交通費支給、退職金制度、社員割引、資格取得支援、社内イベントなど、幅広い福利厚生が充実しています。</p>
                        </li>
                        <li class="p-faq__item">
                            <h2 class="p-faq__title">財形貯蓄制度の内容は？<span class="toggle"></span></h2>
                            <p class="p-faq__text">財形貯蓄を支援する制度です。</p>
                        </li>
                        <li class="p-faq__item">
                            <h2 class="p-faq__title">社内イベントの内容は？<span class="toggle"></span></h2>
                            <p class="p-faq__text">社内イベントは、定期的に開催される懇親会やスポーツイベント、研修旅行など、社員同士のコミュニケーションを深める機会があります。</p>
                        </li>
                        <li class="p-faq__item">
                            <h2 class="p-faq__title">部活動について教えてください。<span class="toggle"></span></h2>
                            <p class="p-faq__text">社内には様々な部活動があり、社員同士で趣味や興味を共有できます。スポーツ系や文化系など、自由に参加できる部活動があります。</p>
                        </li>
                        <li class="p-faq__item">
                            <h2 class="p-faq__title">資格取得支援制度はいくら補助が出ますか？<span class="toggle"></span></h2>
                            <p class="p-faq__text">資格取得支援制度では、受験料の全額補助や資格取得にかかる講座費用の一部補助が行われます。</p>
                        </li>
                        <li class="p-faq__item">
                            <h2 class="p-faq__title">年次有給休暇について教えてください<span class="toggle"></span></h2>
                            <p class="p-faq__text">当社では、入社初年度から年次有給休暇が付与されます。取得しやすい環境づくりを進めており、業務に支障がない範囲で柔軟に利用可能です。</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- /section-sysetm -->
    </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>