<?php
$days = array();
$days[0] = date('Y-m-d');

$data = array();
$data2 = array();

array_push($data, array("Dag", "Aantal"));
array_push($data2, array("Dag", "Aantal"));

for ($i = 0; $i < 30; $i++) {
    
    $days[$i] = date('Y-m-d', strtotime('-'.$i.' days'));

    
    // get count of users on the day
    $sql = "SELECT COUNT(*) FROM users WHERE account_created = :account_created AND administrator_role = 'N'";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':account_created', $days[$i]);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $count_account_created = $result['COUNT(*)'];
    array_push($data, array($days[$i], $count_account_created)); 
}

// echo '<pre>';
// print_r($data) ;
// echo '</pre>';


// echo '<br><br>';


for ($i = 0; $i < 30; $i++) {


    $days[$i] = date('Y-m-d', strtotime('-'.$i.' days'));
    $sql = "SELECT COUNT(*) FROM files WHERE file_upload_date = :file_upload_date";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':file_upload_date', $days[$i]);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $count_files = $result['COUNT(*)'];
    
    array_push($data2, array($days[$i], $count_files));   

}

// echo '<pre>';
// print_r($data2) ;
// echo '</pre>';


?>


