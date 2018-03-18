<?php

namespace pandaac\Distributions\TFS12\Models\Account;

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
    protected $primaryKey = 'name';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
}
