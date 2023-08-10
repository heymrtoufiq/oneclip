<?php
/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/
//no direct accees
defined ('_JEXEC') or die ('restricted aceess');

class SppagebuilderAddonAnimated_number extends SppagebuilderAddons{

	public function render() {

		$number = (isset($this->addon->settings->number) && $this->addon->settings->number) ? $this->addon->settings->number : 0;
		$duration = (isset($this->addon->settings->duration) && $this->addon->settings->duration) ? $this->addon->settings->duration : 0;
		$counter_title = (isset($this->addon->settings->counter_title) && $this->addon->settings->counter_title) ? $this->addon->settings->counter_title : '';
		$alignment = (isset($this->addon->settings->alignment) && $this->addon->settings->alignment) ? $this->addon->settings->alignment : '';
		$class = (isset($this->addon->settings->class) && $this->addon->settings->class) ? $this->addon->settings->class : '';

		$variation = (isset($this->addon->settings->variation) && $this->addon->settings->variation) ? $this->addon->settings->variation : '';
		$name = (isset($this->addon->settings->name) && $this->addon->settings->name) ? $this->addon->settings->name : '';
		$size = (isset($this->addon->settings->size) && $this->addon->settings->size) ? $this->addon->settings->size : '';
		$icon_color = (isset($this->addon->settings->icon_color) && $this->addon->settings->icon_color) ? $this->addon->settings->icon_color : '';
		$pricing_details = (isset($this->addon->settings->pricing_details) && $this->addon->settings->pricing_details) ? $this->addon->settings->pricing_details : '';

		$output  = '<div class="sppb-addon sppb-addon-animated-number '. $alignment . ' ' . $class . ' ' . $variation . '">';
		if ($variation == 'simple') {
			$output .= '<div class="sppb-addon-content">';
			if($counter_title) {
				$output .= '<div class="sppb-animated-number-title">' . $counter_title . '</div>';
			}
			$output .= '<div class="sppb-animated-number" data-digit="'. $number .'" data-duration="' . $duration . '">0</div>';
			$output .= '</div>';
		} else {
			if ($name) {
				if ($size) {
                    $icon_size = 'font-size:' . (int) $size . 'px;width:' . (int) $size . 'px;height:' . (int) $size . 'px;line-height:' . (int) $size . 'px;';
				}
				$output .= '<div class="sppb-icon">';
                $output .= '<span style="display:inline-block;">';
                $output .= '<i class="fa ' . $name . '" style="' . $icon_size . '; color:' . $icon_color . ';"></i>';
                $output .= '</span>';
                $output .= '</div>';
			}
			
			$output .= '<div class="sppb-addon-content">';
            $output .= '<div class="sppb-animated-number" data-digit="' . $number . '" data-duration="' . $duration . '">0</div>';
            if ($counter_title) {
                $output .= '<div class="sppb-animated-number-title">' . $counter_title . '</div>';
            }
            $output .= '</div>';
            if ($pricing_details) {
                $output .= '<p class="sppb-animated-number-details">' . $pricing_details . '</p>';
			}
		}
		$output .= '</div>';

		return $output;
	}

