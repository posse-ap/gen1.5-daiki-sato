<?php
include("include/db_connect.php");
include("include/components/molecules/article.php");


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



  <?php createArticle($questions); ?>




  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="./js/index.js"></script>
</body>

</html>