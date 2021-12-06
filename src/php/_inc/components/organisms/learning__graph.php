<<<<<<< HEAD
<section class="learning__graph">
=======
<?php 
      include($_SERVER['DOCUMENT_ROOT'] . "/php/_inc/db_connect.php");

      $study_contents_sql = "SELECT* FROM study_contents";
      $study_contents_stmt = $db->query($study_contents_sql)->fetchAll(PDO::FETCH_ASSOC); 

      $study_language_sql = "SELECT* FROM study_language";
      $study_languages_stmt = $db->query($study_language_sql)->fetchAll(PDO::FETCH_ASSOC); 

?>

<section class="learning__graph">
  <div class="learning__graph__contents">
    <div class="learning__graph__content">
      <!-- 学習言語グラフ表示 -->
      <canvas id="myDoughnutChart__content"></canvas>

      <!-- 学習言語項目表示 -->
      <?php foreach ($study_contents_stmt as $content) : ?>
        <span class="circle" style="background-color: <?php echo $content['color']; ?>"></span>
        <span class='content_name' style=" list-style-type: none"><?php echo $content['name'] ?></span>
      <?php endforeach; ?>
    </div>
    
    
    <div class="learning__graph__content">
      <!-- 学習コンテンツグラフ表示 -->
      <canvas id="myDoughnutChart"></canvas>
  
      <!-- 学習コンテンツ項目表示 -->
      <?php foreach ($study_languages_stmt as $language) : ?>
        <span class="circle" style="background-color: <?php echo $language['color']; ?>"></span>
        <span class='content_name' style=" list-style-type: none"><?php echo $language['name'] ?></span>
      <?php endforeach; ?>
    </div>

  </div>
>>>>>>> d5cb5d5 (ブランチ移植した)

</section>