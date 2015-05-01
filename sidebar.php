
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
		<form id="intake_form" class="intake-form" action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="post">
			<legend>Get a Quote<small>More details? Please use the <a href="request-for-proposal">RFP Form</a>.</small></legend>
			<fieldset>
				<div class="form-group">
					<select name="00NE0000000cAF6" id="service" class="form-control" required="">
						<option value="">Which service would you like?</option>
						<option value="Charter">Charter</option>
						<option value="Transit">Commuter</option>
						<option value="Special Event">Event Logistics Management</option>
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
					<input type="email" class="form-control" id="email" name="email" placeholder="Email address" required="">
				</div>
				<div class="form-group">
					<input type="tel" class="form-control phoneUS" id="phone" name="phone" placeholder="Phone number" required="" minlength="14">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="company" name="company" placeholder="Company name" required="">
				</div>
				<div class="form-group row supplementary">
					<div class="col-sm-6 left">
						<input type="text" id="pickup_date" name="00NE0000000cAFG" placeholder="Pick up date" class="form-control" required="">
						<!--<input readonly="true" type="text" id="pickup_date" name="00NE0000000cAFG" placeholder="Pick up date" class="form-control" required="" value="">-->
					</div>
					<div class="col-sm-6 right">
						<input type="text" id="passenger_count" name="00NE0000000cE27" placeholder="# of passengers" class="form-control" required="">
						<input type="hidden" id="LeadSource" name="LeadSource" value="Quick Quotes 2">
						<input type=hidden name="oid" value="00DE0000000IvUX">
						<input type=hidden name="retURL" value="<?php bloginfo('url'); ?>/thank-you">
						<input type="hidden" id="sf_SFGA2_Form_Name__c" class="w2linput hidden" name="SFGA2_Form_Name__c" value="">
						<input type="hidden" id="sf_SFGA2_Referring_Website__c" class="w2linput hidden" name="SFGA2_Referring_Website__c" value="">
						<input type="hidden" id="sf_SFGA2_Keyword_Search__c" class="w2linput hidden" name="SFGA2_Keyword_Search__c" value="">
						<input type="hidden" id="sf_SFGA2_Landing_Page__c" class="w2linput hidden" name="SFGA2_Landing_Page__c" value="">
						<input type="hidden" id="sf_SFGA2_Device__c" class="w2linput hidden" name="SFGA2_Device__c" value="">
						<input type="hidden" id="sf_SFGA2_Date_Of_Visit__c" class="w2linput hidden" name="SFGA2_Date_Of_Visit__c" value="">
						<input type="hidden" id="sf_SFGA2_Web_Source__c" class="w2linput hidden" name="SFGA2_Web_Source__c" value="">
						<input type="hidden" id="sf_SFGA2_Campaign_Name__c" class="w2linput hidden" name="SFGA2_Campaign_Name__c" value="">
						<input type="hidden" id="sf_SFGA2_Campaign_Source__c" class="w2linput hidden" name="SFGA2_Campaign_Source__c" value="">
						<input type="hidden" id="sf_SFGA2_Campaign_Content__c" class="w2linput hidden" name="SFGA2_Campaign_Content__c" value="">
						<input type="hidden" id="sf_SFGA2_Campaign_Term__c" class="w2linput hidden" name="SFGA2_Campaign_Term__c" value="">
						<input type="hidden" id="sf_SFGA2_Campaign_Medium__c" class="w2linput hidden" name="SFGA2_Campaign_Medium__c" value="">
						<input type="hidden" id="sf_SFGA2_Total_Time_Seconds__c" class="w2linput hidden" name="SFGA2_Total_Time_Seconds__c" value="">
						<input type="hidden" id="sf_SFGA2_Active_Time_Seconds__c" class="w2linput hidden" name="SFGA2_Active_Time_Seconds__c" value="">
						<input type="hidden" id="sf_SFGA2_Idle_Time_Seconds__c" class="w2linput hidden" name="SFGA2_Idle_Time_Seconds__c" value="">
						<input type="hidden" id="sf_SFGA2_Total_Time_Display__c" class="w2linput hidden" name="SFGA2_Total_Time_Display__c" value="">
						<input type="hidden" id="sf_SFGA2_Idle_Time_Display__c" class="w2linput hidden" name="SFGA2_Idle_Time_Display__c" value="">
						<input type="hidden" id="sf_SFGA2_Pages_Navigated__c" class="w2linput hidden" name="SFGA2_Pages_Navigated__c" value="">
						<input type="hidden" id="sf_SFGA2_Past_Visits__c" class="w2linput hidden" name="SFGA2_Past_Visits__c" value="">
						<input type="hidden" id="sf_SFGA2_Page_Visits__c" class="w2linput hidden" name="SFGA2_Page_Visits__c" value="">
						<input type="hidden" id="sf_SFGA2_Lead_Score__c" class="w2linput hidden" name="SFGA2_Lead_Score__c" value="">
						<!--<input type="hidden" name="debug" value=1>
						<input type="hidden" name="debugEmail" value="andy.roiworks@gmail.com">-->
					</div>
				</div>
				<div class="form-group">
					<button class="btn btn-lg btn-primary btn-block">Get a quote <i class="glyphicon glyphicon-chevron-right"></i></button>
				</div>
			</fieldset>
		</form>
		<?php /*
		<form class="intake-form" action="" id="intake_form">
			<legend>Get a Quote <small>More details? Use the <a href="<?php bloginfo('url'); ?>/request-for-proposal" title="">RFP Form</a>.</small></legend>
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
		</form> */ ?>
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