<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_almunium extends Model{
    protected $table = 'tb_almunium';
    protected $primaryKey = 'id_almunium';

    protected $fillable = [
		'namabahan', 'jumlah', 'bulan', 'peramalan' 
	];

	protected $hidden = [
		'id_almunium'
	];
}