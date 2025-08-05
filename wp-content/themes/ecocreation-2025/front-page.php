<?php get_header('guyners'); ?>


<section class="top-banner">
	 <?php 
		$args = array(
			'post_type' => 'fv_slide_img',
			'post_status' => 'publish',
			'orderby' => 'date',
			'order' => 'ASC',
			'posts_per_page' => -1
		);
		$post_query = new WP_Query( $args );
	?>

	<?php if ( $post_query->have_posts() ) : ?>
        <div class="fv-boxes">
			<?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
			<?php
				$image_pc = get_field('fv_pc_img');
				$image_sp = get_field('fv_sp_img');
				if ($image_pc || $image_sp):
			?>
            <div class="fv-box">
                <img src="<?php echo esc_url($image_pc['url']); ?>" alt="<?php echo esc_attr($image_pc['alt']); ?>" class="pc">
				<img src="<?php echo esc_url($image_sp['url']); ?>" alt="<?php echo esc_attr($image_sp['alt']); ?>" class="sp">
            </div>
			<?php endif; ?>
			<?php endwhile; ?>
		
		<?php wp_reset_postdata(); ?>
            
        </div>
	<?php endif; ?>
        <a href="<?php echo home_url(); ?>/ticket" class="buy-ticket-banner">
            <img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/fv_ticket.png" alt="fv_ticket" class="fv_ticket">
        </a>
    </section>

	<section class="subpages">
		<div class="subpages-caption">
			<h6>MESSAGE FROM THE MANAGER</h6>
			<div class="recruit-box-caption">
				<h4>首脳陣より</h4>
				<div class="dec"></div>
			</div>
		</div>
		<div class="subpages-content">
			<img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/about_message.png" alt="about_message">
			<h3 class="subpages-subcaption">#76 熊野 輝光監督</h3>
			<p>私たちは「今ある力」を全力でぶつけるだけでなく、「これからの力」を育てるチームでありたいと思っています。選手一人ひとりが成長の階段を着実に上がり、NPBという大きな舞台に羽ばたいていけるよう、日々の練習や試合に全力で取り組んでいます。<br><br>ファンの皆さまには、勝ち負けだけでなく、選手たちが苦しみながらも前を向いて進んでいく姿にも注目していただきたいと思っています。地域に根ざし、皆さまと喜びを分かち合えるチームであり続けるために、私たちは挑戦をやめません。<br><br>選手のご家族の皆さまには、大切なお子さまが夢に向かって真剣に野球と向き合い、日々成長していることをどうか誇りに思っていただきたいです。私たちスタッフも、全力で選手の背中を押してまいります。<br><br>スカウト・関係者の皆さまにおかれましては、ここ香川に、未来のプロ野球を支える力があります。技術・人間性ともに高いレベルを追求し、どこに出しても恥ずかしくない選手を育て上げてまいります。<br><br>そして、これからこのチームを目指す皆さん。香川オリーブガイナーズは「本気でプロを目指せる場所」です。甘くはありません。ですが、本気で野球に取り組む仲間と、自分の限界を超えようとする日々の中で、必ず何かを掴めるはずです。<br><br>チームとして、そして一人の指導者として、「このチームで良かった」と思ってもらえるよう、熱いシーズンを積み重ねていきます。。<br><br>今後とも、香川オリーブガイナーズをどうぞよろしくお願いいたします。</p>
