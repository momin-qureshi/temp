(function ( $, x5engine ) {
	var x = x5engine,
		s = x.settings,
		p = s.currentPath,
		b = x.boot;

	s.siteId = '48E81B5CFBF6DAF2ACDF53F2D1DAF4F5';
	s.version = '2022-2-11-0';
	b.push(function () {
		x.setupDateTime();
		x.imAccess.showLogout();
		x.utils.autoHeight();
		x.cart.ui.updateWidget();
		x.imGrid.init();
	});
	b.push(function () {
		x.stickyBar({
			enabledBreakpoints: ['ea2f0ee4d5cbb25e1ee6c7c4378fee7b','d2f9bff7f63c0d6b7c7d55510409c19b','72e5146e7d399bc2f8a12127e43469f1','5ecdcca63de80fd3d4fbb36295d22b7d']
		});
	});

	// Links
	$.extend(s.links, {
		'htmlPlaceholder' : '<!--html_content_placeholder-->',
		'cssPlaceholder' : '<!--css_class_placeholder-->',
		'baseUrlPlaceholder' : '<!--base_url_placeholder-->'
	});


	// ShowBox
	$.extend(s.imShowBox, {
		"effect": "none", "customEffect": "generic animated none",
		'transitionEffect' : 'fade',
		'fullScreenEnabled' : true,
		'zoomEnabled' : true,
		'showProgress' : true,
		'shadow' : '',
		'background' : 'rgba(55, 71, 79, 1)',
		'backgroundBlur' : false,
		'borderWidth' : {
			'top': 0,
			'right': 0,
			'bottom': 0,
			'left': 0
		},
		'buttonLeft': '<svg class=\"im-common-left-button\"  xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 50 50\"><defs><style>.a{fill:#fff;opacity:0.5;}.b{fill:#3e3d40;}<\/style><\/defs><rect class=\"a\" x=\"5.02\" y=\"5\" width=\"39.94\" height=\"39.94\" rx=\"3.54\" ry=\"3.54\"/><path class=\"b\" d=\"M23.75,9.2a1.17,1.17,0,0,1,1.63,0,1.13,1.13,0,0,1,0,1.61l-13,13.3,27.64-.22h0a1.14,1.14,0,1,1,0,2.28l-27.63.22L25.94,39.16a1.13,1.13,0,0,1,0,1.61,1.17,1.17,0,0,1-.83.34,1.14,1.14,0,0,1-.8-.32L9.46,26.65a2,2,0,0,1-.05-2.79Z\"/><\/svg>',
		'buttonRight': '<svg class=\"im-common-right-button\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 50 50\"><defs><style>.a{fill:#fff;opacity:0.5;}.b{fill:#3e3d40;}<\/style><\/defs><rect class=\"a\" x=\"5.02\" y=\"4.57\" width=\"39.94\" height=\"39.94\" rx=\"3.54\" ry=\"3.54\"/><path class=\"b\" d=\"M26.32,8.77a1.17,1.17,0,0,0-1.63,0,1.13,1.13,0,0,0,0,1.61l13,13.3L10,23.41h0a1.14,1.14,0,1,0,0,2.28l27.63.22L24.14,38.73a1.13,1.13,0,0,0,0,1.61,1.17,1.17,0,0,0,.83.34,1.14,1.14,0,0,0,.8-.32L40.61,26.22a2,2,0,0,0,.05-2.79Z\"/><\/svg>',
		'buttonClose': '<svg class=\"im-common-close-button\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 50 50\"><defs><style>.a{fill:#fff;opacity:0.5;}.b{fill:#3e3d40;}<\/style><\/defs><rect class=\"a\" x=\"5.02\" y=\"5.03\" width=\"39.94\" height=\"39.94\" rx=\"3.54\" ry=\"3.54\"/><path class=\"b\" d=\"M36.55,34.69l-9.76-9.76,9.7-9.82a1.21,1.21,0,0,0,0-1.7,1.2,1.2,0,0,0-1.69,0L25.1,23.24l-9.77-9.76a1.18,1.18,0,0,0-.84-.35h0a1.2,1.2,0,0,0-.84,2.05l9.76,9.77-9.7,9.82a1.21,1.21,0,0,0,0,1.7,1.18,1.18,0,0,0,.84.35h0a1.18,1.18,0,0,0,.82-.35l9.69-9.82,9.76,9.76a1.2,1.2,0,0,0,.87.35,1.17,1.17,0,0,0,.82-.36A1.21,1.21,0,0,0,36.55,34.69Z\"/><\/svg>',
		'buttonEnterFS': '<svg class=\"im-common-enter-fs-button\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 50 50\"><defs><style>.a{fill:#fff;opacity:0.5;}.b{fill:#3e3d40;}<\/style><\/defs><rect class=\"a\" x=\"5.02\" y=\"5.04\" width=\"39.94\" height=\"39.94\" rx=\"3.54\" ry=\"3.54\"/><path class=\"b\" d=\"M39.1,21.42a1,1,0,0,0,1-1v-9.5a1,1,0,0,0-1-1H29.6a1,1,0,1,0,0,2h7.06L25,23.6,13.31,11.92h7.06a1,1,0,0,0,0-2h-9.5a1,1,0,0,0-1,1v9.5a1,1,0,1,0,2,0V13.35L23.56,25,11.88,36.7V29.64a1,1,0,0,0-2,0v9.5a1,1,0,0,0,1,1h9.5a1,1,0,0,0,0-2H13.31L25,26.45,36.66,38.13H29.6a1,1,0,1,0,0,2h9.5a1,1,0,0,0,1-1v-9.5a1,1,0,0,0-2,0V36.7L26.41,25,38.09,13.35v7.06A1,1,0,0,0,39.1,21.42Z\"/><\/svg>',
		'buttonExitFS': '<svg class=\"im-common-exit-fs-button\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 50 50\"><defs><style>.a{fill:#3e3d40;opacity:0.5;}.b{fill:#f6f6f6;}<\/style><\/defs><rect class=\"a\" x=\"5.03\" y=\"5.03\" width=\"39.94\" height=\"39.94\" rx=\"3.54\" ry=\"3.54\"/><path class=\"b\" d=\"M35.37,13.75l-12.9,13V19.42a1.15,1.15,0,0,0-2.3,0V29.53a1.15,1.15,0,0,0,1.15,1.15H31.69a1.15,1.15,0,0,0,0-2.3H24.1l12.9-13a1.15,1.15,0,0,0-1.63-1.63Z\"/><path class=\"b\" d=\"M37.33,18.7a1.18,1.18,0,0,0-1.18,1.18v15H13.85V15.08H30.43a1.18,1.18,0,1,0,0-2.36H12.67a1.18,1.18,0,0,0-1.18,1.18V36.1a1.18,1.18,0,0,0,1.18,1.18H37.33a1.18,1.18,0,0,0,1.18-1.18V19.88A1.18,1.18,0,0,0,37.33,18.7Z\"/><\/svg>',
		'buttonZoomIn': '<svg class=\"im-common-zoom-in-button\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 50 50\"><defs><style>.a{fill:#fff;opacity:0.5;}.b{fill:#3e3d40;}<\/style><\/defs><rect class=\"a\" x=\"5.02\" y=\"5.06\" width=\"39.94\" height=\"39.94\" rx=\"3.54\" ry=\"3.54\"/><path class=\"b\" d=\"M40.87,39.4l-9.68-9.68a12.84,12.84,0,1,0-1.64,1.64L39.23,41a1.16,1.16,0,1,0,1.64-1.64Zm-9-17.82A10.45,10.45,0,1,1,28.8,14.2,10.39,10.39,0,0,1,31.86,21.58Z\"/><path class=\"b\" d=\"M27.39,20.26H22.6V16a1.16,1.16,0,0,0-1.16-1.16h-.28A1.16,1.16,0,0,0,20,16v4.3H15.21a1.12,1.12,0,0,0-1.12,1.11v.27a1.12,1.12,0,0,0,1.12,1.12H20v4.3a1.16,1.16,0,0,0,1.16,1.16h.28a1.16,1.16,0,0,0,1.16-1.16v-4.3h4.79a1.12,1.12,0,0,0,1.12-1.12v-.27A1.12,1.12,0,0,0,27.39,20.26Z\"/><\/svg>',
		'buttonZoomOut': '<svg class=\"im-common-zoom-out-button\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 50 50\"><defs><style>.a{fill:#fff;opacity:0.5;}.b{fill:#3e3d40;}<\/style><\/defs><rect class=\"a\" x=\"5.02\" y=\"5.03\" width=\"39.94\" height=\"39.94\" rx=\"3.54\" ry=\"3.54\"/><path class=\"b\" d=\"M40.87,39.37l-9.68-9.68a12.84,12.84,0,1,0-1.64,1.64L39.23,41a1.16,1.16,0,1,0,1.64-1.64Zm-9-17.82a10.45,10.45,0,1,1-3.06-7.38A10.39,10.39,0,0,1,31.86,21.55Z\"/><path class=\"b\" d=\"M15.21,20.23H27.39a1.12,1.12,0,0,1,1.12,1.12v.27a1.12,1.12,0,0,1-1.12,1.12H15.21a1.12,1.12,0,0,1-1.12-1.12v-.27A1.11,1.11,0,0,1,15.21,20.23Z\"/><\/svg>',
		'buttonZoomRestore': '<svg class=\"im-common-zoom-restore-button\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 50 50\"><defs><style>.a{fill:#fff;opacity:0.5;}.b{fill:#3e3d40;}<\/style><\/defs><rect class=\"a\" x=\"5.02\" y=\"5.03\" width=\"39.94\" height=\"39.94\" rx=\"3.54\" ry=\"3.54\"/><path class=\"b\" d=\"M41,39.35,29.68,28.26l-.44.48-.15.16a10.57,10.57,0,1,1,3.1-7.48A10.36,10.36,0,0,1,32,23.34l-4.79-3.46a.9.9,0,0,0-1.06,1.46l6.09,4.4A1.3,1.3,0,0,0,33,26h0a1.32,1.32,0,0,0,.78-.25l6-4.52a.9.9,0,1,0-1.09-1.44L34.1,23.25a12.18,12.18,0,0,0,.16-1.82,12.74,12.74,0,1,0-4.5,9.62l9.76,9.76A1,1,0,1,0,41,39.35Zm-.33,1.13h0Z\"/><\/svg>',
		'borderRadius' : '3px 3px 3px 3px',
		'borderColor' : 'rgba(55, 71, 79, 1) rgba(55, 71, 79, 1) rgba(55, 71, 79, 1) rgba(55, 71, 79, 1)',
		'textColor' : 'rgba(0, 0, 0, 1)',
		'fontFamily' : 'Cormorant',
		'fontStyle' : 'normal',
		'fontWeight' : 'normal',
		'fontSize' : '12pt',
		'textAlignment' : 'left',
		'boxColor' : 'rgba(255, 255, 255, 1)',
		'opacity' : 0.9,
		'radialBg' : false // Works only in Mozilla Firefox and Google Chrome
	});

	// PopUp
	$.extend(s.imPopUp, {
		'effect' : 'websitex5.bl.project.templates.properties.showboxanimation',
		'width' : 500,
		'shadow' : '',
		'background' : 'rgba(55, 71, 79, 1)',
		'backgroundBlur' : false,
		'borderRadius' : 10,
		'textColor' : 'rgba(0, 0, 0, 1)',
		'boxColor' : 'rgba(255, 255, 255, 1)',
		'opacity' : 0.9
	});

	// Tip
	$.extend(s.imTip, {
		'borderRadius' : 1,
		'arrow' : true,
		'shape' : 'classic',
		'position' : 'top',
		'effect' : 'none',
		'showTail' : true
	});

	// PageToTop
	$.extend(s.imPageToTop, {
		'imageFile' : 'style/page-to-top.png'
	});

	// Captcha
	b.push(function () {
		x5engine.captcha.instance = new x5engine.captcha.x5captcha({
			"phpfile": "captcha/x5captcha.php",
		});
	}, false, 'first');
	b.push(function() { x.passwordpolicy.init({ "requiredPolicy": "false", "minimumCharacters": "6", "includeUppercase": "false", "includeNumeric": "false", "includeSpecial": "false" });
	});

	// BreakPoints
	s.breakPoints.push({"name": "Desktop", "hash": "ea2f0ee4d5cbb25e1ee6c7c4378fee7b", "start": "max", "end": 1150.0, "fluid": false});
	s.breakPoints.push({"name": "Breakpoint 1", "hash": "d2f9bff7f63c0d6b7c7d55510409c19b", "start": 1149.9, "end": 720.0, "fluid": false});
	s.breakPoints.push({"name": "Mobile", "hash": "72e5146e7d399bc2f8a12127e43469f1", "start": 719.9, "end": 480.0, "fluid": false});
	s.breakPoints.push({"name": "Mobile Fluid", "hash": "5ecdcca63de80fd3d4fbb36295d22b7d", "start": 479.9, "end": 0.0, "fluid": true});

	b.push(function () { x.cookielaw.activateScripts() });

	s.loaded = true;
})( _jq, x5engine );
