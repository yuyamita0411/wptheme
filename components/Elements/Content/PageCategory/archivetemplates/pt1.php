<section class="col-12 col-md-10 col-lg-8 pr-2 pl-2 pb-4 m-auto">
    <div class="ArchiveArticleaTitleArea p-1">
        <h2>記事一覧 パターン1</h2>
    </div>
    <div class="ArchiveArticleArea w-100 d-inline-block pt-2 pb-2 pl-1 pr-1">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <div class="ArchiveCatlinkarea col-12 col-md-6 col-lg-4 float-left p-1">
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
        <?php endwhile; ?>
        <?php else: ?>
        <p>記事はありません</p>
        <?php endif; ?>
    </div>
</section>
<?php
    add_action('wp_footer', function(){
        ?>
        <style type="text/css">
            .ArchiveArticleaTitleArea{
                background-color:''; 
            }
            .ArchiveTitleFont{
                color:''; 
            }
            .ArchiveArticleArea{
                background-color:''; 
            }
            .ArchiveCatlinkarea a > img, .ArchiveCatlinkarea a > .dummy{
                border:solid #afafaf 0.5px;
            }
            .ArchiveCatlinkarea a > img{
                object-fit:cover;
            }
            .ArchiveCatlinkarea > div{
                background-color:''; 
            }
            .ArchiveCatlinkarea .catlink{
                color:'';
            }
            .ArchiveCatlinkarea .catlink{
                background-color:'';
            }
            .ArchiveCatlinkarea .datefont{
                color:'';
            }
            .ArchiveCatlinkarea .posttitle{
                color:'';
            }
        </style>
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                ['load', 'resize'].forEach((ev) => {
                    window.addEventListener(ev, () => {
                        document.querySelectorAll('.ArchiveCatlinkarea a > img, .ArchiveCatlinkarea a > .dummy').forEach((each) => {
                            each.setAttribute('style', `height:${each.offsetWidth}px;`);
                        });

                    });
                });
            });
        </script>
        <?php
    });
?>