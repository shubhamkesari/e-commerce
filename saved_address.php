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
                        <div class="sub_heading d-flex flex-column flex-md-row flex-xs-column align-items-center justify-content-between mb-4">
                            <h3 class="mb-0">Saved Addresses</h3>
                            <a href="" class="btn-yellow">Add New Address</a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="address_wrapper mb-4">
                            <h5 class="font-cera">Default Address</h5>
                            <div class="border_card d-flex justify-content-between py_2">
                                <div class="custom-control custom-radio custom-control-inline d-flex">
                                    <input type="radio" id="customRadioInline1" name="saved_address" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline1">
                                        <div class="saved_Address">
                                            <h6 class="font-cera"><span class="address_text">Office</span> Khalifa bin Zayed Al Nahyan</h6>
                                            <p class="mb-1 paragraph_color">8502 Preston Rd. Inglewood, Maine 98380</p>
                                            <p class="mb-0">Mobile No: <span class="paragraph_color">(316) 555-0116</span></p>
                                        </div>
                                    </label>
                                </div>
                                <div>
                                    <a href="" class="btn-transparent">Edit</a>
                                    <a href="" class="btn-transparent">Remove</a>
                                </div>
                            </div>
                        </div>
                        <div class="address_wrapper mb-4">
                            <h5 class="font-cera">Other Address</h5>
                            <div class="border_card d-flex justify-content-between py_2">
                                <div class="custom-control custom-radio custom-control-inline d-flex">
                                    <input type="radio" id="customRadioInline2" name="saved_address" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline2">
                                        <div class="saved_Address">
                                            <h6 class="font-cera"><span class="address_text">Office</span> Khalifa bin Zayed Al Nahyan</h6>
                                            <p class="mb-1 paragraph_color">8502 Preston Rd. Inglewood, Maine 98380</p>
                                            <p class="mb-0">Mobile No: <span class="paragraph_color">(316) 555-0116</span></p>
                                        </div>
                                    </label>
                                </div>
                                <div class="text-right">
                                    <a href="" class="btn-transparent">Edit</a>
                                    <a href="" class="btn-transparent">Remove</a>
                                    <div class="mt_2">
                                        <a class="btn_add_cart" href="" tabindex="0"><u>Make this Default Address</u></a>
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