<?php
/**
 * @package Helix3 Framework
 * @author JoomShaper https://www.joomshaper.com
 * @copyright (c) 2010 - 2021 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/

defined('JPATH_BASE') or die;

?>
<dd class="modified">
	<i class="fa fa-calendar-o" area-hidden="true"></i>
	<time datetime="<?php echo JHtml::_('date', $displayData['item']->modified, 'c'); ?>" itemprop="dateModified" data-bs-toggle="tooltip" title="<?php echo JText::_('COM_CONTENT_MODIFIED_DATE'); ?>">
		<?php echo JHtml::_('date', $displayData['item']->modified, JText::_('DATE_FORMAT_LC3')); ?>
	</time>
</dd>