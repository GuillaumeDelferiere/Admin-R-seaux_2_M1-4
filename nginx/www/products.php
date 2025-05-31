<html>
<style>
   table,
   th,
   td {
     padding: 10px;
     border: 1px solid black;
     border-collapse: collapse;
  }
</style>

<head>
  <title>Catalogue WoodyToys</title>
</head>

<body>
<h1>Catalogue WoodyToys</h1>

<?php
$dbname = getenv('MARIADB_DATABASE');
$dbuser = getenv('MARIADB_USER');
$dbpass = getenv('MARIADB_PASSWORD');
$dbhost = getenv('MARIADB_HOST');

$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

$result = mysqli_query($connect, "SELECT id, product_name, product_price FROM products");

if (!$result) {
    die("Error in query: " . mysqli_error($connect));
}
?>

<table>
<tr>
 <th>Numéro de produit</th>
 <th>Descriptif</th>
 <th>Prix</th>
</tr>

<?php
while ($row = mysqli_fetch_array($result)) {
  echo "<tr><td>{$row['id']}</td> <td>{$row['product_name']}</td> <td>{$row['product_price']}</td></tr>";
}
?>

</table>
</body>
</html>

