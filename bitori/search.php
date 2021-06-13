
<?php get_header(); ?>
<?php 
$bitori=get_option('bitori_options');

?>
<div class="p-sr">
	<div class="p-sr" style="width:1100px">
		<div class="p-cen" style="width:1100px">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="p-reblock">
			<div class="p-inblock"> <div ><a class="p-ti" href="<?php the_permalink(); ?>"> <img style="width:168px;height:100px;border-radius:5px;" src="<?php echo catch_that_image(); ?>"/></a></div><div class="p-s-link"><a style="height:40px" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div><div class="p-info" style="width:150px;text-align:left"><span class="fa fa-youtube-play" /> <?php if(function_exists('the_views')) { the_views(); } ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-commenting" />&nbsp;<?php comments_popup_link('0', '1', '%', '', '-'); ?></div></div>
			</div>
			<?php endwhile; ?>
			<?php else : ?>
        <h3 class="title"><a href="#" rel="bookmark">未找到</a></h3>
        <p>没有找到任何文章！</p>
        <?php endif; ?>
	<div class="p-navi"><p class="clearfix"><?php previous_posts_link('上一页', 0); ?> <span class="p-fright"><?php next_posts_link('下一页', 0); ?></span></p></div>
		</div>
	</div>

<?php get_footer(); ?>

