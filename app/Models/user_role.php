<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class user_role extends Model
{
    protected $table = 'role_user';
    protected $guarded = [];

    public function role()
    {
        return $this->belongsTo(roles::class);
    }
}
