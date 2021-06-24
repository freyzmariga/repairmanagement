<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['acrsuid']==0)) {
  header('location:logout.php');
  } else{


?>
<!DOCTYPE html>
<html lang="en">

<head>

  <title>Mariga Reparing System :: Request History</title>


  <!-- Bootstrap core CSS -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="../lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="../lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="../lib/advanced-datatable/css/DT_bootstrap.css" />
  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/style-responsive.css" rel="stylesheet">

</head>

<body>
  <section id="container">

    <!--header start-->
   <?php include_once('includes/header.php');?>

    <!--sidebar start-->
  <?php include_once('includes/sidebar.php');?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Request History</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
             <table class="table table-striped table-advance table-hover">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Service Number</th>
                    <th>Name</th>
                    <th>Mobile Number</th>
                    <th>Email</th>
                    <th>Date of Service</th>
                    <th>Time of Service</th>
                    <th>Status</th>
                    <th>Request Date</th>
                    <th>Action</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  $uid=$_SESSION['acrsuid'];
$ret=mysqli_query($con,"select tbluser.*,tblrequest.* from tblrequest join tbluser on tbluser.ID=tblrequest.UserID where tblrequest.UserID='$uid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                  <tr class="gradeX">
                    <td><?php echo $cnt;?></td>
                    <td><?php  echo $row['ServiceNumber'];?></td>
                    <td><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></td>
                    <td><?php  echo $row['MobileNumber'];?></td>
                    <td><?php  echo $row['Email'];?></td>
                    <td><?php  echo $row['DateofService'];?></td>
                    <td><?php  echo $row['SuitableTime'];?></td>
                    <?php if($row['Status']==""){ ?>

                     <td><?php echo "Not Updated Yet"; ?></td>
<?php } else { ?>                  <td><?php  echo htmlentities($row['Status']);?>
                  </td>

                  <?php } ?>
                  <td class="hidden-phone"><?php  echo $row['ReqDate'];?></td>
                    <td class="center hidden-phone"><a href="view-service-detail.php?viewid=<?php echo htmlentities ($row['ServiceNumber']);?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a></td>

                  </tr>
                  <?php
$cnt=$cnt+1;
}?>
                </tbody>

              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
<?php include_once('includes/footer.php');?>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->

 <?php include_once('includes/js.php');?>
</body>

</html>
<?php  } ?>
