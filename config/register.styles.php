<?php

/**
 * @encoding     UTF-8
 * @copyright    Copyright (C) 2017 Torbara (http://torbara.com). All rights reserved.
 * @license      Envato Standard License http://themeforest.net/licenses/standard?ref=torbara
 * @author       Vladislav Dolgolenko (vladislavdolgolenko.com)
 * @support      support@torbara.com
 */

$assets_path = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'assets/custom';
$assets_url = plugin_dir_url($assets_path);

return array(
    
    array(
        'font-awesome',
        $assets_url . '/css/library/font-awesome.min.css',
        array(),
        null,
        true
    ),
    
    array(
        'bootstrap-wrapper',
        $assets_url . '/css/library/bootstrap-wrapper.css',
        array(),
        null,
        true
    ),
    
    array(
        'selectize',
        $assets_url . '/css/library/selectize.css',
        array(),
        null,
        true
    ),
    
    array(
        'form',
        $assets_url . '/css/forms.css',
        array('bootstrap-wrapper', 'font-awesome', 'selectize'),
    ),
    
);
