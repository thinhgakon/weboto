<?php get_header(); ?>
<?php get_template_part('slider'); ?>			

		</div>
		<!-- end lh-header -->
		<?php get_template_part('services'); ?>
		<div class="block-contact">
			<div class="container">
				<p class="lh2-title1">dỊCH VỤ CHO Bán xe DU LỊCH</p>
				<p class="caption">Cung cấp dịch vụ cho Bán xe tự lái, du lịch từ 4 đến 45 chỗ</p>
				<p class="bottom">Thủ tục nhanh gọn - Nhận xe nhanh chóng</p>
				<button class="lh3-button" type=""><span>Xem ngay</span></button>
			</div>
		</div>
		<div class="block-product">
			<div class="container">
				<p class="lh2-title"> <span>Bán xe TOYOTA</span></p>
				<div class="row">
					<!-- Get post News Query -->
					<?php $i=0; ?>
					<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=3&post_type=san-pham&danh-muc=toyota'); ?>
					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
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
									<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> 
										<?php if(get_field('gia_tien')) { the_field('gia_tien'); } else{ echo 'Liên hệ'; }   ?>
									</p>
									<p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b><?php the_field('cho_ngoi'); ?> Chổ</p>
									<p><b><i class="fas fa-car"></i>Thương hiệu:</b> <?php the_field('thuong_hieu'); ?></p>
								</div>
							</div>
						</div>
						<?php $i++; ?>
					<?php endwhile; wp_reset_postdata(); ?>
					<!-- Get post News Query -->
				</div>
			</div>
		</div>
		<!-- end block-product -->
		<div class="block-product">
			<div class="container">
				<p class="lh2-title"> <span>Bán xe Honda</span></p>
				<div class="row">
					<!-- Get post News Query -->
					<?php $i=0; ?>
					<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=3&post_type=san-pham&danh-muc=honda'); ?>
					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
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
									<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> 
										<?php if(get_field('gia_tien')) { the_field('gia_tien'); } else{ echo 'Liên hệ'; }   ?>
									</p>
									<p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b><?php the_field('cho_ngoi'); ?> Chổ</p>
									<p><b><i class="fas fa-car"></i>Thương hiệu:</b> <?php the_field('thuong_hieu'); ?></p>
								</div>
							</div>
						</div>
						<?php $i++; ?>
					<?php endwhile; wp_reset_postdata(); ?>
					<!-- Get post News Query -->

				</div>
			</div>
		</div>
		<!-- end block-product -->
		<div class="block-product">
			<div class="container">
				<p class="lh2-title">
					<span>Bán xe BMW</span>
				</p>
				<div class="row">
					<!-- Get post News Query -->
					<?php $i=0; ?>
					<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=3&post_type=san-pham&danh-muc=bmw'); ?>
					<?php global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
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
									<p class="price"> <b><i class="fas fa-tag"></i>Giá:</b> 
										<?php if(get_field('gia_tien')) { the_field('gia_tien'); } else{ echo 'Liên hệ'; }   ?>
									</p>
									<p><b><i class="fab fa-accessible-icon"></i>Số chỗ: </b><?php the_field('cho_ngoi'); ?> Chổ</p>
									<p><b><i class="fas fa-car"></i>Thương hiệu:</b> <?php the_field('thuong_hieu'); ?></p>
								</div>
							</div>
						</div>
						<?php $i++; ?>
					<?php endwhile; wp_reset_postdata(); ?>
					<!-- Get post News Query -->
				</div>
			</div>
		</div>
		<!-- end block-product -->
<?php get_footer(); ?>