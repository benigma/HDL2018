<?php
/*
Template Name: Team Template
*/
?>
<?php get_header(); ?>
	<section id="staff-profile">
	
				<section id="staff-banner">
					<?php the_post_thumbnail(); ?>
					<span class="profile">
					<h1><?php the_title(); ?></h1>
					<h2><?php echo get_post_meta($post->ID, 'position', true); ?><br /><span class="location">
					<?php echo get_post_meta($post->ID, 'location', true); ?></span></h2>
					</span>
				</section>
	  
				<article>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
							<?php the_excerpt(); ?>
						<?php else : ?>
							<?php the_content(); ?>
						<?php endif; ?>
					<?php endwhile; ?>
					<button onClick="window.location.href='mailto:<?php echo get_post_meta($post->ID, 'email', true); ?>';"><a href="mailto:<?php echo get_post_meta($post->ID, 'email', true); ?>">Contact <?php the_title(); ?></a></button>
					<a href="http://<?php echo get_post_meta($post->ID, 'linkedin', true); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/linkedin-profile.png" title="linkedin profile" border="0"></a>
				</article>
	
				<aside>
					<h2><?php the_title(); ?> brings experience across the following sectors.</h2>
					<?php echo get_post_meta($post->ID, 'experience', true); ?>
				</aside>
	
			</section>
<?php get_footer(); ?>
