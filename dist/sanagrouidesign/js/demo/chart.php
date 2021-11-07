<?php
$pdo = new PDO('mysql:host=localhost;dbname=sanagro01;port=3306;charset=utf8;','root','');

$sql = "select name, production
from harvest a, crop b
where a.id_crop=b.id_crop and a.id='2'";

$statement = $pdo->prepare($sql);
$statement->execute();

while($results = $statement->fetch(PDO::FETCH_ASSOC)){
    $result[] = $results;

}
echo json_encode($result);
?>