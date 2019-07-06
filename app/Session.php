<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    public function enrollment(){
        return $this->hasMany('\App\enrollment');
    }
}
