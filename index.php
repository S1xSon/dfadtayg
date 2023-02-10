<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Product Information Form</title>
  </head>
  <body>
    <h1>Product Information</h1>
    <form action="submit-product-info.php" method="post">
      <label for="product-name">Product Name:</label>
      <input type="text" id="product-name" name="product-name"><br>

      <label for="product-price">Product Price:</label>
      <input type="number" id="product-price" name="product-price"><br>

      <label for="product-description">Product Description:</label>
      <textarea id="product-description" name="product-description"></textarea><br>

      <label for="product-keywords">Product Keywords:</label>
      <input type="text" id="product-keywords" name="product-keywords"><br>

      <label for="product-category">Product Category:</label>
      <select id="product-category" name="product-category">
        <option value=""></option>
        <option value="electronics">Electronics</option>
        <option value="clothing">Clothing</option>
        <option value="household items">Household items</option>
      </select><br>

      <label for="product-brand">Product Brand:</label>
      <select id="product-brand" name="product-brand">
        <option value=""></option>
        <option value="lenovo">Lenovo</option>
        <option value="lg">Lg</option>
        <option value="louis vuitton">Louis Vuitton</option>
        <option value="gucci">Gucci</option>
        <option value="prada">Prada</option>
        <option value="bosch">Bosch</option>
        <option value="frascold">Frascold</option>
      </select><br>
      <input type="submit" value="Submit">


      <button type="button" class="edit-btn">Edit</button>
      <button type="button" class="delete-btn">Delete</button>
    </form>
    <?php include "function_admin.php" ?>
    <?php
    $id = $_GET['id'];

    $con = mysqli_connect("localhost", "root", "", "electronix");

    echo $id;
    $sql = "SELECT * FROM products WHERE prd_id = '$id'";

    $run_pro = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_array($run_pro)) {
      echo "ds";
      $prd_tilte = $row["prd_title"];
      $prd_brand = $row["prd_brand"];
      $prd_cat = $row["prd_cat"];
      $prd_price = $row["prd_price"];
      $prd_desc = $row["prd_desc"];
      $prd_keyword = $row["prd_keyword"];
    }
    echo $prd_title
    ?>
  </body>
</html>