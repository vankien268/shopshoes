<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ProductVagrant extends Pivot
{
    use HasFactory;

    /**
     * RELATIONSHIP
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
    public function vagrant()
    {
        return $this->belongsTo(Vagrant::class);
    }

    public function vagrantValue()
    {
        return $this->belongsTo(VagrantValue::class);
    }
}
