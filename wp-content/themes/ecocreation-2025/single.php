<?php get_header('guyners'); ?>

    <section class="sub_fv">
        <h3 class="sec_title_white">INFORMATION</h3>
        <p class="sec_subtitle_white">お知らせ</p>
    </section>
	<?php
		while ( have_posts() ) :
			the_post();
	?>
    <section class='breadcrumb'>
        <a href="<?php echo home_url(); ?>">TOP</a>
        <p class='breadcrumb-arrow'>></p>
        <a href="<?php echo home_url(); ?>/information">お知らせ</a>
        <p class='breadcrumb-arrow'>></p>
        <p><?php the_title(); ?></p>
    </section>



	<article class="post-article">
		
		<div class="category-sidebar sp">
			<h5>CATEGORY</h5>
			<div class='category-list'>

				<?php
				$categories = get_categories([
					'orderby' => 'name',
					'order'   => 'ASC',
					'exclude' => get_cat_ID('Uncategorized') 
				]);

				foreach ($categories as $category) {
					$category_link = get_category_link($category->term_id);
				?>
				<a href="<?php echo esc_url($category_link); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/footer_icon_green.png" alt="footer_icon_green">
					<?php echo esc_html($category->name); ?>
				</a>
				<?php
				}
				?>

			</div>
		</div>

		<div class="archive-sidebar sp">
			<h5>ARCHIVE</h5>
			<div class=archive-list>
				<?php
				$archives = wp_get_archives([
					'type' => 'yearly',
					'format' => 'custom',
					'echo' => 0
				]);

				$archives = preg_replace_callback('/<a href="([^"]+)">([^<]+)<\/a>/', function($matches) {
					return '<a href="' . esc_url($matches[1]) . '"><img src="' . get_template_directory_uri() . '/img/guyners/img/footer_icon_green.png" >' . esc_html($matches[2]) . '</a>';
				}, $archives);

				echo $archives;
				?>
			</div>
		</div>
		
		<div class='post-inner'>			
			<div class="post-meta">
				<?php
					// Get first category
					$category = get_the_category();
					if (!empty($category)) {
						echo '<span class="post-cat">' . esc_html($category[0]->name) . '</span>';
					}
				?>
				<span class="post-date"><?php echo get_the_date('Y.n.j'); ?></span>
			</div>
			<div class='post-dec'>				
				<h1 class="post-title"><?php the_title(); ?></h1>
				<div class="dec"></div>				
			</div>

			<div class="post-content">
				<?php the_content(); ?>
			</div>			
		</div>
		
		<div class="information-sidebar pc">
            <div class="category-sidebar">
				<h5>CATEGORY</h5>
				<?php
				$categories = get_categories([
					'orderby' => 'name',
					'order'   => 'ASC',
					'exclude' => get_cat_ID('Uncategorized') // optional: hide "Uncategorized"
				]);

				foreach ($categories as $category) {
					$category_link = get_category_link($category->term_id);
					?>
					<a href="<?php echo esc_url($category_link); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/guyners/img/footer_icon_green.png" alt="footer_icon_green">
						<?php echo esc_html($category->name); ?>
					</a>
					<?php
				}
				?>
			</div>
			
			<div class="archive-sidebar">
			  <h5>ARCHIVE</h5>
			  <?php
				$archives = wp_get_archives([
				  'type' => 'yearly',
				  'format' => 'custom',
				  'echo' => 0
				]);

				$archives = preg_replace_callback('/<a href="([^"]+)">([^<]+)<\/a>/', function($matches) {
				  return '<a href="' . esc_url($matches[1]) . '"><img src="' . get_template_directory_uri() . '/img/guyners/img/footer_icon_green.png" >' . esc_html($matches[2]) . '</a>';
				}, $archives);

				echo $archives;
			  ?>
			</div>
        </div>
    </article>

<?php
endwhile; // End of the loop.
?>



<?php get_footer('guyners'); ?>
