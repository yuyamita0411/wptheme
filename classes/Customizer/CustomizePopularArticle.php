<?php
    class CustomizePopularArticle{
        public function __construct() {
            add_action( 'customize_register', array( $this,'SetPopularArticleLayout' ) );
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

        public function SetPopularArticleLayout($wp_customize){
            $settings = array(
                'ctemp' => array(
                    'panel' => array(
                        'title'    => '人気記事ランキングのレイアウト設定',
                        'priority' => 14
                    ),
//人気記事ランキング
                    'PArDSection' => array(
                        'title'    => __( '人気記事ランキングのデザインを変更する', 'theme_slug' ),
                        'panel'    => 'PA_panel'
                    ),
                    'PArDSetting' => 'CD_PArDSetting',
                    'PArDControll' => array(
                        'label'       => '選択する', 
                        'type'        => 'radio',
                        'section'     => 'CD_PArDSection', 
                        'settings'    => 'CD_PArDSetting', 
                        'description' => '人気記事ランキングの変更をご確認ください。',
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( 'パターン1' ),
                            'pt2'   => __( 'パターン2' ),
                            'pt3'   => __( 'パターン3' ),
                            'none'   => __( '非表示' )
                        )
                    ),
                    'PArTTSection' => array(
                        'title'    => '人気記事ランキングの見出しタイトル(上)を編集する',
                        'panel'    => 'PA_panel'
                    ),
                    'PArTTSetting' => 'CD_PArTTSetting',
                    'PArTTControll' => array(
                        'label'    => '人気記事ランキングの見出しタイトル(上)を編集する',
                        'section'  => 'CD_PArTTSection',
                        'settings' => 'CD_PArTTSetting'
                    ),
                    'PArTTDSection' => array(
                        'title'    => __( '人気記事ランキングの見出しタイトル(上)の文字方向を編集する', 'theme_slug' ),
                        'panel'    => 'PA_panel'
                    ),
                    'PArTTDSetting' => 'CD_PArTTDSetting',
                    'PArTTDControll' => array(
                        'label'       => '選択する', 
                        'type'        => 'select',
                        'section'     => 'CD_PArTTDSection', 
                        'settings'    => 'CD_PArTTDSetting', 
                        'description' => '人気記事ランキングの見出しタイトル(上)の文字方向を編集する',
                        'default'   => 'center',
                        'choices'     =>  array(
                            'center'   => __( '中央寄せ' ),
                            'right'   => __( '右寄せ' ),
                            'left'   => __( '左寄せ' )
                        )
                    ),
                    'PArTTFsSection' => array(
                        'title'    => __( '人気記事ランキングの見出しタイトル(上)のフォントサイズを編集する', 'theme_slug' ),
                        'panel'    => 'PA_panel'
                    ),
                    'PArTTFsSetting' => 'CD_PArTTFsSetting',
                    'PArTTFsControll' => array(
                        'label'       => '選択する', 
                        'type'        => 'select',
                        'section'     => 'CD_PArTTFsSection', 
                        'settings'    => 'CD_PArTTFsSetting', 
                        'description' => '人気記事ランキングの見出しタイトル(上)のフォントサイズを編集する',
                        'default'   => '18px',
                        'choices'     =>  self::Fsize()
                    ),
                    'PArBTSection' => array(
                        'title'    => '人気記事ランキングの見出しタイトル(下)を編集する',
                        'panel'    => 'PA_panel'
                    ),
                    'PArBTSetting' => 'CD_PArBTSetting',
                    'PArBTControll' => array(
                        'label'    => '人気記事ランキングの見出しタイトル(下)を編集する',
                        'section'  => 'CD_PArBTSection',
                        'settings' => 'CD_PArBTSetting'
                    ),
                    'PArBTDSection' => array(
                        'title'    => __( '人気記事ランキングの見出しタイトル(下)の文字方向を編集する', 'theme_slug' ),
                        'panel'    => 'PA_panel'
                    ),
                    'PArBTDSetting' => 'CD_PArBTDSetting',
                    'PArBTDControll' => array(
                        'label'       => '選択する', 
                        'type'        => 'select',
                        'section'     => 'CD_PArBTDSection', 
                        'settings'    => 'CD_PArBTDSetting', 
                        'description' => '人気記事ランキングの見出しタイトル(下)の文字方向を編集する',
                        'default'   => 'center',
                        'choices'     =>  array(
                            'center'   => __( '中央寄せ' ),
                            'right'   => __( '右寄せ' ),
                            'left'   => __( '左寄せ' )
                        )
                    ),
                    'PArBTFsSection' => array(
                        'title'    => __( '人気記事ランキングの見出しタイトル(下)のフォントサイズを編集する', 'theme_slug' ),
                        'panel'    => 'PA_panel'
                    ),
                    'PArBTFsSetting' => 'CD_PArBTFsSetting',
                    'PArBTFsControll' => array(
                        'label'       => '選択する', 
                        'type'        => 'select',
                        'section'     => 'CD_PArBTFsSection', 
                        'settings'    => 'CD_PArBTFsSetting', 
                        'description' => '人気記事ランキングの見出しタイトル(下)のフォントサイズを編集する',
                        'default'   => '16px',
                        'choices'     =>  self::Fsize()
                    ),
                    'PArTBgSection' => array(
                        'title'    => __( '人気記事ランキングの見出しの背景色を変更する', 'theme_slug1' ),
                        'panel'    => 'PA_panel'
                    ),
                    'PArTBgSetting' => 'CD_PArTBgSetting',
                    'PArTBgDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'PArTBgControll' => array(
                        'label'    => '人気記事ランキングの見出しの背景色を変更する',
                        'section'    => 'CD_PArTBgSection',
                        'settings'   => 'CD_PArTBgSetting'
                    ),
                    'PArCSection' => array(
                        'title'    => __( '人気記事ランキングの見出しの文字色を変更する', 'theme_slug1' ),
                        'panel'    => 'PA_panel'
                    ),
                    'PArCSetting' => 'CD_PArCSetting',
                    'PArCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'PArCControll' => array(
                        'label'    => '人気記事ランキングの見出しの文字色を変更する',
                        'section'    => 'CD_PArCSection',
                        'settings'   => 'CD_PArCSetting'
                    ),
                    'PArBgSection' => array(
                        'title'    => __( '人気記事ランキングの背景色を変更する', 'theme_slug1' ),
                        'panel'    => 'PA_panel'
                    ),
                    'PArBgSetting' => 'CD_PArBgSetting',
                    'PArBgDefault' => array(
                        'default'     => '#f4f4f4',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'PArBgControll' => array(
                        'label'    => '人気記事ランキングの背景色を変更する',
                        'section'    => 'CD_PArBgSection',
                        'settings'   => 'CD_PArBgSetting'
                    ),
                    'PArEBgSection' => array(
                        'title'    => __( '人気記事ランキングのそれぞれの背景色を変更する', 'theme_slug1' ),
                        'panel'    => 'PA_panel'
                    ),
                    'PArEBgSetting' => 'CD_PArEBgSetting',
                    'PArEBgDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'PArEBgControll' => array(
                        'label'    => '人気記事ランキングのそれぞれの背景色を変更する',
                        'section'    => 'CD_PArEBgSection',
                        'settings'   => 'CD_PArEBgSetting'
                    ),
                    'PArCCSection' => array(
                        'title'    => __( '人気記事ランキングのカテゴリーリンクの文字色を変更する', 'theme_slug1' ),
                        'panel'    => 'PA_panel'
                    ),
                    'PArCCSetting' => 'CD_PArCCSetting',
                    'PArCCDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'PArCCControll' => array(
                        'label'    => '人気記事ランキングのカテゴリーリンクの文字色を変更する',
                        'section'    => 'CD_PArCCSection',
                        'settings'   => 'CD_PArCCSetting'
                    ),
                    'PArCLBgSection' => array(
                        'title'    => __( '人気記事ランキングのカテゴリーリンクの背景色を変更する', 'theme_slug1' ),
                        'panel'    => 'PA_panel'
                    ),
                    'PArCLBgSetting' => 'CD_PArCLBgSetting',
                    'PArCLBgDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'PArCLBgControll' => array(
                        'label'    => '人気記事ランキングのカテゴリーリンクの背景色を変更する',
                        'section'    => 'CD_PArCLBgSection',
                        'settings'   => 'CD_PArCLBgSetting'
                    ),
                    'PArCDCSection' => array(
                        'title'    => __( '人気記事ランキングの日付の文字色を変更する', 'theme_slug1' ),
                        'panel'    => 'PA_panel'
                    ),
                    'PArCDCSetting' => 'CD_PArCDCSetting',
                    'PArCDCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'PArCDCControll' => array(
                        'label'    => '人気記事ランキングの日付の文字色を変更する',
                        'section'    => 'CD_PArCDCSection',
                        'settings'   => 'CD_PArCDCSetting'
                    ),
                    'PArTCSection' => array(
                        'title'    => __( '人気記事ランキングのタイトルの文字色を変更する', 'theme_slug1' ),
                        'panel'    => 'PA_panel'
                    ),
                    'PArTCSetting' => 'CD_PArTCSetting',
                    'PArTCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'PArTCControll' => array(
                        'label'    => '人気記事ランキングのタイトルの文字色を変更する',
                        'section'    => 'CD_PArTCSection',
                        'settings'   => 'CD_PArTCSetting'
                    )
                )
            );
