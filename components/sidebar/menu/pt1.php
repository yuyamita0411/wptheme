<div id="sidebar" class="menufont position-fixed sidebarclose zm2 col-12 col-md-6 col-lg-4">
    <!-- カテゴリーがループ -->
    <?php WidgetsMenu::SetSideMenu('pt1');?>
    <!-- カテゴリーがループ -->
</div>
<?php
add_action( 'wp_footer', function(){
    ?>
    <script>
        window.addEventListener('DOMContentLoaded', () => {
            if(!document.getElementById('hbmenuwraapper') || !document.getElementById('hbuttoncover')){
                return;
            }
            window.addEventListener('click', (e) => {
                //開く時
                if(e.target.id == 'sidebarbutton'){

                    e.target.classList.toggle('sbuttonclose');
                    e.target.classList.toggle('sbuttonopen');
                    const sidebar = document.getElementById('sidebar'),
                    sidebarbutton = document.getElementById('sidebarbutton');

                    if(sidebar.classList.contains('zm2')){
                        sidebar.classList.toggle('zm2');
                        sidebar.classList.toggle('z2');
                        setTimeout(() => {
                            sidebar.classList.toggle('sidebarclose');
                            sidebar.classList.toggle('sidebaropen');
                        }, 200);
                    }else{
                        sidebar.classList.toggle('sidebarclose');
                        sidebar.classList.toggle('sidebaropen');
                        setTimeout(() => {
                            sidebar.classList.toggle('zm2');
                            sidebar.classList.toggle('z2');
                        }, 500);
                    }
                }
                //開いているときそれ以外の要素をクリックした時
                if(sidebar.classList.contains('sidebaropen')){
                    sidebar.classList.add('sidebarclose');
                    sidebar.classList.remove('sidebaropen');
                    sidebarbutton.classList.remove('sbuttonopen');
                    sidebarbutton.classList.add('sbuttonclose');
                    setTimeout(() => {
                        sidebar.classList.add('zm2');
                        sidebar.classList.remove('z2');
                    }, 500);
                }
            });
        });
    </script>
    <?php
});
?>