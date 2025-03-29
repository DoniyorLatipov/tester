<?php

// Подключаем файл конфигурации базы данных
require_once('admin/config.php');

// Стартуем сессию
session_start();

// Подключаемся к базе данных
$db = new DatabaseConfig();
$conn = $db->connect();

$stmt = $conn->query("SELECT id, name, category FROM blogs");
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Группируем статьи по категориям
$groupedPosts = [];
foreach ($posts as $post) {
	$groupedPosts[$post['category']][] = $post;
}

$sql = "SELECT COLUMN_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_NAME = 'blogs' AND COLUMN_NAME = 'category'";
$query = $conn->query($sql);
$row = $query->fetch(PDO::FETCH_ASSOC);

$enumStr = $row['COLUMN_TYPE'];
$enumStr = str_replace(["enum(", ")", "'"], "", $enumStr);
$categories = explode(",", $enumStr);

$categoryNames = [
	'business' => 'Бизнес',
	'tax' => 'Налоги',
	'immigration' => 'Иммиграция',
	'criminal' => 'Уголовное Право',
	'family' => 'Семейные споры',
	'estate' => "Недвижимость"
];

?>

<!DOCTYPE html>
<html
	class="avada-html-layout-wide avada-html-header-position-top avada-is-100-percent-template avada-mobile-header-color-not-opaque awb-scroll"
	lang="ru" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="max-image-preview:large">
	<style>
		img:is([sizes="auto" i], [sizes^="auto," i]) {
			contain-intrinsic-size: 3000px 1500px
		}
	</style>


	<link rel="shortcut icon" href="wp-content/uploads/2022/04/TheFirmLogo_LawGroup-v2.png">



	<title>Ошибка 404 Страница не существует</title>
	<meta name="description"
		content="юридической фирмы Acarkan & Semenov поможет вам со всеми юридическими вопросами в сша, но не на этой странице.">
	<meta name="keywords"
		content="контакты адвокатов, юридическая помощь в США, офисы США, юридические услуги, консультация адвоката, юридическая фирма, Acarkan & Semenov">

	<!-- Canonical URL -->
	<link rel="canonical" href="https://acarkansemenov.com/404">

	<!-- Open Graph (для соцсетей) -->
	<meta property="og:locale" content="ru_RU">
	<meta property="og:type" content="website">
	<meta property="og:title" content="404 – Acarkan & Semenov">
	<meta property="og:description"
		content="юридической фирмы Acarkan & Semenov поможет вам со всеми юридическими вопросами в сша, но не на этой странице.">
	<meta property="og:url" content="https://acarkansemenov.com/404">
	<meta property="og:image" content="/img/logo.png">
	<meta property="og:image:width" content="287">
	<meta property="og:image:height" content="236">
	<meta property="og:image:type" content="image/png">
	<script>
		/* <![CDATA[ */
		window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/15.0.3\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "wp-includes\/js\/wp-emoji-release.min.js?ver=6.7.2" } };
		/*! This file is auto-generated */
		!function (i, n) { var o, s, e; function c(e) { try { var t = { supportTests: e, timestamp: (new Date).valueOf() }; sessionStorage.setItem(o, JSON.stringify(t)) } catch (e) { } } function p(e, t, n) { e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0); var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data), r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data)); return t.every(function (e, t) { return e === r[t] }) } function u(e, t, n) { switch (t) { case "flag": return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e, "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"); case "emoji": return !n(e, "\ud83d\udc26\u200d\u2b1b", "\ud83d\udc26\u200b\u2b1b") }return !1 } function f(e, t, n) { var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"), a = r.getContext("2d", { willReadFrequently: !0 }), o = (a.textBaseline = "top", a.font = "600 32px Arial", {}); return e.forEach(function (e) { o[e] = t(a, e, n) }), o } function t(e) { var t = i.createElement("script"); t.src = e, t.defer = !0, i.head.appendChild(t) } "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = { everything: !0, everythingExceptFlag: !0 }, e = new Promise(function (e) { i.addEventListener("DOMContentLoaded", e, { once: !0 }) }), new Promise(function (t) { var n = function () { try { var e = JSON.parse(sessionStorage.getItem(o)); if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests } catch (e) { } return null }(); if (!n) { if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try { var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));", r = new Blob([e], { type: "text/javascript" }), a = new Worker(URL.createObjectundefined, { name: "wpTestEmojiSupports" }); return void (a.onmessage = function (e) { c(n = e.data), a.terminate(), t(n) }) } catch (e) { } c(n = f(s, u, p)) } t(n) }).then(function (e) { for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]); n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function () { n.DOMReady = !0 } }).then(function () { return e }).then(function () { var e; n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji))) })) }((window, document), window._wpemojiSettings);
		/* ]]> */
	</script>
	<style id="wp-emoji-styles-inline-css" type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 0.07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel="stylesheet" id="fusion-dynamic-css-css"
		href="wp-content/uploads/fusion-styles/a31ad846e819e1974edf6da7208fc826.min.css" media="all">
	<script src="wp-includes/js/jquery/jquery.min.js" id="jquery-core-js"></script>
	<script src="wp-includes/js/jquery/jquery-migrate.min.js" id="jquery-migrate-js"></script>






	<style type="text/css" id="css-fb-visibility">
		@media screen and (max-width: 640px) {
			.fusion-no-small-visibility {
				display: none !important;
			}

			body .sm-text-align-center {
				text-align: center !important;
			}

			body .sm-text-align-left {
				text-align: left !important;
			}

			body .sm-text-align-right {
				text-align: right !important;
			}

			body .sm-flex-align-center {
				justify-content: center !important;
			}

			body .sm-flex-align-flex-start {
				justify-content: flex-start !important;
			}

			body .sm-flex-align-flex-end {
				justify-content: flex-end !important;
			}

			body .sm-mx-auto {
				margin-left: auto !important;
				margin-right: auto !important;
			}

			body .sm-ml-auto {
				margin-left: auto !important;
			}

			body .sm-mr-auto {
				margin-right: auto !important;
			}

			body .fusion-absolute-position-small {
				position: absolute;
				top: auto;
				width: 100%;
			}

			.awb-sticky.awb-sticky-small {
				position: sticky;
				top: var(--awb-sticky-offset, 0);
			}
		}

		@media screen and (min-width: 641px) and (max-width: 1024px) {
			.fusion-no-medium-visibility {
				display: none !important;
			}

			body .md-text-align-center {
				text-align: center !important;
			}

			body .md-text-align-left {
				text-align: left !important;
			}

			body .md-text-align-right {
				text-align: right !important;
			}

			body .md-flex-align-center {
				justify-content: center !important;
			}

			body .md-flex-align-flex-start {
				justify-content: flex-start !important;
			}

			body .md-flex-align-flex-end {
				justify-content: flex-end !important;
			}

			body .md-mx-auto {
				margin-left: auto !important;
				margin-right: auto !important;
			}

			body .md-ml-auto {
				margin-left: auto !important;
			}

			body .md-mr-auto {
				margin-right: auto !important;
			}

			body .fusion-absolute-position-medium {
				position: absolute;
				top: auto;
				width: 100%;
			}

			.awb-sticky.awb-sticky-medium {
				position: sticky;
				top: var(--awb-sticky-offset, 0);
			}
		}

		@media screen and (min-width: 1025px) {
			.fusion-no-large-visibility {
				display: none !important;
			}

			body .lg-text-align-center {
				text-align: center !important;
			}

			body .lg-text-align-left {
				text-align: left !important;
			}

			body .lg-text-align-right {
				text-align: right !important;
			}

			body .lg-flex-align-center {
				justify-content: center !important;
			}

			body .lg-flex-align-flex-start {
				justify-content: flex-start !important;
			}

			body .lg-flex-align-flex-end {
				justify-content: flex-end !important;
			}

			body .lg-mx-auto {
				margin-left: auto !important;
				margin-right: auto !important;
			}

			body .lg-ml-auto {
				margin-left: auto !important;
			}

			body .lg-mr-auto {
				margin-right: auto !important;
			}

			body .fusion-absolute-position-large {
				position: absolute;
				top: auto;
				width: 100%;
			}

			.awb-sticky.awb-sticky-large {
				position: sticky;
				top: var(--awb-sticky-offset, 0);
			}
		}
	</style>
	<style type="text/css">
		.recentcomments a {
			display: inline !important;
			padding: 0 !important;
			margin: 0 !important;
		}
	</style>
	<script>function setREVStartSize(e) {
			//window.requestAnimationFrame(function() {
			window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
			window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
			try {
				var pw = document.getElementById(e.c).parentNode.offsetWidth,
					newh;
				pw = pw === 0 || isNaN(pw) || (e.l == "fullwidth" || e.layout == "fullwidth") ? window.RSIW : pw;
				e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
				e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
				e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
				e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
				e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
				e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
				e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
				if (e.layout === "fullscreen" || e.l === "fullscreen")
					newh = Math.max(e.mh, window.RSIH);
				else {
					e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
					for (var i in e.rl) if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
					e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
					e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
					for (var i in e.rl) if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

					var nl = new Array(e.rl.length),
						ix = 0,
						sl;
					e.tabw = e.tabhide >= pw ? 0 : e.tabw;
					e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
					e.tabh = e.tabhide >= pw ? 0 : e.tabh;
					e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
					for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
					sl = nl[0];
					for (var i in nl) if (sl > nl[i] && nl[i] > 0) { sl = nl[i]; ix = i; }
					var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
					newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
				}
				var el = document.getElementById(e.c);
				if (el !== null && el) el.style.height = newh + "px";
				el = document.getElementById(e.c + "_wrapper");
				if (el !== null && el) {
					el.style.height = newh + "px";
					el.style.display = "block";
				}
			} catch (e) {
				console.log("Failure at Presize of Slider:" + e)
			}
			//});
		};</script>
	<script>
		var doc = document.documentElement;
		doc.setAttribute('data-useragent', navigator.userAgent);
	</script>

	<script
		src="wp-content/plugins/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script
		src="wp-content/plugins/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<style id="stylescp">
		.hidden-scp {
			display: none !important;
		}

		.language-selector {
			position: relative;
			display: inline-block;
		}

		.dropdown-btn {
			background-color: transparent;
			color: white;
			border: none;
			padding: 10px 15px;
			cursor: pointer;
			font-size: 16px;
			border-radius: 5px;
		}

		.dropdown-menu {
			display: none;
			position: absolute;
			top: 100%;
			left: 0;
			background: white;
			box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
			border-radius: 5px;
			min-width: 150px;
			z-index: 10000000;
			padding: 0;
		}

		.dropdown-menu li {
			list-style: none;
		}

		.dropdown-menu a {
			display: block;
			padding: 10px;
			color: black;
			text-decoration: none;
		}

		.dropdown-menu a:hover {
			background-color: #f0f0f0;
		}

		.show {
			display: block;
		}

		.fusion-social-networks {
			overflow: visible !important;
		}

		.fusion-social-networks-wrapper {
			display: flex;
			justify-content: space-between;
			align-items: center;
		}
	</style>
	<link id="linkscp" rel="stylesheet" href="css/scp-styles.css">
</head>
<style>
	.fusion-header {
		height: auto !important;
	}

	@media screen and (max-width: 1024px) {
		.menu-text {
			font-size: 32px;
			line-height: 120%;
		}

		.fusion-header-has-flyout-menu .fusion-header-has-flyout-menu-content {
			flex-direction: row !important;
		}
	}
</style>

<body
	class="page-template page-template-100-width page-template-100-width-php page page-id-3500 fusion-image-hovers fusion-pagination-sizing fusion-button_type-flat fusion-button_span-no fusion-button_gradient-linear avada-image-rollover-circle-no avada-image-rollover-yes avada-image-rollover-direction-fade fusion-body ltr fusion-sticky-header no-mobile-slidingbar no-desktop-totop no-mobile-totop fusion-disable-outline fusion-sub-menu-fade mobile-logo-pos-left layout-wide-mode avada-has-boxed-modal-shadow- layout-scroll-offset-full avada-has-zero-margin-offset-top fusion-top-header menu-text-align-center mobile-menu-design-flyout fusion-show-pagination-text fusion-header-layout-v3 avada-responsive avada-footer-fx-none avada-menu-highlight-style-textcolor fusion-search-form-clean fusion-main-menu-search-overlay fusion-avatar-circle avada-sticky-shrinkage avada-dropdown-styles avada-blog-layout-large avada-blog-archive-layout-large avada-header-shadow-no avada-menu-icon-position-left avada-has-megamenu-shadow avada-has-pagetitle-100-width avada-has-pagetitle-bg-parallax avada-has-breadcrumb-mobile-hidden avada-has-titlebar-bar_and_content avada-header-border-color-full-transparent avada-has-transparent-timeline_color avada-has-pagination-width_height avada-flyout-menu-direction-fade avada-ec-views-v1"
	data-awb-post-id="3500">
	<a class="skip-link screen-reader-text" href="/#content">Skip to content</a>

	<div id="boxed-wrapper">

		<div id="wrapper" class="fusion-wrapper">
			<div id="home" style="position:relative;top:-1px;"></div>


			<header class="fusion-header-wrapper">
				<div
					class="fusion-header-v3 fusion-logo-alignment fusion-logo-left fusion-sticky-menu- fusion-sticky-logo- fusion-mobile-logo-  fusion-mobile-menu-design-flyout fusion-header-has-flyout-menu">

					<div class="fusion-secondary-header">
						<div class="fusion-row">
							<div class="fusion-alignleft">
								<div class="fusion-social-links-header">
									<div class="fusion-social-networks">
										<div class="fusion-social-networks-wrapper">
											<div>
												<a class="fusion-social-network-icon fusion-tooltip fusion-instagram awb-icon-instagram"
													style="" data-placement="bottom" data-title="Instagram"
													data-toggle="tooltip" title="Instagram"
													href="https://www.instagram.com/" target="_blank"
													rel="noopener noreferrer"><span
														class="screen-reader-text">Instagram</span></a><a
													class="fusion-social-network-icon fusion-tooltip fusion-facebook awb-icon-facebook"
													style="" data-placement="bottom" data-title="Facebook"
													data-toggle="tooltip" title="Facebook"
													href="https://www.facebook.com/" target="_blank"
													rel="noreferrer"><span
														class="screen-reader-text">Facebook</span></a>
											</div>
											<div class="language-selector">
												<button class="dropdown-btn">RU | EN</button>
												<ul class="dropdown-menu">
													<li><a href="?lang=ru">RU - Русский</a></li>
													<li><a href="?lang=en">EN - English</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="fusion-header-sticky-height"></div>
					<div class="fusion-header">
						<div class="fusion-row">
							<div class="fusion-header-has-flyout-menu-content">
								<div class="fusion-logo" data-margin-top="5px" data-margin-bottom="5px"
									data-margin-left="0px" data-margin-right="0px">
									<a class="fusion-logo-link" href="/">

										<!-- standard logo -->
										<img src="wp-content/uploads/2021/06/the-firm-lawgroup.png"
											srcset="wp-content/uploads/2021/06/the-firm-lawgroup.png 1x" width="280"
											height="49" alt="Acarcan & Semenov Logo" data-retina_logo_url=""
											class="fusion-standard-logo">


									</a>
								</div>
								<nav class="fusion-main-menu" aria-label="Main Menu">
									<div class="fusion-overlay-search">
										<form role="search"
											class="searchform fusion-search-form  fusion-search-form-clean">
											<div class="fusion-search-form-content">


												<div class="fusion-search-field search-field">
													<label><span class="screen-reader-text">Search for:</span>
														<input type="search" value="" name="s" class="s"
															placeholder="Search..." required="" aria-required="true"
															aria-label="Search...">
													</label>
												</div>
												<div class="fusion-search-button search-button">
													<input type="submit" class="fusion-search-submit searchsubmit"
														aria-label="Search" value="">
												</div>


											</div>



										</form>
										<div class="fusion-search-spacer"></div><a href="/" role="button"
											aria-label="Close Search" class="fusion-close-search"></a>
									</div>
									<ul id="menu-main-menu" class="fusion-menu">
										<li id="menu-item-3535"
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-3443 current_page_item menu-item-3535"
											data-item-id="3535"><a href="/" class="fusion-textcolor-highlight"><span
													class="menu-text">Главная</span></a></li>
										<li id="menu-item-3534"
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3534"
											data-item-id="3534"><a href="about" class="fusion-textcolor-highlight"><span
													class="menu-text">О
													Нас</span></a></li>
										<?php foreach ($categories as $category): ?>
											<li
												class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children fusion-dropdown-menu">
												<a href="<?php echo $category ?>" class="fusion-textcolor-highlight">
													<span
														class="menu-text"><?= htmlspecialchars($categoryNames[$category] ?? $category) ?></span>
													<span class="fusion-caret"><i class="fusion-dropdown-indicator"
															aria-hidden="true"></i></span>
												</a>
												<ul class="sub-menu">
													<?php if (!empty($groupedPosts[$category])): ?>
														<?php foreach ($groupedPosts[$category] as $post): ?>
															<li class="menu-item fusion-dropdown-submenu">
																<a href="post<?= $post['id'] ?>" class="fusion-textcolor-highlight">
																	<span><?= htmlspecialchars($post['name']) ?></span>
																</a>
															</li>
														<?php endforeach; ?>
													<?php else: ?>
														<li class="menu-item fusion-dropdown-submenu">
															<span
																class="fusion-textcolor-highlight fusion-textcolor-highlight">Нет
																статей</span>
														</li>
													<?php endif; ?>
												</ul>
											</li>
										<?php endforeach; ?>



										<li id="menu-item-3531"
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3531"
											data-item-id="3531"><a href="contact"
												class="fusion-textcolor-highlight"><span
													class="menu-text">Контакты</span></a></li>
									</ul>
								</nav>
								<div class="fusion-mobile-navigation">
									<ul id="menu-main-menu-1" class="fusion-mobile-menu">
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-3443 current_page_item menu-item-3535"
											data-item-id="3535"><a href="/" class="fusion-textcolor-highlight"><span
													class="menu-text">Главная</span></a></li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3534"
											data-item-id="3534"><a href="about" class="fusion-textcolor-highlight"><span
													class="menu-text">О
													Нас</span></a></li>
										<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3643 fusion-dropdown-menu"
											data-item-id="3643"><a href="business"
												class="fusion-textcolor-highlight"><span class="menu-text">Бизнес
												</span> <span class="fusion-caret"><i class="fusion-dropdown-indicator"
														aria-hidden="true"></i></span></a>
											<!--<ul class="sub-menu">-->
											<!--	<li-->
											<!--		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3964 fusion-dropdown-submenu">-->
											<!--		<a href=""-->
											<!--			class="fusion-textcolor-highlight"><span>Personal-->
											<!--				Injury</span></a>-->
											<!--	</li>-->
											<!--	<li-->
											<!--		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3647 fusion-dropdown-submenu">-->
											<!--		<a href=""-->
											<!--			class="fusion-textcolor-highlight"><span>Real Estate</span></a>-->
											<!--	</li>-->
											<!--	<li-->
											<!--		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3644 fusion-dropdown-submenu">-->
											<!--		<a href=""-->
											<!--			class="fusion-textcolor-highlight"><span>Commercial&nbsp;Litigation</span></a>-->
											<!--	</li>-->
											<!--	<li-->
											<!--		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3646 fusion-dropdown-submenu">-->
											<!--		<a href=""-->
											<!--			class="fusion-textcolor-highlight"><span>Insurance-->
											<!--				Claims</span></a>-->
											<!--	</li>-->
											<!--</ul>-->
										</li>
										<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3643 fusion-dropdown-menu"
											data-item-id="3643"><a href="tax" class="fusion-textcolor-highlight"><span
													class="menu-text">Налоги
												</span> <span class="fusion-caret"><i class="fusion-dropdown-indicator"
														aria-hidden="true"></i></span></a>
											<!--<ul class="sub-menu">-->
											<!--	<li-->
											<!--		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3964 fusion-dropdown-submenu">-->
											<!--		<a href=""-->
											<!--			class="fusion-textcolor-highlight"><span>Personal-->
											<!--				Injury</span></a>-->
											<!--	</li>-->
											<!--	<li-->
											<!--		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3647 fusion-dropdown-submenu">-->
											<!--		<a href=""-->
											<!--			class="fusion-textcolor-highlight"><span>Real Estate</span></a>-->
											<!--	</li>-->
											<!--	<li-->
											<!--		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3644 fusion-dropdown-submenu">-->
											<!--		<a href=""-->
											<!--			class="fusion-textcolor-highlight"><span>Commercial&nbsp;Litigation</span></a>-->
											<!--	</li>-->
											<!--	<li-->
											<!--		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3646 fusion-dropdown-submenu">-->
											<!--		<a href=""-->
											<!--			class="fusion-textcolor-highlight"><span>Insurance-->
											<!--				Claims</span></a>-->
											<!--	</li>-->
											<!--</ul>-->
										</li>
										<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3643 fusion-dropdown-menu"
											data-item-id="3643"><a href="immigration"
												class="fusion-textcolor-highlight"><span class="menu-text">Иммиграция
												</span> <span class="fusion-caret"><i class="fusion-dropdown-indicator"
														aria-hidden="true"></i></span></a>
											<!--<ul class="sub-menu">-->
											<!--	<li-->
											<!--		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3964 fusion-dropdown-submenu">-->
											<!--		<a href=""-->
											<!--			class="fusion-textcolor-highlight"><span>Personal-->
											<!--				Injury</span></a>-->
											<!--	</li>-->
											<!--	<li-->
											<!--		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3647 fusion-dropdown-submenu">-->
											<!--		<a href=""-->
											<!--			class="fusion-textcolor-highlight"><span>Real Estate</span></a>-->
											<!--	</li>-->
											<!--	<li-->
											<!--		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3644 fusion-dropdown-submenu">-->
											<!--		<a href=""-->
											<!--			class="fusion-textcolor-highlight"><span>Commercial&nbsp;Litigation</span></a>-->
											<!--	</li>-->
											<!--	<li-->
											<!--		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3646 fusion-dropdown-submenu">-->
											<!--		<a href=""-->
											<!--			class="fusion-textcolor-highlight"><span>Insurance-->
											<!--				Claims</span></a>-->
											<!--	</li>-->
											<!--</ul>-->
										</li>
										<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3643 fusion-dropdown-menu"
											data-item-id="3643"><a href="criminal"
												class="fusion-textcolor-highlight"><span class="menu-text">Уголовное
													Право</span> <span class="fusion-caret"><i
														class="fusion-dropdown-indicator"
														aria-hidden="true"></i></span></a>
											<!--<ul class="sub-menu">-->
											<!--	<li-->
											<!--		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3964 fusion-dropdown-submenu">-->
											<!--		<a href=""-->
											<!--			class="fusion-textcolor-highlight"><span>Personal-->
											<!--				Injury</span></a>-->
											<!--	</li>-->
											<!--	<li-->
											<!--		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3647 fusion-dropdown-submenu">-->
											<!--		<a href=""-->
											<!--			class="fusion-textcolor-highlight"><span>Real Estate</span></a>-->
											<!--	</li>-->
											<!--	<li-->
											<!--		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3644 fusion-dropdown-submenu">-->
											<!--		<a href=""-->
											<!--			class="fusion-textcolor-highlight"><span>Commercial&nbsp;Litigation</span></a>-->
											<!--	</li>-->
											<!--	<li-->
											<!--		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3646 fusion-dropdown-submenu">-->
											<!--		<a href=""-->
											<!--			class="fusion-textcolor-highlight"><span>Insurance-->
											<!--				Claims</span></a>-->
											<!--	</li>-->
											<!--</ul>-->
										</li>
										<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3643 fusion-dropdown-menu"
											data-item-id="3643"><a href="family"
												class="fusion-textcolor-highlight"><span class="menu-text">Семейные
													Споры</span> <span class="fusion-caret"><i
														class="fusion-dropdown-indicator"
														aria-hidden="true"></i></span></a>
											<!--<ul class="sub-menu">-->
											<!--	<li-->
											<!--		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3964 fusion-dropdown-submenu">-->
											<!--		<a href=""-->
											<!--			class="fusion-textcolor-highlight"><span>Personal-->
											<!--				Injury</span></a>-->
											<!--	</li>-->
											<!--	<li-->
											<!--		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3647 fusion-dropdown-submenu">-->
											<!--		<a href=""-->
											<!--			class="fusion-textcolor-highlight"><span>Real Estate</span></a>-->
											<!--	</li>-->
											<!--	<li-->
											<!--		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3644 fusion-dropdown-submenu">-->
											<!--		<a href=""-->
											<!--			class="fusion-textcolor-highlight"><span>Commercial&nbsp;Litigation</span></a>-->
											<!--	</li>-->
											<!--	<li-->
											<!--		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3646 fusion-dropdown-submenu">-->
											<!--		<a href=""-->
											<!--			class="fusion-textcolor-highlight"><span>Insurance-->
											<!--				Claims</span></a>-->
											<!--	</li>-->
											<!--</ul>-->
										</li>
										<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3643 fusion-dropdown-menu"
											data-item-id="3643"><a href="estate"
												class="fusion-textcolor-highlight"><span
													class="menu-text">Недвижимость</span> <span class="fusion-caret"><i
														class="fusion-dropdown-indicator"
														aria-hidden="true"></i></span></a>
											<!--<ul class="sub-menu">-->
											<!--	<li-->
											<!--		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3964 fusion-dropdown-submenu">-->
											<!--		<a href=""-->
											<!--			class="fusion-textcolor-highlight"><span>Personal-->
											<!--				Injury</span></a>-->
											<!--	</li>-->
											<!--	<li-->
											<!--		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3647 fusion-dropdown-submenu">-->
											<!--		<a href=""-->
											<!--			class="fusion-textcolor-highlight"><span>Real Estate</span></a>-->
											<!--	</li>-->
											<!--	<li-->
											<!--		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3644 fusion-dropdown-submenu">-->
											<!--		<a href=""-->
											<!--			class="fusion-textcolor-highlight"><span>Commercial&nbsp;Litigation</span></a>-->
											<!--	</li>-->
											<!--	<li-->
											<!--		class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3646 fusion-dropdown-submenu">-->
											<!--		<a href=""-->
											<!--			class="fusion-textcolor-highlight"><span>Insurance-->
											<!--				Claims</span></a>-->
											<!--	</li>-->
											<!--</ul>-->
										</li>
										<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3531"
											data-item-id="3531"><a href="contact"
												class="fusion-textcolor-highlight"><span
													class="menu-text">Контакты</span></a></li>
									</ul>
								</div>
								<div class="fusion-flyout-menu-icons fusion-flyout-mobile-menu-icons">



									<a class="fusion-flyout-menu-toggle" aria-hidden="true" aria-label="Toggle Menu"
										href="/">
										<div class="fusion-toggle-icon-line"></div>
										<div class="fusion-toggle-icon-line"></div>
										<div class="fusion-toggle-icon-line"></div>
									</a>
								</div>


								<div class="fusion-flyout-menu-bg"></div>

								<nav class="fusion-mobile-nav-holder fusion-flyout-menu fusion-flyout-mobile-menu"
									aria-label="Main Menu Mobile"></nav>

							</div>
						</div>
					</div>
				</div>
				<div class="fusion-clearfix"></div>
			</header>

			<div id="sliders-container" class="fusion-slider-visibility">
			</div>



			<section class="avada-page-titlebar-wrapper" aria-label="Page Title Bar">
				<div class="fusion-page-title-bar fusion-page-title-bar-breadcrumbs fusion-page-title-bar-center">
					<div class="fusion-page-title-row">
						<div class="fusion-page-title-wrapper">
							<div class="fusion-page-title-captions">

								<h1 class="entry-title">404 страница не найдена</h1>



							</div>


						</div>
					</div>
				</div>
			</section>

			<main id="main" class="clearfix width-100">
				<div class="fusion-row" style="max-width:100%;">
					<section id="content" class="full-width">
						<div id="post-3500" class="post-3500 page type-page status-publish hentry">
							<span class="entry-title rich-snippet-hidden">Контакты</span><span
								class="vcard rich-snippet-hidden"><span class="fn"><a title="Posts by admin"
										rel="author">admin</a></span></span><span
								class="updated rich-snippet-hidden">2025-01-14T16:01:59+00:00</span>
							<div class="post-content">
								<div class="fusion-fullwidth fullwidth-box fusion-builder-row-1 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling"
									style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-flex-wrap:wrap;">
								</div>
								<div id="#consultation"
									class="fusion-fullwidth fullwidth-box fusion-builder-row-2 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling"
									style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-background-color:#f3f3f3;--awb-flex-wrap:wrap;">
									<div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
										style="justify-content: center;max-width:1227.2px;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
										<div class="fusion-layout-column fusion_builder_column fusion-builder-column-3 fusion_builder_column_1_1 1_1 fusion-flex-column"
											style="--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:20px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
											<div
												class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
												<div
													class="fusion-title title fusion-title-4 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-two">
													<h2 class="fusion-title-heading title-heading-center"
														style="margin:0;">Свяжитесь с нами</h2>
												</div>
												<div class="fusion-text fusion-text-6"
													style="--awb-content-alignment:center;">
													<p>Для общих вопросов или запросов, пожалуйста, заполните контактную
														форму ниже, и мы свяжемся с вами в кратчайшие сроки. Если вам
														нужна срочная помощь, позвоните в наш офис по телефону +1 (786)
														832-2399 (для рускоязычных клиентов). Спасибо, мы с нетерпением
														ждем вашего обращения!</p>
												</div>
											</div>
										</div>
										<div class="fusion-layout-column fusion_builder_column fusion-builder-column-4 fusion_builder_column_1_4 1_4 fusion-flex-column"
											style="--awb-bg-size:cover;--awb-width-large:25%;--awb-margin-top-large:20px;--awb-spacing-right-large:7.68%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:7.68%;--awb-width-medium:25%;--awb-order-medium:0;--awb-spacing-right-medium:7.68%;--awb-spacing-left-medium:7.68%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
											<div
												class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
											</div>
										</div>
										<div class="fusion-layout-column fusion_builder_column fusion-builder-column-5 fusion_builder_column_1_2 1_2 fusion-flex-column"
											style="--awb-bg-size:cover;--awb-width-large:50%;--awb-margin-top-large:20px;--awb-spacing-right-large:3.84%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:3.84%;--awb-width-medium:50%;--awb-order-medium:0;--awb-spacing-right-medium:3.84%;--awb-spacing-left-medium:3.84%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
											<div
												class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
												<div class="fusion-form fusion-form-builder fusion-form-form-wrapper fusion-form-3549"
													style="--awb-tooltip-text-color:#ffffff;--awb-tooltip-background-color:#333333;--awb-form-placeholder-color:rgba(71,71,71,0.5);--awb-form-text-color:#474747;"
													data-form-id="3549"
													data-config="{&quot;form_id&quot;:&quot;3549&quot;,&quot;form_post_id&quot;:&quot;3549&quot;,&quot;post_id&quot;:3500,&quot;form_type&quot;:&quot;ajax&quot;,&quot;confirmation_type&quot;:&quot;message&quot;,&quot;redirect_url&quot;:&quot;&quot;,&quot;field_labels&quot;:{&quot;full_name&quot;:&quot;&quot;,&quot;email&quot;:&quot;&quot;,&quot;phone&quot;:&quot;&quot;,&quot;case-details&quot;:&quot;&quot;},&quot;field_logics&quot;:{&quot;full_name&quot;:&quot;&quot;,&quot;email&quot;:&quot;&quot;,&quot;phone&quot;:&quot;&quot;,&quot;case-details&quot;:&quot;&quot;,&quot;notice_1&quot;:&quot;&quot;},&quot;field_types&quot;:{&quot;full_name&quot;:&quot;text&quot;,&quot;email&quot;:&quot;email&quot;,&quot;phone&quot;:&quot;phone_number&quot;,&quot;case-details&quot;:&quot;textarea&quot;,&quot;notice_1&quot;:&quot;notice&quot;,&quot;submit_1&quot;:&quot;submit&quot;},&quot;nonce_method&quot;:&quot;ajax&quot;}">
													<form class="fusion-form fusion-form-3549">
														<div class="fusion-fullwidth fullwidth-box fusion-builder-row-2-1 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling"
															style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-padding-top:3%;--awb-padding-right:3%;--awb-padding-bottom:3%;--awb-padding-left:3%;--awb-background-color:rgba(21,72,123,0.9);--awb-flex-wrap:wrap;">
															<div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
																style="width:104% !important;max-width:104% !important;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
																<div class="fusion-layout-column fusion_builder_column fusion-builder-column-6 fusion_builder_column_1_1 1_1 fusion-flex-column"
																	style="--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:0px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:0px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
																	<div
																		class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
																		<div class="fusion-title title fusion-title-5 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-three"
																			style="--awb-text-color:#ffffff;--awb-margin-top:0px;--awb-margin-bottom:0px;">
																			<h3 class="fusion-title-heading title-heading-center"
																				style="margin:0;">ОПИШИТЕ СВОЙ СЛУЧАЙ
																			</h3>
																		</div>
																		<div class="fusion-title title fusion-title-6 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-four"
																			style="--awb-text-color:#ffffff;">
																			<h4 class="fusion-title-heading title-heading-center"
																				style="margin:0;">для обратной связи
																			</h4>
																		</div>
																		<div class="fusion-form-field fusion-form-text-field fusion-form-label-above"
																			style="" data-form-id="3549"><input
																				type="text" name="full_name"
																				id="full_name" value=""
																				class="fusion-form-input"
																				required="true" aria-required="true"
																				placeholder="ФИО"
																				data-holds-private-data="false"
																				minlength="0"></div>
																		<div class="fusion-form-field fusion-form-email-field fusion-form-label-above"
																			style="" data-form-id="3549"><input
																				type="email" name="email" id="email"
																				value="" class="fusion-form-input"
																				required="true" aria-required="true"
																				placeholder="Почта"
																				data-holds-private-data="false"></div>
																		<div class="fusion-form-field fusion-form-phone-number-field fusion-form-label-above"
																			style="" data-form-id="3549"><input
																				type="tel" name="phone" id="phone"
																				value="" class="fusion-form-input"
																				required="true" aria-required="true"
																				placeholder="Телефон"
																				data-holds-private-data="false"></div>
																		<div class="fusion-form-field fusion-form-textarea-field fusion-form-label-above"
																			style="" data-form-id="3549"><textarea
																				cols="40" minlength="0" rows="4"
																				tabindex="" id="case-details"
																				name="case-details"
																				class="fusion-form-input"
																				required="true" aria-required="true"
																				placeholder="Детали вашей проблемы"
																				data-holds-private-data="false"></textarea>
																		</div>
																		<div class="form-submission-notices data-notice_1"
																			id="fusion-notices-1">
																			<div class="fusion-alert alert success alert-success fusion-alert-center fusion-form-response fusion-form-response-success awb-alert-native-link-color alert-dismissable awb-alert-close-boxed alert-shadow"
																				role="alert">
																				<div
																					class="fusion-alert-content-wrapper">
																					<span class="alert-icon"><i
																							class="awb-icon-check-circle"
																							aria-hidden="true"></i></span><span
																						class="fusion-alert-content">Спасибо
																						за ваше обращение, мы сейчас же
																						его рассмотрим.</span>
																				</div><button type="button"
																					class="close toggle-alert"
																					data-dismiss="alert"
																					aria-label="Close">×</button>
																			</div>
																			<div class="fusion-alert alert error alert-danger fusion-alert-center fusion-form-response fusion-form-response-error awb-alert-native-link-color alert-dismissable awb-alert-close-boxed alert-shadow"
																				role="alert">
																				<div
																					class="fusion-alert-content-wrapper">
																					<span class="alert-icon"><i
																							class="awb-icon-exclamation-triangle"
																							aria-hidden="true"></i></span><span
																						class="fusion-alert-content">Произошла
																						ошибка, попробуйте еще
																						раз.</span>
																				</div><button type="button"
																					class="close toggle-alert"
																					data-dismiss="alert"
																					aria-label="Close">×</button>
																			</div>
																		</div>
																		<div class="fusion-form-field fusion-form-submit-field fusion-form-label-above"
																			style="" data-form-id="3549">
																			<div style="text-align:center;"><button
																					type="submit"
																					class="fusion-button button-flat fusion-button-default-size button-custom fusion-button-default button-1 fusion-button-default-span  form-form-submit button-default fusion-has-button-gradient"
																					style="--button_accent_color:#ffffff;--button_border_color:#ffffff;--button_accent_hover_color:#ffffff;--button_border_hover_color:#ffffff;--button_gradient_top_color:rgba(122,122,122,0);--button_gradient_bottom_color:rgba(122,122,122,0);--button_gradient_top_color_hover:rgba(168,168,168,0);--button_gradient_bottom_color_hover:rgba(122,122,122,0);"
																					data-form-number="3549"
																					tabindex=""><span
																						class="fusion-button-text">Отправить</span></button>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div><input type="hidden" name="fusion_privacy_store_ip_ua"
															value="false"><input type="hidden"
															name="fusion_privacy_expiration_interval" value="48"><input
															type="hidden" name="privacy_expiration_action"
															value="anonymize">
													</form>
												</div>
											</div>
										</div>
										<div class="fusion-layout-column fusion_builder_column fusion-builder-column-7 fusion_builder_column_1_4 1_4 fusion-flex-column"
											style="--awb-bg-size:cover;--awb-width-large:25%;--awb-margin-top-large:20px;--awb-spacing-right-large:7.68%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:7.68%;--awb-width-medium:25%;--awb-order-medium:0;--awb-spacing-right-medium:7.68%;--awb-spacing-left-medium:7.68%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
											<div
												class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
											</div>
										</div>
									</div>
								</div>
								<div class="fusion-fullwidth fullwidth-box fusion-builder-row-10 fusion-flex-container fusion-parallax-fixed nonhundred-percent-fullwidth non-hundred-percent-height-scrolling lazyload"
									style="--awb-background-blend-mode:overlay;--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-background-color:rgba(255,255,255,0.5);--awb-background-size:cover;--awb-flex-wrap:wrap;background-attachment:fixed;"
									data-bg="img/test4.jpg">
									<div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
										style="justify-content: center;max-width:1227.2px;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
										<div class="fusion-layout-column fusion_builder_column fusion-builder-column-14 fusion_builder_column_1_1 1_1 fusion-flex-column"
											style="--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:20px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
											<div
												class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
												<div
													class="fusion-title title fusion-title-10 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-one">
													<h2 class="fusion-title-heading title-heading-center"
														style="margin:0;">Наша деятельность</h2>
												</div>
											</div>
										</div>
										<div class="fusion-layout-column fusion_builder_column fusion-builder-column-15 fusion_builder_column_1_3 1_3 fusion-flex-column fusion-column-inner-bg-wrapper"
											style="--awb-inner-bg-size:cover;--awb-width-large:33.333333333333%;--awb-margin-top-large:20px;--awb-spacing-right-large:5.76%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:5.76%;--awb-width-medium:33.333333333333%;--awb-order-medium:0;--awb-spacing-right-medium:5.76%;--awb-spacing-left-medium:5.76%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
											<span class="fusion-column-inner-bg hover-type-none"><a
													class="fusion-column-anchor" href="business"><span
														class="fusion-column-inner-bg-image"></span></a></span>
											<div
												class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
												<div
													class="fusion-title title fusion-title-11 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-three">
													<h3 class="fusion-title-heading title-heading-center"
														style="margin:0;">Бизнес</h3>
												</div>
												<div class="fusion-image-element "
													style="--awb-margin-bottom:40px;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
													<span
														class=" fusion-imageframe imageframe-none imageframe-6 hover-type-none fusion-animated"
														style="border-radius:10px;" data-animationtype="fadeInLeft"
														data-animationduration="0.6"
														data-animationoffset="top-mid-of-view"><img decoding="async"
															width="1000" height="667" title="Modern business buildings"
															src="img/bisness.jpg"
															data-orig-src="https://acarkansemenov.com/img/bisness.jpg"
															alt="" class="lazyload img-responsive wp-image-3772"
															srcset="data:image/svg+xml,%3Csvg xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27 width%3D%271000%27 height%3D%27667%27 viewBox%3D%270 0 1000 667%27%3E%3Crect width%3D%271000%27 height%3D%27667%27 fill-opacity%3D%220%22%2F%3E%3C%2Fsvg%3E"
															data-srcset="img/bisness-200x133.jpg 200w, img/bisness-400x266.jpg 400w, img/bisness-600x399.jpg 600w, img/bisness-800x532.jpg 800w, img/bisness.jpg 1000w"
															data-sizes="auto"
															data-orig-sizes="(max-width: 640px) 100vw, 400px"></span>
												</div>
												<div style="text-align:center;"><a
														class="fusion-button button-flat fusion-button-default-size button-default fusion-button-default button-7 fusion-button-default-span fusion-button-default-type"
														target="_self"><span class="fusion-button-text">Узнать
															подробнее</span></a></div>
											</div>
										</div>
										<div class="fusion-layout-column fusion_builder_column fusion-builder-column-16 fusion_builder_column_1_3 1_3 fusion-flex-column fusion-column-inner-bg-wrapper"
											style="--awb-inner-bg-size:cover;--awb-width-large:33.333333333333%;--awb-margin-top-large:20px;--awb-spacing-right-large:5.76%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:5.76%;--awb-width-medium:33.333333333333%;--awb-order-medium:0;--awb-spacing-right-medium:5.76%;--awb-spacing-left-medium:5.76%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
											<span class="fusion-column-inner-bg hover-type-none"><a
													class="fusion-column-anchor" href="tax"><span
														class="fusion-column-inner-bg-image"></span></a></span>
											<div
												class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
												<div
													class="fusion-title title fusion-title-12 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-three">
													<h3 class="fusion-title-heading title-heading-center"
														style="margin:0;">Налоги в США</h3>
												</div>
												<div class="fusion-image-element "
													style="--awb-margin-bottom:40px;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
													<span
														class=" fusion-imageframe imageframe-none imageframe-7 hover-type-none fusion-animated"
														style="border-radius:10px;" data-animationtype="fadeInUp"
														data-animationduration="0.6"
														data-animationoffset="top-mid-of-view"><img decoding="async"
															width="1000" height="667" title="insurance-claims"
															src="img/nalog.jpg"
															data-orig-src="https://acarkansemenov.com/img/nalog.jpg"
															alt="" class="lazyload img-responsive wp-image-3780"
															srcset="data:image/svg+xml,%3Csvg xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27 width%3D%271024%27 height%3D%27681%27 viewBox%3D%270 0 1024 681%27%3E%3Crect width%3D%271024%27 height%3D%27681%27 fill-opacity%3D%220%22%2F%3E%3C%2Fsvg%3E"
															data-srcset="img/nalog-200x133.jpg 200w, img/nalog-400x266.jpg 400w, img/nalog-600x399.jpg 600w, img/nalog-800x532.jpg 800w, img/nalog.jpg 1000w"
															data-sizes="auto"
															data-orig-sizes="(max-width: 640px) 100vw, 400px"></span>
												</div>
												<div style="text-align:center;"><a
														class="fusion-button button-flat fusion-button-default-size button-default fusion-button-default button-8 fusion-button-default-span fusion-button-default-type"
														target="_self"><span class="fusion-button-text">Узнать
															подробнее</span></a></div>
											</div>
										</div>
										<div class="fusion-layout-column fusion_builder_column fusion-builder-column-16 fusion_builder_column_1_3 1_3 fusion-flex-column fusion-column-inner-bg-wrapper"
											style="--awb-inner-bg-size:cover;--awb-width-large:33.333333333333%;--awb-margin-top-large:20px;--awb-spacing-right-large:5.76%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:5.76%;--awb-width-medium:33.333333333333%;--awb-order-medium:0;--awb-spacing-right-medium:5.76%;--awb-spacing-left-medium:5.76%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
											<span class="fusion-column-inner-bg hover-type-none"><a
													class="fusion-column-anchor" href="immigration"><span
														class="fusion-column-inner-bg-image"></span></a></span>
											<div
												class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
												<div
													class="fusion-title title fusion-title-12 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-three">
													<h3 class="fusion-title-heading title-heading-center"
														style="margin:0;">Иммиграция</h3>
												</div>
												<div class="fusion-image-element "
													style="--awb-margin-bottom:40px;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
													<span
														class=" fusion-imageframe imageframe-none imageframe-7 hover-type-none fusion-animated"
														style="border-radius:10px;" data-animationtype="fadeInUp"
														data-animationduration="0.6"
														data-animationoffset="top-mid-of-view"><img decoding="async"
															width="1000" height="667" title="insurance-claims"
															src="img/immigra.jpg"
															data-orig-src="https://acarkansemenov.com/img/immigra.jpg"
															alt="" class="lazyload img-responsive wp-image-3780"
															srcset="data:image/svg+xml,%3Csvg xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27 width%3D%271024%27 height%3D%27681%27 viewBox%3D%270 0 1024 681%27%3E%3Crect width%3D%271024%27 height%3D%27681%27 fill-opacity%3D%220%22%2F%3E%3C%2Fsvg%3E"
															data-srcset="img/immigra-200x133.jpg 200w, img/immigra-400x266.jpg 400w, img/immigra-600x399.jpg 600w, img/immigra-800x532.jpg 800w, img/immigra.jpg 1000w"
															data-sizes="auto"
															data-orig-sizes="(max-width: 640px) 100vw, 400px"></span>
												</div>
												<div style="text-align:center;"><a
														class="fusion-button button-flat fusion-button-default-size button-default fusion-button-default button-8 fusion-button-default-span fusion-button-default-type"
														target="_self"><span class="fusion-button-text">Узнать
															подробнее</span></a></div>
											</div>
										</div>
										<div class="fusion-layout-column fusion_builder_column fusion-builder-column-16 fusion_builder_column_1_3 1_3 fusion-flex-column fusion-column-inner-bg-wrapper"
											style="--awb-inner-bg-size:cover;--awb-width-large:33.333333333333%;--awb-margin-top-large:20px;--awb-spacing-right-large:5.76%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:5.76%;--awb-width-medium:33.333333333333%;--awb-order-medium:0;--awb-spacing-right-medium:5.76%;--awb-spacing-left-medium:5.76%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
											<span class="fusion-column-inner-bg hover-type-none"><a
													class="fusion-column-anchor" href="criminal"><span
														class="fusion-column-inner-bg-image"></span></a></span>
											<div
												class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
												<div
													class="fusion-title title fusion-title-12 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-three">
													<h3 class="fusion-title-heading title-heading-center"
														style="margin:0;">Уголовное право
													</h3>
												</div>
												<div class="fusion-image-element "
													style="--awb-margin-bottom:40px;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
													<span
														class=" fusion-imageframe imageframe-none imageframe-7 hover-type-none fusion-animated"
														style="border-radius:10px;" data-animationtype="fadeInUp"
														data-animationduration="0.6"
														data-animationoffset="top-mid-of-view"><img decoding="async"
															width="1000" height="667" title="insurance-claims"
															src="img/ugolov.jpg"
															data-orig-src="https://acarkansemenov.com/img/ugolov.jpg"
															alt="" class="lazyload img-responsive wp-image-3780"
															srcset="data:image/svg+xml,%3Csvg xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27 width%3D%271024%27 height%3D%27681%27 viewBox%3D%270 0 1024 681%27%3E%3Crect width%3D%271024%27 height%3D%27681%27 fill-opacity%3D%220%22%2F%3E%3C%2Fsvg%3E"
															data-srcset="img/ugolov-200x133.jpg 200w, img/ugolov-400x266.jpg 400w, img/ugolov-600x399.jpg 600w, img/ugolov-800x532.jpg 800w, img/ugolov.jpg 1000w"
															data-sizes="auto"
															data-orig-sizes="(max-width: 640px) 100vw, 400px"></span>
												</div>
												<div style="text-align:center;"><a
														class="fusion-button button-flat fusion-button-default-size button-default fusion-button-default button-8 fusion-button-default-span fusion-button-default-type"
														target="_self"><span class="fusion-button-text">Узнать
															подробнее</span></a></div>
											</div>
										</div>

										<div class="fusion-layout-column fusion_builder_column fusion-builder-column-17 fusion_builder_column_1_3 1_3 fusion-flex-column fusion-column-inner-bg-wrapper"
											style="--awb-inner-bg-size:cover;--awb-width-large:33.333333333333%;--awb-margin-top-large:20px;--awb-spacing-right-large:5.76%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:5.76%;--awb-width-medium:33.333333333333%;--awb-order-medium:0;--awb-spacing-right-medium:5.76%;--awb-spacing-left-medium:5.76%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
											<span class="fusion-column-inner-bg hover-type-none"><a
													class="fusion-column-anchor" href="family"><span
														class="fusion-column-inner-bg-image"></span></a></span>
											<div
												class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
												<div
													class="fusion-title title fusion-title-13 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-three">
													<h3 class="fusion-title-heading title-heading-center"
														style="margin:0;">Семейные споры
													</h3>
												</div>
												<div class="fusion-image-element "
													style="--awb-margin-bottom:40px;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
													<span
														class=" fusion-imageframe imageframe-none imageframe-8 hover-type-none fusion-animated"
														style="border-radius:10px;" data-animationtype="fadeInRight"
														data-animationduration="0.6"
														data-animationoffset="top-mid-of-view"><img decoding="async"
															width="1000" height="667" title="litigation"
															src="img/fam.jpg"
															data-orig-src="https://acarkansemenov.com/img/fam.jpg"
															alt="" class="lazyload img-responsive wp-image-3773"
															srcset="data:image/svg+xml,%3Csvg xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27 width%3D%271000%27 height%3D%27667%27 viewBox%3D%270 0 1000 667%27%3E%3Crect width%3D%271000%27 height%3D%27667%27 fill-opacity%3D%220%22%2F%3E%3C%2Fsvg%3E"
															data-srcset="img/fam-200x133.jpg 200w, img/fam-400x266.jpg 400w, img/fam-600x399.jpg 600w, img/fam-800x532.jpg 800w, img/fam.jpg 1000w"
															data-sizes="auto"
															data-orig-sizes="(max-width: 640px) 100vw, 400px"></span>
												</div>
												<div style="text-align:center;"><a
														class="fusion-button button-flat fusion-button-default-size button-default fusion-button-default button-9 fusion-button-default-span fusion-button-default-type"
														target="_self"><span class="fusion-button-text">Узнать
															подробнее</span></a></div>
											</div>
										</div>
										<div class="fusion-layout-column fusion_builder_column fusion-builder-column-17 fusion_builder_column_1_3 1_3 fusion-flex-column fusion-column-inner-bg-wrapper"
											style="--awb-inner-bg-size:cover;--awb-width-large:33.333333333333%;--awb-margin-top-large:20px;--awb-spacing-right-large:5.76%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:5.76%;--awb-width-medium:33.333333333333%;--awb-order-medium:0;--awb-spacing-right-medium:5.76%;--awb-spacing-left-medium:5.76%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
											<span class="fusion-column-inner-bg hover-type-none"><a
													class="fusion-column-anchor" href="estate"><span
														class="fusion-column-inner-bg-image"></span></a></span>
											<div
												class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
												<div
													class="fusion-title title fusion-title-13 fusion-sep-none fusion-title-center fusion-title-text fusion-title-size-three">
													<h3 class="fusion-title-heading title-heading-center"
														style="margin:0;">Недвижимость
													</h3>
												</div>
												<div class="fusion-image-element "
													style="--awb-margin-bottom:40px;--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
													<span
														class=" fusion-imageframe imageframe-none imageframe-8 hover-type-none fusion-animated"
														style="border-radius:10px;" data-animationtype="fadeInRight"
														data-animationduration="0.6"
														data-animationoffset="top-mid-of-view"><img decoding="async"
															width="1000" height="667" title="litigation"
															src="img/insure.jpg"
															data-orig-src="https://acarkansemenov.com/img/insure.jpg"
															alt="" class="lazyload img-responsive wp-image-3773"
															srcset="data:image/svg+xml,%3Csvg xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27 width%3D%271000%27 height%3D%27667%27 viewBox%3D%270 0 1000 667%27%3E%3Crect width%3D%271000%27 height%3D%27667%27 fill-opacity%3D%220%22%2F%3E%3C%2Fsvg%3E"
															data-srcset="img/insure-200x133.jpg 200w, img/insure-400x266.jpg 400w, img/insure-600x399.jpg 600w, img/insure-800x532.jpg 800w, img/insure.jpg 1000w"
															data-sizes="auto"
															data-orig-sizes="(max-width: 640px) 100vw, 400px"></span>
												</div>
												<div style="text-align:center;"><a
														class="fusion-button button-flat fusion-button-default-size button-default fusion-button-default button-9 fusion-button-default-span fusion-button-default-type"
														target="_self"><span class="fusion-button-text">Узнать
															подробнее</span></a></div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</section>

				</div> <!-- fusion-row -->
			</main> <!-- #main -->



			<div class="fusion-tb-footer fusion-footer">
				<div class="fusion-footer-widget-area fusion-widget-area">
					<div class="fusion-fullwidth fullwidth-box fusion-builder-row-4 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling"
						style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-padding-top:30px;--awb-padding-bottom:30px;--awb-background-color:#000000;--awb-flex-wrap:wrap;">
						<div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
							style="justify-content: center;max-width:1227.2px;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
							<div class="fusion-layout-column fusion_builder_column fusion-builder-column-12 fusion_builder_column_1_2 1_2 fusion-flex-column"
								style="--awb-bg-size:cover;--awb-width-large:50%;--awb-margin-top-large:20px;--awb-spacing-right-large:3.84%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:3.84%;--awb-width-medium:50%;--awb-order-medium:0;--awb-spacing-right-medium:3.84%;--awb-spacing-left-medium:3.84%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
								<div
									class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
									<div class="fusion-image-element "
										style="--awb-caption-title-font-family:var(--h2_typography-font-family);--awb-caption-title-font-weight:var(--h2_typography-font-weight);--awb-caption-title-font-style:var(--h2_typography-font-style);--awb-caption-title-size:var(--h2_typography-font-size);--awb-caption-title-transform:var(--h2_typography-text-transform);--awb-caption-title-line-height:var(--h2_typography-line-height);--awb-caption-title-letter-spacing:var(--h2_typography-letter-spacing);">
										<span class=" fusion-imageframe imageframe-none imageframe-4 hover-type-none"
											style="border-radius:10px;"><img decoding="async" width="280" height="49"
												title="the-firm-lawgroup"
												src="wp-content/uploads/2021/06/the-firm-lawgroup.png"
												data-orig-src="https://firmlawgroup.com/wp-content/uploads/2021/06/the-firm-lawgroup.png"
												alt="" class="lazyload img-responsive wp-image-3442"
												srcset="data:image/svg+xml,%3Csvg xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27 width%3D%27280%27 height%3D%2749%27 viewBox%3D%270 0 280 49%27%3E%3Crect width%3D%27280%27 height%3D%2749%27 fill-opacity%3D%220%22%2F%3E%3C%2Fsvg%3E"
												data-srcset="wp-content/uploads/2021/06/the-firm-lawgroup-200x35.png 200w, wp-content/uploads/2021/06/the-firm-lawgroup.png 280w"
												data-sizes="auto"
												data-orig-sizes="(max-width: 640px) 100vw, 280px"></span>
									</div>
									<div class="fusion-text fusion-text-7" style="--awb-text-color:#ffffff;">
										<p>Адвокаты в США: помощь в бизнесе, налогах, иммиграции и уголовных делах
											Наша команда опытных юристов предоставляет профессиональные услуги по
											бизнес-праву, уголовному праву, налоговому праву, недвижимость, семейному
											праву и иммиграционным вопросам в США. Мы гарантируем надежную защиту ваших
											интересов и полное сопровождение на всех этапах юридического процесса.</p>
									</div>
									<div class="fusion-social-links fusion-social-links-1"
										style="--awb-margin-top:0px;--awb-margin-right:0px;--awb-margin-bottom:0px;--awb-margin-left:0px;--awb-box-border-top:0px;--awb-box-border-right:0px;--awb-box-border-bottom:0px;--awb-box-border-left:0px;--awb-icon-colors-hover:rgba(255,255,255,0.8);--awb-box-colors-hover:rgba(244,244,246,0.8);--awb-box-border-color:var(--awb-color3);--awb-box-border-color-hover:var(--awb-color4);">
										<div class="fusion-social-networks color-type-custom">
											<div class="fusion-social-networks-wrapper"><a
													class="fusion-social-network-icon fusion-tooltip fusion-instagram awb-icon-instagram"
													style="color:#ffffff;font-size:18px;" data-placement="top"
													data-title="Instagram" data-toggle="tooltip" title="Instagram"
													aria-label="instagram" target="_blank" rel="noopener noreferrer"
													href="https://www.instagram.com/"></a><a
													class="fusion-social-network-icon fusion-tooltip fusion-facebook awb-icon-facebook"
													style="color:#ffffff;font-size:18px;" data-placement="top"
													data-title="Facebook" data-toggle="tooltip" title="Facebook"
													aria-label="facebook" target="_blank" rel="noopener noreferrer"
													href="https://www.facebook.com/"></a></div>
										</div>
									</div>
								</div>
							</div>
							<div class="fusion-layout-column fusion_builder_column fusion-builder-column-13 fusion_builder_column_1_2 1_2 fusion-flex-column"
								style="--awb-bg-size:cover;--awb-width-large:50%;--awb-margin-top-large:20px;--awb-spacing-right-large:3.84%;--awb-margin-bottom-large:20px;--awb-spacing-left-large:3.84%;--awb-width-medium:50%;--awb-order-medium:0;--awb-spacing-right-medium:3.84%;--awb-spacing-left-medium:3.84%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
								<div
									class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
									<div class="fusion-text fusion-text-8">
										<p><iframe
												src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.244218761957!2d-74.03846765329043!3d40.712639988747085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c250a61a366053%3A0xa631727f6399ae9c!2zMSBIdWRzb24gU3QgMjFzdCBGbCwgSmVyc2V5IENpdHksIE5KIDA3MzAyLCDQodCo0JA!5e0!3m2!1sru!2sru!4v1741804615866!5m2!1sru!2sru"
												width="600" height="450" style="border:0;" allowfullscreen=""
												loading="lazy"
												referrerpolicy="no-referrer-when-downgrade"></iframe></iframe></p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="fusion-fullwidth fullwidth-box fusion-builder-row-5 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling"
						style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-flex-wrap:wrap;">
						<div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
							style="justify-content: center;max-width:1227.2px;margin-left: calc(-4% / 2 );margin-right: calc(-4% / 2 );">
							<div class="fusion-layout-column fusion_builder_column fusion-builder-column-14 fusion_builder_column_1_1 1_1 fusion-flex-column"
								style="--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:0px;--awb-spacing-right-large:1.92%;--awb-margin-bottom-large:0px;--awb-spacing-left-large:1.92%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.92%;--awb-spacing-left-medium:1.92%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.92%;--awb-spacing-left-small:1.92%;">
								<div
									class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
									<div class="fusion-text fusion-text-9"
										style="--awb-content-alignment:center;--awb-text-color:#15487b;">
										<p>© 2025 Акаркан и Семёнов.</p>
									</div>
									<div class="fusion-modal modal fade modal-1 clickpopup" tabindex="-1" role="dialog"
										aria-labelledby="modal-heading-1" aria-hidden="true"
										style="--awb-border-color:#f4f4f6;--awb-background:#ffffff;">
										<div class="modal-dialog modal-lg" role="document">
											<div class="modal-content fusion-modal-content">
												<div class="modal-header"><button class="close" type="button"
														data-dismiss="modal" aria-hidden="true"
														aria-label="Close">×</button>
													<h3 class="modal-title" id="modal-heading-1" data-dismiss="modal"
														aria-hidden="true">Request Consultation</h3>
												</div>
												<div class="modal-body fusion-clearfix">
													<div class="fusion-form fusion-form-builder fusion-form-form-wrapper fusion-form-3811"
														style="--awb-tooltip-text-color:#ffffff;--awb-tooltip-background-color:#333333;--awb-form-placeholder-color:rgba(71,71,71,0.5);--awb-form-text-color:#474747;"
														data-form-id="3811"
														data-config="{&quot;form_id&quot;:&quot;3811&quot;,&quot;form_post_id&quot;:&quot;3811&quot;,&quot;post_id&quot;:3500,&quot;form_type&quot;:&quot;ajax&quot;,&quot;confirmation_type&quot;:&quot;message&quot;,&quot;redirect_url&quot;:&quot;&quot;,&quot;field_labels&quot;:{&quot;full_name&quot;:&quot;Full Name&quot;,&quot;email_address&quot;:&quot;Email address&quot;,&quot;subject&quot;:&quot;Subject&quot;,&quot;message&quot;:&quot;Message&quot;},&quot;field_logics&quot;:{&quot;full_name&quot;:&quot;&quot;,&quot;email_address&quot;:&quot;&quot;,&quot;subject&quot;:&quot;&quot;,&quot;message&quot;:&quot;&quot;,&quot;notice_2&quot;:&quot;&quot;},&quot;field_types&quot;:{&quot;full_name&quot;:&quot;text&quot;,&quot;email_address&quot;:&quot;email&quot;,&quot;subject&quot;:&quot;text&quot;,&quot;message&quot;:&quot;textarea&quot;,&quot;notice_2&quot;:&quot;notice&quot;,&quot;submit_2&quot;:&quot;submit&quot;},&quot;nonce_method&quot;:&quot;ajax&quot;}">
														<form class="fusion-form fusion-form-3811">
															<div class="fusion-fullwidth fullwidth-box fusion-builder-row-5-1 fusion-flex-container nonhundred-percent-fullwidth non-hundred-percent-height-scrolling"
																style="--awb-border-radius-top-left:0px;--awb-border-radius-top-right:0px;--awb-border-radius-bottom-right:0px;--awb-border-radius-bottom-left:0px;--awb-padding-right:0px;--awb-padding-left:0px;--awb-flex-wrap:wrap;">
																<div class="fusion-builder-row fusion-row fusion-flex-align-items-flex-start fusion-flex-content-wrap"
																	style="width:103% !important;max-width:103% !important;margin-left: calc(-3% / 2 );margin-right: calc(-3% / 2 );">
																	<div class="fusion-layout-column fusion_builder_column fusion-builder-column-15 fusion_builder_column_1_1 1_1 fusion-flex-column"
																		style="--awb-bg-size:cover;--awb-width-large:100%;--awb-margin-top-large:0px;--awb-spacing-right-large:1.455%;--awb-margin-bottom-large:0px;--awb-spacing-left-large:1.455%;--awb-width-medium:100%;--awb-order-medium:0;--awb-spacing-right-medium:1.455%;--awb-spacing-left-medium:1.455%;--awb-width-small:100%;--awb-order-small:0;--awb-spacing-right-small:1.455%;--awb-spacing-left-small:1.455%;">
																		<div
																			class="fusion-column-wrapper fusion-column-has-shadow fusion-flex-justify-content-flex-start fusion-content-layout-column">
																			<div class="fusion-form-field fusion-form-text-field fusion-form-label-above"
																				style="" data-form-id="3811">
																				<div class="fusion-form-label-wrapper">
																					<label for="full_name">Full Name
																						<abbr
																							class="fusion-form-element-required"
																							title="required">*</abbr></label>
																				</div><input type="text"
																					name="full_name" id="full_name"
																					value="" class="fusion-form-input"
																					required="true" aria-required="true"
																					data-holds-private-data="false"
																					minlength="0">
																			</div>
																			<div class="fusion-form-field fusion-form-email-field fusion-form-label-above"
																				style="" data-form-id="3811">
																				<div class="fusion-form-label-wrapper">
																					<label for="email_address">Email
																						address <abbr
																							class="fusion-form-element-required"
																							title="required">*</abbr></label>
																				</div><input type="email"
																					name="email_address"
																					id="email_address" value=""
																					class="fusion-form-input"
																					required="true" aria-required="true"
																					data-holds-private-data="false">
																			</div>
																			<div class="fusion-form-field fusion-form-text-field fusion-form-label-above"
																				style="" data-form-id="3811">
																				<div class="fusion-form-label-wrapper">
																					<label for="subject">Subject</label>
																				</div><input type="text" name="subject"
																					id="subject" value=""
																					class="fusion-form-input"
																					data-holds-private-data="false"
																					minlength="0">
																			</div>
																			<div class="fusion-form-field fusion-form-textarea-field fusion-form-label-above"
																				style="" data-form-id="3811"><label
																					for="message">Message <abbr
																						class="fusion-form-element-required"
																						title="required">*</abbr></label><textarea
																					cols="40" minlength="0" rows="4"
																					tabindex="" id="message"
																					name="message"
																					class="fusion-form-input"
																					required="true" aria-required="true"
																					data-holds-private-data="false"></textarea>
																			</div>
																			<div class="form-submission-notices data-notice_2"
																				id="fusion-notices-2">
																				<div class="fusion-alert alert success alert-success fusion-alert-center fusion-form-response fusion-form-response-success awb-alert-native-link-color alert-dismissable awb-alert-close-boxed alert-shadow"
																					role="alert">
																					<div
																						class="fusion-alert-content-wrapper">
																						<span class="alert-icon"><i
																								class="awb-icon-check-circle"
																								aria-hidden="true"></i></span><span
																							class="fusion-alert-content">Thank
																							you for your message. It has
																							been sent.</span>
																					</div>
																					<button type="button"
																						class="close toggle-alert"
																						data-dismiss="alert"
																						aria-label="Close">×</button>
																				</div>
																				<div class="fusion-alert alert error alert-danger fusion-alert-center fusion-form-response fusion-form-response-error awb-alert-native-link-color alert-dismissable awb-alert-close-boxed alert-shadow"
																					role="alert">
																					<div
																						class="fusion-alert-content-wrapper">
																						<span class="alert-icon"><i
																								class="awb-icon-exclamation-triangle"
																								aria-hidden="true"></i></span><span
																							class="fusion-alert-content">There
																							was an error trying to send
																							your message. Please try
																							again later.</span>
																					</div>
																					<button type="button"
																						class="close toggle-alert"
																						data-dismiss="alert"
																						aria-label="Close">×</button>
																				</div>
																			</div>
																			<div class="fusion-form-field fusion-form-submit-field fusion-form-label-above"
																				style="" data-form-id="3811">
																				<div style="text-align:center;"><button
																						type="submit"
																						class="fusion-button button-flat fusion-button-default-size button-default fusion-button-default button-5 fusion-button-default-span  form-form-submit button-default"
																						data-form-number="3811"
																						tabindex=""><span
																							class="fusion-button-text">Submit</span></button>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div><input type="hidden" name="fusion_privacy_store_ip_ua"
																value="false"><input type="hidden"
																name="fusion_privacy_expiration_interval"
																value="48"><input type="hidden"
																name="privacy_expiration_action" value="anonymize">
														</form>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- wrapper -->
	</div> <!-- #boxed-wrapper -->
	<script>
		const dropdownBtn = document.querySelector(".dropdown-btn");
		const dropdownMenu = document.querySelector(".dropdown-menu");

		dropdownBtn.addEventListener("click", function (event) {
			event.stopPropagation(); // предотвращает закрытие при клике на кнопку
			dropdownMenu.classList.toggle("show");
		});

		document.addEventListener("click", function (event) {
			if (!dropdownBtn.contains(event.target) && !dropdownMenu.contains(event.target)) {
				dropdownMenu.classList.remove("show");
			}
		});

	</script>
	<a class="fusion-one-page-text-link fusion-page-load-link" tabindex="-1" href="/" aria-hidden="true">Page
		load link</a>

	<div class="avada-footer-scripts">
		<script>var fusionNavIsCollapsed = function (e) { var t, n; window.innerWidth <= e.getAttribute("data-breakpoint") ? (e.classList.add("collapse-enabled"), e.classList.remove("awb-menu_desktop"), e.classList.contains("expanded") || window.dispatchEvent(new CustomEvent("fusion-mobile-menu-collapsed", { detail: { nav: e } })), (n = e.querySelectorAll(".menu-item-has-children.expanded")).length && n.forEach(function (e) { e.querySelector(".awb-menu__open-nav-submenu_mobile").setAttribute("aria-expanded", "false") })) : (null !== e.querySelector(".menu-item-has-children.expanded .awb-menu__open-nav-submenu_click") && e.querySelector(".menu-item-has-children.expanded .awb-menu__open-nav-submenu_click").click(), e.classList.remove("collapse-enabled"), e.classList.add("awb-menu_desktop"), null !== e.querySelector(".awb-menu__main-ul") && e.querySelector(".awb-menu__main-ul").removeAttribute("style")), e.classList.add("no-wrapper-transition"), clearTimeout(t), t = setTimeout(() => { e.classList.remove("no-wrapper-transition") }, 400), e.classList.remove("loading") }, fusionRunNavIsCollapsed = function () { var e, t = document.querySelectorAll(".awb-menu"); for (e = 0; e < t.length; e++)fusionNavIsCollapsed(t[e]) }; function avadaGetScrollBarWidth() { var e, t, n, l = document.createElement("p"); return l.style.width = "100%", l.style.height = "200px", (e = document.createElement("div")).style.position = "absolute", e.style.top = "0px", e.style.left = "0px", e.style.visibility = "hidden", e.style.width = "200px", e.style.height = "150px", e.style.overflow = "hidden", e.appendChild(l), document.body.appendChild(e), t = l.offsetWidth, e.style.overflow = "scroll", t == (n = l.offsetWidth) && (n = e.clientWidth), document.body.removeChild(e), jQuery("html").hasClass("awb-scroll") && 10 < t - n ? 10 : t - n } fusionRunNavIsCollapsed(), window.addEventListener("fusion-resize-horizontal", fusionRunNavIsCollapsed);</script>
		<script>
			window.RS_MODULES = window.RS_MODULES || {};
			window.RS_MODULES.modules = window.RS_MODULES.modules || {};
			window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
			window.RS_MODULES.defered = true;
			window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
			window.RS_MODULES.type = 'compiled';
		</script>
		<link rel="stylesheet" id="rs-plugin-settings-css"
			href="wp-content/plugins/revslider6728n/sr6/assets/css/rs6.css" media="all">
		<style id="rs-plugin-settings-inline-css" type="text/css">
			#rs-demo-id {}
		</style>
		<script src="wp-content/plugins/revslider6728n/sr6/assets/js/rbtools.min.js" defer="" async=""
			id="tp-tools-js"></script>
		<script src="wp-content/plugins/revslider6728n/sr6/assets/js/rs6.min.js" defer="" async=""
			id="revmin-js"></script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/general/awb-tabs-widget.js"
			id="awb-tabs-widget-js"></script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/general/awb-vertical-menu-widget.js"
			id="awb-vertical-menu-widget-js"></script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/library/cssua.js" id="cssua-js"></script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/library/modernizr.js"
			id="modernizr-js"></script>
		<script id="fusion-js-extra">
			/* <![CDATA[ */
			var fusionJSVars = { "visibility_small": "640", "visibility_medium": "1024" };
			/* ]]> */
		</script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion.js" id="fusion-js"></script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/library/swiper.js" id="swiper-js"></script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/library/bootstrap.transition.js"
			id="bootstrap-transition-js"></script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/library/bootstrap.tooltip.js"
			id="bootstrap-tooltip-js"></script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/library/bootstrap.modal.js"
			id="bootstrap-modal-js"></script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/library/jquery.requestAnimationFrame.js"
			id="jquery-request-animation-frame-js"></script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/library/jquery.easing.js"
			id="jquery-easing-js"></script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/library/jquery.fitvids.js"
			id="jquery-fitvids-js"></script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/library/jquery.flexslider.js"
			id="jquery-flexslider-js"></script>
		<script id="jquery-lightbox-js-extra">
			/* <![CDATA[ */
			var fusionLightboxVideoVars = { "lightbox_video_width": "1280", "lightbox_video_height": "720" };
			/* ]]> */
		</script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/library/jquery.ilightbox.js"
			id="jquery-lightbox-js"></script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/library/jquery.mousewheel.js"
			id="jquery-mousewheel-js"></script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/library/jquery.fade.js"
			id="jquery-fade-js"></script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/library/fusion-parallax.js"
			id="fusion-parallax-js"></script>
		<script id="fusion-video-general-js-extra">
			/* <![CDATA[ */
			var fusionVideoGeneralVars = { "status_vimeo": "0", "status_yt": "0" };
			/* ]]> */
		</script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/library/fusion-video-general.js"
			id="fusion-video-general-js"></script>
		<script id="fusion-video-bg-js-extra">
			/* <![CDATA[ */
			var fusionVideoBgVars = { "status_vimeo": "0", "status_yt": "0" };
			/* ]]> */
		</script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/library/fusion-video-bg.js"
			id="fusion-video-bg-js"></script>
		<script id="fusion-lightbox-js-extra">
			/* <![CDATA[ */
			var fusionLightboxVars = { "status_lightbox": "1", "lightbox_gallery": "1", "lightbox_skin": "metro-white", "lightbox_title": "1", "lightbox_arrows": "1", "lightbox_slideshow_speed": "5000", "lightbox_loop": "0", "lightbox_autoplay": "", "lightbox_opacity": "0.9", "lightbox_desc": "1", "lightbox_social": "1", "lightbox_social_links": { "facebook": { "source": "https:\/\/www.facebook.com\/sharer.php?u={URL}", "text": "Share on Facebook" }, "twitter": { "source": "https:\/\/x.com\/intent\/post?url={URL}", "text": "Share on X" }, "reddit": { "source": "https:\/\/reddit.com\/submit?url={URL}", "text": "Share on Reddit" }, "linkedin": { "source": "https:\/\/www.linkedin.com\/shareArticle?mini=true&url={URL}", "text": "Share on LinkedIn" }, "whatsapp": { "source": "https:\/\/api.whatsapp.com\/send?text={URL}", "text": "Share on WhatsApp" }, "tumblr": { "source": "https:\/\/www.tumblr.com\/share\/link?url={URL}", "text": "Share on Tumblr" }, "pinterest": { "source": "https:\/\/pinterest.com\/pin\/create\/button\/?url={URL}", "text": "Share on Pinterest" }, "vk": { "source": "https:\/\/vk.com\/share.php?url={URL}", "text": "Share on Vk" }, "xing": { "source": "https:\/\/www.xing.com\/social_plugins\/share\/new?sc_p=xing-share&amp;h=1&amp;url={URL}", "text": "Share on Xing" }, "mail": { "source": "mailto:?body={URL}", "text": "Share by Email" } }, "lightbox_deeplinking": "1", "lightbox_path": "vertical", "lightbox_post_images": "1", "lightbox_animation_speed": "normal", "l10n": { "close": "Press Esc to close", "enterFullscreen": "Enter Fullscreen (Shift+Enter)", "exitFullscreen": "Exit Fullscreen (Shift+Enter)", "slideShow": "Slideshow", "next": "Next", "previous": "Previous" } };
			/* ]]> */
		</script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-lightbox.js"
			id="fusion-lightbox-js"></script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-tooltip.js"
			id="fusion-tooltip-js"></script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-sharing-box.js"
			id="fusion-sharing-box-js"></script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/library/jquery.sticky-kit.js"
			id="jquery-sticky-kit-js"></script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-general-global.js"
			id="fusion-general-global-js"></script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/library/lazysizes.js"
			id="lazysizes-js"></script>
		<script src="wp-content/themes/Avada/assets/min/js/general/avada-general-footer.js"
			id="avada-general-footer-js"></script>
		<script src="wp-content/themes/Avada/assets/min/js/general/avada-quantity.js" id="avada-quantity-js"></script>
		<script src="wp-content/themes/Avada/assets/min/js/general/avada-crossfade-images.js"
			id="avada-crossfade-images-js"></script>
		<script src="wp-content/themes/Avada/assets/min/js/general/avada-select.js" id="avada-select-js"></script>
		<script id="avada-live-search-js-extra">
			/* <![CDATA[ */
			var avadaLiveSearchVars = { "live_search": "1", "ajaxurl": "wp-admin\/admin-ajax.php", "no_search_results": "No search results match your query. Please try again", "min_char_count": "4", "per_page": "100", "show_feat_img": "1", "display_post_type": "1" };
			/* ]]> */
		</script>
		<script src="wp-content/themes/Avada/assets/min/js/general/avada-live-search.js"
			id="avada-live-search-js"></script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-alert.js"
			id="fusion-alert-js"></script>
		<script src="wp-content/plugins/fusion-builder/assets/js/min/general/awb-off-canvas.js"
			id="awb-off-canvas-js"></script>
		<script id="fusion-flexslider-js-extra">
			/* <![CDATA[ */
			var fusionFlexSliderVars = { "status_vimeo": "", "slideshow_autoplay": "1", "slideshow_speed": "7000", "pagination_video_slide": "", "status_yt": "", "flex_smoothHeight": "false" };
			/* ]]> */
		</script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-flexslider.js"
			id="fusion-flexslider-js"></script>
		<script id="fusion-animations-js-extra">
			/* <![CDATA[ */
			var fusionAnimationsVars = { "status_css_animations": "desktop_and_mobile" };
			/* ]]> */
		</script>
		<script src="wp-content/plugins/fusion-builder/assets/js/min/general/fusion-animations.js"
			id="fusion-animations-js"></script>
		<script src="wp-content/plugins/fusion-builder/assets/js/min/library/jquery.textillate.js"
			id="jquery-title-textillate-js"></script>
		<script src="wp-content/plugins/fusion-builder/assets/js/min/general/fusion-title.js"
			id="fusion-title-js"></script>
		<script src="wp-content/plugins/fusion-builder/assets/js/min/general/awb-background-slider.js"
			id="awb-background-slider-js"></script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-button.js"
			id="fusion-button-js"></script>
		<script id="fusion-form-js-js-extra">
			/* <![CDATA[ */
			var formCreatorConfig = { "ajaxurl": "wp-admin\/admin-ajax.php", "invalid_email": "The supplied email address is invalid.", "max_value_error": "Max allowed value is: 2.", "min_value_error": "Min allowed value is: 1.", "max_min_value_error": "Value out of bounds, limits are: 1-2.", "file_size_error": "Your file size exceeds max allowed limit of ", "file_ext_error": "This file extension is not allowed. Please upload file having these extensions: ", "must_match": "The value entered does not match the value for %s." };
			/* ]]> */
		</script>
		<script src="wp-content/plugins/fusion-builder/assets/js/min/general/fusion-form.js"
			id="fusion-form-js-js"></script>
		<script src="wp-content/plugins/fusion-builder/assets/js/min/general/fusion-modal.js"
			id="fusion-modal-js"></script>
		<script src="wp-content/plugins/fusion-builder/assets/js/min/general/fusion-form-logics.js"
			id="fusion-form-logics-js"></script>
		<script id="fusion-container-js-extra">
			/* <![CDATA[ */
			var fusionContainerVars = { "content_break_point": "1024", "container_hundred_percent_height_mobile": "0", "is_sticky_header_transparent": "0", "hundred_percent_scroll_sensitivity": "450" };
			/* ]]> */
		</script>
		<script src="wp-content/plugins/fusion-builder/assets/js/min/general/fusion-container.js"
			id="fusion-container-js"></script>
		<script id="avada-fade-js-extra">
			/* <![CDATA[ */
			var avadaFadeVars = { "page_title_fading": "1", "header_position": "top" };
			/* ]]> */
		</script>
		<script src="wp-content/themes/Avada/assets/min/js/general/avada-fade.js" id="avada-fade-js"></script>
		<script id="avada-drop-down-js-extra">
			/* <![CDATA[ */
			var avadaSelectVars = { "avada_drop_down": "1" };
			/* ]]> */
		</script>
		<script src="wp-content/themes/Avada/assets/min/js/general/avada-drop-down.js" id="avada-drop-down-js"></script>
		<script id="avada-header-js-extra">
			/* <![CDATA[ */
			var avadaHeaderVars = { "header_position": "top", "header_sticky": "1", "header_sticky_type2_layout": "menu_only", "header_sticky_shadow": "1", "side_header_break_point": "1024", "header_sticky_mobile": "1", "header_sticky_tablet": "1", "mobile_menu_design": "flyout", "sticky_header_shrinkage": "1", "nav_height": "59", "nav_highlight_border": "0", "nav_highlight_style": "textcolor", "logo_margin_top": "5px", "logo_margin_bottom": "5px", "layout_mode": "wide", "header_padding_top": "0px", "header_padding_bottom": "0px", "scroll_offset": "full" };
			/* ]]> */
		</script>
		<script src="wp-content/themes/Avada/assets/min/js/general/avada-header.js" id="avada-header-js"></script>
		<script id="avada-menu-js-extra">
			/* <![CDATA[ */
			var avadaMenuVars = { "site_layout": "wide", "header_position": "top", "logo_alignment": "left", "header_sticky": "1", "header_sticky_mobile": "1", "header_sticky_tablet": "1", "side_header_break_point": "1024", "megamenu_base_width": "site_width", "mobile_menu_design": "flyout", "dropdown_goto": "Go to...", "mobile_nav_cart": "Shopping Cart", "mobile_submenu_open": "Open submenu of %s", "mobile_submenu_close": "Close submenu of %s", "submenu_slideout": "1" };
			/* ]]> */
		</script>
		<script src="wp-content/themes/Avada/assets/min/js/general/avada-menu.js" id="avada-menu-js"></script>
		<script src="wp-content/themes/Avada/assets/min/js/library/bootstrap.scrollspy.js"
			id="bootstrap-scrollspy-js"></script>
		<script src="wp-content/themes/Avada/assets/min/js/general/avada-scrollspy.js" id="avada-scrollspy-js"></script>
		<script id="fusion-responsive-typography-js-extra">
			/* <![CDATA[ */
			var fusionTypographyVars = { "site_width": "1180px", "typography_sensitivity": "0.60", "typography_factor": "1.15", "elements": "h1, h2, h3, h4, h5, h6" };
			/* ]]> */
		</script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-responsive-typography.js"
			id="fusion-responsive-typography-js"></script>
		<script id="fusion-scroll-to-anchor-js-extra">
			/* <![CDATA[ */
			var fusionScrollToAnchorVars = { "content_break_point": "1024", "container_hundred_percent_height_mobile": "0", "hundred_percent_scroll_sensitivity": "450" };
			/* ]]> */
		</script>
		<script src="wp-content/themes/Avada/includes/lib/assets/min/js/general/fusion-scroll-to-anchor.js"
			id="fusion-scroll-to-anchor-js"></script>
		<script id="fusion-video-js-extra">
			/* <![CDATA[ */
			var fusionVideoVars = { "status_vimeo": "0" };
			/* ]]> */
		</script>
		<script src="wp-content/plugins/fusion-builder/assets/js/min/general/fusion-video.js"
			id="fusion-video-js"></script>
		<script src="wp-content/plugins/fusion-builder/assets/js/min/general/fusion-column.js"
			id="fusion-column-js"></script>
		<script>
			jQuery(document).ready(function () {
				var ajaxurl = 'wp-admin/admin-ajax.php';
				if (0 < jQuery('.fusion-login-nonce').length) {
					jQuery.get(ajaxurl, { 'action': 'fusion_login_nonce' }, function (response) {
						jQuery('.fusion-login-nonce').html(response);
					});
				}
			});
		</script>
		<script>
			jQuery(document).ready(function () {
				jQuery(".menu-item-has-children").click(function () {
					jQuery(this).toggleClass("active");
				});
			});
		</script>
		<script>
			jQuery(document).ready(function () {
				setTimeout(function () {
					jQuery('.onload_popup').modal('show');
				}, 3000);
			});
		</script>
	</div>




	<script id="scriptscp" type="text/javascript" src="js/scp-scripts.js"></script>
</body>

</html>