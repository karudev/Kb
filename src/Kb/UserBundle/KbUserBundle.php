<?php

namespace Kb\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class KbUserBundle extends Bundle
{
     public function getParent()
    {
        return 'FOSUserBundle';
    }
}
