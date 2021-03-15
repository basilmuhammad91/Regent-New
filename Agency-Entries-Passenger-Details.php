<?php

include('header.php');
include('connect.php');

?>
	

<section class="container-fluid ">


    <h5> Pessenger Details</h5>


    <section class="container-fluid">
        <form action="" class="">
            <section class="row">

                <section class="col-xl-3">
                    <input type="text" class="form-control input-box" placeholder="Name" maxlength="15"/>
                </section>

                <section class="col-xl-3">
                    <input type="text" class="form-control input-box" placeholder="Father Name" maxlength="15"/>
                </section>

                <section class="col-xl-2">
                    <input type="text" class="form-control input-box" placeholder="E No." maxlength="10"/>
                </section>

                <section class="col-xl-2">
                    <input type="text" class="form-control input-box" placeholder="Passport No." maxlength="9"/>
                </section>

                <section class="col-xl-2">
                    <input type="text" class="form-control input-box" placeholder="Date Of Birth"/>
                </section>
                
               

                <section class="col-xl-3">
                    <input type="text" class="form-control input-box" placeholder="Name In Urdu"/>
                </section>

                <section class="col-xl-3">
                    <input type="text" class="form-control input-box" placeholder="Father Name In Urdu"/>
                </section>

                <section class="col-xl-2">
                    <input type="text" class="form-control input-box" placeholder="Date Of Issue"/>
                </section>

                <section class="col-xl-2">
                    <input type="text" class="form-control input-box" placeholder="Date of Expiry"/>
                </section>
                
                
                <section class="col-xl-2">
                    <input type="text" class="form-control input-box" placeholder="Submit Date"/>
                </section>

              

               
               
               
               
                

            </section> 
            <hr>

           
        </form>
    </section>

</section>

<hr>

<section class="container-fluid ">
   


    <section class="container-fluid">
        <form action="" class="">
            <section class="row">

                <section class="col-xl-2">
                    <select class="form-control input-box" id="exampleFormControlSelect1">
                        <option>Submited To </option>
                        <option>xxxx</option>
                        <option>xxxx</option>
                      </select>
                </section>

                <section class="col-xl-2">
                    <select class="form-control input-box" id="exampleFormControlSelect1">
                        <option>Visa Status </option>
                        <option>xxxx</option>
                        <option>xxxx</option>
                      </select>
                </section>


                <section class="col-xl-2">
                    <section class="row">
                        <section class="col-3"><p style="line-height: 1; position: relative;top: 8px; font-size: 13px;">Courier Date</p></section>

                        <section class="col-9"><input type="date" class="form-control input-box" style="font-size: 13px;" placeholder="Visa Date"/></section>
                    </section>
                </section>

                <section class="col-xl-2">
                    <input type="text" class="form-control input-box" placeholder="Courier Name"/>
                </section>

                <section class="col-xl-2">
                    <input type="text" class="form-control input-box" placeholder="Courier No"/>
                </section>

                <section class="col-xl-2">
                    <input type="text" class="form-control input-box" placeholder="Remarks"/>
                </section>


            </section>

        </form>
    </section>

</section>

<br>


<section class="container">
    <section class="row" style="align-items: center;">
        <section class="col-5 m-auto text-center">
              <a href="Visa-Form.php">
              <input type="button" class="btn-primary btn  pl-2 pr-2" style="position: relative; top: 15px;" value="Submit & Print Visa Form" />
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
		<section class="col-md-2">
			<span >File No</span>
			<input id="search_file_no" name="search_file_no" type="text" class="form-control input-box" placeholder="File No." />
		</section>
		<section class="col-md-2">
			<span >Passport No.</span>
			<input id="search_passport_no" name="search_passport_no" type="text" class="form-control input-box" placeholder="Passport No" />
		</section>
		<section class="col-md-2">
			<span >Visa</span>
			<input id="search_visa_no" name="search_visa_no" type="text" class="form-control input-box" placeholder="Visa No." />
		</section>

        <section class="col-md-2">
        <span >Sponsor Name</span>
            <input type="text" id="txtType" class="form-control input-box" placeholder="Sponsor Name" />
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

<section class="container-fluid">

            <table class="table mb-5  " style="padding-bottom:130px;">
              
                <thead>
                    <tr>
                      <th scope="col">S_No.</th>
                      <th scope="col" ><span class="text-primary"></span>Action<span class="text-primary"></span></th>
                      <th scope="col">Name</th>
                      <th scope="col">Father_Name</th>
                      <th scope="col">Name_Urdu</th>
                      <th scope="col">Father_Name_Urdu</th>

                      <th scope="col">E_No.</th>
                      <th scope="col">Passport_No.</th>
                      <th scope="col">Date_of_Birth</th>
                      <th scope="col">Date_of_Issue</th>
                      <th scope="col">Date_of_Expiry</th>
                      <th scope="col">CNIC_No.</th>
                      <th scope="col">Submit_Date</th>
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



                    <td>xxxxx</td>
                    <td>xxxxx</td>
                    
                    <td>xxxxx</td>
                    <td>xxxxx</td>
                    <td>xxxxx</td>
                    <td>xxxxx</td>
                    
                    <td>xxxxx</td>
                    <td>xxxxx</td>
                    <td>xxxxx</td>
                    <td>xxxxx</td>
                    <td>xxxxx</td>
                   
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

