<?php
$ip = gethostbyname($_SERVER['HOST_NAME']);//returns the ipv4 address for a given domain/host
$ip2 = gethostbyname('localhost');
$host = gethostbyaddr($_SERVER['REMOTE_ADDR']);//returns the host name for given ip address.
$host2 = gethostbyaddr('127.0.0.1');
$host3 = gethostbyaddr('192.168.1.5');
echo $ip.'<br>';
echo $ip2.'<br>';
echo $host.' (1)<br>';
echo $host2.' (2)<br>';
echo $host3.' (3)<br>';
?>
<?php
echo $_SERVER['HTTP_USER_AGENT'].'<br>';
$browser = get_browser(null, true);
print_r($browser);
echo'<br>';
?>
<form action="my6thday.php" method='POST'>
<input type="text"<?php Username: ?> name="name"><br>
<input type="password" name="password"><br>
<input type="submit" name="submit">
</form>
<?php
$set_pass=htmlentities("ridersonthe<storm>");
if((isset($_POST['name'],$_POST['password'])) && !empty($_POST['name']) && !empty($_POST['password'])){
  if(isset($_POST['submit'])){
    echo'Username:'.htmlentities($_POST['name']).'<br>';
    $password=htmlentities($_POST['password']);// if it detects any html entity in the given password then
                                        //it handle that as a normal string rather than executing as an html syntax.
    if($password==$set_pass){
      echo "password matched!<br>";
    }
    else{
      echo"wrong Password!<br>";
    }
  }
}
else{
  echo"fill up all the fields";
  }
?>