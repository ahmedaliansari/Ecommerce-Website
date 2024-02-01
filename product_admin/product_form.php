<!DOCTYPE html>
<html lang="en">
<head>
  <title>Product Insert Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Product Insert Form</h2>
  <form action="product_insert_query.php" method="post" enctype="multipart/form-data">
    <div class="mb-3 mt-3">
      <label for="email">Product Name:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Product Name" name="pname" required>
    </div>

    <div class="mb-3 mt-3">
      <label for="email">Product Price:</label>
      <input type="number" class="form-control" id="email" placeholder="Enter Product Price" name="pprice" required>
    </div>

    <div class="mb-3 mt-3">
      <label for="email">Product Description:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Product Description" name="pdesc" required>
    </div>

    <div class="mb-3 mt-3">
      <label for="email">Product Image:</label>
      <input type="file" class="form-control" id="email" placeholder="Enter Product Image" name="pimg" required>
    </div>    
    
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
