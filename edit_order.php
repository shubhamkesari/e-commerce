<?php include('include/header.php');?>
<section class="edit_order py_5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <?php include('include/myaccount_sidebar.php');?>
            </div>
            <div class="col-lg-9 col-md-8">
                <div class="row">
                    <div class="col-12">
                        <div class="sub_heading mb-4">
                            <a href="" class="back_arrow mr-3 d-flex flex-column flex-md-row flex-xs-column align-items-center"><i class="fas fa-long-arrow-alt-left"></i> <h3 class="mb-0 ml-4">Edit Order</h3></a>
                        </div>
                    </div>
                    <div class="col-lg-10 offset-lg-1">
                        <div class="bg-gray text-center alert_card mb-4">
                            <img src="assets/images/alert.png" alt="">
                            <h4 class="text-dark-gray font-cera mt-4">Product not shipped yet make your changes.</h4>
                        </div>
                        <div class="border_card d-flex justify-content-between align-items-center mb-3">
                            <h4 class="font-cera mb-0 fs-20">Qty.</h4>
                            <div class="quantity_input">
                                <button onclick="decrement()">-</button>  
                                <h5 class="mb-0 font-cera quantity_text" id="quantity_number"></h5>
                                <button onclick="increment()">+</button>  
                            </div>
                        </div>
                        <div class="border_card d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <h5 class="mb-0 fs-20 font-cera">Address</h5>
                                <p class="mb-0 text-paragraph">2118 Thornridge Cir. Syracuse, Connecticut 35624</p>
                            </div>
                            <a class="btn_add_cart" href="" tabindex="0"><u>Change Address</u></a>
                        </div>
                        <div class="border_card d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <h5 class="mb-0 fs-20 font-cera">Payment Method</h5>
                                <p class="mb-0 text-paragraph">Cash on Delivery</p>
                            </div>
                            <a class="btn_add_cart" href="" tabindex="0"><u>Change Payment Method</u></a>
                        </div>
                        <div class="border_card mb-3">
                            <div class="d-flex justify-content-between">
                                <h5 class="fs-20 font-cera">Card Message</h5>
                                <a class="btn_add_cart" href="" tabindex="0"><u>Remove</u></a>
                            </div>
                            <div class="form-group mt-2 position-relative message_card_input">
                                <input type="text" disabled="disabled" class="input_message" />
                                <span><i class="fa fa-pen"></i></span>
                            </div>
                        </div>
                        <a type="button" class="btn-yellow w-100 mt-4">Continue</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('include/footer.php');?>
<script>
    //quantity number increment and decrement
    var quantity_text = 0;

    document.getElementById("quantity_number").innerText = quantity_text;

    function increment() {
        quantity_text = quantity_text + 1;
        document.getElementById("quantity_number").innerText = quantity_text;
    }

    function decrement() {
        quantity_text = quantity_text - 1;
        document.getElementById("quantity_number").innerText = quantity_text;
    }
</script>