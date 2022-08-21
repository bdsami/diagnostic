<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php include('../header.php') ?>
<?php include('admin.header.php') ?>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3  jumbotron ">
			<div  style="text-align: center;">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" >
				Choose Standard: <select name="standard" class="btn btn-info" style="margin-right: 30px;">					<option>Select</option>
									<option>1st</option>
									<option>2nd</option>
									<option>3rd</option>
									<option>4th</option>
									<option>5th</option>
								</select>
				<input type="submit" name="search" value="SEARCH" class="btn btn-success">
			</form>
			</div>
		</div>
	</div>

<?php
    echo  ErrorMessage();
    echo  SuccessMessage();
 ?>
<table class="table table-bordered table-striped table-responsive">
	<h2 class="text-center">Update Player Information</h2>
	<tr class="text-center">
		<th>Player No</th>
		<th>Standard</th>
		<th>Full Name</th>
		<th >City</th>
		<th>Total match played</th>
        <th>Total Run</th>
        <th>Total innings played</th>
        <th>total not out matches</th>
		<th>Profile Pic</th>
		<th>Update</th>
	</tr>
<?php 
	include('../dbcon.php');
	if (isset($_POST['search'])) {

		$standard = $_POST['standard'];

		$sql = "SELECT * FROM `players` WHERE `standard` = '$standard'";

		$result = mysqli_query($conn,$sql);
		if (mysqli_num_rows($result)>0) {
			while ($DataRows = mysqli_fetch_assoc($result)) {
				$Id = $DataRows['id'];
				$playerno = $DataRows['playerno'];
				$Name = $DataRows['name'];
				$City = $DataRows['city'];
				$tmatch = $DataRows['tmatch'];
                $trscored = $DataRows['trscored'];
                $tiplayed = $DataRows['tiplayed'];
                $tnmatch = $DataRows['tnmatch'];
				$Standard = $DataRows['standard'];
				$ProfilePic = $DataRows['image'];
				?>
				<tr class="text-center">
					<td><?php echo $playerno;?></td>
					<td><?php echo $Standard;?></td>
					<td><?php echo $Name; ?></td>
					<td><?php echo $City; ?></td>
					<td><?php echo $trscored; ?></td>
                    <td><?php echo $tmatch; ?></td>
                    <td><?php echo $trscored; ?></td>
                    <td><?php echo $tiplayed; ?></td>
                    <td><?php echo $tnmatch; ?></td>
					<td>
						<img src="../databaseimg/<?php echo $ProfilePic;?>" alt="img"><br><br>
						<form action="UpdateImg.php" method="post" enctype="multipart/form-data">
							<input type="file" name="updateimg" style="float: left;" class="btn btn-info btn-sm">
							<input type="hidden" name="id" value="<?php echo $Id; ?>">
							<input type="submit" name="submitimg" value="UPDATE" class="btn btn-warning btn-sm" style="float: right;"><br>
						</form>
					</td>
					<td><a href="UpdateRecord.php?Update=<?php echo $Id; ?>" class="btn btn-warning">UPDATE</a></td>
				</tr>
				<?php
				
			}
			
		} else {
			echo "<tr><td colspan ='7' class='text-center'>No Record Found</td></tr>";
		}
	}

 ?>
	

</table>
</div>
<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h2><?php echo @$_GET['updated']; ?></h2>
			</div>
		</div>
	</div>	



<?php include('../footer.php');?>