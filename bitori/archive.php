<?php get_header(); ?>
	<div class="p-ontop">
		<div class="p-content" >
		<div class="p-news">
			<div class="p-sub">	<h2>相关文章</h2>
			<a class="sidelink">你啥也找不到的，放弃吧</a></div>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="p-article">
			<div class="p-llay">
						<a class="p-link2" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<div class="p-info">
							<span class="fa fa-youtube-play" /> 
							<?php if(function_exists('the_views')) { the_views(); } ?>  
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<span class="fa fa-commenting" />
							&nbsp;<?php comments_popup_link('0', '1', '%', '', '-'); ?>
						</div>
					</div>
				<div class="p-block">
				<div class="p-img2">
						<a class="p-ti" href="<?php the_permalink(); ?>"> 
							<img class="p-thumb" src="<?php echo catch_that_image(); ?>"/>
						</a>
				</div>
					
				</div> 
				
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

