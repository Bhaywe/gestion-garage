<?php

namespace Effix;

use Effix\Init;

class Activator
{
    function effix_init()
    {
        new Init();
        flush_rewrite_rules();
    }
}
