<?php
    if(is_404()){
        get_template_part('components/Elements/Content/PageCategory/404page');
    }
    if(is_front_page() || is_home()){
        get_template_part('components/Elements/Content/PageCategory/homepage');
    }
    if(is_single()){
        get_template_part('components/Elements/Content/PageCategory/singlepage');
    }
    if(is_page()){
        get_template_part('components/Elements/Content/PageCategory/page');
    }
    if(is_archive()){
        get_template_part('components/Elements/Content/PageCategory/archivetemplates/'.CustomizePageLayout::ArchiveTemplate());
    }
?>