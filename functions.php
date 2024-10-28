<?php
/*==============================================================
Add class name
・bodyタグにクラス名を追加
==============================================================*/
/* 404ページ →　is_404 */
/* アーカイブページ →　is_archive */
/* 記事詳細ページ →　is_singular */
/* 固定ページ →　is_page */
add_filter('body_class', 'my_class_names');
function my_class_names($classes)
{
  if (is_front_page()) {
    $classes[] = 'home';
    $classes[] = 'js-body';
  } elseif (is_page('about-us')) {
    $classes[] = 'subpage';
    $classes[] = 'about';
  } elseif (is_archive('staff')) {
    $classes[] = 'subpage';
    $classes[] = 'staff';
  } elseif (is_singular('staff')) {
    $classes[] = 'subpage';
    $classes[] = 'staff-detail';
  } elseif (is_page('benefits')) {
    $classes[] = 'subpage';
    $classes[] = 'benefits';
  } elseif (is_page('career')) {
    $classes[] = 'subpage';
    $classes[] = 'career';
  } elseif (is_page('details')) {
    $classes[] = 'subpage';
    $classes[] = 'details';
  } elseif (is_singular('blog')) {
    $classes[] = 'subpage';
    $classes[] = 'blog-detail';
  } elseif (is_page('faq')) {
    $classes[] = 'subpage';
    $classes[] = 'faq';
  } elseif (is_page('entry')) {
    $classes[] = 'subpage';
    $classes[] = 'entry';
  } elseif (is_page('entry-thanks')) {
    $classes[] = 'subpage';
    $classes[] = 'entry-thanks';
  }
  return $classes;
}
?>

<?php
/*==============================================================
ページごとにタイトルを設定
==============================================================*/
function mytheme_ini() {
  add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'mytheme_ini' );

function my_document_title_parts($title){
    if(is_home() || is_front_page()) {
        $title['title'] = '採用特設サイト | 株式会社TETOTE';
    } elseif( is_page('about-us') ) {
        $title['title'] = 'TETOTEについて | 株式会社TETOTE';
    } elseif( is_archive('staff') ) {
        $title['title'] = '社員について | 株式会社TETOTE';
    } elseif( is_archive('blog') ) {
        $title['title'] = '採用ブログ | 株式会社TETOTE';
    }elseif( is_page('benefits') ) {
        $title['title'] = '福利厚生について | 株式会社TETOTE';
    }elseif( is_page('career') ) {
        $title['title'] = '研修制度とキャリアパス | 株式会社TETOTE';
    }elseif( is_page('details') ) {
        $title['title'] = '募集要項 | 株式会社TETOTE';
    }elseif( is_page('faq') ) {
        $title['title'] = 'よくある質問 | 株式会社TETOTE';
    }elseif( is_page('entry') ) {
        $title['title'] = 'エントリー | 株式会社TETOTE';
    }elseif( is_page('entry-thanks') ) {
        $title['title'] = 'エントリー完了 | 株式会社TETOTE';
    }
    return $title;
};
add_filter('document_title_parts', 'my_document_title_parts');
?>


