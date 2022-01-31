<?php include('include/header.php');?>
<section class="location_details_wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="back_btn mb-4">
                    <a href=""><i class="fas fa-long-arrow-alt-left"></i> Back</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mr-md-3">
                    <img src="assets/images/store_cards/1.png" class="img-fluid store_image" alt="">
                </div>
                <ul class="store_loctaion_slider store_location_slick">
                    <li>
                        <img src="assets/images/store_cards/slide-1.png" class="img-fluid" alt="">
                    </li>
                    <li>
                        <img src="assets/images/store_cards/slide-2.png" class="img-fluid" alt="">
                    </li>
                    <li>
                        <img src="assets/images/store_cards/slide-3.png" class="img-fluid" alt="">
                    </li>
                    <li>
                        <img src="assets/images/store_cards/slide-4.png" class="img-fluid" alt="">
                    </li>
                    <li>
                        <img src="assets/images/store_cards/slide-1.png" class="img-fluid" alt="">
                    </li>
                    <li>
                        <img src="assets/images/store_cards/slide-2.png" class="img-fluid" alt="">
                    </li>
                    <li>
                        <img src="assets/images/store_cards/slide-3.png" class="img-fluid" alt="">
                    </li>
                    <li>
                        <img src="assets/images/store_cards/slide-4.png" class="img-fluid" alt="">
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="ml-md-3">
                    <h3 class="location_heading">Promnade Mall</h3>
                    <div class="country_div">
                        <img src="assets/images/store_cards/country_image.png" class="img-fluid rounded-circle" alt="">
                        <div class="ml-2">
                            <h5 class="country_text">Country</h5>
                            <p class="country_name">United Arab Emirates</p>
                        </div>
                    </div>
                    <p class="store_location">8502 Preston Rd. Inglewood, Mainetreie Station Near Amni Bank 98380</p>
                    <div class="w-100">
                        <a href="tel:7777777777" class="btn-yellow btn-full-width">Call Us</a>
                    </div>
                </div>
                <div>
                    <div class="location_map" id="map"></div>

                    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&libraries=&v=weekly&channel=2" async></script>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('include/footer.php');?>