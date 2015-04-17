<?php
/*
Template Name: Short Quote Thank You
*/
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="thank-you">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 text-center">
				<h1>Thank You</h1>
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</section>
<?php endwhile; endif; ?>
<?php get_header(); ?>

<?php get_footer(); ?>