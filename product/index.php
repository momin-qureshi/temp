<?php require_once("../res/x5engine.php"); ?>
<?php $cart = Configuration::getCart(); $id = isset($_GET['id']) ? $_GET['id'] : $cart->getProductIdBySlug(array_keys($_GET)[0]); if ($id == null || $id == '') { header('Location: ' . $imSettings['general']['homepage_url']); } $product =  $cart->getProductsData($id)[$id]; if ($product == null || !isset($product['productPageLinkType']) || $product['productPageLinkType'] != 'productpage') { header('Location: ' . $imSettings['general']['homepage_url']); } ?>
<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="en-GB" dir="ltr">
	<head>
		<title><?php echo isset($product['seo']['tagTitle']) ? $product['seo']['tagTitle'] : ''; ?> - Queen of the Sweets</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="Incomedia" />
		<meta name="generator" content="Incomedia WebSite X5 Pro 2022.2.11 - www.websitex5.com" />
		<meta name="description" content="<?php echo isset($product['seo']['tagDescription']) ? $product['seo']['tagDescription'] : ''; ?>" />
		<meta name="keywords" content="<?php echo isset($product['seo']['tagKeywords']) ? $product['seo']['tagKeywords'] : ''; ?>" />
		<meta property="og:locale" content="en" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://localhost/product/?<?php echo isset($product['slug']) ? $product['slug'] : ''; ?>" />
		<meta property="og:title" content="<?php echo isset($product['name']) ? $product['name'] : ''; ?>" />
		<meta property="og:site_name" content="Queen of the Sweets" />
		<meta property="og:description" content="<?php echo isset($product['seo']['tagDescription']) ? $product['seo']['tagDescription'] : ''; ?>" />
		<meta property="og:image" content="<?php echo isset($product['thumb']['url']) ? $product['thumb']['url'] : ''; ?>" />
		<meta property="og:image:type" content="<?php echo isset($product['thumb']['type']) ? $product['thumb']['type'] : ''; ?>">
		<meta property="og:image:width" content="<?php echo isset($product['thumb']['width']) ? $product['thumb']['width'] : ''; ?>">
		<meta property="og:image:height" content="<?php echo isset($product['thumb']['height']) ? $product['thumb']['height'] : ''; ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="../style/reset.css?2022-2-11-0" media="screen,print" />
		<link rel="stylesheet" href="../style/print.css?2022-2-11-0" media="print" />
		<link rel="stylesheet" href="../style/style.css?2022-2-11-0" media="screen,print" />
		<link rel="stylesheet" href="../style/template.css?2022-2-11-0" media="screen" />
<link rel="stylesheet" href="../res/swiper-bundle.min.css" />
		
		<link rel="stylesheet" href="../pluginAppObj/imFooter_pluginAppObj_04/custom.css" media="screen, print" /><link rel="stylesheet" href="../pluginAppObj/imFooter_pluginAppObj_06/custom.css" media="screen, print" />
		<link rel="stylesheet" href="../product/style.css?2022-2-11-0-638055959918229071" media="screen,print" />
		<script src="../res/jquery.js?2022-2-11-0"></script>
		<script src="../res/x5engine.js?2022-2-11-0" data-files-version="2022-2-11-0"></script>
<script src="../res/swiper-bundle.min.js" ></script>
		
		<script src="../pluginAppObj/imFooter_pluginAppObj_04/main.js"></script><script src="../pluginAppObj/imFooter_pluginAppObj_06/main.js"></script>
		<script>
			window.onload = function(){ checkBrowserCompatibility('Your browser does not support the features necessary to display this website.','Your browser may not support the features necessary to display this website.','[1]Update your browser[/1] or [2]continue without updating[/2].','http://outdatedbrowser.com/'); };
			x5engine.settings.currentPath = '../';
			x5engine.utils.currentPagePath = 'product/index.php';
			x5engine.boot.push(function () { x5engine.imPageToTop.initializeButton({}); });
		</script>
		<link rel="icon" href="../favicon.ico?2022-2-11-0-638055959918179076" type="image/vnd.microsoft.icon" />
<?php
 	echo '<link rel="canonical" href="'. $imSettings['general']['url'] . 'product/?'. $product['slug'] . '"/>' . PHP_EOL;
 ?>
	</head>
	<body>
		<div id="imPageExtContainer">
			<div id="imPageIntContainer">
				<div id="imHeaderBg"></div>
				<div id="imFooterBg"></div>
				<div id="imPage">
					<header id="imHeader">
						<h1 class="imHidden"><?php echo isset($product['name']) ? $product['name'] : ''; ?> - Queen of the Sweets</h1>
						<div id="imHeaderObjects"><div id="imHeader_imMenuObject_04_wrapper" class="template-object-wrapper"><!-- UNSEARCHABLE --><div id="imHeader_imMenuObject_04"><div id="imHeader_imMenuObject_04_container"><div class="hamburger-button hamburger-component"><div><div><div class="hamburger-bar"></div><div class="hamburger-bar"></div><div class="hamburger-bar"></div></div></div></div><div class="hamburger-menu-background-container hamburger-component">
	<div class="hamburger-menu-background menu-mobile menu-mobile-animated hidden">
		<div class="hamburger-menu-close-button"><span>&times;</span></div>
	</div>
