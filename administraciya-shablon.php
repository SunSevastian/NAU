<?php
/*
Template Name: Theme for Administration
*/
?>

<?php get_header(); ?>

<!-- style include -->
	<style type="text/css">

	   h2 { 
	    position: relative;
	    top:0px;
	    text-align: center;
	    background-color: #ffffff;
	    margin: 0;
	    padding: 20px;   
	    color:#adadad;
	    letter-spacing: 0.3em;
	    margin-bottom: 50px;
	    padding-top: 80px;
	   }
	   h2 {
	    
	    position: relative;
	    top:0px;
	    text-align: center;
	    background-color: #ffffff;
	    margin: 0;
	    padding: 20px;   
	    color:#adadad;
	    letter-spacing: 0.3em;
	    margin-bottom: 50px;
	    padding-top: 80px;
	}
	.item i{
	    position: absolute;
	    top:50%;
	    left:46.5%;
	    color:#F7811A;
	    font-size: 30px;
	    opacity: 0;
	    transition:all .4s;
	    transform: scale(0);
	}
	.item:hover i{
	    opacity: 1;
	    transform: scale(1);
	    
	}

	.admin_block {
	    max-height: 500px;
	}

	.admin_block img {
	    width: 85%;
	    max-height: 300px;
	}
	h3{
	    position: relative;
	    background-color: #2a6f88;
	    text-align: center;
	    margin: 0;
	    padding: ;   
	    color:#e5edfa;
	    font-size: 1.5em;
	    letter-spacing: 0.1em;
	    
	}
	.info_adm span{
	    padding-left: 80px;
	    display: block;
	    
	}
	.info_adm .osebe{
	    padding-left: 0;
	}
	.info_adm .oput:before{
	    content: 'Посада:';
	    color: #478db9;
	    position: absolute;
	    left: 15px;
	}
	.info_adm{
	    position: relative;
	}
	.info_adm .contact:before{
	    content: 'Контакт:';
	    color: #478db9;
	    position: absolute;
	    left: 15px;
	}
	.about_administraciya {
	    margin-bottom: 50px;
	}
	.post-meta{
		padding: 0;
	}
	.post-meta li{
		display: block;
		margin-bottom: 3px;
	}
	.info_adm .post-meta-key{
		padding: 0;
		display: inline;
		color:#478db9;
		margin-right: 6px;
	}
  </style>


<div class="row">
	<h2>Адміністрація</h2>
</div>

<div class="conteiner">
	
	<?php query_posts('cat=22'); if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="row about_administraciya">
		<div class="col-md-3 col-sm-6 col-xs-12 admin_block">
			<?php the_post_thumbnail(); ?></div>
		<div class="col-md-9 col-sm-6 col-xs-12 info_adm">

			<h3>
				<?php the_title(); ?></h3>

			<span class="osebe">
				<p>
					<?php the_content(); ?>
				</p>
			</span>
			<?php the_meta(); ?>
			

		</div>
		</div>

	<?php endwhile; ?>
	<?php endif; ?>
</div>
<?php get_footer(); ?>