<?php 
       session_start();
 
	include 'include/header.php';
	include 'include/top-header.php';
	include 'include/menu.php';
    include 'include/dbconnect.php';
    if(!isset($_SESSION['who'])){
        header('Location:login.php');
    }
?>
<?php


    $id = $_GET['id'];


    $sql = "SELECT * FROM costomer_table WHERE id = '$id' ";
 if(mysqli_query($conn,$sql)){
    
     $table = mysqli_query($conn,$sql);

     $row = mysqli_fetch_assoc($table);

 }

?>



	
	 <div class="page-wrapper">
            <div class="content">
                      <div class="row mt-5 " >
                          <div class="col-md-12 text-center ">
                                   
                          </div> 
                      </div>
                <div class="row">
                          <div class="col-md-2">
                             <form action="code.php" method="post">      
                          </div>
                          <div class="col-md-4">
                              <label for="">First-Name</label>
                             <input type="text" value="<?php echo $row['fname'] ?>" class=" form-control" name="fname" id="">
                             <label for="">Last-Name</label>
                             <input type="text" value="<?php echo $row['lname'] ?>"  class=" form-control" name="lname" id="">
                             <label for="">Phone</label>
                             <input type="number" value="<?php echo $row['mobile'] ?>"  class=" form-control" name="phone" id="">
                             <label for="">Email</label>
                             <input type="email" value="<?php echo $row['email'] ?>" class=" form-control" name="email" id="">
                         </div>
                         <div class="col-md-4">
                      
                         <label for="">Gender</label>
                         <select class="form-control" name="gender" id="">
                                  <option value="<?php echo $row['email'] ?>" selected class="form-control"><?php echo $row['gender'] ?></option>
                                  <option value="female" class="form-control">Femal</option>
                                  <option value="male" class="form-control">Male</option>
                                  <option value="other" class="form-control">Other</option>
                             </select>
                             <label for="">Address</label>
                              <textarea  class="form-control"  name="address" id="" cols="10" rows="4"><?php echo $row['address'] ?></textarea>
                              <label for="">Zip Code</label>
                                <input type="text" name="code" value="<?php echo $row['zip'] ?>" class="form-control" > <br>
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>" class="form-control" > 
                                <input type="submit" name="update" value="UPDATE" class="form-control bg-success " >
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