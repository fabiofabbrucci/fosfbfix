<?php

namespace FFF\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FFFUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
