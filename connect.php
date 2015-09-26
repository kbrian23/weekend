<?php
//my work kevin janvier
//connection to the databse
$slau = mysql_connect("localhost", "root", "")or die("<h1 align='center'>Sorry You cannot connect to the Server</br></h1><h2 align='center'>Contact Server Admin--info@slau.ac.ug</h2>");
mysql_select_db("slau_db", $slau)or die("<h1 align='center'>Cannot connect to mysql Database</h1>");
//get my values
$id = $_POST['id'];
$a = $_POST['fname'];
$b = $_POST['sname'];
$c = $_POST['gender'];
$d = $_POST['nationality'];
$e = $_POST['tel'];

//inserting into my table
$sql = "insert into parent(id,fname,sname,gender,nationality,tel) values('$id','$a', '$b', '$c','$d', '$e')";
$result = mysql_query($sql);
if($result){

echo "Successful <a href='parent.php'>Register Again</a>";
}else{

echo "Error...Try Again ";
}
?>