<?php
$name=$_POST["name"];
$pass=$_POST["password"]
?>
<?php
$file=fopen("form-save.txt", "a");
    fwrite($file,"name :");
    fwrite($file, $name ."\n");
    fwrite($file,"password :");
    fwrite($file, $password ."\n");
    fclose($file);
 ?>
