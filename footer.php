			<footer class="footer" role="contentinfo">

				<div class="container">

				<div id="inner-footer" class="footer-links clearfix">

					<div class="row">
						<div class="col-sm-3 bucket">
							<h3 class="bucket-title">Services</h3>
							<?php footer_bucket_1(); ?>
						</div>
						<div class="col-sm-3 bucket">
							<h3 class="bucket-title">Company</h3>
							<?php footer_bucket_2(); ?>
						</div>
						<div class="col-sm-3 bucket">
							<h3 class="bucket-title">Environment</h3>
							<?php footer_bucket_3(); ?>
						</div>
						<div class="col-sm-3 bucket">
							<h3 class="bucket-title">Advertising</h3>
							<?php footer_bucket_4(); ?>
						</div>
					</div>

				</div> <!-- end #inner-footer -->

				<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>&nbsp;&nbsp;| <a href="?p=175">Terms &amp; Conditions</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="?p=547">Privacy Policy</a></p>

				</div> <!-- end .container -->

			</footer> <!-- end footer -->

		</div> <!-- end .wrapper -->

		<!-- all js scripts are loaded in library/bones.php -->
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->
