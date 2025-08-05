<?php get_header('guyners'); ?>    

    <section class="sub_fv">
        <h3 class="sec_title_white">TEAM MEMBERS</h3>
        <p class="sec_subtitle_white">選手紹介</p>
    </section>

	<?php
		$member_id = get_queried_object_id(); 
	?>

    <section class='breadcrumb'>
        <a href="<?php echo home_url(); ?>">TOP</a>
        <p class='breadcrumb-arrow'>></p>
        <a href="<?php echo home_url(); ?>/coaches">監督・コーチ・トレーナー</a>
        <p class='breadcrumb-arrow'>></p>
        <p><?php the_field('coach_name', $member_id); ?></p>
    </section>

    <section class="player-detail-contents">
        <div class="player-profile">
			<div class="player-profile-inner">
				<div class="player-profile-img pc">
					<?php
					$coach_img = get_field('coach_detail_img', $member_id);
					if ($coach_img):
					?>
						<img src="<?php echo esc_url($coach_img['url']); ?>" alt="<?php echo esc_attr($coach_img['alt']); ?>" class="player-detail-img">
					<?php endif; ?>
				</div>
				<div class="player-profile-txt">
					<h2>
						<span class="player-num"><?php the_field('coach_number', $member_id); ?></span>
						<span class="player-name"><?php the_field('coach_name', $member_id); ?></span>
					</h2>
					<h6 class="en-name"><?php echo strtoupper(get_field('coach_en_name', $member_id)); ?></h6>
					<h5 class="player-role"><?php the_field('coach_role', $member_id); ?></h5>
					<div class='player-info pc'>
						<p class="player-style"><?php the_field('coach_style', $member_id); ?></p>
						<p>
							<span class="dob"><?php the_field('coach_birthday', $member_id); ?>生</span>
							<span class="player-height"><?php the_field('coach_height', $member_id); ?>cm</span>
							<span class="player-weight"><?php the_field('coach_weight', $member_id); ?>kg</span>
						</p>
					</div>					
				</div>
				<div class="player-profile-img sp">
					<?php
					$coach_img = get_field('coach_detail_img', $member_id);
					if ($coach_img):
					?>
						<img src="<?php echo esc_url($coach_img['url']); ?>" alt="<?php echo esc_attr($coach_img['alt']); ?>" class="player-detail-img">
					<?php endif; ?>
				</div>
				<div class='player-info sp'>
					<p class="player-style"><?php the_field('coach_style', $member_id); ?></p>
					<p>
						<span class="dob"><?php the_field('coach_birthday', $member_id); ?>生</span>
						<span class="player-height"><?php the_field('coach_height', $member_id); ?>cm</span>
						<span class="player-weight"><?php the_field('coach_weight', $member_id); ?>kg</span>
					</p>
				</div>	
			</div>
		</div>

		<div class="player-origin">
			<div class="player-origin-item">
				<p>出身</p>
				<p><?php the_field('coach_county', $member_id); ?></p>
			</div>
			<div class="player-origin-item">
				<p>IL在籍年数</p>
				<p><?php the_field('il_year', $member_id); ?></p>
			</div>
			<div class="player-origin-item">
				<p>球歴</p>
				<p><?php the_field('coach_career', $member_id); ?></p>
			</div>
		</div>

        <div class="player-detail">
            <div class="player-caption">
                <h3 class="sec_title_green">PLAYER DETAILS</h3>
                <p class="sec_subtitle_green">選手詳細</p>
            </div>
            <div class="player-detail-table">
                <table>
                    <tr><th>野球を始めたきっかけ</th><td><?php the_field('tb_chance', $member_id); ?></td></tr>
					<tr><th>尊敬している人物</th><td><?php the_field('tb_respect_person', $member_id); ?></td></tr>
					<tr><th>自分の宝物</th><td><?php the_field('tb_value', $member_id); ?></td></tr>
					<tr><th>甲子園出場歴</th><td><?php the_field('tb_before_career', $member_id); ?></td></tr>
					<tr><th>大学選手権出場歴、都市対抗野球出場歴</th><td><?php the_field('tb_real_career', $member_id); ?></td></tr>
					<tr><th>日本代表歴</th><td><?php the_field('tb_history', $member_id); ?></td></tr>
					<tr><th>趣味or特技</th><td><?php the_field('tb_hobby', $member_id); ?></td></tr>
					<tr><th>タイプ</th><td><?php the_field('tb_ball_type', $member_id); ?></td></tr>
					<tr><th>キャッチコピーorセールスポイント</th><td><?php the_field('tb_catchcopy', $member_id); ?></td></tr>
                </table>
            </div>
        </div>
		        
		<div class="player-sponsors">
            <div class="player-caption">
                <h3 class="sec_title_green">PLAYER SPONSORS</h3>
                <p class="sec_subtitle_green">個人スポンサー</p>
            </div>
            <div class="player-sponsors-inner">
				
				<?php 
					$coach_name = get_field('coach_name', $member_id);

					for ($i = 1; $i <= 5; $i++) {
						$logo = get_field("sponsor_{$i}_logo", $member_id);
						$name = get_field("sponsor_{$i}_company_name", $member_id);

						if ($logo && $name): ?>
							<div class="player-sponsors-item">
								<img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($name); ?>">
								<p>【<?php echo esc_html($name); ?>】は<?php echo esc_html($player_name); ?>選手を応援しています！</p>
							</div>
						<?php endif;
					}
					?>
            </div>
        </div>
		
    </section>


<?php get_footer('guyners'); ?>