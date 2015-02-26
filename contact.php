<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
<section class="microhero light" style="background-image: url('<?php the_field('background_image'); ?>');">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<h2 class="text-center">We're here for you.</h2>
			</div>
		</div>
	</div>
</section>
<section class="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row">
					<div class="col-sm-12">
						<h1>Contact Us</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 form">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; endif; ?>
					</div>
					<div class="col-sm-6">
						<div class="google-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12614.742836221516!2d-122.38716!3d37.773967!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x43f71d878b4ae770!2sBauer&#39;s+Intelligent+Transportation!5e0!3m2!1sen!2sus!4v1424976017685" width="600" height="450" frameborder="0" style="border:0"></iframe>
						</div>
						<address class="pull-right text-right">
							<span>Bauer's Intelligent Transportation</span>
							<span>50 Pier</span>
							<span>San Francisco, CA</span>
							<span>94158-2193</span>
						</address>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<h3 class="text-center">Regulatory License Information</h3>
						<table class="table table-striped table-bordered">
							<tbody>
								<tr>
									<td class="text-center"><strong>TCP License</strong></td>
									<td class="text-center"><strong>DOT License</strong></td>
									<td class="text-center"><strong>PUC License</strong></td>
								</tr>
								<tr>
									<td class="text-center">TCP 8361A</td>
									<td class="text-center">1083917</td>
									<td class="text-center">8361SB</td>
								</tr>
							</tbody>
						</table>
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
