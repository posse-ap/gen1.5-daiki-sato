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

// questions
if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $questions_value =  "SELECT * FROM questions WHERE id = $id";
  $questions = $db->query($questions_value)->fetchAll(PDO::FETCH_ASSOC|PDO::FETCH_UNIQUE);
}
echo($questions[$id]["name"]);

// choices
if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $choices_value =  "SELECT * FROM choices WHERE question_id = $id";
  $choices = $db->query($choices_value)->fetchAll(PDO::FETCH_ASSOC|PDO::FETCH_UNIQUE);
}


// print_r($choices);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>くいじー</title>
</head>
<body>

<h1>
  <?php // 問題番号動的 TODO:コード汚いので後できれいにする
    foreach ($choices as $choice) {
      echo($choice['question_id']);
      if($choice == $choice){
        break;
      }
    } 
  ?> 
  .この地名はなんて読む？
</h1>


<img src="./img/<?php echo $id ?>.png" alt="">

<ul>
    <?php foreach ( $choices as $choice ) { ?>
    <li><?php echo $choice['name'];?></li>
    <?php  
    }?>
</ul>

  

</body>
</html>