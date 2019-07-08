<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReportStudent extends Model
{
    public function studentinfo(){
        return $this->belogsTo('\App\studentinfo');
    }
}
