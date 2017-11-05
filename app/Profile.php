<?php

namespace Besofty\Web\Attendance\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Profile extends Model
{
    /**
     * @var string
     */
    public $table = 'users_profiles';

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
                Log::info('User\'s Details is Returned From DB', ['user_details' => $details]);
                return $details;
            }
            Log::error('User\'s Details Doesn\'t Fetched');
        } catch (\Exception $exception) {
            throw $exception;
        }

        return false;
    }
}
