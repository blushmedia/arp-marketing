<?php
/**
 * The template for displaying all Projects
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package arp
 */

get_header(projects); ?>
 <?php while ( have_posts() ) : the_post(); ?>
                <?php if ( has_post_thumbnail() ) { ?>
<div class="container-fluid project-header"> <!-- Project Header Start -->
    <?php the_post_thumbnail(); ?>
    <div class="project-desc">
    	<div class="container">
    		<?php
    			$class = get_field('progress');
    			$progress = str_replace(' ', '', $class);
    		?>
    		<h2 class="<?php echo $progress; ?>"><?php the_field('progress') ?></h2>
            <h1 class="project-title"><?php echo get_the_title(); ?></h1>
            <h3><?php the_field('location') ?></h3>
     	</div>
    </div>
    <div class="container-fluid header-overlay">
	</div>
</div> <!-- Project Header End -->
<?php } ?>
<div class="container project-info"> <!-- Project Info Start -->
	<div class="row">
		<div class="col-md-3 col-12">
			<h4>Client</h4>
			<h2><?php the_field('client') ?></h2>
		</div>
		<div class="col-md-2 col-12">
			<h4>Sector</h4>
			<h2><?php the_field('sector') ?></h2>
		</div>
		<div class="col-md-5 col-12">
			<h4>Services</h4>
			<?php
				  	$post_tags = get_the_tags();

					if ( $post_tags ) {
					    foreach( $post_tags as $tag ) {
					    echo "<span class='tag'>$tag->name</span>"; 
					    }
					}
				?>
		</div>
		<div class="col-md-2 col-12">
			<h4>Duration</h4>
			<h2><?php the_field('progress'); ?></h2>
		</div>
	</div>
</div> <!-- Project Info End -->
<div class="container project-main-content"> <!-- Project Content Start -->
    <?php if( get_field('before_and_after_image') ): ?>
	<div class="row before_after">
		<div class="col-12">
			<?php the_field('before_and_after_image'); ?>
		</div>
	</div>
    <?php else: ?>
    <?php endif; ?>  
	
    <div class="row justify-content-center"> <!-- Project Content Text Start -->
    	<div class="col-md-8 col-10 text-left project-content">
    		<?php the_content(); ?>
    	</div>
	</div> <!-- Project Content Text End -->	
</div> <!-- Project Content End -->

<?php if( miu_get_images() ): ?>
<div class="container-fluid slider-section"> <!-- Project Slider Start -->

    <div class="slider-main container">

    <?php
    $gallery = miu_get_images();
    foreach ($gallery as $image) {
        echo '<div><img src="'.$image.'" class="img-fluid"></div>';
    }
    ?>
    </div>
    <div class="container">
        <div class="slider-thumb row">
            <?php
                $gallery = miu_get_images();
                foreach ($gallery as $image) {
                    echo '<div class="col-4 text-center"><img src="'.$image.'"></div>';
                }
            ?>
        </div>
    </div>
</div> <!-- Project Slider End-->
<?php else: ?>              
    <?php endif; ?>

<?php endwhile; ?>
<div class="container">
<?php
get_template_part( 'template-parts/content', 'projects' );
?>
</div>
<?php
get_template_part( 'template-parts/content', 'meet' );
?>
<?php
get_template_part( 'template-parts/content', 'getintouch' );
?>


<?php
get_footer();