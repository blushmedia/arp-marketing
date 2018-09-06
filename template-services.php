<?php /* Template Name: Services */ ?>
<?php
/**
 * The template for displaying ARP Services
 *
 *
 * @package arp
 */

get_header(); ?>
<div class="container-fluid background-image">
	<img src="<?php echo get_template_directory_uri(); ?>/images/background-image.jpg" alt="">
</div>
<div class="container">
	<div class="row justify-content-center text-center service">
		<div class="col-md-9 col-12">
			<h4><?php the_field('sub_title'); ?></h4>
			<h1><?php the_field('page_title'); ?></h1>
			<h2><?php the_field('sub_heading'); ?></h2>
		</div>
	</div>
	<div class="container">
	<div class="slider-service">

		  	<div class="text-center">Building & Construction</div>


		  	<div class="text-center">Civil Infrastructure</div>

		  	<div class="text-center">Project Management</div>

		  	<div class="text-center">Maintenance</div>

	</div>
	</div>
	<div class="slider-service-info container">
		 <div class="row"> <!-- Start of service -->
		 	<div class="col-12">
		 		<div class="row justify-content-center text-center service-info">
		 			<div class="col-md-9 col-12">
					 	<h1>Building & Construction</h1>
					 	<h2>Our teams bring their technical knowledge, experience, and resourcefulness to the delivery of our building and construction services.</h2>
					 </div>
			 	</div>
				
				<div class="row">
				 	<?php
					    $loop = new WP_Query( array( 
					    'post_type' => 'project',
					    'posts_per_page'   => 3
						) );
					    if ( $loop->have_posts() ) :
					        while ( $loop->have_posts() ) : $loop->the_post(); ?>

					        <div class="col-md-4 col-12 service-info-projects">
					        	<div class="card">
						        	<div class="thumbnail">
						        		<a href="<?php the_permalink($post_id)?>">
							        		<div class="overlay">
							        			<img src="<?php echo get_template_directory_uri(); ?>/images/view-icn.svg">
							        		</div>
						        		</a>
							        	<a href="<?php the_permalink($post_id)?>">
							        		<?php the_post_thumbnail('large'); ?>
							        	</a>
						        	</div>
						        	<div class="project-card-info">
						        		<?php
			                    			$class = get_field('progress');
			                    			$progress = str_replace(' ', '', $class);
			                    		?>
										<h2 class="<?php echo $progress; ?>"><?php the_field('progress') ?></h2>
						        		<h3><a href="<?php the_permalink($post_id)?>"><?php the_title() ?></a></h3>
						        		<h4><?php the_field('location'); ?></h4>
						        		<?php
								  	$post_tags = get_the_tags();
	 
									if ( $post_tags ) {
									    foreach( $post_tags as $tag ) {
									    echo "<span class='tag'>$tag->name</span>"; 
									    }
									}
								?>
						        	</div>
						        </div>
					        </div>

					<?php endwhile; ?>
					        <?php endif;
					    wp_reset_postdata();
					?>
				</div>
		 	</div>
		 </div> <!-- End of service -->
		<div class="row"> <!-- Start of service -->
		 	<div class="col-12">
		 		<div class="row justify-content-center text-center service-info">
		 			<div class="col-md-9 col-12">
					 	<h1>Civil Infrastructure</h1>
					 	<h2>Having worked closely with the City of Cape Town, among others, we are able to contribute to the sustainable development and growth of our beautiful country.</h2>
					 </div>
			 	</div>
				
				<div class="row">
				 	<?php
					    $loop = new WP_Query( array( 
					    'post_type' => 'project',
					    'posts_per_page'   => 3
						) );
					    if ( $loop->have_posts() ) :
					        while ( $loop->have_posts() ) : $loop->the_post(); ?>

					        <div class="col-md-4 col-12 service-info-projects">
					        	<div class="card">
						        	<div class="thumbnail">
						        		<a href="<?php the_permalink($post_id)?>">
							        		<div class="overlay">
							        			<img src="<?php echo get_template_directory_uri(); ?>/images/view-icn.svg">
							        		</div>
						        		</a>
							        	<a href="<?php the_permalink($post_id)?>">
							        		<?php the_post_thumbnail('large'); ?>
							        	</a>
						        	</div>
						        	<div class="project-card-info">
						        		<?php
			                    			$class = get_field('progress');
			                    			$progress = str_replace(' ', '', $class);
			                    		?>
										<h2 class="<?php echo $progress; ?>"><?php the_field('progress') ?></h2>
						        		<h3><a href="<?php the_permalink($post_id)?>"><?php the_title() ?></a></h3>
						        		<h4><?php the_field('location'); ?></h4>
						        		<?php
								  	$post_tags = get_the_tags();
	 
									if ( $post_tags ) {
									    foreach( $post_tags as $tag ) {
									    echo "<span class='tag'>$tag->name</span>"; 
									    }
									}
								?>
						        	</div>
						        </div>
					        </div>

					<?php endwhile; ?>
					        <?php endif;
					    wp_reset_postdata();
					?>
				</div>
		 	</div>
		 </div> <!-- End of service -->
		 <div class="row"> <!-- Start of service -->
		 	<div class="col-12">
		 		<div class="row justify-content-center text-center service-info">
		 			<div class="col-md-9 col-12">
					 	<h1>Project Management</h1>
					 	<h2>We ensure the successful delivery and execution of our projects from inception to handover.</h2>
					 </div>
			 	</div>
				
				<div class="row">
				 	<?php
					    $loop = new WP_Query( array( 
					    'post_type' => 'project',
					    'posts_per_page'   => 3
						) );
					    if ( $loop->have_posts() ) :
					        while ( $loop->have_posts() ) : $loop->the_post(); ?>

					        <div class="col-md-4 col-12 service-info-projects">
					        	<div class="card">
						        	<div class="thumbnail">
						        		<a href="<?php the_permalink($post_id)?>">
							        		<div class="overlay">
							        			<img src="<?php echo get_template_directory_uri(); ?>/images/view-icn.svg">
							        		</div>
						        		</a>
							        	<a href="<?php the_permalink($post_id)?>">
							        		<?php the_post_thumbnail('large'); ?>
							        	</a>
						        	</div>
						        	<div class="project-card-info">
						        		<?php
			                    			$class = get_field('progress');
			                    			$progress = str_replace(' ', '', $class);
			                    		?>
										<h2 class="<?php echo $progress; ?>"><?php the_field('progress') ?></h2>
						        		<h3><a href="<?php the_permalink($post_id)?>"><?php the_title() ?></a></h3>
						        		<h4><?php the_field('location'); ?></h4>
						        		<?php
								  	$post_tags = get_the_tags();
	 
									if ( $post_tags ) {
									    foreach( $post_tags as $tag ) {
									    echo "<span class='tag'>$tag->name</span>"; 
									    }
									}
								?>
						        	</div>
						        </div>
					        </div>

					<?php endwhile; ?>
					        <?php endif;
					    wp_reset_postdata();
					?>
				</div>
		 	</div>
		 </div> <!-- End of service -->
		 <div class="row"> <!-- Start of service -->
		 	<div class="col-12">
		 		<div class="row justify-content-center text-center service-info">
		 			<div class="col-md-9 col-12">
					 	<h1>Maintenance</h1>
					 	<h2>Specialising in residential, commercial and retail improvements, our services are varied and extensive.</h2>
					 </div>
			 	</div>
				
				<div class="row">
				 	<?php
					    $loop = new WP_Query( array( 
					    'post_type' => 'project',
					    'posts_per_page'   => 3
						) );
					    if ( $loop->have_posts() ) :
					        while ( $loop->have_posts() ) : $loop->the_post(); ?>

					        <div class="col-md-4 col-12 service-info-projects">
					        	<div class="card">
						        	<div class="thumbnail">
						        		<a href="<?php the_permalink($post_id)?>">
							        		<div class="overlay">
							        			<img src="<?php echo get_template_directory_uri(); ?>/images/view-icn.svg">
							        		</div>
						        		</a>
							        	<a href="<?php the_permalink($post_id)?>">
							        		<?php the_post_thumbnail('large'); ?>
							        	</a>
						        	</div>
						        	<div class="project-card-info">
						        		<?php
			                    			$class = get_field('progress');
			                    			$progress = str_replace(' ', '', $class);
			                    		?>
										<h2 class="<?php echo $progress; ?>"><?php the_field('progress') ?></h2>
						        		<h3><a href="<?php the_permalink($post_id)?>"><?php the_title() ?></a></h3>
						        		<h4><?php the_field('location'); ?></h4>
						        		<?php
								  	$post_tags = get_the_tags();
	 
									if ( $post_tags ) {
									    foreach( $post_tags as $tag ) {
									    echo "<span class='tag'>$tag->name</span>"; 
									    }
									}
								?>
						        	</div>
						        </div>
					        </div>

					<?php endwhile; ?>
					        <?php endif;
					    wp_reset_postdata();
					?>
				</div>
		 	</div>
		 </div> <!-- End of service -->
	</div>

</div>
<?php
get_template_part( 'template-parts/content', 'getintouch' );
?>

<?php
get_footer();