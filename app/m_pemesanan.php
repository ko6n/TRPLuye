<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class m_pemesanan extends Model{
    protected $table = 'tb_pemesanan';
    protected $primaryKey = 'id_pemesanan';

    protected $fillable = [
		'nama_pemesan', 'alamat', 'no_telepon', 'jenis_barang' , 'kegunaanmesin', 'jumlah', 'harga' , 'status_jadi', 'desain' ,'tanggalpesan','estimasi','keterangan'
	];

	protected $hidden = [
		'id_pemesanan'
	];
}

