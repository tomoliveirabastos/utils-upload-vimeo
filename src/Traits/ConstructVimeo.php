<?php

namespace App\Traits;

use App\Variable;
use Vimeo\Vimeo;

trait ConstructVimeo
{
    public function vimeo(Variable $variable): Vimeo
    {
        $lib = new Vimeo(
            $variable->getClientId(),
            $variable->getSecretId(),
            $variable->getAccessToken()
        );

        return $lib;
    }
}
