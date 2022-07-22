<!DOCTYPE html>
<html class="no-js">
	<head>
		<?php wp_head(); ?>
		<?php CustomizeAnalyticsTag::AnalyticsHeadTag(); ?>
	</head>
	<body <?php body_class();?>>
    <header class="gnavwrapper w-100 d-inline-block z1">
        <?php
            if(CustomizeHumburger::HumburgerTemplate() != 'none'){
                get_template_part('components/header/sp/menu/'.CustomizeHumburger::HumburgerTemplate());
            }
            if(CustomizeHeader::HeaderTemplate() != 'none'){
                get_template_part('components/header/pc/'.CustomizeHeader::HeaderTemplate());
            }
        ?>
    </header>
        <main id="site-content" class="w-100 d-inline-block pt-4">
            <?php
                if(CustomizeNewestArticle::NewestArticleTemplate() != 'none'){
                    get_template_part('components/Elements/NewestArticle/'.CustomizeNewestArticle::NewestArticleTemplate());
                }
                get_template_part('components/header/breadcrumb/'.CustomizeBreadCrumb::BreadcrumbTemplate());

                //順番の入れ替えを可能とする 配列を作ってキーで照合させる ↓↓↓↓↓
                $tmarr = [
                    'Content' => 'content',
                    'NewestArticleArea' => CustomizeNewestArticleArea::NewestArticleAreaTemplate(),
                    'CategoryArticle' => CustomizeCategoryArticle::CategoryArticlesTemplate(),
                    'CategoryLink' => CustomizeCategoryLink::CatLinkTemplate(),
                    'PopularArticle' => CustomizePopularArticle::PopularArticlesTemplate()
                ];
                if($tmarr[CustomizeOrder::DisplayFirstOrder()] != 'none'){
                    get_template_part('components/Elements/'.CustomizeOrder::DisplayFirstOrder().'/'.$tmarr[CustomizeOrder::DisplayFirstOrder()]);
                }
                if($tmarr[CustomizeOrder::DisplaySecondOrder()] != 'none'){
                    get_template_part('components/Elements/'.CustomizeOrder::DisplaySecondOrder().'/'.$tmarr[CustomizeOrder::DisplaySecondOrder()]);
                }
                if($tmarr[CustomizeOrder::DisplayThirdOrder()] != 'none'){
                    get_template_part('components/Elements/'.CustomizeOrder::DisplayThirdOrder().'/'.$tmarr[CustomizeOrder::DisplayThirdOrder()]);
                }
                if($tmarr[CustomizeOrder::DisplayForthOrder()] != 'none'){
                    get_template_part('components/Elements/'.CustomizeOrder::DisplayForthOrder().'/'.$tmarr[CustomizeOrder::DisplayForthOrder()]);
                }
                if($tmarr[CustomizeOrder::DisplayFifthOrder()] != 'none'){
                    get_template_part('components/Elements/'.CustomizeOrder::DisplayFifthOrder().'/'.$tmarr[CustomizeOrder::DisplayFifthOrder()]);
                }
                //順番の入れ替えを可能とする 配列を作ってキーで照合させる ↑↑↑↑↑

                if(CustomizeSidebar::SidebarButtonTemplate() != 'none'){
                    get_template_part('components/sidebar/button/'.CustomizeSidebar::SidebarButtonTemplate());
                }
                if(CustomizeSidebar::SidebarTemplate() != 'none'){
                    get_template_part('components/sidebar/menu/'.CustomizeSidebar::SidebarTemplate());
                }
                if(CustomizeFooter::FooterTemplate() != 'none'){
                    get_template_part('components/footer/'.CustomizeFooter::FooterTemplate());
                }
            ?>
        </main>
        <?php wp_footer(); ?>
        <?php CustomizeAnalyticsTag::AnalyticsFootTag(); ?>
    </body>
</html>