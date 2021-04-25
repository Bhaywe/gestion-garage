<?php

namespace Customgear;

use Customgear\Customclients\Clients;
use Customgear\Customclients\Metabox;

//old
use Customgear\Utilities\Title;
use Customgear\Utilities\Menu;
use Customgear\Utilities\Scripts;
use Customgear\Utilities\Widgets;
use Customgear\Utilities\Supports;


class Init
{
    public function __construct()
    {
        new Clients();
        new Metabox();
        
        //old
        new Scripts();
        new Menu();
        new Title();
        new Widgets();
        new Supports();
    }   
}
