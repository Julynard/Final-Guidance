<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuidancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guidances', function (Blueprint $table) {
            
            $table->id();
            $table->string('Last');
            $table->string('First');
            $table->string('Middle');
            $table->string('Course');						
            $table->string('PermanentAddress');
            $table->string('PresentAddress');
            $table->string('Email');
            $table->string('Tel1');
            $table->string('Tel2');
            $table->string('CpNum');
            $table->string('Birthdate');
            $table->string('Birthplace');
            $table->string('Age');
            $table->string('CivilStatus');
            $table->string('Citizenship');
            $table->string('Religion');
            $table->string('Gender');
            $table->string('NumOfBro');
            $table->string('NumOfSis');
            $table->string('OrdinalP');
            $table->string('OtherPersons');
            $table->string('FatherName');
            $table->string('FathAge');
            $table->string('FathEduA');
            $table->string('FathCpNum');
            $table->string('FathEmployer');
            $table->string('FathBA');
            $table->string('FathBATel');
            $table->string('MotherName');
            $table->string('MothAge');
            $table->string('MothEduA');
            $table->string('MothCpNum');
            $table->string('MothEmployer');							
            $table->string('MothBA');
            $table->string('MothBAtel');
            $table->string('EmergencyName');
            $table->string('Relationship');
            $table->string('EmergAddress');
            $table->string('EmergNum');
            
            $table->string('ElemName'); 									   
            $table->string('ElemAddress');
            $table->string('ElemYGrad');
            $table->string('SecName');
            $table->string('SecAddress');
            $table->string('SecYGrad');
            $table->string('TerName');
            $table->string('TerAddress');
            $table->string('TerYGrad');
            $table->string('Awards');
            $table->string('AwardsDate');
            $table->string('Skills');
            $table->string('SkillsDate');
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
        Schema::dropIfExists('guidances');
    }
}