<?php
/*==============================================================
  CSS/JS
  ・css/javascriptファイルの読み込み
==============================================================*/
function add_files()
{

  /* WordPress提供のjquery.jsを読み込まない */
  wp_deregister_script('jquery');

  /* jQueryの読み込み */
  wp_enqueue_script(
    'jquery',
    '//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
    '',
    '',
    false
  );

  /* 共通のJSファイル */
  wp_enqueue_script(
    'main',
    get_stylesheet_directory_uri() . '/assets/js/common.bundle.js',
    ['jquery'],
    '1.0.0',
    true
  );

  /* IEでobject-fitプロパティを機能させる */
  wp_enqueue_script(
    'ofi',
    'https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.4/ofi.min.js',
    ['jquery'],
    '1.0.0',
    true
  );

  /* IEでpictureタグを機能させる */
  wp_enqueue_script(
    'polyfill',
    'https://polyfill.io/v3/polyfill.min.js?features=HTMLPictureElement',
    ['jquery'],
    '1.0.0',
    true
  );

  wp_enqueue_script(
    'splide',
    'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js',
    ['jquery'],
    '1.0.0',
    true
  );

  /* トップページで読み込ませるJSファイル */
  if (is_home() || is_front_page()) {
    wp_enqueue_script(
      'home',
      get_stylesheet_directory_uri() . '/assets/js/top.bundle.js',
      ['jquery'],
      '1.0.0',
      true
    );
    /* staff詳細ページで読み込むJSファイル */
  } elseif (is_singular('staff')) {
    wp_enqueue_script(
      'gsap',
      'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js',
      ['jquery'],
      '1.0.0',
      true
    );
    wp_enqueue_script(
      'ScrollTrigger',
      'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js',
      ['jquery'],
      '1.0.0',
      true
    );
    wp_enqueue_script(
      'staff',
      get_stylesheet_directory_uri() . '/assets/js/staffdetail.bundle.js',
      ['jquery'],
      '1.0.0',
      true
    );
    /* faqページで読み込むJSファイル */
  } elseif (is_page('faq')) {
    wp_enqueue_script(
      'faq',
      get_stylesheet_directory_uri() . '/assets/js/faq.bundle.js',
      ['jquery'],
      '1.0.0',
      true
    );
  }

  /* 共通のCSSファイル */
  wp_enqueue_style(
    'home',
    get_template_directory_uri() . '/assets/css/style.css',
    [],
    '1.0.0',
    'all'
  );
}
add_action('wp_enqueue_scripts', 'add_files');
?>

<?php
/*==============================================================
  Theme URL
  ・テーマ直下のURLショートコード
  ・<?php echo do_shortcode('[theme_url]'); ?>
==============================================================*/
function my_theme_shortcode()
{
return esc_url(get_template_directory_uri());
}
add_shortcode('theme_url', 'my_theme_shortcode');
?>

<?php
/*==============================================================
通常投稿
・通常投稿タブの非表示
==============================================================*/
function remove_menus()
{
  global $menu;
  remove_menu_page('edit.php'); // 投稿を非表示
}
add_action('admin_menu', 'remove_menus');
?>

<?php
/*==============================================================
ページネーション
==============================================================*/
/**
 * ページネーション出力関数
 * $paged : 現在のページ
 * $pages : 全ページ数
 * $range : 左右に何ページ表示するか
 * $show_only : 1ページしかない時に表示するかどうか
 */
function pagination($pages, $paged, $range = 3, $show_only = false)
{
  $pages = (int) $pages;
  $paged = $paged ?: 1;
  $text_before  = "‹";
  $text_next    = "›";
  if (1 !== $pages) {
    //２ページ以上の時
    echo '<nav class="Pagination c-pagination p-blog-nav">';
    echo '<ul class="c-pagination__inner p-blog-nav__list">';
    if ($paged > 1) {
      // 「‹」１ページ前へ戻るリンクを表示
      echo '<a href="', get_pagenum_link($paged - 1), '" class="c-pagination__arrow -prev">', '</a>';
    }
    for ($i = 1; $i <= $pages; $i++) {
      if ($i <= $paged + $range && $i >= $paged - $range) {
        if ($paged === $i) {
          echo '<li class="p-blog-nav__item">';
          echo '<span class="Pagination-Item isActive c-pagination__numbers -current p-blog-nav__link is-active">', $i, '</span>'; // 現在のページの数字
          echo '</li>';
        } else {
          echo '<li class="p-blog-nav__item">';

          echo '<a href="', get_pagenum_link($i), '" class="c-pagination__numbers p-blog-nav__link">', $i, '</a>';
          echo '</li>';
        }
      }
    }
    if ($paged < $pages) {
      // 「›」１ページ後へ進むリンクを表示
      echo '<a href="', get_pagenum_link($paged + 1), '" class="c-pagination__arrow -next">', '</a>';
    }
    echo '</ul>';
    echo '</nav>';
  }
}
?>

