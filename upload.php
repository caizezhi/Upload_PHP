<?
echo "Name: ".$_FILES['userfile']['name']."</br>";
echo "Value: ".$_FILES['userfile']['size']."</br>";
$file_destination = "/home/pi/Desktop/HTML/www/Upload/".$_FILES['userfile']['name'];
@copy($_FILES['userfile']['tmp_name'],$file_destination);
?>