</div>
<ul class="menu-mobile-animated hidden">
	<li class="imMnMnFirst imPage" data-link-paths=",/index.html,/">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../index.html">
HOME PAGE		</a>
</div>
</div>
	</li><li class="imMnMnMiddle imPage" data-link-paths=",/about-me-1.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../about-me-1.html">
ABOUT ME		</a>
</div>
</div>
	</li><li class="imMnMnLast imPage" data-link-paths=",/shop.html">
<div class="label-wrapper">
<div class="label-inner-wrapper">
		<a class="label" href="../shop.html">
SHOP		</a>
</div>
</div>
	</li></ul></div></div><!-- UNSEARCHABLE END --><script>
var imHeader_imMenuObject_04_settings = {
	'menuId': 'imHeader_imMenuObject_04',
	'responsiveMenuEffect': 'slide',
	'responsiveMenuLevelOpenEvent': 'mouseover',
	'animationDuration': 1000,
}
x5engine.boot.push(function(){x5engine.initMenu(imHeader_imMenuObject_04_settings)});
$(function () {$('#imHeader_imMenuObject_04_container ul li').not('.imMnMnSeparator').each(function () {    var $this = $(this), timeout = 0;    $this.on('mouseenter', function () {        if($(this).parents('#imHeader_imMenuObject_04_container-menu-opened').length > 0) return;         clearTimeout(timeout);        setTimeout(function () { $this.children('ul, .multiple-column').stop(false, false).fadeIn(); }, 250);    }).on('mouseleave', function () {        if($(this).parents('#imHeader_imMenuObject_04_container-menu-opened').length > 0) return;         timeout = setTimeout(function () { $this.children('ul, .multiple-column').stop(false, false).fadeOut(); }, 250);    });});});

</script>
</div><div id="imHeader_imObjectImage_05_wrapper" class="template-object-wrapper"><div id="imHeader_imObjectImage_05"><div id="imHeader_imObjectImage_05_container"><img src="../images/qlogo_jcp18g5n.png" title="" alt="" />
</div></div></div></div>
					</header>
					<div id="imStickyBarContainer">
						<div id="imStickyBarGraphics"></div>
						<div id="imStickyBar">
							<div id="imStickyBarObjects"></div>
						</div>
					</div>
					<a class="imHidden" href="#imGoToCont" title="Skip the main menu">Go to content</a>
					<div id="imSideBar">
						<div id="imSideBarObjects"></div>
					</div>
					<div id="imContentGraphics"></div>
					<main id="imContent">
						<a id="imGoToCont"></a>
						<div id="im-product-container" class="hidden">
						<div class="product-details-page">
						<div class="container-gallery-info mb">
						<div class="container-gallery">
						<div class="product-info mbs">
						<div class="product-title two-lines lines-ellipsis"></div>
						<div class="product-category imBreadcrumb"></div>
						</div>
						<div class="container-gallery-top">
						<div id="swiper-container-gallery" class="swiper-container gallery-top">
						<div class="swiper-wrapper"></div>
						</div>
						<div class="swiper-button-next top"></div>
						<div class="swiper-button-prev top"></div>
						</div>
						<div class="container-gallery-thumbs">
						<div class="swiper-container gallery-thumbs">
						<div class="swiper-wrapper"></div>
						</div>
						<div class="swiper-button-next thumbs"></div>
						<div class="swiper-button-prev thumbs"></div>
						</div>
						</div>
						<div class="container-info">
						<div class="product-title two-lines lines-ellipsis"></div>
						<div class="product-category imBreadcrumb"></div>
						<div class="product-description m-b"></div>
						<hr class="product-separator" />
						<div class="product-available m-b small-font"></div>
						<div class="product-qty-discount m-b"></div>
						<div class="product-options small-font"></div>
						<div class="product-ppcp-pay-later"></div>
						<div class="product-price-quantity-add">
						<div class="product-price"></div>
						<div class="product-quantity-add">
						<div class="product-quantity">
						<input type="number" class="im-products-qty" value="1" min="1"/>
						</div>
						<div class="product-add"></div>
						</div>
						</div>
						</div>
						</div>
						<div class="container-details mb hidden"></div>
						<div class="container-related-products d-none">
						<div class="big-font bold">You may be interested in</div>
						<hr class="product-separator"/>
						<div class="gallery-related-products">
						<div class="swiper-container">
						<div class="swiper-wrapper"></div>
						</div>
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
						</div>
						</div>
						</div>
						</div>
						<script>x5engine.boot.push('x5engine.cart.productDetails.init({ target: \'im-product-container\', showRelatedProducts: true, innerWidths: \[1150,720,480,0]\, videoHiresWidth: 2560, videoHiresHeight: 1440, minThumbSize: 48, galleryWidthPerc: 50, galleryHeightPx: 400, galleryThumbnailHeightPx: 64 })', false, 6);</script>
						
					</main>
					<footer id="imFooter">
						<div id="imFooterObjects"><div id="imFooter_imObjectImage_01_wrapper" class="template-object-wrapper"><div id="imFooter_imObjectImage_01"><div id="imFooter_imObjectImage_01_container"><img src="../images/output-onlinepngtools--1-.png" title="" alt="" />
