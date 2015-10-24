$(document).ready(function() {
	/* Открываем или прячем меню на мобильной версии */
	$('#hamburher-btn').click(function(event) {
		event.preventDefault();
		$('header').toggleClass('active');
		// в зависимости от состояния меню присваиваем анимацию
		if ($('header').hasClass('active')) {
			$('.header__menu-container').addClass('bounceInLeft')
			$('.header__phone-cabinet-container').addClass('bounceInLeft')
		}
	});
	/* Открываем или прячем калькуляторы */
	function checkCalculatorButtons() {
		if ($('#calculator-btn-1').hasClass('active')) {
			$('#calculator-2').css('display', 'none');
			$('#calculator-1').css('display', 'table');
		} else if ($('#calculator-btn-2').hasClass('active')) {
			$('#calculator-1').css('display', 'none');
			$('#calculator-2').css('display', 'table');
		}
	}
	checkCalculatorButtons();
	// задаем размер окнам калькулятора
	function checkSizeCalculators() {
		var calculator_first_width = ($('#calculator-btn-1').width() + $('#calculator-btn-2').width() + $('.header__phone-cabinet-container').width());
		$('#calculator-1').outerWidth(calculator_first_width);
		var calculator_second_width = ($('#calculator-btn-2').width() + $('.header__phone-cabinet-container').width())
		$('#calculator-2').outerWidth(calculator_second_width);
		var calculator_second_margin = $('#calculator-btn-1').width();
		$('#calculator-2').css('margin-left', calculator_second_margin);
	}
	checkSizeCalculators();
	//
	$('#calculator-btn-1').click(function(event) {
		event.preventDefault();
		$('#calculator-btn-1').addClass('active')
		$('#calculator-btn-2').removeClass('active')
		checkCalculatorButtons();
	});
	$('#calculator-btn-2').click(function(event) {
		event.preventDefault();
		$('#calculator-btn-1').removeClass('active')
		$('#calculator-btn-2').addClass('active')
		checkCalculatorButtons();
	});
	/* switch 1*/
	$('#calculator-1 span.calculator_switch[data-switch-pos] i').click(function(event) {
		event.preventDefault();
		if ($('#calculator-1 span.calculator_switch').attr('data-switch-pos') == 1) {
			$('#calculator-1 span.calculator_switch').attr('data-switch-pos', '2');
		} else if ($('#calculator-1 span.calculator_switch').attr('data-switch-pos') == 2) {
			$('#calculator-1 span.calculator_switch').attr('data-switch-pos', '1');
		}
	});
	/* switch 2*/
	$('#calculator-2 span.calculator_switch[data-switch-pos] i').click(function(event) {
		event.preventDefault();
		if ($('#calculator-2 span.calculator_switch').attr('data-switch-pos') == 1) {
			$('#calculator-2 span.calculator_switch').attr('data-switch-pos', '2');
		} else if ($('#calculator-2 span.calculator_switch').attr('data-switch-pos') == 2) {
			$('#calculator-2 span.calculator_switch').attr('data-switch-pos', '1');
		}
	});
	/* Переключаем табы на первом калькуляторе */
	$('#calculator-1 .calculator__tab').on('click', function(event) {
		event.preventDefault();
		$('#calculator-1 .calculator__tab').removeClass('active');
		$(this).addClass('active');
	});
	/* Переключаем табы на втором калькуляторе - физ лица*/
	$('.borrower-calculator-phisic .calculator__tab').on('click', function(event) {
		event.preventDefault();
		$('.borrower-calculator-phisic .calculator__tab').removeClass('active');
		$(this).addClass('active');
	});
	/* Переключаем табы на втором калькуляторе - юр лица*/
	$('.borrower-calculator-legal .calculator__tab').on('click', function(event) {
		event.preventDefault();
		$('.borrower-calculator-legal .calculator__tab').removeClass('active');
		$(this).addClass('active');
	});


	/* создаем слайды на калькулятолре */

/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/

	/* Калькулятор заемщика - Краткосрочные займы */

	/* создаем переменные - значения слайдеров и результат */
	var CalcInvestor_1_user_summ = 0; // слайдер суммы
	var CalcInvestor_1_user_time = 0; // слайдер период займа
	var CalcInvestor_1_user_percent = 1.75; // слайдер период займа
	var CalcInvestor_1_outcome = 0; // результат

	// Слайд суммы
	var CalcInvestor_1_summ = document.getElementById('CalcInvestor_1_summ'); // Слайд
	// Настройки слайда
	var CalcInvestor_1_summ_Settings = {
		start: [ 150000 ],
		step: 1000,
		range: {
			'min': [ 150000 ],
			'max': [ 10000000 ]
		},
		format: wNumb({
			decimals: 1,
			thousand: '',
			postfix: '',
		})
	}
	
	noUiSlider.create(CalcInvestor_1_summ, CalcInvestor_1_summ_Settings); // запускаем слайд
	
	// функция выдает значения на лейблы
	function handlerstepCalcInvestor_1_summ() {
		// добавляем к точке лейбл
		$('#CalcInvestor_1_summ .noUi-handle').append('<span id="CalcInvestor_1_summ_value-2" class="nouislider-under-value"></span>');
		// получаем в переменные лейблы
		var CalcInvestor_1_summ_ValueElement_1 = document.getElementById('CalcInvestor_1_summ_value-1');
		var CalcInvestor_1_summ_ValueElement_2 = document.getElementById('CalcInvestor_1_summ_value-2');

		CalcInvestor_1_summ.noUiSlider.on('update', function( values, handle ) {
			CalcInvestor_1_summ_ValueElement_1.innerHTML = parseInt(values[handle]);
			CalcInvestor_1_summ_ValueElement_2.innerHTML = parseInt(values[handle]);
			CalcInvestor_1_user_summ = parseInt(values[handle]);
			CalcInvestor_1_result();
		});
	}

	handlerstepCalcInvestor_1_summ();
	
	/********************************/
	
	// слайд периода займа
	var CalcInvestor_1_time = document.getElementById('CalcInvestor_1_time'); // Слайд
	// Настройки слайда
	var CalcInvestor_1_time_Settings = {
		start: [ 7 ],
		step: 1,
		range: {
			'min': [ 7 ],
			'max': [ 20 ]
		},
		format: wNumb({
			decimals: 1,
			thousand: '',
			postfix: '',
		})
	}

	noUiSlider.create(CalcInvestor_1_time, CalcInvestor_1_time_Settings); // запускаем слайд

	// функция выдает значения на лейблы
	function handlerstepCalcInvestor_1_time() {
		// добавляем к точке лейбл
		$('#CalcInvestor_1_time .noUi-handle').append('<span id="CalcInvestor_1_time_value-2" class="nouislider-under-value"></span>');
		// получаем в переменные лейблы
		var CalcInvestor_1_time_ValueElement_1 = document.getElementById('CalcInvestor_1_time_value-1');
		var CalcInvestor_1_time_ValueElement_2 = document.getElementById('CalcInvestor_1_time_value-2');

		CalcInvestor_1_time.noUiSlider.on('update', function( values, handle ) {
			CalcInvestor_1_time_ValueElement_1.innerHTML = parseInt(values[handle]);
			CalcInvestor_1_time_ValueElement_2.innerHTML = parseInt(values[handle]);
			CalcInvestor_1_user_time = parseInt(values[handle]);
			CalcInvestor_1_result();
		});
	}

	handlerstepCalcInvestor_1_time();

	// Считаем результат
	function CalcInvestor_1_result() {
		CalcInvestor_1_outcome = parseInt((((CalcInvestor_1_user_summ / 100)*CalcInvestor_1_user_percent)*CalcInvestor_1_user_time) + CalcInvestor_1_user_summ);
		$('#CalcInvestor_1_result').html(CalcInvestor_1_outcome + "<i>USD.</i>");
	}
	CalcInvestor_1_result();

/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/

	/* Калькулятор заемщика - Краткосрочные займы */

	/* создаем переменные - значения слайдеров и результат */
	var CalcBorrower_1_user_summ = 0; // слайдер суммы
	var CalcBorrower_1_user_time = 0; // слайдер период займа
	var CalcBorrower_1_user_percent = 1.75; // слайдер период займа
	var CalcBorrower_1_outcome = 0; // результат

	// Слайд суммы
	var CalcBorrower_1_summ = document.getElementById('CalcBorrower_1_summ'); // Слайд
	// Настройки слайда
	var CalcBorrower_1_summ_Settings = {
		start: [ 5000 ],
		step: 1000,
		range: {
			'min': [ 5000 ],
			'max': [ 50000 ]
		},
		format: wNumb({
			decimals: 1,
			thousand: '',
			postfix: '',
		})
	}
	
	noUiSlider.create(CalcBorrower_1_summ, CalcBorrower_1_summ_Settings); // запускаем слайд
	
	// функция выдает значения на лейблы
	function handlerstepCalcBorrower_1_summ() {
		// добавляем к точке лейбл
		$('#CalcBorrower_1_summ .noUi-handle').append('<span id="CalcBorrower_1_summ_value-2" class="nouislider-under-value"></span>');
		// получаем в переменные лейблы
		var CalcBorrower_1_summ_ValueElement_1 = document.getElementById('CalcBorrower_1_summ_value-1');
		var CalcBorrower_1_summ_ValueElement_2 = document.getElementById('CalcBorrower_1_summ_value-2');

		CalcBorrower_1_summ.noUiSlider.on('update', function( values, handle ) {
			CalcBorrower_1_summ_ValueElement_1.innerHTML = parseInt(values[handle]);
			CalcBorrower_1_summ_ValueElement_2.innerHTML = parseInt(values[handle]);
			CalcBorrower_1_user_summ = parseInt(values[handle]);
			CalcBorrower_1_result();
		});
	}

	handlerstepCalcBorrower_1_summ();
	
	/********************************/
	
	// слайд периода займа
	var CalcBorrower_1_time = document.getElementById('CalcBorrower_1_time'); // Слайд
	// Настройки слайда
	var CalcBorrower_1_time_Settings = {
		start: [ 7 ],
		step: 1,
		range: {
			'min': [ 7 ],
			'max': [ 20 ]
		},
		format: wNumb({
			decimals: 1,
			thousand: '',
			postfix: '',
		})
	}

	noUiSlider.create(CalcBorrower_1_time, CalcBorrower_1_time_Settings); // запускаем слайд

	// функция выдает значения на лейблы
	function handlerstepCalcBorrower_1_time() {
		// добавляем к точке лейбл
		$('#CalcBorrower_1_time .noUi-handle').append('<span id="CalcBorrower_1_time_value-2" class="nouislider-under-value"></span>');
		// получаем в переменные лейблы
		var CalcBorrower_1_time_ValueElement_1 = document.getElementById('CalcBorrower_1_time_value-1');
		var CalcBorrower_1_time_ValueElement_2 = document.getElementById('CalcBorrower_1_time_value-2');

		CalcBorrower_1_time.noUiSlider.on('update', function( values, handle ) {
			CalcBorrower_1_time_ValueElement_1.innerHTML = parseInt(values[handle]);
			CalcBorrower_1_time_ValueElement_2.innerHTML = parseInt(values[handle]);
			CalcBorrower_1_user_time = parseInt(values[handle]);
			CalcBorrower_1_result();
		});
	}

	handlerstepCalcBorrower_1_time();

	// Считаем результат
	function CalcBorrower_1_result() {
		//CalcBorrower_1_outcome = parseInt((((CalcBorrower_1_user_summ / 100)*CalcBorrower_1_user_percent)*CalcBorrower_1_user_time) + CalcBorrower_2_user_summ);
		CalcBorrower_1_outcome = parseInt((((CalcBorrower_1_user_summ / 100)*CalcBorrower_1_user_percent)*CalcBorrower_1_user_time) + CalcBorrower_1_user_summ);
		$('#CalcBorrower_1_result').html(CalcBorrower_1_outcome + " руб.");

	}
	CalcBorrower_1_result();


/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/


	/* Калькулятор заемщика - Краткосрочные займы */

	/* создаем переменные - значения слайдеров и результат */
	var CalcBorrower_2_user_summ = 0; // слайдер суммы
	var CalcBorrower_2_user_time = 0; // слайдер период займа
	var CalcBorrower_2_user_percent = 4.5; // слайдер период займа
	var CalcBorrower_2_outcome; // результат


	// Слайд суммы
	var CalcBorrower_2_summ = document.getElementById('CalcBorrower_2_summ'); // Слайд
	// Настройки слайда
	var CalcBorrower_2_summ_Settings = {
		start: [ 300000 ],
		step: 50000,
		range: {
			'min': [ 300000 ],
			'max': [ 5000000 ]
		},
		format: wNumb({
			decimals: 1,
			thousand: '',
			postfix: '',
		})
	}
	
	noUiSlider.create(CalcBorrower_2_summ, CalcBorrower_2_summ_Settings); // запускаем слайд
	
	// функция выдает значения на лейблы
	function handlerstepCalcBorrower_2_summ() {
		// добавляем к точке лейбл
		$('#CalcBorrower_2_summ .noUi-handle').append('<span id="CalcBorrower_2_summ_value-2" class="nouislider-under-value"></span>');
		// получаем в переменные лейблы
		var CalcBorrower_2_summ_ValueElement_1 = document.getElementById('CalcBorrower_2_summ_value-1');
		var CalcBorrower_2_summ_ValueElement_2 = document.getElementById('CalcBorrower_2_summ_value-2');

		CalcBorrower_2_summ.noUiSlider.on('update', function( values, handle ) {
			CalcBorrower_2_summ_ValueElement_1.innerHTML = parseInt(values[handle]);
			CalcBorrower_2_summ_ValueElement_2.innerHTML = parseInt(values[handle]);
			CalcBorrower_2_user_summ = parseInt(values[handle]);
			CalcBorrower_2_result();
		});
	}

	handlerstepCalcBorrower_2_summ();
	
	/********************************/
	
	// слайд периода займа
	var CalcBorrower_2_time = document.getElementById('CalcBorrower_2_time'); // Слайд
	// Настройки слайда
	var CalcBorrower_2_time_Settings = {
		start: [ 1 ],
		step: 1,
		range: {
			'min': [ 1 ],
			'max': [ 24 ]
		},
		format: wNumb({
			decimals: 1,
			thousand: '',
			postfix: '',
		})
	}

	noUiSlider.create(CalcBorrower_2_time, CalcBorrower_2_time_Settings); // запускаем слайд

	// функция выдает значения на лейблы
	function handlerstepCalcBorrower_2_time() {
		// добавляем к точке лейбл
		$('#CalcBorrower_2_time .noUi-handle').append('<span id="CalcBorrower_2_time_value-2" class="nouislider-under-value"></span>');
		// получаем в переменные лейблы
		var CalcBorrower_2_time_ValueElement_1 = document.getElementById('CalcBorrower_2_time_value-1');
		var CalcBorrower_2_time_ValueElement_2 = document.getElementById('CalcBorrower_2_time_value-2');

		CalcBorrower_2_time.noUiSlider.on('update', function( values, handle ) {
			CalcBorrower_2_time_ValueElement_1.innerHTML = parseInt(values[handle]);
			CalcBorrower_2_time_ValueElement_2.innerHTML = parseInt(values[handle]);
			CalcBorrower_2_user_time = parseInt(values[handle]);
			CalcBorrower_2_result();
		});
	}

	handlerstepCalcBorrower_2_time();

	// Считаем результат
	function CalcBorrower_2_result() {
		CalcBorrower_2_outcome = (((CalcBorrower_2_user_summ / 100)*CalcBorrower_2_user_percent)*CalcBorrower_2_user_time) + CalcBorrower_2_user_summ;
		$('#CalcBorrower_2_result').html(CalcBorrower_2_outcome + " руб.");
	}
	CalcBorrower_2_result();


/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/

	/* Калькулятор заемщика - Краткосрочные займы */

	/* создаем переменные - значения слайдеров и результат */
	var CalcBorrower_3_user_summ = 0; // слайдер суммы
	var CalcBorrower_3_user_time = 0; // слайдер период займа
	var CalcBorrower_3_user_percent = 1.8; // слайдер период займа
	var CalcBorrower_3_outcome; // результат


	// Слайд суммы
	var CalcBorrower_3_summ = document.getElementById('CalcBorrower_3_summ'); // Слайд
	// Настройки слайда
	var CalcBorrower_3_summ_Settings = {
		start: [ 100000 ],
		step: 50000,
		range: {
			'min': [ 100000 ],
			'max': [ 2000000 ]
		},
		format: wNumb({
			decimals: 1,
			thousand: '',
			postfix: '',
		})
	}
	
	noUiSlider.create(CalcBorrower_3_summ, CalcBorrower_3_summ_Settings); // запускаем слайд
	
	// функция выдает значения на лейблы
	function handlerstepCalcBorrower_3_summ() {
		// добавляем к точке лейбл
		$('#CalcBorrower_3_summ .noUi-handle').append('<span id="CalcBorrower_3_summ_value-2" class="nouislider-under-value"></span>');
		// получаем в переменные лейблы
		var CalcBorrower_3_summ_ValueElement_1 = document.getElementById('CalcBorrower_3_summ_value-1');
		var CalcBorrower_3_summ_ValueElement_2 = document.getElementById('CalcBorrower_3_summ_value-2');

		CalcBorrower_3_summ.noUiSlider.on('update', function( values, handle ) {
			CalcBorrower_3_summ_ValueElement_1.innerHTML = parseInt(values[handle]);
			CalcBorrower_3_summ_ValueElement_2.innerHTML = parseInt(values[handle]);
			CalcBorrower_3_user_summ = parseInt(values[handle]);
			CalcBorrower_3_result();
		});
	}

	handlerstepCalcBorrower_3_summ();
	
	/********************************/
	
	// слайд периода займа
	var CalcBorrower_3_time = document.getElementById('CalcBorrower_3_time'); // Слайд
	// Настройки слайда
	var CalcBorrower_3_time_Settings = {
		start: [ 1 ],
		step: 1,
		range: {
			'min': [ 1 ],
			'max': [ 12 ]
		},
		format: wNumb({
			decimals: 1,
			thousand: '',
			postfix: '',
		})
	}

	noUiSlider.create(CalcBorrower_3_time, CalcBorrower_3_time_Settings); // запускаем слайд

	// функция выдает значения на лейблы
	function handlerstepCalcBorrower_3_time() {
		// добавляем к точке лейбл
		$('#CalcBorrower_3_time .noUi-handle').append('<span id="CalcBorrower_3_time_value-2" class="nouislider-under-value"></span>');
		// получаем в переменные лейблы
		var CalcBorrower_3_time_ValueElement_1 = document.getElementById('CalcBorrower_3_time_value-1');
		var CalcBorrower_3_time_ValueElement_2 = document.getElementById('CalcBorrower_3_time_value-2');

		CalcBorrower_3_time.noUiSlider.on('update', function( values, handle ) {
			CalcBorrower_3_time_ValueElement_1.innerHTML = parseInt(values[handle]);
			CalcBorrower_3_time_ValueElement_2.innerHTML = parseInt(values[handle]);
			CalcBorrower_3_user_time = parseInt(values[handle]);
			CalcBorrower_3_result();
		});
	}

	handlerstepCalcBorrower_3_time();

	// Считаем результат
	function CalcBorrower_3_result() {
		CalcBorrower_3_outcome = (((CalcBorrower_3_user_summ / 100)*CalcBorrower_3_user_percent)*CalcBorrower_3_user_time) + CalcBorrower_3_user_summ;
		$('#CalcBorrower_3_result').html(CalcBorrower_3_outcome + " руб.");
	}
	CalcBorrower_3_result();


/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/

	/* Калькулятор заемщика - Краткосрочные займы */

	/* создаем переменные - значения слайдеров и результат */
	var CalcBorrowerLegal_1_user_summ = 0; // слайдер суммы
	var CalcBorrowerLegal_1_user_time = 0; // слайдер период займа
	var CalcBorrowerLegal_1_user_percent = 2; // слайдер период займа
	var CalcBorrowerLegal_1_outcome = 0; // результат

	// Слайд суммы
	var CalcBorrowerLegal_1_summ = document.getElementById('CalcBorrowerLegal_1_summ'); // Слайд
	// Настройки слайда
	var CalcBorrowerLegal_1_summ_Settings = {
		start: [ 150000 ],
		step: 50000,
		range: {
			'min': [ 150000 ],
			'max': [ 1000000 ]
		},
		format: wNumb({
			decimals: 1,
			thousand: '',
			postfix: '',
		})
	}
	
	noUiSlider.create(CalcBorrowerLegal_1_summ, CalcBorrowerLegal_1_summ_Settings); // запускаем слайд
	
	// функция выдает значения на лейблы
	function handlerstepCalcBorrowerLegal_1_summ() {
		// добавляем к точке лейбл
		$('#CalcBorrowerLegal_1_summ .noUi-handle').append('<span id="CalcBorrowerLegal_1_summ_value-2" class="nouislider-under-value"></span>');
		// получаем в переменные лейблы
		var CalcBorrowerLegal_1_summ_ValueElement_1 = document.getElementById('CalcBorrowerLegal_1_summ_value-1');
		var CalcBorrowerLegal_1_summ_ValueElement_2 = document.getElementById('CalcBorrowerLegal_1_summ_value-2');

		CalcBorrowerLegal_1_summ.noUiSlider.on('update', function( values, handle ) {
			CalcBorrowerLegal_1_summ_ValueElement_1.innerHTML = parseInt(values[handle]);
			CalcBorrowerLegal_1_summ_ValueElement_2.innerHTML = parseInt(values[handle]);
			CalcBorrowerLegal_1_user_summ = parseInt(values[handle]);
			CalcBorrowerLegal_1_result();
		});
	}

	handlerstepCalcBorrowerLegal_1_summ();
	
	/********************************/
	
	// слайд периода займа
	var CalcBorrowerLegal_1_time = document.getElementById('CalcBorrowerLegal_1_time'); // Слайд
	// Настройки слайда
	var CalcBorrowerLegal_1_time_Settings = {
		start: [ 3 ],
		step: 1,
		range: {
			'min': [ 3 ],
			'max': [ 24 ]
		},
		format: wNumb({
			decimals: 1,
			thousand: '',
			postfix: '',
		})
	}

	noUiSlider.create(CalcBorrowerLegal_1_time, CalcBorrowerLegal_1_time_Settings); // запускаем слайд

	// функция выдает значения на лейблы
	function handlerstepCalcBorrowerLegal_1_time() {
		// добавляем к точке лейбл
		$('#CalcBorrowerLegal_1_time .noUi-handle').append('<span id="CalcBorrowerLegal_1_time_value-2" class="nouislider-under-value"></span>');
		// получаем в переменные лейблы
		var CalcBorrowerLegal_1_time_ValueElement_1 = document.getElementById('CalcBorrowerLegal_1_time_value-1');
		var CalcBorrowerLegal_1_time_ValueElement_2 = document.getElementById('CalcBorrowerLegal_1_time_value-2');

		CalcBorrowerLegal_1_time.noUiSlider.on('update', function( values, handle ) {
			CalcBorrowerLegal_1_time_ValueElement_1.innerHTML = parseInt(values[handle]);
			CalcBorrowerLegal_1_time_ValueElement_2.innerHTML = parseInt(values[handle]);
			CalcBorrowerLegal_1_user_time = parseInt(values[handle]);
			CalcBorrowerLegal_1_result();
		});
	}

	handlerstepCalcBorrowerLegal_1_time();

	// Считаем результат
	function CalcBorrowerLegal_1_result() {
		//CalcBorrowerLegal_1_outcome = parseInt((((CalcBorrowerLegal_1_user_summ / 100)*CalcBorrowerLegal_1_user_percent)*CalcBorrowerLegal_1_user_time) + CalcBorrowerLegal_2_user_summ);
		CalcBorrowerLegal_1_outcome = parseInt((((CalcBorrowerLegal_1_user_summ / 100)*CalcBorrowerLegal_1_user_percent)*CalcBorrowerLegal_1_user_time) + CalcBorrowerLegal_1_user_summ);
		$('#CalcBorrowerLegal_1_result').html(CalcBorrowerLegal_1_outcome + " руб.");

	}
	CalcBorrowerLegal_1_result();


/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/

	/* Калькулятор заемщика - Краткосрочные займы */

	/* создаем переменные - значения слайдеров и результат */
	var CalcBorrowerLegal_2_user_summ = 0; // слайдер суммы
	var CalcBorrowerLegal_2_user_time = 0; // слайдер период займа
	var CalcBorrowerLegal_2_user_percent = 2; // слайдер период займа
	var CalcBorrowerLegal_2_outcome; // результат


	// Слайд суммы
	var CalcBorrowerLegal_2_summ = document.getElementById('CalcBorrowerLegal_2_summ'); // Слайд
	// Настройки слайда
	var CalcBorrowerLegal_2_summ_Settings = {
		start: [ 150000 ],
		step: 50000,
		range: {
			'min': [ 150000 ],
			'max': [ 1000000 ]
		},
		format: wNumb({
			decimals: 1,
			thousand: '',
			postfix: '',
		})
	}
	
	noUiSlider.create(CalcBorrowerLegal_2_summ, CalcBorrowerLegal_2_summ_Settings); // запускаем слайд
	
	// функция выдает значения на лейблы
	function handlerstepCalcBorrowerLegal_2_summ() {
		// добавляем к точке лейбл
		$('#CalcBorrowerLegal_2_summ .noUi-handle').append('<span id="CalcBorrowerLegal_2_summ_value-2" class="nouislider-under-value"></span>');
		// получаем в переменные лейблы
		var CalcBorrowerLegal_2_summ_ValueElement_1 = document.getElementById('CalcBorrowerLegal_2_summ_value-1');
		var CalcBorrowerLegal_2_summ_ValueElement_2 = document.getElementById('CalcBorrowerLegal_2_summ_value-2');

		CalcBorrowerLegal_2_summ.noUiSlider.on('update', function( values, handle ) {
			CalcBorrowerLegal_2_summ_ValueElement_1.innerHTML = parseInt(values[handle]);
			CalcBorrowerLegal_2_summ_ValueElement_2.innerHTML = parseInt(values[handle]);
			CalcBorrowerLegal_2_user_summ = parseInt(values[handle]);
			CalcBorrowerLegal_2_result();
		});
	}

	handlerstepCalcBorrowerLegal_2_summ();
	
	/********************************/
	
	// слайд периода займа
	var CalcBorrowerLegal_2_time = document.getElementById('CalcBorrowerLegal_2_time'); // Слайд
	// Настройки слайда
	var CalcBorrowerLegal_2_time_Settings = {
		start: [ 3 ],
		step: 1,
		range: {
			'min': [ 3 ],
			'max': [ 24 ]
		},
		format: wNumb({
			decimals: 1,
			thousand: '',
			postfix: '',
		})
	}

	noUiSlider.create(CalcBorrowerLegal_2_time, CalcBorrowerLegal_2_time_Settings); // запускаем слайд

	// функция выдает значения на лейблы
	function handlerstepCalcBorrowerLegal_2_time() {
		// добавляем к точке лейбл
		$('#CalcBorrowerLegal_2_time .noUi-handle').append('<span id="CalcBorrowerLegal_2_time_value-2" class="nouislider-under-value"></span>');
		// получаем в переменные лейблы
		var CalcBorrowerLegal_2_time_ValueElement_1 = document.getElementById('CalcBorrowerLegal_2_time_value-1');
		var CalcBorrowerLegal_2_time_ValueElement_2 = document.getElementById('CalcBorrowerLegal_2_time_value-2');

		CalcBorrowerLegal_2_time.noUiSlider.on('update', function( values, handle ) {
			CalcBorrowerLegal_2_time_ValueElement_1.innerHTML = parseInt(values[handle]);
			CalcBorrowerLegal_2_time_ValueElement_2.innerHTML = parseInt(values[handle]);
			CalcBorrowerLegal_2_user_time = parseInt(values[handle]);
			CalcBorrowerLegal_2_result();
		});
	}

	handlerstepCalcBorrowerLegal_2_time();

	// Считаем результат
	function CalcBorrowerLegal_2_result() {
		CalcBorrowerLegal_2_outcome = (((CalcBorrowerLegal_2_user_summ / 100)*CalcBorrowerLegal_2_user_percent)*CalcBorrowerLegal_2_user_time) + CalcBorrowerLegal_2_user_summ;
		$('#CalcBorrowerLegal_2_result').html(CalcBorrowerLegal_2_outcome + " руб.");
	}
	CalcBorrowerLegal_2_result();


/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/

	/* Калькулятор заемщика - Краткосрочные займы */

	/* создаем переменные - значения слайдеров и результат */
	var CalcBorrowerLegal_3_user_summ = 0; // слайдер суммы
	var CalcBorrowerLegal_3_user_time = 0; // слайдер период займа
	var CalcBorrowerLegal_3_user_percent = 2; // слайдер период займа
	var CalcBorrowerLegal_3_outcome; // результат


	// Слайд суммы
	var CalcBorrowerLegal_3_summ = document.getElementById('CalcBorrowerLegal_3_summ'); // Слайд
	// Настройки слайда
	var CalcBorrowerLegal_3_summ_Settings = {
		start: [ 150000 ],
		step: 50000,
		range: {
			'min': [ 150000 ],
			'max': [ 1000000 ]
		},
		format: wNumb({
			decimals: 1,
			thousand: '',
			postfix: '',
		})
	}
	
	noUiSlider.create(CalcBorrowerLegal_3_summ, CalcBorrowerLegal_3_summ_Settings); // запускаем слайд
	
	// функция выдает значения на лейблы
	function handlerstepCalcBorrowerLegal_3_summ() {
		// добавляем к точке лейбл
		$('#CalcBorrowerLegal_3_summ .noUi-handle').append('<span id="CalcBorrowerLegal_3_summ_value-2" class="nouislider-under-value"></span>');
		// получаем в переменные лейблы
		var CalcBorrowerLegal_3_summ_ValueElement_1 = document.getElementById('CalcBorrowerLegal_3_summ_value-1');
		var CalcBorrowerLegal_3_summ_ValueElement_2 = document.getElementById('CalcBorrowerLegal_3_summ_value-2');

		CalcBorrowerLegal_3_summ.noUiSlider.on('update', function( values, handle ) {
			CalcBorrowerLegal_3_summ_ValueElement_1.innerHTML = parseInt(values[handle]);
			CalcBorrowerLegal_3_summ_ValueElement_2.innerHTML = parseInt(values[handle]);
			CalcBorrowerLegal_3_user_summ = parseInt(values[handle]);
			CalcBorrowerLegal_3_result();
		});
	}

	handlerstepCalcBorrowerLegal_3_summ();
	
	/********************************/
	
	// слайд периода займа
	var CalcBorrowerLegal_3_time = document.getElementById('CalcBorrowerLegal_3_time'); // Слайд
	// Настройки слайда
	var CalcBorrowerLegal_3_time_Settings = {
		start: [ 3 ],
		step: 1,
		range: {
			'min': [ 3 ],
			'max': [ 24 ]
		},
		format: wNumb({
			decimals: 1,
			thousand: '',
			postfix: '',
		})
	}

	noUiSlider.create(CalcBorrowerLegal_3_time, CalcBorrowerLegal_3_time_Settings); // запускаем слайд

	// функция выдает значения на лейблы
	function handlerstepCalcBorrowerLegal_3_time() {
		// добавляем к точке лейбл
		$('#CalcBorrowerLegal_3_time .noUi-handle').append('<span id="CalcBorrowerLegal_3_time_value-2" class="nouislider-under-value"></span>');
		// получаем в переменные лейблы
		var CalcBorrowerLegal_3_time_ValueElement_1 = document.getElementById('CalcBorrowerLegal_3_time_value-1');
		var CalcBorrowerLegal_3_time_ValueElement_2 = document.getElementById('CalcBorrowerLegal_3_time_value-2');

		CalcBorrowerLegal_3_time.noUiSlider.on('update', function( values, handle ) {
			CalcBorrowerLegal_3_time_ValueElement_1.innerHTML = parseInt(values[handle]);
			CalcBorrowerLegal_3_time_ValueElement_2.innerHTML = parseInt(values[handle]);
			CalcBorrowerLegal_3_user_time = parseInt(values[handle]);
			CalcBorrowerLegal_3_result();
		});
	}

	handlerstepCalcBorrowerLegal_3_time();

	// Считаем результат
	function CalcBorrowerLegal_3_result() {
		CalcBorrowerLegal_3_outcome = (((CalcBorrowerLegal_3_user_summ / 100)*CalcBorrowerLegal_3_user_percent)*CalcBorrowerLegal_3_user_time) + CalcBorrowerLegal_3_user_summ;
		$('#CalcBorrowerLegal_3_result').html(CalcBorrowerLegal_3_outcome + " руб.");
	}
	CalcBorrowerLegal_3_result();


/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/
/**********************************************************************************************/

	/***************************/

	/**/
	/**/
	/* Открываем слайдеры физ лиц или юр лиц на вкладке заемщика */
	/* switch */
	

	$('#calculator-2 span.calculator_switch[data-switch-pos]').find('i').click(function() {
		if ($('#calculator-2 span.calculator_switch').attr('data-switch-pos') == 1) {
			$('.borrower-calculator-legal').hide();
			$('.borrower-calculator-phisic').show();
		} else if ($('#calculator-2 span.calculator_switch').attr('data-switch-pos') == 2) {
			$('.borrower-calculator-phisic').hide();
			$('.borrower-calculator-legal').show();
		}
	});

	/* Slick Slider */
	$('#slider-fade').slick({
		dots: true,
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear',
		arrows: false,
		dots: false,
		autoplay: true,
		autoplaySpeed: 5000
	});
	if ($('div').is('.slide')) {
		var h = $('.slide').height();
		$('.header__calculator-block').css('height', h);
	}
	$('.slider-nav-btn-left').click(function() {
		$('#slider-fade').slick('slickPrev');
	});
	$('.slider-nav-btn-right').click(function() {
		$('#slider-fade').slick('slickNext');
	});
	/* /Slick Slider */

	/* Slick Slider - Reviews */
	$('#reviews__slider').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 3,
		dots: false,
		arrows: true,
		autoplay: true,
		autoplaySpeed: 5000,
		responsive: [
		{
			breakpoint: 1024,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
				infinite: true
			}
		},
		{
			breakpoint: 1000,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true
			}
		},
		{
			breakpoint: 700,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
				infinite: true
				//arrows: false
			}
		}

		]
	});
	/* /Slick Slider - Reviews */
	// 
	/* проверка вкладок - открываем/скрываем калькуляторы */
	function checkBorrowerPhisicCalc() {
		$('.borrower-calculator-phisic .calculator__sliders-wrap').hide(); // сначала все прячем
		var x = $('.borrower-calculator-phisic').find('.calculator__tab.active').attr('data-value');
		$('.borrower-calculator-phisic').find('.calculator__sliders-wrap[data-calc-wrap='+x+']').show();
	}
	checkBorrowerPhisicCalc();
	$('.borrower-calculator-phisic').find('.calculator__tab').click(function() {
		checkBorrowerPhisicCalc();
	});
	function checkBorrowerLegalCalc() {
		$('.borrower-calculator-legal .calculator__sliders-wrap').hide(); // сначала все прячем
		var x = $('.borrower-calculator-legal').find('.calculator__tab.active').attr('data-value');
		$('.borrower-calculator-legal').find('.calculator__sliders-wrap[data-calc-wrap='+x+']').show();
	}
	checkBorrowerLegalCalc();
	$('.borrower-calculator-legal').find('.calculator__tab').click(function() {
		checkBorrowerLegalCalc();
	});
});