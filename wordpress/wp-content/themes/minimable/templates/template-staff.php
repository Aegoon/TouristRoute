<?php
/**
 * Template Name: Template Staff
 * 
 */?>
	<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
	<section id="<?php echo the_fw_title() ?>" class="section-page <?php echo the_slug(); ?>">
	 	<div class="container">
			<div class="row">
				<div class="span12">
					<h2 class="section-title"><?php the_title(); ?></h2>
					<div class="row">
						<div class="span3 border" id="staff-desc" style="position:relative;">
							<h3 class="col-title color"><?php echo get_post_meta($post->ID, 'fw_title_left', true);?></h3>
							<?php the_content(); ?>
						</div>
						<div class="span9 border" id="staff-team" style="position:relative;">
							<?php query_posts('post_type=team&posts_per_page=-1'); ?>
							<?php $count_posts = wp_count_posts('team'); 
							$published_posts = $count_posts->publish; ?>
							<?php if (have_posts()) : ?>
							<?php if($published_posts > 1 ) { ?> 
							<ul class="nav nav-tabs">
							<?php $count = 0; ?>
							<?php while(have_posts()) : the_post() ?>
							<?php $count++; ?>
								<?php if ($count == 1) : ?>
							  	<li class="active"><a href="#<?php echo get_the_ID(); ?>" data-toggle="tab"><?php the_title(); ?></a></li>
						  	<?php else : ?>
							  	<li><a href="#<?php echo get_the_ID(); ?>" data-toggle="tab"><?php the_title(); ?></a></li>
							  <?php endif; ?>
							  <?php endwhile; ?>
							</ul>
							<?php } ?>
							<?php endif; ?>
							<div class="tab-content row">
							<?php if (have_posts()) : ?>
							<?php $count = 0; ?>
							<?php while(have_posts()) : the_post() ?>
							<?php $count++; ?>
								<?php if ($count == 1) : ?>
									<div class="tab-pane fade active in" id="<?php echo get_the_ID(); ?>">
								  	<div class="span3">
								  		<?php the_post_thumbnail('staff', array('class' => 'img-circle')); ?>
								  	</div>
								  	<div class="span6 description-text">
								  		<h3><?php the_title(); ?></h3>
								  		<?php the_content(); ?>
										</div>
							  	</div>
						  	<?php else : ?>
						  		<div class="tab-pane fade" id="<?php echo get_the_ID(); ?>">
								  	<div class="span3">
								  		<?php the_post_thumbnail('staff', array('class' => 'img-circle')); ?>
								  	</div>
								  	<div class="span6 description-text">
								  		<h3><?php the_title(); ?></h3>
								  		<?php the_content(); ?>
										</div>
							  	</div>
						  	<?php endif; ?>
							  <?php endwhile; ?>
							  <?php endif; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>