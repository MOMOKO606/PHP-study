<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"C:\xampp\htdocs\tp5\public/../application/index\view\index\index.html";i:1550548721;s:54:"C:\xampp\htdocs\tp5\application\index\view\layout.html";i:1550461464;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>模板布局</title>
</head>
<body>
    <div style="width:100%;height:100px;background-color:red;"></div>
    <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<link type="text/css" rel="stylesheet" href="/css/master.css" />
		<link type="text/css" rel="stylesheet" href="/css/stylezgx.css" />
		<link href="/css/style.css" type="text/css"  rel="stylesheet"/>
		<script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="/js/index.js"></script>
	</head>
	<body onload="login1()">

	<div id="header">
		<div class="left-flex-container">
			<div class="left-flex-item  l-flex-item1"><a href="#">魅族官网</a></div>
			<div class="left-flex-item  l-flex-item2"><a href="#">魅族商城</a></div>
			<div class="left-flex-item  l-flex-item3"><a href="#">Flyme</a></div>
			<div class="left-flex-item  l-flex-item4"><a href="#">专卖店</a></div>
			<div class="left-flex-item  l-flex-item5"><a href="#">服务</a></div>
			<div class="left-flex-item  l-flex-item6"><a href="#">社区</a></div>
		</div>
		<div class="right-flex-container">
			<div class="right-flex-item r-flex-item1">
				<a href="#">我的收藏</a>
			</div>
			<div class="box r-flex-item2">
				<div id="triangle-left"></div>
				<a class="icon" href="#">new</a>
			</div>
			<div class="right-flex-item r-flex-item3"><a href="#">我的订单</a></div>
			<div class="right-flex-item r-flex-item4"><a href="login.html">登录</a></div>
			<div class="right-flex-item r-flex-item"><a href="register.html">注册</a></div>
		</div>
	</div>
	
	
	<div id="nav">
		<div class="logo">
			<img src="/img/logo.png">
		</div>
		<div class="header-nav" id="header_nav">
			<ul id="tab">
				<li class="fli"><a href="#">PRO手机</a></li>
				<li><a href="#">魅蓝手机</a></li>
				<li><a href="#">MX手机</a></li>
				<li><a href="#">精选配件</a></li>
				<li><a href="#">智能硬件</a></li>
			</ul>
		</div>
		<!--tab切换-->
		<div id="tab_con">
			<div class="fdiv">
				<ul class="t1"></ul>
			</div>
			<div>
				<ul class="t1"></ul>
			</div>
			<div>
				<ul class="t1"></ul>
			</div>
			<div>
				<ul class="t1"></ul>
			</div>
			<div>
				<ul class="t1"></ul>
			</div>
		</div>
		
		<script>
			var data;
			$(function(){
				$('#tab li').mouseover(function(){
				   	var index=$(this).index();
					getData(index);
					$('#tab_con').show();
					
					$('#tab li').removeClass('fli');   /*去除fli类名*/
					$(this).addClass('fli');           /*鼠标悬浮到哪个li就获取fli类名*/
					
					$('#tab_con div').removeClass('fdiv');   /*去除fdiv类名*/
					$('#tab_con div').eq($(this).index()).addClass('fdiv');   
					/*获取当前fli的索引值,所得的索引值对应的#tab_con div获取fdiv类名*/
					
					$('.fli a').css({'color':'#00c3f5'});
				})
				
				function getData(index){
				    $.ajax({
				        type: 'GET',
				        url: 'data/newData.json',
				        dataType: 'json',
				        success: function(data){
							var htme=htmll(data,index);	
							$('.fdiv ul').html(htme);   /*html直接替换不追加*/
				        },
				        error: function(xhr, type){
				            alert('Ajax error!')
				        }
				    })
			    }
				function htmll(data,index){
					var html='';
					var data=data[index].one;
					for(i in data){
						html=html+'<li>'+'<a href="'+data[i].href+'"><img src="'+data[i].img+'"/><p class="font1">'
						+data[i].p1+'</p>'+'<p class="font2">'+data[i].p2+'</p></a></li>'
					}
				
					return html;	
				}  /* end of htmll*/
				
				$('#tab').mouseout(function(){
					 event.stopPropagation();//阻止冒泡 
				})
				$('#tab_con').mouseout(function(){
					event.stopPropagation();//阻止冒泡 
				})
				
				$('#tab_con').mouseover(function(){			
					$('#tab_con').show();
					$('.fli a').css({'color':'#00c3f5'});
				})
				
				$('#tab li').mouseleave(function(){
					$('#tab_con').hide();
					$('.fli a').css({'color':'#666'});
				})
				$('.t1').mouseleave(function(){
					
					$('#tab_con').hide();
					$('.fli a').css({'color':'#666'});
				})
			})
		</script>
	</div>
	</div>

	<div class="huangchunfei">	
