<?php
    class CustomizeBreadCrumb{
        public function __construct() {
            add_action( 'customize_register', array( $this,'SetBreadcrumbLayout' ) );
        }

        public function SetBreadcrumbLayout($wp_customize){
            $settings = array(
                'breadcrumbtemplate' => array(
                    'panel' => array(
                        'title'    => 'ぱんくずリストの設定',
                        'priority' => 5
                    ),
                    'section' => array(
                        'title'    => __( 'ぱんくずリストのデザインを変更する', 'theme_slug' ),
                        'panel'    => 'breadcrumb_design_panel'
                    ),
                    'setting' => 'breadcrumb_design_setting',
                    'controll' => array(
                        'label'       => '選択する', 
                        'type'        => 'radio',
                        'section'     => 'breadcrumb_design_section', 
                        'settings'    => 'breadcrumb_design_setting', 
                        'description' => 'ぱんくずリストの変更をご確認ください。',
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( 'パターン1' ),
                            'pt2'   => __( 'パターン2' ),
                            'pt3'   => __( 'パターン3' ),
                            'none'   => __( '非表示' )
                        )
                    ),
                    'section2' => array(
                        'title'    => __( 'ぱんくずリストの背景色を変更する', 'theme_slug1' ),
                        'panel'    => 'breadcrumb_design_panel'
                    ),
                    'setting2' => 'breadcrumb_design_setting2',
                    'default2' => array(
                        'default'     => '#e9ecef',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'controll2' => array(
                        'label'    => 'ぱんくずリストの背景色を変更する',
                        'section'    => 'breadcrumb_design_section2',
                        'settings'   => 'breadcrumb_design_setting2'
                    ),
                    'section3' => array(
                        'title'    => __( 'ぱんくずリストの文字の色を変更する', 'theme_slug2' ),
                        'panel'    => 'breadcrumb_design_panel'
                    ),
                    'setting3' => 'breadcrumb_design_setting3',
                    'default3' => array(
                        'default'     => '#06357c',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'controll3' => array(
                        'label'    => 'ぱんくずリストの文字の色を変更する',
                        'section'    => 'breadcrumb_design_section3',
                        'settings'   => 'breadcrumb_design_setting3'
                    ),
                    'section4' => array(
                        'title'    => __( 'ぱんくずリストにマウスをかざした時のフォントの色', 'theme_slug3' ),
                        'panel'    => 'breadcrumb_design_panel'
                    ),
                    'setting4' => 'breadcrumb_design_setting4',
                    'default4' => array(
                        'default'     => '#afafaf',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'controll4' => array(
                        'label'    => 'ぱんくずリストにマウスをかざした時のフォントの色',
                        'section'    => 'breadcrumb_design_section4',
                        'settings'   => 'breadcrumb_design_setting4'
                    ),
                    'section5' => array(
                        'title'    => __( 'ぱんくずリストの矢印の色を変更する', 'theme_slug4' ),
                        'panel'    => 'breadcrumb_design_panel'
                    ),
                    'setting5' => 'breadcrumb_design_setting5',
                    'default5' => array(
                        'default'     => '#757575',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'controll5' => array(
                        'label'    => 'ぱんくずリストの矢印の色を変更する',
                        'section'    => 'breadcrumb_design_section5',
                        'settings'   => 'breadcrumb_design_setting5'
                    ),

                )
            );
            $wp_customize->add_panel('breadcrumb_design_panel', $settings['breadcrumbtemplate']['panel']);
            $wp_customize->add_section('breadcrumb_design_section', $settings['breadcrumbtemplate']['section']);
            $wp_customize->add_setting($settings['breadcrumbtemplate']['setting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'breadcrumb_design_setting', $settings['breadcrumbtemplate']['controll']));

            $wp_customize->add_section('breadcrumb_design_section2', $settings['breadcrumbtemplate']['section2']);
            $wp_customize->add_setting($settings['breadcrumbtemplate']['setting2'], $settings['breadcrumbtemplate']['default2']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'breadcrumb_design_setting2', $settings['breadcrumbtemplate']['controll2']));

            $wp_customize->add_section('breadcrumb_design_section3', $settings['breadcrumbtemplate']['section3']);
            $wp_customize->add_setting($settings['breadcrumbtemplate']['setting3'], $settings['breadcrumbtemplate']['default3']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'breadcrumb_design_setting3', $settings['breadcrumbtemplate']['controll3']));

            $wp_customize->add_section('breadcrumb_design_section4', $settings['breadcrumbtemplate']['section4']);
            $wp_customize->add_setting($settings['breadcrumbtemplate']['setting4'], $settings['breadcrumbtemplate']['default4']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'breadcrumb_design_setting4', $settings['breadcrumbtemplate']['controll4']));

            $wp_customize->add_section('breadcrumb_design_section5', $settings['breadcrumbtemplate']['section5']);
            $wp_customize->add_setting($settings['breadcrumbtemplate']['setting5'], $settings['breadcrumbtemplate']['default5']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'breadcrumb_design_setting5', $settings['breadcrumbtemplate']['controll5']));
        }
        public static function BreadcrumbTemplate(){
            if(!get_theme_mod('breadcrumb_design_setting')){
                return 'pt1';
            }
            return get_theme_mod('breadcrumb_design_setting');
        }

        public static function ReturnBreadCrumbColor()
        {
            // インストールしたばかりで何もデータが入っていない時とそれ以降
            $breadcrumb_design_setting2 = '#e9ecef';
            $breadcrumb_design_setting3 = '#06357c';
            $breadcrumb_design_setting4 = '#afafaf';
            $breadcrumb_design_setting5 = '#757575';
            if(get_theme_mod('breadcrumb_design_setting2')){
                $breadcrumb_design_setting2 = get_theme_mod('breadcrumb_design_setting2');
            }
            if(get_theme_mod('breadcrumb_design_setting3')){
                $breadcrumb_design_setting3 = get_theme_mod('breadcrumb_design_setting3');
            }
            if(get_theme_mod('breadcrumb_design_setting4')){
                $breadcrumb_design_setting4 = get_theme_mod('breadcrumb_design_setting4');
            }
            if(get_theme_mod('breadcrumb_design_setting5')){
                $breadcrumb_design_setting5 = get_theme_mod('breadcrumb_design_setting5');
            }
            return (object)[
                'background' => $breadcrumb_design_setting2,
                'color' => $breadcrumb_design_setting3,
                'hover' => $breadcrumb_design_setting4,
                'arrowcolor' => $breadcrumb_design_setting5,
            ];
        }
    }
?>