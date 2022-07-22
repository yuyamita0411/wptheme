<div id="searchareasp" class="w-100 pt-3 pb-3">
    <div class="col-12 col-md-10 col-lg-8 m-auto">
        <h5 class="searchtilteareasp"><?php echo CustomizeHeader::SearchAreaSPTitle(); ?></h5>
        <form action="">
            <input type="text" name="" class="searcharea p-2">
            <input type="submit" value="検索" class="searchbutton cursor p-2">
        </form>
    </div>
</div>
<?php
    add_action('wp_footer', function(){
        ?>
        <style type="text/css">
            .searchtilteareasp{
                color:<?php echo CustomizeHeader::SearchAreaFontColorSP(); ?>;
            }
            #searchareasp{
                left:0;
            }
            #searchareasp{
                background:<?php echo CustomizeHeader::SearchAreaBackgroundSP(); ?>;
            }
            #searchareasp .searcharea{
                border:solid lightgray 1px;
            }
            #searchareasp .searcharea{
                border-radius:5px;
            }
            #searchareasp .searchbutton{
                color:#ffffff;
                background:gray;
                border:none;
                border-radius:5px;
            }
        </style>
        <?php
    });
?>