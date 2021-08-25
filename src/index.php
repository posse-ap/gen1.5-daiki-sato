<?php
$dsn = 'mysql:host=db;dbname=ph2_quizy;charset=utf8mb4;';
$user = 'daiki';
$password = 'pass';

try {
  $db = new PDO($dsn, $user, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo '接続失敗: ' . $e->getMessage();
  exit();
}

$sql_questions = 
'SELECT * 
FROM questions';
$questions = $db->query($sql_questions)->fetchAll(PDO::FETCH_ASSOC|PDO::FETCH_UNIQUE);

print_r($questions);

// SELECT * FROM article JOIN main_text ON article.text_id = main_text.id;
