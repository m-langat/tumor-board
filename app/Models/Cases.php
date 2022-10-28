<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    use HasFactory;

    protected $table = "cases";

    protected $fillable = [
        'patient_name', 
        'patient_gender', 
        'patient_age',
        'patient_county',
        'patient_country', 
        'eici_id',
        'facility_name',
        'cancer_id', 
        'case_presentation_date', 
        'case_description',  
        "summary", 
        "case_discussion"
    ]; //add ful details
}
