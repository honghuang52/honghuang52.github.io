<?php
 
    function getOptions() {
        $options = get_option('bitori_options');
        
        if (!is_array($options)) {
            $options['meta_keywords'] = '';
			$options['meta_description'] = '';
			$options['bottom_info'] = 'Copyright©2015 - 2017 A/B\'s Blog, All rights reserved.';
			$options['b_logo'] = 'http://p1.bqimg.com/567571/0b7ac89d94667660.png';
			$options['b_head'] = 'http://p1.bqimg.com/567571/41bdfc87c8c6ff0c.jpg';
			$options['b_intro'] = '庆祝第一百篇文章达成 半退役OIER，程序员一名 重度萝莉控，绅士 沉迷学习无法自拔 欢迎妹子来找我谈心 也欢迎各位来交换链接 QQ 250614271';
			$options['b_show'] = 'http://p1.bqimg.com/567571/ea8a3287b12ff10a.jpg';
			$options['b_word'] = '欢迎使用Bitori主题';
			$options['b_slider'] = 'http://p1.bqimg.com/567571/82f7987c320d3b34.jpg';
			$options['b_slider_link'] = 'http://itori.org';
			$options['b_rec_cate'] = '1';
			$options['b_index'] = '默认首页,,c,,0,,最新文章,,你开心就好,,#,,normal,,10'.chr(13);
			$options['b_topbar'] = '0';
            update_option('bitori_options', $options);
        }
        return $options;
    }
 
    /* 初始化 */
    function init() {        
        if(isset($_POST['input_save'])) {
            $options = getOptions();
            $options['meta_keywords'] = stripslashes($_POST['meta_keywords']);
			$options['meta_description'] = stripslashes($_POST['meta_description']);
			$options['bottom_info'] = stripslashes($_POST['bottom_info']);
			$options['b_logo'] = stripslashes($_POST['b_logo']);
			$options['b_head'] = stripslashes($_POST['b_head']);
			$options['b_intro'] = stripslashes($_POST['b_intro']);
			$options['b_show'] = stripslashes($_POST['b_show']);
			$options['b_word'] = stripslashes($_POST['b_word']);
			$options['b_slider'] = stripslashes($_POST['b_slider']);
			$options['b_slider_link'] = stripslashes($_POST['b_slider_link']);
			$options['b_rec_cate'] = stripslashes($_POST['b_rec_cate']);
			$options['b_index'] = stripslashes($_POST['b_index']);
			$options['b_topbar'] = stripslashes($_POST['b_topbar']);
            update_option('bitori_options', $options);
        } else {
            getOptions();
        }
 
        add_theme_page("Bitori", "Bitori", 'edit_themes', basename(__FILE__),  'display');
    }
 
    /* 界面 */
    function display() {
        $options = get_option('bitori_options');
		
	
?>
<p>
<div class="update-nag">
感谢使用Bitori主题！欢迎访问作者 A/B 的个人网站:<a href="http://www.tiaowun.com">http://www.tiaowun.com</a></div>
 <div class="update-nag">
 <h2> 分类目录id: </h2>
 <?php 
 $cat_ids = get_all_category_ids();
	foreach($cat_ids as $category) {
		$cat_name = get_cat_name($category);
		echo $cat_name . ': ' . $category;
		echo "&nbsp;";
	}
 ?></div>
<form action="#" method="post" enctype="multipart/form-data" name="op_form" id="op_form">
    <div class="wrap">
        <h2>Bitori主题选项</h2>
        <br>
		<h3>网站信息</h3>
        <table>
            <tbody>
                <tr>
                    <td>seo首页关键词</td>
                    <td>
                        <label>
                            <textarea name="meta_keywords" cols="50" rows="5" id="meta_keywords" style="width:98%;font-size:12px;" ><?php echo($options['meta_keywords']); ?></textarea>
                        </label>
                    </td>
                </tr>
				<tr>
                    <td>seo首页描述</td>
                    <td>
                        <label>
                            <textarea name="meta_description" cols="50" rows="5" id="meta_description" style="width:98%;font-size:12px;" ><?php echo($options['meta_description']); ?></textarea>
                        </label>
                    </td>
                </tr>
				<tr>
                    <td>底部信息</td>
                    <td>
                        <label>
                            <textarea name="bottom_info" cols="50" rows="5" id="bottom_info" style="width:98%;font-size:12px;" ><?php echo($options['bottom_info']); ?></textarea>
                        </label>
                    </td>
                </tr>
            </tbody>
        </table>
		<br>
		<h3>网站样式</h3>
       <table>
            <tbody>
			
                <tr>
                    <td>首页内容</td> 
                    <td><a href="http://www.tiaowun.com/bitori/help.html#index-box"> 如何设置? </a>
                        <label>
                            <textarea name="b_index" cols="50" rows="5" id="b_index" style="width:98%;font-size:12px;" ><?php echo($options['b_index']); ?></textarea>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>logo URL</td>
                    <td>
                        <label>
                            <textarea name="b_logo" cols="50" rows="5" id="b_logo" style="width:98%;font-size:12px;" ><?php echo($options['b_logo']); ?></textarea>
                        </label>
                    </td>
                </tr>
	               </tr>
				<tr>
                    <td>头像 URL</td>
                    <td>
                        <label>
                            <textarea name="b_head" cols="50" rows="5" id="b_head" style="width:98%;font-size:12px;" ><?php echo($options['b_head']); ?></textarea>
                        </label>
                    </td>
                </tr>
				<tr>
                    <td>自我介绍</td>
                    <td>
                        <label>
                            <textarea name="b_intro" cols="50" rows="5" id="b_intro" style="width:98%;font-size:12px;" ><?php echo($options['b_intro']); ?></textarea>
                        </label>
                    </td>
                </tr>
				<tr>
                    <td>顶部展示图 URL</td>
                    <td>
                        <label>
                            <textarea name="b_show" cols="50" rows="5" id="b_show" style="width:98%;font-size:12px;" ><?php echo($options['b_show']); ?></textarea>
                        </label>
                    </td>
                </tr>
				<tr>
                    <td>顶栏颜色</td>
                    <td>
                        <label>
                            <textarea name="b_topbar" cols="50" rows="5" id="b_show" style="width:98%;font-size:12px;" ><?php echo($options['b_topbar']); ?></textarea>
                        </label>
						<br /><p>0为黑底，其它则为白底</p>
                    </td>
                </tr>
				<tr>
                    <td>顶部小语录内容</td>
                    <td>
                        <label>
                            <textarea name="b_word" cols="50" rows="5" id="b_word" style="width:98%;font-size:12px;" ><?php echo($options['b_word']); ?></textarea>
                        </label>
                    </td>
                </tr>
			<tr>
                    <td>首页推荐区左侧图 URL</td>
                    <td>
                        <label>
                            <textarea name="b_slider" cols="50" rows="5" id="b_slider" style="width:98%;font-size:12px;" ><?php echo($options['b_slider']); ?></textarea>
                        </label>
                    </td>
                </tr>
			<tr>
                    <td>首页推荐区左侧图 链接向</td>
                    <td>
                        <label>
                            <textarea name="b_slider_link" cols="50" rows="5" id="b_slider_link" style="width:98%;font-size:12px;" ><?php echo($options['b_slider_link']); ?></textarea>
                        </label>
                    </td>
                </tr>
			<tr>
                    <td>首页推荐区显示分类目录(多个用半角逗号隔开)</td>
                    <td>
                        <label>
                            <textarea name="b_rec_cate" cols="50" rows="5" id="b_rec_cate" style="width:98%;font-size:12px;" ><?php echo($options['b_rec_cate']); ?></textarea>
                        </label>
                    </td>
                </tr>
            </tbody>
        </table>		
        <p class="submit">
            <input type="submit" name="input_save" value="保存" />
        </p>
    </div>
 
</form>
 
<?php
    }
 
    add_action('admin_menu', 'init');
 
?>