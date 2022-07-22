<?php
    add_action('wp_footer', function(){
        ?>
        <style type="text/css">
            @media screen and (min-width: 768px){
                .searchglasslogo{
                    background-color:<?php echo CustomizeHeader::SetSearchGlassIconBackground(); ?>;
                }
            }
        </style>
        <?php
    });
?>