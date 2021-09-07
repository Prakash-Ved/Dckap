<?php 
       session_start();
	include 'include/header.php';
	include 'include/top-header.php';
	include 'include/menu.php';
    include 'include/dbconnect.php';

?>



	
	 <div class="page-wrapper">
            <div class="content">
            <div class="row " >
                     <div class="col-md-12 text-center ">
                            <h3>count costomer with Zip code </h3>     
                     </div>  
                     
                     
              </div>
              <div class="row " >
                     <div class="col-md-4 text-center ">
                            <form action="" method="post">
                                   <input type="text" name="code" class="form-control"> <br>
                                   <input type="submit" value = "count" class="btn btn-success" >
                            </form>     
                     </div> 
                     <div class="col-md-4 text-center ">
                     <?php
                                                               
              if (isset($_POST['code'])){
                     $code = $_POST['code'];
                           $count = 0;
                     $sql = "SELECT * FROM costomer_table WHERE zip = '$code' ";
                     if(mysqli_query($conn,$sql)){
                     
                      $table = mysqli_query($conn,$sql);
                     
                      while($row = mysqli_fetch_assoc($table)){
                                $count++;
                      }
                     
                     }
                        echo'  <h3>'.$count.'</h3>';
                     
              }

                                              ?> 
                                              
                                            
                     </div> 
                     <div class="col-md-4 text-center ">
       
                     </div>  
                     
                     
              </div>

	</div>
</div

<?php


// $id = $_GET['id'];


// $sql = "SELECT * FROM costomer_table WHERE id = '$id' ";
// if(mysqli_query($conn,$sql)){

//  $table = mysqli_query($conn,$sql);

//  $row = mysqli_fetch_assoc($table);
// // echo'<h1>'.$row['id'].'</h1>';
// }

?>






<?php 

	include 'include/footer.php';


?>