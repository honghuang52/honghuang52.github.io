<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if ( is_home() ) {
        echo bloginfo('name'); echo " - "; bloginfo('description');
    } elseif ( is_category() ) {
        echo single_cat_title(); echo " - "; bloginfo('name');
    } elseif (is_single() || is_page() ) {
        echo single_post_title();
    } elseif (is_search() ) {
        echo "搜索结果"; echo " - "; bloginfo('name');
    } elseif (is_404() ) {
        echo '页面未找到!';
    } else {
        wp_title('',true);
    } ?></title>
<?php 
$bitori=get_option('bitori_options');
?>
<?php
$description = '';
$keywords = '';

if (is_home() || is_page()) {
   $description = $bitori['meta_description'];

   $keywords = $bitori['meta_keywords'];
}
elseif (is_single()) {
   $description1 = get_post_meta($post->ID, "description", true);
   $description2 = str_replace("\n","",mb_strimwidth(strip_tags($post->post_content), 0, 200, "…", 'utf-8'));

   // 填写自定义字段description时显示自定义字段的内容，否则使用文章内容前200字作为描述
   $description = $description1 ? $description1 : $description2;
   
   // 填写自定义字段keywords时显示自定义字段的内容，否则使用文章tags作为关键词
   $keywords = get_post_meta($post->ID, "keywords", true);
   if($keywords == '') {
      $tags = wp_get_post_tags($post->ID);    
      foreach ($tags as $tag ) {        
         $keywords = $keywords . $tag->name . ", ";    
      }
      $keywords = rtrim($keywords, ', ');
   }
}
elseif (is_category()) {
   $description = category_description();
   $keywords = single_cat_title('', false);
}
elseif (is_tag()){
   $description = tag_description();
   $keywords = single_tag_title('', false);
}
$description = trim(strip_tags($description));
$keywords = trim(strip_tags($keywords));
?>
<meta name="description" content="<?php echo $description; ?>" />
<meta name="keywords" content="<?php echo $keywords; ?>" />
                    <meta name="renderer" content="webkit">
<script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/act.js"></script>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css"type="text/css" media="screen" />
<?php wp_head(); ?>
<?php flush(); ?>
</head>
<body>
<div class="p-whole">
<div class="p-toparea">
       
	<div class="top-bar">
	
 <div class="p-top-list">

<div class="p-dq" >

<ul class="top-list" style="font-color:<?php if ($bitori['b_topbar'] == 0) {echo '#FFFFFF';} else {echo '#000000';} ?>;">

	<?php 
		wp_nav_menu( array( 'menu' => 'menua', 'depth' => 0, 'theme_location' => 'menua') );
	?>
		</ul>
		</div>

		<div style="text-align:center">
        <div class="p-tranlevel" style="opacity:0.3;background-color:<?php if ($bitori['b_topbar'] == 0) {echo '#000000';} else {echo '#FFFFFF';} ?>"></div>
	<div class="p-iback blur" style="background-image:url(<?php echo $bitori['b_show']; ?>)">	</div>
        </div>
		
</div>       

		
        

	</div>
		<a class="btn-login" href="/wp-admin">管 理</a>	
	<a class="p-hp" href="#"><img class="p-head" src="<?php echo $bitori['b_head']; ?>"/></a>
	<div class="p-me"><p>自我介绍</p><p class="p-intro"><?php echo $bitori['b_intro']; ?></p></div>
	<div class="pshow" style="background-image:url(<?php echo $bitori['b_show']; ?>);background-position:top center;background-repeat:none;">
		<div class="p-inbox">
			<div class="p-logo">
			<h3><a style="font-size:72px" href="<?php echo get_option('home'); ?>"><img src="<?php echo $bitori['b_logo']; ?>" /></a></h3>
			</div>
			<form role="search" method="get" id="searchform" class="searchform" action="<?php bloginfo('url'); ?>">
			<div class="searchbox">
			<div class="box"><input type="text" value="" class="p-topse" name="s" id="s" placeholder="反正你也找不到什么">&nbsp;&nbsp;
							<a class="fa fa-search p-top-sub" href="#" onclick="javascript:document.getElementById('searchform').submit();"></a></div>
							
						</div>
			</form>
			<div class="p-word"><?php echo $bitori['b_word']; ?></div>
		</div>
	</div>
	</div>
	<div class="pmenu">
		<div class="plist">
			<ul class="m-list">
	<?php 
		// 列出顶部导航菜单，菜单名称为mymenu，只列出一级菜单
		wp_nav_menu( array( 'menu' => 'menub', 'depth' => 0, 'theme_location' => 'menub', 'walker' => new description_walker()) );
	?>
			</ul>	
		</div>