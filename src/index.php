<?php
$dsn = 'mysql:host=db;dbname=ph2_quizy;charset=utf8mb4;';
$user = 'daiki';
$password = 'pass';

try {
  $db = new PDO($dsn, $user, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo '接続失敗: ' . $e->getMessage();
  exit();
}

// questions
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $questions_value =  "SELECT * FROM questions WHERE id = $id";
  $questions = $db->query($questions_value)->fetchAll(PDO::FETCH_ASSOC | PDO::FETCH_UNIQUE);
}
echo ($questions[$id]["name"]);

// choices
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $choices_value =  "SELECT * FROM choices WHERE question_id = $id";
  $choices = $db->query($choices_value)->fetchAll(PDO::FETCH_ASSOC | PDO::FETCH_UNIQUE);

  $choices_corrects =  "SELECT * FROM choices WHERE question_id = $id AND valid = 1";
  $corrects = $db->query($choices_corrects)->fetchAll(PDO::FETCH_ASSOC | PDO::FETCH_UNIQUE);
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>くいじー</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div class="question">
    <h1 class="question__title">
      <?php // 問題番号動的 TODO:コード汚いので後できれいにする
      foreach ($choices as $choice) {
        echo ($choice['question_id']);
        if ($choice == $choice) {
          break;
        }
      }
      ?>
      .この地名はなんて読む？
    </h1>
    <img class="question__img" src="./img/<?php echo $id ?>.png" alt="選択肢の写真">
    <ul class="question__lists">
      <?php foreach ($choices as $index => $choice) { ?>
        <li class="question__list" data-quizy="<?php if ($choice['valid'] == 1) {echo 1;}else{echo 2;}?>">
          <?php echo $choice['name']; ?>
        </li>
      <?php
      } ?>
    </ul>

    <div class="question__answer">
      <p class="question__answer__text">正解！</p>
      <p class="question__answer__text__choice">
        正解は
        <?php foreach ($corrects as $correct) {
          echo ($correct['name']); 
        }?>
        です！
      </p>
    </div>

  </div>

  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="./js/index.js"></script>
</body>

</html>
