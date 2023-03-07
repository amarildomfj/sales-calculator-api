<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdditionalProduct extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    /**
     * Set Amount. this method sum additional product items related with Additional Product object.
     *
     * @param  double  $value
     * @return void
     */
    public function setAmountAttribute($value)
    {
        $amount = 0.0;
        foreach($this->additionalProductItems as $additionalProductItem){
            $amount+=$additionalProductItem->amount;
        }
        $this->attributes['amount'] = $amount;
    }

    /**
     * Relations
     */
    public function additionalProductItems()
    {
        return $this->hasMany(AdditionalProductItem::class);
    }
    
    public function products()
    {
        return $this->belongsToMany(Role::class);
    }
}
