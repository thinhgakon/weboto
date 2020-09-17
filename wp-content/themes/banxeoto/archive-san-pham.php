<?php get_header(); ?>
</div>
<!-- end lh-header -->
<div class="module-product">
	<div class="container">
		<div class="bread-crumb">
			<a href="<?php bloginfo('url'); ?>">Trang chủ</a>
			<span class="dot">/</span>
			<span class="name">Sản phẩm</span>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<!-- Get post mặt định -->
			<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');  ?>
					<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
						<div class="bg">
							<div class="img-height">
								<a class="img" href="<?php the_permalink(); ?>">
									<img style="height: 300px;" class="img-fluid lh2-img" src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>">
								</a>
							</div>
							<div class="info-product">
								<a class="name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> <?php the_field('gia_tien'); ?></p>
								<p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b><?php the_field('cho_ngoi'); ?> Chổ</p>
								<p><b><i class="fas fa-car"></i>Thương hiệu:</b> <?php the_field('thuong_hieu'); ?></p>
							</div>
						</div>
					</div>
				<?php endwhile; else : ?>
				<p>Sản phẩm đang được cập nhật</p>
			<?php endif; ?>
			<!-- end item -->
			
		</div>
		<div class="lh2-pagging col-12">
				<ul class="pagination">
					<li class="page-item">
						<?php
							global $wp_query;
							$big = 999999999;
							echo paginate_links( array(
								'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'format' => '?paged=%#%',
								'prev_text'    => __('<i class="fas fa-step-backward"></i>'),
								'next_text'    => __('<i class="fas fa-step-forward"></i>'),
								'current' => max( 1, get_query_var('paged') ),
								'total' => $wp_query->max_num_pages,
							) );
							?>
					</li>
				</ul>
			</div>
	</div>
</div>
<?php get_footer(); ?>