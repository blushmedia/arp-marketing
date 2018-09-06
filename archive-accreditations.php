<?php /* Template Name: Accreditation Listing */ ?>
<?php
/**
 * The template for displaying the Accreditations
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
			<h4>Accreditations</h4>
			<h1>Our Certification To Back Us Up </h1>
			<h2>Since 2006, AR Projects & Developments has been providing unparalleled services and expertise to both the public and private sectors in Southern Africa.</h2>
		</div>
	</div>
	<div class="row justify-content-center certifcate-downloads">
		<div class="col-10">
			<div class="row justify-content-center">
				<div class="col-6 text-center">
					<img src="<?php echo get_template_directory_uri(); ?>/images/certificate.svg">
					<h3>Certificates</h3>
					<h4><a href="<?php echo get_template_directory_uri(); ?>/images/arp_accreditation_certification.zip">Download All</a></h4>
				</div>
				<div class="col-6 text-center">
					<img src="<?php echo get_template_directory_uri(); ?>/images/health.svg">
					<h3>Health & Safety</h3>
					<h4><a href="<?php echo get_template_directory_uri(); ?>/images/arp_health_and_safety_certification.zip">Download All</a></h4>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container-fluid accreditations">
	<div class="container accreditations-top-row">
		<h1 class="text-center">Certificates</h1>
			<div class="row">
				<?php
				    $loop = new WP_Query( 
				    array( 
				    'post_type' => 'accreditations',
				    'posts_per_page'   => -1,
				    'category_name' => 'certificate'
					)

					);
				    if ( $loop->have_posts() ) :
				        while ( $loop->have_posts() ) : $loop->the_post(); ?>

				        <div class="col-md-3 col-12">
				        	<div class="card">
				        		<h3><a href="<?php echo the_field('document'); ?>" target="_blank"><?php the_title() ?></a></h3>
					        	<div class="thumbnail">
						        	<a href="<?php echo the_field('document'); ?>" target="_blank">
						        		<img src="<?php echo the_field('logo'); ?>">
						        	</a>
					        	</div>
					        	<div class="project-card-info">
					        		<h4><a href="<?php echo the_field('document'); ?>" target="_blank">View Certificate</a></h4>
					        	</div>
					        </div>
				        </div>

				<?php endwhile; ?>
				        <?php endif;
				    wp_reset_postdata();
				?>
			</div>
	</div>

	<div class="container">
		<h1 class="text-center">Health & Safety</h1>
			<div class="row">
				<?php
				    $loop = new WP_Query( 
				    array( 
				    'post_type' => 'accreditations',
				    'posts_per_page'   => -1,
				    'category_name' => 'health'
					)
					);
				    if ( $loop->have_posts() ) :
				        while ( $loop->have_posts() ) : $loop->the_post(); ?>

				        <div class="col-md-3 col-12">
				        	<div class="card">
				        		<h3><a href="<?php echo the_field('document'); ?>" target="_blank"><?php the_title() ?></a></h3>
					        	<div class="thumbnail">
						        	<a href="<?php echo the_field('document'); ?>" target="_blank">
						        		<img src="<?php echo the_field('logo'); ?>">
						        	</a>
					        	</div>
					        	<div class="project-card-info">
					        		<h4><a href="<?php echo the_field('document'); ?>" target="_blank">View Certificate</a></h4>
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