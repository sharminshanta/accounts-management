<?php

namespace Besofty\Web\Accounts\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class UsersRoleModel extends Model
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
     * @var array
     */
    protected $fillable = [
        'user_id', 'role_id'
    ];


    /**
     * @param $userID
     */
    public function assignUserRole()
    {
        $defaultRole = RoleModel::where('slug', 'general-user')->select('id')->first();
        $userRole = [
            'user_id' => 1,
            'role_id' => $defaultRole['id']
        ];

        //Assign default role for this user
        $this->create($userRole);
    }

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
                Log::info('UserModel\'s RoleID is Returned From DB', ['role_id' => $roleID]);
                return $roleID;
            }
            Log::error('UserModel\'s RoleID Doesn\'t Fetched');
        } catch (\Exception $exception) {
            throw $exception;
        }

        return false;
    }
}
