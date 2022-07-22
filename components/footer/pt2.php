<footer id="footer" class="footer w-100 d-inline-block pt-3 pb-3 float-left">
    <p>フッター2</p>
    <div class="contentarea float-right pt-3 pb-3 col-12">
        <div class="w-100 col-md-6 pl-0 pr-0 float-md-right">
        <?php WidgetsMenu::SetFooterMenu('pt2'); ?>
        </div>
    </div>
    <small class="menufont w-100 text-center d-inline-block">
        <?php if ( get_bloginfo( 'name' ) && get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
            <?php if(CustomizeTitle::SetStr()->copyright == ''): ?>
                © <?php echo date('Y');?> <?php bloginfo( 'name' ); ?>. all rights reserved
            <?php endif; ?>
            <?php if(CustomizeTitle::SetStr()->copyright != ''): ?>
                © <?php echo date('Y');?> <?php echo CustomizeTitle::SetStr()->copyright; ?>. all rights reserved
            <?php endif; ?>
        <?php endif; ?>
    </small>
</footer>