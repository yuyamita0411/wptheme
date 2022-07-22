<?php
$args = array(
    'posts_per_page' => 10,
    'order'          => 'DESC',
    'orderby'        => 'date'
);
$postslist = get_posts( $args );
if(!$postslist){
    return;
}
?>
<section class="col-12 col-md-10 col-lg-8 pr-2 pl-2 pb-4 m-auto">
    <div class="NewestArticleTitleArea p-1">
        <p class="NewestArticleAreaFontTop w-100 mb-0">
            <?php echo CustomizeNewestArticleArea::NewestArticleAreaTitle();?>
        </p>
        <h5 class="NewestArticleAreaFontBottom w-100 font-weight-bold mb-0"><?php echo CustomizeNewestArticleArea::NewestArticleAreaBottomTitle();?></h5>
    </div>
    <div class="NewestArticleArea w-100 d-inline-block pt-2 pb-2 pl-1 pr-1">
        <?php foreach ( $postslist as $post ) : setup_postdata( $post ); ?> 
        <div class="NewestArticlelinkarea col-12 col-md-6 col-lg-4 float-left p-1">
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
        <?php endforeach; wp_reset_postdata();?>
    </div>
</section>
<?php
    add_action('wp_footer', function(){
        ?>
        <style type="text/css">
            .NewestArticleTitleArea{
                background-color:<?php echo CustomizeNewestArticleArea::NewestArticleAreaTitleBackground(); ?>; 
            }
            .NewestArticleAreaFontTop{
                font-size:<?php echo CustomizeNewestArticleArea::NewestArticleAreaTitleFontSize(); ?>;
            }
            .NewestArticleAreaFontBottom{
                font-size:<?php echo CustomizeNewestArticleArea::NewestArticleAreaBottomTitleFontSize(); ?>;
            }
            .NewestArticleAreaFontTop,.NewestArticleAreaFontBottom{
                color:<?php echo CustomizeNewestArticleArea::NewestArticleAreaFontColor(); ?>; 
            }
            .NewestArticleAreaFontTop{
                text-align:<?php echo CustomizeNewestArticleArea::NewestArticleAreaTitleDir(); ?>;
            }
            .NewestArticleAreaFontBottom{
                text-align:<?php echo CustomizeNewestArticleArea::NewestArticleAreaBottomTitleDir(); ?>;
            }
            .NewestArticleArea{
                background-color:<?php echo CustomizeNewestArticleArea::NewestArticleAreaBackground(); ?>; 
            }
            .NewestArticlelinkarea a > img, .NewestArticlelinkarea a > .dummy{
                border:solid #afafaf 0.5px;
            }
            .NewestArticlelinkarea a > img{
                object-fit:cover;
            }
            .NewestArticlelinkarea > div{
                background-color:<?php echo CustomizeNewestArticleArea::SetNewestArticleAreaEachBackground(); ?>; 
            }
            .NewestArticlelinkarea .catlink{
                color:<?php echo CustomizeNewestArticleArea::SetNewestArticleAreaCatLinkColor(); ?>;
            }
            .NewestArticlelinkarea .catlink{
                background-color:<?php echo CustomizeNewestArticleArea::SetNewestArticleAreaCatLinkBackgroundColor(); ?>;
            }
            .NewestArticlelinkarea .datefont{
                color:<?php echo CustomizeNewestArticleArea::SetNewestArticleAreaDateFontColor(); ?>;
            }
            .NewestArticlelinkarea .posttitle{
                color:<?php echo CustomizeNewestArticleArea::SetNewestArticleAreaTitleFontColor(); ?>;
            }
        </style>
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                ['load', 'resize'].forEach((ev) => {
                    window.addEventListener(ev, () => {
                        document.querySelectorAll('.NewestArticlelinkarea a > img, .NewestArticlelinkarea a > .dummy').forEach((each) => {
                            each.setAttribute('style', `height:${each.offsetWidth}px;`);
                        });

                    });
                });
            });
        </script>
        <?php
    });
?>