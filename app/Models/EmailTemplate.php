<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmailTemplate extends Model
{
    protected $fillable = [
        'email_type', 'email_subject', 'email_body'
    ];
    use HasFactory;
    use SoftDeletes;
    protected $dates=['deleted_at'];
}
  