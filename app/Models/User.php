<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'phone',
        'email',
    ];
    use HasFactory;
    public function addresses()
    {
        return $this->hasMany(Address::class, 'user_id');
    }
}
