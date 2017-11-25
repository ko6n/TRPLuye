<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_bahanbaku extends Model{
    protected $table = 'tb_bahanbaku';
    protected $primaryKey = 'id_bahanbaku';

    protected $fillable = [
		'namabahan', 'jumlah'
	];

	protected $hidden = [
		'id_bahanbaku'
	];
}