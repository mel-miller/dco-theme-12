<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

function dco_theme_12_preprocess_page(&$vars) {
  $path = base_path() . drupal_get_path('theme', 'dco_theme_12');

  drupal_add_js(array('pathToTheme' => $path), 'setting');
  drupal_add_js($path . '/js/jquery.scrolling-parallax.js');
  drupal_add_js($path . '/js/dco12-parallax.js');

  if (user_is_logged_in()) {
    $vars['secondary_menu'][] = array(
    'href' => 'user/logout',
    'title' => 'Logout',
    );
   }
  else {
	 $vars['secondary_menu'][] = array(
    'href' => 'user',
    'title' => 'Login',
    );
  }
}