<?php

namespace Besofty\Web\Accounts\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
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
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function profile1()
	{
		return $this->belongsToMany(ProfileModel::class);
	}

	/**
	 * @return $this
	 */
	public function profile()
	{
		return $this->belongsToMany( 'Besofty\Web\Attendance\Models\ProfileModel',
			'profile_user', 'user_id')->withPivot('id');
	}

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function userRole()
	{
		return $this->belongsToMany(UsersRoleModel::class);
	}

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
		return true;
	}
}
