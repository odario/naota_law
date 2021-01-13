<?php
add_action('after_setup_theme', 'lawyer_naota_theme_setup');
function lawyer_naota_theme_setup()
{
  load_theme_textdomain('lawyer_naota', get_template_directory() . '/languages');
}


function getChangeLocaleLink()
{
  $title = '';
  $next_locale = '';
  $current_locale = '';
  switch (get_locale()) {
    case 'ja':
    case 'ja_JP':
      $title = 'español';
      $next_locale = 'es';
      $current_locale = 'ja';
      break;
    case 'es':
    case 'es_ES':
      $title = '日本語';
      $next_locale = 'ja';
      $current_locale = 'es';
      break;
  }

  $path = str_replace('/' . $current_locale, '', add_query_arg('_', false));
  $content_url = '/' . $next_locale . $path;
  return '<a class="c-navigation__link" href="' . $content_url . '">' . $title . '</a>';
}

//-------------------------------------
// 読み込みCSS指定
function add_styles()
{
  wp_enqueue_style('main-style', get_template_directory_uri() . '/assets/css/style.css', false, '20171024', 'all');
}

//-------------------------------------
// 読み込みJS指定
function add_scripts()
{
  wp_enqueue_script('jquery-matchHeight', get_template_directory_uri() . '/assets/js/jquery.matchHeight.js', array('jquery'), '20171024', true);
  wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.js', array('jquery'), '20171024', true);
  wp_enqueue_script('jquery-inview', get_template_directory_uri() . '/assets/js/jquery.inview.min.js', array('jquery'), '20171024', true);
  wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '20171024', true);
  wp_enqueue_script('google-map', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDeTqNGDGvqBO65R0OdoA-AS-1oVGSdmmU&callback=initMap', array('main-script'), '20171024', true);
}

//-------------------------------------
// 上記で指定したものを出力
add_action('wp_enqueue_scripts', 'add_styles');
add_action('wp_enqueue_scripts', 'add_scripts');

//-------------------------------------
// アイキャッチ有効化
add_theme_support('post-thumbnails');

function pagename_class($classes = '')
{
  if (is_page()) {
    $page = get_post(get_the_ID());
    $classes[] = 'page-' . $page->post_name;
    if ($page->post_parent) {
      $classes[] = 'page-' . get_page_uri($page->post_parent) . '-child';
    }
  }
  return $classes;
}
add_filter('body_class', 'pagename_class');

//-------------------------------------
// カスタム投稿
function create_post_info()
{
  $exampleSupports = [
    'title',  // 記事タイトル
    'editor',  // 記事本文
    //'thumbnail',  // アイキャッチ画像
    'revisions'  // リビジョン
  ];
  register_post_type(
    'info',  // カスタム投稿名
    array(
      'label' => 'お知らせ',  // 管理画面の左メニューに表示されるテキスト
      'public' => true,  // 投稿タイプをパブリックにするか否か
      'has_archive' => true,  // アーカイブを有効にするか否か
      'menu_position' => 5,  // 管理画面上でどこに配置するか
      'supports' => $exampleSupports  // 投稿画面でどのmoduleを使うか的な設定
    )
  );
  register_taxonomy(
    'info',  // 追加するタクソノミー名（英小文字とアンダースコアのみ）
    'info',  // どのカスタム投稿タイプに追加するか
    array(
      'label' => 'info',  // 管理画面上に表示される名前（投稿で言うカテゴリー）
      'labels' => array(
        'all_items' => 'カテゴリー一覧',  // 投稿画面の右カラムに表示されるテキスト（投稿で言うカテゴリー一覧）
        'add_new_item' => '新規カテゴリーを追加'  // 投稿画面の右カラムに表示されるカテゴリ追加リンク
      ),
      'hierarchical' => true  // タクソノミーを階層化するか否か（子カテゴリを作れるか否か）
    )
  );
}
add_action('init', 'create_post_info');

function lawyer_naota_redefine_locale($locale)
{
  // run your tests on the URI
  $lang = explode('/', $_SERVER['REQUEST_URI']);
  // here change to english if requested
  if (array_pop($lang) === 'es') {
    $locale = 'es';
  } else {
    $locale = 'ja';
  }
  return $locale;
}
add_filter('locale', 'lawyer_naota_redefine_locale', 10);
add_filter('post_type_link', 'qtranxf_convertURL');
