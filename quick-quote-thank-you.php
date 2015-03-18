<?php
/*
Template Name: Quick Quote Thank You
*/
?>

<?php get_header(); ?>	

<section class="">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<ul class="breadcrumb"><li><a href="http://tempsitebeta.com/bauersit">Home</a></li><li><a href="http://tempsitebeta.com/bauersit/about/">About</a></li> <span class="divider">/</span> <li class="active">Contact – Thank You</li></ul>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
				<h1 class="text-center">Thank you for your inquiry!</h1>
				<p class="text-center">One of our team members will call you shortly. If you'd like to get things started immediately, please call us directly at <strong>1.800.546.6688</strong>.</p>
			</div>			
		</div>
	</div>
</section>
<script>
	jQuery(document).ready(function($){
		
	});
</script>
<?php the_field('conversion_pixels'); ?>
<?php get_footer(); ?>