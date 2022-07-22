<?php
    class CustomizeHumburger{
        public function __construct() {
            add_action( 'customize_register', array( $this,'SetHumburgerLayout' ) );
            add_action( 'wp_footer', array( $this,'SetCss' ) );
        }

        public function SetHumburgerLayout($wp_customize){
            $settings = array(
                'humburgertemplate' => array(
                    'panel' => array(
                        'title'    => 'ハンバーガーメニューの設定',
                        'priority' => 4
                    ),
                    'section' => array(
                        'title'    => __( 'ハンバーガーメニューのデザインを変更する', 'theme_slug' ),
                        'panel'    => 'humburger_design_panel',
                        'priority' => 1
                    ),
                    'setting' => 'humburger_design_setting',
                    'controll' => array(
                        'label'       => '選択する', 
                        'type'        => 'radio',
                        'section'     => 'humburger_design_section', 
                        'settings'    => 'humburger_design_setting', 
                        'description' => 'ハンバーガーメニューの変更をご確認ください。',
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( 'パターン1' ),
                            'pt2'   => __( 'パターン2' ),
                            'pt3'   => __( 'パターン3' ),
                            'none'   => __( '非表示' )
                        )
                    ),
                    'section2' => array(
                        'title'    => __( 'ハンバーガーメニューのボタンの色を変更する', 'theme_slug1' ),
                        'panel'    => 'humburger_design_panel',
                        'priority' => 7
                    ),
                    'setting2' => 'humburger_design_setting2',
                    'default2' => array(
                        'default'     => '#06357c',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'controll2' => array(
                        'label'    => 'ハンバーガーメニューのボタンの色を変更する',
                        'section'    => 'humburger_design_section2',
                        'settings'   => 'humburger_design_setting2'
                    ),

                    'section3' => array(
                        'title'    => __( 'ハンバーガーメニューの背景色を変更する', 'theme_slug2' ),
                        'panel'    => 'humburger_design_panel',
                        'priority' => 2
                    ),
                    'setting3' => 'humburger_design_setting3',
                    'default3' => array(
                        'default'     => '#ededce',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'controll3' => array(
                        'label'    => 'ハンバーガーメニューの背景色を変更する',
                        'section'    => 'humburger_design_section3',
                        'settings'   => 'humburger_design_setting3'
                    ),
                    'section4' => array(
                        'title'    => __( 'ハンバーガーメニューの文字の色を変更する', 'theme_slug3' ),
                        'panel'    => 'humburger_design_panel',
                        'priority' => 3
                    ),
                    'setting4' => 'humburger_design_setting4',
                    'default4' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'controll4' => array(
                        'label'    => 'ハンバーガーメニューの文字の色を変更する',
                        'section'    => 'humburger_design_section4',
                        'settings'   => 'humburger_design_setting4'
                    ),
                    'section5' => array(
                        'title'    => __( 'ハンバーガーメニューにマウスをかざした時のフォントの色', 'theme_slug3' ),
                        'panel'    => 'humburger_design_panel',
                        'priority' => 4
                    ),
                    'setting5' => 'humburger_design_setting5',
                    'default5' => array(
                        'default'     => '#afafaf',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'controll5' => array(
                        'label'    => 'ハンバーガーメニューにマウスをかざした時のフォントの色',
                        'section'    => 'humburger_design_section5',
                        'settings'   => 'humburger_design_setting5'
                    ),

                    'section6' => array(
                        'title'    => __( 'ハンバーガーメニューのボタンのデザインを変更する', 'theme_slug' ),
                        'panel'    => 'humburger_design_panel',
                        'priority' => 6
                    ),
                    'setting6' => 'humburger_design_setting6',
                    'controll6' => array(
                        'label'       => '選択する', 
                        'type'        => 'radio',
                        'section'     => 'humburger_design_section6', 
                        'settings'    => 'humburger_design_setting6', 
                        'description' => 'ハンバーガーメニューの変更をご確認ください。',
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( 'パターン1' ),
                            'pt2'   => __( 'パターン2' ),
                            'pt3'   => __( 'パターン3' ),
                            'none'   => __( '非表示' )
                        )
                    ),
                )
            );
            $wp_customize->add_panel('humburger_design_panel', $settings['humburgertemplate']['panel']);
            $wp_customize->add_section('humburger_design_section', $settings['humburgertemplate']['section']);
            $wp_customize->add_setting($settings['humburgertemplate']['setting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'humburger_design_setting', $settings['humburgertemplate']['controll']));

            $wp_customize->add_section('humburger_design_section2', $settings['humburgertemplate']['section2']);
            $wp_customize->add_setting($settings['humburgertemplate']['setting2'], $settings['humburgertemplate']['default2']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'humburger_design_setting2', $settings['humburgertemplate']['controll2']));

            $wp_customize->add_section('humburger_design_section3', $settings['humburgertemplate']['section3']);
            $wp_customize->add_setting($settings['humburgertemplate']['setting3'], $settings['humburgertemplate']['default3']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'humburger_design_setting3', $settings['humburgertemplate']['controll3']));

            $wp_customize->add_section('humburger_design_section4', $settings['humburgertemplate']['section4']);
            $wp_customize->add_setting($settings['humburgertemplate']['setting4'], $settings['humburgertemplate']['default4']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'humburger_design_setting4', $settings['humburgertemplate']['controll4']));

            $wp_customize->add_section('humburger_design_section5', $settings['humburgertemplate']['section5']);
            $wp_customize->add_setting($settings['humburgertemplate']['setting5'], $settings['humburgertemplate']['default5']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'humburger_design_setting5', $settings['humburgertemplate']['controll5']));

            $wp_customize->add_section('humburger_design_section6', $settings['humburgertemplate']['section6']);
            $wp_customize->add_setting($settings['humburgertemplate']['setting6']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'humburger_design_setting6', $settings['humburgertemplate']['controll6']));

        }
        public static function HumburgerTemplate(){
            if(!get_theme_mod('humburger_design_setting')){
                return 'pt1';
            }
            return get_theme_mod('humburger_design_setting');
        }

        public static function HumburgerButtonTemplate(){
            if(!get_theme_mod('humburger_design_setting6')){
                return 'pt1';
            }
            return get_theme_mod('humburger_design_setting6');
        }

        public static function SetHbuttonWrapperBg(){
            $humburger_design_setting2 = '#06357c';
            if(get_theme_mod('humburger_design_setting2')){
                $humburger_design_setting2 = get_theme_mod('humburger_design_setting2');
            }
            return $humburger_design_setting2;
        }

        public static function SetHbMenuWrapperBg(){
            $humburger_design_setting3 = '#ededce';
            if(get_theme_mod('humburger_design_setting3')){
                $humburger_design_setting3 = get_theme_mod('humburger_design_setting3');
            }
            return $humburger_design_setting3;
        }

        public static function SetHbMenuWrapperFontColor(){
            $humburger_design_setting4 = '#afafaf';
            if(get_theme_mod('humburger_design_setting4')){
                $humburger_design_setting4 = get_theme_mod('humburger_design_setting4');
            }
            return $humburger_design_setting4;
        }

        public static function SetHbMenuWrapperFontColorHover(){
            $humburger_design_setting5 = '#afafaf';
            if(get_theme_mod('humburger_design_setting5')){
                $humburger_design_setting5 = get_theme_mod('humburger_design_setting5');
            }
            return $humburger_design_setting5;
        }

        public function SetCss()
        {
            ?>
            <style type="text/css">
                #hbuttonwrapper{
                    background-color:<?php echo self::SetHbuttonWrapperBg(); ?>; 
                }
                #hbmenuwraapper{
                    background-color:<?php echo self::SetHbMenuWrapperBg(); ?>;
                }
                #hbmenuwraapper .menufont{
                    color:<?php echo self::SetHbMenuWrapperFontColor(); ?>;
                } 
                #hbmenuwraapper .menufont:hover{
                    color:<?php echo self::SetHbMenuWrapperFontColorHover(); ?>;
                }
            </style>
            <?php
        }
    }
?>