//人気記事ランキング
            $wp_customize->add_panel('PA_panel', $settings['ctemp']['panel']);
            $wp_customize->add_section('CD_PArDSection', $settings['ctemp']['PArDSection']);
            $wp_customize->add_setting($settings['ctemp']['PArDSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArDSetting', $settings['ctemp']['PArDControll']));

            $wp_customize->add_section('CD_PArTTSection', $settings['ctemp']['PArTTSection']);
            $wp_customize->add_setting($settings['ctemp']['PArTTSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArTTSetting', $settings['ctemp']['PArTTControll']));

            $wp_customize->add_section('CD_PArTTDSection', $settings['ctemp']['PArTTDSection']);
            $wp_customize->add_setting($settings['ctemp']['PArTTDSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArTTDSetting', $settings['ctemp']['PArTTDControll']));

            $wp_customize->add_section('CD_PArTTFsSection', $settings['ctemp']['PArTTFsSection']);
            $wp_customize->add_setting($settings['ctemp']['PArTTFsSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArTTFsSetting', $settings['ctemp']['PArTTFsControll']));

            $wp_customize->add_section('CD_PArBTSection', $settings['ctemp']['PArBTSection']);
            $wp_customize->add_setting($settings['ctemp']['PArBTSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArBTSetting', $settings['ctemp']['PArBTControll']));

            $wp_customize->add_section('CD_PArBTDSection', $settings['ctemp']['PArBTDSection']);
            $wp_customize->add_setting($settings['ctemp']['PArBTDSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArBTDSetting', $settings['ctemp']['PArBTDControll']));

            $wp_customize->add_section('CD_PArBTFsSection', $settings['ctemp']['PArBTFsSection']);
            $wp_customize->add_setting($settings['ctemp']['PArBTFsSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_PArBTFsSetting', $settings['ctemp']['PArBTFsControll']));

            $wp_customize->add_section('CD_PArTBgSection', $settings['ctemp']['PArTBgSection']);
            $wp_customize->add_setting($settings['ctemp']['PArTBgSetting'], $settings['ctemp']['PArTBgDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_PArTBgSetting', $settings['ctemp']['PArTBgControll']));

            $wp_customize->add_section('CD_PArCSection', $settings['ctemp']['PArCSection']);
            $wp_customize->add_setting($settings['ctemp']['PArCSetting'], $settings['ctemp']['PArCDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_PArCSetting', $settings['ctemp']['PArCControll']));

            $wp_customize->add_section('CD_PArBgSection', $settings['ctemp']['PArBgSection']);
            $wp_customize->add_setting($settings['ctemp']['PArBgSetting'], $settings['ctemp']['PArBgDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_PArBgSetting', $settings['ctemp']['PArBgControll']));

            $wp_customize->add_section('CD_PArEBgSection', $settings['ctemp']['PArEBgSection']);
            $wp_customize->add_setting($settings['ctemp']['PArEBgSetting'], $settings['ctemp']['PArEBgDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_PArEBgSetting', $settings['ctemp']['PArEBgControll']));

            $wp_customize->add_section('CD_PArCCSection', $settings['ctemp']['PArCCSection']);
            $wp_customize->add_setting($settings['ctemp']['PArCCSetting'], $settings['ctemp']['PArCCDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_PArCCSetting', $settings['ctemp']['PArCCControll']));

            $wp_customize->add_section('CD_PArCLBgSection', $settings['ctemp']['PArCLBgSection']);
            $wp_customize->add_setting($settings['ctemp']['PArCLBgSetting'], $settings['ctemp']['PArCLBgDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_PArCLBgSetting', $settings['ctemp']['PArCLBgControll']));

            $wp_customize->add_section('CD_PArCDCSection', $settings['ctemp']['PArCDCSection']);
            $wp_customize->add_setting($settings['ctemp']['PArCDCSetting'], $settings['ctemp']['PArCDCDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_PArCDCSetting', $settings['ctemp']['PArCDCControll']));

            $wp_customize->add_section('CD_PArTCSection', $settings['ctemp']['PArTCSection']);
            $wp_customize->add_setting($settings['ctemp']['PArTCSetting'], $settings['ctemp']['PArTCDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_PArTCSetting', $settings['ctemp']['PArTCControll']));
        }
        //人気記事ランキング
        public static function PopularArticlesTemplate(){
            if(!get_theme_mod('CD_PArDSetting')){
                return 'pt1';
            }
            return get_theme_mod('CD_PArDSetting');
        }
        public static function PopularArticlesTitle(){
            if(!get_theme_mod('CD_PArTTSetting')){
                return '人気記事ランキング';
            }
            return get_theme_mod('CD_PArTTSetting');
        }
        public static function PopularArticlesTitleDir(){
            if(!get_theme_mod('CD_PArTTDSetting')){
                return 'center';
            }
            return get_theme_mod('CD_PArTTDSetting');
        }
        public static function PopularArticlesTitleFontSize(){
            if(!get_theme_mod('CD_PArTTFsSetting')){
                return '18px';
            }
            return get_theme_mod('CD_PArTTFsSetting');
        }
        public static function PopularArticlesBottomitle(){
            if(!get_theme_mod('CD_PArBTSetting')){
                return 'RANKING';
            }
            return get_theme_mod('CD_PArBTSetting');
        }
        public static function PopularArticlesBottomitleDir(){
            if(!get_theme_mod('CD_PArBTDSetting')){
                return 'center';
            }
            return get_theme_mod('CD_PArBTDSetting');
        }
        public static function PopularArticlesBottomitleFontSize(){
            if(!get_theme_mod('CD_PArBTFsSetting')){
                return '16px';
            }
            return get_theme_mod('CD_PArBTFsSetting');
        }
        public static function PopularArticlesTitleBackground(){
            if(!get_theme_mod('CD_PArTBgSetting')){
                return '#ffffff';
            }
            return get_theme_mod('CD_PArTBgSetting');
        }
        public static function PopularArticlesFontColor(){
            if(!get_theme_mod('CD_PArCSetting')){
                return '#212529';
            }
            return get_theme_mod('CD_PArCSetting');
        }
        public static function PopularArticlesBackground(){
            if(!get_theme_mod('CD_PArBgSetting')){
                return '#f4f4f4';
            }
            return get_theme_mod('CD_PArBgSetting');
        }
        public static function SetPopularArticleEachBackground(){
            if(!get_theme_mod('CD_PArEBgSetting')){
                return '#ffffff';
            }
            return get_theme_mod('CD_PArEBgSetting');
        }
        public static function SetPopularArticleCatLinkColor(){
            if(!get_theme_mod('CD_PArCCSetting')){
                return '#ffffff';
            }
            return get_theme_mod('CD_PArCCSetting');
        }
        public static function SetPopularArticleCatLinkBackgroundColor(){
            if(!get_theme_mod('CD_PArCLBgSetting')){
                return '#212529';
            }
            return get_theme_mod('CD_PArCLBgSetting');
        }
        public static function SetPopularArticleDateFontColor(){
            if(!get_theme_mod('CD_PArCDCSetting')){
                return '#212529';
            }
            return get_theme_mod('CD_PArCDCSetting');
        }
        public static function SetPopularArticleTitleFontColor(){
            if(!get_theme_mod('CD_PArTCSetting')){
                return '#212529';
            }
            return get_theme_mod('CD_PArTCSetting');
        }
    }
?>