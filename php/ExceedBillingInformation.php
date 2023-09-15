<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>ExceedBillingInformation</title>
    <?php include './partials/header.php' ?>
    <link rel="stylesheet" href="css/style-BillingInformation.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <h6>Billing Information</h6>
            <div class="col-lg-6 row m-0">
                <div class="col-lg-6 p-0">
                    <form action="">
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" class="form-control" id="firstName" placeholder="Test">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <select class="form-control form-select" id="country">
                                <option>.</option>
                                <option>.</option>
                                <option>.</option>
                                <option>.</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="zipcode">Zipcode</label>
                            <input type="number" class="form-control" id="zipcode" placeholder="Zip">
                        </div>
                        <!-- <button type="submit" class="btn-create container-fluid">
                            <i class="bi bi-lock me-1"></i>Make payment
                    </button> -->
                    </form>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="form-group">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="One">
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" placeholder="City">
                    </div>
                    <div class="form-group">
                        <label for="state">State</label>
                        <select class="form-control form-select" id="state">
                            <option>.</option>
                            <option>.</option>
                            <option>.</option>
                            <option>.</option>
                        </select>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 row payment-info m-0 p-0">
                <h5 class="show-mob">Payment Information</h5>
                <div class="col-lg-6 order-2 order-lg-1">
                    <h5 class="hide-mob">Payment Information</h5>
                    <form action="" class="hide-mob">
                        <div class="form-group">
                            <label for="cardType">Card type</label>
                            <select class="form-control form-select" id="cardType" onchange="updateCardLogo()" required>
                                <option value="mastercard">Master card</option>
                                <option value="visa">Visa</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="cardNumber">Card Number</label>
                            <input type="password" class="form-control" id="cardNumber" maxlength="16" oninput="updateCardNumber()" placeholder="XXXX - XXXX - XXXX" required>
                        </div>
                        <div class="d-flex month-year">
                            <div class="form-group me-1 month">
                                <label for="month">Expiry month</label>
                                <input type="number" class="form-control" id="month" maxlength="2" min="1" max="12" oninput="updateMonth()" placeholder="XX" required>
                            </div>
                            <div class="form-group ms-1 year">
                                <label for="year">Expiry year</label>
                                <input type="number" class="form-control" id="year" maxlength="4" oninput="updateYear()" placeholder="XXXX" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="security">Security Code</label>
                            <input type="password" class="form-control" id="security" maxlength="3" oninput="updateSecurity()" placeholder="XXX" required>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 pt-2 p-0">
                    <div class="card-1 container-fluid">
                        <div class="img-div ">
                            <img id="cardLogo" src="images/mastercard.svg" alt="">
                        </div>
                        <div class="card-number">
                            <label for="cardNumber">CARD NUMBER</label>
                            <p id="cardNumberOut">XXXX - XXXX - XXXX - XXXX</p>
                        </div>
                        <div class="valid-cvv">
                            <div class=" valid justify-content-left">
                                <div class="">
                                    <label for="valid">Valid</label>
                                    <div class="d-flex">
                                        <p id="monthOut">01</p>
                                        <p>/</p>
                                        <p id="yearOut">25</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cvv justify-content-right">
                                <div class="">
                                    <label>CVV</label>
                                    <p id="cvvOut">345</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex subtract-div">
                        <div class="subtract d-block">
                            <img class="img-fluid hide-show" src="images/Subtract.svg" alt="">
                            <div class="subtract-img">
                                <img class="img-fluid" src="images/Subtract-mob.svg" alt="">
                            </div>
                            <form action="" class="form-mob p-3">
                                <div class="form-group">
                                    <label for="cardType">Card type</label>
                                    <select class="form-control form-select" id="cardType" onchange="updateCardLogo()">
                                        <option value="mastercard">Master card</option>
                                        <option value="visa">Visa</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="cardNumber">Card Number</label>
                                    <input type="password" class="form-control" id="cardNumber" oninput="updateCardNumber()" placeholder="XXXX - XXXX - XXXX">
                                </div>
                                <div class="d-flex month-year">
                                    <div class="form-group me-1 month">
                                        <label for="month">Expiry month</label>
                                        <input type="number" class="form-control" id="month" oninput="updateMonth()" placeholder="XX">
                                    </div>
                                    <div class="form-group ms-1 year">
                                        <label for="year">Expiry year</label>
                                        <input type="number" class="form-control" id="year" oninput="updateYear()" placeholder="XXXX">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="security">Security Code</label>
                                    <input type="password" class="form-control" id="security" oninput="updateSecurity()" placeholder="XXX">
                                </div>
                            </form>

                            <div class="subtract-content p-4 pt-0">
                                <div class="d-flex">
                                    <span class="d-flex justify-content-left">Items</span>
                                    <p class="d-flex justify-content-right">2</p>
                                </div>
                                <div class="d-flex">
                                    <span class="d-flex justify-content-left">Sub total</span>
                                    <p class="d-flex justify-content-right">$750</p>
                                </div>
                                <div class="d-flex">
                                    <span class="d-flex justify-content-left">HST</span>
                                    <p class="d-flex justify-content-right">$30</p>
                                </div>
                                <hr>
                                <div class="d-flex">
                                    <span class="d-flex justify-content-left">You have to pay</span>
                                    <p class="d-flex justify-content-right">$780</p>
                                </div>
                            </div>
                            <div class="btn-div">
                                <button type="submit" class="btn-create container-fluid">
                                    <i class="bi bi-lock me-1"></i>Make payment
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include './partials/footer.php' ?>
    <script src="js/script-BillingInformation.js"></script>

</body>

</html>