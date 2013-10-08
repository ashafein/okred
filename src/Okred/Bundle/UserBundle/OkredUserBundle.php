<?php
namespace Okred\Bundle\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class OkredUserBundle extends Bundle
{
    public function getParent()
    {
        return 'SonataUserBundle';
    }
}
