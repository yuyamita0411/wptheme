<?php
class CustomizeAnalyticsTag{
    public function __construct(){
        add_action( 'customize_register', array( $this,'SetAnalyticsTag' ) );
    }

    public function SetAnalyticsTag($wp_customize){
        $settings = array(
            'analyticspanel' => array(
                'panel' => array(
                    'title'    => '計測タグを設置する',
                    'priority' => 17
                ),
                'section' => array(
                    'title'    => 'ヘッダー付近にタグを設定する',
                    'panel'    => 'analytics_tag_panel'
                ),
                'setting' => 'tag_head_setting',
                'controll' => array(
                    'label'    => 'タグを編集する',
                    'type'    => 'textarea',
                    'section'  => 'tag_head_section',
                    'settings' => 'tag_head_setting',
                    'description' => '<span style="color:red;">* scriptタグなしでご利用ください</span>', 
                    'priority' => 1
                ),
                'section2' => array(
                    'title'    => 'フッター付近にタグを設定する',
                    'panel'    => 'analytics_tag_panel'
                ),
                'setting2' => 'tag_footer_setting',
                'controll2' => array(
                    'label'    => 'タグを編集する',
                    'type'    => 'textarea',
                    'section'  => 'tag_footer_section',
                    'settings' => 'tag_footer_setting',
                    'description' => '<span style="color:red;">* scriptタグなしでご利用ください</span>', 
                    'priority' => 1
                )
            )
        );
        $wp_customize->add_panel('analytics_tag_panel', $settings['analyticspanel']['panel']);
        $wp_customize->add_section('tag_head_section', $settings['analyticspanel']['section']);
        $wp_customize->add_setting($settings['analyticspanel']['setting']);
        $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'tag_head_setting', $settings['analyticspanel']['controll']));

        $wp_customize->add_section('tag_footer_section', $settings['analyticspanel']['section2']);
        $wp_customize->add_setting($settings['analyticspanel']['setting2']);
        $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'tag_footer_setting', $settings['analyticspanel']['controll2']));
    }

    public static function AnalyticsHeadTag(){
        ?>
        <script>
            <?php echo get_theme_mod('tag_head_setting'); ?>
        </script>
        <?php
    }
    public static function AnalyticsFootTag(){
        ?>
        <script>
            <?php echo get_theme_mod('tag_footer_setting'); ?>
        </script>
        <?php
    }
}
?>