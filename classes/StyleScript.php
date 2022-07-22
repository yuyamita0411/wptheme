<?php
    class StyleScript{
        public function __construct() {
            add_action( 'wp_enqueue_scripts', array( $this,'set_stylesheet' ) );
            //add_action( 'init', array( $this,'RemoveDefaultScript' ) );
            add_filter( 'wp_resource_hints', array( $this,'remove_dns_prefetch' ), 10, 2 );
        }

        public function set_stylesheet(){
            wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
            wp_enqueue_style( 'commonstyle', get_template_directory_uri() . '/css/common.css' );

            wp_dequeue_style('wp-block-library');
            wp_dequeue_style('wp-block-library-theme');
            wp_dequeue_style( 'global-styles' );

            wp_enqueue_script( 'designscript', get_template_directory_uri() . '/js/design.js', array(), '1.0.0', true );
        }

        //参考に https://cocorograph.co/knowledge/how-to-delete-wordpress-unnecessary-tags
        public function RemoveDefaultScript(){
            remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
            remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
            remove_action( 'wp_print_styles', 'print_emoji_styles' );
            remove_action( 'admin_print_styles', 'print_emoji_styles' );    
            remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
            remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );    
            remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

            remove_action('wp_head', 'feed_links', 2);
            remove_action('wp_head', 'feed_links_extra', 3);
            remove_filter( 'wp_robots', 'wp_robots_max_image_preview_large' );
            remove_action('wp_head', 'wp_generator');
            remove_action('wp_head', 'rsd_link');
            remove_action('wp_head', 'wlwmanifest_link');
            remove_action('wp_head', 'wp_shortlink_wp_head');
            remove_action('wp_head', 'rest_output_link_wp_head');
        }

        public function remove_dns_prefetch( $hints, $relation_type ) {
          if ( 'dns-prefetch' === $relation_type ) {
            return array_diff( wp_dependencies_unique_hosts(), $hints );
          }
          return $hints;
        }
    }
?>