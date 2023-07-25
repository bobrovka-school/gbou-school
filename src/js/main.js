!(function($){
	// Default fancybox options
	var $style = $("<style></style>")[0];
	$("head").append($style);
	$.fancybox.defaults.parentEl = ".fancybox__wrapper";
	$.fancybox.defaults.transitionEffect = "circular";
	$.fancybox.defaults.transitionDuration = 500;
	$.fancybox.defaults.lang = "ru";
	$.fancybox.defaults.i18n.ru = {
		CLOSE: "Закрыть",
		NEXT: "Следующий",
		PREV: "Предыдущий",
		ERROR: "Запрошенный контент не может быть загружен.<br/>Повторите попытку позже.",
		PLAY_START: "Начать слайдшоу",
		PLAY_STOP: "Остановить слайдшоу",
		FULL_SCREEN: "Полный экран",
		THUMBS: "Миниатюры",
		DOWNLOAD: "Скачать",
		SHARE: "Поделиться",
		ZOOM: "Увеличить"
	};
	$.fancybox.defaults.onInit = function(instance, slide) {
		if(!$.fancybox.isMobile && document.body.scrollHeight > window.innerHeight) {
			let wr = window.innerWidth - (document.body.clientWidth - 2);
			$style.innerText = `body.fancybox-active.compensate-for-scrollbar .bodywrapp::after {background-position: calc(100% - ${wr}px) 0;}`;
		}
	};
	$.fancybox.defaults.afterClose = function(instance, slide) {
		$style.innerText = ``;
	};

	/**
	 * Slick
	 */
	$('#slick-header').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 5000,
		dots: false,
		arrows: true
	});
	$(document)
		.on('click', function(e){
			$('[role="navigation"]').removeClass('open-menu');
			$('button i').removeClass('icon-menu-close').addClass('icon-menu-open')
		})
		.on('click', '[data-menu-href]', function(e){
			e.preventDefault();
			let _this = $(e.target),
				url = _this.data('menu-href');
			window.location.href = url;
			return !1;
		})
		.on('click', '[role="navigation"] button', function(e){
			e.preventDefault();
			let _this = $(e.target),
				_i = $('i', _this),
				parent = _this.parent('[role="navigation"]');
			parent.hasClass('open-menu') ? (
				parent.removeClass('open-menu'),
				_i.removeClass('icon-menu-close').addClass('icon-menu-open')
			) : (
				parent.addClass('open-menu'),
				_i.addClass('icon-menu-close').removeClass('icon-menu-open')
			);
			return !1;
		});
	new isvek.Bvi({
		target: '.eya-panel',
		builtElements: true,
		images: true,
		lang: 'ru-RU',
		panelFixed: false,
		speech: false,
		fontSize: 14
	});
}(jQuery));