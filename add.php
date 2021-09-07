<?php 
       session_start();
  if(!isset($_SESSION['who'])){
        header('Location:login.php');
    }

	include 'include/header.php';
	include 'include/top-header.php';
	include 'include/menu.php';


?>
	
	 <div class="page-wrapper">
            <div class="content">
                      <div class="row mt-5 " >
                          <div class="col-md-12 text-center ">
                          <h2><?php 
                          if(isset($_SESSION['save'])){
                              echo'<p class=" bg-success "> Added succesfully </p>';
                            unset($_SESSION['save']);
                          }
                          
                          ?></h2> 
                          </div> 
                      </div>
                <div class="row">
                          <div class="col-md-2">
                             <form action="code.php" method="post">      
                          </div>
                          <div class="col-md-4">
                              <label for="">First-Name</label>
                             <input type="text"  class=" form-control" name="fname" id="">
                             <label for="">Last-Name</label>
                             <input type="text"  class=" form-control" name="lname" id="">
                             <label for="">Phone</label>
                             <input type="number"  class=" form-control" name="phone" id="">
                             <label for="">Email</label>
                             <input type="email"  class=" form-control" name="email" id="">
                         </div>
                         <div class="col-md-4">
                      
                         <label for="">Gender</label>
                             <select class="form-control" name="gender" id="">
                                  <option value="" selected class="form-control">Select</option>
                                  <option value="female" class="form-control">Femal</option>
                                  <option value="male" class="form-control">Male</option>
                                  <option value="other" class="form-control">Other</option>
                             </select>
                             <label for="">Address</label>
                              <textarea class="form-control" name="address" id="" cols="10" rows="4"></textarea>
                              <label for="">Zip Code</label>
                                <input type="text" name="code" class="form-control" >
                                <br>
                                <input type="submit" value="Submit" name="addcos"  class="form-control bg-success " >
                           </div>
                         <div class="col-md-2">
                             
                         </div>
                         </form>    

              </div>
			</div>
		</div>







<?php 

	include 'include/footer.php';


?>