<?php get_header(); ?>
<?php 
$bitori=get_option('bitori_options');
?>
	<div class="p-ontop">
	<div class="p-midshow">
		<div class="p-slider">
		   <div class="p-slimg"></div>
		</div>
		<div class="p-siderec"> 
		<?php $posts = get_posts( "category=".$bitori['b_rec_cate']."&numberposts=10" ); ?>
<?php if( $posts ) : ?>
<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
			<div class="p-rec">
					<div class="p-img" style="background-image:url(<?php echo catch_that_image(); ?>);"><div class="p-shadow"><a class="p-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div></div>
				</div>	
		<?php endforeach; ?>	
<?php endif; ?>		
		</div>


	</div>
	<div class="p-content">
	<div class="p-boxes">
	<?php 
	$iin = $bitori['b_index'];
	$boxes = explode(chr(13), $iin);

	for ($i = 0; $i < count($boxes); $i++){
		$si = explode(",,", $boxes[$i]);
		
		$posts = get_posts( "category=".$si[2]."&numberposts=".$si[7] );?>
		
		<div class="p-news">
			<div class="p-sub">	<span><h2><img class="p-boxhead" src="<?php echo ($si[6] == "normal")?$bitori['b_head']:$si[6]; ?>"><?php echo $si[3]; ?></h2></span>
			<a class="sidelink"><?php echo $si[4]; ?></a><a class="p-more" href="<?php echo $si[6]; ?>">更多&nbsp;></a></div>
			<?php if( $posts ) : ?>
<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>
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
		<?php endforeach; ?>
			<?php else : ?>
        <h3 class="title"><a href="#" rel="bookmark">未找到</a></h3>
        <p>没有找到任何文章！</p>
		</div>
        <?php endif; ?>
		</div>
		
	<?php } ?>
		</div>
	</div>
<?php get_footer(); ?>

