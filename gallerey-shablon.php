<?php
/*
Template Name: Theme for Gallerey
*/
?>

<?php get_header(); ?>

<!-- style include -->
<style>
		.masonry-container {
			    padding: 0;
			    background-color: #2a2a2a;
			   
			}
			.grid-sizer{
			    width: 25%;
			}
			.item img{
			    max-width: 100%;
			    -webkit-filter: brightness(1) grayscale(0);
			    transition:all .4s;
			    height: 300px;
			    
			}
			.item:hover img{
			    
			    -webkit-filter: brightness(1.2) grayscale(1) blur(1px);
			    
			}
			.item{
			    padding: 0;
			    cursor: pointer;
			}


			h2 {

			    position: relative;
			    top:0px;
			    text-align: center;
			    background-color: #2a2a2a;
			    margin: 0;
			    padding: 80px 0 20px;   
			    color:#F7811A;
			    letter-spacing: 0.3em;
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
</style>


<div class="row">
	<h2>Галерея</h2>

	<div class="masonry-container">
	<!-- <div class="row"> -->

		<div class="grid-sizer"></div>

		<?php query_posts('cat=25'); if (have_posts()) : while (have_posts()) : the_post(); ?>

		
	

	<div class="col-sm-4 col-xs-4 col-md-4 item">
		<a href="<?php the_permalink(); ?>" class="itemA">

			 <?php the_content(); ?>
			<i class="fa fa-eye"></i>
		</a>
	</div>
	

	<?php endwhile; ?>
	<?php endif; ?><!-- </div> -->
	</div>
</div>
<?php get_footer(); ?>