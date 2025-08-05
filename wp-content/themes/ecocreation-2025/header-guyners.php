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
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Guyners</title>
    <meta name="robots" content="noindex">
      <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/guyners/img/favicon.png">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/guyners/css/slick-theme.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/guyners/css/slick.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/guyners/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/guyners/css/style_sp.css" type="text/css">
</head>

<body>
    <header>
        <div class="header">
            <div class="container">
                <div class="header_content">
                    <div class="logo sp">
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/logo.png" class="logo" alt="logo">
                        </a>
                    </div>
                    <div class="navgation">
                        <ul>
                            <li class=""><a href="<?php echo home_url(); ?>/schedule">試合情報</a></li>
                            <li class=""><a href="<?php echo home_url(); ?>/information">お知らせ</a></li>
                            <li class=""><a href="<?php echo home_url(); ?>/members">選手紹介</a></li>
                            <li class=""><a href="<?php echo home_url(); ?>/about/about_facility">アクセス</a></li>
                            <li class="">
                                <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/logo.png" class="logo" alt="logo"></a>
                            </li>
                            <li class=""><a href="<?php echo home_url(); ?>/ticket">チケット</a></li>
                            <li class=""><a href="https://kagawa.official.ec/" target="_blank">グッズ</a></li>
                            <li class=""><a href="<?php echo home_url(); ?>/recruits">採用情報</a></li>
                            <li class=""><a href="<?php echo home_url(); ?>#contact">お問い合わせ</a></li>
                            <li class=""><a href="<?php echo home_url(); ?>/sponsors">スポンサー</a></li>
                        </ul>
                    </div>
                    <div class="menu_btn">
                        <div class="container" onclick="openNav(this)">
                            <div class="bar1"></div>
                            <div class="bar2"></div>
                            <div class="bar3"></div>
                        </div>
                        <h6>MENU</h6>
                    </div>
                </div>
            </div>

            <div id="myNav" class="overlay">
                <div class="overlay-content">
                    <ul>
                        <li class=""><a href="<?php echo home_url(); ?>/schedule">試合情報</a></li>
                        <li class=""><a href="<?php echo home_url(); ?>/information">お知らせ</a></li>
                        <li class=""><a href="<?php echo home_url(); ?>/members">選手紹介</a></li>
                        <li class=""><a href="<?php echo home_url(); ?>/about/about_facility">アクセス</a></li>
                        <li class=""><a href="<?php echo home_url(); ?>/ticket">チケット</a></li>
                        <li class=""><a href="https://kagawa.official.ec/" target="_blank">グッズ</a></li>
                        <li class=""><a href="<?php echo home_url(); ?>/recruits">採用情報</a></li>
                        <li class=""><a href="<?php echo home_url(); ?>#contact">お問い合わせ</a></li>
                        <li class=""><a href="<?php echo home_url(); ?>/sponsors">スポンサー</a></li>
                    </ul>
                </div>
            </div>
        </div>
		
		<div class="new-match pc">
            <div class="schedule-box">
                <div class="schedule-box-title">
                    <div class="schedule-box-caption">
                        <h6>NEXT GAME</h6>
                    </div>
                    <div class="schedule-box-date">
                        <p>AWAY</p>
                    </div>
                </div>
				<?php 
					$args = array(
						'post_type' => 'next_game',
						'post_status' => 'publish',
						'posts_per_page' => 1,
						'orderby' => 'date',
					);
					$post_query = new WP_Query( $args );
				?>
				<?php 
				if ( $post_query -> have_posts() ) : 
					$post_query -> the_post(); 
				?>
                <div class="schedule-box-inner">
					<?php
						$image = get_field('next_game_team_img');
						if ($image):
					?>
					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
					<?php endif; ?>
                    <div class="schedule-box-txt">
                        <p><span class="match-date"><?php echo get_field('next_game_day'); ?></span><span class="match-day"><?php echo get_field('next_game_weekday'); ?></span><span class="match-time"><?php echo get_field('next_game_time'); ?></span></p>
						<p class="match-name">VS　<span><?php echo get_field('next_game_team_name'); ?></span></p>
                        <p class="match-address"><img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/icon-map-green.png"><?php echo get_field('next_game_place'); ?></p>
                        <a href="<?php echo home_url(); ?>/schedule" class="btn-buy-ticket">試合詳細を見る</a>
                    </div>
                </div>
				<?php endif; ?>
            </div>
        </div>
    </header>