	public function css() {
		$addon_id = '#sppb-addon-' . $this->addon->id;
		$number_style  = (isset($this->addon->settings->color) && $this->addon->settings->color) ? "\tcolor: " . $this->addon->settings->color  . ";\n" : '';
		$number_style_sm  = '';
		$number_style_xs  = '';

		$number_style .= (isset($this->addon->settings->font_size) && $this->addon->settings->font_size) ? 'font-size:' . (int) $this->addon->settings->font_size . 'px;line-height:' . (int) $this->addon->settings->font_size . 'px;' : '';
		$number_style_sm .= (isset($this->addon->settings->font_size_sm) && $this->addon->settings->font_size_sm) ? 'font-size:' . (int) $this->addon->settings->font_size_sm . 'px;line-height:' . (int) $this->addon->settings->font_size_sm . 'px;' : '';
		$number_style_xs .= (isset($this->addon->settings->font_size_xs) && $this->addon->settings->font_size_xs) ? 'font-size:' . (int) $this->addon->settings->font_size_xs . 'px;line-height:' . (int) $this->addon->settings->font_size_xs . 'px;' : '';

		$text_style = (isset($this->addon->settings->counter_color) && $this->addon->settings->counter_color) ? "\tcolor: " . $this->addon->settings->counter_color  . ";\n" : '';
		$text_style_sm = '';
		$text_style_xs = '';

		$text_style .= (isset($this->addon->settings->title_font_size) && $this->addon->settings->title_font_size) ? 'font-size:' . (int) $this->addon->settings->title_font_size . 'px;line-height:' . (int) $this->addon->settings->title_font_size . 'px;': '';
		$text_style_sm .= (isset($this->addon->settings->title_font_size_sm) && $this->addon->settings->title_font_size_sm) ? 'font-size:' . (int) $this->addon->settings->title_font_size_sm . 'px;line-height:' . (int) $this->addon->settings->title_font_size_sm . 'px;': '';
		$text_style_xs .= (isset($this->addon->settings->title_font_size_xs) && $this->addon->settings->title_font_size_xs) ? 'font-size:' . (int) $this->addon->settings->title_font_size_xs . 'px;line-height:' . (int) $this->addon->settings->title_font_size_xs . 'px;': '';

		//added
        $icon_style = (isset($this->addon->settings->background) && $this->addon->settings->background) ? 'background-color:' . $this->addon->settings->background . ';' : '';
        $icon_style .= (isset($this->addon->settings->border_color) && $this->addon->settings->border_color) ? 'border-style:solid; border-color:' . $this->addon->settings->border_color . ';': '';
        $icon_style .= (isset($this->addon->settings->border_width) && $this->addon->settings->border_width) ? 'border-width:' . $this->addon->settings->border_width . 'px;' : '';
		$icon_style .= (isset($this->addon->settings->border_radius) && $this->addon->settings->border_radius) ? 'border-radius:' . $this->addon->settings->border_radius . 'px;' : '';
		
		$icon_font_style = (isset($this->addon->settings->size) && $this->addon->settings->size) ? 'font-size:' . (int) $this->addon->settings->size . 'px;width:' . (int) $this->addon->settings->size . 'px;height:' . (int) $this->addon->settings->size . 'px;line-height:' . (int) $this->addon->settings->size . 'px;' : '';

		$css = '';

		if($number_style) {
			$css .= $addon_id . ' .sppb-animated-number {';
			$css .= $number_style;
			$css .= '}';
		}

		if($text_style) {
			$css .= $addon_id . ' .sppb-animated-number-title {';
			$css .= $text_style;
			$css .= '}';
		}
		//addded
        if ($icon_style) {
            $css .= $addon_id . ' .sppb-icon span {';
            $css .= $icon_style;
            $css .= '}';
        }
        if ($icon_font_style) {
            $css .= $addon_id . ' .sppb-icon span i {';
            $css .= $icon_font_style;
            $css .= '}';
		}
		
		$css .= '@media (min-width: 768px) and (max-width: 991px) {';
			if($number_style_sm) {
				$css .= $addon_id . ' .sppb-animated-number {';
					$css .= $number_style_sm;
				$css .= '}';
			}

			if($text_style_sm) {
				$css .= $addon_id . ' .sppb-animated-number-title {';
					$css .= $text_style_sm;
				$css .= '}';
			}
		$css .= '}';

		$css .= '@media (max-width: 767px) {';
			if($number_style_xs) {
				$css .= $addon_id . ' .sppb-animated-number {';
					$css .= $number_style_xs;
				$css .= '}';
			}

			if($text_style_xs) {
				$css .= $addon_id . ' .sppb-animated-number-title {';
					$css .= $text_style_xs;
				$css .= '}';
			}
		$css .= '}';

		return $css;
	}

