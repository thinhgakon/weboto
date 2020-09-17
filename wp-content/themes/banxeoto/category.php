<?php get_header(); ?>
</div>
<!-- end lh-header -->
<div class="module-news">
	<div class="container">
		<div class="bread-crumb">
			<a href="<?php bloginfo('url'); ?>">Trang chủ</a>
			<span class="dot">/</span>
			<span class="name">Tin tức</span>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<!-- Get post mặt định -->
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');  ?>
						<div class="item-news">
							<div class="row">
								<div class="col-4 img">
									<a href="<?php the_permalink(); ?>">
										<img class="img-fluid lh2-img" src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>">
									</a>
								</div>
								<div class="col-8 text">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									<p><?php the_excerpt(); ?></p>
									<div class="lh2-date"><i class="fas fa-calendar-alt"></i> <?php echo get_the_date('d/m/Y'); ?></div>
								</div>
							</div>
						</div>
					<?php endwhile; else : ?>
					<p>Bài viết đang được cập nhật</p>
				<?php endif; ?>
				<!-- Get post mặt định -->		

				<?php if(paginate_links()!='') {?>
					<div class="quatrang">
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
				<?php } ?>
			</div>
			<div class="col-lg-3 d-none d-lg-block">
				<?php get_sidebar(); ?>
			</div>
		</div>

	</div>
</div>
<div class="footer-bg">
	<div class="block-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
					<p class="title">GIỚI THIỆU</p>
					<p class="caption">ABC là công ty du lịch, với nhiều năm kinh nghiệm trong việc cung cấp dịch vụ về vận tải du lịch, tư vấn và lập kế hoạch đi...</p>
					<ul class="lh2-ul">
						<li><i class="fas fa-map-marker-alt"></i> 244 Điện Biên Phủ, Q. Thanh Khê, TP Đà Nẵng</li>
						<li><i class="fas fa-phone"></i> 0905 548 836</li>
						<li><i class="fas fa-envelope"></i> Email: inb.mycar@gmail.com</li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
					<p class="title">Hỗ trợ khách hàng</p>
					<ul class="lh2-ul">
						<li><a href="">Liên hệ với chúng tôi</a></li>
						<li><a href="">Câu hỏi thường gặp</a></li>
						<li><a href="">Điều khoản và chính sách</a></li>
						<li><a href="">Chăm sóc khách hàng</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
					<p class="title">DỊCH VỤ</p>
					<ul class="lh2-ul">
						<li><a href="">Thuê xe du lịch</a></li>
						<li><a href="">Thuê xe du lịch</a></li>
						<li><a href="">Thuê xe du lịch</a></li>
					</ul>
				</div>

				<div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
					<p class="title">GỬI LIÊN HỆ</p>
					<p>Liên hệ ngay với chúng tôi để nhận được những ưu đãi mới nhất</p>
					<input type="" name="" placeholder="Nhập email của bạn">
					<button type="">Gửi</button>
					<p class="title">Kết nối</p>
					<ul class="lh2-ul share-h2">
						<li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-skype"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="block-copyright">
		<div class="container">
			<p>Copyright © 2017 BABYLON Group. All Right Reserved.</p>
		</div>
	</div>
</div>
<a class="btn-top" id="bttop" href="javascript:void(0);" title="Top" style="display: inline;"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
</div>
<!-- Javascript -->
<script src="js/tether.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.mmenu.all.js"></script>
<script src="js/slick.js"></script>
<script src="js/smoothscroll.js"></script>

<script>
	new WOW().init();
</script>
<script src="js/main.js"></script>   
</body>
</html>