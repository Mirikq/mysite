<!doctype html> 
<html lang="ru">
	<head> 
		<meta charset="UTF-8">
		<title>Стрит-арт</title> 
		<link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css"><!--подключаем файл стилей-->
	</head>
	
	<body>


			 <!--блок навигации, одинаковый для все страниц сайта-->
			<nav>
				<ul class="menu">
					<li><a href="/">Главная</a></li>
					<li><a href="/mybio">Блог</a>
					<li><a href="/novosti">Новости</a>		
					<li><a><!--href="/skulptura"-->Мои работы</a>
						<ul class="submenu">
								<li><a href="/ekb">Екатеринбург</a></li>
								<li><a href="/peter">Санкт-Петербург</a></li>
						</ul>
					</li>  
					<li><a href="/contacts">Контакты</a></li>
					
					<li><a href="/meaning">О стрит-арте</a>
					</li>
					<li><a href="/console">Консоль</a></li>
				
			</nav>						
			<!--блок содержит раздел навигации и контент страницы-->		
			<div class="wrapper">			
			<div class="content"> 
				<div class="row">

					@yield('content')

				</div>
			</div>			
		</div>
		
		<footer><!--подвал сайта-->
		<div>
			<p><i>Блог о стрит-арте</i></p>
		</div>
		</footer>
	</body>
</html>