<?php 
if($_POST['form_hidden'] == 'Y') {
	$twd_config = stripslashes($_POST['twd_config']);
	update_option('twd_config', $twd_config);

	$twd_style = stripslashes($_POST['twd_style']);
	update_option('twd_style', $twd_style);

?>
	<div class="updated"><p><strong><?php _e('已儲存完畢' ); ?></strong></p></div>
	<?php
} else {
	$twd_config = get_option('twd_config');
	$twd_style = get_option('twd_style');
}	
?>

<div class="wrap">
	<?php echo "<h2>Tailwind CSS 初始化：</h2>"; ?>
	<br />
<form name="gads_ID_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
<b style="font-size:18px;">#Tailwind CSS－Config設定：</b><br><br>
ex:<br>
<pre style='color:#575757; border:solid 1px #575757; display:inline-block; padding:20px;'>
colors: {
  black: '#000000',
  white: '#ffffff',
},
screens: {
  'xxs':{'max' : '480px'},
  'xs': {'max' : '576px'},
  'sm': {'min' : '576px'},
  'md': {'min' : '768px'},
  'lg': {'min' : '992px'},
  'xl': {'min' : '1200px'},
  'xxl': {'min': '1400px'},
}
</pre><br>
<textarea id='twd_config' name='twd_config' rows='10' cols='100%'><?php echo $twd_config;?></textarea>
<br><br>
<hr>
<br>
<b style="font-size:18px;">#Tailwind CSS－Style設定：</b><br><br>
ex:<br>
<pre style='color:#575757; border:solid 1px #575757; display:inline-block; padding:20px;'>
.mwt-container-fluid{
  @apply w-[100%]
}
.mwt-container {
  @apply w-[100%] sm:w-[540px] md:w-[720px] lg:w-[960px] xl:w-[1100px] xxl:w-[1100px] mx-auto
}
.mwt-row{
  @apply flex flex-wrap
}	
</pre><br>
<textarea id='twd_style' name='twd_style' rows='10' cols='100%'><?php echo $twd_style;?></textarea><br><br>
	
<input type="hidden" name="form_hidden" value="Y">
<input type="submit" name="Submit" value="<?php _e('儲存', 'mwt_tws_setting' ) ?>" />

</form>
</div>