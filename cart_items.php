<?php include('include/header.php');?>
<section class="cart_items_section py_5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="sub_heading mb-3">
                    <h3 class="mb-0">Items in Cart</h3>
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
                <div class="row">
                    <div class="col-12">
                        <div class="orders_card">
                            <div class="orders_content">
                                <img src="assets/images/features-image.png" alt="">
                                <div class="ml-3">
                                    <h5 class="mb-0 font-cera fs-18">BABY TOYS Mini bike Rechargeable battery</h5>
                                    <p class="paragraph_color fs-15">Discription for baby toy mini bike rechargeble battery</p>
                                    <div class="quantity_input">
                                        <div class="quantity_buttons">
                                            <button class="decrement" onclick="decrement()">-</button>  
                                            <h5 class="mb-0 font-cera quantity_text" id="quantity_number"></h5>
                                            <button class="increment" onclick="increment()">+</button>
                                        </div>
                                        <button class="cart_remove"><i class="fas fa-times mr-1"></i> <u>Remove</u></button>
                                    </div>
                                </div>
                            </div>
                            <div class="order_price_info ml-auto text-right">
                                <h4 class="cart_text font-cera mb-4 fs-22">KWD 14.40 </h4>
                                <a class="btn_add_cart" href="" tabindex="0"><u>Move to wishlist</u></a>
                            </div>
                        </div>
                        <div class="orders_card">
                            <div class="orders_content">
                                <img src="assets/images/features-image.png" alt="">
                                <div class="ml-3">
                                    <h5 class="mb-0 font-cera fs-18">BABY TOYS Mini bike Rechargeable battery</h5>
                                    <p class="paragraph_color fs-15">Discription for baby toy mini bike rechargeble battery</p>
                                    <div class="quantity_input">
                                        <div class="quantity_buttons">
                                            <button class="decrement" onclick="decrement()">-</button>  
                                            <h5 class="mb-0 font-cera quantity_text" id="quantity_number"></h5>
                                            <button class="increment" onclick="increment()">+</button>
                                        </div>
                                        <button class="cart_remove"><i class="fas fa-times mr-1"></i> <u>Remove</u></button>
                                    </div>
                                </div>
                            </div>
                            <div class="order_price_info ml-auto text-right">
                                <h4 class="cart_text font-cera mb-4 fs-22">KWD 14.40 </h4>
                                <a class="btn_add_cart" href="" tabindex="0"><u>Move to wishlist</u></a>
                            </div>
                        </div>
                        <div class="orders_card">
                            <div class="orders_content">
                                <img src="assets/images/features-image.png" alt="">
                                <div class="ml-3">
                                    <h5 class="mb-0 font-cera fs-18">BABY TOYS Mini bike Rechargeable battery</h5>
                                    <p class="paragraph_color fs-15">Discription for baby toy mini bike rechargeble battery</p>
                                    <div class="quantity_input">
                                        <div class="quantity_buttons">
                                            <button class="decrement" onclick="decrement()">-</button>  
                                            <h5 class="mb-0 font-cera quantity_text" id="quantity_number"></h5>
                                            <button class="increment" onclick="increment()">+</button>
                                        </div>
                                        <button class="cart_remove"><i class="fas fa-times mr-1"></i> <u>Remove</u></button>
                                    </div>
                                </div>
                            </div>
                            <div class="order_price_info ml-auto text-right">
                                <h4 class="cart_text font-cera mb-4 fs-22">KWD 14.40 </h4>
                                <a class="btn_add_cart" href="" tabindex="0"><u>Move to wishlist</u></a>
                            </div>
                        </div>
                        <div class="border_card mt-5 mb-3">
                            <div class="d-flex justify-content-between">
                                <h5 class="fs-20 font-cera">Card Message</h5>
                                <a class="btn_add_cart" href="" tabindex="0"><u>Remove</u></a>
                            </div>
                            <div class="form-group mt-2 position-relative message_card_input">
                                <input type="text" disabled="disabled" class="input_message">
                                <span><i class="fa fa-pen"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center mt-5 mb-3">
                            <h5 class="mb-0 font-cera">Add Finishing Touches</h5>
                            <a class="btn_add_cart" href="" tabindex="0"><u>Remove</u></a>
                        </div>
                        <ul class="category_wrapper popular_categories items_cart_slick slick_arrow list-unstyled p-0 mt-4">
                            <li class="slick-items">
                                <div class="category_card">
                                    <input type="checkbox" class="item_cart_checkbox" name="" id="">
                                    <p class="paragraph_color mb-2">Gift Boxes</p>
                                    <h5>KWD 10.20</h5>
                                    <div class="cart_slider_image mx-auto">
                                        <img src="assets/images/surprise.png" alt="">
                                    </div>
                                </div>
                            </li>
                            <li class="slick-items">
                                <div class="category_card">
                                    <input type="checkbox" class="item_cart_checkbox" name="" id="">
                                    <p class="paragraph_color mb-2">Gift Boxes</p>
                                    <h5>KWD 10.20</h5>
                                    <div class="cart_slider_image mx-auto">
                                        <img src="assets/images/surprise.png" alt="">
                                    </div>
                                </div>
                            </li>
                            <li class="slick-items">
                                <div class="category_card">
                                    <input type="checkbox" class="item_cart_checkbox" name="" id="">
                                    <p class="paragraph_color mb-2">Gift Boxes</p>
                                    <h5>KWD 10.20</h5>
                                    <div class="cart_slider_image mx-auto">
                                        <img src="assets/images/surprise.png" alt="">
                                    </div>
                                </div>
                            </li>
                            <li class="slick-items">
                                <div class="category_card">
                                    <input type="checkbox" class="item_cart_checkbox" name="" id="">
                                    <p class="paragraph_color mb-2">Gift Boxes</p>
                                    <h5>KWD 10.20</h5>
                                    <div class="cart_slider_image mx-auto">
                                        <img src="assets/images/surprise.png" alt="">
                                    </div>
                                </div>
                            </li>
                            <li class="slick-items">
                                <div class="category_card">
                                    <input type="checkbox" class="item_cart_checkbox" name="" id="">
                                    <p class="paragraph_color mb-2">Gift Boxes</p>
                                    <h5>KWD 10.20</h5>
                                    <div class="cart_slider_image mx-auto">
                                        <img src="assets/images/surprise.png" alt="">
                                    </div>
                                </div>
                            </li>
                            <li class="slick-items">
                                <div class="category_card">
                                    <input type="checkbox" class="item_cart_checkbox" name="" id="">
                                    <p class="paragraph_color mb-2">Gift Boxes</p>
                                    <h5>KWD 10.20</h5>
                                    <div class="cart_slider_image mx-auto">
                                        <img src="assets/images/surprise.png" alt="">
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
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