<div class="m_banner"> <!--轮播-->			
		
    <a href="#" target="_blank">
    	<div class="banner " style=" background-image:url(/img/img1.jpg);  no-repeat center top; width:100%; height:480px;" id="banner1" >    
    	</div>
    </a>
    
    <a href="#" target="_blank">
    	<div class="banner " style=" background-image:url(/img/img2.jpg);display:none; no-repeat center top;width:100%; height:480px;" id="banner2" > 		
    	</div>
    </a>
    
    <a href="#" target="_blank">
	    <div class="banner " style=" background-image:url(//img/img3.jpg);display:none;no-repeat center top;width:100%; height:480px;" id="banner3" >   
	    </div>
    </a>
    
    <a href="#" target="_blank">
    <div class="banner " style=" background-image:url(//img/img4.jpg);display:none; no-repeat center top;width:100%; height:480px;" id="banner4" > 
    </div>
    </a>
    
    <a href="#" target="_blank">
    <div class="banner " style=" background-image:url(//img/img5.jpg);display:none;no-repeat center top;width:100%;height:480px;" id="banner5" >
    </div>
    </a>
    
    <!--左右按钮-->
   	<div class="banner_ctrl"> 
    	<a href="#" class="prev" title="" ></a>
    	<a href="#" class="next" title="" ></a>
    </div>
   
    <!--侧边栏box-->
	<div class="boxx">
	<!--侧边栏ul-->
	<ul id="tabb" class="ul" style="padding-top: 11px;">
			
			<li class="li ">全部商品分类</li>
			<li class="li">手机</li>
			<li class="li">智能硬件</li> 
			<li class="li">耳机/音箱</li>
			<li class="li">路由器/移动电源</li>
			<li class="li">保护盖/后盖/贴膜</li>
			<li class="li">数据线/电源适配器</li>
			<li class="li">周边配件</li> 
		</ul>
	<!--侧边栏div-->	
	<div id="tab_conn">
				<!--全部商品分类-->
				<div class="category-child clear"></div>				
				<!--手机-->
				<div class="category-child clear">
					    <ul class="category-child-list">   
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/001.png" >
					          <span class="category-child-text">魅蓝 Note5</span>
					        </a>
					      </li>
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#">
					          <img class="category-child-img" src="/img/002.png" >
					          <span class="category-child-text">魅蓝 5 新年套装</span>
					        </a>
					      </li>
					
					      <li class="category-child-item">
					        <a class="category-child-link" href="#"  >
					          <img class="category-child-img" src="/img/003.png"  >
					          <span class="category-child-text">魅蓝 Note3</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/004.png" >
					          <span class="category-child-text">魅蓝 3s</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/005.png" >
					          <span class="category-child-text">魅蓝 X</span>
					        </a>
					      </li>
					    
					    </ul>
					    
					  
					    
					    <ul class="category-child-list">
					    
					     <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/001.png" >
					          <span class="category-child-text">魅蓝 Note5</span>
					        </a>
					      </li>
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#">
					          <img class="category-child-img" src="/img/002.png" >
					          <span class="category-child-text">魅蓝 5 新年套装</span>
					        </a>
					      </li>
					
					      <li class="category-child-item">
					        <a class="category-child-link" href="#"  >
					          <img class="category-child-img" src="/img/003.png"  >
					          <span class="category-child-text">魅蓝 Note3</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/004.png" >
					          <span class="category-child-text">魅蓝 3s</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/005.png" >
					          <span class="category-child-text">魅蓝 X</span>
					        </a>
					      </li>
					    
					    </ul>
					    
					  
					    
					    <ul class="category-child-list">
					    
					     <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/001.png" >
					          <span class="category-child-text">魅蓝 Note5</span>
					        </a>
					      </li>
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#">
					          <img class="category-child-img" src="/img/002.png" >
					          <span class="category-child-text">魅蓝 5 新年套装</span>
					        </a>
					      </li>
					
					      <li class="category-child-item">
					        <a class="category-child-link" href="#"  >
					          <img class="category-child-img" src="/img/003.png"  >
					          <span class="category-child-text">魅蓝 Note3</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/004.png" >
					          <span class="category-child-text">魅蓝 3s</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/005.png" >
					          <span class="category-child-text">魅蓝 X</span>
					        </a>
					      </li>
					    
					    </ul>			  
				</div>
				<!--智能硬件-->
				<div class="category-child clear">
					    <ul class="category-child-list">   
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/001.png" >
					          <span class="category-child-text">1魅蓝 Note5</span>
					        </a>
					      </li>
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#">
					          <img class="category-child-img" src="/img/002.png" >
					          <span class="category-child-text">1魅蓝 5 新年套装</span>
					        </a>
					      </li>
					
					      <li class="category-child-item">
					        <a class="category-child-link" href="#"  >
					          <img class="category-child-img" src="/img/003.png"  >
					          <span class="category-child-text">1魅蓝 Note3</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/004.png" >
					          <span class="category-child-text">1魅蓝 3s</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/005.png" >
					          <span class="category-child-text">1魅蓝 X</span>
					        </a>
					      </li>
					    
					    </ul>
					    
					  
					    
					    <ul class="category-child-list">
					    
					     <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/001.png" >
					          <span class="category-child-text">魅蓝 Note5</span>
					        </a>
					      </li>
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#">
					          <img class="category-child-img" src="/img/002.png" >
					          <span class="category-child-text">魅蓝 5 新年套装</span>
					        </a>
					      </li>
					
					      <li class="category-child-item">
					        <a class="category-child-link" href="#"  >
					          <img class="category-child-img" src="/img/003.png"  >
					          <span class="category-child-text">魅蓝 Note3</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/004.png" >
					          <span class="category-child-text">魅蓝 3s</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/005.png" >
					          <span class="category-child-text">魅蓝 X</span>
					        </a>
					      </li>
					    
					    </ul>
					    
					  
					    
					    <ul class="category-child-list">
					    
					     <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/001.png" >
					          <span class="category-child-text">魅蓝 Note5</span>
					        </a>
					      </li>
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#">
					          <img class="category-child-img" src="/img/002.png" >
					          <span class="category-child-text">魅蓝 5 新年套装</span>
					        </a>
					      </li>
					
					      <li class="category-child-item">
					        <a class="category-child-link" href="#"  >
					          <img class="category-child-img" src="/img/003.png"  >
					          <span class="category-child-text">魅蓝 Note3</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/004.png" >
					          <span class="category-child-text">魅蓝 3s</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/005.png" >
					          <span class="category-child-text">魅蓝 X</span>
					        </a>
					      </li>
					    
					    </ul>			  
				</div>
				<!--耳机/音箱-->
				<div class="category-child clear">
					    <ul class="category-child-list">   
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/001.png" >
					          <span class="category-child-text">1魅蓝 Note5</span>
					        </a>
					      </li>
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#">
					          <img class="category-child-img" src="/img/002.png" >
					          <span class="category-child-text">1魅蓝 5 新年套装</span>
					        </a>
					      </li>
					
					      <li class="category-child-item">
					        <a class="category-child-link" href="#"  >
					          <img class="category-child-img" src="/img/003.png"  >
					          <span class="category-child-text">1魅蓝 Note3</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/004.png" >
					          <span class="category-child-text">1魅蓝 3s</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/005.png" >
					          <span class="category-child-text">1魅蓝 X</span>
					        </a>
					      </li>
					    
					    </ul>
					    
					  
					    
					    <ul class="category-child-list">
					    
					     <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/001.png" >
					          <span class="category-child-text">魅蓝 Note5</span>
					        </a>
					      </li>
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#">
					          <img class="category-child-img" src="/img/002.png" >
					          <span class="category-child-text">魅蓝 5 新年套装</span>
					        </a>
					      </li>
					
					      <li class="category-child-item">
					        <a class="category-child-link" href="#"  >
					          <img class="category-child-img" src="/img/003.png"  >
					          <span class="category-child-text">魅蓝 Note3</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/004.png" >
					          <span class="category-child-text">魅蓝 3s</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/005.png" >
					          <span class="category-child-text">魅蓝 X</span>
					        </a>
					      </li>
					    
					    </ul>
					    
					  
					    
					    <ul class="category-child-list">
					    
					     <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/001.png" >
					          <span class="category-child-text">魅蓝 Note5</span>
					        </a>
					      </li>
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#">
					          <img class="category-child-img" src="/img/002.png" >
					          <span class="category-child-text">魅蓝 5 新年套装</span>
					        </a>
					      </li>
					
					      <li class="category-child-item">
					        <a class="category-child-link" href="#"  >
					          <img class="category-child-img" src="/img/003.png"  >
					          <span class="category-child-text">魅蓝 Note3</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/004.png" >
					          <span class="category-child-text">魅蓝 3s</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/005.png" >
					          <span class="category-child-text">魅蓝 X</span>
					        </a>
					      </li>
					    
					    </ul>			  
				</div>
				<!--路由器/移动电源-->
				<div class="category-child clear">
					    <ul class="category-child-list">   
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/001.png" >
					          <span class="category-child-text">2魅蓝 Note5</span>
					        </a>
					      </li>
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#">
					          <img class="category-child-img" src="/img/002.png" >
					          <span class="category-child-text">2魅蓝 5 新年套装</span>
					        </a>
					      </li>
					
					      <li class="category-child-item">
					        <a class="category-child-link" href="#"  >
					          <img class="category-child-img" src="/img/003.png"  >
					          <span class="category-child-text">2魅蓝 Note3</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/004.png" >
					          <span class="category-child-text">2魅蓝 3s</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/005.png" >
					          <span class="category-child-text">2魅蓝 X</span>
					        </a>
					      </li>
					    
					    </ul>
					    
					  
					    
					    <ul class="category-child-list">
					    
					     <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/001.png" >
					          <span class="category-child-text">2魅蓝 Note5</span>
					        </a>
					      </li>
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#">
					          <img class="category-child-img" src="/img/002.png" >
					          <span class="category-child-text">2魅蓝 5 新年套装</span>
					        </a>
					      </li>
					
					      <li class="category-child-item">
					        <a class="category-child-link" href="#"  >
					          <img class="category-child-img" src="/img/003.png"  >
					          <span class="category-child-text">2魅蓝 Note3</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/004.png" >
					          <span class="category-child-text">2魅蓝 3s</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/005.png" >
					          <span class="category-child-text">2魅蓝 X</span>
					        </a>
					      </li>
					    
					    </ul>
					    
					  
					    
					    <ul class="category-child-list">
					    
					     <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/001.png" >
					          <span class="category-child-text">2魅蓝 Note5</span>
					        </a>
					      </li>
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#">
					          <img class="category-child-img" src="/img/002.png" >
					          <span class="category-child-text">2魅蓝 5 新年套装</span>
					        </a>
					      </li>
					
					      <li class="category-child-item">
					        <a class="category-child-link" href="#"  >
					          <img class="category-child-img" src="/img/003.png"  >
					          <span class="category-child-text">2魅蓝 Note3</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/004.png" >
					          <span class="category-child-text">2魅蓝 3s</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/005.png" >
					          <span class="category-child-text">2魅蓝 X</span>
					        </a>
					      </li>
					    
					    </ul>			  
				</div>
				<!--保护盖/后盖/贴膜-->
				<div class="category-child clear">
					    <ul class="category-child-list">   
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/001.png" >
					          <span class="category-child-text">3魅蓝 Note5</span>
					        </a>
					      </li>
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#">
					          <img class="category-child-img" src="/img/002.png" >
					          <span class="category-child-text">3魅蓝 5 新年套装</span>
					        </a>
					      </li>
					
					      <li class="category-child-item">
					        <a class="category-child-link" href="#"  >
					          <img class="category-child-img" src="/img/003.png"  >
					          <span class="category-child-text">3魅蓝 Note3</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/004.png" >
					          <span class="category-child-text">3魅蓝 3s</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/005.png" >
					          <span class="category-child-text">3魅蓝 X</span>
					        </a>
					      </li>
					    
					    </ul>
					    
					  
					    
					    <ul class="category-child-list">
					    
					     <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/001.png" >
					          <span class="category-child-text">3魅蓝 Note5</span>
					        </a>
					      </li>
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#">
					          <img class="category-child-img" src="/img/002.png" >
					          <span class="category-child-text">3魅蓝 5 新年套装</span>
					        </a>
					      </li>
					
					      <li class="category-child-item">
					        <a class="category-child-link" href="#"  >
					          <img class="category-child-img" src="/img/003.png"  >
					          <span class="category-child-text">3魅蓝 Note3</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/004.png" >
					          <span class="category-child-text">3魅蓝 3s</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/005.png" >
					          <span class="category-child-text">3魅蓝 X</span>
					        </a>
					      </li>
					    
					    </ul>
					    
					  
					    
					    <ul class="category-child-list">
					    
					     <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/001.png" >
					          <span class="category-child-text">3魅蓝 Note5</span>
					        </a>
					      </li>
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#">
					          <img class="category-child-img" src="/img/002.png" >
					          <span class="category-child-text">3魅蓝 5 新年套装</span>
					        </a>
					      </li>
					
					      <li class="category-child-item">
					        <a class="category-child-link" href="#"  >
					          <img class="category-child-img" src="/img/003.png"  >
					          <span class="category-child-text">3魅蓝 Note3</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/004.png" >
					          <span class="category-child-text">3魅蓝 3s</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/005.png" >
					          <span class="category-child-text">3魅蓝 X</span>
					        </a>
					      </li>
					    
					    </ul>			  
				</div>
				<!--数据线/电源适配器-->
				<div class="category-child clear">
					    <ul class="category-child-list">   
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/001.png" >
					          <span class="category-child-text">4魅蓝 Note5</span>
					        </a>
					      </li>
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#">
					          <img class="category-child-img" src="/img/002.png" >
					          <span class="category-child-text">4魅蓝 5 新年套装</span>
					        </a>
					      </li>
					
					      <li class="category-child-item">
					        <a class="category-child-link" href="#"  >
					          <img class="category-child-img" src="/img/003.png"  >
					          <span class="category-child-text">4魅蓝 Note3</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/004.png" >
					          <span class="category-child-text">4魅蓝 3s</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/005.png" >
					          <span class="category-child-text">4魅蓝 X</span>
					        </a>
					      </li>
					    
					    </ul>
					    
					  
					    
					    <ul class="category-child-list">
					    
					     <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/001.png" >
					          <span class="category-child-text">4魅蓝 Note5</span>
					        </a>
					      </li>
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#">
					          <img class="category-child-img" src="/img/002.png" >
					          <span class="category-child-text">4魅蓝 5 新年套装</span>
					        </a>
					      </li>
					
					      <li class="category-child-item">
					        <a class="category-child-link" href="#"  >
					          <img class="category-child-img" src="/img/003.png"  >
					          <span class="category-child-text">4魅蓝 Note3</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/004.png" >
					          <span class="category-child-text">4魅蓝 3s</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/005.png" >
					          <span class="category-child-text">4魅蓝 X</span>
					        </a>
					      </li>
					    
					    </ul>
					    
					  
					    
					    <ul class="category-child-list">
					    
					     <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/001.png" >
					          <span class="category-child-text">4魅蓝 Note5</span>
					        </a>
					      </li>
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#">
					          <img class="category-child-img" src="/img/002.png" >
					          <span class="category-child-text">4魅蓝 5 新年套装</span>
					        </a>
					      </li>
					
					      <li class="category-child-item">
					        <a class="category-child-link" href="#"  >
					          <img class="category-child-img" src="/img/003.png"  >
					          <span class="category-child-text">4魅蓝 Note3</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/004.png" >
					          <span class="category-child-text">4魅蓝 3s</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/005.png" >
					          <span class="category-child-text">4魅蓝 X</span>
					        </a>
					      </li>
					    
					    </ul>			  
				</div>
				<!--周边配件-->
				<div class="category-child clear">
					    <ul class="category-child-list">   
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/001.png" >
					          <span class="category-child-text">5魅蓝 Note5</span>
					        </a>
					      </li>
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#">
					          <img class="category-child-img" src="/img/002.png" >
					          <span class="category-child-text">5魅蓝 5 新年套装</span>
					        </a>
					      </li>
					
					      <li class="category-child-item">
					        <a class="category-child-link" href="#"  >
					          <img class="category-child-img" src="/img/003.png"  >
					          <span class="category-child-text">5魅蓝 Note3</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/004.png" >
					          <span class="category-child-text">5魅蓝 3s</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/005.png" >
					          <span class="category-child-text">5魅蓝 X</span>
					        </a>
					      </li>
					    
					    </ul>
					    
					  
					    
					    <ul class="category-child-list">
					    
					     <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/001.png" >
					          <span class="category-child-text">5魅蓝 Note5</span>
					        </a>
					      </li>
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#">
					          <img class="category-child-img" src="/img/002.png" >
					          <span class="category-child-text">5魅蓝 5 新年套装</span>
					        </a>
					      </li>
					
					      <li class="category-child-item">
					        <a class="category-child-link" href="#"  >
					          <img class="category-child-img" src="/img/003.png"  >
					          <span class="category-child-text">5魅蓝 Note3</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/004.png" >
					          <span class="category-child-text">5魅蓝 3s</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/005.png" >
					          <span class="category-child-text">5魅蓝 X</span>
					        </a>
					      </li>
					    
					    </ul>
					    
					  
					    
					    <ul class="category-child-list">
					    
					     <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/001.png" >
					          <span class="category-child-text">5魅蓝 Note5</span>
					        </a>
					      </li>
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#">
					          <img class="category-child-img" src="/img/002.png" >
					          <span class="category-child-text">5魅蓝 5 新年套装</span>
					        </a>
					      </li>
					
					      <li class="category-child-item">
					        <a class="category-child-link" href="#"  >
					          <img class="category-child-img" src="/img/003.png"  >
					          <span class="category-child-text">5魅蓝 Note3</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/004.png" >
					          <span class="category-child-text">5魅蓝 3s</span>
					        </a>
					      </li>
					    
					  
					    
					      <li class="category-child-item">
					        <a class="category-child-link" href="#" >
					          <img class="category-child-img" src="/img/005.png" >
					          <span class="category-child-text">5魅蓝 X</span>
					        </a>
					      </li>
					    
					    </ul>			  
				</div>
			</div><!--tab_con-->
			
	</div> <!--box-->
