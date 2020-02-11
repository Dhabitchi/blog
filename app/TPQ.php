<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TPQ extends Model
{
	protected $table = 'kab_kota';
	protected $primaryKey = 'k_id';
	protected $fillable = ['k_kode','k_nama'];

	public function user() {
		return $this -> belongsTo('App\User');
	}
//	public function tpq() {
//		return $this -> belongsTo('App\tpq');
//	}
}
