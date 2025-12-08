<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name']; // những cột co thẻ gán giá trị hàng loạt: fillable
    
    public function permissions() {
        return $this->belongsToMany(Permission::class, 'role_permissions');
    }
}