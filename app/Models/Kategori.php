<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'categorys';


    protected $fillable = [
        'Name', 'Gambar'
    ];

    /**
     * Get all of the comments for the Kategori
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Produk(): HasMany
    {
        return $this->hasMany(Product::class, 'categary_id ', 'id');
    }
}
