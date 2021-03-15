<?php

include('header.php');
include('connect.php');

?>
	
		
<section class="container-fluid">
    <h5>Opening Balance</h5>
    <br>

	<section class="container-fluid">
        <form action="" >
            <section class="row">

				<section class="col-xl-3">
                    <input type="data"  class="form-control input-box" placeholder="Opening Balance" maxlength="9"/>
                </section>

				<section class="col-xl-3">
                    <input type="date"  class="form-control input-box" placeholder="Visa No." maxlength="9"/>
                </section>

			</section>     
        </form>
    </section>

</section>

<hr>
<section class="container-fluid">
    <h5>Expanse</h5>
    <br>

	<section class="container-fluid">
        <form action="" class="">
            <section class="row">

               

                <section class="col-xl-3">
                    <input type="text"  class="form-control input-box" placeholder="Serial No." maxlength="9"/>
                </section>


				<section class="col-xl-3">
					<input type="date"  class="form-control input-box"/>
                </section>

				<section class="col-xl-3">
                    <input type="text"  class="form-control input-box" placeholder="Amount" maxlength="9"/>
                </section>

				<section class="col-xl-3">
                    <textarea class="form-control input-box" id="exampleFormControlTextarea1"  placeholder="Discription" ></textarea>
                </section>

	
			</section>


				

              
        </form>
    </section>

</section>


<br>

<section class="container">
    <section class="row" style="align-items: center;">
        <section class="col-5 m-auto text-center">
              <a >
              <input type="button" class="btn-primary btn  pl-2 pr-2" style="position: relative; top: 15px;" value="Submit" />
              </a>			

        </section>
    </section>
</section>

<br><br>
 


<section class="container-fluid">



<section class="container-fluid">
    <!-- ============= -->
	<section class="row" style="align-items: center;">
		<section class="col-md-2">
			<span >From</span>
			<input id="date_from" name="date_from" type="date" class="form-control input-box" />
		</section>
		<section class="col-md-2">
			<span >To</span>
			<input id="date_to" name="date_to" type="date" class="form-control input-box" />
		</section>
</section>
</section>
   

</section>
<br>

<section class="container-fluid text-center">
<input type="button" class="btn-primary btn " style="position: relative; top: 4px; height: 35px; font-size: 14px;" value="Sample Excel" />
<input type="button" class="btn-primary btn " style="position: relative; top: 4px; height: 35px; font-size: 14px;" value="Import Excel" />
<input type="button" class="btn-primary btn " style="position: relative; top: 4px; height: 35px; font-size: 14px;" value="Export Excel" />
<input type="button" class="btn-primary btn " style="position: relative; top: 4px; height: 35px; font-size: 14px;" value="Print" />
</section>

<br>

