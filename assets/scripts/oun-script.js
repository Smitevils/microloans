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
	/* switch */
	$('span.calculator_switch[data-switch-pos] i').click(function(event) {
		event.preventDefault();
		if ($('span.calculator_switch').attr('data-switch-pos') == 1) {
			$('span.calculator_switch').attr('data-switch-pos', '2');
		} else if ($('span.calculator_switch').attr('data-switch-pos') == 2) {
			$('span.calculator_switch').attr('data-switch-pos', '1');
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
	var stepSlider = document.getElementById('nouislider-1');
	noUiSlider.create(stepSlider, {
		start: [ 4000 ],
		step: 1000,
		range: {
			'min': [  2000 ],
			'max': [ 10000 ]
		},
		format: wNumb({
			decimals: 0,
			thousand: '',
			postfix: '',
		})
	});
	$('#nouislider-1 .noUi-handle').append('<span id="nouislider-1-value-2" class="nouislider-under-value"></span>');
	var stepSliderValueElement = document.getElementById('nouislider-1-value-1');
	var stepSliderValueElement2 = document.getElementById('nouislider-1-value-2');

	stepSlider.noUiSlider.on('update', function( values, handle ) {
		stepSliderValueElement.innerHTML = values[handle];
	});
	stepSlider.noUiSlider.on('update', function( values, handle ) {
		stepSliderValueElement2.innerHTML = values[handle];
	});
	/**/
	var stepSlider2 = document.getElementById('nouislider-2');
	noUiSlider.create(stepSlider2, {
		start: [ 0 ],
		step: 10,
		range: {
			'min': [ 0 ],
			'max': [ 1000 ]
		},
		format: wNumb({
			decimals: 0,
			thousand: '',
			postfix: '',
		})
	});
	$('#nouislider-2 .noUi-handle').append('<span id="nouislider-2-value-2" class="nouislider-under-value"></span>');
	var stepSlider2ValueElement = document.getElementById('nouislider-2-value-1');
	var stepSlider2ValueElement2 = document.getElementById('nouislider-2-value-2');

	stepSlider2.noUiSlider.on('update', function( values, handle ) {
		stepSlider2ValueElement.innerHTML = values[handle];
	});
	stepSlider2.noUiSlider.on('update', function( values, handle ) {
		stepSlider2ValueElement2.innerHTML = values[handle];
	});
	/**/
	var stepSlider3 = document.getElementById('nouislider-3');
	noUiSlider.create(stepSlider3, {
		start: [ 0 ],
		step: 10,
		range: {
			'min': [ 0 ],
			'max': [ 1000 ]
		},
		format: wNumb({
			decimals: 0,
			thousand: '',
			postfix: '',
		})
	});
	$('#nouislider-3 .noUi-handle').append('<span id="nouislider-3-value-2" class="nouislider-under-value"></span>');
	var stepSlider3ValueElement = document.getElementById('nouislider-3-value-1');
	var stepSlider3ValueElement3 = document.getElementById('nouislider-3-value-2');

	stepSlider3.noUiSlider.on('update', function( values, handle ) {
		stepSlider3ValueElement.innerHTML = values[handle];
	});
	stepSlider3.noUiSlider.on('update', function( values, handle ) {
		stepSlider3ValueElement3.innerHTML = values[handle];
	});
	/**/
	var stepSlider4 = document.getElementById('nouislider-4');
	noUiSlider.create(stepSlider4, {
		start: [ 0 ],
		step: 10,
		range: {
			'min': [ 0 ],
			'max': [ 1000 ]
		},
		format: wNumb({
			decimals: 0,
			thousand: '',
			postfix: '',
		})
	});
	$('#nouislider-4 .noUi-handle').append('<span id="nouislider-4-value-2" class="nouislider-under-value"></span>');
	var stepSlider4ValueElement = document.getElementById('nouislider-4-value-1');
	var stepSlider4ValueElement4 = document.getElementById('nouislider-4-value-2');

	stepSlider4.noUiSlider.on('update', function( values, handle ) {
		stepSlider4ValueElement.innerHTML = values[handle];
	});
	stepSlider4.noUiSlider.on('update', function( values, handle ) {
		stepSlider4ValueElement4.innerHTML = values[handle];
	});
	/**/
	var stepSlider5 = document.getElementById('nouislider-5');
	noUiSlider.create(stepSlider5, {
		start: [ 0 ],
		step: 10,
		range: {
			'min': [ 0 ],
			'max': [ 1000 ]
		},
		format: wNumb({
			decimals: 0,
			thousand: '',
			postfix: '',
		})
	});
	$('#nouislider-5 .noUi-handle').append('<span id="nouislider-5-value-2" class="nouislider-under-value"></span>');
	var stepSlider5ValueElement = document.getElementById('nouislider-5-value-1');
	var stepSlider5ValueElement5 = document.getElementById('nouislider-5-value-2');

	stepSlider5.noUiSlider.on('update', function( values, handle ) {
		stepSlider5ValueElement.innerHTML = values[handle];
	});
	stepSlider5.noUiSlider.on('update', function( values, handle ) {
		stepSlider5ValueElement5.innerHTML = values[handle];
	});
	/**/
	var stepSlider6 = document.getElementById('nouislider-6');
	noUiSlider.create(stepSlider6, {
		start: [ 0 ],
		step: 10,
		range: {
			'min': [ 0 ],
			'max': [ 1000 ]
		},
		format: wNumb({
			decimals: 0,
			thousand: '',
			postfix: '',
		})
	});
	$('#nouislider-6 .noUi-handle').append('<span id="nouislider-6-value-2" class="nouislider-under-value"></span>');
	var stepSlider6ValueElement = document.getElementById('nouislider-6-value-1');
	var stepSlider6ValueElement6 = document.getElementById('nouislider-6-value-2');

	stepSlider6.noUiSlider.on('update', function( values, handle ) {
		stepSlider6ValueElement.innerHTML = values[handle];
	});
	stepSlider6.noUiSlider.on('update', function( values, handle ) {
		stepSlider6ValueElement6.innerHTML = values[handle];
	});
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

});