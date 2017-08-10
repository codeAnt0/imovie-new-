<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Movie_store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="/Public/Home/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="/Public/Home/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="/Public/Home/css/style1.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="/Public/Home/js/jquery-1.11.1.min.js"></script>
<link href='http://fonts.useso.com/css?family=Roboto+Condensed:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<script src="/Public/Home/js/responsiveslides.min.js"></script>
<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
</script>
<style type="text/css">
	#logo{
		width: 176px;
		margin-top: -18px;
		margin-left: -84px;
	}
	.nav ul{
		margin-top: 59px;
	}
</style>
</head>
<body>
<div class="container">
	<div class="container_wrap">
		<div class="header_top">
		    <div class="col-sm-3 logo"><a href="index.html"><img id="logo" src="/Public/Home/images/logo.png" alt=""/></a></div>
		    <div class="col-sm-6 nav">
			  <ul>
				 <li> <span class="simptip-position-bottom simptip-movable" data-tooltip="comic"><a href="<?php echo U('movie');?>"> </a></span></li>
				 <li><span class="simptip-position-bottom simptip-movable" data-tooltip="movie"><a href="<?php echo U('movie');?>"> </a> </span></li>
				 <li><span class="simptip-position-bottom simptip-movable" data-tooltip="video"><a href="<?php echo U('movie');?>"> </a></span></li>
				 <li><span class="simptip-position-bottom simptip-movable" data-tooltip="game"><a href="<?php echo U('game');?>"> </a></span></li>
				 <li><span class="simptip-position-bottom simptip-movable" data-tooltip="tv"><a href="#"> </a></span></li>
				 <li><span class="simptip-position-bottom simptip-movable" data-tooltip="more"><a href="#"> </a></span></li>
			 </ul>
			</div>
			<div class="col-sm-3 header_right">
			   <ul class="header_right_box">
				 <li><img src="/Public/Home/images/p.png" alt=""/></li>
				 <li><p><a href="login.html">Carol Varois</a></p></li>
				 <li class="last"><i class="edit"> </i></li>
				 <div class="clearfix"> </div>
			   </ul>
			</div>
		<div class="clearfix"> </div>
	      </div>

	   <div class="content">
      	   <div class="movie_top">
      	         <div class="col-md-9 movie_box">
                        <div class="grid images_3_of_2">
                        	<div class="movie_image">
                                <span class="movie_rating">5.0</span>
                                <img src="/Public/Home/images/single.jpg" class="img-responsive" alt=""/>
                            </div>
                            <div class="movie_rate">
                            	<div class="rating_desc"><p>Your Vote :</p></div>
                            	<form action="" class="sky-form">
							     <fieldset>					
								   <section>
								     <div class="rating">
										<input type="radio" name="stars-rating" id="stars-rating-5">
										<label for="stars-rating-5"><i class="icon-star"></i></label>
										<input type="radio" name="stars-rating" id="stars-rating-4">
										<label for="stars-rating-4"><i class="icon-star"></i></label>
										<input type="radio" name="stars-rating" id="stars-rating-3">
										<label for="stars-rating-3"><i class="icon-star"></i></label>
										<input type="radio" name="stars-rating" id="stars-rating-2">
										<label for="stars-rating-2"><i class="icon-star"></i></label>
										<input type="radio" name="stars-rating" id="stars-rating-1">
										<label for="stars-rating-1"><i class="icon-star"></i></label>
									 </div>
								  </section>
							    </fieldset>
						  	   </form>
						  	   <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div class="desc1 span_3_of_2">
                        	<p class="movie_option"><strong>Country: </strong><a href="#">established</a>, <a href="#">USA</a></p>
                        	<p class="movie_option"><strong>Year: </strong>2014</p>
                        	<p class="movie_option"><strong>Category: </strong><a href="#">Adventure</a>, <a href="#">Fantazy</a></p>
                        	<p class="movie_option"><strong>Release date: </strong>December 12, 2014</p>
                        	<p class="movie_option"><strong>Director: </strong><a href="#">suffered </a></p>
                        	<p class="movie_option"><strong>Actors: </strong><a href="#">anything</a>, <a href="#">Lorem Ipsum</a>, <a href="#" discovered</a>, <a href="#"> Virginia</a>, <a href="#"> Virginia</a>, <a href="#">variations</a>, <a href="#">variations</a>, <a href="#">variations</a>, <a href="#"> Virginia</a> <a href="#">...</a></p>
                            <p class="movie_option"><strong>Age restriction: </strong>13</p> 
                            <div class="down_btn"><a class="btn1" href="#"><span> </span>Download</a></div>
                         </div>
                        <div class="clearfix"> </div>
                        <p class="m_4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
		                <form method="post" action="contact-post.html">
							<div class="to">
		                     	<input type="text" class="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
							 	<input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" style="margin-left:3%">
							</div>
							<div class="text">
			                   <textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message:</textarea>
			                </div>
			                <div class="form-submit1">
					           <input name="submit" type="submit" id="submit" value="Submit Your Message"><br>
					        </div>
							<div class="clearfix"></div>
                 		</form>
		                <div class="single">
		                <h1>10 Comments</h1>
		                <ul class="single_list">
					        <li>
					            <div class="preview"><a href="#"><img src="/Public/Home/images/2.jpg" class="img-responsive" alt=""></a></div>
					            <div class="data">
					                <div class="title">Movie  /  2 hours ago  /  <a href="#">reply</a></div>
					                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
					            </div>
					            <div class="clearfix"></div>
					        </li>
					         <li>
					            <div class="preview"><a href="#"><img src="/Public/Home/images/3.jpg" class="img-responsive" alt=""></a></div>
					            <div class="data">
					                <div class="title">Wernay  /  2 hours ago  /  <a href="#">reply</a></div>
					                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent </p>
					            </div>
					            <div class="clearfix"></div>
					        </li>
					         <li>
					            <div class="preview"><a href="#"><img src="/Public/Home/images/4.jpg" class="img-responsive" alt=""></a></div>
					            <div class="data">
					                <div class="title">mr.dev  /  2 hours ago  /  <a href="#">reply</a></div>
					                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum. qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,</p>
					            </div>
					           <div class="clearfix"></div>
					        </li>
					     	<li class="middle">
					            <div class="preview"><a href="#"><img src="/Public/Home/images/5.jpg" class="img-responsive" alt=""></a></div>
					            <div class="data-middle">
					                <div class="title">Wernay  /  2 hours ago  /  <a href="#">reply</a></div>
					                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					            </div>
					            <div class="clearfix"></div>
					        </li>
					        <li class="last-comment">
					            <div class="preview"><a href="#"><img src="/Public/Home/images/6.jpg" class="img-responsive" alt=""></a></div>
					            <div class="data-last">
					                <div class="title">mr.dev  /  2 hours ago  /  <a href="#">reply</a></div>
					                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit </p>
					            </div>
					            <div class="clearfix"></div>
					        </li>
					         <li>
					            <div class="preview"><a href="#"><img src="/Public/Home/images/7.jpg" class="img-responsive" alt=""></a></div>
					            <div class="data">
					                <div class="title">denpro  /  2 hours ago  /  <a href="#">reply</a></div>
					                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
					            </div>
					            <div class="clearfix"></div>
					        </li>
			  			</ul>
                      </div>
                      </div>
                      <div class="col-md-3">
                      	<div class="movie_img"><div class="grid_2">
							<img src="/Public/Home/images/pic6.jpg" class="img-responsive" alt="">
							<div class="caption1">
									<ul class="list_5 list_7">
							    		<li><i class="icon5"> </i><p>3,548</p></li>
							    	</ul>
							    	<i class="icon4 icon6 icon7"> </i>
							    	<p class="m_3">Guardians of the Galaxy</p>
							</div>
						    </div>
						   </div>
                      	  <div class="grid_2 col_1">
							<img src="/Public/Home/images/pic2.jpg" class="img-responsive" alt="">
							<div class="caption1">
								<ul class="list_3 list_7">
						    		<li><i class="icon5"> </i><p>3,548</p></li>
						    	</ul>
						    	<i class="icon4 icon7"> </i>
						    	<p class="m_3">Guardians of the Galaxy</p>
							</div>
						   </div>
						    <div class="grid_2 col_1">
							<img src="/Public/Home/images/pic9.jpg" class="img-responsive" alt="">
							<div class="caption1">
								<ul class="list_3 list_7">
						    		<li><i class="icon5"> </i><p>3,548</p></li>
						    	</ul>
						    	<i class="icon4 icon7"> </i>
						    	<p class="m_3">Guardians of the Galaxy</p>
							</div>
						   </div>
		               </div> 
                      <div class="clearfix"> </div>
                  </div>
           </div>
    </div>
