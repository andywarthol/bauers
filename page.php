<?php get_header(); ?>

<section class="standard">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php if (function_exists("builder_breadcrumb_lists")) { ?>
							<?php builder_breadcrumb_lists(); ?>
							<?php } ?>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-3">
						<?php
							if ($post->post_parent) {
							get_sidebar($post->post_parent);
							} else {
							get_sidebar();
							}
						?>
					</div>
					<div class="col-sm-8">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="row">
							<div class="col-sm-12">
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
		
	});
</script>

<?php get_footer(); ?>