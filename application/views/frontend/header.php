<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>ЗАО "Сервис Деск" г.Жлобин</title>
    <link href='http://fonts.googleapis.com/css?family=Terminal+Dosis:400,700,800,600,500,300,200' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/application/css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="/application/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/application/css/default.css"/>
    <!--[if lte IE 7]>
    <link rel="stylesheet" type="text/css" href="/application/css/ie7.css" />
    <![endif]-->

    <!--jquery library-->
    <script type="text/javascript" src="/application/scripts/jquery-1.7.1.min.js"></script>
    <!--/jquery library-->

    <!--jquery easing-->
    <script type="text/javascript" src="/application/scripts/jquery.easing.1.3.js"></script>
    <!--/jquery easing-->

    <!--nivo slider plugin for jquery-->
    <script type="text/javascript" src="/application/scripts/nivo-slider/jquery.nivo.slider.js"></script>
    <link rel="stylesheet" type="text/css" href="/application/scripts/nivo-slider/nivo-slider.css"/>
    <link rel="stylesheet" type="text/css" href="/application/scripts/nivo-slider/themes/default/default.css"/>
    <!--/ nivo slider plugin for jquery-->

    <!--superfish dropdown-->
    <link rel="stylesheet" type="text/css" href="/application/scripts/superfish/css/superfish.css"/>
    <script type="text/javascript" src="/application/scripts/superfish/js/superfish.js"></script>
    <script type="text/javascript" src="/application/scripts/superfish/js/hoverIntent.js"></script>
    <script type="text/javascript" src="/application/scripts/superfish/js/jquery.bgiframe.min.js"></script>
    <script type="text/javascript" src="/application/scripts/superfish/js/supersubs.js"></script>
    <!--/superfish dropdown-->

    <!--auto complete-->
    <script type='text/javascript' src='/application/scripts/autocomplete/jquery.autocomplete.min.js'></script>
    <!--/auto complete-->

    <!--misc. scripts-->
    <script type="text/javascript" src="/application/scripts/scripts.js"></script>
    <script type="text/javascript" src="/application/scripts/jquery-backgroundpos/jquery.backgroundpos.pack.js"></script>
    <!--/misc. scripts-->


</head>

<!--body-->
<body>

<div id="body-wrapper">

    <!--header container-->
    <div id="header-contanier">

        <!--header wrapper-->
        <div id="header" class="center-clear">

            <!--logo-->
            <div id="logo">
                <!--logo here-->
            </div>
            <!-- /logo-->


            <!--header place holder-->
            <div class="header-place-holder"></div>



            <!--menu-->
            <ul id="top_menu" class="sf-menu">
                <li><a href="/">Главная</a><span>Добро пожаловать!</span></li>

                <?php foreach($pages as $nav_item): ?>
                    <li><a href="/<?=$nav_item['alias']?>"><?=$nav_item['title']?></a><span><?=$nav_item['addon_info']?></span>

                        <!--first level dropdown menu-->
                        <ul>
                            <?php foreach($articles as $nav_drop_item): ?>
                                <?php if($nav_item['id'] == $nav_drop_item['page_id']): ?>
                                    <li>
                                        <a href="/<?=$nav_item['alias']?>/<?=$nav_drop_item['alias']?>">
                                            <?=mb_substr(strip_tags($nav_drop_item['title']),0,20,'UTF-8')?>
                                        </a>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                        <!--/first level dropdown menu-->
                    
                    </li>
                <?php endforeach; ?>
                
            </ul>
            <!-- /menu-->



        </div>

    </div>
    <!-- /header wrapper-->

    <div class="clear20"></div>