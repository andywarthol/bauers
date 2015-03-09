<?php
/*
Template Name: Services
*/
?>

<?php get_header(); ?>

<section class="services-hero">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php if (function_exists("builder_breadcrumb_lists")) { ?>
					<?php builder_breadcrumb_lists(); ?>
				<?php } ?>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1">
	    	<div class="row">
	    		<div class="col-sm-12 text-center">
	    			<h1>Features</h1>
						<p>Build the optimal rate plans for your product or service, without constraints quickly and easily.</p>
	    			<a href="../sign-up" class="btn btn-lg btn-primary">Create your free account &raquo;</a>
	    		</div>
	    		<div class="col-sm-6">
	    			<img src="<?php bloginfo('template_directory'); ?>/library/images/macbook-air-chart.png" alt="">
	    		</div>
	    	</div>
	    </div>
	  </div>
	</div>
</section>
<section class="charters">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 col-md-12">
	    	<div class="row">
	    		<div class="col-sm-12">
	    			<h1>Easy Rate Plan and User Management</h1>
	    			<p>Intuitive management tools via our user portal, or programmatically using the BillForward API.</p>
	    		</div>
	    		<div class="col-sm-3 col-lg-offset-1 iphone col-sm-offset-2"><img src="<?php bloginfo('template_directory'); ?>/library/images/iphone-5c.png" alt=""></div>
	    		<div class="col-md-6">
	    			<ul class="features">
	    				<li>Upgrades / downgrades</li>
	    				<li>Automatic proration</li>
	    				<li>Rate plan switching version control</li>
	    				<li>Dunning management</li>
	    				<li>User self-service tools</li>
	    				<li>Multi subscription</li>
	    			</ul>
	    			<a href="../sign-up" class="btn btn-lg btn-primary">Create your free account &raquo;</a>
	    		</div>
	    	</div>
	    </div>
    </div>
  </div>
</section>
<section class="commuters">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12">
				<h1>Metrics &amp; <br class="visible-xs"/>Analytical Tools</h1>
				<p>We've tried to keep things as simple as possible for fellow developers to work with us.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 col-md-12">
	    	<div class="row">
	    		<div class="col-md-5 col-md-offset-1 col-sm-6 col-lg-offset-2">
	    			<ul class="features">
	    				<li>Subscription analytics</li>
	    				<li>Customer analytics</li>
	    				<li>Rate plan analytics</li>
	    				<li>Analytics &amp; metrics API</li>
	    				<li>Import 3rd party data</li>
	    			</ul>
	    			<a href="../sign-up" class="btn btn-lg btn-primary">Create your free account &raquo;</a>
	    		</div>
	    		<div class="col-sm-5 mac"><img src="<?php bloginfo('template_directory'); ?>/library/images/mac-chart.png" alt=""></div>
	    	</div>
	    </div>
		</div>
	</div>
</section>
<section class="event-logistics">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12">
				<h1>Developer Tools</h1>
				<p>We have tried to keep things as simple as possible for developers to work with BillForward. <br class="visible-lg">Because life's too short for $*1t#y APIs.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 col-md-12">
	    	<div class="row">
	    		<div class="col-sm-5 dev"><img src="<?php bloginfo('template_directory'); ?>/library/images/coming-soon.png" alt=""></div>
	    		<div class="col-sm-7">
	    			<ul class="features">
	    				<li>REST API</li>
	    				<li>Webhooks API</li>
	    				<li>Fully customizable checkout process</li>
	    				<li>Fully customizable subscription events email</li>
	    				<li>3rd party app connector</li>
	    			</ul>
	    			<a href="https://docs.billforward.net" target="_blank" class="btn btn-lg btn-primary">View Documentation &raquo;</a>
	    		</div>
	    	</div>
	    </div>
		</div>
	</div>
</section>
<section id="faq">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-lg-offset-1 col-md-12">
				<h1>FAQ</h1>
				<?php if(get_field('faq')): ?>
 
					<div class="panel-group" id="accordion">

					<?php while(has_sub_field('faq')): ?>

						<div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php the_sub_field('id'); ?>">
					          <?php the_sub_field('question'); ?>
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
	</div>
</section>
<script src="<?php bloginfo('template_directory'); ?>/library/js/jquery.inview.min.js"></script>
<script>
	jQuery(document).ready(function($){
		$('#collapse1.panel-collapse').addClass('in');
	});
</script>
<?php get_footer(); ?>
