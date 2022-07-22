<?php
//デザイン関係
require get_template_directory() . '/classes/StyleScript.php';
new StyleScript();

//ウィジェット関係
require get_template_directory() . '/classes/widgets.php';
new Widgets();

//カスタムメニュー関係
require get_template_directory() . '/classes/widgetsmenu.php';
new WidgetsMenu();

//外観カスタマイズの項目関係
require get_template_directory() . '/classes/Customizer/CustomizeTitle.php'; //タイトル関係
require get_template_directory() . '/classes/Customizer/CustomizeFont.php'; //フォント関係
require get_template_directory() . '/classes/Customizer/CustomizeHeader.php';//ヘッダー関係
require get_template_directory() . '/classes/Customizer/CustomizeHumburger.php';//ハンバーガーメニュー関係
require get_template_directory() . '/classes/Customizer/CustomizeBreadCrumb.php';//ぱんくずリスト関係
require get_template_directory() . '/classes/Customizer/CustomizeMainColumn.php'; //メインカラム関係
require get_template_directory() . '/classes/Customizer/CustomizeSidebar.php';//サイドバー関係
require get_template_directory() . '/classes/Customizer/CustomizeFooter.php';//フッター関係
require get_template_directory() . '/classes/Customizer/CustomizePageLayout.php'; //テンプレート関係

require get_template_directory() . '/classes/Customizer/CustomizeNewestArticleArea.php';//各パーツ
require get_template_directory() . '/classes/Customizer/CustomizeCategoryArticle.php';//各パーツ
require get_template_directory() . '/classes/Customizer/CustomizeCategoryLink.php';//各パーツ
require get_template_directory() . '/classes/Customizer/CustomizePopularArticle.php';//各パーツ
require get_template_directory() . '/classes/Customizer/CustomizeNewestArticle.php';//各パーツ

require get_template_directory() . '/classes/Customizer/CustomizeOrder.php';//各パーツ

require get_template_directory() . '/classes/Customizer/CustomizeAnalyticsTag.php';//計測タグ関連

new CustomizeTitle();
new CustomizeFont();
new CustomizeHeader();
new CustomizeHumburger();
new CustomizeBreadCrumb();
new CustomizeMainColumn();
new CustomizeSidebar();
new CustomizeFooter();
new CustomizePageLayout();

new CustomizeNewestArticleArea();
new CustomizeCategoryArticle();
new CustomizeCategoryLink();
new CustomizePopularArticle();
new CustomizeNewestArticle();
new CustomizeOrder();

new CustomizeAnalyticsTag();

//htmlを生成するクラス
require get_template_directory() . '/classes/GenerateHtml.php';
?>