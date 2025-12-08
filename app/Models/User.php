<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    use HasFactory, Notifiable;

    public $timestamps = true;

    protected $fillable = [
        'name',
        'email',
        'password',
        'status',
        'phone_number',
        'avatar',
        'address',
        'role_id',
        'activation_token',
        'google_id'
        
    ];

    // fill ẩn đi
    // protected $hidden = [
    //     'password',
    // ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function shippingAddresses()
    {
        return $this->hasMany(ShippingAddress::class);
    }

    // check status
    public function isPending()
    {
        return $this->status === 'pending';
    }
    
    public function isActive()
    {
        return $this->status === 'active';
    }

    public function isBanned()
    {
        return $this->status === 'banned';
    }

    public function isDeleted()
    {
        return $this->status === 'deleted';
    }

    public function getAvatarUrlAttribute()
    {
        return $this->avatar ? asset('storage/' . $this->avatar) : asset('storage/uploads/users/default-avatar.png');
    }
 
}