<?php
$age = array("Ukbe"=>35, "ilker"=>37, "Beko"=>43);

echo json_encode($age);
?> <br> <br>

<?php
$cars = array("Volvo", "BMW", "Toyota");

echo json_encode($cars);
?> <br><br>

<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

var_dump(json_decode($jsonobj));
?>