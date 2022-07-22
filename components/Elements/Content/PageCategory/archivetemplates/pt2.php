<?php if(have_posts()): ?>
  <h2>記事一覧 パターン2</h2>
    <div class="d-inline-block w-100">
    <?php while(have_posts()): the_post(); ?>
        <div class="slider_inner col-6 col-md-4 float-left p-1">
            <a href="<?php the_permalink();?>" class="imglink">
                <?php
                if(get_the_post_thumbnail()){
                    the_post_thumbnail('full', array ( 'class' => 'w-100 d-inline-block' ));
                }else{
                    echo '<div class="dummyspace"></div>';
                }
                ?>
            </a>

            <div class="tagarea w-100 text-center mt-2">
                <div class="tagarea_cover position-absolute w-100"></div>
                <div class="w-100 d-inline-block">
                    <p class="w-100 text-left position-relative mb-0">
                        <small><?php the_date();?></small>
                    </p>
                    <h5 class="text-left position-relative mb-0">
                        <a href="<?php the_permalink();?>">
                            <?php the_title(); ?>
                        </a>
                    </h5>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
  <?php else: ?>
  <p>記事はありません</p>
<?php endif; ?>
</div>

<?php
add_action( 'wp_footer', function(){
    ?>
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                ['load', 'resize'].forEach((ev) => {
                    window.addEventListener(ev, () => {
                        document.querySelectorAll('.slider_inner > .imglink, .slider_inner > .imglink > img, .slider_inner > .imglink > .dummyspace').forEach((each) => {
                            each.setAttribute('style', `height:${each.offsetWidth}px;`);
                        });

                    });
                });
            });
        </script>
        <style>
            .dummyspace{
                border:solid 0.5px;
            }
            .tagarea{
                min-height:4rem;
            }
        </style>
    <?php
});
?>