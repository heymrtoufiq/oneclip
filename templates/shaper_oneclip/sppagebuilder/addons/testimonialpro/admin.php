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
        'type' => 'repeatable',
        'addon_name' => 'sp_testimonialpro',
        'category' => 'Slider',
        'title' => JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO'),
        'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_DESC'),
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
                'autoplay' => array(
                    'type' => 'select',
                    'title' => JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_AUTOPLAY'),
                    'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_AUTOPLAY_DESC'),
                    'values' => array(
                        1 => JText::_('JYES'),
                        0 => JText::_('JNO'),
                    ),
                    'std' => 1,
                ),
                'arrows' => array(
                    'type' => 'select',
                    'title' => JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_SHOW_ARROWS'),
                    'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_SHOW_ARROWS_DESC'),
                    'values' => array(
                        1 => JText::_('JYES'),
                        0 => JText::_('JNO'),
                    ),
                    'std' => 1,
                ),
                'controllers' => array(
                    'type' => 'select',
                    'title' => JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_SHOW_CONTROLLERS'),
                    'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_SHOW_CONTROLLERS_DESC'),
                    'values' => array(
                        1 => JText::_('JYES'),
                        0 => JText::_('JNO'),
                    ),
                    'std' => 1,
                ),
                'variation' => array(
                    'type' => 'select',
                    'title' => JText::_('COM_SPPAGEBUILDER_ADDON_SP_VARIATION'),
                    'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_SP_VARIATION_DESC'),
                    'values' => array(
                        'single' => JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_VARIATION_SINGLE'),
                        'multiple' => JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_VARIATION_MULTIPLE'),
                    ),
                    'std' => 'multiple',
                ),
                'class' => array(
                    'type' => 'text',
                    'title' => JText::_('COM_SPPAGEBUILDER_ADDON_CLASS'),
                    'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_CLASS_DESC'),
                    'std' => ''
                ),
                // Repeatable Items
                'sp_testimonialpro_item' => array(
                    'title' => JText::_('COM_SPPAGEBUILDER_ADDON_REPEATABLE_ITEMS'),
                    'attr' => array(
                        'title' => array(
                            'type' => 'text',
                            'title' => JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_ITEM_TITLE'),
                            'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_ITEM_TITLE_DESC'),
                            'std' => 'John Doe, CEO',
                        ),
                        'avatar' => array(
                            'type' => 'media',
                            'title' => JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_CLIENT_IMAGE'),
                            'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_CLIENT_IMAGE_DESC'),
                            'std' => 'https://sppagebuilder.com/addons/person/person1.jpg',
                        ),
                        'avatar_style' => array(
                            'type' => 'select',
                            'title' => JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_AVATAR_STYLE'),
                            'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_AVATAR_STYLE_DESC'),
                            'values' => array(
                                '' => JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_STANDARD'),
                                'sppb-img-rounded' => JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_ROUNDED'),
                                'sppb-img-circle' => JText::_('COM_SPPAGEBUILDER_ADDON_GLOBAL_CIRCLE'),
                            ),
                            'std' => 'sppb-img-circle',
                        ),
                        'message' => array(
                            'type' => 'editor',
                            'title' => JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_ITEM_TEXT'),
                            'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_ITEM_TEXT_DESC'),
                            'std' => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.'
                        ),
                        'url' => array(
                            'type' => 'text',
                            'title' => JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_CLIENT_URL'),
                            'desc' => JText::_('COM_SPPAGEBUILDER_ADDON_TESTIMONIAL_PRO_CLIENT_URL_DESC'),
                        ),
                    ),
                ),
            ),
        ),
    )
);

