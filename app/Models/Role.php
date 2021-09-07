<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    protected $fillable = [
        'name', 'description', 'route_path',
    ];

    use HasFactory;
    use SoftDeletes;
    protected $dates=['deleted_at'];

    public function users()
    {
        return $this
            ->belongsToMany('App\Models\User')
            ->withTimestamps();
    }
}
 