<?php /* Template Name: Contact */ ?>
<?php
/**
 * The template for displaying ARP Contact Page
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
			<h4>Contact Us</h4>
			<h1>For World Class Service</h1>
			<h2>We have built our reputation by performing the highest quality work and providing innovative solutions</h2>
		</div>
	</div>
</div>
<div class="container-fluid contact-form-bg">
<?php while ( have_posts() ) : the_post(); ?>
	<div class="container contact-form">
		<div class="row contact-form-top">
			<div class="col-md-5 col-12">
				<h1>Need a quote  for a project?</h1>
				<p>Fill out the form and we will contact you.</p>
			</div>
			<div class="col-md-7 col-12">
				<?php the_content(); ?>
			</div>
		</div>
		<div class="row contact-form-bottom">
			<div class="col-md-7 col-12">
				<?php the_field('map'); ?>
			</div>
			<div class="col-md-5 col-12 contact-form-details">
				<h2>Contact Details</h2>
				<h4>Tel: 021 201 8896</h4>
				<h4>Fax: 086 725 6428</h4>
				<h4>Email: info@arprojects.co.za</h4>
				<h4>Physical Address: 
					Unit 4, 
					Glenkey Mews, 
					Sheffield Business Park,  
					Purdy Road, Philippi, 7750</h4>
			</div>
		</div>
	</div>
<?php endwhile; // end of the loop. ?>
</div>

<?php
get_footer();