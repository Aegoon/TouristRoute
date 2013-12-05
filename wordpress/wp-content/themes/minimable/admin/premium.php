<?php

$premiumname = "Minimable Premium";
$shortname = "fw";
$premium_options = array (
    array( "name" => $premiumname." Features",
           "type" => "title"),
    array( "type" => "open"),
    
    /* General Settings */
    array( "name" => "Premium ",
    	   "id" => "sec-premium",
           "type" => "section"),
           
    array( "name" => "",
           "desc" => "",
           "id" => "",
           "type" => "premium",
           "std" => ""),
           
		array( "type" => "end-section"),
    array( "type" => "close"));

    
function mypremium_add_admin() {
 
	global $premiumname, $shortname, $premium_options;
	 
	if ( $_GET['page'] == basename(__FILE__) ) {
		if ( 'save' == $_REQUEST['action'] ) {
		 
		foreach ($premium_options as $value) {
		update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }
		 
		foreach ($premium_options as $value) {
		if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
		 
		header("Location: themes.php?page=premium.php&saved=true");
		die;
		 
		} else if( 'reset' == $_REQUEST['action'] ) {
		 
		foreach ($premium_options as $value) {
		delete_option( $value['id'] ); }
		 
		header("Location: themes.php?page=premium.php&reset=true");
		die;
		 
		}
	}
 	add_menu_page($premiumname, "$premiumname", 'edit_themes', basename(__FILE__), 'mypremium_admin');
}
function mypremium_add_init() {  
	$file_dir=get_bloginfo('template_directory');  
	wp_enqueue_style("functions", $file_dir."/admin/css/theme-option.css", false, "1.0", "all");  
} 

function mypremium_admin() {
 
	global $themename, $shortname, $premium_options;
	 
?>

	<div class="wrap premium-wrap">
	 	<form method="post">
		<?php foreach ($premium_options as $value) {
			switch ( $value['type'] ) {
		
			case "section" :
			?>
				<h1 class="section-title">Premium Theme Features</h1>
				<h2>Why you have to buy the premium version</h2>
				<ul>
					<li class="left-col">
						<img src="<?php bloginfo('template_url') ?>/admin/img/unlimited-colors.jpg" alt="Unlimited colors for each section" class="img-polaroid"/>
						<h3 class="col-title blue">Unlimited colors</h3>
						<p>
							Select the colors you prefere for each section such as backgrounds (color or image), text, links etc.
						</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_url') ?>/admin/img/google-font.png" alt="600+ Google Fonts" class="img-polaroid"/>
						<h3 class="col-title blue">600+ Google Fonts</h3>
						<p>
							If you don't like the default font, you can change it for the headings and the content.
						</p>
					</li>
					<li class="left-col">
						<img src="<?php bloginfo('template_url') ?>/admin/img/blog.jpg" alt="Create a blog" class="img-polaroid"/>
						<h3 class="col-title blue">The blog</h3>
						<p>
							The premium version includes a blog template, with customizations and full support for any type of widgets.
						</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_url') ?>/admin/img/ajaxable-portfolio.jpg" alt="Ajaxable portfolio" class="img-polaroid"/>
						<h3 class="col-title blue">Ajaxable and filterable portfolio</h3>
						<p>
							For each item you can create a carousel (unlimited images), insert videos, and add a long description.
						</p>
					</li>
					<li class="left-col">
						<img src="<?php bloginfo('template_url') ?>/admin/img/shortcodes.jpg" alt="Shortcodes" class="img-polaroid"/>
						<h3 class="col-title blue">Shortcodes</h3>
						<p>
							Add videos (from Youtube, Vimeo, Yahoo and so on), maps, and build page layouts.
						</p>
					</li>
					<li>
						<img src="<?php bloginfo('template_url') ?>/admin/img/ask-question.png" alt="Ask a question" class="img-polaroid"/>
						<h3 class="col-title blue">Free support</h3>
						<p>
							If you have any question you can ask in the support area, available only for the customers.
						</p>
					</li>
				</ul>
				<h1 class="section-title">And this is only the beginning</h1>
				<p id="next-version">In the next versions I will provide more features, like the support for <strong>retina displays</strong>, more <strong>shortcodes</strong>, more <strong>page templates</strong> and many other features.</p>
				<h2 class="center">So let's go and buy the premium version now!</h2>
				<a href="http://minimable.fedeweb.net/" class="home-btn last" id="demo" target="_blank">Purchase <span><span class="bar">29$</span>24$</span></a>
				<?php break;
			}
		}
	?>
	</form>

</div>

<?php
}

add_action('admin_menu', 'mypremium_add_admin');
add_action('admin_init', 'mypremium_add_init'); 
?>