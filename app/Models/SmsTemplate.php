<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SmsTemplate extends Model
{ 
    protected $fillable = [
        'sms_type','sms_body'
    ];
    use HasFactory;
    use SoftDeletes;
    protected $dates=['deleted_at'];
}
