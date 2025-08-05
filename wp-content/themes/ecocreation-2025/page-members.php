<?php get_header('guyners'); ?>

<section class="sub_fv">
	<h3 class="sec_title_white">TEAM MEMBERS</h3>
	<p class="sec_subtitle_white">選手紹介</p>
</section>

<section class='breadcrumb'>
	<a href="<?php echo home_url(); ?>">TOP</a>
	<p class='breadcrumb-arrow'>></p>
	<p>選手紹介</p>
</section>

<section class="members-contents">
	<div class="members-anchor">
		<a href="<?php echo home_url(); ?>/members" class="select">選手</a>
		<a href="<?php echo home_url(); ?>/coaches" class="noselect">監督・コーチ・トレーナー</a>
		<a href="<?php echo home_url(); ?>/member_gaina" class="noselect">ガイナくん</a>
	</div>

	<div class="members-contents-inner">
		<div class="members-inner-box">
			<div class="members-caption">
				<h3 class="sec_title_green">PLAYER</h3>
				<p class="sec_subtitle_green">選手</p>
			</div>
			<div class="members-player-boxes">
					<a href="<?php echo home_url(); ?>/member_pitcher"><img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/member_pitcher.png" alt="pitcher"></a>
					<a href="<?php echo home_url(); ?>/member_catcher"><img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/member_catcher.png" alt="catcher"></a>
					<a href="<?php echo home_url(); ?>/member_infielder"><img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/member_infielder.png" alt="infielder"></a>
					<a href="<?php echo home_url(); ?>/member_outfielder"><img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/member_outfielder.png" alt="outfielder"></a>		
			</div>
		</div>

	</div>
</section>
<?php get_footer('guyners'); ?>