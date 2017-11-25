<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_upload extends Model
{
	protected $primaryKey = 'id_upload';
	protected $table= 'tb_upload';


	protected $fillable = [
		'namaperancangan', 'file_name'
	];

	protected $hidden = [
		'id_upload'
	];

}