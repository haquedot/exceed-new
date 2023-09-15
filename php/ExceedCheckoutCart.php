<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

    <title>CheckoutCart</title>
    <?php include './partials/header.php' ?>
    <link rel="stylesheet" href="css/style-CheckoutCart.css">

</head>

<body>
    <div class="container">
        <h6>Checkout cart</h6>
        <div class="container row cart p-0">
            <div class="container col-lg-9 order-2 order-lg-1 p-0">
                <div class="container-fluid row cart-1">
                    <div class="container cart-content row p-0">
                        <div class="row p-0">
                            <div class="d-flex col-lg-6 heading p-0">
                                <div class="d-flex heading-left p-3 orange">
                                    <p>MIS- Discovery Age 7&8 Sundays 10:00AM SO23-01-DSC 1-Sep-Oct 2023</p>
                                </div>
                                <div class="heading-right hide-show remove-mob">
                                    <button data-toggle="modal" data-target="#remove">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class=" col-lg-3 hide-show px-3 py-2">
                                <span class="">Age: </span>
                                <li> 8 years old</li>
                            </div>
                            <div class="col-lg-3 d-flex px-3 py-2">
                                <span class="hide-show">Date: </span>
                                <li> Sep 10, 2023 - Oct 29, 2023</li>
                            </div>
                            <div class="d-flex col-lg-3 px-3 py-2">
                                <span class="hide-show">Time: </span>
                                <li> Sunday @9:00-10:00AM</li>
                            </div>

                        </div>
                        <hr class="m-0">
                        <div class="accordion p-0" id="accordionExample">
                            <div class="d-flex px-3">
                                <div class="d-flex justify-content-left">
                                    Student Details
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    </button>
                                </div>
                            </div>
                            <div class="cart-details row  ">
                                <div class=" col-lg-9 row p-3 py-0 accordion-collapse collapse" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="row p-0">
                                        <div class="col-lg-5 py-2 px-0">
                                            <div class="d-flex para">
                                                <p class="">First Name</p>
                                                <p class="hide-show">: Lorem</p>
                                            </div>
                                            <span class="hide-mob">loremipsum@gmail.com</span>
                                        </div>
                                        <div class="col-lg-4 py-2 px-0">
                                            <div class="d-flex para">
                                                <p>Last Name</p>
                                                <p class="hide-show">: Ipsum</p>
                                            </div>
                                            <span class="hide-mob">+91 9003557123</span>
                                        </div>
                                        <div class="col-lg-3 py-2 px-0">
                                            <div class="d-flex para">
                                                <p>Date of birth</p>
                                                <p class="hide-show">: 22 Sep 2000</p>
                                            </div>
                                            <span class="hide-mob">22 Sep 2000</span></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row p-0">
                                        <div class="col-lg-5 py-2 px-0">
                                            <div class="d-flex para">
                                                <p class="">First Name</p>
                                                <p class="hide-show">: Lorem</p>
                                            </div>
                                            <span class="hide-mob">loremipsum@gmail.com</span>
                                        </div>
                                        <div class="col-lg-4 py-2 px-0">
                                            <div class="d-flex para">
                                                <p>Last Name</p>
                                                <p class="hide-show">: Ipsum</p>
                                            </div>
                                            <span class="hide-mob">+91 9003557123</span>
                                        </div>
                                        <div class="col-lg-3 py-2 px-0">
                                            <div class="d-flex para">
                                                <p>Date of birth</p>
                                                <p class="hide-show">: 22 Sep 2000</p>
                                            </div>
                                            <span class="hide-mob">22 Sep 2000</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 row p-0 tution-div">
                                    <div class="orange tution-fee">
                                        <p>Tution Fee +HST

                                        </p>
                                        <h4 align="right">$360</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="payment pb-2">
                        <h5 class="p-1 mb-2">Payment method</h5>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="full-payment">
                                <div class="accordion-header" id="flush-headingOne" for="radio1">
                                    <!-- <input type="radio" id="radio1" class="form-check-input collapsed" name="option1" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    <label class="ps-2 form-check-label" for="radio1">Full payment</label> -->
                                    <button class="collapsed" type="radio" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <div class="d-flex justify-content-left"> 

                                        <input type="radio" id="radio1" class="form-check-input collapsed" name="option1" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        <label class="ps-2 form-check-label" for="radio1">Full payment</label>
                                    </div><div class="d-flex justify-content-right">$360</div>
                                    </button>
                                </div>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="row full-payment-content">
                                            <div class="d-flex">
                                                <div class="width-div">
                                                    <p class="d-flex justify-content-left">Due date</p>
                                                    <p class="d-flex justify-content-right">Amount</p>
                                                </div>
                                            </div>
                                            <hr class="m-0 my-3 mx-2">
                                            <div class="d-flex">
                                                <div class="width-div">
                                                    <span class="d-flex justify-content-left">Aug 23, 2023</span>
                                                    <span class="d-flex justify-content-right">$360</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="authorized mt-3">
                                <div class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        <input type="radio" class="form-check-input collapsed" id="radio2" name="option1" value="something">
                                        <label class="ps-2 form-check-label" for="radio2">Pre-Authorized Monthly (card on file will be charged on the 15th of each month)</label>                        
                                    </button>
                                </div>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="d-flex mb-3">
                                                <div class="width-div">
                                                    <p class="d-flex justify-content-left">Due date</p>
                                                    <p class="d-flex justify-content-right">Amount</p>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="width-div">
                                                    <span class="d-flex justify-content-left">Jul 23, 2023</span>
                                                    <span class="d-flex justify-content-right">$360</span>
                                                </div>
                                            </div>
                                            <hr class="m-0 my-3 mx-2">
                                            <div class="d-flex">
                                                <div class="width-div">
                                                    <p class="d-flex justify-content-left">Aug 23, 2023</p>
                                                    <span class="d-flex justify-content-right">$360</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid row cart-1">
                    <div class="container cart-content row p-0">
                        <div class="row p-0">


                            <div class="d-flex col-lg-6 heading p-0">
                                <div class="d-flex heading-left p-3 orange">
                                    <p>MIS- Discovery Age 7&8 Sundays 10:00AM SO23-01-DSC 1-Sep-Oct 2023</p>
                                </div>
                                <div class="heading-right hide-show remove-mob">
                                    <button data-toggle="modal" data-target="#remove">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class=" col-lg-3 hide-show px-3 py-2">
                                <span class="">Age: </span>
                                <li> 8 years old</li>
                            </div>
                            <div class="col-lg-3 d-flex px-3 py-2">
                                <span class="hide-show">Date: </span>
                                <li> Sep 10, 2023 - Oct 29, 2023</li>
                            </div>
                            <div class="d-flex col-lg-3 px-3 py-2">
                                <span class="hide-show">Time: </span>
                                <li> Sunday @9:00-10:00AM</li>
                            </div>

                        </div>
                        <hr class="m-0">
                        <div class="accordion p-0" id="accordionExample">
                            <div class="d-flex px-3">
                                <div class="d-flex justify-content-left">
                                    Student Details
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                                    </button>
                                </div>
                                <div class="justify-content-right hide-show edit-mob">

                                </div>
                            </div>

                            <div class="cart-details row  ">
                                <div class=" col-lg-9 row p-3 py-0 accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="row p-0">
                                        <div class="col-lg-5 py-2 px-0">
                                            <div class="d-flex para">
                                                <p class="">First Name</p>
                                                <p class="hide-show">: Lorem</p>
                                            </div>
                                            <span class="hide-mob">loremipsum@gmail.com</span>
                                        </div>
                                        <div class="col-lg-4 py-2 px-0">
                                            <div class="d-flex para">
                                                <p>Last Name</p>
                                                <p class="hide-show">: Ipsum</p>
                                            </div>
                                            <span class="hide-mob">+91 9003557123</span>
                                        </div>
                                        <div class="col-lg-3 py-2 px-0">
                                            <div class="d-flex para">
                                                <p>Date of birth</p>
                                                <p class="hide-show">: 22 Sep 2000</p>
                                            </div>
                                            <span class="hide-mob">22 Sep 2000</span></p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row p-0">
                                        <div class="col-lg-5 py-2 px-0">
                                            <div class="d-flex para">
                                                <p class="">First Name</p>
                                                <p class="hide-show">: Lorem</p>
                                            </div>
                                            <span class="hide-mob">loremipsum@gmail.com</span>
                                        </div>
                                        <div class="col-lg-4 py-2 px-0">
                                            <div class="d-flex para">
                                                <p>Last Name</p>
                                                <p class="hide-show">: Ipsum</p>
                                            </div>
                                            <span class="hide-mob">+91 9003557123</span>
                                        </div>
                                        <div class="col-lg-3 py-2 px-0">
                                            <div class="d-flex para">
                                                <p>Date of birth</p>
                                                <p class="hide-show">: 22 Sep 2000</p>
                                            </div>
                                            <span class="hide-mob">22 Sep 2000</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 row p-0 tution-div">
                                    <div class="orange tution-fee">
                                        <p>Tution Fee +HST

                                        </p>
                                        <h4 align="right">$360</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="payment pb-2">
                        <h5 class="p-1 mb-2">Payment method</h5>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="full-payment">
                                <div class="accordion-header" id="flush-headingThree" for="radio3">
                                    <button class="collapsed" type="radio" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                       <div class="d-flex justify-content-left"> 
                                        <input type="radio" id="radio3" class="form-check-input collapsed" name="option1" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                        <label class="ps-2 form-check-label" for="radio3">Full payment</label>
                                    </div>
                                    <div class="d-flex justify-content-right">$360</div>
                                    </button>
                                </div>
                                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="row full-payment-content">
                                            <div class="d-flex">
                                                <div class="width-div">
                                                    <p class="d-flex justify-content-left">Due date</p>
                                                    <p class="d-flex justify-content-right">Amount</p>
                                                </div>
                                            </div>
                                            <hr class="m-0 my-3 mx-2">
                                            <div class="d-flex">
                                                <div class="width-div">
                                                    <span class="d-flex justify-content-left">Aug 23, 2023</span>
                                                    <span class="d-flex justify-content-right">$360</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="authorized mt-3">
                                <div class="accordion-header" id="flush-headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        <input type="radio" class="form-check-input collapsed" id="radio4" name="option1" value="something">
                                        <label class="ps-2 form-check-label" for="radio4">Pre-Authorized Monthly (card on file will be charged on the 15th of each month)</label>                        
                                    </button>
                                </div>
                                <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="row">
                                            <div class="d-flex mb-3">
                                                <div class="width-div">
                                                    <p class="d-flex justify-content-left">Due date</p>
                                                    <p class="d-flex justify-content-right">Amount</p>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="width-div">
                                                    <span class="d-flex justify-content-left">Jul 23, 2023</span>
                                                    <span class="d-flex justify-content-right">$360</span>
                                                </div>
                                            </div>
                                            <hr class="m-0 my-3 mx-2">
                                            <div class="d-flex">
                                                <div class="width-div">
                                                    <p class="d-flex justify-content-left">Aug 23, 2023</p>
                                                    <span class="d-flex justify-content-right">$360</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 total-div order-1 order-lg-2">
                <div class="container p-3 total ">
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
                    <div class="form-check pt-2">
                        <input type="checkbox" class="form-check-input mt-1" name="click" id="verify" required>
                        <label>By clicking this you will be confirmed the declaration 
                            of payment. Terms & conditions
                        </label>
                    </div>


                    <div class="d-grid mt-4 ">
                        <button type="submit" class="pay-button">
                            <i class="bi bi-lock me-1"></i>Make payment
                         </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include './partials/footer.php' ?>
</body>

</html>