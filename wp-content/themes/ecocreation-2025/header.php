<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecocreation-2025
 */

$meta_title = '株式会社エコクリエーション';
$meta_description = '株式会社エコクリエーションはリユース活動事業を通じて、「ハードオフコーポレーション」FCチェーンに加盟し、経営理念を共有のもと「オフハウス」「ホビーオフ」を運営し、今後関東全域に店舗展開をおこなっております。';
if (is_page('company')) {
  $meta_title .= '　会社概要';
} else if (is_page('stores')) {
  $meta_title .= '　店舗情報';
} else if (is_page('recruit')) {
  $meta_title .= '　採用情報';
}

?>
<!doctype html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $meta_description ?>" >
    <title><?php echo $meta_title ?></title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ecocreation-2025' ); ?></a>

    <header class="header">
      <div class="header__inner">
        <a href="<?php echo home_url() ?>" class="header__logo header__logo--pc">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="header__logo-img" />
        </a>
        <a href="<?php echo home_url() ?>" class="header__logo header__logo--sp">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo-footer.png" class="header__logo-img" />
        </a>
        <div>
          <nav>
            <ul class="nav-list">
              <li class="nav-list__item">
                <a href="<?php echo home_url(); ?>" class="nav-list__link <?php if (is_front_page()) echo 'nav-list__link--current' ?>">HOME</a>
              </li>
              <li class="nav-list__item">
                <a href="<?php echo home_url(); ?>/company" class="nav-list__link <?php if (is_page('company')) echo 'nav-list__link--current' ?>">会社概要</a>
              </li>
              <li class="nav-list__item">
                <a href="<?php echo home_url(); ?>/stores" class="nav-list__link <?php if (is_page('stores')) echo 'nav-list__link--current' ?>">店舗情報</a>
              </li>
              <li class="nav-list__item">
                <a href="<?php echo home_url(); ?>/recruit" class="nav-list__link <?php if (is_page('recruit')) echo 'nav-list__link--current' ?>">採用情報</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
