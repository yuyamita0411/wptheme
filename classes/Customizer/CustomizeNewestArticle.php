<?php
    class CustomizeNewestArticle{
        public function __construct() {
            add_action( 'customize_register', array( $this,'SetNewestArticleLayout' ) );
        }

        public function Fsize(){
            $arr = [];
            $arr['16px'] = __( '16px' );
            for($i=10; $i <= 40; $i++){
                if($i != 16){
                    $arr[$i.'px'] = __( $i.'px' );
                }
            }
            return $arr;
        }

        public function SetNewestArticleLayout($wp_customize){
            $settings = array(
                'ctemp' => array(
                    'panel' => array(
                        'title'    => '最新情報のレイアウト設定',
                        'priority' => 10
                    ),
//最新情報
                    'NArDSection' => array(
                        'title'    => __( '最新情報のデザインを変更する', 'theme_slug' ),
                        'panel'    => 'NA_panel'
                    ),
                    'NArDSetting' => 'CD_NArDSetting',
                    'NArDControll' => array(
                        'label'       => '選択する', 
                        'type'        => 'radio',
                        'section'     => 'CD_NArDSection', 
                        'settings'    => 'CD_NArDSetting', 
                        'description' => '最新情報の変更をご確認ください。',
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( 'パターン1' ),
                            'pt2'   => __( 'パターン2' ),
                            'pt3'   => __( 'パターン3' ),
                            'none'   => __( '非表示' )
                        )
                    ),
                    'NArTTlSection' => array(
                        'title'    => '最新情報の見出しタイトル(上)を編集する',
                        'panel'    => 'NA_panel'
                    ),
                    'NArTTlSetting' => 'CD_NArTTlSetting',
                    'NArTTlControll' => array(
                        'label'    => '最新情報の見出しタイトル(上)を編集する',
                        'section'  => 'CD_NArTTlSection',
                        'settings' => 'CD_NArTTlSetting'
                    ),
                    
                    'NArTBSection' => array(
                        'title'    => __( '最新情報の見出しの背景色を変更する', 'theme_slug1' ),
                        'panel'    => 'NA_panel'
                    ),
                    'NArTBSetting' => 'CD_NArTBSetting',
                    'NArTBDefault' => array(
                        'default'     => '#06357c',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'NArTBControll' => array(
                        'label'    => '最新情報の見出しの背景色を変更する',
                        'section'    => 'CD_NArTBSection',
                        'settings'   => 'CD_NArTBSetting'
                    ),
                    'NArTCSection' => array(
                        'title'    => __( '最新情報の見出しの文字色を変更する', 'theme_slug1' ),
                        'panel'    => 'NA_panel'
                    ),
                    'NArTCSetting' => 'CD_NArTCSetting',
                    'NArTCDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'NArTCControll' => array(
                        'label'    => '最新情報の見出しの文字色を変更する',
                        'section'    => 'CD_NArTCSection',
                        'settings'   => 'CD_NArTCSetting'
                    ),
                    'NArBgSection' => array(
                        'title'    => __( '最新情報の背景色を変更する', 'theme_slug1' ),
                        'panel'    => 'NA_panel'
                    ),
                    'NArBgSetting' => 'CD_NArBgSetting',
                    'NArBgDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'NArBgControll' => array(
                        'label'    => '最新情報の背景色を変更する',
                        'section'    => 'CD_NArBgSection',
                        'settings'   => 'CD_NArBgSetting'
                    ),
                    'NArPTCSection' => array(
                        'title'    => __( '最新情報のタイトルの文字色を変更する', 'theme_slug1' ),
                        'panel'    => 'NA_panel'
                    ),
                    'NArPTCSetting' => 'CD_NArPTCSetting',
                    'NArPTCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'NArPTCControll' => array(
                        'label'    => '最新情報のタイトルの文字色を変更する',
                        'section'    => 'CD_NArPTCSection',
                        'settings'   => 'CD_NArPTCSetting'
                    )
                )
            );
            $wp_customize->add_panel('NA_panel', $settings['ctemp']['panel']);
            $wp_customize->add_section('CD_NArDSection', $settings['ctemp']['NArDSection']);
            $wp_customize->add_setting($settings['ctemp']['NArDSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArDSetting', $settings['ctemp']['NArDControll']));

            $wp_customize->add_section('CD_NArTTlSection', $settings['ctemp']['NArTTlSection']);
            $wp_customize->add_setting($settings['ctemp']['NArTTlSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArTTlSetting', $settings['ctemp']['NArTTlControll']));

            $wp_customize->add_section('CD_NArTBSection', $settings['ctemp']['NArTBSection']);
            $wp_customize->add_setting($settings['ctemp']['NArTBSetting'], $settings['ctemp']['NArTBDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_NArTBSetting', $settings['ctemp']['NArTBControll']));

            $wp_customize->add_section('CD_NArTCSection', $settings['ctemp']['NArTCSection']);
            $wp_customize->add_setting($settings['ctemp']['NArTCSetting'], $settings['ctemp']['NArTCDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_NArTCSetting', $settings['ctemp']['NArTCControll']));

            $wp_customize->add_section('CD_NArBgSection', $settings['ctemp']['NArBgSection']);
            $wp_customize->add_setting($settings['ctemp']['NArBgSetting'], $settings['ctemp']['NArBgDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_NArBgSetting', $settings['ctemp']['NArBgControll']));

            $wp_customize->add_section('CD_NArPTCSection', $settings['ctemp']['NArPTCSection']);
            $wp_customize->add_setting($settings['ctemp']['NArPTCSetting'], $settings['ctemp']['NArPTCDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_NArPTCSetting', $settings['ctemp']['NArPTCControll']));
        }
        public static function NewestArticleTemplate(){
            if(!get_theme_mod('CD_NArDSetting')){
                return 'pt1';
            }
            return get_theme_mod('CD_NArDSetting');
        }
        public static function NewestArticleTitle(){
            if(!get_theme_mod('CD_NArTTlSetting')){
                return '最新情報';
            }
            return get_theme_mod('CD_NArTTlSetting');
        }
        public static function NewestArticleTitleBackground(){
            if(!get_theme_mod('CD_NArTBSetting')){
                return '#06357c';
            }
            return get_theme_mod('CD_NArTBSetting');
        }
        public static function NewestArticleFontColor(){
            if(!get_theme_mod('CD_NArTCSetting')){
                return '#ffffff';
            }
            return get_theme_mod('CD_NArTCSetting');
        }
        public static function NewestArticleBackground(){
            if(!get_theme_mod('CD_NArBgSetting')){
                return '#ffffff';
            }
            return get_theme_mod('CD_NArBgSetting');
        }
        public static function SetNewestArticleCatLinkColor(){
            if(!get_theme_mod('CD_NArPTCSetting')){
                return '#212529';
            }
            return get_theme_mod('CD_NArPTCSetting');
        }
    }
?>