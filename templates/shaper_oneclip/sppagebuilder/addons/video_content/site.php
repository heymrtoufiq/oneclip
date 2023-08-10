<?php

/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
//no direct accees
defined('_JEXEC') or die('restricted aceess');

class SppagebuilderAddonVideo_content extends SppagebuilderAddons {

    public function render() {
        $title = (isset($this->addon->settings->title) && $this->addon->settings->title) ? $this->addon->settings->title : '';
        $heading_selector = (isset($this->addon->settings->heading_selector) && $this->addon->settings->heading_selector) ? $this->addon->settings->heading_selector : 'h3';
        $class = (isset($this->addon->settings->class) && $this->addon->settings->class) ? $this->addon->settings->class : '';
        $btn_attrs = (isset($this->addon->settings->button_type) && $this->addon->settings->button_type) ? ' sppb-btn-' . $this->addon->settings->button_type : '';
        $btn_attrs .= (isset($this->addon->settings->button_size) && $this->addon->settings->button_size) ? ' sppb-btn-' . $this->addon->settings->button_size : '';
        $button_text = (isset($this->addon->settings->button_text) && $this->addon->settings->button_text) ? $this->addon->settings->button_text : '';
        $button_url = (isset($this->addon->settings->button_url) && $this->addon->settings->button_url) ? $this->addon->settings->button_url : '';

        $variation = (isset($this->addon->settings->variation) && $this->addon->settings->variation) ? $this->addon->settings->variation : 'simple';
        $modal_unique_id = (isset($this->addon->settings->modal_unique_id) && $this->addon->settings->modal_unique_id) ? $this->addon->settings->modal_unique_id : '';
        $modal_content_video_url = (isset($this->addon->settings->modal_content_video_url) && $this->addon->settings->modal_content_video_url) ? $this->addon->settings->modal_content_video_url : '';
        $main_image;
		if(is_object($this->addon->settings->image)){
			$main_image = $this->addon->settings->image->src;
		} else {
			$main_image = $this->addon->settings->image;
		}
        $image = (isset($main_image) && $main_image) ? $main_image : '';
        $image_alignment = (isset($this->addon->settings->image_alignment) && $this->addon->settings->image_alignment) ? $this->addon->settings->image_alignment : '';
        $name = (isset($this->addon->settings->name) && $this->addon->settings->name) ? $this->addon->settings->name : '';
        $text = (isset($this->addon->settings->text) && $this->addon->settings->text) ? $this->addon->settings->text : '';

        if ($image_alignment == 'left' && $variation == "simple") {
            $eontent_class = ' <div class="sppb-col-sm-6"></div>';
        } elseif ($image_alignment == 'left' && $variation == "advanced") {
            $eontent_class = ' <div class="sppb-col-sm-4"></div>';
        } else {
            $eontent_class = '';
        }

        if ($image || $title) {

            $output = '<div class="sppb-addon sppb-addon-image-content sppb-addon-video-content aligment-' . $image_alignment . ' clearfix ' . $class . '' . $variation . '">';

            $bgImage = ($image) ? $image : '';
            //Image
            $output .= '<div class="sppb-image-holder" style="background-image: url(' . $bgImage . ');" class="sppb-image-holder">';
            $output .= '<div class="sppb-video-icon">';
            $output .= '<a class="" href="' . $modal_content_video_url . '" id="' . $modal_unique_id . '" alt=""><i class="fa fa-play-circle-o"></i></a>';
            $output .= '</div>'; //video-icon
            $output .= '</div>';

            //Content
            $output .= '<div class="sppb-container">';
            $output .= '<div class="sppb-row">';

            if ($variation == "advanced") {
                $output .= $eontent_class;
                $output .= '<div class="sppb-col-sm-8">';
                $output .= '<div class="sppb-content-holder">';
            } else {
                $output .= $eontent_class;
                $output .= '<div class="sppb-col-sm-6">';
                $output .= '<div class="sppb-content-holder">';
            }


            //icon
            if ($name) {
                $output .= '<div class="sppb-icon">';
                $output .= '<span style="display:inline-block;">';
                $output .= '<i class="fa ' . $name . '"></i>';
                $output .= '</span>';
                $output .= '</div>';
            }


            $output .= '<' . $heading_selector . ' class="sppb-addon-title sppb-image-content-title">' . $title . '</' . $heading_selector . '>';

            if ($text)
                $output .= '<p class="sppb-image-content-text">' . $text . '</p>';

            if ($button_text) {
                $output .= '<a class="sppb-btn ' . $btn_attrs . '" href="' .$button_url . '">' . $button_text . '</a>';
            }


            $output .= '</div>';
            $output .= '</div>';
            $output .= '</div>';
            $output .= '</div>';

            $output .= '</div>';

            return $output;
        }

        return false;
    }

