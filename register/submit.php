<center>
	<h1>
		Sending Data...
	</h1>
</center>

<?php

if(!empty($_POST))
{
$sname = $_POST["school_name"];
$sphone = $_POST["school_phone"];
$tname = $_POST["teacher_name"];
$tphone = $_POST["teacher_phone"];
$temail = $_POST["teacher_email"];

$p_p = $_POST["p_p"];
$p_q1 = $_POST["p_q1"];
$p_q2 = $_POST["p_q2"];
$p_q3 = $_POST["p_q3"];
$p_mm1 = $_POST["p_mm1"];
$p_mm2 = $_POST["p_mm2"];
$p_pg = $_POST["p_pg"];
$p_c1 = $_POST["p_c1"];
$p_c2 = $_POST["p_c2"];
$p_g = $_POST["p_g"];

$con = new mysqli('localhost', 'root', 'usbw', 'tweek');

if($con->connect_error)
	die('Could Not Connect: ' . $con->connect_errno . ' : ' . $con->connect_error);

$query = "Insert into register (school_name,school_phone,teacher_name,teacher_phone,teacher_email,p_photoshop,p_quiz1,p_quiz2,p_quiz3,p_music1,p_music2,p_photography,p_code1,p_code2,p_gaming) values('$sname', '$sphone', '$tname', '$tphone', '$temail', '$p_p', '$p_q1', '$p_q2', '$p_q3', '$p_mm1', '$p_mm2', '$p_pg', '$p_c1', '$p_c2', '$p_g')";
$insert = $con->query($query);

if($insert)
	echo "Done!! Total Entries are {$con->insert_id}</br>";
else
{
	die("ERROR {$con->errno} : {$con->error}");
	echo "<br>Please Report this error</br>";
}
	
$con->close();
}
else
	die("NO data")

?>

Any Problem or Error Report it <a href="http://localhost#contact">Here</a>