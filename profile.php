<?php include('include/header.php');?>
<section class=" py_5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <?php include('include/myaccount_sidebar.php');?>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="row">
                    <div class="col-12">
                        <div class="sub_heading mb-4">
                            <h3>Profile</h3>
                        </div>
                    </div>
                    <div class="col-lg-12">
                       <div class="profile_wrapper">
                            <div class="image_wrapper d-flex flex-column flex-md-row justify-content-between align-items-center">
                                <img src="assets/images/celebrities/3.png" class="profile_pic" alt="">
                                <div>
                                    <a href="" class="btn-transparent">Change Password <i class="fas fa-key"></i></a>
                                    <a href="" class="btn-transparent">Edit Profile <i class="fas fa-pencil-alt"></i></a>
                                </div>
                            </div>
                            <div class="border_card mb-2 profile_info">
                                <p class="profile_title">Name</p>
                                <h6 class="profile_text">Cristina Martin</h6>
                            </div>
                            <div class="border_card mb-2 profile_info">
                                <p class="profile_title">Phone Number</p>
                                <h6 class="profile_text">+91 9999999999</h6>
                            </div>
                            <div class="border_card mb-2 profile_info">
                                <p class="profile_title">Date of Birth</p>
                                <h6 class="profile_text">09 Jan 2020</h6>
                            </div>
                            <div class="border_card mb-2 profile_info">
                                <p class="profile_title">Email</p>
                                <h6 class="profile_text">Cristina@gmail.com</h6>
                            </div>
                            <div class="border_card mb-2 profile_info">
                                <p class="profile_title">Country</p>
                                <h6 class="profile_text">India</h6>
                            </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('include/footer.php');?>