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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" >Tahummerce</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto  mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link ms-3" href="#">About Us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle ms-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Products
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active ms-3" aria-current="page" href="#">Blog</a>
        </li>
      </ul>
      <form class="d-flex ms-auto">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        <a href="../user_logout.php" class="btn btn-outline-primary ms-2">Logout</a>
      </form>
    </div>
  </div>
</nav>
<br><br><br>
<div class="container">
    <div class="row">
    <a class="navbar-brand" ><img src="../images/2.jpg" width="100%" alt=""></a>

    </div>
</div>
<br><br><br>
<div class="container mt-3">
<div class="row">
    <?php
    include("../connect.php");
    $query = $obj->query("select *from product");
    while($row = mysqli_fetch_assoc($query)){
    ?>
    <div class="col-md-3">
    <div class="card shadow border">
  <div class="card-body bg-light">
  <p class=""><img src="<?php echo $row["pimg"]; ?>" width="100%" alt=""></p>
    <h4 class="card-title"><?php echo $row["pname"]; ?></h4>
    <p class="card-text"><?php echo $row["pdesc"]; ?></p>
    <p class="card-link fs-4 fw-bold"><?php echo $row["pprice"]; ?></p>
    <a href="product_cart.php?id=<?php echo $row["pid"]; ?>" class="btn btn-primary float-end">Buy Now</a>
  </div>
</div>
<br><br><br><br>
    </div>
    <?php } ?>
</div>
</div>

</body>
</html>
