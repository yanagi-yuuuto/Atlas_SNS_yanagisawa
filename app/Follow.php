<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    public function Users() {
        return $this->belongsToMany('App\User','follows','following_id','id');
    }
}
