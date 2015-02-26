<?php
/*
Template Name: Press
*/
?>

<?php get_header(); ?>	
<section class="microhero light" style="background-image: url('<?php the_field('background_image'); ?>');">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<h2 class="text-center">We make headlines.</h2>
			</div>
		</div>
	</div>
</section>
<section class="press-hits">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-12">
				<div class="row">
					<div class="col-sm-3 ">
						<div class="widget">
							<ul class="list-unstyled">
								<?php wp_list_pages('sort_column=menu_order&include=33,27&title_li'); ?>
							</ul>
						</div>
					</div>
					<div class="col-sm-9">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="row">
							<div class="col-sm-12">
								<header>
									<h1 class="page-title">Bauer's IT in the News</h1>
								</header>
							</div>
						</div>
						<?php if(get_field('press_articles')): ?>
						<?php while(has_sub_field('press_articles')): ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix row' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
							<div class="col-sm-2">
								<img class="img-responsive img-thumbnail" src="<?php the_sub_field('logo'); ?>" alt="">
							</div>
							<div class="col-sm-10">
								<header>
									<h2><a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('title'); ?></a><small><?php the_sub_field('date'); ?></small></h2>
								</header>
								<p><?php the_sub_field('excerpt'); ?> <a href="<?php the_sub_field('url'); ?>">More&rarr;</a></p>
							</div>
						</article> <!-- end article -->
						<?php endwhile; ?>
						<?php endif; ?>
						<?php endwhile; endif; ?>
						<?php wp_reset_postdata(); ?>
					</div>
				</div>
			</div>			
		</div>
	</div>
</section>
<section class="press-releases">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-12">
				<div class="row">
					<div class="col-sm-9 col-sm-offset-3">
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
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix row' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
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
</section>
<script>
	jQuery(document).ready(function($){
		
	});
</script>

<?php get_footer(); ?>