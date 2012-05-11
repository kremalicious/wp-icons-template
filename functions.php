<?php

/**
 * Custom Post Type Icon for Admin Menu & Post Screen
 *
 * thanks to Randy Jensen for the original code idea
 * http://randyjensenonline.com/thoughts/wordpress-custom-post-type-fugue-icons/
 */

add_action( 'admin_head', 'custom_post_type_icon' );

function custom_post_type_icon() {
    ?>
    <style type="text/css" media="screen">
        /* Admin Menu - 16px */
        #menu-posts-YOUR_POSTTYPE_NAME .wp-menu-image {
            background: url(<?php bloginfo('template_url') ?>/images/icon-adminmenu16-sprite.png) no-repeat left top !important;
        }
		#menu-posts-YOUR_POSTTYPE_NAME:hover .wp-menu-image, #menu-posts-YOUR_POSTTYPE_NAME.wp-has-current-submenu .wp-menu-image {
            background-position: left bottom !important;
        }
        /* Post Screen - 32px */
        .icon32-posts-YOUR_POSTTYPE_NAME {
        	background: url(<?php bloginfo('template_url') ?>/images/icon-adminpage32.png) no-repeat left top !important;
        }
        @media
        only screen and (-webkit-min-device-pixel-ratio: 1.5),
        only screen and (min--moz-device-pixel-ratio: 1.5),
        only screen and (-o-min-device-pixel-ratio: 3/2),
        only screen and (min-device-pixel-ratio: 1.5) {
        	
        	/* Admin Menu - 16px @2x */
        	#menu-posts-YOUR_POSTTYPE_NAME .wp-menu-image {
        		background-image: url('<?php bloginfo('template_url') ?>/images/icon-adminmenu16-sprite@2x.png') !important;
        		-webkit-background-size: 16px 48px;
        		-moz-background-size: 16px 48px;
        		background-size: 16px 48px;
        	}
        	/* Post Screen - 32px @2x */
        	.icon32-posts-YOUR_POSTTYPE_NAME {
        		background-image: url('<?php bloginfo('template_url') ?>/images/icon-adminpage32@2x.png') !important;
        		-webkit-background-size: 32px 32px;
        		-moz-background-size: 32px 32px;
        		background-size: 32px 32px;
        	}         
        }
    </style>
<?php } 


/**
 * Option Page Icon for Admin Menu & Option Screen
 *
 * thanks to Randy Jensen for the original code idea
 * http://randyjensenonline.com/thoughts/wordpress-custom-post-type-fugue-icons/
 */
 
add_action( 'admin_head', 'option_page_icon' );

function option_page_icon() {
    ?>
    <style type="text/css" media="screen">
        /* Admin Menu - 16px 
           Use only if you put your plugin or option page in the top level via add_menu_page()
        */
        #toplevel_page_PLUGINNAME-FILENAME .wp-menu-image {
        	background: url(<?php bloginfo('template_url') ?>/images/icon-adminmenu16-sprite.png) no-repeat left top !important;
        }
        #toplevel_page_PLUGINNAME-FILENAME:hover .wp-menu-image, #toplevel_page_PLUGINNAME-FILENAME.wp-has-current-submenu .wp-menu-image {
            background-position: left bottom !important;
        }
       	
        @media
        only screen and (-webkit-min-device-pixel-ratio: 1.5),
        only screen and (min--moz-device-pixel-ratio: 1.5),
        only screen and (-o-min-device-pixel-ratio: 3/2),
        only screen and (min-device-pixel-ratio: 1.5) {
        	/* Admin Menu - 16px @2x
        	   Use only if you put your plugin or option page in the top level via add_menu_page()
        	*/
       		#toplevel_page_PLUGINNAME-FILENAME .wp-menu-image {
       			background-image: url('<?php bloginfo('template_url') ?>/images/icon-adminmenu16-sprite@2x.png') !important;
       			-webkit-background-size: 16px 48px;
       			-moz-background-size: 16px 48px;
       			background-size: 16px 48px;
       		}    
        }
    </style>
<?php } 

?>