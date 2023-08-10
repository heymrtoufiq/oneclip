<?php

/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
//no direct accees
defined('_JEXEC') or die('resticted aceess');

class SppagebuilderAddonTestimonialpro extends SppagebuilderAddons {

    public function render() {

        $class = (isset($this->addon->settings->class) && $this->addon->settings->class) ? $this->addon->settings->class : '';
        $variation = (isset($this->addon->settings->variation) && $this->addon->settings->variation) ? $this->addon->settings->variation : 'multiple';

        //Options
        $autoplay = (isset($this->addon->settings->autoplay) && $this->addon->settings->autoplay) ? ' data-sppb-ride="sppb-carousel"' : '';
        $arrows = (isset($this->addon->settings->arrows) && $this->addon->settings->arrows) ? $this->addon->settings->arrows : '';
        $controls = (isset($this->addon->settings->controllers) && $this->addon->settings->controllers) ? $this->addon->settings->controllers : 0;

        //Output
        $output = '<div id="sppb-testimonial-pro-' . $this->addon->id . '" class="sppb-carousel sppb-custom-testimonial-pro sppb-testimonial-pro sppb-slide sppb-text-center variation-' . $variation . '' . $class . '"' . $autoplay . '>';

        if ($controls) {
            $output .= '<ol class="sppb-carousel-indicators">';
            foreach ($this->addon->settings->sp_testimonialpro_item as $key1 => $value) {
                $output .= '<li data-sppb-target="#sppb-carousel-' . $this->addon->id . '" ' . (($key1 == 0) ? ' class="active"' : '' ) . '  data-sppb-slide-to="' . $key1 . '"></li>' . "\n";
            }
            $output .= '</ol>';
        }


        $output .= '<div class="sppb-carousel-inner">';

        if ($variation == 'single') {
            foreach ($this->addon->settings->sp_testimonialpro_item as $key => $value) {
                $variation_column = ($variation == 'single') ? 'col-sm-12' : 'col-sm-4';
                $output .= '<div class="sppb-item ' . (($key == 0) ? ' active' : '') . '">';

                $output .= '<div class="' . $variation_column . '">';

                $tite_text = explode(",", $value->title);

                $title = '<div class="pro-client-name">' . $tite_text[0] . ',<span>' . $tite_text[1] . '</span></div>';

                if ($value->url)
                    $title .= '<a target="_blank" href="https://twitter.com/' . $value->url . '"><span class="pro-client-url">@' . $value->url . '</span></a>';

                if ($value->avatar)
                    $avatar_image;
                    if(is_object($value->avatar)){
                        $avatar_image = $value->avatar->src;
                    } else {
                        $avatar_image = $value->avatar;
                    }
                    $output .= '<img class="sppb-img-responsive sppb-avatar ' . $value->avatar_style . '" src="' . $avatar_image . '" alt="">';
                if ($title)
                    $output .= '<div class="sppb-testimonial-client">' . $title . '</div>';
                $output .= '<div class="sppb-testimonial-message">' . $value->message . '</div>';
                $output .= '</div>'; //$variation_column
                $output .= '</div>'; //.sppb-item
            }
        } else {
            foreach (array_chunk($this->addon->settings->sp_testimonialpro_item, 3, true) as $this->addon->settings->sp_testimonialpro_item) {

                $output .= '<div class="sppb-item">';
                foreach ($this->addon->settings->sp_testimonialpro_item as $key => $value) {

                    $variation_column = ($variation == 'single') ? 'col-sm-12' : 'col-sm-4';
                    $output .= '<div class="' . $variation_column . '">';
                    $tite_text = explode(",", $value->title);
                    $title = '<div class="pro-client-name">' . $tite_text[0] . ',<span>' . $tite_text[1] . '</span></div>';

                    if ($value->url)
                        $title .= '<a target="_blank" href="https://twitter.com/' . $value->url . '"><span class="pro-client-url">@' . $value->url . '</span></a>';

                    if ($value->avatar)
                        $avatar_image;
                        if(is_object($value->avatar)){
                            $avatar_image = $value->avatar->src;
                        } else {
                            $avatar_image = $value->avatar;
                        }
                        $output .= '<img class="sppb-img-responsive sppb-avatar ' . $value->avatar_style . '" src="' . $avatar_image . '" alt="">';
                    if ($title)
                        $output .= '<div class="sppb-testimonial-client">' . $title . '</div>';
                    $output .= '<div class="sppb-testimonial-message">' . $value->message . '</div>';
                    $output .= '</div>'; //$variation_column
                }
                $output .= '</div>'; //.sppb-item
            }
        }

        $output .= '</div>'; //.sppb-carousel-inner

        if ($arrows) {
            $output .= '<a href="#sppb-testimonial-pro-' . $this->addon->id . '" class="left sppb-carousel-control" data-slide="prev"><i class="fa fa-angle-left"></i></a>';
            $output .= '<a href="#sppb-testimonial-pro-' . $this->addon->id . '" class="right sppb-carousel-control" data-slide="next"><i class="fa fa-angle-right"></i></a>';
        }

        $output .= '</div>';

        return $output;
    }

