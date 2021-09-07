<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnquiryNow extends Model
{
    protected $fillable = ['fname','lname','email_id','contact_number','enquiry_products'];

    public function setProductCategoryAttribute($value)
    {
        $this->attributes['enquiry_products'] = json_encode($value);
    }

    public function getProductCategoryAttribute($value)
    {
        return $this->attributes['enquiry_products'] = json_decode($value);
    }
    use HasFactory;
    use SoftDeletes;
    protected $dates=['deleted_at'];
}
