<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KategoriModel extends Model
{
    protected $table = 'm_kategori';
    protected $primaryKey='kategori_id';
    protected $fillable = ['kategori_kode', 'kategori_nama', 'created_at', 'updated_at'];
    public function barang():hasMany{
        return $this->hasMany(BarangModel::class,'barang_id','barang_id');
    }
}
