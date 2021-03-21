<?php

namespace Effix;

use Effix\Subscription\Purchase;
// use Effix\Subscription\Update;

use Effix\Utilities\Title;
use Effix\Utilities\Menu;
use Effix\Utilities\Scripts;
use Effix\Utilities\Widgets;
use Effix\Utilities\Supports;
use Effix\Subscription\Update;

use Effix\Meta\User;

class Init
{
    public function __construct()
    {
        new Update();
        new User();
        new Scripts();
        new Menu();
        new Title();
        new Purchase();
        new Widgets();
        new Supports();
    }
}
