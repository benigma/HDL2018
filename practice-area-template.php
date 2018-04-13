<?php
/*
Template Name: Practice Area Template
*/
?>
<?php get_header(); ?>

	<div class="banner">
		<h1><?php the_title(); ?></h1>
        <?php the_field('page_banner_content'); ?>
	</div>
	
	<div class="child--content-area">
		<div class="side--navigation">
			<p>Hogarth Davies Lloyd has an excellent track record of successfully completing searches across a variety of sectors and areas.</p>
			<nav>
				<ul>
					<li><h3><?php the_title(); ?></h3></li>
					<?php 
					$id = get_the_ID();
					wp_list_pages('title_li=&depth=2&child_of='.$id.'&sort_column=menu_order'); ?>
				</ul>
			</nav>
			<nav>
				<ul>
					<li><h3>Other Areas include</h3></li>
					<?php 
					$idtwo = get_the_ID();
					wp_list_pages('title_li=&depth=1&exclude='.$idtwo.',80,82&sort_column=menu_order'); ?>
				</ul>
			</nav>
		</div>

		<div class="child--content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
					<?php the_excerpt(); ?>
				<?php else : ?>
					<?php the_content(); ?>
				<?php endif; ?>
			<?php endwhile; ?>
			
			<section id="area-carousel">
				<div id="ca-container" class="ca-container">
					<div class="ca-wrapper">
					<?php
			           	 // get all the categories from the database
			            $category = get_post_meta($post->ID, 'practice-area-cat', true);
			        ?>
			        
			        <?php
			 			query_posts('section_name='.$category.'&posts_per_page=-1');
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
			                <?php $counter++ ?>			 
			                <?php endwhile; endif;
			                    wp_reset_query();
			             	?>
					</div>
				</div>
			</section>
			
		</div>
	</div>
<?php get_footer(); ?>
