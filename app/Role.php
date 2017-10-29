<?php

namespace Besofty\Web\Attendance\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class Role extends Model
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
               return $roles;
           }
       } catch (\Exception $exception) {
           throw $exception;
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
                Log::info('User\'s Role Name is Returned From DB', ['role' => $role]);
                return $role;
            }
            Log::error('User\'s Role Name Doesn\'t Fetched');
        } catch (\Exception $exception) {
            throw $exception;
        }

        return false;
    }
}
