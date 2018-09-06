<?php
/**
 * Template part for displaying projects
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package arp
 */

?>
<div class="row project-widget">
	<div class="col-12 text-center">
	<h1>We are proud of our current projects</h1>
	</div>
</div>
<div class="row project-widget-card justify-content-center">
 	<?php
	    $loop = new WP_Query( array( 
	    'post_type' => 'project',
	    'category_name' => 'current',
	    'posts_per_page'   => 3
		) );
	    if ( $loop->have_posts() ) :
	        while ( $loop->have_posts() ) : $loop->the_post(); ?>

	        <div class="col-md-4 col-11 service-info-projects">
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