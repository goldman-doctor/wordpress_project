<?php get_header('guyners'); ?>

<section class="sub_fv">
	<h3 class="sec_title_white">TEAM MEMBERS</h3>
	<p class="sec_subtitle_white">監督・コーチ・トレーナー</p>
</section>

<section class='breadcrumb'>
	<a href="<?php echo home_url(); ?>">TOP</a>
	<p class='breadcrumb-arrow'>></p>
	<p>監督・コーチ・トレーナー</p>
</section>

<section class="members-contents">
	<div class="members-anchor">
		<a href="<?php echo home_url(); ?>/members" class="noselect">選手</a>
		<a href="<?php echo home_url(); ?>/member_coaches" class="select">監督・コーチ・トレーナー</a>
		<a href="<?php echo home_url(); ?>/member_gaina" class="noselect">ガイナくん</a>
	</div>

	<div class="members-contents-inner">
		<div class="members-inner-box">
			<div class="members-caption">
				<h3 class="sec_title_green">TEAM MANAGER</h3>
				<p class="sec_subtitle_green">監督</p>
			</div>
			<div class="members-intro-boxes">
				
				<?php 
					$args = array(
						'post_type' => 'coach',
						'post_status' => 'publish',
						'orderby' => 'date',
						'order' => 'ASC',
						'posts_per_page' => -1,
						'tax_query' => array(
							array(
								'taxonomy' => 'coach_category',
								'field'    => 'slug',
								'terms'    => 'team_manager', 
							),
						),
					);
					$post_query = new WP_Query( $args );

				?>
				<?php if ( $post_query->have_posts() ) : ?>
				<?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
				<?php
					$coach_img = get_field('coach_img');
				?>
				<a href="<?php the_permalink(); ?>">
					<img src="<?php echo esc_url($coach_img['url']); ?>" alt="<?php echo esc_attr($coach_img['alt']); ?>">
				</a>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>

		<div class="members-inner-box">
			<div class="members-caption">
				<h3 class="sec_title_green">COACH</h3>
				<p class="sec_subtitle_green">コーチ</p>
			</div>
			<div class="members-intro-boxes">
				
				<?php 
					$args = array(
						'post_type' => 'coach',
						'post_status' => 'publish',
						'orderby' => 'date',
						'order' => 'ASC',
						'posts_per_page' => -1,
						'tax_query' => array(
							array(
								'taxonomy' => 'coach_category',
								'field'    => 'slug',
								'terms'    => 'coach', 
							),
						),
					);
					$post_query = new WP_Query( $args );
				?>
				<?php if ( $post_query->have_posts() ) : ?>
				<?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
				<?php
					$coach_img = get_field('coach_img');
				?>
				<a href="<?php the_permalink(); ?>">
					<img src="<?php echo esc_url($coach_img['url']); ?>" alt="<?php echo esc_attr($coach_img['alt']); ?>">
				</a>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>

		<div class="members-inner-box">
			<div class="members-caption">
				<h3 class="sec_title_green">TRAINER</h3>
				<p class="sec_subtitle_green">トレーナー</p>
			</div>
			<div class="members-intro-boxes">
				
				<?php 
					$args = array(
						'post_type' => 'coach',
						'post_status' => 'publish',
						'orderby' => 'date',
						'order' => 'ASC',
						'posts_per_page' => -1,
						'tax_query' => array(
							array(
								'taxonomy' => 'coach_category',
								'field'    => 'slug',
								'terms'    => 'trainer', 
							),
						),
					);
					$post_query = new WP_Query( $args );
				?>
				<?php if ( $post_query->have_posts() ) : ?>
				<?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
				<?php
					$coach_img = get_field('coach_img');
				?>
				<a href="<?php the_permalink(); ?>">
					<img src="<?php echo esc_url($coach_img['url']); ?>" alt="<?php echo esc_attr($coach_img['alt']); ?>">
				</a>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>

		<div class="members-inner-box">
			<div class="members-caption">
				<h3 class="sec_title_green">TEAM DOCTOR</h3>
				<p class="sec_subtitle_green">チームドクター</p>
			</div>
			<div class="members-intro-boxes">

				<?php 
					$args = array(
						'post_type' => 'coach',
						'post_status' => 'publish',
						'orderby' => 'date',
						'order' => 'ASC',
						'posts_per_page' => -1,
						'tax_query' => array(
							array(
								'taxonomy' => 'coach_category',
								'field'    => 'slug',
								'terms'    => 'team_doctor', 
							),
						),
					);
					$post_query = new WP_Query( $args );
				?>
				<?php if ( $post_query->have_posts() ) : ?>
				<?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
				<?php
					$coach_img = get_field('coach_img');
				?>
				<a href="<?php the_permalink(); ?>">
					<img src="<?php echo esc_url($coach_img['url']); ?>" alt="<?php echo esc_attr($coach_img['alt']); ?>">
				</a>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>

	</div>
</section>
<?php get_footer('guyners'); ?>