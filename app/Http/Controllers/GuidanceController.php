<?php

namespace App\Http\Controllers;

use App\Models\Guidance;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Facades\WithHeadingRow;
use App\Imports\GuideImport;

use Validator;


class GuidanceController extends Controller 
{


    public function index(Guidance $guidance)
    {
        $data['guidances'] = $guidance::simplePaginate(5);
         return view('table', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Guidance $guidance)
    {
        // dd($request->all());

        // $validate = Validator::make(
        //     ['Age' => ''], 
        //     ['Birthdate' => ['required', 'before:13 years ago']], // rules
        //     ['before' => 'You must be at least 13 years old'], // messages
        // );
          
        //   if($validate->fails())
        //   {
        //       return $validate->messages();
        //   }

        $guidance->insert([
            'Last'      => request('txtLname'),
            'First'     => request('txtFname'),
            'Middle'    => request('txtMname'),
            'Course'    => request('txtCourse'),
            'PermanentAddress' => request('txtPerAdd'),
            'PresentAddress'   => request('txtPreAdd'),
            'Email'     => request('txtEmail'),
            'Tel1'      => request('txtPerAddTel'),
            'Tel2'      => request('txtPreAddTel'),
            'CpNum'     => request('txtCpNum'),
            'Birthdate' => request('txtDob'),
            'Birthplace'    => request('txtPob'),
            'Age'       => request('txtAge'),
            'CivilStatus'   => request('txtCivil'),
            'Citizenship' => request('txtCitizen'),
            'Religion'  => request('txtRel'),
            'Gender'    => request('txtGender'),
            'NumofBro'  => request('txtBro'),
            'NumofSis'  => request('txtSis'),
            'OrdinalP' => request('txtOp'),
            'OtherPersons'  => request('txtOpl'),
            'FatherName'    => request('txtFather'),
            'FathAge'   => request('txtFathAge'),
            'FathEduA'  => request('txtFathEA'),
            'FathCpNum' => request('txtFathCp'),
            'FathEmployer'  => request('txtFathEmp'),
            'FathBA'    => request('txtFathBa'),
            'FathBATel' => request('txtFathBTel'),
            'MotherName'    => request('txtMothName'),
            'MothAge'   => request('txtMothAge'),
            'MothEduA'  => request('txtMothEA'),
            'MothCpNum' => request('txtMothCp'),
            'MothEmployer'  => request('txtMothEmp'),
            'MothBA'    => request('txtMothEmpAdd'),
            'MothBAtel' => request('txtMothTel'),
            'EmergencyName' => request('txtEmergency'),
            'Relationship'  => request('TxtEmerRel'),
            'EmergAddress'  => request('txtEmerAdd'),
            'EmergNum'  => request('txtEmerCp'),
            
            'ElemName'  => request('txtElemNos'),
            'ElemAddress'   => request('txtElemAdd'),
            'ElemYGrad' => request('txtElemGrad'),
            'SecName'   => request('txtShsNos'),
            'SecAddress'    => request('txtShsAdd'),
            'SecYGrad' => request('txtShsGrad'),
            'TerName' => request('txtColNos'),
            'TerAddress' => request('txtColAdd'),
            'TerYGrad'   => request('txtColGrad'),
            'Awards'     => request('txtAwards1'),
            'AwardsDate' => request('txtIdates1'),
            'Skills'     => request('txtSt1'),
            'SkillsDate' => request('txtStIdates1'),
        ]);
            return redirect(route('guidance.index'));
    }

    public function show(Guidance $guidance)
    {
        return view('show', compact('guidance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Guidance $guidance)
    {
     return view('update', compact('guidance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guidance $guidance)
    {
        $guidance->update([

            'Last'      => request('txtLname'),
            'First'     => request('txtFname'),
            'Middle'    => request('txtMname'),
            'Course'    => request('txtCourse'),
            'PermanentAddress' => request('txtPerAdd'),
            'PresentAddress'   => request('txtPreAdd'),
            'Email'     => request('txtEmail'),
            'Tel1'      => request('txtPerAddTel'),
            'Tel2'      => request('txtPreAddTel'),
            'CpNum'     => request('txtCpNum'),
            'Birthdate' => request('txtDob'),
            'Birthplace'=> request('txtPob'),
            'Age'       => request('txtAge'),
            'CivilStatus'   => request('txtCivil'), 
            'Citizenship' => request('txtCitizen'),
            'Religion'  => request('txtRel'),
            'Gender'    => request('txtGender'),
            'NumofBro'  => request('txtBro'),
            'NumofSis'  => request('txtSis'),
            'OrdinalP' => request('txtOp'),
            'OtherPersons'  => request('txtOpl'),
            'FatherName'    => request('txtFather'),
            'FathAge'   => request('txtFathAge'),
            'FathEduA'  => request('txtFathEA'),
            'FathCpNum' => request('txtFathCp'),
            'FathEmployer'  => request('txtFathEmp'),
            'FathBA'    => request('txtFathBa'),
            'FathBATel' => request('txtFathBTel'),
            'MotherName'    => request('txtMothName'),
            'MothAge'   => request('txtMothAge'),
            'MothEduA'  => request('txtMothEA'),
            'MothCpNum' => request('txtMothCp'),
            'MothEmployer'  => request('txtMothEmp'),
            'MothBA'    => request('txtMothEmpAdd'),
            'MothBAtel' => request('txtMothTel'),
            'EmergencyName' => request('txtEmergency'),
            'Relationship'  => request('TxtEmerRel'),
            'EmergAddress'  => request('txtEmerAdd'),
            'EmergNum'  => request('txtEmerCp'),
            
            'ElemName'  => request('txtElemNos'),
            'ElemAddress'   => request('txtElemAdd'),
            'ElemYGrad' => request('txtElemGrad'),
            'SecName'   => request('txtShsNos'),
            'SecAddress'    => request('txtShsAdd'),
            'SecYGrad' => request('txtShsGrad'),
            'TerName' => request('txtColNos'),
            'TerAddress' => request('txtColAdd'),
            'TerYGrad'   => request('txtColGrad'),
            'Awards'     => request('txtAwards1'),
            'AwardsDate' => request('txtIdates1'),
            'Skills'     => request('txtSt1'),
            'SkillsDate' => request('txtStIdates1'),
        ]);

        return redirect(route('guidance.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guidance $guidance)
    {
     $guidance->delete();
     return redirect(route('guidance.index'));
    }

    public function importUploadForm()
    {
        return view('import-form');
    }

    public function importForm(Request $request)
    {
        Excel::import(new GuideImport, $request->file);
        return redirect()->back() ->with('alert', 'Success!');
       
        
        
    }

}
