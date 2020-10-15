<?php
//Step1
 $db = mysqli_connect('localhost','root','Halleluyah@2910','DATABASE_TODAY')
 or die('Error connecting to MySQL server.');
?>

<html>
 <head>
 <title>shopping</title>
<head>
<link rel="stylesheet" href="mystyle.css">
</head>
<body>
<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="E -payment.html">E -payment</a>
  <a href="">CART</a>
</div>
<!-- Photo grid -->
  <div class="w3-row">
    <div class="w3-third">
      <img src="canvas.jpg" style="width:40%" onclick="onClick(this)" alt="Book for buses online">
      <img src="shoes.jpg" style="width:40%" onclick="onClick(this)" alt="Book for Public transport buses">
      <img src="hot canvas.jpg" style="width:40%" onclick="onClick(this)" alt="Just using your laptop or phone by visiting our website">
      <img src="fine shoe.jpg" style="width:40%" onclick="onClick(this)" alt="Travel across lagos city">
    </div>
<!-- You can use custom layout. This is just for the example -->
<div style="max-width: 1902px; margin: 0 auto; padding: 0 20px;">
  <header style="margin: 50px 0; display: flex; justify-content: center;">
    <!-- #apicart-cart-dropdown is the target element for the Cart dropdown component. You can move it wherever you want -->
    <div id="apicart-cart-dropdown"></div>
  </header>
  <main>
    <!-- #apicart is the target for the application -->
    <div id="apicart"></div>
  </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/@apicart/vue-components@1.0.0-alpha7/dist/bundles/default/default.full.min.js"></script>
<script>
Apicart
  .setDevEnv()
  .configure({
    // Replace tokens with your PUBLIC tokens from the administration
    store: new Apicart.Store({ token: "9mCu3DlBCa4REI?Q7kKly!Rw6!_FvD8K_dgPXe1b20?r6!sPTQMyCpq_ADt!jXOD" }),
    payments: new Apicart.Payments({ token: "Q84lNQyLl?nBGvKxxbcdc!nWFKEZrK?L_Is2r9IaOJo14ONbXw1SMlPIeptcaFza" }),
    vueComponents: {
      category: {
        products: {
          list: [
            // Replace tokens with your PUBLIC tokens from the administration
            "https://cdn.apicart.dev/external/wlhv1egho2u4p0e0nkne2mks7f9btigi/data/04/4.json",
            "https://cdn.apicart.dev/external/wlhv1egho2u4p0e0nkne2mks7f9btigi/data/03/3.json",
            "https://cdn.apicart.dev/external/wlhv1egho2u4p0e0nkne2mks7f9btigi/data/02/2.json",
            "https://cdn.apicart.dev/external/wlhv1egho2u4p0e0nkne2mks7f9btigi/data/01/1.json"
          ]
        }
      }
    }
  })
  .initVueBundle();
</script>

<?php
//Step2
$query = "SELECT * FROM category";
mysqli_query($db, $query) or die('Error querying database.');

$query = "SELECT * FROM product_category";
mysqli_query($db, $query) or die('Error querying database.');

$query = "SELECT * FROM product_review";
mysqli_query($db, $query) or die('Error querying database.');

$query = "SELECT * FROM product";
mysqli_query($db, $query) or die('Error querying database.');

$query = "SELECT * FROM product_meta";
mysqli_query($db, $query) or die('Error querying database.');

$query = "SELECT * FROM product_tag";
mysqli_query($db, $query) or die('Error querying database.');

$query = "SELECT * FROM order_item";
mysqli_query($db, $query) or die('Error querying database.');

$query = "SELECT * FROM tag";
mysqli_query($db, $query) or die('Error querying database.');

$query = "SELECT * FROM transaction";
mysqli_query($db, $query) or die('Error querying database.');

$query = "SELECT * FROM cart_item";
mysqli_query($db, $query) or die('Error querying database.');

$query = "SELECT * FROM cart";
mysqli_query($db, $query) or die('Error querying database.');

$query = "SELECT * FROM user";
mysqli_query($db, $query) or die('Error querying database.');

$query = "SELECT * FROM order";
mysqli_query($db, $query) or die('Error querying database.');

//Step3
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

while ($row = mysqli_fetch_array($result)) {
 echo $row['first_name'] . ' ' . $row['last_name'] . ': ' . $row['email'] . ' ' . $row['city'] .'<br />';
}
//Step 4
mysqli_close($db);
?>

</body>
</html>
