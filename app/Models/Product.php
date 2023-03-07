<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];


    /**
     * Set Amount. this method sum product items related with indirect cost object.
     *
     * @param  double  $value
     * @return void
     */
    public function setAmountIndirectCostsAttribute($value)
    {
        $amount = 0.0;
        foreach($this->indirectCosts as $indirectCost){
            $amount+=$indirectCost->amount;
        }
        $this->attributes['amount_indirect_costs'] = $amount;
    }

    /**
     * Set Amount. this method sum product items related with direct cost object.
     *
     * @param  double  $value
     * @return void
     */
    public function setAmountDirectCostsAttribute($value)
    {
        $amount = 0.0;
        foreach($this->directCosts as $directCost){
            $amount+=$directCost->amount;
        }
        $this->attributes['amount_direct_costs'] = $amount;
    }



    public function directCosts()
    {
        return $this->hasMany(DirectCost::class);
    }

    public function indirectCosts()
    {
        return $this->hasMany(IndirectCost::class);
    } 
    
    public function additionalProducts()
    {
        return $this->belongsToMany(Role::class);
    }
}
