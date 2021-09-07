<?php 
       session_start();
	include 'include/header.php';
	//include 'include/top-header.php';
	//include 'include/menu.php';


?>
	
	 <div class="page-wrapper">
            <div class="content">
                      <div class="row mt-5 " >
                          <div class="col-md-12 text-center ">
                        
                          </div> 
                      </div>
                <div class="row">
                          <div class="col-md-1">
                              
                        </div>
                        <div class="col-md-4">
                            <h3>Admin login</h3>
                            <form action="code.php" method="post">
                            <label for="">User Name</label>
                             <input type="text" required class=" form-control" name="username" id="">
                             <label for="">Password</label>
                             <input type="password" required class=" form-control" name="password" id=""> <br>
                             <input type="submit" class="btn btn-success" name="adminlog" id="">
                             </form>
                              </div>
                         <div class="col-md-4">
                             <h3>Costomer login</h3>
                             <form action="code.php" method="post">
                             <label for="">Email</label>
                             <input type="email" required  class=" form-control" name="email" id="">
                             <label for="">phone Number</label>
                             <input type="number"  required class=" form-control" name="phone" id=""> <br>
                             <input type="submit" class="btn btn-success" name="costomerlog" id="">
                     </form>
                        </div>
                         <div class="col-md-1">
                             
                         </div>
                         </form>    

              </div>
			</div>
		</div>







<?php 

	include 'include/footer.php';


?>