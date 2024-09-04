<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'password',
        'plain_password',
        'first_name',
        'last_name',
        'company',
        'facility_id',
    ];

    protected $hidden = [
        'phone',
        'plain_password',
    ];

    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }
}
