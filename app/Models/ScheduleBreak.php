<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ScheduleBreak extends Model
{
    use HasFactory;
    // below two statements are for softdelete in data
    use SoftDeletes;
    protected $dates=['deleted_at'];

}
