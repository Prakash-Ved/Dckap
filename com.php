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
            <div class="row  " >
                          <div class="col-md-12 text-center ">
                                <h4>Complain - view</h4>  
                          </div> 
                      </div>
                    <div class="row">
                             <div class="col-md-2">

                             </div>
                             <div class="col-md-8">
                             <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>S.no</th>
                                                    <th>product name</th>
                                                    <th>discription</th>
                                                    <th>Date</th>

                                                </tr>
                                                </thead>
                                                <tbody>
                                                  <?php
                            
                                               $sql = "SELECT * FROM complain";
                                                  $i=0;
                                               if(mysqli_query($conn,$sql)){
                                                   //echo "Successfully sent.";
                                                   $table = mysqli_query($conn,$sql);
   
                                                   while($row = mysqli_fetch_assoc($table)){
                                                  echo'  <tr>
                                                    <td>'.++$i.'</td>
                                                    <td>'.$row['name'].'</td>
                                                    <td>'.$row['discription'].'</td>
                                                    <td>'.$row['cdate'].'</td>
                                                    
                                                        
                                                    <tr>
                                                    ';
                                                   }
                                                }
                                                ?>
                                              
                                                </tbody>
                                            </table>
                             </div>
                             <div class="col-md-2">

                             </div>
                    </div>
              </div>
			</div>
		</div>







<?php 

	include 'include/footer.php';


?>