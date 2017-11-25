<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_katalogharga extends Model{
    protected $table = 'tb_katalogharga';
    protected $primaryKey = 'id_katalog';

    protected $fillable = [
		'namabarang', 'harga'
	];

	protected $hidden = [
		'id_katalog'
	];
}