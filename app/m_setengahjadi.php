<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_setengahjadi extends Model{
    protected $table = 'tb_setengahjadi';
    protected $primaryKey = 'id_setengahjadi';

    protected $fillable = [
		'namabarang', 'jumlah'
	];

	protected $hidden = [
		'id_setengahjadi'
	];
}