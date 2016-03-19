<?php 
	//1.获取视频目录和文件名
	$p_url = get_post_meta($post->ID,'picture_link',true);
	if($p_url==null){
		$p_url='film.dawneve.cc/media/flowPlayer.jpg';
	}
	//$v_url = get_post_meta($post->ID,'video_link',true);
	$v_name = get_post_meta($post->ID,'name',true);

	
	//2.显示视频
?>
  <!-- for players  begin-->
  <link rel="stylesheet" href="/html5media/flowplayer/skin/minimalist.css">
  <script src="/html5media/jquery-1.11.2.min.js"></script>
  <script src="/html5media/flowplayer/flowplayer.min.js"></script>
  <!-- for players  end-->
   <style>
  /*视频样式*/
#flowplayer{width:400px; border:2px solid #0096ff; padding:10px; background-color:black; color:red;}
.main h1{margin:0 0 10px 0;}
.main a{color:#0096ff;}
.main a:hover{text-decoration:underline;}
</style>

<div class="wrap main">

	<h1><?php echo $v_name;?>  [<a id='shrink' class=btn href='javascript:void(0);'>缩小</a>|<a id='enlarge' class=btn href='javascript:void(0);'>放大</a>]</h1>


	
<div class="flowplayer" id=flowplayer width="320" height="240" controls="controls" preload="auto" name="media">
	<video poster="<?php echo $p_url;?>">
		<source type="video/mp4" src="<?php echo $v_url;?>">

		您的浏览器不支持html5视频标签。推荐chrome等现代浏览器。
	</video>
</div>
	
	<div id=showHintOfChrome></div>

	<br />
	<a id='list' href="index.php" target="_blank">返回列表</a> | 
	<a id='store' href="javascript:void(0);">收藏</a> | 
	<a id='download' href="<?php echo $v_url;?>" target="_">下载</a> | 
	
	<hr>

	
	
	



</div>

<script>
/**
* 检测是否支持html5的video标签
*/
function videoCheck() {
	var video = document.createElement("video");
	if(video.canPlayType){
	
		if (video.canPlayType('video/mp4; codecs="avc1.42E01E, mp4a.40.2"')) {
			return 1;//支持video标签，支持H.264   chrome,ff
		}else{
			return 2;//支持video标签，不支持H.264
		}
	}else{
		return 0;//不支持video标签  ie
	}
}



$(document).ready(function(){
	// 在这里写你的代码...
	if(0==videoCheck()){
		//提醒低版本浏览器升级
		$('#showHintOfChrome').html('<span style="color:red;">您的浏览器太旧了！请使用<a href="//www.baidu.com/s?wd=chrome" target="_blank">现代浏览器</a>以获得最佳体验。</span>');
	};
	
	
	//收藏
	$('#store').click(function(){
		alert('该功能正在开发中...');
	});
	//放大
	$('#enlarge').click(function(){
		$('#flowplayer').css('width','800px');
		//alert('该功能正在开发中...');
	});
	//缩小
	$('#shrink').click(function(){
		$('#flowplayer').css('width','400px');
		//alert('该功能正在开发中...');
	});

});
</script>
