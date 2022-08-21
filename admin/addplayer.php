<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php include('../header.php') ?>

<?php include('admin.header.php') ?>

<div class="container jumbotron">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h2 class="text-center">INSERT PLAYER DETAIL</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    Player No:<input type="text" class="form-control" name="roll" placeholder="Enter Player No" >
                </div>
                <div class="form-group">

                    Full Name:<input type="text" class="form-control" name="fullname" placeholder="full name" required>
                </div>
                <div class="form-group">
                    Country Name: <input type="text" class="form-control" name="city" placeholder="Enter City" required>
                </div>
                <div class="form-group">

                    total match played.:<input type="text" class="form-control" name="pphone" placeholder="total match played" required>
                </div>



                <div class="form-group">

                    total run scored.:<input type="text" class="form-control" name="trscored" placeholder="total run scored" required>
                </div>

                <div class="form-group">

                    total innings played:<input type="text" class="form-control" name="tiplayed" placeholder="total innings played" required>
                </div>

                  <div class="form-group">

                    total not out matches:<input type="text" class="form-control" name="tnmatch" placeholder="total not out matches" required>
                </div>
                <div class="form-group">

                    Standard:<input type="number" class="form-control" name="standard" placeholder="Enter players Standard" required>
                </div>

                <div class="form-group">

                    Image:<input type="file" class="form-control" name="simg" required>
                </div>

                <button type="submit" name="submit" class="btn btn-success btn-lg">INSERT</button>
            </form>
        </div>
    </div>
</div>

<?php include('../footer.php') ?>

<?php

if (isset($_POST['submit'])) {
    if (!empty($_POST['roll']) && !empty($_POST['fullname'])) {

        include ('../dbcon.php');
        $roll=$_POST['roll'];
        $name=$_POST['fullname'];
        $city=$_POST['city'];
        $pphone=$_POST['pphone'];
        $trscored = $_POST['trscored'];
        $tiplayed = $_POST['tiplayed'];
        $tnmatch = $_POST['tnmatch'];

        $standard=$_POST['standard'];
        include('ImageUpload.php');

        $sql = "INSERT INTO `players`( `playerno`, `name`, `city`, `tmatch`,`trscored`,`tiplayed`,`tnmatch`, `standard`,`image`) VALUES ('$roll','$name','$city','$pphone','$trscored','$tiplayed','$tnmatch',$standard,'$imgName')";

        $run = mysqli_query($conn,$sql);

        if ($run == true) {

            ?>
            <script>
                alert("Data Inserted Successfully");
            </script>
            <?php
        } else {
            echo "Error : ".$sql."<br>". mysqli_error($conn);
        }
    } else {
        ?>
        <script>
            alert("Please insert atleast Player No and fullname");
        </script>
        <?php
    }


}

?>








