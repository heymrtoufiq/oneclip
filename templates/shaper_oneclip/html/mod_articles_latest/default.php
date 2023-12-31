<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_latest
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<div class="latestnews">
<?php foreach ($list as $item) :  ?>
	<div itemscope itemtype="http://schema.org/Article">
		<small><?php echo JHtml::_('date', $item->created, JText::_('DATE_FORMAT_LC3')); ?></small>
		<a href="<?php echo $item->link; ?>" itemprop="url">
			<span itemprop="name">
				<?php echo $item->title; ?>
			</span>
		</a>
	</div>
<?php endforeach; ?>
</div>
