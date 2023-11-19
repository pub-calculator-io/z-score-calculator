<?php
/*
Plugin Name: CI Z score calculator
Plugin URI: https://www.calculator.io/z-score-calculator/
Description: The Z-Score Calculator helps to get the z-score of a normal distribution, convert between z-score and probability, and get the probability between 2 z-scores.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_z_score_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Z-Score Calculator by Calculator.iO";

function display_ci_z_score_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Z-Score Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_z_score_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_z_score_calculator', 'display_ci_z_score_calculator' );