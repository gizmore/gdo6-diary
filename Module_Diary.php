<?php
namespace GDO\Diary;

use GDO\Core\GDO_Module;
use GDO\UI\GDT_Page;
use GDO\UI\GDT_Link;
use GDO\Birthday\Module_Birthday;

/**
 * The gizmore diaries.
 * 
 * @author gizmore
 * @license property of gizmore@wechall.net
 * @since 6.10.4 - 09/11/2014
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
            'Website', 'Classic',
            'Contact', 'News',
            'Login', 'Admin',
            'Birthday',
        ];
    }
    
    public function onInstall()
    {
        $m = Module_Birthday::instance();
        $m->saveConfigVar('', '12');
        $m->saveConfigVar('', '18');
    }
    
    public function onIncludeScripts()
    {
        $this->addCSS('css/diary.css');
    }
    
    public function onInitSidebar()
    {
        # Top nav
        $header = GDT_Link::make('link_diary')->href(href('Diary', 'Welcome'));
        GDT_Page::$INSTANCE->topNav->addField($header);

        # Left nav
        $link = GDT_Link::make('link_diary_alcrules')->href(href('Diary', 'DrinkingRules2021'));
        GDT_Page::$INSTANCE->leftNav->addField($link);
        
        $link = GDT_Link::make('link_diary_scans_intro')->href(href('Diary', 'Intro'));
        GDT_Page::$INSTANCE->leftNav->addField($link);
        
        $link = GDT_Link::make('link_diary_scans_youth')->href(href('Diary', 'ScansYouth'));
        GDT_Page::$INSTANCE->leftNav->addField($link);

        $link = GDT_Link::make('link_diary_scans_diary')->href(href('Diary', 'Scans2014'));
        GDT_Page::$INSTANCE->leftNav->addField($link);
    }
    
}
