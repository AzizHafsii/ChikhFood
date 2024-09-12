<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'category',
    ];

    /**
     * Get the formatted price.
     *
     * @return string
     */
    public function getFormattedPriceAttribute()
    {
        return '$' . number_format($this->price, 2);
    }

    /**
     * Get the URL of the item's image or a default image.
     *
     * @return string
     */
    public function getImageUrlAttribute()
    {
        return $this->image ? asset('images/' . $this->image) : asset('images/default.png');
    }

    // Uncomment these methods if you plan to add categories and special items in the future

    // /**
    //  * The category that the menu item belongs to.
    //  */
    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }

    // /**
    //  * Check if the item is marked as special.
    //  */
    // public function isSpecial()
    // {
    //     return (bool) $this->is_special;
    // }
}