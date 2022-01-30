<?php include('include/header.php');?>
<!-- Button trigger modal -->
<div class="my-5">
    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modal_payment_successful">
    payment successful
    </button>
    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modal_payment_failed">
    payment failed
    </button>
    <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modal_card_message">
    Card message
    </button>
</div>

<!--payment successful Modal start here -->
<div class="modal modal_center fade" id="modal_payment_successful" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="material-icons-round">close</span>
        </button>
        <div class="modal_rounded_icon mb-4">
            <span class="material-icons-round">check</span>
        </div>
        <h4>Payment Successful</h4>
        <p class="paragraph_color fs-14">A copy of your receipt has been sent to your email </p>
        <button type="button" class="btn-yellow-1 mx-auto mt-4">Back To Orders</button>
      </div>
    </div>
  </div>
</div>
<!--payment successful Modal end here -->
<!--payment failed Modal start here -->
<div class="modal modal_center fade" id="modal_payment_failed" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="material-icons">close</span>
        </button>
        <div class="modal_rounded_icon mb-4 bg-light-peach">
        <span class="material-icons-round">priority_high</span>
        </div>
        <h4>Payment Failed</h4>
        <p class="paragraph_color fs-14">Please Try a different method</p>
        <button type="button" class="btn-yellow-1 mx-auto mt-4">Retry</button>
      </div>
    </div>
  </div>
</div>
<!--payment failed Modal end here -->
<!--Card message Modal start here -->
<div class="modal card_message fade" id="modal_card_message" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="material-icons">close</span>
        </button>
        <h4 class="mb-4">Card Message</h4>
        <img src="assets/images/qr.png" class="img-fluid" alt="">        
      </div>
    </div>
  </div>
</div>
<!--card message Modal end here -->

<?php include('include/footer.php');?>