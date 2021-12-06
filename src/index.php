<?php
include($_SERVER['DOCUMENT_ROOT'] . "/php/_inc/db_connect.php");
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/_inc/components/organisms/header.php");?>

<main>
<<<<<<< HEAD
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/php/_inc/components/organisms/learning__time.php");?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/php/_inc/components/organisms/learning__graph.php");?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/php/_inc/components/organisms/learning__chart.php");?>
</main>




  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="./js/index.js"></script>
</body>

</html>
=======
  <div class="main_contents">
    <div class='time_chart'>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/php/_inc/components/organisms/learning__time.php");?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/php/_inc/components/organisms/learning__chart.php");?>
    </div>
  
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/php/_inc/components/organisms/learning__graph.php");?>
  </div>
</main>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/php/_inc/components/molecules/modal__record.php");?>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/_inc/components/organisms/footer.php");?>
>>>>>>> d5cb5d5 (ブランチ移植した)
