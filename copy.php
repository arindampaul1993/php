<?php
$a=fopen("data.txt","r");
$copy=fopen("copy.txt","w");
fwrite($copy,file_get_contents("data.txt"));
echo "contents of copied file <br><br>";
echo file_get_contents("copy.txt");
fclose($a);
fclose($copy);
?>