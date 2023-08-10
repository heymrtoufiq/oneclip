<?php
/**
 * @package Helix3 Framework
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or Later
*/
//no direct accees
defined ('_JEXEC') or die('resticted aceess');

class Helix3FeatureMenu {

	private $helix3;

	public function __construct($helix3){
		$this->helix3 = $helix3;
		$this->position = 'menu';
		$this->load_pos = 'before';
	}

	public function renderFeature() {

		$menu_type = $this->helix3->getParam('menu_type');
		$tm_variation = $this->helix3->getParam('tm_variation');

		ob_start();

		if($menu_type == 'mega_offcanvas') { ?>
			<div class='sp-megamenu-wrapper'>
				<a id="offcanvas-toggler" href="#"><i class="fa fa-bars"></i></a>
				<?php $this->helix3->loadMegaMenu('hidden-sm hidden-xs'); ?>
			</div>
		<?php } else if ($menu_type == 'mega') { ?>
			<div class='sp-megamenu-wrapper'>
				<?php if ($tm_variation == 'agency') { ?>
					<div id="show-menu" class="show-menu hidden-sm hidden-xs">
						<div class="icon-bar">
							<span></span>
							<span></span>
							<span></span>
						</div>
						<div class="text">
							<span><?php echo JText::_('HELIX_MENU_OPEN'); ?></span>
							<span><?php echo JText::_('HELIX_MENU_CLOSE'); ?></span>
						</div>
					</div> <!-- //show-menu -->
				<?php } ?>
				<a id="offcanvas-toggler" class="visible-sm d-block d-lg-none" href="#"><i class="fa fa-bars"></i></a>
				<?php $this->helix3->loadMegaMenu('hidden-sm hidden-xs'); ?>
			</div>
		<?php } else { ?>
			<a id="offcanvas-toggler" href="#"><i class="fa fa-bars"></i></a>
		<?php }

		return ob_get_clean();
	}    
}