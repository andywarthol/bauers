
<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

	<?php dynamic_sidebar( 'sidebar1' ); ?>

<?php else : ?>
<div class="bar">
	<div class="widget about">
		<?php if ( is_page (array( 225, 181, 287 )) ) {
			footer_bucket_1();
		} elseif ( $post->post_parent == 225 || $post->post_parent == 181 || $post->post_parent == 228 || $post->post_parent == 250 || $post->post_parent == 287 ) {
			footer_bucket_1();
			// wp_nav_menu( array( 'theme_location' => 'footer-bucket-1', 'container' => '', 'container_class' => '', 'link_before' => '<i class="glyphicon glyphicon-plus"></i><i class="glyphicon glyphicon-minus"></i>') );
		} elseif ( is_page( 27 ) || is_page( 90 ) ) {
			footer_bucket_2();
		} elseif ( $post->post_parent == 27 || $post->post_parent == 90 ) {
			footer_bucket_2();
		} else {
			//get_sidebar();
		}?>
	</div>
	<button class="btn btn-lg btn-block btn-primary visible-xs" id="toggle_intake">Get a free quote <i class="glyphicon glyphicon-chevron-right"></i></button>
	<div class="widget quick-quote" id="intake_widget">
		<form class="intake-form" action="" id="intake_form">
			<legend>Get a Quote</legend>
			<fieldset>
				<div class="form-group">
					<select name="service" id="service" class="form-control">
						<option value="">Which service would you like?</option>
						<option value="charter">Charter</option>
						<option value="commuter">Commuter</option>
						<option value="events">Event Logistics Management</option>
					</select>
				</div>
				<div class="form-group">
					<input type="text" name="first_name" placeholder="First name" class="form-control" required="">
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
				<div class="form-group">
					<input type="text" name="pickup_date" placeholder="Pick up date" class="form-control" required="">
				</div>
				<div class="form-group">
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
		$('#intake_form').validate({

		});
	});
</script>