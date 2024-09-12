<?php
include './connection.php';

if(isset($_POST["btn_submit"])){
  $firstname=$_POST["txt_firstname"];
  $lastname=$_POST["txt_lastname"];
  $cardnumber=$_POST["txt_card_number"];
  $cvc=$_POST["txt_cvc"];
  $expirationdate=$_POST["date_expiration_date"];
  

  $sql=("INSERT INTO `customer`( `Firstname`, `Lastname`, `Cardnumber`, `Cvc`, `Expiration_Date`)
   VALUES ('$firstname','$lastname','$cardnumber','$cvc','$expirationdate')");

   if ($con->query($sql)===TRUE){
    echo "<script>alert('student successfully recorded')</script>";

   }
   else{
    echo "failed to record";
   }
}
?>
<style>
        body {
            background: linear-gradient(#212121, #212121)padding-box; /* Sets the background color to sky blue */
            margin: 0; /* Removes default margin */
            height: 100vh; /* Ensures the body is at least as tall as the viewport */
        }
    </style>

<body>
<main>
                   <form method="POST" action="billing_payment.php" class="row g-3 needs-validation" novalidate>

                     
                     <h1 style="display: flex; align-items: center;">
                     Customer Bill Pay
                     </h1>

                   
                    <div class="col-6">
                    <div class="form-floating">
                      <input type="text" name="txt_firstname" class="form-control" id="floatingName" required  >
                      <label for="floatingName" class="form-label">First Name</label>
                    </div>
                    </div>

                    <div class="col-6">
                    <div class="form-floating">
                      <input type="text" name="txt_lastname" class="form-control" id="floatingName" required  >
                      <label for="floatingName" class="form-label">Last Name</label>
                    </div>
                    </div>

                    <h1 style="display: flex; align-items: center;">
                     Credit Card Details
                    </h1>

                    <div class="col-6">
                    <div class="form-floating">
                      <input type="text" name="txt_card_number" class="form-control" id="floatingName" required  >
                      <label for="floatingName" class="form-label">Card Number</label>
                    </div>
                    </div>

                    <div class="col-6">
                    <div class="form-floating">
                      <input type="text" name="txt_cvc" class="form-control" id="floatingName" required  >
                      <label for="floatingName" class="form-label">Cvc</label>
                    </div>
                    </div>

                    <div class="col-6">
                    <div class="form-floating">
                      <input type="date" name="date_expiration_date" class="form-control" id="floatingDateSurveyed" required  >
                      <label for="floatingDateSurveyed" class="form-label">Expiration Date</label>
                    </div>
                    </div>
  
                    
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="btn_submit">Submit</button>
                    </div>
                  </form>
</main>
      </body>