	public static function getTemplate(){
		$output = '
		<#
			var addonId = "sppb-addon-"+data.id;
		#>
		<style type="text/css">
			#{{ addonId }} .sppb-animated-number{
				color: {{ data.color }};
				<# if(_.isObject(data.font_size)){ #>
					font-size: {{ data.font_size.md }}px;
					line-height: {{ data.font_size.md }}px;
				<# } else { #>
					font-size: {{ data.font_size }}px;
					line-height: {{ data.font_size }}px;
				<# } #>
			}
			#{{ addonId }} .sppb-animated-number-title{
				color: {{ data.counter_color }};
				<# if(_.isObject(data.title_font_size)){ #>
					font-size: {{ data.title_font_size.md }}px;
					line-height: {{ data.title_font_size.md }}px;
				<# } else { #>
					font-size: {{ data.title_font_size }}px;
					line-height: {{ data.title_font_size }}px;
				<# } #>
			}
			@media (min-width: 768px) and (max-width: 991px) {
				#{{ addonId }} .sppb-animated-number{
					<# if(_.isObject(data.font_size)){ #>
						font-size: {{ data.font_size.sm }}px;
						line-height: {{ data.font_size.sm }}px;
					<# } #>
				}
				#{{ addonId }} .sppb-animated-number-title{
					<# if(_.isObject(data.title_font_size)){ #>
						font-size: {{ data.title_font_size.sm }}px;
						line-height: {{ data.title_font_size.sm }}px;
					<# } #>
				}
			}
			@media (max-width: 767px) {
				#{{ addonId }} .sppb-animated-number{
					<# if(_.isObject(data.font_size)){ #>
						font-size: {{ data.font_size.xs }}px;
						line-height: {{ data.font_size.xs }}px;
					<# } #>
				}
				#{{ addonId }} .sppb-animated-number-title{
					<# if(_.isObject(data.title_font_size)){ #>
						font-size: {{ data.title_font_size.xs }}px;
						line-height: {{ data.title_font_size.xs }}px;
					<# } #>
				}
			}
		</style>
		<#
		var variation = (!_.isEmpty(data.variation)) ? data.variation : "";
		var name = (!_.isEmpty(data.name)) ? data.name : "";
		var size = (!_.isEmpty(data.size)) ? data.size : "";
		var pricing_details = (!_.isEmpty(data.pricing_details)) ? data.pricing_details : "";
		var bd_style = "";
		if(!_.isEmpty(data.border_color)){
			bd_style += \';border-style:solid; border-color:\' + data.border_color + \'; border-width:\' + data.border_width + \'px; border-radius:\' + data.border_radius + \'px;\';
		}
		#>
		<div class="sppb-addon sppb-addon-animated-number {{data.alignment}} {{data.class}} {{variation}}">
		<# if (variation == "simple") { #>
			<div class="sppb-addon-content">
			<# if(data.counter_title) { #>
				<div class="sppb-animated-number-title">{{{data.counter_title}}}</div>
			<# } #>
			<div class="sppb-animated-number" data-digit="{{data.number}}" data-duration="{{data.duration}}">0</div>
			</div>
		<# } else {
			if (!_.isEmpty(name)) {
				if (!_.isEmpty(size)) {
                    var icon_size = \'font-size:\' + data.size + \'px;width:\' + data.size + \'px;height:\' + data.size + \'px;line-height:\' + data.size + \'px;\';
				} #>
				<div class="sppb-icon">
				<span style="display:inline-block; background-color:{{data.background}}; {{bd_style}}">
                <i class="fa {{name}}" style="{{icon_size}};color:{{data.icon_color}} "></i>
                </span>
                </div>
			<# } #>
			
			<div class="sppb-addon-content">
            <div class="sppb-animated-number" data-digit="{{data.number}}" data-duration="{{data.duration}}">0</div>
            <# if (!_.isEmpty(data.counter_title)) { #>
                <div class="sppb-animated-number-title">{{data.counter_title}}</div>
            <# } #>
            </div>
            <# if (!_.isEmpty(data.pricing_details)) { #>
                <p class="sppb-animated-number-details">{{{data.pricing_details}}}</p>
			<# } #>
		<# } #>
		</div>
		';

		return $output;
	}
}
