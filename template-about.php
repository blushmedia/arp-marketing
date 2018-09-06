<?php /* Template Name: About */ ?>
<?php
/**
 * The template for displaying ARP About page
 *
 *
 * @package arp
 */

get_header(); ?>

<div class="container-fluid background-image">
	<img src="<?php echo get_template_directory_uri(); ?>/images/background-image.jpg" alt="">
</div>
<div class="container about">
	<div class="row justify-content-center text-center service">
		<div class="col-md-9 col-12">
			<h4>About Us</h4>
			<h1>The Story of AR Projects</h1>
			<h2>Since 2006, AR Projects & Developments has been providing unparalleled services and expertise to both the public and private sectors in Southern Africa.</h2>
		</div>
	</div>
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="row justify-content-center">
		<div class="col-md-7 col-12">
			<img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>"/>
		</div>
		<div class="col-md-5 col-10">
			<?php the_content(); ?>
			<a href="/contact" class="intro-btn">Contact Us</a>
		</div>
	</div>
	<?php endwhile; // end of the loop. ?>
</div>
<div class="container-fluid team-section"></div>
<div class="container team">
	<div class="row justify-content-center text-center service">
		<div class="col-md-9 col-12">
			<h4>The Team</h4>
			<h1>Meet The Team Behind AR Projects</h1>
			<h2>Our dedicated staff work tirelessly to make sure all projects are completed at the highest quality and exceeds our clients’ expectations.</h2>
		</div>
	</div>
	<div class="row justify-content-center">
		<?php
		    $loop = new WP_Query( array( 
		    'post_type' => 'team',
		    'tax_query' => array(
				array(
					'taxonomy' => 'tag',
					'field'    => 'slug',
					'terms'    => 'featured',
				),
			),

			) );
		    if ( $loop->have_posts() ) :
		        while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<div class="col-md-12 col-11 director">
			<div class="row align-items-center">
				<div class="col-md-5 col-12">
					<img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>"/>
				</div>
				<div class="col-md-7 col-12">
					<h1><?php the_title(); ?></h1>
					<h4><?php the_field('designation'); ?></h2>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
		<?php endwhile; ?>
	        <?php endif;
			    wp_reset_postdata();
				?>
	</div>
	<div class="row justify-content-center team-members">
		<?php
		    $loop = new WP_Query( array( 
		    'post_type' => 'team',
		    'posts_per_page'   => -1,
		    'tax_query' => array(
						array(
							'taxonomy' => 'tag',
							'field'    => 'term_id',
							'terms'    => array( 13 ),
							'operator' => 'NOT IN',
						),
					),

			) );
		    if ( $loop->have_posts() ) :
		        while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<div class="col-md-4 col-10">
			<img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>"/>
			<h2><?php the_title(); ?></h2>
			<h4><?php the_field('designation'); ?></h2>
			<span class="department"><?php the_field('department'); ?></span>
			<?php the_content(); ?>
		</div>
		<?php endwhile; ?>
	        <?php endif;
			    wp_reset_postdata();
				?>
	</div>
	
</div>

<div class="container">
<?php
get_template_part( 'template-parts/content', 'projects' );
?>
</div>
<?php
get_template_part( 'template-parts/content', 'getintouch' );
?>


<?php
get_footer();