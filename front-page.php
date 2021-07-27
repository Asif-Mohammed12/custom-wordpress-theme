 <?php
 
	 get_header();

 ?>   

	<article class="content px-3 py-5 p-md-5">

	<?php

			if(have_posts()){

				while(have_posts()){
					
					the_post( );

					get_template_part( 'template-parts/content', 'front' );

				}
			}

			
	?>

<?php

query_posts(array(
   'post_type' => 'news'
)); ?>
		<?php
				while (have_posts()) : the_post(); 
				
		?>

				<div class="col mb-4">
				  <div class="card">
					<div class="card-body">
					<img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="image">
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
