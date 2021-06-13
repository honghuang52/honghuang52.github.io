<?php
	if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	$bitori=get_option('bitori_options');
?>

<div class="p-comment">
		<!-- Comment's List -->
		<h8 class="p-cmcount"><?php comments_popup_link('0 ', '1 ', '% ', '', '0'); ?>评论</h8>
		<br><br>
		<hr />
<form id="commentform" name="commentform" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">
    <div class="hr dotted clearfix">&nbsp;</div>
	<div class="p-sendc">
	<div class="head"><img class="p-commenthead" src="<?php echo $bitori['b_head']; ?>"/></div>
    <ul><div class="p-guest">
            <div class="p-so-free-that-egg-pain"><textarea id="message comment" name="comment" tabindex="4" rows="3" cols="20" placeholder="请自觉遵守互联网相关的政策法规，严禁发布色情、暴力、反动的言论。"></textarea>
			&nbsp;&nbsp;<a href="javascript:void(0);" onClick="Javascript:document.forms['commentform'].submit()" class="p-submit">发表评论</a>
			</div>
        <?php if ( !is_user_logged_in() ) : ?>
            <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" placeholder="您的姓名" size="23" tabindex="1" />
            <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" placeholder="您的邮箱" size="23" tabindex="2" />
            <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>"  placeholder="您的个人主页" size="23" tabindex="3" />
		</div>
        <?php else : ?>
 	<a class="p-plink" href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a class="p-plink" href="<?php echo wp_logout_url(get_permalink()); ?>" title="退出登录">退出 &raquo;</a>       
        <?php endif; ?>
 
            <!-- Add Comment Button -->
            
    </ul>
	</div>
	<br><br><br><br><br><br>
	<hr />
	<div class="p-commentlist">

    <?php comment_id_fields(); ?>
    <?php do_action('comment_form', $post->ID); ?>
</form>
		<div class="hr dotted clearfix">&nbsp;</div>
		<ol class="commentlist">
		<?php
    		if (!empty($post->post_password) && $_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {
        // if there's a password
        // and it doesn't match the cookie
		?>
    <li class="decmt-box">
        <p><a href="#addcomment">请输入密码再查看评论内容.</a></p>
    </li>
    <?php
        } else if ( !comments_open() ) {
    ?>
    <li class="decmt-box">
        <p><a href="#addcomment">评论功能已经关闭!</a></p>
    </li>
    <?php
        } else if ( !have_comments() ) {
    ?>
    <li class="decmt-box">
        <p><a href="#addcomment">还没有任何评论，你来说两句吧</a></p>
    </li>
    <?php
        } else {
            wp_list_comments('type=comment&callback=aurelius_comment');
        }
    ?>
		</ol>
		<div class="hr clearfix">&nbsp;</div>
<?php
if ( !comments_open() ) :
// If registration required and not logged in.
elseif ( get_option('comment_registration') && !is_user_logged_in() ) :
?>
<p>你必须 <a href="<?php echo wp_login_url( get_permalink() ); ?>">登录</a> 才能发表评论.</p>
<?php else  : ?>
<!-- Comment Form -->

</div>
<?php endif; ?>
</div>