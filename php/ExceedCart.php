<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>CartExceed</title>
    <?php include './partials/header.php' ?>
    <link rel="stylesheet" href="css/style-Cart.css">
</head>

<body>
    <!--<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header pb-0">
                    <h5 class="modal-title" id="exampleModalLongTitle">Student Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg"></i>                      
                </button>
                </div>
                <div class="modal-body row m-0 py-0">
                    <div class="row m-0">
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
                                <input type="date" class="form-control " placeholder="22 Sep 2000" id="firstName">
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
                <div class="modal-footer">
                    <button class="add"><i class="bi bi-plus-lg"></i> Add Student</button>
                    <button type="submit" class="btn-done">Done</button>

                </div>
            </div>

        </div>

    </div>
    <div class="modal fade" id="remove" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header pb-0">
                    <h5 class="modal-title" id="exampleModalLongTitle">Student Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg"></i>                      
                </button>
                </div>
                <div class="modal-body row m-0 py-0">
                    <div class="row m-0">
                        <div class="row student-1 m-0">
                            <div class="input-div">
                                <label for="firstName" class="">First name</label>
                                <input type="email" class="form-control " placeholder="Test" id="firstName" disabled>
                            </div>
                            <div class="input-div">
                                <label for="firstName" class="">Last name</label>
                                <input type="email" class="form-control " placeholder="One" id="firstName" disabled>
                            </div>
                            <div class="col-lg-4 input-div ">
                                <label for="firstName" class="">Date of birth</label>
                                <div class="birth-remove">
                                    <div class="birth">
                                        <input type="date" class="form-control " placeholder="22 Sep 2000" id="firstName" disabled>
                                    </div>
                                    <div class="container-fluid remove">
                                        <div class="d-block">
                                            <i class="bi bi-trash"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid remove-modal">
                                <div class="d-block">
                                    <i class="bi bi-trash"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row student-2 m-0">
                        <div class="input-div">
                            <label for="firstName" class="">First name</label>
                            <input type="email" class="form-control " placeholder="Test" id="firstName" disabled>
                        </div>
                        <div class="input-div">
                            <label for="firstName" class="">Last name</label>
                            <input type="email" class="form-control " placeholder="One" id="firstName" disabled>
                        </div>
                        <div class="input-div">
                            <label for="firstName" class="">Date of birth</label>
                            <input type="date" class="form-control " placeholder="22 Sep 2000" id="firstName" disabled>
                        </div>
                        <div class="container-fluid remove-modal">
                            <div class="d-block">
                                <i class="bi bi-trash"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="add"><i class="bi bi-plus-lg"></i> Add Student</button>
                    <button type="submit" class="btn-done">Done</button>

                </div>
            </div>

        </div>

    </div>-->
<div class="container">
    <div class="row">
        <div class="row col-lg-9 order-2 order-lg-1 p-0" id="cartTableDiv2">
                
              
            </div>
            <div class="col-lg-3 total-div order-1 order-lg-2">
                <div class="container p-3 total ">
                    <div class="d-flex ">
                        <div class="d-flex justify-content-left ">
                            <span class="py-1 ">Programs: Robotics</span>
                        </div>
                        <div class="d-flex justify-content-right ">
                            <span>$360</span>
                        </div>
                    </div>
                    <div class="d-flex ">
                        <div class="d-flex justify-content-left ">
                            <span class="py-1 ">Camps: Robotics</span>
                        </div>
                        <div class="d-flex justify-content-right ">
                            <span>$360</span>
                        </div>
                    </div>


                    <div class="container coupon mt-4 mb-3 p-0 ">
                        <input type="text " class="form-control border border-dark rounded " placeholder="Coupon ">
                        <button class="btn-primary rounded ">Apply</button>
                    </div>
                    <div class="d-flex sub-total">
                        <div class="d-flex justify-content-left ">
                            <p class="my-2 ">Sub-total</p>
                        </div>
                        <div class="d-flex justify-content-right ">
                            <span>$720</span>
                        </div>
                    </div>
                    <div class="d-flex sub-total">
                        <div class="d-flex justify-content-left ">
                            <p class="my-2 ">HST</p>
                        </div>
                        <div class="d-flex justify-content-right ">
                            <span>$18</span>
                        </div>
                    </div>


                    <hr>
                    <div class="d-flex pay">
                        <div class="d-flex justify-content-left ">
                            <p>To Pay</p>
                        </div>
                        <div class="d-flex justify-content-right ">
                            <span align="right ">$738</span>
                        </div>
                    </div>

                    <div class="d-grid mt-4 ">
                        <button type="button " class="buy-button btn-block ">Proceed to buy (2 Items)</button>
                    </div>
                </div>
            </div>
    </div>
</div>

    <div class="container p-2" style="display: none;">
        <h6>Cart</h6>
        <div class="container row cart" >
            
        </div>
    </div>
    <?php include './partials/footer.php' ?>
    <script src="../public/js/cart.js"></script>
</body>

</html>