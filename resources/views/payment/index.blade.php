@extends('web.layouts.master')
@section('content')
<div class="row mt10 align-items-center ">
    <div class="col-lg-6 d-flex justify-content-center">
        <img src="{{asset('dow')}}" alt="">
        <div id="paypal-button-container"></div>
    </div>
    <div class="col-lg-6">
        <h1 class="pay-head">Credit/Debit Card</h1>
        <div action="" class="db-form">
            <div class="row cc-form">
                <div class="col-lg-12 mt1">
                    <label for="">Name On Card</label>
                    <input placeholder="Name On Card" type="text">
                </div>
                <div class="col-lg-12 mt1">
                    <label for="">Card Number</label>
                    <input placeholder="Card Number" type="text">
                </div>

                <div class="col-lg-4 mt1">
                    <label for="">CVV</label>
                    <input placeholder="123" type="text">
                </div>
                <div class="col-lg-4 mt1">
                    <label for="">Expriration Month</label>
                    <input placeholder="10" type="text">
                </div>
                <div class="col-lg-4 mt1">
                    <label for="">Expiration year</label>
                    <input placeholder="2025" type="text">
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    paypal.Buttons({
      createOrder: function(data, actions) {
        // This function sets up the details of the transaction, including the amount and line item details.
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: '0.01'
            }
          }]
        });
      },
      onApprove: function(data, actions) {
        // This function captures the funds from the transaction.
        return actions.order.capture().then(function(details) {
          // This function shows a transaction success message to your buyer.
          console.log(details)
          alert('Transaction completed by ' + details.payer.name.given_name);
        });
      }
    }).render('#paypal-button-container');
    //This function displays Smart Payment Buttons on your web page.
  </script>
@endsection

<style>
    .cc-form{
        padding:0 3rem 0 0 !important;
    }
    .pay-head {
        font-family: bebuseRegular;
        color: #55d729;
    }

    .db-form {
        /* padding: 1rem 0; */
    }

    .db-form .col-lg-12 input {
        width: 100%;
    }

    .db-form input {
        width: 100%;
        padding: 0.5rem 1rem;
    }

    .paypal-btn {
        font-family: bebuseRegular;
        color: #3c3c3c;
        padding: 0.5rem 5rem;
        background-color: #55d729;
        border: none;
    }

    .row {
        padding: 0;
    }

</style>
