<?php
    class CustomizeMainColumn{
        public function __construct(){
            add_action( 'customize_register', array( $this,'SetMenuColor' ) );
            add_action( 'wp_footer', array( $this,'SetCss' ) );
        }

        public function SetMenuColor( $wp_customize ) {
            $settings = array(
                'mainbackground' => array(
                    'section' => array(
                        'title' => __( 'メインカラムの設定', 'mytheme' ),
                        'priority'   => 6,
                    ),
                    'setting' => array(
                        'default'     => '#ffffff',
                        'sanitize_callback' => 'sanitize_hex_color',
                    ),
                    'controll' => array(
                        'label'      => __( 'メインカラムの色を選択してください。', 'mytheme' ),
                        'section'    => 'mainbackground_color',
                        'settings'   => 'mainbackground_menu_bg',
                        'priority'   => 5,
                    ),
                )
            );
            $wp_customize->add_section('mainbackground_color', $settings['mainbackground']['section']);
            $wp_customize->add_setting('mainbackground_menu_bg', $settings['mainbackground']['setting']);
            $wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'mainbackground_menu_bg', $settings['mainbackground']['controll']));
        }

        public function SetCss()
        {
            $mainbackground_menu_bg = '#ffffff';
            if(get_theme_mod('mainbackground_menu_bg')){
                $mainbackground_menu_bg = get_theme_mod('mainbackground_menu_bg');
            }
            ?>
            <style type="text/css">
                .maincontent{ 
                    background-color:<?php echo $mainbackground_menu_bg; ?>; 
                }
            </style>
            <?php
        }
    }
?>