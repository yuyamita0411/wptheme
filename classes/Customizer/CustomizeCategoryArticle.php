<?php
    class CustomizeCategoryArticle{
        public function __construct() {
            add_action( 'customize_register', array( $this,'SetCategoryArticleLayout' ) );
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

        public function SetCategoryArticleLayout($wp_customize){
            $settings = array(
                'ctemp' => array(
                    'panel' => array(
                        'title'    => 'カテゴリ記事一覧のレイアウト設定',
                        'priority' => 12
                    ),
//カテゴリ記事一覧
                    'CatADSection' => array(
                        'title'    => __( 'カテゴリ記事一覧のデザインを変更する', 'theme_slug' ),
                        'panel'    => 'CA_panel'
                    ),
                    'CatADSetting' => 'CD_CatADSetting',
                    'CatADControll' => array(
                        'label'       => '選択する', 
                        'type'        => 'radio',
                        'section'     => 'CD_CatADSection', 
                        'settings'    => 'CD_CatADSetting', 
                        'description' => 'カテゴリ記事一覧の変更をご確認ください。',
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( 'パターン1' ),
                            'pt2'   => __( 'パターン2' ),
                            'pt3'   => __( 'パターン3' ),
                            'none'   => __( '非表示' )
                        )
                    ),
                    'CatATTSection' => array(
                        'title'    => 'カテゴリ記事一覧の見出しタイトル(上)を編集する',
                        'panel'    => 'CA_panel'
                    ),
                    'CatATTSetting' => 'CD_CatATTSetting',
                    'CatATTControll' => array(
                        'label'    => 'カテゴリ記事一覧の見出しタイトル(上)を編集する',
                        'section'  => 'CD_CatATTSection',
                        'settings' => 'CD_CatATTSetting'
                    ),
                    'CatATTDSection' => array(
                        'title'    => __( 'カテゴリ記事一覧の見出しタイトル(上)の文字方向を編集する', 'theme_slug' ),
                        'panel'    => 'CA_panel'
                    ),
                    'CatATTDSetting' => 'CD_CatATTDSetting',
                    'CatATTDControll' => array(
                        'label'       => '選択する', 
                        'type'        => 'select',
                        'section'     => 'CD_CatATTDSection', 
                        'settings'    => 'CD_CatATTDSetting', 
                        'description' => 'カテゴリ記事一覧の見出しタイトル(上)の文字方向を編集する',
                        'default'   => 'center',
                        'choices'     =>  array(
                            'center'   => __( '中央寄せ' ),
                            'right'   => __( '右寄せ' ),
                            'left'   => __( '左寄せ' )
                        )
                    ),
                    'CatATTFsSection' => array(
                        'title'    => __( 'カテゴリ記事一覧の見出しタイトル(上)のフォントサイズを編集する', 'theme_slug' ),
                        'panel'    => 'CA_panel'
                    ),
                    'CatATTFsSetting' => 'CD_CatATTFsSetting',
                    'CatATTFsControll' => array(
                        'label'       => '選択する', 
                        'type'        => 'select',
                        'section'     => 'CD_CatATTFsSection', 
                        'settings'    => 'CD_CatATTFsSetting', 
                        'description' => 'カテゴリ記事一覧の見出しタイトル(上)のフォントサイズを編集する',
                        'default'   => '18px',
                        'choices'     =>  self::Fsize()
                    ),
                    'CatABTSection' => array(
                        'title'    => 'カテゴリ記事一覧の見出しタイトル(下)を編集する',
                        'panel'    => 'CA_panel'
                    ),
                    'CatABTSetting' => 'CD_CatABTSetting',
                    'CatABTControll' => array(
                        'label'    => 'カテゴリ記事一覧の見出しタイトル(下)を編集する',
                        'section'  => 'CD_CatABTSection',
                        'settings' => 'CD_CatABTSetting'
                    ),
                    'CatABTFsSection' => array(
                        'title'    => __( 'カテゴリ記事一覧の見出しタイトル(下)のフォントサイズを編集する', 'theme_slug' ),
                        'panel'    => 'CA_panel'
                    ),
                    'CatABTFsSetting' => 'CD_CatABTFsSetting',
                    'CatABTFsControll' => array(
                        'label'       => '選択する', 
                        'type'        => 'select',
                        'section'     => 'CD_CatABTFsSection', 
                        'settings'    => 'CD_CatABTFsSetting', 
                        'description' => 'カテゴリ記事一覧の見出しタイトル(下)のフォントサイズを編集する',
                        'default'   => '16px',
                        'choices'     =>  self::Fsize()
                    ),
                    'CatABTDSection' => array(
                        'title'    => __( 'カテゴリ記事一覧の見出しタイトル(下)の文字方向を編集する', 'theme_slug' ),
                        'panel'    => 'CA_panel'
                    ),
                    'CatABTDSetting' => 'CD_CatABTDSetting',
                    'CatABTDControll' => array(
                        'label'       => '選択する', 
                        'type'        => 'select',
                        'section'     => 'CD_CatABTDSection', 
                        'settings'    => 'CD_CatABTDSetting', 
                        'description' => 'カテゴリ記事一覧の見出しタイトル(下)の文字方向を編集する',
                        'default'   => 'center',
                        'choices'     =>  array(
                            'center'   => __( '中央寄せ' ),
                            'right'   => __( '右寄せ' ),
                            'left'   => __( '左寄せ' )
                        )
                    ),
                    'CatATBgSection' => array(
                        'title'    => __( 'カテゴリ記事一覧の見出しの背景色を変更する', 'theme_slug1' ),
                        'panel'    => 'CA_panel'
                    ),
                    'CatATBgSetting' => 'CD_CatATBgSetting',
                    'CatATBgDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'CatATBgControll' => array(
                        'label'    => 'カテゴリ記事一覧の見出しの背景色を変更する',
                        'section'    => 'CD_CatATBgSection',
                        'settings'   => 'CD_CatATBgSetting'
                    ),
                    'CatATCSection' => array(
                        'title'    => __( 'カテゴリ記事一覧の見出しの文字色を変更する', 'theme_slug1' ),
                        'panel'    => 'CA_panel'
                    ),
                    'CatATCSetting' => 'CD_CatATCSetting',
                    'CatATCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'CatATCControll' => array(
                        'label'    => 'カテゴリ記事一覧の見出しの文字色を変更する',
                        'section'    => 'CD_CatATCSection',
                        'settings'   => 'CD_CatATCSetting'
                    ),
                    'CatABgSection' => array(
                        'title'    => __( 'カテゴリ記事一覧の背景色を変更する', 'theme_slug1' ),
                        'panel'    => 'CA_panel'
                    ),
                    'CatABgSetting' => 'CD_CatABgSetting',
                    'CatABgDefault' => array(
                        'default'     => '#f4f4f4',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'CatABgControll' => array(
                        'label'    => 'カテゴリ記事一覧の背景色を変更する',
                        'section'    => 'CD_CatABgSection',
                        'settings'   => 'CD_CatABgSetting'
                    ),
                    'CatAEBgSection' => array(
                        'title'    => __( 'カテゴリ記事一覧のそれぞれの背景色を変更する', 'theme_slug1' ),
                        'panel'    => 'CA_panel'
                    ),
                    'CatAEBgSetting' => 'CD_CatAEBgSetting',
                    'CatAEBgDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'CatAEBgControll' => array(
                        'label'    => 'カテゴリ記事一覧のそれぞれの背景色を変更する',
                        'section'    => 'CD_CatAEBgSection',
                        'settings'   => 'CD_CatAEBgSetting'
                    ),
                    'CatACCSection' => array(
                        'title'    => __( 'カテゴリ記事一覧のカテゴリーリンクの文字色を変更する', 'theme_slug1' ),
                        'panel'    => 'CA_panel'
                    ),
                    'CatACCSetting' => 'CD_CatACCSetting',
                    'CatACCDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'CatACCControll' => array(
                        'label'    => 'カテゴリ記事一覧のカテゴリーリンクの文字色を変更する',
                        'section'    => 'CD_CatACCSection',
                        'settings'   => 'CD_CatACCSetting'
                    ),
                    'CatACBgSection' => array(
                        'title'    => __( 'カテゴリ記事一覧のカテゴリーリンクの背景色を変更する', 'theme_slug1' ),
                        'panel'    => 'CA_panel'
                    ),
                    'CatACBgSetting' => 'CD_CatACBgSetting',
                    'default3-8' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'CatACBgControll' => array(
                        'label'    => 'カテゴリ記事一覧のカテゴリーリンクの背景色を変更する',
                        'section'    => 'CD_CatACBgSection',
                        'settings'   => 'CD_CatACBgSetting'
                    ),
                    'CatACDCSection' => array(
                        'title'    => __( 'カテゴリ記事一覧の日付の文字色を変更する', 'theme_slug1' ),
                        'panel'    => 'CA_panel'
                    ),
                    'CatACDCSetting' => 'CD_CatACDCSetting',
                    'CatACDCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'CatACDCControll' => array(
                        'label'    => 'カテゴリ記事一覧の日付の文字色を変更する',
                        'section'    => 'CD_CatACDCSection',
                        'settings'   => 'CD_CatACDCSetting'
                    ),
                    'CatAPTCSection' => array(
                        'title'    => __( 'カテゴリ記事一覧のタイトルの文字色を変更する', 'theme_slug1' ),
                        'panel'    => 'CA_panel'
                    ),
                    'CatAPTCSetting' => 'CD_CatAPTCSetting',
                    'CatAPTCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'CatAPTCControll' => array(
                        'label'    => 'カテゴリ記事一覧のタイトルの文字色を変更する',
                        'section'    => 'CD_CatAPTCSection',
                        'settings'   => 'CD_CatAPTCSetting'
                    )
                )
            );
