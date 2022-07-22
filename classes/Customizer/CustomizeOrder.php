<?php
    class CustomizeOrder{
        public function __construct() {
            add_action( 'customize_register', array( $this,'SetTempOrder' ) );
        }

        public function SetTempOrder($wp_customize){
            $settings = array(
                'temporder' => array(
                    'panel' => array(
                        'title'    => '各パートの順序設定',
                        'priority' => 16
                    ),
                    'Section1' => array(
                        'title'    => __( '1番目のパートを選択する', 'theme_slug' ),
                        'panel'    => 'OrdPanel'
                    ),
                    'Setting1' => 'TOSetting1',
                    'Controll1' => array(
                        'label'       => '選択する', 
                        'type'        => 'select',
                        'section'     => 'TOSection1', 
                        'settings'    => 'TOSetting1', 
                        'description' => '選択する1番目のパートをご確認ください。',
                        'default'   => 'Content',
                        'choices'     =>  array(
                            'Content'   => __( 'コンテンツ' ),
                            'NewestArticleArea'   => __( '最新記事一覧' ),
                            'CategoryArticle'   => __( 'カテゴリ記事一覧' ),
                            'CategoryLink'   => __( 'カテゴリ一覧' ),
                            'PopularArticle'   => __( '人気記事一覧' )
                        )
                    ),
                    'Section2' => array(
                        'title'    => __( '2番目のパートを選択する', 'theme_slug' ),
                        'panel'    => 'OrdPanel'
                    ),
                    'Setting2' => 'TOSetting2',
                    'Controll2' => array(
                        'label'       => '選択する', 
                        'type'        => 'select',
                        'section'     => 'TOSection2', 
                        'settings'    => 'TOSetting2', 
                        'description' => '選択する2番目のパートをご確認ください。',
                        'default'   => 'NewestArticleArea',
                        'choices'     =>  array(
                            'NewestArticleArea'   => __( '最新記事一覧' ),
                            'Content'   => __( 'コンテンツ' ),
                            'CategoryArticle'   => __( 'カテゴリ記事一覧' ),
                            'CategoryLink'   => __( 'カテゴリ一覧' ),
                            'PopularArticle'   => __( '人気記事一覧' )
                        )
                    ),
                    'Section3' => array(
                        'title'    => __( '3番目のパートを選択する', 'theme_slug' ),
                        'panel'    => 'OrdPanel'
                    ),
                    'Setting3' => 'TOSetting3',
                    'Controll3' => array(
                        'label'       => '選択する', 
                        'type'        => 'select',
                        'section'     => 'TOSection3', 
                        'settings'    => 'TOSetting3', 
                        'description' => '選択する3番目のパートをご確認ください。',
                        'default'   => 'CategoryArticle',
                        'choices'     =>  array(
                            'CategoryArticle'   => __( 'カテゴリ記事一覧' ),
                            'Content'   => __( 'コンテンツ' ),
                            'NewestArticleArea'   => __( '最新記事一覧' ),
                            'CategoryLink'   => __( 'カテゴリ一覧' ),
                            'PopularArticle'   => __( '人気記事一覧' )
                        )
                    ),
                    'Section4' => array(
                        'title'    => __( '4番目のパートを選択する', 'theme_slug' ),
                        'panel'    => 'OrdPanel'
                    ),
                    'Setting4' => 'TOSetting4',
                    'Controll4' => array(
                        'label'       => '選択する', 
                        'type'        => 'select',
                        'section'     => 'TOSection4', 
                        'settings'    => 'TOSetting4', 
                        'description' => '選択する4番目のパートをご確認ください。',
                        'default'   => 'CategoryLink',
                        'choices'     =>  array(
                            'CategoryLink'   => __( 'カテゴリ一覧' ),
                            'Content'   => __( 'コンテンツ' ),
                            'NewestArticleArea'   => __( '最新記事一覧' ),
                            'CategoryArticle'   => __( 'カテゴリ記事一覧' ),
                            'PopularArticle'   => __( '人気記事一覧' )
                        )
                    ),
                    'Section5' => array(
                        'title'    => __( '5番目のパートを選択する', 'theme_slug' ),
                        'panel'    => 'OrdPanel'
                    ),
                    'Setting5' => 'TOSetting5',
                    'Controll5' => array(
                        'label'       => '選択する', 
                        'type'        => 'select',
                        'section'     => 'TOSection5', 
                        'settings'    => 'TOSetting5', 
                        'description' => '選択する5番目のパートをご確認ください。',
                        'default'   => 'PopularArticle',
                        'choices'     =>  array(
                            'PopularArticle'   => __( '人気記事一覧' ),
                            'Content'   => __( 'コンテンツ' ),
                            'NewestArticleArea'   => __( '最新記事一覧' ),
                            'CategoryArticle'   => __( 'カテゴリ記事一覧' ),
                            'CategoryLink'   => __( 'カテゴリ一覧' )
                        )
                    )
                )
            );
//最新情報
            $wp_customize->add_panel('OrdPanel', $settings['temporder']['panel']);
            $wp_customize->add_section('TOSection1', $settings['temporder']['Section1']);
            $wp_customize->add_setting($settings['temporder']['Setting1']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'TOSetting1', $settings['temporder']['Controll1']));

            $wp_customize->add_section('TOSection2', $settings['temporder']['Section2']);
            $wp_customize->add_setting($settings['temporder']['Setting2']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'TOSetting2', $settings['temporder']['Controll2']));

            $wp_customize->add_section('TOSection3', $settings['temporder']['Section3']);
            $wp_customize->add_setting($settings['temporder']['Setting3']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'TOSetting3', $settings['temporder']['Controll3']));

            $wp_customize->add_section('TOSection4', $settings['temporder']['Section4']);
            $wp_customize->add_setting($settings['temporder']['Setting4']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'TOSetting4', $settings['temporder']['Controll4']));

            $wp_customize->add_section('TOSection5', $settings['temporder']['Section5']);
            $wp_customize->add_setting($settings['temporder']['Setting5']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'TOSetting5', $settings['temporder']['Controll5']));
        }
        public static function DisplayFirstOrder(){
            if(!get_theme_mod('TOSetting1')){
                return 'Content';
            }
            return get_theme_mod('TOSetting1');
        }
        public static function DisplaySecondOrder(){
            if(!get_theme_mod('TOSetting2')){
                return 'NewestArticleArea';
            }
            return get_theme_mod('TOSetting2');
        }
        public static function DisplayThirdOrder(){
            if(!get_theme_mod('TOSetting3')){
                return 'CategoryArticle';
            }
            return get_theme_mod('TOSetting3');
        }
        public static function DisplayForthOrder(){
            if(!get_theme_mod('TOSetting4')){
                return 'CategoryLink';
            }
            return get_theme_mod('TOSetting4');
        }
        public static function DisplayFifthOrder(){
            if(!get_theme_mod('TOSetting5')){
                return 'PopularArticle';
            }
            return get_theme_mod('TOSetting5');
        }
    }
?>