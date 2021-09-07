
<!-- navigation section start -->
         <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <?php  if($_SESSION['who'] == 'admin') {  ?>
                        <li class="active">
                            <a href="add.php"><i class=""></i> <span>Add costomer</span></a>
                        </li>
						<li>
                            <a href="display.php"><i class=""></i> <span>View</span></a>
                        </li>
                        <li>
                            <a href="zip.php"><i class=""></i> <span>Zip code count</span></a>
                        </li>
                        <li>
                            <a href="gender.php"><i class=""></i> <span>Gender Count</span></a>
                        </li> 
                        <li>
                            <a href="com.php"><i class=""></i> <span>Complain</span></a>
                        </li> 
						<?php } ?>
                       
                    </ul>
                </div>
            </div>
        </div>