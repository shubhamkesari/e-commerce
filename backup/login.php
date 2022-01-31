<?php include('include/header.php');?>
<section class="login_bg registration_card_wrapper">
    <div class="registration_banner position-relative">
        <div class="registration_images">
            <img src="assets/images/bag.png" alt="" class="img-1">
            <img src="assets/images/gift.png" alt="" class="img-2">
            <img src="assets/images/ballon.png" alt="" class="img-3">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-4">
                    <h1 class="font-weight-bold text-capitalize reg_heading">Get access to your Orders, Wishlist and Recommendations</h1>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-8 registration_column">
                    <div class="registration_card px-4 py-5" id="signup_form" >
                        <h4 class="mb-4 fs-32">Get Started</h4>
                        <ul class="list-unstyled pl-0 login_social_btn">
                            <li class="pr-1">
                                <div class="social_btn">
                                    <i class="fab fa-google"></i> Sign up with Google
                                </div>
                            </li>
                            <li class="pl-1">
                                <div class="social_btn">
                                    <i class="fab fa-facebook text-blue "></i> Sign up with Facebook
                                </div>
                            </li>
                        </ul>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input class="form-control" type="text" placeholder="enter email">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input class="form-control" type="password" placeholder="enter password">
                        </div>
                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input class="form-control" type="password" placeholder="confirm password">
                        </div>
                        <button type="button" class="btn-yellow w-100 mt-3" onclick="$('#signup_form').hide();$('#signup_details').show();">Continue</button>
                        <p class="text-center fs-14 mt-3 mb-0">Already Have an Account? <a class="font-weight-bold text-black" onclick="$('#signup_form').hide();$('#login_form').show();">Sign In Now</a></p>
                    </div>
                    <div class="registration_card px-4 py-5" style="display: none;" id="signup_details">
                        <h4 class="mb-4 fs-32">Get Started</h4>
                        <ul class="list-unstyled pl-0 login_social_btn">
                            <li class="pr-1">
                                <div class="social_btn">
                                    <i class="fab fa-google"></i> Sign up with Google
                                </div>
                            </li>
                            <li class="pl-1">
                                <div class="social_btn">
                                    <i class="fab fa-facebook text-blue "></i> Sign up with Facebook
                                </div>
                            </li>
                        </ul>
                        <div class="form-group">
                            <label for="">Full Name</label>
                            <input class="form-control" type="text" placeholder="enter your name">
                        </div>
                        <div class="form-group">
                            <label for="">Mobile Number</label>
                            <input class="form-control" type="number" placeholder="enter mobile number">
                        </div>
                        <div class="form-group">
                            <label for="">Date of Birth</label>
                            <input class="form-control" type="date" placeholder="select date of birth">
                        </div>
                        <button type="button" class="btn-yellow w-100 mt-3">Create Account</button>
                        <p class="text-center fs-14 mt-3 mb-0">Already Have an Account? <a class="font-weight-bold text-black" onclick="$('#signup_details').hide();$('#login_form').show();">Sign In Now</a></p>
                    </div>
                    <div class="registration_card px-4 py-5" style="display: none;" id="login_form">
                        <h4 class="mb-4 fs-32">Login</h4>
                        <ul class="list-unstyled pl-0 login_social_btn">
                            <li class="pr-1">
                                <div class="social_btn">
                                    <i class="fab fa-google"></i> Sign up with Google
                                </div>
                            </li>
                            <li class="pl-1">
                                <div class="social_btn">
                                    <i class="fab fa-facebook text-blue "></i> Sign up with Facebook
                                </div>
                            </li>
                        </ul>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input class="form-control" type="text" placeholder="enter email">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input class="form-control" type="password" placeholder="enter password">
                        </div>
                        <button type="button" class="btn-yellow w-100 mt_5">Login</button>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                            <p class="fs-14 mb-0">Don't Have an Account? <a class="font-weight-bold text-black" onclick="$('#login_form').hide();$('#signup_form').show();">Sign Up Now</a></p>
                            <a class="font-weight-bold text-black fs-14" onclick="$('#login_form').hide();$('#forgot_password').show();">Forgot Password</a>
                        </div>
                    </div>
                    <div class="registration_card px-4 py-5" style="display: none;" id="forgot_password">
                        <h4 class="mb-4 fs-32">Forgot Password? </h4>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input class="form-control" type="text" placeholder="enter email">
                        </div>
                        <button type="button" class="btn-yellow w-100 mt-3">Login</button>
                        <div class="d-flex justify-content-center align-items-center mt-3">
                            <a class="font-weight-bold paragraph_color fs-14" onclick="$('#forgot_password').hide();$('#send_mail').show();"><u>Need help</u></a>
                        </div>
                    </div>
                    <div class="registration_card px-4 py-5 h-100" style="display: none;" id="send_mail">
                        <div class="d-flex flex-column align-items-center justify-content-center h-100 ">
                            <div class="envelop_card">
                                <i class="fa fa-envelope-open"></i>
                            </div>
                            <h3 class="mt-4 font-cera">Send to mail successfully</h3>
                            <p class="paragraph_color">Any Questions Or Remarks? Just Write A Message</p>
                            <button type="button" class="btn-yellow w-100 mt-3">Go to mail</button>
                        </div>
                    </div>
                    <div class="registration_card px-4 py-5" style="display: none;" id="new_password">
                        <h4 class="mb-4 fs-32">New Password</h4>
                        <div class="form-group">
                            <label for="">New password</label>
                            <input class="form-control" type="password" placeholder="enter New password">
                        </div>
                        <div class="form-group">
                            <label for="">Confirm password</label>
                            <input class="form-control" type="password" placeholder="enter Confirm password">
                        </div>
                        <button type="button" class="btn-yellow w-100 mt-3">Update</button>
                        <div class="d-flex justify-content-center align-items-center mt-3">
                            <a class="font-weight-bold paragraph_color fs-14" onclick=""><u>Need help</u></a>
                        </div>
                    </div>
                    <div class="registration_card px-4 py-5 h-100" style="display: none;" id="pwd_updated">
                        <div class="d-flex flex-column align-items-center justify-content-center h-100 ">
                            <div class="envelop_card">
                                <i class="fa fa-check text-dark"></i>
                            </div>
                            <h3 class="mt-4 font-cera">Password updated</h3>
                            <p class="paragraph_color">Your password has been updated</p>
                            <button type="button" class="btn-yellow w-100 mt-3">Login</button>
                        </div>
                    </div>
                    <div class="registration_card px-4 py-5" style="display: none;"  id="verify_phone">
                        <h4 class="mb-2 fs-32">Verify Phone</h4>
                        <p class="paragraph_color mb-4">Code Send in <span>01:20</span></p>
                        <div class="form-group">
                            <label for="" class="ml-0">Enter your otp</label>
                            <input class="form-control" type="number" placeholder="enter otp">
                        </div>
                        <button type="button" class="btn-yellow w-100 mt-3">Verify & create account</button>
                        <div class="d-flex justify-content-center align-items-center mt-3">
                            <a class="font-weight-bold paragraph_color fs-14" onclick=""><u>Don’t get your code Send again</u></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('include/footer.php');?>