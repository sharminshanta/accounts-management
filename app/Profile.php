<?php

namespace Besofty\Web\Attendance\Model;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * @var string
     */
    public $table = 'users_profile';

    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @return mixed
     */
    public static function detailsByUserID($userID)
    {
        $details = [];
        try {
            $details = self::where('user_id', $userID)
                ->join('users', function ($user) {
                    $user->on('user_id', '=', 'users.id');
                })
                ->first();

            if ($details) {
                return $details;
            }
        } catch (\Exception $exception) {
            throw $exception;
        }

        return false;
    }
}