<?php
/*==============================================================
次の記事と前の記事のクラス名のカスタマイズとデフォルトの矢印の削除
==============================================================*/
function add_prev_post_link_class($output)
{
  return str_replace('<a href=', '<a class="p-blog-detail__navLink -prev" href=', $output);
}
add_filter('previous_post_link', 'add_prev_post_link_class');
function add_next_post_link_class($output)
{
  return str_replace('<a href=', '<a class="p-blog-detail__navLink -next" href=', $output);
}
add_filter('next_post_link', 'add_next_post_link_class');
?>


<?php
/*==============================================================
archive-news.phpの月別アーカイブのliタグにクラス指定
==============================================================*/
function my_archives_link($link_html)
{
  $link_html = preg_replace('@<li>@i', '<li class="p-news-archive__navItem">', $link_html);
  return $link_html;
}
add_filter('get_archives_link', 'my_archives_link');
?>


<?php
/*==============================================================
MW WP Formのbrタグとpタグの自動入力を削除
==============================================================*/
function mvwpform_autop_filter()
{
  if (class_exists('MW_WP_Form_Admin')) {
    $mw_wp_form_admin = new MW_WP_Form_Admin();
    $forms = $mw_wp_form_admin->get_forms();
    foreach ($forms as $form) {
      add_filter('mwform_content_wpautop_mw-wp-form-' . $form->ID, '__return_false');
    }
  }
}
mvwpform_autop_filter();
?>


<?php
/*==============================================================
カスタム投稿タイプのパーマリンクをIDに
・スタッフ
==============================================================*/
add_filter('post_type_link', 'staff_post_link', 1, 2);
function staff_post_link($link, $post)
{
  if ($post->post_type === 'staff') {
    // カスタム投稿名が"staff"の投稿のパーマリンクを「/staff/投稿ID/」の形に書き換え
    return home_url('/staff/' . $post->ID);
  } else {
    return $link;
  }
}

//書き換えたパーマリンクに対応したリライトルールを追加
add_filter('rewrite_rules_array', 'staff_post_link_rewrite');
function staff_post_link_rewrite($rules)
{
  $rewrite_rules = array(
    'staff/([0-9]+)/?$' => 'index.php?post_type=staff&p=$matches[1]',
  );
  return $rewrite_rules + $rules;
}
?>

<?php
/*==============================================================
MW WP FORM validation
・お問い合わせフォームのエラー文カスタム
==============================================================*/
function validation_rule($validation, $data, $Data)
{
  $Validation = "";
  $validation->set_rule('select', 'noempty', array('message' => '選択してください'));
  $validation->set_rule('company', 'noempty', array('message' => '必須項目です。'));
  $validation->set_rule('name', 'noempty', array('message' => '必須項目です。'));
  $validation->set_rule('subname', 'noempty', array('message' => '必須項目です。'));
  $validation->set_rule('company', 'noempty', array('message' => '必須項目です'));
  $validation->set_rule('name', 'noempty', array('message' => '必須項目です'));
  $validation->set_rule('subname', 'noempty', array('message' => '必須項目です'));
  $validation->set_rule('subname', 'subname', array('message' => 'カタカナで入力してください'));
  $validation->set_rule('mail', 'noempty', array('message' => '必須項目です。'));
  $validation->set_rule('mail', 'mail', array('message' => '正しい形式で入力してください'));
  $validation->set_rule('phone', 'noempty', array('message' => '必須項目です'));
  $validation->set_rule('postcode', 'noempty', array('message' => '必須項目です'));
  $validation->set_rule('region', 'noempty', array('message' => '必須項目です'));
  $validation->set_rule('address', 'noempty', array('message' => '必須項目です'));
  $validation->set_rule('streetaddress', 'noempty', array('message' => '必須項目です'));
  $validation->set_rule('radio', 'radio', array('message' => '選択してください'));
  $validation->set_rule('textarea', 'noempty', array('message' => '必須項目です'));
  $validation->set_rule('privacy-check', 'privacy-check', array('message' => 'チェックを入れてください'));
  $validation->set_rule('phone', 'noempty', array('message' => '必須項目です。'));
  $validation->set_rule('postcode', 'noempty', array('message' => '必須項目です。'));
  $validation->set_rule('region', 'noempty', array('message' => '必須項目です。'));
  $validation->set_rule('address', 'noempty', array('message' => '必須項目です。'));
  $validation->set_rule('streetaddress', 'noempty', array('message' => '必須項目です。'));
  $validation->set_rule('radio', 'required', array('message' => '選択してください'));
  $validation->set_rule('textarea', 'noempty', array('message' => '必須項目です。'));
  $validation->set_rule('privacy-check', 'required', array('message' => 'チェックを入れてください'));
  return $Validation;
}
add_filter('mwform_validation_mw-wp-form-91', 'validation_rule', 10, 3);
?>

