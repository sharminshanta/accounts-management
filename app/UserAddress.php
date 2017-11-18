<?php

namespace Besofty\Web\Attendance\Model;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
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
