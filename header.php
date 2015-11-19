<header class="clearfix">
	<div class="header__logo-container clearfix">
		<a href="index.php">
			<img src="assets/img/logos/Inkasso.svg" alt="logo">
			<img src="assets/img/logos/Inkasso_mini.svg" alt="logo-mini">
		</a>
	</div>
	<!-- Скрытая кнопка - бутерброд - отображается в мобильной версии -->
	<div id="hamburher-btn" class="header__hamburger"></div>
	<div class="header__menu-container clearfix animated">
		<ul>
			<li>
				<a href="aboutus.php">о компании</a>
			</li>
			<li>
				<a href="loans.php">займы</a>
			</li>
			<li>
				<a href="#">инвестиции</a>
			</li>
			<li>
				<a href="news.php">Пресс-центр</a>
			</li>
			<li>
				<a href="contacts.php">Контакты</a>
			</li>
		</ul>
	</div>
	<div class="header__calculator-container">
		<div id="calculator-btn-1" class="header__calculator-button">
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
			<div id="shooter0" style="position: absolute; top: 0; right: 0; width: 1px; height: 1px;"></div>
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
									<p>Вы получите</p>
									<span id="CalcInvestor_1_result">1 560 780<i>руб.</i></span>
								</li>
								<li>
									<div class="calculator__result-btn">
										Подробнее
									</div>
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
									<p>Вы получите</p>
									<span id="CalcInvestor_2_result">1 560 780<i>руб.</i></span>
								</li>
								<li>
									<div class="calculator__result-btn">
										Подробнее
									</div>
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
									<p>Вы получите</p>
									<span id="CalcInvestor_3_result">1 560 780<i>руб.</i></span>
								</li>
								<li>
									<div class="calculator__result-btn">
										Подробнее 
									</div>
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
									<p>Вы получите</p>
									<span id="CalcInvestor_4_result">1 560 780<i>руб.</i></span>
								</li>
								<li>
									<div class="calculator__result-btn">
										Подробнее 
									</div>
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
									<p>Вы получите</p>
									<span id="CalcInvestorLegal_1_result">#1<i>руб.</i></span>
								</li>
								<li>
									<div class="calculator__result-btn">
										Подробнее 
									</div>
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
									<p>Вы получите</p>
									<span id="CalcInvestorLegal_2_result">#2<i>руб.</i></span>
								</li>
								<li>
									<div class="calculator__result-btn">
										Подробнее 
									</div>
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
									<p>Вы получите</p>
									<span id="CalcInvestorLegal_3_result">#3<i>руб.</i></span>
								</li>
								<li>
									<div class="calculator__result-btn">
										Подробнее 
									</div>
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
			<div id="shooter" style="position: absolute; top: 0; right: 0px; width: 1px; height: 1px;"></div>
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
									<p>Сумма возврата</p>
									<span id="CalcBorrower_1_result"></span>
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
									<p>Сумма займа</p>
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
									<p>Сумма возврата</p>
									<span id="CalcBorrower_2_result"></span>
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
									<p>Сумма возврата</p>
									<span id="CalcBorrower_3_result"></span>
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
									<p>Сумма возврата</p>
									<span id="CalcBorrowerLegal_1_result"></span>
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
									<p>Сумма возврата</p>
									<span id="CalcBorrowerLegal_2_result"></span>
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
									<p>Сумма возврата</p>
									<span id="CalcBorrowerLegal_3_result"></span>
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
		<!-- выпадающие меню -->
			<div class="header__admin-window">
				<!-- вход -->
				<div class="header__admin-window-content login">
					<form id="login" action="#">
						<input type="text" name="login" placeholder="Логин">
						<input type="text" name="password" placeholder="Пароль">
						<input type="submit" value="Войти">
						<a href="#">Регистрация</a>
					</form>
				</div>
				<!-- /вход -->
				<!-- регистрация -->
				<div class="header__admin-window-content register">
					<form id="register" action="#">
						<input type="text" name="login" placeholder="Логин">
						<input type="text" name="email" placeholder="E-mail">
						<input type="text" class="password" name="password" placeholder="Пароль">
						<input type="text" name="confirmpassword" placeholder="Повторите пароль">
						<input type="submit" value="Регистрация">
						<a href="#">Вход</a>
					</form>
				</div>
				<!-- /регистрация -->
			</div>
		<!-- /выпадающие меню -->
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
