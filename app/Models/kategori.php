<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class kategori extends Model
{
    use HasFactory;

    protected $fillable = [
        'namakategori',
        'img'
    ];

    // static function hapus($data)
    // {
    //     return DB::delete("DELETE FROM kategoris WHERE id='$data'");
    // }

    public function Produks()
    {
        return $this->hasMany(produk::class);
    }
}
