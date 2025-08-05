<?php get_header('guyners'); ?>

	<section class="sub_fv">
        <h3 class="sec_title_white">GAME SCHEDULE</h3>
        <p class="sec_subtitle_white">試合情報</p>
    </section>

<section class='breadcrumb'>
	<a href="<?php echo home_url(); ?>">TOP</a>
	<p class='breadcrumb-arrow'>></p>
	<p>試合情報一覧</p>
</section>

    <section class="schedule-contents yearly-archive">
		
		<div class="archive-sidebar sp">
			<div class=archive-list>
				<?php
					global $wpdb;

					$years = $wpdb->get_col("
						SELECT DISTINCT YEAR(post_date)
						FROM $wpdb->posts
						WHERE post_type = 'match'
						AND post_status = 'publish'
						ORDER BY post_date DESC
					");

					foreach ($years as $year) {
						$url = home_url("/match/{$year}/");
						echo '<a href="' . esc_url($url) . '">
							<img src="' . get_template_directory_uri() . '/img/guyners/img/footer_icon_green.png">' . esc_html($year) . '年
						</a>';
					}
				?>

			</div>
		</div>

        <div class="schedule-contents-inner">
            <div class="match-boxes">
                <div class="match-boxes-inner">
					
					<?php 
						$args = array(
							'post_type' => 'match',
							'post_status' => 'publish',
							'orderby' => 'date',
							'order' => 'ASC',
							'posts_per_page' => -1,
						);
					
						// For category archive
						if (is_category()) {
							$args['category_name'] = get_query_var('category_name');
						}

						// For year archive
						if (is_year()) {
							$args['year'] = get_query_var('year');
						}
					
						$post_query = new WP_Query( $args );
					?>
					<?php if ( $post_query->have_posts() ) : ?>
					<?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
					<?php
						$match_day = get_field('match_day');
						$match_weekday = get_field('match_weekday');
						$match_time = get_field('match_time');
						$stadium = get_field('stadium');
						$team1_img = get_field('team1_img');
						$team1_name = get_field('team1_name');
						$team1_score = get_field('team1_score');
						$team2_img = get_field('team2_img');
						$team2_name = get_field('team2_name');
						$team2_score = get_field('team2_score');
						$free_name = get_field('free_name');
					?>
                    <div class="schedule-box">
                        <div class="schedule-box-title">
                            <div class="schedule-box-caption">
                                <h6>HOME</h6>
                            </div>
                            <div class="schedule-box-date">
                                <p><span class="match-date"><?php echo $match_day; ?></span><span class="match-day"><?php echo $match_weekday; ?></span><span class="match-time"><?php echo $match_time; ?></span></p>
                                <p><?php echo $stadium; ?></p>
                            </div>
                        </div>
                        <div class="schedule-box-inner">
                            <img src="<?php echo esc_url($team1_img['url']); ?>" alt="<?php echo esc_attr($team1_img['alt']); ?>" class="team1_img">
                            <div class="match-score">
                                <p class="team1_score"><?php echo $team1_score; ?></p>
                                <p>-</p>
                                <p class="team2_score"><?php echo $team2_score; ?></p>
                            </div>
                            <img src="<?php echo esc_url($team2_img['url']); ?>" alt="<?php echo esc_attr($team2_img['alt']); ?>" class="team2_img">
							<?php if ( isset($team1_score, $team2_score) && is_numeric($team1_score) && is_numeric($team2_score) ): ?>
								<a href="<?php the_permalink(); ?>" class="btn-match-result pc">試合結果</a>
							<?php else: ?>
								<a href="<?php echo home_url(); ?>/ticket" class="btn-buy-ticket pc">チケット購入</a>
							<?php endif; ?>

                        </div>

						<?php if ( isset($team1_score, $team2_score) && is_numeric($team1_score) && is_numeric($team2_score) ): ?>
						<a href="<?php the_permalink(); ?>" class="btn-match-result sp">試合結果</a>
						<?php else: ?>
						<a href="<?php echo home_url(); ?>/ticket" class="btn-buy-ticket sp">チケット購入</a>
						<?php endif; ?>
                    </div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
					<?php endif; ?>
                </div>
				
			</div>

            <div class="schedule-sidebar pc">
                <?php
					global $wpdb;

					$years = $wpdb->get_col("
						SELECT DISTINCT YEAR(post_date)
						FROM $wpdb->posts
						WHERE post_type = 'match'
						AND post_status = 'publish'
						ORDER BY post_date DESC
					");

					foreach ($years as $year) {
						$url = home_url("/match/{$year}/");
						echo '<a href="' . esc_url($url) . '">
							<img src="' . get_template_directory_uri() . '/img/guyners/img/footer_icon_green.png">' . esc_html($year) . '年
						</a>';
					}
				?>
            </div>
			
        </div>
    </section>

<?php get_footer('guyners'); ?>