    public function scripts() {
        return array(JURI::base() . '/components/com_sppagebuilder/assets/js/jquery.prettyPhoto.js');
    }

    public function js() {
        $modal_unique_id = (isset($this->addon->settings->modal_unique_id) && $this->addon->settings->modal_unique_id) ? $this->addon->settings->modal_unique_id : 'mymodal';
        $modal_popup_width = (isset($this->addon->settings->modal_popup_width) && $this->addon->settings->modal_popup_width) ? $this->addon->settings->modal_popup_width : '';
        $modal_popup_height = (isset($this->addon->settings->modal_popup_height) && $this->addon->settings->modal_popup_height) ? $this->addon->settings->modal_popup_height : '';

        return('jQuery(function($){
		$(document).ready(function(){
    		$("#' . $modal_unique_id . '").prettyPhoto({
    			social_tools: false,
    			theme: "sppb_prettyphoto",
				horizontal_padding: 20,
				allow_resize: true,
				default_width: ' . $modal_popup_width . ',
				default_height: ' . $modal_popup_height . '
    		});
  		});
	});');
    }

    public function stylesheets() {
        $base_path = JURI::base() . '/components/com_sppagebuilder/assets/css/';
        return array($base_path . 'prettyPhoto.css', $base_path . 'sppb-prettyphoto.css');
    }

    public function css() {

        $addon_id = '#sppb-addon-' . $this->addon->id;
        $style = (isset($this->addon->settings->style) && $this->addon->settings->style) ? $this->addon->settings->style : '';
        $font_style = (isset($this->addon->settings->size) && $this->addon->settings->size) ? 'font-size:' . (int) $this->addon->settings->size . 'px;width:' . (int) $this->addon->settings->size . 'px;height:' . (int) $this->addon->settings->size . 'px;line-height:' . (int) $this->addon->settings->size . 'px;' : '';

        $css = '';
        if ($style) {
            $css .= $addon_id . ' .sppb-icon span {';
            $css .= $style;
            $css .= '}';
        }
        if ($font_style) {
            $css .= $addon_id . ' .sppb-icon span i {';
            $css .= $font_style;
            $css .= '}';
        }
        $layout_path = JPATH_ROOT . '/components/com_sppagebuilder/layouts';


        $css_path = new JLayoutFile('addon.css.button', $layout_path);

        $options = new stdClass;
        $options->button_type = (isset($this->addon->settings->type) && $this->addon->settings->type) ? $this->addon->settings->type : '';
        $options->button_appearance = (isset($this->addon->settings->appearance) && $this->addon->settings->appearance) ? $this->addon->settings->appearance : '';
        $options->button_color = (isset($this->addon->settings->color) && $this->addon->settings->color) ? $this->addon->settings->color : '';
        $options->button_color_hover = (isset($this->addon->settings->color_hover) && $this->addon->settings->color_hover) ? $this->addon->settings->color_hover : '';
        $options->button_background_color = (isset($this->addon->settings->background_color) && $this->addon->settings->background_color) ? $this->addon->settings->background_color : '';
        $options->button_background_color_hover = (isset($this->addon->settings->background_color_hover) && $this->addon->settings->background_color_hover) ? $this->addon->settings->background_color_hover : '';
        $options->button_fontstyle = (isset($this->addon->settings->fontstyle) && $this->addon->settings->fontstyle) ? $this->addon->settings->fontstyle : '';
        $options->button_letterspace = (isset($this->addon->settings->letterspace) && $this->addon->settings->letterspace) ? $this->addon->settings->letterspace : '';

        return $css.=$css_path->render(array('addon_id' => $addon_id, 'options' => $options, 'id' => 'btn-' . $this->addon->id));
    }

    public static function getTemplate(){
        $output = '
        <style type="text/css">
            #sppb-addon-{{ data.id }} .sppb-image-holder{
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center center;
            }

            #sppb-addon-{{ data.id }} .sppb-icon span i{
                font-size: {{data.size}}px;
                line-height: {{data.size}}px;
            }
        </style>
        <#
        var title = (!_.isEmpty(data.title)) ? data.title : "";
        var variation = (!_.isEmpty(data.variation)) ? data.variation : "simple";
        var image = (!_.isEmpty(data.image)) ? data.image : "";
        var image_alignment = (!_.isEmpty(data.image_alignment)) ? data.image_alignment : "";
        var icon = (!_.isEmpty(data.button_icon)) ? data.button_icon : "";
        var icon_position = (!_.isEmpty(data.icon_position)) ? data.icon_position : "left";
        var btn_attrs = (!_.isEmpty(data.button_type)) ? \' sppb-btn-\' + data.button_type : "";
            btn_attrs += (!_.isEmpty(data.button_size)) ? \' sppb-btn-\' + data.button_size : "";
        var button_text = (!_.isEmpty(data.button_text)) ? data.button_text : "";
        var button_url = (!_.isEmpty(data.button_url)) ? data.button_url : "";
        
        var attribs = (!_.isEmpty(data.target)) ? \' target="\' + data.target + \'"\' : "";
        attribs += (!_.isEmpty(data.button_url)) ? \' href="\' + data.button_url + \'"\' : "";
        attribs += \' id="btn-\' + data.id + \'"\';
        
        var main_bg = "";
        if((typeof data.image !== "undefined") && (typeof data.image.src !== "undefined")){
            main_bg = "background-image: url(" + data.image.src + ")";
        } else {
            main_bg = "background-image: url(" + data.image + ")";;
        }

        var eontent_class = "";
        if (image_alignment == "left" && variation == "simple") {
            eontent_class += \'<div class="sppb-col-sm-6"></div>\';
        } else if (image_alignment == "left" && variation == "advanced") {
            eontent_class += \'<div class="sppb-col-sm-4"></div>\';
        } else {
            eontent_class += "";
        }

        if (!_.isEmpty(image) && !_.isEmpty(title)) {
        #>

        <div class="sppb-addon sppb-addon-image-content sppb-addon-video-content aligment-{{image_alignment}} clearfix {{data.class}} {{variation}}">

        <div class="sppb-image-holder" class="sppb-image-holder" style="{{main_bg}}">
        <div class="sppb-video-icon">
        <a class="" href="{{data.modal_content_video_url}}" id="{{data.modal_unique_id}}" alt=""><i class="fa fa-play-circle-o"></i></a>
        </div>
        </div>

        <div class="sppb-container">
        <div class="sppb-row">

        <# if (variation == "advanced") { #>
            {{{eontent_class}}}
            <div class="sppb-col-sm-8">
            <div class="sppb-content-holder">
        <# } else { #>
            {{{eontent_class}}}
            <div class="sppb-col-sm-6">
            <div class="sppb-content-holder">
        <# } #>

        <# if (!_.isEmpty(data.name)) { #>
            <div class="sppb-icon">
            <span style="display:inline-block;">
            <i class="fa {{data.name}}"></i>
            </span>
            </div>
        <# } #>


        <{{data.heading_selector}} class="sppb-addon-title sppb-image-content-title">{{{title}}}</{{data.heading_selector}}>
        <# if (!_.isEmpty(data.text)){ #>
            <p class="sppb-image-content-text">{{{data.text}}}</p>
        <# } #>
        
        <#
        if (button_text) { #>
            <a class="sppb-btn {{btn_attrs}}" href="{{button_url}}">{{{button_text}}}</a>
        <# } #>


        </div>
        </div>
        </div>
        </div>

        </div>
        </div>
        <# } #>
        ';

        return $output;
    }
}
