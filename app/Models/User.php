<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model
{
    public function address(){
        // return $this->hasOne('App\Models\Address', 'user_id', 'id');
        return $this->hasOne(Address::class, 'user_id', 'id');
        /*  Second parameter user_id : foreign key of addresses table.
            Third parameter id       : primary key of users table.
        */
    }
    public function addresses(){
        return $this->hasMany(Address::class, 'user_id', 'id');
    }
    public function posts(){
        return $this->hasMany(Post::class, 'user_id', 'id');
    }
}