
<!--side bar title and bread crumb-->
<div class="center-clear">
    <div class="page-columns-head-style gray-frame page-column1 margin-right-10">
        <h1 class="heading h1">Боковая панель</h1>
    </div>

    <div id="breadcrumb" class="page-columns-head-style gray-frame page-column2">
        <ul>
            <li><a href="index.html">Главная</a></li>

            <li><a href="<?=$module['alias'];?>" class="active"><?=$module['title'];?></a></li>
        </ul>
    </div>
</div>
<!--/side bar title and bread crumb-->

<!--/page header wrapper-->

<!--page content wrapper-->
<div id="page-content-wrapper">

    <!--content container-->
    <div class="center-clear page-content-wrapper">

        <!--side bar-->
        <div class="side_bar gray-frame page-column1 margin-right-10">
            <!--navigation-->
            <ul class="accordion page-list-menu">

                <li><a href="<?=$module['alias'];?>"><?=$module['title'];?></a></li>
                <?php foreach($articles as $nav_drop_item): ?>
                    <?php if($module['id'] == $nav_drop_item['page_id']): ?>
                        <li>
                            <a href="/<?=$module['alias'];?>/<?=$nav_drop_item['alias']?>">
                                <?=mb_substr(strip_tags($nav_drop_item['title']),0,30,'UTF-8')?>
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
            <!--/navigation-->


            <!--simple tabs-->

            <!--title-->
            <h1 class="heading-with-left-margin h1">Новосwssти</h1>
            <!--/title-->

            <!--tab navigation-->
            <ul class="tabs alignleft_block">
                <li><a href="#" class="defaulttab" rel="tabs1">1</a></li>
                <li><a href="#" rel="tabs2">2</a></li>
                <li><a href="#" rel="tabs3">3</a></li>
            </ul>
            <!--/tab navigation-->

            <!--tab content-->
            <div class="tab-content" id="tabs1">
                <p>
                    ЗАО «Сервис Деск» – первая и единственная компания в Республике Беларусь, успешно прошедшая сертификационный аудит BSI (British Standards Institution) и получившая в январе 2014 г. сертификат соответствия ISO/IEC 20000-1:2011.
                </p>


            </div>

            <div class="tab-content rounded-three-corners noshow" id="tabs2">
                <p>
                    ЗАО «Сервис Деск» проводит анализ рынка и изучение предложений поставщиков работ (услуг) по ремонту средств вычислительной и организационной техники, заправке/восстановлению картриджей для средств организационной техники.
                </p>
            </div>

            <div class="tab-content rounded-three-corners noshow" id="tabs3">
                <p>
                    Наш профсоюзный лидер Минюк Светлана Алексеевна получила благодарность Президиума Республиканского комитета Профсоюза за активную работу по защите прав и законных интересов членов Банковско-финансового профсоюза и в связи с 110-летием профсоюзного движения.
                </p>
            </div>
            <!--/tab content-->

            <div class="splitter-h alignleft_block"></div>

            <!--work with us-->
            <a href="#" class="alignleft_block">
                <img src="../application/images/temp/workwithus.jpg" width="288" height="150" alt=""/>
            </a>
            <!--/work with us-->

            <div class="clear20"></div>

        </div>
        <!--/side bar-->