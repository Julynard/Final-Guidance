<title>Student Individual Cumulative Record</title>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.1.4.js" integrity="sha256-siFczlgw4jULnUICcdm9gjQPZkw/YPDqhQ9+nAOScE4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>

    /*custom font*/
    @import url(import url here);
  
  body {
      /*font: normal 1em 'font';*/
      background-color: #ecfab6;
  }
  main {
  /*	margin-top: 4.5em; */
  }
  #section1 {
      height: 30em;
  }


  /* Multi-Step Form */
  * {
  box-sizing: border-box;
  }

      /* #regForm {
      background-color: #fff;
      margin: 100px auto;
      font-family: Raleway;
      padding: 40px;
      width: 100%;
      min-width: 600px;
      } */

  h1 {
  text-align: center;  
  }

  input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
  }

  /* Mark input boxes that get errors during validation: */
  input.invalid {
  background-color: #ffdddd;
  }

  /* Hide all steps by default: */
  .tab {
  display: none;
  }

  /* button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
  } */

  button:hover {
  opacity: 0.8;
  }

  /* #prevBtn {
  background-color: #bbbbbb;
  } */

  /* Step marker: Place in the form. */
  .step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
  }

  .step.active {
  opacity: 1;
  } 

  /* Mark the steps that are finished and valid: */
  .step.finish {
  background-color: #4CAF50;
  }
