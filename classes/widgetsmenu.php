<?php
    class WidgetsMenu{
        public function __construct() {
            add_action( 'nav_menu_css_class', array( $this,'add_additional_class_on_li' ), 1, 3 );
            add_action( 'nav_menu_link_attributes', array( $this,'add_additional_class_on_a' ), 1, 3 );
        }
        public function add_additional_class_on_li($classes, $item, $args)
        {
          if (isset($args->add_li_class)) {
            $classes['class'] = $args->add_li_class;
          }
          return $classes;
        }
        public function add_additional_class_on_a($classes, $item, $args)
        {
          if (isset($args->add_li_class)) {
            $classes['class'] = $args->add_a_class;
          }
          return $classes;
        }
        public static function SetHeaderMenu($ptarr) {

			$ulclassparr = [
                "pt1" => "gmenueinner mb-0 d-inline-block w-100",
                "pt2" => "gmenueinner mb-0 col-8 float-right d-inline-block",
                "pt3" => "gmenueinner mb-0 col-8 float-right d-flex"
			];

			$liclassparr = [
                "pt1" => "w-100 float-right text-right mb-md-0",
                "pt2" => "bgmain w-100 float-right text-right text-md-center mb-md-0 ml-1",
                "pt3" => "br-white1 w-100 float-right text-right text-md-center mb-md-0"
            ];

			if ( has_nav_menu( 'header' )){
				wp_nav_menu(
					array(
						'theme_location' => 'header',
						'menu'  => 'mainMenu',
						'container' => '',
						'container_id' => '',
						'container_class' => 'w-100 col-md-2 float-right float-md-left text-right text-md-center mb-md-0',
						'menu_id' => '',
						'menu_class' => 'gmenueinner mb-0 col-8 float-right',
						'add_li_class' => $liclassparr[$ptarr],
						'add_a_class' => 'menufont font-weight-bold position-relative d-inline-block w-100'
					)
				);
			}else{
				//ヘッダーが設置されていない時
				echo self::DefaultHeader($ulclassparr[$ptarr], $liclassparr[$ptarr]);
			}
        }
		private function DefaultHeader($ulclass, $liclass){
			return '
				<ul id="menu" class="'.$ulclass.'">
					<li id="menu-item-8" class="'.$liclass.'">
						<a href="'.get_bloginfo('url').'" class="menufont font-weight-bold position-relative d-inline-block w-100">Home</a>
					</li>
				</ul>
			';
		}

        public static function SetHumbugerMenu($ptarr) {

			$ulclassparr = [
                "pt1" => "gmenueinner mb-0 col-8 float-right",
                "pt2" => "gmenueinner mb-0 col-8 float-right d-inline-block",
                "pt3" => "gmenueinner mb-0 col-8 float-right"
			];

			$liclassparr = [
                "pt1" => "w-100 float-right text-right text-md-center mb-md-0",
                "pt2" => "bgmain w-100 float-right text-right text-md-center mb-md-0 ml-1",
                "pt3" => "br-white1 w-100 float-right text-right text-md-center mb-md-0"
            ];

			if ( has_nav_menu( 'header' )){
				wp_nav_menu(
					array(
						'theme_location' => 'header',
						'menu'  => 'mainMenu',
						'container' => '',
						'container_id' => '',
						'container_class' => 'w-100 col-md-2 float-right float-md-left text-right text-md-center mb-md-0',
						'menu_id' => '',
						'menu_class' => $ulclassparr[$ptarr],
						'add_li_class' => $liclassparr[$ptarr],
						'add_a_class' => 'menufont font-weight-bold position-relative d-inline-block w-100'
					)
				);
			}else{
				//ヘッダーが設置されていない時
				echo self::DefaultHumbuger($ulclassparr[$ptarr], $liclassparr[$ptarr]);
			}
        }
		private function DefaultHumbuger($ulclass, $liclass){
			return '
				<ul id="menu" class="'.$ulclass.'">
					<li id="menu-item-8" class="'.$liclass.'">
						<a href="'.get_bloginfo('url').'" class="menufont font-weight-bold position-relative d-inline-block w-100">Home</a>
					</li>
				</ul>
			';
		}

        public static function SetSideMenu($ptarr) {
			$ulclassparr = [
                "pt1" => "w-100 d-inline-block float-left position-relative mb-0 padding-inline-0 pr-1 pb-1 pl-5",
                "pt2" => "w-100 d-inline-block float-left position-relative mb-0 padding-inline-0 pr-1 pb-1 pl-5",
                "pt3" => "w-100 d-inline-block float-left position-relative mb-0 padding-inline-0 pr-1 pb-1 pl-5"
			];

			$liclassparr = [
                "pt1" => "w-100 mb-3",
                "pt2" => "w-100 mb-3",
                "pt3" => "w-100 mb-3"
            ];

			if ( has_nav_menu( 'side' )){
				wp_nav_menu(
					array(
						'theme_location' => 'side',
						'menu'  => 'sideMenu',
						'container' => '',
						'container_id' => '',
						'container_class' => 'w-100',
						'menu_id' => '',
						'menu_class' => $ulclassparr[$ptarr],
						'add_li_class' => $liclassparr[$ptarr],
						'add_a_class' => 'sidebarfont font-weight-bold position-relative d-inline-block w-100'
					)
				);
			}else{
				//サイドバーが設置されていない時
				echo self::DefaultSideMenu($ulclassparr[$ptarr], $liclassparr[$ptarr]);
			};
        }
		private function DefaultSideMenu($ulclass, $liclass){
			return '
			<ul id="menu-2" class="'.$ulclass.'">
				<li id="menu-item-5" class="'.$liclass.'">
					<a href="'.get_bloginfo('url').'" class="sidebarfont font-weight-bold position-relative d-inline-block w-100">Home</a>
				</li>
			</ul>';
		}
		
        public static function SetFooterMenu($ptarr) {
			$ulclassparr = [
                "pt1" => "w-100 float-right pr-0 pl-0 text-left mb-0",
                "pt2" => "w-100 float-right pr-0 pl-0 text-left mb-0",
                "pt3" => "w-100 float-right pr-0 pl-0 text-left mb-0"
			];

			$liclassparr = [
                "pt1" => "d-inline-block float-left mb-3",
                "pt2" => "d-inline-block float-left mb-3",
                "pt3" => "d-inline-block float-left mb-3"
            ];
			if ( has_nav_menu( 'footer' )){
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'menu'  => 'Project Nav',
						'container' => '',
						'container_id' => '',
						'container_class' => '',
						'menu_id' => '',
						'menu_class' => $ulclassparr[$ptarr],
						'add_li_class' => $liclassparr[$ptarr],
						'add_a_class' => 'menufont fadefrombottom position-relative fadebottomshow'
					)
				);
			}else{
				//フッターが設置されていない時
				echo self::DefaultFooter($ulclassparr[$ptarr], $liclassparr[$ptarr]);
			};
        }
		private function DefaultFooter($ulclass, $liclass){
			return '
			<ul id="menu-2c" class="'.$ulclass.'">
				<li id="menu-item-7" class="'.$liclass.'">
					<a href="'.get_bloginfo('url').'" class="menufont fadefrombottom position-relative fadebottomshow">Home</a>
				</li>
			</ul>';
		}

    }
?>