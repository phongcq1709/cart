<?php 
session_start();
$cart = isset($_SESSION['CART']) == true ? $_SESSION['CART'] : [];
$totalPrice = 0;
 ?>
 <table border="1">
 	<thead>
 		<tr>
 			<th>ID</th>
 			<th>Ten SP</th>
 			<th>Anh SP</th>
 			<th>So luong</th>
 			<th>Gia/1sp</th>
 			<th>Gia mua</th>
 			<th><a href="remove-cart.php"> Xóa</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php foreach ($cart as $item): ?>
 			<tr>
 				<td><?= $item['id'] ?></td>
 				<td><?= $item['name'] ?></td>
 				<td>
 					<img src="img/sanphamnoibat/<?= $item['images'] ?>" width="100">
 				</td>
 				<td><?= $item['quantity'] ?></td>
 				<td><?= $item['price'] ?></td>
 				<td><?= $item['price']*$item['quantity'] ?></td>
 			</tr>
 			<?php 
 				$totalPrice += $item['price']*$item['quantity'];
 			 ?>
 		<?php endforeach ?>
 		<tr>
 			<td colspan="5">Tong so tien</td>
 			<td><?= $totalPrice ?></td>
 		</tr>
 	</tbody>
 </table>
 