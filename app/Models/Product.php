<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'inventory',
        'manufacturing_date',
        'description',
        'detailed_description',
        'category_id',
        'image_id',
        'updated_at',
    ];

    public function imagePath(): string
    {
        $fileNames = $this->belongsToMany(Image::class,
            'product_images',
            'product_id',
            'image_id'
        )->pluck('file_name');

        return $fileNames->map(function ($fileName) {
            return url($fileName);
        });
    }
}