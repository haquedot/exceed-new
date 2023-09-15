<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <title>ExceedClassList</title>
    <?php include './partials/header.php' ?>
    <link rel="stylesheet" href="css/style-ClassList.css">
</head>

<body>
    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
      Launch demo modal
    </button> -->

    <!-- Modal -->
  <!--   <div class="modal" id="studentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header pb-0">
                    <h5 class="modal-title" id="exampleModalLongTitle">Student Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="bi bi-x-lg"></i>                      
                    </button>
                </div>
                <div class="modal-body row m-0 py-0">
                    
                    <div class="row col-lg-11 m-0">
                        <div class="row student-1 m-0">
                            <div class="col-lg-4 input-div input-div">
                                <label for="firstName" class="">First name</label>
                                <input type="email" class="form-control " placeholder="Test" id="firstName">
                            </div>
                            <div class="col-lg-4 input-div">
                                <label for="firstName" class="">Last name</label>
                                <input type="email" class="form-control " placeholder="One" id="firstName">
                            </div>
                            <div class="col-lg-4 input-div ">
                                <label for="firstName" class="">Date of birth</label>
                                <div class="birth-remove">
                                    <div class="birth">
                                        <input type="date" class="form-control " placeholder="22 Sep 2000" id="firstName">
                                    </div>
                                    <div class="container-fluid remove">
                                        <div class="d-block">
                                            <i class="bi bi-trash"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row student-2 m-0">
                            <div class="col-lg-4 input-div">
                                <label for="firstName" class="">First name</label>
                                <input type="email" class="form-control " placeholder="Test" id="firstName">
                            </div>
                            <div class="col-lg-4 input-div">
                                <label for="firstName" class="">Last name</label>
                                <input type="email" class="form-control " placeholder="One" id="firstName">
                            </div>
                            <div class="col-lg-4 input-div">
                                <label for="firstName" class="">Date of birth</label>
                                <input type="date" class="form-control " placeholder="22 Sep 2000" id="firstName">
                            </div>
                        </div>
                    </div>
                   <div class="container-fluid col-lg-1 remove-div p-0">
                        <div class="container-fluid remove">
                            <div class="d-block">
                                <i class="bi bi-trash"></i>
                                <p>Remove</p>
                            </div>
                        </div>
                    </div> 

                    <!-- </div> 

                </div>
                <div class="modal-footer">
                    <button class="add" onclick="addStudentForm()"><i class="bi bi-plus-lg"></i> Add Student</button>
                    <button type="submit" class="btn-primary">Submit</button>

                </div>
            </div>
        </div>
    </div>
    <div class="row student-2 m-0" style="display:none">
                            <div class="col-lg-4 input-div">
                                <label for="firstName" class="">First name</label>
                                <input type="email" class="form-control " placeholder="Test" id="firstName">
                            </div>
                            <div class="col-lg-4 input-div">
                                <label for="firstName" class="">Last name</label>
                                <input type="email" class="form-control " placeholder="One" id="firstName">
                            </div>
                            <div class="col-lg-4 input-div">
                                <label for="firstName" class="">Date of birth</label>
                                <input type="date" class="form-control " placeholder="22 Sep 2000" id="firstName">
                            </div>
                        </div> -->
    <div class="container" id="classListTable2">
        <h6 class="px-1">Class List</h6>
        

    </div>
    <div id="studentModal" class="modal" role="dialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header pb-0">
                    <h5 class="modal-title" id="exampleModalLongTitle">Student Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="bi bi-x-lg"></i>                      
                    </button>
                </div>
                <form id="studentForm">
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-main">
                                <input type="hidden" value="" id="hidClassId">
                                <input type="hidden" value="" id="hidMinimumAge">
                                <!--<div class="form-block row">
                                    <div class=" col-md-3">
                                        <div class="form-group">
                                            <label for="firstname">First Name</label>
                                            <input type="text" class="form-control" id="firstname" placeholder="First Name" name="firstname[]" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="firstname">Last Name</label>
                                            <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname[]" required>
                                        </div>
                                    </div>
                                    <div class=" col-md-3">
                                        <div class="form-group">
                                            <label for="firstname">Date of Birth </label><span id="minimumAgeLabel"></span>
                                            <input type="date" class="form-control dateOfBirth" id="dob" name="dob[]" required>
                                        </div>
                                    </div>
                                </div>-->
                                <div class="row form-block m-0">
                                    <div class="col-lg-3 input-div input-div">
                                        <label for="firstName" class="">First name</label>
                                        <input type="text" class="form-control " placeholder="Test" id="firstName">
                                    </div>
                                    <div class="col-lg-3 input-div">
                                        <label for="firstName" class="">Last name</label>
                                        <input type="text" class="form-control " placeholder="One" id="firstName">
                                    </div>
                                    <div class="col-lg-4 input-div ">
                                        <label for="firstName" class="">Date of birth</label>
                                        <input type="date" class="form-control " placeholder="22 Sep 2000" id="firstName">
                                    </div>
                                </div>
                            </div>
                        </div>
                       <!-- <div class="row">
                            <div class="col-sm-3" style="padding-top: 20px;">
                                <button type='button' class='btn' onclick="addStudentForm()">+ Add Student</button>
                            </div>
                        </div>-->

                    </div>
                    <div class="modal-footer">
                    <button class="add" onclick="addStudentForm()"><i class="bi bi-plus-lg" ></i> Add Student</button>
                    <button type="submit" class="btn-primary">Submit</button>

                    <!-- <button type='button' class='btn' onclick="addStudentForm()">+ Add Student</button>
                        <button type='button' class='btn' class="btn btn-default" data-dismiss="modal">Close</button> -->
                    </div>
                </form>
            </div>

        </div>
    </div>
    <div class="form-block-sample" style="display:none">
        <!--<div class="row">
            <div class="col-sm-3">
                <div class="form-group">
                    <input type="text" class="form-control " id="firstname" placeholder="First Name" name="firstname[]" required>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <input type="text" class="form-control" id="lastname" placeholder="Last Name" name="lastname[]" required>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <input type="date" class="form-control dateOfBirth" id="dob" name="dob[]" required>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <button type='button' class='btn' onclick='DeleteStudentRow(this)'>Remove</button>
                </div>
            </div>
        </div>-->
        <div class="row form-block m-0">
            <div class="col-lg-3 input-div input-div">
               <label for="firstName" class="">First name</label>
                    <input type="text" class="form-control " placeholder="Test" id="firstName">
            </div>
            <div class="col-lg-3 input-div">
                <label for="firstName" class="">Last name</label>
                <input type="text" class="form-control " placeholder="One" id="firstName">
            </div>
            <div class="col-lg-4 input-div ">
                <label for="firstName" class="">Date of birth</label>
                    <div class="birth-remove">
                        <div class="birth">
                            <input type="date" class="form-control " placeholder="22 Sep 2000" id="firstName">
                        </div>
                        <button class="remove"  type='button' onclick='DeleteStudentRow(this)'>
                                <i class="bi bi-trash"></i>
                        </button>
                   </div>
            </div>
            <!-- <div class="col-lg-4 input-div ">
                <label for="firstName" class="">Date of birth</label>
                <div class="birth-remove">
                    <div class="birth">
                        <input type="date" class="form-control " placeholder="22 Sep 2000" id="firstName">
                    </div>              
                </div>
            </div> -->
            <div class="col-lg-1 remove-div">
                <div class="form-group">
                    <button type='button' class='remove' onclick='DeleteStudentRow(this)'>                                                   
                        <i class="bi bi-trash"></i>
                        Remove
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php include './partials/footer.php' ?>
 <script src="../public/js/class.js"></script>
</body>

</html>