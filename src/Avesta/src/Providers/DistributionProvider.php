<?php

namespace pandaac\Distributions\Avesta\Providers;

use pandaac\Contracts;
use pandaac\Distributions\Avesta\Models;
use pandaac\Core\Contracts\Distribution as Contract;

class DistributionProvider implements Contract
{
    /**
     * Return a key value based array of all the contract implementations.
     *
     * @return array
     */
    public function implementations() : array
    {
        return [
            Contracts\Account::class => Models\Account\Model::class,
        ];
    }
}
