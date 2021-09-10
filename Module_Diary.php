<?php
namespace GDO\Diary;

use GDO\Core\GDO_Module;
use GDO\UI\GDT_Page;
use GDO\UI\GDT_Link;

/**
 * The gizmore diaries.
 * @author gizmore
 * @license property of gizmore@wechall.net
 */
final class Module_Diary extends GDO_Module
{
    public $module_license = "property of gizmore@wechall.net";
    public $module_priority = 100;
    
    public function onLoadLanguage()
    {
        return $this->loadLanguage('lang/diary');
    }
    
    public function getDependencies()
    {
        return [
            'Website', 'Classic', 'Contact', 'Login', 'Admin',
        ];
    }
    
    public function onInitSidebar()
    {
        $header = GDT_Link::make('link_diary')->href(href('Diary', 'Welcome'));
        GDT_Page::$INSTANCE->topNav->addField($header);
        $link = GDT_Link::make('link_diary_alcrules')->href(href('Diary', 'DrinkingRules2021'));
        GDT_Page::$INSTANCE->leftNav->addField($link);
    }
    
    
}
