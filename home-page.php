<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>	
<section class="hero light" id="hero">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row">
					<div class="col-sm-6 col-lg-7">
						<h1>Lorem ipsum dolor sit,<br/>Consectetur adipisicing.</h1>
						<h2>Minima alias veritatis accusantium aperiam. Aperiam impedit natus accusantium neque ullam consequatur deserunt, blanditiis atque aspernatur architecto, porro sapiente repellendus magni et!</h2>
					</div>
					<div class="col-sm-6 col-lg-5">
						<div class="card">
							<?php /*echo do_shortcode('[formidable id=6]'); ?>*/ ?>
							<form id="intake" class="intake-form" action="">
								<legend>Get a Quote<small>We'll get back to you in 24 hours</small></legend>
								<fieldset>
									<div class="form-group">
										<select name="service" id="service" class="form-control" required="">
											<option value="">Which service would you like?</option>
											<option value="charter">Charter</option>
											<option value="commuter">Commuter</option>
											<option value="events">Event Logistics Management</option>
										</select>
									</div>
									<div class="form-group row">
										<div class="col-sm-6 left">
											<input type="text" id="first_name" name="first_name" placeholder="First name" class="form-control" required="">
										</div>
										<div class="col-sm-6 right">
											<input type="text" name="last_name" placeholder="Last name" class="form-control" required="">
										</div>
									</div>
									<div class="form-group">
										<input type="email" class="form-control" name="email_address" placeholder="Email address" required="">
									</div>
									<div class="form-group">
										<input type="tel" class="form-control" name="phone_number" placeholder="Phone number" required="">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="company_name" placeholder="Company name" required="">
									</div>
									<div class="form-group row">
										<div class="col-sm-6 left">
											<input type="text" name="pickup_date" placeholder="Pick up date" class="form-control" required="">
										</div>
										<div class="col-sm-6 right">
											<input type="text" name="passenger_count" placeholder="# of passengers" class="form-control" required="">
										</div>
									</div>
									<div class="form-group">
										<button class="btn btn-lg btn-primary btn-block">Get a quote <i class="glyphicon glyphicon-chevron-right"></i></button>
									</div>
								</fieldset>
							</form> 
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="down-arrow scroll" href="#services"></a>
	</div>
</section>
<section class="logos lightGrey">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-1 clients text-center">Our Clients:</div>
			<div class="col-lg-8">
				<div class="row">
					<div class="col-sm-2"><img src="<?php bloginfo('template_directory'); ?>/library/images/linkedin-logo.jpg" alt=""></div>
					<div class="col-sm-2 levis"><img src="<?php bloginfo('template_directory'); ?>/library/images/levis-stadium-logo.jpg" alt=""></div>
					<div class="col-sm-2"><img src="<?php bloginfo('template_directory'); ?>/library/images/twitter-logo.jpg" alt=""></div>
					<div class="col-sm-2 ea"><img src="<?php bloginfo('template_directory'); ?>/library/images/ea-games-logo.jpg" alt=""></div>
					<div class="col-sm-2 pge"><img src="<?php bloginfo('template_directory'); ?>/library/images/pge-logo.jpg" alt=""></div>
					<div class="col-sm-2 livenation"><img src="<?php bloginfo('template_directory'); ?>/library/images/live-nation-logo.jpg" alt=""></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="features" id="services">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<div class="row">
					<div class="col-sm-12">
						<h1>Take your next trip with us</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div role="tabpanel">
						  <!-- Nav tabs -->
						  <ul class="nav nav-tabs" role="tablist">
						    <li role="presentation" class="active"><a href="#charters" aria-controls="charters" role="tab" data-toggle="tab">Charters</a></li>
						    <li role="presentation" class="two"><a href="#commuters" aria-controls="commuters" role="tab" data-toggle="tab">Corporate Commuter</a></li>
						    <li role="presentation" class="three"><a href="#events" aria-controls="events" role="tab" data-toggle="tab">Major Events Transportation</a></li>
						  </ul>
						  <!-- Tab panes -->
						  <div class="tab-content">
						    <div role="tabpanel" class="tab-pane fade in active" id="charters">
						    	<div class="row">
						    		<div class="col-sm-6 col-lg-6">
						    			<h2><a href="#"><i class="icon airplane"></i>Airport Transfers</a></h2>
						    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis odio ab reprehenderit.</p>
						    		</div>
						    		<div class="col-sm-6 col-lg-6">
						    			<h2><a href="#"><i class="icon binoculars"></i>City Tours</a></h2>
						    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis odio ab reprehenderit.</p>
						    		</div>
						    	</div>
						    	<div class="row">
						    		<div class="col-sm-6 col-lg-6">
						    			<h2><a href="#"><i class="icon snow"></i>Snow Trips</a></h2>
						    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis odio ab reprehenderit.</p>
						    		</div>
						    		<div class="col-sm-6 col-lg-6">
						    			<h2><a href="#"><i class="icon wine"></i>Wine Country Tours</a></h2>
						    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis odio ab reprehenderit.</p>
						    		</div>
						    	</div>
						    	<div class="row">
						    		<div class="col-sm-6 col-lg-6">
						    			<h2><a href="#"><i class="icon group"></i>Group Events</a></h2>
						    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis odio ab reprehenderit.</p>
						    		</div>
						    		<div class="col-sm-6 col-lg-6">
						    			<h2><a href="#"><i class="icon car"></i>Black Car Service</a></h2>
						    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis odio ab reprehenderit.</p>
						    		</div>
						    	</div>
						    </div>
						    <div role="tabpanel" class="tab-pane fade" id="commuters">...</div>
						    <div role="tabpanel" class="tab-pane fade" id="events">...</div>
						  </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12 text-center">
						<a href="#hero" class="signup btn btn-lg btn-primary signup">Get a free quote <i class="glyphicon glyphicon-chevron-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="testimonials light" id="testimonials">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Testimonials</h1>
			</div>
		</div>
		<?php if(get_field('testimonials')): ?>
		<div class="row">
			<?php while(has_sub_field('testimonials')): ?>
      <div class="col-sm-4 text-center">
				<img class="thumbnail img-circle" src="<?php the_sub_field('headshot'); ?>" alt="">
  			<blockquote>
      		<?php the_sub_field('quote'); ?> <small><?php the_sub_field('name'); ?>, <?php the_sub_field('company'); ?></small>
      	</blockquote>
      </div>
      <?php endwhile; ?>
    </div>
  	<?php endif; ?>
  	<div class="row">
			<div class="col-sm-12 text-center">
				<a href="#hero" class="btn btn-lg btn-default signup">Get a free quote <i class="glyphicon glyphicon-chevron-right"></i></a>
			</div>
		</div>
	</div>
