<?php
    class CustomizeCategoryLink{
        public function __construct() {
            add_action( 'customize_register', array( $this,'SetCategoryLinkLayout' ) );
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

        public function SetCategoryLinkLayout($wp_customize){
            $settings = array(
                'ctemp' => array(
                    'panel' => array(
                        'title'    => 'カテゴリ一覧のレイアウト設定',
                        'priority' => 13
                    ),
//カテゴリ一覧
                    'CatLDSection' => array(
                        'title'    => __( 'カテゴリ一覧エリアのデザインを変更する', 'theme_slug' ),
                        'panel'    => 'CL_panel'
                    ),
                    'CatLDSetting' => 'CD_CatLDSetting',
                    'CatLDControll' => array(
                        'label'       => '選択する', 
                        'type'        => 'radio',
                        'section'     => 'CD_CatLDSection', 
                        'settings'    => 'CD_CatLDSetting', 
                        'description' => 'カテゴリ一覧エリアのデザインの変更をご確認ください。',
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( 'パターン1' ),
                            'pt2'   => __( 'パターン2' ),
                            'pt3'   => __( 'パターン3' ),
                            'none'   => __( '非表示' )
                        )
                    ),
                    'CatLTTSection' => array(
                        'title'    => 'カテゴリ一覧エリアの見出しタイトル(上)を編集する',
                        'panel'    => 'CL_panel'
                    ),
                    'CatLTTSetting' => 'CD_CatLTTSetting',
                    'CatLTTControll' => array(
                        'label'    => 'カテゴリ一覧エリアの見出しタイトル(上)を編集する',
                        'section'  => 'CD_CatLTTSection',
                        'settings' => 'CD_CatLTTSetting'
                    ),
                    'CatLTTDSection' => array(
                        'title'    => __( 'カテゴリ一覧エリアの見出しタイトル(上)の文字方向を編集する', 'theme_slug' ),
                        'panel'    => 'CL_panel'
                    ),
                    'CatLTTDSetting' => 'CD_CatLTTDSetting',
                    'CatLTTDControll' => array(
                        'label'       => '選択する', 
                        'type'        => 'select',
                        'section'     => 'CD_CatLTTDSection', 
                        'settings'    => 'CD_CatLTTDSetting', 
                        'description' => 'カテゴリ一覧エリアの見出しタイトル(上)の文字方向を編集する',
                        'default'   => 'center',
                        'choices'     =>  array(
                            'center'   => __( '中央寄せ' ),
                            'right'   => __( '右寄せ' ),
                            'left'   => __( '左寄せ' )
                        )
                    ),
                    'CatLTTFsSection' => array(
                        'title'    => __( 'カテゴリ一覧エリアの見出しタイトル(上)のフォントサイズを編集する', 'theme_slug' ),
                        'panel'    => 'CL_panel'
                    ),
                    'CatLTTFsSetting' => 'CD_CatLTTFsSetting',
                    'CatLTTFsControll' => array(
                        'label'       => '選択する', 
                        'type'        => 'select',
                        'section'     => 'CD_CatLTTFsSection', 
                        'settings'    => 'CD_CatLTTFsSetting', 
                        'description' => 'カテゴリ一覧エリアの見出しタイトル(上)のフォントサイズを編集する',
                        'default'   => '18px',
                        'choices'     =>  self::Fsize()
                    ),
                    'CatLBTSection' => array(
                        'title'    => 'カテゴリ一覧エリアの見出しタイトル(下)を編集する',
                        'panel'    => 'CL_panel'
                    ),
                    'CatLBTSetting' => 'CD_CatLBTSetting',
                    'CatLBTControll' => array(
                        'label'    => 'カテゴリ一覧エリアの見出しタイトル(下)を編集する',
                        'section'  => 'CD_CatLBTSection',
                        'settings' => 'CD_CatLBTSetting'
                    ),
                    'CatLBTDSection' => array(
                        'title'    => __( 'カテゴリ一覧エリアの見出しタイトル(下)の文字方向を編集する', 'theme_slug' ),
                        'panel'    => 'CL_panel'
                    ),
                    'CatLBTDSetting' => 'CD_CatLBTDSetting',
                    'CatLBTDControll' => array(
                        'label'       => '選択する', 
                        'type'        => 'select',
                        'section'     => 'CD_CatLBTDSection', 
                        'settings'    => 'CD_CatLBTDSetting', 
                        'description' => 'カテゴリ一覧エリアの見出しタイトル(下)の文字方向を編集する',
                        'default'   => 'center',
                        'choices'     =>  array(
                            'center'   => __( '中央寄せ' ),
                            'right'   => __( '右寄せ' ),
                            'left'   => __( '左寄せ' )
                        )
                    ),
                    'CatLBTFsSection' => array(
                        'title'    => __( 'カテゴリ一覧エリアの見出しタイトル(下)のフォントサイズを編集する', 'theme_slug' ),
                        'panel'    => 'CL_panel'
                    ),
                    'CatLBTFsSetting' => 'CD_CatLBTFsSetting',
                    'CatLBTFsControll' => array(
                        'label'       => '選択する', 
                        'type'        => 'select',
                        'section'     => 'CD_CatLBTFsSection', 
                        'settings'    => 'CD_CatLBTFsSetting', 
                        'description' => 'カテゴリ一覧エリアの見出しタイトル(下)のフォントサイズを編集する',
                        'default'   => '16px',
                        'choices'     =>  self::Fsize()
                    ),
                    'CatLTBgSection' => array(
                        'title'    => __( 'カテゴリ一覧エリアの見出しの背景色を変更する', 'theme_slug1' ),
                        'panel'    => 'CL_panel'
                    ),
                    'CatLTBgSetting' => 'CD_CatLTBgSetting',
                    'CatLTBgDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'CatLTBgControll' => array(
                        'label'    => 'カテゴリ一覧エリアの見出しの背景色を変更する',
                        'section'    => 'CD_CatLTBgSection',
                        'settings'   => 'CD_CatLTBgSetting'
                    ),
                    'CatLTCSection' => array(
                        'title'    => __( 'カテゴリ一覧エリアの見出しの文字色を変更する', 'theme_slug1' ),
                        'panel'    => 'CL_panel'
                    ),
                    'CatLTCSetting' => 'CD_CatLTCSetting',
                    'CatLTCDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'CatLTCControll' => array(
                        'label'    => 'カテゴリ一覧エリアの見出しの文字色を変更する',
                        'section'    => 'CD_CatLTCSection',
                        'settings'   => 'CD_CatLTCSetting'
                    ),
                    'CatLBgSection' => array(
                        'title'    => __( 'カテゴリ一覧エリアの背景色を変更する', 'theme_slug1' ),
                        'panel'    => 'CL_panel'
                    ),
                    'CatLBgSetting' => 'CD_CatLBgSetting',
                    'CatLBgDefault' => array(
                        'default'     => '#f4f4f4',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'CatLBgControll' => array(
                        'label'    => 'カテゴリ一覧エリアの背景色を変更する',
                        'section'    => 'CD_CatLBgSection',
                        'settings'   => 'CD_CatLBgSetting'
                    ),
                    'CatLLSection' => array(
                        'title'    => __( 'カテゴリ一覧エリアのリンクの文字色を変更する', 'theme_slug1' ),
                        'panel'    => 'CL_panel'
                    ),
                    'CatLLSetting' => 'CD_CatLLSetting',
                    'CatLLDefault' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'CatLLControll' => array(
                        'label'    => 'カテゴリ一覧エリアのリンクの文字色を変更する',
                        'section'    => 'CD_CatLLSection',
                        'settings'   => 'CD_CatLLSetting'
                    ),
                    'CatLLBgSection' => array(
                        'title'    => __( 'カテゴリ一覧エリアのリンクの背景色を変更する', 'theme_slug1' ),
                        'panel'    => 'CL_panel'
                    ),
                    'CatLLBgSetting' => 'CD_CatLLBgSetting',
                    'CatLLBgDefault' => array(
                        'default'     => '#212529',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'CatLLBgControll' => array(
                        'label'    => 'カテゴリ一覧エリアのリンクの背景色を変更する',
                        'section'    => 'CD_CatLLBgSection',
                        'settings'   => 'CD_CatLLBgSetting'
                    )
                )
            );
//カテゴリ一覧
            $wp_customize->add_panel('CL_panel', $settings['ctemp']['panel']);
            $wp_customize->add_section('CD_CatLDSection', $settings['ctemp']['CatLDSection']);
            $wp_customize->add_setting($settings['ctemp']['CatLDSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatLDSetting', $settings['ctemp']['CatLDControll']));

            $wp_customize->add_section('CD_CatLTTSection', $settings['ctemp']['CatLTTSection']);
            $wp_customize->add_setting($settings['ctemp']['CatLTTSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatLTTSetting', $settings['ctemp']['CatLTTControll']));

            $wp_customize->add_section('CD_CatLTTDSection', $settings['ctemp']['CatLTTDSection']);
            $wp_customize->add_setting($settings['ctemp']['CatLTTDSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatLTTDSetting', $settings['ctemp']['CatLTTDControll']));

            $wp_customize->add_section('CD_CatLTTFsSection', $settings['ctemp']['CatLTTFsSection']);
            $wp_customize->add_setting($settings['ctemp']['CatLTTFsSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatLTTFsSetting', $settings['ctemp']['CatLTTFsControll']));

            $wp_customize->add_section('CD_CatLBTSection', $settings['ctemp']['CatLBTSection']);
            $wp_customize->add_setting($settings['ctemp']['CatLBTSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatLBTSetting', $settings['ctemp']['CatLBTControll']));

            $wp_customize->add_section('CD_CatLBTDSection', $settings['ctemp']['CatLBTDSection']);
            $wp_customize->add_setting($settings['ctemp']['CatLBTDSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatLBTDSetting', $settings['ctemp']['CatLBTDControll']));

            $wp_customize->add_section('CD_CatLBTFsSection', $settings['ctemp']['CatLBTFsSection']);
            $wp_customize->add_setting($settings['ctemp']['CatLBTFsSetting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'CD_CatLBTFsSetting', $settings['ctemp']['CatLBTFsControll']));

            $wp_customize->add_section('CD_CatLTBgSection', $settings['ctemp']['CatLTBgSection']);
            $wp_customize->add_setting($settings['ctemp']['CatLTBgSetting'], $settings['ctemp']['CatLTBgDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_CatLTBgSetting', $settings['ctemp']['CatLTBgControll']));

            $wp_customize->add_section('CD_CatLTCSection', $settings['ctemp']['CatLTCSection']);
            $wp_customize->add_setting($settings['ctemp']['CatLTCSetting'], $settings['ctemp']['CatLTCDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_CatLTCSetting', $settings['ctemp']['CatLTCControll']));

            $wp_customize->add_section('CD_CatLBgSection', $settings['ctemp']['CatLBgSection']);
            $wp_customize->add_setting($settings['ctemp']['CatLBgSetting'], $settings['ctemp']['CatLBgDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_CatLBgSetting', $settings['ctemp']['CatLBgControll']));

            $wp_customize->add_section('CD_CatLLSection', $settings['ctemp']['CatLLSection']);
            $wp_customize->add_setting($settings['ctemp']['CatLLSetting'], $settings['ctemp']['CatLLDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_CatLLSetting', $settings['ctemp']['CatLLControll']));

            $wp_customize->add_section('CD_CatLLBgSection', $settings['ctemp']['CatLLBgSection']);
            $wp_customize->add_setting($settings['ctemp']['CatLLBgSetting'], $settings['ctemp']['CatLLBgDefault']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'CD_CatLLBgSetting', $settings['ctemp']['CatLLBgControll']));
        }
        //カテゴリ一覧
        public static function CatLinkTemplate(){
            if(!get_theme_mod('CD_CatLDSetting')){
                return 'pt1';
            }
            return get_theme_mod('CD_CatLDSetting');
        }
        public static function CatLinkTitle(){
            if(!get_theme_mod('CD_CatLTTSetting')){
                return 'カテゴリ一覧';
            }
            return get_theme_mod('CD_CatLTTSetting');
        }
        public static function CatLinkTitleDir(){
            if(!get_theme_mod('CD_CatLTTDSetting')){
                return 'center';
            }
            return get_theme_mod('CD_CatLTTDSetting');
        }
        public static function CatLinkTitleFontSize(){
            if(!get_theme_mod('CD_CatLTTFsSetting')){
                return '18px';
            }
            return get_theme_mod('CD_CatLTTFsSetting');
        }
        public static function CatLinkBottomTitle(){
            if(!get_theme_mod('CD_CatLBTSetting')){
                return 'Tags';
            }
            return get_theme_mod('CD_CatLBTSetting');
        }
        public static function CatLinkBottomTitleDir(){
            if(!get_theme_mod('CD_CatLBTDSetting')){
                return 'center';
            }
            return get_theme_mod('CD_CatLBTDSetting');
        }
        public static function CatLinkBottomTitleFontSize(){
            if(!get_theme_mod('CD_CatLBTFsSetting')){
                return '16px';
            }
            return get_theme_mod('CD_CatLBTFsSetting');
        }
        public static function CatLinkTitleBackground(){
            if(!get_theme_mod('CD_CatLTBgSetting')){
                return '#ffffff';
            }
            return get_theme_mod('CD_CatLTBgSetting');
        }
        public static function CatLinkFontColor(){
            if(!get_theme_mod('CD_CatLTCSetting')){
                return '#212529';
            }
            return get_theme_mod('CD_CatLTCSetting');
        }
        public static function CatLinkBackground(){
            if(!get_theme_mod('CD_CatLBgSetting')){
                return '#f4f4f4';
            }
            return get_theme_mod('CD_CatLBgSetting');
        }

        public static function EachCatLinkColor(){
            if(!get_theme_mod('CD_CatLLSetting')){
                return '#ffffff';
            }
            return get_theme_mod('CD_CatLLSetting');
        }
        public static function EachCatLinkBackground(){
            if(!get_theme_mod('CD_CatLLBgSetting')){
                return '#212529';
            }
            return get_theme_mod('CD_CatLLBgSetting');
        }
    }
?>