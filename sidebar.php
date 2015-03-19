
<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

	<?php dynamic_sidebar( 'sidebar1' ); ?>

<?php else : ?>
<div class="bar">
	
		<?php if ( is_page (array( 225, 181, 287, 250, 228 )) ) { ?>
			<div class="widget about">
				<?php footer_bucket_1(); ?>
			</div>
		<?php } elseif ( $post->post_parent == 225 || $post->post_parent == 181 || $post->post_parent == 228 || $post->post_parent == 250 || $post->post_parent == 287 ) { ?>
			<div class="widget about">
				<?php footer_bucket_1(); ?>
			</div>
		<?php } elseif ( is_page( 27 ) || is_page( 90 ) || is_page( 512 ) ) { ?>
			<div class="widget about">
				<?php footer_bucket_2(); ?>
			</div>
		<?php } elseif ( $post->post_parent == 27 || $post->post_parent == 90 ) { ?>
			<div class="widget about">
				<?php footer_bucket_2(); ?>
			</div>
		<?php } else {
			//get_sidebar();
		}?>
	<button class="btn btn-lg btn-block btn-primary visible-xs" id="toggle_intake">Get a free quote <i class="glyphicon glyphicon-chevron-right"></i></button>
	<div class="widget quick-quote" id="intake_widget">
		<form class="intake-form" action="" id="intake_form">
			<legend>Get a Quote</legend>
			<fieldset>
				<div class="form-group">
					<select name="service" id="service" class="form-control" required="">
						<option value="">- Pick a service -</option>
						<option value="charter">Charter</option>
						<option value="commuter">Commuter</option>
						<option value="events">Event Logistics Management</option>
					</select>
				</div>
				<div class="form-group" id="name_of_event" style="display: none">
					<input type="text" class="form-control" name="event_name" placeholder="Name of the event" required="">
				</div>
				<div class="form-group">
					<input type="text" name="first_name" id="first_name" placeholder="First name" class="form-control" required="">
				</div>
				<div class="form-group">
					<input type="text" name="last_name" placeholder="Last name" class="form-control" required="">
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
				<div class="form-group supplementary">
					<input type="text" name="pickup_date" placeholder="Pick up date" class="form-control" required="">
				</div>
				<div class="form-group supplementary">
					<input type="text" name="passenger_count" placeholder="# of passengers" class="form-control" required="">
				</div>
				<div class="form-group">
					<button class="btn btn-lg btn-primary btn-block">Get a quote <i class="glyphicon glyphicon-chevron-right"></i></button>
				</div>
			</fieldset>
		</form>
	</div>
</div>
<?php endif; ?>

<script>
	jQuery(document).ready(function($){
		
		$('#service').bind('change', function(){
	    if( $(this).val() !== "" ){
	      $(this).addClass('valid').removeClass('hot');
	    } else {
	      $(this).removeClass('valid');
	    }
		});

		// Quick Quote Form Functionality
		$('#service').change(function(){
			if ( $(this).val() == "charter" ){
				// $('#first_name').focus();
			} else if ( $(this).val() == "commuter" ){
				$('.supplementary').fadeOut();
				// $('#first_name').focus();
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
		$('#intake_form').validate({
			submitHandler: function() { 
				$('.intake-form button').prop('disabled', true);
				window.location = "?p=462"
			}
		});
	});
</script>