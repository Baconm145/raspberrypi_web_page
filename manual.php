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
		
		.bottomliquid {
	   float: left;
	   width: 70%
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
               <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-chevron-left"></span>Back - <?php echo CAM_STRING; ?></a>
            </div>
        </div>
    </div>
	<div class="mainBox">
		<h1 align="center">
			Инструкция по управлению
			<br>
			<img src="forward.png" width="250" height="250">
			<img src="Backward.png" width="250" height="250">
			<img src="Left.png" width="250" height="250">
			<img src="Right.png" width="250" height="250">
			<img src="LeftBack.png" width="250" height="250">
			<img src="RightBack.png" width="250" height="250">
		</h1>
	<div>
	<div class="foot">
		<div class="container">
			<p>By
				<a href="developers.php">Vladimir Busyrev</a>, <a href="developers.php">Kulaev Ivan</a>
				<a class="bottomliquid" href="manual.php">Инструкция по управлению</a>
			</p>
		</div>
	</div>
   </body>
</html>
