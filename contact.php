<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<section class="contact">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-12 col-md-8 col-md-offset-2">
						<h1 class="page-title">Contact Us</h1>
						<div class="row">
							<div class="col-sm-6 form">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									<?php the_content(); ?>
								<?php endwhile; endif; ?>
							</div>
							<div class="col-sm-6">
								<div class="well">
									<address class="address">
										<span>Bauer's Intelligent Transportation</span>
										<span>50 Pier</span>
										<span>San Francisco, CA 94158</span>
									</address>
									<hr>
									<address class="details">
										<span><strong>Phone: </strong>1-800-546-6688</span>
										<span><strong>Fax: </strong>415-522-1600</span>
									</address>
								</div>
								<div class="google-map">
									<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12614.742836221516!2d-122.38716!3d37.773967!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x43f71d878b4ae770!2sBauer&#39;s+Intelligent+Transportation!5e0!3m2!1sen!2sus!4v1424976017685" width="600" height="500" frameborder="0" style="border:0"></iframe>
								</div>
							</div>
						</div>
						<hr>
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
		</div>
	</div>
</section>
<script>
	jQuery(document).ready(function($){
		// Input mask - Restrict count, formatting, numbers only
		$.extend($.inputmask.defaults, {
			'placeholder': " "
		});
		$('input[type="tel"]').inputmask("(999) 999-9999");
	});
</script>

<?php get_footer(); ?>
