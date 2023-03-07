<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DirectCost extends Model
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
            * On created method force update product amount to recalculate the sum of direct cost
            *
            * @param  DirectCost  $DirectCost
            * @return void
            */
        static::created(function (DirectCost $directCost) {
            $directCost->product->amount = 0.1;
            $directCost->product->save();
        });
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function rawMaterials()
    {
        return $this->hasMany(RawMaterial::class);
    }
}
