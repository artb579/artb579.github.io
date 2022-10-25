<?php
	
	// require_once 'include/db.php';

$db = new PDO("mysql:host=localhost;dbname=test_check","root", "");

$info = [];

if ($query = $db->query("SELECT * FROM products")) {
$info = $query->fetchall(PDO::FETCH_ASSOC);
} else {
    print_r($db->errorInfo());
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>

	<div class="container">
		<div class="inner">
			<?php foreach ($info as $data): ?>
			<div class="item">
				<img src="<?= $data['img']; ?>" alt="Burger" class="img">
				<button class="btn" id="btn1"><?= $data['name']; ?></button>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
	<div class="usercard" id="usercard"></div>
	

	<script src="https://telegram.org/js/telegram-web-app.js"></script>
	<script src="app.js"></script>
</body>
</html>

<!-- <script src="https://telegram.org/js/telegram-web-app.js"></script> -->