<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'phone',
        'email',
    ];
    use HasFactory;
    public function address()
    {
        return $this->hasMany(Addresses::class, 'user_id');
    }
}
