<?php get_header(); ?>
<?php 
		if ( has_post_thumbnail() )  {
			$thumb = get_the_post_thumbnail_url();
		} else {
			$thumb = '';
		}
		?>
<div id="banner-overlay" class="md:bg-fixed bg-cover bg-no-repeat bg-center" style="background-image: url(<?php echo $thumb; ?>);">

</div>
<div id="banner-container" class="min-h-screen">
<?php the_title( sprintf( '<h2 class="entry-title text-2xl md:text-3xl font-extrabold leading-tight mb-1"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</div>
	
<div class="container mx-auto p-10">

	<?php if ( have_posts() ) : ?>
		<?php
		while ( have_posts() ) :
			the_post();
			?>

			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

		<?php endwhile; ?>

	<?php endif; ?>

</div>

<?php
get_footer();
