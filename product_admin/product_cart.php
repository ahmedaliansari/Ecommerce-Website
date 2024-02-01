<?php
include("../connect.php");
if(isset($_SESSION["name"])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
$id = $_REQUEST["id"];
$query = $obj->query("select *from product where pid = '$id'");
$row = mysqli_fetch_assoc($query);
?>
<div class="container">
    <div class="row">

        <div class="col-md-6">
         <p class="mt-4 mb-4"><img src="<?php echo $row["pimg"];  ?>" width="100%" alt=""></p>
        </div>

        <div class="col-md-6">
         <h4 class="mt-5"><?php echo $row["pname"]."</br>";  ?></h4>
         <p class="fs-5"><?php echo $row["pdesc"]."</br>";  ?></p>
         <h4><?php echo $row["pprice"];  ?></h4>
         
        <form action="../sell.php" method="post" class="d-flex">
         <input type="hidden" name="pid" value="<?php echo $row["pid"];  ?>">
         <input type="hidden" name="uid" value="<?php echo $_SESSION["id"];  ?>">
         <button type="submit" name="sale" class="btn btn-primary mt-4 p-2">Buy Now</button>
        </div>
        </form> 

    </div>
</div>

</body>
</html>
<?php
}
else{
    header("Location:../user_login.php");
}
?>