<?php
$connection=mysqli_connect('localhost','id12993232_handbook','handbook','id12993232_2108');
$fetch = "SELECT * FROM googleFonts WHERE Id = (SELECT MAX(Id) FROM googleFonts)";
$res=$connection->query($fetch);
$row = mysqli_fetch_array($res);
   echo json_encode($row);
?>