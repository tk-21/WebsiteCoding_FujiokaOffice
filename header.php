<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="IT専門の行政書士たちが、あなたのビジネスを守ります。" />
  <!--OGPの設定-->
  <meta property="og:title" content="藤岡行政書士事務所" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="{サイトURL}" />
  <meta property="og:image" content="{OGP画像のURL}" />
  <meta property="og:site_name" content="藤岡行政書士事務所" />
  <meta property="og:description" content="IT専門の行政書士たちが、あなたのビジネスを守ります。" />
  <!--アイコンの設定-->
  <link rel="icon" href="{アイコンのパス}" />
  <link rel="apple-touch-icon" href="{アイコンのパス}" />
  <!--その他設定-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="format-detection" content="telephone=no" />
  <!-- フォントのcss -->
  <link rel="preconnect" href="//fonts.gstatic.com" />
  <link href="//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet" />
  <!-- style.css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.min.css" />
  <!-- プラグインのcss -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <!-- jQuery本体 -->
  <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
  <!-- jQueryプラグイン -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!-- script.js -->
  <script src="//maps.google.com/maps/api/js?key=AIzaSyBYnv5PdAM0gwpzt4b8II581Siv2sH43-U"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="header">
    <div class="header-inner">
      <h1 class="site-ttl">
        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="" /></a>
      </h1>
      <?php
      /* メニューIDを取得する */
      $menu_name = 'global_nav';/* functions.phpで指定したメニュー名を取得 */
      $locations = get_nav_menu_locations();/* locationを取得 */
      $menu = wp_get_nav_menu_object($locations[$menu_name]);/* 関数を使ってglobal_navの内容（オブジェクト）を取り出す */
      $menu_items = wp_get_nav_menu_items($menu->term_id);/* オブジェクトを取得すると->が使えるようになる */
      ?>
      <nav class="header-nav">
        <ul class="nav-list">
          <?php foreach ($menu_items as $item) : ?>
            <li class="nav-item"><a href="<?php echo esc_attr($item->url); ?>"><?php echo esc_html($item->title); ?></a></li>
          <?php endforeach; ?>
        </ul>
      </nav>
    </div>
  </header>

  <main>