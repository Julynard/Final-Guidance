<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guidance extends Model 
{
  

    protected $fillable = ['Last','First','Middle','Course','PermanentAddress','PresentAddress','Email','Tel1','Tel2','CpNum','Birthdate','Birthplace','Age','CivilStatus','Citizenship','Religion','Gender','NumOfBro','NumOfSis','OrdinalP','OtherPersons','FatherName','FathAge','FathEduA','FathCpNum','FathEmployer','FathBA','FathBATel','MotherName','MothAge','MothEduA','MothCpNum','MothEmployer','MothBA','MothBAtel','EmergencyName','Relationship','EmergAddress','EmergNum',
    'ElemName',
    'ElemAddress',
    'ElemYGrad',
    'SecName',
    'SecAddress',
    'SecYGrad',
    'TerName',
    'TerAddress',
    'TerYGrad',
    'Awards',
    'AwardsDate',
    'Skills',
    'SkillsDate',];



}


