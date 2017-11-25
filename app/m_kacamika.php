<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_kacamika extends Model{
    protected $table = 'tb_kacamika';
    protected $primaryKey = 'id_kacamika';

    protected $fillable = [
		'namabahan', 'jumlah', 'bulan', 'peramalan' 
	];

	protected $hidden = [
		'id_kacamika'
	];
}