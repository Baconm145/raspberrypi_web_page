<?php
   define('BASE_DIR', dirname(__FILE__));
   require_once(BASE_DIR.'/config.php');
?>
<html>
   <head>
	<style type="text/css">
		
		@font-face {
			font-family:'Glyphicons Halflings';
			src:url('../fonts/glyphicons-halflings-regular.eot');
			src:url('../fonts/glyphicons-halflings-regular.eot?#iefix') 
			format('embedded-opentype'), url('../fonts/glyphicons-halflings-regular.woff')
			format('woff'),	url('../fonts/glyphicons-halflings-regular.ttf')
			format('truetype'), url('../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular')
			format('svg')
		}
		div.foot {
			position: fixed;
			left: 0; bottom: 0;
			padding: 2px;
			background: #222;
			color: #777;
			width: 100%;
			font-family: Glyphicons Halflings;
		}
				
		.mainBox {
		margin-right:auto;
		margin-left:auto;
		padding-left:15px;
		padding-right:15px
		} 
		@media (min-width:768px) {
		.mainBox{width:750px}
		}
		@media (min-width:992px) {
		.mainBox{width:970px}
		}@media (min-width:1200px) {
		.mainBox{width:1170px}
		}		
		.leftstrbot, .rightstrbot {
		float: left; 
		width: 50%;
	   }
	   .rightstrbot {
		text-align: right; /* Выравнивание по правому краю */ 
	   }
		
		.rightstr {
		margin-top: 9px;
		float: right;
		color: #777;
		font-size: 9pt;
		width: 20%
		}
		
		.rightstrmid {
		margin-right: 10%;
		float: right;
		color: #777;
		width: 50%
		}
		
		.rightstrdown {;
		float: right;
		color: #777;
		font-size: 9pt;
		width: 10%
		}
		
		.imageBox {		
		float:left;
		margin: 7px 7px 7px 0;
		}
	</style>
    <meta name="viewport" content="width=550, initial-scale=1">
    <title><?php echo CAM_STRING; ?></title>
    <link rel="stylesheet" href="css/style_minified.css" />
   </head>
   <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
			<p class="rightstr">+7 (999) 771-33-70 Baconm145@gmail.com</p>
            <div class="navbar-header">
               <a class="navbar-brand"><span class="glyphicon glyphicon-chevron-left"></span>Back - <?php echo CAM_STRING; ?></a>
            </div>
        </div>
    </div>
	<div class="mainBox">
		<p>
			<img src="vovan_photo.jpg" width="253" height="337" class="imageBox">
			<font size="5" face="Arial">
				<p class="rightstrmid"> 
					Бусырев Владимир Александрович <br>
					18.06.1999 <br>
					Москва <br>
					+7 (999) 771-33-70 <br>
					Baconm145@gmail.com <br>
					Московский политех <br>
					Vovan_bus <br>
					#7967 Baconm145 <br>
					Baconm145 <br>
					vk.com/Baconm145 <br>
				</p>
				<strong>
					ФИО: <br>
					Дата Рождения: <br>
					Город: <br>
					Телефон: <br>
					Email: <br>
					ВУЗ: <br>
					Skype: <br>
					Discord: <br>
					Steam: <br>
					VKontakte: <br>
					
				</strong>				
			</font>
			<br><img src="kulay_photo.jpg" width="253" height="377" class="imageBox">
			<font size="5" face="Arial">
				<p class="rightstrmid"> 
					Кулаев Иван Сергеевич <br>
					06.04.1997 <br>
					Москва <br>
					+7 (919) 761-43-22 <br>
					kivans@gmail.com <br>
					Московский политех <br>
					Vovan_bus <br>
					#5032 kivans<br>
					kivans <br>
					vk.com/kulayka <br>
				</p>
				<strong>
					ФИО: <br>
					Дата Рождения: <br>
					Город: <br>
					Телефон: <br>
					Email: <br>
					ВУЗ: <br>
					Skype: <br>
					Discord: <br>
					Steam: <br>
					VKontakte: <br>
					
				</strong>				
			</font>
		</p>
	<div>
	<div class="foot">
		<div class="container">
			<p>By
				<a href="vovan.php">Vladimir Busyrev</a>, <a href="kulay.php">Kulaev Ivan</p>
			</p>
		</div>
	</div>
   </body>
</html>
