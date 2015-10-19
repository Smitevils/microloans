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
</head>
<body>
	<header class="clearfix">
		<div class="header__logo-container clearfix">
			<a href="#">
				<img src="assets/img/logos/logo-header.png" alt="logo">
				<img src="assets/img/logos/logo-header-mini.png" alt="logo-mini">
			</a>
		</div>
		<!-- Скрытая кнопка - бутерброд - отображается в мобильной версии -->
		<div id="hamburher-btn" class="header__hamburger"></div>
		<div class="header__menu-container clearfix animated">
			<ul>
				<li>
					<a href="#">о компании</a>
				</li>
				<li>
					<a href="#">займы</a>
				</li>
				<li>
					<a href="#">инвесторам</a>
				</li>
				<li>
					<a href="#">Новости</a>
				</li>
				<li>
					<a href="#">Контакты</a>
				</li>
			</ul>
		</div>
		<div class="header__calculator-container">
			<div id="calculator-btn-1" class="header__calculator-button active">
				<p>
					калькулятор инвестора
				</p>
			</div>
			<div id="calculator-btn-2" class="header__calculator-button">
				<p>
					калькулятор заемщика
				</p>
			</div>
			<!-- Calculators Blocks -->
			<div id="calculator-1" class="header__calculator-block">
				<div class="calculator-content">
					<h1>Инвестировать</h1>
					<div class="calculator-first-content__switch-container">
						<span>физ. лица</span>
						<span class="calculator_switch" data-switch-pos="1"><i></i></span>
						<span>юр. лица</span>
					</div>
					<!-- First Calculator - Phisic Faces -->
					<div class="first-calculator__phisic-faces">
						<!-- tabs -->
						<div class="calculator__tabs-container">
							<ul>
								<li>
									<div class="calculator__tab tab-1 active">
										<p>Потребительский</p>
									</div>
								</li>
								<li>
									<div class="calculator__tab tab-2">
										<p>Ипотека</p>
									</div>
								</li>
								<li>
									<div class="calculator__tab tab-3">
										<p>Автокредит</p>
									</div>
								</li>
								<li>
									<div class="calculator__tab tab-4">
										<p>Другое</p>
									</div>
								</li>
							</ul>
						</div>
						<!-- /tabs -->
						<!-- slider -->
						<div class="calculator__slider-container">
							<ul>
								<li>
									<p>Инвестиции</p>
								</li>
								<li>
									<div id="nouislider-1" class="nouislider"></div>
								</li>
								<li>
									<p><span id="nouislider-1-value-1">120 000</span> USD.</p>
								</li>
							</ul>
						</div>
						<!-- /slider -->
						<!-- slider -->
						<div class="calculator__slider-container">
							<ul>
								<li>
									<p>период</p>
								</li>
								<li>
									<div id="nouislider-2" class="nouislider"></div>
								</li>
								<li>
									<p><span id="nouislider-2-value-1">90</span> дней</p>
								</li>
							</ul>
						</div>
						<!-- /slider -->
					</div>
					<!-- /First Calculator - Phisic Faces -->
					<!-- First Calculator - Legal Faces -->
					<div class="first-calculator__legal-faces">
						
					</div>
					<!-- /First Calculator - Legal Faces -->
					<!-- result -->
					<div class="calculator__result">
						<ul>
							<li>
								<p>ваша прибыль</p>
								<span>1 560 780<i>USD.</i></span>
							</li>
							<li>
								<div class="calculator__result-btn">
									Инвестировать
								</div>
							</li>
							<li>
								<a href="#">подробнее</a>
							</li>
						</ul>
					</div>
					<!-- /result -->
				</div>
			</div>
			<div id="calculator-2" class="header__calculator-block">
				<div class="calculator-content">
					<h1>Инвестировать</h1>
					<div class="calculator-first-content__switch-container">
						<span>физ. лица</span>
						<span class="calculator_switch" data-switch-pos="1"><i></i></span>
						<span>юр. лица</span>
					</div>
					<!-- Borrower Calculator - Phisic Faces -->
					<div class="borrower-calculator-phisic">
						<!-- tabs -->
						<div class="calculator__tabs-container">
							<ul>
								<li>
									<div class="calculator__tab tab-1 active">
										<p>Краткосрочные займы</p>
									</div>
								</li>
								<li>
									<div class="calculator__tab tab-2">
										<p>Займы под залог недвиж.</p>
									</div>
								</li>
								<li>
									<div class="calculator__tab tab-3">
										<p>Займы под залог авто</p>
									</div>
								</li>
							</ul>
						</div>
						<!-- /tabs -->
						<!-- slider -->
						<div class="calculator__slider-container">
							<ul>
								<li>
									<p>сумма займа</p>
								</li>
								<li>
									<div id="nouislider-3" class="nouislider"></div>
								</li>
								<li>
									<p><span id="nouislider-3-value-1">120 000</span> руб.</p>
								</li>
							</ul>
						</div>
						<!-- /slider -->
						<!-- slider -->
						<div class="calculator__slider-container">
							<ul>
								<li>
									<p>срок займа</p>
								</li>
								<li>
									<div id="nouislider-4" class="nouislider"></div>
								</li>
								<li>
									<p><span id="nouislider-4-value-1">120 000</span> дней</p>
								</li>
							</ul>
						</div>
						<!-- /slider -->
					</div>
					<!-- /Borrower Calculator - Phisic Faces -->
					<!-- Borrower Calculator - Legal Faces -->
					<div class="borrower-calculator-legal">
						<!-- tabs -->
						<div class="calculator__tabs-container">
							<ul>
								<li>
									<div class="calculator__tab tab-1 active">
										<p>Займы под инвестиции</p>
									</div>
								</li>
								<li>
									<div class="calculator__tab tab-2">
										<p>Займы для предпринимателей</p>
									</div>
								</li>
								<li>
									<div class="calculator__tab tab-3">
										<p>Займы для юр. лиц</p>
									</div>
								</li>
							</ul>
						</div>
						<!-- /tabs -->
						<!-- slider -->
						<div class="calculator__slider-container">
							<ul>
								<li>
									<p>сумма займа</p>
								</li>
								<li>
									<div id="nouislider-5" class="nouislider"></div>
								</li>
								<li>
									<p><span id="nouislider-5-value-1">120 000</span> руб.</p>
								</li>
							</ul>
						</div>
						<!-- /slider -->
						<!-- slider -->
						<div class="calculator__slider-container">
							<ul>
								<li>
									<p>срок займа</p>
								</li>
								<li>
									<div id="nouislider-6" class="nouislider"></div>
								</li>
								<li>
									<p><span id="nouislider-6-value-1">120 000</span> дней</p>
								</li>
							</ul>
						</div>
						<!-- /slider -->
					</div>
					<!-- /Borrower Calculator - Legal Faces -->
					<!-- result -->
					<div class="calculator__result">
						<div class="calculator__result-btn">
							оформить
						</div>
					</div>
					<!-- /result -->
				</div>
			</div>
			<!-- Calculators Blocks -->
		</div>
		<div class="header__phone-cabinet-container animated">
			<div class="header__phone-container">
				<a href="tel:88005006000">8 (800) 500 60 00</a>
			</div>
			<div class="header__cabinet-container">
				<div class="header__cabinet-button">
					Личный<br>кабинет
				</div>
			</div>
		</div>
	</header>
	<!-- main -->
	<main>
		<div class="bid-call-btn">
			<p>обратный звонок</p>
		</div>
		<!-- slider -->
		<div class="slider-container">
			<div id="slider-fade">
				<div class="slide slide-1">
					<div class="slider-text-box">
						<h3>займы по паспорту</h3>
						<p>только лицам достигшим 18 лет</p>
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
						<h3>займы по паспорту</h3>
						<p>только лицам достигшим 18 лет</p>
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
						<h3>займы по паспорту</h3>
						<p>только лицам достигшим 18 лет</p>
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
		<div class="scheme-container">
			<div class="row">
				<div class="scheme-steps-block scheme-firft-step-container">
					dsfsd
				</div>
				<div class="scheme-steps-block scheme-three-containers">
					dsgdfgdrfg
				</div>
			</div>
		</div>
		<!-- /scheme -->
	</main>
	<!-- /main -->
	<!-- Scripts - Скрипты -->
	<!-- JQ 1.11.3 -->
	<script src="assets/scripts/jquery-1.11.3.min.js"></script>
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