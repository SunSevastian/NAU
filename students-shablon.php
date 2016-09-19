<?php
/*
Template Name: Theme for Students
*/
?>

<?php get_header(); ?>

<!-- style include -->
	<style>
			


		h2 {

		    position: relative;
		    top:0px;
		    text-align: center;
		    background-color: #ffffff;
		    margin: 0;
		    padding: 100px 0 0;   
		    color:#adadad;
		    letter-spacing: 0.3em;
		    margin-bottom: 50px;
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

		.karto4ka img {
		    width: 100%;
		    height: 300px;
		  
		}
		.karto4ka p{
		    text-align: center;
		    margin: 0;
		    background-color: #0a3646;
		    font-style: italic;
		    color:#d9d9d9;
		    margin-bottom: 20px;
		}
		h3{
		    position: relative;
		    background-color: #0a3646;
		    text-align: center;
		    margin: 0;
		    padding: 0;   
		    color:#e5edfa;
		    font-size: 1em;
		    letter-spacing: 0.1em;
		    
		}
		.info_adm span{
		    padding-left: 80px;
		    display: block;
		    
		}
		.podr_descr .osebe{
		    padding-left: 0;
		}
		.podr_descr .oput:before{
		    content: 'Стаж:';
		    left:10px;
		    color: #478db9;
		    position: absolute;
		    
		}
		.podr_descr{
		    position: relative;
		}
		.podr_descr .contact:before{
		    left:10px;
		    content: 'Контакт:';
		    color: #478db9;
		    position: absolute;
		   
		}
		.about_administraciya {

		    margin-bottom: 50px;
		}
		/*.info_adm .certa:before{
		    content: '';
		    width: 250px;
		    height: 2px;
		    background-color: #aaa9a9;
		    position: absolute;
		    bottom: -25px;
		    left:15px;
		}*/
		.podr_descr {
		    background-color: #fff;
		    max-width: 500px;
		    margin: auto;
		    padding-bottom: 10px;
		}
		.podr_descr p {

		 margin-left: 100px;
		   
		}
		.osebe p{
		    margin-left: 0;
		}
		.podr_descr h3{
		   padding: 0;
		   background-color: transparent;
		   color: #3f6a90;
		   font-size: 1.2em;
		   font-weight: 600;

		}
		.podr_descr img{
		    /*width: 100%;*/
		    height: 300px;
		/*    z-index: */
		}
		/*.podr_descr p{}*/

		.podr_descr .dolznost {
		     text-align: center;
		    margin: 0;
		    margin-top: 10px;
		    font-style: italic;
		    color:#9a9a9a;
		    padding: 0;
		}
		.podr_descr p{
		    padding: 0 10px;
		}

		.post-meta{
		padding: 0;
	}
	.post-meta li{
		display: block;
		margin-bottom: 3px;
	}
	.post-meta-key{
		padding: 0;
		display: inline;
		color:#478db9;
		margin-right: 6px;
	}

	</style>

<!-- content -->
<div class="row">
	<h2>Кращі учні</h2>
</div>
<div class="conteiner">

	

	<div class="row about_administraciya">

		<?php query_posts('cat=24'); if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="col-md-3 col-sm-6 col-xs-12 karto4ka ">
			<?php the_post_thumbnail(); ?>
			<a href="#work" class="popup_content fancybox">
				<h3><?php the_title(); ?></h3>
				<!-- <p class="dolznost">Учень</p> -->
			</a>

		</div>
		<div class="hidden">
			<div class="podr_descr" id="work">
					<h3><?php the_title(); ?></h3>
					<?php the_post_thumbnail(); ?>
					<!-- <p class="dolznost">Учень</p> -->
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

	
</div>
<?php get_footer(); ?>