<section class="container">

            <table class="table  mb-5  " style="padding-bottom:130px;">
              
                <thead>
                    <tr>
                      <th scope="col">S_No.</th>
                      <th scope="col" ><span class="text-primary"></span>Action<span class="text-primary"></span></th>
                      <th scope="col">Date</th>
                      <th scope="col">Discription</th>
                      <th scope="col">Amount</th>
                      <th scope="col">Balance</th>
                     

                    </tr>
                  </thead>
                  <tbody>
                   
        
                   

                <tr>
                     <th scope="row">1</th>

                     <td >

                     <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="font-size: 12px !important; color: white; padding: 0px; margin: 0px; padding-left: 5px !important; padding-right: 5px !important;">
                                Action
                            </button>
                            <div class="dropdown-menu fadeInUp animated faster pl-2" id="table-dropdown" aria-labelledby="dropdownMenuButton">
                                            <a style="font-size: 13px; font-weight: bold;" href="" class="text-dark p-2">Edit</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href=""  class="text-dark p-2">Delete</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href="Visa-Form.php" class="btn text-light bg-warning p-1 ">Visa Form</a> <br>
                                            <a style="font-size: 13px; font-weight: bold; cursor:pointer" data-toggle="modal" data-target="#exampleModal "class="text-dark p-2" >Done Visa Form</a>
                            </div>
                    </div>


							<!----------		
										<a class="btn btn-primary " id="showhide2"  style="font-size: 12px !important; color: white; padding: 0px; margin: 0px; padding-left: 5px !important; padding-right: 5px !important;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										  Action
										</a>

                                        <section id="main2" class=" p-2 border bg-light" style="display:none; position: absolute !important">
                                        <a style="font-size: 13px; font-weight: bold;" href="" class="text-dark p-2">Edit</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href=""  class="text-dark p-2">Delete</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href=""  class="text-dark p-2">View</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href="Visa-Form.php" class="btn text-light bg-warning p-1 ">Visa</a> <br>
                                            <a style="font-size: 13px; font-weight: bold; cursor:pointer" data-toggle="modal" data-target="#exampleModal "class="text-dark p-2" >Done Visa</a>
                                        </section>
									
								----->	
				        </td>

                                                
                    <td>2.feb.2021</td>
                    <td><b>Opening Balance</b></td>
                    <td>nil</td>
                    <td>20000</td>
                    
                   
                </tr>

                <tr>
                     <th scope="row">1</th>

                     <td >

                     <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="font-size: 12px !important; color: white; padding: 0px; margin: 0px; padding-left: 5px !important; padding-right: 5px !important;">
                                Action
                            </button>
                            <div class="dropdown-menu fadeInUp animated faster pl-2" id="table-dropdown" aria-labelledby="dropdownMenuButton">
                                            <a style="font-size: 13px; font-weight: bold;" href="" class="text-dark p-2">Edit</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href=""  class="text-dark p-2">Delete</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href=""  class="text-dark p-2">View</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href="Visa-Form.php" class="btn text-light bg-warning p-1 ">Visa Form</a> <br>
                                            <a style="font-size: 13px; font-weight: bold; cursor:pointer" data-toggle="modal" data-target="#exampleModal "class="text-dark p-2" >Done Visa Form</a>
                            </div>
                    </div>


							<!----------		
										<a class="btn btn-primary " id="showhide2"  style="font-size: 12px !important; color: white; padding: 0px; margin: 0px; padding-left: 5px !important; padding-right: 5px !important;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										  Action
										</a>

                                        <section id="main2" class=" p-2 border bg-light" style="display:none; position: absolute !important">
                                        <a style="font-size: 13px; font-weight: bold;" href="" class="text-dark p-2">Edit</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href=""  class="text-dark p-2">Delete</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href=""  class="text-dark p-2">View</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href="Visa-Form.php" class="btn text-light bg-warning p-1 ">Visa</a> <br>
                                            <a style="font-size: 13px; font-weight: bold; cursor:pointer" data-toggle="modal" data-target="#exampleModal "class="text-dark p-2" >Done Visa</a>
                                        </section>
									
								----->	
				        </td>

                                                
                    <td>2.feb.2021</td>
                    <td>chai</td>
                    <td>1000</td>
                    <td></td>
                    
                   
                </tr>

                <tr>
                     <th scope="row">1</th>

                     <td >

                     <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="font-size: 12px !important; color: white; padding: 0px; margin: 0px; padding-left: 5px !important; padding-right: 5px !important;">
                                Action
                            </button>
                            <div class="dropdown-menu fadeInUp animated faster pl-2" id="table-dropdown" aria-labelledby="dropdownMenuButton">
                                            <a style="font-size: 13px; font-weight: bold;" href="" class="text-dark p-2">Edit</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href=""  class="text-dark p-2">Delete</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href=""  class="text-dark p-2">View</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href="Visa-Form.php" class="btn text-light bg-warning p-1 ">Visa Form</a> <br>
                                            <a style="font-size: 13px; font-weight: bold; cursor:pointer" data-toggle="modal" data-target="#exampleModal "class="text-dark p-2" >Done Visa Form</a>
                            </div>
                    </div>


							<!----------		
										<a class="btn btn-primary " id="showhide2"  style="font-size: 12px !important; color: white; padding: 0px; margin: 0px; padding-left: 5px !important; padding-right: 5px !important;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										  Action
										</a>

                                        <section id="main2" class=" p-2 border bg-light" style="display:none; position: absolute !important">
                                        <a style="font-size: 13px; font-weight: bold;" href="" class="text-dark p-2">Edit</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href=""  class="text-dark p-2">Delete</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href=""  class="text-dark p-2">View</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href="Visa-Form.php" class="btn text-light bg-warning p-1 ">Visa</a> <br>
                                            <a style="font-size: 13px; font-weight: bold; cursor:pointer" data-toggle="modal" data-target="#exampleModal "class="text-dark p-2" >Done Visa</a>
                                        </section>
									
								----->	
				        </td>

                                                
                    <td>2.feb.2021</td>
                    <td>khana</td>
                    <td>3000</td>
                    <td></td>
                    
                   
                </tr>

                <tr>
                     <th scope="row">1</th>

                     <td >

                     <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="font-size: 12px !important; color: white; padding: 0px; margin: 0px; padding-left: 5px !important; padding-right: 5px !important;">
                                Action
                            </button>
                            <div class="dropdown-menu fadeInUp animated faster pl-2" id="table-dropdown" aria-labelledby="dropdownMenuButton">
                                            <a style="font-size: 13px; font-weight: bold;" href="" class="text-dark p-2">Edit</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href=""  class="text-dark p-2">Delete</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href=""  class="text-dark p-2">View</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href="Visa-Form.php" class="btn text-light bg-warning p-1 ">Visa Form</a> <br>
                                            <a style="font-size: 13px; font-weight: bold; cursor:pointer" data-toggle="modal" data-target="#exampleModal "class="text-dark p-2" >Done Visa Form</a>
                            </div>
                    </div>


							<!----------		
										<a class="btn btn-primary " id="showhide2"  style="font-size: 12px !important; color: white; padding: 0px; margin: 0px; padding-left: 5px !important; padding-right: 5px !important;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										  Action
										</a>

                                        <section id="main2" class=" p-2 border bg-light" style="display:none; position: absolute !important">
                                        <a style="font-size: 13px; font-weight: bold;" href="" class="text-dark p-2">Edit</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href=""  class="text-dark p-2">Delete</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href=""  class="text-dark p-2">View</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href="Visa-Form.php" class="btn text-light bg-warning p-1 ">Visa</a> <br>
                                            <a style="font-size: 13px; font-weight: bold; cursor:pointer" data-toggle="modal" data-target="#exampleModal "class="text-dark p-2" >Done Visa</a>
                                        </section>
									
								----->	
				        </td>

                                                
                    <td>2.feb.2021</td>
                    <td>books</td>
                    <td>9000</td>
                    <td></td>
                    
                   
                </tr>

                <tr>
                     <th scope="row"></th>

                     <td >



							<!----------		
										<a class="btn btn-primary " id="showhide2"  style="font-size: 12px !important; color: white; padding: 0px; margin: 0px; padding-left: 5px !important; padding-right: 5px !important;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										  Action
										</a>

                                        <section id="main2" class=" p-2 border bg-light" style="display:none; position: absolute !important">
                                        <a style="font-size: 13px; font-weight: bold;" href="" class="text-dark p-2">Edit</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href=""  class="text-dark p-2">Delete</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href=""  class="text-dark p-2">View</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href="Visa-Form.php" class="btn text-light bg-warning p-1 ">Visa</a> <br>
                                            <a style="font-size: 13px; font-weight: bold; cursor:pointer" data-toggle="modal" data-target="#exampleModal "class="text-dark p-2" >Done Visa</a>
                                        </section>
									
								----->	
				        </td>

                                                
                    <td></td>
                    <td><b>Total</b></td>
                    <td></td>
                    <td>14000</td>
                    
                   
                </tr>




                <tr style="border-top: double black !important; border-bottom: double black !important; font-weight:bold;" >
                     <th scope="row"></th>

                     <td >



							<!----------		
										<a class="btn btn-primary " id="showhide2"  style="font-size: 12px !important; color: white; padding: 0px; margin: 0px; padding-left: 5px !important; padding-right: 5px !important;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										  Action
										</a>

                                        <section id="main2" class=" p-2 border bg-light" style="display:none; position: absolute !important">
                                        <a style="font-size: 13px; font-weight: bold;" href="" class="text-dark p-2">Edit</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href=""  class="text-dark p-2">Delete</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href=""  class="text-dark p-2">View</a><br>
                                            <a style="font-size: 13px; font-weight: bold;" href="Visa-Form.php" class="btn text-light bg-warning p-1 ">Visa</a> <br>
                                            <a style="font-size: 13px; font-weight: bold; cursor:pointer" data-toggle="modal" data-target="#exampleModal "class="text-dark p-2" >Done Visa</a>
                                        </section>
									
								----->	
				        </td>

                                                
                    <td>10.feb.2021</td>
                    <td>closing balance</td></td>
                    <td></td>
                    <td>6000</td>
                    
                   
                </tr>


                
        
                    
                  </tbody>
            </table>
        


   

</section>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Done Visa Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="">
			<input name="" type="file" class="form-control " style="border:1px solid transparent" />
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>










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

