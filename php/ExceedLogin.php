<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap">
   <?php include './partials/header.php' ?>
    <link rel="stylesheet" href="css/style-Login.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h6>Login</h6>
                <p><span>Need a Exceed robotics account? </span><a href="#">Sign Up</a></p>
                 <form id="login-form" action="" method="post" role="form" style="display: block;">
                                    <p id="loginErr" style="color: red;" class="hide"></p>
                                    <div id="login-form-fields">
                                    </div>
                                  
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn-create" value="Log In">
                                            </div>
                                        </div>
                                    </div>
                            
                                </form>
                <div class="d-flex copy">
                    <div class="d-block ">
                        <h5>Privacy Policy</h5>
                        <p><i class="bi bi-c-circle"></i> 2022, Exceed Robotics. All rights recieved.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 img-div d-flex">
                <img class="img-fluid" src="images/Register.svg" alt="">
            </div>
        </div>

    </div>
    <?php include './partials/footer.php' ?>
    <script src="../public/js/login.js"></script>
</body>

</html>