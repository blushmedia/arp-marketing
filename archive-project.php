<?php /* Template Name: Project Listing */ ?>
<?php
/**
 * The template for displaying the Project Listing
 *
 *
 * @package arp
 */

get_header(); ?>
<div class="container-fluid background-image">
	<img src="<?php echo get_template_directory_uri(); ?>/images/background-image.jpg" alt="">
</div>
<div class="container under-construction">
	<div class="row justify-content-center text-center service">
		<div class="col-9">
			<h4>Our Projects</h4>
			<h1>Construction in Progress</h1>
		</div>
	</div>
	<div class="row justify-content-center">
		<?php
		    $loop = new WP_Query( array( 
		    'post_type' => 'project',
		    'category_name' => 'current'
			) );
		    if ( $loop->have_posts() ) :
		        while ( $loop->have_posts() ) : $loop->the_post(); ?>

		        <div class="col-md-4 col-12">
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
<div class="container-fluid completed-projects">
	<div class="container">
		<div class="row justify-content-center text-center completed-projects-title">
			<div class="col-9">
				<h4>Past Projects</h4>
				<h1>We are proud of our past projects</h1>
			</div>
		</div>

		<div class="row justify-content-center">
			<?php
			    $loop = new WP_Query( array( 
			    'post_type' => 'project',
			    'category_name' => 'past'
				) );
			    if ( $loop->have_posts() ) :
			        while ( $loop->have_posts() ) : $loop->the_post(); ?>

			        <div class="col-md-3 col-10">
			        	<div class="card">
				        	<div class="thumbnail">
					        	<a href="<?php the_permalink($post_id)?>">
					        		<?php the_post_thumbnail('large'); ?>
					        	</a>
				        	</div>
				        	<div class="project-card-info">
				        		<?php
	                    			$class = get_field('progress');
	                    			$progress = str_replace(' ', '', $class);
	                    		?>
				        		<h3><a href="<?php the_permalink($post_id); ?>"><?php the_title(); ?></a></h3>
				        		<h4><?php the_field('location'); ?></h4>
				        		<h2>Completed: <?php the_field('date_completed'); ?></h2>
				        	</div>
				        </div>
			        </div>

			<?php endwhile; ?>
			        <?php endif;
			    wp_reset_postdata();
			?>
		</div>
	</div>
</div>
<?php
get_template_part( 'template-parts/content', 'getintouch' );
?>

<?php
get_footer();