<?php
$days = array();
$days[0] = date('Y-m-d');

$data = array();
$data2 = array();

array_push($data, array("Dag", "Aantal"));

// array_push($data, array("2022-05-01", "1"));

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
    // array_push($data, array($days[$i], $count_account_created)); 
}

echo '<pre>';
print_r($data) ;
echo '</pre>';


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

<<<<<<< HEAD
// echo '<pre>';
// print_r($data2);
// echo '</pre>';

$sql = "SELECT DISTINCT file_type FROM files";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
        $sql = "SELECT COUNT(*) FROM files WHERE file_type = :file_type";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':file_type', $row['file_type']);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $count_style_type = $result['COUNT(*)'];
        array_push($data3, array($row['file_type'], $count_style_type)); 
    }
      
=======
>>>>>>> parent of 27d1372 (f)
// echo '<pre>';
// print_r($data2) ;
// echo '</pre>';


<<<<<<< HEAD

$sql = "SELECT DISTINCT file_type FROM files";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach ($result as $row) {
        $sql = "SELECT SUM(file_size) FROM files WHERE file_type = :file_type";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':file_type', $row['file_type']);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $count_style_type = $result['SUM(file_size)'];
        array_push($data4, array($row['file_type'], $count_style_type));
    }
      
// echo '<pre>';
// print_r($data4);
// echo '</pre>';









=======
>>>>>>> parent of 27d1372 (f)
?>