<!-- 			<a href="<?php echo home_url(); ?>#contact" class="list-btn-green">お問い合わせはこちら</a> -->
		</div>
	</section>

    <section class="schedule">
        <h3 class="sec_title_white">GAME SCHEDULE</h3>
        <p class="sec_subtitle_white">試合情報</p>
        <div class="schedule-boxes pc">
			
			<?php 
				$args = array(
					'post_type'      => 'match',
					'post_status'    => 'publish',
					'orderby'        => 'date',
					'order'          => 'DESC', 
					'posts_per_page' => -1       
				);
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
			
            <div class="schedule-box ">
                <div class="schedule-box-title">
                    <div class="schedule-box-caption">
                        <h6>HOME</h6>
                    </div>
                    <div class="schedule-box-date">
                        <p><span class="match-date"><?php echo $match_day; ?></span><span class="match-day"><?php echo $match_weekday; ?></span><span class="match-time"><?php echo $match_time; ?></span><?php echo $stadium; ?></p>
                    </div>
                </div>
                <div class="schedule-box-inner">
                     <img src="<?php echo esc_url($team1_img['url']); ?>" alt="<?php echo esc_attr($team1_img['alt']); ?>" class="team1_img">
                    <p>VS<br><?php echo $team2_name; ?></p>
                     <img src="<?php echo esc_url($team2_img['url']); ?>" alt="<?php echo esc_attr($team2_img['alt']); ?>" class="team2_img">
                </div>

				<?php if ( isset($team1_score, $team2_score) && is_numeric($team1_score) && is_numeric($team2_score) ): ?>
				<a href="<?php the_permalink(); ?>" class="btn-match-result">試合結果</a>
				<?php else: ?>
				<a href="<?php echo home_url(); ?>/ticket" class="btn-buy-ticket">チケット購入</a>
				<?php endif; ?>
            </div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>
            
        </div>

        <div class="schedule-boxes sp">
			
			<?php 
				$args = array(
					'post_type'      => 'match',
					'post_status'    => 'publish',
					'orderby'        => 'date',
					'order'          => 'DESC', 
					'posts_per_page' => 6       
				);
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
                        <p><?php echo $stadium; ?></p>
                    </div>
                </div>
                <div class="schedule-box-inner">
                    <div class="schedule-box-txt">
                        <p><span class="match-date"><?php echo $match_day; ?></span><span class="match-day"><?php echo $match_weekday; ?></span><span class="match-time"><?php echo $match_time; ?></span></p>
                        <p class="match-name">VS<br><?php echo $team2_name; ?></p>
						<?php if ( $team1_score && $team2_score ): ?>
							<a href="<?php the_permalink(); ?>" class="btn-match-result">試合結果</a>
						<?php else: ?>
							<a href="<?php echo home_url(); ?>/ticket" class="btn-buy-ticket">チケット購入</a>
						<?php endif; ?>

                    </div>
                    <img src="<?php echo esc_url($team2_img['url']); ?>" alt="<?php echo esc_attr($team2_img['alt']); ?>">
                </div>
            </div>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>
            
        </div>
        <a href="<?php echo home_url(); ?>/schedule" class="list-btn-white">全試合日程</a>
    </section>

    <section class="information">
        <h3 class="sec_title_green">INFORMATION</h3>
        <p class="sec_subtitle_green">お知らせ</p>
          <?php 

            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          
           if(! empty($_GET['pag']) && is_numeric($_GET['pag']) ){
                $paged = $_GET['pag'];
            }
            else{
                $paged = 1;
            }
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 6,
                    'paged' => $paged,
                    'orderby' => 'date',


                );
                $post_query = new WP_Query( $args );
        ?>
        <?php if ( $post_query -> have_posts() ) : ?>
        <div class="information-boxes">
            <?php       
               
               while ( $post_query -> have_posts() ) : 
               $post_query -> the_post(); 
                  
            ?>
            <a href="<?php echo get_the_permalink() ?>" class="information-box">
                <?php
                    $categories = get_the_category();
                    if (!empty($categories)) {
                        $cat_name = $categories[0]->name;

                        if ($cat_name === '試合結果') {
                            $class = 'cat_1';
                        } elseif ($cat_name === 'プレスリリース') {
                            $class = 'cat_2';
                        } else {
                            $class = 'cat_default';
                        }

                        echo '<p class="pc ' . esc_attr($class) . '">' . esc_html($cat_name) . '</p>';
                    }
                ?>

                <p class="post_date pc"><?php echo get_the_date('Y.n.j'); ?></p>
                <p class="post_date sp"><?php echo get_the_date('Y.n.j'); ?></p>
                <?php
                    $categories = get_the_category();
                    if (!empty($categories)) {
                        $cat_name = $categories[0]->name;

                        if ($cat_name === '試合結果') {
                            $class = 'cat_1';
                        } elseif ($cat_name === 'プレスリリース') {
                            $class = 'cat_2';
                        } else {
                            $class = 'cat_default';
                        }

                        echo '<p class="sp ' . esc_attr($class) . '">' . esc_html($cat_name) . '</p>';
                    }
                ?>
                <p class="post_title"><?php the_title(); ?></p>
            </a>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
        <a href="<?php echo home_url(); ?>/information" class="list-btn-green">お知らせ一覧</a>
    </section>

