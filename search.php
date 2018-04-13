<?php get_header(); ?>
<?php 
	$cat = $_GET['cat'];
?>
<?php if($cat == 27) { ?>
<section id="staff">
	
	<div class="team--search">
		<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
			<input type="text" placeholder="search our staff" name="s" id="s" />
			<?php wp_dropdown_categories('show_option_none=Select a category&exclude=27&orderby=id'); ?>
			<script type="text/javascript">
				var dropdown = document.getElementById("cat");
				function onCatChange() {
					if ( dropdown.options[dropdown.selectedIndex].value > 0 ) {
						location.href = "<?php site_url() ?>/consultants/?cat="+dropdown.options[dropdown.selectedIndex].value;
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
	<?php $counter = 1; ?>
	<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<div class="ca-item ca-item-<?php echo $counter; ?>">
	<div class="ca-item-main">
	<div class="ca-icon"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( $size, $attr ); ?></a></div>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<h4><?php echo get_post_meta($post->ID, 'position', true); ?></h4>
		<p><?php the_excerpt(); ?></p>
	</div>
	</div>
	<?php $counter++ ?>
	<?php endwhile; ?>
	<?php else : ?>
	<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyeleven' ); ?></p>
	<?php endif; ?>
	</div>
	</div>
</section>
<?php } else { ?>

<div class="child--content-area">

	<div class="side--navigation">
		<p>Hogarth Davies Lloyd has an excellent track record of successfully completing searches across a variety of sectors and areas.</p>
		<nav>
			<ul>
				<?php wp_list_pages('title_li=&depth=1&exclude=82&sort_column=menu_order'); ?>
			</ul>
		</nav>
	</div>

	<div class="child--content">
		<?php if ( have_posts() ) : ?>
			<div class="search--result__total">
				<p>We have found <?php $total_results = $wp_query->found_posts; echo $total_results; ?> item(s) for your search <strong>"<?php echo $_GET['s']; ?>"</strong>.</p>
			</div>

			<?php while ( have_posts() ) : the_post(); ?>
			<div class="search--result__block">                    
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php the_excerpt(20); ?>
			</div>
			<?php endwhile; ?>
		<?php else : ?>
			<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyeleven' ); ?></p>
		<?php endif; ?>
		<?php if (function_exists("pagination")) {
				pagination($additional_loop->max_num_pages);
				} ?>
	</div>

</div>

<?php } ?>

<?php get_footer(); ?>