<section class="contentarea col-12 col-md-10 col-lg-8 pr-2 pl-2 pb-4 m-auto">
    <?php if(have_posts()): ?>
        <h2 class="large_midashi mb-3 font-weight-bold"><?php the_title(); ?></h2>
        <!--抜粋文>
        <div class="descriptionarea w-100 d-inline-block mt-5"></div><抜粋文-->
        <!--目次>
        <div class="indexarea w-100 col-md-6 float-md-left p-3">
            <h3 class="indextitle text-center">目次</h3>
            <ul class="pl-0"></ul>
        </div>
        <目次-->
        <!--ここから記事　ループ-->
        <div class="articleinner w-100 d-inline-block">
            <div class="article_content w-100 d-inline-block" id="oomidashi1">
                <?php the_content(); ?>
            </div>
        </div>
        <!--ここから記事　ループ-->
    <?php endif; ?>
</section>