<?php

include('header.php');
include('connect.php');

if(!isset($_SESSION['user_id']))
{
    echo "<script>window.location.href='index.php';</script>";
}

// SUBMIT RECORD TO EXPENSES TABLE
if (isset($_POST['submit'])) {
    $expenses_date = $_POST['expenses_date'];
    $amount = $_POST['amount'];
    $description = $_POST['description'];
    $opening_balance_id = $_POST['opening_balance_id'];

    $query2 = mysqli_query($con, "
INSERT INTO `expenses`(`expenses_date`, `amount`, `description`, `opening_balance_id`) VALUES ('$expenses_date','$amount','$description','$opening_balance_id')
        ") or die(mysqli_error($con));

    if($query2>0)
    {
        echo "<script>window.location.href='Opening-Balance.php';</script>";
    }
    else
    {
        echo "<script>alert('Error')</script>";
    }

}

?>

<!-- GET LAST ID FROM OPENING BALANCES TABLE -->
<?php
    $query1 = mysqli_query($con, "SELECT * FROM opening_balances ORDER BY id DESC LIMIT 1") or die(mysqli_error($con));
    $row1 = mysqli_fetch_array($query1);
    $current_date = date('Y-m-d');

    $total_days_query = mysqli_query($con, "select datediff('$current_date', '$row1[2]')") or die(mysqli_error($con));
    $total_days = mysqli_fetch_array($total_days_query);
    if($total_days[0] >= 30)
    {
        $sum_query = mysqli_query($con, "SELECT SUM(amount) FROM expenses WHERE opening_balance_id = '$row1[0]'");
        $sum_array = mysqli_fetch_array($sum_query);
        $total_opening_balance = $sum_array[0] + $row1['opening_balance_amount'];
        echo $total_opening_balance;
        $insert_query = mysqli_query($con, "insert into opening_balances (opening_balance_amount, date) values('$total_opening_balance','$current_date')");
        if($insert_query>0)
        {
            echo "<script>window.location.href='Opening-Balance.php';</script>";
        }
    }
    
 ?>


  	<section class="container-fluid">
        <h5>Opening Balance</h5>
        <br>

    	<section class="container-fluid">

<!-- SHOW ADD OPENING BALANCE FORM TO ADMIN -->

<?php
if($_SESSION['role'] == 'Admin')
{
    if(isset($_POST['add_opening_balance']))
    {
        $opening_balance_amount = $_POST['opening_balance_amount'];
        $date = $_POST['date'];
        $query = mysqli_query($con, "insert into opening_balances (opening_balance_amount, date) values('$opening_balance_amount','$date')");

        if($query>0)
        {
            echo "<script>window.location.href='Opening-Balance.php';</script>";
        }
        else
        {
            echo "<script>alert('Error')</script>";
        }

    }
?>
                <form action="#" method="post">
                    <section class="row">
                        <section class="col-xl-3">
                            <input name="opening_balance_amount" required type="data"  class="form-control input-box" value="<?php echo $row1[1] ?>" placeholder="Opening Balance" maxlength="9"/>
                        </section>

                        <section class="col-xl-3">
                            <input name="date" type="date" required class="form-control input-box" value="<?php echo $row1[2] ?>" placeholder="Visa No." maxlength="9"/>
                        </section>
                       
                        <section class="col-xl-3 mb-5">
                            <input name="add_opening_balance" type="submit" class="btn-primary btn  pl-5 pr-5" style="position: relative; top: 15px;" value="Add" />  
                        </section>

                    </section>
                </form>
    <?php
}
else
{
    ?>
                    <section class="row">
                        <section class="col-xl-3">
                            <input name="opening_balance_amount" required type="data"  class="form-control input-box" value="<?php echo $row1[1] ?>" placeholder="Opening Balance" maxlength="9"/>
                        </section>

                        <section class="col-xl-3">
                            <input name="date" type="date" required class="form-control input-box" value="<?php echo $row1[2] ?>" placeholder="Visa No." maxlength="9" disabled="true"/>
                        </section>
                    </section>
    <?php
}
?>

        </section>

</section>

<hr>
	<section class="container-fluid">
    <h5>Expense</h5>
    <br>

	<section class="container-fluid">
        
            <form action="#" method="post">
                <section class="row">
                   
                    <section class="col-xl-3">
                        <input type="hidden" name="opening_balance_id" value="<?php echo $row1[0]?>">
                        <input name="expenses_date" type="date" required class="form-control input-box"/>
                    </section>

                    <section class="col-xl-3">
                        <input name="amount" type="text" class="form-control input-box" placeholder="Amount" required maxlength="9"/>
                    </section>

                    <section class="col-xl-3">
                        <input type="text" required name="description" class="input-box form-control" placeholder="Description">
                    </section>

                    <section class="col-xl-3 mb-5">
                        <input name="submit" type="submit" class="btn-primary btn  pl-5 pr-5" style="position: relative; top: 15px;" value="Submit & Print" />  
                    </section>
                </section>
            </form>


				

              
        
    </section>

</section>




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

