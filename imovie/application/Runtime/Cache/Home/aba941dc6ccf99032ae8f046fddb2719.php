<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>jQuery俄罗斯方块游戏动画DEMO演示</title>

<link rel="stylesheet" type="text/css" href="/Public/Game/els/css/index.css" />

<script src="/Public/Game/els/libs/jquery.js"></script>

</head>
<body>

<div class="bg">
	<div id="gameBoxBg">
		<div id="gameBox">
			<div class="mask">
				<button id="start">开始游戏</button>
			</div>
		</div>
	</div>
	<div id="rigth">
		<div class="next"></div>
		<div id="level"><span>Level:</span><span class="level">1</span></div>
		<div id="score"><span>Score:</span><span class="score">0</span></div>
		<button id="pause">暂停</button>
		<p>控制：</p>
		<p>← 向左移动</p>
		<p>→ 向右移动</p>
		<p>↑ 旋转</p>
		<p>↓ 加速下落</p>
	</div>
</div>

<script src="/Public/Game/els/js/game.js"></script>

<div style="text-align:center;clear:both">
<script src="/Public/Game/els/gg_bd_ad_720x90.js" type="text/javascript"></script>
<script src="/Public/Game/els/follow.js" type="text/javascript"></script>
</div>
</body>
</html>