</style>

    <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Guidance And Counseling Office') }}
        </h2>
    </x-slot>

    <div>
        <div class="modal-dialog">
          <div class="modal-content">
          
            <!-- Modal Header -->
            <div class="modal-header">
              <h1 class="modal-title"><b>Update the following</b></h1>
         </div>
            
            <!-- Modal body -->
            <div class="modal-body">
              <form id="regForm" action="{{route('guidance.update', compact('guidance'))}} " method="POST">
                @csrf
                @method('put')
                <!-- One "tab" for each step in the form: -->
                <div class="tab">
                    <h6><b>I. Personal Information</b></h6>
                    <div class="form-group">
                        <label for="txtLname">Last Name:</label>
                        <input type="text" class="form-control" value="{{$guidance->Last}}" oninput="this.className = ''" name="txtLname">
                    </div>
                    <div class="form-group">
                        <label for="txtFname">First Name:</label>
                        <input type="text" class="form-control" value="{{$guidance->First}}"   oninput="this.className = ''" name="txtFname">
                    </div>
                    <div class="form-group">
                        <label for="txtMname">Middle Name: <small><i>(Optional)</i></small></label>
                        <input type="text" class="form-control" value="{{$guidance->Middle}}"  oninput="this.className = ''" name="txtMname">
                    </div>
                    {{-- Dropdown --}}
                    <div class="form-group">
                        <label for="txtCourse">Course/Major/SY:</label>
                        <input class="form-control" value="{{$guidance->Course}}"  oninput="this.className = ''" name="txtCourse">
                    </div>
                    <div class="form-group">
                        <label for="txtPerAdd">Permanent Address:</label>
                        <input class="form-control" value="{{$guidance->PermanentAddress}}"  oninput="this.className = ''" name="txtPerAdd">
                    </div>
                    <div class="form-group">
                        <label for="txtPerAddTel">Tel No/s:</label>
                        <input type="tel" value="{{$guidance->Tel1}}"  name="txtPerAddTel"  id="txtPerAddTel" class="form-control" oninput="this.className = ''">
                       
                    <small>Format: (046)-000-0000</small>
                    </div>
                    <div class="form-group">
                        <label for="txtPreAdd">Present Address:</label>
                        <input type="text"  value="{{$guidance->PresentAddress}}"name="txtPreAdd" id="txtPreAdd"  class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtPreAddTel">Tel No/s:</label>
                        <input type="text" value="{{$guidance->Tel2}}" name="txtPreAddTel" id="txtPreAddTel"  class="form-control" oninput="this.className = ''">
                        
                     <small>Format: (046)-000-0000</small>
                    </div>
                    <div class="form-group">
                        <label for="txtEmail">E-mail Address:</label>
                        <input type="email" value="{{$guidance->Email}}"  name="txtEmail" id="txtEmail"  class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtCpNum">Phone No.:</label>
                        <input type="mail" value="{{$guidance->CpNum}}"  name="txtCpNum" id="txtCpNum" class="form-control" oninput="this.className = ''">
                        <small>Format: (+63)-000-000-0000</small>
                                 
                    </div>
                </div>
                <div class="tab">
                    <div class="form-group">
                        <label for="txtDob">Date of Birth:</label>
                        <input type="date" value="{{$guidance->Birthdate}}" name="txtDob" id="txtDob" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtPob">Place of Birth:</label>
                        <input type="text"  value="{{$guidance->Birthplace}}" onclick="getAge()" name="txtPob" id="txtPob"  class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtAge">Age:</label>
                        <input type="text"  value="{{$guidance->Age}}" name="txtAge" id="txtAge"  class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtCivil">Civil Status:</label>
                        <input type="text" value="{{$guidance->CivilStatus}}" name="txtCivil" id="txtCivil"  class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtCitizen">Citizenship:</label>
                        <input type="text" value="{{$guidance->Citizenship}}" name="txtCitizen" id="txtCitizen"  class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtRel">Religion/Denomination:</label>
                        <input type="text" value="{{$guidance->Religion}}" name="txtRel" id="txtRel"  class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtGender">Gender:</label>
                            <select class="form-control" id="txtGender" name="txtGender" oninput="this.className = ''">
                                
                                @if ($guidance->Gender="Male")
                                <option >{{$guidance->Gender="Male"}}</option>
                                <option value="Female">Female</option>
                                @else
                                <option value="Male">Male</option>
                                @endif
  
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="txtBro">Number of Brothers:</label>
                        <input type="text"  value="{{$guidance->NumOfBro}}" name="txtBro" id="txtBro" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtSis">Number of Sisters:</label>
                        <input type="text" value="{{$guidance->NumOfSis}}" name="txtSis" id="txtSis" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtOp">Ordinal Position:</label>
                        <input type="text"  value="{{$guidance->OrdinalP}}" name="txtOp" id="txtOp" class="form-control" oninput="this.className = ''">
                    </div>
                </div>
                <div class="tab">
                    <div class="form-group">
                        <label for="txtOpl">Other person/s living at home aside from the original family members:</label>
                        <input type="text" value="{{$guidance->OtherPersons}}" name="txtOpl" id="txtOpl" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtFather">Father's Name:</label>
                        <input type="text"  value="{{$guidance->FatherName}}" name="txtFather" id="txtFather" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtFathAge">Age:</label>
                        <input type="text" value="{{$guidance->FathAge}}"  name="txtFathAge" id="txtFathAge" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtFathEA">Educational Attainment:</label>
                        <input type="text"  value="{{$guidance->FathEduA}}"  name="txtFathEA" id="txtFathEA" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtFathCp">Cellphone/Tel. No.:</label>
                        <input type="text" value="{{$guidance->FathCpNum}}" name="txtFathCp" id="txtFathCp" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtFathEmp">Employer/Business Name:</label>
                        <input type="text"  value="{{$guidance->FathEmployer}}" name="txtFathEmp" id="txtFathEmp" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtFathBa">Business Address:</label>
                        <input type="text" value="{{$guidance->FathBA}}" name="txtFathBa" id="txtFathBa" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtFathBTel">Tel. No.:</label>
                        <input type="text" value="{{$guidance->FathBATel}}"name="txtFathBTel" id="txtFathBTel" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtMothName">Mother's Name:</label>
                        <input type="text"  value="{{$guidance->MotherName}}" name="txtMothName" id="txtMothName" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtMothAge">Age:</label>
                        <input type="text" value="{{$guidance->MothAge}}"   name="txtMothAge" id="txtMothAge" class="form-control" oninput="this.className = ''">
                    </div>
                </div>
                {{--  --}}
                <div class="tab">
                    <div class="form-group">
                        <label for="txtMothEA">Educational Attainment:</label>
                        <input type="text" value="{{$guidance->MothEduA}}"name="txtMothEA" id="txtMothEA" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtMothCp">Cellphone/Tel. No.:</label>
                        <input type="text"  value="{{$guidance->MothCpNum}}" name="txtMothCp" id="txtMothCp" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtMothEmp">Employer/Business Name:</label>
                        <input type="text"  value="{{$guidance->MothEmployer}}"name="txtMothEmp" id="txtMothEmp" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtMothEmpAdd">Business Address:</label>
                        <input type="text"  value="{{$guidance->MothBA}}" name="txtMothEmpAdd" id="txtMothEmpAdd" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtMothTel">Tel. No.:</label>
                        <input type="text" value="{{$guidance->MothBAtel}}"name="txtMothTel" id="txtMothTel" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtEmergency">Person to notify in case of emergency:</label>
                        <input type="text"  value="{{$guidance->EmergencyName}}" name="txtEmergency" id="txtEmergency" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="TxtEmerRel">Relationship:</label>
                        <input type="text" value="{{$guidance->Relationship}}" name="TxtEmerRel" id="TxtEmerRel" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtEmerAdd">Complete Address:</label>
                        <input type="text" value="{{$guidance->EmergAddress}}" name="txtEmerAdd" id="txtEmerAdd" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtEmerCp">Contact Nos.:</label>
                        <input type="text" value="{{$guidance->EmergNum}}" name="txtEmerCp" id="txtEmerCp" class="form-control" oninput="this.className = ''">
                    </div>
                </div>
                {{--  --}}
                <div class="tab">
                    <h6><b>II. Educational Information</b></h6>
                    <p><b><i>Elemetary School</i></b></p>
                    <div class="form-group">
                        <label for="txtElemNos">Name of School:</label>
                        <input type="text" value="{{$guidance->ElemName}}"name="txtElemNos" id="txtElemNos" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtElemAdd">Address:</label>
                        <input type="text" value="{{$guidance->ElemAddress}}" name="txtElemAdd" id="txtElemAdd" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtElemGrad">Year Graduated:</label>
                        <input type="text"  value="{{$guidance->ElemYGrad}}" name="txtElemGrad" id="txtElemGrad" class="form-control" oninput="this.className = ''">
                    </div>
                    <p><b><i>Secondary School</p></b></i>
                    <div class="form-group">
                        <label for="txtShsNos">Name of School:</label>
                        <input type="text" value="{{$guidance->SecName}}" name="txtShsNos" id="txtShsNos" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtShsAdd">Address:</label>
                        <input type="text" value="{{$guidance->SecAddress}}" name="txtShsAdd" id="txtShsAdd" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtShsGrad">Year Graduated:</label>
                        <input type="text" value="{{$guidance->SecYGrad}}"name="txtShsGrad" id="txtShsGrad" class="form-control" oninput="this.className = ''">
                    </div>
                </div>
                {{--  --}}
                <div class="tab">
                    <p><b><i>Tertiary School</b></i></p><br>
                    <div class="form-group">
                        <label for="txtColNos">Name of School:</label>
                        <input type="text"  value="{{$guidance->TerName}}" name="txtColNos" id="txtColNos" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtColAdd">Address:</label>
                        <input type="text"  value="{{$guidance->TerAddress}}" name="txtColAdd" id="txtColAdd" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtColGrad">Year Graduated:</label>
                        <input type="text" value="{{$guidance->TerYGrad}}"  name="txtColGrad" id="txtColGrad" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtAwards1">Awards/Honors/Scholarship Recieved:</label>
                        <input type="text" value="{{$guidance->Awards}}"  name="txtAwards1" id="txtAwards1" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtIdates1">Inclusive Dates:</label>
                        <input type="text"value="{{$guidance->AwardsDate}}" name="txtIdates1" id="txtIdates1" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtSt1">Special Talent/Skills:</label>
                        <input type="text" value="{{$guidance->Skills}}" name="txtSt1" id="txtSt1" class="form-control" oninput="this.className = ''">
                    </div>
                    <div class="form-group">
                        <label for="txtStIdates1">Inclusive Dates:</label>
                        <input type="text"  value="{{$guidance->SkillsDate}}" name="txtStIdates1" id="txtStIdates1" class="form-control" oninput="this.className = ''">
                    </div>
                </div>
                {{--  --}}
                <div class="tab">

                </div>
                
                <div style="overflow:auto;">
                    <div style="float:right;">
                        <button class="btn btn-warning" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                        <button class="btn btn-success" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                    </div>
                </div>
                <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>
            </form>
          </div>
            
           
            
            
          </div>
        </div>
      </div>
    
</x-app-layout>


  
    <script>
        
        function getAge()
        {   
            
            const unix = new Date ($('#txtDob').val()); //Conversion of Date

            const age = ((Date.now() - unix) / (31557600000))-1; //computation of date today and date set
            
            txtAge.value = Math.round(age); //output to txtbox

            if(txtAge.value=="NaN")
            {
                alert("Please Select date of Birth");
                txtAge.value = " ";
            }
                

            if(txtAge.value<=12)
            {
                txtAge.value = " ";
                alert("Your Age must atleast 13 and above!");
                document.getElementById("nextBtn").disabled = true;
            }else
            document.getElementById("nextBtn").disabled = false;
        }

        // Multi-Step Form
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the crurrent tab
    
        function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
        }
    
        function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
        }
    
        function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false
            valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
        }
    
        function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
        }
    </script>

    