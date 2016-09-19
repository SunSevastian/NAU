<?php get_header(); ?>
<!--	BLOG -->
<div class="row BLOG">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="kontent" style="min-height:300px;">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<section>

						<div class="title_blog clearfix">
							<p class="title_forsection">
								<a href="<?php the_permalink();?>
									">
									<?php the_title(); ?></a>

							</p>

						</div>
						<div class="bla">
							<div class="col-md-12">
							<?php the_content('Далее'); ?>
								</div>
								
								
						</div>
						<a  href="//vpu.nau.edu.ua#bloge40k" class="bac40k">Повернутися назад</a>
					</section>

					<?php endwhile; ?>
					<?php endif; ?></div>
			</div>
			<div class="col-md-3">
				<aside>
					<div class="rozklad_block">
						<a href="<?php bloginfo("template_directory");?>
							/rozklad.html">
							<img src="<?php bloginfo("template_directory");?>/images/roz.png" alt=""></a>
						<a href="<?php bloginfo("template_directory");?>/rozklad.html">1 Курс</a>
						<a href="<?php bloginfo("template_directory");?>/rozklad.html">2 Курс</a>
						<a href="<?php bloginfo("template_directory");?>/rozklad.html">3 Курс</a>
					</div>

					<div class="novunu_block">
						<a href="#">
							<img src="<?php bloginfo("template_directory");?>/images/novunu.png" alt=""></a>
					</div>

					<div class="gallery_block">
						<a href="<?php bloginfo("template_directory");?>
							/gallery.html">
							<img src="<?php bloginfo("template_directory");?>/images/gallery.png" alt=""></a>

					</div>

					<div class="video_block">
						<a href="#">
							<img src="<?php bloginfo("template_directory");?>/images/video.png" alt=""></a>
						<div class="video_post">
							<iframe src="https://www.youtube.com/embed/rQvsFHDBngg" frameborder="0" allowfullscreen></iframe>
							<p>Назва Відео</p>
							<a href="#">Наступне</a>
							<a href="#">Відеоархів</a>
						</div>

					</div>

				</aside>
			</div>
		</div>
	</div>
</div>

<!--Polosa Belaya-->

<?php get_footer(); ?>