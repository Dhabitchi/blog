<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class santri extends Model
{
    protected $table = 'santri';
    protected $primaryKey = 's_id';
    protected $fillable = ['nama', 'kelas', 'jilid'];

    public function user(){
        return $this -> belongsTo('App\User');
    }
}
