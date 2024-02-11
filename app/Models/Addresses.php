<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    protected $fillable = [
        'address1',
        'address2',
        'city',
        'state',
        'zip',
    ];
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(Users::class);
    }
}
