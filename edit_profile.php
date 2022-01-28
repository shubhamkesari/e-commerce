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
                        <div class="sub_heading order_details d-flex flex-column flex-md-row flex-xs-column align-items-center mb-4">
                            <a href="" class="back_arrow mr-3"><i class="fas fa-long-arrow-alt-left"></i></a>
                            <h3 class="mb-0">Edit Profile</h3>
                        </div>
                    </div>
                    <div class="col-lg-12">
                       <div class="profile_wrapper">
                            <div class="image_wrapper d-flex flex-column flex-md-row justify-content-between align-items-center">
                                <img src="assets/images/celebrities/3.png" class="profile_pic" alt="">
                                <button class="btn-yellow">Save Changes</button>
                            </div>
                           <div class="row">
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" value="Cristina Martin">
                                    </div>
                               </div>
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Phone Number</label>
                                        <input type="number" class="form-control">
                                    </div>
                               </div>
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Date of Birth</label>
                                        <input type="date" class="form-control">
                                    </div>
                               </div>
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" placeholder="Cristina Martin">
                                    </div>
                               </div>
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Gender</label><br>
                                        <div class="custom-control custom-radio custom-control-inline mt-3">
                                            <input type="radio" id="customRadioInline1" name="gender" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline1">Male</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline mt-3">
                                            <input type="radio" id="customRadioInline2" name="gender" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline2">Female</label>
                                        </div>
                                    </div>
                               </div>
                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Country</label>
                                        <select class="form-control">
                                            <option value="">India</option>
                                            <option value="">India</option>
                                            <option value="">India</option>
                                            <option value="">India</option>
                                        </select>
                                    </div>
                               </div>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('include/footer.php');?>