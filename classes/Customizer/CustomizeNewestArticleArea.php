<?php
    class CustomizeNewestArticleArea{
        public function __construct() {
            add_action( 'customize_register', array( $this,'SetNewestArticleAreLayout' ) );
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

        public function SetNewestArticleAreLayout($wp_customize){
            $settings = array(
                'ctemp' => array(
                    'panel' => array(
                        'title'    => '最新記事一覧のレイアウト設定',
                        'priority' => 11
                    ),
//最新記事一覧
                    'NArADSection' => array(
                        'title'    => __( '最新記事一覧のデザインを変更する', 'theme_slug' ),
                        'panel'    => 'NAA_panel'
                    ),
                    'NArADSetting' => 'CD_NArADSetting',
                    'NArADControll' => array(
                        'label'       => '選択する', 
                        'type'        => 'radio',
                        'section'     => 'CD_NArADSection', 
                        'settings'    => 'CD_NArADSetting', 
                        'description' => '最新記事一覧の変更をご確認ください。',
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( 'パターン1' ),
                            'pt2'   => __( 'パターン2' ),
                            'pt3'   => __( 'パターン3' ),
                            'none'   => __( '非表示' )
                        )
                    ),
                    'NArATTSection' => array(
                        'title'    => '最新記事一覧の見出しタイトル(上)を編集する',
                        'panel'    => 'NAA_panel'
                    ),
                    'NArATTSetting' => 'CD_NArATTSetting',
                    'NArATTControll' => array(
                        'label'    => '最新記事一覧の見出しタイトル(上)を編集する',
                        'section'  => 'CD_NArATTSection',
                        'settings' => 'CD_NArATTSetting'
                    ),
                    'NArATTDSection' => array(
                        'title'    => __( '最新記事一覧の見出しタイトル(上)の文字方向を編集する', 'theme_slug' ),
                        'panel'    => 'NAA_panel'
                    ),
                    'NArATTDSetting' => 'CD_NArATTDSetting',
                    'NArATTDControll' => array(
                        'label'       => '選択する', 
                        'type'        => 'select',
                        'section'     => 'CD_NArATTDSection', 
                        'settings'    => 'CD_NArATTDSetting', 
                        'description' => '最新記事一覧の見出しタイトル(上)の文字方向を編集する',
                        'default'   => 'center',
                        'choices'     =>  array(
                            'center'   => __( '中央寄せ' ),
                            'right'   => __( '右寄せ' ),
                            'left'   => __( '左寄せ' )
                        )
                    ),
                    'NArATTFsSection' => array(
                        'title'    => __( '最新記事一覧の見出しタイトル(上)のフォントサイズを編集する', 'theme_slug' ),
                        'panel'    => 'NAA_panel'
                    ),
                    'NArATTFsSetting' => 'CD_NArATTFsSetting',
                    'NArATTFsControll' => array(
                        'label'       => '選択する', 
                        'type'        => 'select',
                        'section'     => 'CD_NArATTFsSection', 
                        'settings'    => 'CD_NArATTFsSetting', 
                        'description' => '最新記事一覧の見出しタイトル(上)のフォントサイズを編集する',
                        'default'   => '18px',
                        'choices'     =>  self::Fsize()
                    ),
                    'NArABTSection' => array(
                        'title'    => '最新記事一覧の見出しタイトル(下)を編集する',
                        'panel'    => 'NAA_panel'
                    ),
                    'NArABTSetting' => 'CD_NArABTSetting',
                    'NArABTControll' => array(
                        'label'    => '最新記事一覧の見出しタイトル(下)を編集する',
                        'section'  => 'CD_NArABTSection',
                        'settings' => 'CD_NArABTSetting'
                    ),
                    'NArABTFsSection' => array(
                        'title'    => __( '最新記事一覧の見出しタイトル(下)のフォントサイズを編集する', 'theme_slug' ),
                        'panel'    => 'NAA_panel'
                    ),
                    'NArABTFsSetting' => 'CD_NArABTFsSetting',
                    'NArABTFsControll' => array(
                        'label'       => '選択する', 
                        'type'        => 'select',
                        'section'     => 'CD_NArABTFsSection', 
                        'settings'    => 'CD_NArABTFsSetting', 
                        'description' => '最新記事一覧の見出しタイトル(下)のフォントサイズを編集する',
                        'default'   => '16px',
                        'choices'     =>  self::Fsize()
                    ),
                    'NArABTDSection' => array(
                        'title'    => __( '最新記事一覧の見出しタイトル(下)の文字方向を編集する', 'theme_slug' ),
                        'panel'    => 'NAA_panel'
                    ),
                    'NArABTDSetting' => 'CD_NArABTDSetting',
                    'NArABTDControll' => array(
                        'label'       => '選択する', 
                        'type'        => 'select',
                        'section'     => 'CD_NArABTDSection', 
                        'settings'    => 'CD_NArABTDSetting', 
                        'description' => '最新記事一覧の見出しタイトル(下)の文字方向を編集する',
                        'default'   => 'center',
                        'choices'     =>  array(
                            'center'   => __( '中央寄せ' ),
                            'right'   => __( '右寄せ' ),
                            'left'   => __( '左寄せ' )
                        )
                    ),
                    'NArATBgSection' => array(
                        'title'    => __( '最新記事一覧の見出しの背景色を変更する', 'theme_slug1' ),
                        'panel'    => 'NAA_panel'
                    ),
                    'NArATBgSetting' => 'CD_NArATBgSetting',
                    'NArATBgDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'NArATBgControll' => array(
                        'label'    => '最新記事一覧の見出しの背景色を変更する',
                        'section'    => 'CD_NArATBgSection',
                        'settings'   => 'CD_NArATBgSetting'
                    ),
                    'NArATCSection' => array(
                        'title'    => __( '最新記事一覧の見出しの文字色を変更する', 'theme_slug1' ),
                        'panel'    => 'NAA_panel'
                    ),
                    'NArATCSetting' => 'CD_NArATCSetting',
                    'NArATCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'NArATCControll' => array(
                        'label'    => '最新記事一覧の見出しの文字色を変更する',
                        'section'    => 'CD_NArATCSection',
                        'settings'   => 'CD_NArATCSetting'
                    ),
                    'NArABgSection' => array(
                        'title'    => __( '最新記事一覧の背景色を変更する', 'theme_slug1' ),
                        'panel'    => 'NAA_panel'
                    ),
                    'NArABgSetting' => 'CD_NArABgSetting',
                    'NArABgDefault' => array(
                        'default'     => '#f4f4f4',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'NArABgControll' => array(
                        'label'    => '最新記事一覧の背景色を変更する',
                        'section'    => 'CD_NArABgSection',
                        'settings'   => 'CD_NArABgSetting'
                    ),
                    'NArAEBgSection' => array(
                        'title'    => __( '最新記事一覧のそれぞれの背景色を変更する', 'theme_slug1' ),
                        'panel'    => 'NAA_panel'
                    ),
                    'NArAEBgSetting' => 'CD_NArAEBgSetting',
                    'NArAEBgDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'NArAEBgControll' => array(
                        'label'    => '最新記事一覧のそれぞれの背景色を変更する',
                        'section'    => 'CD_NArAEBgSection',
                        'settings'   => 'CD_NArAEBgSetting'
                    ),
                    'NArACCSection' => array(
                        'title'    => __( '最新記事一覧のカテゴリーリンクの文字色を変更する', 'theme_slug1' ),
                        'panel'    => 'NAA_panel'
                    ),
                    'NArACCSetting' => 'CD_NArACCSetting',
                    'NArACCDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'NArACCControll' => array(
                        'label'    => '最新記事一覧のカテゴリーリンクの文字色を変更する',
                        'section'    => 'CD_NArACCSection',
                        'settings'   => 'CD_NArACCSetting'
                    ),
                    'NArACBgSection' => array(
                        'title'    => __( '最新記事一覧のカテゴリーリンクの背景色を変更する', 'theme_slug1' ),
                        'panel'    => 'NAA_panel'
                    ),
                    'NArACBgSetting' => 'CD_NArACBgSetting',
                    'NArACBgDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'NArACBgControll' => array(
                        'label'    => '最新記事一覧のカテゴリーリンクの背景色を変更する',
                        'section'    => 'CD_NArACBgSection',
                        'settings'   => 'CD_NArACBgSetting'
                    ),
                    'NArADCSection' => array(
                        'title'    => __( '最新記事一覧の日付の文字色を変更する', 'theme_slug1' ),
                        'panel'    => 'NAA_panel'
                    ),
                    'NArADCSetting' => 'CD_NArADCSetting',
                    'NArADCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'NArADCControll' => array(
                        'label'    => '最新記事一覧の日付の文字色を変更する',
                        'section'    => 'CD_NArADCSection',
                        'settings'   => 'CD_NArADCSetting'
                    ),
                    'NArAPCSection' => array(
                        'title'    => __( '最新記事一覧のタイトルの文字色を変更する', 'theme_slug1' ),
                        'panel'    => 'NAA_panel'
                    ),
                    'NArAPCSetting' => 'CD_NArAPCSetting',
                    'NArAPCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'NArAPCControll' => array(
                        'label'    => '最新記事一覧のタイトルの文字色を変更する',
                        'section'    => 'CD_NArAPCSection',
                        'settings'   => 'CD_NArAPCSetting'
                    )
                )
            );
            $wp_customize->add_panel('NAA_panel', $settings['ctemp']['panel']);
             $wp_customize->add_section('CD_NArADSection', $settings['ctemp']['NArADSection']);
             $wp_customize->add_setting($settings['ctemp']['NArADSetting']);
             $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArADSetting', $settings['ctemp']['NArADControll']));
 
             $wp_customize->add_section('CD_NArATTSection', $settings['ctemp']['NArATTSection']);
             $wp_customize->add_setting($settings['ctemp']['NArATTSetting']);
             $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArATTSetting', $settings['ctemp']['NArATTControll']));

             $wp_customize->add_section('CD_NArATTDSection', $settings['ctemp']['NArATTDSection']);
             $wp_customize->add_setting($settings['ctemp']['NArATTDSetting']);
             $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArATTDSetting', $settings['ctemp']['NArATTDControll']));

             $wp_customize->add_section('CD_NArATTFsSection', $settings['ctemp']['NArATTFsSection']);
             $wp_customize->add_setting($settings['ctemp']['NArATTFsSetting']);
             $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArATTFsSetting', $settings['ctemp']['NArATTFsControll']));

             $wp_customize->add_section('CD_NArABTSection', $settings['ctemp']['NArABTSection']);
             $wp_customize->add_setting($settings['ctemp']['NArABTSetting']);
             $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArABTSetting', $settings['ctemp']['NArABTControll']));

             $wp_customize->add_section('CD_NArABTFsSection', $settings['ctemp']['NArABTFsSection']);
             $wp_customize->add_setting($settings['ctemp']['NArABTFsSetting']);
             $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArABTFsSetting', $settings['ctemp']['NArABTFsControll']));

             $wp_customize->add_section('CD_NArABTDSection', $settings['ctemp']['NArABTDSection']);
             $wp_customize->add_setting($settings['ctemp']['NArABTDSetting']);
             $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_NArABTDSetting', $settings['ctemp']['NArABTDControll']));

             $wp_customize->add_section('CD_NArATBgSection', $settings['ctemp']['NArATBgSection']);
             $wp_customize->add_setting($settings['ctemp']['NArATBgSetting'], $settings['ctemp']['NArATBgDefault']);
             $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_NArATBgSetting', $settings['ctemp']['NArATBgControll']));
 
             $wp_customize->add_section('CD_NArATCSection', $settings['ctemp']['NArATCSection']);
             $wp_customize->add_setting($settings['ctemp']['NArATCSetting'], $settings['ctemp']['NArATCDefault']);
             $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_NArATCSetting', $settings['ctemp']['NArATCControll']));
 
             $wp_customize->add_section('CD_NArABgSection', $settings['ctemp']['NArABgSection']);
             $wp_customize->add_setting($settings['ctemp']['NArABgSetting'], $settings['ctemp']['NArABgDefault']);
             $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_NArABgSetting', $settings['ctemp']['NArABgControll']));
 
             $wp_customize->add_section('CD_NArAEBgSection', $settings['ctemp']['NArAEBgSection']);
             $wp_customize->add_setting($settings['ctemp']['NArAEBgSetting'], $settings['ctemp']['NArAEBgDefault']);
             $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_NArAEBgSetting', $settings['ctemp']['NArAEBgControll']));
 
             $wp_customize->add_section('CD_NArACCSection', $settings['ctemp']['NArACCSection']);
             $wp_customize->add_setting($settings['ctemp']['NArACCSetting'], $settings['ctemp']['NArACCDefault']);
             $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_NArACCSetting', $settings['ctemp']['NArACCControll']));
 
             $wp_customize->add_section('CD_NArACBgSection', $settings['ctemp']['NArACBgSection']);
             $wp_customize->add_setting($settings['ctemp']['NArACBgSetting'], $settings['ctemp']['NArACBgDefault']);
             $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_NArACBgSetting', $settings['ctemp']['NArACBgControll']));
 
             $wp_customize->add_section('CD_NArADCSection', $settings['ctemp']['NArADCSection']);
             $wp_customize->add_setting($settings['ctemp']['NArADCSetting'], $settings['ctemp']['NArADCDefault']);
             $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_NArADCSetting', $settings['ctemp']['NArADCControll']));
 
             $wp_customize->add_section('CD_NArAPCSection', $settings['ctemp']['NArAPCSection']);
             $wp_customize->add_setting($settings['ctemp']['NArAPCSetting'], $settings['ctemp']['NArAPCDefault']);
             $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_NArAPCSetting', $settings['ctemp']['NArAPCControll']));
        }
        //最新記事一覧
        public static function NewestArticleAreaTemplate(){
            if(!get_theme_mod('CD_NArADSetting')){
                return 'pt1';
            }
            return get_theme_mod('CD_NArADSetting');
        }
        public static function NewestArticleAreaTitle(){
            if(!get_theme_mod('CD_NArATTSetting')){
                return '最新記事一覧';
            }
            return get_theme_mod('CD_NArATTSetting');
        }
        public static function NewestArticleAreaTitleDir(){
            if(!get_theme_mod('CD_NArATTDSetting')){
                return 'center';
            }
            return get_theme_mod('CD_NArATTDSetting');
        }
        public static function NewestArticleAreaTitleFontSize(){
            if(!get_theme_mod('CD_NArATTFsSetting')){
                return '18px';
            }
            return get_theme_mod('CD_NArATTFsSetting');
        }
        public static function NewestArticleAreaBottomTitle(){
            if(!get_theme_mod('CD_NArABTSetting')){
                return 'NEW';
            }
            return get_theme_mod('CD_NArABTSetting');
        }
        public static function NewestArticleAreaBottomTitleFontSize(){
            if(!get_theme_mod('CD_NArABTFsSetting')){
                return '16px';
            }
            return get_theme_mod('CD_NArABTFsSetting');
        }
        public static function NewestArticleAreaBottomTitleDir(){
            if(!get_theme_mod('CD_NArABTDSetting')){
                return 'center';
            }
            return get_theme_mod('CD_NArABTDSetting');
        }
        public static function NewestArticleAreaTitleBackground(){
            if(!get_theme_mod('CD_NArATBgSetting')){
                return '#ffffff';
            }
            return get_theme_mod('CD_NArATBgSetting');
        }
        public static function NewestArticleAreaFontColor(){
            if(!get_theme_mod('CD_NArATCSetting')){
                return '#21252';
            }
            return get_theme_mod('CD_NArATCSetting');
        }
        public static function NewestArticleAreaBackground(){
            if(!get_theme_mod('CD_NArABgSetting')){
                return '#f4f4f4';
            }
            return get_theme_mod('CD_NArABgSetting');
        }
        public static function SetNewestArticleAreaEachBackground(){
            if(!get_theme_mod('CD_NArAEBgSetting')){
                return '#ffffff';
            }
            return get_theme_mod('CD_NArAEBgSetting');
        }
        public static function SetNewestArticleAreaCatLinkColor(){
            if(!get_theme_mod('CD_NArACCSetting')){
                return '#ffffff';
            }
            return get_theme_mod('CD_NArACCSetting');
        }
        public static function SetNewestArticleAreaCatLinkBackgroundColor(){
            if(!get_theme_mod('CD_NArACBgSetting')){
                return '#212529';
            }
            return get_theme_mod('CD_NArACBgSetting');
        }
        public static function SetNewestArticleAreaDateFontColor(){
            if(!get_theme_mod('CD_NArADCSetting')){
                return '#212529';
            }
            return get_theme_mod('CD_NArADCSetting');
        }
        public static function SetNewestArticleAreaTitleFontColor(){
            if(!get_theme_mod('CD_NArAPCSetting')){
                return '#212529';
            }
            return get_theme_mod('CD_NArAPCSetting');
        }
    }
?>