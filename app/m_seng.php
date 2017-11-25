<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_seng extends Model{
    protected $table = 'tb_seng';
    protected $primaryKey = 'id_seng';

    protected $fillable = [
		'namabahan', 'jumlah', 'bulan', 'peramalan' 
	];

	protected $hidden = [
		'id_seng'
	];
}