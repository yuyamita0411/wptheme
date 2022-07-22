<?php
    class Widgets{
        public function __construct() {
            add_action( 'after_setup_theme', array( $this,'theme_setup' ) );
            add_action( 'widgets_init', array( $this,'theme_widgets_init' ) );
        }
        public function theme_setup() {

            load_theme_textdomain( 'corporatesite', get_template_directory() . '/languages' );

            add_theme_support( 'automatic-feed-links' );

            add_theme_support( 'title-tag' );

            add_theme_support(
                'post-formats',
                array(
                    'link',
                    'aside',
                    'gallery',
                    'image',
                    'quote',
                    'status',
                    'video',
                    'audio',
                    'chat',
                )
            );

            add_theme_support( 'post-thumbnails' );
            set_post_thumbnail_size( 1568, 9999 );

            register_nav_menus(
                array(
                    'header' => 'ヘッダー',
                    'side'   => 'サイド',
                    'footer' => 'フッター'
                )
            );

            add_theme_support(
                'html5',
                array(
                    'comment-form',
                    'comment-list',
                    'gallery',
                    'caption',
                    'style',
                    'script',
                    'navigation-widgets',
                )
            );

            $logo_width  = 300;
            $logo_height = 100;

            add_theme_support(
                'custom-logo',
                array(
                    'height'               => $logo_height,
                    'width'                => $logo_width,
                    'flex-width'           => true,
                    'flex-height'          => true,
                    'unlink-homepage-logo' => true,
                )
            );

            add_theme_support( 'customize-selective-refresh-widgets' );

            add_theme_support( 'wp-block-styles' );

            add_theme_support( 'align-wide' );

            add_theme_support( 'editor-styles' );
            $background_color = get_theme_mod( 'background_color', 'D1E4DD' );
            /*if ( 127 > Custom_Colors::get_relative_luminance_from_hex( $background_color ) ) {
                add_theme_support( 'dark-editor-style' );
            }*/

            $editor_stylesheet_path = './assets/css/style-editor.css';

            global $is_IE;
            if ( $is_IE ) {
                $editor_stylesheet_path = './assets/css/ie-editor.css';
            }

            add_editor_style( $editor_stylesheet_path );

            add_theme_support(
                'editor-font-sizes',
                array(
                    array(
                        'name'      => esc_html__( 'Extra small', 'corporatesite' ),
                        'shortName' => esc_html_x( 'XS', 'Font size', 'corporatesite' ),
                        'size'      => 16,
                        'slug'      => 'extra-small',
                    ),
                    array(
                        'name'      => esc_html__( 'Small', 'corporatesite' ),
                        'shortName' => esc_html_x( 'S', 'Font size', 'corporatesite' ),
                        'size'      => 18,
                        'slug'      => 'small',
                    ),
                    array(
                        'name'      => esc_html__( 'Normal', 'corporatesite' ),
                        'shortName' => esc_html_x( 'M', 'Font size', 'corporatesite' ),
                        'size'      => 20,
                        'slug'      => 'normal',
                    ),
                    array(
                        'name'      => esc_html__( 'Large', 'corporatesite' ),
                        'shortName' => esc_html_x( 'L', 'Font size', 'corporatesite' ),
                        'size'      => 24,
                        'slug'      => 'large',
                    ),
                    array(
                        'name'      => esc_html__( 'Extra large', 'corporatesite' ),
                        'shortName' => esc_html_x( 'XL', 'Font size', 'corporatesite' ),
                        'size'      => 40,
                        'slug'      => 'extra-large',
                    ),
                    array(
                        'name'      => esc_html__( 'Huge', 'corporatesite' ),
                        'shortName' => esc_html_x( 'XXL', 'Font size', 'corporatesite' ),
                        'size'      => 96,
                        'slug'      => 'huge',
                    ),
                    array(
                        'name'      => esc_html__( 'Gigantic', 'corporatesite' ),
                        'shortName' => esc_html_x( 'XXXL', 'Font size', 'corporatesite' ),
                        'size'      => 144,
                        'slug'      => 'gigantic',
                    ),
                )
            );

            add_theme_support(
                'custom-background',
                array(
                    'default-color' => '#ffff',
                )
            );

            $black     = '#000000';
            $dark_gray = '#28303D';
            $gray      = '#39414D';
            $green     = '#D1E4DD';
            $blue      = '#D1DFE4';
            $purple    = '#D1D1E4';
            $red       = '#E4D1D1';
            $orange    = '#E4DAD1';
            $yellow    = '#EEEADD';
            $white     = '#FFFFFF';

            add_theme_support(
                'editor-color-palette',
                array(
                    array(
                        'name'  => esc_html__( 'Black', 'corporatesite' ),
                        'slug'  => 'black',
                        'color' => $black,
                    ),
                    array(
                        'name'  => esc_html__( 'Dark gray', 'corporatesite' ),
                        'slug'  => 'dark-gray',
                        'color' => $dark_gray,
                    ),
                    array(
                        'name'  => esc_html__( 'Gray', 'corporatesite' ),
                        'slug'  => 'gray',
                        'color' => $gray,
                    ),
                    array(
                        'name'  => esc_html__( 'Green', 'corporatesite' ),
                        'slug'  => 'green',
                        'color' => $green,
                    ),
                    array(
                        'name'  => esc_html__( 'Blue', 'corporatesite' ),
                        'slug'  => 'blue',
                        'color' => $blue,
                    ),
                    array(
                        'name'  => esc_html__( 'Purple', 'corporatesite' ),
                        'slug'  => 'purple',
                        'color' => $purple,
                    ),
                    array(
                        'name'  => esc_html__( 'Red', 'corporatesite' ),
                        'slug'  => 'red',
                        'color' => $red,
                    ),
                    array(
                        'name'  => esc_html__( 'Orange', 'corporatesite' ),
                        'slug'  => 'orange',
                        'color' => $orange,
                    ),
                    array(
                        'name'  => esc_html__( 'Yellow', 'corporatesite' ),
                        'slug'  => 'yellow',
                        'color' => $yellow,
                    ),
                    array(
                        'name'  => esc_html__( 'White', 'corporatesite' ),
                        'slug'  => 'white',
                        'color' => $white,
                    ),
                )
            );

            add_theme_support(
                'editor-gradient-presets',
                array(
                    array(
                        'name'     => esc_html__( 'Purple to yellow', 'corporatesite' ),
                        'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
                        'slug'     => 'purple-to-yellow',
                    ),
                    array(
                        'name'     => esc_html__( 'Yellow to purple', 'corporatesite' ),
                        'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
                        'slug'     => 'yellow-to-purple',
                    ),
                    array(
                        'name'     => esc_html__( 'Green to yellow', 'corporatesite' ),
                        'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
                        'slug'     => 'green-to-yellow',
                    ),
                    array(
                        'name'     => esc_html__( 'Yellow to green', 'corporatesite' ),
                        'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
                        'slug'     => 'yellow-to-green',
                    ),
                    array(
                        'name'     => esc_html__( 'Red to yellow', 'corporatesite' ),
                        'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
                        'slug'     => 'red-to-yellow',
                    ),
                    array(
                        'name'     => esc_html__( 'Yellow to red', 'corporatesite' ),
                        'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
                        'slug'     => 'yellow-to-red',
                    ),
                    array(
                        'name'     => esc_html__( 'Purple to red', 'corporatesite' ),
                        'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
                        'slug'     => 'purple-to-red',
                    ),
                    array(
                        'name'     => esc_html__( 'Red to purple', 'corporatesite' ),
                        'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
                        'slug'     => 'red-to-purple',
                    ),
                )
            );

        }
    }
?>