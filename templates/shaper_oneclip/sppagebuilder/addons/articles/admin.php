<?php

/**
 * @package SP Page Builder
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
//no direct accees
defined('_JEXEC') or die('resticted aceess');

SpAddonsConfig::addonConfig(
        array(
            'type' => 'content',
            'addon_name' => 'sp_articles',
            'category' => 'General',
            'title' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES'),
            'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_DESC'),
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
                    'title' => array(
                        'type' => 'text',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_DESC'),
                        'std' => '',
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
                    'catid' => array(
                        'type' => 'category',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_CATID'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_CATID_DESC'),
                        'std' => ''
                    ),
                    'ordering' => array(
                        'type' => 'select',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_ORDERING'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_ORDERING_DESC'),
                        'values' => array(
                            'latest' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_ORDERING_LATEST'),
                            'hits' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_ORDERING_POPULAR'),
                            'featured' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_ORDERING_FEATURED'),
                        ),
                        'std' => 'latest',
                    ),
                    'limit' => array(
                        'type' => 'number',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_LIMIT'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_LIMIT_DESC'),
                        'std' => '3'
                    ),
                    'columns' => array(
                        'type' => 'number',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_COLUMNS'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_COLUMNS_DESC'),
                        'std' => '3',
                    ),
                    'show_intro' => array(
                        'type' => 'select',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_INTRO'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_INTRO_DESC'),
                        'values' => array(
                            1 => JText::_('COM_SPPAGEBUILDER_YES'),
                            0 => JText::_('COM_SPPAGEBUILDER_NO'),
                        ),
                        'std' => 1,
                    ),
                    'intro_limit' => array(
                        'type' => 'number',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_INTRO_LIMIT'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_INTRO_LIMIT_DESC'),
                        'std' => '200',
                        'depends' => array('show_intro' => '1')
                    ),
                    
                    'link_articles' => array(
                        'type' => 'select',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_ALL_ARTICLES_BUTTON'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_ALL_ARTICLES_BUTTON_DESC'),
                        'values' => array(
                            1 => JText::_('COM_SPPAGEBUILDER_YES'),
                            0 => JText::_('COM_SPPAGEBUILDER_NO'),
                        ),
                        'std' => 0,
                    ),
                    'all_articles_btn_text' => array(
                        'type' => 'text',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_ALL_ARTICLES_BUTTON_TEXT'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_ALL_ARTICLES_BUTTON_TEXT_DESC'),
                        'std' => 'See all posts',
                        'depends' => array('link_articles' => '1')
                    ),
                    'all_articles_btn_size' => array(
                        'type' => 'select',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_BUTTON_SIZE'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_BUTTON_SIZE_DESC'),
                        'values' => array(
                            '' => JText::_('COM_SPPAGEBUILDER_ADDON_BUTTON_SIZE_DEFAULT'),
                            'lg' => JText::_('COM_SPPAGEBUILDER_ADDON_BUTTON_SIZE_LARGE'),
                            'sm' => JText::_('COM_SPPAGEBUILDER_ADDON_BUTTON_SIZE_SMALL'),
                            'xs' => JText::_('COM_SPPAGEBUILDER_ADDON_BUTTON_SIZE_EXTRA_SAMLL'),
                        ),
                        'depends' => array('link_articles' => '1')
                    ),
                    'all_articles_btn_type' => array(
                        'type' => 'select',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_BUTTON_TYPE'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_BUTTON_TYPE_DESC'),
                        'values' => array(
                            'default' => JText::_('COM_SPPAGEBUILDER_GLOBAL_DEFAULT'),
                            'primary' => JText::_('COM_SPPAGEBUILDER_GLOBAL_PRIMARY'),
                            'success' => JText::_('COM_SPPAGEBUILDER_GLOBAL_SUCCESS'),
                            'info' => JText::_('COM_SPPAGEBUILDER_GLOBAL_INFO'),
                            'warning' => JText::_('COM_SPPAGEBUILDER_GLOBAL_WARNING'),
                            'danger' => JText::_('COM_SPPAGEBUILDER_GLOBAL_DANGER'),
                            'link' => JText::_('COM_SPPAGEBUILDER_GLOBAL_LINK'),
                        ),
                        'std' => 'default',
                        'depends' => array('link_articles' => '1')
                    ),
                    'all_articles_btn_icon' => array(
                        'type' => 'icon',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_BUTTON_ICON'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_BUTTON_ICON_DESC'),
                        'depends' => array('link_articles' => '1')
                    ),
                    'all_articles_btn_block' => array(
                        'type' => 'select',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_BUTTON_BLOCK'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_BUTTON_BLOCK_DESC'),
                        'values' => array(
                            '' => JText::_('JNO'),
                            'sppb-btn-block' => JText::_('JYES'),
                        ),
                        'depends' => array('link_articles' => '1')
                    ),
                    'class' => array(
                        'type' => 'text',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_CLASS'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_CLASS_DESC'),
                        'std' => ''
                    ),
                ),
                'options' => array(
                    'hide_thumbnail' => array(
                        'type' => 'select',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_HIDE_THUMBNAIL'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_HIDE_THUMBNAIL_DESC'),
                        'values' => array(
                            1 => JText::_('COM_SPPAGEBUILDER_YES'),
                            0 => JText::_('COM_SPPAGEBUILDER_NO'),
                        ),
                        'std' => 0,
                    ),
                    'show_author' => array(
                        'type' => 'select',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_AUTHOR'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_AUTHOR_DESC'),
                        'values' => array(
                            1 => JText::_('COM_SPPAGEBUILDER_YES'),
                            0 => JText::_('COM_SPPAGEBUILDER_NO'),
                        ),
                        'std' => 1,
                    ),
                    'show_category' => array(
                        'type' => 'select',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_CATEGORY'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_CATEGORY_DESC'),
                        'values' => array(
                            1 => JText::_('COM_SPPAGEBUILDER_YES'),
                            0 => JText::_('COM_SPPAGEBUILDER_NO'),
                        ),
                        'std' => 1,
                    ),
                    'show_date' => array(
                        'type' => 'select',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_DATE'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_DATE_DESC'),
                        'values' => array(
                            1 => JText::_('COM_SPPAGEBUILDER_YES'),
                            0 => JText::_('COM_SPPAGEBUILDER_NO'),
                        ),
                        'std' => 1,
                    ),
                    'show_readmore' => array(
                        'type' => 'select',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_READMORE'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_SHOW_READMORE_DESC'),
                        'values' => array(
                            1 => JText::_('COM_SPPAGEBUILDER_YES'),
                            0 => JText::_('COM_SPPAGEBUILDER_NO'),
                        ),
                        'std' => 1,
                    ),
                    'readmore_text' => array(
                        'type' => 'text',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_READMORE_TEXT'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_ARTICLES_READMORE_TEXT_DESC'),
                        'std' => 'Read More',
                        'depends' => array('show_readmore' => '1')
                    ),
                )
            ),
        )
);
