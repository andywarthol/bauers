<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>	
<section class="hero light" id="hero">
	<div class="container">
		<div class="row">
			<div class="col-lg-11 col-lg-offset-1">
				<div class="row">
					<div class="col-sm-6 col-lg-7">
						<h1>Professional Transportation <br class="hidden-xs"/>for Any Occasion</h1>
						<h2 class="hidden-xs">Let our dedicated account managers, advanced technology platform, and extensive security checks ensure you'll have peace of mind. Over 25 years of experience with:</h2>
						<ul>
							<li>Charters</li>
							<li>Corporate Commuter Programs</li>
							<li>Major Event Logistics &amp; Transporation</li>
						</ul>
						<button class="btn btn-lg btn-block btn-primary visible-xs" id="toggle_intake">Get a free quote <i class="glyphicon glyphicon-chevron-right"></i></button>
					</div>
					<div class="col-sm-6 col-lg-5">
						<div class="card quick-quote">
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
									<div class="form-group" id="name_of_event" style="display: none">
										<input type="text" class="form-control" name="event_name" placeholder="Name of the event" required="">
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
									<div class="form-group row supplementary">
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
		<!-- <a class="down-arrow scroll" href="#services"></a> -->
	</div>
</section>
<section class="logos lightGrey">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-1 clients text-center">Our Clients:</div>
			<div class="col-lg-8">
				<div class="row">
					<div class="col-xs-6 col-sm-2"><img src="<?php bloginfo('template_directory'); ?>/library/images/oracle-racing-logo.jpg" alt=""></div>
					<div class="col-xs-6 col-sm-2 levis"><img src="<?php bloginfo('template_directory'); ?>/library/images/levis-stadium-logo.jpg" alt=""></div>
					<div class="col-xs-6 col-sm-2"><img src="<?php bloginfo('template_directory'); ?>/library/images/twitter-logo.jpg" alt=""></div>
					<div class="col-xs-6 col-sm-2 ea"><img src="<?php bloginfo('template_directory'); ?>/library/images/ea-games-logo.jpg" alt=""></div>
					<div class="col-xs-6 col-sm-2 pge"><img src="<?php bloginfo('template_directory'); ?>/library/images/pge-logo.jpg" alt=""></div>
					<div class="col-xs-6 col-sm-2 dreamforce"><img src="<?php bloginfo('template_directory'); ?>/library/images/dreamforce-logo.jpg" alt=""></div>
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
						    <div role="tabpanel" class="tab-pane active" id="charters">
						    	<div class="row">
						    		<div class="col-sm-12">
						    			<h2 class="text-center">Choose Your Adventure</h2>
						    			<p class="text-center hidden-xs">We make the journey part of the enjoyment of travel for a wide variety of activities, events and occasions for groups of up to 1,000.</p>
						    		</div>
						    	</div>
						    	<div class="row">
						    		<div class="col-sm-6 col-lg-6">
						    			<h3><a href="<?php the_field('airport_transfers_url'); ?>"><i class="icon airplane"></i>Airport Transfers</a></h3>
						    			<p><small>Take the hassle out of ground transportation after touching down at the airport.</small></p>
						    		</div>
						    		<div class="col-sm-6 col-lg-6">
						    			<h3><a href="<?php the_field('city_tours_url'); ?>"><i class="icon binoculars"></i>City Tours</a></h3>
						    			<p><small>Sightseeing tours showcase a city’s unique sights and culture for groups of all sizes.</small></p>
						    		</div>
						    	</div>
						    	<div class="row">
						    		<div class="col-sm-6 col-lg-6">
						    			<h3><a href="<?php the_field('snow_trips_url'); ?>"><i class="icon snow"></i>Snow Trips</a></h3>
						    			<p><small>Journey up to North Lake Tahoe &mdash; including Sugar Bowl, Alpine, Squaw, and North Star.</small></p>
						    		</div>
						    		<div class="col-sm-6 col-lg-6">
						    			<h3><a href="<?php the_field('wine_country_tours_url'); ?>"><i class="icon wine"></i>Wine Country Tours</a></h3>
						    			<p><small>Exclusive, curated tours led by wine experts. Tastings and gourmet lunch included.</small></p>
						    		</div>
						    	</div>
						    	<div class="row">
						    		<div class="col-sm-6 col-lg-6">
						    			<h3><a href="<?php the_field('black_car_service_url'); ?>"><i class="icon car"></i>Black Car Service</a></h3>
						    			<p><small>Travel in style with luxury black car transportation.</small></p>
						    		</div>
						    		<div class="col-sm-6 col-lg-6">
						    			<h3><a href="<?php the_field('group_events_url'); ?>"><i class="icon group"></i>Group Events</a></h3>
						    			<p><small>The list of Bauer's IT adventures is nearly endless. Tell us what your plans are.</small></p>
						    		</div>
						    	</div>
						    	<div class="row">
										<div class="col-sm-12 text-center">
											<a href="#hero" class="signup btn btn-lg btn-primary signup">Get a free charter quote <i class="glyphicon glyphicon-chevron-right"></i></a>
										</div>
									</div>
						    </div>
						    <div role="tabpanel" class="tab-pane" id="commuters">
						    	<div class="row">
						    		<div class="col-sm-12">
						    			<h2 class="text-center">Healthier Commuting</h2>
						    			<p class="text-center hidden-xs">Bauer’s commuter services create efficient and sustainable commute-to-work programs, effectively fulfilling transportation needs for employees of large organizations.</p>
						    		</div>
						    		<div class="col-sm-6 col-lg-6">
						    			<h3><a href="<?php the_field('cost_effective_url'); ?>"><i class="retention icon"></i>Surprisingly Cost-Effective</a></h3>
						    			<p><small>Increase retention and efficiency by removing the commute headache from your employees.</small></p>
						    		</div>
						    		<div class="col-sm-6 col-lg-6">
						    			<h3><a href="<?php the_field('last_mile_shuttles_url'); ?>"><i class="up icon"></i>Last-Mile Shuttles</a></h3>
						    			<p><small>Just a little too far from the train? Make public transportation easy with our last-mile shuttles.</small></p>
						    		</div>
						    	</div>
						    	<div class="row">
						    		<div class="col-sm-6 col-lg-6">
						    			<h3><a href="<?php the_field('increase_productivity_url'); ?>"><i class="earth icon"></i>Increase Productivity</a></h3>
						    			<p><small>When employees ride with us they can focus on a deadline with Wi-Drive.</small></p>
						    		</div>
						    		<div class="col-sm-6 col-lg-6">
						    			<h3><a href="<?php the_field('commuter_benefits_url'); ?>"><i class="like icon"></i>Provide Commuter Benefits</a></h3>
						    			<p><small>Commuter Benefits are a competitive incentive for recruiting the very best talent.</small></p>
						    		</div>
						    	</div>
						    	<div class="row">
										<div class="col-sm-12 text-center">
											<a href="#hero" class="signup btn btn-lg btn-primary signup">Get a free commuter quote <i class="glyphicon glyphicon-chevron-right"></i></a>
										</div>
									</div>
						    </div>
						    <div role="tabpanel" class="tab-pane" id="events">
						    	<div class="row">
						    		<div class="col-sm-12">
						    			<h2 class="text-center">Event Logistics</h2>
						    			<p class="text-center hidden-xs">Need to move more than 1,000 people? Remove the headache from your next major event with our team of expert planners that delivers innovative solutions.</p>
						    		</div>
						    		<div class="col-sm-6 col-lg-6">
						    			<h3><a href="<?php the_field('concerts_festivals_url'); ?>"><i class="music icon"></i>Concerts &amp; Festivals</a></h3>
						    			<p><small>Get thousands of attendees to and from fun and funky venues - even off the beaten path.</small></p>
						    		</div>
						    		<div class="col-sm-6 col-lg-6">
						    			<h3><a href="<?php the_field('conferences_conventions_url'); ?>"><i class="conference icon"></i>Conferences &amp; Conventions</a></h3>
						    			<p><small>Support the transportation needs of your major event, whether it’s across the country or around the world.</small></p>
						    		</div>
						    	</div>
						    	<div class="row">
						    		<div class="col-sm-6 col-lg-6">
						    			<h3><a href="<?php the_field('sports_events_url'); ?>"><i class="sports icon"></i>Sports Events &amp; Marathons</a></h3>
						    			<p><small>Need to handle a marathon, football game, or PGA tournament? Create exceptional travel experiences for participants and fans.</small></p>
						    		</div>
						    		<div class="col-sm-6 col-lg-6">
						    			<h3><a href="<?php the_field('traffic_management_url'); ?>"><i class="car icon"></i>Parking &amp; Traffic Management</a></h3>
						    			<p><small>Green, comprehensive services for parking management that can handle any size event.</small></p>
						    		</div>
						    	</div>
						    	<div class="row">
						    		<div class="col-sm-6 col-lg-6">
						    			<h3><a href="<?php the_field('travel_demand_url'); ?>"><i class="travel icon"></i>Travel Demand</a></h3>
						    			<p><small>Get single-occupancy private vehicles off the road with our “Smart Growth” policies and plans.</small></p>
						    		</div>
						    		<div class="col-sm-6 col-lg-6">
						    			<h3><a href="<?php the_field('vip_transportation_url'); ?>"><i class="crown icon"></i>VIP Transportation</a></h3>
						    			<p><small>If you have to move large numbers of VIPs, Bauer’s will provide a seamless, professional experience.</small></p>
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
							<div class="col-sm-4 col-lg-5"><img class="img-responsive img-thumbnail" src="<?php bloginfo('template_directory'); ?>/library/images/ride-in-style.jpg" alt=""></div>
							<div class="col-sm-8 col-lg-7">
								<h2>Ride in Style</h2>
								<p>Bauer’s offers an impressive fleet of sustainable luxury vehicles equipped with all the latest features and amenities for private or corporate events.</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-4 col-lg-5"><img class="img-responsive img-thumbnail" src="<?php bloginfo('template_directory'); ?>/library/images/get-comfortable.jpg" alt=""></div>
							<div class="col-sm-8 col-lg-7">
								<h2>Get Comfortable</h2>
								<p>Sit back and relax into leatherette seating and enjoy our customized first-class interiors.</p>
							</div>
						</div>
					</div>
				</div>
				<hr class="hidden-xs hidden-sm"/>
				<div class="row">
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-4 col-lg-5"><img class="img-responsive img-thumbnail" src="<?php bloginfo('template_directory'); ?>/library/images/stay-connected.jpg" alt=""></div>
							<div class="col-sm-8 col-lg-7">
								<h2>Stay Connected</h2>
								<p>With WI-FI on board and power ports throughout the vehicles, you can keep up with your deadlines (or stock quotes).</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row">
							<div class="col-sm-4 col-lg-5"><img class="img-responsive img-thumbnail" src="<?php bloginfo('template_directory'); ?>/library/images/go-green.jpg" alt=""></div>
							<div class="col-sm-8 col-lg-7">
								<h2>Go Green</h2>
								<p>Stay comfortable and comply with anti-idling laws with our green bus rentals and hybrids.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br class="hidden-xs hidden-sm"/><br class="hidden-xs"/>
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

		var userAgent = window.navigator.userAgent;

		if (userAgent.match(/iPad/i) || userAgent.match(/iPhone/i)) {
		  $('.signup').smoothScroll({
				offset: 260,
				easing: 'swing',
				beforeScroll: function() {
					$('#toggle_intake').remove();
					$('.quick-quote').addClass('active');
				},
				afterScroll: function() {
					setTimeout(function(){
						$('.card').addClass('hot');
						$('#service').addClass('hot');
					}, 150);
				}
			});
		}
		else {
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
		}
		

		$('#service').bind('change', function(){
	    if( $(this).val() !== "" ){
	      $(this).addClass('valid').removeClass('hot');
	    } else {
	      $(this).removeClass('valid');
	    }
		});

		// Quick Quote Form Field Functionality
		$('#service').change(function(){
			if ( $(this).val() == "charter" ){
				$('#name_of_event').hide();
				$('.supplementary').fadeIn();
			} else if ( $(this).val() == "commuter" ){
				$('.supplementary').fadeOut();
				$('#name_of_event').fadeOut();
			} else if ( $(this).val() == "events" ){
				$('.supplementary').hide();
				$('#name_of_event').fadeIn();
			}
		});

		// Input mask - Restrict count, formatting, numbers only
		$.extend($.inputmask.defaults, {
			'placeholder': " "
		});
		$('input[type="tel"]').inputmask("(999) 999-9999");

		// Form Validation
		$('#intake').validate({
			submitHandler: function() { 
				window.location = "quick-quote-thank-you"
			}
		});

	});
</script>

<?php get_footer(); ?>