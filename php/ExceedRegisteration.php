<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <title>ExceedRegistration</title>
    <?php include './partials/header.php' ?>
    <link rel="stylesheet" href="css/style-Registration.css">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-4">
                <div class="row px-3">
                    <h6 class="p-0">Registration Details</h6>
                    
                        <label for="email" class="ps-1">Email</label>
                        <!--<input type="email" class="form-control" placeholder="Email" id="email">-->
                         <input class="form-control" type="email" id="parentEmail" name="parentEmail" placeholder="Email" />
                        <label for="phoneNo" class="ps-1">Phone No</label>
                        <!-- <input type="text" class="form-control" placeholder="Phone Number" id="phoneNo"> -->
                        <input class="form-control" type="text" id="phone" name="phone" value="" placeholder="Phone" />

                        <label for="age" class="ps-1">Age</label>
                        <!-- <select name="Location" id="" class="form-select">
                            <option value="Delhi">Age</option>
                            <option value="Mumbai">7 years</option>
                            <option value="Kolkata">8 years</option>
                            <option value="Chennai">9 years</option>

                        </select> -->
                         <select class="form-control form-select" id="age">
                            <option value="">AGE</option>
                            
                             <option value="4001214">7 Years Old</option>
                            <option value="4001230">8 Years Old</option>
                            <option value="4001215">9-11 Years Old</option>
                            <option value="4001216">12-15 Years Old</option>
                        </select>
                        <label for="location" class="ps-1">Location</label>
                          <select class="form-control form-select" id="location">
                    <option value="">LOCATION</option>
                    <option value="2">Mississauga</option>
                    <option value="1">Thornhill</option>
                    <option value="3">Richmond Hill</option>
                </select>
                        <!-- <select name="Location" id="" class="form-select">
                            <option value="Delhi">Location</option>
                            <option value="Mumbai">Mumbai</option>
                            <option value="Kolkata">Kolkata</option>
                            <option value="Chennai">Chennai</option>

                        </select> -->

                        <label for="semester" class="ps-1">Semester</label>
                        <!--<select name="Semester" id="" class="form-select">
                            <option value="Delhi">Semester</option>
                            <option value="Mumbai">1</option>
                            <option value="Kolkata">2</option>
                            <option value="Chennai">3</option>

                        </select>-->
                         <select class="form-control form-select" id="semester">
                            <option value="">SEMESTER</option>
                        </select>

                        <div class="d-grid mt-3 p-0">
                            <button type="submit" class="btn btn-block btnSubmit" onclick="submitRegistration(this)">Submit</button>
                        </div>
                    

                </div>
            </div>
            <div class="col-lg-8 regImage">
                <img class="img-fluid" src="images/Register.svg" alt="">
            </div>

        </div>
    </div>
    <?php include './partials/footer.php' ?>
    <script src="../public/js/registration-detail.js"></script>
</body>

</html>