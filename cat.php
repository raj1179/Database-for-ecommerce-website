<?php
  include_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Amazing</title> 
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="cat.php">products</a></li>
        <li><a href="pro.php">Profiles</a></li>

        <li class="dropdown">
          <a class="dropbtn">Your Profile</a>
          <div class="dropdown-content">
            <a href="ord.php">Orders</a>
            <a href="ret.php">Returns</a>
            <a href="sho.php">Shopping Cart</a>
          </div>
        </li>
        <div class="search-container">
            <form action="/action_page.php">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"></button>
            </form>
        </div>
      </ul>
    </div>

    <table name = "Products">
      <tr>
          <th>Product ID</th>
          <th>Category ID</th>
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
      </tr>
    <?php
        $conn;
        $sql = "SELECT p_id, ctgy_id, name, dsc, price, FROM Products";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){

          while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>'. $row['p_id'] .'</td>';
            echo '<td>'. $row['ctgy_id'] .'</td>';
            echo '<td>'. $row['name'] .'</td>';
            echo '<td>'. $row['dsc'] .'</td>';
            echo '<td>'. $row['price'] .'</td>';
            echo '</tr>';
          }
        }
    ?>
  </table>

<script src="index.js"></script>
  </body>
</html>