<?php
$text=$_POST['text'];
$style=$_POST['style'];
$connection=mysqli_connect('localhost','id12993232_handbook','handbook','id12993232_2108');
if(!connection)
echo "failed";
$insert="INSERT INTO googleFonts SET text='$text',style='$style'";
$connection->query($insert);
 echo "Success" ;
?>



    


