<?php
include($_SERVER['DOCUMENT_ROOT'] . "/php/_inc/db_connect.php");
?>
<!-- グラフの色を決めるための配列を組む -->
<?php
$sql = "SELECT* FROM study_contents";
$stmt = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC); ?>
<!-- 時間を定義するための配列を組む -->
<?php
$sql2 = "SELECT* FROM study WHERE study.study_contents_id = 1 AND study.study_date = '2021-10-12'";
$stmt2 = $db->query($sql2)->fetchAll(PDO::FETCH_ASSOC);
$sql3 = "SELECT* FROM study WHERE study.study_contents_id = 2 AND study.study_date = '2021-10-12'";
$stmt3 = $db->query($sql3)->fetchAll(PDO::FETCH_ASSOC);
$sql4 = "SELECT* FROM study WHERE study.study_contents_id = 3 AND study.study_date = '2021-10-12'";
$stmt4 = $db->query($sql4)->fetchAll(PDO::FETCH_ASSOC); ?>

<!-- 学習言語 -->
<!-- 10.12のデータを表示させる -->
var ctx = document.getElementById("myDoughnutChart");
var myDoughnutChart= new Chart(ctx, {
type: 'doughnut',
data: {
datasets: [{
backgroundColor: [
<?php foreach ($stmt as $content) : ?>
  "<?php echo $content['color']; ?>",
<?php endforeach; ?>
],
data:[
<?php echo ($stmt2[0]["learning_time"]); ?>/<?php echo ($stmt2[0]["study_contents_number"]); ?>,
<?php echo ($stmt3[0]["learning_time"]); ?>/<?php echo ($stmt3[0]["study_contents_number"]); ?>,
<?php echo ($stmt4[0]["learning_time"]); ?>/<?php echo ($stmt4[0]["study_contents_number"]); ?>
]
<!-- data: [7, 3.2, 5] //グラフのデータ -->
}]
},
options: {
title: {
display: true,
//グラフタイトル
text: '学習言語'
}
}
});


<!-- 学習コンテンツ -->
<!-- 10.12のデータを表示させる -->
var ctx = document.getElementById("myDoughnutChart__content");
var myDoughnutChart= new Chart(ctx, {
type: 'doughnut',
data: {
datasets: [{
backgroundColor: [
<?php foreach ($stmt as $content) : ?>
  "<?php echo $content['color']; ?>",
<?php endforeach; ?>
],
data:[
<?php echo ($stmt2[0]["learning_time"]); ?>/<?php echo ($stmt2[0]["study_contents_number"]); ?>,
<?php echo ($stmt3[0]["learning_time"]); ?>/<?php echo ($stmt3[0]["study_contents_number"]); ?>,
<?php echo ($stmt4[0]["learning_time"]); ?>/<?php echo ($stmt4[0]["study_contents_number"]); ?>
]
<!-- data: [7, 3.2, 5] //グラフのデータ -->
}]
},
options: {
title: {
display: true,
//グラフタイトル
text: '学習コンテンツ'
}
}
});