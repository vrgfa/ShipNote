<?php

class Local_Catalog_ConfigTest extends PHPUnit_Framework_TestCase
{
    const MODULE_NAME = 'Local_Catalog';

    public function testThatModuleExistsInConfig()
    {
        $moduleConfig = Mage::app()->getConfig()->getNode('modules')
            ->asArray();

        $moduleExists = array_key_exists(self::MODULE_NAME, $moduleConfig);
        $this->assertTrue($moduleExists);
    }
}