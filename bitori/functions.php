<?php 
$bitori=get_option('bitori_options');
?>
<?php 
/**
 * 添加输出菜单描述的 Walker 类
 * https://www.wpdaxue.com/wp_nav_menu-output-description.html
 */
 function wt_get_category_count($input = '') {
    global $wpdb;

    if($input == '') {
        $category = get_the_category();
        return $category[0]->category_count;
    }
    elseif(is_numeric($input)) {
        $SQL = "SELECT $wpdb->term_taxonomy.count FROM $wpdb->terms, $wpdb->term_taxonomy WHERE $wpdb->terms.term_id=$wpdb->term_taxonomy.term_id AND $wpdb->term_taxonomy.term_id=$input";
        return $wpdb->get_var($SQL);
    }
    else {
        $SQL = "SELECT $wpdb->term_taxonomy.count FROM $wpdb->terms, $wpdb->term_taxonomy WHERE $wpdb->terms.term_id=$wpdb->term_taxonomy.term_id AND $wpdb->terms.slug='$input'";
        return $wpdb->get_var($SQL);
    }
}
class description_walker extends Walker_Nav_Menu
{
	function start_el(&$output, $item, $depth, $args)
	{
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
 
		$class_names = $value = '';
 
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
 
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
		$class_names = ' class="'. esc_attr( $class_names ) . '"';
 
		$output .= $indent . '<div id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
 
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		$tmd = esc_attr($item->description);
		$description  = ! empty( $item->description ) ? '<p class="p-pink">'.esc_attr( $tmd ).'</p>' : '';
			if (is_numeric($tmd)){
				$tmd = wt_get_category_count($tmd);
				$description  = '<p class="p-pink">'.esc_attr( $tmd ).'</p>';
			}
			if (substr($tmd, 0, 4) == "icon"){
				$description  = '<span class="fa fa-'.substr($tmd, 5).'" style="color:#f29dae;font-size:24px" /><br>';
			}
		
 
		if($depth != 0)
		{
			$description = $append = $prepend = "";
		}
 
		$item_output = $args->before;
		$item_output .= $description.$args->link_after;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
		$item_output .= '</a></div>';
		$item_output .= $args->after;
 
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}
register_nav_menus();
/** widgets */
if( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => '底部左',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<p>',
		'after_title' => '</p>'
	));
	register_sidebar(array(
		'name' => '底部中',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<p>',
		'after_title' => '</p>'
	));
	register_sidebar(array(
		'name' => '底部右',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<p>',
		'after_title' => '</p>'
	));
	
}
add_theme_support ('menus');
if ( function_exists ('register_nav_menus')) {

register_nav_menus(

array(

'menua' => '顶部',
'menub' => '导航',

)


);


}

if(is_admin())
    require ('theme-options.php');

function catch_that_image() { 

 global $post, $posts; 

 $first_img = ''; 

 ob_start(); 

 ob_end_clean(); 

 $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches); 

 $first_img = $matches [1] [0]; 

if(empty($first_img)){  

 $first_img = bloginfo('template_url').'/images/default-thumb.jpg'; 

 } 

 return $first_img; 

 } 
 function hide_admin_bar($flag) {
return false;
}
add_filter('show_admin_bar','hide_admin_bar');
function get_breadcrumbs()
{
global $wp_query;
if ( !is_home() ){
// Start the UL
echo '<span>';
// Add the Home link
echo '<a href="'. get_settings('home') .'">'. 首页 .'</a>';
if ( is_category() )
{
$catTitle = single_cat_title( "", false );
$cat = get_cat_ID( $catTitle );
echo " &raquo; ". get_category_parents( $cat, TRUE, " &raquo; " ) ;
}
elseif ( is_archive() && !is_category() )
{
echo "&raquo; Archives";
}
elseif ( is_search() ) {
echo "&raquo; Search Results";
}
elseif ( is_404() )
{
echo "&raquo; 404 Not Found";
}
elseif ( is_single() )
{
$category = get_the_category();
$category_id = get_cat_ID( $category[0]->cat_name );
echo '&raquo; '. get_category_parents( $category_id, TRUE, " &raquo; " );
echo the_title('','', FALSE);
}
elseif ( is_page() )
{
$post = $wp_query->get_queried_object();
if ( $post->post_parent == 0 ){
echo "<span> &raquo; ".the_title('','', FALSE)."</span>";
} else {
$title = the_title('','', FALSE);
$ancestors = array_reverse( get_post_ancestors( $post->ID ) );
array_push($ancestors, $post->ID);
foreach ( $ancestors as $ancestor ){
if( $ancestor != end($ancestors) ){
echo '<span> &raquo; <a href="'. get_permalink($ancestor) .'">'. strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) .'</a></span>';
} else {
echo '<span> &raquo; '. strip_tags( apply_filters( 'single_post_title', get_the_title( $ancestor ) ) ) .'</span>';
}
}
}
}
// End the UL
echo "</span>";
}
}
function aurelius_comment($comment, $args, $depth) 
{
   $GLOBALS['comment'] = $comment; ?>
   <li class="comment" id="li-comment-<?php comment_ID(); ?>">
        <div class="gravatar"> <?php if (function_exists('get_avatar') && get_option('show_avatars')) { echo get_avatar($comment, 48); } ?>
  </div>
        <div class="comment_content" id="comment-<?php comment_ID(); ?>">   
            <div class="clearfix">
                    <?php printf(__('<a class="author_name">%s</a>'), get_comment_author_link()); ?>
					
                   
                    &nbsp;&nbsp;&nbsp;
            </div>
			<br>
            <div class="comment_text">
                <?php if ($comment->comment_approved == '0') : ?>
                    <em>你的评论正在审核，稍后会显示出来！</em><br />
        <?php endif; ?>
        <?php comment_text(); ?>
		<a>发表于：<?php echo get_comment_time('Y-m-d H:i'); ?></a>&nbsp;&nbsp;&nbsp;
		<?php edit_comment_link('修改'); ?><?php comment_reply_link(array_merge( $args, array('reply_text' => '回复','depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            </div>
			<br>
		<hr />
		
        </div>
<?php } ?>
