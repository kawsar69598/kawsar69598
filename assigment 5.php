<!dohtmlctype >
<head>
      <title>
    calculator(9th class)
</title>
</head>
<?php
$a = array(array(1,2,3),array(4,5,6),array(7,8,9));
$b = array(array(7,8,9),array(4,5,6),array(1,2,3));
$m=count($a);
$n=count($a[2]);
$p=count($b);
$q=count($b[2]);
echo "the first matrix :"."<br/>";
for ($row = 0; $row < $m; $row++) {
for ($col = 0; $col < $n; $col++)
echo " ".$a[$row][$col];
echo "<br/>";
}
echo "the second matrix :"."<br/>";
for ($row = 0; $row < $p; $row++) {
for ($col = 0; $col < $q; $col++)
echo " ".$b[$row][$col];
echo "<br/>";
}
echo "the transpose for the first matrix is:"."<br/>";
for ($row = 0; $row < $m; $row++) {
for ($col = 0; $col < $n; $col++)
echo " ".$a[$col][$row];
echo "<br/>";
}
echo "the addition of matrices is:"."<br/>";
for ($row = 0; $row < 3; $row++) {
for ($col = 0; $col < 3; $col++)
echo " ".$a[$row][$col]+$b[$row][$col]." ";
echo "<br/>";
}
echo " The multiplication of matrices: <br/>";
$result=array();
for ($i=0; $i < $m; $i++) {
for($j=0; $j < $q; $j++){
$result[$i][$j] = 0;
for($k=0; $k < $n; $k++)
$result[$i][$j] += $a[$i][$k] * $b[$k][$j];
}
}
for ($row = 0; $row < $m; $row++) {
for ($col = 0; $col < $q; $col++){
echo " ".$result[$row][$col];
}
echo "<br/>";
}
?>
// $first_num=$_post["first_num"];
 //$scound_num=$_post["scound_num"]; 
 //$result_num=$_post["result_num"];
//echo $first_name;
?>
     <body>
    <h1>lets build a calculator</h1>
<form method="post">
    <label>
first class 
</label>
<input type="number" name="first_num">
<input type="number" name="first_num">
<label>
    scound class
</label>
<input type="number"name="scound_num">
<input type="number"name="scound_num">

    result 
    </label>
    <input type="number"name="result_num">
    <input type="number"name="result_num">
    <input type="number"name="result_num">
    <input type="number"name="result_num">
<label>
    number
</label>

<input type="number" value= "add">
<input type="number" value= "add">
<input type="number" value= "add">
<input type="number" value= "add">
<input type="number" value= "add">
<input type="number" value= "add">
<input type="number" value= "add">
<input type="number" value= "add">
<label>
    submit
</label>
<input type="number" value= "sub">
<input type="number" value= "sub">
<input type="number" value= "sub">
<label>
<input type="number" value= "sum">
<input type="submit" value= "multi">
<input type="submit" value= "divition">


</form>


</body>
<html>
 <head>
 <sthyle>
, 
 </style>
</head>

<body>
 <form method="post" >
  <table>
  <caption><h2> CALCULATOR </h2></caption>
  <tr>
   <td>First Number:</td><td><input type="text" name="num1" /></td>
   <td rowspan="2"><button type="submit" name="submit" value="calculate">Calculate</td></tr>
  <tr>
   <td>Second Number:</td><td><input type="text" name="num2"/></td>
  </tr>
 </form>
 
 <?php
 if(isset($_POST['submit'])) // it checks if the input submit is filled
 {
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2']; 
  if(is_numeric($num1) and is_numeric($num2) )
  {
   echo "<tr><td> Addition :</td><td><p>".($num1+$num2)."</p></td>"; 
   echo "<tr><td> Subtraction :</td><td><p> ".($num1-$num2)."</p></td>"; 
   echo "<tr><td> Multiplication :</td><td><p>".($num1*$num2)."</p></td>"; 
   echo "<tr><td>Division :</td><td><p> ".($num1/$num2)."</p></td>";
   echo "</table>";
  }
  else
  {
   echo"<script> alert(' ENTER VALID NUMBER');</script>";
  }
 }
 ?>
</body>
</html>
