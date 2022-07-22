<div id="gnavinner" class="gnavinner2 col-12 col-md-10 col-lg-8 m-auto pr-0 pl-0 position-fixed">
    <div class="w-100 d-inline-block pt-5 pt-md-3">
        <div class="d-inline-block float-left">
            <?php GenerateHtml::GenerateLogo('pt2'); ?>
            <img src="<?php echo CustomizeHeader::SetSearchGlassIcon();?>" id="glassiconpc" class="searchglasslogo cursor p-1 ml-3">
        </div>
        <?php WidgetsMenu::SetHeaderMenu('pt2'); ?>
    </div>
    <?php GenerateHtml::GenerateGnavribbon(); ?>
</div>
<section class="d-inline-block float-left">
    <?php
        if(CustomizeHeader::SearchAreaTemplate() != 'none'){
            get_template_part('components/header/pc/SearchArea/'.CustomizeHeader::SearchAreaTemplate());
        }
    ?>
</section>
<?php
    add_action('wp_footer', function(){
        $obj = CustomizeHeader::ReturnHeaderColor();
        ?>
        <style type="text/css">
            .logo,
            .gmenueinner > .bgmain{
                background-color:<?php echo $obj->background; ?>; 
            }
            .menufont{
                color:<?php echo $obj->color; ?>; 
            }
            .menufont:hover{
                color:<?php echo $obj->hover; ?>; 
            }
        </style>
        <script>
        window.addEventListener('DOMContentLoaded', () => {
            if(!document.getElementById('glassiconpc') || !document.getElementById('glassiconpc')){
                return;
            }
            const initval = 'top:0px; opacity:0; z-index:-2; transition:all 0.25s',
            calcval = (val) => {return `top:${val}px; opacity:1; z-index:0; transition:all 0.25s;`;},
            searchmenupc = document.getElementById('searchmenupc'),
            gnavinner = document.getElementById('gnavinner');
            searchmenupc.setAttribute('style', initval);

            window.addEventListener('click', (e) => {
                if(e.target.id == 'glassiconpc'){
                    var gnavheight = gnavinner.offsetHeight;
                    if(searchmenupc.getAttribute('style') == initval){
                        searchmenupc.setAttribute('style', calcval(gnavheight));
                    }else{
                        searchmenupc.setAttribute('style', initval);
                    }
                }else{//開いているときそれ以外の要素をクリックした時
                    if(searchmenupc.getAttribute('style') != initval && !e.target.closest('.searchmenu_inner')){
                        searchmenupc.setAttribute('style', initval);
                    }
                }
            });
        });
        </script>
        <?php
    });
?>