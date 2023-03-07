<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndirectCost extends Model
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
            * On created method force update product amount to recalculate the sum of indirect cost
            *
            * @param  IndirectCost  $indirectCost
            * @return void
            */
        static::created(function (IndirectCost $indirectCost) {
            $indirectCost->product->amount = 0.1;
            $indirectCost->product->save();
        });
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function costItems()
    {
        return $this->hasMany(CostItem::class);
    }
}
