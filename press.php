<?php
/*
Template Name: Press
*/
?>

<?php get_header(); ?>	

<section class="press-hits">
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
									<h1 class="page-title">In the News</h1>
								</header>
							</div>
						</div>
						<?php if(get_field('press_articles')): ?>
						<?php while(has_sub_field('press_articles')): ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
							<div class="col-sm-2 hidden-xs">
								<img class="img-responsive img-thumbnail" src="<?php the_sub_field('logo'); ?>" alt="">
							</div>
							<div class="col-sm-10">
								<header>
									<h2><a href="<?php the_sub_field('url'); ?>" target="_blank"><?php the_sub_field('title'); ?></a><small><?php the_sub_field('date'); ?></small></h2>
								</header>
								<p><?php the_sub_field('excerpt'); ?> <a href="<?php the_sub_field('url'); ?>" target="_blank">More&rarr;</a></p>
							</div>
						</article> <!-- end article -->
						<?php endwhile; endif; ?>
						<?php wp_reset_postdata(); ?>
						<br>
						<br>
						<div class="press-releases">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<div class="row">
								<div class="col-sm-12">
									<header>
										<h1 class="page-title">Press Releases</h1>
									</header>
								</div>
							</div>
							<?php
								global $post;
								$args = array( 'posts_per_page' => 10, 'category_name' => 'press-releases', 'order' => 'ASC', 'orderby' => 'title' );
								$myposts = get_posts( $args );
								foreach( $myposts as $post ) :  setup_postdata($post);
							?>
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
								<div class="col-sm-2 text-center">
									<span class="date"><?php the_field('date'); ?></span>
								</div>
								<div class="col-sm-10">
									<header>
										<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									</header>
								</div>
							</article> <!-- end article -->
							<?php endforeach; ?>
							<?php endwhile; endif; ?>
						</div>
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