</section>
<section class="benefits">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row">
					<div class="col-sm-12">
						<h1>We take care of everything</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-4 col-lg-5"><img class="img-responsive img-thumbnail" src="http://placehold.it/160x100" alt=""></div>
							<div class="col-sm-8 col-lg-7">
								<h2>Ride in Style</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore quisquam consectetur unde sae.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-4 col-lg-5"><img class="img-responsive img-thumbnail" src="http://placehold.it/160x100" alt=""></div>
							<div class="col-sm-8 col-lg-7">
								<h2>Get Comfortable</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore quisquam consectetur unde sae.</p>
							</div>
						</div>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-4 col-lg-5"><img class="img-responsive img-thumbnail" src="http://placehold.it/160x100" alt=""></div>
							<div class="col-sm-8 col-lg-7">
								<h2>Stay Connected</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore quisquam consectetur unde sae.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-4 col-lg-5"><img class="img-responsive img-thumbnail" src="http://placehold.it/160x100" alt=""></div>
							<div class="col-sm-8 col-lg-7">
								<h2>Go Green</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore quisquam consectetur unde sae.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-sm-12 text-center">
				<a href="#hero" class="btn btn-lg btn-primary signup">Get a free quote <i class="glyphicon glyphicon-chevron-right"></i></a>
			</div>
		</div>
	</div>
</section>
<section class="faq light">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<h1>Frequently Asked Questions</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-8 col-md-offset-2">
				<?php if(get_field('faq')): ?>
 
					<div class="panel-group" id="accordion">

					<?php while(has_sub_field('faq')): ?>

						<div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php the_sub_field('id'); ?>" class="collapsed">
					          <i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-minus"></i>	<?php the_sub_field('question'); ?>
					        </a>
					      </h4>
					    </div>
					    <div id="collapse<?php the_sub_field('id'); ?>" class="panel-collapse collapse">
					      <div class="panel-body">
					        <?php the_sub_field('answer'); ?>
					      </div>
					    </div>
					  </div>
				
					<?php endwhile; ?>
				
					</div>
				
				<?php endif; ?>
				
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<p class="text-center"><a href="#hero" class="btn btn-lg btn-default signup">Get a free quote <i class="glyphicon glyphicon-chevron-right"></i></a></p>
			</div>
		</div>
	</div>
</section>
<script>
	jQuery(document).ready(function($){
		// Accordion
		$('#collapse1').addClass('in').parent().find('.panel-heading a').removeClass('collapsed');

		// Smooth Scroll Functionality
		$('.scroll, .scroll a').smoothScroll({
			offset: -60,
			easing: 'swing'
		});

		$('.signup').smoothScroll({
			offset: -100,
			easing: 'swing',
			afterScroll: function() {
				setTimeout(function(){
					$('.card').addClass('hot');
					$('#service').addClass('hot');
				}, 150);
			}
		});

		$('#service').bind('change click', function(){
	    if( $(this).val() !== "" ){
	      $(this).addClass('valid').removeClass('hot');
	      $('#first_name').focus();
	    } else {
	      $(this).removeClass('valid');
	    }
		});

		// Form Validation
		$('#intake').validate({

		});

	});
</script>

<?php get_footer(); ?>