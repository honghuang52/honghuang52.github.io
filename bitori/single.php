<?php get_header(); ?>
	<div class="p-ontop">
	<div class="p-content">
		<div class="p-news">
			<div class="p-sub">	<p><h7><?php the_title(); ?></h7></p>
			<div class="p-crumb"><?php get_breadcrumbs(); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php the_time('Y-n-j h:m') ?></div>
			<div class="p-fi"><span class="fa fa-youtube-play" />&nbsp;&nbsp;<?php if(function_exists('the_views')) { the_views(); } ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-commenting" />&nbsp;&nbsp;<?php comments_popup_link('0', '1', '%', '', '-'); ?></div>
			<a class="sidelink"></a></div>
		<div class="p-ati"><?php the_content(); ?>
</div>
				</div>
				
	</div></div>
	<div class="p-mainarticle">
	<br>
	<div class="p-mainarea">
		<div class="p-con">
		<?php the_post(); update_post_caches($posts); ?>
		<?php the_content(); ?>
		</div>
	</div>
	<br>
	</div>
	<div class="p-tags"> <?php the_tags('', '  ', ''); ?></div>
	<?php comments_template(); ?>
	<div style="box-shadow:0px 0px 2px #969696;">
	<?php get_footer() ?>
	

