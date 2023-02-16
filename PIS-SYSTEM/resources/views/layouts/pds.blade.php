@extends('layouts.layout')
@section('content')
<header class="header" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    <div class="header_img"> <img src="img/krissy.jpg" alt=""> </div>
</header>
<div class="l-navbar" id="nav-bar">
    <nav class="navs">
        <div> 
            <a href="#" class="nav_logo"> 
                <img class = "img-thumbnail" width = "80px" src="img/bani-logo.jpg" alt=""> 
                    <span class="nav_logo-name">Krissy Jesy T. Pison</span> <br>
                    <span class="nav_logo-name">Human Resource </span> <br>
            </a>
            
            <div class="nav_list"> 
                <a href="#" class="nav_link active"> 
                    <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Personal Data Sheet</span> 
                </a>
                <a href="employee-management.php" class="nav_link"> 
                    <i class='bx bx-user nav_icon'></i> 
                        <span class="nav_name">Employee Management</span>
                </a> 
                <a href="department-management.php" class="nav_link"> 
                    <i class='bx bx-message-square-detail nav_icon'></i> 
                    <span class="nav_name">Department Management</span>
                </a> 
                <a href="designation-management.php" class="nav_link">
                    <i class='bx bx-bookmark nav_icon'></i> 
                    <span class="nav_name">Designation Management</span>
                 </a> 
                 <a href="#" class="nav_link"> 
                    <i class='bx bx-folder nav_icon'></i> 
                    <span class="nav_name">Utilities</span> 
                </a> 
                <a href="#" class="nav_link"> 
                    <i class='bx bx-bar-chart-alt-2 nav_icon'></i> 
                    <span class="nav_name">System Settings</span> 
                </a> 
            </div>
        </div> 
        <a href="#" class="nav_link"> 
            <i class='bx bx-log-out nav_icon'></i> 
            <span class="nav_name">SignOut</span> 
        </a>
    </nav>
</div>
<!--Container Main start-->
<div class="height-100 container-fluid ">
    <div class="row ">
        <div class="col-lg-4 col-md-6">
        <h4 class="mt-2">Personal Data Sheet</h4>
        </div>

        <div class="col-lg-8 col-md-6">
            <button class="btn btn-success mb-5 mt-2 rounded-circle"><i class="bi bi-pencil-fill"></i></button>
            <button class="btn btn-primary mb-5 mt-2 rounded-circle"><i class="bi bi-save-fill"></i></button>
        </div>

    </div>
<div class="row ">
    <div class="col-md-5 col-lg-4 col-md-6">
            <!-- <label class="px-2 py-3">Personal Data Sheet</label> -->
            <div class="card " >
                <img src="img/krissy.jpg" class="card-img-top mg-fluid img-thumbnail rounded-circle text-center" id="pdspic"  alt="...">
            <div class="card-body">
                <form>
                        <div class="mb-3 col-lg-12">
                            <label for="formFileSm" class="form-label">Picture</label>
                            <input class="form-control form-control-sm" id="formFileSm" type="file">
                        </div>
                        <div class="form-floating mb-3 col-lg-12">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Employee No.">
                            <label for="floatingInput">Employee No. </label>
                        </div>
                        <div class="form-floating mb-3 col-lg-12">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Designation">
                            <label for="floatingInput">Designation</label>
                        </div>
                        <div class="form-floating mb-3 col-lg-12">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Department">
                            <label for="floatingInput">Department</label>
                        </div>
                        <div class="form-floating mb-3 col-lg-12">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Appointment Status">
                            <label for="floatingInput">Appointment Status</label>
                        </div>
                        <div class=" mb-4 col-lg-12">
                            <label for="startDate">Date of Appointment:</label>
                            <input id="startDate" class="form-control m" type="date" />
                            <span id="startDateSelected"></span>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 mb-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Salary">
                                    <label for="floatingInput">Salary </label>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="SG">
                                    <label for="floatingInput">SG </label>
                                </div>
                            </div>
                            <div class="col-lg-4 mb-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="STEP">
                                    <label for="floatingInput">STEP </label>
                                </div>
                            </div>
                        </div>
            </div>
            </div>
        
    </div>

