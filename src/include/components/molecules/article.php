<?php
$questions_value =  "SELECT * FROM questions";
$questions = $db->query($questions_value)->fetchAll(PDO::FETCH_ASSOC | PDO::FETCH_UNIQUE);

// print_r($questions);
?>

<?php function createArticle($questions){ ?>
  <?php foreach ($questions as $question) : ?>
    <article class="article">
      <h2 class="article__title"><?= $question["name"]; ?></h2>
      <p class="article__text">Lorem ipsres sed. Officiis temporibus deleniti beatae. Pariatur officia ani</p>
    </article>
  <?php endforeach; ?>
<?php } ?>