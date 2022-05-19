<!doctype html> 
<html lang="ru">
	<head> 
		<meta charset="UTF-8">
		<title>Карл Маркс</title> 
		<link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css"><!--подключаем файл стилей-->
		<link rel="icon" href="/images/LOGO/Marx_logo_250.png">
	</head>
	
	<body>
		<header><!--шапка сайта-->
			<div>
				<h1>КАРЛ МАРКС</h1>
			<div>
		</header>

			 <!--блок навигации, одинаковый для все страниц сайта-->
			<section>
			    <img class="logo" src="/images/LOGO/Marx_logo_500.png"/>
			
			<table>
				<tr>
					<td colspan="2"><a href="/"><img src="/images/LOGO/star_20.png"/>Главная</a></td>
					<td><a href="/biography"><img src="/images/LOGO/star_20.png"/>Биография</a></td>
                </tr>
				<tr>
						 <td><a href="/works"><img src="/images/LOGO/star_20.png"/>Труды</a></td>
					     <td><a href="/blog"><img src="/images/LOGO/star_20.png"/>Блог</a></td>
					     <td><a href="/news/3"><img src="/images/LOGO/star_20.png"/>Новости</a></td>
                </tr>
				<tr>
					    <td><a href="/console"><img src="/images/LOGO/star_20.png"/>Консоль</a></td>
						<td colspan="2"><a href="/about"><img src="/images/LOGO/star_20.png"/>О проекте</a></td>
                </tr>
             </table>

				<img class="backlogo1" src="/images/LOGO/SM_logo.png"/>
				<img class="backlogo2" src="/images/LOGO/DDR_logo2.png"/>
            </section>						
			<!--блок содержит раздел навигации и контент страницы-->	
	    <div class="content_block">		
			@yield('content')
        </div>
		
		<footer><!--подвал сайта-->
		<img src="/images/jojak.jpg"/>
		<div>
			<p><i>-"Отдельный скрипач сам управляет собой,<br>
				оркестр нуждается в дирижёре."</i><br>
				© Карл Маркс.</p>
		</div>
		</footer>
	</body>
</html>