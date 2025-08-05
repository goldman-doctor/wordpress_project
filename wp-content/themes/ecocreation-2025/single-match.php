<?php get_header('guyners'); ?>

    <section class="sub_fv">
        <h3 class="sec_title_white">GAME SCHEDULE</h3>
        <p class="sec_subtitle_white">試合情報</p>
    </section>

	<?php
		$match_id = get_queried_object_id(); 
	?>

	<?php
		$match_day = get_field('match_day', $match_id);
		$match_weekday = get_field('match_weekday', $match_id);
		$match_time = get_field('match_time', $match_id);
		$stadium = get_field('stadium', $match_id);
		$team1_img = get_field('team1_img', $match_id);
		$team1_name = get_field('team1_name', $match_id);
		$team1_score = get_field('team1_score', $match_id);
		$team2_img = get_field('team2_img', $match_id);
		$team2_name = get_field('team2_name', $match_id);
		$team2_score = get_field('team2_score', $match_id);
		$free_name = get_field('free_name', $match_id);
		$game_place = get_field('game_place', $match_id);
		$match_img = get_field('match_img', $match_id);
		$team1_pitcher = get_field('team1_pitcher', $match_id);
		$team1_catcher = get_field('team1_catcher', $match_id);
		$team2_pitcher = get_field('team2_pitcher', $match_id);
		$team2_catcher = get_field('team2_catcher', $match_id);
		$team1_homerun = get_field('team1_homerun', $match_id);
		$team1_triple = get_field('team1_triple', $match_id);
		$team1_double = get_field('team1_double', $match_id);
		$team2_homerun = get_field('team2_homerun', $match_id);
		$team2_triple = get_field('team2_triple', $match_id);
		$team2_double = get_field('team2_double', $match_id);
		$match_mvp_name = get_field('match_mvp_name', $match_id);
		$match_mvp_content = get_field('match_mvp_content', $match_id);
		$match_comment = get_field('match_comment', $match_id);
		$table = get_field('tb_score', $match_id);
	?>

    <section class='breadcrumb'>
        <a href="<?php echo home_url(); ?>">TOP</a>
        <p class='breadcrumb-arrow'>></p>
        <a href="<?php echo home_url(); ?>/schedule">試合情報一覧</a>
        <p class='breadcrumb-arrow'>></p>
        <p><?php echo $match_day; ?> VS<?php echo $team2_name; ?></p>
    </section>

    <section class="schedule-details">
        <div class="schedule-detail-caption">
            <div class="schedule-box-date">
                <p><span class="match-date"><?php echo $match_day; ?></span><span class="match-day"><?php echo $match_weekday; ?></span><span class="match-time"><?php echo $match_time; ?></span></p>
                <p class="match-stadium"><?php echo $stadium; ?></p>
            </div>
            <div class="schedule-box-team">
                <h6>VS<span><?php echo $team2_name; ?></span></h6>
            </div>
        </div>

        <div class="schedule-details-inner">
            <div class="schedule-box-inner">
                <div class="team1">
                    <img src="<?php echo esc_url($team1_img['url']); ?>" alt="<?php echo esc_attr($team1_img['alt']); ?>" class="team1_img">
                    <p><?php echo $team1_name; ?></p>
                </div>
                <div class="match-score">
                    <p class="team1_score"><?php echo $team1_score; ?></p>
                    <p>-</p>
                    <p class="team2_score"><?php echo $team2_score; ?></p>
                </div>
                <div class="team2">
                    <img src="<?php echo esc_url($team2_img['url']); ?>" alt="<?php echo esc_attr($team2_img['alt']); ?>" class="team2_img">
                    <p>
                        <?php echo $team2_name; ?>
                    </p>
                </div>
            </div>

            <div class="schedule-results-tb">
				<?php

				if ($table && isset($table['body'])) :
				echo '<table class="score-table">';

				foreach ($table['body'] as $i => $row) {
					echo '<tr>';

					foreach ($row as $j => $cell) {
						$value = isset($cell['c']) ? $cell['c'] : '';

						if ($j === 0) {
							if ($i === 0) {
								echo '<th></th>'; 
							} elseif ($i === 1) {
								echo '<th>';
								if ($team1_img) {
									echo '<img src="' . esc_url($team1_img['url']) . '" alt="' . esc_attr($team1_img['alt']) . '">';
								}
								echo esc_html($team1_name) . '</th>';
							} elseif ($i === 2) {
								echo '<th>';
								if ($team2_img) {
									echo '<img src="' . esc_url($team2_img['url']) . '" alt="' . esc_attr($team2_img['alt']) . '">';
								}
								echo esc_html($team2_name) . '</th>';
							} else {
								echo '<th>' . esc_html($value) . '</th>';
							}
						} else {
							echo '<td>' . esc_html($value) . '</td>';
						}
					}

					echo '</tr>';
				}

				echo '</table>';
				endif;
				?>
				
            </div>

            <div class="schedule-detail-img">
                <img src="<?php echo esc_url($match_img['url']); ?>" alt="<?php echo esc_attr($match_img['alt']); ?>">
            </div>

            <div class="schedule-detail-box">
                <h6>バッテリー</h6>
                <div class="player-type">
                    <p><img src="<?php echo esc_url($team1_img['url']); ?>" alt="<?php echo esc_attr($team1_img['alt']); ?>"><?php echo $team1_name; ?></p>
                    <p><span class="pitcher"><?php echo $team1_pitcher; ?> </span>ー<span class="catcher"> <?php echo $team1_catcher; ?></span></p>
                </div>
                <div class="player-type">
                    <p><img src="<?php echo esc_url($team2_img['url']); ?>" alt="<?php echo esc_attr($team2_img['alt']); ?>"><?php echo $team2_name; ?></p>
                    <p><span class="pitcher"><?php echo $team2_pitcher; ?> </span>ー<span class="catcher"> <?php echo $team2_catcher; ?></span></p>
                </div>
            </div>
            <div class="schedule-detail-box">
                <h6>長打</h6>
                <div class="hit-type">
                    <p><img src="<?php echo esc_url($team1_img['url']); ?>" alt="<?php echo esc_attr($team1_img['alt']); ?>"><?php echo $team1_name; ?></p>
                    <div class="hit-member">
                        <p><span>本塁打：</span><?php echo $team1_homerun; ?></p>
                        <p><span>三塁打：</span><?php echo $team1_triple; ?></p>
                        <p><span>二塁打：</span><?php echo $team1_double; ?></p>
                    </div>
                </div>
                <div class="hit-type">
                    <p><img src="<?php echo esc_url($team2_img['url']); ?>" alt="<?php echo esc_attr($team2_img['alt']); ?>"><?php echo $team2_name; ?></p>
                    <div class="hit-member">
                        <p><span>本塁打：</span><?php echo $team2_homerun; ?></p>
                        <p><span>三塁打：</span><?php echo $team2_triple; ?></p>
                        <p><span>二塁打：</span><?php echo $team2_double; ?></p>
                    </div>
                </div>
            </div>
            <div class="schedule-detail-box">
                <h6>本日のMVP</h6>
                <div class="mvp">
                    <h5><span><?php echo $match_mvp_name; ?></span>　選手</h5>
                    <p><?php echo $match_mvp_content; ?></p>
                </div>
            </div>
            <div class="schedule-detail-box">
                <h6>試合コメント</h6>
                <div class="comment">
                    <p><?php echo $match_comment; ?></p>
                </div>
            </div>
		</div>
    </section>

<?php get_footer('guyners'); ?>