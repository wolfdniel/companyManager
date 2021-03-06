<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    protected $fillable = [
        'name',
        'email',
        'phone',
        'company_id'
    ];
}
