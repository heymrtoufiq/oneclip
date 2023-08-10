<?php

/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
//no direct accees
defined('_JEXEC') or die('restricted aceess');

SpAddonsConfig::addonConfig(
        array(
            'type' => 'content',
            'addon_name' => 'sp_video_content',
            'title' => JText::_('COM_SPPAGEBUILDER_ADDON_VIDEO_CONTENT'),
            'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_VIDEO_CONTENT_DESC'),
            'inline'     => [
                'contenteditable' => true,
                'buttons'         => [
                ],
            ],
            'attr' => array(
                'general' => array(
                    'admin_label' => array(
                        'type' => 'text',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_ADMIN_LABEL_DESC'),
                        'std' => ''
                    ),
                    'variation' => array(
                        'type' => 'select',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_SP_VARIATION'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_SP_VARIATION_DESC'),
                        'values' => array(
                            'simple' => JText::_('COM_SPPAGEBUILDER_ADDON_SP_VARIATION_SIMPLE'),
                            'advanced' => JText::_('COM_SPPAGEBUILDER_ADDON_SP_VARIATION_ADVANCED'),
                        ),
                        'std' => 'simple',
                    ),
                    'separator1' => array(
                        'type' => 'separator',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_VIDEO_LINK')
                    ),
                    'modal_unique_id' => array(
                        'type' => 'text',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_MODAL_UNIQUE_ID'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_MODAL_UNIQUE_ID_DESC'),
                        'std' => 'mymodal'
                    ),
                    'modal_content_video_url' => array(
                        'type' => 'text',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_MODAL_VIDEO'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_MODAL_VIDEO_DESC')
                    ),
                    'modal_popup_width' => array(
                        'type' => 'number',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_MODAL_POPUP_WIDTH'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_MODAL_POPUP_WIDTH_DESC'),
                        'std' => '760'
                    ),
                    'modal_popup_height' => array(
                        'type' => 'number',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_MODAL_POPUP_HEIGHT'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_MODAL_POPUP_HEIGHT_DESC'),
                        'std' => '440'
                    ),
                    'separator2' => array(
                        'type' => 'separator',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_VIDEO_CONTENT_IMAGE_TITLE')
                    ),
                    'image' => array(
                        'type' => 'media',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_VIDEO_CONTENT_IMAGE'),
                        'std' => [
                            'src' => 'https://sppagebuilder.com/addons/js_slideshow/slideshow-default-bg.jpg'
                        ]
                    ),
                    'image_alignment' => array(
                        'type' => 'select',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_VIDEO_CONTENT_IMAGE_ALIGNMENT'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_VIDEO_CONTENT_IMAGE_ALIGNMENT_DESC'),
                        'values' => array(
                            'left' => JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_LEFT'),
                            'right' => JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_RIGHT'),
                        ),
                        'std' => 'left',
                    ),
                    'separator3' => array(
                        'type' => 'separator',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_VIDEO_ICON')
                    ),
                    'name' => array(
                        'type' => 'icon',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_NAME'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_NAME_DESC'),
                        'std' => ''
                    ),
                    'size' => array(
                        'type' => 'number',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_SIZE'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ICON_SIZE_DESC'),
                        'placeholder' => 36,
                        'std' => 36,
                    ),
                    'color' => array(
                        'type' => 'color',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_COLOR'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_COLOR_DESC'),
                    ),
                    'separator4' => array(
                        'type' => 'separator',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_VIDEO_CONTENT_CONTENT')
                    ),
                    'title' => array(
                        'type' => 'text',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_VIDEO_CONTENT_TITLE'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_VIDEO_CONTENT_TITLE_DESC'),
                        'std' => 'Video Title',
                    ),
                    'heading_selector' => array(
                        'type' => 'select',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_DESC'),
                        'values' => array(
                            'h1' => JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H1'),
                            'h2' => JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H2'),
                            'h3' => JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H3'),
                            'h4' => JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H4'),
                            'h5' => JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H5'),
                            'h6' => JText::_('COM_SPPAGEBUILDER_ADDON_HEADINGS_H6'),
                        ),
                        'std' => 'h3',
                        'depends' => array(array('title', '!=', '')),
                    ),
                    'title_fontsize' => array(
                        'type' => 'number',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_SIZE'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_SIZE_DESC'),
                        'std' => '',
                        'depends' => array(array('title', '!=', '')),
                    ),
                    'title_lineheight' => array(
                        'type' => 'text',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_LINE_HEIGHT'),
                        'std' => '',
                        'depends' => array(array('title', '!=', '')),
                    ),
                    'title_fontstyle' => array(
                        'type' => 'select',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_STYLE'),
                        'values' => array(
                            'underline' => JText::_('COM_SPPAGEBUILDER_GLOBAL_FONT_STYLE_UNDERLINE'),
                            'uppercase' => JText::_('COM_SPPAGEBUILDER_GLOBAL_FONT_STYLE_UPPERCASE'),
                            'italic' => JText::_('COM_SPPAGEBUILDER_GLOBAL_FONT_STYLE_ITALIC'),
                            'lighter' => JText::_('COM_SPPAGEBUILDER_GLOBAL_FONT_STYLE_LIGHTER'),
                            'normal' => JText::_('COM_SPPAGEBUILDER_GLOBAL_FONT_STYLE_NORMAL'),
                            'bold' => JText::_('COM_SPPAGEBUILDER_GLOBAL_FONT_STYLE_BOLD'),
                            'bolder' => JText::_('COM_SPPAGEBUILDER_GLOBAL_FONT_STYLE_BOLDER'),
                        ),
                        'multiple' => true,
                        'std' => '',
                        'depends' => array(array('title', '!=', '')),
                    ),
                    'title_letterspace' => array(
                        'type' => 'select',
                        'title' => JText::_('COM_SPPAGEBUILDER_GLOBAL_LETTER_SPACING'),
                        'values' => array(
                            '0' => 'Default',
                            '1px' => '1px',
                            '2px' => '2px',
                            '3px' => '3px',
                            '4px' => '4px',
                            '5px' => '5px',
                            '6px' => '6px',
                            '7px' => '7px',
                            '8px' => '8px',
                            '9px' => '9px',
                            '10px' => '10px'
                        ),
                        'std' => '0',
                        'depends' => array(array('title', '!=', '')),
                    ),
                    'title_fontweight' => array(
                        'type' => 'text',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_WEIGHT'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_FONT_WEIGHT_DESC'),
                        'std' => '',
                        'depends' => array(array('title', '!=', '')),
                    ),
                    'title_text_color' => array(
                        'type' => 'color',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_TEXT_COLOR'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_TEXT_COLOR_DESC'),
                        'depends' => array(array('title', '!=', '')),
                    ),
                    'title_margin_top' => array(
                        'type' => 'number',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_TOP'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_TOP_DESC'),
                        'placeholder' => '10',
                        'depends' => array(array('title', '!=', '')),
                    ),
                    'title_margin_bottom' => array(
                        'type' => 'number',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_BOTTOM'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_MARGIN_BOTTOM_DESC'),
                        'placeholder' => '10',
                        'depends' => array(array('title', '!=', '')),
                    ),
                    'text' => array(
                        'type' => 'editor',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_VIDEO_CONTENT_CONTENT'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_VIDEO_CONTENT_CONTENT_DESC'),
                    ),
                    // Button
                    'button_text' => array(
                        'type' => 'text',
                        'title' => JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_TEXT'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_TEXT_DESC'),
                        'std' => 'Send Message',
                    ),
                    
                    'button_url' => array(
                        'type' => 'text',
                        'title' => JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_URL'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_URL_DESC'),
                        'std' => '#...',
                    ),
                    
                    'button_type' => array(
                        'type' => 'select',
                        'title' => JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_STYLE'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_STYLE_DESC'),
                        'values' => array(
                            'default' => JText::_('COM_SPPAGEBUILDER_GLOBAL_DEFAULT'),
                            'primary' => JText::_('COM_SPPAGEBUILDER_GLOBAL_PRIMARY'),
                            'success' => JText::_('COM_SPPAGEBUILDER_GLOBAL_SUCCESS'),
                            'info' => JText::_('COM_SPPAGEBUILDER_GLOBAL_INFO'),
                            'warning' => JText::_('COM_SPPAGEBUILDER_GLOBAL_WARNING'),
                            'danger' => JText::_('COM_SPPAGEBUILDER_GLOBAL_DANGER'),
                            'link' => JText::_('COM_SPPAGEBUILDER_GLOBAL_LINK'),
                            'custom' => JText::_('COM_SPPAGEBUILDER_GLOBAL_CUSTOM'),
                        ),
                        'std' => 'success',
                    ),
                    
                    'button_size' => array(
                        'type' => 'select',
                        'title' => JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_DESC'),
                        'values' => array(
                            '' => JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_DEFAULT'),
                            'lg' => JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_LARGE'),
                            'xlg' => JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_XLARGE'),
                            'sm' => JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_SMALL'),
                            'xs' => JText::_('COM_SPPAGEBUILDER_GLOBAL_BUTTON_SIZE_EXTRA_SAMLL'),
                        ),
                    ),
                    
                    'class' => array(
                        'type' => 'text',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_CLASS'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_CLASS_DESC'),
                        'std' => ''
                    ),
                )
            )
        )
);
