<?php


$query = "SELECT * FROM villes WHERE CodePostal LIKE '33%' ORDER BY Ville";
$cn = new mysqli('localhost', 'root', '', 'stage');
$rs = mysqli_query($cn, $query);
$data = array();
while($row = $rs->fetch_array(MYSQLI_ASSOC)) {
    $data[] = $row;
}
mysqli_close($cn);
echo json_encode($data);