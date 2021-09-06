@extends('web.layouts.master')
@section('content')
<div class="row mt10 align-items-center ">
    <div class="col-lg-12 d-flex justify-content-center">
        <div id="paypal-button-container"></div>
    </div>
</div>
<script>
    var paymentData =[]
    paypal.Buttons({
      createOrder: function(data, actions) {
        // This function sets up the details of the transaction, including the amount and line item details.
        return actions.order.create({
          purchase_units: [{
            amount: {
              value: {!! json_encode($price)!!}
            }

          }]
        });
      },
      onApprove: function(data, actions) {
        // This function captures the funds from the transaction.
        return actions.order.capture().then(function(details) {
          // This function shows a transaction success message to your buyer.
          paymentData.push(
              details
          )
          console.log(paymentData)
          $.ajax({
                url: '{{route('test')}}',
                method: "POST",
                data: {
                    paymaentInfo: paymentData
                },
                success: function (response) {
                    console.log('response',response)
                },

            });
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
