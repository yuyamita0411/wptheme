<section class="col-12 col-md-10 col-lg-8 pr-2 pl-2 pb-4 m-auto">
    <div class="EachCatLinkTitleArea p-1">
        <p class="EachCatLinkTitleFontTop w-100 mb-0">
            <?php echo CustomizeCategoryLink::CatLinkTitle();?>
        </p>
        <h5 class="EachCatLinkTitleFontBottom w-100 font-weight-bold mb-0"><?php echo CustomizeCategoryLink::CatLinkBottomTitle();?></h5>
    </div>
    <div class="EachCatLinkArea w-100 d-inline-block p-2">
        <div class="w-100 d-inline-block p-2 bg-white">
        <?php foreach(get_terms() as $val): ?>
            <?php if($val->taxonomy != 'wp_theme'): ?>
                <a href="<?php echo get_term_link($val->slug, $val->taxonomy);?>" class="catlink mr-2 pr-1 pl-1 d-inline-block">
                    <?php echo $val->name; ?>
                </a>
            <?php endif; ?>
        <?php endforeach; ?>
        </div>
    </div>
</section>

<?php
//パクる
//https://saruwakakun.com/html-css/reference/css-sample
    add_action('wp_footer', function(){
        ?>
        <style type="text/css">
            .EachCatLinkArea a{
                color:#212529;
            }
            .EachCatLinkArea a:hover{
                color:#afafaf;
            }
            .EachCatLinkArea a,
            .EachCatLinkArea a:hover{
                transition:all 0.5s;
            }
            .EachCatLinkTitleArea{
                background-color:<?php echo CustomizeCategoryLink::CatLinkTitleBackground(); ?>;
            }
            .EachCatLinkTitleFontTop{
                font-size:<?php echo CustomizeCategoryLink::CatLinkTitleFontSize(); ?>;
            }
            .EachCatLinkTitleFontBottom{
                font-size:<?php echo CustomizeCategoryLink::CatLinkBottomTitleFontSize(); ?>;
            }
            .EachCatLinkTitleFontTop,.EachCatLinkTitleFontBottom{
                color:<?php echo CustomizeCategoryLink::CatLinkFontColor(); ?>; 
            }
            .EachCatLinkTitleFontTop{
                text-align:<?php echo CustomizeCategoryLink::CatLinkTitleDir(); ?>;
            }
            .EachCatLinkTitleFontBottom{
                text-align:<?php echo CustomizeCategoryLink::CatLinkBottomTitleDir(); ?>;
            }
            .EachCatLinkArea{
                background-color:<?php echo CustomizeCategoryLink::CatLinkBackground(); ?>; 
            }
            .EachCatLinkArea .catlink{
                color:<?php echo CustomizeCategoryLink::EachCatLinkColor(); ?>;
            }
            .EachCatLinkArea .catlink{
                background-color:<?php echo CustomizeCategoryLink::EachCatLinkBackground(); ?>;
            }
        </style>
        <?php
    });
?>