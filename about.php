<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>	

<section class="standard">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-4 col-md-3">
						<?php get_sidebar(); ?>
					</div>
					<div class="col-sm-8 col-md-9 col-lg-8">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="row">
							<div class="col-sm-12">
								<header>
									<h1 class="page-title"><?php the_title(); ?></h1>
								</header>
								<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
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
		// Accordion
		$('#collapse1').addClass('in').parent().find('.panel-heading a').removeClass('collapsed');

		$('.scroll, .scroll a').smoothScroll({
			offset: -60,
			easing: 'swing'
		});
	});
</script>

<?php get_footer(); ?>