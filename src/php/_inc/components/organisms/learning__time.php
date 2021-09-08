<?php
include($_SERVER['DOCUMENT_ROOT'] . "/php/_inc/db_connect.php");

// 今日の日付のデータを取得
$today_study_value = "SELECT * FROM study WHERE study_date = CURDATE()";
$today_studies = $db->query($today_study_value)->fetch();

// 今月の日付のデータを取得
$this_month_study_value = "SELECT sum(learning_time) FROM study WHERE study_date between date_format(now(), '%Y-%m-01') and last_day(now())";
$this_month_studies = $db->query($this_month_study_value)->fetch();

// 全期間のデータを取得
$all_study_value = "SELECT sum(learning_time) FROM study";
$all_studies = $db->query($all_study_value)->fetch();
?>

<section class="learning__time">
  <div class="learning__time__items">
    <div class="learning__time__item">
      <span class="learning__time__item__text">Today</span>
      <span class="learning__time__item__time"><?= $today_studies['learning_time']; ?></span>
      <span class="learning__time__item__hour">hour</span>
    </div>
    <div class="learning__time__item">
      <span class="learning__time__item__text">Month</span>
      <span class="learning__time__item__time"><?= $this_month_studies["sum(learning_time)"]; ?></span>
      <span class="learning__time__item__hour">hour</span>
    </div>
    <div class="learning__time__item">
      <span class="learning__time__item__text">total</span>
      <span class="learning__time__item__time"><?= $all_studies["sum(learning_time)"]; ?></span>
      <span class="learning__time__item__hour">hour</span>
    </div>
  </div>
  <hr>
</section>