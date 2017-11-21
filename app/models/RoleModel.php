<?php

namespace Besofty\Web\Accounts\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class RoleModel extends Model
{
    /**
     * @var string
     */
    public $table = 'roles';

    /**
     * @var bool
     */
    public $timestamps = true;

    /**
     * @return mixed
     */
    public function getAll()
    {
        $roles = [];
       try {
           $roles = $this->get();
           if ($roles) {
               Log::info('RoleModel list has fetched from DB');
               return $roles;
           }
       } catch (\Exception $exception) {
           Log::info($exception->getMessage());
           Log::debug($exception->getTraceAsString());
       }

       return false;
    }

    /**
     * @param $roleID
     * @return array|Model|null|static
     * @throws \Exception
     */
    public static function getName($roleID)
    {
        $role = [];
        try {
            $role = self::where('id', $roleID)
                ->select('slug', 'name')
                ->first();
            if ($role) {
                Log::info('UserModel\'s RoleModel Name is Returned From DB', ['role' => $role]);
                return $role;
            }
            Log::error('UserModel\'s RoleModel Name Doesn\'t Fetched');
        } catch (\Exception $exception) {
            throw $exception;
        }

        return false;
    }

    /**
     * @param $slug
     * @return array|bool|Model|null|static
     * @throws \Exception
     */
    public static function isAdmin($slug)
    {
        $data = [];
        try {
            $data = self::where('slug', $slug)
                ->select('slug')
                ->first();
            if ($data) {
                Log::info('UserModel\'s RoleModel Slug is Returned From DB', ['Slug' => $data]);
                return $data;
            }
            Log::error('UserModel\'s RoleModel Slug Name Doesn\'t Fetched');
        } catch (\Exception $exception) {
            throw $exception;
        }

        return false;
    }
}
