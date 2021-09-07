<?php 
    session_start();
    if(!isset($_SESSION['who'])){
        header('Location:login.php');
    }
	include 'include/header.php';
	include 'include/top-header.php';
	include 'include/menu.php';
    include 'include/dbconnect.php';


?>
	  <?php
                           $count = 0;

                     $sql = "SELECT * FROM costomer_table";
                     if(mysqli_query($conn,$sql)){
                     
                      $table = mysqli_query($conn,$sql);
                     
                      while($row = mysqli_fetch_assoc($table)){
                               $count++; 
                      }
                     
                     }
                        
                     
              
    ?> 

	 <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-md-">

                    </div>


                <?php   if($_SESSION['who']=='admin'){  ?>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
						              
							<div class="dash-widget-info text-right">
								<h3><?php echo $count; ?></h3>
								<span class="widget-title1">costomer <i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
                        </div>
                    </div>

                    <?php } ?>
                    <?php   if($_SESSION['who']=='costomer'){  ?>
                    <form action="code.php" method="post">
                             <label for="">Product/service</label>
                             <input type="text" required  class=" form-control" name="complain" id="">
                             <input type="hidden" value="<?php echo $_SESSION['id'] ?>" name="cid" id="">
                             <label for="">Discription</label> <br>
                             <textarea name="discription" class="form-comtrol" id="" cols="30" rows="10"></textarea>
                             <br>
                             <input type="submit" class="btn btn-success" name="costomercom" id="">
                     </form>

                     <?php } ?>

</div>
    </div>
</div> 






<?php 

	include 'include/footer.php';


?>