</div>




<div class="container"> 
 <footer id="footer">
 	<div id="footer-3d">
		<div class="gp-container">
			<span class="first-widget-bend"></span>
		</div>		
	</div>




    <div id="footer-widgets" class="gp-footer-larger-first-col">
		<div class="gp-container">
            <div class="footer-widget footer-1">
            	<div class="wpb_wrapper">
					<img src="/Public/Home/images/f_logo.png" alt=""/>
				</div> 
	          <br>
	         
			  <p class="text">我是一个中国人，永远也不会忘本，在好莱坞打拼如何也不仿碍我在国内发展，我们中国人不像有些国家，因为一部电影在好莱坞略有影响就改了美国籍。 —— 成龙</p>
			 </div>
			 <div class="footer_box">
			  <div class="col_1_of_3 span_1_of_3">
					<h3>热门频道</h3>
					<ul class="first">
						<li><a href="#">电视剧</a></li>
						<li><a href="#">电影</a></li>
						<li><a href="#">综艺</a></li>
					</ul>
		     </div>
		     <div class="col_1_of_3 span_1_of_3">
					<h3>特色推荐</h3>
					<ul class="first">
						<li><a href="#">微电影</a></li>
						<li><a href="#">搞笑</a></li>
						<li><a href="#">原创自媒体</a></li>
					</ul>
		     </div>
		     <div class="col_1_of_3 span_1_of_3">
					<h3>友情链接</h3>
					<ul class="first">
						<li><a href="https://space.bilibili.com/565346?from=search&seid=8384068083774544663#!/">哔哩哔哩</a></li>
						<li><a href="https://v.qq.com/">腾讯视频</a></li>
						<li><a href="http://www.youku.com/">优酷视频</a></li>
					</ul>
					<div class="copy">
				      <p>Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="#">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
			        </div>
		     </div>
		    <div class="clearfix"> </div>
	        </div>
	        <div class="clearfix"> </div>
		</div>
	</div>
  </footer>
</div>		
</body>
</html>