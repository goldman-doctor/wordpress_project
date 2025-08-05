<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ecocreation-2025
 */

?>

<footer class="footer">
	<ul class="banner-list">
		<li class="banner-list__item">
			<a href="https://www.hardoff.co.jp/shop/brand/hardoff/" target="_blank" rel="noopener noreferrer" class="banner-list__img-link">
				<img src="<?php echo get_template_directory_uri(); ?>/img/banner-hard-off.png" class="banner-list__img" />
			</a>
		</li>
		<li class="banner-list__item">
			<a href="https://www.hardoff.co.jp/shop/brand/offhouse/" target="_blank" rel="noopener noreferrer" class="banner-list__img-link">
				<img src="<?php echo get_template_directory_uri(); ?>/img/banner-off-house.png" class="banner-list__img" />
			</a>
		</li>
		<li class="banner-list__item">
			<a href="https://www.hardoff.co.jp/shop/brand/hobbyoff/" target="_blank" rel="noopener noreferrer" class="banner-list__img-link">
				<img src="<?php echo get_template_directory_uri(); ?>/img/banner-hobby-off.png" class="banner-list__img" />
			</a>
		</li>
		<li class="banner-list__item">
			<a href="https://netmall.hardoff.co.jp/" target="_blank" rel="noopener noreferrer" class="banner-list__img-link">
				<img src="<?php echo get_template_directory_uri(); ?>/img/banner-off-mall.png" class="banner-list__img" />
			</a>
		</li>
	</ul>
	<div class="footer__content">
		<div class="footer__content__inner">
			<div class="footer__content__left">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo-footer.png" class="footer__logo" />
			<div class="footer__info">
				<div>
					<div class="chips">古物営業法に基づく表示</div>
				</div>
				<div class="footer__company">
					<p>株式会社エコクリエーション</p>
					<p>神奈川公安委員会　451930007248号</p>
				</div>
			</div>
			</div>
			<div class="footer__content__right">
			<nav>
				<ul class="nav-list">
					<li class="nav-list__item">
						<a href="<?php echo home_url(); ?>" class="nav-list__link">HOME</a>
					</li>
					<li class="nav-list__item">
						<a href="<?php echo home_url(); ?>/company" class="nav-list__link">会社概要</a>
					</li>
					<li class="nav-list__item">
						<a href="<?php echo home_url(); ?>/stores" class="nav-list__link">店舗情報</a>
					</li>
					<li class="nav-list__item">
						<a href="<?php echo home_url(); ?>/recruit" class="nav-list__link">採用情報</a>
					</li>
				</ul>
			</nav>
			</div>
		</div>
	</div>
	<div class="footer__bottom">
		<span class="footer__copyright">© 2025 EcoCReation</span>
	</div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>