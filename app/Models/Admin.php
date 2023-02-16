<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'admins';

    protected $fillable = [
        'account',
        'name',
        'surname',
        'description',
        'email',
        'image',
        'address',
        'phone_number'
    ];

    public function subEditor(){
        return $this->belongsTo(Admin::class, 'parent_id');
    }

    protected $hidden = [
        'password',
        'remember_token'
    ];
}
