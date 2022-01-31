<?php include('include/header.php');?>
<section class="checkout_section py_5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-6">
                <div class="row">
                    <div class="col-12">
                        <div class="order_details_wrapper px-4">
                            <div class="order_deatils_info">
                                <ol>
                                    <li class="progress--active"><span class="progress_text">Delivery Address</span></li>
                                    <li class="progress--unvisited"><span class="bar"></span><span class="progress_text">Delivery Method</span></li>
                                    <li class="progress--unvisited"><span class="bar"></span><span class="progress_text">Payment Method</span></li>
                                    <li class="progress--unvisited"><span class="bar"></span><span class="progress_text">Date & Time</span></li>
                                </ol>
                            </div>
                            <!-- delivery address start -->
                            <div class="delivery_address">
                                <div class="address_wrapper">
                                    <button type="button" onclick="$('.delivery_address').hide();$('.new_address').show();" class="font-cera bg-transparent border-0 d-flex mb-2 align-items-center"><span class="material-icons mr-1 fs-20">add</span>Add New Address</button>
                                    <div class="border_card d-flex justify-content-between py_2 mb-2">
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
                                        <div class="text-right btn_address_cta align-self-end mb-2">
                                            <a href="" class="btn-transparent">Edit</a>
                                            <a href="" class="btn-transparent">Remove</a>
                                        </div>
                                    </div>
                                    <div class="border_card d-flex justify-content-between py_2 mb-2">
                                        <div class="custom-control custom-radio custom-control-inline d-flex">
                                            <input type="radio" id="customRadioInline2" name="saved_address" class="custom-control-input">
                                            <label class="custom-control-label" for="customRadioInline2">
                                                <div class="saved_Address">
                                                    <h6 class="font-cera"><span class="address_text">Home</span> Khalifa bin Zayed Al Nahyan</h6>
                                                    <p class="mb-1 paragraph_color">8502 Preston Rd. Inglewood, Maine 98380</p>
                                                    <p class="mb-0">Mobile No: <span class="paragraph_color">(316) 555-0116</span></p>
                                                </div>
                                            </label>
                                        </div>
                                        <div class="text-right btn_address_cta align-self-end mb-2">
                                            <a href="" class="btn-transparent">Edit</a>
                                            <a href="" class="btn-transparent">Remove</a>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p class="paragraph_color">By placing this order you agree the <a href="term_condition.php" class="text_dark">terms & conditions</a> & <a href="privacy_policy.php" class="text_dark">privacy policy</a></p>
                                    <button type="button" id="btn_saved_address" onclick="$('.delivery_address').hide();$('.delivery_method').show();" class="btn-yellow-1 mt-3 mb-5">Confirm</button>
                                </div>
                            </div>
                            <!-- delivery address end -->
                            <!-- Add new address start -->
                            <div class="new_address" style="display:none">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">First Name</label>
                                                <input class="form-control" type="text" placeholder="enter email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Last Name</label>
                                                <input class="form-control" type="text" placeholder="enter email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Country or Region</label>
                                                <select class="form-control" name="" id="">
                                                    <option value="">select a country or region</option>
                                                    <option value="">kubbait</option>
                                                    <option value="">kubbait</option>
                                                    <option value="">kubbait</option>
                                                    <option value="">kubbait</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Area</label>
                                                <select class="form-control" name="" id="">
                                                    <option value="">select a city</option>
                                                    <option value="">kubbait</option>
                                                    <option value="">kubbait</option>
                                                    <option value="">kubbait</option>
                                                    <option value="">kubbait</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Block</label>
                                                <input class="form-control" type="text" placeholder="enter block">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Street</label>
                                                <input class="form-control" type="text" placeholder="enter street name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Jeada</label>
                                                <input class="form-control" type="text" placeholder="enter jeada">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">House/Building</label>
                                                <input class="form-control" type="text" placeholder="enter House/Building name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Appartments</label>
                                                <input class="form-control" type="text" placeholder="enter appartment name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">House/Building</label>
                                                <input class="form-control" type="text" placeholder="enter House/Building name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Floor</label>
                                                <input class="form-control" type="text" placeholder="enter floor number">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Mobile No.</label>
                                                <input class="form-control" type="text" placeholder="emter mobile no.">
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-right my-4">
                                            <button class="btn-yellow" onclick="$('.new_address').hide();$('.delivery_address').show();>Cancel</button>
                                            <button class="btn-yellow-1" onclick="$('.new_address').hide();$('.delivery_address').show();">Save Address</button>
                                        </div>
                                    </div>
                            </div>
                            <!-- Add new address end -->
                            <!-- delivery method start -->
                             <div class="delivery_method" style="display:none">
                                <div class="address_wrapper">
                                    <h5 class="font-cera mb-3 fs-18 font-weight-light">Choose a Delivery Method</h5>
                                    <div class="border_card d-flex justify-content-between mb-2">
                                        <div class="custom-control custom-radio custom-control-inline d-flex align-items-center">
                                            <input type="radio" id="delivery_method_1" name="delivery_method" class="custom-control-input">
                                            <label class="custom-control-label pl-1" for="delivery_method_1">Local Delivery</label>
                                        </div>
                                    </div>
                                    <div class="border_card d-flex justify-content-between mb-2">
                                        <div class="custom-control custom-radio custom-control-inline d-flex align-items-center">
                                            <input type="radio" id="delivery_method_2" name="delivery_method" class="custom-control-input">
                                            <label class="custom-control-label pl-1" for="delivery_method_2">DHL Shipping</label>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p class="paragraph_color">By placing this order you agree the <a href="term_condition.php" class="text_dark">terms & conditions</a> & <a href="privacy_policy.php" class="text_dark">privacy policy</a></p>
                                    <button type="button" id="btn_delivery_method" onclick="$('.delivery_method').hide();$('.payment_method').show();" class="btn-yellow-1 mt-3 mb-5" >Confirm</button>
                                </div>
                            </div>
                            <!-- delivery method end -->
                            <!-- Payment method start -->
                            <div class="payment_method" style="display:none">
                                <div class="address_wrapper">
                                    <h5 class="font-cera mb-3 fs-18 font-weight-light">Choose a Payment Method</h5>
                                    <div class="border_card d-flex justify-content-between mb-2">
                                        <div class="custom-control custom-radio custom-control-inline d-flex align-items-center">
                                            <input type="radio" id="payment_method_1" name="payment_method" class="custom-control-input">
                                            <label class="custom-control-label pl-1" for="payment_method_1">Cash On Delivery</label>
                                        </div>
                                    </div>
                                    <div class="border_card d-flex justify-content-between mb-2">
                                        <div class="custom-control custom-radio custom-control-inline d-flex align-items-center">
                                            <input type="radio" id="payment_method_2" name="payment_method" class="custom-control-input">
                                            <label class="custom-control-label pl-1" for="payment_method_2">KNET On Delivery</label>
                                        </div>
                                    </div>
                                    <div class="border_card d-flex justify-content-between mb-2">
                                        <div class="custom-control custom-radio custom-control-inline d-flex align-items-center">
                                            <input type="radio" id="payment_method_3" name="payment_method" class="custom-control-input">
                                            <label class="custom-control-label pl-1" for="payment_method_3">KNET/Visa/Master</label>
                                        </div>
                                    </div>
                                    <div class="border_card d-flex justify-content-between mb-2">
                                        <div class="custom-control custom-radio custom-control-inline d-flex align-items-center">
                                            <input type="radio" id="payment_method_4" name="payment_method" class="custom-control-input">
                                            <label class="custom-control-label pl-1" for="payment_method_4">My Wallet</label>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <p class="paragraph_color">By placing this order you agree the <a href="term_condition.php" class="text_dark">terms & conditions</a> & <a href="privacy_policy.php" class="text_dark">privacy policy</a></p>
                                    <button type="button" id="btn_payment_method" onclick="$('.payment_method').hide();$('.date_and_time').show();" class="btn-yellow-1 mt-3 mb-5" >Submit Order</button>
                                </div>
                            </div>
                            <!-- Payment method end -->
                            <!-- Date & Time start -->
                            <div class="date_and_time" style="display:none">
                                <div class="date_time_wrapper">
                                    <h5 class="font-cera mb-3 fs-18">Choose a Date & Time</h5>
                                    <div class="date_time_tab">
                                        <ul class="d-flex">
                                            <li>
                                                <h5 class="font-cera">Mon</h5>
                                                <p>Sep, 12</p>
                                            </li>
                                            <li class="active">
                                                <h5 class="font-cera">Tue</h5>
                                                <p>Sep, 12</p>
                                            </li>
                                            <li>
                                                <h5 class="font-cera">Wed</h5>
                                                <p>Sep, 12</p>
                                            </li>
                                            <li>
                                                <h5 class="font-cera">Thu</h5>
                                                <p>Sep, 12</p>
                                            </li>
                                            <li>
                                                <h5 class="font-cera">Fri</h5>
                                                <p>Sep, 12</p>
                                            </li>
                                            <li>
                                                <h5 class="font-cera">Sat</h5>
                                                <p>Sep, 12</p>
                                            </li>
                                            <li>
                                                <h5 class="font-cera">Sun</h5>
                                                <p>Sep, 12</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <h5 class="font-cera mb-3 py-2 fs-18">OR</h5>
                                    <button class="btn-transparent border-white mb-4">Pick Another Day</button>
                                    <div class="border_card d-flex justify-content-between mb-2">
                                        <div class="custom-control custom-radio custom-control-inline d-flex align-items-center">
                                            <input type="radio" id="date_time_1" name="date_time" class="custom-control-input">
                                            <label class="custom-control-label pl-1" for="date_time_1">Between 10:00am to 02:00pm</label>
                                        </div>
                                    </div>
                                    <div class="border_card d-flex justify-content-between mb-2">
                                        <div class="custom-control custom-radio custom-control-inline d-flex align-items-center">
                                            <input type="radio" id="date_time_2" name="date_time" class="custom-control-input">
                                            <label class="custom-control-label pl-1" for="date_time_2">Between 02:00pm to 6:00pm</label>
                                        </div>
                                    </div>
                                    <div class="border_card d-flex justify-content-between mb-2">
                                        <div class="custom-control custom-radio custom-control-inline d-flex align-items-center">
                                            <input type="radio" id="date_time_3" name="date_time" class="custom-control-input">
                                            <label class="custom-control-label pl-1" for="date_time_3">Between 06:00PM TO 10:00PM </label>
                                        </div>
                                    </div>
                                    <button type="button" id="btn_date_and_time" class="btn-yellow-1 mt-4 mb-5">Confirm</button>
                                </div>
                                <!-- Date & Time end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="payment_deatils_wrapper">
                    <h4 class="font-cera border-bottom payment_deatils_title pb-4">Payment Detail</h4>
                    <table class="table table-borderless payment_deatils_table">
                        <thead>
                            <tr>
                                <th>FIRST ORDER</th>
                                <th>APPLIED</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th colspan="2" class="fs-22">Product Price</th>
                            </tr>
                            <tr>
                                <td>Total Product MRP</td>
                                <td>KWD 200</td>
                            </tr>
                            <tr>
                                <td>Promo Discount</td>
                                <td>KWD 60</td>
                            </tr>
                            <tr>
                                <td>Delivery Charge</td>
                                <td>Free Shipping</td>
                            </tr>
                            <tr>
                                <td>Finishing Touches</td>
                                <td>KWD10.20</td>
                            </tr>
                        </tbody>
                        <tfoot class="border-top">
                            <tr>
                                <th>Total Amount</th>
                                <th>KWD 140</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('include/footer.php');?>