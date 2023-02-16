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
                    <a href="index.php" class="nav_link "> 
                        <i class='bx bx-grid-alt nav_icon'></i>
                            <span class="nav_name">Personal Data Sheet</span> 
                    </a>
                    <a href="employee-management.php" class="nav_link"> 
                        <i class='bx bx-user nav_icon'></i> 
                            <span class="nav_name">Employee Management</span>
                    </a> 
                    <a href="department-management.php" class="nav_link "> 
                        <i class='bx bx-message-square-detail nav_icon'></i> 
                        <span class="nav_name">Department Management</span>
                    </a> 
                    <a href="designation-management.php" class="nav_link active">
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
            <div class="col-lg-4 col-md-6 ">
                <h4 class="mt-2">Designation Details </h4>
            </div>

            <div class="col-lg-12 mb-4">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Department Name">
                    <label for="floatingInput">Designation Name </label>
                </div>
            </div>
            <div class="col-lg-12 mb-4">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Description">
                    <label for="floatingInput">Description </label>
                </div>
            </div>
            
         
            <div class="d-grid col-lg-12 mb-4">
                <input class="btn btn-primary" type="submit" value="Save">
            </div>
</div>
</div>
@endsection