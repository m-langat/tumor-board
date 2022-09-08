<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cancer extends Model
{
    use HasFactory;

    protected $table = "cancers";

    protected $fillable = ['cancer_name', 'cancer_description'];

    public function cancer_types(){
        return $this->belongsTo(App\Models\cancerTypes::class);
    }

    public function cases(){
        return $this->hasMany(App\Models\Cases::class);
    }
}
