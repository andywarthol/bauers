<?php
/*
Template Name: Thank You Template
*/
?>

<?php get_header(); ?>	

<section class="">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php if (function_exists("builder_breadcrumb_lists")) { ?>
					<?php builder_breadcrumb_lists(); ?>
				<?php } ?>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<?php the_content(); ?>
				<h1 class="text-center"><?php the_field('thank_you_headline'); ?></h1>
				<p class="text-center"><?php the_field('thank_you_messaging'); ?></p>
				<p class="text-center"><a href="<?php the_field('thank_you_url'); ?>">Continue browsing &rarr;</a></p>
			</div>			
		</div>
	</div>
</section>
<script>
	jQuery(document).ready(function($){
		
	});
</script>

<?php get_footer(); ?>