</div><!--轮播-->	
	
	<!--目录种类-->

	<!--其他服务-->
	<div class="other">
		<ul class="mcontainer server">
	    	<li class="server-item  clear">
	          <a  href="#" target="_blank">
	                <img class="s" src="/img/捕获_01.png" width="122" height="70">
	          </a>
	          <a  href="#" target="_blank">
	                <img class="s" src="/img/捕获_02.jpg" width="122" height="70">
	          </a>
	          <a  href="#" target="_blank">
	                <img class="s" src="/img/捕获_03.jpg" width="122" height="70">
	          </a>
	          <a href="#" target="_blank">
	                <img class="s" src="/img/捕获_04.jpg" width="122" height="70">
	          </a>
	         
	    	</li>
	
	        <li class="server-item">
	            <a class="server-link" href="#" target="_blank">
	                <img class="server-img" src="/img/mg1.jpg" width="244" height="140">
	            </a>
	        </li>
	        <li class="server-item">
	            <a class="server-link" href="# "target="_blank" >
	                <img class="server-img" src="/img/mg2.jpg" width="244" height="140">
	            </a>
	        </li>
	        <li class="server-item">
	            <a class="server-link" href="#" target="_blank" >
	                <img class="server-img" src="/img/mg3.jpg" width="244" height="140">
	            </a>
	        </li>
	        
	        <li class="server-item">
	            <a class="server-link" href="#" target="_blank" >
	                <img class="server-img" src="/img/mg4.jpg" width="244" height="140">
	            </a>
	        </li>
		</ul>		
	</div>	<!--other-->	
