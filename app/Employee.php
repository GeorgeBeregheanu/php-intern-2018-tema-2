<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['company_id', 'name'];

    function company(){
    	return $this->belongsTo('App\Company', 'company_id', 'id');
    }
}
