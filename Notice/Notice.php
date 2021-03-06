<?php

/**
 * @encoding     UTF-8
 * @copyright    Copyright (C) 2017 Torbara (http://torbara.com). All rights reserved.
 * @license      Envato Standard License http://themeforest.net/licenses/standard?ref=torbara
 * @author       Vladislav Dolgolenko <vladislavdolgolenko.com>
 * @support      support@torbara.com
 */

namespace WPObjects\Notice;

class Notice implements 
    \WPObjects\EventManager\ListenerInterface
{
    const TYPE_WARNING = 'warning';
    const TYPE_ERROR = 'error';
    const TYPE_INFO = 'info';
    const TYPE_SUCCESS = 'success';
    
    protected $type = null;
    protected $text = null;
    protected $dismission = true;
    
    public function __construct($text, $type = self::TYPE_INFO)
    {
        $this->text = $text;
        $this->type = $type;
    }
    
    public function attach()
    {
        add_action('admin_notices', array($this, 'render'));
    }
    
    public function detach()
    {
        remove_action('admin_notices', array($this, 'render'));
    }
    
    public function render()
    {
        ?>

            <div id="<?php echo esc_attr($this->getId()); ?>" class="<?php echo esc_attr($this->getClass()); ?>">
                <p><?php echo $this->getText(); ?></p>
            </div>

        <?php
    }
    
    public function getClass()
    {
        $main = 'notice notice-' . $this->getType();
        if ($this->dismission) {
            $main .= ' is-dismissible';
        }
        
        return $main;
    }
    
    public function getId()
    {
        return 'message';
    }
    
    public function getType()
    {
        return $this->type;
    }
    
    public function getText()
    {
        return $this->text;
    }
}