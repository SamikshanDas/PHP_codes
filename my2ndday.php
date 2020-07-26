<?php
require'myfirstday.php';//this checks if the file myfirstday.php does exis or not,if exists the it imports the file but if not then it gives a fatal error and the rest of the code just won't run.
include'myfirstday.php';//this will import myfirstday.php code which is at the same location where the current file is.
                       //if it was in any other location, we had to write that address inside ''.
/*-------------------ARRAY-------------------*/
$val=12;
$arr=array();
for($i=0;$i<5;$i++){
  $arr[$i]=$val;
  $val+=2;
}
foreach($arr as $val){
  echo$val.'<br>';
}
print_r($arr);
echo'<br>';
echo'<br>';
echo'<br>';
/*-------------associative array--------------*/
$arr=array('name'=>'Samikshan', 'age'=>22, 'gender'=>'Male');//this is like dictionary in python.
echo"<br>";
echo $arr['name'].'<br>';
echo $arr['age'];
echo '<br>'.$arr['gender'].'<br>';
print_r($arr);
echo'<br>';
foreach($arr as $key=>$value){
  echo "$key:$value<br>";
}
echo'<br>';
echo'<br>';
echo'<br>';
/*----------------multi-D array-----------------*/
$arr=array('Employed'=>array('Prangan','Chandraja','Saswata','Ivy','Amboli'),
           'Unemployed'=>array('Samikshan','Ritendu','Remo'));
print_r($arr);
echo"<br>";
echo $arr['Employed'][2];//this will print 'Saswata'
echo"<br>";
echo $arr['Unemployed'][0].'<br>';// this will print 'Samikshan'

foreach($arr as $outer=>$inner){
  echo '<strong>'.$outer.'</strong><br>';//this will print the row values(Employed,Unemployed)
  foreach($inner as $element){
    echo $element.'<br>';  // this will print the colum values(Prangan,Chandraja,....,Samikshan,Ritendu....)
  }
}
echo'<br>';
echo'<br>';
echo'<br>';
?>