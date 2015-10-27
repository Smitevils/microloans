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
									<div class="calculator__tab tab-1 active" data-value="1">
										<p>Ознакомительный</p>
									</div>
								</li>
								<li>
									<div class="calculator__tab tab-2" data-value="2">
										<p>Моя цель</p>
									</div>
								</li>
								<li>
									<div class="calculator__tab tab-3" data-value="3">
										<p>Ежемесячный доход</p>
									</div>
								</li>
								<li>
									<div class="calculator__tab tab-4" data-value="4">
										<p>Максимальный процент</p>
									</div>
								</li>
							</ul>
						</div>
						<!-- /tabs -->
						<!-- calculator__sliders-wrap -->
						<div class="calculator__sliders-wrap" data-calc-wrap="1">
							<!-- slider -->
							<div class="calculator__slider-container">
								<ul>
									<li>
										<p>Инвестиции</p>
									</li>
									<li>
										<div id="CalcInvestor_1_summ" class="nouislider"></div>
									</li>
									<li>
										<p><span id="CalcInvestor_1_summ_value-1">120 000</span> руб.</p>
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
										<div id="CalcInvestor_1_time" class="nouislider"></div>
									</li>
									<li>
										<p><span id="CalcInvestor_1_time_value-1">1</span> мес</p>
									</li>
								</ul>
							</div>
							<!-- /slider -->
							<!-- result -->
							<div class="calculator__result">
								<ul>
									<li>
										<p>ваша прибыль</p>
										<span id="CalcInvestor_1_result">1 560 780<i>руб.</i></span>
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
						<!-- /calculator__sliders-wrap -->
						<!-- calculator__sliders-wrap -->
						<div class="calculator__sliders-wrap" data-calc-wrap="2">
							<!-- slider -->
							<div class="calculator__slider-container">
								<ul>
									<li>
										<p>Инвестиции</p>
									</li>
									<li>
										<div id="CalcInvestor_2_summ" class="nouislider"></div>
									</li>
									<li>
										<p><span id="CalcInvestor_2_summ_value-1">120 000</span> руб.</p>
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
										<div id="CalcInvestor_2_time" class="nouislider"></div>
									</li>
									<li>
										<p><span id="CalcInvestor_2_time_value-1">1</span> мес</p>
									</li>
								</ul>
							</div>
							<!-- /slider -->
							<!-- result -->
							<div class="calculator__result">
								<ul>
									<li>
										<p>ваша прибыль</p>
										<span id="CalcInvestor_2_result">1 560 780<i>руб.</i></span>
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
						<!-- /calculator__sliders-wrap -->
						<!-- calculator__sliders-wrap -->
						<div class="calculator__sliders-wrap" data-calc-wrap="3">
							<!-- slider -->
							<div class="calculator__slider-container">
								<ul>
									<li>
										<p>Инвестиции</p>
									</li>
									<li>
										<div id="CalcInvestor_3_summ" class="nouislider"></div>
									</li>
									<li>
										<p><span id="CalcInvestor_3_summ_value-1">120 000</span> руб.</p>
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
										<div id="CalcInvestor_3_time" class="nouislider"></div>
									</li>
									<li>
										<p><span id="CalcInvestor_3_time_value-1">1</span> мес</p>
									</li>
								</ul>
							</div>
							<!-- /slider -->
							<!-- result -->
							<div class="calculator__result">
								<ul>
									<li>
										<p>ваша прибыль</p>
										<span id="CalcInvestor_3_result">1 560 780<i>руб.</i></span>
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
						<!-- /calculator__sliders-wrap -->
						<!-- calculator__sliders-wrap -->
						<div class="calculator__sliders-wrap" data-calc-wrap="4">
							<!-- slider -->
							<div class="calculator__slider-container">
								<ul>
									<li>
										<p>Инвестиции</p>
									</li>
									<li>
										<div id="CalcInvestor_4_summ" class="nouislider"></div>
									</li>
									<li>
										<p><span id="CalcInvestor_4_summ_value-1">120 000</span> руб.</p>
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
										<div id="CalcInvestor_4_time" class="nouislider"></div>
									</li>
									<li>
										<p><span id="CalcInvestor_4_time_value-1">1</span> мес</p>
									</li>
								</ul>
							</div>
							<!-- /slider -->
							<!-- result -->
							<div class="calculator__result">
								<ul>
									<li>
										<p>ваша прибыль</p>
										<span id="CalcInvestor_4_result">1 560 780<i>руб.</i></span>
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
						<!-- /calculator__sliders-wrap -->
					</div>
					<!-- /First Calculator - Phisic Faces -->
					<!-- First Calculator - Legal Faces -->
					<div class="first-calculator__legal-faces">
						<!-- tabs -->
						<div class="calculator__tabs-container">
							<ul>
								<li>
									<div class="calculator__tab tab-1 active" data-value="1">
										<p>Моя цель</p>
									</div>
								</li>
								<li>
									<div class="calculator__tab tab-2" data-value="2">
										<p>Ежемесячный доход</p>
									</div>
								</li>
								<li>
									<div class="calculator__tab tab-3" data-value="3">
										<p>Максимальный процент</p>
									</div>
								</li>
							</ul>
						</div>
						<!-- /tabs -->
						<!-- calculator__sliders-wrap -->
						<div class="calculator__sliders-wrap" data-calc-wrap="1">
							<!-- slider -->
							<div class="calculator__slider-container">
								<ul>
									<li>
										<p>Инвестиции</p>
									</li>
									<li>
										<div id="CalcInvestorLegal_1_summ" class="nouislider"></div>
									</li>
									<li>
										<p><span id="CalcInvestorLegal_1_summ_value-1">#1</span> руб.</p>
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
										<div id="CalcInvestorLegal_1_time" class="nouislider"></div>
									</li>
									<li>
										<p><span id="CalcInvestorLegal_1_time_value-1">#1</span> мес</p>
									</li>
								</ul>
							</div>
							<!-- /slider -->
							<!-- result -->
							<div class="calculator__result">
								<ul>
									<li>
										<p>ваша прибыль</p>
										<span id="CalcInvestorLegal_1_result">#1<i>руб.</i></span>
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
						<!-- /calculator__sliders-wrap -->
						<!-- calculator__sliders-wrap -->
						<div class="calculator__sliders-wrap" data-calc-wrap="2">
							<!-- slider -->
							<div class="calculator__slider-container">
								<ul>
									<li>
										<p>Инвестиции</p>
									</li>
									<li>
										<div id="CalcInvestorLegal_2_summ" class="nouislider"></div>
									</li>
									<li>
										<p><span id="CalcInvestorLegal_2_summ_value-1">#2</span> руб.</p>
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
										<div id="CalcInvestorLegal_2_time" class="nouislider"></div>
									</li>
									<li>
										<p><span id="CalcInvestorLegal_2_time_value-1">#2</span> мес</p>
									</li>
								</ul>
							</div>
							<!-- /slider -->
							<!-- result -->
							<div class="calculator__result">
								<ul>
									<li>
										<p>ваша прибыль</p>
										<span id="CalcInvestorLegal_2_result">#2<i>руб.</i></span>
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
						<!-- /calculator__sliders-wrap -->
						<!-- calculator__sliders-wrap -->
						<div class="calculator__sliders-wrap" data-calc-wrap="3">
							<!-- slider -->
							<div class="calculator__slider-container">
								<ul>
									<li>
										<p>Инвестиции</p>
									</li>
									<li>
										<div id="CalcInvestorLegal_3_summ" class="nouislider"></div>
									</li>
									<li>
										<p><span id="CalcInvestorLegal_3_summ_value-1">#3</span> руб.</p>
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
										<div id="CalcInvestorLegal_3_time" class="nouislider"></div>
									</li>
									<li>
										<p><span id="CalcInvestorLegal_3_time_value-1">#3</span> мес</p>
									</li>
								</ul>
							</div>
							<!-- /slider -->
							<!-- result -->
							<div class="calculator__result">
								<ul>
									<li>
										<p>ваша прибыль</p>
										<span id="CalcInvestorLegal_3_result">#3<i>руб.</i></span>
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
						<!-- /calculator__sliders-wrap -->
					</div>
					<!-- /First Calculator - Legal Faces -->
				</div>
			</div>
			<div id="calculator-2" class="header__calculator-block">
				<div class="calculator-content">
					<h1>Выберите нужную сумму денег</h1>
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
									<div class="calculator__tab tab-1 active" data-value="1">
										<p>Краткосрочные займы</p>
									</div>
								</li>
								<li>
									<div class="calculator__tab tab-2" data-value="2">
										<p>Займы под залог недвиж.</p>
									</div>
								</li>
								<li>
									<div class="calculator__tab tab-3" data-value="3">
										<p>Займы под залог авто</p>
									</div>
								</li>
							</ul>
						</div>
						<!-- /tabs -->
						<!-- CalcBorrower 1 -->
						<!-- wrap calc slides -->
						<div class="calculator__sliders-wrap" data-calc-wrap="1">
							<!-- slider -->
							<div class="calculator__slider-container">
								<ul>
									<li>
										<p>сумма займа</p>
									</li>
									<li>
										<div id="CalcBorrower_1_summ" class="nouislider"></div>
									</li>
									<li>
										<p><span id="CalcBorrower_1_summ_value-1">120 000</span> руб.</p>
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
										<div id="CalcBorrower_1_time" class="nouislider"></div>
									</li>
									<li>
										<p><span id="CalcBorrower_1_time_value-1">120 000</span> дн.</p>
									</li>
								</ul>
							</div>
							<!-- /slider -->
							<!-- result -->
							<div class="calculator__result">
								<ul>
									<li>
										<p>сумма возврата</p>
										<div id="CalcBorrower_1_result"></div>
									</li>
									<li>
										<div class="calculator__result-btn">
											оформить
										</div>
									</li>
								</ul>
							</div>
							<!-- /result -->
						</div>
						<!-- /wrap calc slides -->
						<!-- wrap calc slides -->
						<div class="calculator__sliders-wrap" data-calc-wrap="2">
							<!-- slider -->
							<div class="calculator__slider-container">
								<ul>
									<li>
										<p>сумма займа</p>
									</li>
									<li>
										<div id="CalcBorrower_2_summ" class="nouislider"></div>
									</li>
									<li>
										<p><span id="CalcBorrower_2_summ_value-1">120 000</span> руб.</p>
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
										<div id="CalcBorrower_2_time" class="nouislider"></div>
									</li>
									<li>
										<p><span id="CalcBorrower_2_time_value-1">120 000</span> мес.</p>
									</li>
								</ul>
							</div>
							<!-- /slider -->
							<!-- result -->
							<div class="calculator__result">
								<ul>
									<li>
										<p>сумма возврата</p>
										<div id="CalcBorrower_2_result"></div>
									</li>
									<li>
										<div class="calculator__result-btn">
											оформить
										</div>
									</li>
								</ul>
							</div>
							<!-- /result -->
						</div>
						<!-- /wrap calc slides -->
						<!-- wrap calc slides -->
						<div class="calculator__sliders-wrap" data-calc-wrap="3">
							<!-- slider -->
							<div class="calculator__slider-container">
								<ul>
									<li>
										<p>сумма займа</p>
									</li>
									<li>
										<div id="CalcBorrower_3_summ" class="nouislider"></div>
									</li>
									<li>
										<p><span id="CalcBorrower_3_summ_value-1">120 000</span> руб.</p>
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
										<div id="CalcBorrower_3_time" class="nouislider"></div>
									</li>
									<li>
										<p><span id="CalcBorrower_3_time_value-1">120 000</span> мес.</p>
									</li>
								</ul>
							</div>
							<!-- /slider -->
							<!-- result -->
							<div class="calculator__result">
								<ul>
									<li>
										<p>сумма возврата</p>
										<div id="CalcBorrower_3_result"></div>
									</li>
									<li>
										<div class="calculator__result-btn">
											оформить
										</div>
									</li>
								</ul>
							</div>
							<!-- /result -->
						</div>
						<!-- /wrap calc slides -->
					</div>
					<!-- /Borrower Calculator - Phisic Faces -->
					<!-- Borrower Calculator - Legal Faces -->
					<div class="borrower-calculator-legal">
						<!-- tabs -->
						<div class="calculator__tabs-container">
							<ul>
								<li>
									<div class="calculator__tab tab-1 active" data-value="1">
										<p>Займы под инвестиции</p>
									</div>
								</li>
								<li>
									<div class="calculator__tab tab-2" data-value="2">
										<p>Займы для предпринимателей</p>
									</div>
								</li>
								<li>
									<div class="calculator__tab tab-3" data-value="3">
										<p>Займы для юр. лиц</p>
									</div>
								</li>
							</ul>
						</div>
						<!-- /tabs -->
						<!-- CalcBorrower 2 -->
						<!-- wrap calc slides -->
						<div class="calculator__sliders-wrap" data-calc-wrap="1">
							<!-- slider -->
							<div class="calculator__slider-container">
								<ul>
									<li>
										<p>сумма займа</p>
									</li>
									<li>
										<div id="CalcBorrowerLegal_1_summ" class="nouislider"></div>
									</li>
									<li>
										<p><span id="CalcBorrowerLegal_1_summ_value-1">120 000</span> руб.</p>
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
										<div id="CalcBorrowerLegal_1_time" class="nouislider"></div>
									</li>
									<li>
										<p><span id="CalcBorrowerLegal_1_time_value-1">120 000</span> мес.</p>
									</li>
								</ul>
							</div>
							<!-- /slider -->
							<!-- result -->
							<div class="calculator__result">
								<ul>
									<li>
										<p>сумма возврата</p>
										<div id="CalcBorrowerLegal_1_result"></div>
									</li>
									<li>
										<div class="calculator__result-btn">
											оформить
										</div>
									</li>
								</ul>
							</div>
							<!-- /result -->
						</div>
						<!-- /wrap calc slides -->
						<!-- wrap calc slides -->
						<div class="calculator__sliders-wrap" data-calc-wrap="2">
							<!-- slider -->
							<div class="calculator__slider-container">
								<ul>
									<li>
										<p>сумма займа</p>
									</li>
									<li>
										<div id="CalcBorrowerLegal_2_summ" class="nouislider"></div>
									</li>
									<li>
										<p><span id="CalcBorrowerLegal_2_summ_value-1">120 000</span> руб.</p>
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
										<div id="CalcBorrowerLegal_2_time" class="nouislider"></div>
									</li>
									<li>
										<p><span id="CalcBorrowerLegal_2_time_value-1">120 000</span> мес.</p>
									</li>
								</ul>
							</div>
							<!-- /slider -->
							<!-- result -->
							<div class="calculator__result">
								<ul>
									<li>
										<p>сумма возврата</p>
										<div id="CalcBorrowerLegal_2_result"></div>
									</li>
									<li>
										<div class="calculator__result-btn">
											оформить
										</div>
									</li>
								</ul>
							</div>
							<!-- /result -->
						</div>
						<!-- /wrap calc slides -->
						<!-- wrap calc slides -->
						<div class="calculator__sliders-wrap" data-calc-wrap="3">
							<!-- slider -->
							<div class="calculator__slider-container">
								<ul>
									<li>
										<p>сумма займа</p>
									</li>
									<li>
										<div id="CalcBorrowerLegal_3_summ" class="nouislider"></div>
									</li>
									<li>
										<p><span id="CalcBorrowerLegal_3_summ_value-1">120 000</span> руб.</p>
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
										<div id="CalcBorrowerLegal_3_time" class="nouislider"></div>
									</li>
									<li>
										<p><span id="CalcBorrowerLegal_3_time_value-1">120 000</span> мес.</p>
									</li>
								</ul>
							</div>
							<!-- /slider -->
							<!-- result -->
							<div class="calculator__result">
								<ul>
									<li>
										<p>сумма возврата</p>
										<div id="CalcBorrowerLegal_3_result"></div>
									</li>
									<li>
										<div class="calculator__result-btn">
											оформить
										</div>
									</li>
								</ul>
							</div>
							<!-- /result -->
						</div>
						<!-- /wrap calc slides -->
					</div>
					<!-- /Borrower Calculator - Legal Faces -->
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
		<div class="scheme-container clearfix">
			<div class="scheme-step-title-container">
				<div class="scheme-step-title-content">
					<h2>
						Схема<br>получения<br>займа
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
									Заполняем форму
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
									Заполняем форму
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
									Заполняем форму
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
						способы погашения долга
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
									наличными в офисе
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
	<footer>
		<div class="footer-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6 col-lg-4 footer-1-column">
						<address>
							<h5>Мы находимся по адресу:</h5>
							<p>ул. Красных тюленей д. 35, к.1, оф. 4</p>
							<a href="tel:88005006000">8 (800) 500 60 00</a>
						</address>
					</div>
					<div class="col-sm-6 col-lg-2 footer-2-column">
						<h4>О компании</h4>
						<ul>
							<li>
								<a href="#">регуляция</a>
							</li>
							<li>
								<a href="#">цель</a>
							</li>
							<li>
								<a href="#">история</a>
							</li>
						</ul>
					</div>
					<div class="col-sm-6 col-lg-4 footer-3-column clearfix">
						<h4>Займы</h4>
						<ul>
							<li>
								<a href="#">краткосрочные займы для физических лиц</a>
							</li>
							<li>
								<a href="#">займы физическим лицам под залом недвижимости</a>
							</li>
							<li>
								<a href="#">займы физическим лицам под залом автотранспорта</a>
							</li>
							<li>
								<a href="#">займы для индивидуальных предпринимателей</a>
							</li>
							<li>
								<a href="#">займы под инвестиции</a>
							</li>
							<li>
								<a href="#">займы для юридических лиц</a>
							</li>
						</ul>
					</div>
					<div class="col-sm-6 col-lg-2 footer-4-column">
						<h4>инвесторам</h4>
						<ul>
							<li>
								<a href="#">почему выгодно инвестировать в микрофинансовый сектор?</a>
							</li>
							<li>
								<a href="#">почему нам доверяют?</a>
							</li>
							<li>
								<a href="#">инвестиции - это просто</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-underline clearfix">
			<p>Все права защищены 2015</p>
			<p>Лицензия №3469034683406754067</p>
		</div>
	</footer>
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