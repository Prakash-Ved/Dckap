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
                                <h4>Costomer - view</h4>  
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
                                                    <th>Firstname</th>
                                                    <th>Lastname</th>
                                                    <th>Email</th>
                                                    <th>Number</th>
                                                    <th> Action </th>
                                                    <th> Action </th>
                                                    <th> Action </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                  <?php
                            
                                               $sql = "SELECT * FROM costomer_table";
                                                  $i=0;
                                               if(mysqli_query($conn,$sql)){
                                                   //echo "Successfully sent.";
                                                   $table = mysqli_query($conn,$sql);
   
                                                   while($row = mysqli_fetch_assoc($table)){
                                                  echo'  <tr>
                                                    <td>'.++$i.'</td>
                                                    <td>'.$row['fname'].'</td>
                                                    <td>'.$row['lname'].'</td>
                                                    <td>'.$row['email'].'</td>
                                                    <td>'.$row['mobile'].'</td>
                                                            <td>
                                                            <a href="edit.php?id='.$row['id'].'" class="btn btn-primary"> Edit </a>
                                                                </td>
                                                         <td>
                                                         <a href="view.php?id='.$row['id'].'" class="btn btn-primary"> View </a>
                                                          </td>
                                                          <td>
                                                          <form action ="code.php" method="post" >
                                                     <input type = "hidden" name="id" value="'.$row['id'].'">
                                                     <input type="submit" class="btn btn-danger" value="delete" name="cosdelete">
                                                                 
                                                          </form>
                                                          </td>
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