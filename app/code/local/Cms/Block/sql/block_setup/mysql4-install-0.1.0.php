<?php
$installer = $this;
$installer->startSetup();

$installer->run($sql);


$connection = $installer->getConnection();

$connection->insert($installer->getTable('cms/block'), array(
    'title'             => 'Private Sale',  
    'identifier'        => 'private_sale',
    'content'           => '<div class="cms-block-content"><h2>Private sale</h2><ul><li><a href="#">Shop women</a></li><li><a href="#">Shop men</a></li></ul></div>',
    'creation_time'     => now(),
    'update_time'       => now(),
));
$connection->insert($installer->getTable('cms/block_store'), array(
    'block_id'   => $connection->lastInsertId(),
    'store_id'  => 0
));

$installer->endSetup();
	 