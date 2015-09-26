<?php
//my work Magemule Brian
//connection to the databse
$con = mysql_connect("localhost", "root", "")or die("<h1 align='center'>Sorry You cannot connect to the Server</br></h1><h2 align='center'>Contact Server Admin--info@slau.ac.ug</h2>");
mysql_select_db("slau_db", $con)or die("<h1 align='center'>Cannot connect to mysql Database</h1>");
//get my values
$a = $_POST['id'];
$b = $_POST['stud_name'];
$c = $_POST['index_no'];
$d = $_POST['sch'];
$e = $_POST['gender'];
$f = $_POST['nation'];
$g = $_POST['yos'];
$h = $_POST['relig'];
$i = $_POST['tribe'];

//inserting into my table
$sql = "insert into o_level_tb(id,stud_name,index_no,sch,gender,nation,yos,relig,tribe) values('$a','$b', '$c', '$d','$e', '$f','$g','$h','$i')";
$result = mysql_query($sql) or die("<h1 align='center'><font color='red'>cannot get to the expected result</font></h1><br />.........<h2 align='center'>so contact the Admin on +256752204193</h2>");
if($result)
{

echo "Successful <a href='o_level.php'>Submit Again</a>";
}
else
{

echo "Error...Try Again ";
}

?>


