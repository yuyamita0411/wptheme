<?php
$args = array(
    'posts_per_page' => 1,
    'order'          => 'DESC',
    'orderby'        => 'date'
);
$postslist = get_posts( $args );
if(!$postslist){
    return;
}
?>
<section class="col-12 col-md-10 col-lg-8 pr-2 pl-2 pb-4 m-auto">
    <div class="ArticleBgWrapper w-100 d-flex">
        <div class="ArticleBg">
            <h4 class="Articlestr p-2 mb-0"><?php echo CustomizeNewestArticle::NewestArticleTitle();?></h4>
        </div>
        <div class="articleparts pl-2 pr-2">
            <?php foreach ( $postslist as $post ) : setup_postdata( $post ); ?>
                <a href="<?php the_permalink(); ?>" class="w-100 d-inline-block">
                    <h4 class="pt-1 pb-1 pl-2 pr-2 mb-0"><?php the_title(); ?></h4>
                </a>
            <?php endforeach; wp_reset_postdata();?>
        </div>
    </div>
</section>
<?php
    add_action('wp_footer', function(){
        ?>
        <style type="text/css">
            .ArticleBg{
                background-color:<?php echo CustomizeNewestArticle::NewestArticleTitleBackground(); ?>; 
            }
            .Articlestr{
                color:<?php echo CustomizeNewestArticle::NewestArticleFontColor(); ?>; 
            }
            .ArticleBgWrapper{
                background-color:<?php echo CustomizeNewestArticle::NewestArticleBackground(); ?>;
            }
            .articleparts > a > h4{
                color:<?php echo CustomizeNewestArticle::SetNewestArticleCatLinkColor(); ?>;
            }
        </style>
        <?php
    });
?>