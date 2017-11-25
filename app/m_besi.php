<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_besi extends Model{
    protected $table = 'tb_besi';
    protected $primaryKey = 'id_besi';

    protected $fillable = [
		'namabahan', 'jumlah', 'bulan', 'peramalan' 
	];

	protected $hidden = [
		'id_besi'
	];
}