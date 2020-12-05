<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function permission()
    {
       return $this->hasOne(Permission::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
