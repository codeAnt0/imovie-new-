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
<form class="form-inline definewidth m20" action="#" method="get">
      <font color="#777777"><strong>电影名称：</strong></font>
    <input type="text" name="menuname" id="menuname"class="abc input-default" placeholder="" value="">&nbsp;&nbsp; 
    <button type="submit" class="btn btn-primary">查询</button> 
	<button type="button"  id="addnew"><a href="<?php echo U('Download/downloadAdd');?>">添加下载链接</a></button>
</form>
<table class="table table-bordered table-hover definewidth m10">
    <thead>
    <tr>
        <th>编号</th>
        <th>电影名称</th>
        <th>下载链接</th>
        <th>创建时间</th>
        <th>操作</th>
    </tr>
    </thead>
    <?php if(is_array($download_list)): foreach($download_list as $key=>$vo): ?><tr>
                <td><a href="teacherdetail.html"><?php echo ($vo["download_id"]); ?></a></td>
                
                <td><?php echo ($vo["download_moviename"]); ?></td>
                <td><?php echo ($vo["download_link"]); ?></td>
                <td><?php echo ($vo["download_ctime"]); ?></td>
                
                <td><a href="<?php echo U('downloadEdit','download_id='.$vo['download_id']);?>">编辑</a>/<a href="<?php echo U('downloadDel','download_id='.$vo['download_id']);?>">删除</a></td>
        </tr><?php endforeach; endif; ?>      
       
       </table>

</body>
</html>