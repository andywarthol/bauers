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

		<!-- jQuery UI -->
		<script src="<?php bloginfo('template_directory'); ?>/library/js/libs/jquery-ui.min.js"></script>

		<!-- Adroll 
		<script type="text/javascript">
		adroll_adv_id = "PCRCWFCHFNHWJL7M4OHO5M";
		adroll_pix_id = "P3GPK62QFVBGJJVWA3OVCQ";
		(function () {
		var oldonload = window.onload;
		window.onload = function(){
		   __adroll_loaded=true;
		   var scr = document.createElement("script");
		   var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
		   scr.setAttribute('async', 'true');
		   scr.type = "text/javascript";
		   scr.src = host + "/j/roundtrip.js";
		   ((document.getElementsByTagName('head') || [null])[0] ||
		    document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
		   if(oldonload){oldonload()}};
		}());
		</script> -->

		<!-- DoubleClick
		<noscript>
		<div style="display:inline;">
		<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/994542426/?value=0&amp;guid=ON&amp;script=0"/>
		</div>
		</noscript> -->

		<!-- Google Conversion Tracking
		<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 994542426;
		var google_custom_params = window.google_tag_params;
		var google_remarketing_only = true;
		/* ]]> */
		</script>
		<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
		</script> -->

		<!-- New Relic
		<script type="text/javascript">if(!NREUMQ.f){NREUMQ.f=function(){NREUMQ.push(["load",new Date().getTime()]);var e=document.createElement("script");e.type="text/javascript";e.src=(("http:"===document.location.protocol)?"http:":"https:")+"//"+"js-agent.newrelic.com/nr-100.js";document.body.appendChild(e);if(NREUMQ.a)NREUMQ.a();};NREUMQ.a=window.onload;window.onload=NREUMQ.f;};NREUMQ.push(["nrfj","beacon-2.newrelic.com","9794408066","2124736","ZQZQNkNWD0UCAhBfClxMZxBYGAhYBwQcGBVaEw==",0,134,new Date().getTime(),"","","","",""]);</script> -->

		<!-- CallRail
		<script type="text/javascript" src="//cdn.callrail.com/companies/229295903/d3fb626710a255df8c4d/12/swap.js"></script> -->


		<?php wp_footer(); ?>

	</body>

</html> <!-- end page. what a ride! -->
