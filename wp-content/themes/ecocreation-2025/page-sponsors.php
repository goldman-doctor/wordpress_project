<?php get_header('guyners'); ?>

	 <section class="sub_fv">
        <h3 class="sec_title_white">SPONSOR</h3>
        <p class="sec_subtitle_white">スポンサー</p>
    </section>

<section class='breadcrumb'>
	<a href="<?php echo home_url(); ?>">TOP</a>
	<p class='breadcrumb-arrow'>></p>
	<p>スポンサー</p>
</section>

    <section class="sponsors sub-sponsor">
        <div class="sponsor-caption">
            <h3 class="sec_title_green">OFFICIAL SPONSOR</h3>
            <p class="sec_subtitle_green">オフィシャルスポンサー</p>
        </div>
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

    <section class="suppliers  sub-supplier">
        <div class="supplier-caption">
            <h3 class="sec_title_green">OFFICIAL SUPPLIER</h3>
            <p class="sec_subtitle_green">オフィシャルサプライヤー</p>
        </div>
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