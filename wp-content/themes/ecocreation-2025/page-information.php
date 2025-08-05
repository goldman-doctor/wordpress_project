<?php get_header('guyners'); ?>

    <section class="sub_fv">
        <h3 class="sec_title_white">INFORMATION</h3>
        <p class="sec_subtitle_white">お知らせ</p>
    </section>

    <section class='breadcrumb'>
        <a href="<?php echo home_url(); ?>">TOP</a>
        <p class='breadcrumb-arrow'>></p>
        <p>お知らせ</p>
    </section>

    <section class="information-list">
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

                        if ($cat_name === 'プレスリリース') {
                            $class = 'cat_1';
                        } elseif ($cat_name === 'ニュース') {
                            $class = 'cat_2';
                        } else {
                            $class = 'cat_default';
                        }

                        echo '<p class=" ' . esc_attr($class) . '">' . esc_html($cat_name) . '</p>';
                    }
                ?>

                <p class="post_date"><?php echo get_the_date('Y.n.j'); ?></p>
                <p class="post_title"><?php the_title(); ?></p>
            </a>
            <?php endwhile; ?>
            
       <?php endif; ?>
			
		<?php
			$total_pages = $post_query->max_num_pages;

			if ($total_pages > 1) {
				$current_page = max(1, $paged);

				echo '<div class="pagination">';


				if ($current_page > 1) {
					$prev_page = $current_page - 1;
					echo '<a href="' . esc_url(add_query_arg('pag', $prev_page)) . '" class="page-btn start"></a>';
				} else {
					echo '<a class="page-btn start disabled"></a>';
				}

				$pagination_args = array(
					'base' => add_query_arg('pag', '%#%'),
					'format' => '',
					'current' => $current_page,
					'total' => $total_pages,
					'mid_size' => 2,
					'type' => 'array',
				);

				$pagination_links = paginate_links($pagination_args);

				foreach ($pagination_links as $link) {
					if (strpos($link, 'current') !== false) {
						$link = str_replace('page-numbers', 'page-btn active', $link);
					} else {
						$link = str_replace('page-numbers', 'page-btn', $link);
					}
					echo $link;
				}

				if ($current_page < $total_pages) {
					$next_page = $current_page + 1;
					echo '<a href="' . esc_url(add_query_arg('pag', $next_page)) . '" class="page-btn end"></a>';
				} else {
					echo '<a class="page-btn end disabled"></a>';
				}

				echo '</div>';
			}
		?>

        </div>
        <div class="information-sidebar pc">
            <div class="category-sidebar">
				<h5>CATEGORY</h5>
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

    </section>

<?php get_footer('guyners'); ?>