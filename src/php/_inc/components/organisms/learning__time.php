<?php
include($_SERVER['DOCUMENT_ROOT'] . "/php/_inc/db_connect.php");

// study
$study_value = "SELECT * FROM study DATE_FORMAT(create_date, '%Y%m') = DATE_FORMAT(NOW(), '%Y%m')";
$studies = $db->query($study_value)->fetch();
?>

<section class="learning__time">
  <div class="learning__time__items">
    <div class="learning__time__item">
      <span class="learning__time__item__text">today</span>
      <span class="learning__time__item__time">3</span>
      <span class="learning__time__item__hour">hour</span>
    </div>
    <div class="learning__time__item">
      <span class="learning__time__item__text">today</span>
      <span class="learning__time__item__time">3</span>
      <span class="learning__time__item__hour">hour</span>
    </div>
    <div class="learning__time__item">
      <span class="learning__time__item__text">today</span>
      <span class="learning__time__item__time">3</span>
      <span class="learning__time__item__hour">hour</span>
    </div>
  </div>
  <hr>
</section>