<!--     <section class="members">
        <h3 class="sec_title_white">TEAM MEMBERS</h3>
        <p class="sec_subtitle_white">選手紹介</p>
		
		<?php 
			$args = array(
				'post_type' => 'member',
				'post_status' => 'publish',
				'orderby' => 'date',
				'order' => 'ASC',
				'posts_per_page' => -1,
				'tax_query' => array(
					array(
						'taxonomy' => 'member_category',
						'field'    => 'slug',
						'terms'    => 'pitcher', 
					),
				),
			);
			$post_query = new WP_Query( $args );
		?>

		<?php if ( $post_query->have_posts() ) : ?>

        <div class="members-boxes">
			
			<?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
			<?php
				$image = get_field('player_img');
				if ($image):
			?>
            <div class="members-box">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                </a>
            </div>
			<?php endif; ?>
			<?php endwhile; ?>
		
		<?php wp_reset_postdata(); ?>
            
        </div>
		
        <a href="<?php echo home_url(); ?>/members" class="list-btn-white">選手一覧</a>
    </section> -->
	<?php endif; ?>
<!--    <section class="access">
        <h3 class="sec_title_green">ACCESS</h3>
        <p class="sec_subtitle_green">アクセス</p>
        <div class="access-inner">
            <div class="tabs">
                <ul class="tabs-nav">
                    <li><a href="#tab-1">レクザムスタジアム<br>（香川県営野球場）</a></li>
                    <li><a href="#tab-2">レクザムボールパーク丸亀<br>（丸亀市民球場）</a></li>
                    <li><a href="#tab-3">さぬき市志度<br>総合運動公園野球場</a></li>
                    <li><a href="#tab-4">観音寺市総合運動公園<br></a></li>
                </ul>
                <div class="tabs-stage">
                    <section id="tab-1">
                        <div class="stadum-content">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/stadium.png" alt="stadium">
                            <div class="stadium-address">
                                <p><img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/icon_map.png">香川県高松市生島町614 香川県総合運動公園内</p><br>
                                <p>琴電高松築港駅前バスターミナルからコトデンバス下笠居（弓弦羽行）バス乗車30分、<br>「総合運動公園前（小阪）」バス停下車</p><br>
                                <a href="<?php echo home_url(); ?>/about/about_facility#tab-1" class="btn-match-result pc">球場詳細</a>
                            </div>
                        </div>
                        <div class="stadium-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3293.4209024418446!2d133.9581104754439!3d34.36521360114032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3553e88d42d1383b%3A0x320f962b13992529!2z6aaZ5bed55yM57eP5ZCI6YGL5YuV5YWs5ZyS!5e0!3m2!1sja!2sjp!4v1749462860287!5m2!1sja!2sjp" width="990" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <a href="<?php echo home_url(); ?>/about/about_facility#tab-1" class="btn-match-result sp">球場詳細</a>
                    </section>
                    <section id="tab-2">
                        <div class="stadum-content">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/stadium_1.png" alt="stadium">
                            <div class="stadium-address">
                                <p><img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/icon_map.png">香川県丸亀市金倉町975番地</p><br>
                                <p>善通寺ICより車で約5分<br>JR丸亀駅より車で約10分<br>坂出ICより車で約15分</p><br>
                                <a href="<?php echo home_url(); ?>/about/about_facility#tab-2" class="btn-match-result pc">球場詳細</a>
                            </div>
                        </div>
                        <div class="stadium-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3297.288950075119!2d133.7827186754397!3d34.266683206377394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x355162a5cbeaa17f%3A0x2a81a71d06ef788e!2z44CSNzYzLTAwNTMg6aaZ5bed55yM5Li45LqA5biC6YeR5YCJ55S677yZ77yX77yV!5e0!3m2!1sja!2sjp!4v1749463300265!5m2!1sja!2sjp" width="990" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <a href="<?php echo home_url(); ?>/about/about_facility#tab-2" class="btn-match-result sp">球場詳細</a>
                    </section>
                    <section id="tab-3">
                        <div class="stadum-content">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/stadium_2.png" alt="stadium">
                            <div class="stadium-address">
                                <p><img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/icon_map.png">香川県さぬき市鴨庄4305</p><br>
                                <p>JR志度駅より車で5分</p><br>
                                <a href="<?php echo home_url(); ?>/about/about_facility#tab-3" class="btn-match-result pc">球場詳細</a>
                            </div>
                        </div>
                        <div class="stadium-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3294.9395864640346!2d134.19001537544233!3d34.3265579031965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x355391a1a998a7d7%3A0xb03c0546124adcfd!2z44CSNzY5LTIxMDIg6aaZ5bed55yM44GV44Gs44GN5biC6bSo5bqE77yU77yT77yQ77yV!5e0!3m2!1sja!2sjp!4v1749463407832!5m2!1sja!2sjp" width="990" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <a href="<?php echo home_url(); ?>/about/about_facility#tab-3" class="btn-match-result sp">球場詳細</a>
                    </section>
                    <section id="tab-4">
                        <div class="stadum-content">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/stadium_3.png" alt="stadium">
                            <div class="stadium-address">
                                <p><img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/icon_map.png">香川県観音寺市池之尻町1071</p><br>
                                <p>JR観音寺駅より車で5分</p><br>
                                <a href="<?php echo home_url(); ?>/about/about_facility#tab-4" class="btn-match-result pc">球場詳細</a>
                            </div>
                        </div>
                        <div class="stadium-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3303.409170345283!2d133.68318037543318!3d34.110273214664446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x355183baadd28047%3A0x5cfd2204f09b0156!2z44CSNzY4LTAwMzEg6aaZ5bed55yM6Kaz6Z-z5a-65biC5rGg5LmL5bC755S677yR77yQ77yX77yR!5e0!3m2!1sja!2sjp!4v1749463442153!5m2!1sja!2sjp" width="990" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <a href="<?php echo home_url(); ?>/about/about_facility#tab-4" class="btn-match-result sp">球場詳細</a>
                    </section>
                </div>
            </div>
        </div>
        <a href="<?php echo home_url(); ?>/about" class="list-btn-green">私たちについて</a>
    </section> -->

