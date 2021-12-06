<?php 
    include($_SERVER['DOCUMENT_ROOT'] . "/php/_inc/db_connect.php");
    
    header('Content-Type: application/json; charset=utf-8');
    
    $stmt = $db->prepare("SELECT id,learning_time , study_date FROM study WHERE DATE_FORMAT(study_date, '%Y%m') = DATE_FORMAT(NOW(), '%Y%m')");
    $stmt->execute(array($stmt));

    foreach($stmt->fetchAll() as $index => $pie_languages_data) {
    $pie_languages[$pie_languages_data['id']] = round((double)$pie_languages_data);
    }

    echo json_encode($pie_languages);