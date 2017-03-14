<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    // Accessors

    public function getTitleAttribute($value)
    {
		return ucfirst($value);
    }

    // Mutators

    public function setTitleAttribute($value)
    {
        return $this->attributes['title'] = ucfirst($value);
    }

}
