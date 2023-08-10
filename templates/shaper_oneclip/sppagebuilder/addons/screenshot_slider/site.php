<?php

/**
 * @package Onclip
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
//no direct accees
defined('_JEXEC') or die('resticted aceess');

class SppagebuilderAddonScreenshot_slider extends SppagebuilderAddons {

    public function render() {

        $title = (isset($this->addon->settings->sp_screenshot_slider_item->title) && $this->addon->settings->sp_screenshot_slider_item->title) ? $this->addon->settings->sp_screenshot_slider_item->title : '';
        $class = (isset($this->addon->settings->class) && $this->addon->settings->class) ? $this->addon->settings->class : '';

        $output = '';
        $output .= '<div class="sppb-addon sppb-addon-screenshot-slider ' . $class . '">';

        if ($title) {
            $output .= '<div class=" sppb-addon-title-wrapper">';
            $output .= '<h3 class="sppb-addon-title">' . $title . '</h3>';
            $output .= '</div>';
        }

        //$output .= '<div class="phone-mockup"> <img src="templates/shaper_oneclip/images/mob-frame.png" /> </div>';

        $output .= '<div class="screenshot-slider owl-carousel owl-theme">';
        foreach ($this->addon->settings->sp_screenshot_slider_item as $key => $slide_item) {
            $main_image;
			if(is_object($slide_item->image)){
				$main_image = $slide_item->image->src;
			} else {
				$main_image = $slide_item->image;
			}
            $output .= '<div class="item">';
            $output .= '<img alt="' . $title . '" src="' . $main_image . '">';
            $output .= '</div>';
        }

        $output .= '</div>'; // .owl-carousel .owl-theme

        $output .= '</div>'; // .sppb-addon-screenshot-slider

        return $output;
    }

    public function scripts() {
        $app = JFactory::getApplication();
        $base_path = JURI::base() . '/templates/' . $app->getTemplate() . '/js/';
        return array($base_path . 'owl.carousel.min.js');
    }

    public function js() {
        return 'jQuery(document).ready(function($){"use strict";
            if ($(".screenshot-slider").length) {
        
        $(".screenshot-slider").owlCarousel({
            stagePadding: 100,
            loop: true,
            center: true,
            margin: 30,
            nav: true,
            autoWidth: false,
            autoHeight: false,
            navText: [\'<span class="fa fa-caret-left"></span>\', \'<span class="fa fa-caret-right"></span>\'],
            autoplay: true,
            responsive: {
                0: {
                    items: 1,
                    margin: 15,
                    stagePadding: 30
                },
                480: {
                    items: 1,
                    margin: 30,
                    stagePadding: 110
                },
                600: {
                    items: 3
                },
                768: {
                    items: 3,
                    margin: 30,
                    stagePadding: 0
                },
                992: {
                    items: 3,
                    margin: 30,
                    stagePadding: 95
                },
                1199: {
                    items: 6
                }
            }
        });
    }
    });';
    }

    public function stylesheets() {
        $app = JFactory::getApplication();
        $base_path = JURI::base() . '/templates/' . $app->getTemplate() . '/css/';
        return array($base_path . 'owl.carousel.min.css', $base_path . 'owl.theme.css');
    }

    public static function getTemplate(){
        $output ='
        <# var title = (!_.isEmpty(data.title)) ? data.title : ""; #>
        <div class="sppb-addon sppb-addon-screenshot-slider {{data.class}}">

        <# if (!_.isEmpty(title)) { #>
            <div class=" sppb-addon-title-wrapper">
            <h3 class="sppb-addon-title">{{{title}}}</h3>
            </div>
        <# } #>

        <div class="screenshot-slider owl-carousel owl-theme">
        <# _.each (data.sp_screenshot_slider_item, function(slide_item) { #>
            <#
            var main_image = "";
            if((typeof slide_item.image !== "undefined") && (typeof slide_item.image.src !== "undefined")){
                main_image = "src=" + slide_item.image.src + " ";
            } else {
                main_image = "src=" + slide_item.image + " ";
            }
            #>
            <div class="item">
            <img alt="{{{title}}}" {{main_image}}>
            </div>
        <# }); #>

        </div>

        </div>
        ';
        return $output;
    }

}
