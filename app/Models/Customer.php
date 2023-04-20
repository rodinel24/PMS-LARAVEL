<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Customer extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'address',
        'birthdate',
        'user_id',
        'job',
        'gender'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
