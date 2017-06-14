<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
	public function term(){
		return $this->belongsTo('App\Term');
	}
}
