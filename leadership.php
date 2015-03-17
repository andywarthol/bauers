<?php
/*
Template Name: Leadership
*/
?>

<?php get_header(); ?>

<section class="leadership standard">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-3 ">
						<?php get_sidebar(); ?>
					</div>
					<div class="col-sm-8">
						<div class="row">
							<div class="col-sm-12">
								<header>
									<h1 class="page-title">Executive Leadership Team</h1>
								</header>
							</div>
						</div>
						<?php if(get_field('leadership_team')): ?>
						<?php while(has_sub_field('leadership_team')): ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix row' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
							<div class="col-sm-8">
								<header>
									<h2 class="subhead"><?php the_sub_field('name'); ?><small><?php the_sub_field('title'); ?></small></h2>
								</header>
								<p><?php the_sub_field('bio'); ?></p>
								<div class="social-profile">
									<a class="linkedin-icon" href="<?php the_sub_field('linkedin_url'); ?>" title="<?php the_sub_field('name'); ?> on LinkedIn">&nbsp;</a> <a href="<?php the_sub_field('linkedin_url'); ?>" title="<?php the_sub_field('name'); ?> on LinkedIn"><?php the_sub_field('name'); ?> on LinkedIn</a>
								</div>
							</div>
							<div class="col-sm-4">
								<img class="img-responsive img-thumbnail" src="<?php the_sub_field('headshot'); ?>" alt="">
							</div>
						</article> <!-- end article -->
						<?php endwhile; ?>
						<?php endif; ?>
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
