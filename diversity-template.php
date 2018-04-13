<?php
/*
Template Name: Diversity Template
*/
?>
<?php get_header(); ?>

<div class="banner">
	<h1><?php the_title(); ?></h1>
    <?php the_field('page_banner_content'); ?>
</div>

<div class="home--content-area">

    <?php the_field('2-column_section_introduction'); ?>
        
    <div class="home-columns">
        <div class="col-1">
            <?php the_field('2_column_column_1'); ?>
        </div>
        <div class="col-2">
            <?php the_field('2_column_column_2'); ?>
        </div>
	</div>
	
</div>

<?php get_footer(); ?>