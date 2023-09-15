<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>ExceedBillingSuccessful</title>
    <?php include './partials/header.php' ?>
    <link rel="stylesheet" href="css/style-BillingSuccessful.css">
</head>

<body>
    <div class="container-fluid main-div">
        <div class="d-flex">
            <div class="d-block">
                <div class="d-flex">
                    <div class="circle mb-4">
                        <i class="bi bi-check2"></i>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="d-block">
                        <h5 class="mb-3">Payment was successsful</h5>
                        <p>Thank you for enrolling programs.<br>Our team will reach out to you for details.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex">
        <div class="card-div">
            <div class="row">
                <div class="col-lg-6 heading">
                    <p>MIS- Discovery Age 7&8 Sundays 10:00AM SO23-01-DSC 1-Sep-Oct 2023</p>
                </div>
                <div class="col-lg-3  date">
                    <span class="pe-1">Date</span>
                    <li> Sep 10, 2023 - Oct 29, 2023</li>
                </div>
                <div class="col-lg-3  time">
                    <span class="pe-1">Time</span>
                    <li> Sunday @9:00-10:00AM</li>
                </div>

            </div>
            <hr class="m-0 my-3 my-3">
            <div class="px-3">
                <h6>Student Details</h6>
                <div class="card-details">
                    <div class="details">
                        <div class="d-block">
                            <p>First Name</p>
                            <span class="hide-mob ">loremipsum@gmail.com</span>
                            <span class="hide-show ">Lorem</span>

                        </div>
                        <div class="d-block">
                            <p>Last Name</p>
                            <span class="hide-mob ">+91 9003557123</span>
                            <span class="hide-show ">Ipsum</span>
                        </div>
                        <div class="d-block">
                            <p>Date of birth</p>
                            <span>22 Sep 2000</span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="paid d-flex">
                    <p class="m-0 ">Paid Now</p>
                    <span>$360</span>
                </div>
                <hr>
                <div class="paid d-flex pb-3">
                    <p class="m-0 ">Due Later</p>
                    <span>$360</span>
                </div>
            </div>
        </div>

    </div>
    <div class="button-div d-flex">
        <button>
            Back to home page 
        </button>
    </div>
    <?php include './partials/footer.php' ?>
</body>

</html>