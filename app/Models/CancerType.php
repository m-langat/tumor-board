<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CancerType extends Model
{
    use HasFactory;

    protected $table = "cancer_type";

    protected $fillable = ['cancer_type_name','cancer_type_description', 'cancer_type_id'];

    public function cancers(){
        return $this->hasMany(App\Models\Cancer::class);
    }
}
