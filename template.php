<?php

/**
 * @file
 * Process theme data for alertajoven
 *
 * Use this file to run your theme specific implimentations of theme functions,
 * such preprocess, process, alters, and theme function overrides.
 */

/**
 * Preprocess variables for the html template.
 */

function alertajoven_modern_preprocess_html(&$vars) {
  global $theme_key;

  // Add facebook xlms attribute to the html element, required by IE
  $vars['html_attributes_array']['xmlns:fb'][] = 'http://www.facebook.com/2008/fbml';

  // Add a body class for the active theme name.
  // $vars['classes_array'][] = drupal_html_class($theme_key);

  // Browser/platform sniff - adds body classes such as ipad, webkit, chrome etc.
  // $vars['classes_array'][] = css_browser_selector();

}

/**
 * Override or insert variables for the page templates.
 */
function alertajoven_modern_preprocess_page(&$vars) {
  // Work around a perculier bug/feature(?) in Drupal 7 which incorrectly sets
  // the page title to "User account" for all three of these pages.
  $title = drupal_get_title();
  if (arg(0) === 'user') {
    if (arg(1) === 'login' || arg(1) == '') {
      drupal_set_title(t('User login'));
      $vars['breadcrumb'] = '';
    }
    if (arg(1) === 'password') {
      drupal_set_title(t('Request new password'));
      $vars['breadcrumb'] = '';
    }
    if (arg(1) === 'register') {
      drupal_set_title(t('Create new account'));
      $vars['breadcrumb'] = '';
    }
  }
}