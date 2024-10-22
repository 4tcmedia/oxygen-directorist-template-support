<?php
/**
 * Plugin Name: Oxygen Directorist Template Override
 * Plugin URI:  https://github.com/4tcmedia/oxygen-directorist-template-override
 * GitHub URI:  4tcmedia/oxygen-directorist-template-override
 * Description: Allows Directorist template customisation without a theme.
 * Version:     1.0.0
 * Author:      Sean Montalto
 * Author URI:  4tcmedia.com.au
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 2, as published by the
 * Free Software Foundation.  You may NOT assume that you can use any other
 * version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.
 *
 * @package    OxygenDirectoristTemplateOverride
 * @since      1.0.0
 * @copyright  Copyright (c) 2024, Sean Montalto
 * @license    GPL-2.0+
 *
 */

 if ( ! defined( 'WPINC' ) ) {
	die;
}

add_filter('directorist_template_file_path','fourtc_custom_template_path_oxy',10,3);

function fourtc_custom_template_path_oxy($template,$template_name,$args){
    $custom_template_path = plugin_dir_path(__FILE__) . 'directorist-templates/' . $template_name . '.php';
    if (file_exists($custom_template_path)){
        $template = $custom_template_path;
    }
    return $template;
}
