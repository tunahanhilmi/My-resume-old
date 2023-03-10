<?php
try {
  $db=new PDO("mysql:host=localhost; dbname=myresume; charset=utf8",'root','inside4547');
  //echo 'bağlantı başarılı!!';
} 
catch (PDOException $e) {
  echo 'bağlantı başarısız';
}
?>

