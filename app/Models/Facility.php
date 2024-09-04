<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'name',
        'location',
        'password',
        'plain_password',
    ];

    protected $hidden = [
        'phone',
        'plain_password',
    ];

    public function userLogs()
    {
        return $this->hasMany(UserLog::class);
    }
}
