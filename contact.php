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
									<?php /*the_content(); */ ?>
									<form action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" id="contact-form">

									<input type=hidden name="oid" value="00DE0000000IvUX">
									<input type=hidden name="retURL" value="<?php bloginfo('url'); ?>/about-us/contact-thank-you/">
									<input type="hidden" name="debug" value="1">
									<input type="hidden" name="debugEmail" value="andy@roiworks.com">
									<input type="hidden" id="00NE0000000cAF6" name="00NE0000000cAF6" value="Charter">

									<div class="form-group">
										<label for="name">Contact Name</label>
										<input class="form-control" id="name" maxlength="80" name="name" size="20" type="text"  required=""/>
									</div>

									<div class="form-group">
										<label for="email">Email Address</label>
										<input class="form-control" id="email" maxlength="80" name="email" size="20" type="text"  required=""/>
									</div>

									<div class="form-group">
										<label for="phone">Phone</label>
										<input class="form-control" id="phone" maxlength="40" name="phone" size="20" type="tel"  required=""/>
									</div>

									<div class="form-group">
										<input type="text" class="form-control" id="company" name="company" placeholder="Company name" required="" aria-required="true">
									</div>

									<div class="form-group">
										<label for="description">Message</label>
										<textarea class="form-control" name="description"></textarea>
									</div>

									<input type="hidden"  id="external" name="external" value="1" />

									<button class="btn btn-lg btn-primary" type="submit" name="submit">Submit <i class="glyphicon glyphicon-chevron-right"></i></button>

									</form>
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
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25230.982017202507!2d-122.40132253110352!3d37.769581768436964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808f7fdb3f3fd373%3A0x4c7943276e39cb1d!2sPier+50%2C+San+Francisco%2C+CA+94158!5e0!3m2!1sen!2sus!4v1437177652214" width="600" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
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

		$('#contact-form').validate();
	});
</script>

<?php get_footer(); ?>
