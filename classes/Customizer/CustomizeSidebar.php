<?php
    class CustomizeSidebar{
        public function __construct() {
            add_action( 'customize_register', array( $this,'SetSidebarLayout' ) );
            add_action( 'wp_footer', array( $this,'SetCss' ) );
        }

        public function SetSidebarLayout($wp_customize){
            $settings = array(
                'sidebartemplate' => array(
                    'panel' => array(
                        'title'    => 'サイドバーの設定',
                        'priority' => 7
                    ),
                    'section' => array(
                        'title'    => __( 'サイドバーのデザインを変更する', 'sideber' ),
                        'panel'    => 'sidebar_design_panel',
                        'priority' => 1
                    ),
                    'setting' => 'sidebar_design_setting',
                    'controll' => array(
                        'label'       => '選択する', 
                        'type'        => 'radio',
                        'section'     => 'sidebar_design_section', 
                        'settings'    => 'sidebar_design_setting', 
                        'description' => 'サイドバーの変更をご確認ください。',
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( 'パターン1' ),
                            'pt2'   => __( 'パターン2' ),
                            'pt3'   => __( 'パターン3' ),
                            'none'   => __( '非表示' )
                        )
                    ),
                    'section2' => array(
                        'title'    => __( 'サイドバーの背景色を変更する', 'sideber2' ),
                        'panel'    => 'sidebar_design_panel',
                        'priority' => 2
                    ),
                    'setting2' => 'sidebar_design_setting2',
                    'default2' => array(
                        'default'     => '#ededce',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'controll2' => array(
                        'label'    => 'サイドバーの背景色を変更する',
                        'section'    => 'sidebar_design_section2',
                        'settings'   => 'sidebar_design_setting2'
                    ),
                    'section3' => array(
                        'title'    => __( 'サイドバーの文字色を変更する', 'sideber3' ),
                        'panel'    => 'sidebar_design_panel',
                        'priority' => 3
                    ),
                    'setting3' => 'sidebar_design_setting3',
                    'default3' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'controll3' => array(
                        'label'    => 'サイドバーの文字色を変更する',
                        'section'    => 'sidebar_design_section3',
                        'settings'   => 'sidebar_design_setting3'
                    ),
                    'section4' => array(
                        'title'    => __( 'サイドバーにマウスをかざした時の文字色を変更する', 'sideber4' ),
                        'panel'    => 'sidebar_design_panel',
                        'priority' => 4
                    ),
                    'setting4' => 'sidebar_design_setting4',
                    'default4' => array(
                        'default'     => '#afafaf',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'controll4' => array(
                        'label'    => 'サイドバーにマウスをかざした時の文字色を変更する',
                        'section'    => 'sidebar_design_section4',
                        'settings'   => 'sidebar_design_setting4'
                    ),
                    'section5' => array(
                        'title'    => __( 'サイドバーのボタンの色を変更する', 'sideber5' ),
                        'panel'    => 'sidebar_design_panel',
                        'priority' => 6
                    ),
                    'setting5' => 'sidebar_design_setting5',
                    'default5' => array(
                        'default'     => '#06357c',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'controll5' => array(
                        'label'    => 'サイドバーのボタンの色を変更する',
                        'section'    => 'sidebar_design_section5',
                        'settings'   => 'sidebar_design_setting5'
                    ),
                    'section6' => array(
                        'title'    => __( 'サイドバーのボタンのデザインを変更する', 'sideber' ),
                        'panel'    => 'sidebar_design_panel',
                        'priority' => 5
                    ),
                    'setting6' => 'sidebar_design_setting6',
                    'controll6' => array(
                        'label'       => '選択する', 
                        'type'        => 'radio',
                        'section'     => 'sidebar_design_section6', 
                        'settings'    => 'sidebar_design_setting6', 
                        'description' => 'サイドバーのボタンのデザインの変更をご確認ください。',
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( 'パターン1' ),
                            'pt2'   => __( 'パターン2' ),
                            'pt3'   => __( 'パターン3' ),
                            'none'   => __( '非表示' )
                        )
                    )
                )
            );
            $wp_customize->add_panel('sidebar_design_panel', $settings['sidebartemplate']['panel']);
            $wp_customize->add_section('sidebar_design_section', $settings['sidebartemplate']['section']);
            $wp_customize->add_setting($settings['sidebartemplate']['setting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'sidebar_design_setting', $settings['sidebartemplate']['controll']));

            $wp_customize->add_section('sidebar_design_section2', $settings['sidebartemplate']['section2']);
            $wp_customize->add_setting($settings['sidebartemplate']['setting2'], $settings['sidebartemplate']['default2']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'sidebar_design_setting2', $settings['sidebartemplate']['controll2']));

            $wp_customize->add_section('sidebar_design_section3', $settings['sidebartemplate']['section3']);
            $wp_customize->add_setting($settings['sidebartemplate']['setting3'], $settings['sidebartemplate']['default3']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'sidebar_design_setting3', $settings['sidebartemplate']['controll3']));

            $wp_customize->add_section('sidebar_design_section4', $settings['sidebartemplate']['section4']);
            $wp_customize->add_setting($settings['sidebartemplate']['setting4'], $settings['sidebartemplate']['default4']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'sidebar_design_setting4', $settings['sidebartemplate']['controll4']));

            $wp_customize->add_section('sidebar_design_section5', $settings['sidebartemplate']['section5']);
            $wp_customize->add_setting($settings['sidebartemplate']['setting5'], $settings['sidebartemplate']['default5']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'sidebar_design_setting5', $settings['sidebartemplate']['controll5']));

            $wp_customize->add_section('sidebar_design_section6', $settings['sidebartemplate']['section6']);
            $wp_customize->add_setting($settings['sidebartemplate']['setting6']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'sidebar_design_setting6', $settings['sidebartemplate']['controll6']));
        }


        public static function SidebarTemplate(){
            if(!get_theme_mod('sidebar_design_setting')){
                return 'pt1';
            }
            return get_theme_mod('sidebar_design_setting');
        }

        public static function SidebarButtonTemplate(){
            if(!get_theme_mod('sidebar_design_setting6')){
                return 'pt1';
            }
            return get_theme_mod('sidebar_design_setting6');
        }

        public function SetCss()
        {
            // インストールしたばかりで何もデータが入っていない時とそれ以降
            $sidebar_design_setting2 = '#ededce';
            $sidebar_design_setting3 = '#afafaf';
            $sidebar_design_setting4 = '#efefda';
            $sidebar_design_setting5 = '#06357c';
            if(get_theme_mod('sidebar_design_setting2')){
                $sidebar_design_setting2 = get_theme_mod('sidebar_design_setting2');
            }
            if(get_theme_mod('sidebar_design_setting3')){
                $sidebar_design_setting3 = get_theme_mod('sidebar_design_setting3');
            }
            if(get_theme_mod('sidebar_design_setting4')){
                $sidebar_design_setting4 = get_theme_mod('sidebar_design_setting4');
            }
            if(get_theme_mod('sidebar_design_setting5')){
                $sidebar_design_setting5 = get_theme_mod('sidebar_design_setting5');
            }
            ?>
            <style type="text/css">
                #sidebar{ 
                    background-color:<?php echo $sidebar_design_setting2; ?>; 
                }
                .sidebarfont{
                    color:<?php echo $sidebar_design_setting3; ?>; 
                }
                .sidebarfont:hover{
                    color:<?php echo $sidebar_design_setting4; ?>; 
                }
                #sidebarbutton{
                    background-color:<?php echo $sidebar_design_setting5; ?>; 
                }
            </style>
            <?php
        }
    }
?>