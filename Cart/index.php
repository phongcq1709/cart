<?php 
session_start();
require_once 'products.php';

$totalItemInCart = 0;
if(isset($_SESSION['CART'])
	&& count($_SESSION['CART'])>0){
	$cart = $_SESSION['CART'];
foreach ($cart as $pro) {
	$totalItemInCart += $pro['quantity'];
}
}


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	.item{
		display: inline-block;
		width: 49%;
		border: 1px solid #ccc;
	}
</style>
</head>
<body>
	<h1>
		<a href="detail-cart.php">Tổng số sản phẩm trong giỏ: <?= $totalItemInCart ?></a>
	</h1>
	<?php 
	include 'db.php';
	$sql="select *from product";
	$kq=$conn->query($sql);
	?>
	<?php foreach ($kq	 as $i => $row): ?>
		<div class="item">
			<h2><?php echo $row['name'] ?></h2>
			 <img width="200px" src="img/sanphamnoibat/<?php echo $row['images'] ?>"> 
			<div>
				Giá: <b><?php echo $row['price'] ?></b>
				<br>
				<a href="save-cart.php?id=<?php echo $row['id'] ?>">Add to Cart</a>
			</div>
		</div>
	<?php endforeach ?>
</body>
</html>