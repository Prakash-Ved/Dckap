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



	
	 <div class="page-wrapper">
            <div class="content">
            <div class="row " >
                     <div class="col-md-12 text-center ">
                            <h3>count costomer with gender </h3>     
                     </div>  
                     
                     
              </div>
              <div class="row " >
                     
                     <div class="col-md-4 text-center ">
                     <?php
                           $male = 0;
                           $female = 0;
                           $other = 0;

                     $sql = "SELECT * FROM costomer_table";
                     if(mysqli_query($conn,$sql)){
                     
                      $table = mysqli_query($conn,$sql);
                     
                      while($row = mysqli_fetch_assoc($table)){
                                 if($row['gender']=='male'){
                                     $male++;

                                 }
                                 if($row['gender']=='female'){
                                     $female++;

                                }
                                if($row['gender']=='other'){
                                    $other++;

                                }
                      }
                     
                     }
                        
                     
              
    ?> 
                                              
                                            
                     </div> 
                     <div class="col-md-4 text-center ">

                     <p>  MALE  -<?php echo $male; ?></p>
                     <p> FEMALE  - <?php echo $female; ?></p>
                     <p >OTHER  - <?php echo $other; ?></p>
       
                     </div>  
                     
                     
              </div>

	</div>
</div

<?php



?>






<?php 

	include 'include/footer.php';


?>