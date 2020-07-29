<?php
ob_start();
ob_start();
$random=rand();//this function generates a random value.
echo $random.'<br>';
echo getrandmax().'<br>';//this function gives the max range or max value of the random value
$rand1_6=rand(1,6);//this generates random value from between 1-6.
echo $rand1_6.'<br>';
echo '<br><br>';

/*--------------server variables-----------------*/


$scriptName=$_SERVER['SCRIPT_NAME'];// here SCRIPT_NAME= /codes/my5thday.php
echo $scriptName.'<br>';
$hostName=$_SERVER['HTTP_HOST'];// here HTTP_HOST=localhost
echo $hostName;
$userIP=$_SERVER['REMOTE_ADDR'];//gives user's ip address
echo '<br>'.$userIP.'<br>';
echo '<br><br>';


include'htmlform.php';

if(isset($_POST['submit'])){
  header('Location: http://google.com');
  /* the header function is used before sending any output to the page.It can't modify
  the header information after sending any output or html content to the webpage.But to use it in between
  the script we use the ob_start() function at the top of the*/
}
ob_end_flush();
?>






