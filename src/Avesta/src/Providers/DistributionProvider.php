<?php

namespace OpenAAC\Distributions\Avesta\Providers;

use OpenAAC\Contracts;
use OpenAAC\Distributions\Avesta\Models;
use OpenAAC\Core\Contracts\Distribution as Contract;

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
