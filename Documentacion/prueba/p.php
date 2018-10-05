
<?php 
echo "prueba desde terminal";
$con = new mysqli("localhost","root","ddcv039633","panneton");
if ($con->connect_error) {
    die("andale ..... Connection failed: " . $con->connect_error);
}
$query = $con->query("SELECT COUNT(*) as count  FROM FrasesCelebres");
var_dump($query);
$row = $query->fetch_object();
var_dump($row);
echo $row->count;

$query = $con->query("SELECT * FROM FrasesCelebres LIMIT 1 OFFSET 10");
$row = mysqli_fetch_assoc($query);
var_dump($row);
$resultSet[] = $row;
var_dump($resultSet);
echo json_encode($resultSet[0]);
?>
