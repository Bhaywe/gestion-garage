<?php

namespace Customgear;

use Customgear\Customclients\Clients;
use Customgear\Customclients\Metabox;
use Customgear\Custompost\addclient;
use Customgear\Custompost\editclient;

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
        new addclient();
        new editclient();

        //old
        new Scripts();
        new Menu();
        new Title();
        new Widgets();
        new Supports();
    }
}
