<?php
/**
 * Template Name: Template Contact
 * 
 */?>
	<section id="<?php echo the_fw_title() ?>" class="section-page <?php echo the_slug(); ?>">
		<div class="container">
			<h2 class="section-title"><?php the_title(); ?></h2>
			<div class="row">
				<div class="span4" id="find-us">
					<h3>
						<?php if (get_post_meta($post->ID, 'fw_contact_info_title', true)) {
						echo get_post_meta($post->ID, 'fw_contact_info_title', true);
						} else { ?> 
						Find Us
						<?php }?>
					</h3>
					<ul class="unstyled contact-info">
						<?php if (get_post_meta($post->ID, 'fw_address_label', true)) { ?>
						<li><span class="fa fa-map-marker"></span> <span class="color"><?php echo get_post_meta($post->ID, 'fw_address_label', true);?>:</span> <?php echo get_post_meta($post->ID, 'fw_address_field', true);?></li>
						<?php } ?>
						<?php if (get_post_meta($post->ID, 'fw_phone_label', true)) { ?>
						<li><span class="fa fa-signal"></span> <span class="color"><?php echo get_post_meta($post->ID, 'fw_phone_label', true);?>:</span> <?php echo get_post_meta($post->ID, 'fw_phone_field', true);?></li>
						<?php } ?>
						<?php if (get_post_meta($post->ID, 'fw_fax_label', true)) { ?>
						<li><span class="fa fa-print"></span> <span class="color"><?php echo get_post_meta($post->ID, 'fw_fax_label', true);?>:</span> <?php echo get_post_meta($post->ID, 'fw_fax_field', true);?></li>
						<?php } ?>
						<?php if (get_post_meta($post->ID, 'fw_email_label', true)) { ?>
						<li><span class="fa fa-envelope"></span> <span class="color"><?php echo get_post_meta($post->ID, 'fw_email_label', true);?>:</span> <a class="email-link" href="mailto:<?php echo get_post_meta($post->ID, 'fw_email_field', true);?>"><?php echo get_post_meta($post->ID, 'fw_email_field', true);?></a></li>  
						<?php } ?>
					</ul>
					<ul class="unstyled social">
						<?php if (get_post_meta($post->ID, 'fw_fb_link', true)) { ?>
							<li>
								<a href="<?php echo (get_post_meta($post->ID, 'fw_fb_link', true))?>">
									<span class="fa fa-facebook fa-2x"></span>
								</a>
							</li>
						<?php } ?>
						<?php if (get_post_meta($post->ID, 'fw_tw_link', true)) { ?>
							<li>
								<a href="<?php echo (get_post_meta($post->ID, 'fw_tw_link', true))?>">
									<span class="fa fa-twitter fa-2x"></span>
								</a>
							</li>
						<?php } ?>
						<?php if (get_post_meta($post->ID, 'fw_gp_link', true)) { ?>
							<li>
								<a href="<?php echo (get_post_meta($post->ID, 'fw_gp_link', true))?>">
									<span class="fa fa-google-plus fa-2x"></span>
								</a>
							</li>
						<?php } ?>
						<?php if (get_post_meta($post->ID, 'fw_pt_link', true)) { ?>
							<li>
								<a href="<?php echo (get_post_meta($post->ID, 'fw_pt_link', true))?>">
									<span class="fa fa-pinterest fa-2x"></span>
								</a>
							</li>
						<?php } ?>
						<?php if (get_post_meta($post->ID, 'fw_ln_link', true)) { ?>
							<li>
								<a href="<?php echo (get_post_meta($post->ID, 'fw_ln_link', true))?>">
									<span class="fa fa-linkedin fa-2x"></span>
								</a>
							</li>
						<?php } ?>
						<?php if (get_post_meta($post->ID, 'fw_yt_link', true)) { ?>
							<li>
								<a href="<?php echo (get_post_meta($post->ID, 'fw_yt_link', true))?>">
									<span class="fa fa-youtube fa-2x"></span>
								</a>
							</li>
						<?php } ?>
					</ul>
				</div>    
				<div class="span8" id="contact-info">
					<h3>
						<?php if (get_post_meta($post->ID, 'fw_contact_form_title', true)) {
						echo get_post_meta($post->ID, 'fw_contact_form_title', true);
						} else { ?> 
						Contact Us
						<?php }?>
					</h3>
					<?php echo apply_filters('the_content', get_post_meta($post->ID, 'fw_contact_form', true));?>
				</div>	
			</div>
		</div>
	</section>