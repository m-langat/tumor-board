<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cases', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name'); 
            $table->string('patient_gender');
            $string->integer('patient_age');
            $table->string('patient_county');
            $table->string('patient_country');
            $table->string('eici_id')->nullable(true);
            $table->string('facility_name');
            $table->foreignId('cancer_id')->nullable(false); 
            'case_presentation_date', 
            'case_description',  
            "summary", 
            "case_discussion"
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cases');
    }
}
