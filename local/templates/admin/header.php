<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?> 
<!DOCTYPE HTML>
<html lang="en-US">
<head>
 <?$APPLICATION->ShowHead();?>
	<title><?$APPLICATION->ShowTitle()?></title>
	
	<link rel="stylesheet" href="/template_style.css" />

	<script type="text/javascript" src="/js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="/js/slides.min.jquery.js"></script>
	<script type="text/javascript" src="/js/jquery.carouFredSel-6.1.0-packed.js"></script>
	<script type="text/javascript" src="/js/functions.js"></script>
	
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />

	<!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->
</head>
<body>
<?$APPLICATION->ShowPanel();?>
<?//include_once($_SERVER[DOCUMENT_ROOT]./local/templates/inner)?>
	<div class="wrap">
		<div class="hd_header_area">
			<div class="hd_header">
				<?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"top_admin",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "3",
		"MENU_CACHE_GET_VARS" => array(""),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N"
	)
);?>
			</div>
		</div>
		<!--- // end header area --->
		<div class="main_container page">
			<div class="mn_container">
                <div class="main_post">
                    <div class="main_title">
                        <p class="title"><?$APPLICATION->ShowTitle()?></p>
                    </div>
                    <!-- workarea -->