<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_tembaga extends Model{
    protected $table = 'tb_tembaga';
    protected $primaryKey = 'id_tembaga';

    protected $fillable = [
		'namabahan', 'jumlah', 'bulan', 'peramalan' 
	];

	protected $hidden = [
		'id_tembaga'
	];
}