

 <?php 

echo "<hr /><hr /><hr />";


include "db.php";



$sql = "select * from product";
$stmt = $conn->prepare($sql);
$stmt->execute();

$products = $stmt->fetchAll();

 ?>

