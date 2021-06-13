	<?php 
$bitori=get_option('bitori_options');
?>

</div>
<div class="p-bottom">
		<div class="p-alltool">
			<div class="p-tool-bottom"><div class="p-too">

        
    <?php if ( !function_exists('dynamic_sidebar') 
                        || !dynamic_sidebar('底部左') ) : ?>

    <?php endif; ?>
    </div></div>
			<div class="p-tool-bottom">
			<div class="p-too">
        
    <?php if ( !function_exists('dynamic_sidebar') 
                        || !dynamic_sidebar('底部中') ) : ?>

    <?php endif; ?>
        
    </div></div>
			<div class="p-tool-bottom"><div class="p-too">
        
    <?php if ( !function_exists('dynamic_sidebar') 
                        || !dynamic_sidebar('底部右') ) : ?>
		
    <?php endif; ?>
        
    </div></div>
		</div>
		<div class="p-tail"><p><?php echo $bitori['bottom_info']; ?></p></div>
	</div>
	
<?php wp_footer(); ?>
</div>
</body>

<html>