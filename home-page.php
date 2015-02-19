<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>	
<section class="hero light">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
				<div class="row">
					<div class="col-sm-6">
						<h1>Lorem ipsum dolor sit amet<br/>Consectetur adipisicing elit.</h1>
					</div>
					<div class="col-sm-6"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="testimonials">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h1>Customers Love Us</h1>
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
	</div>
</section>
<section class="faq">
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
				<p class="text-center"><a href="#contact" data-toggle="modal" data-target="#contact" class="btn btn-lg btn-primary">Get started <i class="glyphicon glyphicon-chevron-right"></i></a></p>
			</div>
		</div>
	</div>
</section>
<script>
	jQuery(document).ready(function($){
		// Accordion
		$('#collapse1').addClass('in').parent().find('.panel-heading a').removeClass('collapsed');
	});
</script>

<?php get_footer(); ?>