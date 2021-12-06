<<<<<<< HEAD
<section class="learning__chart">
  <div class="learning__chart__items">
    <div class="learning__chart__item">

    </div>

  </div>

</section>
=======
<?php 
include($_SERVER['DOCUMENT_ROOT'] . "/php/_inc/db_connect.php");


    // 'users' テーブルのデータを取得する
    // $sql = "SELECT learning_time FROM study WHERE DATE_FORMAT(study_date, '%Y%m') = DATE_FORMAT(NOW(), '%Y%m')";
    // $stmt = $dbh->query($sql);

    // // 取得したデータを配列に格納
    // while ($row = $stmt->fetchObject())
    // {
    //     $learning_time[] = array(
    //         'learning_time'=> $row->learning_time
    //     );
    // }


    // $id =。。 $_POST['id'];
    // $learning_time = array("SELECT learning_time FROM study WHERE DATE_FORMAT(study_date, '%Y%m') = DATE_FORMAT(NOW(), '%Y%m')");
    // // header("Content-type: application/json; charset=UTF-8");
    // echo json_encode($learning_time);
    // exit;

    // JSON形式で出力する
    // header('Content-Type: application/json');
    // echo json_encode( $learning_time );
    // exit;
?>

<section class="card time-graph-card">
    <div id="pc_columnchart_values" class="d-none d-lg-block"></div>
</section>
>>>>>>> d5cb5d5 (ブランチ移植した)
