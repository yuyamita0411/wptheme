<?php
    class CustomizePageLayout{
        public function __construct() {
            add_action( 'customize_register', array( $this,'SetpagePageLayout' ) );
        }

        public function SetpagePageLayout($wp_customize){
            $settings = array(
                'pagelayouttemplate' => array(
                    'panel' => array(
                        'title'    => '各ページのレイアウト設定',
                        'priority' => 15
                    ),
                    'section' => array(
                        'title'    => __( 'アーカイブページのデザインを変更する', 'theme_slug' ),
                        'panel'    => 'pagelayout_design_panel'
                    ),
                    'setting' => 'pagelayout_design_setting',
                    'controll' => array(
                        'label'       => '選択する', 
                        'type'        => 'radio',
                        'section'     => 'pagelayout_design_section', 
                        'settings'    => 'pagelayout_design_setting', 
                        'description' => 'アーカイブページの変更をご確認ください。<br><span style="color:red;">＊変更はアーカイブページを開いた状態でご確認頂けます。</span>',
                        'default'   => 'pt1',
                        'choices'     =>  array(
                            'pt1'   => __( 'パターン1' ),
                            'pt2'   => __( 'パターン2' ),
                            'pt3'   => __( 'パターン3' )
                        )
                    )
                )
            );
            $wp_customize->add_panel('pagelayout_design_panel', $settings['pagelayouttemplate']['panel']);
            $wp_customize->add_section('pagelayout_design_section', $settings['pagelayouttemplate']['section']);
            $wp_customize->add_setting($settings['pagelayouttemplate']['setting']);
            $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'pagelayout_design_setting', $settings['pagelayouttemplate']['controll']));
        }

        public static function ArchiveTemplate(){
            if(!get_theme_mod('pagelayout_design_setting')){
                return 'pt1';
            }
            return get_theme_mod('pagelayout_design_setting');
        }
    }
?>