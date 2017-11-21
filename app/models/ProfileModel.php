<?php

namespace Besofty\Web\Accounts\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class ProfileModel extends Model
{
    /**
     * @var string
     */
    public $table = 'profile_user';

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
        'user_id', 'first_name', 'last_name'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function User()
    {
        return $this->belongsTo(UserModel::class, "user_id");
    }

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
                Log::info('UserModel\'s Details is Returned From DB', ['user_details' => $details]);
                return $details;
            }
            Log::error('UserModel\'s Details Doesn\'t Fetched');
        } catch (\Exception $exception) {
            throw $exception;
        }

        return false;
    }
}
