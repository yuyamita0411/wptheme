<section class="col-12 col-md-10 col-lg-8 pr-2 pl-2 pb-4 m-auto">
    <div class="PopularArticleTitleArea p-1">
        <p class="PopularArticleAreaFontTop w-100 mb-0">
            <?php echo CustomizePopularArticle::PopularArticlesTitle();?>
        </p>
        <h5 class="PopularArticleAreaFontBottom w-100 font-weight-bold mb-0"><?php echo CustomizePopularArticle::PopularArticlesBottomitle();?></h5>
    </div>
    <div class="PopularArticleArea w-100 d-inline-block pt-2 pb-2 pl-1 pr-1">
        <div class="PopularArticlelinkarea col-12 col-md-6 col-lg-4 float-left p-1">
            <div class="w-100 d-inline-block p-2">
                <div class="w-100 d-inline-block mb-2">
                    <a href="http://localhost:8000/?p=1&amp;customize_changeset_uuid=a44aa8e5-25bc-4a41-b21c-34f69d998d85&amp;customize_messenger_channel=preview-0" class="w-100 d-inline-block">
                        <img src="http://localhost:8000/wp-content/themes/corporate/img/noimage.jpg" class="dummy w-100 d-inline-block">
                    </a>
                </div>
                <div class="linkarea w-100 d-inline-block mb-0">
                    <a href="http://localhost:8000/?cat=2&amp;customize_changeset_uuid=a44aa8e5-25bc-4a41-b21c-34f69d998d85&amp;customize_messenger_channel=preview-0" class="catlink mr-2 pr-1 pl-1 d-inline-block mt-1">新カテ</a>
                    <a href="http://localhost:8000/?cat=4&amp;customize_changeset_uuid=a44aa8e5-25bc-4a41-b21c-34f69d998d85&amp;customize_messenger_channel=preview-0" class="catlink mr-2 pr-1 pl-1 d-inline-block mt-1">新かて2</a>
                    <a href="http://localhost:8000/?cat=1&amp;customize_changeset_uuid=a44aa8e5-25bc-4a41-b21c-34f69d998d85&amp;customize_messenger_channel=preview-0" class="catlink mr-2 pr-1 pl-1 d-inline-block mt-1">未分類</a>
                </div>
                <small class="datefont d-inline-block mb-0">2022-07-17</small>
                <h5 class="posttitle mb-0">Hello world!</h5>
            </div>
        </div>
    </div>
</section>

<?php
    add_action('wp_footer', function(){
        ?>
        <style type="text/css">
            .PopularArticleTitleArea{
                background-color:<?php echo CustomizePopularArticle::PopularArticlesTitleBackground(); ?>; 
            }
            .PopularArticleAreaFontTop{
                font-size:<?php echo CustomizePopularArticle::PopularArticlesTitleFontSize(); ?>;
            }
            .PopularArticleAreaFontBottom{
                font-size:<?php echo CustomizePopularArticle::PopularArticlesBottomitleFontSize(); ?>;
            }
            .PopularArticleAreaFontTop,.PopularArticleAreaFontBottom{
                color:<?php echo CustomizePopularArticle::PopularArticlesFontColor(); ?>; 
            }
            .PopularArticleAreaFontTop{
                text-align:<?php echo CustomizePopularArticle::PopularArticlesTitleDir(); ?>;
            }
            .PopularArticleAreaFontBottom{
                text-align:<?php echo CustomizePopularArticle::PopularArticlesBottomitleDir(); ?>;
            }
            .PopularArticleArea{
                background-color:<?php echo CustomizePopularArticle::PopularArticlesBackground(); ?>; 
            }
            .PopularArticlelinkarea a > img, .PopularArticlelinkarea a > .dummy{
                border:solid #afafaf 0.5px;
            }
            .PopularArticlelinkarea a > img{
                object-fit:cover;
            }
            .PopularArticlelinkarea > div{
                background-color:<?php echo CustomizePopularArticle::SetPopularArticleEachBackground(); ?>; 
            }
            .PopularArticlelinkarea .catlink{
                color:<?php echo CustomizePopularArticle::SetPopularArticleCatLinkColor(); ?>;
            }
            .PopularArticlelinkarea .catlink{
                background-color:<?php echo CustomizePopularArticle::SetPopularArticleCatLinkBackgroundColor(); ?>;
            }
            .PopularArticlelinkarea .datefont{
                color:<?php echo CustomizePopularArticle::SetPopularArticleDateFontColor(); ?>;
            }
            .PopularArticlelinkarea .posttitle{
                color:<?php echo CustomizePopularArticle::SetPopularArticleTitleFontColor(); ?>;
            }
        </style>
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                ['load', 'resize'].forEach((ev) => {
                    window.addEventListener(ev, () => {
                        document.querySelectorAll('.PopularArticleArea a > img, .PopularArticleArea a > .dummy').forEach((each) => {
                            each.setAttribute('style', `height:${each.offsetWidth}px;`);
                        });

                    });
                });
            });
        </script>
        <?php
    });
?>