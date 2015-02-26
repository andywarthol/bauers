<?php
/*
Template Name: About
*/
?>

<?php get_header(); ?>	
<section class="microhero light" style="background-image: url('<?php the_field('background_image'); ?>');">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<h2 class="text-center">Don't just get there, make <em>IT</em> an experience.</h2>
			</div>
		</div>
	</div>
</section>
<section class="">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-12">
				<div class="row">
					<div class="col-sm-3 ">
						<div class="sidebar">
							<ul class="">
								<?php wp_list_pages('sort_column=menu_order&exclude=44&title_li=&child_of=27&link_before=<i class="glyphicon glyphicon-chevron-right"></i>'); ?>
							</ul>
						</div>
					</div>
					<div class="col-sm-9">
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