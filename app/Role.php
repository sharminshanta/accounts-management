<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
