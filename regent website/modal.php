


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-body">
        <section class="row">
        <section class="col-md-12 m-auto main1 zoomIn animated">
                            <form >
                                <h1 style="font-size: 40px;">Login</h1>
                                <br>
                                <div class="form-group text-left">
                                  <label for="exampleInputEmail1">Email</label>
                                  <input type="email" class="form-control mainLoginInput" style="font-family: calibri;" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                                </div>
                                <div class="form-group text-left">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="password" class="form-control mainLoginInput" style="font-family: calibri;" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <a href="../Employee-list.php" class="text-light"><span>Forget Password!</span></a>
                                <button type="submit" class="btn text-light btn-primary btnstyle " style="border-radius: 5px; width: 150px; float: right; ">Login</button>
                              </form>
                              <br>

                              <section class="text-center">
                                <center class="zoomIn animated">
                                    <a class="text-primary  main1 showhide1 zoomIn animated btnstyle" style="border-radius: 5px; width: 150px; cursor:pointer">Create Account</a>
                                  
                                </center>
                              </section>
                        </section>


                        <section class="col-md-12 m-auto main1  zoomIn animated" style=" display: none;">
                            <form>
                                <h1 style="font-size: 40px;">Register</h1>
                                <br>
                                <div class="form-group text-left">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
                                </div>

                                <div class="form-group text-left">
                                  <label for="exampleInputEmail1">CNIC</label>
                                  <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter CNIC No.">
                                </div>

                                <div class="form-group text-left">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                                </div>
                                
                                <div class="form-group text-left">
                                  <label for="exampleInputPassword1">City</label>
                                  <select class="form-control" id="">
                                     
                                      <option value="">Karachi</option>
                                      <option value="">Karachi</option>
                                      <option value="">Karachi</option>
                                      <option value="">Karachi</option>
                                  </select>
                                </div>

                                <div class="form-group text-left">
                                    <label for="exampleInputPassword1">Address</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Address">
                                </div>

                                <div class="form-group text-left">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
                                </div>

                                <div class="form-group text-left">
                                    <label for="exampleInputPassword1">Role</label>
                                    <select class="form-control" id="">
                                       
                                        <option value="">Employee</option>
                                        <option value="">Client</option>
                                        <option value="">Admin</option>
                                        
                                    </select>
                                  </div>

                                  <div class="form-group text-left">
                                    <label for="exampleInputPassword1">Add Attachment</label>
                                    <input type="file" class="form-control" id="exampleInputPassword1">
                                </div>

                                <button type="submit" class="btn text-light btn-primary btnstyle" style="  border-radius: 5px; width: 150px; float: right; ">Register</button>
                              </form>
                              <br> <br>
                              <section class="text-center">
                                <center class="zoomIn animated">
                                    
                                    <a class=" text-primary main1 showhide1 zoomIn animated btnstyle" style="border-radius: 5px; width: 200px;  display: none; cursor:pointer">Already Have Account</a>
                                </center>
                              </section>
                                
                        </section>
        </section>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
	$(document).ready(function(){
			$('.showhide1').on('click', function(){
				$('.main1').toggle(0);
			});
	});
</script>