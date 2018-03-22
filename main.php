
<!-- <?php 

require_once("config.php");
require_once("core.php");
	
	$files_dir = 'files/';
 
if(isset($_FILES["file"]))
{ 
    if( is_uploaded_file( $_FILES["file"]["tmp_name"] ) )
    {
        move_uploaded_file( $_FILES["file"]["tmp_name"], $files_dir.$_FILES["file"]["name"] );
        
        // Тут выводим ссылку
        $url = $files_dir.$_FILES["file"]["name"];
    }
}
 
$sSQL=mysql_query("INSERT INTO 'info' ('id', 'file') VALUES (NULL, '$url')");
$result=mysql_query($sSQL);
echo mysql_error();

?>  -->