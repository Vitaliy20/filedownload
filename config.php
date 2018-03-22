<?php
 //require_once ("connect.php");
//$link = mysqli_connect($host, $user, $db, $password) or die(mysqli_connect_error($link));

// в какой кодировке получать данные от клиента
//@mysqli_query('set character_set_client="utf8"');
 
// в какой кодировке получать данные от БД для вывода клиенту
//@mysqli_query('set character_set_results="utf8"');
 
// кодировка в которой будут посылаться служебные команды для сервера
//@mysqli_query('set collation_connection="utf8_general_ci"');
 

?>
<html>
<center> 
<form action="<?=$_SERVER['PHP_SELF']?>" enctype="multipart/form-data" method="post" >
	File: <input type="file" name="file"><br>
 <input type="submit" name="submit" value="Send file">
</form>
</center>
</html>
<?php

$files_dir = 'files/';
if(isset($_FILES["file"])){ 
    if(is_uploaded_file($_FILES["file"]["tmp_name"])){
        move_uploaded_file($_FILES["file"]["tmp_name"], $files_dir.$_FILES["file"]["name"]);
        
        // Тут выводим ссылку
        
        $url = $files_dir.$_FILES["file"]["name"];
        
        echo '<a href="'.$url.'">Your link</a>'."\n";
    }
    else{
        echo "Ошибка загрузки файла";
    }
}

// print_r($_FILES);
// $link = mysqli_query("INSERT INTO 'info' ('id', 'file') VALUES (NULL, '$url')");

// $result = mysqli_query($link);
// echo mysqli_error();
?>

<h3><strong><em>Uploaded files</em></strong></h3>
<form action="<?=$files_dir?>" method="post" name="form">

<tr>
<td><input name="link" type="text" value="<?php echo $_FILES["file"]["name"];?>" size="50" maxlength="100" /></td>
  </tr>
<p>
  <input type="submit" name="create" value="Edit" />
</p>
 
 
</form>