    public static function getTemplate() {
        $output = '
            <#
		let contentClass = (!_.isEmpty(data.class) && data.class) ? data.class : "";
                let variation = (!_.isEmpty(data.variation) && data.variation) ? data.variation : "multiple";
                var autoplay = (typeof data.autoplay !=="undefined") ? data.autoplay : 0;
                let arrows = (typeof data.arrows !=="undefined") ? data.arrows : 0;
                let controls = (typeof data.controllers !=="undefined") ? data.controllers : 0;
                var slideAutoplay = (autoplay > 0) ? \' data-sppb-ride="sppb-carousel"\': \' data-sppb-ride=""\';
            #>
                <div id="sppb-testimonial-pro-{{data.id}}" class="sppb-carousel sppb-testimonial-pro sppb-slide sppb-text-center variation-{{variation}} {{contentClass}}" {{{slideAutoplay}}}>

                <# if (controls > 0) { #>
                    <ol class="sppb-carousel-indicators">
                    <# if (variation == "single") {
                    _.each (data.sp_testimonialpro_item, function(value, itemKey) {
                        let activeClass= "";
                        if(itemKey==0){
                            activeClass ="active"
                        }
                    #>
                       <li data-sppb-target="#sppb-carousel-{{data.id}}" class="{{activeClass}}"  data-sppb-slide-to="{{itemKey}}"></li>
                    <# })
                    } else {
                        _.each (_.chunk(data.sp_testimonialpro_item, 3), function(sp_testimonialpro_item, itemKey) {
                        let activeClass= "";
                        if(itemKey==0){
                            activeClass ="active"
                        }
                    #>
                        <li data-sppb-target="#sppb-carousel-{{data.id}}" class="{{activeClass}}"  data-sppb-slide-to="{{itemKey}}"></li>
                        <# })
                    } #>
                    </ol>
                <# } #>


                <div class="sppb-carousel-inner">

                <# if (variation == "single") {
                    _.each (data.sp_testimonialpro_item, function(value, itemKey) {
                        let variation_column = (variation == "single") ? "col-sm-12" : "col-sm-4";
                        let activeClass= "";
                        if(itemKey==0){
                            activeClass ="active"
                        }
                #>
                        <div class="sppb-item {{activeClass}}">

                        <div class="{{variation_column}}">
                        <#
                        let tite_text = value.title.split(",");
                        let title = \'<div class="pro-client-name">\' + tite_text[0] + \',<span>\' + tite_text[1] + \'</span></div>\';

                        if (value.url){
                            title += \'<a target="_blank" href="https://twitter.com/\' + value.url + \'"><span class="pro-client-url">@\' + value.url + \'</span></a>\';
                        }

                        let avatar_image = "";
                        if((typeof value.avatar !== "undefined") && (typeof value.avatar.src !== "undefined")){
                            avatar_image = "src=" + value.avatar.src + " ";
                        } else {
                            avatar_image = "src=" + value.avatar + " ";
                        }

                        if (value.avatar){
                        #>
                            <img class="sppb-img-responsive sppb-avatar {{value.avatar_style}}" {{avatar_image}} alt="{{value.title}}">
                        <# }
                        if (title){
                        #>
                            <div class="sppb-testimonial-client">{{{title}}}</div>
                        <# } #>
                        <div class="sppb-testimonial-message">{{value.message}}</div>
                        </div>
                        </div>
                    <# })
                } else {
                    _.each (_.chunk(data.sp_testimonialpro_item, 3, true), function(sp_testimonialpro_item, itemKey) {
                        let activeClass= "";
                        if(itemKey==0){
                            activeClass ="active";
                        }
                    #>

                        <div class="sppb-item {{activeClass}}">
                        <# _.each (sp_testimonialpro_item, function(value, valueKey) {

                            let variation_column = (variation == "single") ? "col-sm-12" : "col-sm-4";
                        #>
                            <div class="{{variation_column}}">
                        <#
                            let tite_text = value.title.split(",");
                            let title = \'<div class="pro-client-name">\' + tite_text[0] + \',<span>\' + tite_text[1] + \'</span></div>\';

                            if (value.url){
                                title += \'<a target="_blank" href="https://twitter.com/\' + value.url + \'"><span class="pro-client-url">@\' + value.url + \'</span></a>\';
                            }

                            let avatar_image = "";
                            if((typeof value.avatar !== "undefined") && (typeof value.avatar.src !== "undefined")){
                                avatar_image = "src=" + value.avatar.src + " ";
                            } else {
                                avatar_image = "src=" + value.avatar + " ";
                            }

                            if (value.avatar){
                        #>
                            <img class="sppb-img-responsive sppb-avatar {{value.avatar_style}}" {{avatar_image}} alt="{{value.title}}">
                        <#  }
                            if (title){
                        #>
                                <div class="sppb-testimonial-client">{{{title}}}</div>
                        <# } #>
                            <div class="sppb-testimonial-message">{{{value.message}}}</div>
                            </div>
                        <# }) #>
                        </div>
                    <# }) #>
                <# } #>

                </div>

                <# if (arrows > 0) { #>
                    <a href="#sppb-testimonial-pro-{{data.id}}" class="left sppb-carousel-control" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                    <a href="#sppb-testimonial-pro-{{data.id}}" class="right sppb-carousel-control" data-slide="next"><i class="fa fa-angle-right"></i></a>
                <# } #>

                </div>
		';

        return $output;
    }

}
