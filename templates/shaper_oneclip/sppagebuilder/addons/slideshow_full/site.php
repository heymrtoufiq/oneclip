<?php

/**
 * @package Oneclip
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
//no direct accees
defined('_JEXEC') or die('resticted aceess');

class SppagebuilderAddonSlideshow_full extends SppagebuilderAddons {

    public function render() {
        $autoplay = (isset($this->addon->settings->autoplay) && $this->addon->settings->autoplay) ? $this->addon->settings->autoplay : '';
        $controllers = (isset($this->addon->settings->controllers) && $this->addon->settings->controllers) ? $this->addon->settings->controllers : '';
        $arrows = (isset($this->addon->settings->arrows) && $this->addon->settings->arrows) ? $this->addon->settings->arrows : '';
        $class = (isset($this->addon->settings->class) && $this->addon->settings->class) ? $this->addon->settings->class : '';
        $variation = (isset($this->addon->settings->variation) && $this->addon->settings->variation) ? $this->addon->settings->variation : 'simple';
        $button_before_icon = (isset($this->addon->settings->button_before_icon) && $this->addon->settings->button_before_icon) ? $this->addon->settings->button_before_icon : '';
        $button_after_icon = (isset($this->addon->settings->button_after_icon) && $this->addon->settings->button_after_icon) ? $this->addon->settings->button_after_icon : '';

        //Check Auto Play
        $slide_autoplay = ($autoplay) ? 'data-sppb-slide-ride="true"' : '';
        $slide_controllers = ($controllers) ? 'data-sppb-slidefull-controllers="true"' : '';

        if ($variation == 'simple') {
            $column_size1 = 'sppb-col-sm-6';
            $column_size2 = 'sppb-col-sm-6';
        } elseif ($variation == 'advance') {
            $column_size1 = 'sppb-col-md-4 sppb-col-sm-6';
            $column_size2 = 'sppb-col-md-8 sppb-col-sm-6';
        } elseif ($variation == 'corporate') {
            $column_size1 = 'sppb-col-sm-6 sppb-col-md-7';
            $column_size2 = 'sppb-col-sm-6 sppb-col-md-5 slide-img-wrap';
        } elseif ($variation == 'thumb') {
            $column_size1 = '';
            $column_size2 = '';
        }

        $button_before_icon = ($button_before_icon) ? '<i class="fa ' . $button_before_icon . '"></i>' : '';
        $button_after_icon = ($button_after_icon) ? '<i class="fa ' . $button_after_icon . '"></i>' : '';

        //output
        $output = '<div class="sppb-slider-wrapper sppb-slider-fullwidth-wrapper owl-theme  varition-' . $variation . ' ' . $class . '">';
        $output .= '<div class="sppb-slider-item-wrapper">';
        $output .= '<div class="slide-fullwidth owl-carousel" ' . $slide_controllers . ' ' . $slide_autoplay . ' >';

        foreach ($this->addon->settings->sp_slideshow_full_item as $key => $slide_item) {
            // if have bg
            $slide_item_bg;
            if(is_object($slide_item->bg)){
                $slide_item_bg = $slide_item->bg->src;
            } else {
                $slide_item_bg = JURI::base() . $slide_item->bg;
            }
            //check if object
            $bg_image = ($slide_item_bg) ? 'style="background-image: url(' . $slide_item_bg . ');"' : '';

            // *** animation *** //
            if (isset($slide_item->title_animation) && $slide_item->title_animation) {
                $slide_item->title_animation .= ' sppb-wow ' . $slide_item->title_animation;
            }

            $title_data_attr = '';
            if (isset($slide_item->title_animationduration) && $slide_item->title_animationduration)
                $title_data_attr .= ' data-sppb-wow-duration="' . $slide_item->title_animationduration . 'ms"';
            if (isset($slide_item->title_animationdelay) && $slide_item->title_animationdelay)
                $title_data_attr .= ' data-sppb-wow-delay="' . $slide_item->title_animationdelay . 'ms"';

            // sub title animation
            $subtitle_animation = '';
            if (isset($slide_item->subtitle_animation) && $slide_item->subtitle_animation) {
                $slide_item->subtitle_animation .= ' sppb-wow ' . $slide_item->subtitle_animation;
            }
            $subtitle_data_attr = '';
            if (isset($slide_item->subtitle_animationduration) && $slide_item->subtitle_animationduration)
                $subtitle_data_attr .= ' data-sppb-wow-duration="' . $slide_item->subtitle_animationduration . 'ms"';
            if (isset($slide_item->subtitle_animationdelay) && $slide_item->subtitle_animationdelay)
                $subtitle_data_attr .= ' data-sppb-wow-delay="' . $slide_item->subtitle_animationdelay . 'ms"';

            // image animation
            $image_animation = '';
            if (isset($slide_item->image_animation) && $slide_item->image_animation) {
                $image_animation .= ' sppb-wow ' . $slide_item->image_animation;
            }

            $image_data_attr = '';
            if (isset($slide_item->image_animationduration) && $slide_item->image_animationduration)
                $image_data_attr .= ' data-sppb-wow-duration="' . $slide_item->image_animationduration . 'ms"';
            if (isset($slide_item->cotent_animationdelay) && $slide_item->cotent_animationdelay)
                $image_data_attr .= ' data-sppb-wow-delay="' . $slide_item->cotent_animationdelay . 'ms"';

            // content animation
            if (isset($slide_item->cotent_animation) && $slide_item->cotent_animation) {
                $slide_item->cotent_animation .= ' sppb-wow ' . $slide_item->cotent_animation;
            }

            $content_data_attr = '';
            if (isset($slide_item->cotent_animationduration) && $slide_item->cotent_animationduration)
                $content_data_attr .= ' data-sppb-wow-duration="' . $slide_item->cotent_animationduration . 'ms"';
            if (isset($slide_item->cotent_animationdelay) && $slide_item->cotent_animationdelay)
                $content_data_attr .= ' data-sppb-wow-delay="' . $slide_item->cotent_animationdelay . 'ms"';

            // Button animation
            $button_animation = '';
            if (isset($slide_item->button_animation) && $slide_item->button_animation) {
                $button_animation .= ' sppb-wow ' . $slide_item->button_animation;
            }

            $button_data_attr = '';
            if (isset($slide_item->button_animationduration) && $slide_item->button_animationduration)
                $button_data_attr .= ' data-sppb-wow-duration="' . $slide_item->button_animationduration . 'ms"';
            if (isset($slide_item->button_animationdelay) && $slide_item->button_animationdelay)
                $button_data_attr .= ' data-sppb-wow-delay="' . $slide_item->button_animationdelay . 'ms"';



            // Before button icon
            $button_one_before_icon = (isset($slide_item->button_one_before_icon) && $slide_item->button_one_before_icon) ? '<i class="fa ' . $slide_item->button_one_before_icon . '"></i>' : '';

            $output .= '<div class="sppb-slideshow-fullwidth-item item">';
            if ($variation != 'advance') {
                $output .= '<div class="sppb-slide-item-bg" ' . $bg_image . '>';
            } else {
                $output .= '<div class="sppb-slide-item-bg">';
            }
            $output .= '<div class="container">';
            if ($variation == 'thumb') {
                $output .= '<div>';
            } else {
                $output .= '<div class="sppb-row">';
            }
            $output .= '<div class="' . $column_size1 . '">';
            $output .= '<div class="sppb-slideshow-fullwidth-item-wrapper">';
            $output .= '<div class="sppb-slideshow-fullwidth-item-text">';

            if (($slide_item->title) || ($slide_item->content)) {

                if ($slide_item->title) {
                    $output .= '<h1 class="sppb-fullwidth-title ' . $slide_item->title_animation . '" ' . $title_data_attr . '>' . $slide_item->title . '</h1>';
                    $output .= '<p class="sppb-slidehsow-sub-title ' . $slide_item->subtitle_animation . '" ' . $subtitle_data_attr . '>' . $slide_item->sub_title . '</p>';
                }

                if ($slide_item->content) {
                    $output .= '<p class="details ' . $slide_item->cotent_animation . '" ' . $content_data_attr . '>' . $slide_item->content . '</p>';
                }

                if (($slide_item->button_one_text && $slide_item->button_one_url)) {
                    $btn_class = ($variation == 'corporate') ? 'btn btn-primary' : 'btn btn-link';
                    $output .= '<div class="sppb-fw-slider-button-wrapper ' . $button_animation . '" ' . $button_data_attr . '> ';
                    $output .= '<a target="' . $slide_item->target . '" href="' . $slide_item->button_one_url . '" class="' . $btn_class . '"> <span>' . $slide_item->button_one_text . '</span></a>';

                    $output .= '</div>';
                }
            }

            $output .= '</div>'; // END:: /.sppb-slideshow-fullwidth-item-text
            $output .= '</div>'; // END:: /.sppb-slideshow-fullwidth-item-wrapper
            $output .= '</div>'; // END:: /.$column_size1

            if ($variation != 'thumb') {
                $output .= '<div class="' . $column_size2 . '">';
                $output .= '<div class="slider-img">';
                
                $slide_item_image;
                if(is_object($slide_item->image)){
                    $slide_item_image = $slide_item->image->src;
                } else {
                    $slide_item_image = $slide_item->image;
                }
                if ($slide_item_image)
                    $output .= '<img alt="" class="slide-girl ' . $image_animation . '" src="' . $slide_item_image . '" ' . $image_data_attr . '>';
                $output .= '</div>'; // .slider-img
                $output .= '</div>'; // .col-sm-6
            }

            $output .= '</div>'; // END:: /.row
            $output .= '</div>'; // END:: /.container
            if ($variation == 'advance') {
                $output .= '<div class="image-holder slider-bg1" ' . $bg_image . '></div>';
            }
            $output .= '</div>'; // END:: /.sppb-slideshow-fullwidth-item-bg
            $output .= '</div>'; // END:: /.sppb-slideshow-fullwidth-item
        }

        $output .= '</div>'; //END:: /.sppb-slider-items
        $output .= '</div>'; // END:: /.sppb-slider-item-wrapper
        // has next/previous arrows
        if ($arrows) {
            $output .= '<div class="customNavigation">';
            $output .= '<a class="sppbSlidePrev"><i class="fa fa-angle-left"></i></a>';
            $output .= '<a class="sppbSlideNext"><i class="fa fa-angle-right"></i></a>';
            $output .= '</div>'; // END:: /.customNavigation
        }

        // has dot controls
        if ($controllers) {
            if ($variation == 'thumb') {
                $output .= '<div id="sppb-custom-dots" class="owl-dots">';
                foreach ($this->addon->settings->sp_slideshow_full_item as $key => $thumbItem) {
                    $thumbActive = ($key == 0) ? 'active' : '';
                    $output .= '<div class="owl-dot ' . $thumbActive . '"><i class="fa ' . $thumbItem->thumb_icon . '"></i><h4>' . $thumbItem->thumb_text . '</h4></div>';
                }
                $output .= '</div>'; //.owl-dots
            } else {
                $output .= '<div id="sppb-custom-dots" class="owl-dots">';
                foreach ($this->addon->settings->sp_slideshow_full_item as $key => $thumbItem) {
                    $thumbActive = ($key == 0) ? 'active' : '';
                    $output .= '<div class="owl-dot ' . $thumbActive . '"><span></span></div>';
                }
                $output .= '</div>'; //.owl-dots
            }
        }

        $output .= '</div>'; // /.sppb-slider-wrapper

        return $output;
    }

    public function scripts() {
        $app = JFactory::getApplication();
        $base_path = JURI::base() . '/templates/' . $app->getTemplate() . '/js/';
        return array($base_path . 'owl.carousel.min.js');
    }

    public function js() {
        $addon_id = '#sppb-addon-' . $this->addon->id;
        return 'jQuery(document).ready(function($){"use strict";

    var $spslideowl = $("' . $addon_id . ' .slide-fullwidth");

    var $autoplay   = $spslideowl.attr("data-sppb-slide-ride");
    if ($autoplay == "true") { var $autoplay = true; } else { var $autoplay = false};

    var $controllers   = $spslideowl.attr("data-sppb-slide-controllers");
    if ($controllers == "true") { var $controllers = true; } else { var $controllers = false};


    $spslideowl.owlCarousel({
        margin: 0,
        loop: true,
        video:true,
        autoplay: $autoplay,
        animateIn: "fadeIn",
        animateOut: "fadeOut",
        autoplayHoverPause: true,
        autoplaySpeed: 1500,
        dotsContainer: "#sppb-custom-dots",
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        },
    });


    $("' . $addon_id . ' .sppbSlidePrev").click(function(){
        $spslideowl.trigger("prev.owl.carousel", [400]);
    });

    $("' . $addon_id . ' .sppbSlideNext").click(function(){
        $spslideowl.trigger("next.owl.carousel",[400]);
    });

});';
    }

    public function stylesheets() {
        $app = JFactory::getApplication();
        $base_path = JURI::base() . '/templates/' . $app->getTemplate() . '/css/';
        return array($base_path . 'owl.carousel.css', $base_path . 'owl.theme.css');
    }

    public function css() {
        $addon_id = '#sppb-addon-' . $this->addon->id;
        $addont_styles = '';
        $addont_styles .= (isset($this->addon->settings->background) && $this->addon->settings->background) ? 'background: ' . $this->addon->settings->background . '; ' : '';
        $addont_styles .= (isset($this->addon->settings->color) && $this->addon->settings->color) ? 'color: ' . $this->addon->settings->color . '; ' : '';

        $css = '';
        if ($addont_styles) {
            $css .= $addon_id . ' .sppb-slider-fullwidth-wrapper .sppb-slider-item-wrapper {';
            $css .= $addont_styles;
            $css .= '}';
        }

        return $css;
    }

    public static function getTemplate() {
        $output = '
        <# var variation = (!_.isEmpty(data.variation)) ? data.variation : "simple";#>

        <style type="text/css">
        <# if (variation != "advance") { #>
        <# _.each (data.sp_slideshow_full_item, function(slide_item, item_key) { #>
            #sppb-addon-{{ data.id }} .item-{{ item_key }} .sppb-slide-item-bg{
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
            }
            <# }); #>
        <# } #>

        <# if (variation == "advance") { #>
            <# _.each (data.sp_slideshow_full_item, function(slide_item, item_key) { #>
            #sppb-addon-{{ data.id }} .item-{{ item_key }} .image-holder{
                background-image: url({{ pagebuilder_base + slide_item.bg }});
            }
            <# }); #>
        <# } #>

        </style>
        <#
        var autoplay = (typeof data.autoplay !=="undefined") ? data.autoplay :0;
        var controllers = (typeof data.controllers !=="undefined") ? data.controllers : 0;
        var arrows = (typeof data.arrows !=="undefined") ? data.arrows : 0;
        var class_name = (!_.isEmpty(data.class)) ? data.class : "";

        var slide_autoplay = (autoplay > 0) ? \'data-sppb-slide-ride="true"\' : "";
        var slide_controllers = (controllers >  0) ? \'data-sppb-slidefull-controllers="true"\' : "";

        if (variation == "simple") {
            var column_size_one = "sppb-col-sm-6";
            var column_size_two = "sppb-col-sm-6";
        } else if (variation == "advance") {
            var column_size_one = "sppb-col-md-4 sppb-col-sm-6";
            var column_size_two = "sppb-col-md-8 sppb-col-sm-6";
        } else if (variation == "corporate") {
            var column_size_one = "sppb-col-sm-6 sppb-col-md-7";
            var column_size_two = "sppb-col-sm-6 sppb-col-md-5 slide-img-wrap";
        } else if (variation == "thumb") {
            var column_size_one = "";
            var column_size_two = "";
        }

        #>

        <div class="sppb-slider-wrapper sppb-slider-fullwidth-wrapper owl-theme  varition-{{variation}} {{class_name}}">
        <div class="sppb-slider-item-wrapper">
        <div class="slide-fullwidth owl-carousel" {{slide_controllers}} {{slide_autoplay}}>

        <#
        _.each (data.sp_slideshow_full_item, function(slide_item, item_key) {

            var main_bg = "";
            if((typeof slide_item.bg !== "undefined") && (typeof slide_item.bg.src !== "undefined")){
                main_bg = "background-image: url(" + slide_item.bg.src + ")";
            } else {
                main_bg = "background-image: url(" + slide_item.bg + ")";;
            }

            var slide_image = "";
            if((typeof slide_item.image !== "undefined") && (typeof slide_item.image.src !== "undefined")){
                slide_image = "src=" + slide_item.image.src + " ";
            } else {
                slide_image = "src=" + slide_item.image + " ";
            }

            var title_animation = "";
            if (!_.isEmpty(slide_item.title_animation)) {
                title_animation += \' sppb-wow \' + slide_item.title_animation;
            }

            var title_data_attr = "";
            if (!_.isEmpty(slide_item.title_animationduration)){
                title_data_attr += \' data-sppb-wow-duration="\' + slide_item.title_animationduration + \'ms"\';
            }
            if (!_.isEmpty(slide_item.title_animationdelay)){
                title_data_attr += \' data-sppb-wow-delay="\' + slide_item.title_animationdelay + \'ms"\';
            }

            var subtitle_animation = "";
            if (!_.isEmpty(slide_item.subtitle_animation)) {
                subtitle_animation += \' sppb-wow \' + slide_item.subtitle_animation;
            }
            var subtitle_data_attr = "";
            if (!_.isEmpty(slide_item.subtitle_animationduration)){
                subtitle_data_attr += \' data-sppb-wow-duration="\' + slide_item.subtitle_animationduration + \'ms"\';
            }
            if (!_.isEmpty(slide_item.subtitle_animationdelay)){
                subtitle_data_attr += \' data-sppb-wow-delay="\' + slide_item.subtitle_animationdelay + \'ms"\';
            }

            var image_animation = "";
            if (!_.isEmpty(slide_item.image_animation)) {
                image_animation += \' sppb-wow \' + slide_item.image_animation;
            }

            var image_data_attr = "";
            if (!_.isEmpty(slide_item.image_animationduration)){
                image_data_attr += \' data-sppb-wow-duration="\' + slide_item.image_animationduration + \'ms"\';
            }
            if (!_.isEmpty(slide_item.cotent_animationdelay)){
                image_data_attr += \' data-sppb-wow-delay="\' + slide_item.cotent_animationdelay + \'ms"\';
            }

            var cotent_animation = "";
            if (!_.isEmpty(slide_item.cotent_animation)) {
                cotent_animation += \' sppb-wow \' + slide_item.cotent_animation;
            }

            var content_data_attr = "";
            if (!_.isEmpty(slide_item.cotent_animationduration)){
                content_data_attr += \' data-sppb-wow-duration="\' + slide_item.cotent_animationduration + \'ms"\';
            }
            if (!_.isEmpty(slide_item.cotent_animationdelay)){
                content_data_attr += \' data-sppb-wow-delay="\' + slide_item.cotent_animationdelay + \'ms"\';
            }

            var button_animation = "";
            if (!_.isEmpty(slide_item.button_animation)) {
                button_animation += \' sppb-wow \' + slide_item.button_animation;
            }

            var button_data_attr = "";
            if (!_.isEmpty(slide_item.button_animationduration)){
                button_data_attr += \' data-sppb-wow-duration="\' + slide_item.button_animationduration + \'ms"\';
            }
            if (!_.isEmpty(slide_item.button_animationdelay)){
                button_data_attr += \' data-sppb-wow-delay="\' + slide_item.button_animationdelay + \'ms"\';
            }

            var button_one_before_icon = (!_.isEmpty(slide_item.button_one_before_icon)) ? \'<i class="fa \' + slide_item.button_one_before_icon + \'"></i>\' : "";
        #>
            <div class="sppb-slideshow-fullwidth-item item-{{item_key}}">
        <#
            var variation = (!_.isEmpty(data.variation)) ? data.variation : "simple";
            if (variation != "advance") { #>
                <div class="sppb-slide-item-bg" style="{{main_bg}}">
            <# } else { #>
                <div class="sppb-slide-item-bg" style="{{main_bg}}">
            <# } #>
            <div class="container">
            <# if (variation == "thumb") { #>
                <div>
            <# } else { #>
                <div class="sppb-row">
            <# } #>
            <div class="{{column_size_one}}">
            <div class="sppb-slideshow-fullwidth-item-wrapper">
            <div class="sppb-slideshow-fullwidth-item-text">

            <# if ((!_.isEmpty(slide_item.title)) || (!_.isEmpty(slide_item.content))) {

                if (!_.isEmpty(slide_item.title)) { #>
                    <h1 class="sppb-fullwidth-title {{title_animation}}" {{title_data_attr}}>{{{slide_item.title}}}</h1>
                    <p class="sppb-slidehsow-sub-title {{subtitle_animation}}" {{subtitle_data_attr}}>{{{slide_item.sub_title}}}</p>
                <# }

                if (!_.isEmpty(slide_item.content)) { #>
                    <p class="details {{cotent_animation}}" {{content_data_attr}}>{{{slide_item.content}}}</p>
                <# }

                if ((!_.isEmpty(slide_item.button_one_text) && !_.isEmpty(slide_item.button_one_url))) {
                    var btn_class = (variation == "corporate") ? \'btn btn-primary\' : \'btn btn-link\';  #>
                    <div class="sppb-fw-slider-button-wrapper {{button_animation}}" {{button_data_attr}}>
                    <a target="{{slide_item.target}}" href="{{slide_item.button_one_url}}" class="{{btn_class}}"> {{{button_one_before_icon}}} <span>{{slide_item.button_one_text}}</span></a>
                    </div>
                <# } #>
            <# } #>

            </div>
            </div>
            </div>

            <# if (variation != "thumb") { #>
                <div class="{{column_size_two}}">
                <div class="slider-img">

                <# if (!_.isEmpty(slide_item.image)) #>
                    <img alt="" class="slide-girl {{image_animation}}" {{slide_image}} {{image_data_attr}}>
                </div>
                </div>
            <# } #>

            </div>
            </div>
            <# if (variation == "advance") { #>
                <div class="image-holder slider-bg1"></div>
            <# } #>
            </div>
            </div>
        <# }) #>

        </div>
        </div>

        <# if (arrows > 0) { #>
            <div class="customNavigation">
            <a class="sppbSlidePrev"><i class="fa fa-angle-left"></i></a>
            <a class="sppbSlideNext"><i class="fa fa-angle-right"></i></a>
            </div>
        <# } #>

        <# if (controllers > 0) {
            if (variation == "thumb") { #>
                <div id="sppb-custom-dots" class="owl-dots">
                <# _.each (data.sp_slideshow_full_item, function(thumbItem, key) {
                    var thumbActive = (key == 0) ? "active" : ""; #>
                    <div class="owl-dot {{thumbActive}}"><i class="fa {{thumbItem.thumb_icon}}"></i><h4>{{thumbItem.thumb_text}}</h4></div>
                <# }); #>
                </div>
            <# } else { #>
                <div id="sppb-custom-dots" class="owl-dots">
                <# _.each (data.sp_slideshow_full_item, function(thumbItem, key) {
                    var thumbActive = (key == 0) ? "active" : ""; #>
                    <div class="owl-dot {{thumbActive}}"><span></span></div>
                <# }); #>
                </div>
            <# }
        } #>

        </div>
        ';

        return $output;
    }

}
