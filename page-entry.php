<!-- header呼び出し -->
<?php get_header(); ?>
<?php
/*
Template Name: entry page
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
        <!-- section-entry -->
        <section class="p-entry">
            <div class="l-container">
                <div class="p-entry__wrapper">
                    <div class="p-entry__top">
                        <p class="p-entry__headTitle">ENTRY FORM</p>
                        <h2 id="apply" class="l-section__subTitle -entry"><span
                                class="p-entry__subTitle--color">新卒・中途採用</span>エントリーフォーム</h2>
                        <div class="p-entry__attentionBlock">
                            <p class="p-entry__attention -head">当社へ入社ご希望の方は、下記の送信フォームより送信して下さい。</p>
                            <p class="p-entry__attention">※は必須項目になります。</p>
                        </div>
                    </div>
                    <!-- <form class="l-form">
                        <dl class="l-form__list">
                            <div class="l-form__item">
                                <dt class="l-form__dt">お名前<span class="l-form__dt--accent">※</span></dt>
                                <dd class="l-form__dd">
                                    <span>
                                        <input type="text" name="" placeholder="例：山田太郎" required="" class="" />
                                    </span>
                                </dd>
                            </div>
                            <div class="l-form__item">
                                <dt class="l-form__dt">お名前カナ<span class="l-form__dt--accent">※</span></dt>
                                <dd class="l-form__dd">
                                    <span>
                                        <input type="text" name="" placeholder="例：ヤマダタロウ" required="" class="" />
                                    </span>
                                </dd>
                            </div>
                            <div class="l-form__item">
                                <dt class="l-form__dt">メールアドレス<span class="l-form__dt--accent">※</span></dt>
                                <dd class="l-form__dd">
                                    <span>
                                        <input type="text" name="" placeholder="例：tetote@gmail.com" required=""
                                            class="" />
                                    </span>
                                </dd>
                            </div>
                            <div class="l-form__item">
                                <dt class="l-form__dt">電話番号<span class="l-form__dt--accent">※</span></dt>
                                <dd class="l-form__dd">
                                    <span>
                                        <input type="text" name="" placeholder="例：00-0000-0000" required="" class="" />
                                    </span>
                                </dd>
                            </div>
                            <div class="birthdate-container l-form__item">
                                <dt class="l-form__dt" for="year">生年月日<span class="l-form__dt--accent">※</span></dt>
                                <dd class="l-form__dd">
                                    <div class="l-form__inputWrapper -year">
                                        <input type="text" id="year" name="year" placeholder="例：2000" maxlength="4">
                                        <span>年</span>
                                    </div>
                                    <div class="l-form__birthday--bottom">
                                        <div class="l-form__inputWrapper -select">
                                            <select id="month" name="month">
                                                <option value="">選択してください</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                            <span>月</span>
                                        </div>
                                        <div class="l-form__inputWrapper -select">
                                            <select id="day" name="day">
                                                <option value="">選択してください</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                            <span>日</span>
                                        </div>
                                </dd>
                            </div>
                            <div class="l-form__item -radio">
                                <dt class="l-form__dt">希望職種<span class="l-form__dt--accent">※</span></dt>
                                <dd class="l-form__dd -radio">
                                    <span class="-flex">
                                        <input type="radio" name="occupation" id="architecture" value="コンサルタント" />
                                        <label for="architecture"
                                            class="l-form__label mwform-radio-field-text">コンサルタント</label>
                                    </span>
                                    <span class="-flex">
                                        <input type="radio" name="occupation" id="office" value="ソリューション営業" />
                                        <label for="office"
                                            class="l-form__label mwform-radio-field-text">ソリューション営業</label>
                                    </span>
                                    <span class="-flex">
                                        <input type="radio" name="occupation" id="sales" value="システムエンジニア" />
                                        <label for="sales"
                                            class="l-form__label mwform-radio-field-text">システムエンジニア</label>
                                    </span>
                                </dd>
                            </div>
                            <div class="l-form__item -message">
                                <dt class="l-form__dt">自己PR<span class="l-form__dt--accent">※</span></dt>
                                <dd class="l-form__dd">
                                    <textarea name="" placeholder="例：志望動機、自己PR" required="" class=""></textarea>
                                </dd>
                            </div>
                            <div class="l-form__item -radio-sec">
                                <dt class="l-form__dt">当社を知ったきっかけを教えて下さい。</dt>
                                <dd class="l-form__dd -radio-sec">
                                    <span class="l-form__input--square -flex">
                                        <input type="radio" name="occupation" id="architecture" value="X(旧Twitter)" />
                                        <label for="architecture"
                                            class="l-form__label mwform-radio-field-text">X(旧Twitter)</label>
                                    </span>
                                    <span class="l-form__input--square -flex">
                                        <input type="radio" name="occupation" id="office" value="Facebook" />
                                        <label for="office"
                                            class="l-form__label mwform-radio-field-text">Facebook</label>
                                    </span>
                                    <span class="l-form__input--square -flex">
                                        <input type="radio" name="occupation" id="sales" value="Instagram" />
                                        <label for="sales"
                                            class="l-form__label mwform-radio-field-text">Instagram</label>
                                    </span>
                                    <span class="l-form__input--square -flex">
                                        <input type="radio" name="occupation" id="sales" value="検索広告" />
                                        <label for="sales" class="l-form__label mwform-radio-field-text">検索広告</label>
                                    </span>
                                    <span class="l-form__input--square -flex">
                                        <input type="radio" name="occupation" id="sales" value="知人友人・親戚" />
                                        <label for="sales" class="l-form__label mwform-radio-field-text">知人友人・親戚</label>
                                    </span>
                                    <span class="l-form__input--square -flex">
                                        <input type="radio" name="occupation" id="sales" value="その他" />
                                        <label for="sales" class="l-form__label mwform-radio-field-text">その他</label>
                                    </span>
                                </dd>
                            </div>
                        </dl>
                        <span class="l-form__privacy">
                            <label>
                                <input type="checkbox" name="" value="1" />
                                <span class="l-form__privacyText">個人情報保護方針に同意する</span>
                            </label>
                        </span>
                        <div class="l-form__submit -submit">
                            <input type="submit" value="送信する" class="l-form__btn" />
                        </div>
                    </form> -->
                    <?php echo do_shortcode( '[contact-form-7 id="d017d33" title="エントリー"]' ); ?>
                </div>
            </div>
        </section>
        <!-- /section-entry -->
        <div class="u-background"></div>
    </article>
</main>
<!-- /main -->
<!-- footer呼び出し -->
<?php get_footer(); ?>