<?php
/*==============================================================
MW WP FORM validation
・エントリーフォームのエラー文カスタム
==============================================================*/
function entry_validation_rule($validation, $data, $Data)
{
  $Validation = "";
  $validation->set_rule('name', 'noempty', array('message' => '必須項目です。'));
  $validation->set_rule('subname', 'noempty', array('message' => '必須項目です。'));
  $validation->set_rule('name', 'noempty', array('message' => '必須項目です'));
  $validation->set_rule('subname', 'noempty', array('message' => '必須項目です'));
  $validation->set_rule('subname', 'subname', array('message' => 'カタカナで入力してください'));
  $validation->set_rule('birthday', 'noempty', array('message' => '必須項目です。'));
  $validation->set_rule('mail', 'noempty', array('message' => '必須項目です。'));
  $validation->set_rule('mail', 'mail', array('message' => '正しい形式で入力してください'));
  $validation->set_rule('postcode', 'noempty', array('message' => '必須項目です。'));
  $validation->set_rule('region', 'noempty', array('message' => '必須項目です。'));
  $validation->set_rule('address', 'noempty', array('message' => '必須項目です。'));
  $validation->set_rule('streetaddress', 'noempty', array('message' => '必須項目です。'));
  $validation->set_rule('radio', 'required', array('message' => '選択してください'));
  $validation->set_rule('file', 'noempty', array('message' => 'ファイルが添付されていません'));
  $validation->set_rule('textarea', 'noempty', array('message' => '必須項目です。'));
  $validation->set_rule('privacy-check', 'required', array('message' => 'チェックを入れてください'));
  return $Validation;
}
add_filter('mwform_validation_mw-wp-form-185', 'entry_validation_rule', 10, 3);
?>

<?php
/*==============================================================
インラインscriptの設置
・Companyページ
==============================================================*/
function add_enqueue_scripts()
{
  // WordPressのバージョン
  global $wp_version;
  // JavaScriptファイルを読み込む
  wp_enqueue_script('lazyload', get_theme_file_uri(''), array('jquery'), $wp_version, true);
  // インラインで記述したいJavaScript
  if (is_page('contact')) {
    $js_str =
      "
jQuery(function($) {
$('.zip-button').keyup(function() {
AjaxZip3.zip2addr('postcode', '', 'region', 'streetaddress', 'address');
});
});
";
  } elseif (is_page('entry')) {
    $js_str =
      "
jQuery(function($) {
$('.zip-button').keyup(function() {
AjaxZip3.zip2addr('postcode', '', 'region', 'streetaddress', 'address');
});
});
";
  }

  // ハンドル 'lazyload' の 後（ 'after'で指定 ） に $js_str で定義したインラインコードを読み込む
  if (isset($js_str)) { //$js_strの値が入っているかチェックして値が入っていたら処理を走らせる
    wp_add_inline_script("lazyload", $js_str, 'after');
  }
}

add_action('wp_enqueue_scripts', 'add_enqueue_scripts');
?>

<?php
/*==============================================================
ajaxzip3の設定
・【MW WP Form】郵便番号を入力して即座に住所が反映
==============================================================*/
function enq_ajaxzip3()
{
  wp_enqueue_script('ajaxzip3-script', 'https://ajaxzip3.github.io/ajaxzip3.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'enq_ajaxzip3');
?>

<?php
/*==============================================================
Contact Form 7で自動挿入されるPタグ、brタグを削除
==============================================================*/
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
} 
?>