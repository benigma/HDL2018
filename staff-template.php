<?php
/*
Template Name: Staff Template
*/
?>
<?php get_header(); ?>
<section id="staff">

	<div class="team--search">
		<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
			<input type="text" placeholder="search our staff" name="s" id="s" />
			<?php wp_dropdown_categories('show_option_none=Select a category&exclude=27&orderby=id'); ?>
			<script type="text/javascript">
				var dropdown = document.getElementById("cat");
				function onCatChange() {
					if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
						location.href = "<?php the_permalink() ?>/?cat="+dropdown.options[dropdown.selectedIndex].value;
					}
				}
				dropdown.onchange = onCatChange;
			</script>
			<input type="hidden" name="cat" id="cat" value="27"/>
			<input type="submit" value="Search">
		</form>
	</div>
	
	
	<section id="carousel">
		<div id="ca-container" class="ca-container">
			<div class="ca-wrapper">
			<?php
				// get all the categories from the database
				$category = $_GET['cat']; 
				if(!isset($category)) { 
			?>
			
			<?php
				query_posts('cat=27&posts_per_page=-1');
				$counter = 1;
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="ca-item ca-item-<?php echo $counter; ?>">
				<div class="ca-item-main">
				<div class="ca-icon"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( $size, $attr ); ?></a></div>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<h4><?php echo get_post_meta($post->ID, 'position', true); ?></h4>
					<h4 class="location"><?php echo get_post_meta($post->ID, 'location', true); ?></h4>
					<p><?php the_excerpt(); ?></p>
				</div>
				</div>
				<?php $counter++ ?>
				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>
				
				<?php } else {
		
						query_posts('cat='.$category.'');
						// Make a header for the cateogry
							
						$counter = 1;
						if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="ca-item ca-item-<?php echo $counter; ?>">
						<div class="ca-item-main">
						<div class="ca-icon"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( $size, $attr ); ?></a></div>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<h4><?php echo get_post_meta($post->ID, 'position', true); ?></h4>
							<h4 class="location"><?php echo get_post_meta($post->ID, 'location', true); ?></h4>
							<p><?php the_excerpt(); ?></p>
						</div>
						</div>
						<?php 
						$counter++
						?>			 
						<?php endwhile; endif;
						wp_reset_query();
						
						} ?>
			
				
			</div>
		</div>
	</section>
</section>
<?php get_footer(); ?>