</div></div></div><div id="imFooter_pluginAppObj_04_wrapper" class="template-object-wrapper"><!-- Social Icons v.16 --><div id="imFooter_pluginAppObj_04">
            <div id="soc_imFooter_pluginAppObj_04">
                <div class="wrapper horizontal flat none">
                	<div class='social-icon flat'><a href='https://web.facebook.com/TheeQueenOfTheSweets/' target='_blank'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M57,93V54H70.14l2-15H57V29.09c0-4.39.94-7.39,7.24-7.39H72V8.14a98.29,98.29,0,0,0-11.6-.6C48.82,7.54,41,14.61,41,27.59V39H27V54H41V93H57Z"/></svg><span class='fallbacktext'>Fb</span></a></div><div class='social-icon flat'><a href='https://www.instagram.com/theequeenofthesweets/' target='_blank'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><g><path d="M50,15.16c11.35,0,12.69,0,17.17.25a23.52,23.52,0,0,1,7.89,1.46,14.07,14.07,0,0,1,8.07,8.07,23.52,23.52,0,0,1,1.46,7.89c0.2,4.48.25,5.83,0.25,17.17s0,12.69-.25,17.17a23.52,23.52,0,0,1-1.46,7.89,14.07,14.07,0,0,1-8.07,8.07,23.52,23.52,0,0,1-7.89,1.46c-4.48.2-5.82,0.25-17.17,0.25s-12.69,0-17.17-.25a23.52,23.52,0,0,1-7.89-1.46,14.07,14.07,0,0,1-8.07-8.07,23.52,23.52,0,0,1-1.46-7.89c-0.2-4.48-.25-5.83-0.25-17.17s0-12.69.25-17.17a23.52,23.52,0,0,1,1.46-7.89,14.07,14.07,0,0,1,8.07-8.07,23.52,23.52,0,0,1,7.89-1.46c4.48-.2,5.83-0.25,17.17-0.25M50,7.5c-11.54,0-13,0-17.52.26a31.19,31.19,0,0,0-10.32,2A21.73,21.73,0,0,0,9.73,22.16a31.19,31.19,0,0,0-2,10.32C7.55,37,7.5,38.46,7.5,50s0,13,.26,17.52a31.19,31.19,0,0,0,2,10.32A21.73,21.73,0,0,0,22.16,90.27a31.19,31.19,0,0,0,10.32,2c4.53,0.21,6,.26,17.52.26s13,0,17.52-.26a31.19,31.19,0,0,0,10.32-2A21.73,21.73,0,0,0,90.27,77.84a31.19,31.19,0,0,0,2-10.32c0.21-4.53.26-6,.26-17.52s0-13-.26-17.52a31.19,31.19,0,0,0-2-10.32A21.73,21.73,0,0,0,77.84,9.73a31.19,31.19,0,0,0-10.32-2C63,7.55,61.54,7.5,50,7.5h0Z"/><path d="M50,28.18A21.82,21.82,0,1,0,71.82,50,21.82,21.82,0,0,0,50,28.18Zm0,36A14.17,14.17,0,1,1,64.17,50,14.17,14.17,0,0,1,50,64.17Z"/><circle cx="72.69" cy="27.31" r="5.1"/></g></svg><span class='fallbacktext'>Ig</span></a></div>
                </div>

            </div>
                <script>
                    socialicons_imFooter_pluginAppObj_04();
                </script>
        </div></div><div id="imFooter_imObjectImage_05_wrapper" class="template-object-wrapper"><div id="imFooter_imObjectImage_05"><div id="imFooter_imObjectImage_05_container"><img src="../images/qlogo_jcp18g5n.png" title="" alt="" />
