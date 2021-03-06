<?php

/**
 * @encoding     UTF-8
 * @copyright    Copyright (C) 2017 Torbara (http://torbara.com). All rights reserved.
 * @license      Envato Standard License http://themeforest.net/licenses/standard?ref=torbara
 * @author       Vladislav Dolgolenko <vladislavdolgolenko.com>
 * @support      support@torbara.com
 */

namespace WPObjects\Data;

use WPObjects\Factory\AbstractData;
use WPObjects\Data\DataType as DataTypeModel;

class DataTypeFactory extends AbstractData
{
    public function initModel($post)
    {
        $Model = new DataTypeModel($post);
        return $this->getServiceManager()->inject($Model);
    }
}