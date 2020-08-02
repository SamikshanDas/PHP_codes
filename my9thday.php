<?php
$filename="data.txt";
if(file_exists($filename)){  //checks if a file exists
  echo"file already exists!<br>";
  $handle=fopen($filename, 'a');
  fwrite($handle,"Samikshan Das \n");
  fwrite($handle,"Pamela Chakraborty \n");
  fclose($handle);
}
else{
  $handle=fopen($filename, 'w');
  echo"file created!<br>";
  fclose($handle);
}

$rand=rand(1000,9999);
if(rename($filename,$rand.'.txt')){ // renames a file
  echo"File $filename renamed to $rand.txt!<br>";
}
else{
  echo"Renaming Erro!<br>";
}
if(unlink("$rand.txt")){// deletes a file
  echo"File $rand.txt is deleted!<br>";
}
else {
  echo"file can not be deleted!";
}









?>
