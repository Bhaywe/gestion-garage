<?php

namespace Customgear;

use Customgear\Init;

class Activator
{
    function customgear_init()
    {
        new Init();
        flush_rewrite_rules();
    }
}
