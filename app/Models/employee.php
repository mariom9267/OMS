<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $table='employees';
    protected $primaryKey='id';
    protected $fillable=([
        'firstName',
        'lastName',
        'company_id',
        'email',
        'phone',

    ]);
    public function company()
    {
        return $this->belongsTo(company::class,'company_id','id');
    }
}
