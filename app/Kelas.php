<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $primaryKey = 'k_id';
    protected $fillable = ['nama','kelas'];

    public function user(){
        return $this -> belongsTo('App\User');
    }
}
