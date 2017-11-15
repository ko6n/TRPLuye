<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_tingkatan extends Model
{
    protected $primaryKey = 'id_tingkatan';
    protected $table = 'tb_tingkatan';
    public function scopeAdmin($query) {
		return $query->where('tingkat', 'tingkatan');
	}
	public $timestamps = false;
}
