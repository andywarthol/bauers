<?php get_header(); ?>

<section class="standard">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-4 col-md-3">
						<?php
							get_sidebar();
						?>
					</div>
					<div class="col-sm-8 col-md-9 col-lg-8">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="row">
							<div class="col-sm-12">
								<article>
									<header>
										<h1 class="page-title"><?php the_title(); ?></h1>
									</header>
									<?php the_content(); ?>
								</article> <!-- end article -->
							</div>
						</div>
						<?php endwhile; endif; ?>
					</div>
				</div>
			</div>			
		</div>
	</div>
</section>
<script>
	jQuery(document).ready(function($){
		var getUrlParameter = function getUrlParameter(sParam) {
			var sPageURL = decodeURIComponent(window.location.search.substring(1)),
				sURLVariables = sPageURL.split('&'),
				sParameterName,
				i;

			for (i = 0; i < sURLVariables.length; i++) {
				sParameterName = sURLVariables[i].split('=');

				if (sParameterName[0] === sParam) {
					return sParameterName[1] === undefined ? true : sParameterName[1];
				}
			}
		};

		var service = getUrlParameter('service');
		
		/*if ( service == "busCharters" ) {
			$("#service option[id='charter']").attr("selected", "selected");
		} else if ( service == "airport" ) {
			$("#service option[id='airport']").attr("selected", "selected");
		} else if ( service == "shuttleService" ) {
			$("#service option[id='shuttle']").attr("selected", "selected");
		} else if ( service == "companyCommuter" ) {
			$("#service option[id='commuter']").attr("selected", "selected");
		} else if ( service == "corporateRentals" ) {
			$("#service option[id='corporate']").attr("selected", "selected");
		} else if ( service == "teamEvents" ) {
			$("#service option[id='team']").attr("selected", "selected");
		} else if ( service == "majorEvent" ) {
			$("#service option[id='major']").attr("selected", "selected");
		}*/

		$('.gallery .toggle').click(function(){
			var url = $(this).attr('src');
			$('.gallery .stage img').attr('src', url).hide().fadeIn();
		});

	}); 
</script>

<?php get_footer(); ?>