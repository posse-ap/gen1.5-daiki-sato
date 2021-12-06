<?php
include($_SERVER['DOCUMENT_ROOT'] . "/_inc/db_connect.php");

$study_date = $_POST['study_date'];
$learning_time = $_POST['learning_time'];


switch ($_POST['study_content_id']) {
    case 'N予備校':
        $joinAbstentionId_data = 1;
        break;
        $joinAbstentionId_data = 2;
        break;
    case 'POSSE課題':
        $joinAbstentionId_data = 3;
        break;
    default:
        echo "何した？";
        break;
}

if(!empty($_POST)) {
    $date = $_POST['study_date'];
    $contents = $_POST['study_contents_id'];
    $languages = $_POST['language'];
    $study_hour = $_POST['study_hour'];
    
    $stmt = $db->prepare('INSERT INTO study_hours_posts SET user_id=?, total_hour=?, study_date=?');
    $stmt->execute(array(
      $_SESSION['user_id'],
      $study_hour,
      $date
    ));
};