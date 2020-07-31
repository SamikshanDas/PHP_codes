<?php
if(isset($_POST['name'],$_POST['password'])){
  $name=htmlentities($_POST['name']);
  $password=htmlentities($_POST['password']);
  //$createfile=fopen('data.txt', 'w');
  if(!empty($_POST['name']) && !empty($_POST['password'])){
    $appendfile=fopen('data.txt', 'a');
    fwrite($appendfile,$name." ");
    fwrite($appendfile,$password."\n");
    fclose($appendfile);
  }
  else{
    echo"fill up all the fields*";
  }
  $file=file('data.txt');
  echo "/Registerd Users/<br>";
  foreach($file as $data){//this will read the data by 1 line in each iteration of the loop
    $userdata=explode(' ', trim($data)); //Returns an array of strings created by splitting the string parameter .
    $i=0;
    while($userdata[$i] != end($userdata)){
      echo $userdata[$i].' ';
      $i++;
      }
      echo'<br>';
    }
}
?>

<form action="my7thday.php" method='POST'>
Enter Name:
<input type="text" name="name"><br>
Password:
<input type="password" name="password"><br>
<input type="submit" name="submit">
</form>

<?php
//another way to read file//
$readfile=fopen("data.txt", 'r');
$reading=fread($readfile, filesize("data.txt"));//the secod parameter of this function requiers the size of the data portion to read in bytes.
echo $reading.'<br>'; // this will print the datas of whole file.Each line of the file is separated by white spaces is the web page.
fclose($readfile);
?>

<?php
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr);//Join array elements with a string
echo'<br>';
?>
<?php 
$directory="My6thDay";
if($handle=opendir($directory)){ //The opendir() function opens a directory handle.
  echo'looking inside \''.$directory.'\':<br>';
  while($file = readdir($handle)){
    //The readdir() function returns the name of the next entry in a directory.
    if($file!='.' && $file!='..'){
      echo'<a href="'.$directory.'/'.$file.'">'.$file.'</a><br>';//it will show the the file name as link.
  }
 }
}

?>






















