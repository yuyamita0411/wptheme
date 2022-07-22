<?
    $categories = get_the_category($post->ID);
    $category_ID = array();
    
    foreach($categories as $category):
        array_push( $category_ID, $category -> cat_ID);
    endforeach ;
    
    $args = array(
        'post__not_in' => array($post->ID),
        'posts_per_page'=> 10,
        'category__in' => $category_ID,
        'orderby' => 'rand',
    );
    $query = new WP_Query($args);
    if( !$query->have_posts() ){
        return;
    }
?>
<section class="col-12 col-md-10 col-lg-8 pr-2 pl-2 pb-4 m-auto">
    <div class="CategoryArticleaTitleArea p-1">
        <p class="CategoryTitleFontTop w-100 mb-0">
            <?php echo CustomizeCategoryArticle::CategoryArticlesTitle();?>
        </p>
        <h5 class="CategoryTitleFontBottom w-100 font-weight-bold mb-0"><?php echo CustomizeCategoryArticle::CategoryArticlesBottomTitle();?></h5>
    </div>
    <div class="CategoryArticleArea w-100 d-inline-block pt-2 pb-2 pl-1 pr-1">
        <?php
        if( $query->have_posts() ):
            while ($query -> have_posts()) :
            $query -> the_post();
        ?>
        <div class="Catlinkarea col-12 col-md-6 col-lg-4 float-left p-1">
            <div class="w-100 d-inline-block p-2">
                <div class="w-100 d-inline-block mb-2">
                    <a href="<?php the_permalink(); ?>" class="w-100 d-inline-block">
                        <?php if(get_the_post_thumbnail_url()):?>
                        <img src="<?php echo get_the_post_thumbnail_url();?>" class="w-100 d-inline-block">
                        <?php else:?>
                        <img src="<?php echo get_theme_file_uri('img/noimage.jpg');?>" class="dummy w-100 d-inline-block">
                        <?php endif;?>
                    </a>
                </div>
                <div class="linkarea w-100 d-inline-block mb-0">
                    <?php foreach(get_the_category() as $v): ?>
                    <a href="<?php echo get_term_link($v->slug, $v->taxonomy); ?>" class="catlink mr-2 pr-1 pl-1 d-inline-block mt-1">
                        <?php echo $v->name; ?>
                    </a>
                    <?php endforeach; ?>
                </div>
                <small class="datefont d-inline-block mb-0"><?php echo get_the_modified_date('Y-m-d'); ?></small>
                <h5 class="posttitle mb-0"><?php the_title(); ?></h5>
            </div>
        </div>
        <?php endwhile; endif; ?>
    </div>
</section>
<?php
    add_action('wp_footer', function(){
        ?>
        <style type="text/css">
            .CategoryArticleaTitleArea{
                background-color:<?php echo CustomizeCategoryArticle::CategoryArticlesTitleBackground(); ?>; 
            }
            .CategoryTitleFontTop{
                font-size:<?php echo CustomizeCategoryArticle::CategoryArticlesTitleFontSize(); ?>; 
            }
            .CategoryTitleFontBottom{
                font-size:<?php echo CustomizeCategoryArticle::CategoryArticlesBottomTitleFontSize(); ?>; 
            }
            .CategoryTitleFontTop,.CategoryTitleFontBottom{
                color:<?php echo CustomizeCategoryArticle::CategoryArticlesFontColor(); ?>; 
            }
            .CategoryTitleFontTop{
                text-align:<?php echo CustomizeCategoryArticle::CategoryArticlesTitleDir();?>;
            }
            .CategoryTitleFontBottom{
                text-align:<?php echo CustomizeCategoryArticle::CategoryArticlesBottomTitleDir();?>;
            }
            .CategoryArticleArea{
                background-color:<?php echo CustomizeCategoryArticle::CategoryArticlesBackground(); ?>; 
            }
            .Catlinkarea a > img, .Catlinkarea a > .dummy{
                border:solid #afafaf 0.5px;
            }
            .Catlinkarea a > img{
                object-fit:cover;
            }
            .Catlinkarea > div{
                background-color:<?php echo CustomizeCategoryArticle::SetCategoryArticleEachBackground(); ?>; 
            }
            .Catlinkarea .catlink{
                color:<?php echo CustomizeCategoryArticle::SetCategoryArticleCatLinkColor(); ?>;
            }
            .Catlinkarea .catlink{
                background-color:<?php echo CustomizeCategoryArticle::SetCategoryArticleCatLinkBackgroundColor(); ?>;
            }
            .Catlinkarea .datefont{
                color:<?php echo CustomizeCategoryArticle::SetCategoryArticleDateFontColor(); ?>;
            }
            .Catlinkarea .posttitle{
                color:<?php echo CustomizeCategoryArticle::SetCategoryArticleTitleFontColor(); ?>;
            }
        </style>
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                ['load', 'resize'].forEach((ev) => {
                    window.addEventListener(ev, () => {
                        document.querySelectorAll('.Catlinkarea a > img, .Catlinkarea a > .dummy').forEach((each) => {
                            each.setAttribute('style', `height:${each.offsetWidth}px;`);
                        });

                    });
                });
            });
        </script>
        <?php
    });
?>