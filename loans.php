<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Сервис Микрозаймов</title>
	<!-- Meta Data / Мета данные -->
	<meta name="description" content="Микрозаймы" />
	<meta name="keywords" content="Микрозаймы, Займы, Деньги" />
	<!-- Styles / Стили -->
	<link rel="stylesheet" type="text/css" href="assets/styles/style.css">
	<link rel="stylesheet" type="text/css" href="assets/styles/animate.css">
	<!-- noUiSlider -->
	<link rel="stylesheet" type="text/css" href="assets/plugins/noUiSlider.8.0.2/nouislider.min.css">
	<!-- Slick Slider -->
	<link rel="stylesheet" type="text/css" href="assets/plugins/slick/slick.css">
	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="assets/img/favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="assets/img/favicon/favicon-194x194.png" sizes="194x194">
	<link rel="icon" type="image/png" href="assets/img/favicon/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="assets/img/favicon/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="assets/img/favicon/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/assets/img/faviconmanifest.json">
	<link rel="mask-icon" href="assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-TileImage" content="assets/img/favicon/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">
</head>
<body>
	<?php include_once "header.php" ?>
	<!-- Страница Контактов -->
	<main>
		<!-- Кнопка Заказа звонка -->
		<div class="bid-call-btn">
			<p>обратный звонок</p>
			<!-- Скрытый блок заказа звонка -->
			<div class="call-bid-block">
				<div class="call-bid-block-content">
					<form id="bidcall" action="#">
						<input type="text" name="name" placeholder="Имя">
						<input type="text" name="phone" placeholder="Телефон">
						<input type="submit" value="Отправить">
						<!-- <button type="submit">Отправить</button> -->
					</form>
				</div>
			</div>
			<!-- /Скрытый блок заказа звонка -->
		</div>
		<!-- /Кнопка Заказа звонка -->
		<!-- Блок Займы -->
		<div class="standart-container loans loans__tabs">
			<div class="row">
				<div class="col-md-2">
					<div class="loans__tab loans__tab-1 active" data-position="1">
						<div class="loans__tab-icon"></div>
						<div class="loans__tab-text white">
							Краткосрочные займы для физических лиц
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="loans__tab loans__tab-2" data-position="2">
						<div class="loans__tab-icon"></div>
						<div class="loans__tab-text white">
							Краткосрочные займы для физических лиц
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="loans__tab loans__tab-3" data-position="3">
						<div class="loans__tab-icon"></div>
						<div class="loans__tab-text white">
							Краткосрочные займы для физических лиц
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="loans__tab loans__tab-4" data-position="4">
						<div class="loans__tab-icon"></div>
						<div class="loans__tab-text white">
							Краткосрочные займы для физических лиц
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="loans__tab loans__tab-5" data-position="5">
						<div class="loans__tab-icon"></div>
						<div class="loans__tab-text gray">
							Краткосрочные займы для физических лиц
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="loans__tab loans__tab-6" data-position="6">
						<div class="loans__tab-icon"></div>
						<div class="loans__tab-text gray">
							Краткосрочные займы для физических лиц
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="standart-container loans__content-tabs loans__content-tab-1" data-position="1">
			<div class="row">
				<div class="col-md-10">
					<h1>Условия предоставления краткосрочных займов для физических лиц</h1>
					<div class="loans__table">
						<table>
							<tr>
								<th>наименование требований</th>
								<th>значение требований</th>
							</tr>
							<tr>
								<td>сумма займа</td>
								<td>От 5 000 до 50 000 рублей</td>
							</tr>
							<tr>
								<td>Стоимость займа</td>
								<td>1,75% в сутки</td>
							</tr>
							<tr>
								<td>Заемщик</td>
								<td>Физические лица, граждане РФ</td>
							</tr>
							<tr>
								<td>Срок займа</td>
								<td>От 7 до 20 дней</td>
							</tr>
							<tr>
								<td>Форма предоставления Займа</td>
								<td>Безналичный перевод на расчетный счёт Заемщика</td>
							</tr>
							<tr>
								<td>Порядок погашения</td>
								<td>В конце срока сумма и проценты</td>
							</tr>
							<tr>
								<td>Информация предоставляемая заемщиком</td>
								<td>
									Копия паспорта;<br>
									Адрес регистрации;<br>
									Адрес фактического проживания;<br>
									Место работы;<br>
								</td>
							</tr>
						</table>
					</div>
					<div class="loans__request-btn md-trigger" data-modal="modal-1">подать заявку</div>
				</div>
			</div>
		</div>
		<?php include_once "modals.php" ?>
		<!-- /Блок Займы -->
	</main>
	<!-- Страница Контактов -->
	<?php include_once "footer.php" ?>
	<!-- Scripts - Скрипты -->
	<!-- formula.js 
	<script src="assets/plugins/formula/lib/formula.js"></script>-->
	<!-- CUMIPMT.js 
	<script src="assets/scripts/CUMIPMT.js"></script>-->
	<!-- Google Maps API -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<!-- JQ 1.11.3 -->
	<script src="assets/scripts/jquery-1.11.3.min.js"></script>
	<!-- validate -->
	<script src="assets/scripts/jquery.validate.min.js"></script>
	<!-- JQ input mask -->
	<script src="assets/scripts/jquery.maskedinput.min.js"></script>
	<!-- noUiSlider -->
	<script src="assets/plugins/noUiSlider.8.0.2/nouislider.min.js"></script>
	<script src="assets/plugins/noUiSlider.8.0.2/wNumb.min.js"></script>
	<!-- Slick Slider -->
	<script src="assets/plugins/slick/slick.min.js"></script>
	<!-- modalEffects.js -->
	<script src="assets/scripts/classie.js"></script>
	<script src="assets/scripts/modalEffects.js"></script>
	<!-- Own Script / Наш скрипт -->
	<script src="assets/scripts/oun-script.js"></script>
	<!-- /Scripts - Скрипты -->
</body>
</html>