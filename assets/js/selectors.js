/**
 * @encoding     UTF-8
 * @copyright    Copyright (C) 2017 Torbara (http://torbara.com). All rights reserved.
 * @license      Envato Standard License http://themeforest.net/licenses/standard?ref=torbara
 * @author       Vladislav Dolgolenko <vladislavdolgolenko.com>
 * @support      support@torbara.com
 */

if (MSP === undefined) {
    var MSP = {};
}

(function($, MSP){
    
    MSP.initMetaBoxSelector = function () {
        var config_object = {
            plugins: ['remove_button', 'drag_drop'],
            delimiter: ',',
            persist: false,
            render: { }
        };
        
        config_object.options = [];
        $(this).find('option').each(function(){
            config_object.options.push({
                'value' : $(this).attr('value'),
                'text' : $(this).html(),
                'img' : $(this).attr('data-img'),
                'font-awesome': $(this).attr('data-font-awesome')
            });
        });
        
        if ($(this).hasClass('with-images')) {
            config_object.render.item = function (data, escape) {
                var $item = $('<div>');
                var $div = $('<div>').attr('data-value', data.value).addClass('item');
                var $img = $('<img>').attr('src', data.img).addClass('src', '');
                var $font = $('<i>').addClass('fa').addClass(data['font-awesome']);

                if (data.img) {
                    $div.append($img);
                }
                if (data['font-awesome']) {
                    $div.append($font);
                }
                
                $div.append(escape(data.text));
                
                $item.append($div);

                return $item.html();
            };
        }
        
        
        $(this).selectize(config_object);
    };
    
    $('.matabox-selectors').each(function(){
        MSP.initMetaBoxSelector.call(this);
    });
    
})(jQuery, MSP, _);