<div class = "col-lg-8 col-md-6 bg-white">

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">Profile</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="benefits-tab" data-bs-toggle="tab" data-bs-target="#benefits" type="button" role="tab" aria-controls="address-details" aria-selected="false">Benefits</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="address-details-tab" data-bs-toggle="tab" data-bs-target="#address-details" type="button" role="tab" aria-controls="address-details" aria-selected="false">Address Details</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="family-details-tab" data-bs-toggle="tab" data-bs-target="#family-details" type="button" role="tab" aria-controls="family-details" aria-selected="false">Family Details</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="others-tab" data-bs-toggle="tab" data-bs-target="#others" type="button" role="tab" aria-controls="others " aria-selected="false">Others</button>
        </li>
        
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active " id="profile" role="tabpanel" aria-labelledby="profile-tab">
        
        <div class="form-floating mb-4 mt-5">
            <input type="text" class="form-control" id="floatingInput" placeholder="First Name">
            <label for="floatingInput">First Name </label>
        </div>
        <div class="form-floating mb-4">
            <input type="text" class="form-control" id="floatingInput" placeholder="Middle Name">
            <label for="floatingInput">Middle Name</label>
        </div>
            <div class="row">
                <div class="col-lg-8">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Last Name">
                    <label for="floatingInput">Last Name </label>
                </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-floating mb-4">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected></option>
                        <option value="Sr">Sr.</option>
                        <option value="Jr">Jr.</option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                        <option value="V">V</option>
                    </select>
                    <label for="floatingSelect">Suffix</label>
                    </div>
                </div>
            </div>
         
            <div class="row ">
                <div class="col-lg-4 mb-4">
                    <label for="startDate">Birthdate:</label>
                    <input id="startDate" class="form-control m" type="date" />
                    <span id="startDateSelected"></span>

                    
                </div>
                <div class="col-lg-8 mb-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Birthplace">
                        <label for="floatingInput">Birthplace </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <label for="floatingSelect">Gender</label>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected></option>
                            <option value="Single">Male</option>
                            <option value="Married">Female</option>
                            <option value="Divorced">Divorced</option>
                            <option value="Widowed ">Widowed </option>
                        </select>
                        <label for="floatingSelect">Civil Status</label>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                            <option selected></option>
                            <option value="O-">O-</option>
                            <option value="O+">O+</option>
                            <option value="A-">A-</option>
                            <option value="A+">A+</option>
                            <option value="B-">B-</option>
                            <option value="B+">B+</option>
                            <option value="AB-">AB-</option>
                            <option value="AB+">AB+</option> 
                        </select>
                        <label for="floatingSelect">BloodType</label>
                    </div>
                </div>
            </div>
          
        </div>
        <div class="tab-pane fade" id="benefits" role="tabpanel" aria-labelledby="benefits-details">
            <div class="row">
                <div class="col-lg-12 mb-4 mt-5">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="GSIS">
                        <label for="floatingInput">GSIS No. </label>
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="SSS">
                        <label for="floatingInput">SSS No. </label>
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="TIN">
                        <label for="floatingInput">TIN No. </label>
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="TIN">
                        <label for="floatingInput">PHILHEALTH No. </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="address-details" role="tabpanel" aria-labelledby="address-details">
            <div class="row">
                <p class="lead mt-5 mb-3">Permanent Address</p>
                <div class="col-lg-6 mb-4 ">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="House/Block/Lot.No.">
                        <label for="floatingInput">House/Block/Lot.No. </label>
                    </div>
                </div>
                <div class="col-lg-6 mb-4 ">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Street">
                        <label for="floatingInput">Street</label>
                    </div>
                </div>
                <div class="col-lg-6 mb-4 ">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Subdivision/Village">
                        <label for="floatingInput">Subdivision/Village</label>
                    </div>
                </div>
                <div class="col-lg-6 mb-4 ">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Barangay">
                        <label for="floatingInput">Barangay</label>
                    </div>
                </div>
                <div class="col-lg-6 mb-4 ">
                    <div class="form-floating">
                        <!-- <input type="text" class="form-control" id="city" placeholder="City/Municipality">
                        <label for="city">City/Municipality</label>
                         -->
                         <select class="form-select" id="province" aria-label="Floating label select example">
                     
                        </select>
                        <label for="province">Province</label>
                    </div>
                </div>
                <div class="col-lg-6 mb-4 ">
                    <div class="form-floating">
                        <select class="form-select" id="city" aria-label="Floating label select example">
                     
                     </select>
                     <label for="city">City/Municipality</label>
                    </div>
                </div>

                <div class="col-lg-12 mb-4 ">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="City/Municipality">
                        <label for="floatingInput">Zip Code</label>
                    </div>
                </div>
            </div>

            <!-- resident -->
             <div class="row">
                <p class="lead mt-5 mb-3">Resident Address</p>
                <div class="col-lg-6 mb-4 ">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="House/Block/Lot.No.">
                        <label for="floatingInput">House/Block/Lot.No. </label>
                    </div>
                </div>
                <div class="col-lg-6 mb-4 ">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Street">
                        <label for="floatingInput">Street</label>
                    </div>
                </div>
                <div class="col-lg-6 mb-4 ">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Subdivision/Village">
                        <label for="floatingInput">Subdivision/Village</label>
                    </div>
                </div>
                <div class="col-lg-6 mb-4 ">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Barangay">
                        <label for="floatingInput">Barangay</label>
                    </div>
                </div>
                <div class="col-lg-6 mb-4 ">
                    <div class="form-floating">
                         <select class="form-select" id="province1" aria-label="Floating label select example">
                     
                        </select>
                        <label for="province">Province</label>
                    </div>
                </div>
                <div class="col-lg-6 mb-4 ">
                    <div class="form-floating">
                        <select class="form-select" id="city1" aria-label="Floating label select example">
                     
                     </select>
                     <label for="city">City/Municipality</label>
                    </div>
                </div>
                
                <div class="col-lg-12 mb-4 ">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="City/Municipality">
                        <label for="floatingInput">Zip Code</label>
                    </div>
                </div>
            </div>
            
        </div>
        
        <div class="tab-pane fade" id="family-details" role="tabpanel" aria-labelledby="family-details">
            <div class="row">
            <p class="lead mt-5 mb-3">Spouse Information</p>
            <div class="col-lg-12 mb-4 ">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Firstname">
                    <label for="floatingInput">Firstname</label>
                </div>
            </div>
            <div class="col-lg-12 mb-4 ">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Middlename">
                    <label for="floatingInput">Middlename</label>
                </div>
            </div>
            <div class="col-lg-8 mb-4 ">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Lastname">
                    <label for="floatingInput">Lastname</label>
                </div>
            </div>
            <div class="col-lg-4 mb-4 ">
                <div class="form-floating mb-4">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected></option>
                        <option value="Sr">Sr.</option>
                        <option value="Jr">Jr.</option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                        <option value="V">V</option>
                    </select>
                    <label for="floatingSelect">Suffix</label>
                </div>
            </div>
            </div>
            <div class="row">
            <p class="lead col-lg-6">Father's information</p>
            <p class="lead col-lg-6">Mother's information</p>
                <div class="col-lg-6 mb-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Firstname">
                        <label for="floatingInput">Firstname</label>
                    </div>
                </div>
             
                
                <div class="col-lg-6 mb-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Firstname">
                        <label for="floatingInput">Firstname</label>
                    </div>
                    
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="form-floating ">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Firstname">
                        <label for="floatingInput">Middlename</label>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="form-floating ">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Firstname">
                        <label for="floatingInput">Middlename</label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Lastname">
                        <label for="floatingInput">Lastname</label>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-floating mb-4">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected></option>
                        <option value="Sr">Sr.</option>
                        <option value="Jr">Jr.</option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                        <option value="V">V</option>
                    </select>
                    <label for="floatingSelect">Suffix</label>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Lastname">
                        <label for="floatingInput">Lastname</label>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-floating mb-4">
                    <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                        <option selected></option>
                        <option value="Sr">Sr.</option>
                        <option value="Jr">Jr.</option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                        <option value="V">V</option>
                    </select>
                    <label for="floatingSelect">Suffix</label>
                    </div>
                </div>
            </div>
            <div class="row"> 
                <p class="lead col-lg-12">Children's information</p>
                <div class="field_wrapper">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" name="field_name[]" />
                        <label for="floatingInput">Fullname</label>
                        <a href="javascript:void(0);" class="add_button" title="Add field"><img src="add-icon.png"/></a>
                    </div>
                      
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="others" role="tabpanel" aria-labelledby="others-details">
            <div class="row">
                <p class="lead mt-5 mb-3">Other Information</p>
                <div class="col-lg-12 mb-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Highest Educational Attainment">
                        <label for="floatingInput">Highest Educational Attainment</label>
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Eligibility">
                        <label for="floatingInput">Eligibility</label>
                    </div>
                </div>
                <div class="col-lg-12 mb-4">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Emergency Contact">
                        <label for="floatingInput">Contact Person in case of Emergency</label>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of tab pane -->
    </div>
</div>
</div>
</form>
</div>
</div>
@endsection