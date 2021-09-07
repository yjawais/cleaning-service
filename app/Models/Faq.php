<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faq extends Model
{
    protected $fillable = [
        'title', 'detail', 'type'
    ];

    use HasFactory;
    use SoftDeletes;
    protected $dates=['deleted_at'];

}
