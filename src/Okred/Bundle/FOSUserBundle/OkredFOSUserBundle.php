<?php
namespace Okred\Bundle\FOSUserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class OkredFOSUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
