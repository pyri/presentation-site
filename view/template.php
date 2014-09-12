<!doctype HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="../css/style.css">
		<title>Кипайкина К. - тестовое задание</title>
	</head>
	<body class="font-arial">
		<div class="wrapper">
			<header class="border">
				<ul>
					<li class="inline-left padding-li partition-solid margin-headerli"><a href="/" >Главная</a></li>
					<li class="inline-left padding-li partition-solid"><a href="/?page=about_me">Обо мне</a></li>
					<li class="inline-left padding-li"><a href="/?page=comment">Комментарии</a></li>
				</ul>				
			</header>
			
			<div class="main">			
				<aside class="sidebar-right border">
					<ul>
						<li class="partition-dashed"><a href="/">Главная</a></li>
						<li class="partition-dashed"><a href="/?page=about_me">Обо мне</a></li>
						<li><a href="/?page=comment">Комментарии</a></li>
					</ul>	
				</aside>
				
				<?php Route::renderContent();?>
			</div>	
		</div>
		<script src="http://code.jquery.com/jquery-2.1.1.js"></script>
		<script type="text/javascript" src="js/comment.js"></script>
	</body>
</html>