<?php
/*
Template Name: Staff Profile Template
*/
?>
<?php get_header(); ?>
	<section id="staff-profile">
	
				<section id="staff-banner">
					<span class="profile">
					<h1>Will Hannaford</h1>
					<h2>FICC - Partner</h2>
					</span>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post();    
					
					 $args = array(
					   'post_type' => 'attachment',
					   'numberposts' => 1,
					   'post_status' => null,
					   'post_parent' => $post->ID,
					   'class' => "no-border"
					  );
					
					        $attachments = get_posts($args);
					        if ($attachments) {
					        foreach ($attachments as $attachment) {
					        //echo apply_filters('the_title', $attachment->post_title);
					        echo wp_get_attachment_image( $attachment->ID, 'full' );
					  
					       }
					     }
					
					 endwhile; 
					 
					 endif; ?>	
				</section>
	 
				<article>
					<h2>Will Hannaford studied Maths and Philosophy at King's College London</h2>
					<p>Before beginning his career in financial markets recruitment where he specialised in the Foreign Exchange Sector.</p>
					<p>He joined Hogarth Davies Lloyd as a Consultant in 2006 from another London based global executive search firm to focus predominantly on the Foreign Exchange sector.</p>
					<p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.</p>
					<button><a href="mailto:whannaford@hogarthdavieslloyd.com">Contact Will</a></button>
					<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/linkedin-profile.png" title="linkedin profile" border="0"></a>
				</article>
	
				<aside>
					<h2>Will Hannaford brings experience across the following sectors.</h2>
					<ul>
						<li><a href="#">Global Markets</a></li>
						<li><a href="#">Legal, Compliance &#38; Regulatory</a></li>
						<li><a href="#">Corporate &#38; Investment Banking</a></li>
						<li><a href="#">Commodities</a></li>
					</ul>
				</aside>
	
			</section>
<?php get_footer(); ?>
