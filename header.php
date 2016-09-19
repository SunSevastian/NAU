<!DOCTYPE html>
<!--[if lt IE 7]>
<html lang="ru" class="lt-ie9 lt-ie8 lt-ie7">
	<![endif]-->
	<!--[if IE 7]>
	<html lang="ru" class="lt-ie9 lt-ie8">
		<![endif]-->
		<!--[if IE 8]>
		<html lang="ru" class="lt-ie9">
			<![endif]-->
			<!--[if gt IE 8]>
			<!-->
			<html lang="ru">
				<!--<![endif]-->
<head>
				<meta charset="utf-8" />
				<title><?php bloginfo('name') ?></title>
				<meta name="description" content="" />
				<meta http-equiv="X-UA-Compatible" content="IE=edge" />
				<meta name="viewport" content="width=device-width, initial-scale=1.0" />
				<link rel="shortcut icon" href="<?php bloginfo("template_directory");?>
				/favicon.png" />
				<link rel="stylesheet" href="<?php bloginfo("template_directory");?>
				/libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
				<link rel="stylesheet" href="<?php bloginfo("template_directory");?>
				/css/magnific-popup.css">
				<link rel="stylesheet" href="<?php bloginfo("template_directory");?>
				/libs/font-awesome-4.2.0/css/font-awesome.min.css" />
				<link rel="stylesheet" href="<?php bloginfo("template_directory");?>
				/libs/fancybox/jquery.fancybox.css" />
				<link rel="stylesheet" href="<?php bloginfo("template_directory");?>
				/libs/owl-carousel/owl.carousel.css" />
				<link rel="stylesheet" href="<?php bloginfo("template_directory");?>
				/libs/owl-carouselTwor/owl.carousel.css">
				<link rel="stylesheet" href="<?php bloginfo("template_directory");?>
				/libs/countdown/jquery.countdown.css" />
				<link rel="stylesheet" href="<?php bloginfo("template_directory");?>
				/css/fonts.css" />
				<link rel="stylesheet" href="<?php bloginfo("template_directory");?>
				/css/main.css" />
				<link rel="stylesheet" href="<?php bloginfo("template_directory");?>
				/css/media.css" />
				<link rel="stylesheet" href="<?php bloginfo("template_directory");?>
				/css/headhesive.css">
				<link rel="stylesheet" href="<?php bloginfo("template_directory");?>
				/css/gamburger.css">
				
				<link rel="stylesheet" href="<?php bloginfo("template_directory");?>
				/css/acordeon.css">
				<link rel="stylesheet" href="<?php bloginfo("template_directory");?>
				/fonts/arsenal/arsenal.css">
				<!-- Fuentes de Google -->
				<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

				<!-- Iconos -->
				<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
				<!-- <?php wp_head(); ?>--></head>
<body>
<?php include_once("analyticstracking.php") ?>
<?php include_once("mail.php") ?>
				<!-- <div class="container-fluid">
				-->
				<!--Polosa SinYaya-->
				<div class="callme">
					<a href="#callback" class="fixed_call fancybox"> <i class="fa fa-envelope"></i>
					</a>
				</div>
				<div class="row poloskablue"></div>

				<!--	Logo + Tekst-->
				<div class="row fonshapka">
					<div class="container">
						<div class="row ">
							<div class="col-md-2">
								<img src="<?php bloginfo("template_directory");?>/images/logo.png" alt="" class="logo"></div>

							<div class="col-md-10">
								<!--
				<h1>
								<span class="VPU">Вище професійне училище</span>
								<br>
								<span>національного авіаційного університету</span>
							</h1>
							-->
							<img src="<?php bloginfo("template_directory");?>/images/Text.png" alt="" class=textvpu></div>
					</div>
				</div>
			</div>

			<!--	Menu + Gamburger-->
			<div class="row menu">
				<div class="container">
					<div class="row">
						<div class="col-md-0"></div>
						<div class="col-md-11">
							<nav>

								<ul>
									<?php wp_nav_menu(array('theme_location' =>
									'menu', 'menu_class' =>'nav ul', 'container'=>'false')); ?>
									<!-- <li>
									<a href="http://vpu.nau.edu.ua/">Головна</a>
								</li>
								<li>
									<a href="">Новини</a>
								</li>
								<li>
									<a href="">Абітурієнту</a>
								</li>
								<li>
									<a href="">Професії</a>
								</li>
								<li>
									<a href="<?php bloginfo("template_directory");?>/administraciya.html">Адміністрація</a>
								</li>
								<li>
									<a href="">Контакти</a>
								</li>
								-->
							</ul>

						</nav>
					</div>
					<div class="col-md-1">

						<button class="c-hamburger c-hamburger--htx">
							<span>toggle menu</span>

						</button>
						<div class="hide_menu">				
							<ul id="accordion" class="accordion">
								<li>
									<div class="link">
										Про нас <i class="fa fa-chevron-down"></i>
									</div>
									
										<?php wp_nav_menu(array('theme_location' =>
									'aboutUs', 'menu_class' =>'submenu', 'container'=>'false')); ?>		
								</li>

								<li>
									<div class="link">
										Наші професії
										<i class="fa fa-chevron-down"></i>
									</div>
									
									<?php wp_nav_menu(array('theme_location' =>
									'Profession', 'menu_class' =>'submenu', 'container'=>'false')); ?>	
								</li>

								<li>
									<div class="link">
										Навчально-виробничий процес
										<i class="fa fa-chevron-down"></i>
									</div>
									
									<?php wp_nav_menu(array('theme_location' =>
									'Nav_virob_process', 'menu_class' =>'submenu', 'container'=>'false')); ?>
								</li>

								<li>
									<div class="link">
										Виховна робота
										<i class="fa fa-chevron-down"></i>
									</div>
									<?php wp_nav_menu(array('theme_location' =>
									'Vihovna_robota', 'menu_class' =>'submenu', 'container'=>'false')); ?>
								</li>
								<li>
									<div class="link">
										Методична робота
										<i class="fa fa-chevron-down"></i>
									</div>
									<?php wp_nav_menu(array('theme_location' =>
									'Metodichna_robota', 'menu_class' =>'submenu', 'container'=>'false')); ?>
								</li>
								<li>
									<div class="link">
										Учнівське самоврядування
										<i class="fa fa-chevron-down"></i>
									</div>
									<?php wp_nav_menu(array('theme_location' =>
									'Uchnivske_samovryaduvannya', 'menu_class' =>'submenu', 'container'=>'false')); ?>
								</li>
								<li>
									<div class="link">
										<a href="#" class="odinono4naya_stroka_menu">Нормативно-правова база</a>
									</div>
								</li>
								<li>
									<div class="link">
										<a href="#" class="odinono4naya_stroka_menu">Співпраця та партнерство</a>
									</div>
								</li>
								<li>
									<div class="link">
										<a href="http://vpu.nau.edu.ua/gallerey/" class="odinono4naya_stroka_menu">Фотогалерея</a>
									</div>
								</li>
								<li>
									<div class="link">
										<a href="#" class="odinono4naya_stroka_menu">Бібліотека</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>