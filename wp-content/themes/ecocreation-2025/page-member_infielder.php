<?php get_header('guyners'); ?>

<section class="sub_fv">
	<h3 class="sec_title_white">TEAM MEMBERS</h3>
	<p class="sec_subtitle_white">選手紹介</p>
</section>

<section class='breadcrumb'>
	<a href="<?php echo home_url(); ?>">TOP</a>
	<p class='breadcrumb-arrow'>></p>
	<p>選手紹介</p>
	<p class='breadcrumb-arrow'>></p>
	<p>内野手</p>	
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
				<h3 class="sec_title_green">INFIELDER</h3>
				<p class="sec_subtitle_green">内野手</p>
			</div>
			<div class="members-intro-boxes">
				
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
								'terms'    => 'infielder', 
							),
						),
					);
					$post_query = new WP_Query( $args );
				?>
				<?php if ( $post_query->have_posts() ) : ?>
				<?php while ( $post_query->have_posts() ) : $post_query->the_post(); ?>
				<?php
					$player_img = get_field('player_img');
				?>
				<a href="<?php the_permalink(); ?>">
					<img src="<?php echo esc_url($player_img['url']); ?>" alt="<?php echo esc_attr($player_img['alt']); ?>">
				</a>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>



	</div>
</section>
<?php get_footer('guyners'); ?>