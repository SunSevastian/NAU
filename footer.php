<!--	Footer  -->
	<footer class="row">
		<div class="container">
			<div class="row">
			
				<div class="col-md-4">
					<h4>наші партнери</h4>
					<p>
						<?php wp_nav_menu(array('theme_location' =>
									'OurPartners', 'menu_class' =>'footer_ul', 'container'=>'false')); ?>	
						<!-- <span>Національний Авіаціний Університет</span><br>
						<span>Солом’янська Держадміністрація</span> -->
					</p>
				</div>
				
				<div class="col-md-4">
					<h4>ми в соцмережах</h4>
					<p>
						<?php wp_nav_menu(array('theme_location' =>
									'WeSocial', 'menu_class' =>'footer_ul', 'container'=>'false')); ?>	
					</p>
				</div>
				
				<div class="col-md-4">
					<h4>корисні посилання</h4>
					<p>
						<?php wp_nav_menu(array('theme_location' =>
									'OtherLinks', 'menu_class' =>'footer_ul', 'container'=>'false')); ?>	
					</p>
				</div>
				
				
			</div>
			<div class="row ">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="social">
					<a href="https://vk.com/club57923750"><img src="<?php bloginfo("template_directory");?>/images/vk.png" alt=""></a>
					<!-- <a href="#"><img src="<?php bloginfo("template_directory");?>/images/youtubecanal.png" alt=""></a>	 -->				
					<a href="https://www.facebook.com/VPUNAU"><img src="<?php bloginfo("template_directory");?>/images/facebook.png" alt=""></a>					
					<!-- <a href="#"><img src="<?php bloginfo("template_directory");?>/images/twitter.png" alt=""></a> -->									
				</div>
			</div>
				
			</div>
		</div>
	</footer>
	

<!-- Skrutyu Element-->
	<div class="hidden">

		<!-- FORMA -->	
		<form id="callback" class="pop_form">
			<h3>Напишіть нам</h3>
			<p>та ми неодмінно зв'яжемося з вами</p>
			<input type="text" name="name" placeholder="Ваше ім'я..." required />
			<input type="text" name="text" placeholder="Ваша пошта..." required />
			<input type="text" name="phone" placeholder="...або ваш телефон(необов'язково)"  />
			<button class="button" type="submit">Запитати</button>
		</form>

		
	</div>
	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->
     
	<script src="<?php bloginfo("template_directory");?>/js/zafix_menu.js"></script>
	<script src="<?php bloginfo("template_directory");?>/js/jquery.min.js"></script>
	<script src="<?php bloginfo("template_directory");?>/js/accordddeon.js"></script>
	<script src="<?php bloginfo("template_directory");?>/js/gamburger.js"></script>
	 <script src="<?php bloginfo("template_directory");?>/js/headhesive.min.js"></script>
	<script src="<?php bloginfo("template_directory");?>/libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="<?php bloginfo("template_directory");?>/libs/jquery-mousewheel/jquery.mousewheel.min.js"></script>
	<script src="<?php bloginfo("template_directory");?>/libs/fancybox/jquery.fancybox.pack.js"></script>
	<script src="<?php bloginfo("template_directory");?>/libs/waypoints/waypoints-1.6.2.min.js"></script>
	<script src="<?php bloginfo("template_directory");?>/libs/scrollto/jquery.scrollTo.min.js"></script>
	<script src="<?php bloginfo("template_directory");?>/libs/owl-carousel/owl.carousel.min.js"></script>
	<script src="<?php bloginfo("template_directory");?>/libs/owl-carouselTwor/owl.carouselTwor.js"></script>
	<script src="<?php bloginfo("template_directory");?>/libs/countdown/jquery.plugin.js"></script>
	<script src="<?php bloginfo("template_directory");?>/libs/countdown/jquery.countdown.min.js"></script>
	<script src="<?php bloginfo("template_directory");?>/libs/countdown/jquery.countdown-ru.js"></script>
	<script src="<?php bloginfo("template_directory");?>/libs/landing-nav/navigation.js"></script>
	
<script src="<?php bloginfo("template_directory");?>/js/jquery.magnific-popup.min.js"></script> 
    <script src="<?php bloginfo("template_directory");?>/js/common.js"></script>

    
	<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
	<!-- Google Analytics counter --><!-- /Google Analytics counter -->
	<!-- <?php wp_footer(); ?> -->
</body>
</html>