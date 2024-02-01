<?php

include("connect.php");
if(isset($_POST["sale"])){
extract($_POST);
date_default_timezone_set("Asia/Karachi");
$date=date("Y-m-d h:i:sa");
$query = "INSERT INTO sales VALUE ('','$pid','$uid','$date')";
if($obj->query($query)===TRUE){
echo "<div class='alert alert-success'>Successfully Purchased....</div>";
}
else{
echo "<div class='alert alert-danger'>oooppps somthing went wrong....</div>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<a href="http://localhost/PHP/DB%20PHP/oop%20with%20class/E-commerce/product_admin/product_home.php"  class="btn btn-primary mt-4 p-2 me-auto">Back To Home</a>
</body>
</html>