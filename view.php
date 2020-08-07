<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="style.css" >
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="script.js"></script>
		<meta charset="utf-8" />
		 
		<title>Комментарии</title>
	</head>

	<body>
		<div class="body">
	 
			<!-- Начало хидер -->
			<header class="bgf9 gen_padding">

			<div id="headerInner" class="row">
				<div class="col-lg-6 col-sm-6">
					<div class="row">
						<div class="col">
							<small class=""><strong>Телефон: <a href="tel:(499)340-94-71">(499)340-94-71</a></strong></small>
							<br>
							<small class=""><strong>Email: <u><a href="mailto:info@future-group.ru">info@future-group.ru</a></u></strong></small>
						</div>
					</div>

					<div class="row own_h">
						<div class="col">
							<span class="">Комментарии</span>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-sm-6">
					<div class="float-right">
						<a href="#"><img src="res/logo.jpg"></a>
					</div>
				</div>
			</div>

			</header><!-- Конец хидер -->
			<div class="raz"></div>
			 
			<!-- начало врапер -->
			<section id="wrapper" class="bg6xe gen_padding ">
				<div class="row ml-1">
					<div class="col" id="comments">
						<? foreach( $comments as $comment): ?>
						<div class="pb-3 row comment">
							<div class="col">
								<div class="row">
									<div class="comment_name"><strong><?=$comment['name'] ?></strong></div>
									<div class="ml-2 comment_time"><small><?=$comment['time'] ?></small></div>
									<div class="ml-1 comment_date"><small><?=$comment['date'] ?></small></div>
								</div>
								<div class="row">
									<div class="comment_content"><?=$comment['comment'] ?></div>
								</div>
							</div>
						</div>
						<? endforeach; ?>

					</div>
				</div>
				<hr>
				<form action="/" method="GET" id="form" class="form row ml-1">
					<div class="col">
						<div class="row">
							<p class="h3">Оставить комментарий</p>
						</div>
						<div class="row">
							<label for="name">Ваше имя</label>
						</div>
						<div class="row">
							<input type="text" name="name" id="name" class="border-radius5 width500">
						</div>
						<div class="row pt-3">
							<label for="comment">Ваш комментарий</label>
						</div>
						<div class="row">
							<textarea id="comment" name="comment" class="width500 border-solid2 border-radius5 textarea bg6xe">asdas</textarea>
							<!-- <input type="text" id="comment" name="comment" class="width500 border-solid2 border-radius5 textarea bg6xe"> -->
						</div>
						<div class="row pt-2 width500">
							<div class="col p-0"><input id="send" type="submit" value="Отправить" class="p-2 border-solid2 border-radius5 float-right"></div>
						</div>
					</form>
				</div>
			</section>
			 
			<footer id="footer" class="gen_padding bgf9">
				<div id="footerInner">
					<div class="row">
						<div class="col-lg-2 col-xs-12">
							<a href="#"><img src="res/logo.jpg" class="width150"></a>
						</div>
						<div class="col-lg-10 col-xs-12 pt-4">
							<small class=""><strong>Телефон: <a href="tel:(499)340-94-71">(499)340-94-71</a></strong></small>
							<br>
							<small class=""><strong>Email: <u><a href="mailto:info@future-group.ru" >info@future-group.ru</a></u></strong></small>
							<br>
							<small class=""><strong>Адрес: <u><a href="http://maps.google.com/maps?q=115088+Москва,+ул.+2-я+Машиностроения,+д.+7+стр.1">115088 Москва, ул. 2-я Машиностроения, д. 7 стр.1</a></u></strong></small>
							<br>
							<div class="pt-3"><small >© 2010 - 2014 Future. Все права защищены</small></div>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>