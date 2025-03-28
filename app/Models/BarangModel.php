<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    public function kategori():BelongsTo{
        return $this->belongsTo(KategoriModel::class,'kategori_id','kategori_id');
    }
}
