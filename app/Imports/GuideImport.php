<?php

namespace App\Imports;

use App\Models\Guidance;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class GuideImport implements ToModel, WithHeadingRow
{
    
    public function model(array $row)
    {
        return new Guidance([
           'Last'      => $row['last'],
            'First'     => $row['first'],
            'Middle'    => $row['middle'],
            'Course'    => $row['course'],
            'PermanentAddress' => $row['permanentaddress'],
            'PresentAddress'   => $row['presentaddress'],
            'Email'     => $row['email'],
            'Tel1'      => $row['tel1'],
            'Tel2'      => $row['tel2'],
            'CpNum'     => $row['cpnum'],
            'Birthdate' => $row['birthdate'],
            'Birthplace'    => $row['birthplace'],
            'Age'       => $row['age'],
            'CivilStatus'   => $row['civilstatus'],
            'Citizenship' => $row['citizenship'],
            'Religion'  => $row['religion'],
            'Gender'    => $row['gender'],
            'NumOfBro'  => $row['numofbro'],
            'NumOfSis'  => $row['numofsis'],
            'OrdinalP' => $row['ordinalp'],
            'OtherPersons'  => $row['otherpersons'],
            'FatherName'    => $row['fathername'],
            'FathAge'   => $row['fathage'],
            'FathEduA'  => $row['fathedua'],
            'FathCpNum' => $row['fathcpnum'],
            'FathEmployer'  => $row['fathemployer'],
            'FathBA'    => $row['fathba'],
            'FathBATel' => $row['fathbatel'],
            'MotherName'    => $row['mothername'],
            'MothAge'   => $row['mothage'],
            'MothEduA'  => $row['mothedua'],
            'MothCpNum' => $row['mothcpnum'],
            'MothEmployer'  => $row['mothemployer'],
            'MothBA'    => $row['mothba'],
            'MothBAtel' => $row['mothbatel'],
            'EmergencyName' => $row['emergencyname'],
            'Relationship'  => $row['relationship'],
            'EmergAddress'  => $row['emergaddress'],
            'EmergNum'  => $row['emergnum'],
            
            'ElemName'  => $row['elemname'],
            'ElemAddress'   => $row['elemaddress'],
            'ElemYGrad' => $row['elemygrad'],
            'SecName'   => $row['secname'],
            'SecAddress'    => $row['secaddress'],
            'SecYGrad' => $row['secygrad'],
            'TerName' => $row['tername'],
            'TerAddress' => $row['teraddress'],
            'TerYGrad'   => $row['terygrad'],
            'Awards'     => $row['awards'],
            'AwardsDate' => $row['awardsdate'],
            'Skills'     => $row['skills'],
            'SkillsDate' => $row['skillsdate'],
            
        ]);
       
        return "Record are inserted.";

        
    }
}
