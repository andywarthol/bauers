<?php
/*
Template Name: Testimonials
*/
?>

<?php get_header(); ?>	

<section class="testimonial-quotes">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-4 col-md-3">
						<?php get_sidebar(); ?>
					</div>
					<div class="col-sm-8 col-md-9 col-lg-8">
						<div class="row">
							<div class="col-sm-12">
								<header>
									<h1 class="page-title">Testimonials</h1>
								</header>
							</div>
						</div>
						<?php if(get_field('testimonials')): ?>
						<?php while(has_sub_field('testimonials')): ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
							<div class="col-sm-12">
								<blockquote>
									<?php the_sub_field('quote'); ?>	<small><?php the_sub_field('name'); ?>, <?php the_sub_field('company'); ?></small>
								</blockquote>
							</div>
						</article> <!-- end article -->
						<?php endwhile; endif; ?>
						<?php wp_reset_postdata(); ?>
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