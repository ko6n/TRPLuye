<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_plastik extends Model{
    protected $table = 'tb_plastik';
    protected $primaryKey = 'id_plastik';

    protected $fillable = [
		'namabahan', 'jumlah', 'bulan', 'peramalan' 
	];

	protected $hidden = [
		'id_plastik'
	];
}