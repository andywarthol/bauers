<?php
/*
Template Name: Awards
*/
?>

<?php get_header(); ?>	

<section class="awards">
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
									<h1 class="page-title">Awards</h1>
								</header>
							</div>
						</div>
						<?php if(get_field('awards')): ?>
						<?php while(has_sub_field('awards')): ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
							<div class="col-sm-3">
								<img class="img-responsive img-thumbnail" src="<?php the_sub_field('thumbnail'); ?>" alt="">
							</div>
							<div class="col-sm-9">
								<header>
									<h2><a href="<?php the_sub_field('url'); ?>" target="_blank"><?php the_sub_field('title'); ?></a><small><?php the_sub_field('date'); ?></small></h2>
								</header>
								<p><?php the_sub_field('excerpt'); ?> <a href="<?php the_sub_field('url'); ?>" target="_blank">More&rarr;</a></p>
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