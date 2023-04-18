<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product add</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
  <!-- Header with buttons -->
  <header class="navbar container-fluid pt-5 border-bottom border-dark">
    <div class="d-flex container-fluid justify-content-between">
    <div class="">
   <h2 class="fs-2 fw-bold">
      Product Add
      </div>
    </h2>
    <div class="">
    <input type="submit" class="btn btn-success me-2" name="save" value="Save" form="product_form">
    <a class="btn btn-danger" href="index.php">Cancel</a>
    </div>
    </div>
</header>
<!-- Form to introduce values -->
<form action="product/create.php" class="py-5 container-fluid" id="product_form" method="post">
<div class="row-cols-6 g-3 align-items-center">
  <div class="col-1">
    <label class="col-form-label">SKU</label>
  </div>
  <div class="col-2">
    <input type="text" id="sku" class="form-control border border-black" name="sku" required>
  </div>

  <div class="col-1">
    <label class="col-form-label">Name</label>
  </div>
  <div class="col-2">
    <input type="text" id="name" class="form-control border border-black" name="name" required>
  </div>

  <div class="col-1">
    <label class="col-form-label">Price ($)</label>
  </div>
  <div class="col-2 ">
    <input type="number" id="price" class="form-control border border-black" name="price" required>
  </div>
  <div class="col-2 pt-4">
  <select class="form-select border border-black mystuff" id="productType" required>
  <option value="">Type switcher</option>
  <option value="1" id="DVD">DVD</option>
  <option value="2" id="Book">Book</option>
  <option value="3" id="Furniture">Furniture</option>
</select>
</div>
<div class="mystaff_hide mystaff_1 pt-4" >
  <p class="fw-bold">Please provide a size in megabyte (MB)</p>
    <label for="size" >Size (MB)</label>
    <input type="number" class="form-control border border-black mystaff_hide mystaff_1" id="size" name="size" value="0">
</div>
<div class="mystaff_hide mystaff_2 pt-4">
  <p class="fw-bold">Please provide a weight in kilograms (KG)</p>
    <label for="weight" >Weight (KG)</label>
    <input type="number" class="form-control border border-black mystaff_hide mystaff_2" id="weight" name="weight" value="0">
</div>
<div class="mystaff_hide mystaff_3 pt-4">
  <p class="fw-bold">Please provide dimensions in HxWxL (height/width/length) format</p>
    <label for="height" >Height (CM)</label>
    <input type="number" class="form-control border border-black mystaff_hide mystaff_3" id="height" name="height" value="0">
    <label for="width">Width (CM)</label>
    <input type="number" class="form-control border border-black mystaff_hide mystaff_3" id="width" name="width" value="0">
    <label for="lenght">Length (CM)</label>
    <input type="number" class="form-control border border-black mystaff_hide mystaff_3" id="length" name="length" value="0">
</div>
</div>
</form>
<!-- Footer with text -->
<footer class="container-fluid py-5 border-top border-dark">
<h5 class="text-center">Scandiweb test assignment</h5>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <script
  src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8="
  crossorigin="anonymous"></script>
  <script src="jquery/collapse.js"></script>
  </body>
</html>