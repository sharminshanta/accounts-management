<?php

namespace Besofty\Web\Attendance\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class UsersRole extends Model
{
    /**
     * @var string
     */
    public $table = 'users_roles';

    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @param $userID
     * @return array|bool|Model|null|static
     * @throws \Exception
     */
    public static function getRoleID($userID)
    {
        $roleID = [];
        try {
            $roleID = self::where('user_id', $userID)
                ->select('role_id')
                ->first();
            if ($roleID) {
                Log::info('User Role is returned from db', ['role_id' => $roleID]);
                return $roleID;
            }
        } catch (\Exception $exception) {
            throw $exception;
        }

        return false;
    }
}
