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
	<!-- Страница О нас -->
		<main>
			<div class="bid-call-btn">
				<p>обратный звонок</p>
				<!-- Скрытый блок заказа звонка -->
				<div class="call-bid-block">
					<div class="call-bid-block-content">
						<form id="bidcall" action="#" novalidate="novalidate">
							<input type="text" name="name" placeholder="Имя">
							<input type="text" name="phone" placeholder="Телефон">
							<input type="submit" value="Отправить">
							<!-- <button type="submit">Отправить</button> -->
						</form>
					</div>
				</div>
				<!-- /Скрытый блок заказа звонка -->
			</div>
			<div class="standart-container aboutus__first-container">
				<div class="aboutus__first-container__title-block">О компании</div>
				<div class="aboutus__text-content aboutus__text-content--full-width">
					<h4>Наши принципы</h4>
					<p>
						Мы за честный, открытый, прозрачный бизнес. Мы готовы предложить нашим клиентам полностью предоставлять информацию обо всех аспектах нашей деятельности.
					</p>
					<p>
						Мы за высокий доход наших клиентов. Наши ставки по сбережениям населения выше банковских более чем на 5%
						Мы за снижение рисков. Мы страхуем риски наших клиентов и свою ответственность за неисполнение своих обязательств перед ними.
					</p>
					<p>
						Мы за качественное обслуживание. Особое внимание мы уделяем работе с клиентами. Наши клиенты всегда могут рассчитывать на вежливое профессиональное обслуживание.
					</p>
				</div>
				<div class="aboutus__text-content aboutus__text-content--half-width">
					<h3>Наши принципы</h3>
					<p>
						Деятельность Компании регулируется Федеральным законом N151-ФЗ «О микрофинансовой деятельности и микрофинансовых организациях» от 4 января 2011 года. Министерство финансов Российской Федерации выдало 8 июля 2011 года компании «Домашние деньги» свидетельство «О внесении сведений о юридическом лице в государственный реестр микрофинансовых организаций» за регистрационным номером 2110177000006.
					</p>
					<p>
						
					</p>
				</div>
			</div>
			<div class="standart-container aboutus__second-container">
				<!-- slider -->
				<div class="certificate-slider-container">
					<!-- / -->
					<div class="degign-block"></div>
					<!-- / -->
					<div id="certificate-slider" class="certificate-slider">
						<div class="certificate-slide">
							<a href="#">
								<img class="certificat-img" src="assets/img/other/certificate-1.png" alt="certifiacat">
							</a>
							<div class="slider-title-container">
								<h3>свидетельство о регистрации</h3>
							</div>
						</div>
						<div class="certificate-slide">
							<a href="#">
								<img class="certificat-img" src="assets/img/other/certificate-1.png" alt="certifiacat">
							</a>
							<div class="slider-title-container">
								<h3>свидетельство о регистрации</h3>
							</div>
						</div>
					</div>
				</div>
				<!-- /slider -->
				<div class="aboutus__second-container__title-block">
					Наша история
				</div>
				<div class="aboutus__text-content aboutus__text-content--half-width">
					<h3>ООО «КредитЭксперт» Приоритетное направление деятельности – содействие развитию малого бизнеса путем выдачи доступных займов. </h3>
					<p>
						Займы предоставляются юридическим и физическим лицам, собственникам бизнеса и индивидуальным предпринимателям. Компания привлекает инвестиции физических и юридических лиц на выгодных условиях.
					</p>
				</div>
			</div>
			<div class="standart-container aboutus__third-container">
				<div class="aboutus__third-container__title-block">
					Цели
				</div>
				<div class="aboutus__text-content aboutus__text-content--full-width">
					<h3>ООО «КредитЭксперт» Приоритетное направление деятельности – содействие развитию малого бизнеса путем выдачи доступных займов. </h3>
					<p>
						Займы предоставляются юридическим и физическим лицам, собственникам бизнеса и индивидуальным предпринимателям. Компания привлекает инвестиции физических и юридических лиц на выгодных условиях.
					</p>
				</div>
			</div>
		</main>
	<!-- /Страница О Нас -->
	<?php include_once "footer.php" ?>
	<!-- Scripts - Скрипты -->
	<!-- formula.js 
	<script src="assets/plugins/formula/lib/formula.js"></script>-->
	<!-- CUMIPMT.js 
	<script src="assets/scripts/CUMIPMT.js"></script>-->
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
	<!-- Own Script / Наш скрипт -->
	<script src="assets/scripts/oun-script.js"></script>
	<!-- /Scripts - Скрипты -->
</body>
</html>