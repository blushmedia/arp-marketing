<?php
/**
 * The Home page template
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package arp
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="bg-pattern"></div>
			<div class="container intro">
				<div class="row">
					<div class="col-md-7">
						<h1>At AR Projects we don’t merely see bricks and blueprints; we see a structural solution to a problem, a venue that services and betters our community, or a home for a family. We work alongside you to create your vision, together every step of the way.</h1>
					</div>
					<div class="col-md-5">
						<h4>We build with the intention of exceeding our clients’ expectations while delivering finished products that stand the test of time, every time.</h4>
						<a class="btn btn-primary" href="/projects" role="button">View our latest projects</a>
					</div>
				</div>
			</div>

			<div>
				<div class="slider-for container">
				<?php
				    $loop = new WP_Query( array( 
				    'post_type' => 'project',
				    'category_name' => 'current',
				    'order' => 'ASC',
				    'posts_per_page'   => 5,
					) );
				    if ( $loop->have_posts() ) :
				        while ( $loop->have_posts() ) : $loop->the_post(); ?>
				
					 <div class="img-fluid">
					 	<?php if( get_field('before_and_after_image') ): ?>
					 		<?php the_field('before_and_after_image'); ?>
					 	<?php else: ?>				
							<img src="<?php the_post_thumbnail_url(); ?>" class="featured-img">
					 	<?php endif; ?>

					 </div>

				<?php endwhile; ?>
				        <?php endif;
				    wp_reset_postdata();
				?>

				</div>

				<div class="slider-nav container">
					<?php
				    $loop = new WP_Query( array( 
				    'post_type' => 'project',
				    'category_name' => 'current',
				    'order' => 'ASC',
				    'posts_per_page'   => 5,
					) );
				    if ( $loop->have_posts() ) :
				        while ( $loop->have_posts() ) : $loop->the_post(); ?>
					  
					  <div class="row justify-content-center">
					  	<div class="col-sm-12">
					  		<div class="row align-items-center">
							  <div class="col-md-9 col-12">
							  	<?php
                        			$class = get_field('progress');
                        			$progress = str_replace(' ', '', $class);
                        		?>
	                    		<h3 class="<?php echo $progress; ?>"><?php the_field('progress') ?></h3>
							  	<h2><?php the_title(); ?></h2>
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
							  <div class="col-md-3">
							  	<a href="<?php the_permalink($post_id)?>" class="btn btn-primary">View Project</a>
							  </div>
						    </div>
						</div>
					  </div>
					
					<?php endwhile; ?>
					        <?php endif;
					    wp_reset_postdata();
					?>
				</div>
			</div>

			<div class="container accreditation">
				<div class="row align-items-center">
					<div class="col-md-3 col-sm-12">
						<h3>Accreditations</h3>
						<a href="/accreditations" class="intro-btn">View All</a>
					</div>
					<div class="col-md-9 col-sm-12 autoplay">
						<?php
						    $loop = new WP_Query( array( 
						    'post_type' => 'accreditations',
						    'category_name' => 'certificate'
							) );
						    if ( $loop->have_posts() ) :
						        while ( $loop->have_posts() ) : $loop->the_post(); ?>
						
						<div class="text-center">
							<a href="<?php echo the_field('document'); ?>" target="_blank">
								<img src="<?php echo the_field('logo'); ?>" class="img-fluid">
							</a>
						</div>
						<?php endwhile; ?>
						        <?php endif;
						    wp_reset_postdata();
						?>
					</div>
				</div>
			</div>

			<div class="container services">
				<div class="row">
					<h2 class="col-12 text-center">Our Services</h2>
				</div>
				<div class="row">
					<div class="col-md-3 col-sm-12 col-12 text-center">
						<span class="icon">
							<img src="<?php echo get_template_directory_uri() . '/images/services/construction.png' ;?>">
						</span>
						<h3>Construction</h3>
						<p>Our teams bring their technical knowledge, experience, and resourcefulness to the delivery of our building and construction services.</p>
					</div>
					<div class="col-md-3 col-sm-12 col-12 text-center">
						<span class="icon">
							<img src="<?php echo get_template_directory_uri() . '/images/services/civil.png' ;?>">
						</span>
						<h3>Civil Infrastructure</h3>
						<p>Having worked closely with the City of Cape Town, among others, we are able to contribute to the sustainable development and growth of our beautiful country.</p>
					</div>
					<div class="col-md-3 col-sm-12 col-12 text-center">
						<span class="icon">
							<img src="<?php echo get_template_directory_uri() . '/images/services/project-management.png' ;?>">
						</span>
						<h3>Project Management</h3>
						<p>We ensure the successful delivery and execution of our projects from inception to handover.</p>
					</div>
					<div class="col-md-3 col-sm-12 col-12 text-center">
						<span class="icon">
							<img src="<?php echo get_template_directory_uri() . '/images/services/alterations.png' ;?>">
						</span>
						<h3>Maintenance</h3>
						<p>Specialising in residential, commercial and retail improvements, our services are varied and extensive.</p>
					</div>
				</div>
				<div class="services-btn">
					<a href="/services" class="intro-btn">View Services</a>
				</div>
			</div>

			<div class="container group">
				<div class="row">
					<h2 class="col-12 text-center">Group & Associates</h2>
				</div>
				<div class="row">
					<div class="col-12 autoplay-group">
						<div class="text-center"><img src="<?php echo get_template_directory_uri() . '/images/group/arp-construct.png' ;?>" class="img-fluid"></div>
						<div class="text-center"><img src="<?php echo get_template_directory_uri() . '/images/group/arp-hire.png' ;?>" class="img-fluid"></div>
						<div class="text-center"><img src="<?php echo get_template_directory_uri() . '/images/group/arp-property.png' ;?>" class="img-fluid"></div>
						<div class="text-center"><img src="<?php echo get_template_directory_uri() . '/images/group/arp-construct.png' ;?>" class="img-fluid"></div>
						<div class="text-center"><img src="<?php echo get_template_directory_uri() . '/images/group/arp-hire.png' ;?>" class="img-fluid"></div>
						<div class="text-center"><img src="<?php echo get_template_directory_uri() . '/images/group/arp-property.png' ;?>" class="img-fluid"></div>
						<div class="text-center"><img src="<?php echo get_template_directory_uri() . '/images/group/arp-construct.png' ;?>" class="img-fluid"></div>
						<div class="text-center"><img src="<?php echo get_template_directory_uri() . '/images/group/arp-hire.png' ;?>" class="img-fluid"></div>
						<div class="text-center"><img src="<?php echo get_template_directory_uri() . '/images/group/arp-property.png' ;?>" class="img-fluid"></div>

					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_template_part( 'template-parts/content', 'getintouch' );
?>
<?php
get_footer();
