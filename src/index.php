<?php
include($_SERVER['DOCUMENT_ROOT'] . "/php/_inc/db_connect.php");
?>

<?php include($_SERVER['DOCUMENT_ROOT'] . "/php/_inc/components/organisms/header.php");?>

<main>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/php/_inc/components/organisms/learning__time.php");?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/php/_inc/components/organisms/learning__graph.php");?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/php/_inc/components/organisms/learning__chart.php");?>
</main>




  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="./js/index.js"></script>
</body>

</html>
