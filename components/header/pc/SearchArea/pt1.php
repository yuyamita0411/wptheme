<div id="searchmenupc" class="searchmenu_inner position-absolute zm2 smenu_close w-100 pt-3 pb-3">
    <div class="col-12 col-md-10 col-lg-8 pr-0 pl-0 m-auto">
        <h5 class="searchtiltearea"><?php echo CustomizeHeader::SearchAreaTitle(); ?></h5>
        <div>
            <input id="searchRtxt" type="text" name="" class="searcharea p-2">
            <button id="searchRbutton" class="searchbutton cursor p-2">検索</button>
        </div>
    </div>
    <div id="searchRArea" class="col-12 col-md-10 col-lg-8 pr-0 pl-0 m-auto"></div>
</div>
<?php
    add_action('wp_footer', function(){
        ?>
        <style type="text/css">
            .searchtiltearea{
                color:<?php echo CustomizeHeader::SearchAreaFontColor(); ?>;
            }
            #searchmenupc{
                left:0;
            }
            #searchmenupc{
                background:<?php echo CustomizeHeader::SearchAreaBackground(); ?>;
            }
            #searchmenupc .searcharea{
                border:solid lightgray 1px;
            }
            #searchmenupc .searcharea{
                border-radius:5px;
            }
            #searchmenupc .searchbutton{
                color:#ffffff;
                background:gray;
                border:none;
                border-radius:5px;
            }
            @media screen and (min-width: 768px){
                .searchglasslogo{
                    background-color:<?php echo CustomizeHeader::SetSearchGlassIconBackground(); ?>;
                }
            }
        </style>
        <script>
            const searchRbutton = document.getElementById('searchRbutton');
            searchRbutton.addEventListener('click', () => {
                //var searchword = 
            });
        </script>
        <?php
    });
?>