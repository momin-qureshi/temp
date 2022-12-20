<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'site_id' => '48E81B5CFBF6DAF2ACDF53F2D1DAF4F5',
	'url' => 'https://queenofthesweets.com/',
	'homepage_url' => 'https://queenofthesweets.com/index.html',
	'icon' => '',
	'version' => '2022.2.11.0',
	'sitename' => 'Queen of the Sweets',
	'lang_code' => 'en-GB',
	'public_folder' => '',
	'salt' => 'tt50ceqm8t1d1eyorjws47wcw069h52eyns3tmmvid3o36gg8hwnkrslwt4b8',
	'common_email_sender_addres' => 'jackie@queenofthesweets.com'
);
/*
|-------------------------------
|	PASSWORD POLICY
|-------------------------------
*/

$imSettings['password_policy'] = array(
	'required_policy' => false,
	'minimum_characters' => '6',
	'include_uppercase' => false,
	'include_numeric' => false,
	'include_special' => false
);
/*
|-------------------------------
|	Captcha
|-------------------------------
*/ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label for=\"gphiiyev-imCpt\">Check word:</label><br />
			<input type=\"text\" id=\"gphiiyev-imCpt\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";


$imSettings['admin'] = array(
	'icon' => 'admin/images/logo_6xbg2euz.png',
	'notification_public_key' => 'f84fff32bf83b7dd',
	'notification_private_key' => '62f963c0ef76fc46',
	'enable_manager_notifications' => true,
	'theme' => 'orange',
	'extra-dashboard' => array(),
	'extra-links' => array()
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array(
	'0gehgqrj' => array(
		'description' => '',
		'host' => 'localhost',
		'database' => 'trt4kj9m_db',
		'user' => 'trt4kj9m_db',
		'password' => 'bO4#dS3%mK0&',
		'table_prefix' => ''
	)
);
$ecommerce = Configuration::getCart();
// Setup the coupon data
$couponData = array();
$couponData['products'] = array();
// Setup the cart
$ecommerce->setPublicFolder('');
$ecommerce->setCouponData($couponData);
$ecommerce->setSettings(array(
	'page_url' => 'https://queenofthesweets.com/cart/index.html',
	'force_sender' => false,
	'mail_btn_css' => 'display: inline-block; text-decoration: none; color: rgba(0, 255, 255, 1); background-color: rgba(98, 89, 147, 1); padding: 37px 52px 37px 52px; border-style: solid; border-width: 4px 4px 4px 4px; border-color: rgba(0, 255, 255, 1) rgba(0, 255, 255, 1) rgba(0, 255, 255, 1) rgba(0, 255, 255, 1); border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;',
	'email_opening' => 'Dear Customer,<br /><br />Thank you for your order. Our representative will contact you within 24 business hours.<br /><br />Below is the list of the products you have ordered.',
	'email_closing' => 'Please contact us if you need further information.<br /><br />Best Regards,<br />Sales Staff',
	'email_payment_opening' => 'Dear Customer,<br /><br />Thank you for your purchase. We confirm that we have correctly received your payment and that the order will be processed as soon as possible.<br /><br />Below you will find the list of the products you have ordered, the billing and shipping details.',
	'email_payment_closing' => 'Please contact us if you need further information.<br /><br />Best Regards, our Sales Staff.',
	'email_digital_shipment_opening' => 'Dear Customer,<br />Thank you for your purchase.<br />Please find attached the list of download links for the products you have ordered:',
	'email_digital_shipment_closing' => 'Please contact us if you need further information.<br /><br />Best Regards, our Sales Staff.',
	'email_physical_shipment_opening' => 'Dear Customer,<br />Thank you for your purchase. We confirm the order was correctly processed and shipped. <br />Please find attached the list of the ordered products:',
	'email_physical_shipment_closing' => 'Please contact us if you need further information.<br /><br />Best Regards, our Sales Staff.',
	'sendEmailBeforePayment' => true,
	'sendEmailAfterPayment' => false,
	'useCSV' => false,
	'header_bg_color' => 'rgba(98, 89, 147, 1)',
	'header_text_color' => 'rgba(0, 255, 255, 1)',
	'cell_bg_color' => 'rgba(255, 255, 255, 1)',
	'cell_text_color' => 'rgba(0, 0, 0, 1)',
	'availability_reduction_type' => 1,
	'border_color' => 'rgba(211, 211, 211, 1)',
	'owner_email' => 'jackie@queenofthesweets.com',
	'vat_type' => 'none',
	'availability_image' => 'cart/images/cart-available.png'
));

$ecommerce->setPriceFormatData(array(
	'decimals' => 2,
	'decimal_sep' => '.',
	'thousands_sep' => '',
	'currency_to_right' => true,
	'currency_separator' => ' ',
	'show_zero_as' => '0',
	'currency_symbol' => '$',
	'currency_code' => 'USD',
	'currency_name' => 'United States of America, Dollars',
));

$ecommerce->setDigitalProductsData(array());
$ecommerce->setProductsData(array(
	'f8eebneo' => array(
		'id' => 'f8eebneo',
		'name' => 'COOKIE CAKE',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'Looking for a fun alternative to a birthday cake? This sweet & chewy Chocolate Chip Cookie Cake is the perfect choice for your next birthday celebration!  Comes in many options and variations.',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'bohql7ma',
				'name' => '4" Round',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => 'jozc59gf',
				'name' => '8" Round',
				'price_variation' => 8.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'brprfens',
				'name' => '10" Round',
				'price_variation' => 16.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 't4yp4g0g',
				'name' => '1/2 Sheet (9"x13")',
				'price_variation' => 22.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'tytqhb0z',
				'name' => 'Sheet (18"x13") ',
				'price_variation' => 30.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 8.00,
		'singleFullPrice' => '8.00',
		'singleFullPricePlusVat' => '8.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/Cookie-Cake_78pa7pu9.597eb0cc67aceeadb43a.png',
				'width' => 1080,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/Cookie-Cake_78pa7pu9.597eb0cc67aceeadb43a.png',
			'width' => 1080,
			'height' => 1080
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cookie-Cake_78pa7pu9.597eb0cc67aceeadb43a.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cookie-Cake_78pa7pu9.597eb0cc67aceeadb43a.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cookie-Cake_78pa7pu9.597eb0cc67aceeadb43a.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cookie-Cake_78pa7pu9.597eb0cc67aceeadb43a.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkdd5154e0fb02475ae4115523149e102b = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cookie-Cake_78pa7pu9.597eb0cc67aceeadb43a.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkdd5154e0fb02475ae4115523149e102b, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink93d897891b4e3fb1540e5e1da043521a = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cookie-Cake_78pa7pu9.597eb0cc67aceeadb43a.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink93d897891b4e3fb1540e5e1da043521a, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'white-truffle',
		'relatedProducts' => array(
			'tk973wq7',
			'v445j79n',
			'39y4qpr8',
			'3bq6ufex',
			'jylf0xzi',
			'tunnwgw6',
			'm7ldrefl',
			'vyiyk2uf',
			'7060qb6g',
			'ou23z3vk',
			'ie5khf98'
		),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'COOKIE CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'COOKIE CAKE',
			'image' => 'https://queenofthesweets.com/images/Cookie-Cake_78pa7pu9.597eb0cc67aceeadb43a.png',
			'description' => 'Looking for a fun alternative to a birthday cake? This sweet & chewy Chocolate Chip Cookie Cake is the perfect choice for your next birthday celebration!  Comes in many options and variations.',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '8.00'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'8aft647v' => array(
		'id' => '8aft647v',
		'name' => 'PINA COLADA CAKE',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'This cake turns your favorite tropical cocktail into one delicious dessert! Coconut cake and pineapple buttercream frosting paired with pineapple mousse and toasted coconut.
',
		'sku' => '',
		'options' => array(
			array(
				'id' => '1n69f2w8',
				'name' => '4" Round',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => '25wauqbu',
				'name' => '8" Round',
				'price_variation' => 8.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'mso1b9rg',
				'name' => '10" Round',
				'price_variation' => 16.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'g86nziim',
				'name' => '1/2 Sheet (9"x13")',
				'price_variation' => 22.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'fxzm4y51',
				'name' => 'Sheet (18"x13") ',
				'price_variation' => 30.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 8.00,
		'singleFullPrice' => '8.00',
		'singleFullPricePlusVat' => '8.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/Pina-Colada-Cake-PhotoRoom_bjb6jw39.png',
				'width' => 1080,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/Pina-Colada-Cake-PhotoRoom_bjb6jw39.png',
			'width' => 1080,
			'height' => 1080
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Pina-Colada-Cake-PhotoRoom_bjb6jw39.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Pina-Colada-Cake-PhotoRoom_bjb6jw39.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Pina-Colada-Cake-PhotoRoom_bjb6jw39.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Pina-Colada-Cake-PhotoRoom_bjb6jw39.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink00fb5a2622f3df9cc32a6b714592caef = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Pina-Colada-Cake-PhotoRoom_bjb6jw39.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink00fb5a2622f3df9cc32a6b714592caef, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkc99e4dd894fb6b9cfc1cc374e491be87 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Pina-Colada-Cake-PhotoRoom_bjb6jw39.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkc99e4dd894fb6b9cfc1cc374e491be87, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'milk-choc-truffle',
		'relatedProducts' => array(
			'tk973wq7',
			'v445j79n',
			'39y4qpr8',
			'3bq6ufex',
			'jylf0xzi',
			'tunnwgw6',
			'm7ldrefl',
			'vyiyk2uf',
			'7060qb6g',
			'ou23z3vk',
			'ie5khf98'
		),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'PINA COLADA CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'PINA COLADA CAKE',
			'image' => 'https://queenofthesweets.com/images/Pina-Colada-Cake-PhotoRoom_bjb6jw39.png',
			'description' => 'This cake turns your favorite tropical cocktail into one delicious dessert! Coconut cake and pineapple buttercream frosting paired with pineapple mousse and toasted coconut.
',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '8.00'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'tjg01ar2' => array(
		'id' => 'tjg01ar2',
		'name' => 'COFFEE CAKE',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'A tender, perfectly moist cake with the enticing aroma, ribbons of cinnamon filling, and hallmark crumb topping make it a treat at breakfast or as a midday indulgence. Made with just a few pantry staples, coffee cake is a deliciously effortless way to start the day. ',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'kftsbgeo',
				'name' => '4" Round',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => 'm6d4kk4j',
				'name' => '8" Round',
				'price_variation' => 8.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => '3h4jy9io',
				'name' => '10" Round',
				'price_variation' => 16.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'gpc0a0nc',
				'name' => '1/2 Sheet (9"x13")',
				'price_variation' => 22.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => '4f4z9f2b',
				'name' => 'Sheet (18"x13") ',
				'price_variation' => 30.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 8.00,
		'singleFullPrice' => '8.00',
		'singleFullPricePlusVat' => '8.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/UPDATED-Coffee-cake_e202x4p4.5eaee1189e3d73674077.png',
				'width' => 1080,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/UPDATED-Coffee-cake_e202x4p4.5eaee1189e3d73674077.png',
			'width' => 1080,
			'height' => 1080
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-Coffee-cake_e202x4p4.5eaee1189e3d73674077.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-Coffee-cake_e202x4p4.5eaee1189e3d73674077.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-Coffee-cake_e202x4p4.5eaee1189e3d73674077.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-Coffee-cake_e202x4p4.5eaee1189e3d73674077.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinke741e4673409d0ae1a62c06e3db2b8ea = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-Coffee-cake_e202x4p4.5eaee1189e3d73674077.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinke741e4673409d0ae1a62c06e3db2b8ea, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink1d3544e5b0d5b90c23d0cca4bdc88f37 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-Coffee-cake_e202x4p4.5eaee1189e3d73674077.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink1d3544e5b0d5b90c23d0cca4bdc88f37, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'dark-choc-truffle',
		'relatedProducts' => array(
			'tk973wq7',
			'v445j79n',
			'39y4qpr8',
			'3bq6ufex',
			'jylf0xzi',
			'tunnwgw6',
			'm7ldrefl',
			'vyiyk2uf',
			'7060qb6g',
			'ou23z3vk',
			'ie5khf98'
		),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'COFFEE CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'COFFEE CAKE',
			'image' => 'https://queenofthesweets.com/images/UPDATED-Coffee-cake_e202x4p4.5eaee1189e3d73674077.png',
			'description' => 'A tender, perfectly moist cake with the enticing aroma, ribbons of cinnamon filling, and hallmark crumb topping make it a treat at breakfast or as a midday indulgence. Made with just a few pantry staples, coffee cake is a deliciously effortless way to start the day. ',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '8.00'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'ix6b6aan' => array(
		'id' => 'ix6b6aan',
		'name' => 'CINNAMON WALNUT BISCOTTI',
		'category' => 'jcm10x8f',
		'categoryPath' => array(
			'jcm10x8f'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'u21due8g',
				'name' => '24 pcs',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => 'wzegk0kq',
				'name' => '36 pcs',
				'price_variation' => 6,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => 'l2cxa1s1',
				'name' => '48 pcs',
				'price_variation' => 17.0,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 28.00,
		'singleFullPrice' => '28.00',
		'singleFullPricePlusVat' => '28.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/UPDATED-CINNAMON-WALNUT-BISCOTTI_me7rq9ld.6760dfcd24e032681bfa--1-.png',
				'width' => 1080,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/UPDATED-CINNAMON-WALNUT-BISCOTTI_me7rq9ld.6760dfcd24e032681bfa--1-.png',
			'width' => 1080,
			'height' => 1080
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CINNAMON-WALNUT-BISCOTTI_me7rq9ld.6760dfcd24e032681bfa--1-.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CINNAMON-WALNUT-BISCOTTI_me7rq9ld.6760dfcd24e032681bfa--1-.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CINNAMON-WALNUT-BISCOTTI_me7rq9ld.6760dfcd24e032681bfa--1-.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CINNAMON-WALNUT-BISCOTTI_me7rq9ld.6760dfcd24e032681bfa--1-.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink5070c7ebdd788827f0c9c28c44afd22b = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CINNAMON-WALNUT-BISCOTTI_me7rq9ld.6760dfcd24e032681bfa--1-.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink5070c7ebdd788827f0c9c28c44afd22b, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink25c88637f76a6723e866ef63f1ee44d7 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CINNAMON-WALNUT-BISCOTTI_me7rq9ld.6760dfcd24e032681bfa--1-.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink25c88637f76a6723e866ef63f1ee44d7, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'blackberry-tart',
		'relatedProducts' => array(
			'18xh6np1',
			'0votl9ob',
			'aboxhlbu',
			'xu349cxr',
			'4oib9c7f',
			'g7cwhsqx'
		),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'CINNAMON WALNUT BISCOTTI',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'CINNAMON WALNUT BISCOTTI',
			'image' => 'https://queenofthesweets.com/images/UPDATED-CINNAMON-WALNUT-BISCOTTI_me7rq9ld.6760dfcd24e032681bfa--1-.png',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '28.00'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'5c3x4vp9' => array(
		'id' => '5c3x4vp9',
		'name' => 'RAINBOW COOKIES',
		'category' => 'jcm10x8f',
		'categoryPath' => array(
			'jcm10x8f'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'Layers of almond cake are sandwiched with raspberry jam before getting coated in chocolate for the prettiest and most delicious rainbow cookies you\'ve ever had.',
		'sku' => '',
		'options' => array(
			array(
				'id' => '1ixuqcga',
				'name' => '24 pcs',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => 'qal1jaex',
				'name' => '36 pcs',
				'price_variation' => 11.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => 'ybu1jnxs',
				'name' => '48 pcs',
				'price_variation' => 22,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 28.00,
		'singleFullPrice' => '28.00',
		'singleFullPricePlusVat' => '28.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/Rainbow-Cookies-PhotoRoom_r696s1wc.png',
				'width' => 1080,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/Rainbow-Cookies-PhotoRoom_r696s1wc.png',
			'width' => 1080,
			'height' => 1080
		),
		'link' => null,
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Rainbow-Cookies-PhotoRoom_r696s1wc.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Rainbow-Cookies-PhotoRoom_r696s1wc.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Rainbow-Cookies-PhotoRoom_r696s1wc.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Rainbow-Cookies-PhotoRoom_r696s1wc.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink11448343defe9563c0d0c0c0f8fe8ab7 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Rainbow-Cookies-PhotoRoom_r696s1wc.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink11448343defe9563c0d0c0c0f8fe8ab7, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink986a1b5044e4140b9ca9c9ee14d97b83 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Rainbow-Cookies-PhotoRoom_r696s1wc.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink986a1b5044e4140b9ca9c9ee14d97b83, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'rasberry-tart',
		'relatedProducts' => array(
			'18xh6np1',
			'0votl9ob',
			'aboxhlbu',
			'xu349cxr',
			'4oib9c7f',
			'g7cwhsqx'
		),
		'productPageDetailsRichText' => null,
		'seo' => array(
			'tagTitle' => 'RAINBOW COOKIES',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'RAINBOW COOKIES',
			'image' => 'https://queenofthesweets.com/images/Rainbow-Cookies-PhotoRoom_r696s1wc.png',
			'description' => 'Layers of almond cake are sandwiched with raspberry jam before getting coated in chocolate for the prettiest and most delicious rainbow cookies you\'ve ever had.',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '28.00'
			)
		),
		'productPageLinkType' => "none",
		'fixedDiscount' => null
	),
	'tk973wq7' => array(
		'id' => 'tk973wq7',
		'name' => 'CARROT CAKE',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'Taste the freshness in every bite of this rich carrot cake. This delicious spice cake is speckled with freshly grated carrots, coconut, raisins, walnuts, and a coconut cream cheese filling.',
		'sku' => '',
		'options' => array(
			array(
				'id' => '2c2jddue',
				'name' => '4" Round',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => '1vejmhld',
				'name' => '8" Round',
				'price_variation' => 8.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => '1yzl36ky',
				'name' => '10" Round',
				'price_variation' => 16.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'la982jfu',
				'name' => '1/2 Sheet (9"x13")',
				'price_variation' => 22.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => '7ouo2fnr',
				'name' => 'Sheet (18"x13") ',
				'price_variation' => 30.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 8.00,
		'singleFullPrice' => '8.00',
		'singleFullPricePlusVat' => '8.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/UPDATED-CarrotCake_a777eibm.83524e1a7e976398f8bc.png',
				'width' => 1080,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/UPDATED-CarrotCake_a777eibm.83524e1a7e976398f8bc.png',
			'width' => 1080,
			'height' => 1080
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?carrot-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?carrot-cake\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?carrot-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?carrot-cake\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?carrot-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?carrot-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CarrotCake_a777eibm.83524e1a7e976398f8bc.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CarrotCake_a777eibm.83524e1a7e976398f8bc.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CarrotCake_a777eibm.83524e1a7e976398f8bc.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CarrotCake_a777eibm.83524e1a7e976398f8bc.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkc913bce47cfc4a934da81e4b23d9d88a = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CarrotCake_a777eibm.83524e1a7e976398f8bc.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkc913bce47cfc4a934da81e4b23d9d88a, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink676b800037e038465289038950220eb1 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CarrotCake_a777eibm.83524e1a7e976398f8bc.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink676b800037e038465289038950220eb1, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'carrot-cake',
		'relatedProducts' => array(
			'v445j79n',
			'39y4qpr8',
			'3bq6ufex',
			'jylf0xzi',
			'tunnwgw6',
			'm7ldrefl',
			'vyiyk2uf',
			'7060qb6g',
			'ou23z3vk',
			'ie5khf98'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'CARROT CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'CARROT CAKE',
			'image' => 'https://queenofthesweets.com/images/UPDATED-CarrotCake_a777eibm.83524e1a7e976398f8bc.png',
			'description' => 'Taste the freshness in every bite of this rich carrot cake. This delicious spice cake is speckled with freshly grated carrots, coconut, raisins, walnuts, and a coconut cream cheese filling.',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '8.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'v445j79n' => array(
		'id' => 'v445j79n',
		'name' => 'STRAWBERRY CAKE',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'With each bite, you get the perfect amount of sweetness and zest from the strawberries. While the strawberries bake down, the natural sugars are released into the vanilla batter amplifying that delicious flavor.',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'sup66krf',
				'name' => '4" Round',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => '71l00af2',
				'name' => '8" Round',
				'price_variation' => 8.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => '3v8o0b5s',
				'name' => '10" Round',
				'price_variation' => 16.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'j82jkejm',
				'name' => '1/2 Sheet (9"x13")',
				'price_variation' => 22.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'kx87na94',
				'name' => 'Sheet (18"x13") ',
				'price_variation' => 30.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 8.00,
		'singleFullPrice' => '8.00',
		'singleFullPricePlusVat' => '8.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/UPDATED-Strawberry-Cake_dz03qr1v.b1238ea746eaa7aae8b3.png',
				'width' => 1080,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/UPDATED-Strawberry-Cake_dz03qr1v.b1238ea746eaa7aae8b3.png',
			'width' => 1080,
			'height' => 1080
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?strawberry-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?strawberry-cake\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?strawberry-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?strawberry-cake\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?strawberry-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?strawberry-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-Strawberry-Cake_dz03qr1v.b1238ea746eaa7aae8b3.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-Strawberry-Cake_dz03qr1v.b1238ea746eaa7aae8b3.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-Strawberry-Cake_dz03qr1v.b1238ea746eaa7aae8b3.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-Strawberry-Cake_dz03qr1v.b1238ea746eaa7aae8b3.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink9f0d4b94001b8a276fbcb2d78e5b10d9 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-Strawberry-Cake_dz03qr1v.b1238ea746eaa7aae8b3.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink9f0d4b94001b8a276fbcb2d78e5b10d9, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkfe351f07a7edee61b452bf1ed8739c68 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-Strawberry-Cake_dz03qr1v.b1238ea746eaa7aae8b3.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkfe351f07a7edee61b452bf1ed8739c68, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'strawberry-cake',
		'relatedProducts' => array(
			'tk973wq7',
			'39y4qpr8',
			'3bq6ufex',
			'jylf0xzi',
			'tunnwgw6',
			'm7ldrefl',
			'vyiyk2uf',
			'7060qb6g',
			'ou23z3vk',
			'ie5khf98'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'STRAWBERRY CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'STRAWBERRY CAKE',
			'image' => 'https://queenofthesweets.com/images/UPDATED-Strawberry-Cake_dz03qr1v.b1238ea746eaa7aae8b3.png',
			'description' => 'With each bite, you get the perfect amount of sweetness and zest from the strawberries. While the strawberries bake down, the natural sugars are released into the vanilla batter amplifying that delicious flavor.',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '8.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'39y4qpr8' => array(
		'id' => '39y4qpr8',
		'name' => 'CHOCOLATE MINT CAKE',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'The PERFECT combo of indulgent chocolate and mint frosting, made with cocoa powder, and peppermint buttercream.',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'blwic5wy',
				'name' => '4" Round',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => '3s1ht1tf',
				'name' => '8" Round',
				'price_variation' => 8.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'zoubpn69',
				'name' => '10" Round',
				'price_variation' => 16.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'iiwlsvmm',
				'name' => '1/2 Sheet (9"x13")',
				'price_variation' => 22.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => '1hhd5ge3',
				'name' => 'Sheet (18"x13") ',
				'price_variation' => 30.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 8.00,
		'singleFullPrice' => '8.00',
		'singleFullPricePlusVat' => '8.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/UPDATED-ChocolateMint_trp6kzxf.3a0094ccd664c76797b7-1-.png',
				'width' => 1080,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/UPDATED-ChocolateMint_trp6kzxf.3a0094ccd664c76797b7-1-.png',
			'width' => 1080,
			'height' => 1080
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?chocolate-mint-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?chocolate-mint-cake\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?chocolate-mint-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?chocolate-mint-cake\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?chocolate-mint-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?chocolate-mint-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-ChocolateMint_trp6kzxf.3a0094ccd664c76797b7-1-.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-ChocolateMint_trp6kzxf.3a0094ccd664c76797b7-1-.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-ChocolateMint_trp6kzxf.3a0094ccd664c76797b7-1-.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-ChocolateMint_trp6kzxf.3a0094ccd664c76797b7-1-.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink67ad6aeac57296afee13a3431d159160 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-ChocolateMint_trp6kzxf.3a0094ccd664c76797b7-1-.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink67ad6aeac57296afee13a3431d159160, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink1986a3259a47326d838db5e2fb6c64a4 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-ChocolateMint_trp6kzxf.3a0094ccd664c76797b7-1-.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink1986a3259a47326d838db5e2fb6c64a4, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'chocolate-mint-cake',
		'relatedProducts' => array(
			'tk973wq7',
			'v445j79n',
			'3bq6ufex',
			'jylf0xzi',
			'tunnwgw6',
			'm7ldrefl',
			'vyiyk2uf',
			'7060qb6g',
			'ou23z3vk',
			'ie5khf98'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'CHOCOLATE MINT CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'CHOCOLATE MINT CAKE',
			'image' => 'https://queenofthesweets.com/images/UPDATED-ChocolateMint_trp6kzxf.3a0094ccd664c76797b7-1-.png',
			'description' => 'The PERFECT combo of indulgent chocolate and mint frosting, made with cocoa powder, and peppermint buttercream.',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '8.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'3bq6ufex' => array(
		'id' => '3bq6ufex',
		'name' => 'CHOCOLATE PEANUT BUTTER CAKE',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'This is a peanut lover’s dream dessert! A dark chocolate cake with peanut butter buttercream frosting topped with chocolate ganache makes this peanut butter cake decadent and delicious!',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'cr7w1p8a',
				'name' => '4" Round',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => '7hx2lzpz',
				'name' => '8" Round',
				'price_variation' => 8.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => '1wydc438',
				'name' => '10" Round',
				'price_variation' => 16.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => '7wjozsfx',
				'name' => '1/2 Sheet (9"x13")',
				'price_variation' => 22.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => '676oqa4w',
				'name' => 'Sheet (18"x13") ',
				'price_variation' => 30.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 8.00,
		'singleFullPrice' => '8.00',
		'singleFullPricePlusVat' => '8.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/UPDATED-ChocolatePeanut_p7zwdj42.66ebf1433798655c6e79--1-.png',
				'width' => 742,
				'height' => 742
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/UPDATED-ChocolatePeanut_p7zwdj42.66ebf1433798655c6e79--1-.png',
			'width' => 742,
			'height' => 742
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?chocolate-peanut-butter-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?chocolate-peanut-butter-cake\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?chocolate-peanut-butter-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?chocolate-peanut-butter-cake\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?chocolate-peanut-butter-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?chocolate-peanut-butter-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-ChocolatePeanut_p7zwdj42.66ebf1433798655c6e79--1-.png\',\'width\': 742,\'height\': 742}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-ChocolatePeanut_p7zwdj42.66ebf1433798655c6e79--1-.png\',\'width\': 742,\'height\': 742}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-ChocolatePeanut_p7zwdj42.66ebf1433798655c6e79--1-.png\',\'width\': 742,\'height\': 742}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-ChocolatePeanut_p7zwdj42.66ebf1433798655c6e79--1-.png\',\'width\': 742,\'height\': 742}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkce600790bc33e80874eb834be2c433a0 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-ChocolatePeanut_p7zwdj42.66ebf1433798655c6e79--1-.png\',\'width\': 742,\'height\': 742}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkce600790bc33e80874eb834be2c433a0, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink5fa99fc919f2465a6c2355bde0f02a88 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-ChocolatePeanut_p7zwdj42.66ebf1433798655c6e79--1-.png\',\'width\': 742,\'height\': 742}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink5fa99fc919f2465a6c2355bde0f02a88, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'chocolate-peanut-butter-cake',
		'relatedProducts' => array(
			'tk973wq7',
			'v445j79n',
			'39y4qpr8',
			'jylf0xzi',
			'tunnwgw6',
			'm7ldrefl',
			'vyiyk2uf',
			'7060qb6g',
			'ou23z3vk',
			'ie5khf98'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'CHOCOLATE PEANUT BUTTER CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'CHOCOLATE PEANUT BUTTER CAKE',
			'image' => 'https://queenofthesweets.com/images/UPDATED-ChocolatePeanut_p7zwdj42.66ebf1433798655c6e79--1-.png',
			'description' => 'This is a peanut lover’s dream dessert! A dark chocolate cake with peanut butter buttercream frosting topped with chocolate ganache makes this peanut butter cake decadent and delicious!',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '8.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'jylf0xzi' => array(
		'id' => 'jylf0xzi',
		'name' => 'CREAMSICLE CAKE',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'Looking for a flavorful dessert treat? This cake brings you the best of two worlds and it is stated in name…Creamsicle and Cake. Made with vanilla cake, orange buttercream with an orange mousse filling.',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'j8j35bh2',
				'name' => '4" Round',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => 'ntoi15lz',
				'name' => '8" Round',
				'price_variation' => 8.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => '9r0v0g5t',
				'name' => '10" Round',
				'price_variation' => 16.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'b00r5dfg',
				'name' => '1/2 Sheet (9"x13")',
				'price_variation' => 22.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'kcmlinx1',
				'name' => 'Sheet (18"x13") ',
				'price_variation' => 30.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 8.00,
		'singleFullPrice' => '8.00',
		'singleFullPricePlusVat' => '8.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/UPDATED-CREAMSICLE_926qns7s.362d89f15bfb853bc890--1-.png',
				'width' => 1080,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/UPDATED-CREAMSICLE_926qns7s.362d89f15bfb853bc890--1-.png',
			'width' => 1080,
			'height' => 1080
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?creamsicle-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?creamsicle-cake\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?creamsicle-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?creamsicle-cake\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?creamsicle-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?creamsicle-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CREAMSICLE_926qns7s.362d89f15bfb853bc890--1-.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CREAMSICLE_926qns7s.362d89f15bfb853bc890--1-.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CREAMSICLE_926qns7s.362d89f15bfb853bc890--1-.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CREAMSICLE_926qns7s.362d89f15bfb853bc890--1-.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink3114d7cb030cfb74e279dd38b5e3d436 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CREAMSICLE_926qns7s.362d89f15bfb853bc890--1-.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink3114d7cb030cfb74e279dd38b5e3d436, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkaad6fb1bc19303aaf6228a94a316c620 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/UPDATED-CREAMSICLE_926qns7s.362d89f15bfb853bc890--1-.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkaad6fb1bc19303aaf6228a94a316c620, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'creamsicle-cake',
		'relatedProducts' => array(
			'tk973wq7',
			'v445j79n',
			'39y4qpr8',
			'3bq6ufex',
			'tunnwgw6',
			'm7ldrefl',
			'vyiyk2uf',
			'7060qb6g',
			'ou23z3vk',
			'ie5khf98'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'CREAMSICLE CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'CREAMSICLE CAKE',
			'image' => 'https://queenofthesweets.com/images/UPDATED-CREAMSICLE_926qns7s.362d89f15bfb853bc890--1-.png',
			'description' => 'Looking for a flavorful dessert treat? This cake brings you the best of two worlds and it is stated in name…Creamsicle and Cake. Made with vanilla cake, orange buttercream with an orange mousse filling.',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '8.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'p7nn7f5d' => array(
		'id' => 'p7nn7f5d',
		'name' => 'APPLE PIE',
		'category' => 'b8mco3k9',
		'categoryPath' => array(
			'b8mco3k9'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'There’s nothing better than the smell of the fresh apple pie baking in the oven. It signifies the start of cozy fall days, and it’s the ultimate dessert to kick off the holiday season. Apple pie is best served warm with a big scoop of vanilla ice cream on top.',
		'sku' => '',
		'options' => array(
			array(
				'id' => '34swlwbg',
				'name' => '8"',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => '4p1rti0d',
				'name' => '10"',
				'price_variation' => 5,
				'weight_variation' => 0.00,
				'suboptions' => array()
			)
		),
		'price' => 20.00,
		'singleFullPrice' => '20.00',
		'singleFullPricePlusVat' => '20.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/Apple-Pie.png',
				'width' => 990,
				'height' => 765
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/Apple-Pie.png',
			'width' => 990,
			'height' => 765
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?apple-pie\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?apple-pie\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?apple-pie\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?apple-pie\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?apple-pie" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?apple-pie" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Apple-Pie.png\',\'width\': 990,\'height\': 765}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Apple-Pie.png\',\'width\': 990,\'height\': 765}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Apple-Pie.png\',\'width\': 990,\'height\': 765}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Apple-Pie.png\',\'width\': 990,\'height\': 765}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkab0ab7424602c3c59432e636d5db5ac3 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Apple-Pie.png\',\'width\': 990,\'height\': 765}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkab0ab7424602c3c59432e636d5db5ac3, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink2b52a2c0097031c9237fc24ba66e9537 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Apple-Pie.png\',\'width\': 990,\'height\': 765}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink2b52a2c0097031c9237fc24ba66e9537, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'apple-pie',
		'relatedProducts' => array(
			'apzl9hof',
			'qjadh9ox'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'APPLE PIE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'APPLE PIE',
			'image' => 'https://queenofthesweets.com/images/Apple-Pie.png',
			'description' => 'There’s nothing better than the smell of the fresh apple pie baking in the oven. It signifies the start of cozy fall days, and it’s the ultimate dessert to kick off the holiday season. Apple pie is best served warm with a big scoop of vanilla ice cream on top.',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '20.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'apzl9hof' => array(
		'id' => 'apzl9hof',
		'name' => 'CHERRY PIE',
		'category' => 'b8mco3k9',
		'categoryPath' => array(
			'b8mco3k9'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'Too tart to eat raw, sour cherries were born to be baked into a pie. This all-American version gets added sophistication from a gorgeously flaky crust and a filling, enhanced with an unexpected hint of cinnamon that is not overly sweet.',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'rumimby2',
				'name' => '8"',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => 'kqp0a36z',
				'name' => '10"',
				'price_variation' => 5.0,
				'weight_variation' => 0.00,
				'suboptions' => array()
			)
		),
		'price' => 20.00,
		'singleFullPrice' => '20.00',
		'singleFullPricePlusVat' => '20.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/Cherry-Pie.png',
				'width' => 800,
				'height' => 802
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/Cherry-Pie.png',
			'width' => 800,
			'height' => 802
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?cherry-pie\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?cherry-pie\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?cherry-pie\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?cherry-pie\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?cherry-pie" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?cherry-pie" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cherry-Pie.png\',\'width\': 800,\'height\': 802}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cherry-Pie.png\',\'width\': 800,\'height\': 802}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cherry-Pie.png\',\'width\': 800,\'height\': 802}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cherry-Pie.png\',\'width\': 800,\'height\': 802}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkd3f5d47c43b1c5e376eb4e2995fae79c = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cherry-Pie.png\',\'width\': 800,\'height\': 802}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkd3f5d47c43b1c5e376eb4e2995fae79c, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkc55830414575391d269f7d65543e0793 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Cherry-Pie.png\',\'width\': 800,\'height\': 802}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkc55830414575391d269f7d65543e0793, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'cherry-pie',
		'relatedProducts' => array(
			'p7nn7f5d',
			'qjadh9ox'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'CHERRY PIE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'CHERRY PIE',
			'image' => 'https://queenofthesweets.com/images/Cherry-Pie.png',
			'description' => 'Too tart to eat raw, sour cherries were born to be baked into a pie. This all-American version gets added sophistication from a gorgeously flaky crust and a filling, enhanced with an unexpected hint of cinnamon that is not overly sweet.',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '20.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'qjadh9ox' => array(
		'id' => 'qjadh9ox',
		'name' => 'LEMON MERINGUE',
		'category' => 'b8mco3k9',
		'categoryPath' => array(
			'b8mco3k9'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'Want to know what sunshine tastes like? Then try this lemon meringue pie. It’s bursting with fresh citrus flavor topped with a sweet, creamy meringue topping.',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'v6fj7tsz',
				'name' => '8"',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => 'yd3chuf4',
				'name' => '10"',
				'price_variation' => 5.0,
				'weight_variation' => 0.00,
				'suboptions' => array()
			)
		),
		'price' => 20.00,
		'singleFullPrice' => '20.00',
		'singleFullPricePlusVat' => '20.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/Lemon-Meringue.png',
				'width' => 1600,
				'height' => 1067
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/Lemon-Meringue.png',
			'width' => 1600,
			'height' => 1067
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?lemon-meringue\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?lemon-meringue\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?lemon-meringue\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?lemon-meringue\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?lemon-meringue" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?lemon-meringue" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Lemon-Meringue.png\',\'width\': 1600,\'height\': 1067}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Lemon-Meringue.png\',\'width\': 1600,\'height\': 1067}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Lemon-Meringue.png\',\'width\': 1600,\'height\': 1067}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Lemon-Meringue.png\',\'width\': 1600,\'height\': 1067}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink1317019faf3d15c5c13af4ed29a85ba2 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Lemon-Meringue.png\',\'width\': 1600,\'height\': 1067}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink1317019faf3d15c5c13af4ed29a85ba2, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink0840f13355e267480a702841b701b232 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Lemon-Meringue.png\',\'width\': 1600,\'height\': 1067}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink0840f13355e267480a702841b701b232, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'lemon-meringue',
		'relatedProducts' => array(
			'p7nn7f5d',
			'apzl9hof'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'LEMON MERINGUE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'LEMON MERINGUE',
			'image' => 'https://queenofthesweets.com/images/Lemon-Meringue.png',
			'description' => 'Want to know what sunshine tastes like? Then try this lemon meringue pie. It’s bursting with fresh citrus flavor topped with a sweet, creamy meringue topping.',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '20.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'18xh6np1' => array(
		'id' => '18xh6np1',
		'name' => 'ORANGE CRANBERRY BISCOTTI',
		'category' => 'jcm10x8f',
		'categoryPath' => array(
			'jcm10x8f'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'yk0yusza',
				'name' => '24 pcs',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => 'u99g28o1',
				'name' => '36 pcs',
				'price_variation' => 6,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => 'nsedtb1u',
				'name' => '48 pcs',
				'price_variation' => 17.0,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 28.00,
		'singleFullPrice' => '28.00',
		'singleFullPricePlusVat' => '28.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/Orange-Cranberry-Biscotti-v2-copy.png',
				'width' => 1467,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/Orange-Cranberry-Biscotti-v2-copy.png',
			'width' => 1467,
			'height' => 1080
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?orange-cranberry-biscotti\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?orange-cranberry-biscotti\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?orange-cranberry-biscotti\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?orange-cranberry-biscotti\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?orange-cranberry-biscotti" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?orange-cranberry-biscotti" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Orange-Cranberry-Biscotti-v2-copy.png\',\'width\': 1467,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Orange-Cranberry-Biscotti-v2-copy.png\',\'width\': 1467,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Orange-Cranberry-Biscotti-v2-copy.png\',\'width\': 1467,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Orange-Cranberry-Biscotti-v2-copy.png\',\'width\': 1467,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink86a515891349ba5f0269d0afebf846e6 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Orange-Cranberry-Biscotti-v2-copy.png\',\'width\': 1467,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink86a515891349ba5f0269d0afebf846e6, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink31ca8b7636ca647ac6ca19c154125232 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Orange-Cranberry-Biscotti-v2-copy.png\',\'width\': 1467,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink31ca8b7636ca647ac6ca19c154125232, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'orange-cranberry-biscotti',
		'relatedProducts' => array(
			'0votl9ob',
			'aboxhlbu',
			'xu349cxr',
			'4oib9c7f',
			'g7cwhsqx'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'ORANGE CRANBERRY BISCOTTI',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'ORANGE CRANBERRY BISCOTTI',
			'image' => 'https://queenofthesweets.com/images/Orange-Cranberry-Biscotti-v2-copy.png',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '28.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'0votl9ob' => array(
		'id' => '0votl9ob',
		'name' => 'VANNILLA ALMOND BISCOTTI',
		'category' => 'jcm10x8f',
		'categoryPath' => array(
			'jcm10x8f'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'xvb77rdf',
				'name' => '24 pcs',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => 'pm73fwjz',
				'name' => '36 pcs',
				'price_variation' => 6,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => '33uwogb9',
				'name' => '48 pcs',
				'price_variation' => 17.0,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 28.00,
		'singleFullPrice' => '28.00',
		'singleFullPricePlusVat' => '28.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/VANNILLA-ALMOND-BISCOTTI--7--copy.png',
				'width' => 1379,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/VANNILLA-ALMOND-BISCOTTI--7--copy.png',
			'width' => 1379,
			'height' => 1080
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?vannilla-almond-biscotti\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?vannilla-almond-biscotti\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?vannilla-almond-biscotti\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?vannilla-almond-biscotti\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?vannilla-almond-biscotti" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?vannilla-almond-biscotti" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/VANNILLA-ALMOND-BISCOTTI--7--copy.png\',\'width\': 1379,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/VANNILLA-ALMOND-BISCOTTI--7--copy.png\',\'width\': 1379,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/VANNILLA-ALMOND-BISCOTTI--7--copy.png\',\'width\': 1379,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/VANNILLA-ALMOND-BISCOTTI--7--copy.png\',\'width\': 1379,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkc4ddb8551dc00f44e1dfbb600af46b97 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/VANNILLA-ALMOND-BISCOTTI--7--copy.png\',\'width\': 1379,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkc4ddb8551dc00f44e1dfbb600af46b97, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink36f0ec541350e36de1ac0f198563662d = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/VANNILLA-ALMOND-BISCOTTI--7--copy.png\',\'width\': 1379,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink36f0ec541350e36de1ac0f198563662d, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'vannilla-almond-biscotti',
		'relatedProducts' => array(
			'18xh6np1',
			'aboxhlbu',
			'xu349cxr',
			'4oib9c7f',
			'g7cwhsqx'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'VANNILLA ALMOND BISCOTTI',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'VANNILLA ALMOND BISCOTTI',
			'image' => 'https://queenofthesweets.com/images/VANNILLA-ALMOND-BISCOTTI--7--copy.png',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '28.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'aboxhlbu' => array(
		'id' => 'aboxhlbu',
		'name' => 'LINZER TARTS',
		'category' => 'jcm10x8f',
		'categoryPath' => array(
			'jcm10x8f'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'Nothing could be more festive on the holiday table than a tray of these buttery, confectioners\' sugar-dusted, jam-packed cookies. The hint of lemon in the dough nicely complements any number of fillings, from raspberry jam to lemon curd.',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'mhtxrf7d',
				'name' => '24 pcs',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => 'a9rpxxgo',
				'name' => '36 pcs',
				'price_variation' => 11,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => 'w3wvxlir',
				'name' => '48 pcs',
				'price_variation' => 22.0,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 28.00,
		'singleFullPrice' => '28.00',
		'singleFullPricePlusVat' => '28.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/Linzer-Tarts-v5-copy.png',
				'width' => 1392,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/Linzer-Tarts-v5-copy.png',
			'width' => 1392,
			'height' => 1080
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?linzer-tarts\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?linzer-tarts\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?linzer-tarts\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?linzer-tarts\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?linzer-tarts" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?linzer-tarts" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Linzer-Tarts-v5-copy.png\',\'width\': 1392,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Linzer-Tarts-v5-copy.png\',\'width\': 1392,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Linzer-Tarts-v5-copy.png\',\'width\': 1392,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Linzer-Tarts-v5-copy.png\',\'width\': 1392,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink91dd330f023b401bffbd5da6b4eeffbb = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Linzer-Tarts-v5-copy.png\',\'width\': 1392,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink91dd330f023b401bffbd5da6b4eeffbb, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink04442460c56d9f5cbe0fc3513ac168d0 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Linzer-Tarts-v5-copy.png\',\'width\': 1392,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink04442460c56d9f5cbe0fc3513ac168d0, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'linzer-tarts',
		'relatedProducts' => array(
			'18xh6np1',
			'0votl9ob',
			'xu349cxr',
			'4oib9c7f',
			'g7cwhsqx'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'LINZER TARTS',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'LINZER TARTS',
			'image' => 'https://queenofthesweets.com/images/Linzer-Tarts-v5-copy.png',
			'description' => 'Nothing could be more festive on the holiday table than a tray of these buttery, confectioners\' sugar-dusted, jam-packed cookies. The hint of lemon in the dough nicely complements any number of fillings, from raspberry jam to lemon curd.',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '28.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'xu349cxr' => array(
		'id' => 'xu349cxr',
		'name' => 'CHOCOLATE BISCOTTI',
		'category' => 'jcm10x8f',
		'categoryPath' => array(
			'jcm10x8f'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'o32yrqo2',
				'name' => '24 pcs',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => '0w3kp18u',
				'name' => '36 pcs',
				'price_variation' => 6,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => '8cb7r2ny',
				'name' => '48 pcs',
				'price_variation' => 17.0,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 28.00,
		'singleFullPrice' => '28.00',
		'singleFullPricePlusVat' => '28.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/Chocolate-Biscotti-v2-copy.png',
				'width' => 1080,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/Chocolate-Biscotti-v2-copy.png',
			'width' => 1080,
			'height' => 1080
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?chocolate-biscotti\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?chocolate-biscotti\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?chocolate-biscotti\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?chocolate-biscotti\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?chocolate-biscotti" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?chocolate-biscotti" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Chocolate-Biscotti-v2-copy.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Chocolate-Biscotti-v2-copy.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Chocolate-Biscotti-v2-copy.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Chocolate-Biscotti-v2-copy.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink12981d3bc04ab87bc4eee8447ed0be81 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Chocolate-Biscotti-v2-copy.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink12981d3bc04ab87bc4eee8447ed0be81, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink795ae9f8ec894f123601df342b0ebd09 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Chocolate-Biscotti-v2-copy.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink795ae9f8ec894f123601df342b0ebd09, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'chocolate-biscotti',
		'relatedProducts' => array(
			'18xh6np1',
			'0votl9ob',
			'aboxhlbu',
			'4oib9c7f',
			'g7cwhsqx'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'CHOCOLATE BISCOTTI',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'CHOCOLATE BISCOTTI',
			'image' => 'https://queenofthesweets.com/images/Chocolate-Biscotti-v2-copy.png',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '28.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'4oib9c7f' => array(
		'id' => '4oib9c7f',
		'name' => '48 ASSORTED COOKIES',
		'category' => 'jcm10x8f',
		'categoryPath' => array(
			'jcm10x8f'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 45.00,
		'singleFullPrice' => '45.00',
		'singleFullPricePlusVat' => '45.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/48-Assortment-Cokkies-copy.png',
				'width' => 1094,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/48-Assortment-Cokkies-copy.png',
			'width' => 1094,
			'height' => 1080
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?48-assorted-cookies\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?48-assorted-cookies\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?48-assorted-cookies\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?48-assorted-cookies\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?48-assorted-cookies" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?48-assorted-cookies" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/48-Assortment-Cokkies-copy.png\',\'width\': 1094,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/48-Assortment-Cokkies-copy.png\',\'width\': 1094,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/48-Assortment-Cokkies-copy.png\',\'width\': 1094,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/48-Assortment-Cokkies-copy.png\',\'width\': 1094,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink92345b7f7477b6b12e3ed691ce1c4793 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/48-Assortment-Cokkies-copy.png\',\'width\': 1094,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink92345b7f7477b6b12e3ed691ce1c4793, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink8bf8a50e8c55babceff745c071e440fc = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/48-Assortment-Cokkies-copy.png\',\'width\': 1094,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink8bf8a50e8c55babceff745c071e440fc, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => '48-assorted-cookies',
		'relatedProducts' => array(
			'18xh6np1',
			'0votl9ob',
			'aboxhlbu',
			'xu349cxr',
			'g7cwhsqx'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => '48 ASSORTED COOKIES',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => '48 ASSORTED COOKIES',
			'image' => 'https://queenofthesweets.com/images/48-Assortment-Cokkies-copy.png',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '45.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'g7cwhsqx' => array(
		'id' => 'g7cwhsqx',
		'name' => '36 ASSORTED COOKIES',
		'category' => 'jcm10x8f',
		'categoryPath' => array(
			'jcm10x8f'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 34.00,
		'singleFullPrice' => '34.00',
		'singleFullPricePlusVat' => '34.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/36-Assorted-Cookies-copy.png',
				'width' => 879,
				'height' => 874
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/36-Assorted-Cookies-copy.png',
			'width' => 879,
			'height' => 874
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?36-assorted-cookies\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?36-assorted-cookies\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?36-assorted-cookies\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?36-assorted-cookies\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?36-assorted-cookies" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?36-assorted-cookies" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/36-Assorted-Cookies-copy.png\',\'width\': 879,\'height\': 874}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/36-Assorted-Cookies-copy.png\',\'width\': 879,\'height\': 874}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/36-Assorted-Cookies-copy.png\',\'width\': 879,\'height\': 874}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/36-Assorted-Cookies-copy.png\',\'width\': 879,\'height\': 874}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink08e4f33a86864ffb45e642ec272fa0fd = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/36-Assorted-Cookies-copy.png\',\'width\': 879,\'height\': 874}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink08e4f33a86864ffb45e642ec272fa0fd, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkae0bd61341c67a663922ba9fa47511e9 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/36-Assorted-Cookies-copy.png\',\'width\': 879,\'height\': 874}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkae0bd61341c67a663922ba9fa47511e9, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => '36-assorted-cookies',
		'relatedProducts' => array(
			'18xh6np1',
			'0votl9ob',
			'aboxhlbu',
			'xu349cxr',
			'4oib9c7f'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => '36 ASSORTED COOKIES',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => '36 ASSORTED COOKIES',
			'image' => 'https://queenofthesweets.com/images/36-Assorted-Cookies-copy.png',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '34.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'tunnwgw6' => array(
		'id' => 'tunnwgw6',
		'name' => 'CHOCOLATE STRAWBERRY CAKE',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'This Chocolate Strawberry Cake is a moist chocolate layer cake with a strawberry mousse filling and covered in a chocolate strawberry ganache. Topped with fresh strawberries.',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'sokz1yt1',
				'name' => '4" Round',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => 'xvm3hata',
				'name' => '8" Round',
				'price_variation' => 8.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => '1mso68on',
				'name' => '10" Round',
				'price_variation' => 16.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => '0nmh8n6v',
				'name' => '1/2 Sheet (9"x13")',
				'price_variation' => 22.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => '3vyh3wq6',
				'name' => 'Sheet (18"x13")',
				'price_variation' => 30.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 8.00,
		'singleFullPrice' => '8.00',
		'singleFullPricePlusVat' => '8.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/CHOCOLATE-STRAWBERRY-CAKE-copy.png',
				'width' => 167,
				'height' => 171
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/CHOCOLATE-STRAWBERRY-CAKE-copy.png',
			'width' => 167,
			'height' => 171
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?chocolate-strawberry-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?chocolate-strawberry-cake\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?chocolate-strawberry-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?chocolate-strawberry-cake\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?chocolate-strawberry-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?chocolate-strawberry-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/CHOCOLATE-STRAWBERRY-CAKE-copy.png\',\'width\': 167,\'height\': 171}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/CHOCOLATE-STRAWBERRY-CAKE-copy.png\',\'width\': 167,\'height\': 171}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/CHOCOLATE-STRAWBERRY-CAKE-copy.png\',\'width\': 167,\'height\': 171}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/CHOCOLATE-STRAWBERRY-CAKE-copy.png\',\'width\': 167,\'height\': 171}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinka83952469838771d063b4d479ecaf155 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/CHOCOLATE-STRAWBERRY-CAKE-copy.png\',\'width\': 167,\'height\': 171}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinka83952469838771d063b4d479ecaf155, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkcc4561c287230c785a42403b6f5dd950 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/CHOCOLATE-STRAWBERRY-CAKE-copy.png\',\'width\': 167,\'height\': 171}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkcc4561c287230c785a42403b6f5dd950, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'chocolate-strawberry-cake',
		'relatedProducts' => array(
			'tk973wq7',
			'v445j79n',
			'39y4qpr8',
			'3bq6ufex',
			'jylf0xzi',
			'm7ldrefl',
			'vyiyk2uf',
			'7060qb6g',
			'ou23z3vk',
			'ie5khf98'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'CHOCOLATE STRAWBERRY CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'CHOCOLATE STRAWBERRY CAKE',
			'image' => 'https://queenofthesweets.com/images/CHOCOLATE-STRAWBERRY-CAKE-copy.png',
			'description' => 'This Chocolate Strawberry Cake is a moist chocolate layer cake with a strawberry mousse filling and covered in a chocolate strawberry ganache. Topped with fresh strawberries.',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '8.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'm7ldrefl' => array(
		'id' => 'm7ldrefl',
		'name' => 'CARAMEL MACCHIATO CAKE',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'This cake embodies everything the latte boasts. A rich vanilla cake layered with smooth and silky expresso buttercream and finished with drizzles of caramel. The cake has a bold coffee flavor that is well balanced with the sweet caramel topping.',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'bl3n116p',
				'name' => '4" Round',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => '6bhtwlek',
				'name' => '8" Round',
				'price_variation' => 8.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => '3ruz89xp',
				'name' => '10" Round',
				'price_variation' => 16.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'ro9ii2qo',
				'name' => '1/2 Sheet (9"x13")',
				'price_variation' => 22.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'uckjeorv',
				'name' => 'Sheet (18"x13")',
				'price_variation' => 30.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 8.00,
		'singleFullPrice' => '8.00',
		'singleFullPricePlusVat' => '8.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/CARAMEL-MACCHIATO-CAKE--2--copy.png',
				'width' => 156,
				'height' => 154
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/CARAMEL-MACCHIATO-CAKE--2--copy.png',
			'width' => 156,
			'height' => 154
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?caramel-macchiato-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?caramel-macchiato-cake\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?caramel-macchiato-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?caramel-macchiato-cake\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?caramel-macchiato-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?caramel-macchiato-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/CARAMEL-MACCHIATO-CAKE--2--copy.png\',\'width\': 156,\'height\': 154}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/CARAMEL-MACCHIATO-CAKE--2--copy.png\',\'width\': 156,\'height\': 154}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/CARAMEL-MACCHIATO-CAKE--2--copy.png\',\'width\': 156,\'height\': 154}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/CARAMEL-MACCHIATO-CAKE--2--copy.png\',\'width\': 156,\'height\': 154}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink6f53ae95f1768dbd4ce96e5b08c38086 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/CARAMEL-MACCHIATO-CAKE--2--copy.png\',\'width\': 156,\'height\': 154}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink6f53ae95f1768dbd4ce96e5b08c38086, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkca5f4d06777280c4b982bb2e1996a5d6 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/CARAMEL-MACCHIATO-CAKE--2--copy.png\',\'width\': 156,\'height\': 154}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkca5f4d06777280c4b982bb2e1996a5d6, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'caramel-macchiato-cake',
		'relatedProducts' => array(
			'tk973wq7',
			'v445j79n',
			'39y4qpr8',
			'3bq6ufex',
			'jylf0xzi',
			'tunnwgw6',
			'vyiyk2uf',
			'7060qb6g',
			'ou23z3vk',
			'ie5khf98'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'CARAMEL MACCHIATO CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'CARAMEL MACCHIATO CAKE',
			'image' => 'https://queenofthesweets.com/images/CARAMEL-MACCHIATO-CAKE--2--copy.png',
			'description' => 'This cake embodies everything the latte boasts. A rich vanilla cake layered with smooth and silky expresso buttercream and finished with drizzles of caramel. The cake has a bold coffee flavor that is well balanced with the sweet caramel topping.',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '8.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'vyiyk2uf' => array(
		'id' => 'vyiyk2uf',
		'name' => 'DULCE DE LECHE CAKE',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'This delightful cake features soft and moist butter cake layers filled and iced with heavenly sweet caramel buttercream frosting topped with a salted caramel sauce. You cannot resist the deep flavor of the luscious caramel sauce that is dulce de leche.',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'cijstf28',
				'name' => '4" Round',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => 't4meo70e',
				'name' => '8" Round',
				'price_variation' => 8.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'wuui06nm',
				'name' => '10" Round',
				'price_variation' => 16.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'vhcsj8rd',
				'name' => '1/2 Sheet (9"x13")',
				'price_variation' => 22.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'hamln3aa',
				'name' => 'Sheet (18"x13")',
				'price_variation' => 30.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 8.00,
		'singleFullPrice' => '8.00',
		'singleFullPricePlusVat' => '8.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/20220708_184649-copy.png',
				'width' => 1080,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/20220708_184649-copy.png',
			'width' => 1080,
			'height' => 1080
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?dulce-de-leche-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?dulce-de-leche-cake\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?dulce-de-leche-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?dulce-de-leche-cake\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?dulce-de-leche-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?dulce-de-leche-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/20220708_184649-copy.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/20220708_184649-copy.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/20220708_184649-copy.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/20220708_184649-copy.png\',\'width\': 1080,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkd7df80ceac95b0da1546c87bbec5354c = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/20220708_184649-copy.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkd7df80ceac95b0da1546c87bbec5354c, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink97df35846880e8c8ba2114489538a1dd = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/20220708_184649-copy.png\',\'width\': 1080,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink97df35846880e8c8ba2114489538a1dd, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'dulce-de-leche-cake',
		'relatedProducts' => array(
			'tk973wq7',
			'v445j79n',
			'39y4qpr8',
			'3bq6ufex',
			'jylf0xzi',
			'tunnwgw6',
			'm7ldrefl',
			'7060qb6g',
			'ou23z3vk',
			'ie5khf98'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'DULCE DE LECHE CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'DULCE DE LECHE CAKE',
			'image' => 'https://queenofthesweets.com/images/20220708_184649-copy.png',
			'description' => 'This delightful cake features soft and moist butter cake layers filled and iced with heavenly sweet caramel buttercream frosting topped with a salted caramel sauce. You cannot resist the deep flavor of the luscious caramel sauce that is dulce de leche.',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '8.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'7060qb6g' => array(
		'id' => '7060qb6g',
		'name' => 'GERMAN CHOCOLATE CAKE',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'This cake is a classic! The moist chocolate cake paired with the coconut pecan filling and the chocolate frosting is just delicious together!',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'rnlyba6v',
				'name' => '4" Round',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => '0qkenosr',
				'name' => '8" Round',
				'price_variation' => 8.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'fus3o0ll',
				'name' => '10" Round',
				'price_variation' => 16.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'cwhdoffg',
				'name' => '1/2 Sheet (9"x13")',
				'price_variation' => 22.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'kw95zvrb',
				'name' => 'Sheet (18"x13")',
				'price_variation' => 30.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 8.00,
		'singleFullPrice' => '8.00',
		'singleFullPricePlusVat' => '8.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/GERMAN-CHOCOLATE-CAKE--2--copy.png',
				'width' => 137,
				'height' => 144
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/GERMAN-CHOCOLATE-CAKE--2--copy.png',
			'width' => 137,
			'height' => 144
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?german-chocolate-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?german-chocolate-cake\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?german-chocolate-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?german-chocolate-cake\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?german-chocolate-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?german-chocolate-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/GERMAN-CHOCOLATE-CAKE--2--copy.png\',\'width\': 137,\'height\': 144}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/GERMAN-CHOCOLATE-CAKE--2--copy.png\',\'width\': 137,\'height\': 144}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/GERMAN-CHOCOLATE-CAKE--2--copy.png\',\'width\': 137,\'height\': 144}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/GERMAN-CHOCOLATE-CAKE--2--copy.png\',\'width\': 137,\'height\': 144}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink4f12c13e3f39c2bfe2bb7380bbf4fe46 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/GERMAN-CHOCOLATE-CAKE--2--copy.png\',\'width\': 137,\'height\': 144}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink4f12c13e3f39c2bfe2bb7380bbf4fe46, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink8a03e9112009ff2b93859303e195111b = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/GERMAN-CHOCOLATE-CAKE--2--copy.png\',\'width\': 137,\'height\': 144}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink8a03e9112009ff2b93859303e195111b, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'german-chocolate-cake',
		'relatedProducts' => array(
			'tk973wq7',
			'v445j79n',
			'39y4qpr8',
			'3bq6ufex',
			'jylf0xzi',
			'tunnwgw6',
			'm7ldrefl',
			'vyiyk2uf',
			'ou23z3vk',
			'ie5khf98'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'GERMAN CHOCOLATE CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'GERMAN CHOCOLATE CAKE',
			'image' => 'https://queenofthesweets.com/images/GERMAN-CHOCOLATE-CAKE--2--copy.png',
			'description' => 'This cake is a classic! The moist chocolate cake paired with the coconut pecan filling and the chocolate frosting is just delicious together!',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '8.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'ou23z3vk' => array(
		'id' => 'ou23z3vk',
		'name' => 'WHITE CHOCOLATE CAKE',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'This white chocolate raspberry cake features two layers of white chocolate cake, a sweet-tart raspberry mousse, and plenty of white chocolate buttercream finished with fresh raspberries on top!',
		'sku' => '',
		'options' => array(
			array(
				'id' => 'qgu279hv',
				'name' => '4" Round',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => 'r20k706t',
				'name' => '8" Round',
				'price_variation' => 8.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => '79wxjsbp',
				'name' => '10" Round',
				'price_variation' => 16.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'ya451zkl',
				'name' => '1/2 Sheet (9"x13")',
				'price_variation' => 22.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'fefynuck',
				'name' => 'Sheet (18"x13")',
				'price_variation' => 30.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 8.00,
		'singleFullPrice' => '8.00',
		'singleFullPricePlusVat' => '8.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/WHITE-CHOCOLATE-CAKE-copy.png',
				'width' => 168,
				'height' => 170
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/WHITE-CHOCOLATE-CAKE-copy.png',
			'width' => 168,
			'height' => 170
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?white-chocolate-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?white-chocolate-cake\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?white-chocolate-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?white-chocolate-cake\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?white-chocolate-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?white-chocolate-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/WHITE-CHOCOLATE-CAKE-copy.png\',\'width\': 168,\'height\': 170}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/WHITE-CHOCOLATE-CAKE-copy.png\',\'width\': 168,\'height\': 170}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/WHITE-CHOCOLATE-CAKE-copy.png\',\'width\': 168,\'height\': 170}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/WHITE-CHOCOLATE-CAKE-copy.png\',\'width\': 168,\'height\': 170}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink1df6d77edd4f3b2802a19ae6a9357c20 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/WHITE-CHOCOLATE-CAKE-copy.png\',\'width\': 168,\'height\': 170}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink1df6d77edd4f3b2802a19ae6a9357c20, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink1f609de4dc79bfa38cb238426dd03c63 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/WHITE-CHOCOLATE-CAKE-copy.png\',\'width\': 168,\'height\': 170}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink1f609de4dc79bfa38cb238426dd03c63, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'white-chocolate-cake',
		'relatedProducts' => array(
			'tk973wq7',
			'v445j79n',
			'39y4qpr8',
			'3bq6ufex',
			'jylf0xzi',
			'tunnwgw6',
			'm7ldrefl',
			'vyiyk2uf',
			'7060qb6g',
			'ie5khf98'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'WHITE CHOCOLATE CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'WHITE CHOCOLATE CAKE',
			'image' => 'https://queenofthesweets.com/images/WHITE-CHOCOLATE-CAKE-copy.png',
			'description' => 'This white chocolate raspberry cake features two layers of white chocolate cake, a sweet-tart raspberry mousse, and plenty of white chocolate buttercream finished with fresh raspberries on top!',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '8.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'xl2r3ffk' => array(
		'id' => 'xl2r3ffk',
		'name' => 'ANIMAL BIRTHDAY CAKE',
		'category' => 'nr10k4xw',
		'categoryPath' => array(
			'nr10k4xw'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 0,
		'singleFullPrice' => '0.00',
		'singleFullPricePlusVat' => '0.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/Animal-Birthday-Cake-v1-copy-2.png',
				'width' => 704,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/Animal-Birthday-Cake-v1-copy-2.png',
			'width' => 704,
			'height' => 1080
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?animal-birthday-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?animal-birthday-cake\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?animal-birthday-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?animal-birthday-cake\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?animal-birthday-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?animal-birthday-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Animal-Birthday-Cake-v1-copy-2.png\',\'width\': 704,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Animal-Birthday-Cake-v1-copy-2.png\',\'width\': 704,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Animal-Birthday-Cake-v1-copy-2.png\',\'width\': 704,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Animal-Birthday-Cake-v1-copy-2.png\',\'width\': 704,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink80c9efe8ed4973b85d9919533ff72652 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Animal-Birthday-Cake-v1-copy-2.png\',\'width\': 704,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink80c9efe8ed4973b85d9919533ff72652, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkeaa92a99a530ce9bcec1b9920d0e9c41 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Animal-Birthday-Cake-v1-copy-2.png\',\'width\': 704,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkeaa92a99a530ce9bcec1b9920d0e9c41, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'animal-birthday-cake',
		'relatedProducts' => array(
			'wjcst7yr',
			'dwm9gjv9',
			'g8g1hzzq',
			'm57p1cnd',
			'yjy2vy0d',
			'7tr92823',
			'zo88273n',
			'l13ks1bp',
			'ki5rf8b0',
			'5ctjkqbx',
			'ujgegmpk'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'ANIMAL BIRTHDAY CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'ANIMAL BIRTHDAY CAKE',
			'image' => 'https://queenofthesweets.com/images/Animal-Birthday-Cake-v1-copy-2.png',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '0.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'wjcst7yr' => array(
		'id' => 'wjcst7yr',
		'name' => 'FLOWER BIRTHDAY CAKE',
		'category' => 'nr10k4xw',
		'categoryPath' => array(
			'nr10k4xw'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 0,
		'singleFullPrice' => '0.00',
		'singleFullPricePlusVat' => '0.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/Flower-Birthday-Cake-copy.png',
				'width' => 1043,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/Flower-Birthday-Cake-copy.png',
			'width' => 1043,
			'height' => 1080
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?flower-birthday-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?flower-birthday-cake\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?flower-birthday-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?flower-birthday-cake\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?flower-birthday-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?flower-birthday-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Flower-Birthday-Cake-copy.png\',\'width\': 1043,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Flower-Birthday-Cake-copy.png\',\'width\': 1043,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Flower-Birthday-Cake-copy.png\',\'width\': 1043,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Flower-Birthday-Cake-copy.png\',\'width\': 1043,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink1d5f5603b3a52d83d7991f897307de3a = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Flower-Birthday-Cake-copy.png\',\'width\': 1043,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink1d5f5603b3a52d83d7991f897307de3a, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink5881ae61cda540574389ca945fd282df = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Flower-Birthday-Cake-copy.png\',\'width\': 1043,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink5881ae61cda540574389ca945fd282df, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'flower-birthday-cake',
		'relatedProducts' => array(
			'xl2r3ffk',
			'dwm9gjv9',
			'g8g1hzzq',
			'm57p1cnd',
			'yjy2vy0d',
			'7tr92823',
			'zo88273n',
			'l13ks1bp',
			'ki5rf8b0',
			'5ctjkqbx',
			'ujgegmpk'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'FLOWER BIRTHDAY CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'FLOWER BIRTHDAY CAKE',
			'image' => 'https://queenofthesweets.com/images/Flower-Birthday-Cake-copy.png',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '0.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'dwm9gjv9' => array(
		'id' => 'dwm9gjv9',
		'name' => 'NOAH\'S ARK',
		'category' => 'nr10k4xw',
		'categoryPath' => array(
			'nr10k4xw'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 0,
		'singleFullPrice' => '0.00',
		'singleFullPricePlusVat' => '0.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/Noahs-Ark-v1-copy.png',
				'width' => 807,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/Noahs-Ark-v1-copy.png',
			'width' => 807,
			'height' => 1080
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?noah-s-ark\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?noah-s-ark\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?noah-s-ark\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?noah-s-ark\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?noah-s-ark" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?noah-s-ark" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Noahs-Ark-v1-copy.png\',\'width\': 807,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Noahs-Ark-v1-copy.png\',\'width\': 807,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Noahs-Ark-v1-copy.png\',\'width\': 807,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Noahs-Ark-v1-copy.png\',\'width\': 807,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkf96c696de29189a8f7c7e3e77b24d5b9 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Noahs-Ark-v1-copy.png\',\'width\': 807,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkf96c696de29189a8f7c7e3e77b24d5b9, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink8e3adc393735b704f6924e749b253b71 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Noahs-Ark-v1-copy.png\',\'width\': 807,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink8e3adc393735b704f6924e749b253b71, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'noah-s-ark',
		'relatedProducts' => array(
			'xl2r3ffk',
			'wjcst7yr',
			'g8g1hzzq',
			'm57p1cnd',
			'yjy2vy0d',
			'7tr92823',
			'zo88273n',
			'l13ks1bp',
			'ki5rf8b0',
			'5ctjkqbx',
			'ujgegmpk'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'NOAH\'S ARK',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'NOAH\'S ARK',
			'image' => 'https://queenofthesweets.com/images/Noahs-Ark-v1-copy.png',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '0.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'g8g1hzzq' => array(
		'id' => 'g8g1hzzq',
		'name' => 'PAINTER\'S BIRTHDAY CAKE',
		'category' => 'nr10k4xw',
		'categoryPath' => array(
			'nr10k4xw'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 0,
		'singleFullPrice' => '0.00',
		'singleFullPricePlusVat' => '0.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/Painters-Birthday-Cake-V1-copy.png',
				'width' => 806,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/Painters-Birthday-Cake-V1-copy.png',
			'width' => 806,
			'height' => 1080
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?painter-s-birthday-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?painter-s-birthday-cake\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?painter-s-birthday-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?painter-s-birthday-cake\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?painter-s-birthday-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?painter-s-birthday-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Painters-Birthday-Cake-V1-copy.png\',\'width\': 806,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Painters-Birthday-Cake-V1-copy.png\',\'width\': 806,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Painters-Birthday-Cake-V1-copy.png\',\'width\': 806,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Painters-Birthday-Cake-V1-copy.png\',\'width\': 806,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinke883826cd02293982a8d960dc3425125 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Painters-Birthday-Cake-V1-copy.png\',\'width\': 806,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinke883826cd02293982a8d960dc3425125, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink46f9f53e57e0aff9947ec93458f785a7 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Painters-Birthday-Cake-V1-copy.png\',\'width\': 806,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink46f9f53e57e0aff9947ec93458f785a7, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'painter-s-birthday-cake',
		'relatedProducts' => array(
			'xl2r3ffk',
			'wjcst7yr',
			'dwm9gjv9',
			'm57p1cnd',
			'yjy2vy0d',
			'7tr92823',
			'zo88273n',
			'l13ks1bp',
			'ki5rf8b0',
			'5ctjkqbx',
			'ujgegmpk'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'PAINTER\'S BIRTHDAY CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'PAINTER\'S BIRTHDAY CAKE',
			'image' => 'https://queenofthesweets.com/images/Painters-Birthday-Cake-V1-copy.png',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '0.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'm57p1cnd' => array(
		'id' => 'm57p1cnd',
		'name' => 'PENGUINS ON ICE',
		'category' => 'nr10k4xw',
		'categoryPath' => array(
			'nr10k4xw'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 0,
		'singleFullPrice' => '0.00',
		'singleFullPricePlusVat' => '0.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/IMG_0272-copy.png',
				'width' => 1717,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/IMG_0272-copy.png',
			'width' => 1717,
			'height' => 1080
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?penguins-on-ice\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?penguins-on-ice\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?penguins-on-ice\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?penguins-on-ice\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?penguins-on-ice" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?penguins-on-ice" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0272-copy.png\',\'width\': 1717,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0272-copy.png\',\'width\': 1717,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0272-copy.png\',\'width\': 1717,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0272-copy.png\',\'width\': 1717,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink639137d275790b4bf7db5ce3fbddaa3a = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0272-copy.png\',\'width\': 1717,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink639137d275790b4bf7db5ce3fbddaa3a, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinka4404237fd230673d84630c3b7d40f27 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0272-copy.png\',\'width\': 1717,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinka4404237fd230673d84630c3b7d40f27, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'penguins-on-ice',
		'relatedProducts' => array(
			'xl2r3ffk',
			'wjcst7yr',
			'dwm9gjv9',
			'g8g1hzzq',
			'yjy2vy0d',
			'7tr92823',
			'zo88273n',
			'l13ks1bp',
			'ki5rf8b0',
			'5ctjkqbx',
			'ujgegmpk'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'PENGUINS ON ICE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'PENGUINS ON ICE',
			'image' => 'https://queenofthesweets.com/images/IMG_0272-copy.png',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '0.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'yjy2vy0d' => array(
		'id' => 'yjy2vy0d',
		'name' => 'POKER LOVER CAKE',
		'category' => 'nr10k4xw',
		'categoryPath' => array(
			'nr10k4xw'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 0,
		'singleFullPrice' => '0.00',
		'singleFullPricePlusVat' => '0.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/Poker-Lover-Cake-copy.png',
				'width' => 1158,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/Poker-Lover-Cake-copy.png',
			'width' => 1158,
			'height' => 1080
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?poker-lover-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?poker-lover-cake\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?poker-lover-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?poker-lover-cake\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?poker-lover-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?poker-lover-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Poker-Lover-Cake-copy.png\',\'width\': 1158,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Poker-Lover-Cake-copy.png\',\'width\': 1158,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Poker-Lover-Cake-copy.png\',\'width\': 1158,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Poker-Lover-Cake-copy.png\',\'width\': 1158,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink4ff6cfc674981fe2d2811a6754b232fb = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Poker-Lover-Cake-copy.png\',\'width\': 1158,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink4ff6cfc674981fe2d2811a6754b232fb, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink7874b87b06d0f4c08619658066d153eb = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Poker-Lover-Cake-copy.png\',\'width\': 1158,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink7874b87b06d0f4c08619658066d153eb, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'poker-lover-cake',
		'relatedProducts' => array(
			'xl2r3ffk',
			'wjcst7yr',
			'dwm9gjv9',
			'g8g1hzzq',
			'm57p1cnd',
			'7tr92823',
			'zo88273n',
			'l13ks1bp',
			'ki5rf8b0',
			'5ctjkqbx',
			'ujgegmpk'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'POKER LOVER CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'POKER LOVER CAKE',
			'image' => 'https://queenofthesweets.com/images/Poker-Lover-Cake-copy.png',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '0.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'7tr92823' => array(
		'id' => '7tr92823',
		'name' => 'RACOONS IN FOREST',
		'category' => 'nr10k4xw',
		'categoryPath' => array(
			'nr10k4xw'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 0,
		'singleFullPrice' => '0.00',
		'singleFullPricePlusVat' => '0.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/IMG_0671-copy.png',
				'width' => 1183,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/IMG_0671-copy.png',
			'width' => 1183,
			'height' => 1080
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?racoons-in-forest\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?racoons-in-forest\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?racoons-in-forest\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?racoons-in-forest\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?racoons-in-forest" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?racoons-in-forest" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0671-copy.png\',\'width\': 1183,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0671-copy.png\',\'width\': 1183,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0671-copy.png\',\'width\': 1183,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0671-copy.png\',\'width\': 1183,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink1bc6524681a5b4e8c68cfb1e45ddab00 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0671-copy.png\',\'width\': 1183,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink1bc6524681a5b4e8c68cfb1e45ddab00, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink5bf4ace020bd83de27638cc3612ad441 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0671-copy.png\',\'width\': 1183,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink5bf4ace020bd83de27638cc3612ad441, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'racoons-in-forest',
		'relatedProducts' => array(
			'xl2r3ffk',
			'wjcst7yr',
			'dwm9gjv9',
			'g8g1hzzq',
			'm57p1cnd',
			'yjy2vy0d',
			'zo88273n',
			'l13ks1bp',
			'ki5rf8b0',
			'5ctjkqbx',
			'ujgegmpk'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'RACOONS IN FOREST',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'RACOONS IN FOREST',
			'image' => 'https://queenofthesweets.com/images/IMG_0671-copy.png',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '0.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'zo88273n' => array(
		'id' => 'zo88273n',
		'name' => 'ROBLOX BIRTHDAY CAKE',
		'category' => 'nr10k4xw',
		'categoryPath' => array(
			'nr10k4xw'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 0,
		'singleFullPrice' => '0.00',
		'singleFullPricePlusVat' => '0.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/Roblox-Birthday-Cake-v1-copy.png',
				'width' => 1243,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/Roblox-Birthday-Cake-v1-copy.png',
			'width' => 1243,
			'height' => 1080
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?roblox-birthday-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?roblox-birthday-cake\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?roblox-birthday-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?roblox-birthday-cake\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?roblox-birthday-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?roblox-birthday-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Roblox-Birthday-Cake-v1-copy.png\',\'width\': 1243,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Roblox-Birthday-Cake-v1-copy.png\',\'width\': 1243,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Roblox-Birthday-Cake-v1-copy.png\',\'width\': 1243,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Roblox-Birthday-Cake-v1-copy.png\',\'width\': 1243,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink93f5994a0bd3ee0e60e2e13146a6441c = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Roblox-Birthday-Cake-v1-copy.png\',\'width\': 1243,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink93f5994a0bd3ee0e60e2e13146a6441c, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink5d1833b526f92576d2aaee2d81e48514 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Roblox-Birthday-Cake-v1-copy.png\',\'width\': 1243,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink5d1833b526f92576d2aaee2d81e48514, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'roblox-birthday-cake',
		'relatedProducts' => array(
			'xl2r3ffk',
			'wjcst7yr',
			'dwm9gjv9',
			'g8g1hzzq',
			'm57p1cnd',
			'yjy2vy0d',
			'7tr92823',
			'l13ks1bp',
			'ki5rf8b0',
			'5ctjkqbx',
			'ujgegmpk'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'ROBLOX BIRTHDAY CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'ROBLOX BIRTHDAY CAKE',
			'image' => 'https://queenofthesweets.com/images/Roblox-Birthday-Cake-v1-copy.png',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '0.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'l13ks1bp' => array(
		'id' => 'l13ks1bp',
		'name' => 'WATERMELON CAKE',
		'category' => 'nr10k4xw',
		'categoryPath' => array(
			'nr10k4xw'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 0,
		'singleFullPrice' => '0.00',
		'singleFullPricePlusVat' => '0.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/Watermelon-Cake--1--copy.png',
				'width' => 653,
				'height' => 903
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/Watermelon-Cake--1--copy.png',
			'width' => 653,
			'height' => 903
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?watermelon-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?watermelon-cake\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?watermelon-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?watermelon-cake\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?watermelon-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?watermelon-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Watermelon-Cake--1--copy.png\',\'width\': 653,\'height\': 903}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Watermelon-Cake--1--copy.png\',\'width\': 653,\'height\': 903}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Watermelon-Cake--1--copy.png\',\'width\': 653,\'height\': 903}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Watermelon-Cake--1--copy.png\',\'width\': 653,\'height\': 903}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink297c76952d4b854387c99971a62f3e24 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Watermelon-Cake--1--copy.png\',\'width\': 653,\'height\': 903}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink297c76952d4b854387c99971a62f3e24, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink1609372e38c190b1ba9da54a0ef84f8b = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Watermelon-Cake--1--copy.png\',\'width\': 653,\'height\': 903}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink1609372e38c190b1ba9da54a0ef84f8b, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'watermelon-cake',
		'relatedProducts' => array(
			'xl2r3ffk',
			'wjcst7yr',
			'dwm9gjv9',
			'g8g1hzzq',
			'm57p1cnd',
			'yjy2vy0d',
			'7tr92823',
			'zo88273n',
			'ki5rf8b0',
			'5ctjkqbx',
			'ujgegmpk'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'WATERMELON CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'WATERMELON CAKE',
			'image' => 'https://queenofthesweets.com/images/Watermelon-Cake--1--copy.png',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '0.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'ki5rf8b0' => array(
		'id' => 'ki5rf8b0',
		'name' => 'WEDDING CAKE',
		'category' => 'nr10k4xw',
		'categoryPath' => array(
			'nr10k4xw'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 0,
		'singleFullPrice' => '0.00',
		'singleFullPricePlusVat' => '0.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/Wedding-Cake--1-copy.png',
				'width' => 794,
				'height' => 975
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/Wedding-Cake--1-copy.png',
			'width' => 794,
			'height' => 975
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?wedding-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?wedding-cake\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?wedding-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?wedding-cake\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?wedding-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?wedding-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Wedding-Cake--1-copy.png\',\'width\': 794,\'height\': 975}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Wedding-Cake--1-copy.png\',\'width\': 794,\'height\': 975}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Wedding-Cake--1-copy.png\',\'width\': 794,\'height\': 975}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Wedding-Cake--1-copy.png\',\'width\': 794,\'height\': 975}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkf6d9b6b1a9aa9b4cf3ad11e87ec5df72 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Wedding-Cake--1-copy.png\',\'width\': 794,\'height\': 975}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkf6d9b6b1a9aa9b4cf3ad11e87ec5df72, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlinkf6275f6a7ee95893457bc1de1cb1a202 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Wedding-Cake--1-copy.png\',\'width\': 794,\'height\': 975}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkf6275f6a7ee95893457bc1de1cb1a202, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'wedding-cake',
		'relatedProducts' => array(
			'xl2r3ffk',
			'wjcst7yr',
			'dwm9gjv9',
			'g8g1hzzq',
			'm57p1cnd',
			'yjy2vy0d',
			'7tr92823',
			'zo88273n',
			'l13ks1bp',
			'5ctjkqbx',
			'ujgegmpk'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'WEDDING CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'WEDDING CAKE',
			'image' => 'https://queenofthesweets.com/images/Wedding-Cake--1-copy.png',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '0.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'5ctjkqbx' => array(
		'id' => '5ctjkqbx',
		'name' => 'HALLOWEEN BIRTHDAY CAKE',
		'category' => 'nr10k4xw',
		'categoryPath' => array(
			'nr10k4xw'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 0,
		'singleFullPrice' => '0.00',
		'singleFullPricePlusVat' => '0.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/Halloween-Birthday-Cake-v1-copy.png',
				'width' => 1039,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/Halloween-Birthday-Cake-v1-copy.png',
			'width' => 1039,
			'height' => 1080
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?halloween-birthday-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?halloween-birthday-cake\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?halloween-birthday-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?halloween-birthday-cake\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?halloween-birthday-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?halloween-birthday-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Halloween-Birthday-Cake-v1-copy.png\',\'width\': 1039,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Halloween-Birthday-Cake-v1-copy.png\',\'width\': 1039,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Halloween-Birthday-Cake-v1-copy.png\',\'width\': 1039,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Halloween-Birthday-Cake-v1-copy.png\',\'width\': 1039,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink67ea290488d0fbf23478e443b39bee62 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Halloween-Birthday-Cake-v1-copy.png\',\'width\': 1039,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink67ea290488d0fbf23478e443b39bee62, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink0e293640e82ae0ce5f06b211b98da330 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Halloween-Birthday-Cake-v1-copy.png\',\'width\': 1039,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink0e293640e82ae0ce5f06b211b98da330, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'halloween-birthday-cake',
		'relatedProducts' => array(
			'xl2r3ffk',
			'wjcst7yr',
			'dwm9gjv9',
			'g8g1hzzq',
			'm57p1cnd',
			'yjy2vy0d',
			'7tr92823',
			'zo88273n',
			'l13ks1bp',
			'ki5rf8b0',
			'ujgegmpk'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'HALLOWEEN BIRTHDAY CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'HALLOWEEN BIRTHDAY CAKE',
			'image' => 'https://queenofthesweets.com/images/Halloween-Birthday-Cake-v1-copy.png',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '0.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'ie5khf98' => array(
		'id' => 'ie5khf98',
		'name' => 'PEAR UPSIDE-DOWN CAKE',
		'category' => '9z4z1d8y',
		'categoryPath' => array(
			'9z4z1d8y'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => 'Caramelized bottom with fresh pears and a spiced cake layer. This pear upside-down cake is perfect for fall entertaining.',
		'sku' => '',
		'options' => array(
			array(
				'id' => '5osiz9ey',
				'name' => '4" Round',
				'price_variation' => 0.00,
				'weight_variation' => 0.00,
				'suboptions' => array()
			),
			array(
				'id' => 's2wp34un',
				'name' => '8" Round',
				'price_variation' => 8.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'om13fnlh',
				'name' => '10" Round',
				'price_variation' => 16.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'x8z4hf9j',
				'name' => '1/2 Sheet (9"x13")',
				'price_variation' => 22.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			),
			array(
				'id' => 'cik918ji',
				'name' => 'Sheet (18"x13") ',
				'price_variation' => 30.00,
				'weight_variation' => 0.0,
				'suboptions' => array()
			)
		),
		'price' => 8.00,
		'singleFullPrice' => '8.00',
		'singleFullPricePlusVat' => '8.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/IMG_0045-copy.png',
				'width' => 1021,
				'height' => 1080
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/IMG_0045-copy.png',
			'width' => 1021,
			'height' => 1080
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?pear-upside-down-pie\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?pear-upside-down-pie\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?pear-upside-down-pie\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?pear-upside-down-pie\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?pear-upside-down-pie" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?pear-upside-down-pie" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0045-copy.png\',\'width\': 1021,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0045-copy.png\',\'width\': 1021,\'height\': 1080}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0045-copy.png\',\'width\': 1021,\'height\': 1080}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0045-copy.png\',\'width\': 1021,\'height\': 1080}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlinkba87316e8bcb652d27f6a461f2c908e3 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0045-copy.png\',\'width\': 1021,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlinkba87316e8bcb652d27f6a461f2c908e3, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink8e6c70d9a854619cae3828b959263b91 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/IMG_0045-copy.png\',\'width\': 1021,\'height\': 1080}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink8e6c70d9a854619cae3828b959263b91, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'pear-upside-down-pie',
		'relatedProducts' => array(
			'tk973wq7',
			'v445j79n',
			'39y4qpr8',
			'3bq6ufex',
			'jylf0xzi',
			'tunnwgw6',
			'm7ldrefl',
			'vyiyk2uf',
			'7060qb6g',
			'ou23z3vk'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'PEAR UPSIDE-DOWN CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'PEAR UPSIDE-DOWN CAKE',
			'image' => 'https://queenofthesweets.com/images/IMG_0045-copy.png',
			'description' => 'Caramelized bottom with fresh pears and a spiced cake layer. This pear upside-down cake is perfect for fall entertaining.',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '8.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	),
	'ujgegmpk' => array(
		'id' => 'ujgegmpk',
		'name' => 'MERMAID CAKE',
		'category' => 'nr10k4xw',
		'categoryPath' => array(
			'nr10k4xw'
		),
		'showThumbsInShowbox' => true,
		'new' => false,
		'description' => '',
		'sku' => '',
		'options' => array(),
		'price' => 0,
		'singleFullPrice' => '0.00',
		'singleFullPricePlusVat' => '0.00',
		'staticAvailValue' => "available",
		'availabilityType' => "unset",
		'offlineAvailableItems' => 0,
		'quantityDiscounts' => null,
		'media' => array(
			array(
				'type' => 'image',
				'url' => 'images/Mermaid-Cake-copy.png',
				'width' => 844,
				'height' => 642
			)
		),
		'thumb' => array(
			'type' => 'image/png',
			'url' => 'https://queenofthesweets.com/images/Mermaid-Cake-copy.png',
			'width' => 844,
			'height' => 642
		),
		'link' => array(
			'type' => "productpage",
			'tip' => array(
				'image' => '',
				'imagePosition' => "top",
				'imagePercentWidth' => 50,
				'text' => '',
				'width' => 180
			),
			'js' => array(
				'upload' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?mermaid-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?mermaid-cake\'); return false;"'
				),
				'offline' => array(
					'jsonly' => 'x5engine.utils.location(\'<!--base_url_placeholder-->product/?mermaid-cake\');',
					'complete' => 'onclick="x5engine.utils.location(\'<!--base_url_placeholder-->product/?mermaid-cake\'); return false;"'
				)
			),
			'html' => array(
				'upload' => '<a href="<!--base_url_placeholder-->product/?mermaid-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
				'offline' => '<a href="<!--base_url_placeholder-->product/?mermaid-cake" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
			)
		),
		'showboxLinks' => array(
			array(
				'type' => "showboxvisualmediagallery",
				'tip' => array(
					'image' => '',
					'imagePosition' => "top",
					'imagePercentWidth' => 50,
					'text' => '',
					'width' => 180
				),
				'js' => array(
					'upload' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Mermaid-Cake-copy.png\',\'width\': 844,\'height\': 642}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Mermaid-Cake-copy.png\',\'width\': 844,\'height\': 642}]}, 0, this);"'
					),
					'offline' => array(
						'jsonly' => 'x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Mermaid-Cake-copy.png\',\'width\': 844,\'height\': 642}]}, 0, this);',
						'complete' => 'onclick="return x5engine.imShowBox({\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Mermaid-Cake-copy.png\',\'width\': 844,\'height\': 642}]}, 0, this);"'
					)
				),
				'html' => array(
					'upload' => '<script> showboxlink07c8742728d1099ed0942e7c3fb155e3 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Mermaid-Cake-copy.png\',\'width\': 844,\'height\': 642}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink07c8742728d1099ed0942e7c3fb155e3, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>',
					'offline' => '<script> showboxlink45c5708a336eb5468a5099f2c3a4f623 = {\'showThumbs\': true,\'media\': [{\'type\': \'image\',\'url\': \'<!--base_url_placeholder-->images/Mermaid-Cake-copy.png\',\'width\': 844,\'height\': 642}]};</script>
<a href="#" onclick="return x5engine.imShowBox(showboxlink45c5708a336eb5468a5099f2c3a4f623, 0, this)" class="<!--css_class_placeholder-->"><!--html_content_placeholder--></a>'
				)
			)
		),
		'vat' => 20.0,
		'vatName' => 'VAT',
		'taxConfigutationGroup' => 's7do751z',
		'weight' => 0,
		'isDiscountedRegardlessOfCouponAndQuantity' => false,
		'isDiscountedBecauseOfQuantity' => false,
		'slug' => 'mermaid-cake',
		'relatedProducts' => array(
			'xl2r3ffk',
			'wjcst7yr',
			'dwm9gjv9',
			'g8g1hzzq',
			'm57p1cnd',
			'yjy2vy0d',
			'7tr92823',
			'zo88273n',
			'l13ks1bp',
			'ki5rf8b0',
			'5ctjkqbx'
		),
		'productPageDetailsRichText' => array(
			'html' => array(
				'online' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
',
				'preview' => '<div id="details">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="details_tab0" style="opacity: 1; ">
		<div class="text-inner">
			
		</div>
	</div>

</div>
'
			),
			'css' => '#details { width: 100%; }
#details { font-style: normal; font-weight: normal; line-height: 28px; }
#details_tab0 div { line-height: 28px; }
#details_tab0 .imHeading1 { line-height: 72px; }
#details_tab0 .imHeading2 { line-height: 56px; }
#details_tab0 .imHeading3 { line-height: 48px; }
#details_tab0 .imHeading4 { line-height: 40px; }
#details_tab0 .imHeading5 { line-height: 36px; }
#details_tab0 .imHeading6 { line-height: 32px; }
#details_tab0 ul { list-style: disc; margin: 0; padding: 0; overflow: hidden; }
#details_tab0 ul ul { list-style: square; padding: 0 0 0 20px; }
#details_tab0 ul ul ul { list-style: circle; }
#details_tab0 ul li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 ol { list-style: decimal; margin: 0; padding: 0; }
#details_tab0 ol ol { list-style: lower-alpha; padding: 0 0 0 20px; }
#details_tab0 ol li { margin: 0 0 0 40px; padding: 0px; }
#details_tab0 blockquote { margin: 0 0 0 15px; padding: 0; border: none; }
#details_tab0 table { border: none; padding: 0; border-collapse: collapse; }
#details_tab0 table td { border: 1px solid black; word-wrap: break-word; padding: 4px 3px 4px 3px; margin: 0; vertical-align: middle; }
#details_tab0 p { margin: 0; padding: 0; }
#details_tab0 .inline-block { display: inline-block; }
#details_tab0 sup { vertical-align: super; font-size: smaller; }
#details_tab0 sub { vertical-align: sub; font-size: smaller; }
#details_tab0 img { border: none; margin: 0; vertical-align: text-bottom;}
#details_tab0 .fleft { float: left; vertical-align: baseline;}
#details_tab0 .fright { float: right; vertical-align: baseline;}
#details_tab0 img.fleft { margin-right: 15px; }
#details_tab0 img.fright { margin-left: 15px; }
#details_tab0 .imTALeft { text-align: left; }
#details_tab0 .imTARight { text-align: right; }
#details_tab0 .imTACenter { text-align: center; }
#details_tab0 .imTAJustify { text-align: justify; }
#details_tab0 .imUl { text-decoration: underline; }
#details_tab0 .imStrike { text-decoration: line-through; }
#details_tab0 .imUlStrike { text-decoration: underline line-through; }
#details_tab0 .imVt { vertical-align: top; }
#details_tab0 .imVc { vertical-align: middle; }
#details_tab0 .imVb { vertical-align: bottom; }
#details_tab0 hr { border-width: 1px 0 0 0; border-style: solid; }
#details .text-container {width: 100%;}#details .text-container {margin: 0 auto; position: relative;overflow: hidden; display: -ms-grid; display: grid; -ms-grid-template-rows: 1fr; grid-template-rows: 1fr; -ms-grid-template-columns: 1fr; grid-template-columns: 1fr; background-color: transparent; border-style: solid; border-width: 1px; border-color: rgba(0, 0, 0, 0.3) transparent transparent transparent; }
#details .text-container .grid-prop.current-tab {z-index: 1; opacity: 1; }
#details .text-container .grid-prop {-ms-grid-column: 1; -ms-grid-row: 1; grid-area: 1 / 1 / 2 / 2; opacity: 0; box-sizing: border-box; position: relative;  }
#details .text-container .text-tab-content.detach {position: absolute; top: 0; left: 0; width: 100%; display: none; }
@media (min-width: 1150.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 1149.9px) and (min-width: 720.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 719.9px) and (min-width: 480.0px) {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

@media (max-width: 479.9px)  {
	
	#details .text-container {border-top-width: 0;box-sizing: border-box;width: 100%;}
	
}

'
		),
		'seo' => array(
			'tagTitle' => 'MERMAID CAKE',
			'tagDescription' => '',
			'tagKeywords' => ''
		),
		'schemaOrg' => array(
			'@type' => 'Product',
			'name' => 'MERMAID CAKE',
			'image' => 'https://queenofthesweets.com/images/Mermaid-Cake-copy.png',
			'description' => '',
			'offers' => array(
				'@type' => 'Offer',
				'priceCurrency' => 'USD',
				'price' => '0.00'
			)
		),
		'productPageLinkType' => "productpage",
		'fixedDiscount' => null
	)
));
$ecommerce->setSlugToProductIdMap(array(
	'white-truffle' => 'f8eebneo',
	'milk-choc-truffle' => '8aft647v',
	'dark-choc-truffle' => 'tjg01ar2',
	'blackberry-tart' => 'ix6b6aan',
	'rasberry-tart' => '5c3x4vp9',
	'carrot-cake' => 'tk973wq7',
	'strawberry-cake' => 'v445j79n',
	'chocolate-mint-cake' => '39y4qpr8',
	'chocolate-peanut-butter-cake' => '3bq6ufex',
	'creamsicle-cake' => 'jylf0xzi',
	'apple-pie' => 'p7nn7f5d',
	'cherry-pie' => 'apzl9hof',
	'lemon-meringue' => 'qjadh9ox',
	'orange-cranberry-biscotti' => '18xh6np1',
	'vannilla-almond-biscotti' => '0votl9ob',
	'linzer-tarts' => 'aboxhlbu',
	'chocolate-biscotti' => 'xu349cxr',
	'48-assorted-cookies' => '4oib9c7f',
	'36-assorted-cookies' => 'g7cwhsqx',
	'chocolate-strawberry-cake' => 'tunnwgw6',
	'caramel-macchiato-cake' => 'm7ldrefl',
	'dulce-de-leche-cake' => 'vyiyk2uf',
	'german-chocolate-cake' => '7060qb6g',
	'white-chocolate-cake' => 'ou23z3vk',
	'animal-birthday-cake' => 'xl2r3ffk',
	'flower-birthday-cake' => 'wjcst7yr',
	'noah-s-ark' => 'dwm9gjv9',
	'painter-s-birthday-cake' => 'g8g1hzzq',
	'penguins-on-ice' => 'm57p1cnd',
	'poker-lover-cake' => 'yjy2vy0d',
	'racoons-in-forest' => '7tr92823',
	'roblox-birthday-cake' => 'zo88273n',
	'watermelon-cake' => 'l13ks1bp',
	'wedding-cake' => 'ki5rf8b0',
	'halloween-birthday-cake' => '5ctjkqbx',
	'pear-upside-down-pie' => 'ie5khf98',
	'mermaid-cake' => 'ujgegmpk'
));
$ecommerce->setCategoriesData(array(
	'9z4z1d8y' => array(
		'id' => '9z4z1d8y',
		'name' => 'Cakes',
		'containsProductsWithProductPage' => true,
		'products' => array(
			'f8eebneo',
			'8aft647v',
			'tjg01ar2',
			'tk973wq7',
			'v445j79n',
			'39y4qpr8',
			'3bq6ufex',
			'jylf0xzi',
			'tunnwgw6',
			'm7ldrefl',
			'vyiyk2uf',
			'7060qb6g',
			'ou23z3vk',
			'ie5khf98'
		),
		'categories' => array()
	),
	'jcm10x8f' => array(
		'id' => 'jcm10x8f',
		'name' => 'COOKIES & BISCOTTI',
		'containsProductsWithProductPage' => true,
		'products' => array(
			'ix6b6aan',
			'18xh6np1',
			'0votl9ob',
			'xu349cxr',
			'aboxhlbu',
			'5c3x4vp9',
			'4oib9c7f',
			'g7cwhsqx'
		),
		'categories' => array()
	),
	'b8mco3k9' => array(
		'id' => 'b8mco3k9',
		'name' => 'Pies',
		'containsProductsWithProductPage' => true,
		'products' => array(
			'p7nn7f5d',
			'apzl9hof',
			'qjadh9ox'
		),
		'categories' => array()
	),
	'nr10k4xw' => array(
		'id' => 'nr10k4xw',
		'name' => 'Custom Cakes',
		'containsProductsWithProductPage' => true,
		'products' => array(
			'xl2r3ffk',
			'wjcst7yr',
			'dwm9gjv9',
			'g8g1hzzq',
			'm57p1cnd',
			'yjy2vy0d',
			'7tr92823',
			'zo88273n',
			'l13ks1bp',
			'ki5rf8b0',
			'5ctjkqbx',
			'ujgegmpk'
		),
		'categories' => array()
	)
));
$ecommerce->setCommentsData(array(
	'enabled' => false,
	'type' => "websitex5",
	'db' => '',
	'table' => 'w5_iv75o7gj_products_comments',
	'prefix' => 'x5productPage_',
	'comment_type' => "commentandstars"
));
$ecommerce->setPaymentData(array(
	'8dkejfu5' => array(
		'id' => '8dkejfu5',
		'name' => 'Payment Due When Order is Confirmed',
		'description' => 'Someone will contact you with 24 business hours to confirm your request and delivery date. (Note: Orders placed within 72 hours of requested delivery/pick-up date will not be honored)',
		'email_text' => 'Thank you for your request. A representative will be in contact you within 24 business hours. (Note: THIS IS NOT AN ORDER until confirmed by a representative and payment is completed).',
		'enableAfterPaymentEmail' => false
	)));
$ecommerce->setShippingData(array());

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();

/*
|-------------------------------------------------------------------------------------------
|	Dynamic Objects SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['dynamicobjects'] = array(	'template' => array(
),
	'pages' => array(

	));


/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->exposeWsx5 = true;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '<meta name="generator" content="Incomedia WebSite X5 Professional 2022.2.11 - www.websitex5.com">' . "\n" . '</head>' . "\n" . '<body bgcolor="#37474F" style="background-color: #37474F;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px;">' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; padding: 10px; font: normal normal normal 12pt \'Cormorant\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; width: 700px; border-style: solid; border-color: #000000; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; background-color: #FFFFFF" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '</table>' . "\n" . '<table width="100%"><tr><td id="imEmailFooter" style="font: normal normal normal 9pt \'Cormorant\'; color: #FFFFFF; background-color: transparent; text-decoration: none; text-align: center;  padding: 10px; margin-top: 5px;background-color: transparent">' . "\n\t\t" . 'This e-mail contains information that is intended solely for the above mentioned addressee.<br>If you have received this e-mail by error, please notify the sender immediately and destroy it, without copying it.' . "\n\t" . '</td></tr></table>' . "\n\t" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#FFFFFF';
$ImMailer->bodyBackgroundEven = '#FFFFFF';
$ImMailer->bodyBackgroundOdd = '#F0F0F0';
$ImMailer->bodyBackgroundBorder = '#CDCDCD';
$ImMailer->bodyTextColorOdd = '#000000';
$ImMailer->bodySeparatorBorderColor = '#000000';
$ImMailer->emailBackground = '#37474F';
$ImMailer->emailContentStyle = 'font: normal normal normal 12pt \'Cormorant\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; ';
$ImMailer->emailContentFontFamily = 'font-family: Cormorant;';

// End of file x5settings.php