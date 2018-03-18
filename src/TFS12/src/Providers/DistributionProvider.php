<?php

namespace pandaac\Distributions\TFS12\Providers;

use pandaac\Contracts;
use pandaac\Distributions\TFS12\Models;
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
