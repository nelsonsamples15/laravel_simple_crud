<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    //this is for accessor
    public function getTitleAttribute($value)
    {
    	return ucfirst($value);
    }

    //this is for mutators
    public function setTitleAttribute($value)
    {
    	return $this->attributes['title'] = ucfirst($value);
    }
}
