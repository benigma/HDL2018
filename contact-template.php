<?php
/*
Template Name: Contact Template
*/
?>
<?php get_header(); ?>

<div class="banner">
	<h1><?php the_title(); ?></h1>
    <?php the_field('page_banner_content'); ?>
</div>

<div class="office--locations">

    <?php if( have_rows('office_locations') ): ?>
         <?php while( have_rows('office_locations') ): the_row(); ?>

        <div class="office--location">
            <div class="office--location__image">
                <img src="<?php the_sub_field('office_image'); ?>" />
            </div>
            <div class="office--location__content">
                <?php the_sub_field('office_content'); ?>
            </div>
        </div>
        
	<?php endwhile; endif; ?>

</div>

<?php get_footer(); ?>