<?php get_header('guyners'); ?>


<section class="sub_fv">
	<h3 class="sec_title_white">ABOUT US</h3>
	<p class="sec_subtitle_white">私たちについて</p>
</section>

<section class='breadcrumb'>
	<a href="<?php echo home_url(); ?>">TOP</a>
	<p class='breadcrumb-arrow'>></p>
	<p>私たちについて</p>
</section>

<section class="about-contents">
	
	<div class="about-box">
		<img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/about_2.png" alt="about_2">
		<div class="about-txt">
			<h6>OUR TEAM</h6>
			<div class="about-box-caption">
				<h4>チームについて</h4>
				<div class="dec"></div>
			</div>
			<p>香川オリーブガイナーズは、将来のNPB入りや海外リーグでの活躍を目指す若手選手を中心に構成された、活気あるチームです。<br>ひとつひとつのプレーに真摯に向き合い、常に高みを目指す姿勢を大切にしながら、チーム一丸となって勝利を追求しています。<br>チーム内には明るく前向きな雰囲気があり、日々の練習や試合においても互いに声を掛け合い、高め合う環境が整っています。<br>スピード感ある野球と勢いのあるプレーを通じて、観客の皆さまに熱い試合をお届けしています。</p>
			<div class="about-sub-links">
				<a href="<?php echo home_url(); ?>/about/about_message"><img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/footer_icon_green.png">監督挨拶</a>
				<a href="<?php echo home_url(); ?>/about/about_facility"><img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/footer_icon_green.png">練習場所</a>
			</div>
		</div>
	</div>
	
	<div class="about-box">
		<img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/about_1.png" alt="about_1" class="sp">
		<div class="about-txt">
			<h6>OUR COMPANY</h6>
			<div class="about-box-caption">
				<h4>会社について</h4>
				<div class="dec"></div>
			</div>
			<p>香川オリーブガイナーズは、「感動」と「興奮」を届ける質の高いプレーで、観客やファンの心を魅了することを目指しています。香川県を拠点に、地域との積極的なコミュニケーションを通じて、“夢・希望・誇り”を届けられる存在でありたいと考えています。<br>また、プロスポーツとしてのエンターテインメント性を活かし、地域に親しまれるチームづくりを推進。引退後のキャリア支援にも力を入れ、地域企業と連携しながら「夢の続き」を応援しています。</p>
			<div class="about-sub-links">
<!-- 				<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/footer_icon_green.png">地域貢献</a> -->
				<a href="<?php echo home_url(); ?>/about/about_career"><img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/footer_icon_green.png">キャリア</a>
				<a href="<?php echo home_url(); ?>/about/about_company"><img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/footer_icon_green.png">会社概要</a>
			</div>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/about_1.png" alt="about_1" class="pc">
	</div>

</section>

<?php get_footer('guyners'); ?>