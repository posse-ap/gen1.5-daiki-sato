<!-- TODO:- 学習言語別に学習時間を計算しDBから取得し、学習言語のグラフを表示できましたか？ -->
<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/_inc/db_connect.php");

// questions
// if (isset($_GET['id'])) {
// $id = $_GET['id'];
//   $questions_value =  "SELECT * FROM questions WHERE id = $id";
//   $questions = $db->query($questions_value)->fetchAll(PDO::FETCH_ASSOC | PDO::FETCH_UNIQUE);
// // }


$detailed_information_value = "SELECT sum(learning_time) FROM study INNER JOIN study_language ON  study.study_language_id = study_language.id WHERE study.study_language_id = 1";
$detailed_information = $db->query($detailed_information_value)->fetchAll();


// if (!isset($hoge['fuga'])) {
//   if (!is_array($hoge)) {
//     $hoge = array();
//   }
//   $hoge['fuga'] = 'piyo';
//   var_dump($hoge);
// }
// echo$detailed_information);

foreach ($detailed_information as $information) {

  echo "javascript"; echo  $information["sum(learning_time)"];
}

// foreach ($detailed_information as $information) {
//   echo ($information['learning_time']);
// }


// foreach ($corrects as $correct) {
//   echo ($correct['name']);
// } 

// choices
// if (isset($_GET['id'])) {
//   $id = $_GET['id'];
// $choices_value =  "SELECT * FROM choices WHERE question_id = $id";
// $choices = $db->query($choices_value)->fetchAll(PDO::FETCH_ASSOC | PDO::FETCH_UNIQUE);

// $choices_corrects =  "SELECT * FROM choices WHERE question_id = $id AND valid = 1";
// $corrects = $db->query($choices_corrects)->fetchAll(PDO::FETCH_ASSOC | PDO::FETCH_UNIQUE);
// }
?>



<section class="learning__graph">
  <div class="learning__graph__contents">
    <div class="learning__graph__content">

    </div>
    <div class="learning__graph__content">

    </div>

  </div>

</section>