<?php
//connection to the database
$con = mysql_connect("localhost","root","") or die("<h2 align='center'>can not connect to local host server</h2><br /><h3 align='center'>contact the Admin for some help on kenny2brian@gmail.com</h3>");
mysql_select_db("slau_db",$con);

//insert the fields
$a = $_POST['id'];
$b = $_POST['s_name'];
$c = $_POST['f_name'];
$d = $_POST['o_name'];
$e = $_POST['gender'];
$f = $_POST['email'];
$g = $_POST['county'];
$h = $_POST['sub_county'];
$i = $_POST['village'];
$j = $_POST['parish'];
$k = $_POST['occupation'];
$l = $_POST['dep'];

//email address validation
if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $j))
{
echo "<center><h1>Invalid email</h1></center>";
}
else
{
echo "<center><h1>Valid Email</h1></center>";
}


//insert the fields into the table in the database
$sql = "INSERT into guardian_tb(id,s_name,f_name,o_name,gender,email,county,sub_county,village,parish,occupation,dep) values('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";
$result = mysql_query($sql);
if($result)
{
	echo "Successfully added to the database";
}
else
{
	echo "Oooooops!!!!!!!!!!!!!!!! an ERROR OCCURED";
}
 
?>