//カテゴリー記事一覧
            $wp_customize->add_panel('CA_panel', $settings['ctemp']['panel']);
            $wp_customize->add_section('CD_CatADSection', $settings['ctemp']['CatADSection']);
            $wp_customize->add_setting($settings['ctemp']['CatADSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatADSetting', $settings['ctemp']['CatADControll']));

            $wp_customize->add_section('CD_CatATTSection', $settings['ctemp']['CatATTSection']);
            $wp_customize->add_setting($settings['ctemp']['CatATTSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatATTSetting', $settings['ctemp']['CatATTControll']));

            $wp_customize->add_section('CD_CatATTDSection', $settings['ctemp']['CatATTDSection']);
            $wp_customize->add_setting($settings['ctemp']['CatATTDSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatATTDSetting', $settings['ctemp']['CatATTDControll']));

            $wp_customize->add_section('CD_CatATTFsSection', $settings['ctemp']['CatATTFsSection']);
            $wp_customize->add_setting($settings['ctemp']['CatATTFsSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatATTFsSetting', $settings['ctemp']['CatATTFsControll']));

            $wp_customize->add_section('CD_CatABTSection', $settings['ctemp']['CatABTSection']);
            $wp_customize->add_setting($settings['ctemp']['CatABTSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatABTSetting', $settings['ctemp']['CatABTControll']));

            $wp_customize->add_section('CD_CatABTDSection', $settings['ctemp']['CatABTDSection']);
            $wp_customize->add_setting($settings['ctemp']['CatABTDSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatABTDSetting', $settings['ctemp']['CatABTDControll']));

            $wp_customize->add_section('CD_CatABTFsSection', $settings['ctemp']['CatABTFsSection']);
            $wp_customize->add_setting($settings['ctemp']['CatABTFsSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatABTFsSetting', $settings['ctemp']['CatABTFsControll']));

            $wp_customize->add_section('CD_CatATBgSection', $settings['ctemp']['CatATBgSection']);
            $wp_customize->add_setting($settings['ctemp']['CatATBgSetting'], $settings['ctemp']['CatATBgDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_CatATBgSetting', $settings['ctemp']['CatATBgControll']));

            $wp_customize->add_section('CD_CatATCSection', $settings['ctemp']['CatATCSection']);
            $wp_customize->add_setting($settings['ctemp']['CatATCSetting'], $settings['ctemp']['CatATCDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_CatATCSetting', $settings['ctemp']['CatATCControll']));

            $wp_customize->add_section('CD_CatABgSection', $settings['ctemp']['CatABgSection']);
            $wp_customize->add_setting($settings['ctemp']['CatABgSetting'], $settings['ctemp']['CatABgDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_CatABgSetting', $settings['ctemp']['CatABgControll']));

            $wp_customize->add_section('CD_CatAEBgSection', $settings['ctemp']['CatAEBgSection']);
            $wp_customize->add_setting($settings['ctemp']['CatAEBgSetting'], $settings['ctemp']['CatAEBgDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_CatAEBgSetting', $settings['ctemp']['CatAEBgControll']));

            $wp_customize->add_section('CD_CatACCSection', $settings['ctemp']['CatACCSection']);
            $wp_customize->add_setting($settings['ctemp']['CatACCSetting'], $settings['ctemp']['CatACCDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_CatACCSetting', $settings['ctemp']['CatACCControll']));

            $wp_customize->add_section('CD_CatACBgSection', $settings['ctemp']['CatACBgSection']);
            $wp_customize->add_setting($settings['ctemp']['CatACBgSetting'], $settings['ctemp']['default3-8']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_CatACBgSetting', $settings['ctemp']['CatACBgControll']));

            $wp_customize->add_section('CD_CatACDCSection', $settings['ctemp']['CatACDCSection']);
            $wp_customize->add_setting($settings['ctemp']['CatACDCSetting'], $settings['ctemp']['CatACDCDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_CatACDCSetting', $settings['ctemp']['CatACDCControll']));

            $wp_customize->add_section('CD_CatAPTCSection', $settings['ctemp']['CatAPTCSection']);
            $wp_customize->add_setting($settings['ctemp']['CatAPTCSetting'], $settings['ctemp']['CatAPTCDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_CatAPTCSetting', $settings['ctemp']['CatAPTCControll']));
        }
        //カテゴリー記事一覧
        public static function CategoryArticlesTemplate(){
            if(!get_theme_mod('CD_CatADSetting')){
                return 'pt1';
            }
            return get_theme_mod('CD_CatADSetting');
        }
        public static function CategoryArticlesTitle(){
            if(!get_theme_mod('CD_CatATTSetting')){
                return 'カテゴリー記事一覧';
            }
            return get_theme_mod('CD_CatATTSetting');
        }
        public static function CategoryArticlesTitleDir(){
            if(!get_theme_mod('CD_CatATTDSetting')){
                return 'center';
            }
            return get_theme_mod('CD_CatATTDSetting');
        }
        public static function CategoryArticlesTitleFontSize(){
            if(!get_theme_mod('CD_CatATTFsSetting')){
                return '18px';
            }
            return get_theme_mod('CD_CatATTFsSetting');
        }
        public static function CategoryArticlesBottomTitle(){
            if(!get_theme_mod('CD_CatABTSetting')){
                return 'Category';
            }
            return get_theme_mod('CD_CatABTSetting');
        }
        public static function CategoryArticlesBottomTitleDir(){
            if(!get_theme_mod('CD_CatABTDSetting')){
                return 'center';
            }
            return get_theme_mod('CD_CatABTDSetting');
        }
        public static function CategoryArticlesBottomTitleFontSize(){
            if(!get_theme_mod('CD_CatABTFsSetting')){
                return '16px';
            }
            return get_theme_mod('CD_CatABTFsSetting');
        }
        public static function CategoryArticlesTitleBackground(){
            if(!get_theme_mod('CD_CatATBgSetting')){
                return '#ffffff';
            }
            return get_theme_mod('CD_CatATBgSetting');
        }
        public static function CategoryArticlesFontColor(){
            if(!get_theme_mod('CD_CatATCSetting')){
                return '#212529';
            }
            return get_theme_mod('CD_CatATCSetting');
        }
        public static function CategoryArticlesBackground(){
            if(!get_theme_mod('CD_CatABgSetting')){
                return '#f4f4f4';
            }
            return get_theme_mod('CD_CatABgSetting');
        }
        public static function SetCategoryArticleEachBackground(){
            if(!get_theme_mod('CD_CatAEBgSetting')){
                return '#ffffff';
            }
            return get_theme_mod('CD_CatAEBgSetting');
        }
        public static function SetCategoryArticleCatLinkColor(){
            if(!get_theme_mod('CD_CatACCSetting')){
                return '#ffffff';
            }
            return get_theme_mod('CD_CatACCSetting');
        }
        public static function SetCategoryArticleCatLinkBackgroundColor(){
            if(!get_theme_mod('CD_CatACBgSetting')){
                return '#212529';
            }
            return get_theme_mod('CD_CatACBgSetting');
        }
        public static function SetCategoryArticleDateFontColor(){
            if(!get_theme_mod('CD_CatACDCSetting')){
                return '#212529';
            }
            return get_theme_mod('CD_CatACDCSetting');
        }
        public static function SetCategoryArticleTitleFontColor(){
            if(!get_theme_mod('CD_CatAPTCSetting')){
                return '#212529';
            }
            return get_theme_mod('CD_CatAPTCSetting');
        }
    }
?>