<?php
    class CustomizeFooter{
        public function __construct() {
            add_action( 'customize_register', array( $this,'SetFooterLayout' ) );
            add_action( 'wp_footer', array( $this,'SetCss' ) );
        }

        public function SetFooterLayout($wp_customize){
            $settings = array(
                'footertemplate' => array(
                    'panel' => array(
                        'title'    => 'フッターの設定',
                        'priority' => 8
                    ),
                    'section' => array(
                        'title'    => __( 'フッターのデザインを変更する', 'theme_slug' ),
                        'panel'    => 'footer_design_panel'
                    ),
                    'setting' => 'footer_design_setting',
                    'controll' => array(
                        'label'       => '選択する', 
                        'type'        => 'radio',
                        'section'     => 'footer_design_section', 
                        'settings'    => 'footer_design_setting', 
                        'description' => 'フッターの変更をご確認ください。',
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( 'パターン1' ),
                            'pt2'   => __( 'パターン2' ),
                            'pt3'   => __( 'パターン3' ),
                            'none'   => __( '非表示' )
                        )
                    ),
                    'section2' => array(
                        'title'    => __( 'フッターの背景色を変更する', 'theme_slug1' ),
                        'panel'    => 'footer_design_panel'
                    ),
                    'setting2' => 'footer_design_setting2',
                    'default2' => array(
                        'default'     => '#06357c',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'controll2' => array(
                        'label'    => 'フッターの背景色を変更する',
                        'section'    => 'footer_design_section2',
                        'settings'   => 'footer_design_setting2'
                    ),
                    'section3' => array(
                        'title'    => __( 'フッターの文字色を変更する', 'theme_slug2' ),
                        'panel'    => 'footer_design_panel'
                    ),
                    'setting3' => 'footer_design_setting3',
                    'default3' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'controll3' => array(
                        'label'    => 'フッターの文字色を変更する',
                        'section'    => 'footer_design_section3',
                        'settings'   => 'footer_design_setting3'
                    ),
                    'section4' => array(
                        'title'    => __( 'フッターにマウスをかざした時の文字色を変更する', 'theme_slug3' ),
                        'panel'    => 'footer_design_panel'
                    ),
                    'setting4' => 'footer_design_setting4',
                    'default4' => array(
                        'default'     => '#afafaf',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'controll4' => array(
                        'label'    => 'フッターにマウスをかざした時の文字色を変更する',
                        'section'    => 'footer_design_section4',
                        'settings'   => 'footer_design_setting4'
                    )
                )
            );
            $wp_customize->add_panel('footer_design_panel', $settings['footertemplate']['panel']);
            $wp_customize->add_section('footer_design_section', $settings['footertemplate']['section']);
            $wp_customize->add_setting($settings['footertemplate']['setting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'footer_design_setting', $settings['footertemplate']['controll']));

            $wp_customize->add_section('footer_design_section2', $settings['footertemplate']['section2']);
            $wp_customize->add_setting($settings['footertemplate']['setting2'], $settings['footertemplate']['default2']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'footer_design_setting2', $settings['footertemplate']['controll2']));

            $wp_customize->add_section('footer_design_section3', $settings['footertemplate']['section3']);
            $wp_customize->add_setting($settings['footertemplate']['setting3'], $settings['footertemplate']['default3']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'footer_design_setting3', $settings['footertemplate']['controll3']));

            $wp_customize->add_section('footer_design_section4', $settings['footertemplate']['section4']);
            $wp_customize->add_setting($settings['footertemplate']['setting4'], $settings['footertemplate']['default4']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'footer_design_setting4', $settings['footertemplate']['controll4']));
        }
        public static function FooterTemplate(){
            if(!get_theme_mod('footer_design_setting')){
                return 'pt1';
            }
            return get_theme_mod('footer_design_setting');
        }

        public function SetCss()
        {
            // インストールしたばかりで何もデータが入っていない時とそれ以降
            $footer_design_setting2 = '#06357c';
            $footer_design_setting3 = '#ffffff';
            $footer_design_setting4 = '#afafaf';
            if(get_theme_mod('footer_design_setting2')){
                $footer_design_setting2 = get_theme_mod('footer_design_setting2');
            }
            if(get_theme_mod('footer_design_setting3')){
                $footer_design_setting3 = get_theme_mod('footer_design_setting3');
            }
            if(get_theme_mod('footer_design_setting4')){
                $footer_design_setting4 = get_theme_mod('footer_design_setting4');
            }
            ?>
            <style type="text/css">
                .footer{
                    background-color:<?php echo $footer_design_setting2; ?>;
                }
                .footer .menufont{
                    color:<?php echo $footer_design_setting3; ?>;
                }
                .footer .menufont:hover{
                    color:<?php echo $footer_design_setting4; ?>;
                }
            </style>
            <?php
        }
    }
?>