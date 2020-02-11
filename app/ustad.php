<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ustad extends Model
{
    protected $table = 'ustad';
    protected $primaryKey = 'u_id';
    protected $fillable = ['nama','ustad'];

    public function user(){
        return $this -> belongsTo('App\User');
    }
}
