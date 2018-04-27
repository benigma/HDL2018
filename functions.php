<?php

function remove_admin_bar_style_frontend() { 
  echo '<style type="text/css" media="screen">
  html { margin-top: 0px !important; }
  * html body { margin-top: 0px !important; }
  </style>';
}

add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
     add_post_type_support( 'page', 'excerpt' );
}

add_filter('wp_head','remove_admin_bar_style_frontend', 99);

add_filter('acf/settings/remove_wp_meta_box', '__return_false');

// Login Form
function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_bloginfo( 'template_directory' ) ?>/images/site-login-logo.png); padding-bottom: 30px; width: 323px; height: 67px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo_url_title() {
    return 'Hogarth Davies Lloyd';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );


function number_of_responses() {
	printf(_n('One Response to %2$s', '%1$s Responses to %2$s', get_comments_number()), get_comments_number(), get_comments_title());
}
//Widgets
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Widget Area',
		'id' => 'widget-area',
		'before-widget' => '<li class="widget-container">',
		'after-widget' => '</li>',
		'before-title' => '<h3 class="widget-title">',
		'after-title' => '</h3>'
		));
}

add_filter( 'login_headerurl', 'custom_loginlogo_url' );
function custom_loginlogo_url($url) {
	return 'http://hogarthdavieslloyd.com';
}

function custom_admin_post_thumbnail_html( $content ) {
    return $content = str_replace( __( 'Set featured image' ), __( 'Add an Image' ), $content);
}
add_filter( 'admin_post_thumbnail_html', 'custom_admin_post_thumbnail_html' );

// Enable excerpts for pages
add_action('init', 'enable_page_excerpts');
function enable_page_excerpts()	{
		add_post_type_support('page', 'excerpt');
}

add_theme_support( 'post-thumbnails' );

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 ); 
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 ); 

function remove_thumbnail_dimensions( $html ) { 
	$html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
	return $html; 
}

function pagination($pages = '', $range = 4) {
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '') {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages) {
             $pages = 1;
         }
     }   
 
     if(1 != $pages) {
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";
 
         for ($i=1; $i <= $pages; $i++) {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}

function getCatSearchFilter($pre,$post) {
 
    $category = '';
    $catId = htmlspecialchars($_GET["cat"]);
 
    $token = strtok($catId,",");
    $category .= get_cat_name($token);
 
    while($token) {
        $token = strtok(",");
 
    if ($token != '0')
        $category .= ', '.get_cat_name($token);
    }
 
      if (strlen($category)>0)
          $category = $pre.$category.$post;
 
      return $category;
}

function get_excerpt(){
	$excerpt = get_the_content();
	$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, 100);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	$excerpt = $excerpt.'...';
	return $excerpt;
}

function change_footer_admin () {
  echo 'Ben Cash';
}  
add_filter('admin_footer_text', 'change_footer_admin');

// Profile Settings
add_action( 'show_user_profile', 'extra_user_profile_fields' );
add_action( 'edit_user_profile', 'extra_user_profile_fields' );


//Yoast UK 
add_filter('wpseo_locale', 'override_og_locale');
function override_og_locale($locale)
{
    return "en_GB";
}

?>