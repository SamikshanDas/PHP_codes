<?php
/*The include and require statements are identical, except upon failure:
require will produce a fatal error (E_COMPILE_ERROR) and stop the script
include will only produce a warning (E_WARNING) and the script will continue
require('my2ndday.php');

The require_once statement is identical to require except PHP will check if the
file has already been included, and if so, not include (require) it again.

The include_once statement includes and evaluates the specified file during the 
execution of the script. This is a behavior similar to the include statement,
with the only difference being that if the code from a file has already been
included, it will not be included again.include_once may be used in cases where
the same file might be included and evaluated more than once during a particular
execution of a script, so in this case it may help avoid problems such as function
redefinitions, variable value reassignments, etc. */


$str="we will check if a substring is present in this string or not.'present' is now typed several times to use substr_replace func to replace 'present' with 'replaced'.";
echo$str.'<br>';
if(preg_match('/is present/', $str)){//checks if 'is present' exists in $str.
  echo"Found<br>";
}
else{
  echo"Not Found<br>";
}
$string='string';
function find($str,$string,$offset){//this is a function to return all the positions where $string is found in $str.
  if(strpos($str,$string,$offset)){
    $pos=strpos($str,$string,$offset);//this returns the position of the first occurence of $string in $str and starts searching from position $offset.3rd argument is optional.
    echo"found at position $pos<br>";
    return find($str,$string,$pos+strlen($string));
  }
}
find($str,$string,0);

/*-------------substring replace---------*/
$replace_with="replaced";
$replace="present";
$offset=0;
while(strpos($str,$replace,$offset)){
  $pos=strpos($str,$replace,$offset);
  echo$pos.'<br>';
  $offset=$pos+strlen($replace);
  $str=substr_replace($str,$replace_with,$pos,strlen($replace));
  $offset=$pos+strlen($replace);
}
echo$str.'<br>';


$string="I am Samikshan Das, 22 years old";
echo"$string<br>";
$find=array('Samikshan Das','22');
$replace=array('Madan Mitra','53');
$ns=str_replace($find,$replace,$string);//replaces the strings in array $find with strings of array $replace
echo$ns.'<br>';


/*strrpos() - Finds the position of the last occurrence of a string inside another string (case-sensitive)
stripos() - Finds the position of the first occurrence of a string inside another string (case-insensitive)

The str_replacefunction is a case-sensitive which means that it replaces the string that exactly matches the
string exactly. it means that if you call the function to replace the string “MFS” with “abc”, the function
would not replace strings which consist of “mFS”,”mfs”,”MfS” because it wouldn’t consider them a complete match.
However, the str_ireplace function php is not sensitive-rule and will treat “MFS”,”mfs”,”MfS” ….. all combination
as a single match. Please not that this fuction is available in PHP 5 only.*/

?>


/*Both GET and POST create an array (e.g. array( key1 => value1, key2 => value2, key3 => value3, ...)). This array holds
key/value pairs, where keys are the names of the form controls and values are the input data from the user.
Both GET and POST are treated as $_GET and $_POST. These are superglobals, which means that they are always accessible,
regardless of scope - and you can access them from any function, class or file without having to do anything special.

$_GET is an array of variables passed to the current script via the URL parameters.
$_POST is an array of variables passed to the current script via the HTTP POST method.

The <textarea> tag defines a multi-line text input control.The size of a text area is
specified by the <cols> and <rows> attributes.
The name attribute is needed to reference the form data after the form is submitted
(if you omit the name attribute, no data from the text area will be submitted).
The id attribute is needed to associate the text area with a label.

The <label> tag defines a label for several <input type="...."> elements.The for attribute
of <label> must be equal to the id attribute of the related element to bind them together.*/


/*---------------html form----------------*/

<form action="my3rdday.php" method ="POST">
<label for="testing">This is the label</label>
<textarea id="testing" name="user input" rows=4 columns=30></textarea><br>
<input type="submit" value="submit">
</form>
<?php
if(isset($_POST["userinput"]) && !empty($_POST["userinput"])){
  $str=$_POST['userinput'];
  echo"you typed: $str";
}
?>


