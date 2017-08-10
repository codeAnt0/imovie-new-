<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="/Public/Admin/css/style.css" />
    <script type="text/javascript" src="/Public/Admin/js/jquery2.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/jquery2.sorted.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/bootstrap.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/ckform.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/common.js"></script>
    <script type="text/javascript" src="/Public/Admin/js/jquerypicture.js"></script>
    
    <style type="text/css">
        body {font-size: 20px;
            padding-bottom: 40px;
            background-color:#e9e7ef;
        }
        .sidebar-nav {
            padding: 9px 0;
        }

        @media (max-width: 980px) {
            /* Enable use of floated navbar text */
            .navbar-text.pull-right {
                float: none;
                padding-left: 5px;
                padding-right: 5px;
            }
        }


    </style>
</head>
<body>
<br>
 <font color="#777777"><strong>请填写电影信息：</strong></font>
<form action="<?php echo U('movieAdd');?>" method="post" class="definewidth m20" enctype="multipart/form-data">
<table class="table table-bordered table-hover m10" style="margin-left:10px;margin-top:3px;">
    
   
   <br>
    <tr>
        <td class="tableleft">电影名称</td>
        <td><input type="text" name="movie_name"/></td>
        <td class="tableleft">评分</td>
        <td><input type="text" name="movie_score"/></td>
    </tr>
	<tr>
        <td class="tableleft">片长</td>
        <td><input type="text" name="movie_running_time"/></td>
        <td class="tableleft">电影大小</td>
        <td><input type="text" name="movie_loadsize"/></td>
    </tr>
    <tr>
        <td class="tableleft">上映时间</td>
        <td><input type="text" name="movie_addtime"/></td>
        <td class="tableleft">发行国家</td>
        <td><input type="text" name="movie_countries"/></td>
    </tr>
    <tr>
        <td class="tableleft">导演</td>
        <td><input type="text" name="movie_director"/></td>
        <td class="tableleft">主演人员</td>
        <td><input type="text" name="movie_actor"/></td>
    </tr>
    <tr>
        <td class="tableleft">影片类别</td>
        <td><input type="text" name="movie_stylecate"/></td>
        <td class="tableleft">字幕语言</td>
        <td><input type="text" name="movie_language"/></td>
    </tr>
    <tr>
        <td class="tableleft">文件格式</td>
        <td><select name="movie_format">
                <option value="rmvb">rmvb</option>
                <option value="avi">avi</option>
                <option value="mp4">mp4</option>
                <option value="mov">mov</option>
            </select>
        </td>
        <td class="tableleft">电影尺寸</td>
        <td><select name="movie_size">
                <option value="800x480">800x480</option>
                <option value="1024x534">1024x534</option>
                <option value="1280x720">1280x720</option>
            </select>
        </td>
    </tr>
    <tr>
        <td class="tableleft">下载权限</td>
        <td>
            <input type="radio" name="movie_vipstatus" checked="checked" value="普通">普通&nbsp;&nbsp;&nbsp;
            <input type="radio" name="movie_vipstatus" value='VIP'>VIP&nbsp;&nbsp;&nbsp;
            <input type="radio" name="movie_vipstatus" value='书记'>书记专用通道
        </td>
    </tr>
    <tr>
        <td class="tableleft">电影简介</td>
        <td><textarea name="movie_comment" placeholder="请添加电影简介" cols="50" rows="5"></textarea></td>
    </tr>
	
	
</table>
<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-primary">提交</button>
</form>
 <img src="" id="img0" > 
 
<script>	
$("#GoodsPicture").change(function(){
	var objUrl = getObjectURL(this.files[0]) ;
	console.log("objUrl = "+objUrl) ;
	if (objUrl) {
		$("#img0").attr("src", objUrl) ;
	}
}) ;

</body>
</html>
<script>
   $(function (){       
		$('#backid').click(function(){
				window.location.href="goodsQuery.html";
		 });
    });
		
</script>