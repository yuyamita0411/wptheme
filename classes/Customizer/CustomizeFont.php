<?php
class CustomizeFont{
    public function __construct() {
        add_action( 'customize_register', array( $this,'SetMenuButton' ) );
        add_action( 'wp_footer', array( $this,'SetSiteFont' ) );
    }

    public function SetMenuButton($wp_customize){
        $settings = array(
            'fontfamily' => array(
                'section' => array(
                    'title'    => __( 'フォントファミリーの設定', 'theme_slug' ),
                    'priority' => 2
                ),
                'setting' => array(
                    'default'   => 'Dark',
                    'transport' => 'refresh',
                ),
                'controll' => array(
                    'label'       => 'font-family', 
                    'type'        => 'radio',
                    'section'     => 'theme_setting', 
                    'settings'    => 'checkbox_setting', 
                    'description' => 'フォントの種類を選択してください。<br><span style="color:red;">書体を変更頂けます。</span>', 
                    'choices'     =>  array(
                        'serif'   => __( 'serif' ),
                        'sans-serif'  => __( 'sans-serif' ),
                        'monospace'  => __( 'monospace' ),
                        'cursive'  => __( 'cursive' ),
                        'fantasy'  => __( 'fantasy' ),
                        'system-ui'  => __( 'system-ui' ),
                        'ui-serif'  => __( 'ui-serif' ),
                        'ui-sans-serif'  => __( 'ui-sans-serif' ),
                        'ui-monospace'  => __( 'ui-monospace' ),
                        'ui-rounded'  => __( 'ui-rounded' ),
                        'emoji'  => __( 'emoji' ),
                        'math'  => __( 'math' ),
                        'fangsong'  => __( 'fangsong' )
                    )
                )
            )
        );
        $wp_customize->add_section('theme_setting', $settings['fontfamily']['section']);
        $wp_customize->add_setting('checkbox_setting', $settings['fontfamily']['setting']);
        $wp_customize->add_control(new WP_Customize_Control( $wp_customize, 'checkbox_setting', $settings['fontfamily']['controll']));
    }
    public function SetSiteFont()
    {
        $sitefont = 'sans-serif';
        if(get_theme_mod('checkbox_setting')){
            $sitefont = get_theme_mod('checkbox_setting');
        }
        ?>
        <style type="text/css">
            p,
            h1,
            h2,
            h3,
            h4,
            h5,
            span,
            div,
            section,
            small,
            table,
            tr,
            td{
                font-family:<?php echo $sitefont; ?>;
            }
        </style>
        <?php
    }
}
?>