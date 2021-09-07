<?php
$dsn = 'mysql:host=db;dbname=ph2_webapp;charset=utf8mb4;';
$user = 'daiki';
$password = 'pass';

try {
  $db = new PDO($dsn, $user, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo '接続失敗: ' . $e->getMessage();
  exit();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WEB APP</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>


  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="./js/index.js"></script>
</body>

</html>
