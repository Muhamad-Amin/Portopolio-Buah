<?php

namespace App\Models;

use App\Models\Kategori;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\BelongsToManyRelationship;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = [
        'Name', 'Keterangan', 'Gambar', 'Harga' ,'categary_id'
    ];

    /**
     * Get the user that owns the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Katagori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
