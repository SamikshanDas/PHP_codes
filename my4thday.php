<?php
/*The time() function returns the current time in the number of seconds since the Unix Epoch (January 1 1970 00:00:00 GMT).
The date() function formats a local date and time, and returns the formatted date string.
d - The day of the month (from 01 to 31) ,  D - A textual representation of a day (three letters)
m - A numeric representation of a month (from 01 to 12) ,  M - A short textual representation of a month (three letters)
Y - A four digit representation of a year   ,   y - A two digit representation of a year
h - 12-hour format of an hour (01 to 12)  ,  H - 24-hour format of an hour (00 to 23)
i - Minutes with leading zeros (00 to 59)
s - Seconds, with leading zeros (00 to 59)
*/

$time=time();
$timenow=date('h,i,s', $time);;
$date=date('D,M,Y', $time);
echo"<strong>Date:</strong>$date<br><Strong>Time:</strong>$timenow<br><br>";
?>



<form action="my4thday.php" method="POST">
<label for="text">Input Text</label><br>
<textarea id="text" name="text" row="3" column="10"></textarea><br>
<label for="search">Words to Replace</label><br>
<input type="text" id="search" name="search"><br>
<label for="replace">Replace with</label><br>
<input type="text" id="replace" name="replace"><br><br>
<input type="submit" value="Search and Replace"><br>
</form>I


<?php

/* ISSET checks the variable to see if it has been set. In other words, it checks to see if the variable is any
value except NULL or not assigned a value. ISSET returns TRUE if the variable exists and has a value other than NULL.
That means variables assigned as "", 0, "0", or FALSE are set, and therefore are TRUE for ISSET.

EMPTY checks to see if a variable is empty. Empty is interpreted as: "" (an empty string), 0 (integer), 0.0 (float)`.


*/


if(!empty($_POST['text']) && !empty($_POST['search']) && !empty($_POST['replace'])){
  if(isset($_POST["text"],$_POST["search"],$_POST['replace'])){
    $text=$_POST['text'];
    $search=$_POST['search'];
    $replace=$_POST['replace'];
    $search=str_word_count($search, 1);
    $replace=str_word_count($replace, 1);
    $text=str_ireplace($search,$replace,$text);
    echo"<br><br><strong>Result:</strong>$text";
  }
}
else{
  echo"<br><br>Please fill up all the required datas...";
}




?>

