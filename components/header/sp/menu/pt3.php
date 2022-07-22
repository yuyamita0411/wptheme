<!--p style="position:absolute; top:10rem;">デザイン3</p-->
<nav id="gnavbutton" class="gnavbutton d-inline-block d-md-none">
    <div class="logo col-4 d-block d-md-none float-left position-absolute text-white text-center" style="font-size:14;">
        <?php GenerateHtml::GenerateLogo('pt3');?>
    </div>
    <?php
		if(CustomizeHumburger::HumburgerButtonTemplate() != 'none'){
			get_template_part('components/header/sp/button/'.CustomizeHumburger::HumburgerButtonTemplate());
		}
    ?>
</nav>
<div id="hbmenuwraapper" class="position-fixed hbclose zm2 w-100">
    <?php WidgetsMenu::SetHumbugerMenu('pt3');?>
    <section class="col-12 float-left" style="position:absolute; bottom:0;">
        <?php
            if(CustomizeHeader::SearchAreaTemplate() != 'none'){
                get_template_part('components/header/sp/SearchArea/'.CustomizeHeader::SearchAreaTemplate());
            }
        ?>
    </section>
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
        /**ハンバーガーメニューの動き */
                //開く時
                if(e.target.id == 'hbuttoncover'){
                    document.getElementById('hbuttonwrapper').classList.toggle('hbuttonclose');
                    document.getElementById('hbuttonwrapper').classList.toggle('hbuttonopen');

                    if(document.getElementById('hbmenuwraapper').classList.contains('zm2')){
                        document.getElementById('hbmenuwraapper').classList.toggle('zm2');
                        document.getElementById('hbmenuwraapper').classList.toggle('z2');
                        setTimeout(() => {
                            document.getElementById('hbmenuwraapper').classList.toggle('hbclose');
                            document.getElementById('hbmenuwraapper').classList.toggle('hbopen');
                        }, 200);
                    }else{
                        document.getElementById('hbmenuwraapper').classList.toggle('hbclose');
                        document.getElementById('hbmenuwraapper').classList.toggle('hbopen');
                        setTimeout(() => {

                            document.getElementById('hbmenuwraapper').classList.toggle('zm2');
                            document.getElementById('hbmenuwraapper').classList.toggle('z2');
                        }, 500);
                    }

                }
                //開いているときそれ以外の要素をクリックした時
                if(document.getElementById('hbmenuwraapper').classList.contains('hbopen') && !e.target.closest('#searchareasp')){
                    document.getElementById('hbmenuwraapper').classList.add('hbclose');
                    document.getElementById('hbmenuwraapper').classList.remove('hbopen');

                    document.getElementById('hbuttonwrapper').classList.remove('hbuttonopen');
                    document.getElementById('hbuttonwrapper').classList.add('hbuttonclose');
                    setTimeout(() => {
                        document.getElementById('hbmenuwraapper').classList.add('zm2');
                        document.getElementById('hbmenuwraapper').classList.remove('z2');
                    }, 500);
                }
            });
        });
    </script>
    <?php
});
?>