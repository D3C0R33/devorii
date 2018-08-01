<?php /* Template Name: Artwork */
?>

<?php get_header(); ?>
<div class="artWrapper">
	<div class="artContentAlignment">

<?php the_field('artwork'); ?>	
		
			<div class="moreInfo">
			<?php the_field('artwork_intro'); ?>
		</div>
		<div class="field_manipulation">
			<?php the_field('artwork_text'); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>