</div><!--huangchunfei-->

	<div class="Zazzing">
			<div class="whole">
				<div class="hot-prop">
					<div class="propose">
						<p>热品推荐</p>
						<div class="btn right">></div>    <!-- &gt;-->
						<div class="btn left"><</div>		<!--&lt;-->
					</div>
					
					<div class="bigbox">
						<div class="cont">
							<div class="hotlist fir">
								<a href="#">
									<div class="all">
										<img src="/img/hotimg1.png">
										<div class="info">
											<h2>魅族PRO 6</h2>
											<span class="give">赠品</span><span>环窗智能保护套</span>
											<h4><span>¥</span>&nbsp;2299 起</h4>
										</div>
									</div>
								</a>
							</div>		
						<div class="hotlist">
							<a href="#">
								<div class="all">
									<img src="/img/hotimg2.png">
									<div class="info">
										<h2>魅族PRO 6</h2>
										<span class="give">赠品</span><span>环窗智能保护套</span>
										<h4><span>¥</span>&nbsp;2299 起</h4>
										<div class="new">免息</div>
									</div>
								</div>
							</a>
						</div>					
						<div class="hotlist">
							<a href="#">
								<div class="all">
									<img src="/img/hotimg3.png">
									<div class="info">
										<h2>魅族PRO 6</h2>
										<span class="give">赠品</span><span>环窗智能保护套</span>
										<h4><span>¥</span>&nbsp;2299 起</h4>
									</div>
								</div>
							</a>
						</div>							
						<div class="hotlist">
							<a href="#">
								<div class="all">
									<img src="/img/hotimg4.png">
									<div class="info">
										<h2>魅族PRO 6</h2>
										<span class="give">赠品</span><span>环窗智能保护套</span>
										<h4><span>¥</span>&nbsp;2299 起</h4>
									</div>
								</div>
							</a>
						</div>		
						<div class="hotlist">
							<a href="#">
								<div class="all">
									<img src="/img/hotimg5.png">
									<div class="info">
										<h2>魅族PRO 6</h2>
										<span class="give">赠品</span><span>环窗智能保护套</span>
										<h4><span>¥</span>&nbsp;2299 起</h4>
										<div class="special">特惠</div>
									</div>
								</div>
							</a>
						</div>		
						<div class="hotlist">
							<a href="#">
								<div class="all">
									<img src="/img/hotimg6.png">
									<div class="info">
										<h2>魅族PRO 6</h2>
										<span class="give">赠品</span><span>环窗智能保护套</span>
										<h4><span>¥</span>&nbsp;2299 起</h4>
									</div>
								</div>
							</a>
						</div>							
						<div class="hotlist">
							<a href="#">
								<div class="all">
									<img src="/img/hotimg7.png">
									<div class="info">
										<h2>魅族PRO 6</h2>
										<span class="give">赠品</span><span>环窗智能保护套</span>
										<h4><span>¥</span>&nbsp;2299 起</h4>
									</div>
								</div>
							</a>
						</div>	
						<div class="hotlist">
							<a href="#">
								<div class="all">
									<img src="/img/hotimg8.png">
									<div class="info">
										<h2>魅族PRO 6</h2>
										<span class="give">赠品</span><span>环窗智能保护套</span>
										<h4><span>¥</span>&nbsp;2299 起</h4>
									</div>
								</div>
							</a>
						</div>	
						<div class="hotlist">
							<a href="#">
								<div class="all">
									<img src="/img/hotimg9.png">
									<div class="info">
										<h2>魅族PRO 6</h2>
										<span class="give">赠品</span><span>环窗智能保护套</span>
										<h4><span>¥</span>&nbsp;2299 起</h4>
									</div>
								</div>
							</a>
						</div>	
						<div class="hotlist">
							<a href="#">
								<div class="all">
									<img src="/img/hotimg10.png">
									<div class="info">
										<h2>魅族PRO 6</h2>
										<span class="give">赠品</span><span>环窗智能保护套</span>
										<h4><span>¥</span>&nbsp;2299 起</h4>
										<div class="new">免息</div>
									</div>
								</div>
							</a>
						</div>	
						</div>
					</div>
				</div>
			</div>
					
			<div class="first">
				<div class="mobile">
					<div class="mobile-ad">
						<a href="#"><img src="/img/oneimg.jpg"></a>
					</div>
				</div>
			</div>
			
			<div class="second">
				<div class="mobile-con">
					<div class="mobile-phone">
						<p>手机</p>
						<a href="#">更多></a>
					</div>
					<div class="mobile-listone">
						<div class="list">
							<a class="listone" href="#"><img src="/img/phone/listone.jpg"></a>
							<div class="imebuy">
								<a href="#">立即购买</a>
							</div>
						</div>	
						<div class="imglistone">
							<a href="#">
								<div class="all">
									<img src="/img/phone/imglist1.png">
									<div class="info">
										<h2>魅蓝Note3</h2>
										<h3>公开版1月4日10点限量开售</h3>
										<h4><span>¥</span>&nbsp;799</h4>
										<div class="hot">热卖</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>	
			</div>
			
			<div class="second">
				<div class="mobile">
					<div class="mobile-ad1">
						<a href="#"><img src="/img/twoimg.jpg"></a>
					</div>
				</div>
				<div class="mobile-con">
					<div class="mobile-phone">
						<p>精选配件</p>
						<div class="equip"><a href="#">耳机音箱</a></div>
						<div class="equip"><a href="#">路由器/移动电源</a></div>
						<div class="equip"><a href="#">移动存储</a></div>
					</div>
					<div class="mobile-list">
						<div class="list">
							<a class="listone" href="#"><img src="/img/listtwo.jpg"></a>
							<div class="imebuy">
								<a href="#">立即购买</a>
							</div>
						</div>
						<div class="imglist">
							<a href="#">
								<div class="all">
									<img src="/img/imglist2.png">
									<div class="info">
										<h2>魅族EP51蓝牙运动耳机</h2>
										<h3>轻装上阵&nbsp;乐享动听</h3>
										<h4><span>¥</span>&nbsp;269</h4>
									</div>
								</div>
							</a>
						</div>
						<div class="imglist">
							<a href="#">
								<div class="all">
									<img src="/img/imglist2.png">
									<div class="info">
										<h2>魅族EP51蓝牙运动耳机</h2>
										<h3>轻装上阵&nbsp;乐享动听</h3>
										<h4><span>限时特惠</span>&nbsp;&nbsp;<span>¥</span>&nbsp;79</h4>
										<div class="hot">热卖</div>
									</div>
								</div>
							</a>
						</div>
						<div class="imglist">
							<a href="#">
								<div class="all">
									<img src="/img/imglist2.png">
									<div class="info">
										<h2>魅族EP51蓝牙运动耳机</h2>
										<h3>轻装上阵&nbsp;乐享动听</h3>
										<h4><span>¥</span>&nbsp;269</h4>
									</div>
								</div>
							</a>
						</div>
						<div class="imglist">
							<a href="#">
								<div class="all">
									<img src="/img/imglist2.png">
									<div class="info">
										<h2>魅族EP51蓝牙运动耳机</h2>
										<h3>轻装上阵&nbsp;乐享动听</h3>
										<h4><span>¥</span>&nbsp;269</h4>
										<div class="new">新品</div>
									</div>
								</div>
							</a>
						</div>
						<div class="imglist">
							<a href="#">
								<div class="all">
									<img src="/img/imglist2.png">
									<div class="info">
										<h2>魅族EP51蓝牙运动耳机</h2>
										<h3>轻装上阵&nbsp;乐享动听</h3>
										<h4><span>限时特惠</span>&nbsp;&nbsp;<span>¥</span>&nbsp;79</h4>
										<div class="new">免息</div>
									</div>
								</div>
							</a>
						</div>						
						<div class="imglist">
							<a href="#">
								<div class="all">
									<img src="/img/imglist2.png">
									<div class="info">
										<h2>魅族EP51蓝牙运动耳机</h2>
										<h3>轻装上阵&nbsp;乐享动听</h3>
										<h4><span>¥</span>&nbsp;269</h4>
									</div>
								</div>
							</a>
						</div>						
						<div class="imglist">
							<a href="#">
								<div class="all">
									<img src="/img/imglist2.png">
									<div class="info">
										<h2>魅族EP51蓝牙运动耳机</h2>
										<h3>轻装上阵&nbsp;乐享动听</h3>
										<h4><span>¥</span>&nbsp;269</h4>
										<div class="hot">热卖</div>
									</div>
								</div>
							</a>
						</div>						
						<div class="imglist">
							<a href="#">
								<div class="all">
									<img src="/img/imglist2.png">
									<div class="info">
										<h2>魅族EP51蓝牙运动耳机</h2>
										<h3>轻装上阵&nbsp;乐享动听</h3>
										<h4><span>¥</span>&nbsp;269</h4>
									</div>
								</div>
							</a>
						</div>						
						<div class="imglist">
							<a href="#">
								<div class="all">
									<img src="/img/imglist2.png">
									<div class="info">
										<h2>魅族EP51蓝牙运动耳机</h2>
										<h3>轻装上阵&nbsp;乐享动听</h3>
										<h4><span>限时特惠</span>&nbsp;&nbsp;<span>¥</span>&nbsp;79</h4>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			
			<div class="second">
				<div class="mobile">
					<div class="mobile-ad1">
						<a href="#"><img src="img/thridimg.jpg"></a>
					</div>
				</div>
				<div class="mobile-con">
					<div class="mobile-phone">
						<p>智能硬件</p>
						<div class="equip"><a href="#">智能家居</a></div>
						<div class="equip"><a href="#">智能出行</a></div>
						<div class="equip"><a href="#">智能娱乐</a></div>
						<div class="equip"><a href="#">智能健康</a></div>
					</div>
					<div class="mobile-list">
						<div class="list">
							<a class="listone" href="#"><img src="/img/listthrid.png"></a>
							<div class="imebuy">
								<a href="#">立即购买</a>
							</div>
						</div>						
						<div class="imglist">
							<a href="#">
								<div class="all">
									<img src="/img/imglist3.png">
									<div class="info">
										<h2>暴风墨镜VR眼镜3D头盔</h2>
										<h3>轴陀螺仪&nbsp;电容触控</h3>
										<h4><span>限时特惠</span>&nbsp;&nbsp;<span>¥</span>&nbsp;369</h4>
										<div class="hot">热卖</div>
									</div>
								</div>
							</a>
						</div>						
						<div class="imglist">
							<a href="#">
								<div class="all">
									<img src="/img/imglist3.png">
									<div class="info">
										<h2>暴风墨镜VR眼镜3D头盔</h2>
										<h3>轴陀螺仪&nbsp;电容触控</h3>
										<h4><span>¥</span>&nbsp;269</h4>
									</div>
								</div>
							</a>
						</div>						
						<div class="imglist">
							<a href="#">
								<div class="all">
									<img src="/img/imglist3.png">
									<div class="info">
										<h2>暴风墨镜VR眼镜3D头盔</h2>
										<h3>轴陀螺仪&nbsp;电容触控</h3>
										<h4><span>限时特惠</span>&nbsp;&nbsp;<span>¥</span>&nbsp;79</h4>
										<div class="special">特惠</div>
									</div>
								</div>
							</a>
						</div>						
						<div class="imglist">
							<a href="#">
								<div class="all">
									<img src="/img/imglist3.png">
									<div class="info">
										<h2>暴风墨镜VR眼镜3D头盔</h2>
										<h3>轴陀螺仪&nbsp;电容触控</h3>
										<h4><span>¥</span>&nbsp;269</h4>
									</div>
								</div>
							</a>
						</div>						
						<div class="imglist">
							<a href="#">
								<div class="all">
									<img src="/img/imglist3.png">
									<div class="info">
										<h2>暴风墨镜VR眼镜3D头盔</h2>
										<h3>轴陀螺仪&nbsp;电容触控</h3>
										<h4><span>限时特惠</span>&nbsp;&nbsp;<span>¥</span>&nbsp;79</h4>
										<div class="hot">热卖</div>
									</div>
								</div>
							</a>
						</div>						
						<div class="imglist">
							<a href="#">
								<div class="all">
									<img src="/img/imglist3.png">
									<div class="info">
										<h2>暴风墨镜VR眼镜3D头盔</h2>
										<h3>轴陀螺仪&nbsp;电容触控</h3>
										<h4><span>¥</span>&nbsp;269</h4>
									</div>
								</div>
							</a>
						</div>						
						<div class="imglist">
							<a href="#">
								<div class="all">
									<img src="/img/imglist3.png">
									<div class="info">
										<h2>暴风墨镜VR眼镜3D头盔</h2>
										<h3>轴陀螺仪&nbsp;电容触控</h3>
										<h4><span>限时特惠</span>&nbsp;&nbsp;<span>¥</span>&nbsp;79</h4>
									</div>
								</div>
							</a>
						</div>						
						<div class="imglist">
							<a href="#">
								<div class="all">
									<img src="/img/imglist3.png">
									<div class="info">
										<h2>暴风墨镜VR眼镜3D头盔</h2>
										<h3>轴陀螺仪&nbsp;电容触控</h3>
										<h4><span>¥</span>&nbsp;269</h4>
									</div>
								</div>
							</a>
						</div>						
						<div class="imglist">
							<a href="#">
								<div class="all">
									<img src="/img/imglist3.png">
									<div class="info">
										<h2>暴风墨镜VR眼镜3D头盔</h2>
										<h3>轴陀螺仪&nbsp;电容触控</h3>
										<h4><span>¥</span>&nbsp;269</h4>
										<div class="new">免息</div>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			
			<div class="second">
				<div class="mobile-con">
					<div class="mobile-phone">
						<p>手机周边</p>
						<div class="equip"><a href="#">保护套/后盖/贴膜</a></div>
						<div class="equip"><a href="#">数据线/电源适配器</a></div>
					</div>
					<div class="mobile-list">
						<div class="list">
							<a class="listone" href="#"><img src="/img/listfour.jpg"></a>
							<div class="imebuy">
								<a href="#">立即购买</a>
							</div>
						</div>						
						<div class="imglist">
							<a href="#">
								<div class="all">
									<img src="/img/imglist4.png">
									<div class="info">
										<h2>魅蓝 Note5 环窗智能保护套</h2>
										<h3>个性表盘&nbsp;随心搭配</h3>
										<h4><span>限时特惠</span>&nbsp;&nbsp;<span>¥</span>&nbsp;79</h4>
										<div class="new">新品</div>
									</div>
								</div>
							</a>
						</div>						
						<div class="imglist">
							<a href="#">
								<div class="all">
									<img src="/img/imglist4.png">
									<div class="info">
										<h2>魅蓝 Note5 环窗智能保护套</h2>
										<h3>个性表盘&nbsp;随心搭配</h3>
										<h4><span>限时特惠</span>&nbsp;&nbsp;<span>¥</span>&nbsp;79</h4>
									</div>
								</div>
							</a>
						</div>						
						<div class="imglist">
							<a href="#">
								<div class="all">
									<img src="/img/imglist4.png">
									<div class="info">
										<h2>魅蓝 Note5 环窗智能保护套</h2>
										<h3>个性表盘&nbsp;随心搭配</h3>
										<h4><span>¥</span>&nbsp;79</h4>
										<div class="new">新品</div>
									</div>
								</div>
							</a>
						</div>						
						<div class="imglist">
							<a href="#">
								<div class="all">
									<img src="/img/imglist4.png">
									<div class="info">
										<h2>魅蓝 Note5 环窗智能保护套</h2>
										<h3>个性表盘&nbsp;随心搭配</h3>
										<h4><span>限时特惠</span>&nbsp;&nbsp;<span>¥</span>&nbsp;79</h4>
									</div>
								</div>
							</a>
						</div>					
						<div class="imglist">
							<a href="#">
								<div class="all">
									<img src="/img/imglist4.png">
									<div class="info">
										<h2>魅蓝 Note5 环窗智能保护套</h2>
										<h3>个性表盘&nbsp;随心搭配</h3>
										<h4><span>限时特惠</span>&nbsp;&nbsp;<span>¥</span>&nbsp;79</h4>
									</div>
								</div>
							</a>
						</div>						
						<div class="imglist">
							<a href="#">
								<div class="all">
									<img src="/img/imglist4.png">
									<div class="info">
										<h2>魅蓝 Note5 环窗智能保护套</h2>
										<h3>个性表盘&nbsp;随心搭配</h3>
										<h4><span>限时特惠</span>&nbsp;&nbsp;<span>¥</span>&nbsp;79</h4>
									</div>
								</div>
							</a>
						</div>						
						<div class="imglist">
							<a href="#">
								<div class="all">
									<img src="/img/imglist4.png">
									<div class="info">
										<h2>魅蓝 Note5 环窗智能保护套</h2>
										<h3>个性表盘&nbsp;随心搭配</h3>
										<h4><span>限时特惠</span>&nbsp;&nbsp;<span>¥</span>&nbsp;79</h4>
										<div class="new">新品</div>
									</div>
								</div>
							</a>
						</div>						
						<div class="imglist">
							<a href="#">
								<div class="all">
									<img src="/img/imglist4.png">
									<div class="info">
										<h2>魅蓝 Note5 环窗智能保护套</h2>
										<h3>个性表盘&nbsp;随心搭配</h3>
										<h4><span>¥</span>&nbsp;79</h4>
										<div class="new">新品</div>
									</div>
								</div>
							</a>
						</div>						
						<div class="imglist">
							<a href="#">
								<div class="all">
									<img src="/img/imglist4.png">
									<div class="info">
										<h2>魅蓝 Note5 环窗智能保护套</h2>
										<h3>个性表盘&nbsp;随心搭配</h3>
										<h4><span>限时特惠</span>&nbsp;&nbsp;<span>¥</span>&nbsp;79</h4>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<script src="/js/zgx.js"></script>	
			<script src="/js/zgxajax.js"></script>
		</div>

	<div id="footer">
			<div class="footer1">
				<img src="/img/1.jpg" />
			</div>
			<center><div class="hrr"></div></center>
			<div class="about">
				<div class="help">
					<p class="main">帮助说明</p>
					<p><a href="#">支付方式</a></p>
					<p><a href="#">配送说明</a></p>
					<p><a href="#">售后服务</a></p>
					<p><a href="#">付款帮助</a></p>
				</div>
				<div class="about-us">
					<p class="main">Flyme</p>
					<p><a href="#">开放平台</a></p>
					<p><a href="#">固件下载</a></p>
					<p><a href="#">软件商店</a></p>
					<p><a href="#">查找手机</a></p>
				</div>
				<div class="about-us">
					<p class="main">关于我们</p>
					<p><a href="#">关于魅族</a></p>
					<p><a href="#">加入我们</a></p>
					<p><a href="#">联系我们</a></p>
					<p><a href="#">法律声明</a></p>
				</div>
				<div class="about-us">
					<p class="main">关注我们</p>
					<p><a href="#">新浪微博</a></p>
					<p><a href="#">腾讯微博</a></p>
					<p><a href="#">QQ空间</a></p>
					<p><a href="#">官方微信</a></p>
				</div>
				<div class="tel">
					<p class="main">24小时全国服务热线</p>
					<p class="phonenum"><a href="#">400-788-3333</a></p>
					<p class="online-call"><a href="#"><img src="/img/online-call.jpg"></a></p>
				</div>
			</div>
			<center><div class="hrr"></div></center>
			<div class="footer-text">
				<ul>
					<li class="footer-text-1">&copy;2016 Meizu Telecom Equipment Co., Ltd. All rights reserved.</li>
					<li class="footer-text-1"><a href="#">备案号：粤ICP备13003602号-2</a></li>
					<li class="footer-text-1"><a href="#">经营许可证编号：粤B2-20130198</a></li>
					<li class="footer-text-1"><a href="#">营业执照</a></li>
					<a href="#"><li class="footer-image footer-image-1"></li></a>
					<a href="#"><li class="footer-image footer-image-2"></li></a>
					<a href="#"><li class="footer-image footer-image-3"></li></a>
					<a href="#"><li class="footer-image footer-image-4"></li></a>
				</ul>	
			</div>
		</div>
	</body>
</html>

    <div style="width:100%;height:100px;background-color:blue;"></div>
</body>
</html>