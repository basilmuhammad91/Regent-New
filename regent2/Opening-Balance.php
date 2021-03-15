<?php

include('header.php');
include('connect.php');

if(isset($_POST['submit']))
{
    $opening_balance = $_POST['opening_balance'];
    $opening_balance_date = $_POST['opening_balance_date'];
    $expense_date = $_POST['expense_date'];
    $amount = $_POST['amount'];
    $description = $_POST['description'];

    $query = mysqli_query($con, "INSERT INTO `expenses`(`opening_balance`, `opening_balance_date`, `expense_date`, `amount`, `description`) VALUES (
        '$opening_balance', '$opening_balance_date', '$expense_date', '$amount', '$description')");

    if($query)
    {
        echo "<script>alert('Submitted')</script>";
    }
    else
    {
        echo "<script>alert('Error')</script>";
    }

}


?>
	
		
<form action="#" method="post">
  	<section class="container-fluid">
        <h5>Opening Balance</h5>
        <br>

    	<section class="container-fluid">
          
                <section class="row">

    				<section class="col-xl-3">
                        <input name="opening_balance" type="data"  class="form-control input-box" placeholder="Opening Balance" maxlength="9"/>
                    </section>

    				<section class="col-xl-3">
                        <input name="opening_balance_date" type="date"  class="form-control input-box" placeholder="Visa No." maxlength="9"/>
                    </section>

    			</section>     
        </section>

</section>

<hr>
	<section class="container-fluid">
    <h5>Expense</h5>
    <br>

	<section class="container-fluid">
        
            <section class="row">

               
                
               <!--  <section class="col-xl-3">
                    <input type="text"  class="form-control input-box" placeholder="Serial No." maxlength="9"/>
                </section> -->


				<section class="col-xl-3">
					<input name="expense_date" type="date"  class="form-control input-box"/>
                </section>

				<section class="col-xl-3">
                    <input name="amount" type="text" class="form-control input-box" placeholder="Amount" maxlength="9"/>
                </section>

				<section class="col-xl-3">
                    <textarea name="description" class="form-control input-box" id="exampleFormControlTextarea1"  placeholder="Description" ></textarea>
                </section>

                <section class="col-xl-3 mb-5">
                	<input name="submit" type="submit" class="btn-primary btn  pl-5 pr-5" style="position: relative; top: 15px;" value="Submit & Print" />	
                </section>

	
			</section>


				

              
        
    </section>

</section>
</form>




<hr>

</body>
</html>
<script >
	$(".hijri-date-input").hijriDatePicker();
</script>

<script>
	$(document).ready(function(){
		$('.showhide1').on('click', function(){
			$('.main1').toggle(300);
		});
	});
</script>


<script src="js/jquery-fab-button.js"></script>