</div></div></div><div id="imFooter_pluginAppObj_06_wrapper" class="template-object-wrapper"><!-- Social Icons v.16 --><div id="imFooter_pluginAppObj_06">
            <div id="soc_imFooter_pluginAppObj_06">
                <div class="wrapper horizontal flat none">
                	<div class='social-icon flat'><a href='https://web.facebook.com/TheeQueenOfTheSweets/' target='_blank'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><path d="M57,93V54H70.14l2-15H57V29.09c0-4.39.94-7.39,7.24-7.39H72V8.14a98.29,98.29,0,0,0-11.6-.6C48.82,7.54,41,14.61,41,27.59V39H27V54H41V93H57Z"/></svg><span class='fallbacktext'>Fb</span></a></div><div class='social-icon flat'><a href='https://www.instagram.com/theequeenofthesweets/' target='_blank'><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><g><path d="M50,15.16c11.35,0,12.69,0,17.17.25a23.52,23.52,0,0,1,7.89,1.46,14.07,14.07,0,0,1,8.07,8.07,23.52,23.52,0,0,1,1.46,7.89c0.2,4.48.25,5.83,0.25,17.17s0,12.69-.25,17.17a23.52,23.52,0,0,1-1.46,7.89,14.07,14.07,0,0,1-8.07,8.07,23.52,23.52,0,0,1-7.89,1.46c-4.48.2-5.82,0.25-17.17,0.25s-12.69,0-17.17-.25a23.52,23.52,0,0,1-7.89-1.46,14.07,14.07,0,0,1-8.07-8.07,23.52,23.52,0,0,1-1.46-7.89c-0.2-4.48-.25-5.83-0.25-17.17s0-12.69.25-17.17a23.52,23.52,0,0,1,1.46-7.89,14.07,14.07,0,0,1,8.07-8.07,23.52,23.52,0,0,1,7.89-1.46c4.48-.2,5.83-0.25,17.17-0.25M50,7.5c-11.54,0-13,0-17.52.26a31.19,31.19,0,0,0-10.32,2A21.73,21.73,0,0,0,9.73,22.16a31.19,31.19,0,0,0-2,10.32C7.55,37,7.5,38.46,7.5,50s0,13,.26,17.52a31.19,31.19,0,0,0,2,10.32A21.73,21.73,0,0,0,22.16,90.27a31.19,31.19,0,0,0,10.32,2c4.53,0.21,6,.26,17.52.26s13,0,17.52-.26a31.19,31.19,0,0,0,10.32-2A21.73,21.73,0,0,0,90.27,77.84a31.19,31.19,0,0,0,2-10.32c0.21-4.53.26-6,.26-17.52s0-13-.26-17.52a31.19,31.19,0,0,0-2-10.32A21.73,21.73,0,0,0,77.84,9.73a31.19,31.19,0,0,0-10.32-2C63,7.55,61.54,7.5,50,7.5h0Z"/><path d="M50,28.18A21.82,21.82,0,1,0,71.82,50,21.82,21.82,0,0,0,50,28.18Zm0,36A14.17,14.17,0,1,1,64.17,50,14.17,14.17,0,0,1,50,64.17Z"/><circle cx="72.69" cy="27.31" r="5.1"/></g></svg><span class='fallbacktext'>Ig</span></a></div>
                </div>

            </div>
                <script>
                    socialicons_imFooter_pluginAppObj_06();
                </script>
        </div></div><div id="imFooter_imTextObject_07_wrapper" class="template-object-wrapper"><div id="imFooter_imTextObject_07">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imFooter_imTextObject_07_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div><div data-line-height="1" class="lh1 imTACenter"><span class="fs11lh1 cf1"><b>Riverview, FL</b></span></div><div data-line-height="1" class="lh1 imTACenter"><span class="fs11lh1 cf1"><b>(813) 559-1984 (O)</b></span></div><div data-line-height="1" class="lh1 imTACenter"><span class="fs11lh1 cf1"><b>Jackie@QueenOfTheSweets.com (E)</b></span></div></div><div><div class="imTACenter"><br></div></div>
		</div>
	</div>

</div>
</div><div id="imFooter_imTextObject_08_wrapper" class="template-object-wrapper"><div id="imFooter_imTextObject_08">
	<div data-index="0"  class="text-tab-content grid-prop current-tab "  id="imFooter_imTextObject_08_tab0" style="opacity: 1; ">
		<div class="text-inner">
			<div><i><span class="fs14lh1-5 cf1"><b>Powered by Madsen Technologies</b></span></i></div>
		</div>
	</div>

</div>
</div></div>
					</footer>
				</div>
				<span class="imHidden"><a href="#imGoToCont" title="Read this page again">Back to content</a></span>
			</div>
		</div>
		<script src="../cart/x5cart.js?2022-2-11-0-638055959918239069"></script>
		<noscript class="imNoScript"><div class="alert alert-red">To use this website you must enable JavaScript.</div></noscript>
	</body>
</html>
