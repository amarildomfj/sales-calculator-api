<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalProductItem extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * This method listen some events like create, created, update, updating...
     * @return void
     */
    public static function booted()
    {
         /**
         * On created method force update additional product amount to recalculate the sum of additional product items
         *
         * @param  AdditionalProductItem  $additionalProductItem
         * @return void
         */
        static::created(function (AdditionalProductItem $additionalProductItem) {
            $additionalProductItem->additionalProduct->amount = 0.1;
            $additionalProductItem->additionalProduct->save();
        });
    }

    /**
    * Relations
    */
    public function additionalProduct()
    {
        return $this->belongsTo(AdditionalProduct::class);
    }
}
