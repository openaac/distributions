<?php

namespace pandaac\Distributions\Avesta\Models\Account;

use pandaac\Contracts\Account as Contract;
use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel implements Contract
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'accounts';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
}
