<?php
/*
Template Name: Services
*/
?>

<?php get_header(); ?>
<section class="microhero light" style="background-image: url('<?php the_field('background_image'); ?>');">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<h2 class="text-center"><?php the_title(); ?></h2>
			</div>
		</div>
	</div>
</section>
<section class="standard">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-4 col-md-3">
						<?php
							get_sidebar();
						?>
					</div>
					<div class="col-sm-8 col-md-9 col-lg-8">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="row">
							<div class="col-sm-12">
								<article>
									<!-- <header>
										<h1 class="page-title"><?php the_title(); ?></h1>
									</header> -->
									<?php the_content(); ?>
								</article> <!-- end article -->
							</div>
						</div>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>			
		</div>
	</div>
</section>
<script>
	jQuery(document).ready(function($){
		
	});
</script>
<?php get_footer(); ?>
