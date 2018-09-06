<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package arp
 */
?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer container-fluid">
		<div class="site-info container">

			<div class="row">
				<div class="col-md-3 col-sm-12 col-12">
					<?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer-1',
                            'menu_class'        => 'footer-nav',

                        ) );
                    ?>
				</div>
				<div class="col-md-3 col-sm-12 col-12">
					<?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer-2',
                            'menu_class'        => 'footer-nav',

                        ) );
                    ?>
				</div>
				<div class="col-md-3 col-sm-12 col-12">
					<h3>Quick Contact</h3>
					<p>Tel: 021 201 8896</p>
					<p>Fax: 086 725 6428</p>
					<p>Email: info@arprojects.co.za</p>
				</div>
				<div class="col-md-3 col-sm-12 col-12 footer-address">
					<h3>Address</h3>
					<p>Unit 4 Glenkey Mews, </p>
					<p>Sheffield Business Park,</p>
					<p>Phillippi, Cape Town,</p>
					<p>Western Cape, South Africa</p>
				</div>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
	<div class="container-fluid copyright">
		<div class="container">
			<div class="col-12">
				<p>Copyright AR Projects (Pty) Ltd</p>
			</div>
		</div>
	</div>
	<nav id="mobile-navigation">
	<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		) ); ?>
	</nav><!-- #site-navigation -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.mmenu.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59698713-13', 'auto');
  ga('send', 'pageview');
</script>
<script type="text/javascript">
   $(document).ready(function() {
      $("#mobile-navigation").mmenu({
         // options
      }, {
         // configuration
         offCanvas: {
            pageSelector: "#page"
         }
      });
   });
</script>
</body>
</html>