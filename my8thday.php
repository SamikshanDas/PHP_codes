<?php

$name=$_FILES['file']['name'];//for the name of the file
$size=$_FILES['file']['size'];//for the size of the file
$type=$_FILES['file']['type'];//for the type of the file

$tmp_name=$_FILES['file']['tmp_name'];//the file is at first stored in temp. location in the server.tmp_name is the temp. name of the file in server.
if(isset($name)){
  if(!empty($name)){
    $location='E:/jupyter/';//location where we want to upload the file.
    if(move_uploaded_file($tmp_name, $location.$name)){// to upload the file in specified location from temp. location with actual file name.
      echo "uploaded!";
    }
    else{
      echo"error ocurred!";
    }
  }
  else{
    echo"please select a file!<br>";
  }
}
?>



<form action='my8thday.php' method='POST' enctype='multipart/form-data'>
<input type='file' name='file'><br><br>
<input type='submit' value='submit'><br>
</form>
