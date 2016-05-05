        <!--page content goes here-->
        <div class="page-content gray-frame">


            <!--block-->
            <div class="news-block">
                <body link="#00843e" vlink="#00843e" alink="#00843e">
                
                </body>
            </div>
            <!--/block-->

            <div class="hr"></div>

            <?php foreach($anons as $item): ?>
                <!--block-->
                <div class="news-block">
                    <h1 class="heading h1"> <img src="../application/images/icon/share.png" alt=""/>
                        <a href="/<?=$module['alias'];?>/<?=$item['alias']?>"> <?=$item['title']?></a>
                    </h1>
                    <p class="super-quote italic_only times">
                        <?php echo mb_substr(strip_tags($item['full_text']),0,150,'UTF-8'); ?>

                    </p>

                </div>
                <!--/block-->
            <?php endforeach; ?>

            <div class="hr"></div>

            <div class="clear10"></div>



        </div>

        <!--/page content goes here-->

    </div>
    <!-- /content container-->

    <div class="clear40"></div>

</div>
<!--/page content wrapper-->