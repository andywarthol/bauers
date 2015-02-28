			<footer class="footer" role="contentinfo">

				<div class="container">

				<div id="inner-footer" class="footer-links clearfix">

					<div class="row">
						<div class="col-sm-3">
							<h3 class="bucket-title">Services</h3>
							<?php footer_bucket_1(); ?>
						</div>
						<div class="col-sm-3">
							<h3 class="bucket-title">Company</h3>
							<?php footer_bucket_2(); ?>
						</div>
						<div class="col-sm-3">
							<h3 class="bucket-title">Environmental Commitment</h3>
							<?php footer_bucket_3(); ?>
						</div>
						<div class="col-sm-3">
							<h3 class="bucket-title">Sponsorship &amp; Advertising</h3>
							<?php footer_bucket_4(); ?>
						</div>
					</div>

				</div> <!-- end #inner-footer -->

				<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>&nbsp;&nbsp;| <a href="#">Terms &amp; Conditions&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">Privacy Policy</a></a></p>

				</div> <!-- end .container -->

			</footer> <!-- end footer -->

			<!-- Quick Quote Modal -->
			<div class="modal fade" id="intake">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-body">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<form action="">
								<legend>Get a Quote<small>We'll get back to you in 24 hours</small></legend>
								<fieldset>
									<div class="form-group">
										<select name="service" id="service" class="form-control">
											<option value="">Which service would you like?</option>
											<option value="charter">Charter</option>
											<option value="commuter">Commuter</option>
											<option value="events">Event Logistics Management</option>
										</select>
									</div>
									<div class="form-group row">
										<div class="col-sm-6 left">
											<input type="text" name="first_name" placeholder="First name" class="form-control">
										</div>
										<div class="col-sm-6 right">
											<input type="text" name="last_name" placeholder="Last name" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<input type="email" class="form-control" name="email_address" placeholder="Email address">
									</div>
									<div class="form-group">
										<input type="tel" class="form-control" name="phone_number" placeholder="Phone number">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" name="company_name" placeholder="Company name">
									</div>
									<div class="form-group row">
										<div class="col-sm-6 left">
											<input type="text" name="pickup_date" placeholder="Pick up date" class="form-control">
										</div>
										<div class="col-sm-6 right">
											<input type="text" name="passenger_count" placeholder="# of passengers" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<button class="btn btn-lg btn-primary btn-block">Get a quote &rarr;</button>
									</div>
								</fieldset>
							</form>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

		</div> <!-- end .wrapper -->

		<!-- all js scripts are loaded in library/bones.php -->
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->
