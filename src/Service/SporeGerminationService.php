<?php

namespace Acme\Bundle\TestBundle\Service;

class SporeGerminationService
{

    public function generate(int $max) {
        return random_int(0, $max);
    }

}