<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <h1 class="text-center mt-1 ">SALES TABLE</h1>
    <table class="table table-dark table-hover table-bordered text-center">
        <thead>
            <th>Order Id</th>
            <th>Customer Name</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <th>Order Date</th>
        </thead>
        <tbody class="table-light">
                <?php 
                include("connect.php");
                $query = $obj->query("SELECT sales.sid,student.Name,product.pname,product.pprice,sales.date 
                FROM sales INNER JOIN student ON sales.user_id = student.id 
                INNER JOIN product ON sales.pid = product.pid");
                
                while($row = mysqli_fetch_assoc($query)){
                ?>
                 <tr>
                <td><?php echo $row["sid"]; ?></td>
                <td><?php echo $row["Name"]; ?></td>
                <td><?php echo $row["pname"]; ?></td>
                <td><?php echo $row["pprice"]; ?></td>
                <td><?php echo $row["date"]; ?></td>
            </tr>
                <?php } ?>
        </tbody>
    </table>
</body>
</html>