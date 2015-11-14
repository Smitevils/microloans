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
	<!-- main -->
	<main>
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
		<!-- slider -->
		<div class="slider-container">
			<div id="slider-fade">
				<div class="slide slide-1">
					<div class="slider-text-box">
						<h3>срочные<br>займы</h3>
						<p>для бизнеса и физическим лицам</p>
						<div class="slider-rext-box-btn">подробнее</div>
						<!-- / -->
						<div class="slider-nav-container">
							<div class="slider-nav-btn-left"></div>
							<div class="slider-nav-btn-right"></div>
						</div>
					</div>
				</div>
				<div class="slide slide-2">
					<div class="slider-text-box">
						<h3>срочные<br>займы</h3>
						<p>для бизнеса и физическим лицам</p>
						<div class="slider-rext-box-btn">подробнее</div>
						<!-- / -->
						<div class="slider-nav-container">
							<div class="slider-nav-btn-left"></div>
							<div class="slider-nav-btn-right"></div>
						</div>
					</div>
				</div>
				<div class="slide slide-3">
					<div class="slider-text-box">
						<h3>срочные<br>займы</h3>
						<p>для бизнеса и физическим лицам</p>
						<div class="slider-rext-box-btn">подробнее</div>
						<!-- / -->
						<div class="slider-nav-container">
							<div class="slider-nav-btn-left"></div>
							<div class="slider-nav-btn-right"></div>
						</div>
					</div>
				</div>
			</div>
			<!-- / -->
		</div>
		<!-- /slider -->
		<!-- scheme -->
		<div class="scheme-container clearfix">
			<div class="scheme-step-title-container">
				<div class="scheme-step-title-content">
					<h2>
						Как<br>это<br>работает
					</h2>
				</div>
			</div>
			<div class="scheme-steps-wrap">
				<div class="row">
					<div class="col-sm-4 col-lg-4">
						<!-- block -->
						<div class="scheme-step-block">
							<div class="scheme-step-content">
								<img src="assets/img/icons/step-1.png" alt="#">
								<p>
									Заполните<br>форму
								</p>
							</div>
						</div>
						<!-- /block -->
					</div>
					<div class="col-sm-4 col-lg-4">
						<!-- block -->
						<div class="scheme-step-block">
							<div class="scheme-step-content">
								<img src="assets/img/icons/step-2.png" alt="#">
								<p>
									одобрение в течении<br>1 дня
								</p>
							</div>
						</div>
						<!-- /block -->
					</div>
					<div class="col-sm-4 col-lg-4">
						<!-- block -->
						<div class="scheme-step-block">
							<div class="scheme-step-content">
								<img src="assets/img/icons/step-3.png" alt="#">
								<p>
									заберите<br>деньги
								</p>
							</div>
						</div>
						<!-- /block -->
					</div>
				</div>
			</div>
		</div>
		<!-- /scheme -->
		<!-- benefits -->
		<div class="benefits">
			<h3 class="block-title">наши преимущества</h3>
			<div class="row">
				<div class="col-sm-6 col-lg-3">
					<i class="first-benefit">доступно</i>
				</div>
				<div class="col-sm-6 col-lg-3">
					<i class="second-benefit">безопасно</i>
				</div>
				<div class="col-sm-6 col-lg-3">
					<i class="third-benefit">Быстро</i>
				</div>
				<div class="col-sm-6 col-lg-3">
					<i class="fourth-benefit">удобно</i>
				</div>
			</div>
		</div>
		<!-- /benefits -->
		<!-- methods -->
		<div class="methods-container clearfix">
			<div class="methods-step-title-container">
				<div class="methods-step-title-content">
					<h2>
						способы погашения займа
					</h2>
				</div>
			</div>
			<div class="methods-steps-wrap">
				<div class="row">
					<div class="col-xs-6 col-sm-3 col-lg-3">
						<!-- block -->
						<div class="methods-step-block methods-step-1">
							<div class="methods-step-content methods-step-1">
								<p>
									наличными<br>в офисе
								</p>
							</div>
						</div>
						<!-- /block -->
					</div>
					<div class="col-xs-6 col-sm-3 col-lg-3">
						<!-- block -->
						<div class="methods-step-block methods-step-2">
							<div class="methods-step-content methods-step-1">
								<p>
									банковской картой
								</p>
							</div>
						</div>
						<!-- /block -->
					</div>
					<div class="col-xs-6 col-sm-3 col-lg-3">
						<!-- block -->
						<div class="methods-step-block methods-step-3">
							<div class="methods-step-content methods-step-1">
								<p>
									платежными системами
								</p>
							</div>
						</div>
						<!-- /block -->
					</div>
					<div class="col-xs-6 col-sm-3 col-lg-3">
						<!-- block -->
						<div class="methods-step-block methods-step-4">
							<div class="methods-step-content methods-step-1">
								<p>
									банковским переводом
								</p>
							</div>
						</div>
						<!-- /block -->
					</div>
				</div>
			</div>
		</div>
		<!-- /methods -->
		<!-- reviews -->
		<div class="reviews">
			<h3 class="block-title">отзывы</h3>
			<div class="reviews__slider-wrap">
				<!-- #reviews__slider -->
				<div id="reviews__slider">
					<!-- slider block -->
					<div class="reviews__block">
						<div class="reviews__header">
							<img src="assets/img/reviews/face-1.png" alt="face">
							петрова ирина
						</div>
						<div class="reviews__text">
							На выходе у нас получается как документ с двумя списками: цели клиента и цели проекта. Этот док должен утвердить заказчик или этот документ должен утвердить заказчик
						</div>
					</div>
					<!-- /slider block -->
					<!-- slider block -->
					<div class="reviews__block">
						<div class="reviews__header">
							<img src="assets/img/reviews/face-2.png" alt="face">
							петрова ирина
						</div>
						<div class="reviews__text">
							На выходе у нас получается как документ с двумя списками: цели клиента и цели проекта. Этот док должен утвердить заказчик или этот документ должен утвердить заказчик
						</div>
					</div>
					<!-- /slider block -->
					<!-- slider block -->
					<div class="reviews__block">
						<div class="reviews__header">
							<img src="assets/img/reviews/face-3.png" alt="face">
							комидаров айсун
						</div>
						<div class="reviews__text">
							На выходе у нас получается как документ с двумя списками: цели клиента и цели проекта. Этот док должен утвердить заказчик или этот документ должен утвердить заказчик
						</div>
					</div>
					<!-- /slider block -->
					<!-- slider block -->
					<div class="reviews__block">
						<div class="reviews__header">
							<img src="assets/img/reviews/face-1.png" alt="face">
							петрова ирина
						</div>
						<div class="reviews__text">
							На выходе у нас получается как документ с двумя списками: цели клиента и цели проекта. Этот док должен утвердить заказчик или этот документ должен утвердить заказчик
						</div>
					</div>
					<!-- /slider block -->
				</div>
			</div>
			<!-- /#reviews__slider -->
		</div>
		<!-- /reviews -->
	</main>
	<!-- /main -->
	<?php include_once "footer.php" ?>
	<!-- Scripts - Скрипты -->
	<!-- formula.js 
	<script src="assets/plugins/formula/lib/formula.js"></script>-->
	<!-- CUMIPMT.js 
	<script src="assets/scripts/CUMIPMT.js"></script>-->
	<!-- JQ 1.11.3 -->
	<script src="assets/scripts/jquery-1.11.3.min.js"></script>
	<!-- JQ 1.11.3 -->
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