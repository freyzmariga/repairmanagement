<aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.php"><img src="images/images.png" class="img-circle" width="80"></a></p>
          <?php
$uid=$_SESSION['acrsuid'];
$ret=mysqli_query($con,"select * from tbluser where ID='$uid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
          <h5 class="centered"><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></h5><?php } ?>
          <li class="mt">
            <a class="active" href="dashboard.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>

          <li class="mt">
            <a href="requets-form.php">
              <i class="fa fa-file"></i>
              <span>Request Form</span>
              </a>
          </li>
          <li class="mt">
            <a href="requets-history.php">
              <i class="fa fa-desktop"></i>
              <span>Request History</span>
              </a>
          </li>
          <li class="mt">
            <a href="prediction.php">
              <i class="fa fa-desktop"></i>
              <span>Suggest Repair</span>
              </a>
          </li>

        </ul>
    
      </div>
    </aside>
