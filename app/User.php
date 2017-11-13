<?php

namespace Besofty\Web\Attendance\Model;

use Illuminate\Contracts\Logging\Log;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * @var string
     */
    public $table = 'users';

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid', 'username', 'email_address', 'password', 'last_seen'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @param $postData
     * @return \Illuminate\Database\Eloquent\Model|null|static
     */
    public static function authentication($postData)
    {
        $user = [];
        try {
            $user = self::where('email_address', $postData['email_address'])
                ->where('password', $postData['password'])
                ->where('status', 1)
                ->first();
            if ($user) {
                return $user;
            }
        } catch (\Exception $exception) {
            throw $exception;
        }

        return false;
    }

    /**
     * @param $email
     * @return array|bool|\Illuminate\Database\Eloquent\Model|null|static
     * @throws \Exception
     */
    public static function details($uuid)
    {
        $user = [];
        try {
            $user = self::where('uuid', $uuid)
                ->where('status', 1)
                ->first();
            if ($user) {
                return $user;
            }
        } catch (\Exception $exception) {
            throw $exception;
        }

        return false;
    }

    /**
     * @param $request
     * @return $this|\Illuminate\Database\Eloquent\Model
     */
    public function createUser($request)
    {
        $user = User::create([
            'uuid' => 111111,
            'email_address' => $request->email_address,
            'username' => $request->email_address,
            'password' => md5($request->password),
            'last_seen' => date('y-m-d h:i:s'),
        ]);

        $profile = Profile::create([
            'user_id' => $user->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
        ]);

        $profile->touchOwners()->sync([$user->id]);
    }
}
