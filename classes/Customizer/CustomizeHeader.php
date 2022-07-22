<?php
    class CustomizeHeader{
        public function __construct() {
            add_action( 'customize_register', array( $this,'SetHeaderLayout' ) );
            //add_action( 'wp_footer', array( $this,'SetCss' ) );
        }

        public function SetHeaderLayout($wp_customize){
            $settings = array(
                'headertemplate' => array(
                    'panel' => array(
                        'title'    => 'ヘッダーの設定',
                        'priority' => 3
                    ),
                    'section' => array(
                        'title'    => __( 'ヘッダーのデザインを変更する', 'theme_slug' ),
                        'panel'    => 'header_design_panel'
                    ),
                    'setting' => 'header_design_setting',
                    'controll' => array(
                        'label'       => '選択する', 
                        'type'        => 'radio',
                        'section'     => 'header_design_section', 
                        'settings'    => 'header_design_setting', 
                        'description' => 'ヘッダーの変更をご確認ください。',
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( 'パターン1' ),
                            'pt2'   => __( 'パターン2' ),
                            'pt3'   => __( 'パターン3' ),
                            'none'   => __( '非表示' )
                        )
                    ),
                    'section2' => array(
                        'title'    => __( 'ヘッダーの背景色を変更する', 'theme_slug1' ),
                        'panel'    => 'header_design_panel'
                    ),
                    'setting2' => 'header_design_setting2',
                    'default2' => array(
                        'default'     => '#06357c',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'controll2' => array(
                        'label'    => 'ヘッダーの背景色を変更する',
                        'section'    => 'header_design_section2',
                        'settings'   => 'header_design_setting2'
                    ),
                    'section3' => array(
                        'title'    => __( 'ヘッダーの文字色を変更する', 'theme_slug2' ),
                        'panel'    => 'header_design_panel'
                    ),
                    'setting3' => 'header_design_setting3',
                    'default3' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'controll3' => array(
                        'label'    => 'ヘッダーの文字色を変更する',
                        'section'    => 'header_design_section3',
                        'settings'   => 'header_design_setting3'
                    ),
                    'section4' => array(
                        'title'    => __( 'ヘッダーにマウスをかざした時の文字色を変更する', 'theme_slug3' ),
                        'panel'    => 'header_design_panel'
                    ),
                    'setting4' => 'header_design_setting4',
                    'default4' => array(
                        'default'     => '#afafaf',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'controll4' => array(
                        'label'    => 'ヘッダーにマウスをかざした時の文字色を変更する',
                        'section'    => 'header_design_section4',
                        'settings'   => 'header_design_setting4'
                    ),
                    //検索欄
                    'section5-1' => array(
                        'title'    => __( '検索欄のアイコン(パソコン用)を変更する', 'theme_slug1' ),
                        'panel'    => 'header_design_panel'
                    ),
                    'setting5-1' => 'header_design_setting5-1',
                    'default5-1' => array(
                        'default'     => get_theme_file_uri('img/glassicon.png')
                    ),
                    'controll5-1' => array(
                        'label'    => '検索欄のアイコン(パソコン用)を変更する',
                        'section'    => 'header_design_section5-1',
                        'settings'   => 'header_design_setting5-1'
                    ),
                    'section5-2' => array(
                        'title'    => __( '検索欄のアイコン(スマホ用)を変更する', 'theme_slug1' ),
                        'panel'    => 'header_design_panel'
                    ),
                    'setting5-2' => 'header_design_setting5-2',
                    'default5-2' => array(
                        'default'     => get_theme_file_uri('img/glassicon_sp.png')
                    ),
                    'controll5-2' => array(
                        'label'    => '検索欄のアイコン(スマホ用)を変更する',
                        'section'    => 'header_design_section5-2',
                        'settings'   => 'header_design_setting5-2'
                    ),
                    'section5-3' => array(
                        'title'    => __( '検索欄のアイコン(パソコン用)の背景を変更する', 'theme_slug1' ),
                        'panel'    => 'header_design_panel'
                    ),
                    'setting5-3' => 'header_design_setting5-3',
                    'default5-3' => array(
                        'default'     => '#06357c',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'controll5-3' => array(
                        'label'    => '検索欄のアイコン(パソコン用)の背景を変更する',
                        'section'    => 'header_design_section5-3',
                        'settings'   => 'header_design_setting5-3'
                    ),
                    'section5-4' => array(
                        'title'    => __( '検索欄のアイコン(スマホ用)の背景を変更する', 'theme_slug1' ),
                        'panel'    => 'header_design_panel'
                    ),
                    'setting5-4' => 'header_design_setting5-4',
                    'default5-4' => array(
                        'default'     => '#ededce',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'controll5-4' => array(
                        'label'    => '検索欄のアイコン(スマホ用)の背景を変更する',
                        'section'    => 'header_design_section5-4',
                        'settings'   => 'header_design_setting5-4'
                    ),
                    'section5-5' => array(
                        'title'    => __( '検索欄のデザインを変更する', 'theme_slug' ),
                        'panel'    => 'header_design_panel'
                    ),
                    'setting5-5' => 'header_design_setting5-5',
                    'controll5-5' => array(
                        'label'       => '選択する', 
                        'type'        => 'radio',
                        'section'     => 'header_design_section5-5', 
                        'settings'    => 'header_design_setting5-5', 
                        'description' => '検索欄の変更をご確認ください。',
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( 'パターン1' ),
                            'pt2'   => __( 'パターン2' ),
                            'pt3'   => __( 'パターン3' ),
                            'none'   => __( '非表示' )
                        )
                    ),
                    'section5-6' => array(
                        'title'    => '検索欄の見出しタイトルを編集する',
                        'panel'    => 'header_design_panel'
                    ),
                    'setting5-6' => 'header_design_setting5-6',
                    'controll5-6' => array(
                        'label'    => '検索欄の見出しタイトルを編集する',
                        'section'  => 'header_design_section5-6',
                        'settings' => 'header_design_setting5-6'
                    ),
                    'section5-7' => array(
                        'title'    => '検索欄の見出しタイトル(スマホ)を編集する',
                        'panel'    => 'header_design_panel'
                    ),
                    'setting5-7' => 'header_design_setting5-7',
                    'controll5-7' => array(
                        'label'    => '検索欄の見出しタイトル(スマホ)を編集する',
                        'section'  => 'header_design_section5-7',
                        'settings' => 'header_design_setting5-7'
                    ),

                    'section5-8' => array(
                        'title'    => __( '検索欄の見出しの背景色を変更する', 'theme_slug1' ),
                        'panel'    => 'header_design_panel'
                    ),
                    'setting5-8' => 'header_design_setting5-8',
                    'default5-8' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'controll5-8' => array(
                        'label'    => '検索欄の見出しの背景色を変更する',
                        'section'    => 'header_design_section5-8',
                        'settings'   => 'header_design_setting5-8'
                    ),
                    'section5-9' => array(
                        'title'    => __( '検索欄の見出しの文字色を変更する', 'theme_slug1' ),
                        'panel'    => 'header_design_panel'
                    ),
                    'setting5-9' => 'header_design_setting5-9',
                    'default5-9' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'controll5-9' => array(
                        'label'    => '検索欄の見出しの文字色を変更する',
                        'section'    => 'header_design_section5-9',
                        'settings'   => 'header_design_setting5-9'
                    ),
                    'section5-10' => array(
                        'title'    => __( '検索欄の見出しの文字色(スマホ)を変更する', 'theme_slug1' ),
                        'panel'    => 'header_design_panel'
                    ),
                    'setting5-10' => 'header_design_setting5-10',
                    'default5-10' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'controll5-10' => array(
                        'label'    => '検索欄の見出しの文字色(スマホ)を変更する',
                        'section'    => 'header_design_section5-10',
                        'settings'   => 'header_design_setting5-10'
                    ),
                    'section5-11' => array(
                        'title'    => __( '検索欄の背景色を変更する', 'theme_slug1' ),
                        'panel'    => 'header_design_panel'
                    ),
                    'setting5-11' => 'header_design_setting5-11',
                    'default5-11' => array(
                        'default'     => '#f4f4f4',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'controll5-11' => array(
                        'label'    => '検索欄の背景色を変更する',
                        'section'    => 'header_design_section5-11',
                        'settings'   => 'header_design_setting5-11'
                    ),
                    'section5-12' => array(
                        'title'    => __( '検索欄の背景色(スマホ)を変更する', 'theme_slug1' ),
                        'panel'    => 'header_design_panel'
                    ),
                    'setting5-12' => 'header_design_setting5-12',
                    'default5-12' => array(
                        'default'     => '#ededce',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'controll5-12' => array(
                        'label'    => '検索欄の背景色(スマホ)を変更する',
                        'section'    => 'header_design_section5-12',
                        'settings'   => 'header_design_setting5-12'
                    )
                )
            );
            $wp_customize->add_panel('header_design_panel', $settings['headertemplate']['panel']);
            $wp_customize->add_section('header_design_section', $settings['headertemplate']['section']);
            $wp_customize->add_setting($settings['headertemplate']['setting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'header_design_setting', $settings['headertemplate']['controll']));

            $wp_customize->add_section('header_design_section2', $settings['headertemplate']['section2']);
            $wp_customize->add_setting($settings['headertemplate']['setting2'], $settings['headertemplate']['default2']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'header_design_setting2', $settings['headertemplate']['controll2']));

            $wp_customize->add_section('header_design_section3', $settings['headertemplate']['section3']);
            $wp_customize->add_setting($settings['headertemplate']['setting3'], $settings['headertemplate']['default3']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'header_design_setting3', $settings['headertemplate']['controll3']));

            $wp_customize->add_section('header_design_section4', $settings['headertemplate']['section4']);
            $wp_customize->add_setting($settings['headertemplate']['setting4'], $settings['headertemplate']['default4']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'header_design_setting4', $settings['headertemplate']['controll4']));

            //検索欄
            $wp_customize->add_section('header_design_section5-1', $settings['headertemplate']['section5-1']);
            $wp_customize->add_setting($settings['headertemplate']['setting5-1'], $settings['headertemplate']['default5-1']);
            $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'header_design_setting5-1', $settings['headertemplate']['controll5-1']));

            $wp_customize->add_section('header_design_section5-2', $settings['headertemplate']['section5-2']);
            $wp_customize->add_setting($settings['headertemplate']['setting5-2'], $settings['headertemplate']['default5-2']);
            $wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'header_design_setting5-2', $settings['headertemplate']['controll5-2']));

            $wp_customize->add_section('header_design_section5-3', $settings['headertemplate']['section5-3']);
            $wp_customize->add_setting($settings['headertemplate']['setting5-3'], $settings['headertemplate']['default5-3']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'header_design_setting5-3', $settings['headertemplate']['controll5-3']));

            $wp_customize->add_section('header_design_section5-4', $settings['headertemplate']['section5-4']);
            $wp_customize->add_setting($settings['headertemplate']['setting5-4'], $settings['headertemplate']['default5-4']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'header_design_setting5-4', $settings['headertemplate']['controll5-4']));
            
            $wp_customize->add_section('header_design_section5-5', $settings['headertemplate']['section5-5']);
            $wp_customize->add_setting($settings['headertemplate']['setting5-5']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'header_design_setting5-5', $settings['headertemplate']['controll5-5']));

            $wp_customize->add_section('header_design_section5-6', $settings['headertemplate']['section5-6']);
            $wp_customize->add_setting($settings['headertemplate']['setting5-6']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'header_design_setting5-6', $settings['headertemplate']['controll5-6']));

            $wp_customize->add_section('header_design_section5-7', $settings['headertemplate']['section5-7']);
            $wp_customize->add_setting($settings['headertemplate']['setting5-7']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'header_design_setting5-7', $settings['headertemplate']['controll5-7']));

            $wp_customize->add_section('header_design_section5-8', $settings['headertemplate']['section5-8']);
            $wp_customize->add_setting($settings['headertemplate']['setting5-8'], $settings['headertemplate']['default5-8']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'header_design_setting5-8', $settings['headertemplate']['controll5-8']));

            $wp_customize->add_section('header_design_section5-9', $settings['headertemplate']['section5-9']);
            $wp_customize->add_setting($settings['headertemplate']['setting5-9'], $settings['headertemplate']['default5-9']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'header_design_setting5-9', $settings['headertemplate']['controll5-9']));

            $wp_customize->add_section('header_design_section5-10', $settings['headertemplate']['section5-10']);
            $wp_customize->add_setting($settings['headertemplate']['setting5-10'], $settings['headertemplate']['default5-10']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'header_design_setting5-10', $settings['headertemplate']['controll5-10']));

            $wp_customize->add_section('header_design_section5-11', $settings['headertemplate']['section5-11']);
            $wp_customize->add_setting($settings['headertemplate']['setting5-11'], $settings['headertemplate']['default5-11']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'header_design_setting5-11', $settings['headertemplate']['controll5-11']));

            $wp_customize->add_section('header_design_section5-12', $settings['headertemplate']['section5-12']);
            $wp_customize->add_setting($settings['headertemplate']['setting5-12'], $settings['headertemplate']['default5-12']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'header_design_setting5-12', $settings['headertemplate']['controll5-12']));
        }
        public static function HeaderTemplate(){
            if(!get_theme_mod('header_design_setting')){
                return 'pt1';
            }
            return get_theme_mod('header_design_setting');
        }

        public static function ReturnHeaderColor(){
            $header_design_setting2 = '#06357c';
            $header_design_setting3 = '#ffffff';
            $header_design_setting4 = '#afafaf';
            if(get_theme_mod('header_design_setting2')){
                $header_design_setting2 = get_theme_mod('header_design_setting2');
            }
            if(get_theme_mod('header_design_setting3')){
                $header_design_setting3 = get_theme_mod('header_design_setting3');
            }
            if(get_theme_mod('header_design_setting4')){
                $header_design_setting4 = get_theme_mod('header_design_setting4');
            }
            return (object)[
                'background' => $header_design_setting2,
                'color' => $header_design_setting3,
                'hover' => $header_design_setting4
            ];
        }
        //検索欄
        public static function SetSearchGlassIcon(){
            if(!get_theme_mod('header_design_setting5-1')){
                return get_theme_file_uri('img/glassicon.png');
            }
            return get_theme_mod('header_design_setting5-1');
        }
        public static function SetSearchSpGlassIcon(){
            if(!get_theme_mod('header_design_setting5-2')){
                return get_theme_file_uri('img/glassicon_sp.png');
            }
            return get_theme_mod('header_design_setting5-2');
        }
        public static function SetSearchGlassIconBackground(){
            if(!get_theme_mod('header_design_setting5-3')){
                return '#06357c';
            }
            return get_theme_mod('header_design_setting5-3');
        }
        public static function SetSearchSpGlassIconBackground(){
            if(!get_theme_mod('header_design_setting5-4')){
                return '#ededce';
            }
            return get_theme_mod('header_design_setting5-4');
        }
        public static function SearchAreaTemplate(){
            if(!get_theme_mod('header_design_setting5-5')){
                return 'pt1';
            }
            return get_theme_mod('header_design_setting5-5');
        }
        public static function SearchAreaTitle(){
            if(!get_theme_mod('header_design_setting5-6')){
                return '検索';
            }
            return get_theme_mod('header_design_setting5-6');
        }
        public static function SearchAreaSPTitle(){
            if(!get_theme_mod('header_design_setting5-7')){
                return '検索';
            }
            return get_theme_mod('header_design_setting5-7');
        }
        public static function SearchAreaTitleBackground(){
            if(!get_theme_mod('header_design_setting5-8')){
                return '#ffffff';
            }
            return get_theme_mod('header_design_setting5-8');
        }
        public static function SearchAreaFontColor(){
            if(!get_theme_mod('header_design_setting5-9')){
                return '#212529';
            }
            return get_theme_mod('header_design_setting5-9');
        }
        public static function SearchAreaFontColorSP(){
            if(!get_theme_mod('header_design_setting5-10')){
                return '#212529';
            }
            return get_theme_mod('header_design_setting5-10');
        }
        public static function SearchAreaBackground(){
            if(!get_theme_mod('header_design_setting5-11')){
                return '#f4f4f4';
            }
            return get_theme_mod('header_design_setting5-11');
        }
        public static function SearchAreaBackgroundSP(){
            if(!get_theme_mod('header_design_setting5-12')){
                return '#ededce';
            }
            return get_theme_mod('header_design_setting5-12');
        }
    }
?>