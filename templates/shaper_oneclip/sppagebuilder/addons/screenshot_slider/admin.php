<?php

/**
 * @package Qubic
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */
//no direct accees
defined('_JEXEC') or die('resticted aceess');

SpAddonsConfig::addonConfig(
        array(
            'type' => 'repeatable',
            'addon_name' => 'sp_screenshot_slider',
            'category' => 'oneclip',
            'title' => JText::_('COM_SPPAGEBUILDER_ADDON_SCREENSHOT_SLIDER'),
            'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_SCREENSHOT_SLIDER_DESC'),
            'inline'     => [
                'contenteditable' => true,
                'buttons'         => [
                ],
            ],
            'attr' => array(
                'general' => array(
                    'title' => array(
                        'type' => 'text',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_DESC'),
                        'std' => ''
                    ),
                    'class' => array(
                        'type' => 'text',
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_CLASS'),
                        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_CLASS_DESC'),
                        'std' => ''
                    ),
                    //Repetable
                    'sp_screenshot_slider_item' => array(
                        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_REPEATABLE_ITEMS'),
                        'attr' => array(
                            'title' => array(
                                'type' => 'text',
                                'title' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE'),
                                'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_TITLE_DESC'),
                                'std' => 'Title'
                            ),
                            'image' => array(
                                'type' => 'media',
                                'title' => JText::_('COM_SPPAGEBUILDER_ADDON_IMAGE_SELECT'),
                                'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_IMAGE_SELECT_DESC'),
                                'std'=>'https://sppagebuilder.com/addons/flipbox/flipbox-bg-1.jpg',
                            ),
                        )
                    ),
                )
            ),
        )
);

