<?php
class CustomizeTitle{
    public function __construct(){
        add_action( 'customize_register', array( $this,'SetMenuStr' ) );
        add_action( 'wp_head', array( $this,'SetStr' ) );
    }

    public function SetMenuStr($wp_customize){
        $settings = array(
            'logotitle' => array(
                'panel' => array(
                    'title'    => 'タイトルの設定',
                    'priority' => 1
                ),
                'section' => array(
                    'title'    => 'ロゴタイトルを編集する',
                    'panel'    => 'logo_title_panel'
                ),
                'setting' => 'logo_title_setting',
                'controll' => array(
                    'label'    => '編集する',
                    'section'  => 'logo_title_section',
                    'settings' => 'logo_title_setting',
                    'priority' => 1
                ),
                'section2' => array(
                    'title'    => 'copyrightを編集する',
                    'panel'    => 'logo_title_panel'
                ),
                'setting2' => 'logo_title_setting2',
                'controll2' => array(
                    'label'    => '編集する',
                    'section'  => 'logo_title_section2',
                    'settings' => 'logo_title_setting2',
                    'priority' => 1
                )
            )
        );
        $wp_customize->add_panel('logo_title_panel', $settings['logotitle']['panel']);
        $wp_customize->add_section('logo_title_section', $settings['logotitle']['section']);
        $wp_customize->add_setting($settings['logotitle']['setting']);
        $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'logo_title_setting', $settings['logotitle']['controll']));

        $wp_customize->add_section('logo_title_section2', $settings['logotitle']['section2']);
        $wp_customize->add_setting($settings['logotitle']['setting2']);
        $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'logo_title_setting2', $settings['logotitle']['controll2']));
    }

    public static function SetStr(){
        $logo = 'logo';
        $copyright = 'corporate';
        if(get_theme_mod('logo_title_setting')){
            $logo = get_theme_mod('logo_title_setting');
        }
        if(get_theme_mod('logo_title_setting2')){
            $copyright = get_theme_mod('logo_title_setting2');
        }

        return (object)['logo' => $logo, 'copyright' => $copyright];
    }
}
?>