jQuery(document).ready(function () {

	// get current user agent
	var userAgent = navigator.userAgent.toLowerCase();
	// if android exits index > -1 will be returned
	var isAndroid = userAgent.indexOf("android") > -1;
	// if isAndroid == true then our double tab script will be executed
	if (isAndroid === true && navigator.maxTouchPoints > 0) {
		Common.doubleTapToGo("#cm_navigation li:has(ul)");
	}
});

(function ($) {
	$(document).ready(function () {

		function selectorSearch(hamburger, selector) {
			[].forEach.call(hamburger, function (div) {
				// do whatever
				div.style.backgroundColor = window.getComputedStyle(selector).getPropertyValue('color');
			});
		}

		function toggleNavigationColor(selector, element) {
			try {
				var toggleNavigation = selector;
				if (element === 'style') {
					toggleNavigation.removeAttribute("style");
				} else {
					toggleNavigation.style.backgroundColor = window.getComputedStyle(element).getPropertyValue('background-color');
					toggleNavigation.style.opacity = '0.75';
				}
			} catch (e) {
				//instruction
			}

		}

		function calculateElmentHeight(element) {
			return parseInt(window.getComputedStyle(element).height) + element.offsetTop + parseInt(window.getComputedStyle(element).getPropertyValue('padding-bottom')) + parseInt(window.getComputedStyle(element).getPropertyValue('padding-top'));
		}

		function changeBurgerColor() {
			var contentSelector = document.querySelector('.table_color_right'),
				keyvisualSelector = document.querySelector('.cm-template-keyvisual__media'),
				headerSelector = document.querySelector('.cm-template-keyvisual__media'),
				footerSelector = document.querySelector('.cm-templates-footer-container'),
				hamburgerContainer = document.querySelector('.toggle_navigation--background'),
				hamburgerLines = document.querySelectorAll('.toggle_navigation--background > div'),
				scrollPosition = window.pageYOffset;

			const BREAKPOINT = 1250;

			if (window.innerWidth <= BREAKPOINT) {
				if (contentSelector.offsetTop > 0) {
					if (scrollPosition >= contentSelector.offsetTop && scrollPosition <= calculateElmentHeight(contentSelector)) {
						[].forEach.call(hamburgerLines, function (div) {
							// do whatever

							div.style.backgroundColor = window.getComputedStyle(contentSelector).getPropertyValue('color');
						});
						toggleNavigationColor(hamburgerContainer, contentSelector);
					}
				}

				if (footerSelector.offsetTop > 0) {
					if (scrollPosition >= footerSelector.offsetTop && scrollPosition <= calculateElmentHeight(footerSelector)) {
						[].forEach.call(hamburgerLines, function (div) {
							// do whatever

							div.style.backgroundColor = window.getComputedStyle(footerSelector).getPropertyValue('color');
						});
						toggleNavigationColor(hamburgerContainer, footerSelector);
					}
				}

				if (parseInt(window.getComputedStyle(keyvisualSelector).height) > 0) {
					var removeSelectorClasses = keyvisualSelector;
				} else {
					var removeSelectorClasses = headerSelector;
				}

				if (scrollPosition <= (removeSelectorClasses.offsetTop + parseInt(window.getComputedStyle(removeSelectorClasses).height))) {
					toggleNavigationColor(hamburgerContainer, "style");
					[].forEach.call(hamburgerLines, function (div) {
						// do whatever
						div.removeAttribute("style");
					});
				}

			} // if Breakpoint 
		} // function

		window.addEventListener('scroll', function (e) {
			changeBurgerColor();
		});
		window.addEventListener('resize', function (e) {
			changeBurgerColor();
		});


		//Toggle Mobile Navigation
		$('.toggle_navigation').click(function () {
			$('body').toggleClass('open_navigation');
			toggleNavigationColor(document.querySelector('.toggle_navigation--background'), "style");
		});

		//Open 2nd + 3rd Layer Nav on Click
		function addSubnaviIconForClick() {
			var hasSubnavigation = document.querySelectorAll('#mobile_cm_mainnavigation .cm_has_subnavigation');

			for (var i = 0; i < hasSubnavigation.length; i++) {
				hasSubnavigation[i].insertAdjacentHTML('beforeend', '<span class="cm-templates-icon__plus-mobile fas fa-chevron-right"></span>');
			}

			var openSubmenuByClick = document.querySelectorAll('#mobile_cm_mainnavigation .cm_has_subnavigation .cm-templates-icon__plus-mobile');

			for (var x = 0; x < openSubmenuByClick.length; x++) {
				openSubmenuByClick[x].addEventListener('click', function () {
					this.parentNode.classList.toggle('open_subnav');

					if (this.classList.contains('fa-chevron-right')) {
						this.classList.replace('fa-chevron-right', 'fa-chevron-down');
					} else {
						this.classList.replace('fa-chevron-down', 'fa-chevron-right');
					}
				});
			}
		}

		addSubnaviIconForClick();


		// Click to Scroll on Top
		$('.scroll-up').click(function () {
			goToByScroll('body');
		});

		function setCmEmptyForElements(element, hiddenElement) {
			if (jQuery(element).hasClass('cm_empty')) {
				if (hiddenElement == undefined) {
					jQuery(element).addClass('cm-templates-empty');
				} else {
					jQuery(hiddenElement).addClass('cm-templates-empty');
				}
			}
		}


		//Check if user is in chrome
		var inChrome = (navigator.userAgent.toString().toLowerCase().indexOf("chrome") != -1);

		if (inChrome == true) {
			document.querySelector('.title_wrapper').classList.add('cm-templates-title--word-break');
		}


		// remove cm_empty container
		setTimeout(function () {

			setCmEmptyForElements('#logo');
			setCmEmptyForElements('#title');
			setCmEmptyForElements('#subtitle');
			setCmEmptyForElements('#keyvisual');
			setCmEmptyForElements('.cm-templates-footer-container');
			setCmEmptyForElements('.cm-templates-footer');

			if (jQuery('#title').hasClass('cm_empty') && jQuery('#subtitle').hasClass('cm_empty')) {
				jQuery('.title_wrapper').addClass('cm-templates-empty');
			}
			if (jQuery('#keyvisual').hasClass('cm_empty')) {
				jQuery('#keyvisual').addClass('cm-templates-container-distanceTop');
			}

			if (jQuery('#widgetbar_site_1').hasClass('cm_empty') && jQuery('#widgetbar_site_2').hasClass('cm_empty') && jQuery('#widgetbar_site_3').hasClass('cm_empty')) {
				jQuery('.cm-templates-sidebar-one').addClass('cm-templates-empty');
			}

			if (jQuery('#widgetbar_page_1').hasClass('cm_empty') && jQuery('#widgetbar_page_2').hasClass('cm_empty') && jQuery('#widgetbar_page_3').hasClass('cm_empty')) {
				jQuery('.cm-templates-sidebar-two').addClass('cm-templates-empty');
			}

		}, 100);

	});
})(jQuery);

function goToByScroll(id) {
	jQuery('html,body').animate({ scrollTop: jQuery(id).offset().top }, 'slow');
}



