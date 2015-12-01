<?php
/*
Template Name: Our Fleet
*/
?>
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
									<?php /*the_content();*/ ?>
									<h2>Select Your Perfect Bauer’s IT Vehicle</h2>
									<p>Bauer’s Intelligent Transportation offers an impressive fleet of sustainable luxury vehicles equipped with all the latest features and amenities for private or corporate events.  Choose from our selection of premier limousines, luxury sedans, shuttle buses, and motor coaches to travel to your destination in style. Impeccably maintained and thoroughly detailed, our vehicle fleet represents only the finest in San Francisco transportation.</p>
									<div id="slider" class="carousel slide" data-ride="carousel" data-interval="false">
										<ol class="carousel-indicators">
											<li data-target="#slider" data-slide-to="0" class="active"></li>
											<li data-target="#slider" data-slide-to="1" class=""></li>
											<li data-target="#slider" data-slide-to="2" class=""></li>
											<li data-target="#slider" data-slide-to="3" class=""></li>
										</ol>
										<div class="carousel-inner">
											<div class="item active">
												<img src="<?php bloginfo('template_directory'); ?>/library/images/motorcoach-lg.jpg">
												<div class="container">
													<div class="carousel-caption">
														<h1>Executive Motor Coaches</h1>
														<p>Perfect for big groups and seats from 41 to 61 people.<br/><a href="#">View motor coach gallery &raquo;</a></p>
													</div>
												</div>
											</div>
											<div class="item">
												<img src="<?php bloginfo('template_directory'); ?>/library/images/shuttle-lg.jpg">
												<div class="container">
													<div class="carousel-caption">
														<h1>Shuttle Busses</h1>
														<p>Our luxury shuttles accommodate smaller groups – around 22 to 32 people.<br/><a href="#">View shuttle bus gallery &raquo;</a></p>
													</div>
												</div>
											</div>
											<div class="item">
												<img src="<?php bloginfo('template_directory'); ?>/library/images/sprinter-lg.jpg">
												<div class="container">
													<div class="carousel-caption">
														<h1>Sprinters</h1>
														<p>Our executive sprinter vans accommodate groups of up to 14 passengers.<br/><a href="#">View sprinter allery &raquo;</a></p>
													</div>
												</div>
											</div>
											<div class="item">
												<img src="<?php bloginfo('template_directory'); ?>/library/images/sedan-lg.jpg">
												<div class="container">
													<div class="carousel-caption">
														<h1>Luxury Sedans</h1>
														<p>From limousines to SUVs to classic sedans, great for groups 4 or less.<br/><a href="#">View luxury sedan gallery &raquo;</a></p>
													</div>
												</div>
											</div>
										</div>
										<a class="left carousel-control" href="#slider" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
										<a class="right carousel-control" href="#slider" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
									</div>
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