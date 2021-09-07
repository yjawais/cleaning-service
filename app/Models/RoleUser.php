<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
     protected $table = 'role_user';
     protected $fillable = [
        'role_id', 'user_id'
    ];
    use HasFactory;
    use SoftDeletes;
    protected $dates=['deleted_at'];
}
