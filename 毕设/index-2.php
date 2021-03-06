<!DOCTYPE html> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>基于PHP的传媒公司网站</title>
<link href="style.css" rel="stylesheet" type="text/css">
<script src="jquery-2.1.4.min.js"></script>
<style>
	.nav ul li:first-child{
		background-color: #444447;
	}	
	
	.nav ul li:nth-child(2){
		background-color: #00c9d0;
	}	
	
	.nav-middle ul li:first-child{
		background-color: #00c9d0;
	}	
	
	.nav-middle-box{
		margin-top: 40px;
	}
</style>
</head>


<body>

<header id="header" >
	<div class="header-tool">
		<div class="header-tool-box">
			<div class="header-user-box">
					<dl>
						<dd><span></span><a href="login.html">登录</a></dd>
						<dd><span></span><a href="signup.html">注册</a></dd>
						<dd><span></span><a href="signup.html">消息</a></dd>
						<dd><a href="publish.php">发布</a></dd>
					</dl>
			</div>
		</div>
	</div>
	<div id="header-1">
		<div id="header-box">
			<div class="header-logo"><a href="index.html">
				<img src="images/header_logo.png"/></a>
			</div>
		</div>
	</div>
		
	<nav class="nav">
		<ul>
 			<li><a href="index.html">首 页</a></li>
  			<li><a href="index-2.php">搭配频道</a></li>
  			<li><a href="index-3.php">搭配达人</a></li>
			<div class="nav-search-box">
					<form class="nav-search">
				 		<select>
							<option>搭配</option>
							<option>用户</option>
						</select>
					 	<input placeholder="请输入搜索内容" class="nav-search-input" type="text" />
					 	<a class="search-img"></a>
					</form>
			</div>
		</ul>
	</nav>
</header>


<main>

	<div class="nav-middle-box">
		<nav class="nav-middle">
			<ul>
 				<li><a href="javascript:void(0)">不 限</a></li>
 				<li><a href="javascript:void(0)">男 生<img class="img-boys" src="images/boy.png" /></a></li>
 				<li><a href="javascript:void(0)">女 生<img class="img-girls" src="images/girl.png"/></a></li>
			</ul>
		</nav>
		<div class="nav-middle-angle"></div>  
	</div>

	<div class="backToTop-button">
		<img src="images/回到顶部.png" />
	</div>

	<div class="content-box">
		<div class="content">
			<div class="content-picture-box">
				<div class="content-picture">
					<a href="detail.html"><img src="images/boys/20160103232318793_500.jpg" /></a>
				</div>
				<div class="picture-info">
					<div class="profile-picture">
						<a href="space.html"><img src="images/AI.png" /></a>
					</div>
					<div class="user-info"></div>
					<div class="picture-caption"></div>
				</div>
			</div>
		
			<div class="content-picture-box">
				<div class="content-picture">
				</div>
				<div class="picture-info">
					<div class="profile-picture">
						
					</div>
					<div class="user-info"></div>
					<div class="picture-caption"></div>
				</div>
			</div>
			
			<div class="content-picture-box">
				<div class="content-picture">
				</div>
				<div class="picture-info">
					<div class="profile-picture">
						
					</div>
					<div class="user-info"></div>
					<div class="picture-caption"></div>
				</div>
			</div>
		
			<div class="content-picture-box">
				<div class="content-picture">
				</div>
				<div class="picture-info">
					<div class="profile-picture">
						
					</div>
					<div class="user-info"></div>
					<div class="picture-caption"></div>
				</div>
			</div>
		
			<div class="content-picture-box">
				<div class="content-picture">
				</div>
				<div class="picture-info">
					<div class="profile-picture">
						
					</div>
					<div class="user-info"></div>
					<div class="picture-caption"></div>
				</div>
			</div>
			
			<div class="content-picture-box">
				<div class="content-picture">
				</div>
				<div class="picture-info">
					<div class="profile-picture">
					
					</div>
					<div class="user-info"></div>
					<div class="picture-caption"></div>
				</div>
			</div>
		
			<div class="content-picture-box">
				<div class="content-picture">
				</div>
				<div class="picture-info">
					<div class="profile-picture">
						
					</div>
					<div class="user-info"></div>
					<div class="picture-caption"></div>
				</div>
			</div>
		
			<div class="content-picture-box">
				<div class="content-picture">
				</div>
					<div class="picture-info">
					<div class="profile-picture">

					</div>
					<div class="user-info"></div>
					<div class="picture-caption"></div>
				</div>
			</div>

			<div class="content-picture-box">
				<div class="content-picture">
				</div>
				<div class="picture-info">
					<div class="profile-picture">

					</div>
					<div class="user-info"></div>
					<div class="picture-caption"></div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="content-page">
					<a href="javascript:void(0)">&lt;&nbsp;上一页</a>
					<a class="current-page" href="javascript:void(0)">1</a>
					<a href="javascript:void(0)">2</a>
					<a href="javascript:void(0)">3</a>
					<a href="javascript:void(0)">4</a>
					<a href="javascript:void(0)">5</a>
					<a>...</a>
					<a href="javascript:void(0)">下一页&nbsp;&gt;</a>
		</div>
					<div class="clear"></div>
	</div>
	
</main>
	
	
	
	
<footer>
<div class="bottom">Copyright©2017<a href="index.html">基于PHP的传媒公司网站</a>All rights reserved. By:1440706131 计算机系 张跃聪</div>
</footer>

<script src="scroll.js"></script>
<script src="javascript.js"></script>
</body>
</html>
