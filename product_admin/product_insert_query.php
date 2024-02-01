<?php

include("../connect.php");
extract($_POST);

$dir = "../images/";
$file = $dir.basename($_FILES["pimg"]["name"]);
move_uploaded_file($_FILES["pimg"]["tmp_name"],$file);

$query = "INSERT into product VALUE ('','$pname','$pprice','$pdesc','$file')";

if($obj->query($query) === TRUE){
    echo "<div class='alert alert-success'>Product Inserted Successfully</div>";
    header("Location:product_form.php");
}
else{
    echo "<div class='alert alert-danger'>Product NOT Inserted</div>";
}

?>