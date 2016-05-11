<?php
$installer = $this;
$installer->startSetup();
$content = '<div class="cms-block-content">
            	<h2>Private sale</h2>
            		<ul>
                		<li><a href="#">Shop women</a></li>
                		<li><a href="#">Shop men</a></li>
            		</ul>
        		</div>';
$staticBlock = array(
                'title' => 'Private sale',
                'identifier' => 'private_sale',
                'content' => $content,
                'is_active' => 1
                );

Mage::getModel('cms/block')->setData($staticBlock)->save();

$installer->endSetup();
	 