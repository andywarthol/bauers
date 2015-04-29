<?php
/*
Template Name: No Sidebar
*/
?>

<?php get_header(); ?>

<section class="standard">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="row">
					<div class="col-sm-12">
						<article>
							<header>
								<h1 class="page-title"><?php the_title(); ?></h1>
							</header>
							<?php the_content(); ?>
						</article> <!-- end article -->
					</div>
				</div>
				<?php endwhile; endif; ?>
			</div>	
		</div>
	</div>
</section>
<script>
	jQuery(document).ready(function($){
		
	});
</script>

<?php get_footer(); ?>