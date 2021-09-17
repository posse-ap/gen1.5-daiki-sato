<?php 

include($_SERVER['DOCUMENT_ROOT'] . "/php/_inc/db_connect.php");

// 今日の日付のデータを取得


// $todeay_study_value = "SELECT date_format(["study_date"],'%Y%m%d'),count(["learning_time"]) FROM study GROUP BY date_format(["study_date"],'%Y%m%d')";





// $today_studies = $db->query($toeday_study_value)->fetch();



// SELECT date_format(["study_date"],'%Y%m%d'),count(["learning_time"]) FROM ["study"] GROUP BY date_format(["study_date"],'%Y%m%d');




?>

<section class="learning__chart">
<!-- <div id="chart_div" style="width:100%"></div> -->



<div id="gct_sample_column" style="width:80%; height:250pt" ></div>
</section>