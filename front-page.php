 <?php
 
	 get_header();

 ?>   
		<div class="heroImage">
				<div class="heroContents">
					<h1 class="hero-h1">Asif 2021</h1>
					<p class="hero-text">Premier Wordpress theme</p>
					<a href="#"><button class="bookButton">take a tour</button></a>
				</div>
			</div>


	<?php

			if(have_posts()){

				while(have_posts()){
					
					the_post( );

					get_template_part( 'template-parts/content', 'front' );

				}
			}

			
	?>

	


<article class="content px-3 py-5 p-md-5">

<?php

query_posts(array(
   'post_type' => 'news'
)); ?>
		<?php
				while (have_posts()) : the_post(); 
				
		?>

				<div class="col mb-4 dynmaic-news">
				  <div class="card front-news">
					<div class="card-body">
					<img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="image" style="float: left;">
					  <h5 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
					  <p class="card-text"><?php the_excerpt(); ?></p>
					</div>
				  </div>
				</div>
		<?php 
		endwhile;
?>
	

	</article>

    
<?php
	
	get_footer();

?>

