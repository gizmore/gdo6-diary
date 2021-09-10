<?php
namespace GDO\Diary;

use GDO\Core\GDO_Module;

/**
 * The gizmore diaries.
 * @author gizmore
 * @license property of gizmore@wechall.net
 */
final class Module_Diary extends GDO_Module
{
    public $module_license = "property of gizmore@wechall.net";
    public $module_priority = 100;
    
    public function getDependencies()
    {
        return [
            'Website', 'Classic', 'Contact', 'Login', 'Admin',
        ];
    }
    
}
