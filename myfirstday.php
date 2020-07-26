<?php
//ini_set('error_reporting', 0);
$name='Samikshan';
$age= 22;
$str=' what\'s';
$str .="up?";
echo "hello $name! you are $age years old <br> ";
echo " $str <br>"  ;


$counter=6;
do{
  echo "$counter<br>" ;  //this two syntax inside the loop will execute once even if the while condition is not satisfied.
  $counter++;             //in this kind of scenario we use do-while loop.
}while($counter<5);
echo "the counter value is $counter now.<br>";


for($i=0;$i<5;$i++){
  echo"$i<br>";//this syntax will execute only if the condition is satisfied.
}
echo"the counter value is $i now.<br>";


$str="this is a string & is for testing.";
$word_count=str_word_count($str); //prints number of words in the string
echo "$str<br>";
echo "number of words: $word_count<br>";

$arr=str_word_count($str,1);//this will produce an array where key will be the word index.
echo "$arr<br>";   //this will print 'Array' as $arr is an Array now.
print_r($arr);//this will print the array index and corresponding values.

$arr2=str_word_count($str,2);//this will produce an array where key will be the word position in the string.
echo "<br>$arr2<br>";
print_r($arr2);//this will print the word position as array index and corresponding values.

$arr3=str_word_count($str,1,'&.'); // if we want to consider the '&' and '.' as words or with words.
echo "<br>$arr3<br>";
print_r($arr3);
echo"<br>";

$shuffle=str_shuffle($str);// this will shuffle the characters including white spaces of the string.
echo"$shuffle<br>";

echo substr(str_shuffle($str), 0, 5);// this will generate substring from the shuffled string with starting index=0 and lenght=5.

echo strlen($str) ;     //length of the string.

$reversed=strrev($str);// reverse string.
echo"<br>$reversed";

$str1="This is another string and it's also for testing.";
similar_text($str, $str1, $result); //compares to strings and returns the similarity percentage.
echo "<br>similarity:$result";


$string="   We need to omit this white spaces from both side.   ";
echo "<br>$string";
$trimmed= trim($string);//omits the white spaces from both side.to omit white space of left and right side we'll use 'ltrim()' and 'rtrim()' simultaniously.
echo "<br>$trimmed<br>";


$string=" this is a <img src = 'image.jpg'> string";
echo "<br>$string<br>";
echo htmlentities($string);//Convert all applicable characters to HTML entities. all characters which have HTML character entity equivalents are translated into these entities.
$addslash= htmlentities(addslashes($string));//The addslashes() function returns a string with backslashes in front of predefined characters.
echo "<br>";                                 //the predefined charecters are single quote ('),double quote ("),backslash (\),NULL
echo $addslash;
$stripslash=stripslashes($addslash);
echo "<br>$stripslash";


?>