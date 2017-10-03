<?php

/**
 * @encoding     UTF-8
 * @copyright    Copyright (C) 2016 Torbara (http://torbara.com). All rights reserved.
 * @license      Envato Standard License http://themeforest.net/licenses/standard?ref=torbara
 * @author       Vladislav Dolgolenko (vladislavdolgolenko.com)
 * @support      support@torbara.com
 */

namespace WPObjects\Model;

abstract class AbstractDataModel extends AbstractModel
{
    public function __construct($data)
    {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
    }
    
    public function getMeta($key, $single = true)
    {
        return $this->$key;
    }
    
    public function setMeta($key, $value, $prev = null)
    {
        return $this->$key = $value;
    }
    
    public function save()
    {
        return;
    }
}