<!--     <section class="intro">
        <a href="<?php echo home_url(); ?>/ticket">
            <img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/intro_1.png" alt="intro_1">
        </a>
        <a href="<?php echo home_url(); ?>/recruits">
            <img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/intro_2.png" alt="intro_2">
        </a>
    </section> -->

<!--     <section class="goods">
        <h3 class="sec_title_white">GOODS</h3>
        <p class="sec_subtitle_white">グッズ</p>
        <div class="goods-inner">
            <a href="https://kagawa.official.ec">
                <img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/goods.png" alt="goods">
            </a>
        </div>
    </section> -->

    <section class="contact" id='contact'>
        <h3 class="sec_title_green">CONTACT</h3>
        <p class="sec_subtitle_green">お問い合わせ</p>
        <div class="contact-txt">
<p>香川オリーブガイナーズに関するご意見・お問い合わせは、下記のお問い合わせフォームよりご送信ください。<br>お問い合わせの内容により、返事に日数を要する場合もございますが、ご了解いただけますよう、お願い申し上げます。<br>なお、うまく送信いただけない場合は、<br class="sp">info-og@oliveguyners.com まで直接メールにてお問い合わせ下さい。</p>
        </div>
		
		<?php echo do_shortcode('[contact-form-7 id="55e975f" title="contact"]'); ?>

		<div id="confirmation-modal" class="cf7-modal">
			<div class="modal-content">
				<h3>お問い合わせ内容確認</h3>
				<ul>
					<li><strong>お名前</strong> <span id="cf_name"></span></li>
					<li><strong>フリガナ</strong> <span id="cf_kana"></span></li>
					<li><strong>住所</strong> <span id="cf_address"></span></li>
					<li><strong>電話番号</strong> <span id="cf_tel"></span></li>
					<li><strong>FAX番号</strong> <span id="cf_fax"></span></li>
					<li><strong>メールアドレス</strong> <span id="cf_email"></span></li>
					<li><strong>お問い合わせ内容</strong><br><span id="cf_message"></span></li>
				</ul>
				<div class="modal-buttons">
					<button id="cf-edit" class="list-btn-green">修正する</button>
					<button id="cf-submit" class="list-btn-green">送信する</button>
				</div>
			</div>
		</div>

		<!-- Thank You -->
		<div id="cf7-success-modal" class="cf7-modal">
			<div class="cf7-modal-content">
				<img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/icon_msg.png" alt="icon_msg">
				<p>送信が完了しました、<br>記載いただいたメールアドレス宛てに確認メールを送付しております。</p>
				<button id="cf7-modal-close" class="list-btn-green">トップページに戻る</button>
			</div>
		</div>	
        
    </section>

    <section class="sponsors">
        <h3 class="sec_title_green">OFFICIAL SPONSOR</h3>
        <p class="sec_subtitle_green">オフィシャルスポンサー</p>
        <p class="sponsors-time">2024年1月1日現在（敬称略）</p>
		
        <?php 
			$args = array(
				'post_type' => 'sponsor',
				'post_status' => 'publish',
				'orderby' => 'menu_order',
				'order' => 'ASC',
				'posts_per_page' => -1
			);
			$post_query = new WP_Query( $args );
		?>

		<?php if ( $post_query->have_posts() ) : ?>
			<div class="sponsors-boxes">
				
					<?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
					<?php
						$sponsor_url = get_field('sponsor_url');
						$link = $sponsor_url ? $sponsor_url : '#';

						$image = get_field('sponsor_img');
						if ($image):
					?>
					<a href="<?php echo esc_url($link); ?>" target="_blank">
						<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
					</a>
					<?php endif; ?>
					<?php endwhile; ?>
				
				<?php wp_reset_postdata(); ?>
			</div>
		<?php endif; ?>
    </section>

     <section class="suppliers">
        <h3 class="sec_title_green">OFFICIAL SUPPLIER</h3>
        <p class="sec_subtitle_green">オフィシャルサプライヤー</p>
        <p class="suppliers-time">2024年1月1日現在（敬称略）</p>
        <?php 
			$args = array(
				'post_type' => 'supplier',
				'post_status' => 'publish',
				'orderby' => 'menu_order',
				'order' => 'ASC',
				'posts_per_page' => -1
			);
			$post_query = new WP_Query( $args );
		?>

		<?php if ( $post_query->have_posts() ) : ?>
			<div class="suppliers-box">
				
					<?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
					<?php
						$supplier_url = get_field('supplier_url');
						$link = $supplier_url ? $supplier_url : '#';

						$image = get_field('supplier_img');
						if ($image):
					?>
					<a href="<?php echo esc_url($link); ?>" target="_blank">
						<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
					</a>
					<?php endif; ?>
					<?php endwhile; ?>
						
				<?php wp_reset_postdata(); ?>
			</div>
		<?php endif; ?>
    </section>

<?php get_footer('guyners'); ?>