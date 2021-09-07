<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class LangCode extends Model
{
    protected $fillable = [
        'name', 'description'
    ];
    protected $guarded = ['id'];
    use HasFactory;
    use SoftDeletes;
    protected $dates=['deleted_at'];
}
  