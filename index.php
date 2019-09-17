<!doctype html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Анкета</title>
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">	
	<meta name="title" content="Анкета для собеседования">
	
<!-----Styles------>
	
	<link href="css/style.css" type="text/css" rel="stylesheet"  media="screen"/>
	<link href="css/overheight.css" type="text/css" rel="stylesheet"  media="screen"/>
	<link href="css/jquery.fancybox.css" type="text/css" rel="stylesheet" media="screen"/>
	<link href="css/nouislider.min.css" type="text/css" rel="stylesheet" media="screen"/>
	<link href="css/jquery.formstyler.css" type="text/css" rel="stylesheet" media="screen"/>
	
	
<!---JavaScripts--->
	
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/nouislider.min.js"></script>
	<script type="text/javascript" src="js/overheight.js"></script>
	<script type="text/javascript" src="js/jquery.fancybox.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script type="text/javascript" src="js/jquery.formstyler.min.js"></script>

</head>
<body>
	<header>
		<div class="menu__wrapper">						
				<div id="_menu" class="menu">
					<a href="/#m1" class="anchor" title="Личная информация" onClick="goToAnchor(this); return 0;" >Личная информация</a>
					<a href="/#m2" class="anchor" title="Опыт" onClick="goToAnchor(this); return 0;">Опыт</a>
					<a href="/#m3" class="anchor" title="JavaScript" onClick="goToAnchor(this); return 0;">JavaScript</a>
					<a href="/#m4" class="anchor" title="О себе" onClick="goToAnchor(this); return 0;">О себе</a>
				</div>
				<a href="#" title="Menu" class="menu__mobile" id="menu-button" content="_menu" onclick="content_overheight(this); return;"><span></span></a>
			</div>
	</header>
	<main class="profile">
		<form>
			<section class="profile__section profile__section--1" >
				<div class="profile__content">
					<div class="section__title">
						<h1>Анкета</h1>
					</div>
					<div class="profile__form-wrapper">
						<div class="content__title" id="m1">
							<div class="content__title--icon"></div>
							<h2 class="content__title--txt" >Личная информация</h2>
						</div>
						<div class="profile__form">
							<ul>
								<li>
									<label for="fio"></label>
									<input type="text" name="fio" placeholder="Горнаков Максим Викторович" required> 
								</li>
								<li class="profile__form--year">
									<label for="year"></label>
									<?php
									// устанавливаем первый и последний год диапазона
									$yearArray = range(1970, 2019);
									?>
									<!-- выводим выпадающий список -->
									<select name="year" class="form__field--age" required>
										<option value="">Год рождения</option>
										<?php
										foreach ($yearArray as $year) {
											// если вы хотите выбрать конкретный год
											$selected = ($year == 1988) ? 'selected' : '';
											echo '<option class="option"'.$selected.' value="'.$year.'">'.$year.'</option>';
										}
										?>
									</select>
									<span id="arrow"></span>
								</li>
								
								<li>
									<label for="geo"></label>
									<input type="text" name="geo" placeholder="Новокубанск" required>
								</li>
								<li>
									<label for="skype"></label>
									<input type="text" name="skype" placeholder="spawn20141" required>
								</li>
								<li>
									<label for="email"></label>
									<input type="text" name="email" placeholder="max.gornakoff@yandex.ru" required>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
			<section class="profile__section profile__section--2" >
				<div class="profile__content">
					<div class="profile__form-wrapper">
						<div class="content__title" id="m2">
							<div class="content__title--icon"></div>
							<h2 class="content__title--txt" >Расскажите о своем опыте</h2>
						</div>
						<div class="profile__form">
							<div class="form-set__boxes">
								<div class="form-set__box">
									<input type="checkbox" name="bem-oocs" id="_bem-oocs" checked>
									<label for="_bem-oocs">БЭМ/OOCSS</label>
								</div>
								<div class="form-set__box">
									<input type="checkbox" name="preproc" id="_preproc" checked>
									<label for="_preproc">Stylus/LESS/SASS</label>
								</div>
								<div class="form-set__box">
									<input type="checkbox" name="svg" id="_svg" checked>
									<label for="_svg">Работаю с SVG</label>
								</div>
							</div>
							<div class="form-set__boxes">
								<div class="form-set__box">
									<input type="checkbox" name="semantic" id="_semantic" checked>
									<label for="_semantic">Верстаю семантично</label>
								</div>
								<div class="form-set__box">
									<input type="checkbox" name="es15-16" id="_es15-16">
									<label for="_es15-16">ES2015/ES2016</label>
								</div>
								<div class="form-set__box">
									<input type="checkbox" name="gulp" id="_gulp">
									<label for="_gulp">Gulp/GRUNT</label>
								</div>
							</div>
							<div class="form-set__boxes">
								<div class="form-set__box">
									<input type="checkbox" name="webpack" id="_webpack" checked>
									<label for="_webpack">Webpack</label>
								</div>
								<div class="form-set__box">
									<input type="checkbox" name="jquery" id="_jquery" checked>
									<label for="_jquery">jQuery</label>
								</div>
								<div class="form-set__box">
									<input type="checkbox" name="git" id="_git" checked>
									<label for="_git">Ипользую Git</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="profile__section profile__section--3" >
				<div class="profile__content">
					<div class="profile__form-wrapper">
						<div class="content__title" id="m3">
							<div class="content__title--icon"></div>
							<h2 class="content__title--txt" >Уровень владения JavaScript</h2>
						</div>
						<div class="profile__form">
							<div id="_js-lvl">
							</div>
							
						</div>
					</div>
				</div>
			</section>
			<section class="profile__section profile__section--4" >
				<div class="profile__content">
					<div class="profile__form-wrapper">
						<div class="content__title" id="m4">
							<div class="content__title--icon"></div>
							<h2 class="content__title--txt">Расскажите о себе</h2>
							<p class="content__title--subtxt">Напишите несколько предложений, чем привлекла наша вакансия и что вы ожидаете от работы у нас.</p>
						</div>
						<div class="profile__form">
							<textarea name="about" placeholder="Вакансия привлекла тем, что предлагается стабильная заработная плата, интересные проекты и работа с крупными брендами, а, так же возможность профессионального роста. Хочется ощущать себя частью дружного и энергичного коллектива =)" rows="10" required></textarea>
							<label for="about"></label>
						</div>
					</div>
				</div>
			</section>
			<button type="submit">Готово</button>
		</form>	
	</main>	
	<div class="over-container" id="over-container">
    	<div class="over-content" id="over-content"></div>
	</div>
</body>		
</html>



