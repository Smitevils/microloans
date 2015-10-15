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
		$('#calculator-2').css('margin-left', calculator_second_margin-1);
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
});