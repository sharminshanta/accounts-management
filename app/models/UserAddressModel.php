<?php

namespace Besofty\Web\Accounts\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddressModel extends Model
{
    /**
     * @var string
     */
    public $table = 'users_addresses';

    /**
     * @var bool
     */
    public $timestamps = false;
}
